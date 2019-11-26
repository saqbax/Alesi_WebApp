<!DOCTYPE html>
<html>
<body>



<?php
//$cas = mysqli_real_escape_string($con,(strip_tags($_GET["cas"],ENT_QUOTES)));
$cas = 2;
$directorio = opendir("casos/".$cas); //ruta actual
echo "<table class='table table-striped table-hover'>";
echo "<tr><th>Nombre</th><th>Opciones</th></tr>";
while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
{
    if (is_dir($archivo))//verificamos si es o no un directorio
    {
        //echo "[".$archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes
    }
    else
    {
        echo "<tr>
                 <td>" . $archivo . "</td>
                 <td>
                   <a href='#' title='Descargar' class='btn btn-primary btn-sm'><span class='glyphicon glyphicon-download-alt' aria-hidden='true'></span></a>                   
                   <a href='#' title='Eliminar' class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a>
                 </td>
               </tr>";
    }
}
echo "</table>";
?><br>
<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("pdf");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="No es un archivo PDF.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"casos/".$cas."/".$file_name);
         echo "Subido";
      }else{
         //print_r($errors);
         echo "hola";
      }
   }
?>
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>
</body>
</html>