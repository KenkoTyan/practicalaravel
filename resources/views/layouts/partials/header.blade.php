{{-- HEADER --}}

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

            <button type="button" class="nav__toggle">
                <div class="menu-icon-wrapper">
                    <div class="menu-icon"></div>
                </div>
            </button>
        </nav>
    </div>
</header>
