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
    <script src="resources/experiments.js"></script>
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

<body class="loading" id="page" >   


<script>
   //noty({ text: 'My first notification using noty'});
</script>

<div class="topcorner">
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
</div>

<button type="button" class="btn btn-primary"  onclick="location.href='21.php'">21點</button>
<button type="button" class="btn btn-primary"  onclick="location.href='Roulette/r.html'">輪盤</button>
<button type="button" class="btn btn-primary"  onclick="location.href='friend.php'">好友</button>
<button type="button" class="btn btn-primary"  onclick="location.href='Leaderboard.php'">排行榜</button>
<button type="button" class="btn btn-primary"  onclick="location.href='logout.php'">登出</button>
    
</body>
 
		<script type='text/javascript'>
							var strUrl = location.search;
							if (strUrl.indexOf("?") != -1) 
							{
								var getSearch = strUrl.split("?");
								Message('Message',getSearch[1]);
							}
							</script>
     
    <script type="text/javascript">
        $(document).ready( function () {
            var saoMenuOpenAudio = document.getElementById("saoMenuOpenAudio");
            var saoMenuSelectAudio = document.getElementById("saoMenuSelectAudio");
        });
    </script>
    
    <link rel="stylesheet" href="resources/bootstrap.min.css" charset="utf-8">
    <link rel="stylesheet" href="resources/experiments.css" charset="utf-8">
    <link rel="stylesheet" href="resources/utility.css" charset="utf-8">
</html>