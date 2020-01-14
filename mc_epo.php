  <?php

include("session.php");
require __DIR__.'/php/conexion.php';

$emp = mysqli_real_escape_string($con,(strip_tags($_GET["emp"],ENT_QUOTES)));
$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
	if($emp == "CARDIF"){
		$ink = "SINIESTRO_TDC_C";
	} else {
		$ink = "SINIESTRO_AUTO_S";
	}

/*echo $login_session . '<br>';
echo $nik . '<br>';
echo $emp . '<br>';

   if($_POST)
    {
     echo "El formulario se ejecutó con éxito.<br><br>";
     echo "<pre>";
     print_r($_POST);
      echo "</pre >";
   }*/
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
<?php   
try{
		function _JS($txt){
			return str_replace("\r\n", '</br>',$txt);
		}
		mysqli_query($con, "CALL p_insert_tvalocaso('U',".$nik.",'".$emp."','".$ink."','".$login_session."','".json_encode(_JS($_POST))."',@p_salida )");

		$resultado = mysqli_query( $con, "SELECT @p_salida as p_out");

		$row = mysqli_fetch_assoc($resultado);
		
		$content = $row['p_out'];

		if($content == "1"){
				echo "<script type='text/javascript'>
					$(document).ready(function(){
					$('#myModal').modal('show');
					});
					</script>";
		}


} catch (Exception $e){
	echo $e;
}

 ?>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <!-- <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div> -->
        <div class="modal-body">
          <p>Se guardo de forma correcta el Caso.</p>
        </div>
        <div class="modal-footer">
		  <!-- <button type="button" class="btn btn-primary"  href="mc_list.php" data-dismiss="modal">Close</button> -->
		  <a class="btn btn-primary" href="mc_list.php">CERRAR</a>
        </div>
      </div>
      
    </div>
  </div>
 	<script>
		function redirect(){
			var URLactual = window.location;
			var url = URLactual.toString().replace("mc_epo.php","mc_list.php");
			location.href = url;
		}
	</script>
</body>
</html> 