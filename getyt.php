<?php
include ("connMySQL.php");
session_start();
$num = $_POST['num'];
$sql ="SELECT link FROM youtube WHERE id='$num'";                    
$result = $conn->query($sql);
 while($row = $result->fetch_assoc())
 {
	echo $row['link'];
 }
	
?>
