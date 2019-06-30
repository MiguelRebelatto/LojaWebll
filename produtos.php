<?php 
$con=mysqli_connect("localhost","root","","test");
$response = array();
$produtos = array();
$result=mysqli_query($con,"SELECT * FROM produtos");
while($row = mysqli_fetch_array($result))
{
    $id=$row['id']; 
    $nome=$row['nome'];
    $preco=$row['preco'];
    $descricao=$row['descricao'];
    $categorias=$row['categorias'];
    $produtos[] = array(
        'id'=> $id,
        'nome'=> $nome,
        'preco'=>$preco,
        'descricao'=>$descricao,
        'categorias'=>$categorias,
    );
} 

$response['produtos'] = $produtos;

$fp = fopen('produtos.json', 'w');
fwrite($fp, json_encode($response));
fclose($fp);


?> 