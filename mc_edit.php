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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
</head>
<body>
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
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
					<th align = "center">Campo</th>
					<th align = "center">Valor</th>
				</tr>
				<?php
//					$sql = mysqli_query($con, "SELECT * FROM ALESI_TATRICASO");
					$sql = mysqli_query($con, "SELECT b.TIPO_DATO,b.BLOQUE,b.CATALOGO,b.ORDEN,b.ID_CAMPO,b.ETIQUETA,a.VALOR FROM ALESI_TVALCASO a JOIN ALESI_TATRICASO b on a.NUM_ATRIBUTO = b.NUM_ATRIBUTO WHERE a.ID_CASO = '$nik'");
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
				//Iteracion principal
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">No hay datos.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$row['ETIQUETA'].'</td>
							<td>';
							if($row['TIPO_DATO'] == 'A'){
								if($row['CATALOGO'] == 'CAT_COBERT'){
									echo '<select id = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" class="input-group form-control" style = "width:320px;"><option value "">--Seleccione--</option>';
										$ca1 = 1;
										while($cata1 = mysqli_fetch_assoc($cat1)){
												echo '<option value = '.$cata1['ID_CODIGO'].'">'.$cata1['DESCIPCION'].'</option>';
											$ca1++;
										}
									echo '</select>';
								} 
								else if($row['CATALOGO'] == 'CAT_AUTO_MARCA'){
									echo '<select id = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" class="input-group form-control" style = "width:320px;"><option value "">--Seleccione--</option>';
										$ca3 = 1;
										while($cata3 = mysqli_fetch_assoc($cat3)){
												echo '<option value = '.$cata3['ID_CODIGO'].'">'.$cata3['DESCIPCION'].'</option>';
											$ca3++;
										}
									echo '</select>';
								}
								else if($row['CATALOGO'] == 'CAT_AUTO_TIPO'){
									echo '<select id = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" class="input-group form-control" style = "width:320px;"><option value "">--Seleccione--</option>';
										$ca4 = 1;
										while($cata4 = mysqli_fetch_assoc($cat4)){
												echo '<option value = '.$cata4['ID_CODIGO'].'">'.$cata4['DESCIPCION'].'</option>';
											$ca4++;
										}
									echo '</select>';
								}
								else if($row['CATALOGO'] == 'CAT_COLOR'){
									echo '<select id = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" class="input-group form-control" style = "width:320px;"><option value "">--Seleccione--</option>';
										$ca5 = 1;
										while($cata5 = mysqli_fetch_assoc($cat5)){
												echo '<option value = '.$cata5['ID_CODIGO'].'">'.$cata5['DESCIPCION'].'</option>';
											$ca5++;
										}
									echo '</select>';
								}
								else if($row['CATALOGO'] == 'CAT_MUNICIPIO'){
									echo '<select id = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" class="input-group form-control" style = "width:320px;"><option value "">--Seleccione--</option>';
										$ca8 = 1;
										while($cata8 = mysqli_fetch_assoc($cat8)){
												echo '<option value = '.$cata8['ID_CODIGO'].'">'.$cata8['DESCIPCION'].'</option>';
											$ca8++;
										}
									echo '</select>';
								}
								else {
									echo '<input type = "text" maxlength = "' .$row['LONGITUD_MAX']. '" id = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" class="input-group form-control" style = "width:320px;" />';
								}
							}
                            else if ($row['TIPO_DATO'] == 'N' ){
								echo '<input type = "number" minlength = "' .$row['LONGITUD_MIN']. '" maxlength = "' .$row['LONGITUD_MAX']. '" id = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" class="input-group form-control" style = "width:320px;" />';
							}
                            else if ($row['TIPO_DATO'] == 'D' ){
								echo '<div class="form-group"><div class="input-group date"><input type = "text" id = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" class="date form-control" style = "width:320px;" /></div></div>';
							}
                            else if ($row['TIPO_DATO'] == 'T' ){
								echo '<textarea maxlength = "' .$row['LONGITUD_MAX']. '" id = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" style = "width:320px;"></textarea>';
							}
                            else if ($row['TIPO_DATO'] == 'E' ){
								echo '<label id = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" >' .$row['VALOR']. '</label>';
							}
                            else if ($row['TIPO_DATO'] == 'R' ){
								if($row['CATALOGO'] == 'CAT_SI_NO'){
									echo '<input type = "radio" name = "' .$row['ID_CAMPO']. '" id = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" value"S"> Si </input> <input type = "radio" name = "' .$row['ID_CAMPO']. '" id = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" value"N"> No </input>';
								}
								else if($row['CATALOGO'] == 'CAT_REST_INV'){
										$ca6 = 1;
										while($cata6 = mysqli_fetch_assoc($cat6)){
												echo '<input type = "radio" name = "' .$row['ID_CAMPO']. '" id = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" value"' .$cata6['ID_CODIGO']. '"> ' .$cata6['DESCIPCION']. ' </input>';
											$ca6++;
										}
								}
								else if($row['CATALOGO'] == 'CAT_TIP_CONTACT'){
										$ca7 = 1;
										while($cata7 = mysqli_fetch_assoc($cat7)){
												echo '<input type = "radio" name = "' .$row['ID_CAMPO']. '" id = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" value"' .$cata7['ID_CODIGO']. '"> ' .$cata7['DESCIPCION']. ' </input>';
											$ca7++;
										}
								}
								else if($row['CATALOGO'] == 'CAT_CONCLUSION'){
										$ca9 = 1;
										while($cata9 = mysqli_fetch_assoc($cat9)){
												echo '<input type = "radio" name = "' .$row['ID_CAMPO']. '" id = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" value"' .$cata9['ID_CODIGO']. '"> ' .$cata9['DESCIPCION']. ' </input>';
											$ca9++;
										}
								}
							}
                            else if ($row['TIPO_DATO'] == 'C' ){
								echo '<input type = "checkbox" id = "' .$row['ID_CAMPO']. '" tabindex="' .$row['ORDEN']. '" />';
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
  	<script type="text/javascript">
	$(function () {
        $('.date').datetimepicker();
        $('#datetimepicker7').datetimepicker({
            useCurrent: false 
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
    });
	</script>
</body>
</html>