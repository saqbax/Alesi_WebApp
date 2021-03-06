<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Datos del caso</title>

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
			<h2>Datos del caso &raquo; Info</h2>
			<hr />
			<?php
				$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
				$nik_2 = $_GET['nik'];
				//echo $nik_2;
				$emp = mysqli_real_escape_string($con,(strip_tags($_GET["emp"],ENT_QUOTES)));
			?>
			<div class="table-responsive">
			<a href="mc_upl.php?cas=<?php echo $nik;?>&emp=<?php echo $emp;?>" title="Manejo de Archivos" class="btn btn-success openBtn">Archivos</span></a>
			<!--button type="button" class="btn btn-success openBtn">Archivos</button-->
			<a target="_blank" href="genera_pdf.php?id=<?php echo $nik_2;?>"><button type="button" class="btn btn-success ">Generar PDF</button> </a>

			

			<!-- Modal -->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">×</button>
							<h4 class="modal-title">Administracion de Archivos</h4>
						</div>
						<div class="modal-body">

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
						</div>
					</div>
				</div>
			</div>




			<table class="table table-striped table-hover">
				<tr>
					<th>Campo</th>
					<th>Valor</th>
				</tr>
				<?php
				if($filter){
					$sql = mysqli_query($con, "SELECT * FROM ALESI_TCASO WHERE STATUS='$filter' ORDER BY ID_CASO ASC");
				}else{
					$sql = mysqli_query($con, "SELECT b.TIPO_DATO,b.BLOQUE,b.ORDEN,b.ID_CAMPO,b.ETIQUETA,a.VALOR FROM ALESI_TVALCASO a JOIN ALESI_TATRICASO b on a.NUM_ATRIBUTO = b.NUM_ATRIBUTO WHERE a.ID_CASO = '$nik'");
				}
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">No hay datos.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$row['ETIQUETA'].'</td>
                            <td>'.$row['VALOR'].'</td>
						</tr>
						';
						$no++;
					}
				}
				?>
			</table>
			</div>
			
			<a href="mc_list.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Regresar</a>
		</div>
	</div>
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		$('.openBtn').on('click',function(){
			$('.modal-body').load('mc_upl.php',function(){
				$('#myModal').modal({show:true});
			});
		});
	</script>
</body>
</html>