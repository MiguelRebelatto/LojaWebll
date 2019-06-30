<?php

require_once("../MySQL.class.php");
$bd = new MySQL('localhost', 'root', '', 'test');

//EXEMPLO INSERT
//$array = array("name" => "'JohnSilvagfghh'","password" => "'" . password_hash('teste', PASSWORD_DEFAULT) . "'","email" => "'t@t.com'");
//$bd->insert('usuario',$array);

$array = array("nome" => "'". $_REQUEST['nome']."'", "preco" => $_REQUEST['preco'], "descricao" => "'". $_REQUEST['preco']."'", "categorias" => "'". $_REQUEST['categorias']."'");

print_r($array);

$bd->insert('produtos',$array);
header('Location: ../index.php');
?>