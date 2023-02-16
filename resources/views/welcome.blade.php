<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <!--
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    -->

</head>

<body class="antialiased">

    {{--<header class="header">
        <div class="container">
    
            <a class="logo" href="{{ url('/') }}">
                <img src={{asset("images/logo.svg")}} alt="">
                <p>welcome header</p>
            </a>
          
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

         
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <nav class="menu">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="" class="nav-link">O нас</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Каталог</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Где нас найти?</a></li>
                    </ul>
                </nav>

                <ul class="navbar-nav ms-auto">
                    @if (Route::has('login'))
                        <div class="btn-login hidden sm:block">
                            @auth
                                <a href="{{ url('/home') }}" class="home">Главная</a>
                            @else
                                <a href="{{ route('login') }}" class="login">Войти</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="register">Регистрация</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </ul>
            </div>

            
        </div>
    </header>
    --}}
    @include('layouts.header')
    ну welcome
</body>

</html>
