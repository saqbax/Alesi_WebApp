<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user_sys'])){
header("location: profile.php");
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Alesi</title>
		<!-- JQuery UI-->
		<script src="js/jquery-ui-1.12.1/jquery-ui.min.js"></script>
		<link href="js/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css" media="all"/>
		<!-- JQuery -->
		<script src="js/jquery-3.4.1.min.js"></script>
		<!-- Bootstrap -->
		<link href="css/style_nav.css" rel="stylesheet">
		<!-- Bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<!-- for-mobile-apps -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		<meta name="keywords" content="Flat Login Form Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<!-- //for-mobile-apps -->
		<!--Google Fonts-->
		<link href='//fonts.googleapis.com/css?family=Signika:400,600' rel='stylesheet' type='text/css'>
		<!--google fonts-->

<!--===============================================================================================-->	
   <link rel="icon" type="image/png" href="index_/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="index_/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="index_/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="index_/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="index_/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="index_/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="index_/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="index_/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="index_/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="index_/css/util.css">
	<link rel="stylesheet" type="text/css" href="index_/css/main.css">
<!--===============================================================================================-->


	</head>
	<body>
		<!--header start here>
		<h1>Formulario de inicio de sesión</h1-->
<div class="limiter">
	<div class="container-login100" style="background-image: url('index_/images/bg-01.jpg');">
		<div class="wrap-login100">
			<div class="card-body">
				<form action="#" method="post" class="login100-form validate-form">
					<span class="login100-form-logo">
						<img src="img/alesi_logo1.png" width="300"></img>
					</span>
					<span class="login100-form-title p-b-34 p-t-27">	
					<br>
					<br>
					Inicio de Sesión
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="email" name="username" placeholder="Correo electrónico">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>


					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>


					<div class="form-group container-login100-form-btn">
						<!-- Button trigger modal -->
						<button type="button" class="btn login100-form-btn" data-toggle="modal" data-target="#exampleModal">Entrar</button>
						<button class="btn btn-primary" name="submit" type="submit" id="ingresa" style="display:none">Ingresar</button>
					</div>	

				</form>
			<div class="clear"> </div>
				<span><?php echo $error; echo $variable; ?></span>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Acuerdo de Confidencialidad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="text-align:justify;">La divulgación o el uso de la Información por el Receptor en infracción de este acuerdo será considerado causal de indemnización de perjuicios. Usted se compromete a tratar confidencialmente toda la información recibida directa o indirectamente del
divulgador, y no utilizar ningún dato de esa información de ninguna manera distinta al propósito del presente acuerdo. Si decide Ingresar</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick = "document.getElementById('ingresa').click()">Ingresar</button>
      </div>
    </div>
  </div>
</div>



	</body>
</html>