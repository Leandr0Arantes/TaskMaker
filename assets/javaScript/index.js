const containers = document.querySelectorAll('.funcionalidades .container');
const circles = document.querySelectorAll('.botoes span i');
let indexAtual = 0;

document.getElementById('btn-next').addEventListener('click', function() {
    containers[indexAtual].classList.remove('active');
    circles[indexAtual].classList.replace('fa-solid', 'fa-regular');

    indexAtual++;

    if (indexAtual >= containers.length) {
        indexAtual = 0;
    }

    containers[indexAtual].classList.add('active');
    circles[indexAtual].classList.replace('fa-regular', 'fa-solid');
});

document.getElementById('btn-prev').addEventListener('click', function() {
    containers[indexAtual].classList.remove('active');
    circles[indexAtual].classList.replace('fa-solid', 'fa-regular');

    if (indexAtual <= 0) {
        indexAtual = containers.length;
    }

    indexAtual--;

    containers[indexAtual].classList.add('active');
    circles[indexAtual].classList.replace('fa-regular', 'fa-solid');
});

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
    if (icon.classList.contains('fa-sun')) {
        icon.classList.replace('fa-sun', 'fa-moon');
        body.classList.add('dark-theme');
        imgLogo.src = 'assets/images/taskmaker_logo_white.png';
        imgHome.src = 'assets/images/img_home_dark.png';
        localStorage.setItem('theme', 'dark');
    } else {
        icon.classList.replace('fa-moon', 'fa-sun');
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
        icon.classList.replace('fa-sun', 'fa-moon');
        imgLogo.src = 'assets/images/taskmaker_logo_white.png';
        imgHome.src = 'assets/images/img_home_dark.png';
    } else {
        body.classList.remove('dark-theme');
        icon.classList.replace('fa-moon', 'fa-sun');
        imgLogo.src = 'assets/images/taskmaker_logo_blue.png';
        imgHome.src = 'assets/images/img_home.png';
    }
});