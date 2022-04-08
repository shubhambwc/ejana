
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

    $('input[type=radio][name=registered_childminder]').change(function() {
    	if (this.value == 1) {
    		$('#registered_childminder_box').show();
    	}else{
    		$('#registered_childminder_box').hide();
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

    $('#available_for').on('change', function() {
	$('#available_for_other').hide();
	$("#available_for :selected").each(function() {
            if( this.value =='other'){
  			$('#available_for_other').show();
  		}
        });


	});

	$('#offering_shelteras').on('change', function() {
	$('#offering_shelteras_other').hide();
	$("#offering_shelteras :selected").each(function() {
            if( this.value =='other'){
  			$('#offering_shelteras_other').show();
  		}
        });


	});



	$('#competent_option').on('change', function() {
	$('#competent_option_other_box').hide();
	$("#competent_option :selected").each(function() {
            if( this.value =='other'){
  			$('#competent_option_other_box').show();
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

	$('#highest_education').on('change', function() {
  		if( this.value =='other'){
  			$('#highest_education_other_box').show();
  		}else{
  			$('#highest_education_other_box').hide();
  		}
	});


   $('#preferred_reception_location').on('change', function() {
  		if( this.value =='Eigenhuis'){
  			$('#have_pets_box').show();
  		}else{
  			$('#have_pets_box').hide();
  			$('#have_pets_text_box').hide();
  		}
	});


	$('#have_pets').on('change', function() {
  		if( this.value =='yes'){
  			$('#have_pets_text_box').show();
  		}else{
  			$('#have_pets_text_box').hide();


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



$('#pluses').on('change', function() {
	$('#pluses_other').hide();
	$("#pluses :selected").each(function() {
            if( this.value =='other'){
  			$('#pluses_other').show();
  		}
        });
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
                    {{ Form::radio('gender', 'female',false)}} {{ __('web.helpers.female') }}
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
                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('preferred_reception_location', __('web.helpers.preferred_reception location').':') }}<span class="text-danger">*</span>
                   {{ Form::select('preferred_reception_location', ['Eigenhuis'=>'Eigenhuis','With_The_Parent'=>'With The Parent','no_preference'=>'No preference'] ,null, ['class' => 'form-control select-box required','placeholder' => 'Select web.helpers.preferred_reception location ']) }}
                </div>
    </div>

    <div class="row">
                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('registered_childminder', __('Are you already registered as a childminder').':') }}<span class="text-danger">*</span><br>
                    {{ Form::radio('registered_childminder', '1',false)  ,['required']}} {{ __('web.helpers.yes') }}
                &nbsp;&nbsp;&nbsp;
                {{ Form::radio('registered_childminder', '0',true),[ 'class' => 'form-control check-box required','required'] }} {{ __('web.helpers.no') }}

                </div>
    </div>

    <div class="row" id="registered_childminder_box" style="display:none">
                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('lrkp_number', __('Lrkp number').':') }}<span class="text-danger">*</span>
                    {{ Form::text('lrkp_number', null, ['class' => 'form-control required','required']) }}
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
                      {{ Form::label('Experience', __('web.helpers.experience').':') }}<span class="text-danger">*</span>
                      {{ Form::select('exprience',
                      ['less_1year' =>'<1 year of experience' , '1year' =>'1 year of experience' ,'2year'=>'2 year of experience','3year'=>'3 year of experience','4year'=>'4 year of experience','5'=>'5 year of experience','6'=>'6 year of experience','7'=>'7 year of experience','8'=>'8 year of experience','9'=>'9 year of experience','10+'=>'10+ year of experience']
                      ,null, ['id'=>'helpers_exprience','class' => 'form-control select-box required','required','placeholder' => 'How many years of experience do you have as a childminder?']) }}
                </div>
                </div>





                <div class="row">

               <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('age_you_catch_children', __('At what age do you catch children?').':') }}<span class="text-danger">*</span>
                      {{ Form::select('age_you_catch_children',
                     ['0-4' =>'0-4 years' , '4-12' =>'4-12 years' ,'0-12'=>'0-12 years']
                      ,null, ['class' => 'form-control select-box required','required','multiple']) }}
                </div>
                </div>
                <div class="row">

               <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('completed_training', __('Completed training').':') }}<span class="text-danger">*</span>
                      {{ Form::textarea('completed_training', null, ['class' => 'form-control required','row'=>'5']) }}
                </div>

                </div>


                <div class="row">

               <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('completed_courses', __('Completed courses').':') }}<span class="text-danger">*</span>
                      {{ Form::textarea('completed_courses', null, ['class' => 'form-control required','row'=>'5']) }}
                </div>

                </div>

                <div class="row">



               <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('pluses', __('Pluses').':') }}<span class="text-danger">*</span>
                      {{ Form::select('pluses[]',
                      ['does_not_apply'=>'Does not apply',
                      'Plan activities' =>'Plan activities' ,
                      'tinkering' =>'Tinkering' ,
                      'cook'=>'Cook',
                      'light_domestic_work'=>'Light domestic work',
                      'help_with_homework'=>'Help with homework',
                      'read_aloud'=>'Read Aloud',
                      'registered_in_th_LRKP'=>'Registered in the LRKP',
                      'other'=>'Other']
                      ,null, ['id'=>'pluses','class' => 'form-control select-box required','required','multiple']) }}
                       {{ Form::text('pluses_other', null, ['id'=>'pluses_other','class' => 'form-control other_box','placeholder'=>'Enter Other']) }}

                </div>
                </div>

                <div class="row" id="have_pets_box" style="display:none">



               <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('have_pets', __('Do you have pets of your own home?').':') }}<a href="#" class="tooltip_icon" data-toggle="tooltip" title="Only applies if your childminder works in your own home">?</a>
                      {{ Form::select('have_pets',
                      ['no'=>'No',
                      'yes' =>'Yes' ,
                      'not_applicable' =>'Not applicable'
                      ]
                      ,null, ['id'=>'have_pets','class' => 'form-control select-box','placeholder'=>'Select']) }}

                </div>
                </div>

                <div class="row" id="have_pets_text_box" style="display:none">
                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                        {{ Form::label('have_pets_text', __('What pets do you have?').':') }}<a href="#" class="tooltip_icon" data-toggle="tooltip" title="Indicate which pets you have and how many">?</a>
                       {{ Form::text('have_pets_text', null, ['id'=>'have_pets_text','class' => 'form-control']) }}

                </div>

                </div>



                 <div class="row">

               <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('afraid_of', __('web.helpers.allergic_or_afraid_of_animals').':') }}<span class="text-danger">*</span>
                      {{ Form::select('afraid_of[]',
                      ['no' =>'No' , 'dogs' =>'Dogs' ,'cats'=>'Cats','other'=>'Other']
                      ,null, ['id'=>'afraid_of','class' => 'form-control select-box required','multiple']) }}

                <div id="afraid_of_other_box" style="display:none">
                       {{ Form::text('afraid_of_other', null, ['class' => 'form-control','placeholder' => 'Enter other']) }}
                  </div>

                </div>
                </div>

                <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('remark', __('Remark').':') }}<span class="text-danger">*</span>
                      {{ Form::textarea('remark', null, ['class' => 'form-control required','row'=>'5']) }}
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




    <div class="tabcontent  disable pt-1 " id="tab4">
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
                  {{ Form::label('offering_shelteras', __('Are you offering shelteras?')) }}<span class="text-danger">*</span>
                  {{ Form::select('offering_shelteras[]',
                    [
                               'permanent_care'  => 'Permanent Care)',
                               'Flexible childcare'  => 'Flexible childcare',
                               'other'  => 'Other',
                              ]
                  ,null, ['id'=>'offering_shelteras','class' => 'form-control select-box required','multiple']) }}
          {{ Form::text('offering_shelteras_other', null, ['id'=>'offering_shelteras_other','class' => 'form-control other_box','placeholder'=>'Enter Other']) }}

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
            <a href="javascript:void(0)" onClick="openCity(event, 'tab3' ,'tabb3')" class="btn btn-secondary text-dark">{{__('web.helpers.previous')}}</a>
        </div>
        <div style="float:right">
            <a  onClick="ValidateAndSave(6)"  href="javascript:void(0)"  class="btn btn-primary" style="float: right;">{{__('web.helpers.next')}}</a>
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


