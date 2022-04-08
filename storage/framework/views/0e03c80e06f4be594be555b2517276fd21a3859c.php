<div id="addModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"
                    id="SalaryPeriodHeader"><?php echo e(__('messages.plan.new_subscription_plan')); ?></h5>
                <button type="button" aria-label="Close" class="close" data-dismiss="modal">×</button>
            </div>
            <?php echo Form::open(['id'=>'addNewForm']); ?>

            <div class="modal-body">
                <div class="alert alert-danger d-none" id="validationErrorsBox"></div>
                <div class="row">
                    <div class="form-group col-sm-12">
                        <?php echo Form::label('name', __('messages.inquiry.name').':'); ?><span class="text-danger">*</span>
                        <?php echo Form::text('name', null, ['id'=>'name','class' => 'form-control','required']); ?>

                    </div>
                    <div class="form-group col-sm-12">
                        <?php echo Form::label('amount', __('messages.plan.amount').':'); ?><span class="text-danger">*</span>
                        <?php echo Form::text('amount', null, ['id'=>'amount','class' => 'form-control amount','required','min'=>'1', 'max' => '99999']); ?>

                    </div>
                </div>
                <div class="text-right">
                    <?php echo e(Form::button(__('messages.common.save'), ['type'=>'submit','class' => 'btn btn-primary','id'=>'btnSave','data-loading-text'=>"<span class='spinner-border spinner-border-sm'></span> Processing..."])); ?>

                    <button type="button" id="btnCancel" class="btn btn-light ml-1"
                            data-dismiss="modal"><?php echo e(__('messages.common.cancel')); ?></button>
                </div>
            </div>
            <?php echo Form::close(); ?>

        </div>
    </div>
</div>
<?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/plans/add_modal.blade.php ENDPATH**/ ?>