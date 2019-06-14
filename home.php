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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-noty/2.3.7/packaged/jquery.noty.packaged.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="resources/bootstrap.min.css?v=<?=time();?>" charset="utf-8">
    <link rel="stylesheet" href="resources/experiments.css?v=<?=time();?>" charset="utf-8">
    <link rel="stylesheet" href="resources/utility.css" charset="utf-8">
    <script src="resources/experiments.js"></script>
    <title>主頁面</title>
	<marquee scrollamount="10" bgcolor="#FFFF00" behavior="alternate" style="color:#FF0000; font-size:40px"><?php for ( $i=0 ; $i<20 ; $i++ ) { echo "發大財&emsp;&emsp;&emsp;&emsp;";}?></marquee>
	
	<h1 class="one" style="font-family:Microsoft JhengHei;color:#ffffff;" >
	<?php
	if(isset($_SESSION))
	{
		echo $_SESSION['player']['name']." 歡迎\n";
		echo '<br>';
		echo "您目前有籌碼".intval($_SESSION['player']['asset'])."枚";
	}
	?>
	</h1>	  
	
</head>
<body background="https://i.imgur.com/VRNsY4W.jpg">
<!--<div class="topcorner">
<div class="dropdown">
<button type="button" style="border: 0; background: transparent" data-toggle="dropdown">
<img src="resources/add-friend.png" width="70" height="70" />
  <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" >
    <li><a href="#">HTMLaaaaaaaaaaaaaaaaaaaaaaaaaaa</a></li>
    <li><a href="#">CSS</a></li>
    <li><a href="#">JavaScript</a></li>
  </ul>
</div>
</div>-->
<div>
    <a href="21.php" style="color:#ffffff;float:left; margin:30px">
    <img src="resources/bj.png" width="220" height="220" />
	<h3 style="font-family:Lato; text-align:center;">BlackJack</h3>
  </a>
  
      <a href="Roulette/index.php" style="color:#ffffff;float:left;margin:30px">
    <img src="resources/roulette.png" width="220" height="220" />
	<h3 style="font-family:Lato; text-align:center;">Roulette</h3>
  </a>
  
      <a href="friend.php" style="color:#ffffff;float:left;margin:30px">
    <img src="resources/friendship.png" width="220" height="220" />
	<h3 style="font-family:Lato;text-align:center;">Friend</h3>
  </a>
  
      <a href="Leaderboard.php" style="color:#ffffff;float:left;;margin:30px">
    <img src="resources/ranking.png" width="220" height="220" />
	<h3 style="font-family:Lato;text-align:center;">Leaderboard</h3>
  </a>
  <br>
  </div>
  <div style="clear: both">
      <a href="Score.php" style="color:#ffffff;float:left; margin:30px">
    <img src="resources/graph.png" width="220" height="220" />
	<h3 style="font-family:Lato;text-align:center;">Score</h3>
  </a>
  
        <a href="fun.php" style="color:#ffffff;float:left;margin:30px">
    <img src="resources/jester.png" width="220" height="220" />
	<h3 style="font-family:Lato;text-align:center;">Jokes</h3>
  </a>
  
      <a href="Store.php" style="color:#ffffff;float:left;margin:30px">
    <img src="resources/online-store.png" width="220" height="220" />
	<h3 style="font-family:Lato;text-align:center;">Store</h3>
  </a>
  
      <a href="cookie.php" style="color:#ffffff;float:left;margin:30px">
    <img src="resources/mining.png" width="220" height="220" />
	<h3 style="font-family:Lato;text-align:center;">Mine</h3>
  </a>
  </div>
<button type="button" class="btn btn-primary topcorner1"  onclick="location.href='logout.php'">登出</button>  





<!--<button type="button" class="btn btn-primary"  onclick="location.href='21.php'">21點</button>
<button type="button" class="btn btn-primary"  onclick="location.href='Roulette/index.php'">輪盤</button>
<button type="button" class="btn btn-primary"  onclick="location.href='friend.php'">好友</button>
<button type="button" class="btn btn-primary"  onclick="location.href='Leaderboard.php'">排行榜</button>
<button type="button" class="btn btn-primary"  onclick="location.href='Score.php'">戰績統計</button>
<button type="button" class="btn btn-primary"  onclick="location.href='fun.php'">笑話影片區</button>
<button type="button" class="btn btn-primary"  onclick="location.href='Store.php'">商城</button>
<button type="button" class="btn btn-primary"  onclick="location.href='cookie.php'">挖礦區</button>
<button type="button" class="btn btn-primary"  onclick="location.href='logout.php'">登出</button>-->
    
</body>

</html>
