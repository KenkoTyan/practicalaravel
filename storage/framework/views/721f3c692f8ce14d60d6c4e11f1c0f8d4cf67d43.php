


<header class="header">
    <div class="container">

        <nav class="nav">
            <div class="nav__logo">
                <a href="<?php echo e(route('about')); ?>" class="logo">
                    <img src=<?php echo e(asset('images/logo.svg')); ?> alt="тут должен быть лого">
                    <p>header app</p>
                </a>
            </div>

            <ul class="nav__list nav__list--header">
                <li><a href="<?php echo e(route('about')); ?>" class="active">О нас</a></li>
                <li><a href="<?php echo e(route('catalog')); ?>">Каталог</a></li>
                <li><a href="<?php echo e(route('contacts')); ?>">Где нас найти?</a></li>
            </ul>

            
            <ul class="nav__login nav__login--header">
                <?php if(auth()->guard()->guest()): ?>
                    
                    <?php if(Route::has('login')): ?>
                        <li>
                            <a href="<?php echo e(route('login')); ?>" class="btn btn--login"><?php echo e(__('Войти')); ?></a>
                        </li>
                    <?php endif; ?>
                    
                    <?php if(Route::has('register')): ?>
                        <li>
                            <a href="<?php echo e(route('register')); ?>" class="btn btn--register"><?php echo e(__('Регистрация')); ?></a>
                        </li>
                    <?php endif; ?>
                <?php else: ?>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <p>Пользователь: <?php echo e(Auth::user()->name); ?></p>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                <?php echo e(__('Выход из системы')); ?>

                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>

            

            

            <button type="button" class="nav__toggle">
                <div class="menu-icon-wrapper">
                    <div class="menu-icon"></div>
                </div>
            </button>
        </nav>
    </div>
</header>
<?php /**PATH /srv/users/cshbinxx/bypvhpe-m1/resources/views/layouts/header.blade.php ENDPATH**/ ?>