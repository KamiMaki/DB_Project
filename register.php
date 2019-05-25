<?php
include ("connMySQL.php");
session_start();
$name = $_POST['name'];
$pw = $_POST['pw'];
$account = $_POST['account'];
$sql ="INSERT INTO player (name,account, password) VALUES ('$name','$account','$pw')";
if($conn->query($sql)=== TRUE)
	{
		header("location:./?註冊成功");
	}
	else
	{
		header("location:./?註冊失敗");
	}
	
?>
