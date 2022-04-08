<!-- Tab 2 Form --->
<div class="row section_tab active" id="section_tab1">
    {{ Form::hidden('user_id',$user->id) }}
    
    
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('dob', __('Date of Birth').':') }}<span class="text-danger">*</span>
        {{ Form::text('dob', isset($postMetaArray['dob'])?$postMetaArray['dob']:null, ['class' => 'form-control birthDate','required','id' => 'birthDate1','autocomplete' => 'off']) }}
    </div>
    
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('gender', __('messages.candidate.gender').':') }}<span class="text-danger">*</span><br>
        {{ Form::radio('gender', '0',isset($postMetaArray['gender'])?$postMetaArray['gender']:false) }} {{ __('messages.common.male') }}
        &nbsp;&nbsp;&nbsp;
        {{ Form::radio('gender', '1',isset($postMetaArray['gender'])?$postMetaArray['gender']:false) }} {{ __('messages.common.female') }}
    </div>
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('Mother Tongue') }}<span class="text-danger"></span>
        {{ Form::select('mother_lang_id', $data['language'],isset($postMetaArray['mother_lang_id'])?$postMetaArray['mother_lang_id']:null, ['class' => 'form-control','placeholder' => 'Select Langauge','required']) }}
    </div>
   <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('language Level') }}<span class="text-danger">*</span>
        {{ Form::select('level_id', $data['lang_level'],isset($postMetaArray['level_id'])?$postMetaArray['level_id']:null, ['id'=>'lang_levelId','class' => 'form-control','placeholder' => 'Select Langauge Level','required']) }}
    </div>
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('country', __('messages.company.country').':') }}<span class="text-danger">*</span>
        {{ Form::select('country_id', $data['countries'], !empty($company->user->country_id)?$company->user->country_id:null, ['id'=>'countryId','class' => 'form-control','required','placeholder' => 'Select Country']) }}
    </div>
    
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('state', __('messages.company.state').':') }}<span class="text-danger">*</span>
        {{ Form::select('state_id', (isset($states) && $states!=null)?$states:[], isset($company->user->state_id)?$company->user->state_id:null, ['id'=>'stateId','class' => 'form-control','required','placeholder' => 'Select State']) }}
    </div>
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('city', __('messages.company.city').':') }}<span class="text-danger">*</span>
        {{ Form::select('city_id', (isset($cities) && $cities!=null) ?$cities:[], isset($company->user->city_id)?$company->user->city_id:null, ['id'=>'cityId','class' => 'form-control','required','placeholder' => 'Select City']) }}
    </div>
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('location', __('messages.company.location').':') }}<span class="text-danger">*</span>
        {{ Form::text('location', isset($postMetaArray['location'])?$postMetaArray['location']:null, ['class' => 'form-control','required']) }}
    </div>
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('zip_code', __('Zip').':') }}<span class="text-danger">*</span>
        {{ Form::text('zip_code', isset($postMetaArray['zip_code'])?$postMetaArray['zip_code']:null, ['class' => 'form-control','required']) }}
    </div>
    

    <!-- Submit Field -->
   <div class="form-group col-sm-12">
     <div style="float:left">
        <a href="{{ route('company.index') }}" class="btn btn-secondary text-dark">{{__('messages.common.cancel')}}</a>
    </div>
     <div  style="float:right">
        <a  id="validateTab1" href="javascript:void(0)" class="btn btn-primary" style="float: right;">{{__('Next')}}</a>
    </div>
    </div>

</div>


<div class="row section_tab" id="section_tab2">
   
     
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('child[0][name]', __('Child Name').':') }}<span class="text-danger">*</span>
        {{ Form::text('child[0][name]', isset($postMetaArray['child'])?$postMetaArray['child'][0]['name']:null, ['class' => 'form-control','required']) }}
    </div>
    
    
   <div class="form-group  col-sm-12">
        {{ Form::label('child[0][gender]', __('messages.candidate.gender').':') }}<span class="text-danger">*</span><br>
        {{ Form::radio('child[0][gender]', '0',isset($postMetaArray['child'])?$postMetaArray['child'][0]['gender']:false) }} {{ __('messages.common.male') }}
        &nbsp;&nbsp;&nbsp;
        {{ Form::radio('child[0][gender]', '1',isset($postMetaArray['child'])?$postMetaArray['child'][0]['gender']:false) }} {{ __('messages.common.female') }}
    </div>
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('child[0][dob]', __('Date of Birth').':') }}<span class="text-danger">*</span>
        {{ Form::text('child[0][dob]', isset($postMetaArray['child'])?$postMetaArray['child'][0]['dob']:null, ['class' => 'form-control','required','id' => 'birthDate','autocomplete' => 'off']) }}
    </div>
    
    <div  id="additional_child">
   
   <?php 
   if(isset($postMetaArray['child']) ) { 
   for($i=1; $i<count($postMetaArray['child']);$i++){
   ?>
   <div class="additional_child_row" id="child_<?php echo $i;?>">
   <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('child[$i][name]', __('Child Name').':') }}<span class="text-danger">*</span>
        {{ Form::text('child[$i][name]', isset($postMetaArray['child'])?$postMetaArray['child'][$i]['name']:null, ['class' => 'form-control','required']) }}
    </div>
    
    
   <div class="form-group  col-sm-12">
        {{ Form::label('child[$i][gender]', __('messages.candidate.gender').':') }}<span class="text-danger">*</span><br>
        {{ Form::radio('child[$i][gender]', '0',isset($postMetaArray['child'])?$postMetaArray['child'][$i]['gender']:false) }} {{ __('messages.common.male') }}
        &nbsp;&nbsp;&nbsp;
        {{ Form::radio('child[$i][gender]', '1',isset($postMetaArray['child'])?$postMetaArray['child'][$i]['gender']:false) }} {{ __('messages.common.female') }}
    </div>
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('child[$i][dob]', __('Date of Birth').':') }}<span class="text-danger">*</span>
        {{ Form::text('child[$i][dob]', isset($postMetaArray['child'])?$postMetaArray['child'][$i]['dob']:null, ['class' => 'form-control','required','id' => 'birthDate','autocomplete' => 'off']) }}
    </div>
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
     <a id="<?php echo $i;?>" href="javascript:void(0)" class="btn btn-primary remove-child" >Remove Child</a>
    </div>
    </div>
    <?php } } ?>
    
     	
    
     
    </div>
   
    
    <div class="form-group col-sm-12">
        <a  id="AddNewChild"  href="javascript:void(0)" class="btn btn-primary" >{{__('Add Child')}}</a>
    </div>
    
     <!-- Submit Field -->
   <div class="form-group col-sm-12">
     <div style="float:left">
        <a href="javascript:void(0)" onClick="selectTab('tab1')" class="btn btn-secondary text-dark">{{__('Previous')}}</a>
    </div>
     <div  style="float:right">
        <a  id="validateTab2" href="javascript:void(0)" class="btn btn-primary" style="float: right;">{{__('Next')}}</a>
    </div>
    </div>

