<div class="employee-card">
    <div class="row">
        <?php if(count($candidates) > 0 || $status != '' || $immediateAvailable != '' || $jobSkills != '' || $searchByAdminCandidate != ''): ?>
            <div class="col-md-12">
                <div class="row mb-3 justify-content-end flex-wrap">
                    <div>
                        <div class="selectgroup mr-4">
                            <input wire:model.debounce.100ms="searchByAdminCandidate" id="searchByAdminCandidate"
                                   type="search"
                                   autocomplete="off"
                                   placeholder="Search" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php $__empty_1 = true; $__currentLoopData = $candidates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php echo $__env->make('candidates.candidate_card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-md-12">
                <h5 class="text-black text-center">
                    <?php if($searchByAdminCandidate): ?>
                        <?php echo e(__('messages.candidate.no_candidate_found')); ?>

                    <?php else: ?>
                        <?php echo e(__('messages.candidate.no_candidate_available')); ?>

                    <?php endif; ?>
                </h5>
            </div>
        <?php endif; ?>
        <div class="col-md-12">
            <div class="row mb-3 justify-content-end flex-wrap">
                <?php if($candidates->count() > 0): ?>
                    <?php echo e($candidates->links()); ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/livewire/admin-candidate-search.blade.php ENDPATH**/ ?>