<?php 


function entity_str($str){
	return htmlspecialchars($str,ENT_QUOTES,HTML_CHARACTER_SET);
}

function entity_assoc_array($assoc_array){

	foreach($assoc_array as $key => $value){
		foreach($value as $keys => $values) {
			$assoc_array[$key][$keys] = entity_str($values);
		}
	}

	return $assoc_array;
}


//接続を実行　DBハンドルを返す
function get_db_connect() {
	
	if (!$link = mysqli_connect(DB_HOST,DB_USER,DB_PASSWD,DB_NAME)) {
		die('error:' . mysqli_connect_error());
	}
	mysqli_set_charset($link,DB_CHARACTER_SET);
	
	return $link;
}


function close_db_connect($link) {
	mysqli_close($link);
}


/**
*クエリを実行しその結果を配列で取得する
*/
function get_as_array($link,$sql){

	$data = array();

	if ($result = mysqli_query($link,$sql)) {

		if (mysqli_num_rows($result) > 0) {

			while($row = mysqli_fetch_assoc($result)) {
				$data[] = $row;
			}
		}

		mysqli_free_result($result);
	}

	return $data;
}

/**
*tweetの一覧を取得する。
*/
function get_tweet_table_list($link){

	$sql = 'SELECT name,tweet,date FROM tweet_table';

	return get_as_array($link,$sql);
}

/**
*tweetを投稿する
*/
function insert_db($link,$sql) {

	if(($result = mysqli_query($link,$sql)) === TRUE) {
		
		return TRUE;
	} else {
		return FALSE;
	}
} 

function insert_tweet_table($link,$name,$tweet){

	$sql = 'INSERT INTO tweet_table(name,tweet) VALUES(\'' . $name . '\', ' . $tweet . ')';

	return insert_db($link,$sql);
}


/*
*リクエストメソッドの取得
*/

function get_request_method() {
	return $_SERVER['REQUEST_METHOD'];
}

/*
*POST値の取得
*/
function get_post_method($key){

	$str = '';
	if(isset($_POST[$key]) === TRUE){
		$str = $_POST[$key];
	}
	return $str;
}

function register_user($link,$name,$passwd){

	$sql = 'INSERT INTO user_account_table(name,passwd) VALUES(\'' . $name . '\', ' . $passwd . ')';

	return insert_db($link,$sql);
}






