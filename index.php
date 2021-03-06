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
    <script src="resources/experiments.js"></script>
    <link rel="stylesheet" href="resources/bootstrap.min.css?v=<?=time();?>" charset="utf-8">
    <link rel="stylesheet" href="resources/experiments.css?v=<?=time();?>" charset="utf-8">
    <link rel="stylesheet" href="resources/utility.css" charset="utf-8">
    <title>登入頁面</title>
	
	  
</head>

<body  background="https://i.imgur.com/VRNsY4W.jpg" >   

 <img src="resources/logo.png" style="display:block; margin:auto;" />

    <div class="experimentSAOModalRoot" >
            <div class="container p-a-2 experiment card experimentSAOModal sao-blur-behind text-info">
                <div class="row" >
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
										
                </div>
            </div>
        </div>

    
    <div class="experimentSAOModalRoot">
        
        <div class="modal fade sao" data-keyboard="false" data-backdrop="static" id="SAOModal" tabindex="-1" role="dialog" aria-labelledby="SAOModalLabel" aria-hidden="true">
            <div class="modal-dialog closed" role="document">
                <div class="modal-content">
                    <div class="modal-header text-xs-center">
                        <h4 class="modal-title" id="SAOModalTitle"></h4>
                    </div>
                    <div class="modal-body text-xs-center c-vcenter c-hcenter p-x-3">
                        <span id="SAOModalBody"></span>
                    </div>
                    <div class="modal-footer container-fluid p-y-2">
                        <div class="row">
                            <div class="col-xs-6 c-hcenter text-xs-center btnholder" id="SAOModalAccept">
                                <div class="SAOOuterCircle o">
                                </div>
                            </div>
                            <div class="col-xs-6 c-hcenter text-xs-center btnholder" id="SAOModalDeny">
                                <div class="SAOOuterCircle x">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <audio id="saoMenuOpenAudio">
            <source src="resources/sound/sao_menu_open.wav">
        </audio>
        
        <audio id="saoMenuSelectAudio">
            <source src="resources/sound/sao_menu_select.wav">
        </audio>
</div>
</body>	
<script src="resources/particles.js"></script>
	<script src="resources/app.js"></script>
</html>
