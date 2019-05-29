<?php
session_start();
include ("connMySQL.php");
$id = $_SESSION['player']['id'];
$asset = $_POST['asset'];
$money = $_POST['money'];
$_SESSION['player']['asset'] = $asset;
$sql_reset = "UPDATE player SET asset=$asset+$money WHERE id=$id";  	
$conn->query($sql_reset);


?>