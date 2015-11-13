<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ツイート一覧</title>
	<link rel="stylesheet" href="tweet_list.css" type="text/css"　/>
</head>
<body>


<table>
<caption>ツイート一覧</caption>
	<tr>
		<th>name</th>
		<th>ツイート</th>
	</tr>
<?php foreach ($tweet_list) { ?>
	<tr>
		<td><?php print $tweet_list['name']; ?></td>
		<td><?php print $tweet_list['tweet']; ?></td>
		<td><?php print $tweet_list['date']; ?></td>
	</tr>

<?php } ?>
</table>


</body>
</html>

