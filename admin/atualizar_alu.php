<?php 


session_start();

if (!isset($_SESSION['loginsesao']) and !isset($_SESSION['senhasesao'])) {
        header("location: ../index.php");
    
}




require '../conect.php';
    
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Administrador</title>
    <link rel="stylesheet" type="text/css" href="../css/tabela.css">
    <script src="../js/jquery.js"></script>

    <script type="text/javascript" src="../js/ajax.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/set1.css">
    <script type="text/javascript">

    $(document).ready(function () {
        $('table#horario tbody tr:odd').addClass('impar');

        $('table#horario tbody tr:even').addClass('par');
       

    });
    
function optionCheck(){
        var option = document.getElementById("setor").value;
        if(option == "dois_mais"){
            document.getElementById("dois_mais").style.visibility ="visible";
        }
        else{
            document.getElementById("dois_mais").style.visibility ="hidden";
        }
    }


function ok() {
   window.location='atualizar_alu.php';
    
}



</script>

    
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
     <link rel="stylesheet" type="text/css" href="../css10/set1.css" />
   
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
                   
                 
                    <a class="navbar-brand" href="admin.php"><img src="../images/logo.png" alt="logo" style="width: 200px;"></a>
                </div>
        
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                     <li><a href="admin.php">Início</a></li>
                      <li><a href="consultar_alu.php">Consultar Alunos</a></li>
                      <li class="active"><a href="atualizar_alu.php">Atualizar Alunos</a></li>
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

    <section id="feature" class="transparent-bg">
        <div class="container">
            <center> 
            <form action="" method="POST">

 
<span class="input input--hoshi">

<label style="font-size: 13px; ">

<span>Nome do Aluno</span>

</label>
<select name="atua_alunos" class="form-control atua_alunos">



<?php 

require '../conect.php';



$selecionar = mysqli_query($conn, "SELECT * from turma_informatica order by nome");



$valor = mysqli_num_rows($selecionar);



if ($valor!=0) {



while ($sql=mysqli_fetch_array($selecionar)) {



echo '<option value="'.$sql['id'].'">'.utf8_encode($sql['nome']).'</option>' ;

}



}else{

echo 'Não foram encontradas nenhuma empresa';

}

?>

</select>


</span>

<br>

<!-- <span class="input input--hoshi">

<label style="font-size: 13px; float: left;">

<span>Supervisor</span>

</label>
<input class="form-control" type="text" id="input-6"  name="supervisor" required/>


</span> -->

<span class="input input--hoshi">

<label style="font-size: 13px; text-align:;">

<span>Nome Completo</span>

</label>
<input type="text" name="atua_nome" class="form-control atua_nome" required="required"  value="">

</span>


<input type="hidden" name="id" value="" class="id_aluno">

<span class="input input--hoshi">
<label style="font-size: 13px;">
<span>Turma:</span>
</label>
<input type="text" name="atua_turma" class="form-control atua_turma" required="required" value="">
</span>
<span class="input input--hoshi">
<label style="font-size: 13px;">
<span>1ª Opção:</span>

</label>
<input type="text" name="atua_opcao1" class="form-control atua_opcao1" required="required" value="">
</span>

<span class="input input--hoshi">
<label style="font-size: 13px;">
<span>2ª Opção:</span>
</label>
<input type="text" name="atua_opcao2" class="form-control atua_opcao2" required="required" value="">
</span>


<span class="input input--hoshi">
<label style="font-size: 13px;">
<span>Email:</span>
</label>
<input type="text" name="atua_email" class="form-control atua_email" required="required" value="">
</span>


<span class="input input--hoshi">
<label style="font-size: 13px;">
<span>Estado:</span>
</label>
<input type="text" name="atua_estado" class="form-control atua_estado" required="required" value="" placeholder="selecionado, não selecionado ou pendente">

</span>


<span class="input input--hoshi" style="margin-top: 37px;">

<input type="button" class="btn btn-primary" name="atualizar_aluno" value="Atualizar">

</span>

 <div class="col-md-12 ok-atual">
                <br>
                <center><span><h2><i class="fa fa-user">&nbsp;&nbsp;Atualização ok</span></h2></i></center>
                </div>
      </form>
</center>
</div>
</section>
<br><br><br><br><br><br><br><br><br>
    
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
</body>
</html>