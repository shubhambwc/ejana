
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

    $('input[type=radio][name=have_tools_supplies]').change(function() {
    	if (this.value == 1) {
    		$('#have_tools_supplies_yes').show();
    	}else{
    		$('#have_tools_supplies_yes').hide();
    	}

    });





	$('#competent_option_bh').on('change', function() {
	$('#competent_option_other_box').hide();
	$("#competent_option_bh :selected").each(function() {
            if( this.value =='other'){
  			$('#competent_option_other_box').show();
  		}
        });
	});

	$('#type_of_assistance').on('change', function() {
	$('#type_of_assistance_other').hide();
	$("#type_of_assistance :selected").each(function() {
            if( this.value =='other'){
  			$('#type_of_assistance_other').show();
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

	$('#type_of_property').on('change', function() {
  		if( this.value =='other'){
  			$('#type_of_property_other').show();
  		}else{
  			$('#type_of_property_other').hide();
  		}
	});

	$('#type_of_device_need').on('change', function() {
  		if( this.value =='other'){
  			$('#type_of_device_need_other').show();
  		}else{
  			$('#type_of_device_need_other').hide();
  		}
	});

	$('#operating_systems_need').on('change', function() {
  		if( this.value =='other'){
  			$('#operating_systems_need_other').show();
  		}else{
  			$('#operating_systems_need_other').hide();
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








                    $("#AddNewChild").click(function(){


                     var addChild = $('.new_child').length+1;
                     var newChildHtml = '<div class="additional_child_row new_child" id="add_child'+addChild+'">';

                     newChildHtml +='<div class="row">';
                     newChildHtml +='<div class="form-group col-xl-6 col-md-6 col-sm-12"><label for="child_name">Name</label>';
                     newChildHtml +='<input class="form-control required" name="child[0][name]" type="text" id="child['+addChild+'][name]">';
                     newChildHtml +='</div>';
                     newChildHtml +='</div>';

                     newChildHtml +='<div class="row">';
                     newChildHtml +='<div class="form-group col-xl-6 col-md-6 col-sm-12"><label for="child_name">Gender</label><br>';
                     newChildHtml +='<input checked="checked" name="child['+addChild+'][gender]" type="radio" value="male" id="child[0][gender]"> Male &nbsp;&nbsp;&nbsp;';
                     newChildHtml +='<input name="child['+addChild+'][gender]" type="radio" value="female" id="child[0][gender]"> Female';
                     newChildHtml +='</div>';
                     newChildHtml +='</div>';

                     newChildHtml +='<div class="row">';
                     newChildHtml +='<div class="form-group col-xl-6 col-md-6 col-sm-12"><label for="child_name">Birth Date</label>';
                     newChildHtml +='<input class="form-control required userbirthDate" autocomplete="off" name="child['+addChild+'][dob]" type="text">';
                     newChildHtml +='</div>';

                     newChildHtml +='<div class="col-xl-2 col-md-2 col-sm-12" style="margin-top:20px;">';
                     newChildHtml +='<a id="'+addChild+'" href="javascript:void(0)" class="btn btn-primary remove_icon remove-child" style="margin-top:10px;"><i class="fa fa-minus" aria-hidden="true"></i></a>';
                     newChildHtml +='</div>';

                     newChildHtml +='</div>';




                     newChildHtml +='</div>';


                    $('#additional_child').append(newChildHtml);
                     $( ".userbirthDate" ).datepicker({
                        dateFormat: 'dd-mm-yy',
                        maxDate: 'today',
                     });

                   });

                   $('#additional_child').on('click','.remove-child',function(){
                     var id = this.id;
                       $("#add_child" + id).remove();
                    });




                    $('#additionalWishLang').on('click','.remove-wlang',function(){
                     var id = this.id;
                       $("#add_wish_lang" + id).remove();
                    });


                    $("#AddNewWishLanguage").click(function(){


                     var addLang = $('.additional_wlang_row').length+1;
                     var newLangHtml = '<div  class="additional_wlang_row row" id="add_wish_lang'+addLang+'">';
                     newLangHtml +='<div class="form-group col-xl-6 col-md-6 col-sm-12"><label for="lang_name">Langauge</label>';
                     newLangHtml +='<select class="form-control select-box" required=""  name="Other_lang['+addLang+'][name]">';
                     newLangHtml +='<option value="">Select Langauge</option><option value="1">English</option><option value="2">   French</option><option value="3">German</option><option value="4">Gujarati</option><option value="5">Hindi</option><option value="6">Italian</option><option value="7">Nepali</option><option value="8">Russian</option><option value="9">Dutch</option>';
                     newLangHtml +='</select>';
                     newLangHtml +='</div>';



                     newLangHtml +='<div class="col-xl-2 col-md-2 col-sm-12" style="margin-top:20px;">';
                     newLangHtml +='<a id="'+addLang+'" href="javascript:void(0)" class="btn btn-primary remove_icon remove-wlang" style="margin-top:10px;"><i class="fa fa-minus" aria-hidden="true"></i></a>';
                     newLangHtml +='</div>';

                     newLangHtml +='</div>';


                    $('#additionalWishLang').append(newLangHtml);

                   });


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




    <div class="tabcontent pt-1" id="tab1">
    <div class="custom-form">
         <div id="message3">Fill in your details as much as possible.</div>
    </div>

    <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::hidden('service_id',$serviceId) }}
                    {{ Form::label('dob', __('messages.candidate.birth_date').':') }}<a href="#" class="tooltip_icon" data-toggle="tooltip" title="We ask for your date of birth to verify that you are old enough. Only your age will be visible on your profile.">?</a><span class="text-danger">*</span>
                    {{ Form::text('dob', null, ['class' => 'form-control required','id' => 'userbirthDate','autocomplete' => 'off']) }}
                </div>
    </div>
    <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('gender', __('messages.candidate.gender').':') }}<span class="text-danger">*</span></br>
                    {{ Form::radio('gender', 'male',"checked") }} {{ __('messages.common.male') }} &nbsp;&nbsp;&nbsp;
                    {{ Form::radio('gender', 'female',"" )}} {{ __('messages.common.female') }}
                </div>
    </div>
    <div class="row">
                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                    {{ Form::label('Native Language') }}<span class="text-danger">*</span>
                    {{ Form::select('mother_lang_id', $data['language'],null, ['class' => 'form-control select-box required','placeholder' => 'Select Langauge','required']) }}
                </div>
    </div>
    <div class="row">

                  <!-- add lang section -->
                       <div  class="additional_lang_row" style="display: inline-flex;">
                               <div class="form-group col-xl-6 col-md-5 col-sm-6">
                                    {{ Form::label('Other_lang[0][name]', __('Other Spoken Language').':') }}
                                    {{ Form::select('Other_lang[0][name]', $data['language'],null, ['class' => 'form-control select-box','placeholder' => 'Select Langauge']) }}
                               </div>

                                <div class="form-group col-xl-4 col-md-4 col-sm-4">
                                    {{ Form::label('Langauge Level') }}
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
                    {{ Form::label('phone', __('Phone No.')) }}<span class="text-danger">*</span><br>
                    {{ Form::text('phone',null,
                     ['class' => 'form-control required','required','id'=>'phoneRefNumber']) }}
                </div>
        </div>

        <div class="row">
                  <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('address', __('messages.company.address').':') }}<span class="text-danger">*</span>
                    {{ Form::text('address', null, ['class' => 'form-control required','required']) }}
                </div>
    </div>

    <div class="row">
                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('zip_code', __('Postal Code').':') }}<span class="text-danger">*</span>
                    {{ Form::text('zip_code', null, ['class' => 'form-control required','required','maxlength' => 6]) }}
                </div>
    </div>

    <div class="row">
                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('place', __('Place').':') }}<span class="text-danger">*</span>
                    {{ Form::text('place', null, ['class' => 'form-control required','required']) }}
                </div>
    </div>

    <div class="row">
                <!-- Submit Field -->
               <div class="form-group col-sm-12">
                 <div style="float:left">
                    <a href="{{ route('candidate.selectservice',$ownerId) }}" class="btn btn-secondary text-dark">{{__('messages.common.cancel')}}</a>
                </div>
                 <div  style="float:right">
                    <a  onClick="validateTab(1)"  class="btn btn-primary" style="float: right;">{{__('Next')}}</a>
                </div>
               </div>

