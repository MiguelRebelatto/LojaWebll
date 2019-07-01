<?php
  require_once("layout.php");
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- Page Content -->
  <div class="container" style="height: 80%">
  	<div class="card" style="margin-bottom: 20px;padding: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
		<div class="">
		<h4>Fale Conosco</h4>

			<div class="col-md-6" style="display: inline-block;">
				<form method="POST" action="contactEmail.php">
					<label>Assunto:
					<input class="form-control" type="text" name="assunto" placeholder="Assunto aqui..." required></label>
					<br>
					<label>Mensagem:
					<textarea rows="7" cols="50" class="form-control" name="mensagem" placeholder="Mensagem aqui..." required></textarea></label>
					<br>
					<br>
					<input class="btn btn-primary" type="submit" value="Enviar" /> 
				</form>
			</div>

			<div class="col-md-4" style="display: inline-block;">
			<h5> Endereço </h5>
				<p>
				Instituto Federal do Rio Grande do Sul, Campus Canoas - R. Dra. Maria Zélia Carneiro de Figueiredo, 870 - A - Igara, Canoas - RS, 92412-240
				</p>
				<h5> Telefone </h5>
				<p>
				(51) 99988-9999
				</p>
            </div>
		</div>
	</div>
  </div>
<!-- /.container -->

<?php
  require_once("footer.php");
?>
