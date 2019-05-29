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
    <link rel="stylesheet" href="resources/bootstrap.min.css" charset="utf-8">
    <link rel="stylesheet" href="resources/experiments.css" charset="utf-8">
    <link rel="stylesheet" href="resources/utility.css" charset="utf-8">
    <title>主頁面</title>
	<h1 style="font-family:Microsoft JhengHei;">
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
<body >   
<input id="number" type="number">
<button onclick="getjoke()">確定</button>
<br>
<h1 >笑話</h1>
<script type="text/javascript">
function getjoke()
{
	var num = document.getElementById("number").value;
	$.ajax({
			type: "POST",
			async: false,
			url:"getfun.php",
			data : {num:num},
			dataType: "text",
			success:function( result ){
				document.getElementById("joke_area").innerHTML = result; 
			}
			});
}
</script>
<textarea cols="50" rows="15" id="joke_area" >
</textarea>
<br>
<h1 >影片</h1>
<input id="number2" type="number">
<button onclick="getyt()">確定</button>
<script type="text/javascript">
function getyt()
{
	var num = document.getElementById("number2").value;
	$.ajax({
			type: "POST",
			async: false,
			url:"getyt.php",
			data : {num:num},
			dataType: "text",
			success:function( result ){
				var link = "http://www.youtube.com/v/"+result; 
				document.getElementById("yt").setAttribute('data',link);
				document.getElementById("yt2").setAttribute('value',link);
			}
			});
}
</script>
<br>
<object id = "yt" width="560" height="315" data="" type="application/x-shockwave-flash"><param id = "yt2" name="src" value="" / ></object>
<br>
<button type="button" class="btn btn-primary"  onclick="location.href='home.php'">返回主頁面</button>
</body>
 
</html>
