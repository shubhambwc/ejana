<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar mb-0 pb-0">
    <a href="<?php echo e(route('front.home')); ?>" class="navbar-brand sidebar-gone-hide">
        <img src="<?php echo e(getLogoUrl()); ?>" width="70px" class="navbar-brand-full"/>&nbsp;&nbsp;
        <?php echo e(__('web.help_req')); ?>

    </a>
    <div class="navbar-nav">
        <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
    </div>
    <?php ($notifications = getNotification(\App\Models\Notification::EMPLOYER)); ?>
    <ul class="navbar-nav navbar-right ml-auto">
        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                                                     class="nav-link notification-toggle nav-link-lg <?php echo e(count($notifications) > 0 ? 'beep' : ''); ?>"><i
                        class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right notification-div">
                <div class="dropdown-header"><?php echo e(__('messages.notification.notifications')); ?>

                    <div class="float-right">
                        <?php if(count($notifications) > 0): ?>
                            <a href="#" id="readAllNotification"><?php echo e(__('messages.notification.mark_all_as_read')); ?>

                        <?php endif; ?>
                    </div>
                </div>
                <div class="dropdown-list-content dropdown-list-icons notification-content">
                    <?php if(count($notifications) > 0): ?>
                        <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="#" data-id="<?php echo e($notification->id); ?>"
                               class="dropdown-item dropdown-item-unread readNotification" id="readNotification">
                                <div class="dropdown-item-icon bg-primary text-white">
                                    <i class="<?php echo e(getNotificationIcon($notification->type)); ?>"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    <?php echo e($notification->title); ?>

                                    <div class="time text-primary"><span
                                                class="time notification-for-text badge badge-primary">&nbsp;<?php echo e($notification->notification_for_text); ?>&nbsp;</span> <?php echo e($notification->created_at->diffForHumans()); ?>

                                    </div>
                                </div>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <div class="empty-state" data-height="250">
                            <div class="empty-state-icon">
                                <i class="fas fa-question"></i>
                            </div>
                            <h2><?php echo e(__('messages.notification.empty_notifications')); ?></h2>
                        </div>
                    <?php endif; ?>
                    <div class="empty-state d-none" data-height="250">
                        <div class="empty-state-icon">
                            <i class="fas fa-question"></i>
                        </div>
                        <h2><?php echo e(__('messages.notification.empty_notifications')); ?></h2>
                    </div>
                </div>
            </div>
        </li>
        <?php if(\Illuminate\Support\Facades\Auth::user()): ?>
            <li class="dropdown">
                <a href="#" data-toggle="dropdown"
                   class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="<?php echo e(getLoggedInUser()->avatar); ?>"
                         class="rounded-circle mr-1 user-thumbnail">
                    <div class="d-sm-none d-lg-inline-block">
                      <?php echo e(\Illuminate\Support\Facades\Auth::user()->first_name); ?></div>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-drp">
                    <div class="dropdown-title">
                        <?php echo e(__('messages.common.welcome')); ?>

                        , <?php echo e(\Illuminate\Support\Facades\Auth::user()->full_name); ?></div>
                    <a class="dropdown-item has-icon editProfileModal" href="#" data-id="<?php echo e(getLoggedInUserId()); ?>">
                        <i class="fa fa-user"></i><?php echo e(__('messages.user.edit_profile')); ?></a>
                    <a class="dropdown-item has-icon" href="<?php echo e(route('front.home')); ?>">
                        <i class="fa fa-home"></i><?php echo e(__('messages.go_to_homepage')); ?></a>
                    <a class="dropdown-item has-icon changePasswordModal" href="#"
                       data-id="<?php echo e(getLoggedInUserId()); ?>"><i
                                class="fa fa-lock"> </i><?php echo e((Str::limit(__('messages.user.change_password'),20,'...'))); ?>

                    </a>
                    <a class="dropdown-item has-icon changeLanguageModal" href="#"
                       data-id="<?php echo e(getLoggedInUserId()); ?>"><i
                                class="fa fa-language"> </i><?php echo e((Str::limit(__('messages.user_language.change_language'),20,'...'))); ?>

                    </a>
                    <a href="<?php echo e(url('logout')); ?>" class="dropdown-item has-icon text-danger"
                       onclick="event.preventDefault(); localStorage.clear();  document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> <?php echo e(__('messages.user.logout')); ?>

                    </a>
                    <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" class="d-none">
                        <?php echo e(csrf_field()); ?>

                    </form>
                </div>
            </li>
        <?php else: ?>
            <li class="dropdown"><a href="#" data-toggle="dropdown"
                                    class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    
                    <div class="d-sm-none d-lg-inline-block"><?php echo e(__('messages.common.hello')); ?></div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-title"><?php echo e(__('messages.common.login')); ?>

                        / <?php echo e(__('messages.common.register')); ?></div>
                    <a href="<?php echo e(route('login')); ?>" class="dropdown-item has-icon">
                        <i class="fas fa-sign-in-alt"></i> <?php echo e(__('messages.common.login')); ?>

                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="<?php echo e(route('register')); ?>" class="dropdown-item has-icon">
                        <i class="fas fa-user-plus"></i> <?php echo e(__('messages.common.register')); ?>

                    </a>
                </div>
            </li>
        <?php endif; ?>
    </ul>
</nav>
<nav class="navbar navbar-secondary navbar-expand-lg">
    <div class="container">
        <ul class="navbar-nav">

            <li class="nav-item <?php echo e(Request::is('employer/dashboard*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('employer.dashboard')); ?>" class="nav-link"><i
                            class="fab fa-dashcube"></i><span><?php echo e(__('messages.dashboard')); ?></span></a>
            </li>
            <li class="nav-item <?php echo e(Request::is('employer/company*') ? 'active' : ''); ?>">
                <a class="nav-link"
                   href="<?php echo e(route('company.edit.form', \Illuminate\Support\Facades\Auth::user()->owner_id)); ?>">
                    <i class="far fa-user-circle"></i>
                    <span><?php echo e(__('messages.employer_menu.employer_profile')); ?></span>
                </a>
            </li>
            <li class="nav-item <?php echo e(Request::is('employer/jobs*') ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(route('job.index')); ?>">
                    <i class="fas fa-briefcase"></i><span><?php echo e(__('messages.employer_menu.jobs')); ?></span></a>
            </li>
            <li class="nav-item <?php echo e(Request::is('employer/followers*') ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(route('followers.index')); ?>">
                    <i class="fab fa-foursquare"></i>
                    <span><?php echo e(__('messages.employer_menu.followers')); ?></span>
                </a>
            </li>
            <li class="nav-item <?php echo e(Request::is('employer/manage-subscriptions*') ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(route('manage-subscription.index')); ?>">
                    <i class="fa fa-dollar-sign dollar-sign-icon"></i>
                    <span><?php echo e(__('messages.employer_menu.manage_subscriptions')); ?></span>
                </a>
            </li>
            <li class="nav-item <?php echo e(Request::is('employer/transaction*') ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(route('transaction.index')); ?>">
                    <i class="fas fa-money-bill-wave"></i>
                    <span><?php echo e(__('messages.employer_menu.transactions')); ?></span>
                </a>
            </li>
        </ul>
    </div>
</nav>
<?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/employer/layouts/header.blade.php ENDPATH**/ ?>