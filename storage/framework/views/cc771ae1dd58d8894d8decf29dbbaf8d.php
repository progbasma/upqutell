<!DOCTYPE html>
<html dir="<?php echo e(isRtl() ? 'rtl' : ''); ?>" class="<?php echo e(isRtl() ? 'rtl' : ''); ?>" lang="en" itemscope itemtype="<?php echo e(url('/')); ?>">

<head>
    <?php $config = (new \LaravelPWA\Services\ManifestService)->generate(); echo $__env->make( 'laravelpwa::meta' , ['config' => $config])->render(); ?>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"/>

    <meta property="og:url" content="<?php echo e(url()->current()); ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?php echo e(Settings('site_title')); ?>"/>
    <meta property="og:description" content="<?php echo e(Settings('footer_about_description')); ?>"/>
    <meta property="og:image" content=" <?php echo $__env->yieldContent('og_image'); ?>"/>

    <meta name="title" content="<?php echo e(Settings('site_title')); ?> | <?php echo e($row->title); ?>">
    <meta name="description" content="<?php echo e(Settings('meta_description')); ?>">
    <meta name="keywords" content="<?php echo e(Settings('meta_keywords')); ?>">

    <title><?php echo e(Settings('site_title')); ?> | <?php echo e($row->title); ?></title>

    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/themify-icons.css')); ?><?php echo e(assetVersion()); ?>"/>

    <link rel="stylesheet" href="<?php echo e(asset('Modules/AoraPageBuilder/Resources/assets/css/bootstrap.min.css')); ?>"
          data-type="aoraeditor-style"/>

    <link rel="stylesheet" href="<?php echo e(asset('Modules/AoraPageBuilder/Resources/assets/css/fontawesome.css')); ?>"
          data-type="aoraeditor-style"/>

    <link rel="stylesheet" href="<?php echo e(asset('Modules/AoraPageBuilder/Resources/assets/css/aoraeditor.css')); ?>"
          data-type="aoraeditor-style"/>
    <link rel="stylesheet" href="<?php echo e(asset('Modules/AoraPageBuilder/Resources/assets/css/aoraeditor-components.css')); ?>"
          data-type="aoraeditor-style"/>


    <link rel="stylesheet" type="text/css" data-type="aoraeditor-style"
          href="<?php echo e(asset('Modules/AoraPageBuilder/Resources/assets/css/style.css')); ?>">

    
    
    <?php
        $currentTheme =currentTheme();
//      $default =[
//          "/affiliate"
//];
//        if (in_array($row->slug,$default)){
//            $currentTheme ='infixlmstheme';
//
//        }
    ?>
    <?php if($currentTheme == 'infixlmstheme'): ?>
        <link rel="stylesheet"
              href="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/css/fontawesome.css<?php echo e(assetVersion()); ?> "
              data-type="aoraeditor-style">

        <link rel="stylesheet" href="<?php echo e(asset('public/frontend/infixlmstheme/css/app.css') . assetVersion()); ?>"
              data-type="aoraeditor-style">

        <link rel="stylesheet" type="text/css" data-type="aoraeditor-style"
              href="<?php echo e(asset('public/frontend/infixlmstheme/css/frontend_style.css') . assetVersion()); ?>">

        <link rel="stylesheet" href="<?php echo e(asset('public/frontend/infixlmstheme/css/mega_menu.css')); ?>">

        

        <script type="text/javascript"
                src="<?php echo e(asset('public/frontend/infixlmstheme/js/jquery.lazy.min.js')); ?>"></script>

        <link rel="stylesheet" href="<?php echo e(asset('public/css/preloader.css')); ?>"/>
        <link rel="stylesheet" href="<?php echo e(asset('public/frontend/infixlmstheme/css/custom.css')); ?>">

    <?php elseif($currentTheme=='edume'): ?>
        <?php if(isRtl()): ?>
            <link rel="stylesheet" href="<?php echo e(asset('public')); ?>/css/bootstrap.rtl.min.css">
        <?php else: ?>
            <link rel="stylesheet" href="<?php echo e(asset('public')); ?>/css/bootstrap.min.css">
        <?php endif; ?>
        <link rel="stylesheet" type="text/css" data-type="aoraeditor-style"
              href="<?php echo e(asset('public/frontend/infixlmstheme/css/frontend_style.css') . assetVersion()); ?>">

        <link rel="stylesheet" href="<?php echo e(asset('public/frontend/edume')); ?>/css/nice-select.css">
        <link rel="stylesheet" href="<?php echo e(asset('public/frontend/edume')); ?>/css/zeynep.min.css">
        

        <link rel="stylesheet" href="<?php echo e(asset('public/frontend/edume')); ?>/css/slicknav.css">

        <link rel="stylesheet" href="<?php echo e(asset('public/frontend/edume')); ?>/css/style.css"/>

    <?php elseif($currentTheme=='kidslms'): ?>
        <link rel="stylesheet" href="<?php echo e(themeAsset('css')); ?>/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo e(themeAsset('plugins/magnific')); ?>/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo e(themeAsset('plugins/select2')); ?>/select2.min.css">
        <link rel="stylesheet" href="<?php echo e(themeAsset('plugins/carousel')); ?>/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo e(themeAsset('css')); ?>/fontawesome.css">
        <link rel="stylesheet" href="<?php echo e(themeAsset('css')); ?>/frontend_style.css">
    <?php endif; ?>

    <?php if (isset($component)) { $__componentOriginalc88d99ae715b8ed9e702fcba32a10c8c = $component; } ?>
