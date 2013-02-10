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
include_once('get_pdfinfo_form18e1_registrar.php');

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
</style>
<table border="0">
<tr>
	<td width="10%"><h4 align="right">Deped</h4></td>
	<td width="15%" align="left"> Form 18-E-1</td>
	<td width="50%"><h3>REPUBLIC OF THE PHILIPPINES<br>
			DEPARTMENT OF EDUCATION</h3></td>
	<td>Due the day after the<br> last day prescribed for<br> regular classes</td>
</tr>
<tr>
	<td colspan="4"><h1>REPORT ON PROMOTIONS </h1></td>
</tr>
<tr>
	<td colspan="4"><h2>(GRADES I-III INCLUSIVE)</h2></td>
</tr>
</table>';


$pdf->writeHTML($html, true, false, true, false, '');
// ---------------------------------------------------------
// ---------------------------------------------------------


$html= <<<EOD

	<table>
	<tr>
		<td height="30">Grade:</td>
		<td>Date: $today</td>
		<td>School: </td>
	</tr>
	</table>

	<table border="1" cellpadding="0" cellspacing="0">
		<tr>
			<th width="150" style="text-align:center;"><h3>Name</h3> Surnames first, listed alphabetically</th>
			<th width="150" style="text-align:center;"><h3>Home Address</h3></th>
			<th width="50" style="text-align:center;">Years in School</th>
			<th width="30" style="text-align:center;">Age</th>
			<th width="55" style="text-align:center;">Total Number of Days of attendance in Grade</th>
				

			<th width="50" style="text-align:center;"><h3>Final Rating</h3></th>

			<th width="90" style="text-align:center;"><h3>Action Taken</h3></th>

			<th width="143" style="text-align:center;"><h3>Remarks</h3></th>	
		</tr>
		</table>


<table border="1" cellpadding="3" cellspacing="0">	
	<tr><td width = "718">Boys</td></tr>				
</table>


<table width = "1169">

<tr><td width = "435">
		<table border="1" cellpadding="3" cellspacing="0">	
				$html_val
		</table>
</td>
<td>
		<table border="1" cellpadding="3" cellspacing="0">	
				$ave
		</table>
</td>
</tr>
</table>

<table border="1" cellpadding="3" cellspacing="0">	
	<tr><td width = "718">Girls</td></tr>				
</table>

<table width = "1169">

<tr><td width = "435">
		<table border="1" cellpadding="3" cellspacing="0">	
				$fem_html_val
		</table>
</td>
<td>
		<table border="1" cellpadding="3" cellspacing="0">	
				$fem_ave
		</table>
</td>
</tr>
</table>
	

	<table border="0" width="300" cellpadding="0">
		<tr>
			<td width="150">
				<table border="1" cellpadding="3" width="150">
					<tr>
						<td>Total Age: $final_total_age</td>
					</tr>
					<tr>
						<td>Average Age of Pupils: $final_ave_age</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	

EOD;
// Print text using writeHTMLCell()

$pdf->writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='', $autopadding=true);


//Close and output PDF document
$pdf->Output('FORM18E1.pdf', 'I');

//============================================================+
// END OF FILE                                                
//============================================================+
