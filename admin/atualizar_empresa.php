<?php 

 require '../conect.php';

$id = $_POST['id'];
$empresa = $_POST['nome'];
$cnpj = $_POST['cnpj'];
$telefone = $_POST['telefone'];
$representante = $_POST['representante'];
$subarea = $_POST['area'];
$supervisor = $_POST['supervisor'];
$whats = $_POST['whats'];
$vagas = $_POST['vagas'];


$update = mysqli_query($conn, "UPDATE empresas_informatica set nome_empresa='$empresa',cnpj='$cnpj',telefone='$telefone',representante='$representante',subarea='$subarea',supervisor='$supervisor', whats='$whats',vagas='$vagas' where id like '$id'");

print true;





 ?>