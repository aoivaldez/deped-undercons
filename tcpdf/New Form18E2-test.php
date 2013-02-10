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
	<td width="155">
		<table border="1" cellpadding="3" cellspacing="0">
		<tr>
			<th width="155" height="37" rowspan="2" style="text-align:center;"><h3>NAMES</h3> <br>(Surnames first, arranged alphabetically)</th>
			<th width="160" height="37" rowspan="2" style="text-align:center;"><h3>Home Address</h3></th>
			<th width="28.5" height="37"rowspan="2" style="text-align:center;">Years in School</th>
			<th width="26" height="37" rowspan="2" style="text-align:center;">Age</th>
			<th width="55" height="37" rowspan="2" style="text-align:center;">Total Number of Days of attendance in curriculum year</th>
			<th width="503" colspan="9" style="text-align:center;">FINAL RATING</th>
		</tr>
		<tr>
			<td width="55">
				<table width="55" cellpadding="3">
					<tr>
						<th style="text-align:center;">Filipino</th>
					</tr>
				</table>
			</td>
			<td width="55">
				<table width="55" cellpadding="3">
					<tr>
						<th style="text-align:center;">English</th>
					</tr>
				</table>
			</td>
			<td width="55">
				<table width="55" cellpadding="3">
					<tr>
						<th style="text-align:center;">Mathematics</th>
					</tr>
				</table>
			</td>
			<td width="55">
				<table width="55" cellpadding="3">
					<tr>
						<th style="text-align:center;">Science</th>
					</tr>
				</table>
			</td>
			<td width="55">
				<table width="55" cellpadding="3">
					<tr>
						<th style="text-align:center;">MAKABAYAN</th>
					</tr>
				</table>
			</td>
			<td width="55">
				<table width="55" cellpadding="3">
					<tr>
						<th style="text-align:center;">Sibika</th>
					</tr>
				</table>
			</td>
			<td width="55">
				<table width="55" cellpadding="3">
					<tr>
						<th style="text-align:center;">MAPEH</th>
					</tr>
				</table>
			</td>
			<td width="55">
				<table width="55" cellpadding="3">
					<tr>
						<th style="text-align:center;">TLE</th>
					</tr>
				</table>
			</td>
			<td width="63">
				<table width="63" cellpadding="3">
					<tr>
						<th style="text-align:center;">Character Education</th>
					</tr>
				</table>
			</td>
			<td width="50">
				<table  cellpadding="3">
					<tr>
						<th width="50" style="text-align:center;" rowspan="2">GENERAL<br>AVERAGE</th>
					</tr>
				</table>
			</td>
			<td width="50">
				<table  cellpadding="3">
					<tr>
						<th width="50" style="text-align:center;" rowspan="2">ACTIONL<br>TAKEN</th>
					</tr>
				</table>
			</td>
		</tr>
		</table>
	</td>
	</tr>
</table>

 

<table border="1" width="155" cellpadding="5">
	<tr>
		<td>Total Age:</td>
		<td>Average Age:</td>
	</tr>
</table>
<table border="1" width="155" cellpadding="5">
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
