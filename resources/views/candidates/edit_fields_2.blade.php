

    <div class="row tabcontent active" id="tab1">

     <div class="custom-form">
         <div id="message3">{{__('web.helpers.helper_details')}}.</div>
    </div>


    <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('dob', __('web.helpers.birth_date').':') }}
                    {{ Form::text('dob', @$postMetaArray['dob'], ['class' => 'form-control required','id' => 'userbirthDate','autocomplete' => 'off']) }}
                </div>
    </div>
    <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('gender', __('web.helpers.gender').':') }}</br>
                    {{ Form::radio('gender', 'male',isset($postMetaArray['gender']) && $postMetaArray['gender'] =='male' ?"checked":"") }} {{ __('web.helpers.male') }} &nbsp;&nbsp;&nbsp;
                    {{ Form::radio('gender', 'female',isset($postMetaArray['gender']) && $postMetaArray['gender'] =='female' ?"checked":"" )}} {{ __('web.helpers.female') }}
                </div>
    </div>
    <div class="row">
                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                    {{ Form::label('mother_lang_id',__('web.helpers.native_language').':') }}<span class="text-danger">*</span>
                    {{ Form::select('mother_lang_id', $data['language'],@$postMetaArray['mother_lang_id'], ['id'=>'mother_lang_id','class' => 'form-control select-box required']) }}
                </div>
    </div>

    <div class="row">
            <div  id="additional_lang" style="display: block ruby;">

                    <?php
                   if(isset($postMetaArray['Other_lang']) ) {
                   $i=0;
                   foreach($postMetaArray['Other_lang'] as $OtherLang){
                   ?>
                   <div class="additional_lang_row" id="add_lang<?php echo $i;?>" style="display: inline-flex;">
                    <div class="form-group col-xl-6 col-md-6 col-sm-12">
                        {{ Form::label('Other_lang',__('web.helpers.other_language_name').':') }}
                        {{ Form::select('Other_lang['.$i.'][name]', $data['language'],@$OtherLang['name'], ['id'=>'Other_lang_name_'.$i,'class' => 'form-control select-box']) }}
                    </div>

                       <div class="form-group col-xl-4 col-md-4 col-sm-12">
                        {{ Form::label('Langauge level',__('web.helpers.language_level').':') }}
                        {{ Form::select('Other_lang['.$i.'][level]', $data['lang_level'],@$OtherLang['level'], ['id'=>'Other_lang_level_'.$i,'class' => 'form-control select-box']) }}
                    </div>
                    <?php if($i>0){ ?>
                    <div class="form-group col-xl-2 col-md-2 col-sm-12">
                     <a id="<?php echo $i;?>" href="javascript:void(0)" class="btn btn-primary remove-lang" style="margin-top: 30px;"><i class="fa fa-minus" aria-hidden="true"></i></a>
                    </div>
                    <?php } ?>

                  </div>
                    <?php
                    $i++;
                    } } ?>
                         </div>
                          <div class="form-group col-sm-12">
                                <a  id="AddNew"  href="javascript:void(0)" class="btn btn-primary" ><i class="fa fa-plus" aria-hidden="true"></i>  {{__('Langauge')}}</a>
                            </div>
    </div>
    <div class="row">



                 <!-- add lang section ended-->

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                    {{ Form::label('phone', __('web.helpers.phone_no')) }}<span class="text-danger">*</span><br>
                    {{ Form::text('phone',@$postMetaArray['phone'],
                     ['class' => 'form-control required','required','id'=>'phoneRefNumber']) }}
                </div>
        </div>

    <div class="row">
                  <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('address', __('web.helpers.address').':') }}<span class="text-danger">*</span>
                    {{ Form::text('address', @$postMetaArray['address'], ['class' => 'form-control required','required']) }}
                </div>
    </div>

    <div class="row">
                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('zip_code', __('web.helpers.postal_code').':') }}<span class="text-danger">*</span>
                    {{ Form::text('zip_code', @$postMetaArray['zip_code'], ['class' => 'form-control required','required','maxlength' => 6]) }}
                </div>
    </div>

    <div class="row">
                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('place', __('web.helpers.place').':') }}<span class="text-danger">*</span>
                    {{ Form::text('place', @$postMetaArray['place'], ['class' => 'form-control required','required']) }}
                </div>
    </div>

    <div class="row">
                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('preferred_reception_location', __('Preferred reception location').':') }}<span class="text-danger">*</span>
                   {{ Form::select('preferred_reception_location', ['Eigenhuis'=>'Eigenhuis','With_The_Parent'=>'With The Parent','no_preference'=>'No preference'] ,@$postMetaArray['preferred_reception_location'], ['class' => 'form-control select-box required','placeholder' => 'Select preferred reception location ']) }}
                </div>
    </div>

    <div class="row">
                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('registered_childminder', __('Are you already registered as a childminder').':') }}<span class="text-danger">*</span><br>
                    {{ Form::radio('registered_childminder', '1',isset($postMetaArray['registered_childminder']) && $postMetaArray['registered_childminder'] ==1 ? true:false)  ,['required']}} {{ __('Yes') }}
                &nbsp;&nbsp;&nbsp;
                {{ Form::radio('registered_childminder', '0',isset($postMetaArray['registered_childminder']) && $postMetaArray['registered_childminder'] ==0 ? true:false),[ 'class' => 'form-control check-box required','required'] }} {{ __('No') }}

                </div>
    </div>

    <div class="row" id="registered_childminder_box" style="display:none">
                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('lrkp_number', __('Lrkp number').':') }}<span class="text-danger">*</span>
                    {{ Form::text('lrkp_number', @$postMetaArray['lrkp_number'], ['class' => 'form-control required','required']) }}
                </div>
    </div>



    <div class="row">
                <!-- Submit Field -->
               <div class="form-group col-sm-12">
                 <div style="float:left">
                    <a href="{{ route('candidates.index') }}" class="btn btn-secondary text-dark">{{__('web.helpers.cancel')}}</a>
                </div>
                 <div  style="float:right">
                    <a  onClick="validateTab(1)"  class="btn btn-primary" style="float: right;">{{__('web.helpers.next')}}</a>
                </div>
               </div>

