<?php 

require '../conect.php';

$nome=utf8_decode($_POST['nomeCadastro']);
$curso = $_POST['cursoCadastro'];
$subarea=$_POST['opcao1'];
$subarea2=$_POST['opcao2'];
$endereco=utf8_decode($_POST['enderecoCadastro']);
$numero=$_POST['numeroCadastro'];
$bairro=utf8_decode($_POST['bairroCadastro']);
$cidade=utf8_decode($_POST['cidadeCadastro']);
$email = $_POST['emailCadastro'];
$login=$_POST['loginCadastro'];
$senha=$_POST['senhaCadastro'];
$telefone=$_POST['telefoneCadastro'];

$consulta_login = mysqli_query($conn, "SELECT * from turma_informatica where login like '$login' || email like '$email'");
$val_consulta = mysqli_num_rows($consulta_login);
if($val_consulta == 0){

$de = "estagiosalaberga@gmail.com";
$assunto = "Login e Senha para estagiosalaberga.hol.es";

$body = 'Nome: ' . $nome . "\n\n" . 'Curso: ' . $curso . "\n\n" . 'Assunto: ' . $subject . "\n\n" . 'Login: ' . $login. "\n\n" . 'Senha: '.$senha;

$success = @mail($email, $assunto, $body, 'De: <'.$de.'>');


$teste = base64_encode($senha);

$inserir = mysqli_query($conn, "INSERT into turma_informatica values('','$nome','$curso','$subarea','$subarea2','2016.2','$endereco','$numero','$bairro','$cidade','$email','$login','$teste','$telefone','pendente')");

$inserir_login = mysqli_query($conn, "INSERT into login values ('','$login','$teste','usu')");

print 'ok';

}

else{


print 'erro';

}



 ?>