<div id="changePasswordModal" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content border-radius">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo e(__('messages.user.change_password')); ?></h5>
                <button type="button" aria-label="Close" class="close" data-dismiss="modal">×</button>
            </div>
            <?php echo e(Form::open(['id'=>'changePasswordForm'])); ?>

            <div class="modal-body">
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <div class="alert alert-danger hide" id="editPasswordValidationErrorsBox"></div>
                    <?php echo e(Form::hidden('user_id',null,['id'=>'pfUserId'])); ?>

                <?php echo e(Form::hidden('is_active',1)); ?>

                <?php echo e(csrf_field()); ?>

                <div class="row">
                    <div class="form-group col-sm-12">
                        <?php echo e(Form::label('current password', __('messages.company.current_password').':')); ?><span
                                class="required">*</span>
                        <div class="input-group">
                            <input class="form-control input-group__addon" id="pfCurrentPassword" type="password"
                                   name="password_current" required>
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <?php echo e(Form::label('password', __('messages.company.new_password').':')); ?><span class="required">*</span>
                        <div class="input-group">
                            <input class="form-control input-group__addon" id="pfNewPassword" type="password"
                                   name="password" required>
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <?php echo e(Form::label('password_confirmation', __('messages.company.confirm_password').':')); ?><span
                                class="required">*</span>
                        <div class="input-group">
                            <input class="form-control input-group__addon" id="pfNewConfirmPassword" type="password"
                                   name="password_confirmation" required>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <?php echo e(Form::button(__('messages.common.save'), ['type'=>'submit','class' => 'btn btn-primary','id'=>'btnPrPasswordEditSave','data-loading-text'=>"<span class='spinner-border spinner-border-sm'></span> Processing..."])); ?>

                    <button type="button" class="btn btn-light border-radius"
                            data-dismiss="modal"><?php echo e(__('messages.common.cancel')); ?>

                    </button>
                </div>
            </div>
            <?php echo e(Form::close()); ?>

        </div>
    </div>
</div>
<?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/employer_profile/change_password_modal.blade.php ENDPATH**/ ?>