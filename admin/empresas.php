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

   

    <script src="../js/jquery.js"></script>



        <link rel="stylesheet" type="text/css" href="../css/set1.css" />

        <script type="text/javascript">

                

                function mask(objeto) {

                    if (objeto.value.length == 0) {

                        objeto.value = '('+objeto.value;

                    }



                    if (objeto.value.length == 3) {

                        objeto.value = objeto.value+') ';

                    }

                    if (objeto.value.length == 10) {

                        objeto.value = objeto.value+' - ';

                    }

                }



 // function optionCheck(){

 //        var option = document.getElementById("setor").value;

 //        if(option == "dois_mais"){

 //            document.getElementById("dois_mais").style.visibility ="visible";

 //        }

 //        else{

 //            document.getElementById("dois_mais").style.visibility ="hidden";

 //        }

 //    }

     function Check(){

          

         var mudar = document.getElementById("mais_vagas").style.visibility = 'visible';

            // if(opcaoCheck == "Desenvolvimento Web"){

        //     document.getElementById("mais_vagas").style.visibility ="visible";

        // }

        

        // else{

        //     document.getElementById("mais_vagas").style.visibility ="hidden";

        // }

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

                   

                 

                    <a class="navbar-brand" href="admin.php"><img src="../images/logo.png" alt="logo" style="width: 200px;"></a>

                </div>

				

                <div class="collapse navbar-collapse navbar-right">

                    <ul class="nav navbar-nav">

                     <li><a href="admin.php">Início</a></li>

                        <li class="active"><a href="empresas.php">Cadastrar Empresas</a></li>

                        <li><a href="consultar_em.php">Consultar Empresas</a></li>

                        <li><a href="atualizar.php">Atualizar Empresas</a></li>

                         <li><a href="deletar.php">Deletar Empresas</a></li>

                      

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

            

           <center> <form action="#" method="POST">

            <section class="content">

            <?php 

                if (isset($_POST['btn_cadastro'])) {

                    echo '<center><b><h3>*Empresa cadastrada com sucesso</h3></b></center><br><br>';

                }





             ?>

                <span class="input input--hoshi">

                    <label style="font-size: 13px; float: left;">

                        <span>Nome da Empresa *</span>

                    </label>
                    <input class="form-control" type="text" id="input-4" name="empresa" required/>


                </span>

                <span class="input input--hoshi">

                    <label style="font-size: 13px; float: left;">

                        <span>CNPJ *</span>

                    </label>
                    <input class="form-control" type="text" id="input-4" name="cnpj" required/>


                </span>

                <span class="input input--hoshi">

                    <label style="font-size: 13px; float: left;">

                        <span>Telefone *</span>

                    </label>
                    <input class="form-control" type="instituicao" id="input-5" name="telefone" onkeypress="mask(this)" maxlength="17" />


                </span>

                <span class="input input--hoshi">

                    <label style="font-size: 13px; float: left;">

                        <span>Representante legal *</span>

                    </label>

                    <input class="form-control" type="text" id="input-5" name="representante" required/>

                </span>

              

               

                <span class="input input--hoshi">

                    <label style="font-size: 13px; float: left;">

                        <span>Supervisor</span>

                    </label>
                    <input class="form-control" type="text" id="input-6"  name="supervisor" required/>


                </span>

                <span class="input input--hoshi">

                    <label style="font-size: 13px; float: left;">

                        <span>WhatsApp Supervisor</span>

                    </label>
                    <input class="form-control" type="text" id="input-6" name="whats" required onkeypress="mask(this)" maxlength="17" />


                </span>

               

                  <span class="input input--hoshi">

      
                    
                    <label style="font-size: 13px; float: left;">

                      Área:

                    </label> <select name="setor" id="setor" class="form-control">

                        <option value="Selecionar">Selecione...</option>

                        <option value="Desenvolvimento Web">Desenvolvimento WEB</option>

                        <option value="Suporte/Redes">Suporte/Redes</option>

                        <option value="Informatica Aplicada">Informática Aplicada</option>

                        <option value="Tutoria">Tutoria</option>

                        <option value="Design">Design</option>

                      <!--   <option value="dois_mais">2 ou mais</option> -->





                    </select>
                    </span>


                    <span class="input input--hoshi">

                    <label style="font-size: 13px; float: left;">

                        <span>Quantidade de Vagas</span>

                    </label>
                    <input class="form-control" type="text" id="input-6"  name="vagas" required/>


                </span>

<!-- 

          <div style="visibility: hidden;" id="dois_mais" onclick="Check()">

        

                <input type="checkbox" name="check[]"  id="check" onclick="Check()" value="Desenvolvimento Web" >Desenvolvimento WEB <br>

                <input type="checkbox" name="check[]"  id="check" onclick="Check()" value="Suporte/Redes" >Suporte/Redes<br>

                <input type="checkbox" name="check[]"  id="check" onclick="Check()" value="Informatica Aplicada" >Informática Aplicada<br>

                <input type="checkbox" name="check[]"  id="check" onclick="Check()" value="Tutoria" >Tutoria<br>

                <input type="checkbox" name="check[]"  id="check" onclick="Check()" value="Design" >Design

          



          </div>



          <div id="mais_vagas" style="visibility: hidden;">

         



          </div> -->



                  

                   

                </span><br><br><br>

                    

            

            <button class="btn btn-primary" name="btn_cadastro"><span class="action__text">Realizar Cadastro</span></button>

            <br><br><br><br>

            </form>

        </div><!-- /container -->

        <script src="../js8/classie.js"></script>

        <script>

            (function() {

                // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim

                if (!String.prototype.trim) {

                    (function() {

                        // Make sure we trim BOM and NBSP

                        var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;

                        String.prototype.trim = function() {

                            return this.replace(rtrim, '');

                        };

                    })();

                }



                [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {

                    // in case the input is already filled..

                    if( inputEl.value.trim() !== '' ) {

                        classie.add( inputEl.parentNode, 'input--filled' );

                    }



                    // events:

                    inputEl.addEventListener( 'focus', onInputFocus );

                    inputEl.addEventListener( 'blur', onInputBlur );

                } );



                function onInputFocus( ev ) {

                    classie.add( ev.target.parentNode, 'input--filled' );

                }



                function onInputBlur( ev ) {

                    if( ev.target.value.trim() === '' ) {

                        classie.remove( ev.target.parentNode, 'input--filled' );

                    }

                }

            })();

        </script>

      
              <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                 &copy;&nbsp;EEEP Salaberga Torquato Gomes de Matos&nbsp;-&nbsp;<a target="" href="#" title="">EEEP Salaberga</a>
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                       <li><a href="empresas.php">Home Empresas</a></li>
                        <li class="active"><a href="empresas.php">Cadastrar</a></li>
                        <li><a href="consultar_em.php">Consultar</a></li> 
                         <li><a href="atualizar.php">Atualizar</a></li> 
                          <li><a href="deletar.php">Deletar</a></li> 
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

</body>

</html>

<?php 

        

    if (isset($_POST['btn_cadastro'])) {

        require '../conect.php';





        $empresa=$_POST['empresa'];

        $cnpj=$_POST['cnpj'];

        $telefone=$_POST['telefone'];

        $representante=$_POST['representante'];

        $whats=$_POST['whats'];

        $supervisor=$_POST['supervisor'];

        $quant_vagas = $_POST['vagas'];



            $setor = $_POST['setor'];

             $inserir = mysqli_query($conn, "INSERT into empresas_informatica values ('','$empresa','$cnpj','$telefone','$representante','$setor','$supervisor','$whats','$quant_vagas')");







        // if ($_POST['setor'] && $_POST['setor'] == 'dois_mais') {

        //    $check = $_POST['check'];

        //    foreach ($check as $key => $value) {

        //             $inserir = mysqli_query($conn, "INSERT into empresas_informatica values ('','$empresa','$cnpj','$telefone','$representante','$value','$quant_vagas','$supervisor','$whats','$vagas')");

                   

        //         }

          



        // }

        // elseif ($_POST['setor']) {





        // }

       

        





    }

    











 ?>