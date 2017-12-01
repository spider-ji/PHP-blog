<?php
session_start();
if( isset($_SESSION['username']) == false){
	echo "需要管理员登陆";
	exit;
}
//因为在db.php已经引用了input.class.php
//include('input.class.php');
//$input = new input();
include('db.php'); 

$id = $input->get('id');
$sql="delete from msg where id='{$id}'";
$is=$mysqli->query($sql);
if($is==true){
	header("Location:text.php");
}else{
	echo "删除失败";
}

?>