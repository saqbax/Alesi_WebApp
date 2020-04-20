<?php

require '../php/conexion.php';
#require('session.php');



if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $id_caso = $_POST["id_caso"];
    $nombre = $_FILES['imagen']['name'];
    $imagen_temporal = $_FILES['imagen']['tmp_name'];
    $type = $_FILES['imagen']['type'];

    #echo  ('caso '.$id_caso);
    #echo  ('nombre: '.$nombre);



		try {
			
        //archivo temporal en binario
        $itmp = fopen($imagen_temporal, 'r+b');
        $imagen = fread($itmp, filesize($imagen_temporal));
        fclose($itmp);
        //escapando los caracteres
        $imagen = mysqli_real_escape_string($con,$imagen);
        
        $respuesta =  mysqli_query($con,"insert into ALESI_IMAGENES (ID_CASO, NOMBRE_IMAGEN,   F_ALTA,    IMAGEN,    TIPO) 
                                                             values('$id_caso', '$nombre',    SYSDATE(),  '$imagen', '$type')");

        //leemos la condicion 
        if ($respuesta){
          header("HTTP/1.1 200 Guardado Exitosamente");
          exit();
        }else{
          

          header("HTTP/1.1 500 ".mysqli_errno($con));
          printf ("Ocurrio un error a la hora de realizar la insercion. => %d\n",mysqli_error($con));
          exit();

        }
        
		} catch (Exception $e) {                       			
      header("HTTP/1.1 500  fallo");
      echo 'Excepción capturada: ',  $e->getMessage(), "\n";
      exit();

        } 
        
}else{
	header("HTTP/1.1 400 Bad Request");
	exit;
}

?>