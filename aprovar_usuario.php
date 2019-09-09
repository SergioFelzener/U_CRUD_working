<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/04d8502c9f.js"></script>
    <title>Aprovar usuário</title>
</head>
<body>
<div class="container">

<h3>(ADMINISTRADOR) Aprovar Usuário</h3>
     <table class="table table-sm table-dark">
            <thead>
              <tr>
                <th scope="col">#id_usuário</th>
                <th scope="col">Nome</th>
                <th scope="col">Usuário</th>
                <th scope="col">Nivel</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>

                <?php

                  include 'conexao.php';
                  $sql = "SELECT * FROM `usuario` WHERE status ='Inativo'"; 
                  $busca = mysqli_query($conexao, $sql);

                  while ($array = mysqli_fetch_array($busca)) {
                      $id_usuario = $array ['usuario_id'];
                      $nome = $array ['nome'];
                      $usuario = $array ['usuario'];
                      $nivel = $array ['nivel'];
             

                ?>
                <tr>
                  <td><?php echo $id_usuario ?></td>
                  <td><?php echo $nome ?></td>
                  <td><?php echo $usuario ?></td>
                  <td><?php echo $nivel ?></td>
                    <!-- &nbsp; &nbsp dando espaço-->
                  <td><a class="btn btn-success btn-sm" style="color:#ffffff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?> &nivel=1" 
                    role="button"><i class="far fa-thumbs-up"></i>&nbsp; &nbsp; Administrador</a>
                    <a class="btn btn-warning btn-sm" style="color:#ffffff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?> &nivel=2" 
                    role="button"><i class="far fa-thumbs-up"></i>&nbsp; &nbsp; Funcionário</a>
                    <a class="btn btn-info btn-sm" style="color:#ffffff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?> &nivel=3" 
                    role="button"><i class="fas fa-chalkboard-teacher"></i>&nbsp; &nbsp; Conferente</a>

                    <a class="btn btn-danger btn-sm" style="color:#ffffff" href="deletar_usuario.php?id=<?php echo $id_usuario ?>" 
                    role="button"><i class="fas fa-hand-middle-finger"></i>&nbsp; Apagar</a></td>
                </tr>
                
                <?php
                //abrindo novamente a tag php e fechando a {} do while apos o td pois o laco vai adicionar elementos ao TD.

                } ?>



              </tr>
            
          </table>
          <div>
          <a href="menu.php" role="button" class="btn btn-sm btn-primary">voltar</a>
          </div>




<script type="texte/javascript" src="js/bootstrap.js"></script>
    
</body>
</html>