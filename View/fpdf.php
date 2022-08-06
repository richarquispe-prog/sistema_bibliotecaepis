<?php
require '../Model/conexion.php';
require('../assets/fpdf/fpdf.php');

// $consulta = "SELECT * FROM boleta";
 //$resultado = $conexion->query($consulta);


$pdf = new FPDF('P', 'mm', 'letter');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetMargins(10, 10, 10);
$pdf->SetTitle("Biblioteca Epis");

//$pdf->Cell(20, 5, echo $nom, 0, 1, 'L');echo $nom
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetTextColor(25, 174, 194);
$pdf->Cell(200,10,utf8_decode("BOLETA - BIBLIOTECA"), 0, 0, 'C');
$pdf->Ln();
$pdf->image("../resources/img/unh.png", 10, 10, 30, 30, 'PNG');
$pdf->image("../resources/img/epis1.png", 180, 10, 30, 30, 'PNG');
$pdf->SetTextColor(16, 87, 97);
$pdf->Cell(200,10,utf8_decode("ESCUELA PROFESIONAL INGENIERIA DE SISTEMAS"), 0, 0, 'C');
$pdf->Ln();
$pdf->Ln();


//$pdf->image("../../assets/img/logo.png", 180, 10, 30, 30, 'PNG');

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(0, 0, 0);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(196, 5, "Datos del Usuario", 1, 1, 'C', 1);
$pdf->Ln();

$id = $_GET['codigo_boleta'];

$sql1="SELECT boleta.codigo_boleta,usuarios.nombre,usuarios.apellidos,usuarios.DNI,usuarios.Correo_Institucional,usuarios.telefono,libro.n_control,libro.titulo,boleta.fecha_entrega,boleta.fecha_devolucion from usuarios JOIN boleta ON boleta.DNI= usuarios.DNI INNER JOIN libro ON libro.n_control= boleta.n_control WHERE `codigo_boleta`=$id";
	$result=mysqli_query($conexion,$sql1);
while($mostrar=mysqli_fetch_array($result)){
	$pdf->SetTextColor(0, 0, 0);
	$pdf->SetFont('Arial','',16);


	$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 5, utf8_decode("Boleta: "), 0, 0, 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(20,5,$mostrar['codigo_boleta'],0,1,'L');

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 5, utf8_decode("Nombre: "), 0, 0, 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(20,5, utf8_decode($mostrar['nombre']),0,1,'L');

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 5, utf8_decode("Apellidos: "), 0, 0, 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(20,5,utf8_decode($mostrar['apellidos']),0,1,'L');


$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 5, utf8_decode("DNI: "), 0, 0, 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(20,5,$mostrar['DNI'],0,1,'L');



$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 5, utf8_decode("Correo: "), 0, 0, 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(20,5,$mostrar['Correo_Institucional'],0,1,'L');

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 5, utf8_decode("Telefono: "), 0, 0, 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(20,5,$mostrar['telefono'],0,1,'L');

	}			



$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(0, 0, 0);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(196, 5, " Datos del Libro ", 1, 1, 'C', 1);
$pdf->Ln();
$pdf->SetTextColor(0, 0, 0);
//$pdf->Cell(60, 5, utf8_decode('Numero Control'), 0, 0, 'L');
//$pdf->Cell(60, 5, utf8_decode('Libro'), 0, 1, 'L');





 $sql = "SELECT boleta.codigo_boleta,boleta.fecha_entrega,usuarios.nombre,usuarios.apellidos,usuarios.DNI,usuarios.Correo_Institucional,usuarios.telefono,libro.n_control,libro.titulo,libro.autor,libro.fecha_adquisicion,boleta.fecha_entrega,boleta.fecha_devolucion from usuarios JOIN boleta ON boleta.DNI= usuarios.DNI INNER JOIN libro ON libro.n_control= boleta.n_control WHERE `codigo_boleta`=$id";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
$pdf->SetFont('Arial', '', 10);
	//$pdf->Cell(60,10,$mostrar['n_control'],0,0,'L');
	//$pdf->Cell(60,10,$mostrar['titulo'],0,1,'L');

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 5, utf8_decode("N°control "), 0, 0, 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(20,5,$mostrar['n_control'],0,1,'L');


$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 5, utf8_decode("Titulo "), 0, 0, 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(20,5, utf8_decode($mostrar['titulo']),0,1,'L');

	$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 5, utf8_decode("Autor "), 0, 0, 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(20,5,$mostrar['autor'],0,1,'L');

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 5, utf8_decode("F.Entrega "), 0, 0, 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(20,5,$mostrar['fecha_entrega'],0,1,'L');

	
	
	}

/*while($row =$resultado->fetch_assoc())
{
	$pdf->Cell(90,10,$row['codigo_boleta'],1,1,'C',0);
}*/
$pdf->Output();

?>