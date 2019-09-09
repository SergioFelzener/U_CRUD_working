<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>CRUD</title>
</head>
<body>
<div class="container" id="tamanhoContainer">
    <h4>Formulário de cadastro</h4>
        <form action="inserir.php" method="POST">

            <div class="form-group">
                <label>Numero do Produto</label>
                <input type="number" class="form-control" name="nproduto" placeholder="Numero do Produto" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Nome do produto</label>
                <input type="text" class="form-control" name="nomeproduto" placeholder="Nome do Produto" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Categoria</label>
                    <select class="form-control" name="categoria" autocomplete="off" required>

                        <?php
                                // abrir php dentro do select para buscar as categorias dentro do banco de dados 
                                include 'conexao.php';
                                // listando a tabela categoria os nomes de categorias criados na base de dados e listando em ordem alfabetica.
                                $sql = "SELECT * FROM categoria order by nome_categoria ASC";
                                $buscar = mysqli_query($conexao, $sql);

                                // buscando valores dentro do banco de dados que e nossa variavel buscar acima 
                        
                                // fecha a {} depois do option que vai abrir na tela mostrando todas as categorias 
                                while ($array = mysqli_fetch_array($buscar)) {
                                   //listando id_categoria
                                    $id_categoria = $array ['id_categoria'];
                                    $nome_categoria = $array ['nome_categoria'];
  
                        ?>
                             <option><?php echo $nome_categoria ?></option>
                        <?php
                        // fechando while depois do option para tal e necessario abrir novamente o php 

                                }
                        ?>  
                    </select>
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="quantidade" placeholder="Quantidade" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control" name="fornecedor" autocomplete="off" required>
                <?php
                                // abrir php dentro do select para buscar as categorias dentro do banco de dados 
                                include 'conexao.php';
                                // listando a tabela fornecedor os nomes de fornecedores criados na base de dados e listando em ordem alfabetica.
                                $sql2 = "SELECT * FROM fornecedor order by nome_forn ASC";
                                $buscar2 = mysqli_query($conexao, $sql2);

                                // buscando valores dentro do banco de dados que e nossa variavel buscar acima 
                        
                                // fecha a {} depois do option que vai abrir na tela mostrando todas as categorias 
                                while ($array2 = mysqli_fetch_array($buscar2)) {
                                   //listando id_categoria
                                    $id_categoria = $array2 ['id_forn'];
                                    $nome_fornecedor = $array2 ['nome_forn'];
  
                        ?>
                             <option><?php echo $nome_fornecedor ?></option>
                        <?php
                        // fechando while depois do option para tal e necessario abrir novamente o php 

                                }
                        ?>  
                </select>
            </div>
            <div id="btnCadastro">
                <a href="menu.php" role="button" class="btn btn-sm btn-primary">voltar</a>
                <button type="submit" id="botao" class="btn btn-sm">cadastrar</button>
                
            </div>

        </form>




    </div>



<script type="texte/javascript" src="js/bootstrap.js"></script>
</body>
</html>