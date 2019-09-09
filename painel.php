<?php
//capturando session armazenada =)
if(session_id() == '' || !isset($_SESSION)) {
    // session_start(); // com o session start estava dando noticia que a session ja esta aberta no verificaPHP
}
// estando para obter resultado de session desativado
// print_r($_SESSION);exit;
include ('verifica_login.php');
?>

<h2>Olá, <?php echo $_SESSION['nome'];?></h2>
<h2><a href="logout.php">Fazer o LOGOUT</a></h2>


<?php

include 'conexao.php';

$usuario = $_SESSION['nome'];

$sql = "SELECT nivel FROM usuario WHERE nome = '$usuario' and status = 'Ativo'";
$buscar = mysqli_query($conexao,$sql);
$array = mysqli_fetch_array($buscar);
echo $nivel = $array ['nivel'];

