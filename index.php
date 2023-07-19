<?php

require_once('fpdf185/fpdf.php');

$name = "Mochamad Darmawan Hardjakusumah";
$email = "mochamaddarmawanh@gmail.com";
$phone = "+6281297514361";
$date_of_birth = "22/10/2000";

$pdf = new FPDF();
$pdf->AddPage('P', 'A4');
$pdf->setXY(10, 10);
$pdf->SetFont('Courier', '', 5);
$pdf->Image('template kartu pasien.png', 5, 5, 85.6, 54);
$pdf->Image('barcode example.png', 8.5, 24.5, 20);
$pdf->cell(75.5, 70.5, $name, 0, 0, 'R');
$pdf->cell(0.1, 77, $email, 0, 0, 'R');
$pdf->cell(0.1, 83.5, $phone, 0, 0, 'R');
$pdf->cell(0.1, 90.5, $date_of_birth, 0, 0, 'R');
$pdf->Image('template kartu pasien (belakang).png', 100, 5, 85.6, 54);
$pdf->Output();









// ----------------------------------------------------------------------------------------- from chat gpt

// class PDF extends FPDF {
//     function Header() {
//         // Load background image
//         $this->Image('template kartu pasien (big).png', 0, 0, 85.6, 54);
//     }
    
//     function cardID($name, $id) {
//         // Set font
//         $this->SetFont('Arial', 'B', 16);
//         $this->SetTextColor(255, 255, 255); // Set text color to white
        
//         // Print name
//         $this->SetXY(15, 15);
//         $this->Cell(60, 10, $name, 0, 1, 'C');
        
//         // Print ID
//         $this->SetFont('Arial', '', 12);
//         $this->SetXY(15, 30);
//         $this->Cell(60, 10, $id, 0, 1, 'C');
//     }
// }

// // Create new PDF document
// $pdf = new PDF();
// $pdf->AddPage();

// // Set name and ID
// $name = 'John Doe';
// $id = '1234-5678-9012';

// // Print card
// $pdf->cardID($name, $id);

// // Output PDF
// $pdf->Output();