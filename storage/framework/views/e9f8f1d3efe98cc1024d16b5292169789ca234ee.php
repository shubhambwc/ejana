<div id="editProfileModal" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content left-margin">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo e(__('messages.user.edit_profile')); ?></h5>
                <button type="button" aria-label="Close" class="close" data-dismiss="modal">×</button>
            </div>
            <?php echo e(Form::open(['id'=>'editProfileForm','files'=>true])); ?>

            <div class="modal-body">
                <div class="alert alert-danger d-none" id="validationErrorsBox"></div>
                <?php echo e(Form::hidden('user_id',null,['id'=>'editUserId'])); ?>

                <?php echo e(Form::hidden('company_id',null,['id'=>'companyId'])); ?>

                <?php echo e(csrf_field()); ?>

                <div class="row">
                    <div class="form-group col-sm-12">
                        <?php echo e(Form::label('first_name', __('messages.company.employer_name').':')); ?><span
                                class="required">*</span>
                        <?php echo e(Form::text('first_name', null, ['id'=>'firstName','class' => 'form-control','required'])); ?>

                    </div>
                    <div class="form-group col-sm-12">
                        <?php echo e(Form::label('email', __('messages.company.email').':')); ?><span class="required">*</span>
                        <?php echo e(Form::email('email', null, ['id'=>'editEmail','class' => 'form-control','disabled' => true,])); ?>

                    </div>
                </div>
                <div class="row">
                    <div class="col-4 col-sm-4 col-xl-3">
                        <div class="form-group">
                            <?php echo e(Form::label('company_logo', __('messages.company.company_logo').':')); ?>

                            <label class="image__file-upload"> <?php echo e(__('messages.setting.choose')); ?>

                                <?php echo e(Form::file('image',['id'=>'employerImage','class' => 'd-none'])); ?>

                            </label>
                        </div>
                    </div>
                    <div class="col-3">
                        <img id='previewImage' class="img-thumbnail thumbnail-preview"
                             src="">
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

                    <button type="button" class="btn btn-light left-margin"
                            data-dismiss="modal"><?php echo e(__('messages.common.cancel')); ?>

                    </button>
                </div>
            </div>
            <?php echo e(Form::close()); ?>

        </div>
    </div>
</div>
<?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/employer_profile/edit_profile_modal.blade.php ENDPATH**/ ?>