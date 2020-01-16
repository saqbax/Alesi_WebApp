<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<title>Archivos del Caso</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/paper-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />

	<!-- Nuevo Editor CKEditor -->
	<script src="ckeditor/ckeditor.js"></script>

	<!-- Fonts and Icons -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="assets/css/themify-icons.css" rel="stylesheet">
</head>
<body>
<div class="image-container set-full-height" style="background-image: url('assets/img/Alesi-Investigacion.jpg')">
	<!--   Creative Tim Branding   -->
	<a href="#">
		 <div class="logo-container">
			<div class="logo">
				<img src="assets/img/new_logo.png">
			</div>
			<div class="brand"><?php echo $login_session; ?></div>
		</div>
	</a>
	<div class="container">
		<div class="row">
		        <div class="col-sm-8 col-sm-offset-0">

		            <!--      Wizard container        -->
		            <div class="wizard-container">

		                <div class="card wizard-card" data-color="orange" id="wizardProfile">
						  <form action="" method="POST" enctype="multipart/form-data" id="theform">
	                    	<div class="wizard-header text-center">
							<div class="wizard-navigation">
								<?php
								$cas = $_GET["cas"]."";
								$emp = $_GET["emp"]."";
				//				$cas = "2";
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
												 <td>";
										if($login_rol == 'USER'){echo "";}else{echo "<a href='http://appweb.alesi.org.mx/casos/".$cas."/".$archivo."' target='_blank' title='Descargar' class='btn btn-primary btn-sm'><span class='glyphicon glyphicon-download-alt' aria-hidden='true'></span></a>";}
										echo "	 </td>
											   </tr>";
									}
								}
								echo "</table>";
								?>
								<?php
								   if(isset($_FILES['image'])){
									  $errors= array();
									  $file_name = $_FILES['image']['name'];
									  $file_size =$_FILES['image']['size'];
									  $file_tmp =$_FILES['image']['tmp_name'];
									  $file_type=$_FILES['image']['type'];
									  $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
									  
									  $expensions= array("pdf","jpg","png");
									  
									  if(in_array($file_ext,$expensions)=== false){
										 $errors[]="No es un archivo PDF, JPG o PNG.";
									  }
									  
									  if($file_size > 2097152){
										 $errors[]='El tamaño del archivo excede los 2 MB';
									  }
									  
									  $carpeta = "casos/".$cas."/";
									  if(empty($errors)==true){
										  if (!file_exists($carpeta)) {
												mkdir($carpeta, 0755, true);
											}
										 move_uploaded_file($file_tmp,"casos/".$cas."/".$file_name);
										 header("location:mc_upl.php?cas=".$cas);
										 echo "Subido";
									  }else{
										 //print_r($errors);
				//						 echo "hola";
									  }
								   }
								?>
							<table>
								<tr>
									<td><input type="file" name="image" /></td>
									<td><input type="submit" class='btn btn-primary btn-sm' /></td>
									<td><a href="det_caso.php?nik=<?php echo $cas;?>&emp=<?php echo $emp;?>" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Regresar</a></td>
								</tr>
							</table>
							</div>
							</div>
						  </form>
		</div>
	</div>
</div>
</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/demo.js" type="text/javascript"></script>
	<script src="assets/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

	<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
</html>