<?php $component = App\View\Components\FrontendDynamicStyleColor::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend-dynamic-style-color'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FrontendDynamicStyleColor::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc88d99ae715b8ed9e702fcba32a10c8c)): ?>
<?php $component = $__componentOriginalc88d99ae715b8ed9e702fcba32a10c8c; ?>
<?php unset($__componentOriginalc88d99ae715b8ed9e702fcba32a10c8c); ?>
<?php endif; ?>

    <?php echo $__env->yieldContent('styles'); ?>
    <style>

    </style>
    <script src="<?php echo e(asset('public/js/common.js')); ?>"></script>
    
    

    <link rel="stylesheet" href="<?php echo e(asset('public/css/preloader.css')); ?>"/>


</head>

<body>
<?php echo $__env->make('preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php if(str_contains(request()->url(), 'chat')): ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/jquery-ui.css')); ?><?php echo e(assetVersion()); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/vendors/select2/select2.css')); ?><?php echo e(assetVersion()); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('public/chat/css/style-student.css')); ?><?php echo e(assetVersion()); ?>">
<?php endif; ?>

<?php if(auth()->check() && auth()->user()->role_id == 3 && !str_contains(request()->url(), 'chat')): ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/chat/css/notification.css')); ?><?php echo e(assetVersion()); ?>">
<?php endif; ?>

<?php if(isModuleActive('WhatsappSupport')): ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/whatsapp-support/style.css')); ?><?php echo e(assetVersion()); ?>">
<?php endif; ?>

<script>
    window.Laravel = {
        "baseUrl": '<?php echo e(url('/')); ?>' + '/',
        "current_path_without_domain": '<?php echo e(request()->path()); ?>',
        "csrfToken": '<?php echo e(csrf_token()); ?>',
    }
</script>

<script>
    window._locale = '<?php echo e(app()->getLocale()); ?>';
    window._translations = <?php echo json_encode(cache('translations'), JSON_INVALID_UTF8_IGNORE); ?>

</script>

<script>
    window.jsLang = function (key, replace) {
        let translation = true

        let json_file = $.parseJSON(window._translations[window._locale]['json'])
        translation = json_file[key] ?
            json_file[key] :
            key


        $.each(replace, (value, key) => {
            translation = translation.replace(':' + key, value)
        })

        return translation
    }
