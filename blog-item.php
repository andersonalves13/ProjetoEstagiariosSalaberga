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
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
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
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="stylesheet" type="text/css" href="css/modal_login.css">
    <link rel="stylesheet" type="text/css" href="css/modal_dados.css">
    <link rel="stylesheet" type="text/css" href="css/modal_cadastro.css">
    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>
    <script type="text/javascript">
    //     $(function () {
    //     $("input[name=logar]").click(function () {
    //     var login = $("input[name=login]").val();
    //     var senha = $("input[name=senha]").val();
    //     alert(login);
    // })
    //     })
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
    

</head><!--/head-->

<body>

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
                        <li class="active"><a href="blog-item.php">Estágio</a></li>
                       
                        <li><a href="contato.php">Contato</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->




    <section id="blog" class="container">
        <div class="center">
            <h2>Estágio</h2>
            <p class="lead">Abrangemos aqui um pouco de como funciona a metodologia de estágio.</p>
        </div>

        <div class="blog">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-item">
                     
                            <div class="row">  
                                <div class="col-xs-12 col-sm-2 text-left">
                                    <div class="entry-meta" style="width: 120px;">
                                        <span id="publish_date">Coordenador</span>
                                        <span><i class="fa fa-user"></i><a href="#">Carlos Henrique</a></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-10 blog-content">
                                    <h2>O que é o estagio?</h2>
                                    <p>Método de aprendizado através do exercício de funções profissionais que agregam conhecimentos práticos somados aos teóricos aprendidos em escolas ou universidades e desenvolvidos num lugar de trabalho. Aluno que cursa direito faz estágio em empresa 
                                    de cobrança, para aprender e colocar em prática seus 
                                    conhecimentos teóricos.</p>


                                </div>
                            </div>
                        </div><!--/.blog-item-->
                        
                        <div class="media reply_section">
                            <div class="pull-left post_reply text-center">
                                <a href="#"><img src="images/slider/usuario.png" class="img-circle" alt="" /></a>
                                <ul>
                                   
                                    
                                </ul>
                            </div>
                            <div class="media-body post_reply_content">
                                <h3>Wedyton</h3>
                                <p class="lead">O profissional formado no curso técnico em enfermagem está apto para atuar na promoção, proteção e recuperação da saúde, além de auxiliar na prevenção de doenças.
                                Também faz a coleta de dados sobre o estado de saúde de seus pacientes através de exames físicos e psicológicos.
                                A enfermagem possui um campo amplo de atuação e os profissionais podem atuar em hospitais, clínicas e escolas. Outro campo importante dessa área é a saúde coletiva, quando são realizados trabalhos educativos em comunidades carentes</p>
                                
                            </div>


                        </div> 

                         <div class="media reply_section">
                            <div class="pull-left post_reply text-center">
                                <a href="#"><img src="images/slider/otavio.jpg" class="img-circle" alt="" /></a>
                                <ul>
                                   
                                    
                                </ul>
                            </div>
                            <div class="media-body post_reply_content">
                                <h3>Otávio Meneses</h3>
                                <p class="lead">Um técnico em informática é o profissional que está apto a realizar configurações de sistemas informáticos, a instalar equipamentos e a verificar as causas de falhas na programação de computadores. Esse profissional pode trabalhar em empresas do ramo ou prestar atendimento por conta própria</p>
                               
                            </div>

                            
                        </div> 

                         <div class="media reply_section">
                            <div class="pull-left post_reply text-center">
                                <a href="#"><img src="images/slider/usuario.png" class="img-circle" alt="" /></a>
                                <ul>
                                   
                                    
                                </ul>
                            </div>
                            <div class="media-body post_reply_content">
                                <h3>Ítalo Girão</h3>
                                <p class="lead">O profissional da área de Meio Ambiente tem o objetivo de produzir mais usando menos, reduzindo a emissão de gases e a produção de resíduos. Como todas as indústrias devem ter um plano de gestão ambiental, precisam de pessoal especializado e isso torna o campo de trabalho nesta área muito grande. O profissional também pode atuar no poder público, em secretarias e órgãos municipais, estaduais ou federais, que fiscalizam e desenvolvem programas de prevenção e educação ambiental, encontrando soluções sustentáveis.</p>
                               
                            </div>

                            
                        </div> 

                         <div class="media reply_section">
                            <div class="pull-left post_reply text-center">
                                <a href="#"><img src="images/slider/usuario.png" class="img-circle" alt="" /></a>
                                <ul>
                                   
                                    
                                </ul>
                            </div>
                            <div class="media-body post_reply_content">
                                <h3>Ágabe Linhares</h3>
                                <p class="lead">O profissional formado no curso técnico em Edificações está apto para atuar nos diversos setores da construção civil. Pode realizar estudos sobre a situação de áreas que irão receber edificações, instalar canteiros de obras, elaborar e organizar o licenciamento de obras e acompanhar cronogramas de construções.
                                    </p>
                               
                            </div>

                            
                        </div> 
                      
                   <h1 id="comments_title"></h1>
                        <div class="media comment_section">
                           
                            
                        </div> 
                        <div class="media comment_section">
                           
                           
                        </div> 
                        <div class="media comment_section">
                          
                           
                        </div> 


                        <div id="contact-page clearfix">
                            <div class="status alert alert-success" style="display: none"></div>
                            <div class="message_heading">
                               
                            </div> 
      
                            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
                                <div class="row">
                                    <div class="col-sm-5">
                                       
                                      
                                                        
                                    </div>
                                    <div class="col-sm-7">                        
                                                               
                                        <div class="form-group">
                                           
                                        </div>
                                    </div>
                                </div>
                            </form>     
                        </div><!--/#contact-page-->
                    </div><!--/.col-md-8-->

                <aside class="col-md-4">
                    <div class="widget search">
