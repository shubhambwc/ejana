<?php if($paginator->hasPages()): ?>
    <ul class="pagination job-pagination" role="navigation">
        
        <?php if($paginator->onFirstPage()): ?>
            <li class="page-item disabled" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">
                <span class="page-link" aria-hidden="true">
                    <span>&lsaquo;</span>
                </span>
            </li>
        <?php else: ?>
            <li class="page-item">
                <button type="button" class="page-link" wire:click="previousPage" rel="prev"
                        aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">
                    <span>&lsaquo;</span>
                </button>
            </li>
        <?php endif; ?>
        
        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <?php if(is_string($element)): ?>
                <li class="page-item disabled" aria-disabled="true"><span
                            class="page-link"><?php echo e($element); ?></span></li>
            <?php endif; ?>
            
            <?php if(is_array($element)): ?>
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page == $paginator->currentPage()): ?>
                        <li class="page-item active " aria-current="page"><span
                                    class="page-link"><?php echo e($page); ?></span></li>
                    <?php else: ?>
                        <li class="page-item d-none d-md-block">
                            <button type="button" class="page-link web-pagination-btn"
                                    wire:click="gotoPage(<?php echo e($page); ?>)"><?php echo e($page); ?></button>
                        </li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        <?php if($paginator->hasMorePages()): ?>
            <li class="page-item">
                <button type="button" class="page-link" wire:click="nextPage(<?php echo e($paginator->lastPage()); ?>)" rel="next"
                        aria-label="<?php echo app('translator')->get('pagination.next'); ?>">
                    <span>&rsaquo;</span>
                </button>
            </li>
        <?php else: ?>
            <li class="page-item disabled" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">
                <span class="page-link" aria-hidden="true">
                    <span>&rsaquo;</span>
                </span>
            </li>
        <?php endif; ?>
    </ul>
<?php endif; ?>
<?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/livewire/custom-pagenation-jobs.blade.php ENDPATH**/ ?>