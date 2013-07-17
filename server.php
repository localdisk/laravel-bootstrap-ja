<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$uri = urldecode($uri);

$paths = require __DIR__.'/bootstrap/paths.php';

$requested = $paths['public'].$uri;

// このファイルはPHPの組み込みWebサーバーで、Apacheの"mod_rewrite"機能を
// エミュレートするためのものです。これにより、Laravelアプリケーションをテストするために
// 「本当」のWebサーバーソフトウェアをインストールしなくても済むようにしてくれます。
if ($uri !== '/' and file_exists($requested))
{
	return false;
}

require_once $paths['public'].'/index.php';
