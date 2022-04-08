@if (\Session::has('success'))
    <div class="alert alert-success">
        {!! \Session::get('success') !!}
        
    </div>
@endif 
<div class="row section_tab active" id="section_tab1">

    {{ Form::hidden('details', 'user details') }}

    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('first_name', __('web.helpers.first_name').':') }}<span class="text-danger">*</span>
        {{ Form::text('first_name', isset($user)?$user->first_name:null, ['class' => 'form-control','required']) }}
    </div>

    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('last_name', __('web.helpers.last_name').':') }}<span class="text-danger">*</span>
        {{ Form::text('last_name', isset($user)?$user->last_name:null, ['class' => 'form-control','required']) }}
    </div>

    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('email', __('web.helpers.email').':') }}<span class="text-danger">*</span>
        {{ Form::email('email', isset($user)?$user->email:null, ['class' => 'form-control', 'required']) }}
    </div>







   <!-- Submit Field -->
   <div class="form-group col-sm-12">
     <div style="float:left">
        <a href="{{ route('candidates.index') }}" class="btn btn-secondary text-dark">{{__('messages.common.cancel')}}</a>
    </div>
     <div style="float:right">
        {{ Form::submit(__('messages.common.save'), ['class' => 'btn btn-primary']) }}
    </div>
    </div>

</div>






<!-- Tab 2 Form -->

<div class="row section_tab" id="section_tab2">

     <?php foreach($jobCategories as $jobCategory){ ?>
     <div class="col-xl-4 col-md-6 candidate-card">
    <div class="hover-effect-employee position-relative mb-5 border-hover-primary employee-border">
        <div class="employee-listing-details">
            <div class="d-flex employee-listing-description align-items-center justify-content-center flex-column">
                <div class="w-100">
                    <div class="text-left employee-data text-limit">
                        <span class="text-decoration-none text-color-gray">
                            <a href="{{ route('candidates.index') }}/{{ $candidate->id }}/edit?service_id={{$jobCategory->id}}" class="show-btn">
                                {{ Str::limit($jobCategory->name,30) }}
                            </a>
                            </span>
                    </div>

                    <div style="float:left; width:100%;margin:5px 0px 10px 0px;">
                        <img  class="img-thumbnail thumbnail-preview" style="float:left;max-width:20%"
                             src="{{ $jobCategory->thumbnail }}">
                        <span class="text-decoration-none text-color-gray" style="float:right;width:75%">
                           {{ Str::limit($jobCategory->description,100) }}
                        </span>

                        <div style="float:right;width:100%;margin-top:10px">

                        <label style="float:left;width:100%;padding:5px;" class="custom-switch pl-0">
                            <input  type="checkbox"  class="custom-switch-input isServiceActive"
                                   data-id="{{$jobCategory->id}}"
                                   data-user-id="{{$user->id}}"
                                   {{isset($user->service_id) && in_array($jobCategory->id, explode(',', $user->service_id)) ? 'checked': ''}}>
                            <span class="custom-switch-indicator"></span>
                            <span class="employee-label ml-1">{{__('web.helpers.is_service_selected') }}</span>
                        </label>

                       <?php
                       $UsersServiceStatus =  App\Http\Controllers\CandidateController:: getUsersServiceStatus($jobCategory->id,$user->id,'service_status');
                       $UsersServiceRemarks =  App\Http\Controllers\CandidateController:: getUsersServiceStatus($jobCategory->id,$user->id,'service_remarks');
                       ?>




                        <div id="service_status_<?php echo  $jobCategory->id;?>" style="float:left;width:100%;display:{{isset($user->service_id) && in_array($jobCategory->id, explode(',', $user->service_id)) ? 'block': 'none'}}">
                        <label style="float:left;width:50%;padding:5px;" class="custom-switch pl-0">
                            <input  type="checkbox"  class="custom-switch-input service_status_btn isInTreatment"
                                   data-id="{{$jobCategory->id}}"
                                   data-user-id="{{$user->id}}"
                                   data-service-status="0"
                                   {{isset($UsersServiceStatus) && $UsersServiceStatus ==0 ? 'checked': ''}}>
                            <span class="custom-switch-indicator"></span>
                            <span class="employee-label ml-1">{{__('web.helpers.in_treatment') }}</span>
                        </label>

                        <label style="float:left;width:50%;padding:5px;" class="custom-switch pl-0">
                            <input  type="checkbox"  class="custom-switch-input service_status_btn isRejected"
                                   data-id="{{$jobCategory->id}}"
                                   data-user-id="{{$user->id}}"
                                   data-service-status="3"
                                   {{isset($UsersServiceStatus) && $UsersServiceStatus ==3 ? 'checked': ''}}>
                            <span class="custom-switch-indicator"></span>
                            <span class="employee-label ml-1">{{__('web.helpers.rejected') }}</span>
                        </label>

                        <label style="float:left;width:50%;padding:5px;" class="custom-switch pl-0">
                            <input  type="checkbox"  class="custom-switch-input service_status_btn isApproved"
                                   data-id="{{$jobCategory->id}}"
                                   data-user-id="{{$user->id}}"
                                   data-service-status="1"
                                  {{isset($UsersServiceStatus) && $UsersServiceStatus ==1 ? 'checked': ''}}>
                            <span class="custom-switch-indicator"></span>
                            <span class="employee-label ml-1">{{__('web.helpers.approved') }}</span>
                        </label>

                        <label style="float:left;width:50%;padding:5px;" class="custom-switch pl-0">
                            <input  type="checkbox"  class="custom-switch-input service_status_btn isOnHold"
                                   data-id="{{$jobCategory->id}}"
                                   data-user-id="{{$user->id}}"
                                   data-service-status="2"
                                   {{isset($UsersServiceStatus) && $UsersServiceStatus ==2 ? 'checked': ''}}>
                            <span class="custom-switch-indicator"></span>
                            <span class="employee-label ml-1">{{__('web.helpers.on_hold') }}</span>
                        </label>

                        <p style="float:left;width:100%;padding:0px 0px 5px 0px;margin:0px;"><b>{{__('web.helpers.remarks') }}</b></p>
                        <label style="float:left;width:100%;padding:5px;" class="custom-switch pl-0">
                           <textarea style="width:100%;min-height:50px;" class="form-control" name="service_remarks" id="service_remarks_<?php echo  $jobCategory->id;?>"><?php echo $UsersServiceRemarks;?></textarea>
                        </label>

                       </div>

                        </div>

                    </div>





                </div>
            </div>
        </div>

    </div>
</div>

     <?php }?>


