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
include_once('get_pdfinfo_form18a_registrar.php');

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
<h5>Form 18-A</h5>
<h3 align="center">Republic of the Philippines</h3>
<h4 align="center">DEPARTMENT OF EDUCATION</h4>
<h5 align="center">DIVISION OF CAVITE, REGION IV-CALABARZON</h5>
<h3 align="center">REPORT ON SECONDARY PROMOTIONS</h3>
<br>
<br>

<table cellpadding="5">
		<tr>
			<td >Curriculum: Basic Education</td>
			<td >Section: $section_name</td>
			<td >Date: $today</td>
			<td >School: $school_name</td>
		</tr>
</table>

EOD;
// Print text using writeHTMLCell()
$pdf->writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='', $autopadding=true);

$pdf->MultiCell(50, 10, ' ', 0, 'C', 0, 0, '', '', true, 0, false, true, 50, '');
$pdf->MultiCell(50, 10, ' ', 0, 'C', 0, 0, '', '', true, 0, false, true, 50, '');
$pdf->MultiCell(50, 10, '', 0, 'C', 0, 0, '', '', true, 0, false, true, 50, '');
$pdf->MultiCell(80, 10, '', 0, 'C', 0, 1, '', '', true, 0, false, true, 50, '');


// ---------------------------------------------------------

$html = <<<EOD



<table border="1" cellpadding="0" cellspacing="0">
		<tr>
			<th width="130" style="text-align:center;"><h3>Name</h3> Surnames first, listed alphabetically</th>
			<th width="90" style="text-align:center;"><h3>Home Address</h3></th>
			<th width="28.5" style="text-align:center;">Years in School</th>
			<th width="26" style="text-align:center;">Age</th>
			<th width="55" style="text-align:center;">Total Number of Days of attendance in curriculum year</th>
				
			$subjects_list

			<th width="30" style="text-align:center;">General Average</th>

			<th width="120" style="text-align:center;"><h3>Remarks</h3></th>
			
		</tr>
		</table>

<table border="1" cellpadding="3" cellspacing="0">	
	<tr><td width = "1019.5">Boys</td></tr>				
</table>

<table width = "1169">

<tr><td width = "329.5">
		<table border="1" cellpadding="3" cellspacing="0">	
				$html_val
		</table>
</td>
<td width = "540">
		<table border="1" cellpadding="3" cellspacing="0">	
				$grades
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
	<tr><td width = "1019.5">Girls</td></tr>				
</table>

<table width = "1169">
<tr><td width = "329.5">
		<table border="1" cellpadding="3" cellspacing="0">	
				$fem_html_val
		</table>
</td>
<td width = "540">
		<table border="1" cellpadding="3" cellspacing="0">	
				$fem_grades
		</table>
</td>
<td>
		<table border="1" cellpadding="3" cellspacing="0">	
				$fem_ave
		</table>
</td>
</tr>
</table>



<table border="1" width="130" cellpadding="5">
<tr><td>Total Age of Students: $final_total_age</td></tr>
<tr><td>Average Age of Students: $final_ave_age</td></tr>
</table>



EOD;

// Print text using writeHTMLCell()

$pdf->writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='', $autopadding=true);

//Close and output PDF document
$pdf->Output('FORM18A.pdf');

//============================================================+
// END OF FILE                                                
//============================================================+
