<?php $__env->startSection('title'); ?>
    <?php echo e(__('Helper')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <?php echo \Livewire\Livewire::styles(); ?>

    <link href="<?php echo e(asset('assets/css/select2.min.css')); ?>" rel="stylesheet" type="text/css"/>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-header flex-wrap">
            <h1><?php echo e(__('Helper')); ?></h1>
            <div class="section-header-breadcrumb flex-content-center">
                <div class="row justify-content-center">
                    <?php if(count($candidates) > 0): ?>
                        <div class="px-3 mt-1 grid-center">
                            <input type="reset" class="btn btn-danger" id="reset-filter"
                                   value="<?php echo e(__('messages.common.reset')); ?>">
                        </div>
                        <div class="pl-3 mt-1 grid-center pad-x-15">
                            <a href="javascript:void(0)" class="btn btn-info w-auto"
                               id="candidateFilters"><?php echo e(__('messages.common.filters')); ?></a>
                        </div>
                    <?php endif; ?>
                    <div class="pl-3 mt-1 pr-sm-0 grid-center pad-x-15">

                        <div class="dropdown candidate-index__action d-inline">
                            <button class="btn btn-primary dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" id="action_dropdown"><?php echo e(__('messages.common.action')); ?>

                            </button>
                            <div class="dropdown-menu candidate-index__menu">
                                <a class="dropdown-item has-icon" href="<?php echo e(route('candidates.create')); ?>"><i
                                            class="fas fa-plus"></i> <?php echo e(__('messages.common.add')); ?></a>
                                <a class="dropdown-item has-icon" href="<?php echo e(route('candidates.export.excel')); ?>"><i
                                            class="far fa-file"></i><?php echo e(__('messages.common.export_excel')); ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4 col-xl-3 col-sm-12 col-12 d-none filters border border-light"
                         id="candidateFiltersForm">
                        <div class="mb-3">
                            <?php echo e(Form::select('job_skill', $jobsSkills, null, ['id' => 'jobSkills', 'class' => 'form-control status-filter w-100', 'placeholder' => 'Select Job Skill'])); ?>

                        </div>
                        <div class="mb-3">
                            <?php echo e(Form::select('is_immediate_available', $immediateAvailable, null, ['id' => 'immediateAvailable', 'class' => 'form-control status-filter w-100', 'placeholder' => 'Select Immediate Available'])); ?>

                        </div>
                        <div class="mb-0">
                            <?php echo e(Form::select('is_status', $statusArr, null, ['id' => 'filter_status', 'class' => 'form-control status-filter w-100', 'placeholder' => 'Select Status'])); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('admin-candidate-search')->dom;
} elseif ($_instance->childHasBeenRendered('iDUVVMD')) {
    $componentId = $_instance->getRenderedChildComponentId('iDUVVMD');
    $componentTag = $_instance->getRenderedChildComponentTagName('iDUVVMD');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('iDUVVMD');
} else {
    $response = \Livewire\Livewire::mount('admin-candidate-search');
    $dom = $response->dom;
    $_instance->logRenderedChild('iDUVVMD', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
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
        let candidateUrl = "<?php echo e(route('candidates.index')); ?>";
    </script>
    <script src="<?php echo e(asset('assets/js/select2.min.js')); ?>"></script>
    <script src="<?php echo e(mix('assets/js/candidate/candidate-list.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/candidates/index.blade.php ENDPATH**/ ?>