<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>主頁面</title>
	<h1>
	<?php
	if(isset($_SESSION))
	{
		echo $_SESSION['player']['name']." 歡迎\n";
		echo '<br>';
        echo "您目前有$".$_SESSION['player']['asset'];
        echo '<br>';

	}
	?>
	</h1>	  
</head>
<body >

<?php
include ("connMySQL.php");
$account= $_POST['name'];
    if($account){
        $sql ="SELECT * FROM player WHERE account='$account'";                    
        $result = $conn->query($sql);
            if($result->num_rows > 0){
                
                $name = $_SESSION['player']['account'];
                $sql ="INSERT INTO friend (User, Friend) VALUES ('$name', '$account')";
                    if($conn->query($sql)=== TRUE)
	                {
	                	echo "已將";
                        echo $account;
                        echo "加入好友！";
                        echo '<br>';
                	}
	                 else
	                {
		                echo "加入失敗！";
                        echo '<br>';
	                }
                
            }else{ 
                //echo '<br>';
                echo "查無此帳戶名稱！";
                echo "
                    <script>
                    setTimeout(function(){window.location.href='friend.php';},3000);
                    </script>
                    ";//3秒後跳轉到登入頁面重試;
                }
    
            }else{
                 //echo '<br>';
                 echo "資料庫連接失敗或查詢失敗！";
                 echo "
                      <script>
                      setTimeout(function(){window.location.href='friend.php';},3000);
                      </script>
                      ";//3秒後跳轉到登入頁面重試;
            }
?>

<button type="button" class="btn btn-primary"  onclick="location.href='home.php'">返回主頁面</button>
</body>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
    <script src="resources/experiments.js"></script>
    <link rel="stylesheet" href="resources/bootstrap.min.css" charset="utf-8">
    <link rel="stylesheet" href="resources/experiments.css" charset="utf-8">
    <link rel="stylesheet" href="resources/utility.css" charset="utf-8">
</html>
