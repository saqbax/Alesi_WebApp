<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Datos del caso</title>

	<!-- JQuery -->
	<script src="js/jquery-ui-1.12.1/jquery-ui.min.js"></script>
	<link href="js/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css" media="all"/>

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
		<?php include('nav.php');?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Lista de casos</h2>
			<hr />

			<?php
			$cat = mysqli_query($con, "SELECT * FROM ALESI_NTABLAS WHERE ID_TABLA = (SELECT ID_TABLA FROM ALESI_TABLAS WHERE COD_TABLA = 'CAT_EMPRESA') AND CAMPO_A = 'ASG'");
			if(isset($_GET['aksi']) == 'delete'){
				$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
				$cek = mysqli_query($con, "SELECT * FROM ALESI_TCASO WHERE ID_CASO='$nik'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
				}else{
					$delete = mysqli_query($con, "UPDATE ALESI_TCASO SET STATUS = 'CERRADO' WHERE ID_CASO='$nik'");
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
									<option value="1" <?php if($filter == 'ABIERTO'){ echo 'selected'; } ?>>Abierto</option>
									<option value="2" <?php if($filter == 'EN_PROCESO'){ echo 'selected'; } ?>>En proceso</option>
									<option value="2" <?php if($filter == 'CERRADO'){ echo 'selected'; } ?>>Cerrado</option>
									<option value="2" <?php if($filter == 'VENCIDO'){ echo 'selected'; } ?>>Vencido</option>
								</select>
							</td>
							<td style="text-align:right"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Nuevo Caso</button></td>
							<td style="text-align:right;display:none"><a class="btn btn-primary" href="mc_add.php">Nuevo Caso</a></td>
						</tr>
					</table>
				</div>
			</form>
			<br />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
                    <th>No</th>
					<th>Caso</th>
					<th>Empresa</th>
                    <th>Tipo del Caso</th>
                    <th>F. Alta</th>
					<th>F. Cierre</th>
					<th>Usu. Alta</th>
					<th>Usu. Asignado</th>
					<th>Estado</th>
                    <th>Acciones</th>
				</tr>
				<?php
				if($filter){
					$sql = mysqli_query($con, "SELECT * FROM ALESI_TCASO WHERE STATUS='$filter' ORDER BY ID_CASO ASC");
				}else{
					$sql = mysqli_query($con, "SELECT * FROM ALESI_TCASO ORDER BY ID_CASO ASC");
				}
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">No hay datos.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$row['ID_CASO'].'</td>
							<td><a href="mc_det.php?nik='.$row['ID_CASO'].'&emp='.$row['ID_EMPRESA'].'"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> '.$row['ID_EMPRESA'].'</a></td>
                            <td>'.$row['TIPO_CASO'].'</td>
							<td>'.$row['F_ALTA'].'</td>
                            <td>'.$row['F_CIERRE'].'</td>
                            <td>'.$row['ID_USUARIO_ALTA'].'</td>
                            <td>'.$row['ID_USUARIO_ASIGNADO'].'</td>
							<td>';
							if($row['STATUS'] == 'EN_CURSO'){
								echo '<span class="label label-success">En Curso</span>';
							}
                            else if ($row['STATUS'] == 'CERRADO' ){
								echo '<span class="label label-info">Cerrado</span>';
							}
						echo '
							</td>
							<td>

								<a href="mc_edit.php?nik='.$row['ID_CASO'].'&emp='.$row['ID_EMPRESA'].'" title="Editar datos" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
								<a href="mc_list.php?aksi=delete&nik='.$row['ID_CASO'].'" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar los datos '.$row['ID_EMPRESA'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Seleccion de Empresa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="text-align:justify;">
			<table class="table table-striped table-hover">
				<tr>
					<th align = "center">Empresa</th>
				</tr>
				<?php
				if(mysqli_num_rows($cat) == 0){
					echo '<tr><td colspan="8">No hay datos.</td></tr>';
				}else{
					$nu = 1;
					while($ca = mysqli_fetch_assoc($cat)){
						echo '
						<tr>
							<td><a href="mc_add.php?nik='.$ca['ID_CODIGO'].'"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> '.$ca['DESCIPCION'].'</a></td>
							</td>
						</tr>
						';
						$nu++;
					}
				}
				?>
	  </div>
    </div>
  </div>
</div>
</body>
</html>
