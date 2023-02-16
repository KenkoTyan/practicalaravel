<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Home</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">


    <!-- Scripts -->
    <!--@vite(['resources/sass/app.scss', 'resources/js/app.js'])-->

    <link rel="stylesheet" href={{ asset('css/app.css') }}>

</head>

<body>
    <div id="app">

        @include('layouts.header')

        <main class="main">
            @yield('content')

            @yield('catalog')

            @yield('about')
        </main>
        <p></p>
    </div>

    <script src={{ asset('js/main.js') }}></script>
</body>

</html>