</div>


    </div>


    <div class="row tabcontent pt-1 disable" id="tab2">

    <div class="custom-form">
         <div id="message3">{{__('web.helpers.helper_complete_profile')}}</div>
    </div>

        <div class="row">
        <div class="form-group col-xl-6 col-md-6 col-sm-6">
                {{ Form::label('image1', __("web.helpers.profile_picture")) }}
                <div class="custom-file">
                    <input type="file" name="profile_pictures" class="custom-file-input required" id="image1">
                    <label class="custom-file-label rounded" name="image1"><i class="mdi mdi-cloud-upload mr-1"></i>{{__('web.helpers.upload_profile_image')}}</label>
                </div>

                <div class="custom-file-preview" id="custom-file-image1" style="display:{{ isset($postMetaArray['profile_pictures_url'])?'block':'none'}}">
                     <?php echo App\Http\Controllers\CandidateController:: isDocImageType(@$postMetaArray['profile_pictures_url'],'image1_preview');?>
                </div>


        </div>
        </div>

         <div class="row">
        <div class="form-group col-xl-6 col-md-6 col-sm-6">
         {{ Form::checkbox('image1_later', 'yes', isset($postMetaArray['image1_later']) && $postMetaArray['image1_later'] =='yes' ? true:false) ,['class' => 'form-control check-box'] }}
         {{ Form::label('image1_later', __("web.helpers.helper_will_add_photo_later")) }}
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


    <div class="row tabcontent disable" id="tab3">
            <div class="custom-form">
                 <div id="message3">{{__("web.helpers.helpers_experience_as_a")}} {{$JobCategoryDetail->name}}? </div>
            </div>


                <div class="row">
                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('Experience', __('web.helpers.experience').':') }}<span class="text-danger">*</span>
                      {{ Form::select('exprience',
                      ['less_1year' =>'<1 year of experience' , '1year' =>'1 year of experience' ,'2year'=>'2 year of experience','3year'=>'3 year of experience','4year'=>'4 year of experience','5'=>'5 year of experience','6'=>'6 year of experience','7'=>'7 year of experience','8'=>'8 year of experience','9'=>'9 year of experience','10+'=>'10+ year of experience']
                      ,@$postMetaArray['exprience'], ['id'=>'helpers_exprience','class' => 'form-control select-box required','required','placeholder' => 'How many years of experience do you have as a childminder?']) }}
                </div>
                </div>

                <div class="row">

               <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('age_you_catch_children', __('web.helpers.at_what_age_do_you_catch_children').':') }}<span class="text-danger">*</span>
                      {{ Form::select('age_you_catch_children',
                     ['0-4' =>'0-4 years' , '4-12' =>'4-12 years' ,'0-12'=>'0-12 years']
                      ,@$postMetaArray['age_you_catch_children'], ['class' => 'form-control select-box required','required','multiple']) }}
                </div>
                </div>

                <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('completed_training', __('web.helpers.completed_training').':') }}<span class="text-danger">*</span>
                      {{ Form::textarea('completed_training', @$postMetaArray['completed_training'], ['class' => 'form-control required','row'=>'5']) }}
                </div>

                </div>


                <div class="row">

               <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('completed_courses', __('web.helpers.completed_courses').':') }}<span class="text-danger">*</span>
                      {{ Form::textarea('completed_courses', @$postMetaArray['completed_courses'], ['class' => 'form-control required','row'=>'5']) }}
                </div>

                </div>

                <div class="row">

               <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('pluses', __('web.helpers.pluses').':') }}<span class="text-danger">*</span>
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
                      ,@$postMetaArray['pluses'], ['id'=>'pluses','class' => 'form-control select-box select_box_other_multiple required','multiple']) }}
                      {{ Form::text('pluses_other', @$postMetaArray['pluses_other'], ['id'=>'pluses_other','class' => (isset($postMetaArray['pluses']) && in_array("other", $postMetaArray['pluses'])) ? 'form-control other_box_visible' : 'form-control other_box','placeholder'=>'Enter Other']) }}

                </div>
                </div>

                <div class="row" id="have_pets_box" style="display:none">



               <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('have_pets', __('web.helpers.do_you_have_pets_of_your_own_home').':') }}<a href="#" class="tooltip_icon" data-toggle="tooltip" title="Only applies if your childminder works in your own home">?</a>
                      {{ Form::select('have_pets',
                      ['no'=>'No',
                      'yes' =>'Yes' ,
                      'not_applicable' =>'Not applicable'
                      ]
                      ,@$postMetaArray['have_pets'], ['id'=>'have_pets','class' => 'form-control select-box','placeholder'=>'Select']) }}

                </div>
                </div>

                <div class="row" id="have_pets_text_box" style="display:display:<?php if (isset($postMetaArray['have_pets']) && $postMetaArray['have_pets'] == "yes"){ echo 'block';}else{ echo 'none';}?>">
                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                        {{ Form::label('have_pets_text', __('web.helpers.what_pets_do_you_have').':') }}<a href="#" class="tooltip_icon" data-toggle="tooltip" title="Indicate which pets you have and how many">?</a>
                        {{ Form::text('have_pets_text', @$postMetaArray['have_pets_text'], ['id'=>'have_pets_text','class' => 'form-control']) }}

                </div>

                </div>



                 <div class="row">

               <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('afraid_of', __('web.helpers.allergic_or_afraid_of_animals').':') }}<span class="text-danger">*</span>
                      {{ Form::select('afraid_of[]',
                      ['no' =>'No' , 'dogs' =>'Dogs' ,'cats'=>'Cats','other'=>'Other']
                      ,@$postMetaArray['afraid_of'], ['id'=>'afraid_of','class' => 'form-control select-box select_box_other_multiple required','multiple']) }}
                     {{ Form::text('afraid_of_other', @$postMetaArray['afraid_of_other'], ['id'=>'afraid_of_other_box','class' => (isset($postMetaArray['afraid_of']) && in_array("other", $postMetaArray['afraid_of'])) ? 'form-control other_box_visible' : 'form-control other_box','placeholder'=>'Enter Other']) }}

                </div>
                </div>

                <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('remark', __('web.helpers.remarks').':') }}<span class="text-danger">*</span>
                      {{ Form::textarea('remark', @$postMetaArray['remark'], ['class' => 'form-control required']) }}
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

    <div class="row tabcontent  disable" id="tab4">
            <div class="custom-form">
                 <div id="message3">{{ __('web.helpers.helper_advertisement_for')}} {{$JobCategoryDetail->name}}. </div>
            </div>

            <div class="row">
                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                    {{ Form::label('advertisement', __("web.helpers.whats_on_offer")) }}<span class="text-danger">*</span>
                    {{ Form::text('advertisement',  @$postMetaArray['advertisement'], ['placeholder'=>'Title of your ad','class' => 'form-control required','required']) }}
                </div>
            </div>



            <div class="row">


        <div class="form-group col-xl-6 col-md-6 col-sm-12">
            {{ Form::label('advertisement_text', __('web.helpers.write_your_ad')) }}<span class="text-danger">*</span>
            {{ Form::textarea('advertisement_text',@$postMetaArray['advertisement_text'], ['placeholder'=>'Tell us about yourself and your hobbies. This is the most important part of your ad! Take your time.','class' => 'form-control address-height required' , 'rows' => '5']) }}
        </div>
        </div>
        <div class="row">

        <div class="form-group col-xl-6 col-md-6 col-sm-12">
            {{ Form::label('advertisement_available', __('web.helpers.when_will_you_be_available')) }}<span class="text-danger">*</span>
            {{ Form::text('advertisement_available',@$postMetaArray['advertisement_available'], ['class' => 'form-control required pickdate','required']) }}
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
                         <div class="calendar_top_2" id="selected_month">Month</div>
                         <div class="calendar_top_3" onClick="nextMonth()"> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></div>
                   </div>
                   <input type="hidden" id="selected_month_number">
                   <input type="hidden" id="selected_year_number">
                   <input type="hidden" id="fist_date">
                   <input type="hidden" id="totol_days">
                   <input type="hidden" id="time_available" name="time_available" value="{{@$postMetaArray['time_available']}}">

                   <?php
                   if(isset($postMetaArray['date_time_available']) && is_array($postMetaArray['date_time_available'])){
                   $date_time_available = json_encode($postMetaArray['date_time_available']);
                   }else{
                   $date_time_available = '';
                   }
                   ?>
                   <input type="hidden" id="date_time_available" name="date_time_available" value="{{$date_time_available}}">

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

        <div class="form-group col-xl-6 col-md-6 col-sm-12">
                  {{ Form::label('available_for', __('web.helpers.are_you_available_for')) }}<span class="text-danger">*</span>
                  {{ Form::select('available_for[]',['vast'  => 'Vast','flexible'  => 'Flexible','sometimes'  => 'Sometimes','other'  => 'Other'],
                  @$postMetaArray['available_for'],
                  ['id'=>'available_for','class' => 'form-control select-box required select_box_other_multiple','multiple']) }}
                  {{ Form::text('available_for_other', @$postMetaArray['available_for_other'], ['id'=>'available_for_other','class' => (isset($postMetaArray['available_for']) && in_array("other", $postMetaArray['available_for'])) ? 'form-control other_box_visible' : 'form-control other_box','placeholder'=>'Enter Other']) }}

        </div>
        </div>

        <div class="row">



        <div class="form-group col-xl-6 col-md-6 col-sm-12">
                  {{ Form::label('offering_shelteras', __('web.helpers.are_you_offering_shelteras')) }}<span class="text-danger">*</span>
                  {{ Form::select('offering_shelteras[]',
                    [
                               'permanent_care'  => 'Permanent Care)',
                               'Flexible childcare'  => 'Flexible childcare',
                               'other'  => 'Other',
                              ]
                  ,@$postMetaArray['offering_shelteras'], ['id'=>'offering_shelteras','class' => 'form-control select-box select_box_other_multiple required','multiple']) }}
                  {{ Form::text('offering_shelteras_other', null, ['id'=>'offering_shelteras_other','class' => (isset($postMetaArray['offering_shelteras']) && in_array("other", $postMetaArray['offering_shelteras'])) ? 'form-control other_box_visible' : 'form-control other_box','placeholder'=>'Enter Other']) }}

        </div>
        </div>


        <div class="row">


        <div class="form-group col-xl-6 col-md-6 col-sm-12">
            {{ Form::label('hourly_rate', __('web.helpers.hourly_rate').':') }}<span class="text-danger">*</span>
       <div class="input-group">
    <div class="input-group-addon">
      <i class="fas fa-euro-sign"></i>
    </div>
        {{ Form::text('hourly_rate', @$postMetaArray['hourly_rate'], ['class' => 'form-control required','required']) }}

  </div>

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

    <div class="row tabcontent pt-1 disable" id="tab5">
    <div class="custom-form">
         <div id="message3">{{ __('web.helpers.helpers_contract') }} </div>
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
                  <p><b>{{ __('web.helpers.heloeprs_declaation') }}</b></p>
                </div>
                </div>


                <div class="row">

                <div class="form-group col-xl-3 col-md-3 col-sm-12">


                </div>
                <div class="form-group col-xl-6 col-md-6 col-sm-12 signature_pad rounded shadow">
                {{ Form::label('full_name', __('web.helpers.full_name').':') }}<span class="text-danger">*</span>
                {{ Form::text('full_name',@$postMetaArray['full_name'], ['class' => 'form-control required','placeholder' =>'Enter your full name']) }}
                 <p><b>{{ __('web.helpers.date')}}</b>: {{@$postMetaArray['user_signature_date']}}</p>
                 <p><b>{{ __('web.helpers.signature')}}</b></p>
                 <img style="max-width:100%;" src="{{@$postMetaArray['user_signature']}}" />
                </div>


                </div>



                <div class="row">

                <div class="form-group col-xl-3 col-md-3 col-sm-12">
                </div>
                <div class="form-group col-xl-6 col-md-6 col-sm-12" style="text-align: center;">
                    <a onClick="updateServiceForm()" href="javascript:void(0)"  class="btn btn-primary">{{__('web.helpers.update')}}</a>
                </div>
                <div class="form-group col-xl-3 col-md-3 col-sm-12">

                </div>




                </div>

       </div>






