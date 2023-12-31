<div data-type="component-text"
     data-preview="<?php echo e(!function_exists('themeAsset')?'':themeAsset('img/snippets/preview/contact/contact_page_section.jpg')); ?>"
     data-aoraeditor-title="Contact page section"
     data-aoraeditor-categories="Contact Page"
>

    <div class="contact_section ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="contact_address">
                        <div class="row justify-content-center">
                            <div class="col-xl-12">
                                <div class="row justify-content-between">
                                    <div class="col-lg-5">
                                        <div class="contact_info mb_30">
                                            <div class="contact_title">
                                                <h4 class="mb-0"><?php echo e(__('frontend.Contact Information')); ?></h4>
                                            </div>
                                            <p><?php echo e(__('frontend.contact_subtitle')); ?></p>


                                            <div class="address_lines">

                                                <div class="single_address_line d-flex">
                                                    <i class="ti-direction-alt"></i>
                                                    <div class="address_info">
                                                        <p> <?php echo Settings('address')  ? Settings('address')  : '89/2 Panthapath, Dhaka 1215, Bangladesh'; ?></p>

                                                    </div>
                                                </div>

                                                <div class="single_address_line d-flex">
                                                    <i class="ti-headphone-alt"></i>
                                                    <div class="address_info">
                                                        <p> <?php echo Settings('phone'); ?></p>
                                                    </div>
                                                </div>


                                                <div class="single_address_line d-flex">
                                                    <i class="ti-email"></i>
                                                    <div class="address_info">
                                                        <p> <?php echo Settings('email'); ?></p>
                                                        <p><?php echo e(__('frontend.Send us your query anytime')); ?>!</p>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>


                                    <div class="col-lg-6">
                                        <div class="contact_form_box mb_30">
                                            <div class="contact_title">
                                                <h4 class="mb-0"><?php echo e(__('frontend.Send Us Message')); ?></h4>
                                            </div>


                                            <div data-type="component-nonExisting"
                                                 data-preview=""
                                                 data-table=""
                                                 data-select=""
                                                 data-order=""
                                                 data-limit=""
                                                 data-view="_contact_form"
                                                 data-model=""
                                                 data-with=""
                                            >

                                                <div class="dynamicData"
                                                     data-dynamic-href="<?php echo e(routeIsExist('getDynamicData')?route('getDynamicData'):''); ?>"></div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php /**PATH D:\xampp\htdocs\github\upqutell\resources\views/frontend/infixlmstheme/snippets/components/_contact_page_section.blade.php ENDPATH**/ ?>