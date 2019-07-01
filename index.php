<?php
  require_once("layout.php");
  require_once("produtos.php");
?>
<!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">LoXinha</h1>
        <div class="list-group">
          <a href="#" class="list-group-item">Category 1</a>
          <a href="#" class="list-group-item">Category 2</a>
          <a href="#" class="list-group-item">Category 3</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->
      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
<!-- Itens -->
        <div class="row">
        <!-- Esse trexo pega os produtos no banco e lista eles na página -->
        <?php 
            $con=mysqli_connect("localhost","root","","test");

            $result = mysqli_query($con,"SELECT * FROM produtos");
            while($row = mysqli_fetch_array($result))
            {

            echo 
            '<div class="col-lg-4 col-md-6 mb-4">
             <div class="card h-100">
              <a href="produtoDetail.php?idProd=' . $row['id'] .'"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="produtoDetail.php?idProd=' . $row['id'] .'">' . $row['nome'] .'</a>
                </h4>
                <h5>'. $row['preco']. '</h5>
                <p class="card-text">'.$row['descricao'].'</p>
                <button id="'. $row['id'] .'" type="button" class="btn btn-primary botao"><a style="color: white; text-decoration: none" href="carrinho.php">Adicionar ao Carrinho</a></button>
              </div>
            </div>
          </div>';

            }
        ?>

<!-- Itens -->

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
<!-- /.container -->

<script type="application/javascript">
function inserirItemCarrinho(productId){
  if(localStorage.length == 0 ){
  itens = [];
    readTextFile("produtos.json", function(text){
          var data = JSON.parse(text);
          for (var i = 0; i< data.produtos.length; i++){
            var produto = data.produtos[i];
            for(var key in produto){
              var chave = key;
              var valor = produto[key];
              if (chave == "id" && valor == productId){
                produto['qntd'] = 1;
                produto['subTotal'] = produto['preco'] * produto['qntd'];
                itens[0] = produto;
                localStorage['Itens'] = JSON.stringify(itens);
                break;
              }
            }
          }
    });
  }
  else{
    itensCarrinho = JSON.parse(localStorage['Itens']);
    for ( var i = 0; i< itensCarrinho.length; i++){
      itemCarrinho = itensCarrinho[i];
      if (itemCarrinho['id'] == productId){
        itemCarrinho['qntd'] = itemCarrinho['qntd'] + 1;
        itemCarrinho['subTotal'] = itemCarrinho['preco'] * itemCarrinho['qntd'];
        itensCarrinho[i] = itemCarrinho;
        localStorage['Itens'] = JSON.stringify(itensCarrinho);
        return;
      }
    }
    itensDentroCarrinho = JSON.parse(localStorage['Itens']);
    readTextFile("produtos.json", function(text){
          var data = JSON.parse(text);
          for (var i = 0; i< data.produtos.length; i++){
            var produto = data.produtos[i];
            for(var key in produto){
              var chave = key;
              var valor = produto[key];
              if (chave == "id" && valor == productId){
                produto['qntd'] = 1;
                produto['subTotal'] = produto['preco'] * produto['qntd'];
                itensDentroCarrinho[itensDentroCarrinho.length] = produto;
                localStorage['Itens'] = JSON.stringify(itensDentroCarrinho);
                break;
              }
            }
          }
    });    
  }
}

var botoes = document.getElementsByClassName("botao");
for (let index = 0; index < botoes.length; index++) {
    botoes[index].addEventListener("click",function(){
      inserirItemCarrinho(botoes[index].getAttribute("id"))}
      );
}  
//Lê o JSON produtos.json
function readTextFile(file, callback) {
var rawFile = new XMLHttpRequest();
rawFile.overrideMimeType("application/json");
rawFile.open("GET", file, true);
rawFile.onreadystatechange = function() {
    if (rawFile.readyState === 4 && rawFile.status == "200") {
        callback(rawFile.responseText);
    }
  }
rawFile.send(null);
}
</script>  
<?php
  require_once("footer.php");
?>
