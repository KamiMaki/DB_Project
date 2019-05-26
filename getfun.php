<?php
include ("connMySQL.php");
session_start();
$num = $_POST['num'];
$sql ="SELECT joke FROM fun WHERE id='$num'";                    
$result = $conn->query($sql);
 while($row = $result->fetch_assoc())
 {
	echo $row['joke'];
 }
	
?>
