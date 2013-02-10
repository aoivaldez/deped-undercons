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
</table>


';
$pdf->writeHTML($html, true, false, true, false, '');
// ---------------------------------------------------------
$txt1="11";
$txt2="12";


$pdf->MultiCell(200, 3, 'SCHOOL YEAR 20'.$txt1.'-20'.$txt2, 0, 'C', 0, 1, '', '', true, 0, false, true, 40, '');
$pdf->MultiCell(40, 3, '', 0, 'C', 0, 1, '', '', true, 0, false, true, 40, '');
$pdf->MultiCell(40, 3, '', 0, 'C', 0, 1, '', '', true, 0, false, true, 40, '');
$pdf->MultiCell(50, 3, 'Division:', 0, 'L', 0, 0, '', '', true, 0, false, true, 40, '');
$pdf->MultiCell(90, 3, 'GRADE', 0, 'C', 0, 0, '', '', true, 0, false, true, 40, '');
$pdf->MultiCell(40, 3, 'Date', 0, 'L', 0, 0, '', '', true, 0, false, true, 40, '');
$pdf->MultiCell(22, 3, '20', 0, 'L', 0, 1, '', '', true, 0, false, true, 40, '');

$pdf->MultiCell(50, 3, 'School:', 0, 'L', 0, 0, '', '', true, 0, false, true, 40, '');
$pdf->MultiCell(90, 3, 'Kinder 2', 0, 'C', 0, 0, '', '', true, 0, false, true, 40, '');
$pdf->MultiCell(62, 3, 'Teacher', 0, 'L', 0, 1, '', '', true, 0, false, true, 40, '');
// ---------------------------------------------------------

$html= <<<EOD
	
	<table width="700" border="1" cellpadding="3" cellspacing="0">
		<tr>
						<th width="150" height="26" style="text-align:center;"><h4>NAMES</h4><br>Surnames first, listed alphabetically</th>
						<th width="150" height="26" style="text-align:center;"><h4>HOME ADDRESS</h4></th>
						<th width="50" height="52" style="text-align:center;"><br>YEARS IN SCHOOL</th>					
						<th height="25" width="30" style="text-align:center;"><h4>AGE</h4></th>
						<th height="52" width="55" style="text-align:center;">TOTAL NUMBER OF DAYS IN GRADE</th>
						<th height="52" width="50" style="text-align:center;"><br>FINAL RATING</th>
						<th width="90" height="52" style="text-align:center;"><br>ACTION TAKEN</th>
						<th width="143" height="52" style="text-align:center;"><br>REMARKS</th>		
		</tr>
	</table>

	<table border="0" width="300" cellpadding="0">
		<tr>
			<td width="150">
				<table border="1" cellpadding="3" width="150">
					<tr>
						<td>Total Age:</td>
					</tr>
					<tr>
						<td>Total Age: of Pupils</td>
					</tr>
				</table>
			</td>
			<td width="150">
				<table border="1" cellpadding="3" width="150">
					<tr>
						<td>Average Age:</td>
					</tr>
					<tr>
						<td>Average Age of Pupils:</td>
					</tr>
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