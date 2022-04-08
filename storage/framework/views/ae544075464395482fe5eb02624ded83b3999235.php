<!-- =============== Start of Header 1 Navigation =============== -->
<header class="sticky">
    <nav class="navbar navbar-default navbar-static-top fluid_header centered container-shadow">
        <div class="container">

            <!-- Logo -->
            <div class="col-md-2 col-sm-6 col-xs-8 nopadding">
                <a class="navbar-brand nomargin" href="<?php echo e(url('/')); ?>">
                    <img src="<?php echo e(asset($settings['logo'])); ?>" alt="logo">
                </a>
                <!-- INSERT YOUR LOGO HERE -->
            </div>

            <!-- ======== Start of Main Menu ======== -->
            <div class="col-md-10 col-sm-6 col-xs-4 nopadding">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle toggle-menu menu-right push-body" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                        <span class="sr-only"><?php echo e(__('web.footer.toggle_navigation')); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Start of Main Nav -->
                <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="main-nav">
                    <ul class="nav navbar-nav pull-right main-width">
                        <!-- Mobile Menu Title -->
                        <li class="mobile-title">
                            <h4><?php echo e(__('web.header.main_menu')); ?></h4>
                        </li>
                        <li class="simple-menu <?php echo e(Request::is('/') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('front.home')); ?>" class="j-nav-item"><?php echo e(__('web.home')); ?></a>
                        </li>
                        <li class="simple-menu <?php echo e(Request::is('search-jobs') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('front.search.jobs')); ?>" class="j-nav-item"><?php echo e(__('web.jobs')); ?></a>
                        </li>
                        <li class="simple-menu <?php echo e(Request::is('company-lists') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('front.company.lists')); ?>" class="j-nav-item"><?php echo e(__('web.companies')); ?></a>
                        </li>
                        <?php if(auth()->guard()->check()): ?>
                        <?php if(auth()->check() && auth()->user()->hasRole('Employer|Admin')): ?>
                        <li class="simple-menu <?php echo e(Request::is('candidate-lists') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('front.candidate.lists')); ?>" class="j-nav-item"><?php echo e(__('web.job_seekers')); ?></a>
                        </li>
                        <?php endif; ?>
                        <?php endif; ?>
                        <li class="simple-menu <?php echo e(Request::is('about-us') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('about-us')); ?>" class="j-nav-item"><?php echo e(__('web.about_us')); ?></a>
                        </li>
                        <li class="simple-menu <?php echo e(Request::is('contact-us') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('contact-us')); ?>" class="j-nav-item"><?php echo e(__('web.contact_us')); ?></a>
                        </li>
                        <li class="simple-menu <?php echo e(Request::is('posts') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('front.post.lists')); ?>" class="j-nav-item"><?php echo e(__('messages.post.blog')); ?></a>
                        </li>
                        <?php if(auth()->guard()->check()): ?>
                        <li class="dropdown simple-menu language-menu no-hover">
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
                        </li>
                        <li class="dropdown simple-menu">
                            <a href="#" class="dropdown-toggle user-avatar" data-toggle="dropdown" role="button">
                                <img src="<?php echo e(getLoggedInUser()->avatar); ?>" class="thumbnail-rounded front-thumbnail" />&nbsp;&nbsp;
                                <span class="d-sm-none d-lg-inline-block">
                                    Hi, <?php echo e(getLoggedInUser()->full_name); ?></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="userName"><span><?php echo e(getLoggedInUser()->full_name); ?></span></li>
                                <li class="userMenu">
                                    <a href="<?php echo e(dashboardURL()); ?>"><?php echo e(__('web.go_to_dashboard')); ?></a>
                                </li>
                                <?php if(auth()->guard()->check()): ?>
                                <?php if(auth()->check() && auth()->user()->hasRole('Candidate')): ?>
                                <li class="userMenu">
                                    <a href="<?php echo e(route('candidate.profile')); ?>"><?php echo e(__('web.my_profile')); ?></a>
                                </li>
                                <li class="userMenu">
                                    <a href="<?php echo e(route('favourite.jobs')); ?>"><?php echo e(__('messages.favourite_jobs')); ?></a>
                                </li>
                                <li class="userMenu">
                                    <a href="<?php echo e(route('favourite.companies')); ?>"><?php echo e(__('messages.candidate_dashboard.followings')); ?></a>
                                </li>
                                <li class="userMenu">
                                    <a href="<?php echo e(route('candidate.applied.job')); ?>"><?php echo e(__('messages.applied_job.applied_jobs')); ?></a>
                                </li>
                                <li class="userMenu">
                                    <a href="<?php echo e(route('candidate.job.alert')); ?>"><?php echo e(__('messages.job.job_alert')); ?></a>
                                </li>
                                <?php endif; ?>
                                <?php if(auth()->check() && auth()->user()->hasRole('Employer')): ?>
                                <li class="userMenu">
                                    <a href="<?php echo e(route('company.edit.form', \Illuminate\Support\Facades\Auth::user()->owner_id)); ?>"><?php echo e(__('web.my_profile')); ?></a>
                                </li>
                                <li class="userMenu">
                                    <a href="<?php echo e(route('job.index')); ?>"><?php echo e(__('messages.employer_menu.jobs')); ?></a>
                                </li>
                                <li class="userMenu">
                                    <a href="<?php echo e(route('followers.index')); ?>"><?php echo e(__('messages.employer_menu.followers')); ?></a>
                                </li>
                                <li class="userMenu">
                                    <a href="<?php echo e(route('manage-subscription.index')); ?>"><?php echo e(__('messages.employer_menu.manage_subscriptions')); ?></a>
                                </li>
                                <li class="userMenu">
                                    <a href="<?php echo e(route('transaction.index')); ?>"><?php echo e(__('messages.employer_menu.transactions')); ?></a>
                                </li>
                                <?php endif; ?>
                                <?php endif; ?>
                                <li>
                                    <a href="<?php echo e(url('logout')); ?>" onclick="event.preventDefault(); localStorage.clear();  document.getElementById('logout-form').submit();">
                                        <?php echo e(__('web.logout')); ?>

                                    </a>
                                    <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" class="d-none">
                                        <?php echo e(csrf_field()); ?>

                                    </form>
                                </li>
                            </ul>
                        </li>
                        <?php else: ?>
                        <li class="dropdown simple-menu language-menu no-hover">
                            <a href="#" class="dropdown-toggle language-text current-language" data-toggle="dropdown" role="button" id="register">
                                <?php echo e(__('web.register')); ?>

                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu" id="dropdownRegister">
                                <li><a href="<?php echo e(route('candidate.register')); ?>" class="language-text register-selection">
                                        <?php echo e(__('messages.notification_settings.candidate')); ?></a>
                                </li>
                                <li><a href="<?php echo e(route('employer.register')); ?>" class="language-text register-selection">
                                        <?php echo e(__('messages.company.employer')); ?></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown simple-menu language-menu no-hover">
                            <a href="#" class="dropdown-toggle language-text current-language" data-toggle="dropdown" role="button" id="language">
                                <?php echo e(getCurrentLanguageName()); ?>&nbsp;
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu" id="dropdownLanguage">
                                <?php $__currentLoopData = getLanguages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(checkLanguageSession() != $key): ?>
                                <li><a href="javascript:void(0)" class="languageSelection language-text" data-prefix-value="<?php echo e($key); ?>"><?php echo e($value); ?></a></li>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                        <li class="dropdown simple-menu language-menu no-hover">
                            <a href="#" class="dropdown-toggle language-text current-language" data-toggle="dropdown" role="button" id="login">
                                <?php echo e(__('web.login')); ?>

                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu" id="dropdownLogin">
                                <li><a href="<?php echo e(route('front.candidate.login')); ?>" class="language-text register-selection">
                                        <?php echo e(__('messages.notification_settings.candidate')); ?></a>
                                </li>
                                <li><a href="<?php echo e(route('front.employee.login')); ?>" class="language-text register-selection">
                                        <?php echo e(__('messages.company.employer')); ?></a>
                                </li>
                            </ul>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <!-- End of Main Nav -->
            </div>
            <!-- ======== End of Main Menu ======== -->

        </div>
    </nav>
</header>
<!-- =============== End of Header 1 Navigation =============== --><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/web/layouts/header.blade.php ENDPATH**/ ?>