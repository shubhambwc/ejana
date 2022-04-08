<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e(__('web.help_req')); ?></title>
    <link rel="shortcut icon" href="<?php echo e(getSettingValue('favicon')); ?>" type="image/x-icon">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- General CSS Files -->
    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('assets/css/select2.min.css')); ?>" rel="stylesheet" type="text/css"/>

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/iziToast.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">
    <link href="<?php echo e(asset('assets/css/sweetalert.css')); ?>" rel="stylesheet" type="text/css"/>

<?php echo $__env->yieldPushContent('css'); ?>

<!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('web/backend/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('web/backend/css/components.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>">
    <link href="<?php echo e(mix('assets/css/infy-loader.css')); ?>" rel="stylesheet" type="text/css"/>

</head>
<body class="layout-3">
<div id="app">
    <div class="infy-loader" id="overlay-screen-lock">
        <?php echo $__env->make('loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="main-wrapper container">
    <?php echo $__env->make('employer.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('employer_profile.edit_profile_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('employer_profile.change_password_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Main Content -->
        <div class="main-content">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <footer class="main-footer">
            <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </footer>
    </div>
</div>
<script src="<?php echo e(asset('messages.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/sweetalert.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/iziToast.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery.nicescroll.js')); ?>"></script>
<script src="<?php echo e(asset('web/backend/js/stisla.js')); ?>"></script>
<script src="<?php echo e(asset('web/backend/js/scripts.js')); ?>"></script>
<script src="<?php echo e(mix('assets/js/custom/custom.js')); ?>"></script>
<script>
    (function ($) {
        $.fn.button = function (action) {
            let currentLocale = "<?php echo e(Config::get('app.locale')); ?>";
            Lang.setLocale(currentLocale);
            if (action === 'loading' && this.data('loading-text')) {
                this.data('original-text', this.html()).html(this.data('loading-text')).prop('disabled', true);
            }
            if (action === 'reset' && this.data('original-text')) {
                this.html(this.data('original-text')).prop('disabled', false);
            }
        };
    }(jQuery));
    $(document).ready(function () {
        $('.alert').delay(5000).slideUp(300);
    });
    $('[data-dismiss=modal]').on('click', function (e) {
        var $t = $(this),
            target = $t[0].href || $t.data("target") || $t.parents('.modal') || [];

        $(target).modal("hide");
    });
</script>
<?php echo $__env->yieldPushContent('scripts'); ?>
<script>
    let profileUrl = "<?php echo e(url('employer/employer-profile')); ?>";
    let profileUpdateUrl = "<?php echo e(url('employer/employer-profile-update')); ?>";
    let updateLanguageURL = "<?php echo e(url('update-language')); ?>";
    let changePasswordUrl = "<?php echo e(url('employer/employer-change-password')); ?>";
    let loggedInUserId = "<?php echo e(getLoggedInUserId()); ?>";
    let defaultImageUrl = "<?php echo e(asset('assets/img/infyom-logo.png')); ?>";
    let readAllNotifications = "<?php echo e(url('employer/read-all-notification')); ?>";
    let readNotification = "<?php echo e(url('employer/notification')); ?>";
</script>
<script src="<?php echo e(mix('assets/js/employer_profile/employer_profile.js')); ?>"></script>
<script src="<?php echo e(asset('js/currency.js')); ?>"></script>
</body>
</html>
<?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/employer/layouts/app.blade.php ENDPATH**/ ?>