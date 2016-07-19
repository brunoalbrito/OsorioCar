<?php

$nome = $_POST["nome"];
$assunto = $_POST["assunto"];
$telefone = $_POST["phone"];
$email = $_POST["email"];
$mensagemGet = $_POST["mensagem"];


$to = "tero.bruno@gmail.com";
$subject = "$assunto";
$mensagem = "<strong>Nome:<strong>: $nome</br>"
        . "<strong>Telefone:<strong>: $telefone</br>"
        . "<strong>Mensagem:</br><strong>:$mensagemGet$</br>";
$header = "MIME-Version: 1.0\n";
$header .= "Content-type: text/html; charset=iso-8859-1\n";
$header .= "From: $email\n";

mail($to, $subject, $mensagem,$header);
echo "Mensagem enviada com sucesso";

