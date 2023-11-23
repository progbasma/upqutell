<div class="aoraeditor-skip aoraeditor-header">

    <style>
        .header_area .main_menu ul li ul.leftcontrol_submenu {
            left: auto !important;
            right: 100% !important;
        }
    </style>
    <!-- HEADER::START -->

    <header>
        <div id="sticky-header" class="header_area ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="header__wrapper">
                            <!-- header__left__start  -->
                            <div class="header__left d-flex align-items-center">
                                <div class="logo_img">
                                    <a href="<?php echo e(url('/')); ?>">
                                        <img class="p-2" style="width: 150px" src="<?php echo e(getLogoImage(Settings('logo') )); ?>"
                                             alt="<?php echo e(Settings('site_name')); ?>">
                                    </a>
                                </div>
                                <div class="mr-3 translator-switch">

                                    <?php if(Settings('frontend_language_translation') == 1): ?>
                                        <?php
                                            if (auth()->check()){
                                                $currentLang =auth()->user()->language_code;
                                            }else{
                                                $currentLang =app()->getLocale();
                                            }
                                        ?>
                                        <select name="code" id="language_code" class="nice_Select"
                                                onchange="location = this.value;">
                                            <?php $__currentLoopData = getLanguageList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e(route('changeLanguage',$language->code)); ?>"
                                                        <?php if($currentLang == $language->code): ?> selected <?php endif; ?>><?php echo e($language->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>

                                    <?php endif; ?>
                                </div>

                                <div class="category_search d-flex category_box_iner">
                                    <?php if(Settings('category_show')): ?>
                                        <div class="input-group-prepend2">
                                            <a href="#" class="categories_menu">
                                                <i class="fas fa-th"></i>
                                                <span><?php echo e(__('courses.Category')); ?></span>
                                            </a>
                                            <div class="menu_dropdown">
                                                <ul>
                                                    <?php if(isset($categories)): ?>
                                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                            <?php echo $__env->make(theme('partials._category'),['category'=>$category,'level'=>1], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </ul>

                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(@$homeContent->show_menu_search_box==1): ?>
                                        <form action="<?php echo e(route('search')); ?>">
                                            <div class="input-group theme_search_field">
                                                <div class="input-group-prepend">
                                                    <button class="btn" type="button" id="button-addon1"><i
                                                            class="ti-search"></i>
                                                    </button>
                                                </div>

                                                <input type="text" class="form-control" name="query"
                                                       placeholder="<?php echo e(__('frontend.Search for course, skills and Videos')); ?>"
                                                       onfocus="this.placeholder = ''"
                                                       onblur="this.placeholder = '<?php echo e(__('frontend.Search for course, skills and Videos')); ?>'">

                                            </div>
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!-- header__left__start  -->

                            <!-- main_menu_start  -->
                            <div class="main_menu text-right d-none d-lg-block category_box_iner">
                                <nav>
                                    <div class="menu_dropdown">
                                        <ul>
                                            <?php if(isset($categories)): ?>
                                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="mega_menu_dropdown active_menu_item">
                                                        <a href="<?php echo e(route('courses')); ?>?category=<?php echo e($category->id); ?>"><?php echo e($category->name); ?></a>
                                                        <?php if(isset($category->activeSubcategories)): ?>
                                                            <?php if(count($category->activeSubcategories)!=0): ?>
                                                                <ul>
                                                                    <li>
                                                                        <div class="menu_dropdown_iner d-flex">
                                                                            <div class="single_menu_dropdown">
                                                                                <h4><?php echo e(__('courses.Sub Category')); ?></h4>
                                                                                <ul>
                                                                                    <?php if(isset($category->activeSubcategories)): ?>
                                                                                        <?php $__currentLoopData = $category->activeSubcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                            <li>
                                                                                                <a href="<?php echo e(route('courses')); ?>?category=<?php echo e($category->id); ?>"><?php echo e($subcategory->name); ?></a>
                                                                                            </li>
                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                    <?php endif; ?>
                                                                                </ul>
                                                                            </div>

                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </ul>
                                    </div>


                                    <ul id="mobile-menu">


                                        <?php if(isset($menus)): ?>
                                            <?php $__currentLoopData = $menus->where('parent_id',null); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                    if($menu->title=='Forum' && !isModuleActive('Forum')){
                                                        continue;
                                                    }
                                                    if($menu->link == '/upcoming-courses'  && !isModuleActive('UpcomingCourse')){
                                                       continue;
                                                    }

                                                    if ($menu->link=='/saas-signup') {
                                                        if (Auth::check()) {
                                                           continue;
                                                        }elseif (SaasDomain() !='main')
                                                        {
                                                            continue;
                                                        }
                                                    }
                                                ?>
                                                <li class="<?php if($menu->mega_menu==1): ?> position-static <?php else: ?> <?php if($menu->show==1): ?> right_control_submenu <?php endif; ?> <?php endif; ?>">
                                                    <a <?php if($menu->is_newtab==1): ?> target="_blank"
                                                       <?php endif; ?> href="<?php echo e(getMenuLink($menu)); ?>"><?php echo e($menu->title); ?></a>
                                                    <?php if(isset($menu->childs)): ?>
                                                        <?php if(count($menu->childs)!=0): ?>
                                                            <?php if(isset($menu->childs)): ?>
                                                                <?php if($menu->mega_menu==1): ?>
                                                                    <ul class="mega_menu submenu ">
                                                                        <li class="container mx-auto">
                                                                            <div class="row">
                                                                                <?php $__currentLoopData = $menu->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <div
                                                                                        class="col-lg-<?php echo e($menu->mega_menu_column); ?>">
                                                                                        <h4>
                                                                                            <?php echo e($sub->title); ?>

                                                                                        </h4>
                                                                                        <?php if(isset($sub->childs)): ?>
                                                                                            <?php if(count($sub->childs)!=0): ?>
                                                                                                <ul class="mega_menu_list">
                                                                                                    <?php $__currentLoopData = $sub->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                        <li class="<?php if($sub->show==1): ?>  <?php endif; ?>">
                                                                                                            <a <?php if($s->is_newtab==1): ?> target="_blank"
                                                                                                               <?php endif; ?>  href="<?php echo e(getMenuLink($s)); ?>"><?php echo e($s->title); ?></a>
                                                                                                        </li>
                                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                                </ul>
                                                                                            <?php endif; ?>
                                                                                        <?php endif; ?>

                                                                                    </div>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                <?php else: ?>
                                                                    <ul class="submenu list">
                                                                        <?php $__currentLoopData = $menu->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <li class=""><a
                                                                                    <?php if($sub->is_newtab==1): ?> target="_blank"
                                                                                    <?php endif; ?> href="<?php echo e(getMenuLink($sub)); ?>"><?php echo e($sub->title); ?>

                                                                                    <?php if(isset($sub->childs) && count($sub->childs)!=0): ?>
                                                                                        <i class="ti-angle-right"></i>
                                                                                    <?php endif; ?>
                                                                                </a>
                                                                                <?php if(isset($sub->childs)): ?>
                                                                                    <?php if(count($sub->childs)!=0): ?>
                                                                                        <ul class="<?php if($sub->show==1): ?>  leftcontrol_submenu <?php endif; ?>">
                                                                                            <?php $__currentLoopData = $sub->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                <li class="<?php if($sub->show==1): ?>  <?php endif; ?>">
                                                                                                    <a <?php if($s->is_newtab==1): ?> target="_blank"
                                                                                                       <?php endif; ?>  href="<?php echo e(getMenuLink($s)); ?>"><?php echo e($s->title); ?></a>
                                                                                                </li>
                                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                        </ul>
                                                                                    <?php endif; ?>
                                                                                <?php endif; ?>
                                                                            </li>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </ul>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </li>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>

                                        <?php endif; ?>
                                        <li><a href="#"></a></li>


                                    </ul>


                                </nav>
                            </div>
                            <!-- main_menu_start  -->

                            <!-- header__right_start  -->
                            <?php if(auth()->guard()->check()): ?>
                                <div class="header__right login_user">
                                    <div class="profile_info collaps_part">
                                        <div class="profile_img collaps_icon     d-flex align-items-center">
                                            <div class="studentProfileThumb"
                                                 style="background-image: url('<?php echo e(getProfileImage(Auth::user()->image)); ?>')"></div>

                                            <span class=""><?php echo e(Auth::user()->name); ?>

                    <br style="display: block">
                  <small>
                      <?php if(showEcommerce()): ?>
                          <?php if(Auth::user()->role_id==3): ?>
                              <?php if(Auth::user()->balance==0): ?>
                                  <?php echo e(Settings('currency_symbol') ??'৳'); ?> 0
                              <?php else: ?>
                                  <?php echo e(getPriceFormat(Auth::user()->balance)); ?>

                              <?php endif; ?>
                          <?php endif; ?>
                      <?php endif; ?>
                  </small>

                </span>

                                        </div>
                                        <div class="profile_info_iner collaps_part_content">
                                            <?php if(Auth::user()->role_id==3): ?>
                                                <a href="<?php echo e(route('studentDashboard')); ?>"><?php echo e(__('dashboard.Dashboard')); ?></a>
                                                <a href="<?php echo e(route('myProfile')); ?>"><?php echo e(__('frontendmanage.My Profile')); ?></a>
                                                <a href="<?php echo e(route('myAccount')); ?>"><?php echo e(__('frontend.Account Settings')); ?></a>
                                                <?php if(isModuleActive('Affiliate') && auth()->user()->affiliate_request!=1): ?>
                                                    <a href="<?php echo e(routeIsExist('affiliate.users.request')?route('affiliate.users.request'):''); ?>"><?php echo e(__('frontend.Join Affiliate Program')); ?></a>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('dashboard.Dashboard')); ?></a>
                                                <a href="<?php echo e(route('changePassword')); ?>"><?php echo e(__('frontendmanage.My Profile')); ?></a>
                                            <?php endif; ?>
                                            <?php if(isModuleActive('UserType')): ?>
                                                <?php $__currentLoopData = auth()->user()->userRoles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php
                                                        if ($role->id==auth()->user()->role_id){
                                                            continue;
                                                        }
                                                    ?>
                                                    <a href="<?php echo e(route('usertype.changePanel',$role->id)); ?>">
                                                        <?php echo e(__('common.Switch to')); ?> <?php echo e($role->name); ?>

                                                    </a>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                            <a href="<?php echo e(route('logout')); ?>"><?php echo e(__('frontend.Log Out')); ?></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if(auth()->guard()->guest()): ?>
                                <div class="header__right">
                                    <div class="contact_wrap d-flex align-items-center">
                                        <div class="contact_btn">
                                            <a href="<?php echo e(url('login')); ?>"
                                               class="theme_btn small_btn2"><?php echo e(__('frontend.Sign In')); ?> </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <!-- header__right_end  -->
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?php if(Settings('category_show')): ?>
        <div class="side_cate">
            <div class="side_cate_close"><i class="ti ti-close"></i></div>
            <div class="side_cate_wrap">
                <ul class="side_cate_wrap_menu">

                    <?php if(isset($categories)): ?>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <?php echo $__env->make(theme('partials._mobile_category'),['category'=>$category,'level'=>1], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>
    <?php if(Settings('show_cart')==1): ?>
        <a href="#" class="float notification_wrapper">
            <div class="notify_icon cart_store" style="padding-top: 7px">
                <img style="max-width: 30px;" src="<?php echo e(asset('/public/frontend/infixlmstheme/')); ?>/img/svg/cart_white.svg"
                     alt="">
            </div>
            <span class="notify_count"><?php echo e(@cartItem()); ?></span>
        </a>
    <?php endif; ?>
</div>
<?php /**PATH D:\xampp\htdocs\github\upqutell\resources\views/frontend/infixlmstheme/partials/_menu.blade.php ENDPATH**/ ?>