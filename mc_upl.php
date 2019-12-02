<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Archivos del caso</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style_nav.css" rel="stylesheet">

	<script src="js/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- ChartJS -->
	<script src="https://cdnjs.com/libraries/Chart.js"></script>
</head>
<body>
	<div class="container">
		<div class="content">
				<?php
				$cas = $_GET["cas"]."";
				$emp = $_GET["emp"]."";
				$cas = "2";
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
								   <a href='http://appweb.alesi.org.mx/Alesi_WebApp/casos/".$cas."/".$archivo."' target='_blank' title='Descargar' class='btn btn-primary btn-sm'><span class='glyphicon glyphicon-download-alt' aria-hidden='true'></span></a>                   
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
						 $errors[]='El tamaño del archivo excede los 2 MB';
					  }
					  
					  if(empty($errors)==true){
						 move_uploaded_file($file_tmp,"casos/".$cas."/".$file_name);
						 header("location:mc_upl.php?cas=".$cas);
						 echo "Subido";
					  }else{
						 //print_r($errors);
						 echo "hola";
					  }
				   }
				?>
		  <form action="" method="POST" enctype="multipart/form-data">
			<table>
				<tr>
					<td><input type="file" name="image" /></td>
					<td><input type="submit" class='btn btn-primary btn-sm' /></td>
					<td><a href="mc_det.php?nik=<?php echo $cas;?>&emp=<?php echo $emp;?>" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Regresar</a></td>
			    </tr>
			</table>
		  </form>
		</div>
	</div>
</body>
</html>