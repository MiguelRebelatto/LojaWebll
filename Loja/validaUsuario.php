<?php
$nome= $_REQUEST['name'];

$con=mysqli_connect("localhost","root","","test");
$result = mysqli_query($con,"SELECT senha FROM usuarios where nome='$nome'");
$hash_senha = mysqli_fetch_assoc($result);
$linhas = mysqli_num_rows($result);
if($linhas <= 0 or !password_verify($_REQUEST['password'], $hash_senha['senha'] )){
	echo 'falhou';
}
else{
	session_start();
	$_SESSION["name"] = $_REQUEST['name'];
	header('Location: index.php');
}

/*if ($linha > 0 AND password_verify($_REQUEST['password'], $linha['password'])){
	session_start();
	$_SESSION["name"] = $_REQUEST['name'];
	header('location: index.php');*/
//}else{
//	header('location: login.php?notFound=1');
//}
?>