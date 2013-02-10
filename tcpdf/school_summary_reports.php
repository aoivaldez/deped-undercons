<?php
//============================================================+
// File name   : example_002.php
// Begin       : 2008-03-04
// Last Update : 2010-08-08
//
// Description : Example 002 for TCPDF class
//               Removing Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               Manor Coach House, Church Hill
//               Aldershot, Hants, GU12 4RQ
//               UK
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Removing Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

require_once('config/lang/eng.php');
require_once('tcpdf.php');
include_once('school_reports_getinfo.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 002');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins('3', '5', '5');

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, '5');

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', 'N', 7);

// add a page
$pdf->AddPage();

$html = '
<head>
<style type="text/css ">
	td{text-align:center;}
</style>';

$pdf->writeHTML($html, true, false, true, false, '');
// ---------------------------------------------------------

// ---------------------------------------------------------

$html= <<<EOD

<table border="0">
<tr>
	<td width="10%" style="text-align:center;"></td>
	<td width="15%" align="left"><img src="/deped/uploads_images/schools/$school_id_val.jpg" alt="test alt attribute" width="60" height="60" border="0" /></td>
	<td width="50%" style="text-align:center;"><h3><br>$school_name<br>$school_address</h3></td>
	<td></td>
</tr>
<tr>
	<td colspan="4" style="text-align:center;"><br><br><h1>SUMMARY REPORT</h1></td>
</tr>
</table>
	
<table cellpadding = "5">
	<tr>
		<td>
			Total Sections: $total_active
		</td>
	</tr>
	<tr>
		<td>
			Complete Sections: $complete
		</td>
	</tr>
	<tr>
		<td height = "40">
			Incomplete Sections: $incomplete
		</td>
	</tr>
</table>


<table border = "1" cellpadding = "5">
	<tr>
		<td width = "200" style="text-align:center;">
			Section Name
		</td>
		<td width = "120" style="text-align:center;">
			Year/Grade Level
		</td>
		<td width = "180" style="text-align:center;">
			Adviser
		</td>
		<td width = "100" style="text-align:center;">
			Status
		</td>
		<td width = "120" style="text-align:center;">
			Remarks
		</td>
	</tr>
</table>


<table>
<tr>
<td width = "320">
		<table border="1" cellpadding="3" cellspacing="0">	
				$sections_val
		</table>
</td>
<td width = "180">
		<table border="1" cellpadding="3" cellspacing="0">	
				$advisers_val
		</table>
</td>
<td width = "320">
		<table border="1" cellpadding="3" cellspacing="0">	
				$status
		</table>
</td>
</tr>
</table>


EOD;
// Print text using writeHTMLCell()

$pdf->writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='', $autopadding=true);


//Close and output PDF document
$pdf->Output('example_002.pdf', 'I');

//============================================================+
// END OF FILE                                                
//============================================================+