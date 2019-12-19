<style type="text/css">
<!--
div.zone
{
    border: solid 2mm #66AACC;
    border-radius: 3mm;
    padding: 1mm;
    background-color: #FFEEEE;
    color: #440000;
}
div.zone_over
{
    width: 30mm;
    height: 35mm;
    overflow: hidden;
}


table.page_header {width: 100%; border: none; background-color: #00AEEA; border-bottom: solid 1mm #0B6E9C; padding: 2mm }
table.page_footer {width: 100%; border: none;   padding: 2mm}
h1 {color: #000033}
h2 {color: #000055}
h3 {color: #000077}

div.standard
{
    padding-left: 5mm;
}

table.siniestro {
   width: 100%;
   border: 1px solid #000;
}


-->
</style>
<page style="font-size: 10pt">

    <page_footer>
        <table class="page_footer">
            <tr>
                <td style="width: 100%; text-align: right; ">
                    pagina [[page_cu]]/[[page_nb]]
                </td>
            </tr>
        </table>
    </page_footer>
    
    <table class="page_header">
            <tr>
                <td style="width: 100%; text-align: left; font-size: 18pt;font-weight: bold; color:#FFFFFF">
                    ALESI
                </td>
            </tr>
        </table>
    <br>
    <p style="text-align: right; font-weight: bold">Ciudad de México a ?v_FECHA_PDF?</p>
    <p style="text-align: right; font-weight: bold">Ref. Int ?v_REF_INT?</p><br>
    <br>
    <b>Cardif México Seguros Generales S.A. de C.V </b><br>
    <b>?DIRIGIDO_A?</b><br>
    <b>?CARGO?</b><br>
    <b>Presente.</b><br>
    <p style="text-align: right; font-weight: bold">Asunto: Informe de Investigación de Siniestro</p><br>
    <p style="text-align: justify"> 
        &nbsp;&nbsp;&nbsp;&nbsp; Estimado ?DIRIGIDO_A?: En relación al siniestro citado anteriormente, 
        mismo que nos encomendó hacer un análisis, e investigación del hecho ocurrido, y de acuerdo a las diferentes técnicas y métodos de investigación 
        empleados le proporciono el siguiente informe detallado
    </p>
    <!--DATOS DEL SINIESTRO. -########################################### -->
    <p style="text-align: center; font-weight: bold">DATOS DEL SINIESTRO</p><br>
    <table >
        <tbody >
            <tr>
                <th>No. de Siniestro</th>
                <th></th>
                <th>Fecha del Siniestro</th>
                <th></th>
                <th>Fecha del Reporte</th>
                
            </tr>
            <tr >
                <td>?N_DE_SINIESTRO?</td>
                <th></th>
                <td>?F_DE_SINIESTRO?</td>
                <th></th>
                <td>?F_DE_REPORTE?</td>            
            </tr>
        </tbody>
            <tr style="vertical-align: top">
                <td>Coberturas</td>
            </tr>       
            <tr style="vertical-align: top">
                <td>?COBERTURA?</td>
            </tr>
            <tr style="vertical-align: top">
                <td>Nombre del Asegurado: </td>
                <th>?NOM_ASEGURADO?.</th>
            </tr>
            <tr style="vertical-align: top">
                <td>Nombre del Reclamante: </td>
                <th>?NOM_RECLAMANTE?</th>
            </tr>           
    </table>
	<p>Tipo de siniestro Robo: </p>
	<table>
	 <tr style="vertical-align: top">
			<td style ="width=25%;">?CON_VIOLENCIA?</td>
			<td style ="width=25%;">?USO_TDC?</td>
			<td style ="width=25%;">?EFECTIVO?</td>
			<td style ="width=25%;">?COMPRA_PROTEGIDA?</td>
     </tr>
	</table>
    <br>
    <!--ASIGNACIÓN DE LA INVESTIGACIÓN. -########################################### -->    
    <p style="text-align: center; font-weight: bold">ASIGNACIÓN DE LA INVESTIGACIÓN</p><br>    
    <table  style="text-align: left;  width: 100%; " align="center">
        <tr>            
            <td style ="width=165;">Investigación solicitada por:</td>            
            <td style ="width=140;">Gustavo Pineda</td>
            <td style ="width=140;"> </td>
            <td style ="width=140;"> </td>
        </tr>
        <tr>            
            <td style ="width=165;">Fecha de Asignación</td>            
            <td style ="width=140;">10-Enero-2019</td>
            <td style ="width=140;">Fecha de Entrega: </td>
            <td style ="width=140;">19-Marzo-2019 </td>
        </tr>
    </table>
    <br>
	<br>
    <p style="text-align: center; font-weight: bold">MOTIVO  DE LA INVESTIGACIÓN.</p><br>    
    <table  style="text-align: left;  width: 100%; " align="center">
        <tr>            
            <td style ="width=50%;">?SINI_TREINTA_DIAS?</td>
			<td style ="width=50%;">?FALSEDAD_DECALRACION?</td>
        </tr>
        <tr>            
            <td style ="width=50%;">?SUMA_ASEGURADA?</td>
			<td style ="width=50%;">?DOC_APOCRIFOS?</td>
        </tr>		
        <tr>            
            <td style ="width=50%;">?REECONSTRUCCION_HECHOS?</td>
			<td style ="width=50%;">?OTROS?</td>
        </tr>		
    </table>
    <br>
	<br>
    <p style="text-align: center; font-weight: bold">RESULTADO DE LA INVESTIGACIÓN.</p><br>    
    <table  style="text-align: left;  width: 100%; " align="center">
        <tr>            
            <td style ="width=50%">El siniestro es:</td>            
            <td style ="width=50%">?RESULT_INVEST?</td>
        </tr>
    </table>
    <br>
    <p style="text-align: center; font-weight: bold">DECLARACION DEL ASEGURADO VERTIDA A LA ASEGURADORA.</p>
    <p style="text-align: justify;">
	?DECLA_INI?
    </p>
    <br>
    <br>
    <p style="text-align: center; font-weight: bold">ENTREVISTA CON EL ASEGURADO.</p>
    <table style="text-align: justify;  width: 100%; " align="center">
        <tr><td style ="width=100%;"><p>
        ?DESA_ENTREVISTA?
        </p></td></tr>
    </table>       
    <br>
    <br>
    <p style="text-align: center; font-weight: bold">RECONSTRUCCIÓN E INSPECCION EN LUGAR DE LOS HECHOS.</p>
    <table style="text-align: center;  width: 100%; " align="center">
        <tr>
            <th style ="width=20%;"> Lugar visitado </th>
            <th style ="width=80%;"> Ubicacion </th>
        </tr>
        <tr>
            <td>?LUGAR_VISITADO?</td>
            <td>?UBICACION?</td>
        </tr>
    </table>
    <table style="text-align: justify;  width: 100%; " align="center">
        <tr><td style ="width=100%;"><p>
        ?OBSERVACIONES?
        </p></td></tr>
    </table>     
    <br>
    <br>
<!--############################### CARPETA DE INVESTIGACIÓN -########################################### -->
<!--############################### CARPETA DE INVESTIGACIÓN -########################################### -->
    <p style="text-align: center; font-weight: bold">CARPETA DE INVESTIGACIÓN.</p>
    <p style="text-align: left; ">Denuncia ante el Ministerio Público. ?DENUNCIA_MP?</p>
    <br>    
    <table style="text-align: center;  width: 100%; " align="center">
        <tr>
            <th style ="width=20%;">Alcaldía o Municipio.</th>
            <th style ="width=35%;">Carpeta </th>
            <th style ="width=15%;">Fecha</th>
            <th style ="width=10%;">Hora</th>
            <th style ="width=20%;">Registrada</th>
        </tr>
        <tr>
            <td style ="width=20%;">?MUNICIPIO?</td>
            <td style ="width=35%;">?CARPETA?</td>
            <td style ="width=15%;">?F_INV?</td>
            <td style ="width=10%;">?HORA_INV?</td>
            <td style ="width=20%;">?CARP_REG?</td>
        </tr>
    </table>
    <table style="text-align: center;  width: 100%;" align="center">
        <tr>
            <th style ="width=20%;">Carpeta Relacionada.</th>
            <th style ="width=35%;">Carpeta </th>
            <th style ="width=45%;">Motivo de la Carpeta relacionada.</th>
        </tr>
        <tr>
            <td style ="width=20%;">?CARP_REG?</td>
            <td style ="width=35%;"></td>
            <td style ="width=45%;">?CARP_MOTIVO?</td>            
        </tr>
    </table>    
    <!-- Atributo 68-->
    <table style="text-align: justify;  width: 100%; " align="center">
        <tr><td style ="width=100%;"><p>
        ?OBSERVACION_INV?
        </p></td></tr>
    </table>       
    <br>
<!--############################### DOCUMENTOS ANEXOS. -########################################### -->
<!--############################### DOCUMENTOS ANEXOS. -########################################### -->
    <p style="text-align: center; font-weight: bold">DOCUMENTOS ANEXOS.</p>
    <p style="text-align: left; ">Documentos que se anexan a la investigación:</p>
    <br>    
    <table style="text-align: left;  width: 100%; " align="center">
        <tr>
            <td style ="width=50%;">?POLIZA_DOC?</td>
        </tr>
        <tr>
            <td style ="width=50%;">?ACTA_MP_DOC?</td>
        </tr>
        <tr>
            <td style ="width=50%;">?FOTOGRAFIAS_DOC?</td>
        </tr>
    </table>
<!--############################### CONCLUSIONES. -########################################### -->
<!--############################### CONCLUSIONES. -########################################### -->
    <br>
    <br>
    <br>
    <br>
    <p style="text-align: center; font-weight: bold">CONCLUSIONES.</p>
    <br>    
    <table style="text-align: left;  width: 100%; border:2" align="center">
        <tr>
            <td style ="width=50%;"><b>Resultado del siniestro:</b></td>
            <td style ="width=50%;">?CONCLUCION_CASO?</td>     
        </tr>   
    </table>
    <p style="text-align: center; font-weight: bold">CONSIDERANDO.</p>
    <!-- Atributo 76-->
    <table style="text-align: justify;  width: 100%; " align="center">
        <tr><td style ="width=100%;"><p>
        ?OBS_CONCLUSION?
        </p></td></tr>
    </table>     
    <br>
    <br>
    <p>Atentamente.</p>
    <br>
    <br>
    <br>
    <p>Lic. César Quiñones G.<br>
    Director Operativo<br>
    Asesoría Legal Especializada e Investigaciones S.C<br>
    alesi.sc@prodigy.net.mx</p>
</page>