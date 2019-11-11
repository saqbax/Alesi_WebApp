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
		<!-- JQuery -->
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
	</head>
	<body>
		<!--header start here>
		<h1>Formulario de inicio de sesión</h1-->
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Inicio de Sesión</h3>
				<div class="d-flex justify-content-end social_icon">
					<!--span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span-->
				</div>
			</div>
			<div class="card-body">
				<form action="#" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<!--label for="exampleInputEmail1">Correo electrónico</label-->
						<input type="email" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo electrónico">
						<!--small id="emailHelp" class="form-text text-muted">Aqui es donde tienes que capturar tu correo Electronico</small-->
					  </div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
							<!--label for="exampleInputPassword1">Password</label-->
							<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
					<div class="row align-items-center remember">
						<!--input type="checkbox">Recordar mi usuario</input-->
					</div>
					<div class="form-group">
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Entrar</button>
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