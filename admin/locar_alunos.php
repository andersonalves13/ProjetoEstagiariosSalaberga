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







      <link rel="stylesheet" type="text/css" href="../css10/set1.css" />



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















      function redirect() {







      setTimeout("window.location = 'locar_alunos.php'",3000);



      }











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











          <a class="navbar-brand" href="../index.html"><img src="../images/logo.png" alt="logo" style="width: 200px;"></a>



          </div>







          <div class="collapse navbar-collapse navbar-right">



          <ul class="nav navbar-nav">



          <li><a href="admin.php">Início</a></li>



          <li class="active"><a href="locar_alunos.php">Locar Alunos</a></li>



          <li><a href="consultar_alunos.php">Consultar Alunos em Seleção</a></li>



         











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





 <?php 



      if (isset($_POST['btn_locar'])) {



      ?>







      <center> <form action="" method="POST">

        <br><br><br><br>

         <div class="center wow fadeInDown">



      <h2>Empresas Encontradas</h2>





      <table>



      <thead>



      <tr>



      <th>Id Empresa</th>



      <th>Empresa</th>



      <th>CNPJ</th>



      <th>Telefone</th>



      <th>Representante</th>



      <th>SubÁrea</th>



      <th>Supervisor</th>



      <th>WhatsApp</th> 



      <th>Vagas</th> 



      <th>Reservar</th>   



      </tr>







      </thead>



      <tfoot>



     



      <br><br>



      </tfoot>



      <tbody>











      <?php 







      $nome_aluno=$_POST['locaraluno'];



      $turma=$_POST['turma'];



      $sub=$_POST['locarsub'];



      $id_aluno= $_POST['id_aluno'];



      $telefone=$_POST['telefone'];







      require '../conect.php';



      $selecionar = mysqli_query($conn, "SELECT * from empresas_informatica where subarea like '$sub' and vagas>=1");



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



      <td>'.$sql['id'].'</td>



      <td>'.utf8_encode($sql['nome_empresa']).'</td>



      <td>'.$sql['cnpj'].'</td>



      <td>'.$sql['telefone'].'</td>



      <td>'.utf8_encode($sql['representante']).'</td>



      <td>'.$subarea.'</td>



      <td>'.utf8_encode($sql['supervisor']).'</td>



      <td>'.$sql['whats'].'</td>



      <td>'.$sql['vagas'].'</td>



      <td>



      <form action="" method="POST">



      <input type="hidden" name="sub" value="'. $sub .'" />



      <input type="hidden" name="nome_empresa" value="'. $nome_empresa .'" />



      <input type="hidden" name="supervisor" value="'. $supervisor .'" />



      <input type="hidden" name="vagas" value="'. $vagas .'" />



      <input type="hidden" name="nome_aluno" value="'. $nome_aluno .'" />



      <input type="hidden" name="turma" value="'. $turma .'" />



      <input type="hidden" name="telefone_aluno" value="'. $telefone .'" />



      <input type="hidden" name="id_aluno" value="'. $id_aluno .'" />







      <input type="submit" class="btn btn-success" name="btn_concluir" value="Confirmar"></td>



      </tr></form>



      ' ;



      }







      }else{



      echo '<td>Não foram encontradas empresas</td>';



      }



      }



      ?>



      </tbody>



      </table>



      </form>











      <br><br><br>







      <?php 



      if (isset($_POST['btn_locar2'])) {



      ?>







      <center> <form action="" method="POST">

         <div class="center wow fadeInDown">



      <h2>Empresas Encontradas</h2>



      <table>



      <thead>



      <tr>



      <th>Id Empresa</th>



      <th>Empresa</th>



      <th>CNPJ</th>



      <th>Telefone</th>



      <th>Representante</th>



      <th>SubÁrea</th>



      <th>Supervisor</th>



      <th>WhatsApp</th> 



      <th>Vagas</th> 



      <th>Reservar</th>   



      </tr>







      </thead>



      <tfoot>



      



      <br><br>



      </tfoot>



      <tbody>











      <?php 







      $nome_aluno=$_POST['locaraluno'];



      $turma=$_POST['turma'];



         $telefone=$_POST['telefone'];



      $sub2=$_POST['locarsub2'];



      $id_aluno= $_POST['id_aluno'];







      require '../conect.php';



      $selecionar = mysqli_query($conn, "SELECT * from empresas_informatica where subarea like '$sub2' and vagas>=1");



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



      <td>'.$sql['id'].'</td>



      <td>'.utf8_encode($sql['nome_empresa']).'</td>



      <td>'.$sql['cnpj'].'</td>



      <td>'.$sql['telefone'].'</td>



      <td>'.utf8_encode($sql['representante']).'</td>



      <td>'.$subarea.'</td>



      <td>'.utf8_encode($sql['supervisor']).'</td>



      <td>'.$sql['whats'].'</td>



      <td>'.$sql['vagas'].'</td>



      <td>



      <form action="" method="POST">



      <input type="hidden" name="sub2" value="'. $sub2 .'" />



      <input type="hidden" name="nome_empresa" value="'. $nome_empresa .'" />



      <input type="hidden" name="supervisor" value="'. $supervisor .'" />



      <input type="hidden" name="vagas" value="'. $vagas .'" />



      <input type="hidden" name="nome_aluno" value="'. $nome_aluno .'" />



      <input type="hidden" name="turma" value="'. $turma .'" />



      <input type="hidden" name="telefone_aluno" value="'. $telefone .'" />



      <input type="hidden" name="id_aluno" value="'. $id_aluno .'" />







      <input type="submit" class="btn btn-success" name="btn_concluir2" value="Confirmar"></td>



      </tr></form>



      ' ;



      }







      }else{



      echo '<td>Não foram encontradas empresas</td>';



      }



      }



      ?>



      </tbody>



      </table>



      </form>

      <br><br>



      </form>

      <center>





      <form action="" method="POST">



      <div class="center wow fadeInDown">

