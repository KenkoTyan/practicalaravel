<link rel="stylesheet" href=<?php echo e(asset('css/layouts/about.css')); ?>>



<?php $__env->startSection('title', 'О нас'); ?>

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

            <div class="itc-slider" data-autoplay="true" data-interval="7000" data-loop="true" data-slider="itc-slider">
                <div class="itc-slider__wrapper">
                    <div class="itc-slider__list">
                        
                        <div class="itc-slider__item">
                            
                        </div>
                        <div class="itc-slider__item">
                            <img src="" alt="">
                        </div>
                        <div class="itc-slider__item">3</div>
                        <div class="itc-slider__item">4</div>
                        <div class="itc-slider__item">5</div>
                    </div>
                </div>
                <button class="itc-slider__btn itc-slider__btn_prev"></button>
                <button class="itc-slider__btn itc-slider__btn_next"></button>
                <ol class="itc-slider__indicators">
                    <li class="itc-slider__indicator" data-slide-to="0"></li>
                    <li class="itc-slider__indicator" data-slide-to="1"></li>
                    <li class="itc-slider__indicator" data-slide-to="2"></li>
                    <li class="itc-slider__indicator" data-slide-to="3"></li>
                    <li class="itc-slider__indicator" data-slide-to="4"></li>
                </ol>
            </div>

        </div>
    </section>

    <script src=<?php echo e(asset('js/itc-slider.js')); ?>></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/cshbinxx/bypvhpe-m1/resources/views/layouts/about.blade.php ENDPATH**/ ?>