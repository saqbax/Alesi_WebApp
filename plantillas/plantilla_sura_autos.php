<?php
$content = 'A Test overflow<br>A Test overflow<br>A Test overflow<br>
<img src="./res/logo.gif" alt="logo" style="width: XXXmm"><br>
B Test overflow<br>B Test overflow<br>B Test overflow<br>
<img src="./res/logo.gif" alt="logo" style="width: XXXmm"><br>
C Test overflow<br>C Test overflow<br>C Test overflow<br>';
?>
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
table.page_footer {width: 100%; border: none;  border-top: solid 1mm #0B6E9C; padding: 2mm}
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
    <p style="text-align: right; font-weight: bold">Ciudad de México a 19 de Marzo de 2018</p>
    <p style="text-align: right; font-weight: bold">Ref. Int 0000001</p><br>
    <br>
    <b>Seguros Sura S.A. de C.V </b><br>
    <b>Gustavo Pineda González.</b><br>
    <b>Analista de Valuación y Dictamen.</b><br>
    <b>Presente.</b><br>
    <p style="text-align: right; font-weight: bold">Asunto: Informe de Investigación de Siniestro</p><br>
    <p style="text-align: justify"> 
        &nbsp;&nbsp;&nbsp;&nbsp; Estimado Gustavo: En relación al siniestro citado anteriormente, 
        mismo que nos encomendó hacer un análisis, e investigación del hecho ocurrido, y de acuerdo a las diferentes técnicas y métodos de investigación 
        empleados le proporciono el siguiente informe detallado
    </p>
    <p style="text-align: center; font-weight: bold">DATOS DEL SINIESTRO</p><br>
    <table class="siniestro">
        <tbody style="color: rgba(128, 255, 0, 0.3); border: 1px solid rgba(100, 200, 0, 0.3);">
            <tr>
                <th>No. de Siniestro</th>
                <th>Fecha del Siniestro</th>
                <th>Fecha del Reporte</th>
                <th colspan="3"></th>
            </tr>
            <tr ">
                <td>1-211-2019-M-123</td>
                <td>05 Enero- 2019</td>
                <td>06 Enero-2019</td>            
            </tr>
        </tbody>
        <tr style="vertical-align: top">
            <td>No. de Póliza</td>
            <td>Inciso</td>
            <td>Inicio Vigencia</td>
            <td>Término Vigencia</td>
            <td>Coberturas</td>
        </tr>       
        <tr style="vertical-align: top">
            <td>1902977</td>
            <td></td>
            <td>03 Enero 2019</td>
            <td>03 Enero 2020</td>
            <td>Amplia</td>
        </tr>
        <tr style="vertical-align: top">
            <td>Nombre del Asegurado: </td>
            <td>Lucia Duran González.</td>
        </tr>
        <tr style="vertical-align: top">
            <td>Nombre del Conductor: </td>
            <td>Estacionado</td>
        </tr>
        <tr style="vertical-align: top">
            <td>Tipo de siniestro Robo: </td>
            <td> con violencia</td>
            <td> sin violencia</td>
            <td> Estacionado</td>
            <td> Colisión y/o vuelco</td>
        </tr>
    </table>
    <br>
    Texte <span style="text-decoration: underline">souligné</span>,
    texte <span style="text-decoration: overline">surligné</span>,
    texte <span style="text-decoration: line-through">barré</span>,
    texte <span style="text-decoration: underline overline line-through">avec les trois</span>.<br>
    <br>
    <b>Dans un texte :</b><br>
    texte à la suite d'une image, <img src="./res/logo.gif" alt="" style="height: 10mm">
    texte à la suite d'une image, répétitif car besoin d'un retour à la ligne
    texte à la suite d'une image, répétitif car besoin d'un retour à la ligne
    texte à la suite d'une image, répétitif car besoin d'un retour à la ligne
    texte à la suite d'une image, répétitif car besoin d'un retour à la ligne<br>
    <br>
    <br>
    Test différentes tailles texte
    <span style="font-size: 18pt;">Test Size</span>
    <span style="font-size: 16pt;">Test Size</span>
    <span style="font-size: 14pt;">Test Size</span>
    <span style="font-size: 12pt;">Test Size</span>
    Test différentes tailles texte, répétitif car besoin d'un retour à la ligne
    Test différentes tailles texte, répétitif car besoin d'un retour à la ligne
    Test différentes tailles texte, répétitif car besoin d'un retour à la ligne
    Test différentes tailles texte, répétitif car besoin d'un retour à la ligne
    <br>
    <br>
    <b>Exemple de couleur : </b><br>
    <span style="color: RGB(255, 0, 0)">Texte de couleur</span><br>
    <span style="color: RGB(0, 1.0, 0)">Texte de couleur</span><br>
    <span style="color: RGB(0, 0, 100%)">Texte de couleur</span><br>
    <span style="color: CMYK(255, 0, 0, 0)">Texte de couleur</span><br>
    <span style="color: CMYK(0, 1.0, 0, 0)">Texte de couleur</span><br>
    <span style="color: CMYK(0, 0, 100%, 0)">Texte de couleur</span><br>
    <span style="color: CMYK(0, 0, 0, 255)">Texte de couleur</span><br>
    <br>
    <table>
        <tr style="vertical-align: top">
            <td>
                <u>Exemple 0 :</u><br><br>
                <div class="zone" ><?php echo str_replace('XXX', '40', $content); ?></div>
                sans overflow
            </td>
            <td>
                <u>Exemple 1 :</u><br><br>
                <div class="zone zone_over" style="text-align: left; vertical-align: top; "><?php echo str_replace('XXX', '40', $content); ?></div>
                hidden left top
            </td>
            <td>
                <u>Exemple 2 :</u><br><br>
                <div class="zone zone_over" style="text-align: center; vertical-align: middle;"><?php echo str_replace('XXX', '40', $content); ?></div>
                hidden center middle
            </td>
            <td>
                <u>Exemple 3 :</u><br><br>
                <div class="zone zone_over" style="text-align: right; vertical-align: bottom;"><?php echo str_replace('XXX', '40', $content); ?></div>
                hidden right bottom
            </td>
        </tr>
        <tr style="vertical-align: top">
            <td>
                <u>Exemple 0 :</u><br><br>
                <div class="zone" ><?php echo str_replace('XXX', '20', $content); ?></div>
                sans overflow
            </td>
            <td>
                <u>Exemple 1 :</u><br><br>
                <div class="zone zone_over" style="text-align: left; vertical-align: top; "><?php echo str_replace('XXX', '20', $content); ?></div>
                hidden left top
            </td>
            <td>
                <u>Exemple 2 :</u><br><br>
                <div class="zone zone_over" style="text-align: center; vertical-align: middle;"><?php echo str_replace('XXX', '20', $content); ?></div>
                hidden center middle
            </td>
            <td>
                <u>Exemple 3 :</u><br><br>
                <div class="zone zone_over" style="text-align: right; vertical-align: bottom;"><?php echo str_replace('XXX', '20', $content); ?></div>
                hidden right bottom
            </td>
        </tr>
    </table>
    <table>
        <tr style="vertical-align: top">
            <td>
                <u>Exemple 0 :</u><br><br>
                <div class="zone" ><?php echo str_replace('XXX', '40', $content); ?></div>
                sans overflow
            </td>
            <td>
                <u>Exemple 1 :</u><br><br>
                <div class="zone zone_over" style="text-align: left; vertical-align: top; "><?php echo str_replace('XXX', '40', $content); ?></div>
                hidden left top
            </td>
            <td>
                <u>Exemple 2 :</u><br><br>
                <div class="zone zone_over" style="text-align: center; vertical-align: middle;"><?php echo str_replace('XXX', '40', $content); ?></div>
                hidden center middle
            </td>
            <td>
                <u>Exemple 3 :</u><br><br>
                <div class="zone zone_over" style="text-align: right; vertical-align: bottom;"><?php echo str_replace('XXX', '40', $content); ?></div>
                hidden right bottom
            </td>
        </tr>
        <tr style="vertical-align: top">
            <td>
                <u>Exemple 0 :</u><br><br>
                <div class="zone" ><?php echo str_replace('XXX', '20', $content); ?></div>
                sans overflow
            </td>
            <td>
                <u>Exemple 1 :</u><br><br>
                <div class="zone zone_over" style="text-align: left; vertical-align: top; "><?php echo str_replace('XXX', '20', $content); ?></div>
                hidden left top
            </td>
            <td>
                <u>Exemple 2 :</u><br><br>
                <div class="zone zone_over" style="text-align: center; vertical-align: middle;"><?php echo str_replace('XXX', '20', $content); ?></div>
                hidden center middle
            </td>
            <td>
                <u>Exemple 3 :</u><br><br>
                <div class="zone zone_over" style="text-align: right; vertical-align: bottom;"><?php echo str_replace('XXX', '20', $content); ?></div>
                hidden right bottom
            </td>
        </tr>
    </table>    
</page>