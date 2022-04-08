<div class="employee-card">
    <div class="row">
        <?php if(count($jobCategories) > 0 || $filterFeatured != '' || $searchByJobCategory != ''): ?>
            <div class="col-md-12">
                <div class="row mb-3 justify-content-end flex-wrap">
                    <div>
                        <div class="selectgroup mr-4">
                            <input wire:model.debounce.100ms="searchByJobCategory" id="searchByJobCategory"
                                   type="search"
                                   autocomplete="off"
                                   placeholder="Search" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php $__empty_1 = true; $__currentLoopData = $jobCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jobCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php echo $__env->make('job_categories.job_categories_card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-md-12">
                <h5 class="text-black text-center">
                    <?php if($searchByJobCategory): ?>
                        <?php echo e(__('messages.job_category.no_job_category_found')); ?>

                    <?php else: ?>
                        <?php echo e(__('messages.job_category.no_job_category_available')); ?>

                    <?php endif; ?>
                </h5>
            </div>
        <?php endif; ?>
        <div class="col-md-12">
            <div class="row mb-3 justify-content-end flex-wrap">
                <?php if($jobCategories->count() > 0): ?>
                    <?php echo e($jobCategories->links()); ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/livewire/job-categories.blade.php ENDPATH**/ ?>