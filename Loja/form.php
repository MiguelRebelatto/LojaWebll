<div  style="text-align: center;">

<?php
if (@$_GET['msgName']) {
    echo '<Strong>Nome já utilizado!</Strong>';
}
if (@$_GET['msgErro']) {
    echo '<Strong>Não foi possível realizar o cadastro!</Strong>';
}

?>

  <form method="POST" action="login.php">
    <h2>Formul&aacute;rio de Cadastro</h2>
    <label>Nome:
    <input type="text" name="name" placeholder="Nome aqui..." required></label>
    <br>
    <label>Email:
    <input type="text" name="email" placeholder="Email aqui..." required></label>
    <br>
    <label>Senha:
    <input type="password" name="password" placeholder="Senha aqui..." required></label>
    <br><br>
    <input type="submit" value="Cadastrar" /> 
</form>
</div>