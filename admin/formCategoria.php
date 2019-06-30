
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<form method="POST" name="formulario" action="cadastraCategoria.php">
    <h2>Cadastro de Categoria</h2>
    <label>Nome da Categoria:
    <input type="text" class="form-control" name="nome" placeholder="Nome" required></label>
    <br>
    <label>Descrição
    <input type="text" class="form-control" name="descricao" placeholder="Descrição" ></label>
    <br>
    <input type="submit" class="btn btn-primary" value="Cadastrar" /> 
</form>	