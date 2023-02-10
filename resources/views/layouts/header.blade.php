{{-- HEADER --}}
<header class="header navbar navbar-expand-md navbar-light bg-white shadow-sm">

    <div class="container">
        {{-- <div class="logo">
            <a href="">True Games</a>
        </div> --}}
        <a class="navbar-brand" href="{{ route('login') }}">
            True Games
        </a>
        {{-- бургер меню --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- контент бургера --}}
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <nav class="menu">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="{{route('about')}}" class="nav-link">О нас</a></li>
                    <li class="nav-item"><a href="{{route('catalog')}}" class="nav-link">Каталог</a></li>
                    <li class="nav-item"><a href="{{route('contacts')}}" class="nav-link">Где нас найти?</a></li>
                </ul>
            </nav>

            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
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
        {{-- //контент бургера --}}
        </div>

    {{-- //container --}}
    </div>
</header>