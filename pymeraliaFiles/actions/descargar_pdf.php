<?php
require('../fpdf185/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    //  $this->Image('../images/logo_pymeshield.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Report',0,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Page '.$this->PageNo().'/{nb}'),0,0,'C');
}
}
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

require '../includes/config-connexio.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
$sqlQuery = "SELECT * FROM reports WHERE id_report = $id";
$resultado = $conn->query($sqlQuery);

while($row = $resultado->fetch_assoc()){
    //$pdf->Cell(ancho, alto, valor que imprimimos, borde, salto de linea, justificado, relleno)
    $pdf->Cell(90, 10, $row['name_report'], 1, 0, 'C', 0);
    $pdf->Cell(90, 10, $row['date_report'], 1, 1, 'C', 0);
}



$pdf->Output();
?>