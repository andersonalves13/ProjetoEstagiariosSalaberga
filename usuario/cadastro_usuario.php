<?php 



session_start();

require '../conect.php';



if (!isset($_SESSION['loginsesao']) and !isset($_SESSION['senhasesao'])) {

        header("location: ../index.php");

    

}
$nomeLogado = $_SESSION['loginsesao']; 


$consulta_dados = mysqli_query($conn, "SELECT * from vagas where nome_aluno = (SELECT nome from turma_informatica where login like '$nomeLogado')");
$row= mysqli_fetch_array($consulta_dados);


if (isset($_POST['btn_atualizar'])) {

  require '../conect.php';

$telefone = $_POST['telefone'];
$login = $_POST['login'];

$senha = $_POST['senha'];

$id=$_POST['id'];
$id_login=$_POST['id_login'];

$senha_criptografada = base64_encode($senha);



$_SESSION['loginsesao'] = $login;

$update = mysqli_query($conn, "UPDATE turma_informatica set telefone='$telefone',login='$login',senha='$senha_criptografada' where id like '$id'");
$update2 = mysqli_query($conn, "UPDATE login set login='$login',senha='$senha_criptografada' where id like '$id_login'");


}





 ?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">

    <meta name="author" content="">

    <title>Usuário</title>

	

	<!-- core CSS -->

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/font-awesome.min.css" rel="stylesheet">

    <link href="../css/prettyPhoto.css" rel="stylesheet">

    <link href="../css/animate.min.css" rel="stylesheet">

	<link href="../css/main.css" rel="stylesheet">

    <link href="../css/responsive.css" rel="stylesheet">

    
        
<link rel="stylesheet" type="text/css" href="../css/modal_relatorio.css">
     <script src="../js/jquery.js"></script>
     <script type="text/javascript" src="../js/ajax.js"></script>

    <script src="../js/html5shiv.js"></script>

    <script src="../js/respond.min.js"></script>

     

    <link rel="shortcut icon" href="../images/ico/favicon.png">

   <link rel="stylesheet" type="text/css" href="../css/set1.css" />

 
</head><!--/head-->



