{{-- HEADER --}}
{{--
    <header class="header navbar navbar-expand-md navbar-light bg-white shadow-sm">

    <div class="container">
        <a class="navbar-brand" href="{{ route('login') }}">
            True Games
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

       
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <nav class="menu">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">О нас</a></li>
                    <li class="nav-item"><a href="{{ route('catalog') }}" class="nav-link">Каталог</a></li>
                    <li class="nav-item"><a href="{{ route('contacts') }}" class="nav-link">Где нас найти?</a></li>
                </ul>
            </nav>

            <ul class="navbar-nav ms-auto">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>

        </div>

    </div>
</header>
--}}

<header class="header">
    <div class="container">

        <nav class="nav">
            <div class="nav__logo">
                <a href="{{ route('about') }}" class="logo">
                    <img src={{ asset('images/logo.svg') }} alt="тут должен быть лого">
                    <p>header app</p>
                </a>
            </div>

            <ul class="nav__list nav__list--header">
                <li><a href="{{ route('about') }}" class="active">О нас</a></li>
                <li><a href="{{ route('catalog') }}">Каталог</a></li>
                <li><a href="{{ route('contacts') }}">Где нас найти?</a></li>
            </ul>

            {{-- @auth- user is authenticated
                @guest - user is not authenticated --}}
            <ul class="nav__login nav__login--header">
                @guest
                    {{-- login --}}
                    @if (Route::has('login'))
                        <li>
                            <a href="{{ route('login') }}" class="btn btn--login">{{ __('Войти') }}</a>
                        </li>
                    @endif
                    {{-- register --}}
                    @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}" class="btn btn--register">{{ __('Регистрация') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <p>Пользователь: {{ Auth::user()->name }}</p>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                {{ __('Выход из системы') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>

            {{--
            <ul class="navbar-nav ms-auto">
                    @if (Route::has('login'))
                        <div class="btn-login hidden sm:block">
                            @auth
                                <a href="{{ url('/home') }}" class="home">Home</a>
                            @else
                                <a href="{{ route('login') }}" class="login">Войти</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="register">Регистрация</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </ul>   
            --}}

            {{--
                <ul class="nav__login nav__login--header">
                <li><a href="#!">Регистрация</a></li>
                <li><a href="#!" class="btn btn--login">Войти</a></li>
                </ul>
            --}}

            <button type="button" class="nav__toggle">
                <div class="menu-icon-wrapper">
                    <div class="menu-icon"></div>
                </div>
            </button>
        </nav>
    </div>
</header>
