<?php
//iniciando session
session_start();

//incluindo conexao PHP
include ("conexao.php");

//criando variaveis e usando trim para retirar os espacos do inicio e do final da STRING
$nome = mysqli_real_escape_string($conexao, trim ($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim ($_POST['usuario']));

//criando variaveis e usando trim e MD5(sistema de senhas para banco de dados MySQL) para retirar os espacos do inicio e do final da STRING
$senha = mysqli_real_escape_string($conexao, trim (md5($_POST['senha'])));
$nivel = mysqli_real_escape_string($conexao, $_POST['nivel']);
$status = 'Ativo';

$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    $_SESSION ['usuario_existe'] = true;
    header ('Location: cadastro.php');
    exit();
     
}
// inserindo na tabela usuario os campos abaixo + funcao NOW que grava hora do cadastro no MySQL !
$sql = "INSERT INTO usuario (nome, usuario, senha, data_cadastro, nivel, status) VALUES ('$nome', '$usuario', '$senha', NOW(),$nivel,'$status')"; 
//echo "INSERT INTO usuario (nome, usuario, senha, data_cadastro, nivel, estado) VALUES ('$nome', '$usuario', '$senha', NOW(),$nivel,'$estado')";

// validando usando 3 === que compara os dados valor booleano tem que voltar booleano
if ($conexao -> query($sql) === TRUE) {
    $_SESSION ['status_cadastro'] = true;
}
// encerrando conexao 
$conexao -> close();
// voltar para cadastro 
header ('Location: cadastro.php');
exit();


?>
