<!-- Menu Start -->
<div class="container">
    <!-- Logo container-->
    <div>
        <a href="/" class="logo">
            <img src="<?php echo e(asset('assets/img/logo-dark.png')); ?>" alt="" class="logo-light" height="50" />
            <img src="<?php echo e(asset('assets/img/logo-dark.png')); ?>" alt="" class="logo-dark" height="50" />
        </a>
    </div>
    <div class="buy-button">
        <?php if(auth()->guard()->check()): ?>
         <?php if(Auth::user()->owner_type  == 'App\Models\Candidate' || 'App\Models\Company'): ?>
          <!--  <a href="<?php echo e(url('logout')); ?>" class="btn  btn-1"
                   onclick="event.preventDefault(); localStorage.clear();  document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> <?php echo e(__('messages.user.logout')); ?>

                </a>
                <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" class="d-none">
                    <?php echo e(csrf_field()); ?>

                </form> -->


        <?php endif; ?>
       <?php else: ?>
         <a href="<?php echo e(route('our-pricing')); ?>" class="btn btn-primary"><i class="fa fa-user" aria-hidden="true"></i>
            SIGN UP</a>
        <a href="<?php echo e(route('front.candidate.login')); ?>" class="btn  btn-1"><i class="fa fa-lock"></i> LOG IN</a>
        <?php endif; ?>


    </div>
</div>
<!--end login button-->
<!-- End Logo container-->
<div class="menu-extras">
    <div class="menu-item">
        <!-- Mobile menu toggle-->
        <a class="navbar-toggle">
            <div class="lines">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </a>
        <!-- End mobile menu toggle-->
    </div>
</div>

<div id="navigation">
    <!-- Navigation Menu-->
    <ul class="navigation-menu">

        <li>
            <a href="<?php echo e(route('our-service')); ?>"> Our Services</a>

        </li>

        <li>
            <a href="<?php echo e(route('how-it-works')); ?>">How does it works</a>

        </li>
        <li>
            <a href="<?php echo e(route('about-us')); ?>">About Ejana</a>
        </li>
        <li>
            <a href="<?php echo e(route('contact-us')); ?>">Contact Us</a>
        </li>
 <?php if(auth()->guard()->check()): ?>
         <li class="dropdown">
                <a href="#" data-toggle="dropdown"
                   class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                   <!--  <img alt="image" src="<?php echo e(getLoggedInUser()->avatar); ?>"
                         class="rounded-circle mr-1 user-thumbnail"> -->
                    <div class="d-sm-none d-lg-inline-block">
                      <?php echo e(\Illuminate\Support\Facades\Auth::user()->first_name); ?></div>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-drp">
                    <!-- <div class="dropdown-title">
                        <?php echo e(__('messages.common.welcome')); ?>

                        , <?php echo e(\Illuminate\Support\Facades\Auth::user()->full_name); ?></div> -->
                    <!-- <a class="dropdown-item has-icon editProfileModal" href="#" data-id="<?php echo e(getLoggedInUserId()); ?>">
                        <i class="fa fa-user"></i><?php echo e(__('messages.user.edit_profile')); ?></a> -->
                         <?php if(Auth::user()->owner_type  == 'App\Models\Company'): ?>
                    <a class="dropdown-item has-icon" href="<?php echo e(route('employer.dashboard')); ?>">
                        <i class="fa fa-home"></i><?php echo e(__('messages.go_to_homepage')); ?></a>
                        <?php endif; ?>
                    <!-- <a class="dropdown-item has-icon changePasswordModal" href="#"
                       data-id="<?php echo e(getLoggedInUserId()); ?>"><i
                                class="fa fa-lock"> </i><?php echo e((Str::limit(__('messages.user.change_password'),20,'...'))); ?>

                    </a> -->
                    <!-- <a class="dropdown-item has-icon changeLanguageModal" href="#"
                       data-id="<?php echo e(getLoggedInUserId()); ?>"><i
                                class="fa fa-language"> </i><?php echo e((Str::limit(__('messages.user_language.change_language'),20,'...'))); ?>

                    </a> -->
                    <a href="<?php echo e(url('logout')); ?>" class="dropdown-item has-icon text-danger"
                       onclick="event.preventDefault(); localStorage.clear();  document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> <?php echo e(__('messages.user.logout')); ?>

                    </a>
                    <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" class="d-none">
                        <?php echo e(csrf_field()); ?>

                    </form>
                </div>
            </li> <?php endif; ?>

 <!--<li class="dropdown simple-menu language-menu no-hover">
                            <a href="#" class="dropdown-toggle language-text current-language" data-toggle="dropdown" role="button">
                                <?php echo e(getCurrentLanguageName()); ?>&nbsp;
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <?php $__currentLoopData = getLanguages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(checkLanguageSession() != $key): ?>
                                <li><a href="javascript:void(0)" class="languageSelection language-text" data-prefix-value="<?php echo e($key); ?>"><?php echo e($value); ?></a></li>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>-->

    </ul>
    <!--end navigation menu-->
</div>
<!--end navigation-->
</div>
<!--end container-->
<!--end end-->
<?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/web/webLayout/header.blade.php ENDPATH**/ ?>