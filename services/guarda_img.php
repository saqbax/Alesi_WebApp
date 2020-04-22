<?php

require '../php/conexion.php';
#require('session.php');



if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $id_caso = $_POST["id_caso"];
    $nombre = $id_caso.'-' .$_FILES['imagen']['name'];
    $imagen_temporal = $_FILES['imagen']['tmp_name'];
    $type = $_FILES['imagen']['type'];

    $target_dir = "../galerias/imagenes/";
    $carpeta=$target_dir;

    #echo  ('caso '.$id_caso);
    #echo  ('nombre: '.$nombre);



		try {


      $target_file = $carpeta . $id_caso.'-' .basename($_FILES["imagen"]["name"]);
      $uploadOk = 1;
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
      // Check if image file is a actual image or fake image
      if(isset($_POST["submit"])) {
          $check = getimagesize($_FILES["imagen"]["tmp_name"]);
          if($check !== false) {
              $errors[]= "El archivo es una imagen - " . $check["mime"] . ".";
              $uploadOk = 1;
          } else {
              $errors[]= "El archivo no es una imagen.";
              $uploadOk = 0;
          }
      }
      // Check if file already exists
      if (file_exists($target_file)) {
          $errors[]="Lo sentimos, archivo ya existe.";
          $uploadOk = 0;
      }
      // Check file size
      if ($_FILES["imagen"]["size"] > 524288) {
          $errors[]= "Lo sentimos, el archivo es demasiado grande.  Tamaño máximo admitido: 0.5 MB";
          $uploadOk = 0;
      }
      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
          $errors[]= "Lo sentimos, sólo archivos JPG, JPEG, PNG & GIF  son permitidos.";
          $uploadOk = 0;
      }
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
          $errors[]= "Lo sentimos, tu archivo no fue subido.";
      // if everything is ok, try to upload file
      } else {
          if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
            $messages[]= "El Archivo ha sido subido correctamente.";
            
            mysqli_autocommit($con,TRUE);
            $respuesta =  mysqli_query($con,"insert into ALESI_IMAGENES (ID_CASO, NOMBRE_IMAGEN,   F_ALTA,        TIPO) 
                                                             values('$id_caso', '$nombre',    SYSDATE(),   '$type')");
            
          
          
          } else {
            $errors[]= "Lo sentimos, hubo un error subiendo el archivo.";
          }
      }
      
      if (isset($errors)){
        ?>
        <div class="alert alert-danger alert-dismissible col-md-5" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Error!</strong> 
          <?php
          foreach ($errors as $error){
            echo"<p>$error</p>";
          }
          ?>
        </div>
        <?php
      }
      
      if (isset($messages)){
        ?>
        <div class="alert alert-success alert-dismissible col-md-5" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Aviso!</strong> 
          <?php
          foreach ($messages as $message){
            echo"<p>$message</p>";
          }
          ?>
        </div>
        <?php
      }      
                

        /*/leemos la condicion 
        if ($respuesta){
          header("HTTP/1.1 200 Guardado Exitosamente");
          exit();
        }else{
          

          header("HTTP/1.1 500 ".mysqli_errno($con));
          printf ("Ocurrio un error a la hora de realizar la insercion. => %d\n",mysqli_error($con));
          exit();

        }*/
        
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

