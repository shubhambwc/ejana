
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.favourite_jobs')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <?php echo \Livewire\Livewire::styles(); ?>

<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-header">
            <h1><?php echo e(__('messages.favourite_jobs')); ?></h1>
        </div>
        <div class="section-body">
            <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="card">
                <div class="card-body favourite-jobs">
                    <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('favorite-jobs')->dom;
} elseif ($_instance->childHasBeenRendered('qelCia7')) {
    $componentId = $_instance->getRenderedChildComponentId('qelCia7');
    $componentTag = $_instance->getRenderedChildComponentTagName('qelCia7');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('qelCia7');
} else {
    $response = \Livewire\Livewire::mount('favorite-jobs');
    $dom = $response->dom;
    $_instance->logRenderedChild('qelCia7', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
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

    <script src="<?php echo e(mix('assets/js/candidate/favourite_jobs.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('candidate.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/candidate/favourite_jobs/index.blade.php ENDPATH**/ ?>