<body>



    <header id="header">

        <div class="top-bar">

            <div class="container">

                <div class="row">

      <div class="col-sm-6 col-xs-4">

      <div class="top-number"><p><i class="fa fa-phone-square"></i>  (85) 3341-3990 &nbsp;&nbsp;<i class="fa fa-user">&nbsp;<?php echo "Seja bem Vindo ".$_SESSION['loginsesao'];?></i></p></div>



      </div>

                    <div class="col-sm-6 col-xs-8">

                     

                       <div class="social2">

                          

                            <div class="search">

                                    <i class="fa fa-lock"><a href="../sair.php"> Sair</a> </i></input> 

                                

                           </div>              

                     

                         

                   </div>

                       

                    </div>

                </div>

            </div><!--/.container-->

        </div><!--/.top-bar-->



        <nav class="navbar navbar-inverse" role="banner">

            <div class="container">

                <div class="navbar-header">

                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="background-color: black;">

                        <span class="sr-only"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>



                    </button>


                    <a class="navbar-brand" href="usuario.php"><img src="../images/logo.png" alt="logo" style="width: 200px;"></a>

                </div>

				

                <div class="collapse navbar-collapse navbar-right">

                    <ul class="nav navbar-nav">

                     <li><a href="usuario.php">Início</a></li>

                        <li class="active"><a href="cadastro_usuario.php">Cadastro</a></li>

                        <li><a href="consultar_vagas.php">Consultar Vagas</a></li>
                           <li><a href="#" class="relatorioMensal" style="background-color: #c52d2f; color: white;">Enviar Relatório Mensal</a></li>

                    
                    </ul>

                </div>

            </div><!--/.container-->

        </nav><!--/nav-->

		  <div class="modal fade relatorio" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                        <div class="modal-relatorio">
                        <div class="modal-header">

                        <h4 class="modal-title" id="myModalLabel" style=""><i class="fa fa-upload">&nbsp;&nbsp;Estágio Salaberga - Dados Relatório</i></h4>
                        </div>
                        <div class="modal-body">
                        <form class="form" action="#" method="POST"  enctype="multipart/form-data" name="formUpload">
                        <div class="row">
                      
                        <input type="hidden" name="nome" value="<?php echo $row['nome_aluno']; ?>" class="form-control nome">
                        <input type="hidden" name="empresa" value="<?php echo $row['nome_empresa']; ?>" class="form-control empresa">
                        <input type="hidden" name="area" value="<?php echo $row['subarea']; ?>" class="form-control area">
                        <input type="hidden" name="telefone" value="<?php echo $row['telefone']; ?>" class="form-control telefone">
                        <input type="hidden" name="turma" value="<?php echo $row['turma']; ?>" class="form-control turma">
                        <div class="col-md-12">

                        <span><i class="fa fa-user">&nbsp;&nbsp;Nome</span></i>
                        <input type="text" class="form-control" placeholder="" name="" value="<?php echo $row['nome_aluno']; ?>" disabled>
                        <br>
                        </div>
                       
                        <div class="col-md-12">
                        <span><i class="fa fa-users">&nbsp;&nbsp;Empresa</span></i>
                        <input type="text" class="form-control" placeholder="" name="" value="<?php echo $row['nome_empresa']; ?>" disabled><br>
                        </div>
                        
                        <div class="col-md-6">
                        <span><i class="fa fa-briefcase">&nbsp;&nbsp;Área</span></i>
                        <input type="text" class="form-control" id="" placeholder="" name="" value="<?php echo $row['subarea']; ?>" disabled>
                        </div>
                        <div class="col-md-6">
                        <span><i class="fa fa-phone">&nbsp;&nbsp;Telefone</span></i>
                        <input type="text" class="form-control" id="" placeholder="" name="" value="<?php echo $row['telefone']; ?>" disabled>
                        </div>

                         <div class="col-md-12">
                         <br>
                        <span><i class="fa fa-folder-open">&nbsp;&nbsp;Escolha o arquivo em formato <b>.PDF</b></span></i>
                        <input type="file" class="form-control" id="" placeholder="" name="arquivo_pdf">
                        </div>

                        <div class="col-md-12 erro-formato">
                        <br>
                        <center><span><i class="fa fa-user">&nbsp;&nbsp; Formato Inválido. Apenas PDF</span></i></center>
                        </div>

                         <div class="col-md-12 relatorio-ok">
                        <br>
                        <center><span><i class="fa fa-file-o">&nbsp;&nbsp;Relatório Enviado com sucesso</span></i></center>
                        </div>



                        </div>

                        </div>
                        <div class="modal-footer">


                        <input type="submit" class="btn btn-danger" value="Enviar Relatório" id="relatorioEnviar" name="relatorioEnviar">
                        <input type="button" class="btn btn-success" data-dismiss="modal" value="Fechar">
                        </form>
                        </div>
                        </div>
                        </div>
                        </div>

                         <?php  

                         if (isset($_POST['relatorioEnviar'])) {
                             
                         
require '../conect.php';

$nome_aluno=$_POST['nome'];
$empresa=$_POST['empresa'];
$subarea = $_POST['area'];
$telefone = $_POST['telefone'];
$turma = $_POST['turma'];

$arq = $_FILES['arquivo_pdf'];
$pasta = 'planos_estagios/';
$permissao = array('application/pdf');
$ext = $arq['type'] == 'application/pdf';



if(!in_array($arq['type'], $permissao)){
echo'<br><br><center><h2><i class="fa fa-exclamation-circle">&nbsp;&nbsp;Somente aceitamos arquivos PDF</h2></center></i></br</br><br><br><br>';
}else{                        
$pasta= 'planos_estagios/';
date_default_timezone_set('America/Sao_Paulo');
$ano = date('Y');
$mes = date('m');

$dia = date('d');
$hora = date('H:i');

$nome = utf8_decode($arq['name']);                       
if (file_exists($pasta.$mes.'/'.$nome)) {
    echo'<br><br><center><h2><i class="fa fa-exclamation-circle">&nbsp;&nbsp;Arquivo existente!</h2></center></i></br</br><br><br><br>';

}
else{
if(move_uploaded_file($arq['tmp_name'], $pasta.$mes.'/'.$nome)){

    $inserir = mysqli_query($conn, "INSERT into documentos values('','$nome','$nome_aluno','$turma','$empresa','$subarea','$telefone','$mes','$dia','$hora')");
    echo'<br><br><center><h2><i class="fa fa-check-square-o">&nbsp;&nbsp;Plano de Est�gio Enviado com sucesso!</h2></center></i></br</br><br><br><br>';

}
else{
     echo'<br><br><center><h2><i class="fa fa-exclamation-circle">&nbsp;&nbsp;Erro, Tente novamente!</h2></center></i></br</br><br><br><br>';
}
}
}                    


}
?>
		
    

    </header><!--/header-->

    <section id="about-us">

        <div class="container">

		



  <?php 

  require '../conect.php';
   $nomeLogado = $_SESSION['loginsesao'];

  $selecionar = mysqli_query($conn, "SELECT * from turma_informatica where login like '$nomeLogado'");

   $selecionar_login = mysqli_query($conn, "SELECT * from login where login like '$nomeLogado'");

