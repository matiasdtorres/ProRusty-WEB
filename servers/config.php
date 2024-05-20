<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Server
	|--------------------------------------------------------------------------
	*/

	'servers' => [

		[
			'ip' => '2x.prorusty.com',
			'port' => 28010,
			'storeLink' => 'https://prorusty.com/shop',
			'battlemetricsId' => '27274292',
			'battlemetricsLink' => 'https://www.battlemetrics.com/servers/rust/27274292',
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