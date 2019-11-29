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

   if($_POST)
    {
     echo "El formulario se ejecutó con éxito.<br><br>";
     echo "<pre>";
     print_r($_POST);
      echo "</pre >";
   }
   
try{
//		p_insert_tvalocaso(  "A",  NULL,$nik, $emp, $login_session, $_POST); 

			mysqli_query($con, "CALL p_insert_tvalocaso('A',NULL,".$nik.",".$emp.",".$login_session.",".$_POST);

} catch (Exception $e){
	echo $e;
}

 ?>