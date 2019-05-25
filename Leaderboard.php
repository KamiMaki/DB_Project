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
	}
	?>
	</h1>	  
	<style type="text/css">
    tab1 { padding-left: 4em; }
    tab2 { padding-left: 8em; }
	.tab {
    position: absolute;
    left: 4em;
   }

</style>
</head>
<body >   
<?php
include ("connMySQL.php");
$sql = "SELECT * FROM player ORDER BY asset DESC";
$result = $conn->query($sql);
?>
<!--<table width="700" border="1">
  <tr>
    <td>玩家暱稱</td>
    <td>資產</td>
  </tr>-->
<br><br>
<h4><p align=center><b>玩家暱稱 <span style="margin-left:165px;">資產</span></b></p></h4>


<ul class="wrap">
<?php
 while($row = $result->fetch_assoc()){
?>
<li ><p><h4><b><?php echo $row['name']?><span style="margin-left:120px;float:right;"><?php echo $row['asset']?></b></h4></p></li>
<?php
}
?>
<!--</table>-->

<br><br>

<button type="button" class="btn btn-primary"  onclick="location.href='home.php'">返回主畫面</button>    
</body>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
    <script src="resources/experiments.js"></script>
    <link rel="stylesheet" href="resources/bootstrap.min.css" charset="utf-8">
    <link rel="stylesheet" href="resources/experiments.css" charset="utf-8">
    <link rel="stylesheet" href="resources/utility.css" charset="utf-8">
</html>
