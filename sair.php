<?php 



session_start();

unset($_SESSION['loginsesao']);
unset($_SESSION['senhasesao']);
session_destroy();

header("location: index.php");





 ?>