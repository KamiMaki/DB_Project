<?php
session_start();
include ("connMySQL.php");
?>

<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>礦坑</title>
    <br>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="resources/bootstrap.min.css?v=<?=time();?>" charset="utf-8">
    <link rel="stylesheet" href="resources/experiments.css?v=<?=time();?>" charset="utf-8">
</head>

<body style="cursor:url('resources/Diamond Pickaxe (normal).cur'),auto;" background="https://i.imgur.com/VRNsY4W.jpg"> 
<h1 class="one" style="font-family:Microsoft JhengHei;color:#ffffff;">
<?php
    if(isset($_SESSION))
    {
        $asset = floatval($_SESSION['player']['asset']);
        echo $_SESSION['player']['name'];
    }
?>
    <p id="p5"></p>
<script type="text/javascript">
var asset = <?php echo $asset ?>;
function print_asset()
{
    document.getElementById("p5").innerHTML = "您目前有籌碼"+asset+"枚";
}
print_asset();
</script>
</h1>
<script>
function click1() {
    asset = asset+1;
    print_asset();
    $.ajax({
        type: "post",
        url:"Buy.php",
        data : {asset:asset}
    });
}
</script>

<script>
function sound1(surl) {
    document.getElementById("switch").innerHTML =
      "<embed src='" + surl + "' hidden=true autostart=true loop=false>";
}
</script>

<script>
function check1() {
    if(asset>299)
    {
        window.alert('您有錢了，將於確認後返回主頁面');
        location.href = 'home.php';
    }
	else
	{
		click1();
	}
}
</script>

 
<h2  style="font-family:Microsoft JhengHei;color:#ffffff;">點擊下圖挖礦</h2>
<embed src="resources/switch.mp3" autostart="false" enablejavascript="true" hidden="true" id="sound1">
<span id=switch></span>
<button  type="button" style=" background:transparent; font-size:50px; cursor:url('resources/Diamond Pickaxe (normal).cur'),auto;" onclick="sound1('resources/switch.mp3'); check1()">
<img style="cursor:url('resources/Diamond Pickaxe (normal).cur'),auto;"  src="resources/mine.jpg" width="300" height="300"/></button>
</div>
</div>
<br>
<br>
<button type="button" class="btn btn-primary"  onclick="location.href='home.php'">回到主頁面</button>
    
</h2>    
</body>
</html>