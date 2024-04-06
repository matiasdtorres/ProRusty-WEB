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