<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Styles -->

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>

</head>

<body class="antialiased">

    <header class="header navbar navbar-expand-md navbar-light bg-white shadow-sm">

        <div class="container">
            
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                True Games
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="<?php echo e(__('Toggle navigation')); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>

            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <nav class="menu">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="" class="nav-link">О нас</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Каталог</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Где нас найти?</a></li>
                    </ul>
                </nav>

                <ul class="navbar-nav ms-auto">
                    
                    <?php if(Route::has('login')): ?>
                        <div class="btn-login hidden sm:block">
                            <?php if(auth()->guard()->check()): ?>
                                <a href="<?php echo e(url('/home')); ?>" class="home">Главная</a>
                            <?php else: ?>
                                <a href="<?php echo e(route('login')); ?>" class="login">Войти</a>

                                <?php if(Route::has('register')): ?>
                                    <a href="<?php echo e(route('register')); ?>" class="register">Регистрация</a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </ul>
                
            </div>

            
        </div>
    </header>
</body>

</html>
<?php /**PATH /srv/users/cshbinxx/bypvhpe-m1/resources/views/welcome.blade.php ENDPATH**/ ?>