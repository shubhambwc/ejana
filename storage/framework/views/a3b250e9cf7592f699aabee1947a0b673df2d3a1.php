<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.job_categories')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <?php echo \Livewire\Livewire::styles(); ?>

    <link href="<?php echo e(asset('assets/css/summernote.min.css')); ?>" rel="stylesheet" type="text/css"/>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-header flex-wrap">
            <h1 class="mb-2"><?php echo e(__('Services')); ?></h1>
            <div class="section-header-breadcrumb">
                <?php if(count($jobCategories) > 0): ?>
                    <div class="card-header-action grid-flex-end">
                        <?php echo e(Form::select('is_featured', $featured, null, ['id' => 'filterFeatured', 'class' => 'form-control status-filter w-100', 'placeholder' => 'Select Active Job'])); ?>

                    </div>
                <?php endif; ?>
                <a href="#"
                   class="btn btn-primary form-btn addJobCategoryModal ml-2 back-btn-right"><?php echo e(__('messages.job_category.add')); ?>

                    <i class="fas fa-plus"></i></a>
            </div>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('job-categories')->dom;
} elseif ($_instance->childHasBeenRendered('1x27tgi')) {
    $componentId = $_instance->getRenderedChildComponentId('1x27tgi');
    $componentTag = $_instance->getRenderedChildComponentTagName('1x27tgi');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1x27tgi');
} else {
    $response = \Livewire\Livewire::mount('job-categories');
    $dom = $response->dom;
    $_instance->logRenderedChild('1x27tgi', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
                </div>
            </div>
        </div>
        <?php echo $__env->make('job_categories.add_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('job_categories.edit_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('job_categories.show_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <script>
        let jobCategoryUrl = "<?php echo e(route('job-categories.index')); ?>/";
        let jobCategorySaveUrl = "<?php echo e(route('job-categories.store')); ?>";
    </script>
    <script src="<?php echo e(asset('assets/js/summernote.min.js')); ?>"></script>
    <script src="<?php echo e(mix('assets/js/job_categories/job_categories.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/job_categories/index.blade.php ENDPATH**/ ?>