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
</head>
<body >   
<?php
include ("connMySQL.php");
$ID = $_SESSION['player']['id'];
$sql = "SELECT * FROM blackjack WHERE PID ='$ID' ";
$result = $conn->query($sql);
?>
<br><br>
<table border="1">
　<tr>
　<td>結果</td><td>莊家點數</td><td>您的點數</td><td>金額</td>
　</tr>

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
?>
</table>
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
