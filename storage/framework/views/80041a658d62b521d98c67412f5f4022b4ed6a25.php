<link rel="stylesheet" href=<?php echo e(asset('css/layouts/catalog.css')); ?>>



<?php $__env->startSection('title', 'Каталог'); ?>

<?php $__env->startSection('catalog'); ?>
    <section class="catalog">
        <div class="container">
            <h1>Каталог</h1>

            <div class="catalog-card">
                <div class="catalog-card__filter">
                    <form action="/catalog" id="select">
                        <select name="cat_id" id="select">
                            <option value="0">Показать все</option>

                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </select>
            
                        <button type="submit" from="select">Найти</button>
                    </form>
                </div>

                <div class="catalog-card__list">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    

                    <div class="catalog-card__item">

                        <img class="catalog-card__item--thumbnail card-item" src="<?php echo e(asset('/storage/products/' . $product->thumbnail)); ?>" alt="прости, картинки нет :(">
                        <p class="catalog-card__item--name card-item">
                            <?php echo e($product->name); ?>

                        </p>
                        <p class="catalog-card__item--price">
                            <?php echo e($product->price); ?> руб.
                        </p>
                        <a href="catalog/<?php echo e($product->id); ?>">
                            <p class="catalog-card__item--more">
                                подробнее c id продукта<?php echo e($product->id); ?>

                            </p>
                            <p>id категории <?php echo e($product->category_id); ?></p>
                        </a>

                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/cshbinxx/bypvhpe-m1/resources/views/layouts/catalog.blade.php ENDPATH**/ ?>