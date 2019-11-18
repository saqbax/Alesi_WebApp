<?php

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/php/conexion.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
    if (isset($_GET['id']))
    {
		//p_log('entre en get');
		//p_log($_GET['id']);

		try {
			
			 $ses_sql=mysqli_query($con, "select PDF_CODIGO from alesi_pdf_plantillas");
			 $row = mysqli_fetch_assoc($ses_sql);
			 $v_PDF_CODIGO =$row['PDF_CODIGO'];
			
			
			// p_log($v_PDF_CODIGO);


			//Recogemos el contenido de la vista
			
			$html=$v_PDF_CODIGO;

			//Pasamos esa vista a PDF
				
			//Le indicamos el tipo de hoja y la codificación de caracteres
			$mipdf=new HTML2PDF('P','A4','es','true','UTF-8');

			//Escribimos el contenido en el PDF
			$mipdf->writeHTML($html);

			//Generamos el PDF
			$mipdf->Output('PdfGeneradoPHP.pdf');

			
		} catch (Html2PdfException $e) {
			$html2pdf->clean();
			$formatter = new ExceptionFormatter($e);
			echo $formatter->getHtmlMessage();
		}





    //   $sql = $dbConn->prepare("SELECT * FROM posts where id=:id");
    //   $sql->bindValue(':id', $_GET['id']);
    //   $sql->execute();
	  header("HTTP/1.1 200 OK");
	  exit();
    //   echo json_encode(  $sql->fetch(PDO::FETCH_ASSOC)  );
    //   exit();
    }
    else {
		p_log('entre en else de  get');
		header("HTTP/1.1 400 Bad Request");
      exit();
  }
}else{
	header("HTTP/1.1 400 Bad Request");
	exit;
}

//En caso de que ninguna de las opciones anteriores se haya ejecutado



// try {
//     ob_start();
//     //include dirname(__FILE__).'/res/example02.php';
//     include dirname(__FILE__).'/plantillas/plantilla_sura_autos.php';
//     $content = ob_get_clean();
//     $html2pdf = new Html2Pdf('P', 'A4', 'fr', true, 'UTF-8', array(15, 5, 15, 5));
//     $html2pdf->pdf->SetDisplayMode('fullpage');
//     $html2pdf->writeHTML($content);
//     $html2pdf->output('example02.pdf');
// } catch (Html2PdfException $e) {
//     $html2pdf->clean();
//     $formatter = new ExceptionFormatter($e);
//     echo $formatter->getHtmlMessage();
// }
?>