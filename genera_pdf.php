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
		try {
			
			mysqli_query($con, "CALL p_crea_pdf(".$_GET['id'].", @p_salida)");
			
			$resultado = mysqli_query( $con, "SELECT @p_salida as p_out");

			$row = mysqli_fetch_assoc($resultado);

			$content = $row['p_out'];
			$html2pdf = new Html2Pdf('P', 'A4', 'es', true, 'UTF-8', array(15, 5, 15, 5));
			$html2pdf->pdf->SetDisplayMode('fullpage');
			$html2pdf->writeHTML($content);
			$html2pdf->output('example02.pdf');

			header("HTTP/1.1 200 OK");
	  		exit();
		} catch (Html2PdfException $e) {
			//Para debug Activar
			$html2pdf->clean();
			$formatter = new ExceptionFormatter($e);
			echo $formatter->getHtmlMessage();
			header("HTTP/1.1 500". "fallo");
      		exit();

		} 

	  
    }
    else {
		
  }
}else{
	header("HTTP/1.1 400 Bad Request");
	exit;
}

?>