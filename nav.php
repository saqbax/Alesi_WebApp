<?php
	include('session.php');
?>

<header id="main-header">
<a href="profile.php" ><span ><img  src="../img/alesi_logo1.png" width="7.5%" alt="Alesi" /> <b>Bienvenido:</b> <?php echo $login_session; ?></span></a> 
	
    <nav  >
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand visible-xs-block visible-sm-block" href="">Inicio</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul >
						<li><a href="mc_list.php">Mantenimiento de casos</a></li>
						<li><a href="mp_list.php"<?php if(($login_rol == "USER")||($login_rol == "ASG")){echo "style='display:none'";}?>>Mantenimiento de personas</a></li>
						<li><a href="mu_list.php"<?php if(($login_rol == "USER")||($login_rol == "ASG")){echo "style='display:none'";}?>>Mantenimiento de usuarios</a></li>
						<li class="nav-item"><a class="nav-link" href="logout.php"> Cerrar sesión</a></li>
					</ul>
				</div><!--/.nav-collapse -->
		
	</nav>
</header>	