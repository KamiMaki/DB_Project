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

<button type="button"  onclick="location.href='home.php'">返回主頁面</button>
</body>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
    <script src="resources/experiments.js"></script>
    <link rel="stylesheet" href="resources/bootstrap.min.css" charset="utf-8">
    <link rel="stylesheet" href="resources/experiments.css" charset="utf-8">
    <link rel="stylesheet" href="resources/utility.css" charset="utf-8">
</html>
