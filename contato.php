<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">

    <meta name="author" content="">

    <title>Estágio</title>

    

    <!-- core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/font-awesome.min.css" rel="stylesheet">

    <link href="css/animate.min.css" rel="stylesheet">

    <link href="css/prettyPhoto.css" rel="stylesheet">

    <link href="css/main.css" rel="stylesheet">

    <link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>

    <script src="js/html5shiv.js"></script>

    <script src="js/respond.min.js"></script>

    <![endif]-->       

    <link rel="shortcut icon" href="images/ico/favicon.png">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">

    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">

    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">

    <link rel="stylesheet" type="text/css" href="css/tabela.css">
    <link rel="stylesheet" type="text/css" href="css/modal_login.css">
    <link rel="stylesheet" type="text/css" href="css/modal_dados.css">
    <link rel="stylesheet" type="text/css" href="css/modal_cadastro.css">

     <script src="js/jquery.js"></script>
     <script type="text/javascript" src="js/ajax.js"></script>



        <link rel="stylesheet" type="text/css" href="css10/set1.css" />

        <script type="text/javascript">

     function mask(objeto) {



                if (objeto.value.length == 1) {

                objeto.value = '('+objeto.value;

                }

                if (objeto.value.length == 3) {

                objeto.value = objeto.value+') ';

                }

                if (objeto.value.length == 10) {

                objeto.value = objeto.value+'-';

                }

                }




        </script>

   

    <script type="text/javascript">

            function verificaTexto() {

                if (form.login.value) {

               document.getElementById('usu').style.width='180px'; 

             
 

                   }

                   if (form.senha.value) {

               document.getElementById('sen').style.width='180px'; 

                 }

            else{

                          



            }



            }


    </script>

   

</head><!--/head-->