<script>

$(document).ready(function () {

let candidateStatusUrl = "{{ route('candidates.index') }}";

$(document).on('change', '.isServiceActive', function (event) {
  var jobCategoryId = $(event.currentTarget).data('id');
  var userId = $(event.currentTarget).data('user-id');

  if ($(this).is(':checked')) {
            $('#service_status_'+jobCategoryId).show()
         }else{
             $('#service_status_'+jobCategoryId).hide()
             $('.service_status_btn').prop('checked', false);
         }

  $.ajax({
    url: candidateStatusUrl + '/' + jobCategoryId + '/' + userId + '/' + 'enable-disable-service',
    method: 'post',
    cache: false,
    success: function success(result) {
      if (result.success) {
        displaySuccessMessage(result.message);
      }
    },
    error: function error(result) {
    alert('responseJSON')
      displayErrorMessage(result.responseJSON.message);
    }
  });


});

$(document).on('change', '.service_status_btn', function (event) {
  var jobCategoryId = $(event.currentTarget).data('id');
  var userId = $(event.currentTarget).data('user-id');
  var serviceremarks=  $('#service_remarks_'+jobCategoryId).val();
  $('#service_status_'+jobCategoryId+' .service_status_btn').prop('checked', false);
  var serviceStatus =$(event.currentTarget).data('service-status');;

   $.ajax({
    url: candidateStatusUrl + '/' + jobCategoryId + '/' + userId + '/'+serviceStatus+'/' + 'change-service-status',
    method: 'post',
    data: {service_remarks: serviceremarks},
    cache: false,
    success: function success(result) {
      if (result.success) {
        displaySuccessMessage(result.message);
        $(event.currentTarget).prop('checked', true);

      }
    },
    error: function error(result) {
      displayErrorMessage(result.responseJSON.message);
    }
  });





});


});

</script>

</div>

<!-- Tab 3 -->
      <div class="row section_tab" id="section_tab3">
            <div class="card" style="width:100%"> 
                            <div class="card-body">
            <div class="section-header-breadcrumb" >
                            <a href="{{ URL('admin/moment/'.$candidate->id.'/add/'.$user->id )}}"
                               class="btn btn-primary form-btn float-right" style="margin:8px" >{{ __('messages.common.add') }} <i class="fas fa-plus"></i></a>
                              
                        </div>

            @include('candidates.reminder.table')
            </div>
            </div>
      </div>

<!-- Tab 4 -->
      <div class="row section_tab" id="section_tab4">
                <div class="card" style="width:100%"> 
                                <div class="card-body">
                @include('candidates.transaction.table')


                </div>
                </div>
      </div>
<!-- Tab 5 -->
      <div class="row section_tab" id="section_tab5">
              <div class="card" style="width:100%"> 
                              <div class="card-body">
              <div class="section-header-breadcrumb" >
              <h5>booking</h5>
                             <!--  <a href="#"
                                 class="btn btn-primary form-btn float-right" style="margin:8px" data-toggle="modal" data-target="#addremind">{{ __('messages.common.add') }} <i class="fas fa-plus"></i></a> -->
                                
                          </div>


              </div>
              </div>
      </div>