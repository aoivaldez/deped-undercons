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
$pdf->SetMargins('5','3','10');

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE,'5');

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);


// ---------------------------------------------------------

// set font
$pdf->SetFont('times', 'N', 5);

// add a page
$pdf->getPageSizeFromFormat('A3');
$pdf->AddPage();

// set some text to print
$html = <<<EOD

<h4 align="center">Republic of the Philippines</h4>
<h4 align="center">DEPARTMENT OF EDUCATION</h4>
<h5>DepEd Form 18-A</h5>
<h4 align="center">DIVISION OF CAVITE, REGION IV-A CALABARZON</h4>
<h3 align="center">REPORT ON SECONDARY PROMOTIONS</h3><br>

<br>
EOD;
// Print text using writeHTMLCell()
$pdf->writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='', $autopadding=true);

$txt='Basic Education (BEC)';
$txt1='Fourth';
$txt2='III-Pacific';
$txt3='March 28, 2012';
$txt4='Lyceum of the Philippines, International Highschool';
$txt5=" Surnames first, listed alphabetically";
$txt7='Age';
$txt8="General Trias";

$pdf->MultiCell(40, 10, 'Curriculum: '.$txt, 0, 'C', 0, 0, '', '', true, 0, false, true, 40, '');
$pdf->MultiCell(40, 10, '', 0, 'C', 0, 0, '', '', true, 0, false, true, 40, '');
$pdf->MultiCell(40, 10, '', 0, 'C', 0, 0, '', '', true, 0, false, true, 40, '');
$pdf->MultiCell(40, 10, '', 0, 'C', 0, 0, '', '', true, 0, false, true, 40, '');
$pdf->MultiCell(40, 10, '', 0, 'C', 0, 0, '', '', true, 0, false, true, 40, '');
$pdf->MultiCell(40, 10, 'Curriculum Year: '.$txt1, 0, 'R', 0, 0, '', '', true, 0, false, true, 40, '');
$pdf->MultiCell(40, 10, 'Section '.$txt2, 0, 'R', 0, 1, '', '', true, 0, false, true, 40, '');
$pdf->MultiCell(80, 10, 'School: '.$txt4, 0, 'C', 0, 0, '', '', true, 0, false, true, 40, '');
$pdf->MultiCell(50, 10, 'Municipality: '.$txt8, 0, 'L', 0, 0, '', '', true, 0, false, true, 40, '');
$pdf->MultiCell(50, 10, 'Date: '.$txt3, 0, 'L', 0, 1, '', '', true, 0, false, true, 40, 'S');


