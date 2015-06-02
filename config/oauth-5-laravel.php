<?php

return [

	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/
	'storage' => 'Session',

	'consumers' => [

		'Vkontakte' => [
			'client_id'     => $_ENV['VK_ClientID'],
			'client_secret' => $_ENV['VK_ClientSecret'],
			'scope'         => ['wall','offline'],
		],

	]

];