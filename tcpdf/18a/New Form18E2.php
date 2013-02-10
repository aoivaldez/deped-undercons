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

require_once('../config/lang/eng.php');
require_once('../tcpdf.php');
include_once('get_pdfinfo_form18e2_registrar.php');

// create new PDF document
$pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

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
$pdf->SetMargins('2','5','2');

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE,'5');

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', 'N', 5);

// add a page
$pdf->AddPage();

// set some text to print
$html = <<<EOD
<h5>DepEd Form 18-E-2</h5>
<h4 align="center">REPUBLIC OF THE PHILIPPINES</h4>
<h4 align="center">DEPARTMENT OF EDUCATION</h4>
<h3 align="center">REPORT ON PROMOTIONS</h3>
<h4 align="center">(GRADES IV-VI)</h4><br>


EOD;
// Print text using writeHTMLCell()
$pdf->writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='', $autopadding=true);

$pdf->MultiCell(40, 10, 'Curriculum: ', 0, 'C', 0, 0, '', '', true, 0, false, true, 40, '');
$pdf->MultiCell(40, 10, '', 0, 'C', 0, 0, '', '', true, 0, false, true, 40, '');
$pdf->MultiCell(40, 10, '', 0, 'C', 0, 0, '', '', true, 0, false, true, 40, '');
$pdf->MultiCell(40, 10, '', 0, 'C', 0, 0, '', '', true, 0, false, true, 40, '');
$pdf->MultiCell(40, 10, '', 0, 'C', 0, 0, '', '', true, 0, false, true, 40, '');
$pdf->MultiCell(40, 10, 'GRADE: ', 0, 'R', 0, 0, '', '', true, 0, false, true, 40, '');
$pdf->MultiCell(40, 10, 'Section ', 0, 'R', 0, 1, '', '', true, 0, false, true, 40, '');
$pdf->MultiCell(80, 10, 'School: ', 0, 'C', 0, 0, '', '', true, 0, false, true, 40, '');
$pdf->MultiCell(50, 10, 'Municipality: ', 0, 'L', 0, 0, '', '', true, 0, false, true, 40, '');
$pdf->MultiCell(50, 10, 'Division: ', 0, 'L', 0, 0, '', '', true, 0, false, true, 40, '');
$pdf->MultiCell(50, 10, 'Date: ', 0, 'L', 0, 1, '', '', true, 0, false, true, 40, 'S');


// ---------------------------------------------------------

$html = <<<EOD

<table border="1" cellpadding="0" cellspacing="0">
		<tr>
			<th width="150" style="text-align:center;"><h3>Name</h3> Surnames first, listed alphabetically</th>
			<th width="170" style="text-align:center;"><h3>Home Address</h3></th>
			<th width="28.5" style="text-align:center;">Years in School</th>
			<th width="26" style="text-align:center;">Age</th>
			<th width="80" style="text-align:center;">Total Number of Days of attendance in curriculum year</th>
			

			$subjects_list

			<th width="50" style="text-align:center;"><h3>General Average</h3></th>
			<th width="120" style="text-align:center;"><h3>Action Taken</h3></th>
			
		</tr>
		</table>

		<table border="1" cellpadding="3" cellspacing="0">	
			<tr><td width = "1029.5">Boys</td></tr>				
		</table>

<table width = "1169">

<tr><td width = "454.5">
		<table border="1" cellpadding="3" cellspacing="0">	
				$html_val
		</table>
</td>
<td width = "45">
		<table border="1" cellpadding="3" cellspacing="0">

				$fil_val
		</table>
</td>
<td width = "45">
		<table border="1" cellpadding="3" cellspacing="0">

				$eng_val
		</table>
</td>
<td width = "45">
		<table border="1" cellpadding="3" cellspacing="0">

				$math_val
		</table>
</td>
<td width = "45">
		<table border="1" cellpadding="3" cellspacing="0">

				$sci_val
		</table>
</td>
<td width = "45">
		<table border="1" cellpadding="3" cellspacing="0">

				$mkb_val
		</table>
</td>
<td width = "45">
		<table border="1" cellpadding="3" cellspacing="0">

				$sib_val
		</table>
</td>
<td width = "45">
		<table border="1" cellpadding="3" cellspacing="0">

				$mape_val
		</table>
</td>
<td width = "45">
		<table border="1" cellpadding="3" cellspacing="0">

				$val_val
		</table>
</td>
<td width = "45">
		<table border="1" cellpadding="3" cellspacing="0">

				$hele_val
		</table>
</td>
</tr>
</table>




<table border="1" cellpadding="3" cellspacing="0">	
			<tr><td width = "1029.5">Girls</td></tr>				
		</table>
<table width = "1169">

<tr><td width = "454.5">
		<table border="1" cellpadding="3" cellspacing="0">	
				$fem_html_val
		</table>
</td>
<td width = "45">
		<table border="1" cellpadding="3" cellspacing="0">

				$fem_fil_val
		</table>
</td>
<td width = "45">
		<table border="1" cellpadding="3" cellspacing="0">

				$fem_eng_val
		</table>
</td>
<td width = "45">
		<table border="1" cellpadding="3" cellspacing="0">

				$fem_math_val
		</table>
</td>
<td width = "45">
		<table border="1" cellpadding="3" cellspacing="0">

				$fem_sci_val
		</table>
</td>
<td width = "45">
		<table border="1" cellpadding="3" cellspacing="0">

				$fem_mkb_val
		</table>
</td>
<td width = "45">
		<table border="1" cellpadding="3" cellspacing="0">

				$fem_sib_val
		</table>
</td>
<td width = "45">
		<table border="1" cellpadding="3" cellspacing="0">

				$fem_mape_val
		</table>
</td>
<td width = "45">
		<table border="1" cellpadding="3" cellspacing="0">

				$fem_val_val
		</table>
</td>
<td width = "45">
		<table border="1" cellpadding="3" cellspacing="0">

				$fem_hele_val
		</table>
</td>
</tr>
</table>



<table border="1" width="150" cellpadding="5">
	<tr>
		<td>Total Age:</td>
		<td>Average Age:</td>
	</tr>
</table>
<table border="1" width="150" cellpadding="5">
	<tr>
		<td>Total Age of Students:</td>
		<td>Average Age of Students:</td>
	</tr>
</table>

EOD;
// Print text using writeHTMLCell()

$pdf->writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='', $autopadding=true);

//Close and output PDF document
$pdf->Output('example_002.pdf');

//============================================================+
// END OF FILE                                                
//============================================================+
