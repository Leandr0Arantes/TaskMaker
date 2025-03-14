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
        <div class="interface-header">
            <!-- Imagem da logo -->
            <div class="logo-taskmaker">
                <a href="index.php"><img id="imagem-logo" src="assets/images/taskmaker_logo_blue.png" alt=""></a>
            </div>
            <!-- Menu principal -->
            <div class="menu-header">
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#tutorial">Tutorial</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                </nav>
                <div class="btn-header">
                    <a href="pages/login.php">Logar</a>
                    <a class="sign-in" href="pages/cadastro.php">Registre-se</a>
                </div>
            </div>

            <!-- Botão do menu -->
            <button id="btn-submenu-header" class="btn-submenu-header">☰</button>

            <!-- Menu móvel -->
            <div class="submenu-header">
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#tutorial">Tutorial</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                </nav>
                <div class="btn-header">
                    <a href="pages/login.php">Logar</a>
                    <a class="sign-in" href="pages/cadastro.php">Registre-se</a>
                </div>
            </div>
    </header>

    <button class="btn-tema" id="btn-tema"><i class="fa-solid fa-moon"></i></button>
    <!--
    <section class="home">
        <div class="interface-home">
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
    
    <section id="tutorial" class="tutorial">
        <div class="container active">
            <div class="conteudo">
                <h2>Nosso site é focado no gerenciamento otimizado de tarefas</h2>
                <p>Com o TaskMaker, você pode organizar suas tarefas de forma eficiente e prática, aumentando sua produtividade e garantindo que você nunca perca um prazo importante.</p>
                <p>O TaskMaker é uma plataforma para criação e gerenciamento de tarefas, semelhante ao Trello. Ele permite que usuários organizem seus afazeres de forma intuitiva, arrastando e soltando tarefas entre diferentes categorias.</p>
            </div>
            <div class="imagem">

            </div>
        </div>
        <div class="container">
            <div class="conteudo">
                <h2>Acesso e Login</h2>
                <p>Para acessar a parte de gerenciamento de tarefas, o usuário precisa criar uma conta e fazer login. Isso garante que cada usuário tenha seu próprio espaço personalizado para organizar tarefas e projetos.</p>
            </div>
        </div>
        <div class="container">
            <div class="conteudo">
                <h2>Funcionalidades Principais</h2>
                <p>Quadros e Listas
                    O usuário pode criar quadros (boards) para diferentes projetos e dentro de cada quadro, adicionar listas (listas de tarefas).

                    Cartões de Tarefas
                    Dentro das listas, o usuário adiciona cartões, que representam cada tarefa. Esses cartões podem conter descrições, prazos, anexos e etiquetas.

                    Arrastar e Soltar
                    Os cartões podem ser movidos entre listas simplesmente arrastando e soltando, facilitando a organização das tarefas.

                    Atribuição de Usuários
                    Em projetos colaborativos, o usuário pode atribuir tarefas a membros, garantindo que cada tarefa tenha um responsável.

                    Notificações e Prazo
                    O TaskMaker pode alertar sobre tarefas próximas do prazo, ajudando na produtividade.</p>
            </div>
            <div class="imagem"></div>
        </div>
        <div class="container">
            <div class="conteudo">
                <h2>Outras Utilidades</h2>
                <p>Além do gerenciamento de tarefas, o TaskMaker pode ser utilizado para:

                    ✅ Gerenciar projetos em equipe
                    ✅ Criar listas de tarefas pessoais
                    ✅ Organizar cronogramas de estudo
                    ✅ Planejar eventos e compromissos</p>
            </div>
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
    <section id="contato" class="contato">
        <div class="title">
            <h2>Fale Conosco!</h2>
        </div>
        <div class="container">
            <div class="form">
                <form action="" method="post">
                    <p>Entre em contato conosco!</p>
                    <div class="form-group">
                        <span><i class="fa-solid fa-user"></i></i></span>
                        <input type="text" name="nome" id="nome" placeholder="Nome completo">
                    </div>
                    <div class="form-group">
                        <span><i class="fa-regular fa-envelope"></i></span>
                        <input type="email" name="email" id="email" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <span><i class="fa-solid fa-message"></i></span>
                        <input type="text" name="mensagem" id="mensagem" placeholder="Digite sua mensagem">
                    </div>
                    <button type="submit">Enviar mensagem!</button>
                </form>
            </div>
            <div class="imagem">
                <img src="assets/images/taskmaker_contato.png" alt="">
            </div>
        </div>
    </section>
    <footer>
        <p>Direitos reservados. Leandro Henrique Arantes</p>
    </footer>
    <script src="assets/javaScript/index.js"></script>
    -->

    <script>
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 1) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
        document.getElementById('btn-tema').addEventListener('click', function() {
            const icon = document.querySelector('.btn-tema i');
            const body = document.querySelector('body');
            const imgLogo = document.getElementById('imagem-logo');
            const imgHome = document.getElementById('imagem-home');
            if (icon.classList.contains('fa-moon')) {
                icon.classList.replace('fa-moon', 'fa-sun');
                body.classList.add('dark-theme');
                imgLogo.src = 'assets/images/taskmaker_logo_white.png';
                imgHome.src = 'assets/images/img_home_dark.png';
                localStorage.setItem('theme', 'dark');
            } else {
                icon.classList.replace('fa-sun', 'fa-moon');
                body.classList.remove('dark-theme');
                imgLogo.src = 'assets/images/taskmaker_logo_blue.png';
                imgHome.src = 'assets/images/img_home.png';
                localStorage.setItem('theme', 'light');
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const body = document.querySelector('body');
            const icon = document.querySelector('.btn-tema i');
            const imgLogo = document.getElementById('imagem-logo');
            const imgHome = document.getElementById('imagem-home');
            const theme = localStorage.getItem('theme');
            if (theme === 'dark') {
                body.classList.add('dark-theme');
                icon.classList.replace('fa-moon', 'fa-sun');
                imgLogo.src = 'assets/images/taskmaker_logo_white.png';
                imgHome.src = 'assets/images/img_home_dark.png';
            } else {
                body.classList.remove('dark-theme');
                icon.classList.replace('fa-sun', 'fa-moon');
                imgLogo.src = 'assets/images/taskmaker_logo_blue.png';
                imgHome.src = 'assets/images/img_home.png';
            }
        });

        const btnSubmenu = document.getElementById('btn-submenu-header');


        btnSubmenu.addEventListener('click', function() {

        })
    </script>

</body>

<?php

// Verifique se há uma mensagem de erro na sessão
if (isset($_SESSION['resposta'])) {
    // Exiba a mensagem de erro
    echo "<p style='color: red;'>" . $_SESSION['resposta'] . "</p>";

    // Remova a mensagem de erro da sessão para que não seja exibida novamente
    unset($_SESSION['resposta']);
}
?>

</html>