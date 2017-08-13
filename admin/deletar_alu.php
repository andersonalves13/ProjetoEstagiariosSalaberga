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

      

        <script type="text/javascript">

    function Mascara (objeto) {

        if (objeto.value.length == 0) 

            objeto.value = '(' + objeto.value;



        if (objeto.value.length == 3)

            objeto.value = objeto.value+ ')';



        if (objeto.value.length == 9)

            objeto.value = objeto.value+'-';



        

    }

    </script>

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

        <script type="text/javascript">

          

          function redirect() {

           window.location='deletar_alu.php';



          }

        </script>

            

            <script src="../js/jquery(2).js"></script>

   

</head><!--/head-->



<body>



    <header id="header">

        <div class="top-bar">

            <div class="container">

                <div class="row">

                    <div class="col-sm-6 col-xs-4">

                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  (85) 3101-2783 &nbsp;&nbsp;<i class="fa fa-user">&nbsp;<?php echo "Seja bem Vindo ".$_SESSION['loginsesao']; ?></i></p></div>

                        

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

                   

                 

                    <a class="navbar-brand" href="../index.php"><img src="../images/logo.png" alt="logo" style="width: 200px"></a>

                </div>

				

                <div class="collapse navbar-collapse navbar-right">

                    <ul class="nav navbar-nav">

                            

                        <li><a href="admin.php">Início</a></li>

                        <li ><a href="consultar_alu.php">Consultar Alunos</a></li>

                        <li><a href="atualizar_alu.php">Atualizar Alunos</a></li>

                        <li class="active"><a href="deletar_alu.php">Deletar Alunos</a></li>

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

<div class="center wow fadeInDown">

     <?php

      require '../conect.php';

      $valor2 = mysqli_query($conn, "SELECT distinct turma from turma_informatica where estado like 'selecionado'");

while ($row2=mysqli_fetch_array($valor2)) {



echo '<h2>Deletar Alunos Do- 3°'.$row2['turma'].'</h2>';

}

     

?>

       </div>

			<div class="container">

            

       <center> 

       <form action="" method="POST">

           <table id="horario">

  <thead>

  <tr id="horizontal">

  <th>Aluno</th>

  <th>SubÁrea</th>

  <th>Endereço</th>

  <th>Bairro</th> 

  <th>Telefone</th>

  <th>Opção</th>

   

  </tr>

 

  </thead>

  <tfoot>

  

  <br><br>

  </tfoot>

  <tbody>





  <?php 

  require '../conect.php';

  $selecionar = mysqli_query($conn, "SELECT * from turma_informatica order by nome");

  $valor = mysqli_num_rows($selecionar);

  if ($valor!=0) {

while ($sql=mysqli_fetch_array($selecionar)) {

  $id=$sql['id'];



echo '

<tr>

<td>'.utf8_encode($sql['nome']).'</td>

<td>'.utf8_encode($sql['sub_area']).'</td>

<td>'.utf8_encode($sql['endereco']).'</td>

<td>'.utf8_encode($sql['bairro']).'</td>

<td>'.$sql['telefone'].'</td>



<td>

<form action="" method="POST">

<input type="hidden" name="id" value="'. $id .'"/>

<input type="submit" class="btn btn-primary" name="btn_del" value="Deletar"></td>

</tr></form>' ;

    }



      }else{

         echo '<td>Não foram encontradas Alunos</td>';

      }

      ?>

  </tbody>

  </table>

  </form>



            

               <br><br><br>

                    

            

           

            <br><br><br><br>

            </form>

        </div><!-- /container -->

        <?php  if (isset($_POST['btn_del'])) {



    $id_aluno=$_POST['id'];



    $deletar_empresa = mysqli_query($conn, "DELETE from turma_informatica where id like '$id_aluno'");

    echo "<script>redirect()</script>";

    echo "<center>Aluno Apagada com sucesso</center>";

}

    ?>

</center>
</div>
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

