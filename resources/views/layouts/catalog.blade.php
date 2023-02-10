<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Каталог</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href={{asset("css/styles.css")}}> --}}
    <!-- Styles -->

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body class="antialiased">

    @include('layouts.header')

    <main>
        <h1>Каталог</h1>
        <div class="container">
            <div class="row">
                <p>Список категорий</p>
               @foreach($cat as $c)
               <p>{{$c->name}}</p>
               @endforeach
            </div>
        </div>
    </main>
</body>

</html>
