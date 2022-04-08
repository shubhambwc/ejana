<div id="cancelSubscriptionModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo e(__('messages.plan.cancel_subscription')); ?></h5>
                <button type="button" aria-label="Close" class="close" data-dismiss="modal">×</button>
            </div>
            <?php echo Form::open(['id'=>'cancelSubscriptionForm']); ?>

            <div class="modal-body">
                <div class="alert alert-danger d-none" id="validationErrorsBox"></div>
                <div class="row">
                    <div class="form-group col-sm-12 mb-0">
                        <?php echo Form::label('cancellation_reason', __('messages.plan.cancel_reason').':'); ?><span
                                class="text-danger">*</span>
                        <?php echo Form::textarea('cancellation_reason', null, ['id'=>'reason','class' => 'form-control textarea-height','required']); ?>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <?php echo Form::button('Save', ['type'=>'submit','class' => 'btn btn-primary','id'=>'btnCancelSave']); ?>

                <button type="button" class="btn btn-light ml-1" data-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span><?php echo e(__('messages.common.cancel')); ?></span>
                </button>
            </div>
            <?php echo Form::close(); ?>

        </div>
    </div>
</div>
<?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/pricing/cancel_subscription_modal.blade.php ENDPATH**/ ?>