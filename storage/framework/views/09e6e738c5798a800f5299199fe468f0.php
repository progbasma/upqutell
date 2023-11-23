<div data-type="component-text"
     data-preview="<?php echo e(!function_exists('themeAsset')?'':themeAsset('img/snippets/preview/about/counter.jpg')); ?>"
     data-aoraeditor-title="Counter" data-aoraeditor-categories="About Us Page">
    <style>
        .counter_area::before {
            display: none;
            background-image: url('<?php echo e(asset('public/frontend/infixlmstheme/img/about/counter_bg.png')); ?>');
        }

        .right-0 {
            right: 0 !important;
        }
    </style>
    <div class="counter_area">
        <div class="w-auto h-100 position-absolute bottom-0 right-0 ">
            <img class="w-auto h-100 img-cover"
                 src="<?php echo e(asset('public/frontend/infixlmstheme/img/about/counter_bg.png')); ?>" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="counter_wrapper">
                        <div class="single_counter">
                            <h3><span class="counter"><?php echo e((int)$about_page->total_teacher); ?></span>k+</h3>
                            <div class="counter_content">
                                <h4><?php echo e($about_page->teacher_title); ?></h4>
                                <p><?php echo e($about_page->teacher_details); ?></p>
                            </div>
                        </div>
                        <div class="single_counter">
                            <h3><span class="counter"><?php echo e((int)$about_page->total_student); ?></span>+</h3>
                            <div class="counter_content">
                                <h4><?php echo e($about_page->student_title); ?></h4>
                                <p><?php echo e($about_page->student_details); ?></p>
                            </div>
                        </div>
                        <div class="single_counter">
                            <h3><span class="counter"><?php echo e((int)$about_page->total_courses); ?></span>k+</h3>
                            <div class="counter_content">
                                <h4><?php echo e($about_page->student_title); ?></h4>
                                <p><?php echo e($about_page->student_details); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\xampp\htdocs\github\upqutell\resources\views/frontend/infixlmstheme/snippets/components/_about_count.blade.php ENDPATH**/ ?>