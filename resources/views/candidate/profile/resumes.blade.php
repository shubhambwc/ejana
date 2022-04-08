@extends('candidate.profile.index')
@push('page-css')
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/inttel/css/intlTelInput.css') }}">
@endpush
@section('section')
       <div class="section-header">
            <h1>{{ __('Documents') }}</h1>
           
        </div>

         <div class="form-group col-sm-12">
             <div class="row">
                <div class="col-sm-6">
                    {{ Form::label('general', __('messages.candidate.idendtity_card').':', ['class' => 'font-weight-bolder']) }}                
                </div>
                 <div class="col-sm-6">
                         <div class="product-cta">                                        
                                <a>  <i class="fas fa-file-download"></i></a>                                        
                        </div>                           
                </div>
             </div>
         </div>
          <div class="form-group col-sm-12">
             <div class="row">
                <div class="col-sm-6">
                    {{ Form::label('privacy', __('messages.candidate.idendtity_card').':', ['class' => 'font-weight-bolder']) }}                
                </div>
                 <div class="col-sm-6">
                         <div class="product-cta">                                        
                                <a>  <i class="fas fa-file-download"></i></a>                                        
                        </div>                           
                </div>
             </div>
         </div> 
         <div class="form-group col-sm-12">
             <div class="row">
                <div class="col-sm-6">
                    {{ Form::label('idendtity_card', __('messages.candidate.idendtity_card').':', ['class' => 'font-weight-bolder']) }}                
                </div>
                 <div class="col-sm-6">
                         <div class="product-cta">                                        
                                <a>  <i class="fas fa-file-download"></i></a>                                        
                        </div>                           
                </div>
             </div>
         </div>
          <div class="form-group col-sm-12">
             <div class="row">
                <div class="col-sm-6">
                    {{ Form::label('idendtity_card', __('messages.candidate.idendtity_card').':', ['class' => 'font-weight-bolder']) }}                
                </div>
                 <div class="col-sm-6">
                         <div class="product-cta">                                        
                                <a>  <i class="fas fa-file-download"></i></a>                                        
                        </div>                           
                </div>
             </div>
         </div> 
         <div class="form-group col-sm-12">
             <div class="row">
                <div class="col-sm-6">
                    {{ Form::label('idendtity_card', __('messages.candidate.idendtity_card').':', ['class' => 'font-weight-bolder']) }}                
                </div>
                 <div class="col-sm-6">
                         <div class="product-cta">                                        
                                <a>  <i class="fas fa-file-download"></i></a>                                        
                        </div>                           
                </div>
             </div>
         </div>


    <div class="section-header">
            <h1>{{ __('Upload Your Documents') }}</h1>
           
        </div>
    {{ Form::open(['route' => 'candidate-profile.update', 'files' => true,'id'=>'candidateProfileUpdate']) }}
    <div class="alert alert-danger d-none" id="validationErrors"></div>
    <div class="row">
        <div class="form-group col-sm-12">
            <div class="row">
                <div class="col-sm-6">
                    {{ Form::label('idendtity_card', __('messages.candidate.idendtity_card').':', ['class' => 'font-weight-bolder']) }}
                    <label class="image__file-upload text-white"> {{ __('messages.common.choose') }}
                        {{ Form::file('image',['id'=>'idendtity_card','class' => 'd-none']) }}
                    </label>
                </div>
                <div class="col-sm-6 col-xs-6 col-6 col-md-6 col-xl-6 pl-2 mt-1">
                    <img id='profilePreview' class="img-thumbnail thumbnail-preview"
                         src="{{ (!empty($user->media[0])) ? $user->media[0]->getFullUrl() : asset('assets/img/infyom-logo.png') }}">
                </div>
            </div>
        </div>

          <div class="form-group col-sm-12">
            <div class="row">
                <div class="col-sm-6">
                    {{ Form::label('diplomas', __('messages.candidate.diplomas').':', ['class' => 'font-weight-bolder']) }}
                    <label class="image__file-upload text-white"> {{ __('messages.common.choose') }}
                        {{ Form::file('image',['id'=>'diplomas','class' => 'd-none']) }}
                    </label>
                </div>
                <div class="col-sm-6">
                    <img id='profilePreview' class="img-thumbnail thumbnail-preview"
                         src="{{ (!empty($user->media[0])) ? $user->media[0]->getFullUrl() : asset('assets/img/infyom-logo.png') }}">
                </div>
            </div>
         </div>

           <div class="form-group col-sm-12">
            <div class="row">
                <div class="col-sm-6">
                    {{ Form::label('behavior_certificate', __('messages.candidate.behavior_certificate').':', ['class' => 'font-weight-bolder']) }}

                    <label class="image__file-upload text-white"> {{ __('messages.common.choose') }}
                        {{ Form::file('image',['id'=>'behavior_certificate','class' => 'd-none']) }}
                    </label>
                </div>
                <div class="col-sm-6">
                    <img id='profilePreview' class="img-thumbnail thumbnail-preview"
                         src="{{ (!empty($user->media[0])) ? $user->media[0]->getFullUrl() : asset('assets/img/infyom-logo.png') }}">
                </div>
            </div>
           </div>

            <div class="form-group col-sm-12">
            <div class="row">
                <div class="col-sm-6">
                    {{ Form::label('first_aid', __('messages.candidate.first_aid').':', ['class' => 'font-weight-bolder']) }}
                    <label class="image__file-upload text-white"> {{ __('messages.common.choose') }}
                        {{ Form::file('image',['id'=>'first_aid','class' => 'd-none']) }}
                    </label>
                </div>
                <div class="col-sm-6">
                    <img id='profilePreview' class="img-thumbnail thumbnail-preview"
                         src="{{ (!empty($user->media[0])) ? $user->media[0]->getFullUrl() : asset('assets/img/infyom-logo.png') }}">
                </div>
            </div>
           </div>

            <div class="form-group col-sm-12">
            <div class="row">
                <div class="col-sm-6">
                    {{ Form::label('other_doc', __('messages.candidate.other_doc').':', ['class' => 'font-weight-bolder']) }}
                    <label class="image__file-upload text-white"> {{ __('messages.common.choose') }}
                        {{ Form::file('image',['id'=>'other_doc','class' => 'd-none']) }}
                    </label>
                </div>
                <div class="col-sm-6">
                    <img id='profilePreview' class="img-thumbnail thumbnail-preview"
                         src="{{ (!empty($user->media[0])) ? $user->media[0]->getFullUrl() : asset('assets/img/infyom-logo.png') }}">
                </div>
            </div>
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
