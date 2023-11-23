<div data-type="component-text"
     data-preview="<?php echo e(!function_exists('themeAsset')?'':themeAsset('img/snippets/preview/home/homepage_quiz_section.jpg')); ?>"
     data-aoraeditor-title="HomePage Quiz Section" data-aoraeditor-categories="Home Page">

    <div class="quiz_area">
        <div class="container">
            <div class="white_box">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section__title text-center mb_80">
                            <h3><?php echo e(@$homeContent->quiz_title); ?></h3>
                            <p>
                                <?php echo e(@$homeContent->quiz_sub_title); ?>

                            </p>
                        </div>
                    </div>
                </div>


                <div data-type="component-nonExisting"
                     data-preview=""
                     data-table=""
                     data-select="id,type,slug,title,thumbnail,price,discount_price"
                     data-order="id"
                     data-limit="4"
                     data-where-type="2"
                     data-where-status="1"
                     data-view="_single_home_page_quiz"
                     data-model="Modules\CourseSetting\Entities\Course"
                     data-with=""
                >
                    <div class="dynamicData"
                         data-dynamic-href="<?php echo e(routeIsExist('getDynamicData')?route('getDynamicData'):''); ?>"></div>
                </div>


                <div class="row">
                    <div class="col-12 text-center pt_70">
                        <a href="<?php echo e(route('quizzes')); ?>"
                           class="theme_btn mb_30"><?php echo e(__('frontend.View All Quiz')); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<?php /**PATH D:\xampp\htdocs\github\upqutell\resources\views/frontend/infixlmstheme/snippets/components/_home_page_quiz_section.blade.php ENDPATH**/ ?>