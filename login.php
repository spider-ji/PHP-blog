<?php

session_start();

include('db.php');


$act = $input->get('act');

if($act!==false){
	$username=$input->post('username');
    $password=$input->post('password');
   
	$sql="select * from adm where username='{$username}'and password='{$password}'";
    $mysqli_result=$mysqli->query($sql);

   if($row = $mysqli_result->fetch_array()){
	  $_SESSION['username'] = $row['username'];
	  header("Location:text.php");
	  var_dump($row);
	}else{
		echo "登陆失败";
		exit;
	}
		 
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'/>
		<title>登陆</title>
	</head>

	<body>
		<form action="login.php?act=chk" method="post">
			<input type='text' name='username'/>
			<input type='password' name ='password'/>
			<input type='submit' value='登陆'/>
		</form>
	</body>

</html>