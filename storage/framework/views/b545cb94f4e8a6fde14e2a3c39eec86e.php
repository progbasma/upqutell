<div class="aoraeditor-skip aoraeditor-footer">
    <?php if (isset($component)) { $__componentOriginal13668b0a613d2d5df27b3614ef51e899 = $component; } ?>
<?php $component = App\View\Components\PopupContent::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('popup-content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\PopupContent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal13668b0a613d2d5df27b3614ef51e899)): ?>
<?php $component = $__componentOriginal13668b0a613d2d5df27b3614ef51e899; ?>
<?php unset($__componentOriginal13668b0a613d2d5df27b3614ef51e899); ?>
<?php endif; ?>
    <footer class="<?php echo e(Settings('footer_show')==0?'d-none d-sm-none d-md-block d-lg-block d-xl-block':''); ?>">
        <?php if(@$homeContent->show_subscribe_section==1): ?>
            <?php if (isset($component)) { $__componentOriginal1e3777de91774b6c03ca3b602ca12701 = $component; } ?>
<?php $component = App\View\Components\FooterNewsLetter::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer-news-letter'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FooterNewsLetter::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1e3777de91774b6c03ca3b602ca12701)): ?>
<?php $component = $__componentOriginal1e3777de91774b6c03ca3b602ca12701; ?>
<?php unset($__componentOriginal1e3777de91774b6c03ca3b602ca12701); ?>
<?php endif; ?>
        <?php endif; ?>
        <div class="copyright_area">
            <div class="container">
                <div class="row">
                    

                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="<?php echo e(getCourseImage(Settings('logo2'))); ?>" alt=""
                                         style="width: 108px">
                                </a>
                            </div>
                            <p><?php echo e(function_exists('footerSettings')?footerSettings('footer_about_description'):''); ?></p>
                            <div class="copyright_text">
                                <p><?php echo function_exists('footerSettings')?footerSettings('footer_copy_right'):''; ?></p>
                            </div>

                            <style>


                            </style>
                            <div class="">
                                <ul class="pt-3 ">
                                    <ul class="social-network social-circle col-lg-12 ">
                                        <?php if (isset($component)) { $__componentOriginale902aef3dbfb92e7316f61ff732c0aa9 = $component; } ?>
<?php $component = App\View\Components\FooterSocialLinks::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer-social-links'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FooterSocialLinks::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale902aef3dbfb92e7316f61ff732c0aa9)): ?>
<?php $component = $__componentOriginale902aef3dbfb92e7316f61ff732c0aa9; ?>
<?php unset($__componentOriginale902aef3dbfb92e7316f61ff732c0aa9); ?>
<?php endif; ?>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-8 col-md-6">

                        <?php if (isset($component)) { $__componentOriginald5b62741ced20ff54c803702132dfef4 = $component; } ?>
<?php $component = App\View\Components\FooterSectionWidgets::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer-section-widgets'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FooterSectionWidgets::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5b62741ced20ff54c803702132dfef4)): ?>
<?php $component = $__componentOriginald5b62741ced20ff54c803702132dfef4; ?>
<?php unset($__componentOriginald5b62741ced20ff54c803702132dfef4); ?>
<?php endif; ?>

                    </div>

                </div>
            </div>
        </div>
    </footer>

    <div class="shoping_wrapper">
        <div class="dark_overlay"></div>
        <div class="shoping_cart">
            <div class="shoping_cart_inner">
                <div class="cart_header d-flex justify-content-between">
                    <h4><?php echo e(__('frontend.Shopping Cart')); ?></h4>
                    <div class="chart_close">
                        <i class="ti-close"></i>
                    </div>
                </div>
                <div id="cartView">
                    <div class="single_cart">
                        Loading...
                    </div>
                </div>


            </div>
            <div class="view_checkout_btn d-flex justify-content-end gap_10 flex-wrap" style="display: none!important;">
                <a href="<?php echo e(url('my-cart')); ?>"
                   class="theme_btn small_btn3 flex-fill text-center"><?php echo e(__('frontend.View cart')); ?></a>
                <a href="<?php echo e(route('myCart',['checkout'=>true])); ?>"
                   class="theme_btn small_btn3 flex-fill text-center"><?php echo e(__('frontend.Checkout')); ?></a>
            </div>
        </div>
    </div>
    <!-- shoping_cart::end  -->

    <!-- UP_ICON  -->
    <div id="back-top" style="display: none;">
        <a title="Go to Top" href="#">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>

    <input type="hidden" name="item_list" class="item_list" value="<?php echo e(url('getItemList')); ?>">
    <input type="hidden" name="enroll_cart" class="enroll_cart" value="<?php echo e(url('enrollOrCart')); ?>">
    <input type="hidden" name="csrf_token" class="csrf_token" value="<?php echo e(csrf_token()); ?>">
    <!--/ UP_ICON -->

    <?php if (isset($component)) { $__componentOriginal8f5431d811bccb031e96d3cc5bfb4655 = $component; } ?>
<?php $component = App\View\Components\FooterCookie::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer-cookie'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FooterCookie::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8f5431d811bccb031e96d3cc5bfb4655)): ?>
<?php $component = $__componentOriginal8f5431d811bccb031e96d3cc5bfb4655; ?>
<?php unset($__componentOriginal8f5431d811bccb031e96d3cc5bfb4655); ?>
<?php endif; ?>

    <div class="modal fade leaderboard-boarder" id="myLeaderBoard" tabindex="-1" role="dialog"
         aria-labelledby="myLeaderBoard"
         aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5" id=""><?php echo e(__('common.Leaderboard')); ?></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="reward-leader">
                        <ul class="nav nav-tabs border-bottom-0 m-0" id="myTab" role="tablist">
                            <?php if(Settings('gamification_leaderboard_show_point_status')): ?>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link  nav-point" id="point-tab" data-toggle="tab"
                                            data-target="#point"
                                            data-type="point"
                                            type="button" role="tab" aria-controls="point"
                                            aria-selected="true"><?php echo e(__('setting.Points')); ?>

                                    </button>
                                </li>
                            <?php endif; ?>
                            <?php if(Settings('gamification_leaderboard_show_level_status')): ?>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link nav-point" id="level-tab" data-toggle="tab"
                                            data-target="#level"
                                            data-type="level"
                                            type="button" role="tab" aria-controls="level"
                                            aria-selected="true"><?php echo e(__('setting.Levels')); ?>

                                    </button>
                                </li>
                            <?php endif; ?>
                            <?php if(Settings('gamification_leaderboard_show_badges_status')): ?>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link nav-point" id="badge-tab" data-toggle="tab"
                                            data-target="#badge"
                                            data-type="badge"
                                            type="button" role="tab" aria-controls="badge"
                                            aria-selected="true"><?php echo e(__('setting.Badges')); ?>

                                    </button>
                                </li>
                            <?php endif; ?>
                            <?php if(Settings('gamification_leaderboard_show_courses_status')): ?>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link nav-point" id="courses-tab" data-toggle="tab"
                                            data-target="#courses"
                                            data-type="courses"
                                            type="button" role="tab" aria-controls="courses"
                                            aria-selected="true"><?php echo e(__('courses.Courses')); ?>

                                    </button>
                                </li>
                            <?php endif; ?>
                            <?php if(Settings('gamification_leaderboard_show_certificate_status')): ?>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link nav-point" id="certificate-tab" data-toggle="tab"
                                            data-target="#certificate"
                                            data-type="certificate"
                                            type="button" role="tab" aria-controls="certificate"
                                            aria-selected="true"><?php echo e(__('setting.certificates')); ?>

                                    </button>
                                </li>
                            <?php endif; ?>
                        </ul>
                        <div id="leaderboardBody" class="leaderboardBody"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade noticeboard-modal" id="myNoticeboard" tabindex="-1" role="dialog"
         aria-labelledby="myNoticeboard"
         aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" id="myNoticeboardBody">

        </div>
    </div>

    <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/app.js')); ?>"></script>

    <script src="<?php echo e(asset('public/backend/js/summernote-bs4.min.js')); ?>"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo e(Settings('gmap_key')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/map.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/contact.js')); ?>"></script>

    <?php echo Toastr::message(); ?>


    <?php if($errors->any()): ?>
        <script>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            toastr.error('<?php echo e($error); ?>', 'Error', {
                closeButton: true,
                progressBar: true,
            });
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </script>
    <?php endif; ?>

    <?php if(isModuleActive('Appointment')): ?>
        
    <?php endif; ?>

    <?php echo $__env->yieldContent('js'); ?>
    <?php echo $__env->yieldPushContent('js'); ?>
    <script>
        setTimeout(function () {
            $('.preloader').fadeOut('hide', function () {
                // $(this).remove();

            });
        }, 0);


        $('#cartView').on('click', '.remove_cart', function () {
            let id = $(this).data('id');
            let total = $('.notify_count').html();

            $(this).closest(".single_cart").hide();
            let url = "<?php echo e(url(('/home/removeItemAjax'))); ?>" + '/' + id;

            $.ajax({
                type: 'GET',
                url: url,
                success: function (data) {

                    $('.notify_count').html(total - 1);
                }
            });
        });

        $(function () {
            $('.lazy').Lazy();
        });


    </script>
    <?php if(auth()->guard()->check()): ?>
        <?php if((int)Settings('device_limit_time')!=0): ?>
            <?php if(\Illuminate\Support\Facades\Auth::user()->role_id==3): ?>
                <script>
                    function update() {
                        $.ajax({
                            type: 'GET',
                            url: "<?php echo e(url('/')); ?>" + "/update-activity",
                            success: function (data) {


                            }
                        });
                    }

                    var intervel = "<?php echo e(Settings('device_limit_time')); ?>"
                    var time = (intervel * 60) - 20;

                    setInterval(function () {
                        update();
                    }, time * 1000);

                </script>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
    <script>
        $(document).on('click', '.show_notify', function (e) {
            e.preventDefault();

            console.log('notify');
        });
        if ($('#main-nav-for-chat').length) {
        } else {
            $('#main-content').append('<div id="main-nav-for-chat" style="visibility: hidden;"></div>');
        }

        if ($('#admin-visitor-area').length) {
        } else {
            $('#main-content').append('<div id="admin-visitor-area" style="visibility: hidden;"></div>');
        }
    </script>


    <?php if(str_contains(request()->url(), 'chat')): ?>
        <script src="<?php echo e(asset('public/backend/js/jquery-ui.js')); ?><?php echo e(assetVersion()); ?>"></script>
        <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/select2.min.js')); ?><?php echo e(assetVersion()); ?>"></script>
        <script src="<?php echo e(asset('public/js/app.js')); ?><?php echo e(assetVersion()); ?>"></script>
        <script src="<?php echo e(asset('public/chat/js/custom.js')); ?><?php echo e(assetVersion()); ?>"></script>
    <?php endif; ?>

    <?php if(auth()->check() && auth()->user()->role_id == 3 && !str_contains(request()->url(), 'chat')): ?>
        <script src="<?php echo e(asset('public/js/app.js')); ?><?php echo e(assetVersion()); ?>"></script>
    <?php endif; ?>


    <?php if(isModuleActive("WhatsappSupport")): ?>
        <script src="<?php echo e(asset('public/whatsapp-support/scripts.js')); ?><?php echo e(assetVersion()); ?>"></script>

        <?php echo $__env->make('whatsappsupport::partials._popup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php endif; ?>

    <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/custom.js')); ?><?php echo e(assetVersion()); ?>"></script>
    <?php if(Settings('gamification_status') && Settings('gamification_leaderboard_status')): ?>
        <script>
            $(document).on("click", ".point_btn", function () {
                let modal = $('#myLeaderBoard')
                modal.modal('show');
                let type = modal.find('.nav-link.active').data('type');
                if (type == undefined) {
                    let link = modal.find('.nav-link:first');
                    link.addClass('active')
                    type = link.data('type');

                }
                loadData(type);
            });
            $(document).on("click", ".how_to_point", function () {
                let modal = $('#myLeaderBoard')
                modal.modal('show');
                let link = modal.find('.nav-link:first');
                link.addClass('active')
                loadData('how_to_point')
            });

            $(document).on("click", ".nav-point", function () {
                let type = $(this).data('type');
                loadData(type);
            });

            function loadData(type, id = 0) {
                let body = $('#leaderboardBody');
                let url = '<?php echo e(url('/')); ?>';
                let formData = {
                    type: type,
                    id: id,
                };
                body.html('<div class="d-flex align-items-center justify-content-center py-3"><i class="fas fa-spinner  fa-spin"></i></div>')


                $.ajax({
                    type: "get",
                    data: formData,
                    dataType: "html",
                    url: url + '/my-leaderboard',
                    success: function (data) {
                        body.html(data);
                    },
                    error: function (data) {
                        body.html("");
                    }

                });
            }
        </script>
        <?php endif; ?>
        </body>

        </html>
</div>
<?php /**PATH D:\xampp\htdocs\github\upqutell\resources\views/frontend/infixlmstheme/partials/_footer.blade.php ENDPATH**/ ?>