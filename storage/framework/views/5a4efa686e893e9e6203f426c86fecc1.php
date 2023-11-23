<div class="">

    <div class="package_carousel_active owl-carousel">
        <?php if(isset($result )): ?>
            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="single_package">
                    <div class="icon">
                        <img src="<?php echo e(asset($category->image)); ?>" alt="">
                    </div>
                    <a href="<?php echo e(route('courses')); ?>?category=<?php echo e($category->id); ?>">
                        <h4><?php echo e($category->name); ?></h4>
                    </a>
                    <p><?php echo e($category->courses_count); ?> <?php echo e(__('frontend.Courses')); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>

    <script>

    </script>
</div>
<?php /**PATH D:\xampp\htdocs\github\upqutell\resources\views/frontend/infixlmstheme/snippets/components/_single_category.blade.php ENDPATH**/ ?>