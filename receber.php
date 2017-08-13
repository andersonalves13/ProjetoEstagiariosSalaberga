<?php 
session_start();
require("conect.php");



$login=$_POST['loginUser'];
$senha=$_POST['senhaUser'];

$login= str_replace('%', ' ', $login);
$senha= str_replace('%', ' ', $senha);

$selecionar=mysqli_query($conn, "SELECT * from login where login like '$login'");

$row = mysqli_fetch_array($selecionar);
$codificacao = base64_decode($row['senha']);
if($codificacao){
	if($senha === $codificacao){
			$user = array();

			$_SESSION['loginsesao'] = $row['login'];
			$_SESSION['senhasesao'] = $row['senha'];

			$user = array(
			"loginUser" =>$row['login'],
			"tipoUser"  =>$row['tipo']
			);

			echo json_encode($user);


	}
	else{
	print false;
}
}






// if ($valor>0) {
// 	$_SESSION['loginsesao']=$login;
// 	$_SESSION['senhasesao']=$senha;
// 	header("location: admin/admin.php");
// }
// elseif ($valor_usuario>0) {
// 	$_SESSION['loginsesao']=$login;
// 	$_SESSION['senhasesao']=$senha;
// 	header("location: usuario/usuario.php");
// }
// else{
// 		header("location: autenticar.php");
// 		}

 ?>