<!DOCTYPE html >
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>European roulette</title>
		<link rel="stylesheet" href="Roulette.css" type="text/css" media="screen" charset="utf-8" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	    <!--<script language="javascript" src="Roulette.js"></script>-->
	</head>
	<body>
	<div class="container">
		<div class="header">European Roulette</div>
		<button type="button" div class="start" id="spin"><div class="start-label">Spin</span></button>
		<button type="button" div class="start" id="reset"><div class="start-label">Reset</span></button>
		<div><table  border="0" cellspacing="0" cellpadding="0">
			<tr class="btns">
				<td colspan="3">&nbsp;</td>
				<td id="btn1"><div class="btn">&nbsp;</div>1</td>
				<td id="btn2"><div class="btn">&nbsp;</div>2</td>
				<td id="btn3"><div class="btn">&nbsp;</div>3</td>
				<td id="btn4"><div class="btn">&nbsp;</div>4</td>
				<td id="btn5"><div class="btn">&nbsp;</div>5</td>
				<td id="btn6"><div class="btn">&nbsp;</div>6</td>
				<td id="btn7"><div class="btn">&nbsp;</div>7</td>
				<td id="btn8"><div class="btn">&nbsp;</div>8</td>
				<td id="btn9"><div class="btn">&nbsp;</div>9</td>
				<td id="btn10"><div class="btn">&nbsp;</div>10</td>
				<td id="btn11"><div class="btn">&nbsp;</div>11</td>
				<td id="btn12"><div class="btn">&nbsp;</div>12</td>
				<td>&nbsp;</td>
            </tr>
			<tr>
				<td rowspan="5"><img src="circled.png" width="192" height="195" /></td>
				<td class="zb" rowspan="5"><img src="border.png" width="24" height="120" /></td>
				<td rowspan="3"  id="zero"><div class="rot270">0</div></td>
				<td id="cell3" class="red ftdo"><div class="rot270">3</div></td>
				<td id="cell6" class="black ftdo"><div class="rot270">6</div></td>
				<td id="cell9" class="red ftdo"><div class="rot270">9</div></td>
				<td id="cell12" class="red ftdo"><div class="rot270">12</div></td>
				<td id="cell15" class="black ftdo"><div class="rot270">15</div></td>
				<td id="cell18" class="red ftdo"><div class="rot270">18</div></td>
				<td id="cell21" class="red ftdo"><div class="rot270">21</div></td>
				<td id="cell24" class="black ftdo"><div class="rot270">24</div></td>
				<td id="cell27" class="red ftdo"><div class="rot270">27</div></td>
				<td id="cell30" class="red ftdo"><div class="rot270">30</div></td>
				<td id="cell33" class="black ftdo"><div class="rot270">33</div></td>
				<td id="cell36" class="red ftdo"><div class="rot270">36</div></td>
				<td class="le_1"><div class="rot270">2-1</div></td>
			</tr>
			<tr>
				<td id="cell2" class="black"><div class="rot270">2</div></td>
				<td id="cell5" class="red"><div class="rot270">5</div></td>
				<td id="cell8" class="black"><div class="rot270">8</div></td>
				<td id="cell11" class="black"><div class="rot270">11</div></td>
				<td id="cell14" class="red"><div class="rot270">14</div></td>
				<td id="cell17" class="black"><div class="rot270">17</div></td>
				<td id="cell20" class="black"><div class="rot270">20</div></td>
				<td id="cell23" class="red"><div class="rot270">23</div></td>
				<td id="cell26" class="black"><div class="rot270">26</div></td>
				<td id="cell29" class="black"><div class="rot270">29</div></td>
				<td id="cell32" class="red"><div class="rot270">32</div></td>
				<td id="cell35" class="black"><div class="rot270">35</div></td>
				<td class="le"><div class="rot270">2-1</div></td>
			</tr>
			<tr>
				<td id="cell1" class="red"><div class="rot270">1</div></td>
				<td id="cell4" class="black"><div class="rot270">4</div></td>
				<td id="cell7" class="red"><div class="rot270">7</div></td>
				<td id="cell10" class="black"><div class="rot270">10</div></td>
				<td id="cell13" class="black"><div class="rot270">13</div></td>
				<td id="cell16" class="red"><div class="rot270">16</div></td>
				<td id="cell19" class="black"><div class="rot270">19</div></td>
				<td id="cell22" class="black"><div class="rot270">22</div></td>
				<td id="cell25" class="red"><div class="rot270">25</div></td>
				<td id="cell28" class="red"><div class="rot270">28</div></td>
				<td id="cell31" class="black"><div class="rot270">31</div></td>
				<td id="cell34" class="red"><div class="rot270">34</div></td>
				<td class="le"><div class="rot270">2-1</div></td>
			</tr>
			<tr>
				<td rowspan="2">&nbsp;</td>
				<td class="lor" colspan="4">1st 12</td>
				<td class="lor" colspan="4">2nd 12</td>
				<td class="lor flor" colspan="4">3rd 12</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td class="lor" colspan="2">1-18</td>
				<td class="lor" colspan="2">Even</td>
				<td colspan="2" class="a_red">Red</td>
				<td colspan="2" class="a_black">Black</td>
				<td class="lor" colspan="2">Odd</td>
				<td class="lor flor" colspan="2">19-36</td>
			</tr>
		</table>
		<table class="downPC" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td id="col1"><div class="dbtn">&nbsp;</div>Column 1</td>
				<td id="col2"><div class="dbtn">&nbsp;</div>Column 2</td>
				<td id="col3"><div class="dbtn">&nbsp;</div>Column 3</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td id="br1"><div class="dbtn">&nbsp;</div>Bet row 1</td>
				<td id="br2"><div class="dbtn">&nbsp;</div>Bet row 2</td>
				<td id="br3"><div class="dbtn">&nbsp;</div>Bet row 3</td>
				<td id="br4"><div class="dbtn">&nbsp;</div>Bet row 4</td>
			</tr>
			<tr>
				<td id="ibr1"><div class="dbtn">&nbsp;</div>1<sup>st</sup> 12</td>
				<td id="ibr2"><div class="dbtn">&nbsp;</div>2<sup>nd</sup> 12</td>
				<td id="ibr3"><div class="dbtn">&nbsp;</div>3<sup>rd</sup> 12</td>
				<td>&nbsp;</td>
			</tr>
		</table>
			</div>
				<div class="data">
                	<div class="data-inner">
						<div class="mask"></div>
						<div class="result">
							<div class="result-number" id = "result_num" style="color:rgb(101, 192, 48);padding:10px; font-size:25px;">result:0</div>
							<div class="result-color" id = "result_color"style="color:rgb(101, 192, 48);padding:10px; font-size:25px;">green</div>
						</div>
                	</div>
                </div>
            </div>
	</div>
		<script type="text/javascript">
		function elemination(io){
        io.css('background','none').find('div').fadeOut('fast');
    }
    function resetEl(io){
        io.css('background','').find('div').fadeIn('fast');
    }
    $(document).ready(function(){

        //***** for top buttons
        $('[id^="btn"] div').toggle(function(){
            var num = parseInt($(this).parent().attr('id').slice(3));
            var btn = (num - 1) * 3 +1;
            for(i=0;i<3;i++)
                elemination($('#cell'+(btn+i) ));
        },function(){
            var num = parseInt($(this).parent().attr('id').slice(3));
            var btn = (num - 1) * 3 +1;
            for(i=0;i<3;i++)
                resetEl($('#cell'+(btn+i) ));
        });

        //****** for column buttons
        $('[id^="col"] div').toggle(function(){
            var num = parseInt($(this).parent().attr('id').slice(3));
            for(i=1;i<35;i+=3)
                elemination($('#cell'+(i+(num-1)) ));
        },function(){
            var num = parseInt($(this).parent().attr('id').slice(3));
            for(i=1;i<35;i+=3)
                resetEl($('#cell'+(i+(num-1)) ));
        });

        //****** for betrows buttons

        $('[id^="br"] div').toggle(function(){
            var num = (parseInt($(this).parent().attr('id').slice(2)) -1) * 3;
            for(i=1;i<26;i+=12)
                for(j=0;j<3;j++)
                    elemination($('#cell'+(i+num+j) ));
        },function(){
            var num = (parseInt($(this).parent().attr('id').slice(2)) -1) * 3;
            for(i=1;i<26;i+=12)
                for(j=0;j<3;j++)
                    resetEl($('#cell'+(i+num+j) ));
        });

        //******* last bottom buttons
        $('[id^="ibr"] div').toggle(function(){
            var num = (parseInt($(this).parent().attr('id').slice(3)) -1) * 12;
            for(i=1;i<13;i++)
                elemination($('#cell'+(i+num) ));
        },function(){
            var num = (parseInt($(this).parent().attr('id').slice(3)) -1) * 12;
            for(i=1;i<13;i++)
                resetEl($('#cell'+(i+num) ));
        });


    });

