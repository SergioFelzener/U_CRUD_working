<?php
//temos que informar o PHP que iremos trabalhar com $_SESSION startando nossa session 
session_start();

//incluindo o arquivo de conexaoPHP
include ('conexao.php');

// validacao caso usuario e senha estejam vazios, retorna ao INDEX...
if (empty($_POST['usuario']) || empty($_POST['senha'])) {
    header ('Location: login.php');
    exit();
}
// Criando variaveis de usuario e senha usando funcao mysqlirealescapestring, proteje conta ataque de SQL injection contra login, realizando validacoes para saber se esta vindo algum ataque de SQL Injection ...
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']); // POST do que esta sendo digitado
$senha = mysqli_real_escape_string($conexao, $_POST['senha']); // POST da senha que esta sendo digitado

// criando query com DB para saber retorno do que foi digitado se esta dentro do meu banco de dados.
$query = " select usuario_id, nome from usuario where usuario = '{$usuario}' and senha = md5 ('{$senha}') and status ='Ativo'";

// executando a query par ver retorno desativado !!!!
// echo $query;exit;

// criando variavel resultado para executar a query ..
$result = mysqli_query($conexao, $query);// definindo parametros com conexao e com a query montada acima 
                    //$conexao esta no arquivo conexao.php

// criando variavel row para saber retorno da autenticacao com o DB.
$row = mysqli_num_rows($result);

// executando a row par ver retorno desativado !!!! teste para saber se tem retorno dentro do DB.
// echo $row;exit;
//se autenticar direciona para painel.php
if ($row == 1 ) {
    $usuario_db = mysqli_fetch_assoc($result);
    $_SESSION['nome'] = $usuario_db['nome'];
    header('Location: menu.php');
    exit();
// caso nao autentique 
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();

}
