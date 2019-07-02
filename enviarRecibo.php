<?php
    session_start();
    $nome = $_SESSION['name'];
    $con=mysqli_connect("localhost","root","","test");
    $result = mysqli_query($con,"SELECT * FROM usuarios WHERE nome = '$nome'");
    $row = mysqli_fetch_assoc($result);
    $emailDestinatario  = $row['email'];
    $nomeDestinario     = $_SESSION['name'];
    $pedido = $_POST['pedidoCliente'];
    $itensPedidos = json_decode($pedido);
    $totalPedido = 0;
    $mensagem = "<p>Seu pedido foi recebido pelo o nosso sistema.</p><br>Pedido:<br>";
    for ($i=0; $i < sizeof($itensPedidos) ; $i++) { 
        $nomeProduto = $itensPedidos[$i]->nome;
        $qntd = $itensPedidos[$i]->qntd;
        $subTotal = $itensPedidos[$i]->subTotal;
        $totalPedido += $subTotal;
        $mensagem = '<p>Produto: '. $nomeProduto .'</p>'.
                    '<p>Quantidade: '. $qntd . '</p>';
    }
    $mensagem = $mensagem. '<p>Total: '. $totalPedido . '</p><p>Obg pela preferência ;)'; 
    $assunto = "Recibo da sua compra.";
    $body = $mensagem;
    require_once("sendEmail.php");
?>