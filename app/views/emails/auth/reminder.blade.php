<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>パスワードリセット</h2>

		<div>
			パスワードをリセットするには、リンク先のフォームを入力してください。: {{ URL::to('password/reset', array($token)) }}.
		</div>
	</body>
</html>