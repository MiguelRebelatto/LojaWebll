<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
 
require_once('PHPMailer/Exception.php');
require_once('PHPMailer/PHPMailer.php');
require_once('PHPMailer/SMTP.php');
 
$mail = new PHPMailer();

# Define os dados do servidor e tipo de conexão
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.gmail.com"; # Endereço do servidor SMTP
$mail->Port = 587; // Porta TCP para a conexão
$mail->SMTPAuth = true; # Usar autenticação SMTP - Sim
$mail->Username = 'aemlojaweb@gmail.com'; # Usuário de e-mail
$mail->Password = 'augustomiguel123'; // # Senha do usuário de e-mail
$mail->SMTPSecure = 'tls';

# Define os destinatário(s)
$mail->AddAddress('miguelgr199@hotmail.com', 'Fulano da Silva'); 
$mail->setFrom('aemlojaweb@gmail.com', 'aemlojaweb');
$mail->isHTML(true);
$mail->Subject = 'Assunto do E-Mail';
$mail->Body = 'Corpo da Mensagem em <b>html</b>';
# Envia o e-mail
$enviado = $mail->Send();

# Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

# Exibe uma mensagem de resultado (opcional)
if ($enviado) {
 echo "E-mail enviado com sucesso!";
} else {
 echo "Não foi possível enviar o e-mail.";
 echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
}
?>