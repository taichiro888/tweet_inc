
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ツイートする</title>
	<link rel="stylesheet" href="tweet_insert.css">
</head>
<body>

	<?php foreach ($err_msg as $err){ 
			print $err; 
		} ?>

	<form action="tweet_insert.php "method="POST">
		名前:<input type="text" name="name">
		tweet:<input type="text" name="tweet">
		<input type="submit" value="投稿">
	</form>
</body>
</html>