<h2>Alunos Pendentes das Vagas</h2

   

      <?php 

if (isset($_POST['btn_concluir']) || isset($_POST['btn_concluir2'])) {


  echo "<script>redirect()</script>";

   echo "<center><b><h2>Aluno locado com sucesso</h2></b></center>";


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



      <th>Locar Por Opção</th>   



      </tr>

      </thead>



      <tfoot>

      </tfoot>



      <tbody>


      <?php 



      require '../conect.php';

      // $sub=$_POST['sub'];



      //  $nom_empresa=$_POST['nome_empresa'];



      //   $super=$_POST['supervisor'];



      //   $vagas=$_POST['vagas'];



      //   $id_empresa=$_POST['id_empresa'];


      $aluno = mysqli_query($conn, "SELECT * from turma_informatica where estado like 'pendente'");

      $valor_aluno = mysqli_num_rows($aluno);

      if ($valor_aluno !=0) {

      while ($alunoArray = mysqli_fetch_array($aluno)) {

      $id_aluno=$alunoArray['id'];

      $nome_aluno=$alunoArray['nome'];

      $turma=$alunoArray['turma'];

      $telefone=$alunoArray['telefone'];

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



      <td>



      <form action="" method="POST">



      <input type="hidden" name="locarsub" value="'. $sub .'" />



      <input type="hidden" name="locarsub2" value="'. $sub2 .'" />



      <input type="hidden" name="locaraluno" value="'. $nome_aluno .'" />



      <input type="hidden" name="turma" value="'. $turma .'" />



         <input type="hidden" name="telefone" value="'. $telefone .'" />



      <input type="hidden" name="id_aluno" value="'. $id_aluno .'" />


      <input type="submit" class="btn btn-default" name="btn_locar" value="1º">



      <input type="submit" class="btn btn-default" name="btn_locar2" value="2º"></td>


      </tr></form>


      ' ;

      }


      }else{

      echo '<td>Não foram encontrados alunos </td>';


      }


      ?>

      </tbody>



      </table>
      </div><!-- /container -->


<?php 


if (isset($_POST['btn_concluir'])) {


require '../conect.php';

$locarsub=$_POST['sub'];

$nome_empresa=$_POST['nome_empresa'];

$supervisor=$_POST['supervisor'];

$vagas=$_POST['vagas'];

$turma=$_POST['turma'];

$telefone_aluno=$_POST['telefone_aluno'];

$nome_aluno=$_POST['nome_aluno'];

$id=$_POST['id_aluno'];



$inserir_vaga = mysqli_query($conn, "INSERT into vagas values('','$nome_aluno','$turma','$nome_empresa','$supervisor','$locarsub','$telefone_aluno','em selecao')");


$atualizar_estado = mysqli_query($conn,"UPDATE turma_informatica set estado='em selecao' where id like '$id'");


}



else if (isset($_POST['btn_concluir2'])) {



require '../conect.php';



$locarsub2=$_POST['sub2'];

$nome_empresa=$_POST['nome_empresa'];

$supervisor=$_POST['supervisor'];

$vagas=$_POST['vagas'];

$turma=$_POST['turma'];

$telefone_aluno=$_POST['telefone_aluno'];

$nome_aluno=$_POST['nome_aluno'];

$id=$_POST['id_aluno'];


$inserir_vaga = mysqli_query($conn, "INSERT into vagas values('','$nome_aluno','$turma','$nome_empresa','$supervisor','$locarsub2','$telefone_aluno','em selecao')");







$atualizar_estado = mysqli_query($conn,"UPDATE turma_informatica set estado='em selecao' where id like '$id'");











}



?>

</form>
</center>
</div>

<br><br><br>
  <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                 &copy;&nbsp;EEEP Salaberga Torquato Gomes de Matos&nbsp;-&nbsp;<a target="" href="#" title="">EEEP Salaberga</a>
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                      <li><a href="admin.php">Home</a></li>
                      <li><a href="locar_alunos.php">Locar</a></li>
                      <li class="active"><a href="consultar_alunos.php">Consultar Seleções</a></li> 
                      
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



    







</body>



</html>