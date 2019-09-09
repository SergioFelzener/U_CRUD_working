<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/04d8502c9f.js"></script>
    <title>Listar Produtos</title>
</head>
<body>
<div class="container">

<h3>Lista de Produtos</h3>
     <table class="table table-sm table-dark">
            <thead>
              <tr>
                <th scope="col">#id_estoque</th>
                <th scope="col">nproduto</th>
                <th scope="col">nomeproduto</th>
                <th scope="col">categoria</th>
                <th scope="col">quantidade</th>
                <th scope="col">fornecedor</th>
                <th scope="col">Ação</th>
              

              </tr>
            </thead>
           
              
                <?php

                include 'conexao.php';
                $sql = "SELECT * FROM `estoque`"; 
                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {
                    $id_estoque = $array ['id_estoque'];
                    $nproduto = $array ['nproduto'];
                    $nomeproduto = $array ['nomeproduto'];
                    $categoria = $array ['categoria'];
                    $quantidade = $array ['quantidade'];
                    $fornecedor = $array ['fornecedor'];

                ?>
                <tr>
                  <td><?php echo $id_estoque ?></td>
                  <td><?php echo $nproduto ?></td>
                  <td><?php echo $nomeproduto ?></td>
                  <td><?php echo $categoria ?></td>
                  <td><?php echo $quantidade ?></td>
                  <td><?php echo $fornecedor ?></td>
                  <td><a class="btn btn-primary btn-sm" style="color:#ffffff" href="editar.php?id=<?php echo $id_estoque ?>" 
                    role="button"><i class="fas fa-pencil-alt"></i>&nbsp; &nbsp; Editar</a>

                    <a class="btn btn-danger btn-sm" style="color:#ffffff" href="deletar.php?id=<?php echo $id_estoque ?>" 
                    role="button"><i class="fas fa-trash-alt"></i>&nbsp; &nbsp; Apagar</a></td>
                </tr>
                
                <?php
                //abrindo novamente a tag php e fechando a {} do wilhe apos o td pois o laco vai adicionar elementos ao TD.

                } ?>



              </tr>
            
          </table>
          <div>
          <a href="menu.php" role="button" class="btn btn-sm btn-primary">voltar</a>
          </div>




<script type="texte/javascript" src="js/bootstrap.js"></script>
    
</body>
</html>