<?php
include('session.php');
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
	
	<!-- hojas de estilos -->
    <link href="css/neo-stiles.css" rel="stylesheet">

	<script src="js/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- ChartJS -->
	<script src="https://cdnjs.com/libraries/Chart.js"></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<?php include('nav.php');?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Lista de personas</h2>
			<hr />

			<?php
			if(isset($_GET['aksi']) == 'delete'){
				$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
				$cek = mysqli_query($con, "SELECT * FROM ALESI_TPERSONAS WHERE ID_PERSONA='$nik'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
				}else{
					$delete = mysqli_query($con, "UPDATE ALESI_TPERSONAS SET ESTADO = 2 WHERE ID_PERSONA='$nik'");
					if($delete){
						echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Datos eliminado correctamente.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar los datos.</div>';
					}
				}
			}
			?>

			<form class="form-inline" method="get">
				<div class="table-responsive">
					<table width="100%">
						<tr>
							<td align="left">
								<select name="filter" class="form-control" onchange="form.submit()">
									<option value="0">Filtros de datos de personas</option>
									<?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL);  ?>
									<option value="1" <?php if($filter == 'Tetap'){ echo 'selected'; } ?>>Activo</option>
									<option value="2" <?php if($filter == 'Kontrak'){ echo 'selected'; } ?>>Inactivo</option>
								</select>
							</td>
							<td style="text-align:right"><a class="btn btn-primary" href="mp_add.php">Agregar persona</a></td>
						</tr>
					</table>
				</div>
			</form>
			<br />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
                    <th>No</th>
					<th>Código</th>
					<th>Nombre</th>
                    <th>Email</th>
                    <th>Empresa</th>
					<th>Teléfono</th>
					<th>Cargo</th>
					<th>Estado</th>
                    <th>Acciones</th>
				</tr>
				<?php
				if($filter){
					$sql = mysqli_query($con, "SELECT * FROM ALESI_TPERSONAS WHERE ESTADO='$filter' ORDER BY ID_PERSONA ASC");
				}else{
					$sql = mysqli_query($con, "SELECT * FROM ALESI_TPERSONAS ORDER BY ID_PERSONA ASC");
				}
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">No hay datos.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$row['ID_PERSONA'].'</td>
							<td><a href="mp_det.php?nik='.$row['ID_PERSONA'].'"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> '.$row['NOMBRE'].'</a></td>
                            <td>'.$row['EMAIL'].'</td>
                            <td>'.$row['ID_EMPRESA'].'</td>
							<td>'.$row['TELEFONO'].'</td>
                            <td>'.$row['CARGO'].'</td>
							<td>';
							if($row['ESTADO'] == '1'){
								echo '<span class="label label-success">Activo</span>';
							}
                            else if ($row['ESTADO'] == '2' ){
								echo '<span class="label label-info">Inactivo</span>';
							}
						echo '
							</td>
							<td>

								<a href="mp_edit.php?nik='.$row['ID_PERSONA'].'" title="Editar datos" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
								<a href="mp_list.php?aksi=delete&nik='.$row['ID_PERSONA'].'" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar los datos '.$row['NOMBRE'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
							</td>
						</tr>
						';
						$no++;
					}
				}
				?>
			</table>
			</div>
		</div>
	</div>
</body>
</html>
