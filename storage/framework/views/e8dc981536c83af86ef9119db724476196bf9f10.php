<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.subscriptions_plans')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('assets/css/jquery.dataTables.min.css')); ?>" rel="stylesheet" type="text/css"/>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-header">
            <h1><?php echo e(__('messages.subscriptions_plans')); ?></h1>
            
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <?php echo $__env->make('plans.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
        <?php echo $__env->make('plans.templates.templates', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('plans.add_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('plans.edit_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
        let planUrl = "<?php echo e(route('plans.index')); ?>";
        let planSaveUrl = "<?php echo e(route('plans.store')); ?>";
        let planCurrencies = JSON.parse('<?php echo json_encode($currency, 15, 512) ?>');
        let planCurrencySymbols = JSON.parse('<?php echo json_encode($currencyIcon, 15, 512) ?>');
    </script>
    <script src="<?php echo e(asset('assets/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(mix('assets/js/custom/custom-datatable.js')); ?>"></script>
    <script src="<?php echo e(asset('js/currency.js')); ?>"></script>
    <script src="<?php echo e(mix('assets/js/plans/plans.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/autonumeric/autoNumeric.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/plans/index.blade.php ENDPATH**/ ?>