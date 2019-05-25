<?php
include ("connMySQL.php");
session_start();
$name = $_SESSION['user']['username'];
$sql ="DELETE FROM user WHERE username = '$name' ";
if($conn->query($sql)=== TRUE)
	{
		header("location:http://localhost/index.php?刪除成功");
		exit;
	}
	else
	{
		header("location:http://localhost/index.php?刪除失敗");
		exit;
	}
	
?>
