<html>
    <head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    </head>
    <body>
    <?php
		require_once("layout.php");
    ?>

<div id="containerCart" style="height:100%" class="container"></div>
<script>
	if(localStorage.length > 0){
		container = document.getElementById("containerCart");
		container.insertAdjacentHTML('afterbegin',
			'<table id="cart" class="table table-hover table-condensed">" \
    				<thead>\
						<tr>\
							<th style="width:50%">Produto</th>\
							<th style="width:10%">Preço</th>\
							<th style="width:8%">Quantidade</th>\
							<th style="width:22%" class="text-center">Subtotal</th>\
							<th style="width:10%"></th>\
						</tr>\
					</thead>\
					<tbody>'+carregarCarrinho()+'</tbody>\
					<tfoot>\
						<tr class="visible-xs">\
							<td class="text-center"><strong class="totalCarrinho"></strong></td>\
						</tr>\
						<tr>\
							<td><a href="index.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continuar Comprando</a></td>\
							<td colspan="2" class="hidden-xs"></td>\
							<td class="hidden-xs text-center"><strong class="totalCarrinho"></strong></td>\
							<td><a href="checkout.php" class="btn btn-success btn-block">Finalizar Compra<i class="fa fa-angle-right"></i></a></td>\
						</tr>\
					</tfoot>\
				</table>');
				calcularValorTotal();
	}
	var inputsQntd = document.getElementsByClassName("form-control");
	var botaoRemover = document.getElementsByClassName("removerProduto");
	for (var i = 0; i< inputsQntd.length; i++){
		inputsQntd[i].addEventListener('change',alterarQntdProduto);
		botaoRemover[i].addEventListener('click',removerProdutoCarrinho);
	}
	function carregarCarrinho(){
		var conteudoHTML= "";
		for (var i = 0; i < localStorage.length; i++) {
			var itens = JSON.parse(localStorage['Itens']);
			for (i=0;i<itens.length;i++){
				item = itens[i];
				conteudoHTML += '<tr id="' + item['id'] + '">\
							<td data-th="Product">\
								<div class="row">\
									<div class="col-sm-2 hidden-xs">\
									<img src="http://placehold.it/100x100" class="img-responsive"/>\
									</div>\
									<div class="col-sm-10">\
										<h4 class="nomargin">' + item['nome'] + '</h4>\
										<p>' + item['descricao'] + '</p>\
									</div>\
								</div>\
							</td>\
							<td data-th="Price">' + item['preco'] + '</td>\
							<td data-th="Quantity">\
								<input type="number" class="form-control text-center" value="'+ item['qntd']+'">\
							</td>\
							<td data-th="Subtotal" class="text-center">' + item['subTotal'] + '</td>\
							<td class="actions" data-th="">\
								<button class="btn btn-danger btn-sm removerProduto"><i class="fa fa-trash-o"></i></button>'+						
							'</td>\
						</tr>';
			}					
		}
	return conteudoHTML;
	}
	function removerProdutoCarrinho(){
		var retorno = confirm("Deseja Remover o item?");
		if (retorno == false) {
		return;
		}else {
			idProduto = this.parentElement.parentElement.id;
			var itens = JSON.parse(localStorage['Itens']);
			for (i=0;i<itens.length;i++){
				item = itens[i];
				if (item['id'] == idProduto){
					if(itens.length == 1){
						localStorage.removeItem('Itens');
						this.parentElement.parentElement.parentElement.parentElement.remove();
						console.log("entrou no apagar tabela");
						break;
					}else{
						itens.splice(i,1);
						console.log(itens);
						localStorage['Itens'] = JSON.stringify(itens);
						this.parentElement.parentElement.remove();
						calcularValorTotal();
						console.log("entrou no splice");
						break;
					}
				}	 
			}			
		}		
	}
	function alterarQntdProduto(){
		idProduto = this.parentElement.parentElement.id;
		var itens = JSON.parse(localStorage['Itens']);
		for (i=0;i<itens.length;i++){
				item = itens[i];
			if (item['id'] == idProduto){
				item['qntd'] = this.value;
				item['subTotal'] = item['qntd'] * item['preco'];
				localStorage['Itens'] = JSON.stringify(itens);
				this.parentElement.nextElementSibling.innerHTML = item['subTotal'];
				calcularValorTotal();
				break;
			} 
		}

	}
	function calcularValorTotal(){
		var itens = JSON.parse(localStorage['Itens']);
		var valorTotalItem = 0.00;
		for (i=0;i<itens.length;i++){
			item = itens[i];
			valorTotalItem += item['subTotal'];
		}
		for(i=0; i < 2 ; i++){
				document.getElementsByClassName("totalCarrinho")[i].innerHTML ='Total ' +valorTotalItem;
			}	
	}
	
	
</script>
        <?php
         require_once("footer.php");
        ?>
    </body>
</html>

