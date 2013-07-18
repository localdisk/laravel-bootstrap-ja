## Laravel 日本語版 & 便利パック

[HiroKwsさんの日本語コメント版、日本語言語ファイル付きLaravel](https://github.com/HiroKws/laravel)に私が開発によく使うものを詰め合わせています。

## 便利パックの中身

* [日本語コメント版、日本語言語ファイル付きLaravel](https://github.com/HiroKws/laravel)
* [IDE用補完コード](https://github.com/barryvdh/laravel-ide-helper)
* [Laravel-4-Generators](https://github.com/JeffreyWay/Laravel-4-Generators)
* [Twitter Bootstrap 2.3.2](http://twitter.github.io/bootstrap/)
* [jQuery 1.10.2](http://jquery.com)

## 必要なもの
* PHP 5.3.7 以上(5.4以上が望ましい)
* MCrypt PHP Extension

-----

## インストール

### 1. ダウンロード

#### 1-1. リポジトリからクローン

<pre>
git clone http://github.com/localdisk/laravel-bootstrap-ja your-folder
</pre>

#### 1-2. リポジトリからダウンロード

<pre>
git clone http://github.com/localdisk/laravel-bootstrap-ja your-folder
</pre>

-----

### 2 Composer 

Composer を導入済みの人は 2-2 へ

#### 2-1. Composer のダウンロード

<pre>
cd your-folder
curl -sS https://getcomposer.org/installer | php
</pre>

Windows を使用している方は[公式ドキュメント](http://getcomposer.org/doc/00-intro.md)を参照してください

#### 2-2. Composer を使用して依存ライブラリをダウンロード

<pre>
cd your-folder
php composer.phar install
</pre>

-----

### 3 セットアップ

Laravel をダウンロードしてディレクトリに移動して下記コマンドを入力してください

※ php artisan serve コマンドは PHP 5.4 以上でしか使用出来ません（ビルトインサーバーを使用するため）

<pre>
php artisan key:generate
php artisan serve
</pre>

http://localhost:8000/ をブラウザのURL欄に入力してみてください

スタートページが表示されればOKです。簡単ですね！

Laravelを楽しんでください！

# ライセンス
[MIT license](http://opensource.org/licenses/MIT)