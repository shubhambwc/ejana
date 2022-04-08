
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.job.new_job')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('assets/css/summernote.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('assets/css/select2.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('css/bootstrap-datetimepicker.css')); ?>" rel="stylesheet" type="text/css"/>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-header">
            <h1><?php echo e(__('messages.job.new_job')); ?></h1>
            <div class="section-header-breadcrumb">
                <a href="<?php echo e(route('job.index')); ?>"
                   class="btn btn-primary form-btn float-right"><?php echo e(__('messages.common.back')); ?></a>
            </div>
        </div>
        <div class="section-body">
            <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="card">
                <div class="card-body">
                    <?php echo e(Form::open(['route' => 'job.store','id' => 'createJobForm'])); ?>


                    <?php echo $__env->make('employer.jobs.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php echo e(Form::close()); ?>

                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
        let jobStateUrl = "<?php echo e(route('states-list')); ?>";
        let jobCityUrl = "<?php echo e(route('cities-list')); ?>";
    </script>
    <script src="<?php echo e(asset('assets/js/summernote.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap-datetimepicker.min.js')); ?>"></script>
    <script src="<?php echo e(mix('assets/js/jobs/create-edit.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/autonumeric/autoNumeric.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('employer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/employer/jobs/create.blade.php ENDPATH**/ ?>