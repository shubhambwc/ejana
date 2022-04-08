@extends('candidate.profile.index')
@push('page-css')
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/inttel/css/intlTelInput.css') }}">
@endpush
@section('section')
 <div class="section-header">
            <h1>{{ __('Notifications') }}</h1>
           
        </div>
    {{ Form::open(['route' => 'candidate-profile.update', 'files' => true,'id'=>'candidateProfileUpdate']) }}
    <div class="alert alert-danger d-none" id="validationErrors"></div>
    <div class="row">  
        
     <div class="form-group col-sm-12">
                   
          <label class="custom-switch pl-0">
                            <input  type="checkbox"  class="custom-switch-input isServiceActive"
                                   data-id="{{$user->id}}"
                                   data-user-id="{{$user->id}}" 
                                   {{isset($user->service_id) && in_array($data->id, explode(',', $user->service_id)) ? 'checked': ''}}>
                                   <span class="custom-switch-indicator"></span>
                            <span class="">{{ __('On-off email notification') }}</span>
                     
          </label>
    </div>

    </div>
    <div class="row">  
        
     <div class="form-group col-sm-12">
                   
          <label class="custom-switch pl-0">
                            <input  type="checkbox"  class="custom-switch-input isServiceActive"
                                   data-id="{{$user->id}}"
                                   data-user-id="{{$user->id}}" 
                                   {{isset($user->service_id) && in_array($data->id, explode(',', $user->service_id)) ? 'checked': ''}}>
                                   <span class="custom-switch-indicator"></span>
                            <span class="">{{ __('Newsletter on-off') }}</span>
                     
          </label>
    </div>

    </div>

    <div class="row">  
        
     <div class="form-group col-sm-12">
                   
          <label class="custom-switch pl-0">
                            <input  type="checkbox"  class="custom-switch-input isServiceActive"
                                   data-id="{{$user->id}}"
                                   data-user-id="{{$user->id}}" 
                                   {{isset($user->service_id) && in_array($data->id, explode(',', $user->service_id)) ? 'checked': ''}}>
                                   <span class="custom-switch-indicator"></span>
                            <span class="">{{ __('Push notification on-off') }}</span>
                     
          </label>
    </div>

    </div>

    <div class="row">  
        
     <div class="form-group col-sm-12">
                   
          <label class="custom-switch pl-0">
                            <input  type="checkbox"  class="custom-switch-input isServiceActive"
                                   data-id="{{$user->id}}"
                                   data-user-id="{{$user->id}}" 
                                   {{isset($user->service_id) && in_array($data->id, explode(',', $user->service_id)) ? 'checked': ''}}>
                                   <span class="custom-switch-indicator"></span>
                            <span class="">{{ __('SMS notification on-off') }}</span>
                     
          </label>
    </div>

    </div>

    <div class="row mt-4">
        <!-- Submit Field -->
        <div class="form-group col-sm-12">
            {{ Form::submit(__('messages.common.save'), ['class' => 'btn btn-primary btnSave']) }}
            <a href="" class="btn btn-secondary hover-text-dark text-dark">Cancel</a>
        </div>
    </div>
    {{ Form::close() }}
@endsection
<script>
    let countryId = '{{$user->country_id}}';
    let stateId = '{{$user->state_id}}';
    let cityId = '{{$user->city_id}}';
    let isEdit = true;
    let phoneNo = "{{ old('region_code').old('phone') }}";
    let utilsScript = "{{asset('assets/js/inttel/js/utils.min.js')}}";
</script>
@push('page-scripts')
    <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{mix('assets/js/custom/input_price_format.js')}}"></script>
    <script src="{{mix('assets/js/candidate-profile/candidate-general.js')}}"></script>
    <script src="{{ asset('assets/js/inttel/js/intlTelInput.min.js') }}"></script>
    <script src="{{ asset('assets/js/inttel/js/utils.min.js') }}"></script>
    <script src="{{ mix('assets/js/custom/phone-number-country-code.js') }}"></script>
@endpush
