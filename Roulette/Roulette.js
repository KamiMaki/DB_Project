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
