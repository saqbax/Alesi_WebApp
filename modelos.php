<?php
require __DIR__.'/php/conexion.php';

$marca = $_POST["elegido"];
$html = "";

$cat4 = mysqli_query($con, "SELECT ID_CODIGO , CONCAT(CAMPO_A,' - ', DESCIPCION) AS  DESCIPCION 
                            FROM ALESI_NTABLAS WHERE ID_TABLA=(SELECT ID_TABLA FROM ALESI_TABLAS 
							WHERE COD_TABLA ='CAT_AUTO_TIPO') 
							AND CAMPO_A =  (SELECT DESCIPCION FROM ALESI_NTABLAS WHERE ID_TABLA=(SELECT ID_TABLA FROM ALESI_TABLAS WHERE COD_TABLA ='CAT_AUTO_MARCA') AND ID_CODIGO= '".$marca."')
							ORDER BY DESCIPCION");

while($cata4 = mysqli_fetch_assoc($cat4)){
		
	$html = $html .'<option value = "'.$cata4['ID_CODIGO'].'">'.$cata4['DESCIPCION'].'</option>';
}

echo $html;	

?>