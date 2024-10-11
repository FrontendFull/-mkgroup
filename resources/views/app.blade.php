<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <!-- Styles -->
    @vite('resources/scss/app.scss')
    <!-- JS -->
    @vite('resources/js/app.js')

</head>
<body class="@yield('class')">
<header class="header">
    <div class="container">
        <div class="header-inner">
            <a href="#" class="logo">
                <img src="/images/logo.png" alt="Logo">
            </a>
            <nav class="nav">
                <a class="nav-item" href="#company">Про компанію</a>
                <a class="nav-item" href="#services">Послуги</a>
                <a class="nav-item" href="#trademarks">Марки</a>
                <a class="nav-item" href="#steps">Схема роботи</a>
                <a class="nav-item" href="#partners">Партнери</a>
                <a class="nav-item" href="#clients">Географія клієнтів</a>
                <a class="nav-item" href="#contacts">Контакти</a>
            </nav>
            <div class="header-buttons">
                <div class="lang-wrap">
                    <div class="lang current">UA</div>
                    <div class="lang-list">
                        <div class="lang active">UA</div>
                        <div class="lang">RU</div>
                        <div class="lang">EN</div>
                        <div class="lang">Es</div>
                    </div>
                </div>
                <div class="button" data-openModal="#modalFeedback">залишити заявку</div>
                <div class="burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="menu">
    <div class="label">Menu</div>
    <nav class="nav">
        <a class="nav-item" href="#company">Про компанію</a>
        <a class="nav-item" href="#services">Послуги</a>
        <a class="nav-item" href="#trademarks">Марки</a>
        <a class="nav-item" href="#steps">Схема роботи</a>
        <a class="nav-item" href="#partners">Партнери</a>
        <a class="nav-item" href="#clients">Географія клієнтів</a>
        <a class="nav-item" href="#contacts">Контакти</a>
    </nav>
</div>

<main class="main">
    @yield('content')
</main>

<footer class="footer">
    <div class="container">
        <div class="footer-inner">
            <span>Copyright © 2024 MK GROUP. All right Reserved</span>
        </div>
    </div>
</footer>
@include('layout.form')
</body>
</html>

