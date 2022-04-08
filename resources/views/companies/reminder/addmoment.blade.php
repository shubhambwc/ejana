@extends('layouts.app')
@section('title')
    {{ __('New Help requester') }}
@endsection
@push('css')
    <link href="{{ asset('assets/css/summernote.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/inttel/css/intlTelInput.css') }}">
    <link href="{{ asset('assets/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
     <style type="text/css">
        img#image1_preview {
            height: 100px;
            width: 100px;
            border-radius: 10px;
            margin: 10px;
        }
    </style>
@endpush
@push('scripts')
<script>
  $( function() {

   $('#image1').change(function(){
    var input = this;
    var url = $(this).val();
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg"))
     {
        var reader = new FileReader();

        reader.onload = function (e) {
           $('#image1_preview').attr('src', e.target.result);
        }
       reader.readAsDataURL(input.files[0]);
    }else if (input.files && input.files[0]&& (ext == "pdf")){
    $('#image1_preview').attr('src', '/assets/img/pdf_file_icon.png');
    }else
    {
      $('#image1_preview').attr('src', '/assets/img/doc_file_icon.png');
    }
    $('#custom-file-image1').show();
  });
    });
             </script>
             @endpush
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('Add Contact Moment') }}</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('company.index') }}"
                   class="btn btn-primary form-btn float-right">{{ __('messages.common.back') }}</a>
            </div>
        </div>
        <div class="section-body">
            @include('layouts.errors')
            <div class="card">
                <div class="card-body">
                    {{ Form::open(['route' => 'candidates.newreminder', 'files' => 'true', 'id' => 'addremind']) }}
            <div class="modal-body">
                <div class="alert alert-danger d-none" id="validationErrorsBoxs"></div>
                <div class="row">
                    <input type="hidden" name="helper_id" value="<?php echo  $id;?>">
                     <input type="hidden" name="company_data" value="company_data">
                     <input type="hidden" name="userid" value="<?php echo $userid; ?>">
                  
                    <div class="form-group col-sm-12">
                        {{ Form::label('description',__('web.helpers.explanation').':') }}
                        {{ Form::textarea('description', null, ['class' => 'form-control','id' => 'description', 'name' => 'reminder', 'rows' => '5']) }}
                    </div>
                     <div class="form-group col-sm-12">
                    {{ Form::label('type', __('web.helpers.type').':') }}
                    
                      {{ Form::select('type',
                      ['email' =>'E-mail' , 'reminder' =>'Reminder' ,'interview'=>'Interview','telephone'=>'Telephone Conversation','whatsapp'=>'Whatsapp']
                      ,null, ['id'=>'helpers_exprience','class' => 'form-control select-box required']) }}
                </div>

                    <div class="form-group col-sm-6">
                    {{ Form::label('date', __('web.helpers.date').':') }}<a href="#" class="tooltip_icon" data-toggle="tooltip" title="">?</a><span class="text-danger">*</span>
                    {{ Form::text('date', null, ['class' => 'form-control datepicker','id' => 'datepicker', "data-provide" => "datepicker" ,'name' => 'date','autocomplete' => 'off']) }}
                </div>
                <div class="form-group col-sm-6">
                    {{ Form::label('time', __('web.helpers.time').':') }}<a href="#" class="tooltip_icon" data-toggle="tooltip" title="">?</a><span class="text-danger">*</span>
                    {{ Form::text('time', null, ['class' => 'form-control','id' => 'timepicker', 'name' => 'time','autocomplete' => 'off']) }}
                </div>


                <div class="form-group col-sm-8">
                {{ Form::label('image1', __("web.helpers.upload_file")) }}
                <div class="custom-file">
                    <input type="file" name="upload_file" class="custom-file-input" id="image1">
                    <label class="custom-file-label rounded" name="image1"><i class="mdi mdi-cloud-upload mr-1"></i>{{__('web.helpers.upload_file')}}</label>
                </div>
                    </div>
                    <div class="form-group col-sm-4">
               
                   <div class="custom-file-preview" id="custom-file-image1" style="display:none">
                     <img id="image1_preview" src="" />
                </div> 
                </div>
                <div class="text-right">
                    <button type="submit" id="" class="btn btn-primary"
                            >{{ __('messages.common.save') }}</button>
                   
                    <!-- <button type="button" id="btnCancel" class="btn btn-light ml-1"
                            data-dismiss="modal">{{ __('messages.common.cancel') }}</button> -->
                </div>
            </div>
           {{ Form::close() }}
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
<script>
   


  $( function() {
 $( ".datepicker" ).datepicker({
            dateFormat: 'dd-mm-yy',
            });
            
             $('#timepicker').datetimepicker({
               icons:
            {
                up: 'fa fa-angle-up',
                down: 'fa fa-angle-down'
            },
                 format: 'LT'
             });
             $('#edittimepicker').datetimepicker({
               icons:
            {
                up: 'fa fa-angle-up',
                down: 'fa fa-angle-down'
            },
                 format: 'LT'
             });
              });
             </script>
    <script>
        let companyStateUrl = "{{ route('states-list') }}";
        let companyCityUrl = "{{ route('cities-list') }}";
        let utilsScript = "{{asset('assets/js/inttel/js/utils.min.js')}}";
        let isEdit = false;
        let phoneNo = "{{ old('region_code').old('phone') }}";
    </script>
     <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="{{ asset('assets/js/summernote.min.js') }}"></script>
    <script src="{{mix('assets/js/companies/create-edit.js')}}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/inttel/js/intlTelInput.min.js') }}"></script>
    <script src="{{ asset('assets/js/inttel/js/utils.min.js') }}"></script>
    <script src="{{ mix('assets/js/custom/phone-number-country-code.js') }}"></script>

@endpush
