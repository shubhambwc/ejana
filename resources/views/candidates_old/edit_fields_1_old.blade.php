
<!-- Tab 2 Form --->




<div class="row section_tab active" id="section_tab1">
    
    {{ Form::hidden('service_id',$_REQUEST['service_id']) }}
     {{ Form::hidden('user_id',$user->id) }}
    {{ Form::hidden('details', 'user details') }}
    
   {{ Form::hidden('first_name', isset($user)?$user->first_name:null, ['class' => 'form-control','required']) }}
   {{ Form::hidden('last_name', isset($user)?$user->last_name:null, ['class' => 'form-control','required']) }}
   {{ Form::hidden('email', isset($user)?$user->email:null, ['class' => 'form-control','required']) }}
     
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('dob', __('Date of Birth').':') }}<span class="text-danger">*</span>
        {{ Form::text('dob', isset($postMetaArray['dob'])?$postMetaArray['dob']:null, ['class' => 'form-control birthDate','required','id' => 'birthDate1','autocomplete' => 'off']) }}
    </div>
    
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('gender', __('messages.candidate.gender').':') }}<span class="text-danger">*</span><br>
        {{ Form::radio('gender', '0',isset($postMetaArray['gender']) && $postMetaArray['gender'] ==0 ?true :false) }} {{ __('messages.common.male') }}
        &nbsp;&nbsp;&nbsp;
        {{ Form::radio('gender', '1',isset($postMetaArray['gender']) && $postMetaArray['gender'] ==1 ?true :false) }} {{ __('messages.common.female') }}
    </div>
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('Mother Tongue') }}<span class="text-danger"></span>
        {{ Form::select('mother_lang_id', $data['language'],isset($postMetaArray['mother_lang_id'])?$postMetaArray['mother_lang_id']:null, ['class' => 'form-control select-box','placeholder' => 'Select Langauge','required']) }}
    </div>
   



      <!-- add lang section -->

            <div  id="additional_lang" style="display: block ruby;">
                   <div class="form-group col-xl-6 col-md-6 col-sm-12">
                        {{ Form::label('Other_lang[0][name]', __('Other Langauge Name').':') }}
                        {{ Form::select('Other_lang[0][name]', $data['language'],isset($postMetaArray['Other_lang']['0']['name'])?$postMetaArray['Other_lang']:null, ['class' => 'form-control select-box','placeholder' => 'Select Langauge']) }}
                   </div>

                    <div class="form-group col-xl-6 col-md-6 col-sm-12">
                        {{ Form::label('Langauge Level') }}
         				{{ Form::select('Other_lang[0][level]', $data['lang_level'],isset($postMetaArray['Other_lang'])?$postMetaArray['Other_lang'][0]['level']:null, ['class' => 'form-control select-box','placeholder' => 'Select Langauge Level']) }}
                    </div>
                    

                  <?php 
                   if(isset($postMetaArray['Other_lang']) ) { 
                   
                   for($i=1; $i<count($postMetaArray['Other_lang']);$i++){

                   ?>
                   <div class="additional_lang_row" id="add_lang<?php echo $i;?>" style="display: inline-flex;">
                    
                    <div class="form-group col-xl-6 col-md-6 col-sm-12">
                        {{ Form::label('Other_lang['.$i.'][name]', __('Other Langauge Name').':') }}
                        {{ Form::select('Other_lang['.$i.'][name]', $data['language'],isset($postMetaArray['Other_lang'][$i])?$postMetaArray['Other_lang'][$i]['name']:null, ['class' => 'form-control select-box']) }}
                    </div> 

                       <div class="form-group col-xl-4 col-md-4 col-sm-12">
                        {{ Form::label('Langauge Level') }}
                        {{ Form::select('Other_lang['.$i.'][level]', $data['lang_level'],isset($postMetaArray['Other_lang'][$i])?$postMetaArray['Other_lang'][$i]['level']:null, ['class' => 'form-control select-box','placeholder' => 'Select Langauge Level']) }}
                    </div>

                    
                    
                    <div class="form-group col-xl-2 col-md-2 col-sm-12">
                     <a id="<?php echo $i;?>" href="javascript:void(0)" class="btn btn-primary remove-lang" style="margin-top: 30px;">Remove Langauge</a>
                    </div>
                    
                  </div>
                    <?php } } ?>
                 
             </div>

              <div class="form-group col-sm-12">
                    <a  id="AddNewLang"  href="javascript:void(0)" class="btn btn-primary" >{{__('Add Lang')}}</a>
                </div>
                      
                

     <!-- add lang section ended-->



    <div class="form-group col-sm-6">
        {{ Form::label('country', __('messages.company.country').':') }}<span class="text-danger">*</span>
        {{ Form::select('country_id', $data['countries'], !empty($company->user->country_id)?$company->user->country_id:null, ['id'=>'countryId','class' => 'form-control select-box','required','placeholder' => 'Select Country']) }}
    </div>
    
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('state', __('messages.company.state').':') }}<span class="text-danger">*</span>
        {{ Form::select('state_id', (isset($states) && $states!=null)?$states:[], isset($company->user->state_id)?$company->user->state_id:null, ['id'=>'stateId','class' => 'form-control select-box','required','placeholder' => 'Select State']) }}
    </div>
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('city', __('messages.company.city').':') }}<span class="text-danger">*</span>
        {{ Form::select('city_id', (isset($cities) && $cities!=null) ?$cities:[], isset($company->user->city_id)?$company->user->city_id:null, ['id'=>'cityId','class' => 'form-control select-box','required','placeholder' => 'Select City']) }}
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
   
     
    <div class="form-group col-xl-3 col-md-3 col-sm-12">
        {{ Form::label('child[0][name]', __('Child Name').':') }}<span class="text-danger">*</span>
        {{ Form::text('child[0][name]', isset($postMetaArray['child'])?$postMetaArray['child'][0]['name']:null, ['class' => 'form-control ','required']) }}
    </div>
    
    
   <div class="form-group col-xl-3 col-md-3 col-sm-12">
        {{ Form::label('child[0][gender]', __('messages.candidate.gender').':') }}<span class="text-danger">*</span><br>
        {{ Form::radio('child[0][gender]', '0',isset($postMetaArray['child'][0]['gender']) && $postMetaArray['child'][0]['gender'] ==0 ? true:false) }} {{ __('messages.common.male') }}
        &nbsp;&nbsp;&nbsp;
        {{ Form::radio('child[0][gender]', '1',isset($postMetaArray['child'][0]['gender']) && $postMetaArray['child'][0]['gender'] ==1 ?true:false) }} {{ __('messages.common.female') }}
    </div>
    
    <div class="form-group col-xl-3 col-md-3 col-sm-12">
        {{ Form::label('child[0][dob]', __('Date of Birth').':') }}<span class="text-danger">*</span>
        {{ Form::text('child[0][dob]', isset($postMetaArray['child'])?$postMetaArray['child'][0]['dob']:null, ['class' => 'form-control birthDate','required','id' => 'birthDate','autocomplete' => 'off']) }}
    </div>
    
    <div  id="additional_child">

   
   <?php 
   if(isset($postMetaArray['child']) ) { 
   
   for($i=1; $i<count($postMetaArray['child']);$i++){
   ?>
   <div class="additional_child_row" id="child_<?php echo $i;?>" style="display: inline-flex;">
    
    <div class="form-group col-xl-3 col-md-3 col-sm-12">
        {{ Form::label('child['.$i.'][name]', __('Child Name').':') }}<span class="text-danger">*</span>
        {{ Form::text('child['.$i.'][name]', isset($postMetaArray['child'][$i])?$postMetaArray['child'][$i]['name']:null, ['class' => 'form-control','required']) }}
    </div>
    
    
   <div class="form-group col-xl-3 col-md-3 col-sm-12">
        {{ Form::label('child['.$i.'][gender]', __('messages.candidate.gender').':') }}<span class="text-danger">*</span><br>
        {{ Form::radio('child['.$i.'][gender]', '0',isset($postMetaArray['child'][$i]['gender']) && $postMetaArray['child'][$i]['gender'] ==0 ? true:false) }} {{ __('messages.common.male') }}
        &nbsp;&nbsp;&nbsp;
        {{ Form::radio('child['.$i.'][gender]', '1',isset($postMetaArray['child'][$i]['gender']) && $postMetaArray['child'][$i]['gender'] ==1 ?true:false) }} {{ __('messages.common.female') }}
    </div>
    
    <div class="form-group col-xl-3 col-md-3 col-sm-12">
        {{ Form::label('child['.$i.'][dob]', __('Date of Birth').':') }}<span class="text-danger">*</span>
        {{ Form::text('child['.$i.'][dob]', isset($postMetaArray['child'][$i])?$postMetaArray['child'][$i]['dob']:null, ['class' => 'form-control birthDate','required','id' => 'birthDate','autocomplete' => 'off']) }}
    </div>
    
    <div class="form-group col-xl-3 col-md-3 col-sm-12">
     <a id="<?php echo $i;?>" href="javascript:void(0)" class="btn btn-primary remove-child" style="margin-top:30px;" >Remove Child</a>
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
      {{ Form::select('type_of_care', $care_type, isset($postMetaArray['type_of_care'])?$postMetaArray['type_of_care']:null, ['id'=>'careId','class' => 'form-control select-box','required','placeholder' => 'Select Care']) }}
    </div>
    
     <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('preferred_reception', __('Preferred reception').':') }}<span class="text-danger">*</span>
        {{ Form::select('preferred_reception', $preferredTime, isset($postMetaArray['preferred_reception'])?$postMetaArray['preferred_reception']:null, ['id'=>'preferredId','class' => 'form-control select-box','required','placeholder' => 'Select preferred reception']) }}
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
        {{ Form::select('have_pets', $pets, isset($postMetaArray['have_pets'])?$postMetaArray['have_pets']:null, ['id'=>'petId','class' => 'form-control select-box','required','placeholder' => 'Select your pet']) }}
    </div>
    
    <div class="form-group col-xl-12 col-md-12 col-sm-12">
        {{ Form::label('service_wish', __('Service Wish ').':') }}
    </div>
    
   <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('service_wish', __('Experience ').':') }}

         <div class="row">
				<div class="col-md-3">
				    {{ Form::label('minimum_exp', __('Min').':') }} <span id="span_minimum_exp">{{isset($postMetaArray['minimum_exp'])?$postMetaArray['minimum_exp']:'1'}}</span>
				    {{ Form::hidden('minimum_exp', isset($postMetaArray['minimum_exp'])?$postMetaArray['minimum_exp']:'1', ['id' => 'minimum_exp', 'class' => 'form-control']) }}
    			</div>
				<div class="col-md-6" style="padding-top:5px">
					<div id="exp_range"></div>
				</div>
				
				<div class="col-md-3">
				    {{ Form::label('maximum_exp', __('Max').':') }} <span id="span_maximum_exp">{{isset($postMetaArray['maximum_exp'])?$postMetaArray['maximum_exp']:'5'}}</span>
				    {{ Form::hidden('maximum_exp', isset($postMetaArray['maximum_exp'])?$postMetaArray['maximum_exp']:'5', ['id' => 'maximum_exp', 'class' => 'form-control']) }}
    			</div>
    			
				
			</div>
    </div>
    
     <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('service_wish', __('Age ').':') }}

         <div class="row">
				<div class="col-md-3">
				    {{ Form::label('minimum_age', __('Min').':') }} <span id="span_minimum_age">{{isset($postMetaArray['minimum_age'])?$postMetaArray['minimum_age']:'21'}}</span>
				    {{ Form::hidden('minimum_age', isset($postMetaArray['minimum_age'])?$postMetaArray['minimum_age']:'21', ['id' => 'minimum_age', 'class' => 'form-control']) }}
    			</div>
				<div class="col-md-6" style="padding-top:5px">
					<div id="age_range"></div>
				</div>
				
				<div class="col-md-3">
				    {{ Form::label('maximum_age', __('Max').':') }} <span id="span_maximum_age">{{isset($postMetaArray['maximum_age'])?$postMetaArray['maximum_age']:'45'}}</span>
				    {{ Form::hidden('maximum_age', isset($postMetaArray['maximum_age'])?$postMetaArray['maximum_age']:'45', ['id' => 'maximum_exp', 'class' => 'form-control']) }}
    			</div>
    			
				
			</div>
    </div>
    
    <div class="form-group col-xl-12 col-md-12 col-sm-12">
        {{ Form::label('service_wish', __('Language ').':') }}

         <div class="row">
				<div class="col-md-4">
				    {{ Form::label('wish_lang_1', __('1st').':') }} 
				    {{ Form::select('wish_lang_1', $data['language'],isset($postMetaArray['wish_lang_1'])?$postMetaArray['wish_lang_1']:null, ['class' => 'form-control select-box','placeholder' => 'Select Langauge','required']) }}
              	</div>
              	
              	<div class="col-md-4">
				    {{ Form::label('wish_lang_2', __('2nd').':') }} 
				    {{ Form::select('wish_lang_2', $data['language'],isset($postMetaArray['wish_lang_2'])?$postMetaArray['wish_lang_2']:null, ['class' => 'form-control select-box','placeholder' => 'Select Langauge','required']) }}
              	</div>
              	
              	<div class="col-md-4">
				    {{ Form::label('wish_lang_3', __('3rd').':') }} 
				    {{ Form::select('wish_lang_3', $data['language'],isset($postMetaArray['wish_lang_3'])?$postMetaArray['wish_lang_3']:null, ['class' => 'form-control select-box','placeholder' => 'Select Langauge','required']) }}
              	</div>
              	
			</div>
    </div>
    <div class="form-group col-xl-12 col-md-12 col-sm-12">
        {{ Form::label('other_wish', __('Other Wish ').':') }}
        {{ Form::text('other_wish', isset($postMetaArray['other_wish'])?$postMetaArray['other_wish']:null, ['class' => 'form-control','required','placeholder' => 'Other Wish...']) }}
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
        {{ Form::textarea('advertisement_text', isset($postMetaArray['advertisement_text'])?$postMetaArray['advertisement_text']:null, ['class' => 'form-control address-height' , 'rows' => '5']) }}
    </div>
   
    <div class="form-group col-sm-12">
    
    <div style="float:left">
        <a href="javascript:void(0)" onClick="selectTab('tab4')" class="btn btn-secondary text-dark">{{__('Previous')}}</a>
    </div>
    <div style="float:right">
        {{ Form::submit(__('messages.common.save'), ['class' => 'btn btn-primary', 'id' => 'btnSave']) }}
    </div>
    </div>

</div>

		
		
<script>  
$(document).ready(function(){  
    
	$( "#exp_range" ).slider({
		range: true,
		min: 0,
		max: 25,
		values: [ 1, 5 ],
		slide:function(event, ui){
			$("#minimum_exp").val(ui.values[0]);
			$("#maximum_exp").val(ui.values[1]);
			$("#span_minimum_exp").text(ui.values[0]);
			$("#span_maximum_exp").text(ui.values[1]);
			
		}
	});
	
	$( "#age_range" ).slider({
		range: true,
		min: 21,
		max: 60,
		values: [ 22, 35 ],
		slide:function(event, ui){
			$("#minimum_age").val(ui.values[0]);
			$("#maximum_age").val(ui.values[1]);
			$("#span_minimum_age").text(ui.values[0]);
			$("#span_maximum_age").text(ui.values[1]);
			
		}
	});
});
</script>	

