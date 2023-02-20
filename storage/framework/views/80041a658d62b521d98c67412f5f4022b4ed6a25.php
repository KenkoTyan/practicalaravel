<link rel="stylesheet" href=<?php echo e(asset('css/layouts/catalog.css')); ?>>



<?php $__env->startSection('title', 'Каталог'); ?>

<?php $__env->startSection('catalog'); ?>
    <section class="catalog">
        <div class="container">
            <h1>Каталог</h1>

            <div class="catalog-card">
                <div class="catalog-card__list">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make("layouts.partials.item", ["product"=>$product], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <div class="catalog-card__item">
                        <img class="card-item catalog-card__item--thumbnail"
                            src="<?php echo e(asset('/images/catalog/a36b4b559ac69a6fbc40a49fcd5507884305a664.jpg')); ?>">
                        <p class="catalog-card__item--name card-item card-item">
                            имя
                        </p>
                        <p class="catalog-card__item--price card-item">
                            великолепно руб.
                        </p>
                    </div>
                </div>
            </div>




            

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/cshbinxx/bypvhpe-m1/resources/views/layouts/catalog.blade.php ENDPATH**/ ?>