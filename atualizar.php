<?php

include 'conexao.php';

$id = $_POST ['id'];
// $nproduto = $_POST['nproduto']; nao vamos atualizar esse campo 
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];


$sql = "UPDATE `estoque` SET `nomeproduto`= '$nomeproduto',`categoria`= '$categoria', `quantidade` = $quantidade ,`fornecedor` = '$fornecedor' WHERE id_estoque = $id";

$atualizar = mysqli_query($conexao, $sql);


?>

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">

<div class="container">
    <h3> Atualizado com sucesso </h3>
    <a href="listar.php" class="btn btn-sm btn-warning" style="color: #ffffff">Voltar</a>

</div>