</div>


<!-- Tab 3 Form --->

<div class="row section_tab" id="section_tab3">
   
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('when_need', __('When do you need childcare?').':') }}<span class="text-danger">*</span>
        {{ Form::text('when_need', isset($postMetaArray['when_need'])?$postMetaArray['when_need']:null, ['class' => 'form-control','required']) }}
    </div>
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('type_of_care', __('Type of care').':') }}<span class="text-danger">*</span>
        {{ Form::text('type_of_care', isset($postMetaArray['type_of_care'])?$postMetaArray['type_of_care']:null, ['class' => 'form-control','required']) }}
    </div>
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('preferred_reception', __('Preferred reception').':') }}<span class="text-danger">*</span>
        {{ Form::text('preferred_reception', isset($postMetaArray['preferred_reception'])?$postMetaArray['preferred_reception']:null, ['class' => 'form-control','required']) }}
    </div>
   
   
   <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('service_date_time', __('What days and times?').':') }}<span class="text-danger">*</span>
        {{ Form::text('service_date_time', isset($postMetaArray['service_date_time'])?$postMetaArray['service_date_time']:null, ['class' => 'form-control','required']) }}
    </div>
    
   
    
   <div class="form-group col-sm-12"> 
   <div style="float:left">
        <a href="javascript:void(0)" onClick="selectTab('tab2')" class="btn btn-secondary text-dark">{{__('Previous')}}</a>
    </div>
    <div style="float:right">
        <a  id="validateTab3" href="javascript:void(0)" class="btn btn-primary" style="float: right;">{{__('Next')}}</a>
    </div>
   </div> 

</div>



<!-- Tab 4 Form --->

<div class="row section_tab" id="section_tab4">
   
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('service_remarks', __('Remarks').':') }}<span class="text-danger">*</span>
        {{ Form::text('service_remarks', isset($postMetaArray['service_remarks'])?$postMetaArray['service_remarks']:null, ['class' => 'form-control','required']) }}
    </div>
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('have_pets', __('Do you have pets?').':') }}<span class="text-danger">*</span>
        {{ Form::text('have_pets', isset($postMetaArray['have_pets'])?$postMetaArray['have_pets']:null, ['class' => 'form-control','required']) }}
    </div>
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('service_wish', __('Service Wish').':') }}<span class="text-danger">*</span>
        {{ Form::text('service_wish', isset($postMetaArray['service_wish'])?$postMetaArray['service_wish']:null, ['class' => 'form-control','required']) }}
    </div>
   
   
    <div class="form-group col-sm-12">
    <div style="float:left">
        <a href="javascript:void(0)" onClick="selectTab('tab3')" class="btn btn-secondary text-dark">{{__('Previous')}}</a>
    </div>
    <div style="float:right">
        <a  id="validateTab4" href="javascript:void(0)" class="btn btn-primary" style="float: right;">{{__('Next')}}</a>
    </div>
    </div>

</div>


<!-- Tab 5 Form --->

<div class="row section_tab" id="section_tab5">
   
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('advertisement', __('Advertisement Heading').':') }}<span class="text-danger">*</span>
        {{ Form::text('advertisement', isset($postMetaArray['advertisement'])?$postMetaArray['advertisement']:null, ['class' => 'form-control','required']) }}
    </div>
    
   
    <div class="form-group col-xl-12 col-md-12 col-sm-12">
        {{ Form::label('advertisement_text', __('Advertisement Text').':') }}<span class="text-danger">*</span>
        {{ Form::textarea('advertisement_text', isset($postMetaArray['advertisement_text'])?$postMetaArray['advertisement_text']:null, ['class' => 'form-control' , 'rows' => '5']) }}
    </div>
   
    <div class="form-group col-sm-12">
    
    <div style="float:left">
        <a href="javascript:void(0)" onClick="selectTab('tab4')" class="btn btn-secondary text-dark">{{__('Previous')}}</a>
    </div>
    <div style="float:right">
        {{ Form::hidden('user_id',$user->id) }}
        {{ Form::submit(__('messages.common.save'), ['class' => 'btn btn-primary', 'id' => 'btnSave']) }}
    </div>
    </div>

</div>


