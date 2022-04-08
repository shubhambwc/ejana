
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.company.edit_employer')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('assets/css/summernote.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('assets/css/select2.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/inttel/css/intlTelInput.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-header justify-content-between featured-badge-margin">
            <h1><?php echo e(__('messages.company.edit_employer')); ?></h1>

            <?php if($isFeaturedEnable): ?>
                <?php if($company->activeFeatured): ?>
                    <div class="badge badge-info d-inline-block rounded">
                        <?php echo e(__('messages.front_settings.featured')); ?>

                        <?php echo e(__('messages.front_settings.exipre_on')); ?>

                        <?php echo e((new Carbon\Carbon($company->activeFeatured->end_time))->format('d/m/y')); ?></div>
                <?php else: ?>
                    <?php if($isFeaturedAvilabal): ?>
                        <button class="btn btn-info ml-auto"
                                id="makeFeatured"><?php echo e(__('messages.front_settings.make_featured')); ?></button>
                    <?php else: ?>
                        <button class="btn btn-info ml-auto disabled" data-toggle="tooltip" data-placement="bottom"
                                title="<?php echo e(__('messages.front_settings.featured_employer_not_available')); ?>"
                                data-toggle="tooltip"><?php echo e(__('messages.front_settings.make_featured')); ?></button>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <div class="section-body">
            <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="card">
                <div class="card-body">
                    <?php echo e(Form::model($company, ['route' => ['company.update.form', $company->id], 'method' => 'put','id'=>'editCompanyForm'])); ?>


                    <?php echo $__env->make('employer.companies.edit_fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php echo e(Form::close()); ?>

                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        let companyStateUrl = "<?php echo e(route('states-list')); ?>";
        let companyCityUrl = "<?php echo e(route('cities-list')); ?>";
        let isEdit = true;
        let phoneNo = "<?php echo e(old('region_code').old('phone')); ?>";
        let countryId = '<?php echo e($company->user->country_id); ?>';
        let stateId = '<?php echo e($company->user->state_id); ?>';
        let cityId = '<?php echo e($company->user->city_id); ?>';
        let companyID = '<?php echo e($company->id); ?>';
        let stripe = Stripe('<?php echo e(config('services.stripe.key')); ?>');
        let companyStripePaymentUrl = '<?php echo e(url('company-stripe-charge')); ?>';
        let utilsScript = "<?php echo e(asset('assets/js/inttel/js/utils.min.js')); ?>";
    </script>
    <script src="<?php echo e(asset('assets/js/summernote.min.js')); ?>"></script>
    <script src="<?php echo e(mix('assets/js/companies/create-edit.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/companies/companies_stripe_payment.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/inttel/js/intlTelInput.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/inttel/js/utils.min.js')); ?>"></script>
    <script src="<?php echo e(mix('assets/js/custom/phone-number-country-code.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('employer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/employer/companies/edit.blade.php ENDPATH**/ ?>