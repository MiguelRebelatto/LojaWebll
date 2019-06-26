<?php
  require_once("layout.php");
?>

<!-- Page Content -->
  <div class="container">

  	<h4>Fale Conosco</h4>

  	<div>
  		<form method="POST" action="enviaEmail.php">
	        <label>Assunto:
	    	<input type="text" name="assunto" placeholder="Assunto aqui..." required></label>
	    	<br>
	        <label>Mensagem:
	    	<input type="text" name="mensagem" placeholder="Mensagem aqui..." required></label>
	    	<br>
	    	<br><br>
	    	<input type="submit" value="Enviar" /> 
		</form>

  	</div>

  </div>
<!-- /.container -->

<?php
  require_once("footer.php");
?>
