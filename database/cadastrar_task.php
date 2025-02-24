<?php 
session_start();
require_once("conexao.php");

$title = $_POST["title"];
$description = $_POST["description"];
$user_id = $_SESSION["id"];

$sql = "INSERT INTO tasks (user_id, title, description) VALUES (?, ?, ?)";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("iss", $user_id, $title, $description);

if($stmt->execute()){
    $_SESSION["resposta"] = "Task cadastrada com sucesso!";
    header("Location: ../admin/home.php");
    exit;
} else {
    $_SESSION["resposta"] = "Task não foi criada com sucesso!";
    header("Location: ../admin/home.php");
    exit;
}
?>