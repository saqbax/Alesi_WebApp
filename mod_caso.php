<?php
include("conexion.php");
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<title>Alta de Casp</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/paper-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />

	<!-- Fonts and Icons -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="assets/css/themify-icons.css" rel="stylesheet">
	
</head>

	<body>
			<?php
				$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
				$emp = mysqli_real_escape_string($con,(strip_tags($_GET["emp"],ENT_QUOTES)));
			?>
	<div class="image-container set-full-height" style="background-image: url('assets/img/paper-1.jpeg')">
	    <!--   Creative Tim Branding   -->
	    <a href="#">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="assets/img/new_logo.png">
	            </div>
	            <div class="brand">
	            </div>
	        </div>
	    </a>
				<?php
					$sql = mysqli_query($con, "CALL p_sample($nik);");
					$row = mysqli_fetch_assoc($sql);
				?>
	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-0">

		            <!--      Wizard container        -->
		            <div class="wizard-container">

		                <div class="card wizard-card" data-color="orange" id="wizardProfile">
							<form action="mc_epo.php?nik=<?php echo $nik;?>&emp=<?php echo $emp;?>" method="post" id="theform">
		                <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

		                    	<div class="wizard-header text-center">
		                        	<h3 class="wizard-title">Alta de Caso de Sura</h3>
									<p class="category">Esta información es requerida para dar seguimiento a un siniestro</p>
		                    	</div>

								<div class="wizard-navigation">
									<div class="progress-with-circle">
									     <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
									</div>
									<ul>
			                            <li>
											<a href="#B1" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-user"></i>
												</div>
												<!-- DIRIGIDO A -->
											</a>
										</li>
			                            <li>
											<a href="#B2" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-user"></i>
												</div>
												<!-- DATOS DEL SINIESTRO -->
											</a>
										</li>
			                            <li>
											<a href="#B3" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-user"></i>
												</div>
												<!-- DATOS DEL VEHICULO -->
											</a>
										</li>
			                            <li>
											<a href="#B4" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-user"></i>
												</div>
												<!-- MOTIVO INVESTIGACION -->
											</a>
										</li>
			                            <li>
											<a href="#B5" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-user"></i>
												</div>
												<!-- RESULTADO INVESTIGACION -->
											</a>
										</li>
			                            <li>
											<a href="#B6" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-user"></i>
												</div>
												<!-- DECLARACIONES -->
											</a>
										</li>
			                            <li>
											<a href="#B7" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-user"></i>
												</div>
												<!-- ENTREVISTAS -->
											</a>
										</li>
			                            <li>
											<a href="#B8" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-user"></i>
												</div>
												<!-- RECONSTRUCCION -->
											</a>
										</li>
			                            <li>
											<a href="#B9" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-user"></i>
												</div>
												<!-- DOCUMENTOS -->
											</a>
										</li>
			                            <li>
											<a href="#B10" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-user"></i>
												</div>
												<!-- PREEXISTENCIA  VEHICULO -->
											</a>
										</li>
			                            <li>
											<a href="#B11" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-user"></i>
												</div>
												<!-- VERIFICACION POLIZAS -->
											</a>
										</li>
			                            <li>
											<a href="#B12" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-user"></i>
												</div>
												<!-- CARPETA  INVESTIGACION -->
											</a>
										</li>
			                            <li>
											<a href="#B13" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-user"></i>
												</div>
												<!-- DOCUMENTOS ANEXOS -->
											</a>
										</li>
			                            <li>
											<a href="#B14" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-user"></i>
												</div>
												<!-- CONCLUSIONES -->
											</a>
										</li>
			                        </ul>
								</div>
