
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.company.followers')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <?php echo \Livewire\Livewire::styles(); ?>

<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-header">
            <h1><?php echo e(__('messages.company.followers')); ?></h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body followers-body">
                    <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('followers')->dom;
} elseif ($_instance->childHasBeenRendered('uiwB5uD')) {
    $componentId = $_instance->getRenderedChildComponentId('uiwB5uD');
    $componentTag = $_instance->getRenderedChildComponentTagName('uiwB5uD');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('uiwB5uD');
} else {
    $response = \Livewire\Livewire::mount('followers');
    $dom = $response->dom;
    $_instance->logRenderedChild('uiwB5uD', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
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

<?php $__env->stopPush(); ?>


<?php echo $__env->make('employer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/employer/followers/index.blade.php ENDPATH**/ ?>