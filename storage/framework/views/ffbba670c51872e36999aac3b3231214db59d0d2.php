<form class="form-inline mr-auto" action="#">
    <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
    </ul>
</form>
<?php ($notifications = getNotification(\App\Models\Notification::ADMIN)); ?>
<ul class="navbar-nav navbar-right">
    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                                                 class="nav-link notification-toggle nav-link-lg <?php echo e(count($notifications) > 0 ? 'beep' : ''); ?>"><i
                    class="far fa-bell"></i></a>
        <div class="dropdown-menu dropdown-list dropdown-menu-right" id="notification">
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
                    <div class="empty-state" data-height="250" style="height: 400px;">
                        <div class="empty-state-icon">
                            <i class="fas fa-question"></i>
                        </div>
                        <h2><?php echo e(__('messages.notification.empty_notifications')); ?></h2>
                    </div>
                <?php endif; ?>
                <div class="empty-state d-none" data-height="250" style="height: 400px;">
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
               class="nav-link dropdo wn-toggle nav-link-lg nav-link-user">
                   

                <img alt="image" src="<?php echo e(getLoggedInUser()->avatar); ?>"
                     class="rounded-circle mr-1 thumbnail-rounded user-thumbnail "> 

                   <!--   <img alt="image" src="<?php echo e(getLogoUrl()); ?>"
                     class="rounded-circle mr-1 thumbnail-rounded user-thumbnail "> -->
                   
                <div class="d-sm-none d-lg-inline-block">
                     <?php echo e(\Illuminate\Support\Facades\Auth::user()->first_name); ?></div>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">
                    <?php echo e(__('messages.common.welcome')); ?>, <?php echo e(\Illuminate\Support\Facades\Auth::user()->full_name); ?></div>
                <a class="dropdown-item has-icon editProfileModal" href="#" data-id="<?php echo e(getLoggedInUserId()); ?>">
                    <i class="fa fa-user"></i><?php echo e(__('messages.user.edit_profile')); ?></a>
                <a class="dropdown-item has-icon changePasswordModal" href="#" data-id="<?php echo e(getLoggedInUserId()); ?>"><i
                            class="fa fa-lock"> </i><?php echo e((Str::limit(__('messages.user.change_password'),20,'...'))); ?></a>
                <a class="dropdown-item has-icon changeLanguageModal" href="#" data-id="<?php echo e(getLoggedInUserId()); ?>"><i
                            class="fa fa-language"> </i><?php echo e(__('messages.user_language.change_language')); ?></a>
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
<?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/layouts/header.blade.php ENDPATH**/ ?>