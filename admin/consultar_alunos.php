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
    <link href="css/responsive.css" rel="stylesheet">
	
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

        <link rel="stylesheet" type="text/css" href="../css10/set1.css" />
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
            marginLeft: '-170px',
        })
        $('.dica').focus(function () {
            $(this).next().fadeIn(1500);
        }).blur(function  () {
            $(this).next().fadeOut(1500);
        })



    });
     function redirect() {
      window.location = 'consultar_alunos.php';
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
                   
                 
                    <a class="navbar-brand" href="../index.php"><img src="../images/logo.png" alt="logo" style="width: 200px;"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                     <li><a href="admin.php">Início</a></li>
                        <li><a href="locar_alunos.php">Locar Alunos</a></li>
                        <li class="active"><a href="consultar_alunos.php">Consultar Alunos em Seleção</a></li>
                       
                                             
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->

       <div class="center wow fadeInDown">
      <h2>Alunos em Seleção</h2>
      </div>
			<div class="container">
            
       <center> 
       <form action="" method="POST">
           <table id="horario">
  <thead>
  <tr id="horizontal">
  <th>Aluno</th>
  <th>Turma</th>
  <th>Empresa</th>
  <th>Supervisor</th>
  <th>SubÁrea</th>
  <th>Opção</th>
  </tr>
 
  </thead>
  <tfoot>
  
  <br><br>
  </tfoot>
  <tbody>


  <?php 
  require '../conect.php';
  $selecionar = mysqli_query($conn, "SELECT * from vagas where estado like 'em selecao'");
  $valor = mysqli_num_rows($selecionar);
  if ($valor!=0) {
while ($sql=mysqli_fetch_array($selecionar)) {
  $nome_empresa=$sql['nome_empresa'];
  $subarea=$sql['subarea'];
  $id=$sql['id'];
  $nome_aluno=$sql['nome_aluno'];

echo '
<form action="" method="POST">
<tr>
<td>'.$sql['nome_aluno'].'</td>
<td>'.$sql['turma'].'</td>
<td>'.$sql['nome_empresa'].'</td>
<td>'.$sql['supervisor'].'</td>
<td>'.$sql['subarea'].'</td>
<td>
<input type="hidden" name="empresa" value="'.$nome_empresa.'">
<input type="hidden" name="subarea" value="'.$subarea.'">
<input type="hidden" name="id" value="'.$id.'">
<input type="hidden" name="nome_aluno" value="'.$nome_aluno.'">
<input type="submit" class="btn btn-success" name="btn_selecionar" value="Confirmar">
<input type="submit" class="btn btn-danger" name="btn_cancelar" value="Cancelar"></td>
</form>
</tr>
 ' ;
    }

      }else{
         echo '<td>Não foram encontrados Alunos</td>';
      }
      ?>
  </tbody>
  </table>
  </form>
  <?php 

    if (isset($_POST['btn_selecionar'])) {

      require '../conect.php';

      $empresa = $_POST['empresa'];
       $nome_aluno = $_POST['nome_aluno'];
      $subarea = $_POST['subarea'];
       $id_aluno = $_POST['id'];
      

      $selecionar = mysqli_query($conn, "SELECT vagas from empresas_informatica where nome_empresa like '$empresa' and subarea like '$subarea'");
      while($dados = mysqli_fetch_array($selecionar)){
      $atualizandoDados = $dados['vagas']-1;
      }
      $consulta2 = mysqli_query($conn,"UPDATE empresas_informatica set vagas = '$atualizandoDados' where nome_empresa like '$empresa' and subarea like '$subarea'");
    
      $update = mysqli_query($conn, "UPDATE vagas set estado='selecionado' where id like '$id_aluno'");

       
          $atualiza_aluno = mysqli_query($conn, "UPDATE turma_informatica set estado='selecionado' where nome like '$nome_aluno' and sub_area like '$subarea'");
       echo "<script>redirect()</script>";
      
    }
    if(isset($_POST['btn_cancelar'])) {
             $id_aluno = $_POST['id'];

            $update = mysqli_query($conn, "UPDATE vagas set estado='Nao Selecionado' where id like '$id_aluno'");

       $atualiza_aluno = mysqli_query($conn, "UPDATE turma_informatica set estado='pendente' where nome like '$nome_aluno' and sub_area like '$subarea'");
       echo "<script>redirect()</script>";
    }







   ?>

            
               <br><br><br>
                    
            
           
            <br><br><br><br>
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
    <script src="../js/jquery.stickyheader.js"></script>

</body>
</html>