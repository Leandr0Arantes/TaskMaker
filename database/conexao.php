<?php 
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "taskMaker";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if($conexao->connect_error){
    die("Conexão falhou: " . $conexao->connect_error);
}
?>