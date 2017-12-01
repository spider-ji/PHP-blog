<?php

//<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
	include('input.class.php');
	$input = new input();
//连接数据库
    $mysqli = new mysqli('localhost','root','','php_db');
	if($mysqli->connect_errno >0){
		echo"连接错误";
		echo $mysqli->connect_error;
	exit;
	}
	$mysqli->query("SET NAMES UTF8");
?>
