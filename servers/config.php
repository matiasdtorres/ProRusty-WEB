<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Server
	|--------------------------------------------------------------------------
	*/

	'servers' => [

		[
			'ip' => 'long.rustoria.lat',
			'port' => 28010,
			'storeLink' => 'https://prorusty.store/',
			'battlemetricsId' => '26975357',
			'battlemetricsLink' => 'https://www.battlemetrics.com/servers/rust/26975357',
		],
		[
			'ip' => 'mars.projectnova.gg',
			'port' => 28015,
			'storeLink' => 'https://vip.projectnova.gg/',
			'battlemetricsId' => '8113868',
			'battlemetricsLink' => 'https://www.battlemetrics.com/servers/rust/8113868',
		],
		
	],

	/*
	|--------------------------------------------------------------------------
	| Data API
	|--------------------------------------------------------------------------
	| Options: battlemetrics, sourcequery
	*/

	'api' => 'battlemetrics',

	/*
	|--------------------------------------------------------------------------
	| Last wiped information
	|--------------------------------------------------------------------------
	*/

	'lastWiped' => [

		'enabled' => 'yes',

		'text' => 'RECIÉN WIPEADO',

		'hoursPassed' => 24,

	],

	'language' => 'es',

];