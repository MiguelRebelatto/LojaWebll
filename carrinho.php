<html>
    <head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
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
					<tbody>\
						<tr>\
							<td data-th="Product">\
								<div class="row">\
									<div class="col-sm-2 hidden-xs">\
									<img src="http://placehold.it/100x100" class="img-responsive"/>\
									</div>\
									<div class="col-sm-10">\
										<h4 class="nomargin">Product 1</h4>\
										<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>\
									</div>\
								</div>\
							</td>\
							<td data-th="Price">$1.99</td>\
							<td data-th="Quantity">\
								<input type="number" class="form-control text-center" value="1">\
							</td>\
							<td data-th="Subtotal" class="text-center">1.99</td>\
							<td class="actions" data-th="">\
								<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>'+						
							'</td>\
                        </tr>\
					</tbody>\
					<tfoot>\
						<tr class="visible-xs">\
							<td class="text-center"><strong>Total 1.99</strong></td>\
						</tr>\
						<tr>\
							<td><a href="index.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continuar Comprando</a></td>\
							<td colspan="2" class="hidden-xs"></td>\
							<td class="hidden-xs text-center"><strong>Total $1.99</strong></td>\
							<td><a href="checkout.php" class="btn btn-success btn-block">Finalizar Compra<i class="fa fa-angle-right"></i></a></td>\
						</tr>\
					</tfoot>\
				</table>');
	}
</script>
        <?php
         require_once("footer.php");
        ?>
    </body>
</html>