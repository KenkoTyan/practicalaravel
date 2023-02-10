<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href={{asset("css/styles.css")}}> --}}
    <!-- Styles -->

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body class="antialiased">

    <header class="header navbar navbar-expand-md navbar-light bg-white shadow-sm">

        <div class="container">
            {{-- <div class="logo">
                <a href="">True Games</a>
            </div> --}}
            <a class="navbar-brand" href="{{ url('/') }}">
                True Games
            </a>
            {{-- бургер меню --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- контент бургера --}}
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <nav class="menu">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="" class="nav-link">О нас</a></li>
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
                {{-- //контент бургера --}}
            </div>

            {{-- //container --}}
        </div>
    </header>
</body>

</html>
