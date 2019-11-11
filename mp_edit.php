<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Datos de personas</title>

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
			<h2>Datos del personas &raquo; Editar datos</h2>
			<hr />
			
			<?php
			$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
			$sql = mysqli_query($con, "SELECT * FROM ALESI_TPERSONAS WHERE ID_PERSONA='$nik'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: mp_list.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
				$ID_PERSONA		     = mysqli_real_escape_string($con,(strip_tags($_POST["ID_PERSONA"],ENT_QUOTES)));//Escanpando caracteres 
				$NOMBRE		     = mysqli_real_escape_string($con,(strip_tags($_POST["NOMBRE"],ENT_QUOTES)));//Escanpando caracteres 
				$EMAIL	 = mysqli_real_escape_string($con,(strip_tags($_POST["EMAIL"],ENT_QUOTES)));//Escanpando caracteres 
				$ID_EMPRESA	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_EMPRESA"],ENT_QUOTES)));//Escanpando caracteres 
				$EDAD	     = mysqli_real_escape_string($con,(strip_tags($_POST["EDAD"],ENT_QUOTES)));//Escanpando caracteres 
				$TELEFONO		 = mysqli_real_escape_string($con,(strip_tags($_POST["TELEFONO"],ENT_QUOTES)));//Escanpando caracteres 
				$CARGO		 = mysqli_real_escape_string($con,(strip_tags($_POST["CARGO"],ENT_QUOTES)));//Escanpando caracteres 
				$ESTADO			 = mysqli_real_escape_string($con,(strip_tags($_POST["ESTADO"],ENT_QUOTES)));//Escanpando caracteres  
				
				$update = mysqli_query($con, "UPDATE ALESI_TPERSONAS SET NOMBRE='$NOMBRE', EMAIL='$EMAIL', ID_EMPRESA='$ID_EMPRESA', EDAD='$EDAD', TELEFONO='$TELEFONO', CARGO='$CARGO', ESTADO='$ESTADO' WHERE ID_PERSONA='$nik'") or die(mysqli_error());
				if($update){
					header("Location: mp_edit.php?nik=".$nik."&pesan=sukses");
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
					<label class="col-sm-3 control-label">Nombres</label>
					<div class="col-sm-4">
						<input type="text" name="NOMBRE" value="<?php echo $row ['NOMBRE']; ?>" class="form-control" placeholder="Nombres" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Email</label>
					<div class="col-sm-4">
						<input type="text" name="EMAIL" value="<?php echo $row ['EMAIL']; ?>" class="form-control" placeholder="Email" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Empresa</label>
					<div class="col-sm-4">
						<input type="text" name="ID_EMPRESA" value="<?php echo $row ['ID_EMPRESA']; ?>" class="input-group date form-control" date="" data-date-format="yyyy-mm-dd" placeholder="Empresa" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Edad</label>
					<div class="col-sm-3">
						<input name="EDAD" class="form-control" placeholder="Dirección" value="<?php echo $row ['EDAD']; ?>"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Teléfono</label>
					<div class="col-sm-3">
						<input type="text" name="TELEFONO" value="<?php echo $row ['TELEFONO']; ?>" class="form-control" placeholder="Teléfono" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Puesto</label>
					<div class="col-sm-3">
						
						<input type="text" name="CARGO" value="<?php echo $row ['CARGO']; ?>" class="form-control" placeholder="Puesto" required>
					</div>
                    
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Estado</label>
					<div class="col-sm-3">
						<select name="ESTADO" class="form-control">
							<option value="">- Selecciona estado -</option>
                            <option value="1" <?php if ($row ['ESTADO']==1){echo "selected";} ?>>Activo</option>
							<option value="2" <?php if ($row ['ESTADO']==2){echo "selected";} ?>>Inactivo</option>
						</select> 
					</div>
                   
                </div>
			
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-sm btn-primary" value="Guardar datos">
						<a href="mp_list.php" class="btn btn-sm btn-danger">Cancelar</a>
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