<link rel="stylesheet" href=<?php echo e(asset('css/layouts/about.css')); ?>>



<?php $__env->startSection('about'); ?>
    <section class="about">
        <div class="container">
            <div class="about-motto">
                <div class="about-motto--wrapper">
                    <div class="about-motto__logo">
                        <img src=<?php echo e(asset('images/logo.svg')); ?> alt="тут лого">
                        <p>копировальное оборудование</p>
                    </div>
                    <div class="about-motto__slogan">
                        <p>Весь спектр красок и работ</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-slider"></div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/cshbinxx/bypvhpe-m1/resources/views/layouts/about.blade.php ENDPATH**/ ?>