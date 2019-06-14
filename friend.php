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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
            <script src="resources/experiments.js"></script>
            <link rel="stylesheet" href="resources/bootstrap.min.css?v=<?=time();?>" charset="utf-8">
            <link rel="stylesheet" href="resources/experiments.css?v=<?=time();?>" charset="utf-8">
            <link rel="stylesheet" href="resources/utility.css" charset="utf-8">
    <title>主頁面</title>
	<h1 class="one" style="font-family:Microsoft JhengHei;color:#ffffff;">
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
<body background="https://i.imgur.com/VRNsY4W.jpg">   
<p style="color:#ffffff; font-size:30px;">
<?php
    include ("connMySQL.php");
    echo "您的好友列表：";
    echo '<br>';
    $account = $_SESSION['player']['account'];
        $sql ="SELECT * FROM friend WHERE User='$account'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                    echo $row['Friend'];
                    echo '<br>';
            }
        }
    echo '<br>';
?>
</p>

       <form action="add_friend.php" method="post" style="color:#ffffff; font-size:30px;">
           搜尋欲加入之使用者名稱: <input type="text" name="name"></p>
           
           <button type="submit" class="btn btn-primary"  onclick="location.href='add_friend.php'">新增好友</button>
              </form>

            <form action="delete_friend.php" method="post" style="color:#ffffff; font-size:30px;">
            欲刪除之使用者名稱: <input type="text" name="dname"></p>
            <button type="submit" class="btn btn-primary"  onclick="location.href='delete_friend.php'">刪除好友</button>
            </form>
			<br>
            

            <button type="button" class="btn btn-primary"  onclick="location.href='home.php'">返回主頁面</button>
               
            
</body>
</html>