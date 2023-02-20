<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title', 'что это'); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">


    <!-- Scripts -->
    <!--<?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>-->

    <link rel="stylesheet" href=<?php echo e(asset('css/app.css')); ?>>

</head>

<body>
    <div id="app">

        <?php echo $__env->make('layouts.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <main class="main">
            
            <?php echo $__env->yieldContent('content'); ?>

            <?php echo $__env->yieldContent('catalog'); ?>

            <?php echo $__env->yieldContent('about'); ?>

            <?php echo $__env->yieldContent('contacts'); ?>

            <?php echo $__env->yieldContent('product'); ?>
            
        </main>
        <p>app</p>
    </div>

    <script src=<?php echo e(asset('js/main.js')); ?>></script>
</body>

</html>
<?php /**PATH /srv/users/cshbinxx/bypvhpe-m1/resources/views/layouts/app.blade.php ENDPATH**/ ?>