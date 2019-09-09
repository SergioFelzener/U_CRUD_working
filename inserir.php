<?php

include 'conexao.php';

// criando variavel do e recebendo a variavel 
$nproduto = $_POST['nproduto']; // recebe o valor do atributo no form 
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];
// verificando o retorno das variaveis 
// echo $sql = "INSERT INTO `estoque`(`nproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nproduto, '$nomeproduto', '$categoria', $quantidade, '$fornecedor')"; 

$sql = "INSERT INTO `estoque`(`nproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nproduto, '$nomeproduto', '$categoria', $quantidade, '$fornecedor')"; 

$inserir = mysqli_query($conexao, $sql);

// verificando as variaveis 
//echo $nproduto;
//echo "<br>";
//echo $nomeproduto;
//echo "<br>";
//echo $categoria



?>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">

<div class="container">
    <h4> PRODUTO ADICIONADO COM SUCESSO</h4>
<div style="padding-top: 20px">
    <a href="menu.php" role="button" class="btn btn-sm">Cadastrar novo Produto</a>
</div>
</div>
