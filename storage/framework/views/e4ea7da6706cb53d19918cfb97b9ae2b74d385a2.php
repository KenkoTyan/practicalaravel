<link rel="stylesheet" href=<?php echo e(asset('css/layouts/contacts.css')); ?>>


<?php $__env->startSection('title', 'Контакты'); ?>

<?php $__env->startSection('contacts'); ?>
    <section class="contacts">
        <div class="container">
            <div class="contacts-social">
                <div class="contacts-social__list">
                    <div class="contacts-social__item">
                        <p>8 (950) 564-38-14</p>
                    </div>
                    <div class="contacts-social__item">
                        <p>copystar@gmail.com</p>
                    </div>
                    <div class="contacts-social__item">
                        пр. Комарова, 13
                    </div>
                </div>
            </div>
            <div class="contacts-map">
                
            </div>
        </div>


    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/cshbinxx/bypvhpe-m1/resources/views/layouts/contacts.blade.php ENDPATH**/ ?>