<?php

include 'conexao.php';

$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO fornecedor (nome_forn) values ('$fornecedor')";
$inserir = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">

<div class="container">
    <h3> Fornecedor criado com Sucesso </h3>
    <a href="adicionar_fornecedor.php" class="btn btn-sm btn-warning" style="color: #ffffff">Voltar</a>

</div>