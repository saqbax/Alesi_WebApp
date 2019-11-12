<?php
	require __DIR__.'/vendor/autoload.php';

	use Spipu\Html2Pdf\Html2Pdf;
	use Spipu\Html2Pdf\Exception\Html2PdfException;
	use Spipu\Html2Pdf\Exception\ExceptionFormatter;

if(isset($_POST["generar"])){

	//Recogemos el contenido de la vista
	// ob_start();
	// require_once 'vistaImprimir.php';
	// $html=ob_get_clean();

	// $html2pdf = new Html2Pdf();
	// $html2pdf->writeHTML($html);
	// $html2pdf->output();


	/* Instanciamos la clase HTML2PDF en un objeto, mediante el constructor. 
	Le indicamos que será vertical, (P), en tamño A4 y en español (es). */
	// $objetoPDF = new HTML2PDF('P', 'A4', 'es');
	
	// /* Leemos el contenido del HTML y lo guardamos en $contenido. */
	// $contenido = $objetoPDF->getHtmlFromPage(file_get_contents('vistaImprimir.php'));
	
	// /* Colocamos el contenido del archivo html en el documento pdf. */
	// $objetoPDF->WriteHTML($contenido);
	
	// /* Renderizamos el documento pdf y lo enviamos, directamente, al navegador. */
	// $objetoPDF->Output();


	
	/**
	 * Html2Pdf Library - example
	 *
	 * HTML => PDF converter
	 * distributed under the OSL-3.0 License
	 *
	 * @package   Html2pdf
	 * @author    Laurent MINGUET <webmaster@html2pdf.fr>
	 * @copyright 2017 Laurent MINGUET
	 */
	// require_once dirname(__FILE__).'/../vendor/autoload.php';

	try {
		ob_start();
		include dirname(__FILE__).'/vistaImprimir.php';
		$content = ob_get_clean();
		$html2pdf = new Html2Pdf('P', 'A4', 'fr');
		$html2pdf->writeHTML($content);
		$html2pdf->output('example01.pdf');
	} catch (Html2PdfException $e) {
		$html2pdf->clean();
		$formatter = new ExceptionFormatter($e);
		echo $formatter->getHtmlMessage();
	}

}
?>
<form action="" method="POST">
    <input type="submit" value="Generar PDF" name="generar"/>
</form>