</script>
<?php if(auth()->check() && auth()->user()->role_id == 3): ?>
    <style>
        .admin-visitor-area {
            margin: 0 30px 30px 30px !important;
        }

        .dashboard_main_wrapper .main_content_iner.main_content_padding {
            padding-top: 50px !important;
        }

        .primary_input {
            height: 50px;
            border-radius: 0px;
            border: unset;
            font-family: "Jost", sans-serif;
            font-size: 14px;
            font-weight: 400;
            color: unset;
            padding: unset;
            width: 100%;
            <?php if($errors->any()): ?>
                                                                      margin-bottom: 5px;
            <?php else: ?>
                                                                      margin-bottom: 30px;
        <?php endif; ?>





















































        }

        .primary_input_field {
            border: 1px solid #ECEEF4;
            font-size: 14px;
            color: #415094;
            padding-left: 20px;
            height: 46px;
            border-radius: 30px;
            width: 100%;
            padding-right: 15px;
        }

        .primary_input_label {
            font-size: 12px;
            text-transform: uppercase;
            color: #828BB2;
            display: block;
            margin-bottom: 6px;
            font-weight: 400;
        }

        .chat_badge {
            color: #ffffff;
            border-radius: 20px;
            font-size: 10px;
            position: relative;
            left: -20px;
            top: -12px;
            padding: 0px 4px !important;
            max-width: 18px;
            max-height: 18px;
            box-shadow: none;
            background: #ed353b;
        }

        .chat-icon-size {
            font-size: 1.35em;
            color: #687083;
        }
    </style>
<?php endif; ?>


<?php if(!empty(Settings('facebook_pixel'))): ?>
    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', <?php echo e(Settings('facebook_pixel')); ?>);
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
             src="https://www.facebook.com/tr?id=<?php echo e(Settings('facebook_pixel')); ?>/&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
<?php endif; ?>

<input type="hidden" id="url" value="<?php echo e(url('/')); ?>">
<input type="hidden" name="lat" class="lat" value="<?php echo e(Settings('lat')); ?>">
<input type="hidden" name="lng" class="lng" value="<?php echo e(Settings('lng')); ?>">
<input type="hidden" name="zoom" class="zoom" value="<?php echo e(Settings('zoom_level')); ?>">
<input type="hidden" name="slider_transition_time" id="slider_transition_time"
       value="<?php echo e(Settings('slider_transition_time') ? Settings('slider_transition_time') : 5); ?>">
<input type="hidden" name="base_url" class="base_url" value="<?php echo e(url('/')); ?>">
<input type="hidden" name="csrf_token" class="csrf_token" value="<?php echo e(csrf_token()); ?>">
<?php if(auth()->check()): ?>
    <input type="hidden" name="balance" class="user_balance" value="<?php echo e(auth()->user()->balance); ?>">
<?php endif; ?>
<input type="hidden" name="currency_symbol" class="currency_symbol" value="<?php echo e(Settings('currency_symbol')); ?>">
<input type="hidden" name="app_debug" class="app_debug" value="<?php echo e(env('APP_DEBUG')); ?>">
<div data-aoraeditor="html">
    <?php echo $__env->make(theme('partials._menu'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div id="content-area">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <?php echo $__env->make(theme('partials._footer'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>


<script type="text/javascript" src="<?php echo e(asset('Modules/AoraPageBuilder/Resources/assets/js/bootstrap.min.js')); ?>">
</script>
<script type="text/javascript" src="<?php echo e(asset('Modules/AoraPageBuilder/Resources/assets/js/jquery-ui.min.js')); ?>">
</script>
<script type="text/javascript" src="<?php echo e(asset('Modules/AoraPageBuilder/Resources/assets/js/ckeditor.js')); ?>"></script>




<script type="text/javascript" src="<?php echo e(asset('Modules/AoraPageBuilder/Resources/assets/js/aoraeditor.js')); ?>"></script>

<script type="text/javascript"
        src="<?php echo e(asset('Modules/AoraPageBuilder/Resources/assets/js/aoraeditor-components.js')); ?>"></script>


<?php echo $__env->yieldContent('scripts'); ?>


<script type="text/javascript" data-aoraeditor="script">
    $(function () {
        // $('.dynamicData').each(function (i, obj) {
        //     aoraEditor.loadDynamicContent($(this));
        // });


    });
    // $(function () {
    //     if ($.isFunction($.fn.lazy)) {
    //         $('.lazy').lazy();
    //     }
    // });

    setTimeout(function () {
        $('.preloader').fadeOut('hide', function () {
            // $(this).remove();

        });
    }, 0);
</script>
</body>

</html>
<?php /**PATH D:\xampp\htdocs\github\upqutell\Modules/AoraPageBuilder\Resources/views/layouts/master.blade.php ENDPATH**/ ?>