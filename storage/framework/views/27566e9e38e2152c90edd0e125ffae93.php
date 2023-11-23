<div class="row">
    <?php if(isset($result)): ?>
        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-6 col-xl-3 col-md-6">

                <div class="single_blog couse_wizged">
                    <a href="<?php echo e(route('blogDetails',[$blog->slug])); ?>">
                        <div class="thumb">
                            <div class="thumb_inner lazy"
                                 data-src="<?php echo e(file_exists($blog->thumbnail) ? asset($blog->thumbnail) : asset('public/\uploads/course_sample.png')); ?>">
                            </div>
                        </div>
                    </a>
                    <div class="blog_meta">
                        <span><?php echo e($blog->user->name); ?> . <?php echo e($blog->authored_date); ?></span>
                        <a href="<?php echo e(route('blogDetails',[$blog->slug])); ?>">
                            <h4 class="noBrake" title="<?php echo e($blog->title); ?>"><?php echo e($blog->title); ?></h4>
                        </a>
                    </div>
                </div>


            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <script>
        if ($.isFunction($.fn.lazy)) {
            $('.lazy').lazy();
        }
    </script>
</div>
<?php /**PATH D:\xampp\htdocs\github\upqutell\resources\views/frontend/infixlmstheme/snippets/components/_single_home_blog.blade.php ENDPATH**/ ?>