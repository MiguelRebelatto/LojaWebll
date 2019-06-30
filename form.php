<div  style="text-align: center;">

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
    <h2>Formul&aacute;rio de Cadastro</h2>
    <label>Nome:
    <input type="text" class="form-control" name="name" placeholder="Nome aqui..." required></label>
    <br>
    <label>Email:
    <input type="text" class="form-control" name="email" placeholder="Email aqui..." required></label>
    <br>
    <label>Senha:
    <input type="password" class="form-control" name="password" placeholder="Senha aqui..." required></label>
    <br><br>
    <input type="submit" class="btn btn-primary" value="Cadastrar" /> 
</form>
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