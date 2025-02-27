<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="shortcut icon" href="assets/images/taskmaker_icon.ico" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>TaskMaker</title>
</head>

<body>
    <header>
        <div class="logo-taskmaker">
            <a href="index.php"><img src="assets/images/tasmaker_azul.png" alt=""></a>
        </div>
        <nav>
            <ul>
                <li><a href="#">Welcome</a></li>
                <li><a href="#como_funciona">Como Funciona?</a></li>
                <li><a href="#sobre_nos">Sobre nós</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </nav>
        <div class="btn-header">
            <a href="pages/login.php">Logar</a>
            <a class="sign-in" href="pages/cadastro.php">Registre-se</a>
        </div>
    </header>
    <section class="welcome">
        <form action="" method="post">
            <input type="text">
        </form>
    </section>
    <section id="funcionalidades" class="funcionalidades">
        <div class="container active">
            <div class="conteudo">
                <h2>Nosso site é focado no gerenciamento otimizado de tarefas</h2>
                <p>Com o TaskMaker, você pode organizar suas tarefas de forma eficiente e prática, aumentando sua produtividade e garantindo que você nunca perca um prazo importante.</p>
            </div>
            <div class="imagem">
                
            </div>
        </div>
        <div class="container">
            <div class="conteudo">

            </div>
            <div class="imagem"></div>
        </div>
        <div class="container">
            Como funciona?
            <div class="conteudo"></div>
            <div class="imagem"></div>
        </div>
        <div class="container">
            Outras utilidades
            <div class="conteudo"></div>
            <div class="imagem"></div>
        </div>
        <div class="botoes">
            <button id="btn-prev"><i class="fa-solid fa-angle-left"></i></button>
            <span><i class="fa-solid fa-circle"></i></span>
            <span><i class="fa-regular fa-circle"></i></span>
            <span><i class="fa-regular fa-circle"></i></span>
            <span><i class="fa-regular fa-circle"></i></span>
            <button id="btn-next"><i class="fa-solid fa-angle-right"></i></button>
        </div>
    </section>
    <section id="sobre_nos" class="sobre_nos"></section>
    <section id="contato" class="contato">
        <form action="" method="post">
            <p>Entre em contato conosco!</p>
            <div class="form-group">
                <span><i class="fa-light fa-circle-user"></i></span>
                <input type="text" name="nome" id="nome">
            </div>
            <div class="form-group">
                <span><i class="fa-regular fa-envelope"></i></span>
                <input type="email" name="email" id="email">
            </div>

        </form>
    </section>
    <footer>
        <p>Direitos reservados. Leandro Henrique Arantes</p>
    </footer>
    <script>
        const containers = document.querySelectorAll('.funcionalidades .container');
        const circles = document.querySelectorAll('.botoes span i');
        let indexAtual = 0;

        document.getElementById('btn-next').addEventListener('click', function(){
            containers[indexAtual].classList.remove('active');
            circles[indexAtual].classList.replace('fa-solid', 'fa-regular');

            indexAtual++;

            if(indexAtual >= containers.length){
                indexAtual = 0
            }

            containers[indexAtual].classList.add('active');
            circles[indexAtual].classList.replace('fa-regular', 'fa-solid');

        })

        document.getElementById('btn-prev').addEventListener('click', function(){
            containers[indexAtual].classList.remove('active');
            circles[indexAtual].classList.replace('fa-solid', 'fa-regular');
            
            if(indexAtual <= 0){
                indexAtual = containers.length;
            }

            indexAtual--;

            containers[indexAtual].classList.add('active');
            circles[indexAtual].classList.replace('fa-regular', 'fa-solid');
        })

        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
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