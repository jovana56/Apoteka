
<?php
require('fpdf.php');

class PDF extends FPDF
{


    // Page header
    function Header()
    {
        // Logo
        $this->Image('kapsula.png', 10, 6, 30);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(30, 10, 'Pravilnik koriscenja sajta', 2, 2, 'C');
        // Line break
        $this->Ln(20);
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Page number
        $this->Cell(0, 8, 'Page ' . $this->PageNo() . '/{nb}', 0, 1, 'C');
        $this->Cell(0, 0, 'Autori Despotovic, Todorovici', 0, 1, 'C');
    }
}

// Instanciation of inherited class
$pdf = new PDF();

$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 16);
$pdf->Cell(0, 10, 'Vasi licni podaci mogu biti upotrebljeni u sledece svrhe:', 0, 1);
$pdf->Cell(0, 10, '1. kako bi vam bio pruzen pristup internet stranici;', 0, 1);
$pdf->Cell(0, 10, '2. radi odrzavanja i poboljsanja internet stranice;', 0, 1);
$pdf->Cell(0, 10, '3. kako bi vam bila poslata elektronska posta kada se pretplatite na listu kontakata; ', 0, 1);
$pdf->Cell(0, 10, '4. kako bi rezultati anketa i istrazivanja u kojima ucestvujete bili sacuvani i analizirani;', 0, 1);

$pdf->Output();

?>