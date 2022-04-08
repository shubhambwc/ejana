<div class="modal fade" tabindex="-1" role="dialog" id="editModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo e(__('messages.plan.edit_subscription_plan')); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo Form::open(['id' => 'editForm']); ?>

            <div class="modal-body">
                <div class="alert alert-danger d-none" id="editValidationErrorsBox"></div>
                <?php echo Form::hidden('planId',null,['id'=>'planId']); ?>

                <div class="row">
                    <div class="form-group col-sm-12">
                        <?php echo Form::label('name', __('messages.inquiry.name').':'); ?><span class="text-danger">*</span>
                        <?php echo Form::text('name', null, ['id'=>'editName','class' => 'form-control','required']); ?>

                    </div>
                    <div class="form-group col-sm-12">
                        <?php echo Form::label('amount', __('messages.plan.amount').':'); ?>

                        <?php echo Form::text('amount', null, ['id'=>'editAmount','class' => 'form-control amount', 'min' => '1', 'max' => '99999']); ?>

                        
                    </div>
                </div>
                <div class="text-right">
                    <?php echo e(Form::button(__('messages.common.save'), ['type'=>'submit','class' => 'btn btn-primary','id'=>'btnEditSave','data-loading-text'=>"<span class='spinner-border spinner-border-sm'></span> Processing..."])); ?>

                    <button type="button" id="btnEditCancel" class="btn btn-light ml-1"
                            data-dismiss="modal"><?php echo e(__('messages.common.cancel')); ?>

                    </button>
                </div>
            </div>
            <?php echo Form::close(); ?>

        </div>
    </div>
</div>
<?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/plans/edit_modal.blade.php ENDPATH**/ ?>