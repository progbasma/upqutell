<?php $__env->startSection('content'); ?>
    <?php echo htmlspecialchars_decode($details); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/courses.js')); ?>"></script>

    <script>
        $('.ui-resizable-resizer').remove()
    </script>

    
    
    

    
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('aorapagebuilder::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\github\upqutell\Modules/AoraPageBuilder\Resources/views/pages/show.blade.php ENDPATH**/ ?>