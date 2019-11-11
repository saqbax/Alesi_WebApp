<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Datos de usuario</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style_nav.css" rel="stylesheet">

	<script src="js/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- ChartJS -->
	<script src="https://cdnjs.com/libraries/Chart.js"></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<?php include("nav.php");?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Datos del usuario &raquo; Editar datos</h2>
			<hr />
			
			<?php
			$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
			$sql = mysqli_query($con, "SELECT * FROM ALESI_TUSUARIOS WHERE ID_PERSONA='$nik'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: mu_list.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
				$ID_PERSONA = mysqli_real_escape_string($con,(strip_tags($_POST["ID_PERSONA"],ENT_QUOTES)));//Escanpando caracteres 
				$USUARIO	= mysqli_real_escape_string($con,(strip_tags($_POST["USUARIO"],ENT_QUOTES)));//Escanpando caracteres 
				$ROL	 	= mysqli_real_escape_string($con,(strip_tags($_POST["ROL"],ENT_QUOTES)));//Escanpando caracteres 
				$F_ALTA	 	= mysqli_real_escape_string($con,(strip_tags($_POST["F_ALTA"],ENT_QUOTES)));//Escanpando caracteres 
				$STATUS		= mysqli_real_escape_string($con,(strip_tags($_POST["STATUS"],ENT_QUOTES)));//Escanpando caracteres  
				
				$update = mysqli_query($con, "UPDATE ALESI_TUSUARIOS SET USUARIO='$USUARIO', ROLA='$ROL', F_ALTA='$F_ALTA', STATUS='$STATUS' WHERE ID_PERSONA='$nik'") or die(mysqli_error());
				if($update){
					header("Location: mu_edit.php?nik=".$nik."&pesan=sukses");
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo guardar los datos.</div>';
				}
			}
			
			if(isset($_GET['pesan']) == 'sukses'){
				echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos han sido guardados con éxito.</div>';
			}
			?>
			<form class="form-horizontal" action="" method="post">
				<!--div class="form-group">
					<label class="col-sm-3 control-label">Código</label>
					<div class="col-sm-2">
						<input type="text" name="ID_PERSONA" value="<?php echo $row ['ID_PERSONA']; ?>" class="form-control" placeholder="NIK" required>
					</div>
				</div-->
				<div class="form-group">
					<label class="col-sm-3 control-label">Usuario</label>
					<div class="col-sm-4">
						<input type="text" name="USUARIO" value="<?php echo $row ['USUARIO']; ?>" class="form-control" placeholder="Usuario" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Rol</label>
					<div class="col-sm-4">
						<input type="text" name="ROL" value="<?php echo $row ['ROL']; ?>" class="form-control" placeholder="Rol" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Fecha de alta</label>
					<div class="col-sm-4">
						<input type="text" name="F_ALTA" value="<?php echo $row ['F_ALTA']; ?>" class="input-group date form-control" date="" data-date-format="yyyy-mm-dd" placeholder="Empresa" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Estado</label>
					<div class="col-sm-3">
						<select name="ESTADO" class="form-control">
							<option value="">- Selecciona estado -</option>
                            <option value="1" <?php if ($row ['STATUS']=='ACTIVO'){echo "selected";} ?>>Activo</option>
							<option value="2" <?php if ($row ['STATUS']=='INACTIVO'){echo "selected";} ?>>Inactivo</option>
						</select> 
					</div>
                   
                </div>
			
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-sm btn-primary" value="Guardar datos">
						<a href="mu_list.php" class="btn btn-sm btn-danger">Cancelar</a>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
	$('.date').datepicker({
		format: 'dd-mm-yyyy',
	})
	</script>
</body>
</html>