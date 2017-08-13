<?php 

require 'conect.php';


$loginRecuperar = $_POST['recupLogin'];


$consulta = mysqli_query($conn, "SELECT * from turma_informatica where email like '$loginRecuperar'");
$valor = mysqli_num_rows($consulta);
if($valor!=0){
$userLogin = array();
$arrayUser = mysqli_fetch_array($consulta); 

$de = "estagiosalaberga@gmail.com";
$assunto = "Login e Senha para estagiosalaberga.hol.es";

$body = 'Login: ' . $arrayUser['login']. "\n\n" . 'Senha: '.base64_decode($arrayUser['senha']);

$success = @mail($loginRecuperar, $assunto, $body, 'De: <'.$de.'>');


$userLogin = array(
	"recupLogin"=>$arrayUser['email'],
	"loginRecup"=>$arrayUser['login']
	);

echo json_encode($userLogin);
}
else{
	print false;
}


 ?>