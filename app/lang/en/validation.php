<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| バリデーション言語行
	|--------------------------------------------------------------------------
	|
	| 以下の言語行はバリデタークラスにより使用されるデフォルトのエラー
	| メッセージです。サイズルールのようにいくつかのバリデーションを
	| 持っているものもあります。メッセージはご自由に調整してください。
	|
	*/

	"accepted"         => "The :attribute must be accepted.",
	"active_url"       => "The :attribute is not a valid URL.",
	"after"            => "The :attribute must be a date after :date.",
	"alpha"            => "The :attribute may only contain letters.",
	"alpha_dash"       => "The :attribute may only contain letters, numbers, and dashes.",
	"alpha_num"        => "The :attribute may only contain letters and numbers.",
	"before"           => "The :attribute must be a date before :date.",
	"between"          => array(
		"numeric" => "The :attribute must be between :min - :max.",
		"file"    => "The :attribute must be between :min - :max kilobytes.",
		"string"  => "The :attribute must be between :min - :max characters.",
	),
	"confirmed"        => "The :attribute confirmation does not match.",
	"date"             => "The :attribute is not a valid date.",
	"date_format"      => "The :attribute does not match the format :format.",
	"different"        => "The :attribute and :other must be different.",
	"digits"           => "The :attribute must be :digits digits.",
	"digits_between"   => "The :attribute must be between :min and :max digits.",
	"email"            => "The :attribute format is invalid.",
	"exists"           => "The selected :attribute is invalid.",
	"image"            => "The :attribute must be an image.",
	"in"               => "The selected :attribute is invalid.",
	"integer"          => "The :attribute must be an integer.",
	"ip"               => "The :attribute must be a valid IP address.",
	"max"              => array(
		"numeric" => "The :attribute may not be greater than :max.",
		"file"    => "The :attribute may not be greater than :max kilobytes.",
		"string"  => "The :attribute may not be greater than :max characters.",
	),
	"mimes"            => "The :attribute must be a file of type: :values.",
	"min"              => array(
		"numeric" => "The :attribute must be at least :min.",
		"file"    => "The :attribute must be at least :min kilobytes.",
		"string"  => "The :attribute must be at least :min characters.",
	),
	"not_in"           => "The selected :attribute is invalid.",
	"numeric"          => "The :attribute must be a number.",
	"regex"            => "The :attribute format is invalid.",
	"required"         => "The :attribute field is required.",
	"required_if"      => "The :attribute field is required when :other is :value.",
	"required_with"    => "The :attribute field is required when :values is present.",
	"required_without" => "The :attribute field is required when :values is not present.",
	"same"             => "The :attribute and :other must match.",
	"size"             => array(
		"numeric" => "The :attribute must be :size.",
		"file"    => "The :attribute must be :size kilobytes.",
		"string"  => "The :attribute must be :size characters.",
	),
	"unique"           => "The :attribute has already been taken.",
	"url"              => "The :attribute format is invalid.",

	/*
	|--------------------------------------------------------------------------
	| カスタムバリデーション言語行
	|--------------------------------------------------------------------------
	|
	| "属性.ルール"の規約でキーを指定することでカスタムバリデーション
	| メッセージを定義できます。指定した属性ルールに対する特定の
	| カスタム言語行を手早く指定できます。
	|
	*/

	'custom' => array(),

	/*
	|--------------------------------------------------------------------------
	| カスタムバリデーション属性名
	|--------------------------------------------------------------------------
	|
	| 以下の言語行は、例えば"email"の代わりに「メールアドレス」のように、
	| 読み手にフレンドリーな表現でプレースホルダーを置き換えるために指定する
	| 言語行です。これはメッセージをよりきれいに表示するために役に立ちます。
	|
	*/

	'attributes' => array(),

);
