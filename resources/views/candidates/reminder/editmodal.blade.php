
<?php foreach($reminders as $moment){ ?>
<div class="modal fade" tabindex="-1" role="dialog" id="{{$moment->id}}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit {{__('web.helpers.contact_moments')}} </h5>
                <button onclick="closemodal_remind(this.id)" data-id="{{ $moment['id'] }}" id="{{ $moment['id'] }}" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
           {{ Form::open(['route' => 'candidates.editreminder', 'files' => 'true', 'id' => 'editremind']) }}
            <div class="modal-body">
                <div class="alert alert-danger d-none" id="editValidationErrorsBox"></div>
                {!! Form::hidden('planId',null,['id'=>'planId']) !!}
                <div class="row">
                   
                    <input type="hidden" name="id" value="<?php echo  $moment['id'];?>">
                  
                    <div class="form-group col-sm-12">
                        {{ Form::label('description',__('web.helpers.explanation').':') }}
                        {{ Form::textarea('description', $moment['reminder'], ['class' => 'form-control','id' => 'description', 'name' => 'reminder', 'rows' => '5']) }}
                    </div>
                     <div class="form-group col-sm-12">
                    {{ Form::label('type', __('web.es.type').':') }}
                    
                      {{ Form::select('type',
                      ['email' =>'E-mail' , 'reminder' =>'Reminder' ,'interview'=>'Interview','telephone'=>'Telephone Conversation','whatsapp'=>'Whatsapp']
                      ,$moment['type'], ['id'=>'helpers_exprience','class' => 'form-control select-box required']) }}
                </div>

                    <div class="form-group col-sm-6">
                    {{ Form::label('date', __('web.helpers.date').':') }}<a href="#" class="tooltip_icon" data-toggle="tooltip" title="">?</a><span class="text-danger">*</span>
                   
                    <input type="text" name="date" id="editdatepickers" class="form-control editdatepicker" value="{{$moment->date}}">
                </div>
                <div class="form-group col-sm-6">
                    {{ Form::label('time', __('web.helpers.time').':') }}<a href="#" class="tooltip_icon" data-toggle="tooltip" title="">?</a><span class="text-danger">*</span>
                    {{ Form::text('time', $moment['time'], ['class' => 'form-control','id' => 'edittimepicker', 'name' => 'time','autocomplete' => 'off']) }}
                </div>
                 <div class="form-group col-sm-8">
                   
                    {{ Form::label('image1', __("web.helpers.upload_file")) }}
                <div class="custom-file">
                    <input type="file" name="upload_file" class="custom-file-input" id="">
                    <label class="custom-file-label rounded" name="image1"><i class="mdi mdi-cloud-upload mr-1"></i>{{__('web.helpers.upload_file')}}</label>
                </div>
                </div>
                 @if($moment->file)  
                <div class="form-group col-sm-4">
                    <div class="custom-file-preview" id="custom-file-image4" style="display:{{ isset($moment['file'])?'block':'none'}}">
                        <img src="{{ asset('public/reminder') }}/{{ $moment->file }}" alt="profile Pic" height="80" width="80">
     
                </div>

                </div>@endif
                <div class="text-center">
                    {{ Form::button(__('messages.common.save'), ['type'=>'submit','class' => 'btn btn-primary','id'=>'btnEditSave','data-loading-text'=>"<span class='spinner-border spinner-border-sm'></span> Processing..."]) }}
                    <button onclick="closemodal_remind(this.id)" type="button" data-id="{{ $moment['id'] }}" id="{{ $moment['id'] }}" class="btn btn-light ml-1"
                            data-dismiss="modal">{{ __('messages.common.cancel') }}
                    </button>
                </div>
            </div></div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
 <?php }?>