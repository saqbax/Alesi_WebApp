  <?php

include("session.php");

$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
$emp = mysqli_real_escape_string($con,(strip_tags($_GET["emp"],ENT_QUOTES)));

//echo $login_session . '<br>';

//   if($_POST)
//    {
//     echo "El formulario se ejecutó con éxito.<br><br>";
//     echo "<pre>";
//     print_r($_POST);
//      echo "</pre >";
//   }
try{
//		p_insert_tvalocaso(  "A",  NULL,$nik, $emp, $login_session, $_POST); 

			mysqli_query($con, "CALL p_insert_tvalocaso('A',NULL,".$nik.",".$emp.",".$login_session.",".$_POST);

} catch ($e){
	echo $e;
}

 ?>