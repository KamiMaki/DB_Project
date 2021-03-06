<?php
session_start();
?>
<html>
<head>

	<title>BlackJack</title>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-noty/2.3.7/packaged/jquery.noty.packaged.min.js"></script>
	<link rel="stylesheet" href="resources/bootstrap.min.css?v=<?=time();?>" charset="utf-8">
    <link rel="stylesheet" href="resources/experiments.css?v=<?=time();?>" charset="utf-8">
    <link rel="stylesheet" href="resources/utility.css" charset="utf-8">
</head>
    <body background="https://i.imgur.com/VRNsY4W.jpg">
	<h1 class="one" style="font-family:Microsoft JhengHei;color:#ffffff;"">
		<?php
		if(isset($_SESSION))
		{
			$asset = floatval($_SESSION['player']['asset']);
			echo $_SESSION['player']['name']." 歡迎\n";
			echo '<br>';
		}
		?>
		<p id="p1" style="font-family:Microsoft JhengHei;"></p>
		<script>
		var asset = <?php echo $asset ?>;
		function print_asset()
		{
			document.getElementById("p1").innerHTML = "您目前有籌碼"+asset+"枚";
		}
		print_asset();
		</script>
	</h1>
    <table width="100%">
      <tr> 
        <td>
          <div align="left" style="font-family:Microsoft JhengHei;color:white;font-size:20px;">
           Black Jack
          </div>
        </td>
        <td>
          <div align="right">
          </div> 
        </td>
      </tr>
    </table>
      <hr>
        <table id="tableboard" >
       <tr>
        <td id="player1"><img src="resources\poker\com.png" width="150px" height="150px" /></td>
        <td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/>
      </tr>
      <tr>
        <td id="player2" ><img src="resources\poker\player.png" width="150px" height="150px" /></td>
        <td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/>
      </tr>
    </table>
    <hr>
 
          <div id="score" style="font-family:Microsoft JhengHei;color:white;font-size:20px;"></div>
     
		<br>
        
          <div id="bulletin" style="font-family:Microsoft JhengHei;color:white;font-size:20px;">請選擇你的下一步</div>
       

    <hr>
	<div>
    <input type="button" class="btn btn-primary" value = "發牌" id="hit" onclick="hit();"/>
    <input type="button" class="btn btn-primary" id="stand" value = "停" onclick="stand();"/>
    <!--<input type="button" id="restart" value="再玩一局 (FIGHT AGAIN)" onclick="location.reload();" />-->	
    <input type="button"  class="btn btn-primary"id="restart" value ="再玩一局" onclick="restart();"/>
	<button type="button"  class="btn btn-primary" onclick="location.href='home.php'">返回主頁面</button>
	
		<script type="text/javascript">
		$.noty.defaults.theme = 'relax';
	
var counter = 0; //发牌次数
var winner = ""; //胜利者 player1 - 电脑/player2 - 玩家
var hasStood = false; //标记玩家是否已经不要牌

//所有的牌
var cards = [
"club01", "club02", "club03", "club04", "club05", "club06", "club07", 
"club08", "club09", "club10", "club11", "club12", "club13", "diamond01", 
"diamond02", "diamond03", "diamond04", "diamond05", "diamond06", "diamond07",
"diamond08", "diamond09", "diamond10", "diamond11", "diamond12", "diamond13", 
"heart01", "heart02", "heart03", "heart04", "heart05", "heart06", "heart07", 
"heart08", "heart09", "heart10", "heart11", "heart12", "heart13", 
"spade01", "spade02", "spade03", "spade04", "spade05", "spade06", "spade07", 
"spade08", "spade09", "spade10", "spade11", "spade12", "spade13"];

//生成随机数
var getRand = function (begin, end) {
    return Math.floor(Math.random() * (end - begin)) + begin;
}

//洗牌
var rand, tmp;
for (var i = 0; i < 1000; i++) {
    rand = getRand(1, 52);
    tmp = cards[0];
    cards[0] = cards[rand];
    cards[rand] = tmp;
}

//玩家手牌
var cards1 = [getNewCard(), getNewCard()];
var cards2 = [getNewCard(), getNewCard()];

