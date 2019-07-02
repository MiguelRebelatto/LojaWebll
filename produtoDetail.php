<?php
  require_once("layout.php");
  require_once("MySQL.class.php");

  $bd = new MySQL('localhost', 'root', '', 'test');

  $idProd = $_GET['idProd'];
    echo $idProd;
  $con=mysqli_connect("localhost","root","","test");
  $result = mysqli_query($con,"SELECT * FROM produtos WHERE id = $idProd");
  $row = mysqli_fetch_assoc($result);
?>

<div class="container">
		<div class="card" style="height: 80%; margin-bottom: 20px;padding: 20px; background-color: #F8F8FF;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
			<div class="">
                <h1>
                    <?php echo $row['nome'] ?>
                </h1>
				<div class="col-md-6" style="display: inline-block;">
                    <img src="./imagensProdutos/<?php echo $row['id']?>.jpg" alt="imagem do produto" style="max-width: 90%">
                    <?php //echo $row['imagem'] ?>
                </div>

                <div class="col-md-4" style="display: inline-block;">
                <button type="button" id="<?php echo $row['id'] ?>" class="btn btn-success botao">Adicionar ao Carrinho</button>
                <button type="button" class="btn btn-success"><a style="color: white; text-decoration: none" href="#">Comprar</a></button>
                    <?php echo "<h3>Valor: R$ ".$row['preco']."</h3>" ?>
                    <br>
                    <p>
                    <?php echo $row['descricao']?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="application/javascript" src="carrinho.js"></script>  

<?php
  require_once("footer.php");
?>
