<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.my_account')); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->yieldPushContent('page-css'); ?>
<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('assets/css/jquery.dataTables.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('assets/css/select2.min.css')); ?>" rel="stylesheet" type="text/css"/>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <section class="section profile">
        <div class="section-header">
            <h1><?php echo e(__('messages.ac_details')); ?></h1>
            <a class="font-weight-bold public-profile"
               href="<?php echo e(route('front.candidate.details',$user->candidate->unique_id)); ?>"
               target="_blank"><?php echo e(__('messages.common.view_details')); ?></a>
        </div>
        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="section-body">
            <div class="card">
                <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="card-body py-0 mt-2">
                    <?php echo $__env->make('candidate.profile.profile_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
        let companyStateUrl = "<?php echo e(route('states-list')); ?>";
        let companyCityUrl = "<?php echo e(route('cities-list')); ?>";
        let defaultImageUrl = "<?php echo e(asset('assets/img/infyom-logo.png')); ?>";
    </script>
    <?php echo $__env->yieldPushContent('page-scripts'); ?>
    <script src="<?php echo e(asset('assets/js/select2.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('candidate.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/candidate/profile/index.blade.php ENDPATH**/ ?>