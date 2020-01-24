<?php
require __DIR__.'/php/conexion.php';
include('session.php');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<title>Alta del Caso</title>

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

	<!-- Nuevo Editor CKEditor -->
	<script src="ckeditor/ckeditor.js"></script>

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


	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-0">

		            <!--      Wizard container        -->
		            <div class="wizard-container">

		                <div class="card wizard-card" data-color="orange" id="wizardProfile">
		                    <form action="mc_rpo.php?nik=SURA" method="post" id="theform">
		                <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

		                    	<div class="wizard-header text-center">
		                        	<h3 class="wizard-title">Alta de caso de Sura</h3>
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
			                        </ul>
								</div>
		                        <div class="tab-content">
		                            <div class="tab-pane" id="B1">
		                            	<div class="row">
											<h5 class="info-text"> Por favor indica a quien va dirigido el caso</h5>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>NOMBRE <small>(required)</small></label>
													<input name="DIRIGIDO_A" type="text" class="form-control" placeholder="a quien va dirigido el documento">
												</div>
											</div>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>CARGO  <small>(required)</small></label>
													<input name="CARGO" type="text" class="form-control" placeholder="cargo que ocupa la persona">
												</div>
											</div>
										</div>
		                            </div>
		                            <div class="tab-pane" id="B2">
		                            	<div class="row">
											<h5 class="info-text"> DATOS DEL SINIESTRO.</h5>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>NÚMERO DE SINIESTRO <small>(required)</small></label>
													<input name="N_DE_SINIESTRO" type="text" class="form-control" placeholder="Folio o numero del asegurado">
												</div>
												<div class="form-group">
													<label>FECHA DEL SINIESTRO <small>(required)</small></label>
													<input name="F_DE_SINIESTRO" type="text" class="form-control datepicker">
												</div>
												<div class="form-group">
													<label>FECHA DEL REPORTE <small>(required)</small></label>
													<input name="F_DE_REPORTE" type="text" class="form-control datepicker">
												</div>
												<div class="form-group">
													<label>COBERTURA <small>(required)</small></label>
													<select name = "COBERTURA"  class="input-group form-control" >
														<option value ="N/A">--Seleccione--</option>
														<option value = "A">AMPLIA</option>
														<option value = "B">BASICA</option>
														<option value = "L">LIMIATADA</option>
														<option value = "T">TOTAL</option>
													</select>
												</div>
												<div class="form-group">
													<label>NOMBRE DEL ASEGURADO <small>(required)</small></label>
													<input name="NOM_ASEGURADO" type="text" class="form-control" placeholder="nombre del asegurado">
												</div>
												<div class="form-group">
													<label>NOMBRE DEL RECLAMANTE <small>(required)</small></label>
													<input name="NOM_RECLAMANTE" type="text" class="form-control" placeholder="nombre del reclamante">
												</div>
												<h6 class="info-text"> ROBO</h6>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>ROBO CON VIOLENCIA:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="CON_VIOLENCIA"  value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="CON_VIOLENCIA"  value="N" >
															<span class="form-check-sign">NO</span>
														</label>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>EFECTIVO:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="EFECTIVO" value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="EFECTIVO" value="N" >
															<span class="form-check-sign">NO</span>
														</label>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>USO DE TARJETA:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="USO_TDC" value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="USO_TDC" value="N" >
															<span class="form-check-sign">NO</span>
														</label>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>COMPRA PROTEGIDA:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="COMPRA_PROTEGIDA"  value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="COMPRA_PROTEGIDA"  value="N" >
															<span class="form-check-sign">NO</span>
														</label>
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
													<div class="form-check-radio form-check-inline">
														<label>SINIESTRO OCURRIDO DENTRO DE LOS 30 DIAS DE INICIO DE VIGENCIA:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="SINI_TREINTA_DIAS"  value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="SINI_TREINTA_DIAS"  value="N" >
															<span class="form-check-sign">NO</span>
														</label>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>SUMA ASEGURADA:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="SUMA_ASEGURADA"  value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="SUMA_ASEGURADA"  value="N" >
															<span class="form-check-sign">NO</span>
														</label>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>RECONSTRUCCION DE LOS HECHOS:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="REECONSTRUCCION_HECHOS"  value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="REECONSTRUCCION_HECHOS"  value="N" >
															<span class="form-check-sign">NO</span>
														</label>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>FALCEDAD DE DECLARACIONES:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="FALSEDAD_DECALRACION"  value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="FALSEDAD_DECALRACION"  value="N" >
															<span class="form-check-sign">NO</span>
														</label>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>POSIBLES DOCUMENTOS APOCRIFOS:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="DOC_APOCRIFOS"  value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="DOC_APOCRIFOS"  value="N" >
															<span class="form-check-sign">NO</span>
														</label>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>OTROS:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="OTROS"  value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="OTROS"  value="N" >
															<span class="form-check-sign">NO</span>
														</label>
													</div>
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
															<input class="form-check-input" type="radio" name="SINI_TREINTA_DIAS"  value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="SINI_TREINTA_DIAS"  value="N" >
															<span class="form-check-sign">NO</span>
														</label>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>SUMA ASEGURADA:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="SUMA_ASEGURADA"  value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="SUMA_ASEGURADA"  value="N" >
															<span class="form-check-sign">NO</span>
														</label>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>DUDOSA PREEXISTENCIA DEL VEHICULO:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="PREEXISTENCIA_AUTO"  value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="PREEXISTENCIA_AUTO"  value="N" >
															<span class="form-check-sign">NO</span>
														</label>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>RECONSTRUCCION DE LOS HECHOS:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="REECONSTRUCCION_HECHOS"  value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="REECONSTRUCCION_HECHOS"  value="N" >
															<span class="form-check-sign">NO</span>
														</label>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>CAMBIO DE CONDUCTOR:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="CAMBIO_CONDUCTOR"  value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="CAMBIO_CONDUCTOR"  value="N" >
															<span class="form-check-sign">NO</span>
														</label>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>POSIBLES DOCUMENTOS APOCRIFOS:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="DOC_APOCRIFOS"  value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="DOC_APOCRIFOS"  value="N" >
															<span class="form-check-sign">NO</span>
														</label>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>OTROS:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="OTROS"  value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="OTROS"  value="N" >
															<span class="form-check-sign">NO</span>
														</label>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>CUALES:   </label>
														<input name="OTROS_VAL" type="text" class="form-control" placeholder="otros echos">
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
															<input class="form-check-input" type="radio" name="RESULT_INVEST"  value="C" >
															<span class="form-check-sign">CONVENIO </span>
															<input class="form-check-input" type="radio" name="RESULT_INVEST"  value="P" >
															<span class="form-check-sign">PROCEDENTE </span>
															<input class="form-check-input" type="radio" name="RESULT_INVEST"  value="R" >
															<span class="form-check-sign">RECHAZO </span>
														</label>
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
														<textarea maxlength="20000" name="DECLA_INI" id="DECLA_INI" tabindex="1"></textarea>
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
														<textarea maxlength="20000" name="DESA_ENTREVISTA" id="DESA_ENTREVISTA" tabindex="1"></textarea>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<div class="form-check-radio form-check-inline">
															<label>LUGAR VISITADO:   </label>
																<label class="form-check-label">
																	<input class="form-check-input" type="radio" name="LUGAR_VISITADO"  value="S" >
																	<span class="form-check-sign">SI </span>
																	<input class="form-check-input" type="radio" name="LUGAR_VISITADO"  value="N" >
																	<span class="form-check-sign">NO</span>
																</label>
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
															<input class="form-check-input" type="radio" name="LUGAR_VISITADO"  value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="LUGAR_VISITADO"  value="N" >
															<span class="form-check-sign">NO</span>
														</label>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>UBICACION </label>
														<input type="text" maxlength="250" name="UBICACION" tabindex="2" class="form-control" placeholder="Ubicaciones">
													</div>
												</div>
												<div class="form-group">
													<label>	OBSERVACIONES </label>
													<textarea maxlength="20000" name="OBSERVACIONES" id="OBSERVACIONES" tabindex="3"></textarea>
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
													<input type="text" maxlength="45" name="TIP_DOC_PROP" tabindex="2" class="form-control" placeholder="Tipo de documento">
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
													<input type="text" maxlength="45" name="RFC_PROP" tabindex="2" class="form-control" placeholder="Razón Social">
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>DOCUMENTO LEGAL </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="DOC_LEGAL"  value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="DOC_LEGAL"  value="N" >
															<span class="form-check-sign">NO</span>
														</label>
													</div>
												</div>
												<div class="form-group">
													<label>COTEJADO CON </label>
													<input type="text" maxlength="150" name="COTEJADO_CON" tabindex="2" class="form-control" placeholder="Cotejado con">
												</div>
												<div class="form-group">
													<label>CARGO Y/O DEPARTAMENTO </label>
													<input type="text" maxlength="150" name="CARGO_DTO" tabindex="2" class="form-control" placeholder="Cargo">
												</div>
												<div class="form-group">
													<label>TELEFONO </label>
													<input type="text" maxlength="45" name="TEL_PROP" tabindex="2" class="form-control" placeholder="Telefono">
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>TIPO DE CONTACTO: </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="CONTACTO"  value="1" >
															<span class="form-check-sign"> PERSONAL </span>
															<input class="form-check-input" type="radio" name="CONTACTO"  value="2" >
															<span class="form-check-sign"> TELEFONICO </span>
															<input class="form-check-input" type="radio" name="CONTACTO"  value="3" >
															<span class="form-check-sign"> OTRO MEDIO </span>
														</label>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<div class="form-group">
															<label>FECHA </label>
															<input name="F_CONTACTO" type="text" class="form-control datepicker">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label>LUGAR DE CONTACTO (DIRECCION) </label>
													<input type="text" maxlength="150" name="LUGAR_CONTACTO" tabindex="2" class="form-control" placeholder="Lugar de contacto">
												</div>
												<div class="form-group">
													<label>	OBSERVACIONES </label>
													<textarea maxlength="20000" name="OBSERVACIONES_CONTACT" id="OBSERVACIONES_CONTACT" tabindex="3"></textarea>
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
															<input class="form-check-input" type="radio" name="DOMICILIO_NA"  value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="DOMICILIO_NA"  value="N" >
															<span class="form-check-sign">NO</span>
														</label>
													</div>
												</div>
												<div class="form-group">
													<label>DIRECCION </label>
													<input type="text" maxlength="150" name="DIRECCION_PREX" tabindex="2" class="form-control" placeholder="Dirección">
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>TESTIGOS DE LA PREEXISTENCIA DEL VEHICULO: </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="TESTIGOS_PREX"  value="S" >
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="TESTIGOS_PREX"  value="N" >
															<span class="form-check-sign">NO</span>
														</label>
													</div>
												</div>
												<div class="form-group">
													<label>NOMBRE </label>
													<input type="text" maxlength="150" name="NOMBRE_PREX" tabindex="2" class="form-control" placeholder="Nombre">
												</div>
												<div class="form-group">
													<label>DIRECCION O REFERENCIA </label>
													<input type="text" maxlength="150" name="DIR_REF_PREX" tabindex="2" class="form-control" placeholder="Dirección">
												</div>
												<div class="form-group">
													<label>	OBSERVACIONES </label>
													<textarea maxlength="20000" name="OBSERVACIONES_PREX" id="OBSERVACIONES_PREX" tabindex="3"></textarea>
												</div>
											</div>
		                                </div>
		                            </div>
		                        </div>
								<div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Siguiente' />
		                                <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd' name='finish' value='Guardar'  onclick="document.getElementById('theform').submit();"/>
		                            </div>

		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Atras' />
		                            </div>
		                            <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div><!-- end row -->
		</div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	            <!-- Made with <i class="fa fa-heart heart"></i> by <a href="https://www.creative-tim.com">Creative Tim</a>. Free download <a href="https://www.creative-tim.com/product/paper-bootstrap-wizard">here.</a> -->
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
	<script>
		CKEDITOR.replace('DECLA_INI');
		CKEDITOR.replace('DESA_ENTREVISTA');
		CKEDITOR.replace('OBSERVACIONES');
		CKEDITOR.replace('OBSERVACION_INV');
		CKEDITOR.replace('OBS_CONCLUSION');
	</script>
</html>
