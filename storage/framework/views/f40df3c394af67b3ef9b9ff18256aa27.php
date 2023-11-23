<div class="row">

    <?php if(isset($result)): ?>
        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="couse_wizged">
                    <a href="<?php echo e(courseDetailsUrl(@$course->id,@$course->type,@$course->slug)); ?>">
                        <div class="thumb">

                            <div class="thumb_inner lazy"
                                 data-src="<?php echo e(getCourseImage($course->thumbnail)); ?>">
                            </div>
                            <?php if(showEcommerce()): ?>
                                <span class="prise_tag">
                               <?php if(@$course->discount_price!=null): ?>
                                        <span class="prev_prise">
                                  <?php echo e(getPriceFormat($course->price)); ?>

                                  </span>
                                    <?php endif; ?>
                                <span>
                                <?php if(@$course->discount_price!=null): ?>
                                        <?php echo e(getPriceFormat($course->discount_price)); ?>

                                    <?php else: ?>
                                        <?php echo e(getPriceFormat($course->price)); ?>

                                    <?php endif; ?>
                                </span>
                                </span>
                            <?php endif; ?>
                        </div>
                    </a>
                    <div class="course_content">
                        <a href="<?php echo e(courseDetailsUrl(@$course->id,@$course->type,@$course->slug)); ?>">

                            <h4 class="noBrake" title=" <?php echo e($course->title); ?>">
                                <?php echo e($course->title); ?>

                            </h4>
                        </a>

                        <div class="rating_cart">
                            <?php if(courseSetting()->show_rating==1): ?>
                                <div class="rateing">
                                    <span><?php echo e($course->totalReview); ?>/5</span>
                                    <i class="fas fa-star"></i>
                                </div>
                            <?php endif; ?>
                            <?php if(courseSetting()->show_cart==1): ?>
                                <?php if(auth()->guard()->check()): ?>
                                    <?php if(!$course->isLoginUserEnrolled && !$course->isLoginUserCart): ?>
                                        <a href="#" class="cart_store"
                                           data-id="<?php echo e($course->id); ?>">
                                            <i class="fas fa-shopping-cart"></i>
                                        </a>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <?php if(auth()->guard()->guest()): ?>
                                    <?php if(!$course->isGuestUserCart): ?>
                                        <a href="#" class="cart_store"
                                           data-id="<?php echo e($course->id); ?>">
                                            <i class="fas fa-shopping-cart"></i>
                                        </a>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endif; ?>

                        </div>
                        <div class="course_less_students">
                            <a> <i class="ti-agenda"></i> <?php echo e(count($course->lessons)); ?>

                                <?php echo e(__('frontend.Lessons')); ?></a>
                            <?php if(courseSetting()->show_enrolled_or_level_section==1): ?>
                                <?php if(courseSetting()->enrolled_or_level==1): ?>
                                    <a>
                                        <i class="ti-user"></i> <?php echo e($course->total_enrolled); ?> <?php echo e(__('frontend.Students')); ?>

                                    </a>
                                <?php elseif(courseSetting()->enrolled_or_level==3): ?>
                                    <a>
                                        <i class="ti-thumb-up"></i>
                                        <?php if($course->mode_of_delivery==1): ?>
                                            <?php echo e(__('courses.Online')); ?>

                                        <?php elseif($course->mode_of_delivery==2): ?>
                                            <?php echo e(__('courses.Distance Learning')); ?>

                                        <?php else: ?>
                                            <?php echo e(__('courses.Face-to-Face')); ?>

                                        <?php endif; ?>
                                    </a>
                                <?php else: ?>
                                    <?php if($course->type!=3): ?>
                                        <a>
                                            <i class="ti-thumb-up"></i> <?php echo e(@$course->courseLevel->title); ?>

                                        </a>
                                    <?php endif; ?>
                                <?php endif; ?>

                            <?php endif; ?>
                        </div>
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
<?php /**PATH D:\xampp\htdocs\github\upqutell\resources\views/frontend/infixlmstheme/snippets/components/_single_home_page_course.blade.php ENDPATH**/ ?>