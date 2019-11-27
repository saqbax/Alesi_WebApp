<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Datos del caso</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
</head>
<body>
<form class="form-horizontal" action="" method="post">
	<nav class="navbar navbar-default navbar-fixed-top">
		<?php include("nav.php");?>
	</nav>
	<div class="container">
		<div class="form-row">
			<h2>Datos del caso &raquo; Info</h2>
			<hr />
			<?php
				$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
			?>
			<?php
			if(isset($_POST['add'])){
				if($nik=="SURA"){
					$DIRIGIDO_A = mysqli_real_escape_string($con,(strip_tags($_POST["DIRIGIDO_A"],ENT_QUOTES)));
					$CARGO = mysqli_real_escape_string($con,(strip_tags($_POST["CARGO"],ENT_QUOTES)));
					$N_DE_SINIESTRO = mysqli_real_escape_string($con,(strip_tags($_POST["N_DE_SINIESTRO"],ENT_QUOTES)));
					$F_DE_SINIESTRO = mysqli_real_escape_string($con,(strip_tags($_POST["F_DE_SINIESTRO"],ENT_QUOTES)));
					$F_DE_REPORTE = mysqli_real_escape_string($con,(strip_tags($_POST["F_DE_REPORTE"],ENT_QUOTES)));
					$N_DE_POLIZA = mysqli_real_escape_string($con,(strip_tags($_POST["N_DE_POLIZA"],ENT_QUOTES)));
					$INCISO = mysqli_real_escape_string($con,(strip_tags($_POST["INCISO"],ENT_QUOTES)));
					$INI_VIG = mysqli_real_escape_string($con,(strip_tags($_POST["INI_VIG"],ENT_QUOTES)));
					$FIN_VIG = mysqli_real_escape_string($con,(strip_tags($_POST["FIN_VIG"],ENT_QUOTES)));
					$COBERTURA = mysqli_real_escape_string($con,(strip_tags($_POST["COBERTURA"],ENT_QUOTES)));
					$NOM_ASEGURADO = mysqli_real_escape_string($con,(strip_tags($_POST["NOM_ASEGURADO"],ENT_QUOTES)));
					$NOM_CONDUCTOR = mysqli_real_escape_string($con,(strip_tags($_POST["NOM_CONDUCTOR"],ENT_QUOTES)));
					$CON_VIOLENCIA = mysqli_real_escape_string($con,(strip_tags($_POST["CON_VIOLENCIA"],ENT_QUOTES)));
					$SIN_VIOLENCIA = mysqli_real_escape_string($con,(strip_tags($_POST["SIN_VIOLENCIA"],ENT_QUOTES)));
					$EN_DOMICILIO = mysqli_real_escape_string($con,(strip_tags($_POST["EN_DOMICILIO"],ENT_QUOTES)));
					$COLISION_VUELCO = mysqli_real_escape_string($con,(strip_tags($_POST["COLISION_VUELCO"],ENT_QUOTES)));
					$MARCA = mysqli_real_escape_string($con,(strip_tags($_POST["MARCA"],ENT_QUOTES)));
					$TIPO = mysqli_real_escape_string($con,(strip_tags($_POST["TIPO"],ENT_QUOTES)));
					$MODELO = mysqli_real_escape_string($con,(strip_tags($_POST["MODELO"],ENT_QUOTES)));
					$COLOR = mysqli_real_escape_string($con,(strip_tags($_POST["COLOR"],ENT_QUOTES)));
					$N_DE_SERIE = mysqli_real_escape_string($con,(strip_tags($_POST["N_DE_SERIE"],ENT_QUOTES)));
					$N_MOTOR = mysqli_real_escape_string($con,(strip_tags($_POST["N_MOTOR"],ENT_QUOTES)));
					$PLACAS = mysqli_real_escape_string($con,(strip_tags($_POST["PLACAS"],ENT_QUOTES)));
					$SINI_TREINTA_DIAS = mysqli_real_escape_string($con,(strip_tags($_POST["SINI_TREINTA_DIAS"],ENT_QUOTES)));
					$SUMA_ASEGURADA = mysqli_real_escape_string($con,(strip_tags($_POST["SUMA_ASEGURADA"],ENT_QUOTES)));
					$PREEXISTENCIA_AUTO = mysqli_real_escape_string($con,(strip_tags($_POST["PREEXISTENCIA_AUTO"],ENT_QUOTES)));
					$REECONSTRUCCION_HECHOS = mysqli_real_escape_string($con,(strip_tags($_POST["REECONSTRUCCION_HECHOS"],ENT_QUOTES)));
					$FALSEDAD_DECALRACION = mysqli_real_escape_string($con,(strip_tags($_POST["FALSEDAD_DECALRACION"],ENT_QUOTES)));
					$CAMBIO_CONDUCTOR = mysqli_real_escape_string($con,(strip_tags($_POST["CAMBIO_CONDUCTOR"],ENT_QUOTES)));
					$DOC_APOCRIFOS = mysqli_real_escape_string($con,(strip_tags($_POST["DOC_APOCRIFOS"],ENT_QUOTES)));
					$OTROS = mysqli_real_escape_string($con,(strip_tags($_POST["OTROS"],ENT_QUOTES)));
					$OTROS_VAL = mysqli_real_escape_string($con,(strip_tags($_POST["OTROS_VAL"],ENT_QUOTES)));
					$RESULT_INVEST = mysqli_real_escape_string($con,(strip_tags($_POST["RESULT_INVEST"],ENT_QUOTES)));
					$DECLA_INI = mysqli_real_escape_string($con,(strip_tags($_POST["DECLA_INI"],ENT_QUOTES)));
					$DESA_ENTREVISTA = mysqli_real_escape_string($con,(strip_tags($_POST["DESA_ENTREVISTA"],ENT_QUOTES)));
					$LUGAR_VISITADO = mysqli_real_escape_string($con,(strip_tags($_POST["LUGAR_VISITADO"],ENT_QUOTES)));
					$UBICACION = mysqli_real_escape_string($con,(strip_tags($_POST["UBICACION"],ENT_QUOTES)));
					$OBSERVACIONES = mysqli_real_escape_string($con,(strip_tags($_POST["OBSERVACIONES"],ENT_QUOTES)));
					$TIP_DOC_PROP = mysqli_real_escape_string($con,(strip_tags($_POST["TIP_DOC_PROP"],ENT_QUOTES)));
					$F_DOC = mysqli_real_escape_string($con,(strip_tags($_POST["F_DOC"],ENT_QUOTES)));
					$RFC_PROP = mysqli_real_escape_string($con,(strip_tags($_POST["RFC_PROP"],ENT_QUOTES)));
					$DOC_LEGAL = mysqli_real_escape_string($con,(strip_tags($_POST["DOC_LEGAL"],ENT_QUOTES)));
					$COTEJADO_CON = mysqli_real_escape_string($con,(strip_tags($_POST["COTEJADO_CON"],ENT_QUOTES)));
					$CARGO_DTO = mysqli_real_escape_string($con,(strip_tags($_POST["CARGO_DTO"],ENT_QUOTES)));
					$TEL_PROP = mysqli_real_escape_string($con,(strip_tags($_POST["TEL_PROP"],ENT_QUOTES)));
					$CONTACTO = mysqli_real_escape_string($con,(strip_tags($_POST["CONTACTO"],ENT_QUOTES)));
					$F_CONTACTO = mysqli_real_escape_string($con,(strip_tags($_POST["F_CONTACTO"],ENT_QUOTES)));
					$LUGAR_CONTACTO = mysqli_real_escape_string($con,(strip_tags($_POST["LUGAR_CONTACTO"],ENT_QUOTES)));
					$OBSERVACIONES_CONTACT = mysqli_real_escape_string($con,(strip_tags($_POST["OBSERVACIONES_CONTACT"],ENT_QUOTES)));
					$DOMICILIO_NA = mysqli_real_escape_string($con,(strip_tags($_POST["DOMICILIO_NA"],ENT_QUOTES)));
					$DIRECCION_PREX = mysqli_real_escape_string($con,(strip_tags($_POST["DIRECCION_PREX"],ENT_QUOTES)));
					$TESTIGOS_PREX = mysqli_real_escape_string($con,(strip_tags($_POST["TESTIGOS_PREX"],ENT_QUOTES)));
					$NOMBRE_PREX = mysqli_real_escape_string($con,(strip_tags($_POST["NOMBRE_PREX"],ENT_QUOTES)));
					$DIR_REF_PREX = mysqli_real_escape_string($con,(strip_tags($_POST["DIR_REF_PREX"],ENT_QUOTES)));
					$OBSERVACIONES_PREX = mysqli_real_escape_string($con,(strip_tags($_POST["OBSERVACIONES_PREX"],ENT_QUOTES)));
					$POL_ANTER = mysqli_real_escape_string($con,(strip_tags($_POST["POL_ANTER"],ENT_QUOTES)));
					$COBERTURA_ANTER = mysqli_real_escape_string($con,(strip_tags($_POST["COBERTURA_ANTER"],ENT_QUOTES)));
					$F_INI_ANTER = mysqli_real_escape_string($con,(strip_tags($_POST["F_INI_ANTER"],ENT_QUOTES)));
					$F_FIN_ANTER = mysqli_real_escape_string($con,(strip_tags($_POST["F_FIN_ANTER"],ENT_QUOTES)));
					$OBSERVACION_ANTER = mysqli_real_escape_string($con,(strip_tags($_POST["OBSERVACION_ANTER"],ENT_QUOTES)));
					$DENUNCIA_MP = mysqli_real_escape_string($con,(strip_tags($_POST["DENUNCIA_MP"],ENT_QUOTES)));
					$MUNICIPIO = mysqli_real_escape_string($con,(strip_tags($_POST["MUNICIPIO"],ENT_QUOTES)));
					$CARPETA = mysqli_real_escape_string($con,(strip_tags($_POST["CARPETA"],ENT_QUOTES)));
					$F_INV = mysqli_real_escape_string($con,(strip_tags($_POST["F_INV"],ENT_QUOTES)));
					$HORA_INV = mysqli_real_escape_string($con,(strip_tags($_POST["HORA_INV"],ENT_QUOTES)));
					$CARP_REG = mysqli_real_escape_string($con,(strip_tags($_POST["CARP_REG"],ENT_QUOTES)));
					$MOT_CARP_INV = mysqli_real_escape_string($con,(strip_tags($_POST["MOT_CARP_INV"],ENT_QUOTES)));
					$OBSERVACION_INV = mysqli_real_escape_string($con,(strip_tags($_POST["OBSERVACION_INV"],ENT_QUOTES)));
					$POLIZA_DOC = mysqli_real_escape_string($con,(strip_tags($_POST["POLIZA_DOC"],ENT_QUOTES)));
					$FACTURA_DOC = mysqli_real_escape_string($con,(strip_tags($_POST["FACTURA_DOC"],ENT_QUOTES)));
					$ACTA_MP_DOC = mysqli_real_escape_string($con,(strip_tags($_POST["ACTA_MP_DOC"],ENT_QUOTES)));
					$TENENCIAS = mysqli_real_escape_string($con,(strip_tags($_POST["TENENCIAS"],ENT_QUOTES)));
					$FOTOGRAFIAS_DOC = mysqli_real_escape_string($con,(strip_tags($_POST["FOTOGRAFIAS_DOC"],ENT_QUOTES)));
					$CUEST_ROBO_OTROS_DOC = mysqli_real_escape_string($con,(strip_tags($_POST["CUEST_ROBO_OTROS_DOC"],ENT_QUOTES)));
					$CONCLUCION_CASO = mysqli_real_escape_string($con,(strip_tags($_POST["CONCLUCION_CASO"],ENT_QUOTES)));
					$OBS_CONCLUSION = mysqli_real_escape_string($con,(strip_tags($_POST["OBS_CONCLUSION"],ENT_QUOTES)));
					//insert
					$insert = mysqli_query($con, "INSERT INTO ALESI_TCASO ('ID_CASO','ID_EMPRESA','TIPO_CASO','F_ALTA','F_ESTATUS','F_CIERRE','STATUS','ID_USUARIO_ALTA','ID_USUARIO_ASIGNADO','ID_USUARIO_ULTIMA_ACT') 
					VALUES (NULL,'SURA','SINIESTRO_AUTO_S','SYSDATE','SYSDATE','SYSDATE','EN_CURSO','jesus@admin.com','jesus@admin.com','jesus@admin.com')") or die(mysqli_error());
						if($insert){
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho! Los datos han sido guardados con éxito.</div>';
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. No se pudo guardar los datos !</div>';
						}
				} else {
					$DIRIGIDO_A = mysqli_real_escape_string($con,(strip_tags($_POST["DIRIGIDO_A"],ENT_QUOTES)));
					$CARGO = mysqli_real_escape_string($con,(strip_tags($_POST["CARGO"],ENT_QUOTES)));
					$N_DE_SINIESTRO = mysqli_real_escape_string($con,(strip_tags($_POST["N_DE_SINIESTRO"],ENT_QUOTES)));
					$F_DE_SINIESTRO = mysqli_real_escape_string($con,(strip_tags($_POST["F_DE_SINIESTRO"],ENT_QUOTES)));
					$F_DE_REPORTE = mysqli_real_escape_string($con,(strip_tags($_POST["F_DE_REPORTE"],ENT_QUOTES)));
					$COBERTURA = mysqli_real_escape_string($con,(strip_tags($_POST["COBERTURA"],ENT_QUOTES)));
					$NOM_ASEGURADO = mysqli_real_escape_string($con,(strip_tags($_POST["NOM_ASEGURADO"],ENT_QUOTES)));
					$NOM_RECLAMANTE = mysqli_real_escape_string($con,(strip_tags($_POST["NOM_RECLAMANTE"],ENT_QUOTES)));
					$CON_VIOLENCIA = mysqli_real_escape_string($con,(strip_tags($_POST["CON_VIOLENCIA"],ENT_QUOTES)));
					$USO_TDC = mysqli_real_escape_string($con,(strip_tags($_POST["USO_TDC"],ENT_QUOTES)));
					$EFECTIVO = mysqli_real_escape_string($con,(strip_tags($_POST["EFECTIVO"],ENT_QUOTES)));
					$COMPRA_PROTEGIDA = mysqli_real_escape_string($con,(strip_tags($_POST["COMPRA_PROTEGIDA"],ENT_QUOTES)));
					$SINI_TREINTA_DIAS = mysqli_real_escape_string($con,(strip_tags($_POST["SINI_TREINTA_DIAS"],ENT_QUOTES)));
					$SUMA_ASEGURADA = mysqli_real_escape_string($con,(strip_tags($_POST["SUMA_ASEGURADA"],ENT_QUOTES)));
					$REECONSTRUCCION_HECHOS =mysqli_real_escape_string($con,(strip_tags($_POST["REECONSTRUCCION_HECHOS"],ENT_QUOTES)));
					$FALSEDAD_DECALRACION = mysqli_real_escape_string($con,(strip_tags($_POST["FALSEDAD_DECALRACION"],ENT_QUOTES)));
					$DOC_APOCRIFOS = mysqli_real_escape_string($con,(strip_tags($_POST["DOC_APOCRIFOS"],ENT_QUOTES)));
					$OTROS = mysqli_real_escape_string($con,(strip_tags($_POST["OTROS"],ENT_QUOTES)));
					$RESULT_INVEST = mysqli_real_escape_string($con,(strip_tags($_POST["RESULT_INVEST"],ENT_QUOTES)));
					$DECLA_INI = mysqli_real_escape_string($con,(strip_tags($_POST["DECLA_INI"],ENT_QUOTES)));
					$DESA_ENTREVISTA = mysqli_real_escape_string($con,(strip_tags($_POST["DESA_ENTREVISTA"],ENT_QUOTES)));
					$LUGAR_VISITADO = mysqli_real_escape_string($con,(strip_tags($_POST["LUGAR_VISITADO"],ENT_QUOTES)));
					$UBICACION = mysqli_real_escape_string($con,(strip_tags($_POST["UBICACION"],ENT_QUOTES)));
					$OBSERVACIONES = mysqli_real_escape_string($con,(strip_tags($_POST["OBSERVACIONES"],ENT_QUOTES)));
					$DENUNCIA_MP = mysqli_real_escape_string($con,(strip_tags($_POST["DENUNCIA_MP"],ENT_QUOTES)));
					$MUNICIPIO = mysqli_real_escape_string($con,(strip_tags($_POST["MUNICIPIO"],ENT_QUOTES)));
					$CARPETA = mysqli_real_escape_string($con,(strip_tags($_POST["CARPETA"],ENT_QUOTES)));
					$F_INV = mysqli_real_escape_string($con,(strip_tags($_POST["F_INV"],ENT_QUOTES)));
					$HORA_INV = mysqli_real_escape_string($con,(strip_tags($_POST["HORA_INV"],ENT_QUOTES)));
					$CARP_REG = mysqli_real_escape_string($con,(strip_tags($_POST["CARP_REG"],ENT_QUOTES)));
					$CARP_RELA = mysqli_real_escape_string($con,(strip_tags($_POST["CARP_RELA"],ENT_QUOTES)));
					$CARP_REL = mysqli_real_escape_string($con,(strip_tags($_POST["CARP_REL"],ENT_QUOTES)));
					$CARP_MOTIVO = mysqli_real_escape_string($con,(strip_tags($_POST["CARP_MOTIVO"],ENT_QUOTES)));
					$OBSERVACION_INV = mysqli_real_escape_string($con,(strip_tags($_POST["OBSERVACION_INV"],ENT_QUOTES)));
					$POLIZA_DOC = mysqli_real_escape_string($con,(strip_tags($_POST["POLIZA_DOC"],ENT_QUOTES)));
					$ACTA_MP_DOC = mysqli_real_escape_string($con,(strip_tags($_POST["ACTA_MP_DOC"],ENT_QUOTES)));
					$FOTOGRAFIAS_DOC = mysqli_real_escape_string($con,(strip_tags($_POST["FOTOGRAFIAS_DOC"],ENT_QUOTES)));
					$CUEST_ROBO_OTROS_DOC = mysqli_real_escape_string($con,(strip_tags($_POST["CUEST_ROBO_OTROS_DOC"],ENT_QUOTES)));
					$CONCLUCION_CASO = mysqli_real_escape_string($con,(strip_tags($_POST["CONCLUCION_CASO"],ENT_QUOTES)));
					$OBS_CONCLUSION = mysqli_real_escape_string($con,(strip_tags($_POST["OBS_CONCLUSION"],ENT_QUOTES)));
					//insert
					$insert = mysqli_query($con, "INSERT INTO ALESI_TCASO ('ID_CASO','ID_EMPRESA','TIPO_CASO','F_ALTA','F_ESTATUS','F_CIERRE','STATUS','ID_USUARIO_ALTA','ID_USUARIO_ASIGNADO','ID_USUARIO_ULTIMA_ACT') 
					VALUES (NULL,'CARDIF','SINIESTRO_AUTO_S','SYSDATE','SYSDATE','SYSDATE','EN_CURSO',
					'jesus@admin.com','jesus@admin.com','jesus@admin.com')") or die(mysqli_error());
						if($insert){
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho! Los datos han sido guardados con éxito.</div>';
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. No se pudo guardar los datos !</div>';
						}
				}
			}
			?>
			
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
					<th align = "center" colspan="2">Campo</th>
					<th align = "center">Valor</th>
				</tr>
				<?php
					$sql = mysqli_query($con, "SELECT * FROM ALESI_TATRICASO WHERE ID_EMPRESA = '$nik'");
					$sql1 = mysqli_query($con, "SELECT * FROM ALESI_TATRICASO WHERE ID_EMPRESA = '$nik'");
					//catalogos
					$cat1 = mysqli_query($con, "SELECT * FROM ALESI_NTABLAS WHERE ID_TABLA = (SELECT ID_TABLA FROM ALESI_TABLAS WHERE COD_TABLA = 'CAT_COBERT')");
					$cat2 = mysqli_query($con, "SELECT * FROM ALESI_NTABLAS WHERE ID_TABLA = (SELECT ID_TABLA FROM ALESI_TABLAS WHERE COD_TABLA = 'CAT_SI_NO')");
					$cat3 = mysqli_query($con, "SELECT * FROM ALESI_NTABLAS WHERE ID_TABLA = (SELECT ID_TABLA FROM ALESI_TABLAS WHERE COD_TABLA = 'CAT_AUTO_MARCA')");
					$cat4 = mysqli_query($con, "SELECT * FROM ALESI_NTABLAS WHERE ID_TABLA = (SELECT ID_TABLA FROM ALESI_TABLAS WHERE COD_TABLA = 'CAT_AUTO_TIPO')");
					$cat5 = mysqli_query($con, "SELECT * FROM ALESI_NTABLAS WHERE ID_TABLA = (SELECT ID_TABLA FROM ALESI_TABLAS WHERE COD_TABLA = 'CAT_COLOR')");
					$cat6 = mysqli_query($con, "SELECT * FROM ALESI_NTABLAS WHERE ID_TABLA = (SELECT ID_TABLA FROM ALESI_TABLAS WHERE COD_TABLA = 'CAT_REST_INV')");
					$cat7 = mysqli_query($con, "SELECT * FROM ALESI_NTABLAS WHERE ID_TABLA = (SELECT ID_TABLA FROM ALESI_TABLAS WHERE COD_TABLA = 'CAT_TIP_CONTACT')");
					$cat8 = mysqli_query($con, "SELECT * FROM ALESI_NTABLAS WHERE ID_TABLA = (SELECT ID_TABLA FROM ALESI_TABLAS WHERE COD_TABLA = 'CAT_MUNICIPIO')");
					$cat9 = mysqli_query($con, "SELECT * FROM ALESI_NTABLAS WHERE ID_TABLA = (SELECT ID_TABLA FROM ALESI_TABLAS WHERE COD_TABLA = 'CAT_CONCLUSION')");
					$cat10 = mysqli_query($con, "SELECT * FROM ALESI_NTABLAS WHERE ID_TABLA = (SELECT ID_TABLA FROM ALESI_TABLAS WHERE COD_TABLA = 'CAT_COBERT')");
				//Iteracion principal
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">No hay datos.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$row['ETIQUETA'].'</td>
							<td>';
							if($row['TIPO_DATO'] == 'A'){
								if($row['CATALOGO'] == 'CAT_COBERT'){
									if($row['NUM_ATRIBUTO'] == '10'){
										echo '<select name = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" class="input-group form-control" style = "width:320px;"><option value "">--Seleccione--</option>';
											$ca1 = 1;
											while($cata1 = mysqli_fetch_assoc($cat1)){
													echo '<option value = '.$cata1['ID_CODIGO'].'" ';
													if($cata1['ID_CODIGO'] == $row['VALOR']){ echo 'selected'; }
													echo '>'.$cata1['DESCIPCION'].'</option>';
												$ca1++;
											}
										echo '</select>';
									} else {
										echo '<select name = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" class="input-group form-control" style = "width:320px;"><option value "">--Seleccione--</option>';
											$ca10 = 1;
											while($cata10 = mysqli_fetch_assoc($cat10)){
													echo '<option value = '.$cata10['ID_CODIGO'].'" ';
													echo '>'.$cata10['DESCIPCION'].'</option>';
												$ca10++;
											}
										echo '</select>';
									}
								}
								else if($row['CATALOGO'] == 'CAT_AUTO_MARCA'){
									echo '<select name = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" class="input-group form-control" style = "width:320px;"><option value "">--Seleccione--</option>';
										$ca3 = 1;
										while($cata3 = mysqli_fetch_assoc($cat3)){
												echo '<option value = '.$cata3['ID_CODIGO'].'">'.$cata3['DESCIPCION'].'</option>';
											$ca3++;
										}
									echo '</select>';
								}
								else if($row['CATALOGO'] == 'CAT_AUTO_TIPO'){
									echo '<select name = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" class="input-group form-control" style = "width:320px;"><option value "">--Seleccione--</option>';
										$ca4 = 1;
										while($cata4 = mysqli_fetch_assoc($cat4)){
												echo '<option value = '.$cata4['ID_CODIGO'].'">'.$cata4['DESCIPCION'].'</option>';
											$ca4++;
										}
									echo '</select>';
								}
								else if($row['CATALOGO'] == 'CAT_COLOR'){
									echo '<select name = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" class="input-group form-control" style = "width:320px;"><option value "">--Seleccione--</option>';
										$ca5 = 1;
										while($cata5 = mysqli_fetch_assoc($cat5)){
												echo '<option value = '.$cata5['ID_CODIGO'].'">'.$cata5['DESCIPCION'].'</option>';
											$ca5++;
										}
									echo '</select>';
								}
								else if($row['CATALOGO'] == 'CAT_MUNICIPIO'){
									echo '<select name = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" class="input-group form-control" style = "width:320px;"><option value "">--Seleccione--</option>';
										$ca8 = 1;
										while($cata8 = mysqli_fetch_assoc($cat8)){
												echo '<option value = '.$cata8['ID_CODIGO'].'">'.$cata8['DESCIPCION'].'</option>';
											$ca8++;
										}
									echo '</select>';
								}
								else {
									echo '<input type = "text" maxlength = "' .$row['LONGITUD_MAX']. '" name = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" class="input-group form-control" style = "width:320px;" />';
								}
							}
                            else if ($row['TIPO_DATO'] == 'N' ){
								echo '<input type = "number" minlength = "' .$row['LONGITUD_MIN']. '" maxlength = "' .$row['LONGITUD_MAX']. '" name = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" class="input-group form-control" style = "width:320px;" />';
							}
                            else if ($row['TIPO_DATO'] == 'D' ){
								echo '<input type = "text" name = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" class="datepicker form-control" style = "width:320px;" />';
							}
                            else if ($row['TIPO_DATO'] == 'T' ){
								echo '<textarea maxlength = "' .$row['LONGITUD_MAX']. '" name = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" style = "width:320px;"></textarea>';
							}
                            else if ($row['TIPO_DATO'] == 'E' ){
								echo '<label name = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" >' .$row['VALOR']. '</label>';
							}
                            else if ($row['TIPO_DATO'] == 'R' ){
								if($row['CATALOGO'] == 'CAT_SI_NO'){
									echo '<input type = "radio" name = "' .$row['ID_CAMPO']. '" name = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" value"S"> Si </input> <input type = "radio" name = "' .$row['ID_CAMPO']. '" name = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" value"N"> No </input>';
								}
								else if($row['CATALOGO'] == 'CAT_REST_INV'){
										$ca6 = 1;
										while($cata6 = mysqli_fetch_assoc($cat6)){
												echo '<input type = "radio" name = "' .$row['ID_CAMPO']. '" name = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" value"' .$cata6['ID_CODIGO']. '"> ' .$cata6['DESCIPCION']. ' </input>';
											$ca6++;
										}
								}
								else if($row['CATALOGO'] == 'CAT_TIP_CONTACT'){
										$ca7 = 1;
										while($cata7 = mysqli_fetch_assoc($cat7)){
												echo '<input type = "radio" name = "' .$row['ID_CAMPO']. '" name = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" value"' .$cata7['ID_CODIGO']. '"> ' .$cata7['DESCIPCION']. ' </input>';
											$ca7++;
										}
								}
								else if($row['CATALOGO'] == 'CAT_CONCLUSION'){
										$ca9 = 1;
										while($cata9 = mysqli_fetch_assoc($cat9)){
												echo '<input type = "radio" name = "' .$row['ID_CAMPO']. '" name = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" value"' .$cata9['ID_CODIGO']. '"> ' .$cata9['DESCIPCION']. ' </input>';
											$ca9++;
										}
								}
							}
                            else if ($row['TIPO_DATO'] == 'C' ){
								echo '<input type = "checkbox" name = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '">' .$row['ID_CAMPO']. '</input>';
							} 
                            else if ($row['TIPO_DATO'] == 'R2' ){
									echo '<input type = "radio" name = "' .$row['ID_CAMPO']. '" name = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" value"S"> Si </input> <input type = "radio" name = "' .$row['ID_CAMPO']. '" name = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" value"N"> No </input>';
							}
							echo '
							</td>
						</tr>
						';
						$no++;
					}
				}
				?>
			</table>
			</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-sm btn-primary" value="Guardar datos">
						<a href="mc_list.php" class="btn btn-sm btn-danger">Cancelar</a>
					</div>
				</div>
		</div>
	</div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript">
		$('.datepicker').datepicker({
			format: 'yyyy-mm-dd',
			weekStart: 1,
			daysOfWeekHighlighted: "6,0",
			autoclose: true,
			todayHighlight: true,
		});
		$('.datepicker').datepicker("setDate", new Date());
	</script>
</form>
</body>
</html>