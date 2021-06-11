<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH."libraries/pdf/dompdf/autoload.inc.php"; 
use Dompdf\Dompdf;
/*
@Description	: Library to export to excel
@Author			: Harshad Hirapara
@Input			: 
@Output			: 
@Date			: 20-05-2014
*/

class Pdf extends Dompdf
{

	function pdf_create($html, $filename='', $stream=TRUE) 
	{	
		$dompdf = new DOMPDF();
		$dompdf->setPaper('A4');
		$dompdf->load_html($html);
		$dompdf->render();

		if ($stream) {
			$dompdf->stream($filename.".pdf");
			//$dompdf->stream($filename.".pdf",array("Attachment" => false)); //FOR VIEW PDF IN BROWSER
		} else {
			return $dompdf->output();
		}
	}
}