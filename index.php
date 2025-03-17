<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="shortcut icon" href="assets/images/taskmaker_icon.ico" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>TaskMaker</title>
</head>

<body>
    <header>
        <div class="interface">
            <div class="logo-taskmaker">
                <a href="index.php"><img id="imagem-logo" src="assets/images/taskmaker_logo_blue.png" alt=""></a>
            </div>
            <div class="btn-header">
                <a href="pages/login.php">Logar</a>
                <a class="sign-in" href="pages/cadastro.php">Registre-se</a>
            </div>
        </div>
    </header>
    <button class="btn-tema" id="btn-tema"><i class="fa-solid fa-moon"></i></button>
    <section class="welcome">
        <div class="interface">
            <div class="conteudo">
                <h1>Capture, organize e enfrente suas tarefas em qualquer lugar.</h1>
                <p>Escape da desordem e aumente sua produtividade com Taskmaker.</p>
                <form action="pages/cadastro.php" method="post">
                    <input type="email" name="email" id="email" placeholder="E-mail">
                    <button type="submit">Registre-se - É gratís!</button>
                </form>
            </div>
            <div class="imagem">
                <img id="imagem-home" src="assets/images/img_home.png" alt="">
            </div>
        </div>
    </section>

    <script src="assets/javaScript/index.js"></script>
</body>

<?php
if (isset($_SESSION['resposta'])) {
    echo "<p style='color: red;'>" . $_SESSION['resposta'] . "</p>";
    unset($_SESSION['resposta']);
}
?>

</html>