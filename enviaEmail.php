<?php
if ($_REQUEST['assunto'] && $_REQUEST['mensagem']) {
if (mail('miguelgrandorebelatto@gmail.com',"A&M Fale Conosco:
{$_REQUEST['assunto']}",$_REQUEST['msg'],'From: UsuQqr
<UsuQqr@gmail.com>')) {
	echo 'E-Mail enviado com sucesso!<br>';
}
else {
	echo 'Erro no envio do e-mail.<br>';
}
}
?>