<!--                         <form role="form">
                                <input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">
                        </form> -->
                    </div><!--/.search-->
    				
    				<div class="widget categories"> 
                        <h3>Comentarios Dos Alunos</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="single_comments">
    								<img src="images/slider/anderson.jpg" alt=""  style="width: 50px;" />
    								<p>Estou muito feliz por ter começado o estagio na HOPE.<br>
                                    #Vem Monstro!!!</p>
                                    <div class="entry-meta small muted">
                                        <span>Por: Anderson Alves</span >
                                    </div>
    							</div>
    							<div class="single_comments">
    								<img src="images/slider/alan.jpg" alt="" style="width: 50px;" />
    								<p>Estar sendo uma ótima experiência estagiar na UFC. </p>
    								<div class="entry-meta small muted">
                                        <span>Por: Alan Chrystian</span>
                                    </div>
    							</div>
    							<div class="single_comments">
    								<img src="images/slider/usuario.png" alt="" style="width: 50px;" />
    								<p>Espero ter uma boa carreira profissional que estar começando aqui.</p>
    								<div class="entry-meta small muted">
                                        <span>Por: Luiz Henrique</span>
                                    </div>
    							</div>
    							
                            </div>
                        </div>                     
                    </div><!--/.recent comments-->
                     
<!-- 
                    <div class="widget categories">
                        <h3>Quantidades de Alunos</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="blog_category">
                                    <li><a href="#">Curso De Enfermagem<span class="badge">45</span></a></li>
                                    <li><a href="#">Curso De Informática<span class="badge">45</span></a></li>
                                    <li><a href="#">Curso De Meio Ambiente<span class="badge">45</span></a></li>
                                    <li><a href="#">Curso De Edificações <span class="badge">45</span></a></li>
                                </ul>
                            </div>
                        </div>                     
                    </div> --><!--/.categories-->
    				
    				
    		
    					
    				
                </aside>     

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->


   

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
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>