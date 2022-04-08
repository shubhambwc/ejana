<div class="col-xl-4 col-md-6 candidate-card news">
    <div class="hover-effect-employee position-relative mb-5 border-hover-primary employee-border fix-employee-height">
        <div class="employee-listing-details">
            <div class="d-flex employee-listing-description align-items-center justify-content-center flex-column employee-pt-2">
                <div class="pl-0 mb-2 employee-avatar">
                    <img src="<?php echo e($employee['company_url']); ?>"
                         class="img-responsive users-avatar-img employee-img mr-2">
                </div>
                <div class="mb-auto w-100 employee-data">
                    <div class="d-flex justify-content-center align-items-center w-100">
                        <div>
                            <a href="<?php echo e(route('company.index')); ?>/<?php echo e($employee['id']); ?>"
                               class="employee-listing-title text-decoration-none"><?php echo e($employee['user']['first_name']); ?> </a>
                        </div>
                    </div>
                    <div class="text-center">
                        <label class="text-decoration-none text-color-gray"><?php echo e($employee['user']['email']); ?></label>
                        <label class="text-decoration-none text-color-gray" style="margin-bottom: 0px;">Registered on : <?php echo e(date('d-m-Y', strtotime($employee['user']['created_at']))); ?></label>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-0" style="padding-bottom: 15px;">
            <div class="text-center">
                <label class="custom-switch">
                    <input type="checkbox" name="Is Active"
                           class="custom-switch-input isActive"
                           data-id="<?php echo e($employee['id']); ?>" <?php echo e($employee['user']['is_active']==0?'':'checked'); ?>>
                    <span class="custom-switch-indicator"></span>
                    <span class="employee-label ml-1"><?php echo e(__('messages.common.status')); ?></span>
                </label>
            </div>
            <div class="text-center">
                <label class="custom-switch">
                    <input type="checkbox" name="Is Active"
                           class="custom-switch-input is-email-verified"
                           data-id="<?php echo e($employee['id']); ?>" <?php echo e($employee['user']['email_verified_at']!=null?'checked':''); ?>>
                    <span class="custom-switch-indicator"></span>
                    <span class="employee-label ml-1"><?php echo e(__('messages.company.email_verified')); ?></span>
                </label>
            </div>
            <div class="text-center">
                <a title="<?php echo e(__('messages.common.resend_verification_mail')); ?>"
                   class="btn btn-primary action-btn send-email-verification" data-id="<?php echo e($employee['id']); ?>"
                   href="#">
                    <i class="fa fa-sync"></i>
                </a>
                <label class="employee-label ml-1"><?php echo e(__('messages.common.resend_verification_mail')); ?></label>
            </div>
        </div>

        <div class="employee-action-btn">
            <a title="<?php echo e(__('messages.common.edit')); ?>"
               class="btn btn-warning action-btn edit-action-btn edit-btn"
               href="<?php echo e(route('company.index')); ?>/<?php echo e($employee['id']); ?>/edit">
                <i class="fa fa-edit"></i>
            </a>
            <a title="<?php echo e(__('messages.common.delete')); ?>"
               class="btn btn-danger action-btn delete-action-btn delete-btn"
               data-id="<?php echo e($employee['id']); ?>" href="#">
                <i class="fa fa-trash"></i>
            </a>
        </div>
        <div class="employee-isFeature">
            <?php if(!$employee['activeFeatured']): ?>
                <a class="btn btn-info action-btn w-100 dropdown-toggle text-white"
                   type="button" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false"><?php echo e(__('messages.front_settings.make_feature')); ?></a>
                <div class="dropdown-menu w-auto">
                    <a class="dropdown-item adminMakeFeatured"
                       data-id="<?php echo e($employee['id']); ?>"
                       href="#"><?php echo e(__('messages.front_settings.make_featured')); ?></a>
                </div>
            <?php else: ?>
                <div title="Expries On <?php echo e(\Carbon\Carbon::parse($employee['activeFeatured']['end_time'])->format('Y/m/d')); ?>"
                     data-toggle="tooltip" data-placement="top">
                    <a class="btn btn-success action-btn w-100 dropdown-toggle text-white"
                       type="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"><?php echo e(__('messages.front_settings.featured')); ?>

                        <i class="far fa-check-circle pl-1 pt-1"></i></a>
                    <div class="dropdown-menu w-auto">
                        <a class="dropdown-item  adminUnFeatured"
                           data-id="<?php echo e($employee['id']); ?>"
                           href="#"><?php echo e(__('messages.front_settings.remove_featured')); ?></a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/companies/companies_card.blade.php ENDPATH**/ ?>