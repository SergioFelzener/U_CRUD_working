<?php

include 'painel.php'
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Menu</title>
</head>
<body>
    <div class="container-fluid">
    
        <div class="card-deck" style="margin-left: 20%; margin-top: 5%;">
            <div class="row" style="padding:1em;">
            <?php 

                if (($nivel == 1)||($nivel == 2 )) {
            ?>

                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/cadastrar.png" alt="Imagem de capa do card">
                        <div class="card-body"><br>
                            <h5 class="card-title">Adicionar Produto</h5>
                            <p class="card-text">Adicionar produtos no banco de dados</p>
                            <a href="adicionar.php" class="btn btn-primary">Adicionar</a>
                        </div>
                </div>
                <?php } ?>

                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/listar.png" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Lista de Produtos</h5>
                            <p class="card-text">Listar, Editar e Deletar produtos no Banco de Dados</p>
                            <a href="listar.php" class="btn btn-primary">Listar</a>
                        </div>
                </div>
            </div>
        </div>
        <div class="card-deck" style="margin-left: 20%; margin-top: 2%;">
            <div class="row" style="padding:1em;">
            <?php 

            if (($nivel == 1) || ($nivel == 2)) {

            ?>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/categoria.png" alt="Imagem de capa do card">
                        <div class="card-body"><br>
                            <h5 class="card-title">Adicionar Categoria</h5>
                            <p class="card-text">Adicionar categorias no banco de dados</p>
                            <a href="adicionar_categoria.php" class="btn btn-primary">Cadastrar Categoria</a>
                        </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/fornecedor.png" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Adicionar Fornecedor</h5>
                            <p class="card-text">Adicionar a fornecedores ao banco de dados</p>
                            <a href="adicionar_fornecedor.php" class="btn btn-primary">Cadastrar Fornecedor</a>
                        </div>
                </div>
            <?php } ?>
            </div>
        </div>
        <div class="card-deck" style="margin-left: 20%; margin-top: 2%;">
            <div class="row" style="padding:1em;">

            <?php

                if ($nivel == 1) {
            ?>

          
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/administrador.png" alt="Imagem de capa do card">
                        <div class="card-body"><h5>Aprovar Usuários Cadastrados</h5>
                            <p class="card-text">Aprovar Usuarios no banco de dados dando suas permições</p>
                            <a href="aprovar_usuario.php" class="btn btn-primary">aprovar</a>
                        </div>
                </div>
                <?php } ?>
        
    </div>


<script type="texte/javascript" src="js/bootstrap.js"></script>
    
</body>
</html>