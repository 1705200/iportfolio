<?php

    if(isset($_POST['email']) && !empty($_POST['email']));

    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $assunto = addcslashes($_POST['asssunto']);
    $mensagem = addcslashes($_POST['mensagem']);

$to = "amandaluciabrito73@gmail.com";
$subject = "Conatato- Iportfolio";
$body = "Nome: ".$nome. "\n".
        "Email: ".$email. "\n".
        "Assunto: ".$assunto. "\n".
        "Mensagem: ".$mensagem;

$header = "From: amandaluciabrito@hotmail.com" "\r\n"."Reply-To: ".$email. "\r\n" ."X=Mailer:PHP/" .phpversion();

if(mail($to,$subject,$header)){
    echo("Email enviado com sucesso");
}else{
    echo("O emial não pode ser enviada");
}
?>
