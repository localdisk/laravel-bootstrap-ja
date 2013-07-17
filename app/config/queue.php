<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| デフォルトキュードライバー
	|--------------------------------------------------------------------------
	|
	| LaravelキューAPIは同じ文法を使用して様々なバックエンドが使用できるよう
	| 統一されたAPIをサポートしています。ここではデフォルトキュードライバーを
	| 設定します。
	|
	| サポートドライバー: "sync", "beanstalkd", "sqs"
	|
	*/

	'default' => 'sync',

	/*
	|--------------------------------------------------------------------------
	| キュー接続
	|--------------------------------------------------------------------------
	|
	| ここでアプリケーションが使用するそれぞれのサーバーに対する接続情報を
	| 設定します。それぞれのバックエンドのデフォルト接続はLaravelに最初から
	| 設定されています。自由に追加してください。
	|
	*/

	'connections' => array(

		'sync' => array(
			'driver' => 'sync',
		),

		'beanstalkd' => array(
			'driver' => 'beanstalkd',
			'host'   => 'localhost',
			'queue'  => 'default',
		),

		'sqs' => array(
			'driver' => 'sqs',
			'key'    => 'your-public-key',
			'secret' => 'your-secret-key',
			'queue'  => 'your-queue-url',
			'region' => 'us-east-1',
		),

		'iron' => array(
			'driver'  => 'iron',
			'project' => 'your-project-id',
			'token'   => 'your-token',
			'queue'   => 'your-queue-name',
		),

	),

);
