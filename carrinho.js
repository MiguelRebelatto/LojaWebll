function inserirItemCarrinho(productId){
//verifica se o carrinho está vazio
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
                  alert("Item adicionado ao carrinho com sucesso.");
                  break;
                }
              }
            }
      });
    }
    //se não tiver vazio, ele vai verificar se já tem um produto com o mesmo id
    else{
      itensCarrinho = JSON.parse(localStorage['Itens']);
      for ( var i = 0; i< itensCarrinho.length; i++){
        itemCarrinho = itensCarrinho[i];
        //se já tive um produto com o mesmo id, vai alterar a quantidade desse produto no carrinho e sair da função
        if (itemCarrinho['id'] == productId){
          itemCarrinho['qntd'] = itemCarrinho['qntd'] + 1;
          itemCarrinho['subTotal'] = itemCarrinho['preco'] * itemCarrinho['qntd'];
          itensCarrinho[i] = itemCarrinho;
          localStorage['Itens'] = JSON.stringify(itensCarrinho);
          alert("Adicionado ao carrinho com sucesso.");
          
        }
      }
      //Caso a função não retorne no loop anterior, significa que é um produto diferente que vai ser adicionado
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
                  alert("Adicionado ao carrinho com sucesso.");
                  break;
                }
              }
            }
      });    
    }
  }
//Event listerner nos botões para adicionar ao carrinho
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
