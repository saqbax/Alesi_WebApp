<?php

require '../php/conexion.php';
#require('session.php');

$target_dir = "../galerias/docs/";
$carpeta=$target_dir;



if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $id_caso = $_POST["id_caso"];
    $nombre = $id_caso.'-' .$_FILES['document']['name'];
    $imagen_temporal = $_FILES['document']['tmp_name'];
    #$type = $_FILES['document']['type'];

    

    #echo  ('caso '.$id_caso);
    #echo  ('nombre: '.$nombre);



		try {


      $target_file = $carpeta . $id_caso.'-' .basename($_FILES["document"]["name"]);


      $uploadOk = 1;
      $documentFileType = pathinfo($target_file,PATHINFO_EXTENSION);

      // Check if image file is a actual image or fake image
      /*if(isset($_POST["submit"])) {
          $check = getimagesize($_FILES["imagen"]["tmp_name"]);
          if($check !== false) {
              $errors[]= "El archivo es una imagen - " . $check["mime"] . ".";
              $uploadOk = 1;
          } else {
              $errors[]= "El archivo no es una imagen.";
              $uploadOk = 0;
          }
      }*/
      // Check if file already exists
      if (file_exists($target_file)) {
          $uploadOk = 2;

      }
      // Check file size
      /*if ($_FILES["imagen"]["size"] > 524288) {
          $errors[]= "Lo sentimos, el archivo es demasiado grande.  Tamaño máximo admitido: 0.5 MB";
          $uploadOk = 0;
      }*/
      // Allow certain file formats
      if($documentFileType != "pdf" && $documentFileType != "xlsx" && $documentFileType != "xls" && $documentFileType != "docx"
      && $documentFileType != "doc"  ) {
          $errors[]= "Lo sentimos, sólo archivos pdf, xlsx , docx son permitidos.";
          $uploadOk = 0;
      }
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
          $errors[]= "Lo sentimos, tu archivo no fue subido.";
      // if everything is ok, try to upload file
      }elseif ($uploadOk == 2){
          if (move_uploaded_file($_FILES["document"]["tmp_name"], $target_file)) {
              $messages[]= "Se actualizó el archivo correctamente.";
              
              $respuesta =  mysqli_query($con,"update  ALESI_BINARIOS
                                              set F_ALTA = SYSDATE()
                                              where ID_CASO = '$id_caso'
                                              and NOMBRE_BINARIO ='$nombre'");
          } else {
            $errors[]= "Lo sentimos, hubo un error subiendo el archivo.";
          }

      } else {
          if (move_uploaded_file($_FILES["document"]["tmp_name"], $target_file)) {
            $messages[]= "El Archivo ha sido subido correctamente.";
            
            
            $respuesta =  mysqli_query($con,"insert into ALESI_BINARIOS (ID_CASO, NOMBRE_BINARIO,   F_ALTA,        TIPO) 
                                                             values('$id_caso', '$nombre',    SYSDATE(),   '$documentFileType')");
            
          
          
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
} else if ($_SERVER['REQUEST_METHOD'] == 'DELETE'){
    parse_str(file_get_contents("php://input"),$post_vars);
    $p_idBinario = $post_vars['p_idBinario'];

    #echo $p_idBinario;


    $ses_sql=mysqli_query( $con , "select * 
                                    from ALESI_BINARIOS 
                                    where ID_BINARIO ='$p_idBinario'");
    $row = mysqli_fetch_assoc($ses_sql);
    $nomBinario = $row['NOMBRE_BINARIO'];

    $target_file = $carpeta . $nomBinario;

    unlink($target_file);


    $respuesta =  mysqli_query($con,"delete from ALESI_BINARIOS where ID_BINARIO ='$p_idBinario'");

  
    

  //Salida
  $input['success'] = true;
  $input['message'] = '$p_idBinario '.$p_idBinario.' -> '.$nomBinario;
  header("HTTP/1.1 200 OK");
  echo json_encode($input);
  

}else{
  header("HTTP/1.1 400 Bad Request");
  $input['success'] = false;
  echo json_encode($input);
	exit();
}

?>

