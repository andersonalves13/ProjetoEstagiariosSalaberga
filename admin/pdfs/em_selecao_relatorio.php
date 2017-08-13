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

$pdf->Cell(785,30,"ALUNOS EM SELE��O - 3�".$row2['turma'],1,0,"C",1);
}

$pdf->ln(30);
$consultar_alunos = mysqli_query($conn, "SELECT * from vagas where estado like 'em selecao'");
$valor = mysqli_num_rows($consultar_alunos);

$pdf->setFillColor(192,192,192);
$pdf->SetFont("helvetica","", 12);

$pdf->Cell(200,20,"ALUNO",1,0,"C",1);
$pdf->Cell(180,20,"CONCEDENTE",1,0,"C",1);
$pdf->Cell(115,20,"SUPERVISOR",1,0,"C",1);
$pdf->Cell(120,20,"SUB-AREA",1,0,"C",1);
$pdf->Cell(80,20,utf8_decode("FONE"),1,0,"C",1);
$pdf->Cell(90,20,("SITUA��O"),1,1,"C",1);



$pdf->SetFont("helvetica","", 8);
$pdf->setFillColor(255,255,255);
if($valor!=0){
while ($row=mysqli_fetch_array($consultar_alunos)) {

	$pdf->Cell(200,15,strtoupper(utf8_decode($row['nome_aluno'])),1,0,"L",1);
	$pdf->Cell(180,15,strtoupper(utf8_decode($row['nome_empresa'])),1,0,"L",1);
	$pdf->Cell(115,15,strtoupper(utf8_decode($row['supervisor'])),1,0,"L",1);
	$pdf->Cell(120,15,strtoupper(utf8_decode($row['subarea'])),1,0,"L",1);
	$pdf->Cell(80,15,strtoupper(utf8_decode($row['telefone'])),1,0,"L",1);
	$pdf->Cell(90,15,strtoupper($row['estado']),1,1,"L",1);

}
}
else{

$pdf->Cell(0,15,strtoupper("N�o foram encontrados alunos em sele��o"),1,0,"C",1);


}
$pdf->output("arquivo.pdf","i");

 ?>