<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Assets/css/index.css">
    <title>TaskMaker</title>
</head>
<body>
    <div class="container">
        <h1>TaskMaker</h1>
    <a href="pages/login.php">login</a>
    <a href="pages/cadastro.php">cadastro de usuário</a>
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