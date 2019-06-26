<?php
//include_once('connect.php');
//$sql = "SELECT * FROM usuario WHERE name = '{$_REQUEST['name']}'";
//$result = mysqli_query($con, $sql);
//$linha =  mysqli_fetch_assoc($result);
//if ($linha > 0 AND password_verify($_REQUEST['password'], $linha['password'])){
	session_start();
	$_SESSION["name"] = $_REQUEST['name'];
	header('location: index.php');
//}else{
//	header('location: login.php?notFound=1');
//}
?>