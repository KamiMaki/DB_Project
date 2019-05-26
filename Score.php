<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.1/js/jquery.tablesorter.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.1/js/jquery.tablesorter.widgets.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.1/css/theme.blue.min.css">
	
	<script type="text/javascript">
	$(function () {
	$("#myTable").tablesorter({widgets: ['zebra']});
	});
	</script>
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
	
</head>
<body >   
<?php
include ("connMySQL.php");
$ID = $_SESSION['player']['id'];
$sql = "SELECT * FROM blackjack WHERE PID ='$ID' ";
$result = $conn->query($sql);
?>
<br><br>
<h1>21點</h1>
<table id="myTable" class="tablesorter-blue">
<thead>
　<tr>
　<th>結果</th><th>莊家點數</th><th>您的點數</th><th>金額</th>
　</tr>
</thead>
<?php
 while($row = $result->fetch_assoc()){
?>
<tr>
<td><?php
if( $row['Result'] == 1)
{
	echo "勝利";
}
elseif( $row['Result'] == 0)
{
	echo "平手";
}
else
{
	echo "失敗";
}


?></td><td><?php echo $row['Point1']?></td><td><?php echo $row['Point2']?></td><td><?php echo $row['Money']?></td></tr>
<?php
}
$sql2 = "SELECT COUNT(*) as count FROM blackjack WHERE PID ='$ID' "; 
$result = $conn->query($sql2);
while($row = $result->fetch_assoc()){
$num = $row['count'];	
}
$sql3 = "SELECT COUNT(Result) as count FROM blackjack WHERE PID ='$ID' AND Result=1"; 
$result = $conn->query($sql3);
while($row = $result->fetch_assoc()){
$win= $row['count'];	
}
$rate = round($win/$num*100, 2);
?>
</table>
<?php
echo"遊玩次數:$num  勝利次數:$win  勝率:$rate%";
?>
<br><br>
<h1>輪盤</h1>
<button type="button" class="btn btn-primary"  onclick="location.href='home.php'">返回主畫面</button>    
</body>

    <script src="resources/experiments.js"></script>
    <link rel="stylesheet" href="resources/bootstrap.min.css" charset="utf-8">
    <link rel="stylesheet" href="resources/experiments.css" charset="utf-8">
    <link rel="stylesheet" href="resources/utility.css" charset="utf-8">
</html>
