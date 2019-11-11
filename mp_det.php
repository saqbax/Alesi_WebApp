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
			<h2>Datos del persona &raquo; Perfil</h2>
			<hr />
			
			<?php
			// escaping, additionally removing everything that could be (html/javascript-) code
			$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
			
			$sql = mysqli_query($con, "SELECT * FROM ALESI_TPERSONAS WHERE ID_PERSONA='$nik'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: mp_list.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			
			if(isset($_GET['aksi']) == 'delete'){
				$delete = mysqli_query($con, "DELETE FROM ALESI_TPERSONAS WHERE ID_PERSONA='$nik'");
				if($delete){
					echo '<div class="alert alert-danger alert-dismissable">><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil dihapus.</div>';
				}else{
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal dihapus.</div>';
				}
			}
			?>
			
			<table class="table table-striped table-condensed">
				<tr>
					<th width="20%">Código</th>
					<td><?php echo $row['ID_PERSONA']; ?></td>
				</tr>
				<tr>
					<th>Nombre</th>
					<td><?php echo $row['NOMBRE']; ?></td>
				</tr>
				<tr>
					<th>Email</th>
					<td><?php echo $row['EMAIL']; ?></td>
				</tr>
				<tr>
					<th>Dirección</th>
					<td><?php echo $row['ID_EMPRESA']; ?></td>
				</tr>
				<tr>
					<th>Teléfono</th>
					<td><?php echo $row['TELEFONO']; ?></td>
				</tr>
				<tr>
					<th>Puesto</th>
					<td><?php echo $row['CARGO']; ?></td>
				</tr>
				<tr>
					<th>Estado</th>
					<td>
						<?php 
							if ($row['ESTADO']==1) {
								echo "Activo";
							} else if ($row['ESTADO']==2){
								echo "Inactivo";
//							} else if ($row['estado']==3){
//								echo "Outsourcing";
							}
						?>
					</td>
				</tr>
				
			</table>
			
			<a href="mp_list.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Regresar</a>
			<!--a href="mp_edit.php?nik=<?php echo $row['nik']; ?>" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar datos</a>
			<a href="mp_list.php?aksi=delete&nik=<?php echo $row['nik']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Esta seguro de borrar los datos <?php echo $row['nombres']; ?>')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar</a-->
		</div>
	</div>
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>