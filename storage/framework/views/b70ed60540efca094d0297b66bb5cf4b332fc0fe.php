<div class="col-xl-4 col-md-6 candidate-card">
    <div class="hover-effect-employee position-relative mb-5 border-hover-primary employee-border fix-candidate-height">
        <div class="employee-listing-details">
            <div class="d-flex employee-listing-description align-items-center justify-content-center flex-column">
                <div class="pl-0 mb-2 employee-avatar">
                    <img src="<?php echo e($candidate['candidate_url']); ?>"
                         class="img-responsive users-avatar-img employee-img mr-2">
                </div>
                <div class="mb-auto w-100">
                    <div class="d-flex justify-content-center align-items-center w-100">
                        <div>
                            <a href="<?php echo e(route('candidates.index')); ?>/<?php echo e($candidate['id']); ?>"
                               class="employee-listing-title text-decoration-none"><?php echo e($candidate['user']['first_name']); ?></a>
                        </div>
                    </div>
                    <div class="text-center">
                        <label class="text-decoration-none text-color-gray"><?php echo e($candidate['user']['email']); ?></label>
                        <label class="text-decoration-none text-color-gray">Registered on : <?php echo e(date('d-m-Y', strtotime($candidate['user']['created_at']))); ?></label>
                    </div>
                    <div class="text-center">
                        <span class="badge text-uppercase text-black available-badge"> <?php echo e($candidate['immediate_available'] == 0 ? 'not Immediate Available':'immediate Available'); ?></span>
                    </div>
                    <?php if(count($candidate['user']['candidateSkill']) != 0): ?>
                        <div class="text-center pt-1">
                            <label>
                                <?php $__currentLoopData = $candidate['user']['candidateSkill']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count => $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($count < 1): ?>
                                        <span class="font-size-13px post-badge badge-pill <?php echo e($count); ?> badge-primary"><?php echo e(Str::limit($skill->name, 20)); ?></span>
                                    <?php elseif($count == (count($candidate['user']['candidateSkill'])) - 1): ?>
                                        <a href="javascript:void(0)" 
                                           class="font-size-13px  badge-pill badge-pill <?php echo e($count); ?> badge-danger text-decoration-none">+<?php echo e((count($candidate['user']['candidateSkill'])) - 1); ?></a>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </label>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="pt-0 pb-3">
            <div class="text-center">
                <label class="custom-switch pl-0">
                    <input type="checkbox" name="Is Active"
                           class="custom-switch-input isActive"
                           data-id="<?php echo e($candidate['id']); ?>" <?php echo e($candidate['user']['is_active']==0?'':'checked'); ?>>
                    <span class="custom-switch-indicator"></span>
                    <span class="employee-label ml-1"><?php echo e(__('messages.common.status')); ?></span>
                </label>
            </div>
            <div class="text-center">
                <label class="custom-switch pl-0">
                    <input type="checkbox" name="Is Active" data-id="<?php echo e($candidate['id']); ?>"
                           class="custom-switch-input is-candidate-email-verified" <?php echo e($candidate['user']['email_verified_at']!=null?'checked':''); ?>>
                    <span class="custom-switch-indicator"></span>
                    <span class="employee-label ml-1"><?php echo e(__('messages.candidate.email_verified')); ?></span>
                </label>
            </div>
            <div class="text-center">
                <a title="<?php echo e(__('messages.common.resend_verification_mail')); ?>"
                   class="btn btn-primary action-btn send-email-verification" data-id="<?php echo e($candidate['id']); ?>"
                   href="#">
                    <i class="fa fa-sync"></i>
                </a>
                <span class="employee-label ml-1"><?php echo e(__('messages.common.resend_verification_mail')); ?></span>
            </div>
        </div>

        <div class="employee-action-btn">
            <a title="<?php echo e(__('messages.common.edit')); ?>"
               class="btn btn-warning action-btn edit-action-btn edit-btn"
               href="<?php echo e(route('candidates.index')); ?>/<?php echo e($candidate['id']); ?>/edit">
                <i class="fa fa-edit"></i>
            </a>
            <a title="<?php echo e(__('messages.common.delete')); ?>"
               class="btn btn-danger action-btn delete-action-btn delete-btn" data-id="<?php echo e($candidate['id']); ?>"
               href="#">
                <i class="fa fa-trash"></i>
            </a>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/candidates/candidate_card.blade.php ENDPATH**/ ?>