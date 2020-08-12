<?php
// Seteamos la cabecera a JSON
header('Content-Type: application/json');

// Configuramos la conexión a la base de datos
define('DB_HOST', 'mysql');
define('DB_USERNAME', 'alesiorg_ALESI_BD_USER');
define('DB_PASSWORD', 'EGWZXNGWPDG');
define('DB_NAME', 'alesiorg_ALESI_BD');

// Desplegamos la conexión a la Basde de Datos
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

$mysqli->query("SET NAMES 'utf8'");

if(!$mysqli){
	die("La Conexión ha fallado: " . $mysqli->error);
}

// Seleccionamos los datos de la tabla casos
$query = sprintf("SELECT ID_EMPRESA,STATUS,COUNT(*) NUM_CASOS
				FROM ALESI_TCASO
				GROUP BY ID_EMPRESA,STATUS");

$result = $mysqli->query($query);

// Hacemos un bucle con los datos obntenidos
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

// Limpiamos memoria consumida al extraer los datos
$result->close();

// Cerramos la conexión a la Base de Datos
$mysqli->close();

// Mostramos los datos en formato JSON
print json_encode($data);

//var_dump($data);
