<div class="col-xl-4 col-md-6 candidate-card">
    <div class="hover-effect-employee position-relative mb-5 border-hover-primary employee-border">
        <div class="employee-listing-details">
            <div class="d-flex employee-listing-description align-items-center justify-content-center flex-column">
                <div class="w-100">
                    <div class="text-left employee-data text-limit">
                        <span class="text-decoration-none text-color-gray">
                            <a href="#" class="show-btn"
                               data-id="<?php echo e($jobCategory->id); ?>"><?php echo e(Str::limit($jobCategory->name,30)); ?></a>
                            </span>
                    </div>
                    
                    <div style="float:left; width:100%;margin:5px 0px 10px 0px;">
                        <img  class="img-thumbnail thumbnail-preview" style="float:left;max-width:20%"
                             src="<?php echo e($jobCategory->thumbnail); ?>">
                        <span class="text-decoration-none text-color-gray" style="float:right;width:75%">
                           <?php echo e(Str::limit($jobCategory->description,100)); ?>

                        </span>
                        
                    </div>
                    <div class="text-left employee-date mt-2">
                        <label class="custom-switch pl-0">
                            <input type="checkbox" name="show_to_staff" class="custom-switch-input isFeatured"
                                   data-id="<?php echo e($jobCategory->id); ?>" <?php echo e($jobCategory->is_featured === false ? '' : 'checked'); ?>>
                            <span class="custom-switch-indicator"></span>
                            <span class="employee-label ml-1"><?php echo e(__('Is Active')); ?></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="employee-action-btn">
            <a title="<?php echo e(__('messages.common.edit')); ?>" class="btn btn-warning action-btn edit-btn"
               data-id="<?php echo e($jobCategory->id); ?>" href="#">
                <i class="fa fa-edit"></i>
            </a>
            <a title="<?php echo e(__('messages.common.delete')); ?>" class="btn btn-danger action-btn delete-btn"
               data-id="<?php echo e($jobCategory->id); ?>" href="#">
                <i class="fa fa-trash"></i>
            </a>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/job_categories/job_categories_card.blade.php ENDPATH**/ ?>