var table = document.getElementById("tableboard");
table.rows[0].cells[1].innerHTML = "<img src=\"resources/poker/cardback.png\" width=\"150px\" height=\"220px\"/>";
table.rows[0].cells[2].innerHTML = "<img src=\"resources/poker/" + cards1[1] + ".png\" width=\"150px\" height=\"220px\"/>";
table.rows[1].cells[1].innerHTML = "<img src=\"resources/poker/" + cards2[0] + ".png\" width=\"150px\" height=\"220px\"/>";
table.rows[1].cells[2].innerHTML = "<img src=\"resources/poker/" + cards2[1] + ".png\" width=\"150px\" height=\"220px\"/>";
showScore();

//玩家再要一张牌
function hit() {
    getNewCard("player2");
    if(checkIfBust("player2")) {
        document.getElementById("bulletin").innerHTML = "你的點數爆了";
		noty({ text: '你輸了10元',type: 'error',timeout: 2000});
		var result1 = calcResult("player1");
        var result2 = calcResult("player2");
        document.getElementById("hit").disabled = true;
        document.getElementById("stand").disabled = true;
        winner = "player1";
		asset = asset-10;
		print_asset();
		$.ajax({
		type: "post",
		url:"asset_update.php",
		data : {asset:asset ,point1:result1,point2:result2,result:-1,money:-10}
		});
    }
    showScore();
}

//玩家选择不要了
function stand() {
    hasStood = true;
    document.getElementById("hit").disabled = true;
    document.getElementById("stand").disabled = true;
    table.rows[0].cells[1].innerHTML = "<img src=\"resources/poker/" + cards1[0] + ".png\" width=\"150px\" height=\"220px\"/>";
    //电脑开始要牌
    while (calcResult("player1") < 17) {
        getNewCard("player1");
        if(checkIfBust("player1")) {
            document.getElementById("bulletin").innerHTML = "莊家點數爆了";
            document.getElementById("hit").disabled = true;
            document.getElementById("stand").disabled = true;
			var result1 = calcResult("player1");
            var result2 = calcResult("player2");
			noty({ text: '你贏了10元',type: 'success',timeout: 2000});
            winner = "player2";
			asset = asset+10;
			print_asset();
			$.ajax({
			type: "POST",
			url:"asset_update.php",
			data : {asset:asset ,point1:result1,point2:result2,result:1,money:10}
			});
			
			
        }
    }
    //如两名玩家都未爆掉，则以分数高者为胜
    if (winner == "") {
        var result1 = calcResult("player1");
        var result2 = calcResult("player2");
        if (result1 == result2) {
            document.getElementById("bulletin").innerHTML = "平手!!";
			noty({ text: '平手',type: 'warning',timeout: 2000});
			$.ajax({
			type: "POST",
			url:"asset_update.php",
			data : {asset:asset ,point1:result1,point2:result2,result:0,money:0}
			});
        } else if (result1 > result2) {
            document.getElementById("bulletin").innerHTML = "你輸了";
			noty({ text: '你輸了10元',type: 'error',timeout: 2000});
			asset = asset-10;
			print_asset();
			$.ajax({
			type: "POST",
			url:"asset_update.php",
			data : {asset:asset ,point1:result1,point2:result2,result:-1,money:-10}
			});
		
			
        } else if (result1 < result2) {
            document.getElementById("bulletin").innerHTML = "你赢了";
			noty({ text: '你贏了10元',type: 'success',timeout: 2000});
			asset = asset+10;
			print_asset();
			$.ajax({
			type: "POST",
			url:"asset_update.php",
			data : {asset:asset ,point1:result1,point2:result2,result:1,money:10}
			});
				
        }
    }
    showScore();
}

//获取一张新牌
function getNewCard(player) {
    var card = cards[counter++];
    if (player == "player1") {
        var len = cards1.length;
        cards1[len] = card;
        table.rows[0].cells[len + 1].innerHTML = 
            "<img src=\"resources/poker/" + cards1[len] + ".png\" width=\"150px\" height=\"220px\"/>";
    } else if (player == "player2") {
        var len = cards2.length;
        cards2[len] = card;
        table.rows[1].cells[len + 1].innerHTML = 
            "<img src=\"resources/poker/" + cards2[len] + ".png\" width=\"150px\" height=\"220px\"/>";
    }
    return card;
}

