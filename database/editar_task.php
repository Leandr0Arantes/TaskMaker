<?php 
require_once('conexao.php');

$id = $_POST["id"];

$sql = "SELECT title, description FROM tasks WHERE id = ?";
$stmt->bind_param("i", $id);

?>