var $inner = $('.inner'),
$spin = $('#spin'),
$reset = $('#reset'),
$data = $('.data'),
$mask = $('.mask'),
maskDefault = 'Place Your Bets',
timer = 900;

var red = [32,28,21,25,34,27,36,30,23,5,16,1,14,9,18,7,12,3];

$spin.on('click',function(){

    // get a random number between 0 and 36 and apply it to the nth-child selector
    var  randomNumber = Math.floor(Math.random() * 36),color = null;
	document.write(randomNumber);
	document.write("5656");
    $inner.attr('data-spinto', randomNumber).find('li:nth-child('+ randomNumber +') input').prop('checked','checked');
    // prevent repeated clicks on the spin button by hiding it
    $(this).hide();
    // disable the reset button until the ball has stopped spinning
    $reset.addClass('disabled').prop('disabled','disabled').show();

    $('.placeholder').remove();

    // remove the disabled attribute when the ball has stopped
    setTimeout(function() {
    $reset.removeClass('disabled').prop('disabled','');

    if($.inArray(randomNumber, red) !== -1){ color = 'red'} else { color = 'black'};
    if(randomNumber == 0){color = 'green'};

    $('.result-number').text(randomNumber);
    $('.result-color').text(color);
    $('.result').css({'background-color': ''+color+''});
	var rm = document.getElementById('result_num');
	rm.innerHTML = randomNumber;

    $thisResult = '<li class="previous-result color-'+ color +'"><span class="previous-number">'+ randomNumber +'</span><span class="previous-color">'+ color +'</span></li>';

    }, timer);

});


$reset.on('click',function(){
// remove the spinto data attr so the ball 'resets'
$inner.attr('data-spinto','').removeClass('rest');
$(this).hide();
$spin.show();
$data.removeClass('reveal');
});

// so you can swipe it too
var myElement = document.getElementById('plate');
var mc = new Hammer(myElement);
mc.on("swipe", function(ev) {
if(!$reset.hasClass('disabled')){
if($spin.is(':visible')){
 $spin.click();  
} else {
 $reset.click();
}
}  
});

		
		
		</script>
	<button type="button"   onclick="history.back()">返回主畫面</button>  
	</body>
</html>