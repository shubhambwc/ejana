
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
   
     
 
      <div class="form-group col-xl-6 col-md-6 col-sm-12">
              {{ Form::label('Experience', __('Experience').':') }}<span class="text-danger">*</span>
              {{ Form::select('exprience', 
              ['less_1year' =>'<1 year of experience' , '1year' =>'1 year of experience' ,'2year'=>'2 year of experience','3year'=>'3 year of experience','4year'=>'4 year of experience','5'=>'5 year of experience']
              , isset($postMetaArray['exprience'])?$postMetaArray['exprience']:null, ['id'=>'helpers_exprience','class' => 'form-control select-box','required','placeholder' => 'Select Experience']) }}
        </div>

       <div class="form-group col-xl-6 col-md-6 col-sm-12">
              {{ Form::label('age_category_experience', __('In what age category?').':') }}<span class="text-danger">*</span>
              {{ Form::select('age_category_experience', 
              ['infant' =>'Infant(up to 1 year)' , 'toddler' =>'Toddler(1-2 years)' ,'toddler2_3'=>'Toddler(2-3years)','toddler3_4'=>'Toddler(3-4years)','schoolchild'=>'Schoolchild (7+ years)']
              , isset($postMetaArray['age_category_experience'])?$postMetaArray['age_category_experience']:null, ['id'=>'age_category_experience','class' => 'form-control select-box','required','placeholder' => 'Select age category']) }}
        </div>
      
       <div class="form-group col-xl-6 col-md-6 col-sm-12">
              {{ Form::label('child_quantity', __('How many child take care per day?').':') }}<span class="text-danger">*</span>
              {{ Form::select('child_quantity', 
              ['one' =>'1 child' , 'two' =>'2 child' ,'three'=>'3 child','four'=>'4 +']
              , isset($postMetaArray['child_quantity'])?$postMetaArray['child_quantity']:null, ['id'=>'child_quantity','class' => 'form-control select-box','required','placeholder' => 'How many child take care per day?']) }}
        </div>

        <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('competent', __('Are you competent and authorized for extra care?').':') }}<span class="text-danger">*</span><br>
        {{ Form::radio('competent', '0',isset($postMetaArray['competent']) && $postMetaArray['competent'] ==0 ?true :false)  ,['class' => 'form-control check-box','required']}} {{ __('Yes') }}
        &nbsp;&nbsp;&nbsp;
        {{ Form::radio('competent', '1',isset($postMetaArray['competent']) && $postMetaArray['competent'] ==1 ?true :false),['class' => 'form-control check-box','required'] }} {{ __('No') }}

    </div>

         <div class="form-group col-xl-6 col-md-6 col-sm-12">
              {{ Form::label('extra_offer', __('What do you offer(extra)').':') }}<span class="text-danger">*</span>
              {{ Form::select('extra_offer', 
              ['plan_activities' =>'Plan  activities' , 'crafts' =>'Craft' ,'cook'=>'Cook','light_house'=>'Light Housework','help_homework'=>'Help with homework','read_aload'=>'Read aloud', 'different'=>'Diffrent']
              , isset($postMetaArray['extra_offer'])?$postMetaArray['extra_offer']:null, ['id'=>'extra_offer','class' => 'form-control select-box','required','placeholder' => 'Select your extra offer Services']) }}
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
        <span id="validationErrorsBox" class="text-danger"></span>
        <div class="row">
            <div class="pl-3">
                {{ Form::label('image1', __('Copy ID/passport').':') }}
                <label class="image__file-upload text-white"> {{ __('messages.common.choose') }}
                    {{ Form::file('image1',['id'=>'logo','class' => 'd-none']) }}
                </label>
            </div>
            <div class="w-auto pl-3 mt-1">
            
                <img id='logoPreview' class="thumbnail-preview"
                     src="{{ $candidate['candidate_url'] }}">
            </div>
        </div>

    </div> 


   
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
              {{ Form::label('highest_education', __('Educational attainment highest education').':') }}<span class="text-danger">*</span>
              {{ Form::select('highest_education', 
              ['primary_education' =>'Primary Education' , 'vmbo_mavo' =>'VMBO/MAVO' ,'havo_vwo'=>'HAVO/VWO','mbo1'=>'MBO 1','mbo2'=>'MBO 2','mbo3'=>'MBO 3', 'mbo4'=>'MBO 4','professional'=>'Professional Education','bachelor'=>'Bachelor','different' =>'Different']
              , isset($postMetaArray['highest_education'])?$postMetaArray['highest_education']:null, ['id'=>'highest_education','class' => 'form-control select-box','required','placeholder' => 'Select highest education']) }}
    </div>

    

    <div class="form-group col-xl-6 col-md-6 col-sm-12">

        <span id="validationErrorsBox" class="text-danger"></span>
        <div class="row">
            <div class="pl-3">
                {{ Form::label('image2', __('Attach libility Insurance(If you do not have, attached your parent libility Insurance)').':') }}
                <label class="image__file-upload text-white"> {{ __('messages.common.choose') }}
                    {{ Form::file('image2',['id'=>'logo1
','class' => 'd-none']),['class' => 'form-control check-box','required'] }}
                </label>
            </div>
            <div class="w-auto pl-3">
            
                <img id='logoPreview' class="thumbnail-preview"
                     src="{{ $candidate['candidate_url'] }}">
            </div>
        </div>
         {{ Form::checkbox('is_libility', 'yes', true) }}
        {{ Form::label('is_libility', __('I am under 18 year old')) }}
      
    </div> 

    <div class="form-group col-xl-6 col-md-6 col-sm-12">

        <span id="validationErrorsBox" class="text-danger"></span>
        <div class="row">
            <div class="pl-3">
                {{ Form::label('image3', __('Padiatric First Aid Certificate').':') }}
                <label class="image__file-upload text-white"> {{ __('messages.common.choose') }}
                   {{ Form::file('image3',['id'=>'logo2','class' => 'd-none']) }}
                </label>
            </div>
            <div class="w-auto pl-3">
            
                <img id='logoPreview' class="thumbnail-preview"
                     src="{{ $candidate['candidate_url'] }}">
            </div>
        </div>
         {{ Form::checkbox('is_first_aid', 'yes', true) ,['class' => 'form-control check-box','required'] }}
        {{ Form::label('is_first_aid', __('I Do not Have Padiatric First Aid Certificate')) }}
    </div> 

    
  <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('have_drive_license', __('Do you have Driver Licence?')) }}<span class="text-danger">*</span><br>
        {{ Form::radio('have_drive_license', '0',isset($postMetaArray['have_drive_license']) && $postMetaArray['have_drive_license'] ==0 ?true :false) ,['class' => 'form-control check-box','required']}} {{ __('Yes') }}
        &nbsp;&nbsp;&nbsp;
        {{ Form::radio('have_drive_license', '1',isset($postMetaArray['have_drive_license']) && $postMetaArray['have_drive_license'] ==1 ?true :false),['class' => 'form-control check-box','required'] }} {{ __('No') }}

    </div>

     <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('have_car', __('Do you have Car?').':') }}<span class="text-danger">*</span><br>
        {{ Form::radio('have_car', '0',isset($postMetaArray['have_car']) && $postMetaArray['have_car'] ==0 ?true :false) ,['class' => 'form-control check-box','required']}} {{ __('Yes') }}
        &nbsp;&nbsp;&nbsp;
        {{ Form::radio('have_car', '1',isset($postMetaArray['have_car']) && $postMetaArray['have_car'] ==1 ?true :false) ,['class' => 'form-control check-box','required']}} {{ __('No') }}

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
   
    
     <div class="form-group col-xl-12 col-md-12 col-sm-12">
        {{ Form::label('motivation_text', __('Motivation Text').':') }}<span class="text-danger">*</span>
        {{ Form::textarea('motivation_text', isset($postMetaArray['motivation_text'])?$postMetaArray['motivation_text']:null, ['class' => 'form-control address-height' , 'rows' => '5']) }}
    </div>
    
     <div class="form-group col-xl-6 col-md-6 col-sm-12">
              {{ Form::label('character_traits', __('Character traits').':') }}<span class="text-danger">*</span>
              {{ Form::select('character_traits', 
              ['patient' =>'Patient' , 'creative' =>'Creative' ,'decently'=>'Decently','packer'=>'Packer','communicative'=>'Communicative','spontaneous'=>'Spontaneous', 'helpful'=>'Helpful','responsible'=>'Responsible','flexible'=>'Flexible','cozy' =>'Cozy','social'=>'Social','social'=>'Social','independent'=>'Independent','caring'=>'Caring','stress_resistant'=>'Stress resistant','different'=>'Different']

              , isset($postMetaArray['character_traits'])?$postMetaArray['character_traits']:null, ['id'=>'character_traits','class' => 'form-control select-box','required','placeholder' => 'What are your character traits?']) }}
    </div>

     <div class="form-group col-xl-6 col-md-6 col-sm-12">
              {{ Form::label('afraid_of', __('Afraid or Allergic')) }}<span class="text-danger">*</span>
              {{ Form::select('afraid_of', 
              ['no' =>'No' , 'dogs' =>'Dogs' ,'cats'=>'Cats','different'=>'Different']

              , isset($postMetaArray['afraid_of'])?$postMetaArray['afraid_of']:null, ['id'=>'afraid_of','class' => 'form-control select-box','required','placeholder' => 'Are you allergic or afraid of certain animal?']) }}
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
        {{ Form::label('advertisement', __('Advertisement Heading')) }}<span class="text-danger">*</span>
        {{ Form::text('advertisement', isset($postMetaArray['advertisement'])?$postMetaArray['advertisement']:null, ['class' => 'form-control','required']) }}
    </div>
    
   
    <div class="form-group col-xl-12 col-md-12 col-sm-12">
        {{ Form::label('advertisement_text', __('Advertisement Text')) }}<span class="text-danger">*</span>
        {{ Form::textarea('advertisement_text', isset($postMetaArray['advertisement_text'])?$postMetaArray['advertisement_text']:null, ['class' => 'form-control address-height' , 'rows' => '5']) }}
    </div>
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('when_need', __('When do you avilable?')) }}<span class="text-danger">*</span>
        {{ Form::text('when_need', isset($postMetaArray['when_need'])?$postMetaArray['when_need']:null, ['class' => 'form-control','required']) }}
    </div>
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('service_date_time', __('What days and times are you avilable?').':') }}<span class="text-danger">*</span>
        {{ Form::text('service_date_time', isset($postMetaArray['service_date_time'])?$postMetaArray['service_date_time']:null, ['class' => 'form-control','required']) }}
    </div>

    <div class="form-group col-xl-6 col-md-6 col-sm-12">
              {{ Form::label('prefered_reception', __('Prefered Reception')) }}<span class="text-danger">*</span>
              {{ Form::select('prefered_reception', 

                          [ 
                           'day'  => 'Daytime Care',
                           'school'  => 'After School Care',
                           'evening'  => 'Evening Care',
                           'weekend'  => 'Weekend Care',
                           'night'  => 'Night Care',
                           'holiday'  => 'Holiday reception',
                          ]                                                                                         
              , isset($postMetaArray['prefered_reception'])?$postMetaArray['prefered_reception']:null, ['id'=>'prefered_reception','class' => 'form-control select-box','required','placeholder' => 'Are you allergic or afraid of certain animal?']) }}
    </div>



   
    <div class="form-group col-sm-12">
    
    <div style="float:left">
        <a href="javascript:void(0)" onClick="selectTab('tab4')" class="btn btn-secondary text-dark">{{__('Previous')}}</a>
    </div>
     <div style="float:right">
        <a  id="validateTab5" href="javascript:void(0)" class="btn btn-primary" style="float: right;">{{__('Next')}}</a>
    </div>
    </div>

