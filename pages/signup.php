<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/images/taskmaker_icon.ico" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Taskmaker | Cadastre-se</title>
</head>

<body>
    <div class="interface">
        <div class="form-container">
            <form action="../database/usuarios/cadastrar_usuario.php" method="post">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" required>
                <label for="sobrenome">Sobrenome</label>
                <input type="text" name="sobrenome" id="sobrenone" required>
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" required>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" required>
                <label for="repita-senha">Repita a senha</label>
                <input type="password" name="repita-senha" id="repita-senha" required>
                <button type="submit">Cadastrar-se</button>
            </form>
        </div>
    </div>
</body>

<?php
if (isset($_SESSION['resposta'])) {
    echo "<p style='color: red;'>" . $_SESSION['resposta'] . "</p>";
    unset($_SESSION['resposta']);
}
?>

</html>