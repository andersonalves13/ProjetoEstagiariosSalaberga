<?php 



session_start();



if (!isset($_SESSION['loginsesao']) and !isset($_SESSION['senhasesao'])) {

        header("location: ../../index.php");

    

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

     <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <link href="../../css/font-awesome.min.css" rel="stylesheet">

    <link href="../../css/prettyPhoto.css" rel="stylesheet">

    <link href="../../css/animate.min.css" rel="stylesheet">

  <link href="../../css/main.css" rel="stylesheet">

    <link href="../../css/responsive.css" rel="stylesheet">

  

    <!--[if lt IE 9]>

    <script src="js/html5shiv.js"></script>

    <script src="js/respond.min.js"></script>

    <![endif]-->       

    <link rel="shortcut icon" href="../../images/ico/favicon.png">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">

    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">

    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">

    <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">

    <link rel="stylesheet" type="text/css" href="../../css/normalize.css" />

    <link rel="stylesheet" type="text/css" href="../../css/demo.css" />

    <link rel="stylesheet" type="text/css" href="../../css/component.css" />

 <script src="../../js/jquery.js"></script>



        
   

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

                                    <i class="fa fa-lock"><a href="../../sair.php"> Sair</a> </i></input> 

                                

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

                    <a class="navbar-brand" href="../index.php"><img src="../../images/logo.png" alt="logo" style="width: 200px;"></a>

                </div>

                

                <div class="collapse navbar-collapse navbar-right">

                    <ul class="nav navbar-nav">

                     <li><a href="../admin.php">Início</a></li>

                          <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Relatórios Mensais &nbsp;&nbsp;<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="julho.php">Julho</a></li>
                                 <li><a href="agosto.php">Agosto</a></li>
                                  <li><a href="setembro.php">Setembro</a></li>
                                   <li><a href="outubro.php">Outubro</a></li>
                                    <li><a href="novembro.php">Novembro</a></li>
                                     <li><a href="dezembro.php">Dezembro</a></li>

                            </ul>
                        </li>               

                    </ul>

                </div>

            </div><!--/.container-->

        </nav><!--/nav-->

        

    </header><!--/header-->



       

 
  <div class="container">

   <center> 
   <form action="" method="POST">

           <table id="horario">

  <thead>

  <tr id="horizontal">

  <th>Documento</th>

  <th>Aluno</th> 

  <th>Empresa</th>

  <th>SubÁrea</th>

      <th>Mês</th>

  </tr>



  </thead>

  <tfoot>

 

  <br><br>

  </tfoot>

  <tbody>





  <?php 

  require '../../conect.php';

  $selecionar = mysqli_query($conn, "SELECT * from documentos where mes like '10'");

  $valor = mysqli_num_rows($selecionar);

  if ($valor!=0) {

while ($sql=mysqli_fetch_array($selecionar)) {

echo '

<tr>

<td>'.utf8_encode('<a target="_blank" href="../../usuario/planos_estagios/10/'.$sql['documento']).'">'.utf8_encode($sql["documento"]).'</a>'.'</td>

<td>'.utf8_encode($sql['nome_aluno']).'</td>

<td>'.utf8_encode($sql['nome_empresa']).'</td>

<td>'.$sql['subarea'].'</td>
<td>'.$sql['mes'].'</td>

</tr>

 ' ;

    }



      }else{

         echo '<td colspan="5">Não foram encontrados relatórios desse mês</td>';

      }

      ?>

  </tbody>

  </table>

  </form></center>
</div>

<br><br><br><br><br><br><br><br><br><br><br>
  <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                 &copy;&nbsp;EEEP Salaberga Torquato Gomes de Matos&nbsp;-&nbsp;<a target="" href="#" title="">EEEP Salaberga</a>
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                       <li><a href="julho.php">Julho</a></li>
                        <li class="active"><a href="agosto.php">Agosto</a></li>
                        <li><a href="setembro.php">Setembro</a></li> 
                         <li><a href="outubro.php">Outubro</a></li> 
                          <li><a href="novembro.php">Novembro</a></li> 
                           <li><a href="dezembro.php">Dezembro</a></li> 
                    </ul>
                </div>
            </div>
        </div>
    </footer>

      

              
<script src="../../js/jquery.js"></script>

   
    <script src="../../js/bootstrap.min.js"></script>

    <script src="../../js/jquery.prettyPhoto.js"></script>

    <script src="../../js/jquery.isotope.min.js"></script>

    <script src="../../js/main.js"></script>

    <script src="../../js/wow.min.js"></script>

    <script src="../../js/jquery.stickyheader.js"></script>


</body>

</html>