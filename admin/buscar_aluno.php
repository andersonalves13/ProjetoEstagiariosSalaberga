<?php 


require '../conect.php';
$id_aluno=$_POST['id_aluno'];



$selecionar = mysqli_query($conn, "SELECT * from turma_informatica where id like '$id_aluno'");
$valor = mysqli_num_rows($selecionar);
$dadosAluno = array();
$sql=mysqli_fetch_array($selecionar);

$dadosAluno = array(
	"id_aluno"=>$sql['id'],
	"nomeAluno"=>$sql['nome'],
	"area1"=>$sql['sub_area'],
	"area2"=>$sql['sub_area2'],
	"turmaAluno"=>$sql['turma'],
	"emailAluno"=>$sql['email'],
	"estadoAluno"=>$sql['estado']
	);

echo json_encode($dadosAluno);





 ?>