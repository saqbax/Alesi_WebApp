<?php
require __DIR__.'/php/conexion.php';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<title>Material Bootstrap Wizard by Creative Tim | Free Boostrap Wizard</title>

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
			
	<div class="image-container set-full-height" style="background-image: url('assets/img/paper-1.jpeg')">
	    <!--   Creative Tim Branding   -->
	    <a href="#">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="assets/img/new_logo.png">
	            </div>
	            <div class="brand">
	                Noe Santiago
	            </div>
	        </div>
	    </a>


	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-0">

		            <!--      Wizard container        -->
		            <div class="wizard-container">

		                <div class="card wizard-card" data-color="orange" id="wizardProfile">
		                    <form action="" method="">
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
											<a href="#account" data-toggle="tab">
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
													<i class="ti-settings"></i>
												</div>
												<!-- CARPETA  INVESTIGACION -->
											</a>
										</li>
			                            <li>
											<a href="#B13" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-map"></i>
												</div>
												<!-- DOCUMENTOS ANEXOS -->
											</a>
										</li>
			                            <li>
											<a href="#B14" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-map"></i>
												</div>
												<!-- CONCLUSIONES -->
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
													<label>NO. DE POLIZA <small>(required)</small></label>
													<input name="N_DE_POLIZA" type="text" class="form-control">
												</div>												
												<div class="form-group">
													<label>INCISO <small>(required)</small></label>
													<input name="INCISO" type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>INICIO VIGENCIA <small>(required)</small></label>
													<input name="INI_VIG" type="text" class="form-control datepicker">
												</div>
												<div class="form-group">
													<label>TERMINO VIGENCIA <small>(required)</small></label>
													<input name="FIN_VIG" type="text" class="form-control datepicker">
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
													<label>NOMBRE DEL CONDUCTOR <small>(required)</small></label>
													<input name="NOM_CONDUCTOR" type="text" class="form-control" placeholder="nombre del conductor">
												</div>
												<h6 class="info-text"> ROBO</h6>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>ROBO CON VIOLENCIA:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="CON_VIOLENCIA"  value="S" checked="">
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="CON_VIOLENCIA"  value="N" checked="">
															<span class="form-check-sign">NO</span>
														</label>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>ROBO SIN VIOLENCIA:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="SIN_VIOLENCIA"  value="S" checked="">
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="SIN_VIOLENCIA"  value="N" checked="">
															<span class="form-check-sign">NO</span>
														</label>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>ROBO EN DOMICILIO:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="EN_DOMICILIO" value="S" checked="">
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="EN_DOMICILIO" value="N" checked="">
															<span class="form-check-sign">NO</span>
														</label>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>COLICION Y/O VUELCO:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="COLISION_VUELCO"  value="S" checked="">
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="COLISION_VUELCO"  value="N" checked="">
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
													<label>MARCA </label>
													<select name = "MARCA" id= "MARCA" class="input-group form-control" >
														<option value="">--Seleccione--</option>
														<?php
														$cat3 = mysqli_query($con, "SELECT * FROM ALESI_NTABLAS WHERE ID_TABLA = (SELECT ID_TABLA FROM ALESI_TABLAS WHERE COD_TABLA = 'CAT_AUTO_MARCA')");

														while($cata3 = mysqli_fetch_assoc($cat3)){
															echo '<option value = "'.$cata3['ID_CODIGO'].'">'.$cata3['DESCIPCION'].'</option>';
														}
														?>
													</select>
												</div>
												<div class="form-group">
													<label>TIPO </label>
													<select name = "TIPO" id = "TIPO" class="input-group form-control" >
														<option value="">--Seleccione--</option>
													</select>
												</div>												
												<div class="form-group">
													<label>MODELO <small>(required)</small></label>
													<input name="MODELO" type="text" class="form-control" placeholder="modelo/año del vehiculo">
												</div>
												<div class="form-group">
													<label>COLOR </label>
													<select name = "COLOR" id= "COLOR" class="input-group form-control" >
														<option value="">--Seleccione--</option>
														<?php
														$cat5 = mysqli_query($con, "SELECT * FROM ALESI_NTABLAS WHERE ID_TABLA = (SELECT ID_TABLA FROM ALESI_TABLAS WHERE COD_TABLA = 'CAT_COLOR')");

														while($cata5 = mysqli_fetch_assoc($cat5)){
															echo '<option value = "'.$cata5['ID_CODIGO'].'">'.$cata5['DESCIPCION'].'</option>';
														}
														?>
													</select>
												</div>												
												<div class="form-group">
													<label>NO. DE SERIE <small>(required)</small></label>
													<input name="N_DE_SERIE" type="text" class="form-control" placeholder="numero de serie del vehiculo">
												</div>												
												<div class="form-group">
													<label>NO. DE MOTOR <small>(required)</small></label>
													<input name="N_MOTOR" type="text" class="form-control" placeholder="numero de serie del motor">
												</div>												
												<div class="form-group">
													<label>PLACAS <small>(required)</small></label>
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
															<input class="form-check-input" type="radio" name="SINI_TREINTA_DIAS"  value="S" checked="">
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="SINI_TREINTA_DIAS"  value="N" checked="">
															<span class="form-check-sign">NO</span>
														</label>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>SUMA ASEGURADA:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="SUMA_ASEGURADA"  value="S" checked="">
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="SUMA_ASEGURADA"  value="N" checked="">
															<span class="form-check-sign">NO</span>
														</label>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>DUDOSA PREEXISTENCIA DEL VEHICULO:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="PREEXISTENCIA_AUTO"  value="S" checked="">
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="PREEXISTENCIA_AUTO"  value="N" checked="">
															<span class="form-check-sign">NO</span>
														</label>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>RECONSTRUCCION DE LOS HECHOS:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="REECONSTRUCCION_HECHOS"  value="S" checked="">
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="REECONSTRUCCION_HECHOS"  value="N" checked="">
															<span class="form-check-sign">NO</span>
														</label>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>CAMBIO DE CONDUCTOR:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="CAMBIO_CONDUCTOR"  value="S" checked="">
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="CAMBIO_CONDUCTOR"  value="N" checked="">
															<span class="form-check-sign">NO</span>
														</label>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>POSIBLES DOCUMENTOS APOCRIFOS:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="DOC_APOCRIFOS"  value="S" checked="">
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="DOC_APOCRIFOS"  value="N" checked="">
															<span class="form-check-sign">NO</span>
														</label>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check-radio form-check-inline">
														<label>OTROS:   </label>
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="OTROS"  value="S" checked="">
															<span class="form-check-sign">SI </span>
															<input class="form-check-input" type="radio" name="OTROS"  value="N" checked="">
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
														<div class="col-sm-8 col-sm-offset-2">
															<div class="col-sm-4">
																<div class="choice" data-toggle="wizard-checkbox">
																	<input type="checkbox" name="RESULT_INVEST" value="P">
																	<div class="card card-checkboxes card-hover-effect">
																		<i class="ti-thumb-up"></i>
																		<p>PROCEDENTE</p>
																	</div>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="choice" data-toggle="wizard-checkbox">
																	<input type="checkbox" name="RESULT_INVEST" value="C">
																	<div class="card card-checkboxes card-hover-effect">
																		<i class="ti-stamp"></i>
																		<p>CONVENIO</p>
																	</div>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="choice" data-toggle="wizard-checkbox">
																	<input type="checkbox" name="RESULT_INVEST" value="R">
																	<div class="card card-checkboxes card-hover-effect">
																		<i class="ti-thumb-down"></i>
																		<p>RECHAZO</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
		                            <div class="tab-pane" id="about2">
		                            	<div class="row">
											<h5 class="info-text"> Noe</h5>
											<div class="col-sm-4 col-sm-offset-1">
												<div class="picture-container">
													<div class="picture">
														<img src="assets/img/default-avatar.jpg" class="picture-src" id="wizardPicturePreview" title="" />
														<input type="file" id="wizard-picture">
													</div>
													<h6>Choose Picture</h6>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>First Name <small>(required)</small></label>
													<input name="firstname" type="text" class="form-control" placeholder="Andrew...">
												</div>
											</div>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>Email <small>(required)</small></label>
													<input name="email" type="email" class="form-control" placeholder="andrew@creative-tim.com">
												</div>
											</div>
										</div>
		                            </div>
		                            <div class="tab-pane" id="account">
		                                <h5 class="info-text"> What are you doing? (checkboxes) </h5>
		                                <div class="row">
		                                    <div class="col-sm-8 col-sm-offset-2">
		                                        <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Design">
		                                                <div class="card card-checkboxes card-hover-effect">
		                                                    <i class="ti-paint-roller"></i>
															<p>Design</p>
		                                                </div>
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Code">
		                                                <div class="card card-checkboxes card-hover-effect">
		                                                    <i class="ti-pencil-alt"></i>
															<p>Code</p>
		                                                </div>
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Develop">
		                                                <div class="card card-checkboxes card-hover-effect">
		                                                    <i class="ti-star"></i>
															<p>Develop</p>
		                                                </div>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="address">
		                                <div class="row">
		                                    <div class="col-sm-12">
		                                        <h5 class="info-text"> Are you living in a nice area? </h5>
		                                    </div>
		                                    <div class="col-sm-7 col-sm-offset-1">
		                                    	<div class="form-group">
		                                            <label>Street Name</label>
		                                            <input type="text" class="form-control" placeholder="5h Avenue">
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-3">
		                                        <div class="form-group">
		                                            <label>Street Number</label>
		                                            <input type="text" class="form-control" placeholder="242">
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-5 col-sm-offset-1">
		                                        <div class="form-group">
		                                            <label>City</label>
		                                            <input type="text" class="form-control" placeholder="New York...">
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-5">
		                                        <div class="form-group">
		                                            <label>Country</label><br>
		                                            <select name="country" class="form-control">
		                                                <option value="Afghanistan"> Afghanistan </option>
		                                                <option value="Albania"> Albania </option>
		                                                <option value="Algeria"> Algeria </option>
		                                                <option value="American Samoa"> American Samoa </option>
		                                                <option value="Andorra"> Andorra </option>
		                                                <option value="Angola"> Angola </option>
		                                                <option value="Anguilla"> Anguilla </option>
		                                                <option value="Antarctica"> Antarctica </option>
		                                                <option value="...">...</option>
		                                            </select>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Next' />
		                                <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd' name='finish' value='Finish' />
		                            </div>

		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
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

</html>
