<?php
require('fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('logo.png',10,6,50);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(60,10,'Intake Form',1,0,'C');
    // Line break
    $this->Ln(20);

}


// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    $this->Cell(60,10,'M-Square Systems',1,0,'C');
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Write( 10, "2009 Was A Good Year" );
$pdf->Ln( 10 );
$pdf->SetFont( 'Arial', '', 12 );
$pdf->Write( 6, "Despite the economic downturn, WidgetCo had a strong year. Sales of the HyperWidget in particular exceeded expectations. The fourth quarter was generally the best performing; this was most likely due to our increased ad spend in Q3." );
$pdf->Ln( 10 );

$pdf->Cell(90,5,'Name','C',0);
$pdf->Cell(90,5,'Hobby','C',0);
$pdf->Ln( 10 );
$pdf->Cell(90,5,'sdffdfsf','C',0);
$pdf->Cell(90,5,'sdfsdfsdf','C',0);
$pdf->Ln( 10 );
$pdf->Cell(90,5,'sdffdfsf','C',0);
$pdf->Cell(90,5,'sdfsdfsdf','C',0);
$pdf->Ln( 10 );
$pdf->Cell(90,5,'sdffdfsf','C',0);
$pdf->Cell(90,5,'sdfsdfsdf','C',0);
$pdf->Output();

?>
