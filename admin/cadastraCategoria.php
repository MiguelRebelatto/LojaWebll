<?php

require_once("../MySQL.class.php");
$bd = new MySQL('localhost', 'root', '', 'test');

//EXEMPLO INSERT
//$array = array("name" => "'JohnSilvagfghh'","password" => "'" . password_hash('teste', PASSWORD_DEFAULT) . "'","email" => "'t@t.com'");
//$bd->insert('usuario',$array);

$array = array("nome" => "'". $_REQUEST['nome']."'", "descricao" => "'". $_REQUEST['preco']."'");

print_r($array);

$bd->insert('categorias',$array);
header('Location: ../index.php');
?>