</div>

<!-- Tab 6 Form --->

<div class="row section_tab" id="section_tab6">
   
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('refrence_name', __('Refrence Name')) }}<span class="text-danger">*</span>
        {{ Form::text('refrence_name', isset($postMetaArray['refrence_name'])?$postMetaArray['refrence_name']:null, ['class' => 'form-control','required']) }}
    </div>
    
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('refrence_email', __('Email')) }}<span class="text-danger">*</span>
        {{ Form::email('refrence_email', isset($postMetaArray['refrence_email'])?$postMetaArray['refrence_email']:null, ['class' => 'form-control', 'required']) }}
    </div>

    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        {{ Form::label('ref_phone', __('Phone No.')) }}<span class="text-danger">*</span><br>
        {{ Form::tel('ref_phone', 

         isset($postMetaArray['ref_phone'])?$postMetaArray['ref_phone']:null,

         ['class' => 'form-control','required', 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")','id'=>'phoneNumber']) }}
        {{ Form::hidden('region_code',isset($user)?$user->region_code:null,['id'=>'prefix_code']) }}
        <br>
        
    </div> 
   
    <div class="form-group col-sm-12">
    
    <div style="float:left">
        <a href="javascript:void(0)" onClick="selectTab('tab5')" class="btn btn-secondary text-dark">{{__('Previous')}}</a>
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

