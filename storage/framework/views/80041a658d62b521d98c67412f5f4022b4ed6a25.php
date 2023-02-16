<link rel="stylesheet" href=<?php echo e(asset('css/layouts/catalog.css')); ?>>



<?php $__env->startSection('catalog'); ?>
    <section class="catalog">
        <div class="container">
            <h1>Каталог</h1>

            <div class="catalog-card">
                <div class="catalog-card__list">
                    <div class="catalog-card__item">
                        <p class="catalog-card__item--name">Имя</p>
                        <p class="catalog-card__item--price">Цена</p>
                        <p class="catalog-card__item--thumbnail">thumbnail</p>
                    </div>
                    <div class="catalog-card__item">
                        <p class="catalog-card__item--name">Имя</p>
                        <p class="catalog-card__item--price">Цена</p>
                        <p class="catalog-card__item--thumbnail">thumbnail</p>
                    </div>
                    <div class="catalog-card__item">
                        <p class="catalog-card__item--name">Имя</p>
                        <p class="catalog-card__item--price">Цена</p>
                        <p class="catalog-card__item--thumbnail">thumbnail</p>
                    </div>
                    <div class="catalog-card__item">
                        <p class="catalog-card__item--name">Имя</p>
                        <p class="catalog-card__item--price">Цена</p>
                        <p class="catalog-card__item--thumbnail">thumbnail</p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/cshbinxx/bypvhpe-m1/resources/views/layouts/catalog.blade.php ENDPATH**/ ?>