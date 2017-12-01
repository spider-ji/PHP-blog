<?php
//header("Content-type: text/html; charset=utf-8");
	

	include('db.php');
    $input = new input();
	
	$msg = $input->post('msg');
	$user= $input->post('user');


	if($msg==''){
		echo"留言内容不能为空";
		exit;
	}
	if($user==''){
		echo"用户名不能为空";
		exit;
	}
	
	$t=time();
	
	$sql= "insert into msg(username,content,intime)values('{$user}','{$msg}','{$t}')";
	$is =$mysqli->query($sql);
	if($is){
		header("Location:text.php");
	}else{
		echo"插入失败";
	}
	
?>
