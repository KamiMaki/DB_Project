<?php
include ("connMySQL.php");
session_start();
$id = $_SESSION['player']['id'];
$asset = $_POST['asset'];
$_SESSION['player']['asset'] = $asset;
$sql_reset = "UPDATE player SET asset='$asset' WHERE id='$id'";  	
if($conn->query($sql_reset)=== TRUE)
{
	echo "success";
}
else
{
	echo "fail";
}
?>
