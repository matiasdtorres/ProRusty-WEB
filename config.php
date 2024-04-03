<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Server
	|--------------------------------------------------------------------------
	*/

	'servers' => [

		[
			'ip' => 'mon.rustoria.us',
			'port' => 28015,
			'storeLink' => 'https://prorusty.store/',
			'battlemetricsId' => '12410930',
			'battlemetricsLink' => 'https://www.battlemetrics.com/servers/rust/12410930',
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