<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  (85) 3341-3990</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       
                       <div class="social">

                        <div class="btn_login">

                         <input type="button" value="Login" name="btn_logar" class="btn btn-success" id="btn_logar">&nbsp;&nbsp;
                         </div>
                       
                      <div class="btn_cadastro">

                        <form action="#" method="POST">

                        <input type="button" value="Cadastrar" name="btn_cadastrar" class="btn btn-primary" style="margin-top: -1px;">


                        </form>
                        



                        </div>
                           
                       </div>
                    </div>

                 <div class="modal fade login" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                <div class="modal-login">
                <div class="modal-header">

                <h4 class="modal-title" id="myModalLabel" style="">Estágio Salaberga - Login</h4>
                </div>
                <div class="modal-body">
                <form class="form" action="receber.php" method="POST">
                <div class="row">
                  <div class="col-md-12 divRecuperar">
             
                <span><i class="fa fa-user">&nbsp;&nbsp;Informe seu email cadastrado</span></i>
                <input type="email" class="form-control" id="recuperarLogin" placeholder="Email" name="recuperarLogin">
                </div>
                <div class="col-md-6 loginInput">
                <input type="text" class="form-control" id="login" placeholder="Login" name="login_user">
                </div>

                <div class="col-md-6 senhaInput">
                <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha">
                </div>

                <div class="col-md-12 erro">
                <br>
                <center><span><i class="fa fa-user">&nbsp;&nbsp;Login e Senha Inválidos</span></i></center>
                </div>
                
                 <div class="col-md-12 login-erro">
                <br>
                <center><span><i class="fa fa-envelope">&nbsp;&nbsp;Email Inválido</span></i></center>
                </div>


                </div>

                </div>
                <div class="modal-footer">

                <input type="button" class="btn btn-link" id="esqueceu_senha" value="Esqueceu sua Senha?" name="esqueceu_senha">
                  <input type="button" class="btn btn-link" id="voltar" value="Voltar" name="voltar">
                <input type="button" class="btn btn-info" value="Enviar" id="logar" name="logar">
                <input type="button" class="btn btn-danger" value="Procurar" id="procurar" name="procurar">
                <input type="button" class="btn btn-success" data-dismiss="modal" value="Fechar">
                </form>
                </div>
                </div>
                </div>
                </div>
                      
                        <div class="modal fade dados" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                        <div class="modal-dados">
                        <div class="modal-header">

                        <h4 class="modal-title" id="myModalLabel" style=""><i class="fa fa-info">&nbsp;&nbsp;Estágio Salaberga - Dados Usuário</i></h4>
                        </div>
                        <div class="modal-body">
                        <form class="form" action="#" method="POST">
                        <div class="row">
                        <input type="hidden" name="id_user" value="" class="form-control id_user">
                        <div class="col-md-12 email">

                        <span><i class="fa fa-envelope">&nbsp;&nbsp;Email</span></i>
                        <input type="text" class="form-control emailRecebido" placeholder="Email" name="email" disabled>
                        <br>
                        </div>
                       
                        <div class="col-md-12 loginDado">
                        <span><i class="fa fa-user">&nbsp;&nbsp;Login</span></i>
                        <input type="text" class="form-control loginDado2" placeholder="Login" name="loginDado" disabled><br>
                        </div>
                        
                      <!--   <div class="col-md-6 senhaDado">
                        <span><i class="fa fa-lock">&nbsp;&nbsp;Nova Senha</span></i>
                        <input type="password" class="form-control" id="senhaDado1" placeholder="Senha" name="senhaDado1">
                        </div>
                        <div class="col-md-6 senhaDado">
                        <span><i class="fa fa-lock">&nbsp;&nbsp;Confirmar Senha</span></i>
                        <input type="password" class="form-control" id="senhaDado2" placeholder="Senha" name="senhaDado2">
                        </div> -->

                        <div class="col-md-12 mensagem-email">
                        <br>
                        <center><span><h3><i class="fa fa-check-square-o">&nbsp;&nbsp;Um email foi enviado com seus dados de login. Verifique sua caixa de Entrada.</></span></h3></i></center>
                        </div>


                        </div>

                        </div>
                        <div class="modal-footer">


                        <input type="button" class="btn btn-danger" value="Atualizar" id="atualizar" name="atualizar">
                        <input type="button" class="btn btn-success" data-dismiss="modal" value="Fechar">
                        </form>
                        </div>
                        </div>
                        </div>
                        </div>
            <div class="modal fade cadastro" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
            <div class="modal-cadastro">
            <div class="modal-header">

            <h4 class="modal-title" id="myModalLabel" style="">Estágio Salaberga - Cadastro</h4>
            </div>
            <div class="modal-body">
            <form class="form" action="receber.php" method="POST">
            <div class="row">
            <div class="col-md-6">

            <label style="font-size: 13px; float: left; ">

            <span>Nome Completo </span>

            </label>

            <input class="form-control" type="text" id="nome" name="nome"  required/>

            </div>
            <div class="col-md-6">


            <label style="font-size: 13px; float: left;">Curso</label> <select name="curso_cadastro" class="form-control" id="curso_cadastro">
            <option value="">Selecione...</option>
            <option value="A">Enfermagem</option>

            <option value="B">Informática</option>

            <option value="C">Meio Ambiente</option>

            <option value="D">Edificações</option>


            </select>

            </div>

            <div class="col-md-6">


            <label style="font-size: 13px; float: left;"> 1ª Opção</label> <select name="subarea" class="form-control" id="opcao1">
            <option value="">Selecione...</option>
            <option value="Desenvolvimento Web">Desenvolvimento Web</option>

            <option value="Suporte/Redes">Suporte / Redes</option>

            <option value="Informatica Aplicada">Informática Aplicada</option>

            <option value="Tutoria">Tutoria</option>

            <option value="Design">Design</option>





            </select>

            </div>

            <div class="col-md-6">


            <label style="float: left; font-size: 13px;"> 2ª Opção</label> <select name="subarea2" class="form-control" style="margin-top: 5px;" id="opcao2">
            <option value="">Selecione...</option>
            <option value="Desenvolvimento Web">Desenvolvimento Web</option>

            <option value="Suporte/Redes">Suporte / Redes</option>

            <option value="Informatica Aplicada">Informática Aplicada</option>

            <option value="Tutoria">Tutoria</option>

            <option value="Design">Design</option>

            </select>

            </div>


            <div class="col-md-6">

            <label style="font-size: 13px; float: left; ">

            <span>Endereço</span>

            </label>
            <input class="form-control" type="text" id="endereco" name="endereco" required/>


            </div>

            <div class="col-md-6">

            <label style="font-size: 13px; float: left; ">

            <span>N° da Casa</span>

            </label>
            <input class="form-control" type="text" id="numero" name="numero" required/>


            </div>

            <div class="col-md-6">

            <label style="font-size: 13px; float: left; ">

            <span>Bairro</span>

            </label>
            <input class="form-control" type="text" id="bairro" name="bairro" required/>



            </div>

            <div class="col-md-6">

            <label style="font-size: 13px; float: left; ">

            <span>Cidade</span>

            </label>
            <input class="form-control" type="text" id="cidade" name="cidade" required/>


            </div>
            <div class="col-md-6">


            <label style="font-size: 13px; float: left; ">

            <span>Telefone</span>

            </label>
            <input class="form-control" type="text" id="telefone"  name="telefone" onkeypress="mask(this);" maxlength="15" required/>

            </div>
            <div class="col-md-6">

            <label style="font-size: 13px; float: left; ">

            <span>Email</span>

            </label>
            <input class="form-control" type="email" id="email" name="email" required/>


            </div>
            <div class="col-md-6">

            <label style="font-size: 13px; float: left; ">

            <span>Login</span>

            </label>
            <input class="form-control" type="text" id="login" name="login_cadastro" required/>


            </div>

            <div class="col-md-6">


            <label style="font-size: 13px; float: left; ">

            <span>Senha</span>

            </label>
            <input class="form-control" type="password" id="senha" name="senha_cadastro" required/>

            </div>

            <div class="col-md-12 ok-cadastro">
            <br>
            <center><span><i class="fa fa-user">&nbsp;&nbsp;Cadastro realizado com sucesso! Enviamos um email para confirma��o de dados!</span></i></center>
            </div>
            <div class="col-md-12 erro-cadastro">
            <br>
            <center><span><i class="fa fa-lock">&nbsp;&nbsp;Login ou Email Existentes. Tente novamente!</span></i></center>
            </div>

            <div class="col-md-12 erro-subarea">
            <br>
            <center><span><i class="fa fa-spinner">&nbsp;&nbsp;SubÁreas iguais. Tente novamente!</span></i></center>
            </div>

            <div class="col-md-12 cadastro-nulo">
            <br>
            <center><span><i class="fa fa-spinner">&nbsp;&nbsp;Preencha todos os campos!</span></i></center>
            </div>



            </div>

            </div>
            <div class="modal-footer">

            <input type="button" class="btn btn-info" value="Cadastrar" id="cadastrar" name="cadastrar">
            <input type="button" class="btn btn-success" data-dismiss="modal" value="Fechar">
            </form>
            </div>
            </div>
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
                   
                 
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo" style="width: 200px;"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="blog-item.php">Estágio</a></li>
                       
                        <li class="active"><a href="contato.php">Contato</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->



    <section id="contact-info">

        <div class="center">                

            <h2>Como chegar até nós?</h2>

            <p class="lead"></p>

        </div>

        <div class="gmap-area">

            <div class="container">

                <div class="row">

                    <div class="col-sm-4 text-rigth">

                        <div class="gmap">

                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.6365194648006!2d-38.673883985240565!3d-3.8878394971721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c0aca05a2498b9%3A0x2472fd3faec96c21!2sEEEP+Salaberga+Torquato+Gomes+De+Matos!5e0!3m2!1spt-BR!2sbr!4v1459777783015" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                        </div>

                    </div>



                
                 <div class="map-content">

                        <ul class="row">

