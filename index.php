<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>TaskMaker</title>
</head>
<body>
    <header>
        <div class="logo-taskmaker">
            <a href="index.php">Taskmaker</a>
        </div>
        <nav>
            <ul>
                <li><a href="#">Welcome</a></li>
                <li><a href="#">Teste</a></li>
                <li><a href="#">Teste</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
        <div class="btn-header">
            <a href="pages/login.php">Log in</a>
            <a class="sign-in" href="pages/cadastro.php">Sign in</a>
        </div>
    </header>
    <section class="welcome">
        <form action="" method="post">
            <input type="text">
        </form>
    </section>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga laborum nesciunt dolore beatae voluptatum minus tenetur nemo, sequi, culpa id natus ad iure officia illo? Iste sed quam mollitia dicta!</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga laborum nesciunt dolore beatae voluptatum minus tenetur nemo, sequi, culpa id natus ad iure officia illo? Iste sed quam mollitia dicta!</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga laborum nesciunt dolore beatae voluptatum minus tenetur nemo, sequi, culpa id natus ad iure officia illo? Iste sed quam mollitia dicta!</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga laborum nesciunt dolore beatae voluptatum minus tenetur nemo, sequi, culpa id natus ad iure officia illo? Iste sed quam mollitia dicta!</p>
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