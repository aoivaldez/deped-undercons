<?php

require_once('config/lang/eng.php');  
require_once('tcpdf.php');  

$variable = "hello";
$html = "";
$html .= "<table><tr>";
$html .= "<td>".$variable."</td></tr>";
$html .= "</table>";

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    // Set various pdf options
    $pdf->SetAuthor('John Doe');
    // etc.
    // Now output the html
    $pdf->AddPage();
    $pdf->writeHTML($html, true, 0);
    // Output the PDF to the browser
    $pdf->Output('somefile.pdf');

?>