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
                 <div class="col-sm-6 col-xs-6 col-6 col-md-6 col-xl-6 pl-2 mt-1">
                    <img id='profilePreview' class="img-thumbnail thumbnail-preview"
                         src="{{ (!empty($user->media[0])) ? $user->media[0]->getFullUrl() : asset('assets/img/infyom-logo.png') }}">
                </div>
                <div class="col-sm-6 col-xs-6 col-md-6 col-xl-3 col-6">
                    {{ Form::label('profile', __('messages.candidate.profile').':', ['class' => 'font-weight-bolder']) }}
                    <label class="image__file-upload text-white"> {{ __('messages.common.choose') }}
                        {{ Form::file('image',['id'=>'profile','class' => 'd-none']) }}
                    </label>
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
         <div class="form-group col-sm-6">
            {{ Form::label('father_name',__('messages.candidate.father_name').':', ['class' => 'font-weight-bolder']) }}
            {{ Form::text('father_name', $user->candidate->father_name, ['class' => 'form-control']) }}
        </div>


        
         <div class="form-group col-sm-6 custom-candidate-datepicker">
            {{ Form::label('dob', __('messages.candidate.birth_date').':', ['class' => 'font-weight-bolder']) }}
            {{ Form::text('dob', $user->dob, ['class' => 'form-control','id' => 'birthDate','autocomplete' => 'off']) }}
        </div>

        
       
        
        <div class="form-group col-sm-6">
            {{ Form::label('language_id', __('messages.candidate.candidate_language').':', ['class' => 'font-weight-bolder']) }}
            <span
                    class="text-danger">*</span>
            {{Form::select('candidateLanguage[]',$data['language'], (count($candidateLanguage) > 0) ? $candidateLanguage : null, ['class' => 'form-control','id'=>'languageId','multiple'=>true,'required'])}}
        </div>

         <div class="form-group col-sm-6">
            {{ Form::label('career_level', __('messages.candidate.training_level').':', ['class' => 'font-weight-bolder']) }}
            {{ Form::select('career_level_id', $data['careerLevel'], isset($user->candidate->career_level_id) ? $user->candidate->career_level_id : null, ['class' => 'form-control','id' => 'careerLevelId','placeholder'=>'Select Training level']) }}
        </div>
        
        <div class="form-group col-sm-6">
            {{ Form::label('country', __('messages.company.country').':', ['class' => 'font-weight-bolder']) }}
            {{ Form::select('country_id', $data['countries'], !empty($user->country_id) ? $user->candidate->country_name : null, ['id'=>'countryId','class' => 'form-control','placeholder' => 'Select Country']) }}
        </div>
        <div class="form-group col-sm-6">
            {{ Form::label('state', __('messages.company.state').':', ['class' => 'font-weight-bolder']) }}
            {{ Form::select('state_id', (isset($states) && $states!=null?$states:[]), isset($user->state_id) ? $user->state_name : null, ['id'=>'stateId','class' => 'form-control','placeholder' => 'Select State']) }}
        </div>
        <div class="form-group col-sm-6">
            {{ Form::label('city', __('messages.company.city').':', ['class' => 'font-weight-bolder']) }}
            {{ Form::select('city_id', (isset($cities) && $cities!=null?$cities:[]), isset($user->city_id) ? $user->city_name : null, ['id'=>'cityId','class' => 'form-control','placeholder' => 'Select City']) }}
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
        {{ Form::radio('have_drive_license', '0',isset($data['have_drive_license']) && $data['have_drive_license'] ==0 ?true :false) ,['class' => 'form-control check-box','required']}} {{ __('Yes') }}
        &nbsp;&nbsp;&nbsp;
        {{ Form::radio('have_drive_license', '1',isset($data['have_drive_license']) && $data['have_drive_license'] ==1 ?true :false),['class' => 'form-control check-box','required'] }} {{ __('No') }}

       </div>

         <div class="form-group  col-sm-6">
        {{ Form::label('disposal_car', __('messages.candidate.disposal_car').':', ['class' => 'font-weight-bolder']) }}<span class="text-danger">*</span><br>
        {{ Form::radio('disposal_car', '0',isset($data['disposal_car']) && $data['disposal_car'] ==0 ?true :false) ,['class' => 'form-control check-box','required']}} {{ __('Yes') }}
        &nbsp;&nbsp;&nbsp;
        {{ Form::radio('disposal_car', '1',isset($data['disposal_car']) && $data['disposal_car'] ==1 ?true :false) ,['class' => 'form-control check-box','required']}} {{ __('No') }}
  
        </div>


         <div class="form-group col-xl-6 col-md-6 col-sm-6">
              {{ Form::label('afraid_of', __('messages.candidate.afraid_of').':', ['class' => 'font-weight-bolder']) }}<span class="text-danger">*</span>
              {{ Form::select('afraid_of', 
              ['no' =>'No' , 'dogs' =>'Dogs' ,'cats'=>'Cats','different'=>'Different']

              , isset($data['afraid_of'])?$data['afraid_of']:null, ['id'=>'afraid_of','class' => 'form-control select-box','required','placeholder' => 'Are you allergic or afraid of certain animal?']) }}
         </div>

        <div class="form-group col-xl-6 col-md-6 col-sm-6">
        {{ Form::label('zip_code', __('Zip').':') }}<span class="text-danger">*</span>
        {{ Form::text('zip_code', isset($data['zip_code'])?$data['zip_code']:null, ['class' => 'form-control','required']) }}
       </div>
        <div class="form-group col-sm-6">
            {{ Form::label('address', __('messages.candidate.address').':', ['class' => 'font-weight-bolder']) }}
            {{ Form::textarea('address', isset($user->candidate->address) ? $user->candidate->address : null, ['class' => 'form-control address-height','rows'=>'5']) }}
        </div>


          <div class="form-group  col-sm-6">
        {{ Form::label('motivation_text', __('messages.candidate.motivation_text').':', ['class' => 'font-weight-bolder'])  }}<span class="text-danger">*</span>
        {{ Form::textarea('motivation_text', isset($data['motivation_text'])?$data['motivation_text']:null, ['class' => 'form-control address-height' , 'rows' => '5']) }}
       </div>

        <div class="form-group col-sm-12">
            {{ Form::label('other_note', __('messages.candidate.other_note').':', ['class' => 'font-weight-bolder']) }}
            {{ Form::textarea('other_note', isset($user->candidate->other_note) ? $user->candidate->other_note : null, ['class' => 'form-control address-height','rows'=>'5']) }}
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
