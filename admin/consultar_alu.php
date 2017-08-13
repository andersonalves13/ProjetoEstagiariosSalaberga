<?php 

session_start();

if (!isset($_SESSION['loginsesao']) and !isset($_SESSION['senhasesao'])) {
        header("location: ../index.php");
    
}



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Administrador</title>

      <!-- core CSS -->
      <link href="../css/bootstrap.min.css" rel="stylesheet">
      <link href="../css/font-awesome.min.css" rel="stylesheet">
      <link href="../css/prettyPhoto.css" rel="stylesheet">
      <link href="../css/animate.min.css" rel="stylesheet">
      <link href="../css/main.css" rel="stylesheet">
      <link href="../css/responsive.css" rel="stylesheet">

      <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->       
      <link rel="shortcut icon" href="../images/ico/favicon.png">
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
      <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">
      <link rel="stylesheet" type="text/css" href="../css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="../css/demo.css" />
    <link rel="stylesheet" type="text/css" href="../css/component.css" />
      <script src="../js/jquery.js"></script>

      <link rel="stylesheet" type="text/css" href="css10/set1.css" />
      <script type="text/javascript">

      $(document).ready(function () {
      $('table#horario tbody tr:odd').addClass('impar');

      $('table#horario tbody tr:even').addClass('par');
      $('table#horario tbody tr').hover(
      function () {
      $(this).addClass('destacar');
      },
      function () {
      $(this).removeClass('destacar');
      });

      });



      

      </script>

</head><!--/head-->

<body>

          <header id="header">
          <div class="top-bar">
          <div class="container">
          <div class="row">
          <div class="col-sm-6 col-xs-4">
          <div class="top-number"><p><i class="fa fa-phone-square"></i>  (85) 3341-3990 &nbsp;&nbsp;<i class="fa fa-user">&nbsp;<?php echo "Seja bem Vindo ".$_SESSION['loginsesao']; ?></i></p></div>

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


          <a class="navbar-brand" href="../index.php"><img src="../images/logo.png" alt="logo" style="width: 200px;"></a>
          </div>

          <div class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
          <li><a href="admin.php">Início</a></li>
          <li class="active"><a href="consultar_alu.php">Consultar Alunos</a></li>
          <li><a href="atualizar_alu.php">Atualizar Alunos</a></li>
          <li><a href="deletar_alu.php">Deletar Alunos</a></li>


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
		
    </header><!--/header-->

       
      <div class="container">




      <center>
      <br><br>
      <form action="" method="POST">
      <div class="center wow fadeInDown">
      <?php
      require '../conect.php';
      $valor2 = mysqli_query($conn, "SELECT distinct turma from turma_informatica where estado like 'selecionado'");
while ($row2=mysqli_fetch_array($valor2)) {

echo '<h2>Alunos de Informatica Do- 3°'.$row2['turma'].'</h2>';
}
     
?>
      <?php 

if (isset($_POST['btn_concluir']) || isset($_POST['btn_concluir2'])) {
 
  echo "<script>redirect()</script>";
   echo "<center><b>Aluno locado com sucesso</b></center>";

}
    ?>
      </div>
      <table>
      <thead>
      <tr>

      <th>Aluno</th>
      <th>Endereço</th>
      <th>Semestre</th>
      <th>Bairro</th>
      <th>Cidade</th> 
      <th>Telefone</th>
      <th>1º Opção</th> 
      <th>2º Opção</th>
      <th>Situação</th>   
      </tr>

      </thead>
      <tfoot>
      
      <br><br>
      </tfoot>
      <tbody>







      <?php 
      require '../conect.php';
      // $sub=$_POST['sub'];
      //  $nom_empresa=$_POST['nome_empresa'];
      //   $super=$_POST['supervisor'];
      //   $vagas=$_POST['vagas'];
      //   $id_empresa=$_POST['id_empresa'];


      $aluno = mysqli_query($conn, "SELECT * from turma_informatica order by nome");
      $valor_aluno = mysqli_num_rows($aluno);
      if ($valor_aluno !=0) {
      while ($alunoArray = mysqli_fetch_array($aluno)) {
      $id_aluno=$alunoArray['id'];
      $nome_aluno=$alunoArray['nome'];
      $turma=$alunoArray['turma'];
      $sub=$alunoArray['sub_area'];
      $sub2=$alunoArray['sub_area2'];
      echo '
      <tr>
      <td>'.utf8_encode($alunoArray['nome']).'</td>
      <td>'.utf8_encode($alunoArray['endereco']).'</td>
      <td>'.$alunoArray['semestre'].'</td>
      <td>'.utf8_encode($alunoArray['bairro']).'</td>
      <td>'.utf8_encode($alunoArray['cidade']).'</td>
      <td>'.$alunoArray['telefone'].'</td>
      <td>'.$sub.'</td>
      <td>'.$sub2.'</td>
      <td>'.$alunoArray['estado'].'</td>
      </tr></form>
      ' ;
      }
      }else{
      echo '<td colspan="10">Não foram encontrados alunos com essa SubÁrea</td>';
      }





      ?>

      </tbody>
      </table>
      </form>
      </center>
      </div>

      <br><br>
        <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                 &copy;&nbsp;EEEP Salaberga Torquato Gomes de Matos&nbsp;-&nbsp;<a target="" href="#" title="">EEEP Salaberga</a>
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                      <li><a href="admin.php">Home</a></li>
                      <li><a href="consultar_alu.php">Consultar Alunos</a></li>
                      <li><a href="atualizar_alu.php">Atualizar</a></li> 
                      <li><a href="deletar_alu.php">Deletar</a></li> 
                    </ul>
                </div>
            </div>
        </div>
    </footer>

 <script src="../js/jquery.js"></script>
   
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/jquery.isotope.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/jquery.stickyheader.js"></script>
</body>
</html>