<?php
include ("connMySQL.php");
session_start();
$account= $_POST['name'];
$pw = $_POST['pw'];
if($account!='' && $pw!=''){
    $sql ="SELECT * FROM player WHERE account='$account'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            if($row["account"]==$account&&$row["password"]==$pw){
				$_SESSION['player']=[
				'account'=>$row['account'],'id'=>$row['id'], 'name'=>$row['name'], 
				'asset'=>$row['asset'], 'gid'=>$row['gid'], 
				'password'=>$row['password'],'ranking'=>$row['ranking']];
				header("location:home.php");
				exit;
				
            }else
			{
				header("location:./?密碼錯誤");
				exit;
            }
        }
    }else{
		
        header("location:./?查無帳號");
		exit;
    }
}else{
	header("location:./?無效輸入");
	exit;
    
}
?>
