<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ホーム</title>
	<link rel="stylesheet" href="tweet_home.css">
</head>
<body>
	<p>ようこそ<?php print $user_name ?>さん</p>


	
	<form action="tweet_logout.php" method="POST">
		<input type="submit" value="ログアウト">
	</form>

</body>
</html>