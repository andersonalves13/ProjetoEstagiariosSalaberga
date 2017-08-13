<?php 

session_start();

if (!isset($_SESSION['loginsesao']) and !isset($_SESSION['senhasesao'])) {
        header("location: index.php");
    
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
     <script src="js/jquery.js"></script>

        <link rel="stylesheet" type="text/css" href="css10/set1.css" />
        <script type="text/javascript">
    function Mascara (objeto) {
        if (objeto.value.length == 0) 
            objeto.value = '(' + objeto.value;

        if (objeto.value.length == 3)
            objeto.value = objeto.value+ ')';

        if (objeto.value.length == 9)
            objeto.value = objeto.value+'-';
        
    }


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
    $(document).ready(function  () {
        $('.dica + span').css({
            display: 'none',
            border: '1px solid #add6ef',
            padding: '2px 4px',
            background: '#d6e2e5',
          
        })
        $('.dica').focus(function () {
            $(this).next().fadeIn(1500);
        }).blur(function  () {
            $(this).next().fadeOut(1500);
        })



    });

    function redirect() {
      window.location = '../locar_alunos.php';
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
                                    <i class="fa fa-lock"><a href="sair.php"> Sair</a> </i></input> 
                                
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
                   
                 
                    <a class="navbar-brand" href="index.html"><img src="../images/logo.png" alt="logo" style="width: 200px;"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                     <li><a href="admin.php">Início</a></li>
                        <li><a href="empresas.php">Cadastrar Empresas</a></li>
                        <li class="active"><a href="consultar_em.php">Consultar Empresas</a></li>
                        <li><a href="atualizar.php">Atualizar Empresas</a></li>
                         <li ><a href="deletar.php">Deletar Empresas</a></li>
                        
                      
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
            

  <tbody>




  </tbody>
  </table>

   <center> <form action="" method="POST">
           <table id="horario">
  <thead>
  <tr>
  <th>ID Empresa</th>
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
  $selecionar = mysqli_query($conn, "SELECT * from empresas_informatica order by nome_empresa");
  $valor = mysqli_num_rows($selecionar);
  if ($valor!=0) {
while ($sql=mysqli_fetch_array($selecionar)) {
      $subarea=$sql['subarea'];
   

echo '
<tr>
<td class="user-name">'.$sql['id'].'</td>
<td class="user-name">'.utf8_encode($sql['nome_empresa']).'</td>
<td class="user-name">'.$sql['cnpj'].'</td>
<td class="user-name">'.$sql['telefone'].'</td>
<td class="user-name">'.utf8_encode($sql['representante']).'</td>
<td class="user-name">'.$subarea.'</td>
<td class="user-name">'.utf8_encode($sql['supervisor']).'</td>
<td class="user-name">'.$sql['whats'].'</td>
<td class="user-name">'.$sql['vagas'].'</td>
</tr></form>
 ' ;
    }

      }else{
         echo '<td>Não foram encontradas empresas</td>';
      }
      ?>
  </tbody>
  </table>
  </form>

            
               <br><br><br>
                    
            
           
           
            </form>
        </div><!-- /container -->

              <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                 &copy;&nbsp;EEEP Salaberga Torquato Gomes de Matos&nbsp;-&nbsp;<a target="" href="#" title="">EEEP Salaberga</a>
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                      <li><a href="admin.php">Home</a></li>
                      <li><a href="empresas.php">Cadastrar</a></li>
                      <li class="active"><a href="consultar_em.php">Consultar</a></li> 
                      <li><a href="atualizar.php">Atualizar</a></li> 
                      <li><a href="deletar.php">Deletar</a></li> 
                    </ul>
                </div>
            </div>
        </div>
    </footer>
        <script src="../js/jquery.stickyheader.js">
        </script><script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.prettyPhoto.js"></script>
        <script src="../js/jquery.isotope.min.js"></script>
        <script src="../js/main.js"></script>
        <script src="../js/wow.min.js"></script>
        <script src="../js3/jquery.stickyheader.js"></script>
			

</body>
</html>