<?php 

require '../conect.php';


$id_empresa = $_POST['id'];

$dadosEmpresa = mysqli_query($conn, "SELECT * from empresas_informatica where id like '$id_empresa'");
$empresaArray = array();
$row = mysqli_fetch_array($dadosEmpresa);
// echo $row['id'];
// echo $row['nome_empresa'];
// echo $row['cnpj'];
// echo $row['telefone'];
// echo $row['representante'];
// echo $row['subarea'];
// echo $row['vagas'];
$empresaArray = array(
	"id"   =>$row['id'],
	"nome" =>utf8_encode($row['nome_empresa']),
	"cnpj" =>$row['cnpj'],
	"telefone"=>$row['telefone'],
	"representante"=>utf8_encode($row['representante']),
	"area"=>$row['subarea'],
	"supervisor"=>utf8_encode($row['supervisor']),
	"vagas"=>$row['vagas']

	);

echo json_encode($empresaArray);














 ?>