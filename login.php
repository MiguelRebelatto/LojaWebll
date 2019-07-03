<!DOCTYPE html>
<html>
<head>
	<title>Login - A&E</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<div  style="text-align: center;">
<?php
if (@$_GET['notFound']) {
    echo '<Strong>Usuário ou Senha incorreta!</Strong>';
}
?>
	<div class="card" style="margin: 5% 25% 5% 25%; height: 90%;width:50%; padding: 50px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
	<form method="POST" action="validaUsuario.php">
		<h2>A&E Store</h2>
		<label>Login:
		<input type="text" class="form-control" name="name" placeholder="Nome..." required></label>
	  	<br>
	  	<label>Senha:
	  	<input class="form-control" type="Password" name="password" placeholder="Senha..." required></label>
	  	<br>
		  <a href="form.php" style="color: black; font-weight: bold">Cadastrar-se</a>
		<br><br>
	  	<input type="submit" class="btn btn-dark" value="Entrar" />
	</form>
	</div>
</div>
</body>
</html>