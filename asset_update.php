<?php
include ("connMySQL.php");
session_start();
$id = $_SESSION['player']['id'];
$asset = $_POST['asset'];
$_SESSION['player']['asset'] = $asset;
$sql_reset = "UPDATE player SET asset='$asset' WHERE id='$id'";  	
?>
