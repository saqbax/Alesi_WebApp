<?php
	include('session.php');
?>
	<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand visible-xs-block visible-sm-block" href="">Inicio</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav ">
					<li class="active"><a href="profile.php">Lista de empleados</a></li>
					<li><a href="add.php">Agregar datos</a></li>
					<li class="nav-item"><a class="nav-link" href="logout.php"> Cerrar sesión</a></li>
				</ul>
			</div><!--/.nav-collapse -->
	</div>