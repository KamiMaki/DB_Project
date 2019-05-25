<?php
include ("connMySQL.php");
session_start();
$id = $_SESSION['player']['id'];
$asset = $_POST['asset'];
$point1 = $_POST['point1'];
$point2 = $_POST['point2'];
$result= $_POST['result'];
$money = $_POST['money'];
$_SESSION['player']['asset'] = $asset;
$sql_reset = "UPDATE player SET asset='$asset' WHERE id='$id'";  	
$conn->query($sql_reset);
$sql_insert = "INSERT INTO blackjack(PID,Result,Money,Point1,Point2) VALUES ('$id','$result','$money','$point1','$point2')"; 
$conn->query($sql_insert);
?>
