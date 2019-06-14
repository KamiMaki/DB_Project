<?php
session_start();
?>
<!DOCTYPE html PUBLIC>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Store</title>
        <link rel="stylesheet" href="Store.css" type="text/css" media="screen" charset="utf-8" />
        <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-noty/2.3.7/packaged/jquery.noty.packaged.min.js"></script>
	</head>
    <body style="background-color:lightgreen;">
        <div class="main-container">
         <button type="button"  class="btn btn-primary topcorner" onclick="location.href='home.php'">返回主頁面</button>
		 <br>
		 <h1 class="one" style="font-family:Microsoft JhengHei;color:#ffffff;" >
        <?php
        if(isset($_SESSION))
        {
			$asset = floatval($_SESSION['player']['asset']);
            echo $_SESSION['player']['name'];
        }
        ?>
		<p id="p1"></p></h2>
		
		<script type="text/javascript">
		var asset = <?php echo $asset ?>;
		function print_asset()
		{
			document.getElementById("p1").innerHTML = "您目前有籌碼"+asset+"枚";
		}
		print_asset();
		</script>
		</h1>
		<br><br><br>
                <hr>
            <h2 class="s-title" align="center">籌碼區</h2>
        </div>
        <table width="100%" style="table-layout:fixed">
            <tr align="center">
                <td class="le_1" >
                    <div class="card-container">
                        <div class="swiper-container card-goods-list swiper-container-horizontal">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide card swiper-slide-active" style="width: 259.667px; margin-right: 30px;">
                                    <div class="display:inline;"><img src="resources/one_coin.png" alt="100顆籌碼"></div>
                                        <span class="info">
                                            <h3 class="name">100顆籌碼</h3>
                                                <div><span class="discount">售價$NT<span>150</span></span></div>

                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">購買</button>
                                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title" id="myModalLabel">是否確認花費NT 150 元購買 100 枚籌碼</h4>
                                                            </div>
                                                            <div class="modal-body" id="1"></div>
                                                            <div class="modal-footer">                                                            
                                                            <script>
                                                            function buy_100() {
                                                           
															asset = asset+100;
															print_asset();
                                                            $.ajax({
                                                            type: "post",
                                                            url:"Buy.php",
                                                            data : {asset:asset}
                                                            });
                                                            	
															
                                                            }
                                                            </script>
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                                                                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="buy_100()" >確認</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                        </span>
                                </div>
                 </td>
                <td class="le_1">
                    <div class="swiper-slide card swiper-slide-next" style="width: 259.667px; margin-right: 30px;">
                            <div class="display:inline;"><img src="resources/pile_coin.jpg" alt="500顆籌碼"></div>
                                <span class="info">
                                    <h3 class="name">500顆籌碼</h3>
                                        <div><span class="discount">售價$NT<span>730</span></span></div>

                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">購買</button>
                                        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                        <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title" id="myModalLabel1">是否確認花費NT 730 元購買 500 枚籌碼</h4>
                                                        </div>
                                                    <div class="modal-body" id="2"></div>
                                                    <div class="modal-footer">
                                                    <script>
                                                        function buy_500() {
														asset = asset+500;
														print_asset();
                                                       
														   $.ajax({
                                                            type: "post",
                                                            url:"Buy.php",
                                                            data : {asset:asset}
                                                            });
															
                                                        }
                                                        </script>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="buy_500()" >確認</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </span>
                    </div>
                </td>
                <td class="le_1">
                    <div class="swiper-slide card" style="width: 259.667px; margin-right: 30px;">
                            <div class="display:inline;"><img src="resources/bag_coin.jpg" alt="1000顆籌碼"></div>
                                <span class="info">
                                     <h3 class="name">1000顆籌碼</h3>
                                        <div><span class="discount">售價$NT<span>1400</span></span></div>

                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">購買</button>
                                            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <h4 class="modal-title" id="myModalLabel2">是否確認花費NT 1400 元購買 1000 枚籌碼</h4>
                                                        </div>
                                                    <div class="modal-body" id="3"></div>
                                                    <div class="modal-footer">
                                                    <script>
                                                        function buy_1000() {
															asset = asset+1000;
															print_asset();
                                                       
														   $.ajax({
                                                            type: "post",
                                                            url:"Buy.php",
                                                            data : {asset:asset}
                                                            });
															
                                                        }
                                                        </script>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="buy_1000()" >確認</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                </span>
                        </div>
                </td>
                <td class="le_1">
                    <div class="swiper-slide card" style="width: 259.667px; margin-right: 30px;">
                            <div class="display:inline;"><img src="resources/box_coin.jpg" alt="2000顆籌碼"></div>
                                <span class="info">
                                    <h3 class="name">2000顆籌碼</h3>
                                        <div><span class="discount">售價$NT<span>2500</span></span></div>

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">購買</button>
                                    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel3">是否確認花費NT 2500 元購買 2000 枚籌碼</h4>
                                                </div>
                                            <div class="modal-body"></div>
                                            <div class="modal-footer">
                                            <script>
                                                function buy_2000() {
													asset = asset+2000;
															print_asset();
                                               
												   $.ajax({
                                                            type: "post",
                                                            url:"Buy.php",
                                                            data : {asset:asset}
                                                            });
															
                                                }
                                                </script>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                                                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="buy_2000();" id="4">確認</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                    </div>
                </td>
            </tr>
        </table>
                <div class="card-next card-goods-next"></div>
                <div class="card-prev card-goods-prev swiper-button-disabled"></div>
                </div>
                <div class="container">
                <h2 class="s-title" align="center">其他道具</h2>
                </div>
                <div class="card-container">
                    <table width="100%" style="table-layout:fixed">
                        <tr align="center">
                            <td class="le_1">
                                <div class="swiper-container card-event-list swiper-container-horizontal">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide card swiper-slide-active" style="width: 259.667px; margin-right: 30px;">
                                                <div class="thumb"><img src="resources/speaker.jpg" alt="全頻廣播麥克風1個"></div>
                                                <span class="info">
                                                    <h3 class="name">全頻廣播麥克風1個</h3>
                                                    <span class="price" style="height: 28px;">售價$NT<span class="number">100</span></span>
                                                   
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">購買</button>
                                                    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                <h4 class="modal-title" id="myModalLabel4">是否確認花費NT 100 元購買 1 個麥克風</h4>
                                                                </div>
                                                            <div class="modal-body"></div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                                                                <button type="button" class="btn btn-primary">確認</button>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                            <div class="card-next card-event-next"></div>
                        <div class="card-prev card-event-prev swiper-button-disabled"></div>
                </div>
            </div>
        </div>
	</body>
	 <link rel="stylesheet" href="resources/bootstrap.min.css?v=<?=time();?>" charset="utf-8">
    <link rel="stylesheet" href="resources/experiments.css?v=<?=time();?>" charset="utf-8">
    <link rel="stylesheet" href="resources/utility.css" charset="utf-8">
</html>