<!-- Jesus Acosta -->
<?php
						echo '
		                        <div class="tab-content">
		                            <div class="tab-pane" id="B1">
		                            	<div class="row">
											<h5 class="info-text"> Por favor indica a quien va dirigido el caso</h5>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>NOMBRE </label>
													<input name="DIRIGIDO_A" type="text" class="form-control" placeholder="a quien va dirigido el documento" value = "'.$row['DIRIGIDO_A'].'">
												</div>
											</div>
								<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>CARGO  </label>
													<input name="CARGO" type="text" class="form-control" placeholder="cargo que ocupa la persona" value = "'.$row['CARGO'].'">
												</div>
											</div>
										</div>
		                            </div>
		                        <div class="tab-pane" id="B2">
		                            	<div class="row">
											<h5 class="info-text"> DATOS DEL SINIESTRO.</h5>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>NÚMERO DE SINIESTRO </label>
													<input name="N_DE_SINIESTRO" type="text" class="form-control" placeholder="Folio o numero del asegurado" value = "'.$row['N_DE_SINIESTRO'].'">
												</div>
												<div class="form-group">
													<label>FECHA DEL SINIESTRO </label>
													<input name="F_DE_SINIESTRO" type="text" class="form-control datepicker" value = "'.$row['F_DE_SINIESTRO'].'">
												</div>
												<div class="form-group">
													<label>FECHA DEL REPORTE </label>
													<input name="F_DE_REPORTE" type="text" class="form-control datepicker" value = "'.$row['F_DE_REPORTE'].'">
												</div>
												<div class="form-group">
													<label>NO. DE POLIZA </label>
													<input name="N_DE_POLIZA" type="text" class="form-control" value = "'.$row['N_DE_POLIZA'].'">
												</div>												
												<div class="form-group">
													<label>INCISO </label>
													<input name="INCISO" type="text" class="form-control" value = "'.$row['INCISO'].'">
												</div>
												<div class="form-group">
													<label>INICIO VIGENCIA </label>
													<input name="INI_VIG" type="text" class="form-control datepicker" value = "'.$row['INI_VIG'].'">
												</div>
												<div class="form-group">
													<label>TERMINO VIGENCIA </label>
													<input name="FIN_VIG" type="text" class="form-control datepicker" value = "'.$row['FIN_VIG'].'">
												</div>
												<div class="form-group">
													<label>COBERTURA </label>
													<select name = "COBERTURA" id = "COBERTURA" class="input-group form-control" >
														<option value ="N/A">--Seleccione--</option>
														<option value = "A">AMPLIA</option>
														<option value = "B">BASICA</option>
														<option value = "L">LIMIATADA</option>
														<option value = "T">TOTAL</option>
													</select>
												</div>
												<script>document.getElementById("COBERTURA").value = "'.$row['COBERTURA'].'";</script>
												<div class="form-group">
													<label>NOMBRE DEL ASEGURADO </label>
													<input name="NOM_ASEGURADO" type="text" class="form-control" placeholder="nombre del asegurado" value = "'.$row['NOM_ASEGURADO'].'">
												</div>
												<div class="form-group">
													<label>NOMBRE DEL CONDUCTOR </label>
													<input name="NOM_CONDUCTOR" type="text" class="form-control" placeholder="nombre del conductor" value = "'.$row['NOM_CONDUCTOR'].'">
												</div>
												<h6 class="info-text"> ROBO</h6>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>ROBO CON VIOLENCIA:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="CON_VIOLENCIA" id="CON_VIOLENCIA_S" value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="CON_VIOLENCIA" id="CON_VIOLENCIA_N" value="N" >
															<span class="form-check-sign">NO</span>
														</label>
														<script>if("'.$row['CON_VIOLENCIA'].'" === "S"){document.getElementById("CON_VIOLENCIA_S").checked = true} else {document.getElementById("CON_VIOLENCIA_N").checked = true}</script>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>ROBO SIN VIOLENCIA:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="SIN_VIOLENCIA" id="SIN_VIOLENCIA_S" value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="SIN_VIOLENCIA" id="SIN_VIOLENCIA_N" value="N" >
															<span class="form-check-sign">NO</span>
														</label>
														<script>if("'.$row['SIN_VIOLENCIA'].'" === "S"){document.getElementById("SIN_VIOLENCIA_S").checked = true} else {document.getElementById("SIN_VIOLENCIA_N").checked = true}</script>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>ROBO EN DOMICILIO:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="EN_DOMICILIO" id="EN_DOMICILIO_S" value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="EN_DOMICILIO" id="EN_DOMICILIO_N" value="N" >
															<span class="form-check-sign">NO</span>
														</label>
														<script>if("'.$row['EN_DOMICILIO'].'" === "S"){document.getElementById("EN_DOMICILIO_S").checked = true} else {document.getElementById("EN_DOMICILIO_N").checked = true}</script>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>COLICION Y/O VUELCO:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="COLISION_VUELCO" id="COLISION_VUELCO_S" value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="COLISION_VUELCO" id="COLISION_VUELCO_N" value="N" >
															<span class="form-check-sign">NO</span>
														</label>
														<script>if("'.$row['COLISION_VUELCO'].'" === "S"){document.getElementById("COLISION_VUELCO_S").checked = true} else {document.getElementById("COLISION_VUELCO_N").checked = true}</script>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="B3">
		                            	<div class="row">
											<h5 class="info-text"> DATOS DEL VEHICULO</h5>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>MARCA </label>
													<select name="MARCA" id="MARCA" class="input-group form-control">
														<option value="">--Seleccione--</option>
														<option value="0001">NISSAN</option><option value="0002">FORD</option><option value="0003">CHEVROLET</option><option value="0004">TOYOTA</option>
													</select>
												<script>document.getElementById("MARCA").value = "'.$row['MARCA'].'";</script>
												</div>
												<div class="form-group">
													<label>TIPO </label>
													<select name = "TIPO" id = "TIPO" class="input-group form-control" >
														<option value="">--Seleccione--</option>
													</select>
												<script>document.getElementById("TIPO").value = "'.$row['TIPO'].'";</script>
												</div>												
												<div class="form-group">
													<label>MODELO </label>
													<input name="MODELO" type="text" class="form-control" placeholder="modelo/año del vehiculo" value = "'.$row['MODELO'].'">
												</div>
												<div class="form-group">
													<label>COLOR </label>
													<select name="COLOR" id="COLOR" class="input-group form-control">
														<option value="">--Seleccione--</option>
														<option value="1">BLANCO</option><option value="2">NEGRO</option><option value="3">AZUL</option><option value="4">VERDE</option><option value="5">AMARILLO</option><option value="6">CAFE</option><option value="7">PLATEADO</option>
													</select>
												<script>document.getElementById("COLOR").value = "'.$row['COLOR'].'";</script>
												</div>
												<div class="form-group">
													<label>NO. DE SERIE </label>
													<input name="N_DE_SERIE" type="text" class="form-control" placeholder="numero de serie del vehiculo">
												</div>												
												<div class="form-group">
													<label>NO. DE MOTOR </label>
													<input name="N_MOTOR" type="text" class="form-control" placeholder="numero de serie del motor">
												</div>												
												<div class="form-group">
													<label>PLACAS </label>
													<input name="PLACAS" type="text" class="form-control" placeholder="numero de palcas">
												</div>
											</div>
										</div>
		                            </div>
		                            <div class="tab-pane" id="B4">
		                            	<div class="row">
											<h5 class="info-text"> MOTIVO DE LA INVESTIGACION.</h5>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>SINIESTRO OCURRIDO DENTRO DE LOS 30 DIAS DE INICIO DE VIGENCIA:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="SINI_TREINTA_DIAS" id="SINI_TREINTA_DIAS_S" value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="SINI_TREINTA_DIAS" id="SINI_TREINTA_DIAS_N" value="N" >
															<span class="form-check-sign">NO</span>
														</label>
														<script>if("'.$row['SINI_TREINTA_DIAS'].'" === "S"){document.getElementById("SINI_TREINTA_DIAS_S").checked = true} else {document.getElementById("SINI_TREINTA_DIAS_N").checked = true}</script>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>SUMA ASEGURADA:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="SUMA_ASEGURADA" id="SUMA_ASEGURADA_S" value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="SUMA_ASEGURADA" id="SUMA_ASEGURADA_N" value="N" >
															<span class="form-check-sign">NO</span>
														</label>
														<script>if("'.$row['SUMA_ASEGURADA'].'" === "S"){document.getElementById("SUMA_ASEGURADA_S").checked = true} else {document.getElementById("SUMA_ASEGURADA_N").checked = true}</script>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>DUDOSA PREEXISTENCIA DEL VEHICULO:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="PREEXISTENCIA_AUTO" id="PREEXISTENCIA_AUTO_S" value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="PREEXISTENCIA_AUTO" id="PREEXISTENCIA_AUTO_N" value="N" >
															<span class="form-check-sign">NO</span>
														</label>
														<script>if("'.$row['PREEXISTENCIA_AUTO'].'" === "S"){document.getElementById("PREEXISTENCIA_AUTO_S").checked = true} else {document.getElementById("PREEXISTENCIA_AUTO_N").checked = true}</script>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>RECONSTRUCCION DE LOS HECHOS:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="REECONSTRUCCION_HECHOS" id="REECONSTRUCCION_HECHOS_S" value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="REECONSTRUCCION_HECHOS" id="REECONSTRUCCION_HECHOS_N" value="N" >
															<span class="form-check-sign">NO</span>
														</label>
														<script>if("'.$row['REECONSTRUCCION_HECHOS'].'" === "S"){document.getElementById("REECONSTRUCCION_HECHOS_S").checked = true} else {document.getElementById("REECONSTRUCCION_HECHOS_N").checked = true}</script>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>CAMBIO DE CONDUCTOR:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="CAMBIO_CONDUCTOR" id="CAMBIO_CONDUCTOR_S" value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="CAMBIO_CONDUCTOR" id="CAMBIO_CONDUCTOR_N" value="N" >
															<span class="form-check-sign">NO</span>
														</label>
														<script>if("'.$row['CAMBIO_CONDUCTOR'].'" === "S"){document.getElementById("CAMBIO_CONDUCTOR_S").checked = true} else {document.getElementById("CAMBIO_CONDUCTOR_N").checked = true}</script>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>POSIBLES DOCUMENTOS APOCRIFOS:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="DOC_APOCRIFOS" id="DOC_APOCRIFOS_S" value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="DOC_APOCRIFOS" id="DOC_APOCRIFOS_N" value="N" >
															<span class="form-check-sign">NO</span>
														</label>
														<script>if("'.$row['DOC_APOCRIFOS'].'" === "S"){document.getElementById("DOC_APOCRIFOS_S").checked = true} else {document.getElementById("DOC_APOCRIFOS_N").checked = true}</script>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>OTROS:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="OTROS" id="OTROS_S" value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="OTROS" id="OTROS_N" value="N" >
															<span class="form-check-sign">NO</span>
														</label>
														<script>if("'.$row['OTROS'].'" === "S"){document.getElementById("OTROS_S").checked = true} else {document.getElementById("OTROS_N").checked = true}</script>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>CUALES:   </label>
														<input name="OTROS_VAL" type="text" class="form-control" placeholder="otros echos" value = "'.$row['OTROS_VAL'].'">
													</div>
												</div>
											</div>
										</div>
									</div>
		                            <div class="tab-pane" id="B5">
		                            	<div class="row">
											<h5 class="info-text">RESULTADO DE LA INVESTIGACION.</h5>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="RESULT_INVEST" id="RESULT_INVEST_C" value="C" >
															<span class="form-check-sign">CONVENIO </span>
															<input class="form-check-input" type="radio" name="RESULT_INVEST" id="RESULT_INVEST_P" value="P" >
															<span class="form-check-sign">PROCEDENTE </span>
															<input class="form-check-input" type="radio" name="RESULT_INVEST" id="RESULT_INVEST_R" value="R" >
															<span class="form-check-sign">RECHAZO </span>
														</label>
														<script>if("'.$row['RESULT_INVEST'].'" === "C"){document.getElementById("RESULT_INVEST_C").checked = true} else if("'.$row['RESULT_INVEST'].'" === "P"){document.getElementById("RESULT_INVEST_P").checked = true} else {document.getElementById("RESULT_INVEST_R").checked = true}</script>
													</div>
												</div>
											</div>
										</div>
									</div>
		                            <div class="tab-pane" id="B6">
		                            	<div class="row">
											<h5 class="info-text"> DECLARACION DEL ASEGURADO O CONDUCTOR VERTIDA AL AJUSTADOR </h5>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>DECLARACION INICIAL </label>
														<textarea maxlength="20000" name="DECLA_INI" tabindex="1" class="form-control">"'.$row['DECLA_INI'].'"</textarea>
													</div>
												</div>
											</div>
										</div>
		                            </div>
		                            <div class="tab-pane" id="B7">
		                                <div class="row">
	                                        <h5 class="info-text"> ENTREVISTA CON EL ASEGURADO O CONDUCTOR </h5>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>DESARROLLO DE LA ENTREVISTA </label>
														<textarea maxlength="20000" name="DESA_ENTREVISTA" tabindex="1" class="form-control">"'.$row['DESA_ENTREVISTA'].'"</textarea>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<div class="form-check-radio form-check-inline">
															<label>LUGAR VISITADO:   </label>
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="LUGAR_VISITADO" id="LUGAR_VISITADO_S" value="S" >
																	<span class="form-check-sign">SI </span>
																	<input class="form-check-input" type="radio" name="LUGAR_VISITADO" id="LUGAR_VISITADO_N" value="N" >
																	<span class="form-check-sign">NO</span>
																</label>
															<script>if("'.$row['LUGAR_VISITADO'].'" === "S"){document.getElementById("LUGAR_VISITADO_S").checked = true} else {document.getElementById("LUGAR_VISITADO_N").checked = true}</script>
														</div>
													</div>
												</div>
											</div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="B8">
		                                <div class="row">
	                                        <h5 class="info-text"> DOCUMENTOS DE LA PROPIEDAD </h5>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>LUGAR VISITADO:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="LUGAR_VISITADO" id="LUGAR_VISITADO_S" value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="LUGAR_VISITADO" id="LUGAR_VISITADO_N" value="N" >
															<span class="form-check-sign">NO</span>
														</label>
														<script>if("'.$row['LUGAR_VISITADO'].'" === "S"){document.getElementById("LUGAR_VISITADO_S").checked = true} else {document.getElementById("LUGAR_VISITADO_N").checked = true}</script>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>UBICACION </label>
														<input type="text" maxlength="250" name="UBICACION" tabindex="2" class="form-control" placeholder="Ubicaciones" value = "'.$row['UBICACION'].'">
													</div>
												</div>
												<div class="form-group">
													<label>	OBSERVACIONES </label>
													<textarea maxlength="20000" name="OBSERVACIONES" tabindex="3" class="form-control">"'.$row['UBICACION'].'"</textarea>
												</div>
											</div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="B9">
		                                <div class="row">
	                                        <h5 class="info-text"> PREEXISTENCIA DEL VEHICULO </h5>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>TIPO DE DOCUMENTO </label>
													<input type="text" maxlength="45" name="TIP_DOC_PROP" tabindex="2" class="form-control" placeholder="Tipo de documento" value = "'.$row['TIP_DOC_PROP'].'">
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<div class="form-group">
															<label>FECHA </label>
															<input name="F_DOC" type="text" class="form-control datepicker">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label>RAZON SOCIAL O NOMBRE DEL ESTABLECIMIENTO </label>
													<input type="text" maxlength="45" name="RFC_PROP" tabindex="2" class="form-control" placeholder="Razón Social" value = "'.$row['RFC_PROP'].'">
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>DOCUMENTO LEGAL </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="DOC_LEGAL" id="DOC_LEGAL_S" value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="DOC_LEGAL" id="DOC_LEGAL_N" value="N" >
															<span class="form-check-sign">NO</span>
														</label>
														<script>if("'.$row['DOC_LEGAL'].'" === "S"){document.getElementById("DOC_LEGAL_S").checked = true} else {document.getElementById("DOC_LEGAL_N").checked = true}</script>
													</div>
												</div>
												<div class="form-group">
													<label>COTEJADO CON </label>
													<input type="text" maxlength="150" name="COTEJADO_CON" tabindex="2" class="form-control" placeholder="Cotejado con" value = "'.$row['COTEJADO_CON'].'">
												</div>
												<div class="form-group">
													<label>CARGO Y/O DEPARTAMENTO </label>
													<input type="text" maxlength="150" name="CARGO_DTO" tabindex="2" class="form-control" placeholder="Cargo" value = "'.$row['CARGO_DTO'].'">
												</div>
												<div class="form-group">
													<label>TELEFONO </label>
													<input type="text" maxlength="45" name="TEL_PROP" tabindex="2" class="form-control" placeholder="Telefono" value = "'.$row['TEL_PROP'].'">
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>TIPO DE CONTACTO: </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="CONTACTO" id="CONTACTO_1" value="1" >
															<span class="form-check-sign"> PERSONAL </span>
															<input class="form-check-input" type="radio" name="CONTACTO" id="CONTACTO_2" value="2" >
															<span class="form-check-sign"> TELEFONICO </span>
															<input class="form-check-input" type="radio" name="CONTACTO" id="CONTACTO_3" value="3" >
															<span class="form-check-sign"> OTRO MEDIO </span>
														</label>
														<script>if("'.$row['CONTACTO'].'" === "C"){document.getElementById("CONTACTO_1").checked = true} else if("'.$row['CONTACTO'].'" === "P"){document.getElementById("CONTACTO_2").checked = true} else {document.getElementById("CONTACTO_3").checked = true}</script>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<div class="form-group">
															<label>FECHA </label>
															<input name="F_CONTACTO" type="text" class="form-control datepicker" value = "'.$row['F_CONTACTO'].'">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label>LUGAR DE CONTACTO (DIRECCION) </label>
													<input type="text" maxlength="150" name="LUGAR_CONTACTO" tabindex="2" class="form-control" placeholder="Lugar de contacto" value = "'.$row['LUGAR_CONTACTO'].'">
												</div>
												<div class="form-group">
													<label>	OBSERVACIONES </label>
													<textarea maxlength="20000" name="OBSERVACIONES_CONTACT" tabindex="3" class="form-control">"'.$row['OBSERVACIONES_CONTACT'].'"</textarea>
												</div>
											</div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="B10">
		                                <div class="row">
	                                        <h5 class="info-text"> PREEXISTENCIA DEL VEHICULO </h5>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>DOMICILIO DE N/A: </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="DOMICILIO_NA" id="DOMICILIO_NA_S" value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="DOMICILIO_NA" id="DOMICILIO_NA_N" value="N" >
															<span class="form-check-sign">NO</span>
														</label>
														<script>if("'.$row['DOMICILIO_NA'].'" === "S"){document.getElementById("DOMICILIO_NA_S").checked = true} else {document.getElementById("DOMICILIO_NA_N").checked = true}</script>
													</div>
												</div>
												<div class="form-group">
													<label>DIRECCION </label>
													<input type="text" maxlength="150" name="DIRECCION_PREX" tabindex="2" class="form-control" placeholder="Dirección" value = "'.$row['DIRECCION_PREX'].'">
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>TESTIGOS DE LA PREEXISTENCIA DEL VEHICULO: </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="TESTIGOS_PREX" id="TESTIGOS_PREX_S" value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="TESTIGOS_PREX" id="TESTIGOS_PREX_N" value="N" >
															<span class="form-check-sign">NO</span>
														</label>
														<script>if("'.$row['TESTIGOS_PREX'].'" === "S"){document.getElementById("TESTIGOS_PREX_S").checked = true} else {document.getElementById("TESTIGOS_PREX_N").checked = true}</script>
													</div>
												</div>
												<div class="form-group">
													<label>NOMBRE </label>
													<input type="text" maxlength="150" name="NOMBRE_PREX" tabindex="2" class="form-control" placeholder="Nombre" value = "'.$row['NOMBRE_PREX'].'">
												</div>
												<div class="form-group">
													<label>DIRECCION O REFERENCIA </label>
													<input type="text" maxlength="150" name="DIR_REF_PREX" tabindex="2" class="form-control" placeholder="Dirección" value = "'.$row['DIR_REF_PREX'].'">
												</div>
												<div class="form-group">
													<label>	OBSERVACIONES </label>
													<textarea maxlength="20000" name="OBSERVACIONES_PREX" tabindex="3" class="form-control">"'.$row['OBSERVACIONES_PREX'].'"</textarea>
												</div>
											</div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="B11">
		                                <div class="row">
	                                        <h5 class="info-text"> VERIFICACION DE POLIZAS </h5>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>POLIZA ANTERIOR: </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="POL_ANTER" id="POL_ANTER_S" value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="POL_ANTER" id="POL_ANTER_N" value="N" >
															<span class="form-check-sign">NO</span>
														</label>
														<script>if("'.$row['POL_ANTER'].'" === "S"){document.getElementById("POL_ANTER_S").checked = true} else {document.getElementById("POL_ANTER_N").checked = true}</script>
													</div>
												</div>
												<div class="form-group">
													<label>COBERTURA </label>
													<select name="COBERTURA_ANTER" id="COBERTURA_ANTER" tabindex="2" class="input-group form-control"><option value="">--Seleccione--</option><option value="A">AMPLIA</option><option value="B">BASICA</option><option value="L">LIMIATADA</option><option value="N/A">N/A</option><option value="T">TOTAL</option></select>
												</div>
												<script>document.getElementById("COBERTURA_ANTER").value = "'.$row['COBERTURA_ANTER'].'";</script>
												<div class="form-group">
													<label>VIGENCIA DESDE </label>
													<input name="F_INI_ANTER" type="text" class="form-control datepicker" value = "'.$row['F_INI_ANTER'].'">
												</div>
												<div class="form-group">
													<label>VIGENVIA HASTA </label>
													<input name="F_FIN_ANTER" type="text" class="form-control datepicker" value = "'.$row['F_FIN_ANTER'].'">
												</div>
												<div class="form-group">
													<label>	OBSERVACIONES </label>
													<textarea maxlength="20000" name="OBSERVACION_ANTER" tabindex="3" class="form-control">"'.$row['OBSERVACION_ANTER'].'"</textarea>
												</div>
											</div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="B12">
		                                <div class="row">
	                                        <h5 class="info-text"> CARPETA DE INVESTIGACION </h5>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>DENUNCIA ANTE EL MINISTERIO PUBLICO: </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="DENUNCIA_MP" id="DENUNCIA_MP_S" value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="DENUNCIA_MP" id="DENUNCIA_MP_S" value="N" >
															<span class="form-check-sign">NO</span>
														</label>
														<script>if("'.$row['DENUNCIA_MP'].'" === "S"){document.getElementById("DENUNCIA_MP_S").checked = true} else {document.getElementById("DENUNCIA_MP_N").checked = true}</script>
													</div>
												</div>
												<div class="form-group">
													<label>ALCALDIA O MONICIPIO </label>
													<select name="MUNICIPIO" id="MUNICIPIO" tabindex="2" class="input-group form-control" style="width:320px;"><option value="" ""="">--Seleccione--</option><option value="1">GUSTAVO MADERO</option><option value="2">MIGUEL HIDALGO</option><option value="3">VENUSTIANO CARRANZA</option></select>
												</div>
												<script>document.getElementById("MUNICIPIO").value = "'.$row['MUNICIPIO'].'";</script>
												<div class="form-group">
													<label>CARPETA </label>
													<input type="text" maxlength="150" name="CARPETA" tabindex="2" class="form-control" placeholder="Carpeta" value = "'.$row['CARPETA'].'">
												</div>
												<div class="form-group">
													<label>FECHA </label>
													<input name="F_INV" type="text" class="form-control datepicker" value = "'.$row['F_INV'].'">
												</div>
												<div class="form-group">
													<label>HORA </label>
													<input type="text" maxlength="150" name="HORA_INV" tabindex="2" class="form-control" placeholder="Hora" value = "'.$row['HORA_INV'].'">
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>CARPETA RELACIONADA: </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="CARP_REG" id="CARP_REG_S" value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="CARP_REG" id="CARP_REG_N" value="N" >
															<span class="form-check-sign">NO</span>
														</label>
														<script>if("'.$row['CARP_REG'].'" === "S"){document.getElementById("CARP_REG_S").checked = true} else {document.getElementById("CARP_REG_N").checked = true}</script>
													</div>
												</div>
												<div class="form-group">
													<label>MOTIVO DE LA CARPETA RELACIONADA </label>
													<input type="text" maxlength="150" name="MOT_CARP_INV" tabindex="2" class="form-control" placeholder="Motivo" value = "'.$row['MOT_CARP_INV'].'">
												</div>
												<div class="form-group">
													<label>	OBSERVACIONES </label>
													<textarea maxlength="20000" name="OBSERVACION_INV" tabindex="3" class="form-control"></textarea>
												</div>
											</div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="B13">
		                                <div class="row">
	                                        <h5 class="info-text"> DOCUMENTOS ANEXOS </h5>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>POLIZA: </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="POLIZA_DOC" id="POLIZA_DOC_S" value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="POLIZA_DOC" id="POLIZA_DOC_N" value="N" >
															<span class="form-check-sign">NO</span>
														</label>
														<script>if("'.$row['POLIZA_DOC'].'" === "S"){document.getElementById("POLIZA_DOC_S").checked = true} else {document.getElementById("POLIZA_DOC_N").checked = true}</script>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>FACTURAS: </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="FACTURA_DOC" id="FACTURA_DOC_S" value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="FACTURA_DOC" id="FACTURA_DOC_N" value="N" >
															<span class="form-check-sign">NO</span>
														</label>
														<script>if("'.$row['FACTURA_DOC'].'" === "S"){document.getElementById("FACTURA_DOC_S").checked = true} else {document.getElementById("FACTURA_DOC_N").checked = true}</script>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>ACTAS: </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="ACTA_MP_DOC" id="ACTA_MP_DOC_S" value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="ACTA_MP_DOC" id="ACTA_MP_DOC_N" value="N" >
															<span class="form-check-sign">NO</span>
														</label>
														<script>if("'.$row['ACTA_MP_DOC'].'" === "S"){document.getElementById("ACTA_MP_DOC_S").checked = true} else {document.getElementById("ACTA_MP_DOC_N").checked = true}</script>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>TENENCIAS: </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="TENENCIAS" id="TENENCIAS_S" value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="TENENCIAS" id="TENENCIAS_N" value="N" >
															<span class="form-check-sign">NO</span>
														</label>
														<script>if("'.$row['TENENCIAS'].'" === "S"){document.getElementById("TENENCIAS_S").checked = true} else {document.getElementById("TENENCIAS_N").checked = true}</script>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>FOTOGRAFIAS: </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="FOTOGRAFIAS_DOC" id="FOTOGRAFIAS_DOC_S" value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="FOTOGRAFIAS_DOC" id="FOTOGRAFIAS_DOC_N" value="N" >
															<span class="form-check-sign">NO</span>
														</label>
														<script>if("'.$row['FOTOGRAFIAS_DOC'].'" === "S"){document.getElementById("FOTOGRAFIAS_DOC_S").checked = true} else {document.getElementById("FOTOGRAFIAS_DOC_N").checked = true}</script>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>OTROS: </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="CUEST_ROBO_OTROS_DOC" id="CUEST_ROBO_OTROS_DOC_S" value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="CUEST_ROBO_OTROS_DOC" id="CUEST_ROBO_OTROS_DOC_N" value="N" >
															<span class="form-check-sign">NO</span>
														</label>
														<script>if("'.$row['CUEST_ROBO_OTROS_DOC'].'" === "S"){document.getElementById("CUEST_ROBO_OTROS_DOC_S").checked = true} else {document.getElementById("CUEST_ROBO_OTROS_DOC_N").checked = true}</script>
													</div>
												</div>
											</div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="B14">
		                                <div class="row">
	                                        <h5 class="info-text"> CONCLUSIONES </h5>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>RESULTADO DEL SINIESTRO: </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="CONCLUCION_CASO" id="CONCLUCION_CASO_C" value="C" >
															<span class="form-check-sign">CONVENIO </span>
															<input class="form-check-input" type="radio" name="CONCLUCION_CASO" id="CONCLUCION_CASO_P" value="P" >
															<span class="form-check-sign">PROCEDENTE </span>
															<input class="form-check-input" type="radio" name="CONCLUCION_CASO" id="CONCLUCION_CASO_R" value="R" >
															<span class="form-check-sign">RECHAZO </span>
														</label>
														<script>if("'.$row['CONCLUCION_CASO'].'" === "C"){document.getElementById("CONCLUCION_CASO_C").checked = true} else if("'.$row['CONCLUCION_CASO'].'" === "P"){document.getElementById("CONCLUCION_CASO_P").checked = true} else {document.getElementById("CONCLUCION_CASO_R").checked = true}</script>
													</div>
												</div>
												<div class="form-group">
													<label>	OBSERVACIONES </label>
													<textarea maxlength="20000" name="OBS_CONCLUSION" tabindex="3" class="form-control">"'.$row['OBS_CONCLUSION'].'"</textarea>
												</div>
												<div class="col-sm-6">
													<input type="submit" name="mod" class="btn btn-sm btn-primary" value="Guardar datos">
													<a href="mc_list.php" class="btn btn-sm btn-danger">Cancelar</a>
												</div>
											</div>
		                                </div>
		                            </div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div><!-- end row -->
		</div> <!--  big container --> ';
?>
<!-- Jesus Acosta -->
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
	<script type="text/javascript">
		//datepicker
		$('.datepicker').datepicker({
			format: 'yyyy-mm-dd',
			weekStart: 1,
			daysOfWeekHighlighted: "6,0",
			autoclose: true,
			todayHighlight: true,
		});
		$('.datepicker').datepicker("setDate", new Date());
		
		//cambia menu de coches
		$(document).ready(function(){
			$("#MARCA").on('change', function () {
				$("#MARCA option:selected").each(function () {
					elegido=$(this).val();
					$.post("modelos.php", { elegido: elegido }, function(data){
						$("#TIPO").html(data);
					});			
				});
		});
		});
    </script>
</html>