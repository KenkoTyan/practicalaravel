
<header class="header navbar navbar-expand-md navbar-light bg-white shadow-sm">

    <div class="container">
        
        <a class="navbar-brand" href="<?php echo e(route('login')); ?>">
            True Games
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>

        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <nav class="menu">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="<?php echo e(route('about')); ?>" class="nav-link">О нас</a></li>
                    <li class="nav-item"><a href="<?php echo e(route('catalog')); ?>" class="nav-link">Каталог</a></li>
                    <li class="nav-item"><a href="<?php echo e(route('contacts')); ?>" class="nav-link">Где нас найти?</a></li>
                </ul>
            </nav>

            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                <?php if(auth()->guard()->guest()): ?>
                    <?php if(Route::has('login')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                        </li>
                    <?php endif; ?>

                    <?php if(Route::has('register')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                        </li>
                    <?php endif; ?>
                <?php else: ?>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <?php echo e(Auth::user()->name); ?>

                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
        
        </div>

    
    </div>
</header><?php /**PATH /srv/users/cshbinxx/bypvhpe-m1/resources/views/layouts/header.blade.php ENDPATH**/ ?>