<!--  <i class="fa fa-map-marker" style="margin-top: -20px;"></i> -->
<br><br>
                    <li class="col-sm-12">
                        <address>

                       <h5><b>Endereço</b>: </h5>

                        <p>Av. Paisagística II</p>

                        <p>Telefone:  (85) 3341-3990 </p>
                        <p>

                        Email : estagiosalaberga@gmail.com</p>

                        </address>

                    </li>

                        </ul>

                </div>

                    </div>

                    </div>

                    </div>

    </section>  <!--/gmap_area -->



     <section id="contact-page">

        <div class="container">

            <div class="center">        

                <h2>Entre em Contato por E-mail</h2>

                <p class="lead">Preencha os seguintes campos.</p>

            </div> 

            <div class="row contact-wrap"> 

                <div class="status alert alert-success" style="display: none"></div>

                <form class="contact-form" name="name" method="POST" action="sendemail.php">

                    <div class="col-sm-5 col-sm-offset-1">

                      
                            <label>Nome *</label>

                            <input type="text" name="nome" class="form-control" required="required" style="">
                            <br>

                      
                            <label>Email *</label>

                            <input type="email" name="email" class="form-control" required="required" style="">

                        <br>

                       

                            <label>Telefone *</label>

                            <input type="text" class="form-control" required onkeypress="Mascara(this)" maxlength="15" style="">
                            <br>
                       

                     </div>

                    <div class="col-sm-5">

                       

                            <label>Assunto *</label>

                            <input type="text" name="assunto" class="form-control" required="required" style="">

                       

                        <br>

                            <label>Mensagem *</label>

                            <textarea name="mensagem" id="message" required="required" class="form-control" rows="8" style=""></textarea>
                            <br>
                                            

                        <div class="form-group">

                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Enviar Mensagem</button>

                        </div>

                    </div>

                </form> 

               

            </div>

        </div><!--/.container-->

    </section><!--/#contact-page-->


<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                 &copy;&nbsp;EEEP Salaberga Torquato Gomes de Matos&nbsp;-&nbsp;<a target="" href="index.php" title="">EEEP Salaberga</a>
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                       <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="blog-item.php">Estágio</a></li>
                        <li><a href="contato.php">Contato</a></li> 
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>

</body>

</html>