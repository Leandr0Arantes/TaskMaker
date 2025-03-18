<?php
session_start();
require_once("../conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $sobrenome = filter_input(INPUT_POST, "sobrenome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    if ($_POST['senha'] === $_POST['repita-senha']) {
        $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);
    } else {
        $_SESSION["resposta"] = "As senhas não são iguais!";
        header("Location: ../pages/cadastro.php");
        exit;
    }

    try {
        $sql = "INSERT INTO usuarios (nome, sobrenome, email, senha) VALUES (?, ?, ?, ?)";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("ssss", $nome, $sobrenome, $email, $senha);

        if ($stmt->execute()) {
            $_SESSION["resposta"] = "Usuário cadastrado com sucesso!";
            header("Location: ../../pages/signin.php");
            exit;
        }
    } catch (Exception $error) {
        if ($error->getCode() == 1062) {
            $_SESSION["resposta"] = "Usuário já cadastrado";
        } else {
            $_SESSION["resposta"] = "Erro ao cadastrar usuário";
        }
    }
} else {
    $_SESSION["resposta"] = "Variável POST inválida!";
}

header("Location: ../../pages/signup.php");
exit;
