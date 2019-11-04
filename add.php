<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan MySQLi</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datepicker.css" rel="stylesheet">
	<link href="css/style_nav.css" rel="stylesheet">
	<style>
		.content {
			margin-top: 80px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<?php include("nav.php");?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Datos de persona &raquo; Alta de datos</h2>
			<hr />

			<?php
			if(isset($_POST['add'])){
				$ID_PERSONA		     = mysqli_real_escape_string($con,(strip_tags($_POST["ID_PERSONA"],ENT_QUOTES)));//Escanpando caracteres 
				$NOMBRE		     = mysqli_real_escape_string($con,(strip_tags($_POST["NOMBRE"],ENT_QUOTES)));//Escanpando caracteres 
				$EMAIL	 = mysqli_real_escape_string($con,(strip_tags($_POST["EMAIL"],ENT_QUOTES)));//Escanpando caracteres 
				$ID_EMPRESA	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_EMPRESA"],ENT_QUOTES)));//Escanpando caracteres 
				$EDAD	     = mysqli_real_escape_string($con,(strip_tags($_POST["EDAD"],ENT_QUOTES)));//Escanpando caracteres 
				$TELEFONO		 = mysqli_real_escape_string($con,(strip_tags($_POST["TELEFONO"],ENT_QUOTES)));//Escanpando caracteres 
				$CARGO		 = mysqli_real_escape_string($con,(strip_tags($_POST["CARGO"],ENT_QUOTES)));//Escanpando caracteres 
				$ESTADO			 = mysqli_real_escape_string($con,(strip_tags($_POST["ESTADO"],ENT_QUOTES)));//Escanpando caracteres 
				
			

				$cek = mysqli_query($con, "SELECT * FROM alesi_tpersonas WHERE ID_PERSONA='$ID_PERSONA'");
				if(mysqli_num_rows($cek) == 0){
						$insert = mysqli_query($con, "INSERT INTO alesi_tpersonas(ID_PERSONA, NOMBRE, EMAIL, ID_EMPRESA, EDAD, TELEFONO, CARGO, ESTADO)
															VALUES('$ID_PERSONA','$NOMBRE', '$EMAIL', '$ID_EMPRESA', '$EDAD', '$TELEFONO', '$CARGO', '$ESTADO')") or die(mysqli_error());
						if($insert){
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho! Los datos han sido guardados con éxito.</div>';
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. No se pudo guardar los datos !</div>';
						}
					 
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. código exite!</div>';
				}
			}
			?>

			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Código</label>
					<div class="col-sm-2">
						<input type="text" name="ID_PERSONA" class="form-control" placeholder="Código" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nombres</label>
					<div class="col-sm-4">
						<input type="text" name="NOMBRE" class="form-control" placeholder="Nombres" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Email</label>
					<div class="col-sm-4">
						<input type="text" name="EMAIL" class="form-control" placeholder="Lugar de nacimiento" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Empresa</label>
					<div class="col-sm-4">
						<input type="text" name="ID_EMPRESA" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Edad</label>
					<div class="col-sm-3">
						<input name="EDAD" class="form-control" placeholder="Edad"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Teléfono</label>
					<div class="col-sm-3">
						<input type="text" name="TELEFONO" class="form-control" placeholder="Teléfono" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Puesto</label>
					<div class="col-sm-3">
						<input type="text" name="CARGO" class="form-control" placeholder="Puesto" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Estado</label>
					<div class="col-sm-3">
						<select name="ESTADO" class="form-control">
							<option value=""> ----- </option>
                           <option value="1">Activo</option>
							<option value="2">Inactivo</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-sm btn-primary" value="Guardar datos">
						<a href="index.php" class="btn btn-sm btn-danger">Cancelar</a>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
	$('.date').datepicker({
		format: 'dd-mm-yyyy',
	})
	</script>
</body>
</html>
