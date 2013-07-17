<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| デフォルトセッションドライバー
	|--------------------------------------------------------------------------
	|
	| このオプションはリクエストに対するデフォルトのセッションドライバーを
	| 指定するためのものです。一番軽いネイティブドライバーを設定していますが、
	| 用意されている他の素晴らしいドライバーも使用できます。
	|
	| Supported: "native", "cookie", "database", "apc",
	|            "memcached", "redis", "array"
	|
	*/

	'driver' => 'native',

	/*
	|--------------------------------------------------------------------------
	| セッション持続時間
	|--------------------------------------------------------------------------
	|
	| ここではどのくらい長く接続が無い場合にセッションを破棄するのか
	| 分数で指定します。もしブラウザを閉じたらすぐに破棄したい場合には
	| 0を指定してください。
	|
	*/

	'lifetime' => 120,

	/*
	|--------------------------------------------------------------------------
	| セッションファイルの場所
	|--------------------------------------------------------------------------
	|
	| "file"セッションドライバーを使用する場合、そのセッションファイルを保存
	| する場所を指定する必要があります。デフォルトは設定していますが、
	| 他の場所を設定することもできます。ファイルセッションでのみ必要です。
	|
	*/

	'files' => storage_path().'/sessions',

	/*
	|--------------------------------------------------------------------------
	| セッションデータベース接続
	|--------------------------------------------------------------------------
	|
	| "database"セッションドライバーを使用する場合、セッションを管理するために
	| 使用するデータベース接続を指定する必要があります。ここでは"database"設定
	| ファイルと同じになるように、設定しています。
	|
	*/

	'connection' => null,

	/*
	|--------------------------------------------------------------------------
	| セッションデータベーステーブル
	|--------------------------------------------------------------------------
	|
	| "database"セッションドライバーを使用する時には、セッションを管理する
	| テーブルを指定する必要があります。もちろん、分かりやすいデフォルトが
	| 指定されていますが、必要であればご自由に変更してください。
	|
	*/

	'table' => 'sessions',

	/*
	|--------------------------------------------------------------------------
	| セッションのガベージコレクション確率
	|--------------------------------------------------------------------------
	|
	| いくつかのセッションドライバーは情報の保存場所から古いセッションを
	| クリーンアップする必要があります。ここでは一回のリクエストに対し
	| どのくらいの確率で行うかを指定します。デフォルトでは100回に2回です。
	|
	*/

	'lottery' => array(2, 100),

	/*
	|--------------------------------------------------------------------------
	| セッションクッキー名
	|--------------------------------------------------------------------------
	|
	| ここではセッションインスタンスをIDで識別するために使用されるクッキーの
	| 名前を変更できます。ここで指定された名前はフレームワークにより新しい
	| セッションクッキーが生成されるたび、全てのドライバーに対し使用されます。
	|
	*/

	'cookie' => 'laravel_session',

	/*
	|--------------------------------------------------------------------------
	| セッションクッキーパス
	|--------------------------------------------------------------------------
	|
	| セッションクッキーパスはクッキーが有効なパスを決定します。
	| 典型的にはアプリケーションのルートパスを指定しますが
	| 必要に合わせて自由に変更してください。
	|
	*/

	'path' => '/',

	/*
	|--------------------------------------------------------------------------
	| セッションクッキードメイン
	|--------------------------------------------------------------------------
	|
	| ここでアプリケーションのセッションを認識するために使用されるクッキーの
	| ドメインを変更できます。これはクッキーが有効なドメインを決めるため
	| 使用されます。デフォルト値は未定義で、納得してもらえると思います。
	|
	*/

	'domain' => null,

);