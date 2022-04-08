
<div>
<style>
#character_traits_other_box, #afraid_of_other_box,#competent_option_box, #competent_option_other_box,#extra_offer_box_other,#highest_education_other_box{
display:none;margin-top:15px;
}
#custom-file-image1,#custom-file-image2,#custom-file-image3,#custom-file-image4,#is_under18_box{
display:none;
}
.error_input{border-color: #ff0000!important;}
.error_input_text{padding:5px;color:#ff0000;font-size:12px;margin:0px}
.custom-file-preview img{
width: 100px;
    border-radius: 10px;
    margin: 10px;
}

.input-group-addon{
border-left: 1px solid #dee2e6;
border-top: 1px solid #dee2e6;
border-bottom: 1px solid #dee2e6;
vertical-align: baseline;
padding: 9px 5px 0px 5px;
border-radius:10px 0px 0px 10px;
}


    .calendar{width:auto;height:auto;border:1px solid #000;float:left;}
    .calendar_left{width:295px;height:auto;float:left;}
    .calendar_top{float:left;width:100%;padding:5px;}
    .calendar_top_1{cursor: pointer;float:left;width:10%;text-align:left;}
    .calendar_top_2{float:left;width:80%;text-align:center;}
    .calendar_top_3{cursor: pointer;float:right;width:10%;text-align:right;}
    .calendar_right{
    width: 295px;
    float:right;

    }
    .calendar_right_inner{
    width:100%;
    height: 200px;
    overflow: scroll;
    margin: 10px 0px;
    }
    .calendar_body{
    float:left;width:100%;padding:5px;
    }
    .calendar_date{cursor: pointer;float:left;width:30px;height:30px;text-align:center;border:1px solid #e2e2e2;margin:5px;}
    .calendar_date_dis{float:left;width:30px;height:30px;text-align:center;border:0px solid #e2e2e2;margin:5px;}

    .calendar_date.active:hover{background:#1cd3c1;}
    .disableed{opacity:0.5}
    .selected{background:#1cd3c1;}
    .selected.currentselected{background:#465571;color:#fff;}
    .selected.active.currentselected:hover{background:#465571;color:#fff;}
    .calendar_date_label{float:left;width:30px;text-align:center;border:0px solid #e2e2e2;margin:0px 5px;}

    .titmeSloteRow{float:left;width:100%;}
    .titmeSloteRow.evenRow{background:#e2e2e2;}
    .titmeSlote{float:left;width:100px;}
    .titmeSloteRight{float:right;width:50px;}

</style>

<script>
    $(document).ready(function () {



    $('input[type=radio][name=competent]').change(function() {
    	if (this.value == 1) {
    		$('#competent_option_box').show();
    	}else{
    		$('#competent_option_box').hide();
    	}

    });

    $('input[type=checkbox][name=is_under18]').change(function() {
    if($(this).is(':checked')){
        $('#is_under18_box').show();
   } else{
        $('#is_under18_box').hide();
     }

    });


    $('input[type=radio][name=have_liability]').change(function() {
    	if (this.value == 1) {
    		$('#have_liability_box').show();
    	}else{
    		$('#have_liability_box').hide();
    	}

    });

    $('input[type=radio][name=have_first_aid_certificate]').change(function() {
    	if (this.value == 1) {
    		$('#have_first_aid_certificate_box').show();
    		$('#have_first_aid_certificate_box_no').hide();
    	}else{
    		$('#have_first_aid_certificate_box').hide();
    		$('#have_first_aid_certificate_box_no').show();
    	}

    });

    $('input[type=radio][name=vog_certificate]').change(function() {
    	if (this.value == 1) {
    		$('#vog_certificate_box').show();
    		$('#vog_certificate_box_no').hide();
    	}else{
    		$('#vog_certificate_box').hide();
    		$('#vog_certificate_box_no').show();
    	}

    });



	$('#competent_option').on('change', function() {
	$('#competent_option_other_box').hide();
	$("#competent_option :selected").each(function() {
            if( this.value =='other'){
  			$('#competent_option_other_box').show();
  		}
        });
	});

	$('#heighest_educations').on('change', function() {
	$('#heighest_educations_other_box').hide();
	$("#heighest_educations :selected").each(function() {
            if( this.value =='other'){
  			$('#heighest_educations_other_box').show();
  		}
        });
	});


	$('#extra_offer').on('change', function() {
	$('#extra_offer_box_other').hide();
	$("#extra_offer :selected").each(function() {
            if( this.value =='other'){
  			$('#extra_offer_box_other').show();
  		}
        });


	});

	$('#extra_offer').on('change', function() {
	$('#extra_offer_box_other').hide();
	$("#extra_offer :selected").each(function() {
            if( this.value =='other'){
  			$('#extra_offer_box_other').show();
  		}
        });


	});

	$('#available_for').on('change', function() {
	$('#available_for_other').hide();
	$("#available_for :selected").each(function() {
            if( this.value =='other'){
  			$('#available_for_other').show();
  		}
        });


	});



	$('.select_box_other').on('change', function() {
  		$(this).siblings('.other_box').hide();
  		if( this.value =='other'){
  		    $(this).siblings('.other_box').show();
  		}
  	});



	$('#character_traits').on('change', function() {

	    $('#character_traits_other_box').hide();
	    $("#character_traits :selected").each(function() {
            if( this.value =='other'){
  			$('#character_traits_other_box').show();
  		}
        });
   });

	$('#afraid_of').on('change', function() {

	    $('#afraid_of_other_box').hide();
	    $("#afraid_of :selected").each(function() {
            if( this.value =='other'){
  			$('#afraid_of_other_box').show();
  		}
        });

	});


     $('input[type=checkbox][name=image1_later]').change(function() {
    if($(this).is(':checked')){
        $('#image1').removeClass('required');
        $('#image1').siblings('.error_input_text').remove()
        $('#image1_later_popup').show();
   } else{
         $('#image1').addClass('required');
        $('#image1_later_popup').hide();
     }

    });

    $('input[type=checkbox][name=passport_front_later]').change(function() {
    if($(this).is(':checked')){
        $('#image2').removeClass('required');
        $('#image2').siblings('.error_input_text').remove()
   } else{
         $('#image2').addClass('required');
     }

    });

     $('input[type=checkbox][name=passport_back_later]').change(function() {
    if($(this).is(':checked')){
        $('#image22').removeClass('required');
        $('#image22').siblings('.error_input_text').remove()
   } else{
         $('#image22').addClass('required');
     }

    });









    });


</script>

    <div class="tabcontent pt-1" id="tab1">
    <div class="custom-form">
         <div id="message3">Fill in your details as much as possible.</div>
    </div>




    <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::hidden('service_id',$serviceId) }}
                    {{ Form::label('dob', __('web.helpers.birth_date').':') }}<a href="#" class="tooltip_icon" data-toggle="tooltip" title="We ask for your date of birth to verify that you are old enough. Only your age will be visible on your profile.">?</a><span class="text-danger">*</span>
                    {{ Form::text('dob', null, ['class' => 'form-control required','id' => 'userbirthDate','autocomplete' => 'off']) }}
                </div>
    </div>
    <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('gender', __('web.helpers.gender').':') }}<span class="text-danger">*</span></br>
                    {{ Form::radio('gender', 'male',true) }} {{ __('web.helpers.male') }} &nbsp;&nbsp;&nbsp;
                    {{ Form::radio('gender', 'female',false )}} {{ __('web.helpers.female') }}
                </div>
    </div>
    <div class="row">
                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                    {{ Form::label('mother_lang_id',__('web.helpers.native_language').':') }}<span class="text-danger">*</span>
                    {{ Form::select('mother_lang_id', $data['language'],null, ['class' => 'form-control select-box required','placeholder' => 'Select Langauge','required']) }}
                </div>
    </div>
    <div class="row">

                  <!-- add lang section -->
                       <div  class="additional_lang_row" style="display: inline-flex;">
                               <div class="form-group col-xl-6 col-md-5 col-sm-6">
                                    {{ Form::label('Other_lang[0][name]', __('web.helpers.other_spoken_language').':') }}
                                    {{ Form::select('Other_lang[0][name]', $data['language'],null, ['class' => 'form-control select-box','placeholder' => 'Select Langauge']) }}
                               </div>

                                <div class="form-group col-xl-4 col-md-4 col-sm-4">
                                    {{ Form::label('Langauge_level',__('web.helpers.language_level').':') }}
                                    {{ Form::select('Other_lang[0][level]', $data['lang_level'],null, ['class' => 'form-control select-box','placeholder' => 'Select Langauge Level']) }}
                                </div>
                         </div>
    </div>
    <div class="row">
                <div  id="additional_lang" style="display: block ruby;">


                         </div>
                          <div class="form-group col-sm-12">
                                <a  id="AddNew"  href="javascript:void(0)" class="btn btn-primary" ><i class="fa fa-plus" aria-hidden="true"></i> {{__('Langauge')}}</a>
                            </div>
    </div>
    <div class="row">



                 <!-- add lang section ended-->

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                    {{ Form::label('phone_no',__('web.helpers.phone_no').':') }}<span class="text-danger">*</span><br>
                    {{ Form::text('phone',null,
                     ['class' => 'form-control required','required','id'=>'phoneRefNumber']) }}
                </div>
        </div>

        <div class="row">
                  <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('address', __('web.helpers.address').':') }}<span class="text-danger">*</span>
                    {{ Form::text('address', null, ['class' => 'form-control required','required']) }}
                </div>
    </div>

    <div class="row">
                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('zip_code', __('web.helpers.postal_code').':') }}<span class="text-danger">*</span>
                    {{ Form::text('zip_code', null, ['class' => 'form-control required','required','maxlength' => 6]) }}
                </div>
    </div>

    <div class="row">
                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('place', __('web.helpers.place').':') }}<span class="text-danger">*</span>
                    {{ Form::text('web.helpers.place', null, ['class' => 'form-control required','required']) }}
                </div>
    </div>

    <div class="row">
                <!-- Submit Field -->
               <div class="form-group col-sm-12">
                 <div style="float:left">
                    <a href="{{ route('candidate.selectservice',$ownerId) }}" class="btn btn-secondary text-dark">{{__('web.helpers.cancel')}}</a>
                </div>
                 <div  style="float:right">
                    <a  onClick="validateTab(1)"  class="btn btn-primary" style="float: right;">{{__('web.helpers.next')}}</a>
                </div>
               </div>

</div>


    </div>


    <div class="tabcontent pt-1 disable" id="tab2">
    <div class="custom-form">
         <div id="message3">{{ __('web.helpers.complete_your_profile') }}</div>

    </div>

        <div class="row">
             <div class="form-group col-xl-12 col-md-12 col-sm-12">
                <p><b>{{ __('web.helpers.a_photo_is_indispensable') }}</b></p>
                <p><b>Tips <span class="text-danger">*</span></b> {{ __('web.helpers.choose_a_clear_photo') }}</p>
            </div>
        </div>
        <div class="row">
        <div class="form-group col-xl-6 col-md-6 col-sm-6">
                {{ Form::label('image1', __('web.helpers.profile_picture')) }}
                <div class="custom-file">
                    <input type="file" name="profile_pictures" class="custom-file-input required" id="image1">
                    <label class="custom-file-label rounded" name="image1"><i class="mdi mdi-cloud-upload mr-1"></i> {{ __('web.helpers.upload_profile_image') }}</label>
                </div>
                <div class="custom-file-preview" id="custom-file-image1" style="display:none">
                     <img id="image1_preview" src="" />
                </div>
        </div>
        </div>

        <div class="row">
        <div class="form-group col-xl-6 col-md-6 col-sm-6">
         {{ Form::checkbox('image1_later', 'yes', false) ,['class' => 'form-control check-box'] }}
         {{ Form::label('image1_later', __("web.helpers.i_will_add_my_photo_later")) }}
        </div>
        </div>

        <div class="row" id="image1_later_popup" style="display:none">
             <div class="form-group col-xl-12 col-md-12 col-sm-12">
                <p><b>{{ __('web.helpers.please_note_a_profile_without_a_photo')}}</b></p>
            </div>
        </div>




        <div class="row">
             <!-- Submit Field -->
           <div class="form-group col-sm-12">
             <div style="float:left">
                <a href="javascript:void(0)" onClick="openCity(event, 'tab1','tabb1')" class="btn btn-secondary text-dark">{{__('web.helpers.previous')}}</a>
            </div>
             <div  style="float:right">
                <a  onClick="validateTab(2)" href="javascript:void(0)" class="btn btn-primary" style="float: right;">{{__('web.helpers.next')}}</a>
            </div>
            </div>

        </div>
    </div>


    <div class="tabcontent pt-1 disable" id="tab3">
            <div class="custom-form">
                 <div id="message3">{{ __('web.helpers.what_is_your_experience_as_a') }} {{$JobCategoryDetail->name}}? </div>
            </div>
                <div class="row">
                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('exprience', __('web.helpers.experience').':') }}<span class="text-danger">*</span>
                      {{ Form::select('exprience',
                      ['less_1year' =>'<1 year of experience' , '1year' =>'1 year of experience' ,'2year'=>'2 year of experience','3year'=>'3 year of experience','4year'=>'4 year of experience','5'=>'5 year of experience','6'=>'6 year of experience','7'=>'7 year of experience','8'=>'8 year of experience','9'=>'9 year of experience','10+'=>'10+ year of experience']
                      ,null, ['id'=>'helpers_exprience','class' => 'form-control select-box required','required','placeholder' => 'How many years of experience do you have as homework guidance?']) }}
                </div>
                </div>


                <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('heighest_educations', __('What is your heighest education?').':') }}<span class="text-danger">*</span>
                      {{ Form::select('heighest_educations',
                      ['Mavo_vmbo' =>'Mavo/vmbo' , 'HAVO' =>'HAVO' ,'VWO'=>'VWO','MBO'=>'MBO','HBO'=>'HBO','WO'=>'WO','other'=>'Other']
                      ,null, ['class' => 'form-control select-box required','multiple']) }}


                </div>
                </div>
                <div class="row" id="heighest_educations_other_box" style="display:none">
                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                       {{ Form::text('heighest_educations_other', null, ['class' => 'form-control','placeholder' => 'Enter other']) }}
                  </div>
                </div>


                <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('age_category_experience[]', __('web.helpers.in_what_age_category').':') }}<span class="text-danger">*</span>
                      {{ Form::select('age_category_experience[]',
                      ['4-12' =>'4-12 years' , '12-18' =>'12-18 years' ,'>18'=>'18 years and older']
                      ,null, ['class' => 'form-control select-box required','multiple']) }}
                </div>
                </div>

                <div class="row">

                               <div class="form-group col-xl-6 col-md-5 col-sm-6">
                                    {{ Form::label('what_you_teach', __('What class do you teach?').':') }}
                                    {{ Form::select('what_you_teach[0][name]',
                        ['arabic' =>'Arabic',
                        'Primary_school_subjects' =>'Primary School Subjects',
                        'biology' =>'Biology',
                        'german' =>'German',
                        'economy' =>'Economy',
                        'english' =>'English',
                        'philosophy' =>'Philosophy',
                        'french' =>'French',
                        'history' =>'History',
                        'freek' =>'Greek',
                        'italian' =>'Italian',
                        'Informatics' =>'Informatics',
                        'Korean' =>'Korean',
                        'Latin' =>'Latin',
                        'Physics' =>'Physics',
                        'Dutch' =>'Dutch',
                        'Portuguese' =>'Portuguese',
                        'Chemistry' =>'Chemistry',
                        'Spanish' =>'Spanish',
                        'Math' =>'Math',
                        'other' =>'Other'
                        ],null, ['class' => 'form-control select-box required select_box_other','required','placeholder' => 'Select What class do you teach?']) }}

                        {{ Form::text('what_you_teach[0][other]', null, ['class' => 'form-control other_box','placeholder' => 'Enter other']) }}


                               </div>

                                <div class="form-group col-xl-3 col-md-3 col-sm-3">
                                    {{ Form::label('Lesson Level') }}
                                    {{ Form::select('what_you_teach[0][lesson_level]', ['Primary_school_groups_3_8' =>'Primary School Groups 3 to 8','Secondary_school' =>'Secondary School','MBO_HBO_WO' =>'MBO / HBO WO','University'=>'University','other' =>'Other'],null, ['class' => 'form-control select-box required select_box_other','required','placeholder' => 'Select Lesson Level']) }}
                                    {{ Form::text('what_you_teach[0][lesson_level_other]', null, ['class' => 'form-control other_box','placeholder' => 'Enter other']) }}

                                </div>
                                <div class="form-group col-xl-2 col-md-2 col-sm-2">
                                    {{ Form::label('Level') }}
                                    {{ Form::select('what_you_teach[0][level]', ['beginner' =>'Beginner','advanced' =>'advanced','expert' =>'Expert','other' =>'Other'],null, ['class' => 'form-control select-box required select_box_other','required','placeholder' => 'Select Level']) }}
                                    {{ Form::text('what_you_teach[0][level_other]', null, ['class' => 'form-control other_box','placeholder' => 'Enter other']) }}
                                </div>



                 </div>

                <div id="additional_what_you_teach_row">

                </div>

                <div class="row">
                <div class="form-group col-sm-12">
                    <a  id="AddWhatYouTeach"  href="javascript:void(0)" class="btn btn-primary" ><i class="fa fa-plus" aria-hidden="true"></i>{{__('Another')}}</a>
                </div>
                </div>



                 <div class="row">
                    <div class="form-group col-xl-6 col-md-6 col-sm-6">
                         {{ Form::checkbox('available_for_online', 'yes', false) ,['class' => 'form-control check-box'] }}
                         {{ Form::label('available_for_online', __("Are you available for lessons via zoom, skype(online)")) }}
                     </div>
                 </div>



                <div class="row">

               <div class="form-group col-sm-12">
                   <div style="float:left">
                        <a href="javascript:void(0)"  onClick="openCity(event, 'tab2' ,'tabb2')" class="btn btn-secondary text-dark">{{__('web.helpers.previous')}}</a>
                    </div>
                    <div style="float:right">
                        <a  onClick="validateTab(3)"  href="javascript:void(0)"  class="btn btn-primary" style="float: right;">{{__('web.helpers.next')}}</a>
                    </div>
               </div>

             </div>
    </div>


    <div class="tabcontent pt-1 disable" id="tab4">

         <div class="custom-form">
                 <div id="message3">{{ __('web.helpers.extra_information') }}
                 <p style="margin: 0;font-size: 14px;">{{ __('web.helpers.ejana_takes_the_protection_of_your_data_seriously') }}</p>
                 </div>
            </div>
                <div class="row">

           <div class="form-group col-xl-6 col-md-6 col-sm-12">
                         {{ Form::label('passport', __('web.helpers.copy_passport_front').':') }}<span class="text-danger">*</span>
                         <div class="custom-file">
                            <input type="file" name="passport_front" id="image2" class="custom-file-input {{ isset($postMetaArray['passport_front_url'])?'':'required'}}">
                            <label class="custom-file-label rounded" name="image2"><i class="mdi mdi-cloud-upload mr-1"></i>Upload Front of ID or Passport</label>
                         </div>
                         <div class="custom-file-preview" id="custom-file-image2" style="display:{{ isset($postMetaArray['passport_front_url'])?'block':'none'}}">
                             <img id="image2_preview" src="{{isset($postMetaArray['passport_front_url'])?$postMetaArray['passport_front_url']:''}}" />
                        </div>
        <div class="form-group col-xl-6 col-md-6 col-sm-6">
         {{ Form::checkbox('passport_front_later', 'yes', false) ,['class' => 'form-control check-box'] }}
         {{ Form::label('passport_front_later', __("web.helpers.i_will_add_my_id_passport_later")) }}
        </div>
           </div>

           <div class="form-group col-xl-6 col-md-6 col-sm-12">
                         {{ Form::label('passport', __('web.helpers.copy_passport_back').':') }}<span class="text-danger">*</span>
                         <div class="custom-file">
                            <input type="file" name="passport_back" id="image22" class="custom-file-input {{ isset($postMetaArray['passport_back_url'])?'':'required'}}">
                            <label class="custom-file-label rounded" name="image22"><i class="mdi mdi-cloud-upload mr-1"></i>Upload Back of ID or Passport</label>
                         </div>
                         <div class="custom-file-preview" id="custom-file-image22" style="display:{{ isset($postMetaArray['passport_back_url'])?'block':'none'}}">
                <img id="image22_preview" src="{{isset($postMetaArray['passport_back_url'])?$postMetaArray['passport_back_url']:''}}" />
                </div>

                <div class="form-group col-xl-6 col-md-6 col-sm-6">
         {{ Form::checkbox('passport_back_later', 'yes',false) ,['class' => 'form-control check-box'] }}
         {{ Form::label('passport_back_later', __("web.helpers.i_will_add_my_id_passport_later")) }}
        </div>


           </div>

           </div>

        <div class="row">



          <div class="form-group col-xl-6 col-md-6 col-sm-12">


            {{ Form::label('have_liability', __('web.helpers.do_you_have_liability_insurance')) }} <a data-toggle="tooltip" title="Add a copy of your liability insurance to your account. This way we know you're covered and that everything is okay if something happens.">?</a><span class="text-danger">*</span><br>
            {{ Form::radio('have_liability', '1',false) ,['class' => 'form-control check-box required','required']}} {{ __('web.helpers.yes') }}
            &nbsp;&nbsp;&nbsp;
            {{ Form::radio('have_liability', '0',true),['class' => 'form-control check-box required','required'] }} {{ __('web.helpers.no') }}


              <div id="have_liability_box" style="display:none">
                    {{ Form::label('have_liability_width', __('web.helpers.with_whoom')) }}
                    {{ Form::text('have_liability_width', null, ['class' => 'form-control']) }}
              {{ Form::label('is_libility', __('web.helpers.please_add_liability_insurance').':') }}
                <div class="custom-file">
                        <input type="file" name="liability_copy" id="image3" class="custom-file-input">
                        <label class="custom-file-label rounded" name="image3"><i class="mdi mdi-cloud-upload mr-1"></i>{{ __('web.helpers.upload_liability_insurance_photo') }}</label>
                </div>
                 <div class="custom-file-preview" id="custom-file-image3" style="display:none">
                  <img id="image3_preview" src="" />
                </div>

               {{ Form::checkbox('liability_copy_later', 'yes', false) ,['class' => 'form-control check-box'] }}
               {{ Form::label('liability_copy_later', __('web.helpers.i_will_add_liability_later')) }}


             </div>
             <div >
               {{ Form::checkbox('is_under18', 'yes', false) ,['class' => 'form-control check-box'] }}
               {{ Form::label('is_under18', __('web.helpers.i_am_under_18_year_old')) }}

               <div id="is_under18_box" style="display:none">
               <p><b>{{ __('web.helpers.if_under_18_text_one') }}</b></p>
               <p><b>{{ __('web.helpers.if_under_18_text_two') }}</b></p>
               </div>
             </div>
            </div>

            </div>




        <div class="row">
            <div class="form-group col-xl-6 col-md-6 col-sm-12">


            {{ Form::label('vog_certificate', __('web.helpers.do_you_have_vog_certificate')) }}<a data-toggle="tooltip" title="The Certificate of Good Conduct may not be older than 3 months! You can apply for a valid VOG via Ejana">?</a><br>
            {{ Form::radio('vog_certificate', '1',false) ,['class' => 'form-control check-box required ','required']}} {{ __('web.helpers.yes') }}
            &nbsp;&nbsp;&nbsp;
            {{ Form::radio('vog_certificate', '0',true),['class' => 'form-control check-box required','required'] }} {{ __('web.helpers.no') }}


              <div id="vog_certificate_box" style="display:none">
                    {{ Form::label('vog_certificate_with', __('web.helpers.with_whoom')) }}
                    {{ Form::text('vog_certificate_with', null, ['class' => 'form-control']) }}

               {{ Form::label('vog_certificate_file', __('web.helpers.add_copy_of_vog_certificate').':') }}
                <div class="custom-file">
                        <input type="file" name="vog_certificate_file" id="image5" class="custom-file-input">
                         <label class="custom-file-label rounded" name="image5"><i class="mdi mdi-cloud-upload mr-1"></i>{{ __('web.helpers.upload_certificate_photo') }}</label>
                 </div>
                 <div class="custom-file-preview" id="custom-file-image5" style="display:none">
                <img id="image5_preview" src="{}" />
                </div>

               {{ Form::checkbox('vog_certificate_later', 'yes', false) ,['class' => 'form-control check-box'] }}
               {{ Form::label('vog_certificate_later', __('web.helpers.i_will_add_vog_certificate_later')) }}


             </div>

              <div id="vog_certificate_box_no">
              <p><b>{{ __("web.helpers.note_for_without_vog_certificate") }}</b></p>
              </div>

             <div >

             </div>
            </div>

        </div>



