<?php $img = 'images/bg-01.jpg'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>MRS | CODEVI </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="src/vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="src/vistas/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="src/vistas/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/vistas/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="src/vistas/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="src/vistas/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="src/vistas/css/util.css">
	<link rel="stylesheet" type="text/css" href="src/vistas/css/main.css">
</head>
<body style="background-color: #777777;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						APLIKASYON POU TRAVAY
						
					</span>
					
			 	<span class="login100-form-title p-b-43">
				    Antre
					</span>
				

					<div style="margin-top:-30px;" class="container-login100-form-btn">
						 
						 <a id="pusk" href="#" class="mibtn"> <i class="fa fa-power-off"></i></a> </div>
				  
				</div>
				<div class="login100-more" style="background-image: url('src/vistas/<?php echo  $img; ?>');"></div>
			</div>
		</div>
	</div>
		
<script src="src/vistas/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="src/vistas/vendor/animsition/js/animsition.min.js"></script>
<script src="src/vistas/vendor/bootstrap/js/popper.js"></script>
<script src="src/vistas/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="src/vistas/vendor/countdowntime/countdowntime.js"></script>
<script src="src/vistas/js/main.js"></script>
<script type="text/javascript">
 $('#pusk').click(function(){
	window.location="formulario"; 
	 
 })
</script>
</body>
</html>