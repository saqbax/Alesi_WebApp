  <?php

include("session.php");
require __DIR__.'/php/conexion.php';

$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
	if($nik == "CARDIF"){
		$emp = "SINIESTRO_TDC_C";
	} else {
		$emp = "SINIESTRO_AUTO_S";
	}

echo $login_session . '<br>';
echo $nik . '<br>';
echo $emp . '<br>';

$v_json = json_encode($_POST);
echo $v_json . '<br>';

   if($_POST)
    {
     echo "El formulario se ejecutó con éxito.<br><br>";
     echo "<pre>";
     print_r($_POST);
      echo "</pre >";
   }
   
try{
//		p_insert_tvalocaso(  "A",  NULL,$nik, $emp, $login_session, $_POST); 


			//mysqli_query($con, "CALL p_insert_tvalocaso('A',NULL,".$nik.",".$emp.",".$login_session.",".$_POST.")");
		mysqli_query($con, "CALL p_insert_tvalocaso('I',NULL,'".$nik."','".$emp."','".$login_session."', '".$v_json."',@p_salida )" );

		$resultado = mysqli_query( $con, "SELECT @p_salida as p_out");

		$row = mysqli_fetch_assoc($resultado);
		
		$content = $row['p_out'];

		echo $content;

} catch (Exception $e){
	echo $e;
}

 ?>