<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href=<?php echo e(asset('css/app.css')); ?>>
    <!--
        <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
    -->

</head>

<body class="antialiased">

    
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    ну welcome
</body>

</html>
<?php /**PATH /srv/users/cshbinxx/bypvhpe-m1/resources/views/welcome.blade.php ENDPATH**/ ?>