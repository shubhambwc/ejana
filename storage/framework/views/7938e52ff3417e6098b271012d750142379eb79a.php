<div class="employee-card">
    <div class="row">
        <?php if(count($employers) > 0 || $searchByEmployee != '' || $status != '' || $featured != ''): ?>
            <div class="col-md-12">
                <div class="row mb-3 justify-content-end flex-wrap">
                    <div>
                        <div class="selectgroup mr-4">
                            <input wire:model.debounce.100ms="searchByEmployee" id="searchByEmployee"
                                   type="search"
                                   autocomplete="off"
                                   placeholder="Search" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php $__empty_1 = true; $__currentLoopData = $employers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php echo $__env->make('companies.companies_card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-md-12">
                <h5 class="text-black text-center">
                    <?php if($searchByEmployee): ?>
                        <?php echo e(__('messages.company.no_employee_found')); ?>

                    <?php else: ?>
                        <?php echo e(__('messages.company.no_employer_available')); ?>

                    <?php endif; ?>
                </h5>
            </div>
        <?php endif; ?>
        <div class="col-md-12">
            <div class="row mb-3 justify-content-end flex-wrap">
                <?php if($employers->count() > 0): ?>
                    <?php echo e($employers->links()); ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/livewire/employers-search.blade.php ENDPATH**/ ?>