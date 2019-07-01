<?php
    session_start();
    $nome = $_SESSION['name'];
    $con=mysqli_connect("localhost","root","","test");
    $result = mysqli_query($con,"SELECT * FROM usuarios WHERE nome = '$nome'");
    $row = mysqli_fetch_assoc($result);
    $emailDestinatario  = $row['email'];
    $nomeDestinario     = $_SESSION['name'];
    $assunto = $_REQUEST['assunto'];
    $body = '<p>' . $_REQUEST['mensagem'] . '</p>';
    require_once("sendEmail.php"); 
    if($enviado){
        header('location: contact.php?enviado=1');
    }else{
        //header('location: contact.php?enviado=0');
    }
?>