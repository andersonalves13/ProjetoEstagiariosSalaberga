<?php
	header('Content-type: application/json');
    $status = array(
        'type'=>'success',
        'message'=>'Sua mensagem foi enviada. Entraremos em contato assim que puder.'
    );
    $nome = @trim(stripslashes($_POST['nome'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $assunto = @trim(stripslashes($_POST['assunto'])); 
    $mensagem = @trim(stripslashes($_POST['mensagem'])); 

    $email_from = $email;
    $email_to = 'alveesbezerra13@gmail.com';//replace with your email

    $body = 'Nome: ' . $nome . "\n\n" . 'Email: ' . $email . "\n\n" . 'Assunto: ' . $assunto . "\n\n" . 'Mensagem: ' . $mensagem;

    $success = @mail($email_to, $assunto, $body, $email_from);


    echo json_encode($status);
    die;
    ?>