//判断当前情况是否爆掉
function checkIfBust(player) {
    var result = 0;
    if (player == "player1") {
        for (var i = 0; i < cards1.length; i++) {
            //parseInt一定要指定10进制，否则IE8下报错
            var c = parseInt(cards1[i].substr(cards1[i].length - 2), "10");
            if (c > 10) {
                c = 10;
            }
            result += c;
        }
        if (result > 21) {
            return true;
        } else {
            return false;
        }
    } else if (player == "player2") {
        for (var i = 0; i < cards2.length; i++) {
            var c = parseInt(cards2[i].substr(cards2[i].length - 2), "10");
            if (c > 10) {
                c = 10;
            }
            result += c;
        }
        if (result > 21) {
            return true;
        } else {
            return false;
        }
    }
}

//计算一名玩家的得分分数
function calcResult(player) {
    var result = 0;
    var countOfA = 0;
    if (player == "player1") {
        for (var i = 0; i < cards1.length; i++) {
            var c = parseInt(cards1[i].substr(cards1[i].length - 2), "10");
            if (c > 10) {
                c = 10;
            } else if (c == 1) {
                countOfA++;
            }
            result += c;
        }
        for (var i = 0; i < countOfA; i++) {
            if (result + 10 <= 21) {
                result += 10;
            } else {
                break;
            }
        }
    } else {
        for (var i = 0; i < cards2.length; i++) {
            var c = parseInt(cards2[i].substr(cards2[i].length - 2), "10");
            if (c > 10) {
                c = 10;
            } else if (c == 1) {
                countOfA++;
            }
            result += c;
        }
        for (var i = 0; i < countOfA; i++) {
            if (result + 10 <= 21) {
                result += 10;
            } else {
                break;
            }
        }
    }
    return result;
}

function showScore() {
    var result1 = calcResult("player1");
    var result2 = calcResult("player2");
    document.getElementById("score").innerHTML = 
        "莊家點數:" + (hasStood == true ? result1 : "?") + "\n你的點數:" + result2 ;
	
	
}

function restart() {
    document.getElementById("hit").disabled = false;
    document.getElementById("stand").disabled = false;
    counter = 0; //发牌次数
    winner = ""; //胜利者 player1 - 电脑/player2 - 玩家
    hasStood = false; //标记玩家是否已经不要牌
    cards = [
    "club01", "club02", "club03", "club04", "club05", "club06", "club07", 
    "club08", "club09", "club10", "club11", "club12", "club13", "diamond01", 
    "diamond02", "diamond03", "diamond04", "diamond05", "diamond06", "diamond07",
    "diamond08", "diamond09", "diamond10", "diamond11", "diamond12", "diamond13", 
    "heart01", "heart02", "heart03", "heart04", "heart05", "heart06", "heart07", 
    "heart08", "heart09", "heart10", "heart11", "heart12", "heart13", 
    "spade01", "spade02", "spade03", "spade04", "spade05", "spade06", "spade07", 
    "spade08", "spade09", "spade10", "spade11", "spade12", "spade13"];
    //洗牌
    for (var i = 0; i < 1000; i++) {
        rand = getRand(1, 52);
        tmp = cards[0];
        cards[0] = cards[rand];
        cards[rand] = tmp;
    }
    //玩家手牌
    cards1 = [getNewCard(), getNewCard()];
    cards2 = [getNewCard(), getNewCard()];
    table.rows[0].cells[1].innerHTML = "<img src=\"resources/poker/cardback.png\" width=\"150px\" height=\"220px\">";
    table.rows[0].cells[2].innerHTML = "<img src=\"resources/poker/" + cards1[1] + ".png\" width=\"150px\" height=\"220px\"/>";
    table.rows[1].cells[1].innerHTML = "<img src=\"resources/poker/" + cards2[0] + ".png\" width=\"150px\" height=\"220px\"/>";
    table.rows[1].cells[2].innerHTML = "<img src=\"resources/poker/" + cards2[1] + ".png\" width=\"150px\" height=\"220px\"/>";
    //清空牌桌
    for (var i = 3; i < table.rows[0].cells.length; i++) {
        table.rows[0].cells[i].innerHTML = "";
        table.rows[1].cells[i].innerHTML = "";
    }
    showScore();
    document.getElementById("bulletin").innerHTML = "請選擇你的下一步";
}


	</script>
	</div>
	

</body>
</html>