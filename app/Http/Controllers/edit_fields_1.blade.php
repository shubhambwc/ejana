
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

    $('#image1').change(function(){
    var input = this;
    var url = $(this).val();
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg"))
     {
        var reader = new FileReader();

        reader.onload = function (e) {
           $('#image1_preview').attr('src', e.target.result);
        }
       reader.readAsDataURL(input.files[0]);
    }
    else
    {
      $('#image1_preview').attr('src', '/assets/img/no-preview.jpg');
    }
    $('#custom-file-image1').show();
  });


   $('#image2').change(function(){
    var input = this;
    var url = $(this).val();
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg"))
     {
        var reader = new FileReader();

        reader.onload = function (e) {
           $('#image2_preview').attr('src', e.target.result);
        }
       reader.readAsDataURL(input.files[0]);
    }
    else
    {
      $('#image2_preview').attr('src', '/assets/img/no-preview.jpg');
    }
    $('#custom-file-image2').show();
  });


   $('#image22').change(function(){
    var input = this;
    var url = $(this).val();
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg"))
     {
        var reader = new FileReader();

        reader.onload = function (e) {
           $('#image22_preview').attr('src', e.target.result);
        }
       reader.readAsDataURL(input.files[0]);
    }
    else
    {
      $('#image22_preview').attr('src', '/assets/img/no-preview.jpg');
    }
    $('#custom-file-image22').show();
  });


   $('#image3').change(function(){
    var input = this;
    var url = $(this).val();
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg"))
     {
        var reader = new FileReader();

        reader.onload = function (e) {
           $('#image3_preview').attr('src', e.target.result);
        }
       reader.readAsDataURL(input.files[0]);
    }
    else
    {
      $('#image3_preview').attr('src', '/assets/img/no-preview.jpg');
    }
    $('#custom-file-image3').show();
  });

   $('#image4').change(function(){
    var input = this;
    var url = $(this).val();
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg"))
     {
        var reader = new FileReader();

        reader.onload = function (e) {
           $('#image4_preview').attr('src', e.target.result);
        }
       reader.readAsDataURL(input.files[0]);
    }
    else
    {
      $('#image4_preview').attr('src', '/assets/img/no-preview.jpg');
    }
    $('#custom-file-image4').show();
  });

   $('#image5').change(function(){
    var input = this;
    var url = $(this).val();
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg"))
     {
        var reader = new FileReader();

        reader.onload = function (e) {
           $('#image5_preview').attr('src', e.target.result);
        }
       reader.readAsDataURL(input.files[0]);
    }
    else
    {
      $('#image5_preview').attr('src', '/assets/img/no-preview.jpg');
    }
    $('#custom-file-image5').show();
  });


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




    <div class="row tabcontent active" id="tab1">




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
                                <a  id="AddNew"  href="javascript:void(0)" class="btn btn-primary" ><i class="fa fa-plus" aria-hidden="true"></i>  {{__('Langauge')}}</a>
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
                    <a href="{{ route('company.index') }}" class="btn btn-secondary text-dark">{{__('messages.common.cancel')}}</a>
                </div>
                 <div  style="float:right">
                    <a  onClick="validateTab(1)"  class="btn btn-primary" style="float: right;">{{__('Next')}}</a>
                </div>
               </div>

