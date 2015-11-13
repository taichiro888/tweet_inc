<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ツイート一覧</title>
	<link rel="stylesheet" href="tweet_list.css" type="text/css"　/>
</head>
<body>

<?php foreach ($err_msg as $err){ 
			print $err; 
		} ?>

<h1>一覧</h1>

<table>

	<tr>
		<th>name</th>
		<th>ツイート</th>
	</tr>
<?php foreach ($tweet_list as $tweet) { ?>
	<tr>
		<td><?php print $tweet['name']; ?></td>
		<td><?php print $tweet['tweet']; ?></td>
		<td><?php print $tweet['date']; ?></td>
	</tr>

<?php } ?>
</table>


</body>
</html>

