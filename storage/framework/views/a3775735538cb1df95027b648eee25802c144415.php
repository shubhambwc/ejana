<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.jobs')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('assets/css/jquery.dataTables.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('assets/css/summernote.min.css')); ?>" rel="stylesheet" type="text/css"/>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <section class="section">
        <!-- <div class="section-header flex-wrap">
            <h1 class="mr-3"><?php echo e(__('messages.jobs')); ?></h1>
            <div class="section-header-breadcrumb">
                <div class="pl-3 pr-md-3 pr-0 py-1 grid-width-100">
                    <?php echo e(Form::select('is_featured', $featured, null, ['id' => 'filter_featured', 'class' => 'form-control status-filter w-100', 'placeholder' => 'Select Featured Job'])); ?>

                </div>
                <div class="pl-3 pr-md-3 pr-0 py-1 grid-width-100">
                    <?php echo e(Form::select('status', $statusArray, null, ['id' => 'filter_status', 'class' => 'form-control status-filter w-100', 'placeholder' => 'Select Status'])); ?>

                </div>
                <div class="pl-3 py-1 grid-width-100 grid-add-end">
                <a href="<?php echo e(route('job.create')); ?>"
                   class="btn btn-primary form-btn"><?php echo e(__('messages.common.add')); ?>

                    <i class="fas fa-plus"></i></a>
                </div>
            </div>
        </div> -->
        <div class="section-body">
            <?php if(\Session::has('success')): ?>
    <div class="alert alert-success">
       <?php echo \Session::get('success'); ?>

    </div>
<?php endif; ?>
            <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="card overflow-hidden">
                <div class="card-body">
                    <?php echo $__env->make('employer.jobs.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
        <?php echo $__env->make('employer.jobs.templates.templates', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        let jobsUrl = "<?php echo e(route('job.index')); ?>";
        let frontJobDetail = "<?php echo e(route('front.job.details')); ?>";
        let jobStatusUrl = "<?php echo e(url('employer/job')); ?>/";
        let statusArray = JSON.parse('<?php echo json_encode($statusArray, 15, 512) ?>');
        let isFeaturedEnable = "<?php echo e(($isFeaturedEnable == 1) ? true : false); ?>";
        let isFeaturedAvilabal = "<?php echo e($isFeaturedAvilabal); ?>";
        let stripe = Stripe('<?php echo e(config('services.stripe.key')); ?>');
        let jobStripePaymentUrl = '<?php echo e(url('job-stripe-charge')); ?>';
    </script>
    <script src="<?php echo e(asset('assets/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/summernote.min.js')); ?>"></script>
    <script src="<?php echo e(mix('assets/js/custom/custom-datatable.js')); ?>"></script>
    <script src="<?php echo e(mix('assets/js/jobs/jobs.js')); ?>"></script>
    <script src="<?php echo e(mix('assets/js/jobs/jobs_stripe_payment.js')); ?>"></script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('employer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/employer/jobs/index.blade.php ENDPATH**/ ?>