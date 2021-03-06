<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de siniestros</title>

    <!-- JQuery -->
    <script src="js/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <link href="js/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css" media="all" />

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- hojas de estilos -->
    <link href="css/neo-stiles.css" rel="stylesheet">

    <script src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- ChartJS -->
    <script src="https://cdnjs.com/libraries/Chart.js"></script>
</head>

<body>
        
    <?php include('nav.php');?>
    
    <div class="container">
        <div class="content">
            <h2>Lista de siniestros</h2>
            <hr />

            <?php
			$cat = mysqli_query($con, "SELECT * FROM ALESI_NTABLAS WHERE ID_TABLA = (SELECT ID_TABLA FROM ALESI_TABLAS WHERE COD_TABLA = 'CAT_EMPRESA') AND CAMPO_A = 'ASG'");
            //$cat1 = mysqli_query($con, "SELECT * FROM ALESI_NTABLAS WHERE ID_TABLA = (SELECT ID_TABLA FROM ALESI_TABLAS WHERE COD_TABLA = 'CAT_TIP_CASO')");
            
            if (isset($_GET['aksi'])){
                $p_operacion = $_GET['aksi'];
            }else {
                $p_operacion = 'null';
            }
            

			if( $p_operacion == 'delete'){
				$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
				$cek = mysqli_query($con, "SELECT * FROM ALESI_TCASO WHERE ID_CASO='$nik'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
				}else{
					$delete = mysqli_query($con, "UPDATE ALESI_TCASO SET STATUS = 'ELIMINADO' WHERE ID_CASO='$nik'");
					if($delete){
						echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Datos eliminado correctamente.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar los datos.</div>';
					}
				}
			}else if($p_operacion == 'cerrado'){
				$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
				$cek = mysqli_query($con, "SELECT * FROM ALESI_TCASO WHERE ID_CASO='$nik'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
				}else{
					$v_cerrado = mysqli_query($con, "UPDATE ALESI_TCASO SET STATUS = 'CERRADO' WHERE ID_CASO='$nik'");
					if($v_cerrado){
						echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Se ha cerrado el caso correctamente.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo cerrar el caso.</div>';
					}
				}
			}
			?>

            <form class="form-inline" method="get">
                <div class="table-responsive">
                    <table width="100%">
                        <tr>
                            <td align="left">
                                <select name="filter" class="form-control" onchange="form.submit()">
                                    <option value="0">Filtros de casos</option>
                                    <?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL);  ?>
									<option value="STATUS" <?php if($filter == 'STATUS'){ echo 'selected todas'; } ?>>
										Todos</option>
                                    <option value="EN_CURSO" <?php if($filter == 'EN_CURSO'){ echo 'selected'; } ?>>
										En proceso</option>
                                    <option value="CERRADO" <?php if($filter == 'CERRADO'){ echo 'selected'; } ?>>
                                        Cerrado</option>
									<option value="EN_RETRAZO" <?php if($filter == 'EN_RETRAZO'){ echo 'selected'; } ?>>
									    En retrazo</option>
									<option value="ELIMINADO" <?php if($filter == 'ELIMINADO'){ echo 'selected'; } ?>>
									    Eliminados</option>
                                </select>
                            </td>
                            <td style="text-align:right"><button type="button" class="btn btn-primary"
                                    data-toggle="modal" data-target="#exampleModal"
                                    <?php if($login_rol == "ASG"){echo "style='display:none'";}?>>Nuevo Caso</button>
                            </td>
                            <td style="text-align:right;display:none"><a class="btn btn-primary" href="mc_add.php">Nuevo
                                    Caso</a></td>
                        </tr>
                    </table>
                </div>
            </form>
            <br />
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>No</th>
                        <th>Caso</th>
                        <th>Empresa</th>
                        <th>Num de Siniestro</th>
                        <th>F. Alta</th>
                        <th>F. Cierre</th>
                        <th>Usu. Alta</th>
                        <th>Usu. Asignado</th>
                        <th>Archivos</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                    <?php
				if(($filter) and ($filter != 'status') ){
					if($login_rol == "ASG"){
						$sql = mysqli_query($con, "SELECT A.*,
                                                        SUBSTRING((SELECT NOMBRE FROM ALESI_TPERSONAS B WHERE B.ID_PERSONA= A.ID_USUARIO_ALTA),1,10) as NOM_USER_ALTA,
                                                        SUBSTRING((SELECT NOMBRE FROM ALESI_TPERSONAS B WHERE B.ID_PERSONA= A.ID_USUARIO_ASIGNADO),1,10) AS NOM_USER_ASIG,
                                                        SUBSTRING((SELECT NOMBRE FROM ALESI_TPERSONAS B WHERE B.ID_PERSONA= A.ID_USUARIO_ULTIMA_ACT),1,10) AS NOM_USER_ULT
                                                    FROM ALESI_TCASO A 
                                                    WHERE A.STATUS='$filter' 
                                                    AND A.ID_EMPRESA = '".$login_emp."' 
                                                    ORDER BY A.ID_CASO ASC");
					} else {
						$sql = mysqli_query($con, "SELECT A.*,
                                                        SUBSTRING((SELECT NOMBRE FROM ALESI_TPERSONAS B WHERE B.ID_PERSONA= A.ID_USUARIO_ALTA,1,10)) as NOM_USER_ALTA,
                                                        SUBSTRING((SELECT NOMBRE FROM ALESI_TPERSONAS B WHERE B.ID_PERSONA= A.ID_USUARIO_ASIGNADO),1,10) AS NOM_USER_ASIG,
                                                        SUBSTRING((SELECT NOMBRE FROM ALESI_TPERSONAS B WHERE B.ID_PERSONA= A.ID_USUARIO_ULTIMA_ACT),1,10) AS NOM_USER_ULT
                                                    FROM ALESI_TCASO A 
                                                    WHERE A.STATUS='$filter' 
                                                    ORDER BY A.ID_CASO ASC");
					}
				}else{
					if($login_rol == "ASG"){
						$sql = mysqli_query($con, "SELECT A.*,
                                                        SUBSTRING((SELECT NOMBRE FROM ALESI_TPERSONAS B WHERE B.ID_PERSONA= A.ID_USUARIO_ALTA),1,10) as NOM_USER_ALTA,
                                                        SUBSTRING((SELECT NOMBRE FROM ALESI_TPERSONAS B WHERE B.ID_PERSONA= A.ID_USUARIO_ASIGNADO),1,10) AS NOM_USER_ASIG,
                                                        SUBSTRING((SELECT NOMBRE FROM ALESI_TPERSONAS B WHERE B.ID_PERSONA= A.ID_USUARIO_ULTIMA_ACT),1,10) AS NOM_USER_ULT
                                                    FROM ALESI_TCASO A
                                                    WHERE A.ID_EMPRESA = '".$login_emp."' 
                                                    ORDER BY A.ID_CASO ASC");
					} else {
						$sql = mysqli_query($con, "SELECT A.*,
                                                        SUBSTRING((SELECT NOMBRE FROM ALESI_TPERSONAS B WHERE B.ID_PERSONA= A.ID_USUARIO_ALTA),1,10) as NOM_USER_ALTA,
                                                        SUBSTRING((SELECT NOMBRE FROM ALESI_TPERSONAS B WHERE B.ID_PERSONA= A.ID_USUARIO_ASIGNADO),1,10) AS NOM_USER_ASIG,
                                                        SUBSTRING((SELECT NOMBRE FROM ALESI_TPERSONAS B WHERE B.ID_PERSONA= A.ID_USUARIO_ULTIMA_ACT),1,10) AS NOM_USER_ULT
                                                    FROM ALESI_TCASO A 
                                                    ORDER BY A.ID_CASO ASC");
					}
				}
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">No hay datos.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$row['ID_CASO'].'</td>
							<td><span class="glyphicon glyphicon-user" aria-hidden="true"></span> '.$row['ID_EMPRESA'].'</a></td>
                            <td><a href="#">'.$row['NUM_SINIESTRO'].'</td>
                            <!--<td><a href="det_caso.php?nik='.$row['ID_CASO'].'&emp='.$row['ID_EMPRESA'].'">'.$row['NUM_SINIESTRO'].'</td>-->
							<td>'.$row['F_ALTA'].'</td>
                            <td>'.$row['F_CIERRE'].'</td>
                            <td>'.$row['NOM_USER_ALTA'].'</td>
                            <td>'.$row['NOM_USER_ASIG'].'</td>
                            <td>
                                <a href="/galerias/galeria.php?nik='.$row['ID_CASO'].'" title="Fotografias" class="btn  btn-primary btn-sm" onclick="redirectMod('.$row['ID_CASO'].',\''.$row['ID_EMPRESA'].'\');" ><span class="glyphicon glyphicon-camera" aria-hidden="true"></span></a>
                                <!--<a target="_blank" href="genera_pdf.php?id='.$row['ID_CASO'].'" title="Ver documentos"  class="btn btn-primary btn-sm"  ><span class="glyphicon glyphicon-book" aria-hidden="true"></span></a>-->
                                <a href="/galerias/documentos.php?nik='.$row['ID_CASO'].'" title="Ver documentos"  class="btn btn-primary btn-sm"  ><span class="glyphicon glyphicon-book" aria-hidden="true"></span></a>
                            </td>
							<td>';
							if($row['STATUS'] == 'EN_CURSO'){
								echo '<span class="label label-success">En Curso</span>';
							}
                            else if ($row['STATUS'] == 'CERRADO' ){
								echo '<span class="label label-info">Cerrado</span>';
							}
                            else if ($row['STATUS'] == 'EN_RETRAZO' ){
								echo '<span class="label label-warning">En retrazo</span>';
							}
                            else if ($row['STATUS'] == 'ELIMINADO' ){
								echo '<span class="label label-danger">Eliminado</span>';
							}
						if($login_rol == "ASG"){
							$nueva = 'style="display:none"';
							echo '</td>
									<td>

										<!--<a href="#" title="Editar datos" class="btn btn-primary btn-sm"'.$nueva.'  onclick="redirectMod('.$row['ID_CASO'].',\''.$row['ID_EMPRESA'].'\');" ><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> -->
										<a href="mc_list.php?aksi=delete&nik='.$row['ID_CASO'].'" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar los datos '.$row['ID_EMPRESA'].'?\')" class="btn btn-danger btn-sm" '.$nueva.' ><span class="glyphicon glyphicon-book" aria-hidden="true"></span></a>
									</td>
								</tr>';
						}else{
							echo '</td>
									<td>

									<!--<a href="#" title="Editar datos" class="btn btn-primary btn-sm"  onclick="redirectMod('.$row['ID_CASO'].',\''.$row['ID_EMPRESA'].'\');" ><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>-->
                                    <a href="mc_list.php?aksi=cerrado&nik='.$row['ID_CASO'].'" title="Cerrar Caso" onclick="return confirm(\'Esta seguro de cerrar el caso '.$row['ID_CASO'].'?\')" class="btn btn-warning btn-sm"  ><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></a>
									<a href="mc_list.php?aksi=delete&nik='.$row['ID_CASO'].'" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar los datos '.$row['ID_CASO'].'?\')" class="btn btn-danger btn-sm"  ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
									</td>
								 </tr>';

						}
						
						$no++;
					}
				}
				?>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Seleccion de Empresa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="text-align:justify;">
                    <form class="form-horizontal" action="mc_add.php?nik=<?php echo $CAT_TIP_CASO;?>" method="post">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th align="center">Empresa</th>
                            </tr>
                            <tr>
                                <td>
                                    <?php
                                    if(mysqli_num_rows($cat) == 0){
                                        echo 'No hay datos.';
                                    }else{
                                        echo '<select name = "EMPRESA" id = "EMPRESA" class="input-group form-control" style = "width:320px;"><option value "">--Seleccione--</option>';
                                            $nu = 1;
                                                while($ca = mysqli_fetch_assoc($cat)){
                                                    echo '<option value = "'.$ca['ID_CODIGO'].'" ';
                                                    echo '>'.$ca['DESCIPCION'].'</option>';
                                                $nu++;
                                                }
                                            echo '</select>';
                                        }
						            ?>
                                </td>
                            </tr>

                            <tr>
                                <th align="center">Llave de siniestro</th>
                            </tr>
                            <tr>
                                <th><input type="text" id="llaveSiniestro" name="nllaveSiniestro"></th>
                            </tr>
                            <tr>
                                <td><a href="#" title="Confirmar" class="btn btn-primary btn-sm"
                                        onclick="btnNuevoCaso();">Confirmar</a></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
    function btnNuevoCaso() {

        var v_empresa = document.getElementById("EMPRESA").value;
        var v_llaveSiniestro = document.getElementById("llaveSiniestro").value;
        var v_login_id_persona = <?php echo $login_id_persona ?> ;

        if (v_empresa == "" ||v_llaveSiniestro =="" ){
            alert('Los campos de Empresa y llave de siniestro no pueden ir vacios ');
        }else{
            var data = new FormData();
            data.append('p_empresa', v_empresa);
            data.append('p_num_siniestro', v_llaveSiniestro);
            data.append('p_usuario', v_login_id_persona);

            $.ajax({
                        url: "../services/abc_siniestros.php",        // Url to which the request is send
                        type: "POST",             // Type of request to be send, called as method
                        data: data, 			  // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                        contentType: false,       // The content type used when sending data to the server.
                        cache: false,             // To unable request pages to be cached
                        processData:false,        // To send DOMDocument or non processed data file it is set to false
                        success: function(data)   // A function to be called if request succeeds
                        {
                            var data2 =JSON.parse(data);

                            if (data2.success == true){
                                console.log('chido');
                                window.setTimeout(function() {
                                    $(this).remove();
                                    location.reload(true);
                                    alert('El siniestro se dio de alta con exito ');

                                },1000);

                            }else{
                                console.log('valio');
                                window.setTimeout(function() {
                                    $(this).remove();
                                    location.reload(true);
                                    alert('Hubo un error al insertar  ');

                                },1000);
                            }

                        }
                    });
        }


        /*var URLactual = window.location;
        var v_empresa = document.getElementById("EMPRESA").value;
        if (v_empresa == "SURA") {
            url = URLactual.toString().replace("mc_list.php", "alta_caso.php");
        } else {
            url = URLactual.toString().replace("mc_list.php", "mc_add.php");
        }
        
        url = url.slice(0, url.indexOf(".php"));

        location.href = url + ".php?nik=" + document.getElementById("EMPRESA").value;*/
    }

    function redirectMod(p_ncaso, p_emp) {
        var URLactual = window.location;
        if (p_emp == "SURA") {
            url = URLactual.toString().replace("mc_list.php", "mod_caso.php");
            
        } else {
            url = URLactual.toString().replace("mc_list.php", "mc_edit.php");
            // href="mc_edit.php?nik='.$row['ID_CASO'].'&emp='.$row['ID_EMPRESA'].'
        }
        url = url.slice(0, url.indexOf(".php"));

        location.href = url + ".php?nik=" + p_ncaso + "&emp=" + p_emp;
    }
    </script>
</body>

</html>