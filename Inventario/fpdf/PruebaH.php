<?php
require('./fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
	
    // Arial bold 15
    $this->SetFont('Arial','B',16);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Reporte de Productos ',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(30,10,'Nombre',1,0,'C',0);
	$this->Cell(30,10,'Cantidad',1,0,'C',0);
	$this->Cell(25,10,'Lote',1,0,'C',0);
    $this->Cell(40,10,'Vencimiento',1,0,'C',0);
	$this->Cell(25,10,'Precio',1,0,'C',0);
	$this->Cell(40,10,'Hora y Fecha',1,1,'C',0);
  
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página') .$this->PageNo().'/{nb}',0,0,'C');
}
}

require("../db.php"); // Archivo de conexión a la base de datos

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);

// Establecer la conexión a la base de datos
$conexion = mysqli_connect('localhost', 'root', '', 'inventario');
if (!$conexion) {
    die('Error de conexión: ' . mysqli_connect_error());
}

$consulta = "SELECT * FROM productos";
$resultado = mysqli_query($conexion, $consulta);

while ($row = $resultado->fetch_assoc()) {
    $pdf->Cell(30, 10, $row['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['cantidad'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $row['lote'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['vencimiento'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $row['precio'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['created_at'], 1, 1, 'C', 0);
}

$pdf->Output('Producto.pdf', 'I');
?>