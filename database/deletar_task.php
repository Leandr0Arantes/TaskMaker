<?php 
require_once("conexao.php");

$id = $_POST["id"];

$sql = "DELETE from tasks WHERE id = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("i", $id);

if($stmt->execute()){
    $_SESSION["resposta"] = "Task deletada com sucesso!";
    header("Location: ../admin/home.php");
    exit;
} else {
    $_SESSION["resposta"] = "Erro ao deletar task!";
    header("Location: ../admin/home.php");
    exit;
}
?>