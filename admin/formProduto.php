<?php 
	$con=mysqli_connect("localhost","root","","test");

    $result = mysqli_query($con,"SELECT * FROM categorias");
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<form method="POST" name="formulario" action="cadastraProduto.php">
    <h2>Cadastro de Produto</h2>
    <label>Nome do produto:
    <input type="text" class="form-control" name="nome" placeholder="Nome" required></label>
    <br>
    <label>Preço: R$
    <input type="number" class="form-control" name="preco" placeholder="00,00" required></label>
    <br>
    <label>Descrição
    <input type="text" class="form-control" name="descricao" placeholder="Descrição" required></label>
    <br>
    <label>Categoria
    <select name="categorias">
    <?php while($row = mysqli_fetch_array($result))
    {
    	echo'<option value="' . $row['id'] . '">'. $row['nome'] . '</option>';
    }
    ?>	
    </select></label><br><br>
    <input type="submit" class="btn btn-primary" value="Cadastrar" /> 
</form>