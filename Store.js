function buy_100(){
		document.getElementById("1").innerHTML = "購買成功";
    $.ajax({
		type: "post",
		url:"Buy.php",
		data : {asset:asset ,money:100}
		});
}

function buy_500(){
    $.ajax({
		type: "post",
		url:"Buy.php",
		data : {asset:asset ,money:500}
		});
}

function buy_1000(){
    $.ajax({
		type: "post",
		url:"Buy.php",
		data : {asset:asset ,money:1000}
		});
}

function buy_2000(){
    $.ajax({
		type: "post",
		url:"Buy.php",
		data : {asset:asset ,money:2000}
		});
}