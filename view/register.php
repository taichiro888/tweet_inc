<!DOCTYPE html>

<html lang = "ja">
<head>
	<meta charset="UTF-8">
	<title>登録画面</title>
	<link rel="stylesheet" type="text/css" href="register.css"> 
</head>
<html>
<body>

<p><?php print $user_name; ?></p>

	<div id="doc" class="route_signup"> 
		<div class="page_canvas">
			<div class="signup_wrapper">

			<h1>AdTweet</h1>
				<form class="form_signup" action="register.php" method="POST" >
					<div class="prompt_name">
						<input id="full_name" type="text" name="user_name" maxlength="20" placeholder="名前">
					</div>
					<div class="prompt_email">
						<input id="full_email" type="email" name="email" pattern=".+@.+\..+" placeholder="info@example.com">
					</div>
					<div class="prompt_passwd">
						<input id="full_passwd" type="password" name="user_passwd" pattern="[a-zA-z0-9]+" title="パスワードは半角英数字で入力してください。" placeholder="パスワード">
					</div>

					<div class="doit">
						<div class="sign-up-box">
							<input class="submit button signup" type="submit" value="新規登録">
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>

<?php foreach ((array)$err_msg as $value){ ?>
				<?php entity_str($value); ?>
				 <?php print $value; ?> 
			<?php } ?>

<?php print $err_count; ?>

</body>

</html>