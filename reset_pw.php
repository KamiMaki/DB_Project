<?php
include ("connMySQL.php");
session_start();
$name = $_SESSION['user']['username'];
$old_pw = $_POST['o_pw'];
$new_pw = $_POST['n_pw'];
$new_pw2 = $_POST['n_pw2'];
if($old_pw !='' && $new_pw!=''  && $new_pw2!='')
{
    $sql ="SELECT password FROM user WHERE username='$name'";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
	{
        while($row = $result->fetch_assoc()){
            if($row["password"]!=$old_pw)
			{
				header("location:http://localhost/HW1/reset_password.php?原密碼錯誤");
				exit;
				
            }
			else if($new_pw!=$new_pw2)
			{
				header("location:http://localhost/HW1/reset_password.php?密碼確認錯誤");
				exit;
            }
			else
			{
				$sql_reset = "UPDATE user SET password='$new_pw' WHERE username='$name'";
				if($conn->query($sql_reset)=== TRUE)
				{
					header("location:http://localhost/index.php?修改成功");
					exit;
				}
				else
				{
					header("location:http://localhost/index.php?修改失敗");
					exit;
				}
			}
        }
    }
	else
	{
		
        header("location:http://localhost/HW1/reset_password.php?查無帳號");
		exit;
    }
}
else
{	
	header("location:http://localhost/HW1/reset_password.php?無效輸入");
	exit;
}   	
?>
