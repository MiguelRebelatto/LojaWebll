<?php
if (@$_GET['notFound']) {
    echo '<Strong>Usuário ou Senha incorreta!</Strong>';
}

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div  style="text-align: center;">
	<form method="POST" action="validaUsuario.php">
		<h2>Login</h2>
		<label>Login:
		<input type="text" class="form-control" name="name" placeholder="Nome..." required></label>
	  	<br><br>
	  	<label>Senha:
	  	<input class="form-control" type="Password" name="password" placeholder="Senha..." required></label>
	  	<br><br>
	  	<input type="submit" class="btn btn-primary" value="Logar" />
	</form>
	<a href="form.php">Cadastrar-se</a>
</div>