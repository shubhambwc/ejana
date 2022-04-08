<div class="modal fade" tabindex="-1" role="dialog" id="editModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('messages.plan.edit_subscription_plan') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::open(['id' => 'editForm']) !!}
            <div class="modal-body">
                <div class="alert alert-danger d-none" id="editValidationErrorsBox"></div>
                {!! Form::hidden('planId',null,['id'=>'planId']) !!}
                <div class="row">
                    <div class="form-group col-sm-12">
                        {!! Form::label('name', __('messages.inquiry.name').':') !!}<span class="text-danger">*</span>
                        {!! Form::text('name', null, ['id'=>'editName','class' => 'form-control','required']) !!}
                    </div>
                    <div class="form-group col-sm-12">
                        {!! Form::label('amount', __('messages.plan.amount').':') !!}
                        {!! Form::text('amount', null, ['id'=>'editAmount','class' => 'form-control amount', 'min' => '1', 'max' => '99999']) !!}
                        
                    </div>
                </div>
                <div class="text-right">
                    {{ Form::button(__('messages.common.save'), ['type'=>'submit','class' => 'btn btn-primary','id'=>'btnEditSave','data-loading-text'=>"<span class='spinner-border spinner-border-sm'></span> Processing..."]) }}
                    <button type="button" id="btnEditCancel" class="btn btn-light ml-1"
                            data-dismiss="modal">{{ __('messages.common.cancel') }}
                    </button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
