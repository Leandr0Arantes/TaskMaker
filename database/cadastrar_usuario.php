<?php
session_start();
require_once("conexao.php");


$user = $_POST["user"];

if ($_POST['password'] == $_POST['password-confirm']) {
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
} else {
    $_SESSION["resposta"] = "As senhas não são iguais!";
    header("Location: ../pages/cadastro.php");
    exit;
}

try {
    $sql = "INSERT INTO users (user, password) VALUES (?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ss", $user, $password);

    if ($stmt->execute()) {
        $_SESSION["resposta"] = "Usuário cadastrado com sucesso!";
        header("Location: ../pages/login.php");
        exit;
    }
} catch (Exception $error) {
    if ($error->getCode() == 1062) {
        $_SESSION["resposta"] = "Usuário já cadastrado";
    } else {
        $_SESSION["resposta"] = "Erro ao cadastrar usuário";
    }
}

header("Location: ../pages/cadastro.php");
exit;
