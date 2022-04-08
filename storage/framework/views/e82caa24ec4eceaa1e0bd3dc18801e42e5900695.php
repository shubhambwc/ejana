<?php $__env->startSection('title'); ?>
    <?php echo e(__('Help Requester')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <?php echo \Livewire\Livewire::styles(); ?>

    <link href="<?php echo e(asset('assets/css/summernote.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('assets/css/select2.min.css')); ?>" rel="stylesheet" type="text/css"/>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-header">
            <h1><?php echo e(__('Help requester')); ?></h1>
            <div class="section-header-breadcrumb flex-basis-unset">
                <div class="row justify-content-end custom-row-pl-3 align-items-center">
                    <?php if(count($data) > 0): ?>
                        <div class="pl-3 pr-md-3 pr-0 py-1 grid-width-100">
                            <div class="card-header-action">
                                <?php echo e(Form::select('is_featured', $featured, null, ['id' => 'filter_featured', 'class' => 'form-control status-filter w-100', 'placeholder' => 'Select Featured'])); ?>

                            </div>
                        </div>
                        <div class="pl-3 pr-md-3 pr-0 py-1 grid-width-100">
                            <div class="card-header-action w-100">
                                <?php echo e(Form::select('is_stauts', $statusArr, null, ['id' => 'filter_status', 'class' => 'form-control status-filter w-100', 'placeholder' => 'Select Status'])); ?>

                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="pl-3 py-1 grid-width-100 grid-add-end">
                        <a href="<?php echo e(route('company.create')); ?>"
                           class="btn btn-primary form-btn"><?php echo e(__('messages.common.add')); ?>

                            <i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body">
            <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="card">
                <div class="card-body overflow-hidden">
                    <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('employers-search')->dom;
} elseif ($_instance->childHasBeenRendered('igmauGL')) {
    $componentId = $_instance->getRenderedChildComponentId('igmauGL');
    $componentTag = $_instance->getRenderedChildComponentTagName('igmauGL');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('igmauGL');
} else {
    $response = \Livewire\Livewire::mount('employers-search');
    $dom = $response->dom;
    $_instance->logRenderedChild('igmauGL', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <script>
        let companiesUrl = "<?php echo e(route('company.index')); ?>";
    </script>
    <script src="<?php echo e(asset('assets/js/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/summernote.min.js')); ?>"></script>
    <script src="<?php echo e(mix('assets/js/companies/companies.js')); ?>"></script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/companies/index.blade.php ENDPATH**/ ?>