<div class="row">

         <div class="form-group col-xl-6 col-md-6 col-sm-12">
            {{ Form::label('transport', __('web.helpers.do_you_have_your_own_transport').':') }}<span class="text-danger">*</span><br>
            {{ Form::select('transport[]',['moped_scooter'  => 'Moped/Scooter','car'  => 'Car','other'  => 'Other'],null, ['id'=>'transport','class' => 'form-control select-box required','multiple']) }}
            {{ Form::text('transport_other', null, ['id'=>'transport_other','class' => 'form-control other_box','placeholder'=>'Enter Other']) }}

        </div>
        </div>
            <div class="row">


      <div class="form-group col-xl-6 col-md-6 col-sm-12" >
            {{ Form::label('have_drive_license', __('web.helpers.do_you_have_licence')) }}<span class="text-danger">*</span><br>
            {{ Form::radio('have_drive_license', '1',false) ,['class' => 'form-control check-box required','required']}} {{ __('web.helpers.yes') }}
            &nbsp;&nbsp;&nbsp;
            {{ Form::radio('have_drive_license', '0',true),['class' => 'form-control check-box required','required'] }} {{ __('web.helpers.no') }}

        </div></div>

                <div class="row">

       <div class="form-group col-sm-12">
       <div style="float:left">
            <a href="javascript:void(0)" onClick="openCity(event, 'tab3','tabb3')" class="btn btn-secondary text-dark">{{__('web.helpers.previous')}}</a>
        </div>
        <div style="float:right">
            <a  onClick="validateTab(4)"   class="btn btn-primary" style="float: right;">{{__('web.helpers.next')}}</a>
        </div>
       </div>

     </div>
    </div>


    <div class="tabcontent pt-1 disable" id="tab5">
            <div class="custom-form">
                 <div id="message3">{{ __("web.helpers.motivation_heading") }}</div>
            </div>

       <div class="row">

        <div class="form-group col-xl-6 col-md-6 col-sm-12">
            {{ Form::label('motivation_text', __("web.helpers.motivation").':') }}<span class="text-danger">*</span>
            {{ Form::textarea('motivation_text', null, ['placeholder'=>'Write a motivation','class' => 'form-control address-height required' , 'rows' => '5']) }}
        <p>(This motivation is not visible to others and is targeted for the Ejana)</p>
        </div>
        </div>
                <div class="row">

         <div class="form-group col-xl-6 col-md-6 col-sm-12">
                  {{ Form::label('character_traits', __('web.helpers.what_are_your_character').':') }}<span class="text-danger">*</span>
                  {{ Form::select('character_traits[]',
                  ['patient' =>'Patient' , 'creative' =>'Creative' ,'decently'=>'Decently','packer'=>'Packer','communicative'=>'Communicative','spontaneous'=>'Spontaneous', 'helpful'=>'Helpful','responsible'=>'Responsible','flexible'=>'Flexible','cozy' =>'Cozy','social'=>'Social','social'=>'Social','independent'=>'Independent','caring'=>'Caring','stress_resistant'=>'Stress resistant',
                  'other'=>'Other']
                  , null, ['id'=>'character_traits','class' => 'form-control select-box required','multiple']) }}


                  <div id="character_traits_other_box" style="display:none">
                       {{ Form::text('character_traits_other', null, ['class' => 'form-control','placeholder' => 'Enter other']) }}
                  </div>

        </div>

        </div>
                <div class="row">

         <div class="form-group col-xl-6 col-md-6 col-sm-12">
                  {{ Form::label('afraid_of', __('web.helpers.allergic_or_afraid_of_animals')) }}<span class="text-danger">*</span>
                  {{ Form::select('afraid_of[]',
                  ['no' =>'No' , 'dogs' =>'Dogs' ,'cats'=>'Cats','other'=>'Other']
                  ,null, ['id'=>'afraid_of','class' => 'form-control select-box required','multiple']) }}


          <div id="afraid_of_other_box" style="display:none">
                       {{ Form::text('afraid_of_other', null, ['class' => 'form-control','placeholder' => 'Enter other']) }}
                  </div>

        </div></div>
                <div class="row">



        <div class="form-group col-sm-12">
        <div style="float:left">
            <a href="javascript:void(0)" onClick="openCity(event, 'tab4','tabb4')" class="btn btn-secondary text-dark">{{__('web.helpers.previous')}}</a>
        </div>
        <div style="float:right">
            <a  onClick="validateTab(5)"   class="btn btn-primary" style="float: right;">{{__('web.helpers.next')}}</a>
        </div>
        </div>
     </div>
    </div>


    <div class="tabcontent  disable pt-1 " id="tab6">
            <div class="custom-form">
                 <div id="message3">{{ __("web.helpers.write_your_advertisement_for") }} {{$JobCategoryDetail->name}}, {{ __("web.helpers.this_will_get_you_responses_faster") }} </div>
            </div>

            <div class="row">
                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                    {{ Form::label('advertisement', __("web.helpers.whats_on_offer")) }}<span class="text-danger">*</span>
                    {{ Form::text('advertisement', null, ['placeholder'=>'Title of your ad','class' => 'form-control required','required']) }}
                </div>
            </div>



            <div class="row">


        <div class="form-group col-xl-6 col-md-6 col-sm-12">
            {{ Form::label('advertisement_text', __('web.helpers.write_your_ad')) }}<span class="text-danger">*</span>
            {{ Form::textarea('advertisement_text',null, ['placeholder'=>'Tell us about yourself and your hobbies. This is the most important part of your ad! Take your time.','class' => 'form-control address-height required' , 'rows' => '5']) }}
        </div>
        </div>
        <div class="row">

        <div class="form-group col-xl-6 col-md-6 col-sm-12">
            {{ Form::label('advertisement_available', __('web.helpers.when_will_you_be_available')) }}<span class="text-danger">*</span>
            {{ Form::text('advertisement_available',null, ['class' => 'form-control required pickdate','required']) }}
        </div>
        </div>
        <div class="row">

        <div class="form-group col-xl-6 col-md-6 col-sm-12" onClick="toggleTimeAvailableCalendar()">
            {{ Form::label('time_available', __('web.helpers.what_day_time_are_available').':') }}<span class="text-danger">*</span>
        </div>
        </div>

        <div class="row">

        <div class="form-group col-xl-12 col-md-12 col-sm-12" id="time_available_calendar">

                <div class="calendar">
                <div class="calendar_left">
                    <div class="calendar_top">
                         <div class="calendar_top_1" onClick="prevMonth()"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></div>
                         <div class="calendar_top_2" id="selected_month"> {{ __('web.helpers.month') }} </div>
                         <div class="calendar_top_3" onClick="nextMonth()"> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></div>
                   </div>
                   <input type="hidden" id="selected_month_number">
                   <input type="hidden" id="selected_year_number">
                   <input type="hidden" id="fist_date">
                   <input type="hidden" id="totol_days">
                   <input type="hidden" id="time_available" name="time_available">
                   <input type="hidden" id="date_time_available" name="date_time_available">

                   <div class="calendar_body">

                   <?php $days = ['Mon','Tue','Wed','Thu','Fri','Sat','Sun'];
                   for($d=0;$d<7;$d++){?>
                   <div class="calendar_date_label"><?php echo $days[$d];?></div>
                   <?php } ?>
                   <div id="calendar_dates">

                   </div>


                   </div>
                </div>

                <div class="calendar_right">
                    <div class="calendar_top">
                        <div class="calendar_top_2"> {{ __('web.helpers.select_time_slot') }} </div>
                        <div class="calendar_top_3" style="width: 50px;" onClick="toggleTimeAvailableCalendar()"> <i class="fa fa-check-circle" aria-hidden="true"></i> Save</div>

                        <div class="titmeSlote">From</div>
                        <div class="titmeSlote">To</div>
                        <div class="titmeSloteRight" onClick="toggleTimeSlotes()"><i class="fa fa-check" aria-hidden="true"></i> </div>
                        <div class="calendar_right_inner">



                        <?php for($t=1;$t<24;$t++) {
                        if (0 == $t % 2) {
                        $evenRow ='evenRow';
                        }else {
                        $evenRow ='';
                        }
                        ?>
                        <div class="titmeSloteRow <?php echo $evenRow;?>">
                        <div class="titmeSlote"><?php echo str_pad($t,2,0,STR_PAD_LEFT).':00';?></div>
                        <div class="titmeSlote"><?php echo str_pad(($t+1),2,0,STR_PAD_LEFT).'.00';?></div>
                        <div class="titmeSloteRight"><input onClick="SelectTimeSlotes()" date="<?php echo str_pad($t,2,0,STR_PAD_LEFT).':00';?>-<?php echo str_pad(($t+1),2,0,STR_PAD_LEFT).':00';?>" id="<?php echo str_pad($t,2,0,STR_PAD_LEFT);?>-<?php echo str_pad(($t+1),2,0,STR_PAD_LEFT);?>"  class="time_slotes" type="checkbox"></div>
                       </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>

                </div>

        </div>

    </div>







        <div class="row">

        <div class="form-group col-xl-6 col-md-6 col-sm-12">
                  {{ Form::label('available_for', __('web.helpers.are_you_available_for')) }}<span class="text-danger">*</span>
                  {{ Form::select('available_for[]',['vast'  => 'Vast','flexible'  => 'Flexible','sometimes'  => 'Sometimes','other'  => 'Other'],null, ['id'=>'available_for','class' => 'form-control select-box required select_box_other_multiple','multiple']) }}
                  {{ Form::text('available_for_other', null, ['id'=>'available_for_other','class' => 'form-control other_box','placeholder'=>'Enter Other']) }}

        </div>
        </div>



        <div class="row">


        <div class="form-group col-xl-6 col-md-6 col-sm-12">
            {{ Form::label('hourly_rate', __('web.helpers.hourly_rate').':') }}<span class="text-danger">*</span>
       <div class="input-group">
    <div class="input-group-addon">
      <i class="fas fa-euro-sign"></i>
    </div>
        {{ Form::text('hourly_rate', null, ['class' => 'form-control required','required']) }}

  </div>

        <p><b>{{ __('web.helpers.higher_rate_notes') }} {{$JobCategoryDetail->name}} {{ __('web.helpers.work') }}</b></p>
        </div>

        </div>

        <div class="row">

        <div class="form-group col-sm-12">
        <div style="float:left">
            <a href="javascript:void(0)" onClick="openCity(event, 'tab5' ,'tabb5')" class="btn btn-secondary text-dark">{{__('web.helpers.previous')}}</a>
        </div>
        <div style="float:right">
            <a  onClick="validateTab(6)"  href="javascript:void(0)"  class="btn btn-primary" style="float: right;">{{__('web.helpers.next')}}</a>
        </div>
        </div>
     </div>
    </div>


    <div class="tabcontent pt-1 disable" id="tab7">
           <div class="custom-form">
                 <div id="message3">{{ __('web.helpers.contact_details_heading') }}</div>
            </div>

                <div class="row">

                 <div class="form-group col-xl-6 col-md-6 col-sm-12">

                         {{ Form::label('refrences[0][refrence_name]', __('web.helpers.name').':') }}<span class="text-danger">*</span>
                         {{ Form::text('refrences[0][refrence_name]',null, ['class' => 'form-control required']) }}

                </div>

                </div>
                <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                     {{ Form::label('refrences[0][refrence_email]', __('web.helpers.email').':') }}<span class="text-danger">*</span>
                    {{ Form::email('refrences[0][refrence_email]',null, ['class' => 'form-control required'])}}

                </div>
                </div>
                <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                    {{ Form::label('refrences[0][refrence_phone]', __('web.helpers.phone').':') }}<span class="text-danger">*</span>
                    {{ Form::tel('refrences[0][refrence_phone]', null, ['class' => 'form-control required', 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")','id'=>'refrencePhone'])}}
                </div> </div>
                <div class="row">

                 <div class="form-group col-xl-6 col-md-6 col-sm-12">
                    {{ Form::label('refrences[0][refrence_experiences]', __('web.helpers.describe_your_experiences').':') }}<span class="text-danger">*</span>
                    {{ Form::textarea('refrences[0][refrence_experiences]',null, ['class' => 'form-control required','required','rows' => '5']) }}
                </div>
                </div>

                <div class="row">
                    <div class="form-group col-xl-6 col-md-6 col-sm-12">
                        {{ Form::label('refrences[0][refrence_start_date]', __('web.helpers.start_date')) }}<span class="text-danger">*</span>
                        {{ Form::text('refrences[0][refrence_start_date]',null, ['class' => 'form-control required pickdate','required']) }}
                    </div>

                    <div class="form-group col-xl-6 col-md-6 col-sm-12">
                        {{ Form::label('refrences[0][refrence_end_date]', __('web.helpers.end_date')) }}
                        {{ Form::text('refrences[0][refrence_end_date]',null, ['class' => 'form-control pickdate']) }}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xl-6 col-md-6 col-sm-12">
                        {{ Form::checkbox('refrences[0][refrence_current_position]', 'yes',false) ,['class' => 'form-control check-box'] }}
                        {{ Form::label('refrences[0][refrence_current_position]', __('web.helpers.this_is_my_current_position')) }}
                    </div>
                </div>

                 <div id="additional_reference">

                 </div>

                 <div class="row">
                    <div class="form-group col-xl-6 col-md-6 col-sm-12">
                         <a  id="addNewReference" href="javascript:void(0)" class="btn btn-primary" ><i class="fa fa-plus" aria-hidden="true"></i>  {{__('web.helpers.reference')}}</a>
                    </div>
                 </div>


                <div class="row">

                <div class="form-group col-sm-12">

                <div style="float:left">
                    <a href="javascript:void(0)" onClick="openCity(event, 'tab6' ,'tabb6')" class="btn btn-secondary text-dark">{{__('web.helpers.previous')}}</a>
                </div>
                <div style="float:right">
                    <a onClick="ValidateAndSave(7)" href="javascript:void(0)"  class="btn btn-primary" style="float: right;">{{__('web.helpers.next')}}</a>
                </div>

                </div>

       </div>

    </div>


    <div class="tabcontent pt-1 disable" id="tab_confirm">
           <div class="custom-form">
                 <div id="message3">{{ __('web.helpers.appointments_with_ejana') }}</div>
                 <p><b> {{ __('web.helpers.as_a') }} {{$JobCategoryDetail->name}}, {{ __('web.helpers.i_will') }}</b></p>
            </div>

                <div class="row">

                 <div class="form-group col-xl-12 col-md-12 col-sm-12">
                 <ul>

                       <li>{{ __('web.helpers.heloeprs_declaation_line1') }}</li>
                       <li>{{ __('web.helpers.heloeprs_declaation_line2') }}</li>
                       <li>{{ __('web.helpers.heloeprs_declaation_line3') }}</li>
                       <li>{{ __('web.helpers.heloeprs_declaation_line4') }} </li>
                       <li>{{ __('web.helpers.heloeprs_declaation_line5') }} </li>
                       <li>{{ __('web.helpers.heloeprs_declaation_line6') }} </li>
                       <li>{{ __('web.helpers.heloeprs_declaation_line7') }} </li>
                       <li>{{ __('web.helpers.heloeprs_declaation_line8') }} </li>
                       <li>{{ __('web.helpers.heloeprs_declaation_line9') }} </li>
                       <li>{{ __('web.helpers.heloeprs_declaation_line10') }} </li>
                       <li>{{ __('web.helpers.heloeprs_declaation_line11') }} </li>
                       <li>{{ __('web.helpers.heloeprs_declaation_line12') }} </li>
                       <li>{{ __('web.helpers.heloeprs_declaation_line13') }} </li>
                       <li>{{ __('web.helpers.heloeprs_declaation_line14') }} </li>
                       <li>{{ __('web.helpers.heloeprs_declaation_line15') }} </li>
                </ul>
                </div>

                </div>
                <div class="row">

                <div class="form-group col-xl-12 col-md-12 col-sm-12">
                  <p><b>{{ __('web.helpers.you_declare_that_you_have_completed') }}</b></p>
                </div>
                </div>


                <div class="row">

                <div class="form-group col-xl-3 col-md-3 col-sm-12">
                </div>
                <div class="form-group col-xl-6 col-md-6 col-sm-12 signature_pad rounded shadow">
                  {{ Form::label('full_name', __('web.helpers.full_name').':') }}<span class="text-danger">*</span>
                {{ Form::text('full_name',null, ['class' => 'form-control required','placeholder' =>'Enter your full name']) }}

                 <p><b>{{ __('web.helpers.date')}}</b>: <?php echo date('d-m-Y');?></p>
                 <p><b>{{ __('web.helpers.signature')}}</b></p>
                 <canvas id="colors_sketch"></canvas>
                <div class="tools">
                    <a href="#colors_sketch" data-tool="marker" class="active">Marker</a>
                    <a href="#colors_sketch" data-tool="eraser">Eraser</a>
                </div>
                </div>
                <div class="form-group col-xl-3 col-md-3 col-sm-12">
                <input type="hidden" name="user_signature" id="user_signature">
                </div>

                </div>



                <div class="row">

                <div class="form-group col-xl-3 col-md-3 col-sm-12">
                </div>
                <div class="form-group col-xl-6 col-md-6 col-sm-12" style="text-align: center;">
                         <a onClick="SubmitServiceForm()" href="javascript:void(0)"  class="btn btn-primary">{{__('Send')}}</a>
              </div>
                <div class="form-group col-xl-3 col-md-3 col-sm-12">
                </div>




                </div>

       </div>

    </div>
</div>




<script>


$(":input[type='text']").val('');
$("select").val('');
var allcheckBoxes = $("input[type='checkbox']");
allcheckBoxes.prop("checked", false);


    </script>


