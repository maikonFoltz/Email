<?php
    if(isset($_POST['nome']) && !empty($_POST['nome'])){
        
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $msg = addslashes($_POST['msg']);

        //esse é quem esta enviando
        $para = "maikonjoarez1@hotmail.com";
        $assunto = "FOLTZ SISTEMA";
        $corpo = "Nome: ".$nome." - E-mail: ".$email." - Mensagem: ".$msg;

        //cabeçario de que vai receber
        $cabecalho = "From: maikonjfoltz@gmail.com"."\r\n"."Reply-To ".$email."\r\n"."X-Mailer: PHP/".phpversion();

        mail($para, $assunto, $corpo, $cabecalho);

        echo "<h2>E-mail enviado com sucesso !!</h2>";
        exit;
        

        

    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emvio de E-mail</title>
</head>
<body>
    <form action="" method="post">
    Nome: <br>
    <input type="text" name="nome"><br><br>
    E-mail: <br>
    <input type="text" name="email"> <br><br>
    Mensagem: <br>
    <textarea name="msg" id="msg" cols="100" rows="20"></textarea> <br><br>
    <input type="submit" value="Enviar">
    
    </form>
</body>
</html>