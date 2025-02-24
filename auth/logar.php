<?php
session_start();
require_once("../database/conexao.php");

$user = $_POST['user'];
$password = $_POST['password'];

$sql = "SELECT id, password FROM users WHERE user = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("s", $user);
$stmt->execute();
$stmt->bind_result($id, $password_db);
$stmt->fetch();
$stmt->close();

if ($user == '' or $password_db == '') {
    $_SESSION["resposta"] = "Usuário ou senha incorretos!";
    var_dump($user, $password_db);
    exit;
}

if (password_verify($password, $password_db)) {
    $_SESSION["id"] = $id;
    $_SESSION["user"] = $user;
    header("Location: ../admin/home.php");
    exit;
} else {
    $_SESSION["resposta"] = "Usuário ou senha incorretos!";
    header("Location: ../pages/login.php");
    exit;
}
header("Location: ../pages/login.php");
exit;
