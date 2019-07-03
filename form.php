<!DOCTYPE html>
<html>
<head>
	<title>Cadastro - A&E</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<div  style="text-align: center;">
	<div class="card" style="margin: 5% 25% 5% 25%; height: 90%;width:50%; padding: 50px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
	
<?php
if (@$_GET['msgName']) {
    echo '<Strong>Nome já utilizado!</Strong>';
}
if (@$_GET['msgErro']) {
    echo '<Strong>Não foi possível realizar o cadastro!</Strong>';
}

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <form method="POST" name="formulario" onsubmit="return validar_email();" action="cadastrarUsuario.php">
    <h2>Cadastro</h2>
    <label>Nome:
    <input type="text" class="form-control" name="name" placeholder="Nome aqui..." required></label>
    <br>
    <label>Email:
    <input type="text" class="form-control" name="email" placeholder="Email aqui..." required></label>
    <br>
    <label>Senha:
    <input type="password" class="form-control" name="password" placeholder="Senha aqui..." required></label>
    <br><br>
    <input type="submit" class="btn btn-dark" value="Cadastrar" />
    <br><br><a href="login.php" style="color: black; font-weight: bold">Voltar</a>
</form>
</div>
<script>
function validar_email(){
    var re = new RegExp("[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}");
    if (re.test(document.forms["formulario"]["email"].value) == false){
        alert('Email Inválido.');
        return false;
    }
    else{
        return true;
    }
}
</script>
</div>
</body>
</html>