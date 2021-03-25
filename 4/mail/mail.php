<?php

$nome = $_POST['nome'];
$mail = $_POST['mail'];
$mensagem = $_POST['mensagem'];

if (!$nome || !$mail || !$mensagem) {
  http_response_code(500);
}

$para = "flavio@tecnologia2u.com.br";
$assunto = "Exercicio 4";
$corpo = $mensagem;
$header = "To: $para";
$header .= "From: $mail";

if (!mail($para, $assunto, $corpo, $header)) {
  http_response_code(500);
}
