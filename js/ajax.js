$(function () {

   $(".ok-atualizacao").hide();
   $(".ok-atual").hide();
// Select de resultado, cada vez que mudar, alterar o proprio resultado de acordo com as turmas
    $("#cursos").change(function () {
        var id = $("#cursos").val();
       
        $.ajax({
            type: "POST",
            url: "resultado.php",
            data: {
                "id_curso": id
            },
            success: function (data) {
              
                $(".modal-content").html(data);
                $(".resultado2").modal("show");
                $("#cursos").val("");


            }
        })

    })

    // Abrir modal
    $("input[name=btn_logar]").click(function () {
        $(".login").modal("show");
        $(".erro").hide();
        $(".loginInput").show();
        $(".senhaInput").show();
        $(".divRecuperar").hide();
        $("#voltar").hide();
        $("#logar").show();
        $("#procurar").hide();
        $("#esqueceu_senha").show();
        $(".login-erro").hide();
    })
    // Login e sEnha com ajax

    $("input[name=logar]").click(function () {
       
        var login = $("input[name=login_user]").val();
        var senha = $("input[name=senha]").val();
    
      
        var tipo;
        $.ajax({
            type: "POST",
            url: "receber.php",
            data: {
                "loginUser": login,
                "senhaUser": senha,
                "tipoUser": tipo
            },
            success: function (data) {
                if(data){
                data = $.parseJSON(data);
             
                if (data.tipoUser == 'adm') {
                window.location = 'admin/admin.php';
                }
                else if(data.tipoUser == 'usu'){
                window.location = 'usuario/usuario.php';
                }
            }else{
               $(".erro").show(1000);
                            
            }
            }
        })
    })

    // Efeito de esquecer senha

    $("input[name=esqueceu_senha]").click(function () {
        $(".divRecuperar").show(1000);
        $(".loginInput").hide("slow");
        $(".senhaInput").hide("slow");
         $("#logar").hide(1000);
         $(".erro").hide(1000);
         $("#voltar").show(1000);
         $("#esqueceu_senha").hide(1000);
         $("#procurar").show(1000);
    })

    // Efeito de Voltar para login
      $("input[name=voltar]").click(function () {
        $(".loginInput").show(1000);
        $(".senhaInput").show(1000);
         $("#logar").show(1000);
         $("#voltar").hide(1000);
         $(".divRecuperar").hide();
           $("#esqueceu_senha").show(1000);
           $("#procurar").hide();
           $(".login-erro").hide();
    })

      // Procurar usuário

      $("#procurar").click(function () {
        $(".mensagem-email").hide();
        // $(".ok-senha").hide();
          var recuperarLogin = $("#recuperarLogin").val();
          var login;
          
          $.ajax({
            type: "POST",
            url: "mudar_senha.php",
            data: {
                "recupLogin": recuperarLogin,
                "loginRecup": login
                
            },
            success: function (dados) {
                if(dados){
                dados = $.parseJSON(dados);

                // document.getElementById('myModal').style.display = 'none';
                
                $(".dados").modal("show");
                $(".emailRecebido").val(dados.recupLogin);
                $(".loginDado2").val(dados.loginRecup);
                $(".mensagem-email").show(1000);
                }
                else{
                    $(".login-erro").show(1000);
                }
            }
          })
      })

      // Atualizar senha

      $("input[name=atualizar]").click(function () {
          var id = $(".id_user").val();
          var senha1 = $("input[name=senhaDado1]").val();
          var senha2 = $("input[name=senhaDado2]").val();
         
            if (senha1 !== senha2) {
                $(".erro-senha").show(1000);
                $(".erro-senha").fadeOut(3000);
            }else{
                $.ajax({
                    type: "POST",
                    url: "atualizar_senha.php",
                    data: {
                        "id_user": id,
                        "senha1": senha1                        
                    },
                    success: function (atualiza) {
                        $(".ok-senha").show(1000);
                    }
                })
            }
      })

      // Cadastro de novos usuários

        $("input[name=btn_cadastrar]").click(function () {
          $(".cadastro").modal("show");
          $(".erro-cadastro").hide();
          $(".ok-cadastro").hide();
          $(".erro-subarea").hide();
          $(".cadastro-nulo").hide();
        })

        $("input[name=cadastrar]").click(function () {
          var nome = $("input[name=nome]").val();
          var curso = $("#curso_cadastro").val();
          var opcao1 = $("#opcao1").val();
          var opcao2 = $("#opcao2").val();
          var endereco = $("input[name=endereco]").val();
          var numero = $("input[name=numero]").val();
          var bairro = $("input[name=bairro]").val();
          var cidade = $("input[name=cidade]").val();
          var telefone = $("input[name=telefone]").val();
          var email = $("input[name=email_cadastro]").val();
          var login = $("input[name=login_cadastro]").val();
          var senha = $("input[name=senha_cadastro]").val();

          if((nome === "" || endereco === "") || (numero === "" || bairro === "") || (cidade === "" || telefone === "") || (email === "" || login === "" || senha === "")){
            $(".cadastro-nulo").show(1000);
          }
          else if (opcao1 == opcao2) {
            $(".erro-subarea").show(1000);
          }else{

        $.ajax({
          type: "POST",
          url: "cadastro/cadastro.php",
          data: {
            "nomeCadastro": nome,
            "cursoCadastro": curso,
            "opcao1": opcao1,
            "opcao2": opcao2,
            "enderecoCadastro": endereco,
            "numeroCadastro": numero,
            "bairroCadastro": bairro,
            "cidadeCadastro": cidade,
            "telefoneCadastro": telefone,
            "emailCadastro": email,
            "loginCadastro": login,
            "senhaCadastro": senha
          },
          success: function (dados) {
            if (dados === 'erro') {
              $(".erro-cadastro").show(1000);
              $(".erro-cadastro").fadeOut(3000);
            }
            else{
              $(".ok-cadastro").show(1000);
              $("input[name=nome]").val("");
              $("input[name=endereco]").val("");
              $("input[name=numero]").val("");
              $("input[name=bairro]").val("");
              $("input[name=cidade]").val("");
              $("input[name=telefone]").val("");
              $("input[name=email]").val("");
              $("input[name=login_cadastro]").val("");
              $("input[name=senha_cadastro]").val("");
              $(".erro-cadastro").hide();
              $(".erro-subarea").hide();
              $(".cadastro-nulo").hide();
            }
          }
        })
}


        })


      // Gerar Relatório Mensal - Plano de Estágio

      $("a.relatorioMensal").click(function () {
        $(".relatorio").modal("show");
         $(".relatorio-ok").hide();
         $(".erro-formato").hide();
      
      })

      // Select ao mudar, aparece informações da tabela empresa
      $("select.empresas").change(function () {
        var id = $(".empresas").val();
        var nome;
        var cnpj;
        var telefone;
        var representante;
        var area;
        var supervisor;
        var vagas;

        $.ajax({
          type: "POST",
          url: "dados_empresas.php",
          data: {
            "id": id,
            "nome": nome,
            "cnpj": cnpj,
            "telefone": telefone,
            "representante": representante,
            "area": area,
            "supervisor": supervisor,
            "vagas": vagas
          },
          success: function (data) {
            data = $.parseJSON(data);

            $(".id_empresa").val(data.id);
            $(".nome").val(data.nome);
            $(".cnpj").val(data.cnpj);
            $(".telefone").val(data.telefone);
            $(".representante").val(data.representante);
            $(".area").val(data.area);
            $(".supervisor").val(data.supervisor);
            $(".vagas").val(data.vagas);
          }
        })

      })

      // Pega o valor dos campos e atualiza
      $("input[name=atualizar_empresa]").click(function () {
          var id =  $(".id_empresa").val();
          var nome = $(".nome").val();
          var cnpj =  $(".cnpj").val();
          var telefone = $(".telefone").val();
          var representante = $(".representante").val();
          var area = $(".area").val();
          var supervisor = $(".supervisor").val();
          var vagas = $(".vagas").val();
          
          $.ajax({
            type: "POST",
            url: "atualizar_empresa.php",
            data: {
              "id": id,
            "nome": nome,
            "cnpj": cnpj,
            "telefone": telefone,
            "representante": representante,
            "area": area,
            "supervisor": supervisor,
            "vagas": vagas
          },
          success: function (dados) {
            $(".ok-atualizacao").show();
            $(".ok-atualizacao").fadeOut(3000);
          }
          })
      })
      
      $("select.atua_alunos").change(function () {
        
        var id = $(".atua_alunos").val();
        var nome;
        var area1;
        var area2;
        var turma;
        var email;
        var estado;

        $.ajax({
          type: "POST",
          url: "buscar_aluno.php",
          data: {
            "id_aluno": id,
            "nomeAluno": nome,
            "area1": area1,
            "area2":area2,
            "turmaAluno": turma,
            "emailAluno": email,
            "estadoAluno": estado
          },
          success: function (dados) {
            dados = $.parseJSON(dados);

          $(".id_aluno").val(dados.id_aluno);
          $(".atua_nome").val(dados.nomeAluno);
          $(".atua_opcao1").val(dados.area1);
          $(".atua_opcao2").val(dados.area2);
          $(".atua_turma").val(dados.turmaAluno);
          $(".atua_email").val(dados.emailAluno);
          $(".atua_estado").val(dados.estadoAluno);


          }
        })

      })

      $("input[name=atualizar_aluno]").click(function () {
         var id = $(".id_aluno").val();
         var nome = $(".atua_nome").val();
         var area1 = $(".atua_opcao1").val();
         var area2 = $(".atua_opcao2").val();
         var turma = $(".atua_turma").val();
         var email = $(".atua_email").val();
         var estado = $(".atua_estado").val();

          $.ajax({
          type: "POST",
          url: "atualizar_aluno.php",
          data: {
            "id_aluno": id,
            "nomeAluno": nome,
            "area1": area1,
            "area2":area2,
            "turmaAluno": turma,
            "emailAluno": email,
            "estadoAluno": estado
          },
          success: function (dados) {
            
            $(".ok-atual").show(1000);
            $(".ok-atual").fadeOut(3000);


          }
        })

      })
      

})