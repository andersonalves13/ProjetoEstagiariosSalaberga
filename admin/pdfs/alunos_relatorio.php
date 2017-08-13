<?php 

require 'fpdf/fpdf.php';
require '../../conect.php';



$pdf= new FPDF("p","pt","A4");

$pdf->AddPage();

$pdf->setFillColor(255,255,255);



$pdf->Image("../../images/cabeca.png",100,25,400,70);

$pdf->ln(70);



$pdf->SetFont("helvetica","B",20);

$valor2 = mysqli_query($conn, "SELECT distinct turma from vagas where estado like 'selecionado'");
while ($row2=mysqli_fetch_array($valor2)) {
$pdf->Cell(545,30,"RELAÇÃO DE ALUNOS - 3°".$row2['turma'],1,0,"C",1);
}





$consultar_alunos = mysqli_query($conn, "SELECT * from turma_informatica order by nome");

$valor = mysqli_num_rows($consultar_alunos);




$pdf->ln(30);
$pdf->setFillColor(192,192,192);
$pdf->SetFont("helvetica","", 8);

$pdf->Cell(15,15,"",1,0,"L",1);

$pdf->Cell(180,15,"NOME",1,0,"C",1);

$pdf->Cell(105,15,("1º OPÇÃO"),1,0,"C",1);

$pdf->Cell(105,15,("2º OPÇÃO"),1,0,"C",1);

$pdf->Cell(70,15,("TELEFONE"),1,0,"C",1);

$pdf->Cell(70,15,("SITUAÇÃO"),1,1,"C",1);







$pdf->SetFont("helvetica","",7);
$pdf->setFillColor(255,255,255);


$a=1;
while ($row=mysqli_fetch_array($consultar_alunos)) {
if($a<10){
	$pdf->Cell(15,15,"0".$a,1,0,"L",1);
}else{
	$pdf->Cell(15,15,$a,1,0,"L",1);
}
	$pdf->Cell(180,15,strtoupper(utf8_decode($row['nome'])),1,0,"L",1);

	$pdf->Cell(105,15,strtoupper(utf8_decode($row['sub_area'])),1,0,"L",1);

	$pdf->Cell(105,15,strtoupper(utf8_decode($row['sub_area2'])),1,0,"L",1);

	$pdf->Cell(70,15,$row['telefone'],1,0,"L",1);

	$pdf->Cell(70,15,strtoupper($row['estado']),1,1,"L",1);

$a++;
   }




$pdf->output("arquivo.pdf","i");



 ?>