<?php if($errors->any()): ?>
    <div class="alert alert-danger pb-0 pt-0">
        <ul class="j-error-padding list-unstyled p-2 mb-0">
            <li><?php echo e($errors->first()); ?></li>
        </ul>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/layouts/errors.blade.php ENDPATH**/ ?>