</div>


    </div>




    <div class="tabcontent pt-1 disable" id="tab2">
            <div class="custom-form">
                 <div id="message3">Fill in your {{$JobCategoryDetail->name}} information , this will make you screech faster reactions</div>
            </div>
                <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('date_need', __('When do you need computer help?').':') }}<span class="text-danger">*</span>
                      {{ Form::text('date_need', null, ['class' => 'form-control required pickdate']) }}

                </div>
                </div>





                 <div class="row">

               <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('type_of_assistance', __('Type of computer assistance').':') }}<a href="#" class="tooltip_icon" data-toggle="tooltip" title="One-off, Fixed days, Flexible days">?</a><span class="text-danger">*</span>
                      {{ Form::select('type_of_assistance[]',
                      ['Vast' =>'Vast' ,
                      'Flexible' =>'Flexible' ,
                      'Occasionally or once in a while'=>'Occasionally or once in a while',
                      'other'=>'Other'
                      ]
                      ,null, ['id'=>'type_of_assistance','class' => 'form-control select-box required','multiple']) }}
                 {{ Form::text('type_of_assistance_other',null, ['id'=>'type_of_assistance_other','class' => 'form-control other_box','placeholder' => 'Enter Other']) }}

                </div>
                </div>



                 <div class="row">

        <div class="form-group col-xl-6 col-md-6 col-sm-12" onClick="toggleTimeAvailableCalendar()">
            {{ Form::label('time_available', __('What days and times').':') }}<span class="text-danger">*</span>
        </div>
        </div>

        <div class="row">

        <div class="form-group col-xl-12 col-md-12 col-sm-12" id="time_available_calendar">

                <div class="calendar">
                <div class="calendar_left">
                    <div class="calendar_top">
                         <div class="calendar_top_1" onClick="prevMonth()"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></div>
                         <div class="calendar_top_2" id="selected_month">Month</div>
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
                        <div class="calendar_top_2">Select Time Slot</div>
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

               <div class="form-group col-sm-12">
                   <div style="float:left">
                        <a href="javascript:void(0)"  onClick="openCity(event, 'tab1' ,'tabb1')" class="btn btn-secondary text-dark">{{__('Previous')}}</a>
                    </div>
                    <div style="float:right">
                        <a  onClick="validateTab(2)"  href="javascript:void(0)"  class="btn btn-primary" style="float: right;">{{__('Next')}}</a>
                    </div>
               </div>

             </div>
    </div>


    <div class="tabcontent pt-1 disable" id="tab3">

           <div class="custom-form">
                 <div id="message3">Additional information for {{$JobCategoryDetail->name}}</div>
            </div>

             <div class="row">

               <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('experience', __('Experience').':') }}<span class="text-danger">*</span>
                      {{ Form::select('experience',
                     ['<1 year of experience' =>'<1 year of experience' ,
                     '1 year of experience' =>'1 year of experience' ,
                     '2 years of experience '=>'2 years of experience ',
                     '3 years of experience'=>'3 years of experience',
                     '4 years of experience'=>'4 years of experience',
                     '5 years of experience'=>'5 years of experience',
                     '6 years of experience'=>'6 years of experience',
                     '7 years of experience'=>'7 years of experience',
                     '8 years of experience'=>'8 years of experience',
                     '9 years of experience'=>'9 years of experience',
                     '+10 years of experience'=>'+10 years of experience']
                      ,null, ['class' => 'form-control select-box required','placeholder'=>'How many years do you want your helpers to have?']) }}
                </div>
            </div>


 <div class="row">
                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('type_of_device_need', __('What type of device').':') }}<span class="text-danger">*</span>
                      {{ Form::select('type_of_device_need',
                      ['Mobile_phone' =>'Mobile phone','PC_Laptop' =>'PC/Laptop','Tablet'=>'Tablet','Accessories'=>'Accessories(printer, scanner, router, etc.)','other'=>'Other']
                      ,null, ['id'=>'type_of_device_need','class' => 'form-control select-box select_box_other','placeholder' => 'Select device']) }}
                      {{ Form::text('type_of_device_need_other', null, ['id'=>'type_of_device_need_other','class' => 'form-control other_box','placeholder' => 'Enter other']) }}

                </div>

                 <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('operating_systems_need', __('Operating System').':') }}<span class="text-danger">*</span>
                      {{ Form::select('operating_systems_need',
                      ['android' =>'Android' , 'iOS' =>'iOS' ,'macOS'=>'macOS','Windows'=>'Windows','other'=>'Other']
                      ,null, ['id'=>'operating_systems_need','class' => 'form-control select-box select_box_other','placeholder' => 'Select OS']) }}
                     {{ Form::text('operating_systems_need_other', null, ['id'=>'operating_systems_need_other','class' => 'form-control other_box','placeholder' => 'Enter other']) }}

                </div>


                </div>







            <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('have_tools_supplies', __('Do you have all the tools/supplies yourself').':') }}<span class="text-danger">*</span></br>
                    {{ Form::radio('have_tools_supplies', '1',false),['class' => 'form-control check-box required']}} {{ __('Yes') }}
                    &nbsp;&nbsp;&nbsp;
                    {{ Form::radio('have_tools_supplies', '0',true),['class' => 'form-control check-box required'] }} {{ __('No') }}

                </div>
             </div>
             <div class="row" id="have_tools_supplies_yes" style="display:none">

                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('what_tools', __('What tools').':') }}<span class="text-danger">*</span></br>
                    {{ Form::text('what_tools', null, ['id'=>'what_tools','class' => 'form-control']) }}
                </div>
             </div>




             <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('other_wish', __('Other wish').':') }}<a href="#" class="tooltip_icon" data-toggle="tooltip" title="Do you have any other wishes that have not yet been mentioned?">?</a>
                      {{ Form::textarea('other_wish', null, ['class' => 'form-control','row'=>'5']) }}
                </div>

            </div>

            <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('remark', __('Comments').':') }}<a href="#" class="tooltip_icon" data-toggle="tooltip" title="Do you have any comments that are important for the helper, for example: prefer not to smoke or rather someone who is afraid of animals or has difficulty walking">?</a><span class="text-danger">*</span>
                      {{ Form::textarea('remark', null, ['class' => 'form-control required','row'=>'5','placeholder'=>"E.g.: we have a dog/prefer not a smoker"]) }}
                </div>

            </div>







       <div class="row">

       <div class="form-group col-sm-12">
       <div style="float:left">
            <a href="javascript:void(0)" onClick="openCity(event, 'tab2','tabb2')" class="btn btn-secondary text-dark">{{__('Previous')}}</a>
        </div>
        <div style="float:right">
            <a  onClick="validateTab(3)"   class="btn btn-primary" style="float: right;">{{__('Next')}}</a>
        </div>
       </div>

     </div>
    </div>


    <div class="tabcontent  disable pt-1 " id="tab4">
            <div class="custom-form">
                 <div id="message3">Write your Advertisement for {{$JobCategoryDetail->name}}, this will get you responses faster. </div>
            </div>

            <div class="row">
                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                    {{ Form::label('advertisement', __("Title of your ad")) }}<span class="text-danger">*</span>
                    {{ Form::text('advertisement', null, ['placeholder'=>'Title of your ad','class' => 'form-control required','required']) }}
                </div>
            </div>



            <div class="row">


        <div class="form-group col-xl-6 col-md-6 col-sm-12">
            {{ Form::label('advertisement_text', __('Write your ad')) }}<span class="text-danger">*</span>
            {{ Form::textarea('advertisement_text',null, ['placeholder'=>'Tell us about yourself and your hobbies. This is the most important part of your ad! Take your time.','class' => 'form-control address-height required' , 'rows' => '5']) }}
        </div>
        </div>

        <div class="row">

        <div class="form-group col-sm-12">
        <div style="float:left">
            <a href="javascript:void(0)" onClick="openCity(event, 'tab3' ,'tabb3')" class="btn btn-secondary text-dark">{{__('Previous')}}</a>
        </div>
        <div style="float:right">
            <a  onClick="validateTab(4)"  href="javascript:void(0)"  class="btn btn-primary" style="float: right;">{{__('Next')}}</a>
        </div>
        </div>
     </div>
    </div>

    <div class="tabcontent pt-1 disable" id="tab5">
    <div class="custom-form">
         <div id="message3">Complete your profile, so you will receive requests faster that suit you better..</div>

    </div>

        <div class="row">
             <div class="form-group col-xl-12 col-md-12 col-sm-12">
                <p><b>A photo is indispensable!</b></p>
                <p><b>Tips <span class="text-danger">*</span></b> Choose a clear photo where only your face is in thepicture, without using filters.</p>
            </div>
        </div>
        <div class="row">
        <div class="form-group col-xl-6 col-md-6 col-sm-6">
                {{ Form::label('image1', __("Profile picture")) }}
                <div class="custom-file">
                    <input type="file" name="profile_pictures" class="custom-file-input required" id="image1">
                    <label class="custom-file-label rounded" name="image1"><i class="mdi mdi-cloud-upload mr-1"></i> Upload Profile Image</label>
                </div>
                <div class="custom-file-preview" id="custom-file-image1" style="display:none">
                     <img id="image1_preview" src="" />
                </div>
        </div>
        </div>

        <div class="row">
        <div class="form-group col-xl-6 col-md-6 col-sm-6">
         {{ Form::checkbox('image1_later', 'yes', false) ,['class' => 'form-control check-box'] }}
         {{ Form::label('image1_later', __("I'll add my photo later")) }}
        </div>
        </div>

        <div class="row" id="image1_later_popup" style="display:none">
             <div class="form-group col-xl-12 col-md-12 col-sm-12">
                <p><b>Please note, a profile without a photo has almost no chance of being selected</b></p>
            </div>
        </div>




        <div class="row">
             <!-- Submit Field -->
           <div class="form-group col-sm-12">
             <div style="float:left">
                <a href="javascript:void(0)" onClick="openCity(event, 'tab4','tabb4')" class="btn btn-secondary text-dark">{{__('Previous')}}</a>
            </div>
             <div  style="float:right">
                <a  onClick="ValidateAndSave(5)" href="javascript:void(0)" class="btn btn-primary" style="float: right;">{{__('Next')}}</a>
            </div>
            </div>

        </div>
    </div>


    <div class="tabcontent pt-1 disable" id="tab_confirm">
           <div class="custom-form">
                 <div id="message3">Appointments with EJohn</div>
                 <p><b>As a requester, I will</b></p>
            </div>

                <div class="row">

                 <div class="form-group col-xl-12 col-md-12 col-sm-12">
                 <ul>
                  <li>Update my ad and availability regularly</li>
                  <li>Cancel scheduled appointment only within 24 hours</li>
                  <li>The helper(s) transfer the mandatory fee due immediately unless otherwise indicated in writing</li>
                  <li>Do not accept payments or reservations outside the platform</li>
                  <li>It is agreed that Ejana shall carry out a sample check</li>
                  <li>The helper(s) do not perform any work that may endanger them</li>

                </ul>
                </div>

                </div>
                <div class="row">

                <div class="form-group col-xl-12 col-md-12 col-sm-12">
                  <p><b>You declare that you have completed the registration form completely truthfully</b></p>
                </div>
                </div>


                <div class="row">

                <div class="form-group col-xl-3 col-md-3 col-sm-12">


                </div>
                <div class="form-group col-xl-6 col-md-6 col-sm-12 signature_pad rounded shadow">
                {{ Form::label('full_name', __('Full Name').':') }}<span class="text-danger">*</span>
                {{ Form::text('full_name',null, ['class' => 'form-control required','placeholder' =>'Enter your full name']) }}

                 <p><b>Date</b>: <?php echo date('d-m-Y');?></p>
                 <p><b>Signature</b></p>
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



