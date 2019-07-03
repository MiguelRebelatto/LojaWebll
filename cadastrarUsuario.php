<?php

    $nome = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $senha = password_hash($_REQUEST['password'],PASSWORD_DEFAULT);

    $con=mysqli_connect("localhost","root","","test");

    $result = mysqli_query($con,"SELECT nome FROM usuarios where nome='$nome'");
    $linhas = mysqli_num_rows($result);
    if($linhas > 0){
        header('location: form.php?msgName=1');
    }else{

        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email','$senha')";

        if ($con->query($sql) === TRUE) {
            header('location: login.php');
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
?>