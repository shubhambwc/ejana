<div class="modal fade" tabindex="-1" role="dialog" id="editModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo e(__('messages.job_category.edit_job_category')); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo e(Form::open(['id' => 'editForm','files'=>true])); ?>

            <div class="modal-body">
                <div class="alert alert-danger d-none" id="editValidationErrorsBox"></div>
                <?php echo e(Form::hidden('jobCategoryId',null,['id'=>'jobCategoryId'])); ?>

                <div class="row">
                    <div class="form-group col-sm-12">
                        <?php echo e(Form::label('name',__('messages.job_category.name').':')); ?><span class="text-danger">*</span>
                        <?php echo e(Form::text('name', null, ['class' => 'form-control','required','id' => 'editName' ])); ?>

                    </div>
                    <div class="form-group col-sm-12">
                        <?php echo e(Form::label('description',__('messages.job_category.description').':')); ?>

                        <?php echo e(Form::textarea('description', null, ['class' => 'form-control','id' => 'editDescription', 'rows' => '5'])); ?>

                    </div>
                    
                    <div class="form-group col-sm-12">
                        <?php echo e(Form::label('benifits',__('messages.job_category.benifits').':')); ?>

                        <?php echo e(Form::textarea('benifits', null, ['class' => 'form-control','id' => 'editBenifits', 'rows' => '5'])); ?>

                    </div>
                    
                    
                    <div class="form-group col-sm-12">
                    <div class="row">
                    <div class="px-3">
                        <span id="serviceThumbnailValidationErrorsBox2" class="text-danger d-none"></span>
                        <div class="form-group">
                            <?php echo e(Form::label('service_pictures', __('Thumbnail').':')); ?>

                            <label class="image__file-upload text-white"> <?php echo e(__('messages.common.choose')); ?>

                                <?php echo e(Form::file('image',['id'=>'serviceThumbnail2','class' => 'd-none'])); ?>

                            </label>
                        </div>
                    </div>
                    <div class="pl-3 w-auto mt-1">
                        <img id='serviceThumbnailPreview2' class="img-thumbnail thumbnail-preview"
                             src="<?php echo e(asset('assets/img/infyom-logo.png')); ?>">
                    </div>
                    </div>
                </div>
                
                <div class="form-group col-sm-12">
                    <div class="row">
                    <div class="px-3">
                        <span id="serviceThumbnailValidationErrorsBox2" class="text-danger d-none"></span>
                        <div class="form-group">
                            <?php echo e(Form::label('service_pictures', __('Banner').':')); ?>

                            <label class="image__file-upload text-white"> <?php echo e(__('messages.common.choose')); ?>

                                <?php echo e(Form::file('banner',['id'=>'serviceBanner2','class' => 'd-none'])); ?>

                            </label>
                        </div>
                    </div>
                    <div class="pl-3 w-auto mt-1">
                        <img id='serviceBannerPreview2' class="img-thumbnail thumbnail-preview"
                             src="<?php echo e(asset('assets/img/infyom-logo.png')); ?>">
                    </div>
                    </div>
                </div>
                
                
                    <div class="form-group col-sm-4 mb-0 pt-1">
                        <label><?php echo e(__('messages.job_category.is_featured').':'); ?></label>
                        <label class="custom-switch pl-0 col-12">
                            <input type="checkbox" name="is_featured" class="custom-switch-input"
                                   value="1" id="editIsFeatured">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </div>
                </div>
                <div class="text-right">
                    <?php echo e(Form::button(__('messages.common.save'), ['type'=>'submit','class' => 'btn btn-primary','id'=>'btnEditSave','data-loading-text'=>"<span class='spinner-border spinner-border-sm'></span> Processing..."])); ?>

                    <button type="button" id="btnEditCancel" class="btn btn-light ml-1"
                            data-dismiss="modal"><?php echo e(__('messages.common.cancel')); ?>

                    </button>
                </div>
            </div>
            <?php echo e(Form::close()); ?>

        </div>
    </div>
</div>
<?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/job_categories/edit_modal.blade.php ENDPATH**/ ?>