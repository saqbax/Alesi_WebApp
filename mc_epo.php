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

echo $login_session . '<br>';
echo $nik . '<br>';
echo $emp . '<br>';

   if($_POST)
    {
     echo "El formulario se ejecutó con éxito.<br><br>";
     echo "<pre>";
     print_r($_POST);
      echo "</pre >";
   }
   
try{

		mysqli_query($con, "CALL p_insert_tvalocaso('U',".$nik.",'".$emp."','".$ink."','".$login_session."','".$_POST."',@p_salida )");

		$resultado = mysqli_query( $con, "SELECT @p_salida as p_out");

		$row = mysqli_fetch_assoc($resultado);
		
		$content = $row['p_out'];

		if($content == "1"){
			echo "<button type='button' class='btn btn-primary' onclick='redirect();'>Regresar</button>";
		}


} catch (Exception $e){
	echo $e;
}

 ?>
 	<script>
		function redirect(){
			var URLactual = window.location;
			var url = URLactual.toString().replace("mc_epo.php","mc_list.php");
			location.href = url;
		}
	</script>

 