$pdf->MultiCell(35, 12, 'Name'.$txt5, 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 12, 'Home Address', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(10, 12, 'Years in School', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(5, 12, 'Age', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(21, 12, 'Total Number of Days of attendance in curriculum year', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(14, 12, 'Filipino IV
1.2', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(14, 12, 'English IV
1.2', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(14, 12, 'Math IV
1.2', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(14, 12, 'Sci. & Tech. IV
1.2', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(14, 12, 'MAKABAYAN IV
1.2', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(14, 12, 'Araling Panlipunan
1.2', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(14, 12, 'TLE IV
1.2', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(14, 12, 'MAPEH IV
1.2', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(14, 12, 'EP IV
1.2', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(36, 7, 'Credits Earned', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(18, 7, 'Promoted or Retained', 1, 'C', 0, 1, '', '', true, 0, false, true, 40, 'T');



$pdf->MultiCell(35, 5, '----------------------------------------------------------------------------------------------------------------', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, '----------------------------------------------------------------------------------------------------------------', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(10, 5, '--------------------------', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(5, 5, '----------', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(21, 5, '---------------------------------------------------------------', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, 'Final
Rating', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, 'Action
	Taken', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, 'Final
Rating', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, 'Action
	Taken', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, 'Final
Rating', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, 'Action
	Taken', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, 'Final
Rating', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, 'Action
	Taken', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, 'Final
Rating', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, 'Action
	Taken', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, 'Final
Rating', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, 'Action
	Taken', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, 'Final
Rating', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, 'Action
	Taken', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, 'Final
Rating', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, 'Action
	Taken', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, 'Final
Rating', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, 'Action
	Taken', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, 'In Previous Years', 1, 'L', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, 'Current Years', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, 'TOTAL', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(18, 5, '------------------------------------------------------', 1, 'C', 0, 1, '', '', true, 0, false, true, 40, 'T');

$pdf->MultiCell(35, 5, 'Begomia M. Ryan', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, 'B4 L18 P4 Tierra Nevada', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(10, 5, '6', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(5, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(21, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'L', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(18, 5, '', 1, 'C', 0, 1, '', '', true, 0, false, true, 40, 'T');

$pdf->MultiCell(35, 5, 'Cabatbat P. Valdimir Evan', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, 'S6 B4 L19 Sunny Brooke II', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(10, 5, '6', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(5, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(21, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'L', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(18, 5, '', 1, 'C', 0, 1, '', '', true, 0, false, true, 40, 'T');

$pdf->MultiCell(35, 5, 'Calibar C. Kylle Andrei', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, 'S4 B7 L17 Sunny Brooke II', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(10, 5, '6', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(5, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(21, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'L', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(18, 5, '', 1, 'C', 0, 1, '', '', true, 0, false, true, 40, 'T');

$pdf->MultiCell(35, 5, 'Elvier M. Jerico', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, 'B6A L36 Country Meadow', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(10, 5, '6', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(5, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(21, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'L', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(18, 5, '', 1, 'C', 0, 1, '', '', true, 0, false, true, 40, 'T');

$pdf->MultiCell(35, 5, 'Enriquez E. Jericho', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, 'S6 B3 L12 Sunny Brooke II', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(10, 5, '6', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(5, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(21, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'L', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(18, 5, '', 1, 'C', 0, 1, '', '', true, 0, false, true, 40, 'T');

$pdf->MultiCell(35, 5, 'Garcia S. Lloyd Christian', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, 'Tierra Nevada', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(10, 5, '6', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(5, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(21, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'L', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(18, 5, '', 1, 'C', 0, 1, '', '', true, 0, false, true, 40, 'T');

$pdf->MultiCell(35, 5, 'Mascardo O. Jhon Paul', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, 'S6 B3 L2 Sunny Brooke II', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(10, 5, '6', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(5, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(21, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'L', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(18, 5, '', 1, 'C', 0, 1, '', '', true, 0, false, true, 40, 'T');

$pdf->MultiCell(35, 5, 'Penaflor A. John Mark', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, 'S1 B4 L12 Sunny Brooke II', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(10, 5, '6', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(5, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(21, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'L', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(18, 5, '', 1, 'C', 0, 1, '', '', true, 0, false, true, 40, 'T');

$pdf->MultiCell(35, 5, 'Reyes P. Ureeley Vyer', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, 'B9 L8 P1 Tierra Nevada', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(10, 5, '6', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(5, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(21, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'L', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(18, 5, '', 1, 'C', 0, 1, '', '', true, 0, false, true, 40, 'T');

$pdf->MultiCell(35, 5, 'Sajonia U. Selivin', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, 'S3 B2 L35 Sunny Brooke I', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(10, 5, '6', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(5, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(21, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'L', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(18, 5, '', 1, 'C', 0, 1, '', '', true, 0, false, true, 40, 'T');

$pdf->MultiCell(35, 5, 'Adaya C. Carmela Joyce', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, 'B3 L27 Country Meadow', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(10, 5, '6', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(5, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(21, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'L', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(18, 5, '', 1, 'C', 0, 1, '', '', true, 0, false, true, 40, 'T');

$pdf->MultiCell(35, 5, 'Calibar C. Mary Althea', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, 'B51 L13 Marcurilla', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(10, 5, '6', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(5, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(21, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'L', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(18, 5, '', 1, 'C', 0, 1, '', '', true, 0, false, true, 40, 'T');

$pdf->MultiCell(35, 5, 'Corpuz D. Yna', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, 'S4 B3 L31 Sunny Brooke II', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(10, 5, '6', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(5, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(21, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'L', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(18, 5, '', 1, 'C', 0, 1, '', '', true, 0, false, true, 40, 'T');

$pdf->MultiCell(35, 5, 'Diaz A. Nicole', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, 'S2 B25 L3 Sunny Brooke II', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(10, 5, '6', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(5, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(21, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'L', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(18, 5, '', 1, 'C', 0, 1, '', '', true, 0, false, true, 40, 'T');

$pdf->MultiCell(35, 5, 'Escarez B. Danica Marie', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, 'S7 B2 L22 Sunny Brooke II', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(10, 5, '6', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(5, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(21, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'L', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(18, 5, '', 1, 'C', 0, 1, '', '', true, 0, false, true, 40, 'T');

$pdf->MultiCell(35, 5, 'Escarez A. Ma. Bea Bianca', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, 'S1 B30 L27 Sunny Brooke II', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(10, 5, '6', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(5, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(21, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'L', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(18, 5, '', 1, 'C', 0, 1, '', '', true, 0, false, true, 40, 'T');

$pdf->MultiCell(35, 5, 'Fortes A. Frances Anne', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, 'S6 B1 L15 Sunny Brooke II', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(10, 5, '6', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(5, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(21, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'L', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(18, 5, '', 1, 'C', 0, 1, '', '', true, 0, false, true, 40, 'T');

$pdf->MultiCell(35, 5, 'Manaog B. Anna Marie', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, 'S1 B22 L10 Sunny Brooke I', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(10, 5, '6', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(5, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(21, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'L', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(18, 5, '', 1, 'C', 0, 1, '', '', true, 0, false, true, 40, 'T');

$pdf->MultiCell(35, 5, 'Rafael B. Beldandy', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, 'S6 L21 B4 Sunny Brooke I', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(10, 5, '6', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(5, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(21, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'L', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(18, 5, '', 1, 'C', 0, 1, '', '', true, 0, false, true, 40, 'T');

$pdf->MultiCell(35, 5, 'Rosette F. Gerrica', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, 'B5A L15 Country Meadow', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(10, 5, '6', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(5, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(21, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'L', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(18, 5, '', 1, 'C', 0, 1, '', '', true, 0, false, true, 40, 'T');

$pdf->MultiCell(35, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(10, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(5, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(21, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'L', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(18, 5, '', 1, 'C', 0, 1, '', '', true, 0, false, true, 40, 'T');

$pdf->MultiCell(35, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(10, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(5, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(21, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'L', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(18, 5, '', 1, 'C', 0, 1, '', '', true, 0, false, true, 40, 'T');

$pdf->MultiCell(35, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(10, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(5, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(21, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'L', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(18, 5, '', 1, 'C', 0, 1, '', '', true, 0, false, true, 40, 'T');

$pdf->MultiCell(35, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(10, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(5, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(21, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'L', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(18, 5, '', 1, 'C', 0, 1, '', '', true, 0, false, true, 40, 'T');

$pdf->MultiCell(35, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(10, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(5, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(21, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'L', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(18, 5, '', 1, 'C', 0, 1, '', '', true, 0, false, true, 40, 'T');

$pdf->MultiCell(35, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(10, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(5, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(21, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'L', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(18, 5, '', 1, 'C', 0, 1, '', '', true, 0, false, true, 40, 'T');

$pdf->MultiCell(35, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(10, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(5, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(21, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(7, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'L', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(12, 5, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(18, 5, '', 1, 'C', 0, 1, '', '', true, 0, false, true, 40, 'T');

$pdf->MultiCell(35, 5, 'Total Age:', 1, 'L', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, 'Average Age', 1, 'L', 0, 1, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, 'Total Age of Students:', 1, 'L', 0, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(35, 5, 'Average Age of Students', 1, 'L', 0, 1, '', '', true, 0, false, true, 40, 'T');


// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_002.pdf');

//============================================================+
// END OF FILE                                                
//============================================================+