</div>


    </div>


    <div class="row tabcontent pt-1 disable" id="tab2">
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
                <a href="javascript:void(0)" onClick="openCity(event, 'tab1','tabb1')" class="btn btn-secondary text-dark">{{__('Previous')}}</a>
            </div>
             <div  style="float:right">
                <a  onClick="validateTab(2)" href="javascript:void(0)" class="btn btn-primary" style="float: right;">{{__('Next')}}</a>
            </div>
            </div>

        </div>
    </div>


    <div class="row tabcontent pt-1 disable" id="tab3">
            <div class="custom-form">
                 <div id="message3">What is your experience as a {{$JobCategoryDetail->name}}? </div>
            </div>
                <div class="row">
                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('Experience', __('Experience').':') }}<span class="text-danger">*</span>
                      {{ Form::select('exprience',
                      ['less_1year' =>'<1 year of experience' , '1year' =>'1 year of experience' ,'2year'=>'2 year of experience','3year'=>'3 year of experience','4year'=>'4 year of experience','5'=>'5 year of experience','6'=>'6 year of experience','7'=>'7 year of experience','8'=>'8 year of experience','9'=>'9 year of experience','10+'=>'10+ year of experience']
                      ,null, ['id'=>'helpers_exprience','class' => 'form-control select-box required','required','placeholder' => 'How many years of experience do you have in babysitting, childcare?']) }}
                </div>
                </div>





                <div class="row">

               <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('age_category_experience', __('In what age category?').':') }}<span class="text-danger">*</span>
                      {{ Form::select('age_category_experience[]',
                      ['infant' =>'Infant(up to 1 year)' , 'toddler' =>'Toddler(1-2 years)' ,'toddler2_3'=>'Toddler(2-3years)','toddler3_4'=>'Toddler(3-4years)','schoolchild'=>'Schoolchild (7+ years)']
                      ,null, ['id'=>'age_category_experience','class' => 'form-control select-box required','required','multiple']) }}
                </div></div>
                <div class="row">

               <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('child_quantity', __('Child Quantity').':') }}<span class="text-danger">*</span>
                      {{ Form::select('child_quantity',
                      ['one' =>'1 child' , 'two' =>'2 children' ,'three'=>'3 children','four'=>'4+ children']
                      , null, ['id'=>'child_quantity','class' => 'form-control select-box required','required','placeholder' => 'How many children can you take care of per day?']) }}
                </div>

                </div>

                 <div class="row">

                 <div class="form-group col-xl-12 col-md-12 col-sm-12">
                 <div class="col-xl-6 col-sm-12" style="padding-left:0px;">
                {{ Form::label('competent', __('Are you competent and authorized for extra care?').':') }}</br>
                {{ Form::radio('competent', '1',false)  ,['onclick'=>'toggleCompetent("yes");', 'required']}} {{ __('Yes') }}
                &nbsp;&nbsp;&nbsp;
                {{ Form::radio('competent', '0',true),['onclick'=>'toggleCompetent("no");', 'class' => 'form-control check-box required','required'] }} {{ __('No') }}


                   <div id="competent_option_box">
                    {{ Form::select('competent_option[]',
                      ['Childrenwithdisabilities' =>'Children with disabilities',
                      'Childrenwithamedicalindicationcare' =>'Children with a medical indication/care',
                      'other'=>'Other']
                      , null, ['id'=>'competent_option_bh','class' => 'form-control select-box','multiple']) }}




                  <div id="competent_option_other_box" style="display:none">
                       {{ Form::text('competent_option_other', null, ['class' => 'form-control','placeholder' => 'Enter other']) }}
                  </div>
                  </div>

                  </div>

                </div>
                </div>

                <div class="row">

               <div class="form-group col-xl-12 col-md-12 col-sm-12">
               <div class="col-xl-6 col-sm-12" style="padding-left:0px;">
                      {{ Form::label('extra_offer', __('What do you offer (extra)').':') }}
                      {{ Form::select('extra_offer[]',
                      ['plan_activities' =>'Plan  activities' ,
                      'crafts' =>'Craft' ,
                      'cook'=>'Cook',
                      'light_house'=>'Light Housework',
                      'help_homework'=>'Help with homework',
                      'read_aload'=>'Read aloud', 'other'=>'Other']
                      , null, ['id'=>'extra_offer','class' => 'form-control select-box','multiple']) }}

                 <div id="extra_offer_box_other" style="display:none">
                 		{{ Form::text('extra_offer_other',null, ['class' => 'form-control','placeholder' => 'Enter Other']) }}
                 </div>
                 </div>


                 </div>
                 </div>

                  <div class="row">

                 <div class="form-group col-xl-12 col-md-12 col-sm-12">
                 <div class="col-xl-6 col-sm-12" style="padding-left:0px;">
                {{ Form::label('do_you_smoke', __('Do you smoke?').':') }}</br>
                {{ Form::radio('do_you_smoke', '1',false)  ,['class' => 'form-control check-box']}} {{ __('Yes') }}
                &nbsp;&nbsp;&nbsp;
                {{ Form::radio('do_you_smoke', '0',true),['class' => 'form-control check-box'] }} {{ __('No') }}


                   <div id="competent_option_box">
                      {{ Form::select('competent_option[]',
                      ['Children with disabilities' =>'Children with disabilities' ,
                      'Children with a medical indication/care' =>'Children with a medical indication/care' ,
                      'other'=>'Other']
                      ,null, ['id'=>'competent_option','class' => 'form-control select-box','multiple']) }}

                  <div id="competent_option_other_box" style="display:none">
                       {{ Form::text('competent_option_other', null, ['class' => 'form-control','placeholder' => 'Enter other']) }}
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


    <div class="row tabcontent pt-1 disable" id="tab4">

         <div class="custom-form">
                 <div id="message3">Extra information
                 <p style="margin: 0;font-size: 14px;">Ejana takes the protection of your data seriously, we do not provide your personal data to third parties without your permission. More information can be found in the privacy policy.</p>
                 </div>
            </div>
                <div class="row">

           <div class="form-group col-xl-6 col-md-6 col-sm-12">
                         {{ Form::label('passport', __('Copy ID/passport (Front)').':') }}<span class="text-danger">*</span>
                         <div class="custom-file">
                            <input type="file" name="passport_front" id="image2" class="custom-file-input {{ isset($postMetaArray['passport_front_url'])?'':'required'}}">
                            <label class="custom-file-label rounded" name="image2"><i class="mdi mdi-cloud-upload mr-1"></i>Upload Front of ID or Passport</label>
                         </div>
                         <div class="custom-file-preview" id="custom-file-image2" style="display:{{ isset($postMetaArray['passport_front_url'])?'block':'none'}}">
                             <img id="image2_preview" src="{{isset($postMetaArray['passport_front_url'])?$postMetaArray['passport_front_url']:''}}" />
                        </div>
        <div class="form-group col-xl-6 col-md-6 col-sm-6">
         {{ Form::checkbox('passport_front_later', 'yes', false) ,['class' => 'form-control check-box'] }}
         {{ Form::label('passport_front_later', __("I'll add my ID/passport later")) }}
        </div>
           </div>

           <div class="form-group col-xl-6 col-md-6 col-sm-12">
                         {{ Form::label('passport', __('Copy ID/passport (Back)').':') }}<span class="text-danger">*</span>
                         <div class="custom-file">
                            <input type="file" name="passport_back" id="image22" class="custom-file-input {{ isset($postMetaArray['passport_back_url'])?'':'required'}}">
                            <label class="custom-file-label rounded" name="image22"><i class="mdi mdi-cloud-upload mr-1"></i>Upload Back of ID or Passport</label>
                         </div>
                         <div class="custom-file-preview" id="custom-file-image22" style="display:{{ isset($postMetaArray['passport_back_url'])?'block':'none'}}">
                <img id="image22_preview" src="{{isset($postMetaArray['passport_back_url'])?$postMetaArray['passport_back_url']:''}}" />
                </div>

                <div class="form-group col-xl-6 col-md-6 col-sm-6">
         {{ Form::checkbox('passport_back_later', 'yes',false) ,['class' => 'form-control check-box'] }}
         {{ Form::label('passport_back_later', __("I'll add my ID/passport later")) }}
        </div>


           </div>

           </div>
                <div class="row">

          <div class="form-group col-xl-6 col-md-6 col-sm-12">
                  {{ Form::label('highest_education', __('Educational Attainment').':') }}<span class="text-danger">*</span>
                  {{ Form::select('highest_education',
                  ['primary_education' =>'Primary Education' ,
                  'vmbo_mavo' =>'VMBO/MAVO' ,
                  'havo_vwo'=>'HAVO/VWO',
                  'mbo1'=>'MBO 1',
                  'mbo2'=>'MBO 2',
                  'mbo3'=>'MBO 3',
                  'mbo4'=>'MBO 4',
                  'professional'=>'Professional Education',
                  'bachelor'=>'Bachelor',
                  'other' =>'Other']
                  , null,
                  ['id'=>'highest_education','class' => 'form-control select-box required','required','placeholder' => 'Select Highest Education']) }}

                  <div id="highest_education_other_box" style="display:none">
                       {{ Form::text('highest_education_other', null, ['class' => 'form-control','placeholder' => 'Enter other']) }}
                  </div>


          </div>

          </div>
                <div class="row">



          <div class="form-group col-xl-6 col-md-6 col-sm-12">


            {{ Form::label('have_liability', __('Do you have liability insurance or not')) }} <a data-toggle="tooltip" title="Add a copy of your liability insurance to your account. This way we know you're covered and that everything is okay if something happens.">?</a><span class="text-danger">*</span><br>
            {{ Form::radio('have_liability', '1',false) ,['class' => 'form-control check-box required','required']}} {{ __('Yes') }}
            &nbsp;&nbsp;&nbsp;
            {{ Form::radio('have_liability', '0',true),['class' => 'form-control check-box required','required'] }} {{ __('No') }}


              <div id="have_liability_box" style="display:none">
                    {{ Form::label('have_liability_width', __('If so, with whom?')) }}
                    {{ Form::text('have_liability_width', null, ['class' => 'form-control']) }}
              {{ Form::label('is_libility', __('Please add a copy of your liability insurance in your account.').':') }}
                <div class="custom-file">
                        <input type="file" name="liability_copy" id="image3" class="custom-file-input">
                        <label class="custom-file-label rounded" name="image3"><i class="mdi mdi-cloud-upload mr-1"></i>Upload Liability Insurance Photo</label>
                </div>
                 <div class="custom-file-preview" id="custom-file-image3" style="display:none">
                  <img id="image3_preview" src="" />
                </div>

               {{ Form::checkbox('liability_copy_later', 'yes', false) ,['class' => 'form-control check-box'] }}
               {{ Form::label('liability_copy_later', __('I will add copy of liability insurance to my account later')) }}


             </div>
             <div >
               {{ Form::checkbox('is_under18', 'yes', false) ,['class' => 'form-control check-box'] }}
               {{ Form::label('is_under18', __('I am under 18 year old')) }}

               <div id="is_under18_box" style="display:none">
               <p><b>If you are under 18, you do not have your own insurance for damage to others. Then you are covered by your parents' liability insurance.</b></p>
               <p><b>Does your parent(s) not have liability insurance? Then they can already take outthese for a few euros per month. With this everything is well arranged for you to get started as a helper</b></p>
               </div>
             </div>
            </div>

            </div>

            <div class="row">
            <div class="form-group col-xl-6 col-md-6 col-sm-12">


            {{ Form::label('have_first_aid_certificate', __('Do you have Padiatric First Aid Certificate?')) }}<br>
            {{ Form::radio('have_first_aid_certificate', '1',false) ,['class' => 'form-control check-box required ','required']}} {{ __('Yes') }}
            &nbsp;&nbsp;&nbsp;
            {{ Form::radio('have_first_aid_certificate', '0',true),['class' => 'form-control check-box required','required'] }} {{ __('No') }}


              <div id="have_first_aid_certificate_box" style="display:none">
                    {{ Form::label('have_first_aid_certificate_with', __('If so, with whom?')) }}
                    {{ Form::text('have_first_aid_certificate_with', null, ['class' => 'form-control']) }}

               {{ Form::label('first_aid_certificate', __('Add a copy of your Padiatric First Aid Certificate').':') }}
                <div class="custom-file">
                        <input type="file" name="first_aid_certificate" id="image4" class="custom-file-input">
                         <label class="custom-file-label rounded" name="image3"><i class="mdi mdi-cloud-upload mr-1"></i>Upload Certificate Photo</label>
                 </div>
                 <div class="custom-file-preview" id="custom-file-image4" style="display:none">
                <img id="image4_preview" src="{}" />
                </div>

               {{ Form::checkbox('first_aid_certificate_later', 'yes',false) ,['class' => 'form-control check-box'] }}
               {{ Form::label('first_aid_certificate_later', __('I will add copy of Padiatric First Aid Certificate to my account later')) }}


             </div>

              <div id="have_first_aid_certificate_box_no">
              <p><b>Please note, without a child first aid certificate you cannot use the babysitting service. For more information please contact us.</b></p>
              </div>

             <div >

             </div>
            </div>

        </div>


        <div class="row">
            <div class="form-group col-xl-6 col-md-6 col-sm-12">


            {{ Form::label('vog_certificate', __('Do you have a valid Certificate of Good Conduct (VOG)')) }}<a data-toggle="tooltip" title="The Certificate of Good Conduct may not be older than 3 months! You can apply for a valid VOG via Ejana">?</a><br>
            {{ Form::radio('vog_certificate', '1',false) ,['class' => 'form-control check-box required ','required']}} {{ __('Yes') }}
            &nbsp;&nbsp;&nbsp;
            {{ Form::radio('vog_certificate', '0',true),['class' => 'form-control check-box required','required'] }} {{ __('No') }}


              <div id="vog_certificate_box" style="display:none">
                    {{ Form::label('vog_certificate_with', __('If so, with whom?')) }}
                    {{ Form::text('vog_certificate_with', null, ['class' => 'form-control']) }}

               {{ Form::label('vog_certificate_file', __('Add a copy of your Good Conduct (VOG) Certificate').':') }}
                <div class="custom-file">
                        <input type="file" name="vog_certificate_file" id="image5" class="custom-file-input">
                         <label class="custom-file-label rounded" name="image5"><i class="mdi mdi-cloud-upload mr-1"></i>Upload Certificate Photo</label>
                 </div>
                 <div class="custom-file-preview" id="custom-file-image5" style="display:none">
                <img id="image5_preview" src="{}" />
                </div>

               {{ Form::checkbox('vog_certificate_later', 'yes', false) ,['class' => 'form-control check-box'] }}
               {{ Form::label('vog_certificate_later', __('I will add copy of Good Conduct (VOG) Certificate to my account later')) }}


             </div>

              <div id="vog_certificate_box_no">
              <p><b>Please note, without a VOG you cannot use the babysitting service. For more information please contact us.</b></p>
              </div>

             <div >

             </div>
            </div>

        </div>



        <div class="row">

         <div class="form-group col-xl-6 col-md-6 col-sm-12">
            {{ Form::label('transport', __('Do you have your own transport?').':') }}<span class="text-danger">*</span><br>
            {{ Form::select('transport[]',['moped_scooter'  => 'Moped/Scooter','car'  => 'Car','other'  => 'Other'],null, ['id'=>'transport','class' => 'form-control select-box required','multiple']) }}
            {{ Form::text('transport_other', null, ['id'=>'transport_other','class' => 'form-control other_box','placeholder'=>'Enter Other']) }}

        </div>
        </div>


        <div class="row">
         <div class="form-group col-xl-6 col-md-6 col-sm-12" >
            {{ Form::label('have_drive_license', __('Do you have Driver Licence?')) }}<span class="text-danger">*</span><br>
            {{ Form::radio('have_drive_license', '1',false) ,['class' => 'form-control check-box required','required']}} {{ __('Yes') }}
            &nbsp;&nbsp;&nbsp;
            {{ Form::radio('have_drive_license', '0',true),['class' => 'form-control check-box required','required'] }} {{ __('No') }}
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


    <div class="row tabcontent pt-1 disable" id="tab5">
            <div class="custom-form">
                 <div id="message3">Write your motivation, this will give us a quicker picture of who you are.</div>
            </div>

       <div class="row">

        <div class="form-group col-xl-6 col-md-6 col-sm-12">
            {{ Form::label('motivation_text', __('Motivation').':') }}<span class="text-danger">*</span>
            {{ Form::textarea('motivation_text', null, ['placeholder'=>'Write a motivation','class' => 'form-control address-height required' , 'rows' => '5']) }}
        <p>(This motivation is not visible to others and is targeted for the Ejana)</p>
        </div>
        </div>
                <div class="row">

         <div class="form-group col-xl-6 col-md-6 col-sm-12">
                  {{ Form::label('character_traits', __('What are your character traits?').':') }}<span class="text-danger">*</span>
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
                  {{ Form::label('afraid_of', __('Are you allergic or afraid of certain animals?')) }}<span class="text-danger">*</span>
                  {{ Form::select('afraid_of',
                  ['no' =>'No' , 'dogs' =>'Dogs' ,'cats'=>'Cats','other'=>'Other']
                  ,null, ['id'=>'afraid_of','class' => 'form-control select-box required','multiple']) }}


          <div id="afraid_of_other_box" style="display:none">
                       {{ Form::text('afraid_of_other', null, ['class' => 'form-control','placeholder' => 'Enter other']) }}
                  </div>

        </div></div>
                <div class="row">



        <div class="form-group col-sm-12">
        <div style="float:left">
            <a href="javascript:void(0)" onClick="openCity(event, 'tab4','tabb4')" class="btn btn-secondary text-dark">{{__('Previous')}}</a>
        </div>
        <div style="float:right">
            <a  onClick="validateTab(5)"   class="btn btn-primary" style="float: right;">{{__('Next')}}</a>
        </div>
        </div>
     </div>
    </div>


    <div class="row tabcontent  disable pt-1 " id="tab6">
            <div class="custom-form">
                 <div id="message3">Write your Advertisement for {{$JobCategoryDetail->name}}, this will get you responses faster. </div>
            </div>

            <div class="row">
                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                    {{ Form::label('advertisement', __("What's on offer?")) }}<span class="text-danger">*</span>
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

        <div class="form-group col-xl-6 col-md-6 col-sm-12">
            {{ Form::label('advertisement_available', __('When will you be available?')) }}<span class="text-danger">*</span>
            {{ Form::text('advertisement_available',null, ['class' => 'form-control required pickdate','required']) }}
        </div>
        </div>
        <div class="row">

        <div class="form-group col-xl-6 col-md-6 col-sm-12" onClick="toggleTimeAvailableCalendar()">
            {{ Form::label('time_available', __('What days and times are available?').':') }}<span class="text-danger">*</span>
        </div>
        </div>

        <div class="row">

        <div class="form-group col-xl-12 col-md-12 col-sm-12">

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
                        <div class="titmeSlote"><?php echo str_pad(($t+1),2,0,STR_PAD_LEFT).':00';?></div>
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
                  {{ Form::label('available_for', __('Are you available for?')) }}<span class="text-danger">*</span>
                  {{ Form::select('available_for[]',
                    [
                               'permanent_babysitter'  => 'Permanent babysitter (available for at least 2 months)',
                               'flexible_babysitter'  => 'Flexible babysitter',
                               'sometimes'  => 'Sometimes',
                               'spoedoppas'  => 'Spoedoppas',
                              ]
                  ,null, ['id'=>'available_for','class' => 'form-control select-box required','multiple']) }}
        <p><b>(By selecting emergency babysitter you agree to receive an emailif there are requests from familiesnear you. You can disable this option in your account at any time.</b></p>
        </div>
        </div>


        <div class="row">

        <div class="form-group col-xl-6 col-md-6 col-sm-12">
                  {{ Form::label('prefered_reception', __('Preferred reception')) }}<span class="text-danger">*</span>
                  {{ Form::select('prefered_reception[]',
                              [
                               'day'  => 'Daytime Care',
                               'school'  => 'After School Care',
                               'evening'  => 'Evening Care',
                               'weekend'  => 'Weekend Care',
                               'night'  => 'Night Care',
                               'holiday'  => 'Holiday reception',
                              ]
                  , null, ['id'=>'prefered_reception','class' => 'form-control select-box required','multiple']) }}
        </div>
        </div>

        <div class="row">


        <div class="form-group col-xl-6 col-md-6 col-sm-12">
            {{ Form::label('hourly_rate', __('Hourly rate?').':') }}<span class="text-danger">*</span>
       <div class="input-group">
    <div class="input-group-addon">
      <i class="fas fa-euro-sign"></i>
    </div>
        {{ Form::text('hourly_rate', null, ['class' => 'form-control required','required']) }}

  </div>

        <p><b>Please note, A higher rate reduces your chances of finding {{$JobCategoryDetail->name}} work</b></p>
        </div>

        </div>

        <div class="row">

        <div class="form-group col-sm-12">
        <div style="float:left">
            <a href="javascript:void(0)" onClick="openCity(event, 'tab5' ,'tabb5')" class="btn btn-secondary text-dark">{{__('Previous')}}</a>
        </div>
        <div style="float:right">
            <a  onClick="validateTab(6)"  href="javascript:void(0)"  class="btn btn-primary" style="float: right;">{{__('Next')}}</a>
        </div>
        </div>
     </div>
    </div>


    <div class="row tabcontent pt-1 disable" id="tab7">
           <div class="custom-form">
                 <div id="message3">The contact details of your previous/current employer(s) remain strictly confidential.</div>
            </div>

                <div class="row">

                 <div class="form-group col-xl-6 col-md-6 col-sm-12">

                         {{ Form::label('refrences[0][refrence_name]', __('Name').':') }}<span class="text-danger">*</span>
                         {{ Form::text('refrences[0][refrence_name]',null, ['class' => 'form-control required']) }}

                </div>

                </div>
                <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                     {{ Form::label('refrences[0][refrence_email]', __('Email').':') }}<span class="text-danger">*</span>
                    {{ Form::email('refrences[0][refrence_email]',null, ['class' => 'form-control required'])}}

                </div>
                </div>
                <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                    {{ Form::label('refrences[0][refrence_phone]', __('messages.candidate.phone').':') }}<span class="text-danger">*</span>
                    {{ Form::tel('refrences[0][refrence_phone]', null, ['class' => 'form-control required', 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")','id'=>'refrencePhone'])}}
                </div> </div>
                <div class="row">

                 <div class="form-group col-xl-6 col-md-6 col-sm-12">
                    {{ Form::label('refrences[0][refrence_experiences]', __('Describe Your Experiences').':') }}<span class="text-danger">*</span>
                    {{ Form::textarea('refrences[0][refrence_experiences]',null, ['class' => 'form-control required','required','rows' => '5']) }}
                </div>
                </div>

                <div class="row">
                    <div class="form-group col-xl-6 col-md-6 col-sm-12">
                        {{ Form::label('refrences[0][refrence_start_date]', __('Start Date')) }}<span class="text-danger">*</span>
                        {{ Form::text('refrences[0][refrence_start_date]',null, ['class' => 'form-control required pickdate','required']) }}
                    </div>

                    <div class="form-group col-xl-6 col-md-6 col-sm-12">
                        {{ Form::label('refrences[0][refrence_end_date]', __('End Date')) }}
                        {{ Form::text('refrences[0][refrence_end_date]',null, ['class' => 'form-control pickdate']) }}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xl-6 col-md-6 col-sm-12">
                        {{ Form::checkbox('refrences[0][refrence_current_position]', 'yes',false) ,['class' => 'form-control check-box'] }}
                        {{ Form::label('refrences[0][refrence_current_position]', __('This is my current position')) }}
                    </div>
                </div>

                 <div id="additional_reference">

                 </div>

                 <div class="row">
                    <div class="form-group col-xl-6 col-md-6 col-sm-12">
                         <a  id="addNewReference" href="javascript:void(0)" class="btn btn-primary" ><i class="fa fa-plus" aria-hidden="true"></i>  {{__('Reference')}}</a>
                    </div>
                 </div>


                <div class="row">

                <div class="form-group col-sm-12">

                <div style="float:left">
                    <a href="javascript:void(0)" onClick="openCity(event, 'tab6' ,'tabb6')" class="btn btn-secondary text-dark">{{__('Previous')}}</a>
                </div>
                <div style="float:right">
                    <a onClick="ValidateAndSave(7)" href="javascript:void(0)"  class="btn btn-primary" style="float: right;">{{__('Next')}}</a>
                </div>

                </div>

       </div>

    </div>


    <div class="row tabcontent pt-1 disable" id="tab_confirm">
           <div class="custom-form">
                 <div id="message3">Appointments with EJohn</div>
                 <p><b>As a {{$JobCategoryDetail->name}}, I will</b></p>
            </div>

                <div class="row">

                 <div class="form-group col-xl-12 col-md-12 col-sm-12">
                 <ul>

                        <li>Update my ad and availability regularly</li>
                        <li>Respect, fulfill and only cancel appointments if I really can't</li>
                       <li> Be available for a minimum of 2 hours per month</li>
                       <li> Do not accept payments or reservations outside the platform</li>
                       <li> Agrees that Ejana conducts samplechecks</li>
                       <li> Be in possessionof a Children's First Aid (maynot be older than 2 years)</li>
                       <li> Keep the professionsecretcode</li>
                       <li> A copy of liabilityinsuranceform</li>
                       <li> In possession of a VOG</li>
                       <li> Do not commit vandalism or theft</li>
                       <li> Do not share photos and videos of others you have been babysitting on social media without permission</li>
                       <li> Offer safety, warmth and structure to the children</li>
                       <li> In the event of an accident, fill in an accident registration form (found inyouraccount)</li>
                       <li> Do not use physical or mental violence</li>
                       <li> Do not make unnecessary private phone calls/apps (The safety of the children is paramount to you!)</li>

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
                                <a href="{{ route('company.index') }}" class="btn btn-secondary">Back</a>

              </div>
                <div class="form-group col-xl-3 col-md-3 col-sm-12">
                </div>




                </div>

       </div>

    </div>
</div>



