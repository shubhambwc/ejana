@extends('candidate.profile.index')
@push('page-css')
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/inttel/css/intlTelInput.css') }}">
@endpush
@section('section')
    {{ Form::open(['route' => 'candidate-profile.update', 'files' => true,'id'=>'candidateProfileUpdate']) }}
    <div class="alert alert-danger d-none" id="validationErrors"></div>
    <div class="row">
        <div class="form-group col-sm-12">
            <div class="row">
                <div class="col-sm-6 col-xs-6 col-md-6 col-xl-3 col-6">
                    {{ Form::label('profile', __('messages.candidate.profile').':', ['class' => 'font-weight-bolder']) }}
                    <label class="image__file-upload text-white"> {{ __('messages.common.choose') }}
                        {{ Form::file('image',['id'=>'profile','class' => 'd-none']) }}
                    </label>
                </div>
                <div class="col-sm-6 col-xs-6 col-6 col-md-6 col-xl-6 pl-2 mt-1">
                    <img id='profilePreview' class="img-thumbnail thumbnail-preview"
                         src="{{ (!empty($user->media[0])) ? $user->media[0]->getFullUrl() : asset('assets/img/infyom-logo.png') }}">
                </div>
            </div>
        </div>
        <div class="form-group col-sm-6">
            {{ Form::label('first_name',__('messages.candidate.first_name').':', ['class' => 'font-weight-bolder']) }}<span class="text-danger">*</span>
            {{ Form::text('first_name', $user->first_name, ['class' => 'form-control','required']) }}
        </div>
        <div class="form-group col-sm-6">
            {{ Form::label('last_name',__('messages.candidate.last_name').':', ['class' => 'font-weight-bolder']) }}<span class="text-danger">*</span>
            {{ Form::text('last_name', $user->last_name, ['class' => 'form-control','required']) }}
        </div>
        <div class="form-group col-sm-6">
            {{ Form::label('email',__('messages.candidate.email').':', ['class' => 'font-weight-bolder']) }}<span class="text-danger">*</span>
            {{ Form::text('email', $user->email, ['class' => 'form-control','required']) }}
        </div>

        <div class="form-group col-sm-6 custom-candidate-datepicker">
            {{ Form::label('dob', __('messages.candidate.birth_date').':', ['class' => 'font-weight-bolder']) }}
            {{ Form::text('dob', $user->dob, ['class' => 'form-control','id' => 'birthDate','autocomplete' => 'off']) }}
        </div>
        <div class="form-group col-sm-6">
            {{ Form::label('gender', __('messages.candidate.gender').':', ['class' => 'font-weight-bolder']) }}<span class="text-danger">*</span>
            <div class="form-group mb-1">
                <div class="custom-control custom-radio">
                    <input type="radio" id="male" name="gender" class="custom-control-input" value="0"
                            {{ isset($user->gender) ? ($user->gender == 0 ? 'checked' : '') : '' }} required>
                    <label class="custom-control-label" for="male">{{ __('messages.common.male') }}</label>
                </div>
            </div>
            <div class="form-group mb-1">
                <div class="custom-control custom-radio">
                    <input type="radio" id="female" name="gender" class="custom-control-input" value="1"
                            {{ isset($user->gender) ? ($user->gender == 1 ? 'checked' : '') : '' }}>
                    <label class="custom-control-label" for="female">{{ __('messages.common.female') }}</label>
                </div>
            </div>
        </div>
       
        <div class="form-group col-sm-6">
            {{ Form::label('language_id', __('messages.candidate.candidate_language').':', ['class' => 'font-weight-bolder']) }}
            <span
                    class="text-danger">*</span>
            {{Form::select('candidateLanguage[]',$data['language'], (count($candidateLanguage) > 0) ? $candidateLanguage : null, ['class' => 'form-control','id'=>'languageId','multiple'=>true])}}
        </div>
        
          
     
       
        <div class="form-group col-sm-6">
            {{ Form::label('phone', __('messages.candidate.phone').':', ['class' => 'font-weight-bolder']) }}</br>
            {{ Form::tel('phone', isset($user->phone) ? $user->phone : null, ['class' => 'form-control', 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")','id'=>'phoneNumber']) }}
            {{ Form::hidden('region_code',null,['id'=>'prefix_code']) }}
            <br>
            <span id="valid-msg" class="hide">✓ &nbsp; Valid</span>
            <span id="error-msg" class="hide"></span>
        </div>
 


         <div class="form-group col-sm-6">
        {{ Form::label('have_drive_license',  __('messages.candidate.drive_license').':', ['class' => 'font-weight-bolder'])}}<span class="text-danger">*</span><br>
        {{ Form::radio('have_drive_license', '0',isset($user->candidate->have_drive_license) && $user->candidate->have_drive_license  ==0 ?true :false) ,['class' => 'form-control check-box','required']}} {{ __('Yes') }}
        &nbsp;&nbsp;&nbsp;
        {{ Form::radio('have_drive_license', '1',isset($user->candidate->have_drive_license) && $user->candidate->have_drive_license ==1 ?true :false),['class' => 'form-control check-box','required'] }} {{ __('No') }}

       </div>

         <div class="form-group  col-sm-6">
        {{ Form::label('disposal_car', __('messages.candidate.disposal_car').':', ['class' => 'font-weight-bolder']) }}<span class="text-danger">*</span><br>
        {{ Form::radio('disposal_car', '0',isset($user->candidate->disposal_car) && $user->candidate->disposal_car  ==0 ?true :false) ,['class' => 'form-control check-box']}} {{ __('Yes') }}
        &nbsp;&nbsp;&nbsp;
        {{ Form::radio('disposal_car', '1',isset($user->candidate->disposal_car ) && $user->candidate->disposal_car ==1 ?true :false) ,['class' => 'form-control check-box']}} {{ __('No') }}
   
        </div>


         <div class="form-group col-xl-6 col-md-6 col-sm-6">
              {{ Form::label('afraid_of', __('messages.candidate.afraid_of').':', ['class' => 'font-weight-bolder']) }}<span class="text-danger">*</span>
              {{ Form::select('afraid_of', 
              ['no' =>'No' , 'dogs' =>'Dogs' ,'cats'=>'Cats','different'=>'Different']

              , isset($user->candidate->afraid_of)?$user->candidate->afraid_of :null, ['id'=>'afraid_of','class' => 'form-control select-box','placeholder' => 'Are you allergic or afraid of certain animal?']) }}
         </div>

        <div class="form-group col-xl-6 col-md-6 col-sm-6">
        {{ Form::label('zip_code', __('Zip').':') }}<span class="text-danger">*</span>
        {{ Form::text('zip_code', isset($user->candidate->zip_code)?$user->candidate->zip_code :null, ['class' => 'form-control','required']) }}
       </div>
        <div class="form-group col-sm-6">
            {{ Form::label('address', __('messages.candidate.address').':', ['class' => 'font-weight-bolder']) }}
            {{ Form::textarea('address', isset($user->candidate->address) ? $user->candidate->address : null, ['class' => 'form-control address-height','rows'=>'5']) }}
        </div>


          <div class="form-group  col-sm-6">
        {{ Form::label('motivation_text', __('messages.candidate.motivation_text').':', ['class' => 'font-weight-bolder'])  }}<span class="text-danger">*</span>
        {{ Form::textarea('motivation_text', isset($user->candidate->motivation_text) ?$user->candidate->motivation_text :null, ['class' => 'form-control address-height' , 'rows' => '5']) }}  
       </div>

        <div class="form-group col-sm-6">
            {{ Form::label('other_note', __('messages.candidate.other_note').':', ['class' => 'font-weight-bolder']) }}
            {{ Form::textarea('other_note', isset($user->candidate->other_note) ? $user->candidate->other_note : null, ['class' => 'form-control address-height','rows'=>'5']) }}
        </div>

             {{ Form::hidden('marital_status_id', '1', ['class' => 'form-control select-box','id' => 'maritalStatusId','placeholder'=>'Select marital status']) }}
         
               {{Form::hidden('candidateSkills','1', ['class' => 'form-control  ','id'=>'skillId'])}}
               
                {{ Form::hidden('facebook_url',$user->facebook_url, ['class' => 'form-control','id'=>'facebookUrl','placeholder'=>'https://www.facebook.com']) }}
            
       
                {{ Form::hidden('twitter_url', $user->twitter_url , ['class' => 'form-control','id'=>'twitterUrl','placeholder'=>'https://www.twitter.com']) }}
            
              
                {{ Form::hidden('linkedin_url', $user->linkedin_url, ['class' => 'form-control','id'=>'linkedInUrl','placeholder'=>'https://www.linkedin.com']) }}
           
               
                {{ Form::hidden('google_plus_url', $user->google_plus_url, ['class' => 'form-control','id'=>'googlePlusUrl','placeholder'=>'https://www.plus.google.com']) }}
        
               
                {{ Form::hidden('pinterest_url', $user->pinterest_url, ['class' => 'form-control','id'=>'pinterestUrl','placeholder'=>'https://www.pinterest.com']) }}
        
        
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
