<!DOCTYPE html>
<html >

<head>
  <meta charset="UTF-8">
  <title>jQuery Roulette</title>
  
  
  
      <link rel="stylesheet" href="css/style.css?v=<?=time();?>">

  
</head>

<body background="https://i.imgur.com/VRNsY4W.jpg">
	<h1  style="font-family:Microsoft JhengHei;color:white;" >
	<?php
	session_start();
	if(isset($_SESSION))
	{
		echo $_SESSION['player']['name']." 歡迎\n";
		echo '<br>';
		echo "您目前有籌碼".$_SESSION['player']['asset']."枚";
	}
	?>
	</h1>
  <div class="spinner">

  <div class="ball"><span></span></div>
  <div class="platebg"></div>
  <div class="platetop"></div>
  <div id="toppart" class="topnodebox">
    <div class="silvernode"></div>
    <div class="topnode silverbg"></div>
    <span class="top silverbg"></span>
    <span class="right silverbg"></span>
    <span class="down silverbg"></span>
    <span class="left silverbg"></span>
  </div>
  <div id="rcircle" class="pieContainer">
    <div class="pieBackground"></div>
  </div>
</div>

<div class="control">
  <span class="message">
  </span>
  <div>
    <div id="btnSpin" class="button">Spin</div>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/138980/jquery.keyframes.min.js'></script>


  

    <script  src="js/index.js?v=<?=time();?>"></script>


<button type="button" class="button"  onclick="history.back()">返回主頁面</button>

</body>

</html>
