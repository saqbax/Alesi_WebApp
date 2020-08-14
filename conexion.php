<?php
/*Datos de conexion a la base de datos*/
$db_host = "neo-bdmysql.mariadb.database.azure.com";
$db_user = "alesiorg_ALESI_BD_USER";
$db_pass = "EGWZXNGWPDG";
$db_name = "alesiorg_ALESI_BD";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

mysqli_query($con,"SET NAMES 'utf8'");

if(mysqli_connect_errno()){
	echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
}
?>