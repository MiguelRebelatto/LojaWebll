<?php

$nome = $_REQUEST['name'];
$email = $_REQUEST['email'];
$senha = password_hash($_REQUEST['password'],PASSWORD_DEFAULT);

$con=mysqli_connect("localhost","root","","test");
$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email','$senha')";

if ($con->query($sql) === TRUE) {
    header('location: login.php');
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

?>