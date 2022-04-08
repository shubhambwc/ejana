
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.transactions')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('assets/css/jquery.dataTables.min.css')); ?>" rel="stylesheet" type="text/css"/>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-header">
            <h1><?php echo e(__('messages.transactions')); ?></h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <?php echo $__env->make('transactions.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
        <?php echo $__env->make('transactions.templates.templates', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
        let transactionUrl = "<?php echo e(route('transactions.index')); ?>";
        let invoiceUrl = "<?php echo e(url('admin/invoices')); ?>/";
    </script>
    <script src="<?php echo e(asset('assets/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(mix('assets/js/custom/custom-datatable.js')); ?>"></script>
    <script src="<?php echo e(asset('js/currency.js')); ?>"></script>
    <script src="<?php echo e(mix('assets/js/transactions/transactions.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/transactions/index.blade.php ENDPATH**/ ?>