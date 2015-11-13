<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>ログイン画面</title>
	<link rel="stylesheet" href="tweet_login.css">
</head>
<<body>
	<p>ログイン画面</p>
	<form action="tweet_login_hundle.php" method="POST">
		<input type="text" name="email" value="<?php print $email ?>" placeholder="メールアドレス">
		<input type="password" name="user_passwd" pattern="[a-zA-z0-9]+" title="パスワードは半角英数字で入力してください。" placeholder="パスワード">
		<input type="submit" name="ログイン">
	</form>


</body>