<div class="row">
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('first_name', __('First Name').':') }}<span class="text-danger">*</span>
        {{ Form::text('first_name', null, ['class' => 'form-control','required']) }}
    </div>
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('last_name', __('Last Name').':') }}<span class="text-danger">*</span>
        {{ Form::text('last_name', null, ['class' => 'form-control','required']) }}
    </div>
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('jobcategory_id', __('Servcie').':') }}<span class="text-danger">*</span>
        {{ Form::select('jobcategory_id', $data['industries'],null, ['class' => 'form-control','placeholder' => 'Select Service','required']) }}
    </div>
   
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('email', __('messages.company.email').':') }}<span class="text-danger">*</span>
        {{ Form::email('email', null, ['class' => 'form-control', 'required']) }}
    </div>
   
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('phone', __('messages.user.phone').':') }}<span class="text-danger">*</span><br>
        {{ Form::tel('phone', isset($user)?$user->phone:null, ['class' => 'form-control','required', 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")','id'=>'phoneNumber']) }}
        {{ Form::hidden('region_code',null,['id'=>'prefix_code']) }}
        <br>
        
    </div>
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('language') }}<span class="text-danger"></span>
        {{ Form::select('lang_id', $data['language'],null, ['id'=>'languageId','class' => 'form-control','placeholder' => 'Select Langauge','required']) }}
    </div>
   <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('language Level') }}<span class="text-danger">*</span>
        {{ Form::select('level_id', $data['lang_level'],null, ['id'=>'lang_levelId','class' => 'form-control','placeholder' => 'Select Langauge Level','required']) }}
    </div>
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('country', __('messages.company.country').':') }}<span class="text-danger">*</span>
        {{ Form::select('country_id', $data['countries'], null, ['id'=>'countryId','class' => 'form-control','required','placeholder' => 'Select Country']) }}
    </div>
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('state', __('messages.company.state').':') }}<span class="text-danger">*</span>
        {{ Form::select('state_id', (isset($states) && $states!=null)?$states:[], null, ['id'=>'stateId','class' => 'form-control','required','placeholder' => 'Select State']) }}
    </div>
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('city', __('messages.company.city').':') }}<span class="text-danger">*</span>
        {{ Form::select('city_id', (isset($cities) && $cities!=null) ?$cities:[], null, ['id'=>'cityId','class' => 'form-control','required','placeholder' => 'Select City']) }}
    </div>
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('location', __('messages.company.location').':') }}<span class="text-danger">*</span>
        {{ Form::text('location', null, ['class' => 'form-control','required']) }}
    </div>
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('zip_code', __('Zip').':') }}<span class="text-danger">*</span>
        {{ Form::text('zip_code', null, ['class' => 'form-control','required']) }}
    </div>
    

    <div class="form-group col-sm-12">
            {{ Form::submit(__('web.helpers.save'), ['class' => 'btn btn-primary', 'id' => 'btnSave']) }}
        <a href="{{ route('company.index') }}" class="btn btn-secondary text-dark">{{__('web.helpers.cancel')}}</a>
    </div>

</div>



