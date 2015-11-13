<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ログイン</title>

</head>
<body>
	<form action="tweet_login.php" method="POST">
		<div class="prompt_mail">
			<input type="email" name="email" value="<?php print $email; ?>" placeholder="メールアドレス">
		</div>
		<div class="prompt_passwd">
			<input type="passwd" name="passwd" value="<?php print $passwd; ?>" placeholder="パスワード">
		</div>
		<div class="submit_button">
			<input type="submit" name="submit_button" value="ログイン">
		</div>
	</form> 
<?php if ($login_err_flag === TRUE) { ?>
	<p>メールアドレスまたはパスワードが違います</p>
<?php } ?>

</body>
</html>