<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
 
require_once('PHPMailer/Exception.php');
require_once('PHPMailer/PHPMailer.php');
require_once('PHPMailer/SMTP.php');
 
$mail = new PHPMailer();

$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.gmail.com"; # Endereço do servidor SMTP
$mail->Port = 587; // Porta TCP para a conexão
$mail->SMTPAuth = true; # Usar autenticação SMTP - Sim
$mail->Username = 'aemlojaweb@gmail.com'; # Usuário de e-mail
$mail->Password = 'augustomiguel123'; // # Senha do usuário de e-mail
$mail->SMTPSecure = 'tls';

$mail->AddAddress($emailDestinatario, $nomeDestinario); 
$mail->setFrom('aemlojaweb@gmail.com', 'aemlojaweb');
$mail->isHTML(true);
$mail->Subject = $assunto;
$mail->Body = $body;

$enviado = $mail->Send();

$mail->ClearAllRecipients();
$mail->ClearAttachments();

if ($enviado) {
 echo "E-mail enviado com sucesso!";
} else {
 echo "Não foi possível enviar o e-mail.";
 echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
}
?>