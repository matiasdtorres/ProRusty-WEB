<?php

	/**
	 * core.php
	 * @author     Fabian Tomischka <fabian@fabito.net>
	 * @copyright  2022 Fabito Media
	 */

	date_default_timezone_set('UTC');

	$config = require __DIR__ . '/config.php';

	require __DIR__ . '/servers/app/SourceQuery/bootstrap.php';

	use xPaw\SourceQuery\SourceQuery;

	$servers = [];

	/**
	 * Returns the server information for a specific server in the configuration file, queries it information
	 * or returns information from the cache file in case it is offline or still available from cache
	 *
	 * @param array $server
	 * @param array $config
	 * @return array|mixed
	 */
	function getServerDetails(array $server, array $config)
	{
		// Tags from the query protocol do not always match the name displayed
		$tagsMap = [
			'weekly'        => 'Weekly',
			'monthly'       => 'Monthly',
			'biweekly'      => 'Biweekly',
			'vanilla'       => 'Vanilla',
			'pve'           => 'PvE',
			'softcore'      => 'Softcore',
			'roleplay'      => 'Roleplay',
			'minigame'      => 'Minigame',
			'training'      => 'Combat Train',
			'battlefield'   => 'Battlefield',
			'builds'        => 'Build Server',
			'broyale'       => 'Battle Royale',
		];

		$cachePath = 'cache/' . $server['ip'] . '_' . $server['port'] . '.cache';

		$cacheTimeInSeconds = 60 * 10; // 10 minutes

		// Check if cache for that server is still valid, and if so, skip data collection
		if (file_exists($cachePath) && (filemtime($cachePath) > (time() - $cacheTimeInSeconds ))) {
			return json_decode(file_get_contents($cachePath), true);
		}

		$serverInfo = [];

		if($config['api'] == 'sourcequery') {
			$sourceQueryInfo = getSourceQueryServerDetails($server, $config, $tagsMap);

			if($sourceQueryInfo) {
				file_put_contents($cachePath, json_encode($sourceQueryInfo));
				$serverInfo = $sourceQueryInfo;
			} else {
				// In case server isn't available, mark it as offline and return the info
				$serverCache = json_decode(file_get_contents($cachePath), true);
				$serverCache['online'] = false;
				file_put_contents($cachePath, json_encode($serverCache));
				$serverInfo = $serverCache;
			}

		} else {
			$battleMetricsInfo = getBattleMetricsServerDetails($server, $config, $tagsMap);

			if($battleMetricsInfo) {
				file_put_contents($cachePath, json_encode($battleMetricsInfo));
				$serverInfo = $battleMetricsInfo;
			} else {
				// In case BM API isn't available just mark it as offline
				$serverCache = json_decode(file_get_contents($cachePath), true);
				$serverCache['online'] = false;
				file_put_contents($cachePath, json_encode($serverCache));
				$serverInfo = $serverCache;
			}

		}

		return $serverInfo;
	}


	/**
	 * Returns information from SourceQuery directly from the server
	 *
	 * @param array $server
	 * @param array $config
	 * @param array $tagsMap
	 * @return array|false
	 */
	function getSourceQueryServerDetails(array $server, array $config, array $tagsMap)
	{
		$sourceQuery = new SourceQuery();

		try {

			$sourceQuery->Connect($server['ip'], $server['port'], 1, SourceQuery::SOURCE);

			$info = $sourceQuery->GetInfo();
			$additionalInfo = $sourceQuery->GetRules();

			// Query splits the description between multiple entities, adding them back together
			$description = '';

			// Some modded servers seem to have changed the value returned by the servers
			// we need to manually check if they are supplied. Some modded servers
			// also seem to have changed the first description_00 to description_0, which is
			// why we manually add it in case it exists

			if(array_key_exists('description_0', $additionalInfo))
				$description .= $additionalInfo['description_0'];

			for($i = 0; $i <= 15; $i++) {

				$descriptionIdKey = 'description_' . sprintf("%02d", $i);

				if(array_key_exists($descriptionIdKey, $additionalInfo))
					$description .= $additionalInfo[$descriptionIdKey];

			}

			// Server description use n for new lines, replace it with breakline
			$description = str_replace('\n', '<br>', $description);

			// Using t for tab replacement, use small spacing instead
			$description = str_replace('\t', '&nbsp;&nbsp;', $description);

			// Server tags sorting
			$tagsArray = explode(',', $info['GameTags']);
			$tags = [];

			foreach($tagsArray as $tag) {

				// Read the game tags which are shown in the server browser
				if(array_key_exists($tag, $tagsMap))
					$tags[] = $tagsMap[$tag];

				// Maximum players from tags, as Steam query does not support more than 256
				if(strpos($tag, 'mp') !== false)
					$maxPlayers = (int) filter_var($tag, FILTER_SANITIZE_NUMBER_INT);

				// Same for current players
				if(strpos($tag, 'cp') !== false)
					$currentPlayers = (int) filter_var($tag, FILTER_SANITIZE_NUMBER_INT);

				// Total number of queued players on the server
				if(strpos($tag, 'qp') !== false)
					$queuedPlayers = (int) filter_var($tag, FILTER_SANITIZE_NUMBER_INT);

				// The last time the server was wiped
				if(strpos($tag, 'born') !== false)
					$lastWiped = (int) filter_var($tag, FILTER_SANITIZE_NUMBER_INT);

			}

			// Was server wiped recently?
			$wiped = false;
			if($lastWiped + (60 * 60 * $config['lastWiped']['hoursPassed']) >= time())
				$wiped = true;

			return [
				'ip'                => $server['ip'],
				'port'              => $server['port'],
				'name'              => $info['HostName'],
				'map'               => $info['Map'],
				'players'           => $currentPlayers,
				'maxPlayers'        => $maxPlayers,
				'queuedPlayers'     => $queuedPlayers,
				'playersPercentage' => round($currentPlayers / $maxPlayers * 100),
				'image'             => str_replace(['https://', 'http://'], '//', $additionalInfo['headerimage']),
				'description'       => $description,
				'store'             => $server['storeLink'],
				'battlemetrics'     => $server['battlemetricsLink'],
				'tags'              => $tags,
				'wiped'             => $wiped,
				'online'            => true,
			];

		} catch(Exception $e) {
			return false;
		} finally {
			$sourceQuery->Disconnect();
		}

	}


	/**
	 * Request the information from the BattleMetrics API
	 *
	 * @param array $server
	 * @param array $config
	 * @param array $tagsMap
	 * @return array|false
	 */
	function getBattleMetricsServerDetails(array $server, array $config, array $tagsMap)
	{
		try {

			$battleMetricsInfo = json_decode(file_get_contents('https://api.battlemetrics.com/servers/' . $server['battlemetricsId']), true);

			// If server is shown as offline on BM, return false directly
			if($battleMetricsInfo['data']['attributes']['status'] == 'offline')
				return false;

			// If the server is marked as removed, we handle it as if it was offline
			if($battleMetricsInfo['data']['attributes']['status'] == 'removed')
				return false;

			// Server description use n for new lines, replace it with breakline
			$description = nl2br($battleMetricsInfo['data']['attributes']['details']['rust_description']);

			// Using t for tab replacement, use small spacing instead
			$description = str_replace('\t', '&nbsp;&nbsp;', $description);

			// Was server wiped recently?
			$wiped = false;
			if(strtotime($battleMetricsInfo['data']['attributes']['details']['rust_last_wipe']) + (60 * 60 * $config['lastWiped']['hoursPassed']) >= time())
				$wiped = true;

			// In case someone tests his server with maxPlayers 0 (e.g. testing mode)
			$playersPercentage = 0;
			if($battleMetricsInfo['data']['attributes']['maxPlayers'] > 0)
				$playersPercentage = round($battleMetricsInfo['data']['attributes']['players'] / $battleMetricsInfo['data']['attributes']['maxPlayers'] * 100);

			// Tags are disabled as BM API does not have them available
			return [
				'ip'                => $server['ip'],
				'port'              => $server['port'],
				'name'              => $battleMetricsInfo['data']['attributes']['name'],
				'map'               => $battleMetricsInfo['data']['attributes']['details']['map'],
				'players'           => $battleMetricsInfo['data']['attributes']['players'],
				'maxPlayers'        => $battleMetricsInfo['data']['attributes']['maxPlayers'],
				'queuedPlayers'     => $battleMetricsInfo['data']['attributes']['details']['rust_queued_players'],
				'playersPercentage' => $playersPercentage,
				'image'             => str_replace(['https://', 'http://'], '//', $battleMetricsInfo['data']['attributes']['details']['rust_headerimage']),
				'description'       => $description,
				'store'             => $server['storeLink'],
				'battlemetrics'     => $server['battlemetricsLink'],
				'tags'              => [],
				'wiped'             => $wiped,
				'online'            => true,
			];

		} catch(Exception $e) {
			return false;
		}
	}

	/**
	 * Checks if the user is on the specified page
	 *
	 * @param string $page
	 * @return bool
	 */
	function isOnPage(string $page): bool
	{
		$requestPath = explode('/', htmlspecialchars(strip_tags($_SERVER['REQUEST_URI'])));

		return $requestPath[count($requestPath) - 1] === $page;
	}

	foreach($config['servers'] as $configServer) {
		$servers[] = getServerDetails($configServer, $config);
	}
