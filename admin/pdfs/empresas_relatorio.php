<?php 

require 'fpdf/fpdf.php';
require '../../conect.php';


$pdf= new FPDF("L","pt","A4");
$pdf->AddPage();


$pdf->Image("../../images/cabeca.png",100,25,400,70);
$pdf->ln(80);
$pdf->setFillColor(255,255,255);
$pdf->SetFont("helvetica","B",20);
$valor2 = mysqli_query($conn, "SELECT distinct turma from vagas where estado like 'selecionado'");
while ($row2=mysqli_fetch_array($valor2)) {

$pdf->Cell(785,30,utf8_decode("CONCEDENTES 2016 DO- 3°".$row2['turma']),1,0,"C",1);
}
$pdf->ln(30);

$pdf->setFillColor(192,192,192);

$consultar_alunos = mysqli_query($conn, "SELECT * from empresas_informatica");
$valor = mysqli_num_rows($consultar_alunos);



$pdf->SetFont("helvetica","", 12);


$pdf->Cell(125,15,utf8_decode("EMPRESA"),1,0,"C",1);
$pdf->Cell(78,15,utf8_decode("CNPJ"),1,0,"C",1);
$pdf->Cell(60,15,utf8_decode("FONE"),1,0,"C",1);
$pdf->Cell(190,15,utf8_decode("REPRESENTANTE"),1,0,"C",1);
$pdf->Cell(105,15,utf8_decode("SUB-AREA"),1,0,"C",1);
$pdf->Cell(182,15,utf8_decode("SUPERVISOR"),1,0,"C",1);
$pdf->Cell(45,15,utf8_decode("VAGAS"),1,1,"C",1);


$pdf->SetFont("helvetica","",8);
$pdf->setFillColor(255,255,255);

while ($row=mysqli_fetch_array($consultar_alunos)) {

	$pdf->Cell(125,15,strtoupper(utf8_decode($row['nome_empresa'])),1,0,"L",1);
	$pdf->Cell(78,15,strtoupper(utf8_decode($row['cnpj'])),1,0,"L",1);
	$pdf->Cell(60,15,strtoupper(utf8_decode($row['telefone'])),1,0,"L",1);
	$pdf->Cell(190,15,strtoupper(utf8_decode($row['representante'])),1,0,"L",1);
	$pdf->Cell(105,15,strtoupper(utf8_decode($row['subarea'])),1,0,"L",1);
	$pdf->Cell(182,15,strtoupper(utf8_decode($row['supervisor'])),1,0,"L",1);
	$pdf->Cell(45,15,strtoupper(utf8_decode($row['vagas'])),1,1,"C",1);

}

$pdf->output("arquivo.pdf","i");

 ?>