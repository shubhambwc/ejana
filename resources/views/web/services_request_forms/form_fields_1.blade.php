
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

    $('input[type=radio][name=need_extra_care]').change(function() {
    	if (this.value == 1) {
    		$('#need_extra_care_box').show();
    	}else{
    		$('#need_extra_care_box').hide();
    	}

    });

    $('input[type=radio][name=extra_chores]').change(function() {
    	if (this.value == 1) {
    		$('#extra_chores_yes_box').show();
    	}else{
    		$('#extra_chores_yes_box').hide();
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

	$('#type_of_care').on('change', function() {
  		if( this.value =='other'){
  			$('#type_of_care_other').show();
  		}else{
  			$('#type_of_care_other').hide();
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

   $('#extra_chores_yes').on('change', function() {

	    $('#extra_chores_yes_other').hide();
	    $("#extra_chores_yes :selected").each(function() {
            if( this.value =='other'){
  			$('#extra_chores_yes_other').show();
  		}
        });
   });

    $('#preferred_reception').on('change', function() {

	    $('#preferred_reception_other').hide();
	    $("#preferred_reception :selected").each(function() {
            if( this.value =='other'){
  			$('#preferred_reception_other').show();
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

	 $('#have_pets').on('change', function() {
	$('#have_pets_other').hide();
	$("#have_pets :selected").each(function() {

	console.log(this.value)
            if( this.value =='other'){
  			$('#have_pets_other').show();
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
                    $('#additionalWishLang .select-box').select2();

                   });


                   $("#AddNewExtraCareChild").click(function(){


                     var addChild = $('.additional_need_extra_care_box').length+1;
                     var newLangHtml = '<div  class="additional_need_extra_care_box" id="additional_need_extra_care_box'+addChild+'">';
                     newLangHtml +='<div class="row"><div class="form-group col-xl-6 col-md-6 col-sm-12"><label for="need_extra_care_child">Like what</label>';
                     newLangHtml +='<input class="form-control" name="need_extra_care_child['+addChild+'][like_what]" type="text">';
                     newLangHtml +='</div></div>';

                     newLangHtml +='<div class="row"><div class="form-group col-xl-6 col-md-6 col-sm-12"><label for="need_extra_care_child">The name of the child</label>';
                     newLangHtml +='<input class="form-control" name="need_extra_care_child['+addChild+'][name]" type="text">';
                     newLangHtml +='</div>';


                     newLangHtml +='<div class="col-xl-2 col-md-2 col-sm-12" style="margin-top:20px;">';
                     newLangHtml +='<a id="'+addChild+'" href="javascript:void(0)" class="btn btn-primary remove_icon remove_additional_need_extra_care_box" style="margin-top:10px;"><i class="fa fa-minus" aria-hidden="true"></i></a>';
                     newLangHtml +='</div></div>';

                     newLangHtml +='</div>';


                    $('#additional_need_extra_care_box').append(newLangHtml);

                   });

                    $('#additional_need_extra_care_box').on('click','.remove_additional_need_extra_care_box',function(){
                     var id = this.id;
                       $("#additional_need_extra_care_box" + id).remove();
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
                    <div id="message3">Add your child(ren) </div>
                </div>


                <div class="row">
                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('child[0][name]', __('Child name').':') }}<span class="text-danger">*</span>
                      {{ Form::text('child[0][name]', null, ['class' => 'form-control required']) }}
                </div>
                </div>

                <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('child[0][gender]', __('messages.candidate.gender').':') }}<span class="text-danger">*</span></br>
                    {{ Form::radio('child[0][gender]', 'male',"checked") }} {{ __('messages.common.male') }} &nbsp;&nbsp;&nbsp;
                    {{ Form::radio('child[0][gender]', 'female',"" )}} {{ __('messages.common.female') }}
                </div>
                </div>

                <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('child[0][dob]', __('messages.candidate.birth_date').':') }}<span class="text-danger">*</span>
                    {{ Form::text('child[0][dob]', null, ['class' => 'form-control required userbirthDate','autocomplete' => 'off']) }}
                </div>
                </div>

                <div id="additional_child">

                </div>


                <div class="row form-group col-sm-12">
                    <a  id="AddNewChild"  href="javascript:void(0)" class="btn btn-primary" ><i class="fa fa-plus" aria-hidden="true"></i> {{__('Child')}}</a>
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
                 <div id="message3">Fill in your reception information , this will make you screech faster reactions </div>
            </div>
                <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('date_childcare_need', __('When do you need childcare?').':') }}<span class="text-danger">*</span>
                      {{ Form::text('date_childcare_need', null, ['class' => 'form-control required pickdate']) }}

                </div>
                </div>





                <div class="row">

               <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('type_of_care', __('Type of care').':') }}<a href="#" class="tooltip_icon" data-toggle="tooltip" title="Fixed days, Flexible days, Occasionally, Emergency babysitter">?</a><span class="text-danger">*</span>
                      {{ Form::select('type_of_care',
                      ['Regular babysitter' =>'Regular babysitter' ,
                      'Flexible babysitter' =>'Flexible babysitter' ,
                      'Occasionally(or once)'=>'Occasionally(or once)',
                      'Spoedoppas'=>'Spoedoppas',
                      'other'=>'Other'
                      ]
                      ,null, ['id'=>'type_of_care','class' => 'form-control select-box required','placeholder'=>'You can adjust your schedule at any time.']) }}
                     {{ Form::text('type_of_care_other', null, ['id'=>'type_of_care_other','class' => 'form-control other_box','placeholder'=>'Enter Other']) }}

                </div>
                </div>
                <div class="row">

               <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('preferred_reception', __('Preferred reception').':') }}<span class="text-danger">*</span>
                      {{ Form::select('preferred_reception[]',
                      ['Day time care;' =>'Day time care;' ,
                      'After-school car' =>'After-school car' ,
                      'Evening care'=>'Evening care',
                      'Night care;'=>'Night care',
                      'Weekends;'=>'Weekends',
                      'Feestdag(s) reception'=>'Feestdag(s) reception',
                      'other'=>'Other'
                      ]
                      , null, ['id'=>'preferred_reception','class' => 'form-control select-box required','multiple']) }}
                      {{ Form::text('preferred_reception_other', null, ['id'=>'preferred_reception_other','class' => 'form-control other_box','placeholder'=>'Enter Other']) }}

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
                        <a href="javascript:void(0)"  onClick="openCity(event, 'tab2' ,'tabb2')" class="btn btn-secondary text-dark">{{__('Previous')}}</a>
                    </div>
                    <div style="float:right">
                        <a  onClick="validateTab(3)"  href="javascript:void(0)"  class="btn btn-primary" style="float: right;">{{__('Next')}}</a>
                    </div>
               </div>

             </div>
    </div>


    <div class="tabcontent pt-1 disable" id="tab4">

           <div class="custom-form">
                 <div id="message3">Fill in your extra information, this will give you requests that suit you better</div>
            </div>

           <div class="row">

               <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('have_pets', __('Do you have pets').':') }}<span class="text-danger">*</span>
                      {{ Form::select('have_pets[]',
                     ['dog' =>'Dog' ,
                     'cat' =>'Cat' ,
                     'other'=>'Other animal',
                     'no'=>'No']
                      ,null, ['id'=>'have_pets', 'class' => 'form-control select-box required','multiple']) }}
                    {{ Form::text('have_pets_other', null, ['id'=>'have_pets_other','class' => 'form-control other_box','placeholder'=>'Enter Other']) }}


                </div>
            </div>

              <div class="row">
                    <div class="form-group col-xl-6 col-md-6 col-sm-12">
                          {{ Form::label('wish', __('Wish').':') }}
                   </div>
                </div>



           <div class="row">
				<div class="col-md-2">
				    {{ Form::label('experience', __('Experience').':') }} <span id="span_minimum_exp">{{'1'}}</span>
				    {{ Form::hidden('minimum_exp', '1', ['id' => 'minimum_exp', 'class' => 'form-control']) }}
    			</div>
				<div class="col-md-4" style="padding-top:5px">
					<div id="exp_range"></div>
				</div>

				<div class="col-md-2">
				    <span id="span_maximum_exp">{{'5'}}</span>
				    {{ Form::hidden('maximum_exp', '5', ['id' => 'maximum_exp', 'class' => 'form-control']) }}
    			</div>


			</div>



             <div class="row">
				<div class="col-md-2">
				    {{ Form::label('age', __('Age').':') }} <span id="span_minimum_age">{{'16'}}</span>
				    {{ Form::hidden('minimum_age', '16', ['id' => 'minimum_age', 'class' => 'form-control']) }}
    			</div>
				<div class="col-md-4" style="padding-top:5px">
					<div id="age_range"></div>
				</div>
				<div class="col-md-2">
				    <span id="span_maximum_age">{{'45'}}</span>
				    {{ Form::hidden('maximum_age', '45', ['id' => 'maximum_exp', 'class' => 'form-control']) }}
    			</div>
             </div>

             <div class="row">
                    <div class="form-group col-xl-6 col-md-6 col-sm-12">

                   </div>
                </div>




                 <div class="row">
                               <div class="form-group col-xl-6 col-md-5 col-sm-6">
                                    {{ Form::label('wish_lang[0][name]', __('Language').':') }}
                                    {{ Form::select('wish_lang[0][name]', $data['language'],null, ['class' => 'form-control select-box','placeholder' => 'Select Langauge']) }}
                               </div>

                </div>

                        <div  id="additionalWishLang">


                         </div>

                          <div class="row form-group col-sm-12">
                                <a id="AddNewWishLanguage"  href="javascript:void(0)" class="btn btn-primary" ><i class="fa fa-plus" aria-hidden="true"></i> {{__('Langauge')}}</a>
                            </div>







              <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('need_extra_care', __('Do your child(ren) need extra care').':') }}<a href="#" class="tooltip_icon" data-toggle="tooltip" title="Such as: my child is diabetic or my child has medical indiction or orher">?</a><span class="text-danger">*</span></br>
                    {{ Form::radio('need_extra_care', '1',false),['class' => 'form-control check-box required']}} {{ __('Yes') }}
                    &nbsp;&nbsp;&nbsp;
                    {{ Form::radio('need_extra_care', '0',true),['class' => 'form-control check-box required'] }} {{ __('No') }}
                </div>
             </div>

             <div style="display:none" id="need_extra_care_box">
             <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('need_extra_care_child[0][like_what]', __('Like what').':') }}
                    {{ Form::text('need_extra_care_child[0][like_what]', null, ['class' => 'form-control']) }}
                </div>
            </div>

            <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('need_extra_care_child[0][name]', __('The name of the child').':') }}
                    {{ Form::text('need_extra_care_child[0][name]', null, ['class' => 'form-control']) }}
                </div>
            </div>

            <div  id="additional_need_extra_care_box">

            </div>

            <div class="row form-group col-sm-12">
                <a id="AddNewExtraCareChild"  href="javascript:void(0)" class="btn btn-primary" ><i class="fa fa-plus" aria-hidden="true"></i> {{__('ADD')}}</a>
            </div>



            </div>


             <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('extra_chores', __('Do you want the babysitter to do extra chores around the house').':') }}<a href="#" class="tooltip_icon" data-toggle="tooltip" title="Such as: my child is diabetic or my child has medical indiction or orher">?</a><span class="text-danger">*</span></br>
                    {{ Form::radio('extra_chores', '1',false),['class' => 'form-control check-box required']}} {{ __('Yes') }}
                    &nbsp;&nbsp;&nbsp;
                    {{ Form::radio('extra_chores', '0',true),['class' => 'form-control check-box required'] }} {{ __('No') }}

                </div>
             </div>

              <div class="row" id="extra_chores_yes_box" style="display:none">

               <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('extra_chores_yes', __('Like what').':') }}<span class="text-danger">*</span>
                      {{ Form::select('extra_chores_yes[]',
                     ['Craft' =>'Craft' ,
                     'Cook' =>'Cook' ,
                     'Light house cleaning'=>'Light house cleaning',
                     'Help with homework'=>'Help with homework',
                     'Read aloud'=>'Read aloud',
                     'Plan activities'=>'Plan activities',
                     'other'=>'Other']
                      ,null, ['id'=>'extra_chores_yes', 'class' => 'form-control select-box','multiple']) }}
                    {{ Form::text('extra_chores_yes_other', null, ['id'=>'extra_chores_yes_other','class' => 'form-control other_box','placeholder'=>'Enter Other']) }}


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
                      {{ Form::label('remarks', __('Remarks').':') }}<a href="#" class="tooltip_icon" data-toggle="tooltip" title="Do you hvae any comments that are important for the babysister, for example: prefer not to smoke or rather someone who is not afraid of animals or someone who has experience with crying babies">?</a>
                      {{ Form::textarea('remarks', null, ['class' => 'form-control','row'=>'5']) }}
                </div>

            </div>


       <div class="row">

       <div class="form-group col-sm-12">
       <div style="float:left">
            <a href="javascript:void(0)" onClick="openCity(event, 'tab3','tabb3')" class="btn btn-secondary text-dark">{{__('Previous')}}</a>
        </div>
        <div style="float:right">
            <a  onClick="validateTab(4)"   class="btn btn-primary" style="float: right;">{{__('Next')}}</a>
        </div>
       </div>

     </div>
    </div>


    <div class="tabcontent  disable pt-1 " id="tab5">
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
            <a href="javascript:void(0)" onClick="openCity(event, 'tab4' ,'tabb4')" class="btn btn-secondary text-dark">{{__('Previous')}}</a>
        </div>
        <div style="float:right">
            <a  onClick="validateTab(5)"  href="javascript:void(0)"  class="btn btn-primary" style="float: right;">{{__('Next')}}</a>
        </div>
        </div>
     </div>
    </div>

    <div class="tabcontent pt-1 disable" id="tab6">
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
                <a href="javascript:void(0)" onClick="openCity(event, 'tab5','tabb5')" class="btn btn-secondary text-dark">{{__('Previous')}}</a>
            </div>
             <div  style="float:right">
                <a  onClick="ValidateAndSave(6)" href="javascript:void(0)" class="btn btn-primary" style="float: right;">{{__('Next')}}</a>
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




<script>

/*
$(":input[type='text']").val('');
$("select").val('');
var allcheckBoxes = $("input[type='checkbox");
allcheckBoxes.prop("checked", false);
*/

    </script>


