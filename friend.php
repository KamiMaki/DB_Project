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

<form action="login.php" method="post" style="display:block; margin:auto;" data-toggle="validator">
	<div class="form-group" style="display:block; margin:auto;">
		Account: <input type="text" name="name" class="form-control" ><br>
		Password: <input type="password" name="pw" class="form-control" ><br>
		<div style="display:block; margin:auto;">
			<button type="submit" class="btn btn-primary" >登入</button>
			<button type="button" class="btn btn-primary"  onclick="location.href='register.html'">註冊</button>
		</div>
	</div>				
</form> 





<button type="button" class="btn btn-primary"  onclick="location.href='21.php'">21點</button>
<button type="button" class="btn btn-primary"  onclick="location.href='Roulette/r.html'">輪盤</button>
<button type="button" class="btn btn-primary"  onclick="location.href='logout.php'">登出</button>    
</body>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
    <script src="resources/experiments.js"></script>
    <link rel="stylesheet" href="resources/bootstrap.min.css" charset="utf-8">
    <link rel="stylesheet" href="resources/experiments.css" charset="utf-8">
    <link rel="stylesheet" href="resources/utility.css" charset="utf-8">
</html>
