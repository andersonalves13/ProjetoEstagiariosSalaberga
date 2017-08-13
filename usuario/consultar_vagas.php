<?php 



session_start();
require '../conect.php';


if (!isset($_SESSION['loginsesao']) and !isset($_SESSION['senhasesao'])) {

        header("location: ../index.php");

    

}
$nomeLogado = $_SESSION['loginsesao']; 


$consulta_dados = mysqli_query($conn, "SELECT * from vagas where nome_aluno = (SELECT nome from turma_informatica where login like '$nomeLogado')");
$row= mysqli_fetch_array($consulta_dados);






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

      <link rel="stylesheet" type="text/css" href="../css/normalize.css" />
      <link rel="stylesheet" type="text/css" href="../css/demo.css" />
      <link rel="stylesheet" type="text/css" href="../css/component.css" />

      <link rel="stylesheet" type="text/css" href="../css/modal_relatorio.css">
      <script src="../js/jquery.js"></script>
      <script type="text/javascript" src="../js/ajax.js"></script>


      <script src="../js/html5shiv.js"></script>

      <script src="../js/respond.min.js"></script>



      <link rel="shortcut icon" href="../images/ico/favicon.png">

      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">

      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">

      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">

      <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">



  

</head><!--/head-->



<body onload="toogle_disabled(true)">



    <header id="header">

        <div class="top-bar">

            <div class="container">

                <div class="row">

                    <div class="col-sm-6 col-xs-4">

                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  (85) 3341-3990 &nbsp;&nbsp;<i class="fa fa-user">&nbsp;<?php echo "Seja bem Vindo ".$_SESSION['loginsesao']; $usuario = $_SESSION['loginsesao'];?></i></p></div>

                        

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

                        <li><a href="cadastro_usuario.php">Cadastro</a></li>

                        <li class="active"><a href="consultar_vagas.php">Consultar Vagas</a></li>

  <li><a href="#" class="relatorioMensal" style="background-color: #c52d2f; color: white;">Enviar Relatório Mensal</a></li>

                      

                      

                        <!-- <li class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>

                            <ul class="dropdown-menu">

                                <li><a href="blog-item.html">Blog Single</a></li>

                                <li><a href="pricing.html">Pricing</a></li>

                                <li><a href="404.html">404</a></li>

                                <li><a href="shortcodes.html">Shortcodes</a></li>

                            </ul>

                        </li> -->

                       

                                             

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

       

			<div class="container">

          



   <center> <form action="" method="POST">

           <table id="horario">

  <thead>

  <tr>



  <th>Empresa</th>

  <th>CNPJ</th>

  <th>Telefone</th>

  <th>Representante</th>

  <th>SubÁrea</th>

  <th>Supervisor</th>

  <th>WhatsApp</th> 

  <th>Vagas</th> 

  </tr>



  </thead>

  <tfoot>


  <br><br>

  </tfoot>

  <tbody>





  <?php 

  require '../conect.php';
  $nomeLogado = $_SESSION['loginsesao'];
$selecionar = mysqli_query($conn, "SELECT * from empresas_informatica where subarea = (SELECT sub_area from turma_informatica where login like '$nomeLogado') || subarea = (SELECT sub_area2 from turma_informatica where login like '$nomeLogado') order by nome_empresa");

  $valor = mysqli_num_rows($selecionar);

  if ($valor!=0) {

while ($sql=mysqli_fetch_array($selecionar)) {

      $id_empresa=$sql['id'];

   $subarea = $sql['subarea'];

    $nome_empresa = $sql['nome_empresa'];

     $supervisor = $sql['supervisor'];

      $vagas = $sql['vagas'];



echo '

<tr>



<td>'.utf8_encode($sql['nome_empresa']).'</td>

<td>'.$sql['cnpj'].'</td>

<td>'.$sql['telefone'].'</td>

<td>'.utf8_encode($sql['representante']).'</td>

<td>'.$subarea.'</td>

<td>'.utf8_encode($sql['supervisor']).'</td>

<td>'.$sql['whats'].'</td>

<td>'.$sql['vagas'].'</td>

</tr>

 ' ;

    }



      }else{

         echo '<td>Não foram encontradas empresas</td>';

      }

      ?>

  </tbody>

  </table>

  </form>



            

          
            </form>

        </div><!-- /container -->

      </center>
      
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