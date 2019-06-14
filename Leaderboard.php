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
	<h1 class="one" style="font-family:Microsoft JhengHei;color:#ffffff;">
	<?php
	if(isset($_SESSION))
	{
		echo $_SESSION['player']['name']." 歡迎\n";
		echo '<br>';
		echo "您目前有籌碼".$_SESSION['player']['asset']."枚";
	}
	?>
	</h1>	  
</head>
<body background="https://i.imgur.com/VRNsY4W.jpg">   
<?php
include ("connMySQL.php");
$sql = "SELECT * FROM player ORDER BY asset DESC";
$result = $conn->query($sql);
?>
<div class="block">
<h2><p align=center><b>玩家暱稱 <span style="margin-left:200px;">資產</span></b></p></h2>


<ul class="wrap">
<?php
 while($row = $result->fetch_assoc()){
?>
<li class="LB" ><p><h2><b><?php echo $row['name']?><p style="float:right;margin-left:100px;"><?php echo $row['asset']?></b></h2></p></p></li>
<?php
}
?>
</div>

<br><br>

<button type="button" class="btn btn-primary"  onclick="location.href='home.php'">返回主畫面</button>    
</body>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
    <script src="resources/experiments.js"></script>
    <link rel="stylesheet" href="resources/bootstrap.min.css?v=<?=time();?>" charset="utf-8">
    <link rel="stylesheet" href="resources/experiments.css?v=<?=time();?>" charset="utf-8">
    <link rel="stylesheet" href="resources/utility.css" charset="utf-8">
</html>