$sql=mysqli_fetch_array($selecionar);
  
$id = $sql['id'];
 
$sql_login=mysqli_fetch_array($selecionar_login);
$id_login = $sql_login['id'];


?>



  <center>
  <form action="" method="POST">
<?php 

if (isset($_POST['btn_atualizar'])) {
echo '<div class="col-md-12">
<br>
<center><span><h2><i class="fa fa-user">&nbsp;&nbsp;Dados atualizados com sucesso.</span></i></h2></center>
</div>';
  }


 ?>

  <span class="input input--hoshi">

  <label style="font-size: 13px; float: left;">

  <span>Nome Completo</span>

  </label>

  <input type="text" class="form-control" name="nome" value="<?php  echo utf8_encode($sql['nome'])?>" disabled>

  </span>


  <span class="input input--hoshi">

  <label style="font-size: 13px; float: left;">

  <span>Área 1</span>

  </label>

  <input type="text"  class="form-control" name="subarea" value="<?php  echo utf8_encode($sql['sub_area'])?>" disabled>


  </span>

  <span class="input input--hoshi">

  <label style="font-size: 13px; float: left;">

  <span>Área 2</span>

  </label>


  <input type="text" class="form-control" name="subarea2" value="<?php  echo utf8_encode($sql['sub_area2'])?>" disabled>

  </span>

  <span class="input input--hoshi">

  <label style="font-size: 13px; float: left;">

  <span>Telefone</span>

  </label>


  <input type="text" class="form-control" name="telefone" value="<?php echo $sql['telefone'];?>">

  </span>


  <span class="input input--hoshi">

  <label style="font-size: 13px; float: left;">

  <span>Login</span>

  </label>


  <input type="text" class="form-control" name="login" value="<?php echo $sql['login'];?>">

  </span>

  <span class="input input--hoshi">

  <label style="font-size: 13px; float: left;">

  <span>Senha</span>

  </label>


  <input type="text" class="form-control" name="senha" value="<?php echo base64_decode($sql['senha']);?>">


  </span>



  <input type="hidden" name="id" value="<?php  echo $id; ?>" />
  <input type="hidden" name="id_login" value="<?php  echo $id_login; ?>" />

  <br><br><br>
  <input type="submit" class="btn btn-primary" name="btn_atualizar" value="Atualizar" id="btn_atualizar">
  <br>
    
 

  </br>
  </br>
  </center>
  </form>
  </center>
  </div>
  </section>

   





			  <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                 &copy;&nbsp;EEEP Salaberga Torquato Gomes de Matos&nbsp;-&nbsp;<a target="" href="#" title="">EEEP Salaberga</a>
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                       <li><a href="usuario.php">Home</a></li>
                        <li class="active"><a href="cadastro_usuario.php">Cadastro</a></li>
                        <li><a href="consultar_vagas.php">Vagas</a></li> 
                    </ul>
                </div>
            </div>
        </div>
    </footer>

			

				

	



  

    <script src="../js/bootstrap.min.js"></script>

    <script src="../js/jquery.prettyPhoto.js"></script>

    <script src="../js/jquery.isotope.min.js"></script>

    <script src="../js/main.js"></script>

    <script src="../js/wow.min.js"></script>

    <script src="../js/jquery.stickyheader.js"></script>
</body>

</html>