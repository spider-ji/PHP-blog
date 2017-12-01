<?php
class input{

	function __construct(){
	}

	function post($key){
		
		if(isset($_POST[$key]) === false){
			return false;
		}
		$val = $_POST[$key];
		//代码的恶意过滤
		//代码的黄赌毒字符的检查
		return $val;
	}
	
	function get($key){
		
		if(isset($_GET[$key]) === false){
			return false;
		}
		
		$val =$_GET[$key];
		//代码的恶意过滤
		//代码的黄赌毒字符的检查
		return $val;
	}
}

?>