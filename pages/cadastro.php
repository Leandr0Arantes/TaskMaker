<?php
if (isset($_POST["email"])) {
    $email = $_POST["email"];
} else {
    $email = "";
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Assets/css/index.css">
    <title>Cadastre-se</title>
</head>

<body>
    <div class="container">
        <a href="../index.php">Voltar</a>
        <div class="cadastro">
            <form action="../database/cadastrar_usuario.php" method="post">
                <h1>Cadastro de usuário</h1>
                <label for="user">Usuário</label>
                <input type="text" name="user" id="user" required <?php echo "value=".$email ?>>
                <label for="password">Senha</label>
                <input type="password" name="password" id="password" required>
                <label for="password">Confirme a senha</label>
                <input type="password" name="password-confirm" id="password-confirm" required>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
</body>

<?php
session_start();

// Verifique se há uma mensagem de erro na sessão
if (isset($_SESSION['resposta'])) {
    // Exiba a mensagem de erro
    echo "<p style='color: red;'>" . $_SESSION['resposta'] . "</p>";

    // Remova a mensagem de erro da sessão para que não seja exibida novamente
    unset($_SESSION['resposta']);
}
?>

</html>