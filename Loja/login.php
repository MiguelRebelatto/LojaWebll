<?php
if (@$_GET['notFound']) {
    echo '<Strong>Usuário ou Senha incorreta!</Strong>';
}

?>
<div  style="text-align: center;">
	<form method="POST" action="validaUsuario.php">
		<h2>Login</h2>
		<label>Nome:
	  	<input type="text" name="name" placeholder="Nome..." required></label>
	  	<br><br>
	  	<label>Senha:
	  	<input type="Password" name="password" placeholder="Senha..." required></label>
	  	<br><br>
	  	<input type="submit" value="Enter" />
	</form>
	<a href="form.php">Cadastrar-se</a>
</div>