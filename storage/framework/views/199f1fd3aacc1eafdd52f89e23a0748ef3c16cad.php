<?php $__env->startSection('title'); ?>
    <?php echo e(__('web.helpers.job_applications')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('assets/css/jquery.dataTables.min.css')); ?>" rel="stylesheet" type="text/css"/> 
    
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-header">
            <h1><?php echo e(__('web.helpers.job_applications')); ?></h1>
        </div>
        <?php if(\Session::has('success')): ?>
    <div class="alert alert-success">
        <?php echo \Session::get('success'); ?>

        
    </div>
<?php endif; ?> 
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <?php echo $__env->make('job_application.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                     <!-- <?php echo $__env->make('job_application.editmodal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->
                </div>
            </div>
        </div>
       
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
     $( function() {
    $( ".datepicker" ).datepicker({
            dateFormat: 'dd-mm-yy',
            });

             $('#time').datetimepicker({
               icons:
            {
                up: 'fa fa-angle-up',
                down: 'fa fa-angle-down'
            },
                 format: 'LT'
             });
            });
       // let transactionUrl = "<?php echo e(route('candidates.index')); ?>";
       // let invoiceUrl = "<?php echo e(url('admin/invoices')); ?>/";
      
    </script>
    <!-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" /> -->
     <script src="<?php echo e(asset('js/bootstrap-datetimepicker.min.js')); ?>"></script>
     <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
   <script src="<?php echo e(asset('assets/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(mix('assets/js/custom/custom-datatable.js')); ?>"></script>
    <script src="<?php echo e(asset('js/currency.js')); ?>"></script>
   
    <script src="<?php echo e(asset('assets/js/autonumeric/autoNumeric.min.js')); ?>"></script>
     <script src="<?php echo e(asset('assets/js/reminder/reminderedit.js')); ?>"></script>
   
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/job_application/index.blade.php ENDPATH**/ ?>