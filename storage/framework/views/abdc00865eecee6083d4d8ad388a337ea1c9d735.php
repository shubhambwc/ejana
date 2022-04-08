<div id="editProfileModal" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content left-margin">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo e(__('messages.user.edit_profile')); ?></h5>
                <button type="button" aria-label="Close" class="close" data-dismiss="modal">×</button>
            </div>
            <?php echo e(Form::open(['id'=>'editProfileForm','files'=>true])); ?>

            <div class="modal-body">
                <?php echo e(Form::hidden('user_id',null,['id'=>'editUserId'])); ?>

                <?php echo e(csrf_field()); ?>

                <div class="row">
                    <div class="form-group col-sm-6">
                        <?php echo e(Form::label('first_name', __('messages.candidate.first_name').':')); ?><span class="text-danger">*</span>
                        <?php echo e(Form::text('first_name', null, ['id'=>'firstName','class' => 'form-control','required'])); ?>

                    </div>
                    <div class="form-group col-sm-6">
                        <?php echo e(Form::label('last_name', __('messages.candidate.last_name').':')); ?>

                        <?php echo e(Form::text('last_name', null, ['id'=>'lastName','class' => 'form-control'])); ?>

                    </div>
                    <div class="form-group col-sm-6">
                        <?php echo e(Form::label('email', __('messages.candidate.email').':')); ?><span class="text-danger">*</span>
                        <?php echo e(Form::email('email', null, ['id'=>'userEmail','class' => 'form-control','required'])); ?>

                    </div>
                    <div class="form-group col-sm-6">
                        <?php echo e(Form::label('phone', __('messages.candidate.phone').':')); ?>

                        <?php echo e(Form::text('phone', null, ['id'=>'phone','class' => 'form-control', 'minlength' => '10', 'maxlength' => '10', 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")'])); ?>

                    </div>
                </div>
                <div class="row">
                    <div class="px-3">
                        <span id="profilePictureValidationErrorsBox" class="text-danger d-none"></span>
                        <div class="form-group">
                            <?php echo e(Form::label('profile_picture', __('messages.candidate.profile').':')); ?>

                            <label class="image__file-upload text-white"> <?php echo e(__('messages.common.choose')); ?>

                                <?php echo e(Form::file('image',['id'=>'profilePicture','class' => 'd-none'])); ?>

                            </label>
                        </div>
                    </div>
                    <div class="pl-3 w-auto mt-1">
                        <img id='profilePicturePreview' class="img-thumbnail thumbnail-preview"
                             src="<?php echo e(asset('assets/img/infyom-logo.png')); ?>">
                    </div>
                </div>
                <div class="text-right">
                    <?php echo e(Form::button(__('messages.common.save'), ['type'=>'submit','class' => 'btn btn-primary','id'=>'btnPrEditSave','data-loading-text'=>"<span class='spinner-border spinner-border-sm'></span> Processing..."])); ?>

                    <button type="button" class="btn btn-light left-margin"
                            data-dismiss="modal"><?php echo e(__('messages.common.cancel')); ?>

                    </button>
                </div>
            </div>
            <?php echo e(Form::close()); ?>

        </div>
    </div>
</div>

<div id="changeLanguageModal" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content left-margin">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo e(__('messages.user_language.change_language')); ?></h5>
                <button type="button" aria-label="Close" class="close" data-dismiss="modal">×</button>
            </div>
            <?php echo e(Form::open(['id'=>'changeLanguageForm'])); ?>

            <div class="modal-body">
                <div class="alert alert-danger d-none" id="editProfileValidationErrorsBox"></div>
                <?php echo e(csrf_field()); ?>

                <div class="row">
                    <div class="form-group col-12">
                        <?php echo e(Form::label('language',__('messages.user_language.language').':')); ?><span
                                class="required">*</span>
                        <?php echo e(Form::select('language', getUserLanguages(), getLoggedInUser()->language, ['id'=>'language','class' => 'form-control','required'])); ?>

                    </div>
                </div>
                <div class="text-right">
                    <?php echo e(Form::button(__('messages.common.save'), ['type'=>'submit','class' => 'btn btn-primary','id'=>'btnLanguageChange','data-loading-text'=>"<span class='spinner-border spinner-border-sm'></span> Processing..."])); ?>

                    <button type="button" class="btn btn-light left-margin" data-dismiss="modal"
                            onclick="document.getElementById('language').value = '<?php echo e(getLoggedInUser()->language); ?>'"><?php echo e(__('messages.common.cancel')); ?>

                    </button>
                </div>
            </div>
            <?php echo e(Form::close()); ?>

        </div>
    </div>
</div>
<?php $__env->startPush('scripts'); ?>
    <script>
        let language = "<?php echo e(getLoggedInUser()->language); ?>";
    </script>
<?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/user_profile/edit_profile_modal.blade.php ENDPATH**/ ?>