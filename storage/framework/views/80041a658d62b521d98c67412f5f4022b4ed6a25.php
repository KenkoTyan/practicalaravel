<link rel="stylesheet" href=<?php echo e(asset('css/layouts/catalog.css')); ?>>



<?php $__env->startSection('title', 'Каталог'); ?>

<?php $__env->startSection('catalog'); ?>
<section class="catalog">
    <div class="container">
        <h1>Каталог</h1>
        <div class="catalog-card">
        
            <div class="catalog-card__filter">
                <form method="get" action="<?php echo e(route('catalog')); ?>" id="select">
                    <select name="cat_id" id="select">
                        <option value="0">Показать все</option>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <button type="submit" from="select">Найти по категориям</button>
                </form>
            </div>
            
            <form method="get" action="<?php echo e(route('catalog.price')); ?>" id="selectprice">
                <select name="priceproduct" id="selectprice">
                    <option value="0">Цены по умолчанию</option>
                    <option value="min">Низкая цена :C</option>
                    <option value="max">Наивысочайшая цена</option>
                </select>
                <button type="submit" from="selectprice">Сортировать по цене</button>
            </form>
            
            <div class="catalog-card__list">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="catalog-card__item">

                    <div class="catalog-card__image">
                        <img class="catalog-card__item--thumbnail card-item" src="<?php echo e(asset('/storage/products/' . $product->thumbnail)); ?>" alt="прости, картинки нет :(">
                    </div>

                    <div class="catalog-card__info">
                        <p class="catalog-card__item--name">
                            <?php echo e($product->name); ?>

                        </p>
                        <p class="catalog-card__item--name">
                            ID <?php echo e($product->id); ?>

                        </p>
                        <p class="catalog-card__item--price">
                            <?php echo e($product->price); ?> руб.
                        </p>

                        
                        <?php if($product->amount > 0): ?>
                        <p class="product-info__descr">В наличии</p>
                        <p class="product-info__name"><?php echo e($product->amount); ?></p>
                        <?php else: ?>
                        <p class="product-info__descr"></p>
                        <p class="product-info__name">Нет в наличии :c</p>
                        <?php endif; ?>

                        
                        <div class="catalog-card__more">
                            <button>
                                <a href="<?php echo e(route('catalog.product', $product->id)); ?>">
                                    <span>Подробнее</span>
                                </a>
                            </button>

                            <form method="POST" action="<?php echo e(route('basketPost')); ?>">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
                                <button class="product-info__name"><span>В корзину</span></button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/cshbinxx/bypvhpe-m1/resources/views/layouts/catalog.blade.php ENDPATH**/ ?>