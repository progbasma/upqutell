<?php if(isset($result)): ?>
    <div class="row">
        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="single_instractor mb_30">
                    <a href="<?php echo e(route('instructorDetails',[$instructor->id,Str::slug($instructor->name,'-')])); ?>"
                       class="thumb">
                        <img src="<?php echo e(getInstructorImage($instructor->image)); ?>" alt="">
                    </a>
                    <a href="<?php echo e(route('instructorDetails',[$instructor->id,Str::slug($instructor->name,'-')])); ?>">
                        <h4><?php echo e($instructor->name); ?></h4></a>
                    <span><?php echo e($instructor->headline); ?></span>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php if(isset($has_pagination)): ?>
        <div class="row">
            <?php if($result->hasPages()): ?>
                <div class="pagination-wrapper">
                    <?php echo e($result->links()); ?>

                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\github\upqutell\resources\views/frontend/infixlmstheme/snippets/components/_single_instructor.blade.php ENDPATH**/ ?>