<?php 
$con=mysqli_connect("localhost","root","","test");
$texto = @$_POST['texto'];
$sql = "SELECT * FROM produtos WHERE nome LIKE" . "'%" . $texto ."%'";
$resultPesquisa = mysqli_query($con, $sql);//WHERE nome = " . $texto);
$array = mysqli_fetch_array($resultPesquisa);
echo json_encode($array);
?>