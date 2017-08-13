<?php 

require 'conect.php';

$id = $_POST['id_user'];
$senha = $_POST['senha1'];

$consulta_login = mysqli_query($conn, "SELECT * from turma_informatica where id like '$id'");
$valorUser = mysqli_num_rows($consulta_login);

if ($valorUser!=0) {
	$array = mysqli_fetch_array($consulta_login);
	$login = $array['login'];

$atualizar = mysqli_query($conn, "UPDATE turma_informatica set senha='$senha' where id like '$id'");
$atualizar_login = mysqli_query($conn, "UPDATE login set senha='$senha' where login like '$login'");



}

else{
	print false;
}





 ?>