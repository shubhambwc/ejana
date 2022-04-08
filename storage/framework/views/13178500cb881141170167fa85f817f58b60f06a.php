<div class="modal fade" tabindex="-1" role="dialog" id="showModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo e(__('messages.job_category.show_job_category')); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo e(Form::open(['id' => 'showForm'])); ?>

            <div class="modal-body">
                <div class="row details-page">
                    <div class="form-group col-sm-12">
                        <?php echo e(Form::label('name',__('messages.job_category.name').':')); ?><br>
                        <span id="showName"></span>
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="showIsFeatured"><?php echo e(__('is Active').':'); ?></label><br>
                        <span id="showIsFeatured"></span>
                    </div>
                    <div class="form-group col-sm-12 mb-0 pt-1">
                        <?php echo e(Form::label('description',__('messages.job_category.description').':')); ?><br>
                        <div class="reported-note">
                            <span id="showDescription"></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo e(Form::close()); ?>

        </div>
    </div>
</div>
<?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/job_categories/show_modal.blade.php ENDPATH**/ ?>