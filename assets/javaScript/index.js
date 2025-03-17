document.getElementById('btn-tema').addEventListener('click', function () {
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

document.addEventListener('DOMContentLoaded', function () {
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