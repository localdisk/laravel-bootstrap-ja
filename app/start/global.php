<?php

/*
|--------------------------------------------------------------------------
| Laravelクラスローダーの登録
|--------------------------------------------------------------------------
|
| Composerを使用することに加え、コントローラーとモデルをロードするために
| Laravelのクラスローダーを使用することもできます。Composerを更新しなくても
| 「グローバル」な名前空間にあなたのクラスを設置しておくのに便利です。
|
*/

ClassLoader::addDirectories(array(

	app_path().'/commands',
	app_path().'/controllers',
	app_path().'/models',
	app_path().'/database/seeds',

));

/*
|--------------------------------------------------------------------------
| アプリケーションエラーログ
|--------------------------------------------------------------------------
|
| 素晴らしいMonologライブラリーの上に構築されたアプリケーションのために
| ここでエラーログの設定を行なっています。デフォルトでは、毎日新しい
| ファイルが生成されログファイルをローテートするように構築されています。
|
*/

$logFile = 'log-'.php_sapi_name().'.txt';

Log::useDailyFiles(storage_path().'/logs/'.$logFile);

/*
|--------------------------------------------------------------------------
| アプリケーションエラーハンドラー
|--------------------------------------------------------------------------
|
| ここではアプリケーションでエラーが発生した場合の、エラーの処理（ログしたり、
| カスタムビューで特定のエラーを表示したりするなどを含む）を定義します。
| 異なったタイプの例外を処理するために多くのエラーハンドラーを登録することも
| できます。もし、何もリターンしなれば、デフォルトのエラービューが表示され、
| それにはデバッグ中であれば詳細なスタックトレースも含まれます。
|
*/

App::error(function(Exception $exception, $code)
{
	Log::error($exception);
});

/*
|--------------------------------------------------------------------------
| メンテナンスモードハンドラー
|--------------------------------------------------------------------------
|
| Artisanコマンドの"down"でメンテナンスモードにすることができます。
| このアプリケーションにふさわしいメンテナンスモードの
| 表示をここに定義してください。
|
*/

App::down(function()
{
	return Response::make("Be right back!", 503);
});

/*
|--------------------------------------------------------------------------
| フィルターファイルの読み込み
|--------------------------------------------------------------------------
|
| 以下でアプリケーションのフィルターファイルを読み込んでいます。
| これによりルートとフィルターを同じルーティングファイルに押しこまずに
| 分けて保存できるようになりました。
|
*/

require app_path().'/filters.php';