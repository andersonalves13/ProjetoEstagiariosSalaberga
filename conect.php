<?php 

$server="localhost";
$user="root";
$pass="";
$banco="plataforma_estagiarios";

$conn=mysqli_connect($server,$user,$pass);
$bd=mysqli_select_db($conn,$banco);


 ?>