<?php

$nome = $_POST['nome'];
$to = $_POST['email'];
$subject = $_POST['assunto'];
$message = nl2br($_POST['mensagem']);
$message .= "<br /><br /> <em>- Este e-mail foi enviado a partir do formulário de contato do site, em ".date('d/m/Y')." as ".date('H:i:s').".</em>";

/*$nome = 'Ian Rodrigues';
$to = 'ianrodriguesti@gmail.com';
$subject = 'Orçamento';
$message = 'Orçamento';*/

$headers = 'From: ' . $nome . '<' . $to . '>' . "\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();

if (mail('contato@ianrodrigues.com.br', $subject, $message, $headers)) {
	echo 'ENVIANDO';
} else {
	echo 'ERRO';
}
?>