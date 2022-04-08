    <div class="row  tabcontent active pt-1" id="tab1">
    <div class="custom-form">
         <div id="message3">{{__('web.helpers.helprequestor_details')}}.</div>
    </div>

    <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('dob', __('web.helpers.birth_date').':') }}<a href="#" class="tooltip_icon" data-toggle="tooltip" title="We ask for your date of birth to verify that you are old enough. Only your age will be visible on your profile.">?</a><span class="text-danger">*</span>
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
                <!-- Submit Field -->
               <div class="form-group col-sm-12">
                 <div style="float:left">
                        <a href="{{ route('company.index') }}" class="btn btn-secondary text-dark">{{__('web.helpers.cancel')}}</a>
                
                </div>
                 <div  style="float:right">
                    <a  onClick="validateTab(1)"  class="btn btn-primary" style="float: right;">{{__('web.helpers.next')}}</a>
                </div>
               </div>

</div>


    </div>




    <div class="row tabcontent pt-1 disable" id="tab2">
            <div class="custom-form">
                 <div id="message3">Fill in your job help information , this will make you screech faster reactions</div>
            </div>
                <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('date_need', __('When do you need help with your job?').':') }}<span class="text-danger">*</span>
                      {{ Form::text('date_need', @$postMetaArray['date_need'], ['class' => 'form-control required pickdate']) }}

                </div>
                </div>





                 <div class="row">

               <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('type_of_garden_help', __('Type of job help').':') }}<a href="#" class="tooltip_icon" data-toggle="tooltip" title="One-off, Fixed days, Flexible days">?</a><span class="text-danger">*</span>
                      {{ Form::select('type_of_garden_help',
                      ['Vast' =>'Vast' ,
                      'Flexible' =>'Flexible' ,
                      'Occasionally or once in a while'=>'Occasionally or once in a while',
                      'other'=>'Other'
                      ]
                      ,@$postMetaArray['type_of_garden_help'], ['id'=>'type_of_garden_help','class' => 'form-control select-box required','placeholder'=>'You can adjust your schedule at any time.']) }}
                      {{ Form::text('type_of_garden_help_other', null, ['id'=>'type_of_garden_help_other','class' => 'form-control other_box','placeholder'=>'Enter Other']) }}

                 </div>
                </div>



                 <div class="row">

        <div class="form-group col-xl-6 col-md-6 col-sm-12" onClick="toggleTimeAvailableCalendar()">
            {{ Form::label('time_available', __('web.helpers.what_days_and_times').':') }}<span class="text-danger">*</span>
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

               <div class="form-group col-sm-12">
                   <div style="float:left">
                        <a href="javascript:void(0)"  onClick="openCity(event, 'tab1' ,'tabb1')" class="btn btn-secondary text-dark">{{__('web.helpers.previous')}}</a>
                    </div>
                    <div style="float:right">
                        <a  onClick="validateTab(2)"  href="javascript:void(0)"  class="btn btn-primary" style="float: right;">{{__('web.helpers.next')}}</a>
                    </div>
               </div>

             </div>
    </div>


    <div class="row tabcontent pt-1 disable" id="tab3">

           <div class="custom-form">
                 <div id="message3">Additional information for job help</div>
            </div>

             <div class="row">

              <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('experience', __('web.helpers.experience').':') }}<span class="text-danger">*</span>
                      {{ Form::select('experience',
                     ['<1 year of experience' =>'<1 year of experience' ,
                     '1 year of experience' =>'1 year of experience' ,
                     '2 years of experience '=>'2 years of experience ',
                     '3 years of experience'=>'3 years of experience',
                     '4 years of experience'=>'4 years of experience',
                     '5 years of experience'=>'5 years of experience']
                      ,@$postMetaArray['experience'], ['class' => 'form-control select-box required','placeholder'=>'How many years do you want your helpers to have?']) }}
                </div>
            </div>

             <div class="row">

               <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('type_of_property', __('Type of property').':') }}<span class="text-danger">*</span>
                      {{ Form::select('type_of_property',
                     ['Apartment' =>'Apartment' ,
                     'Farm' =>'Farm' ,
                     'Detached'=>'Detached',
                     '2 under 1 roof'=>'2 under 1 roof',
                     'terraced house'=>'Terraced house',
                     'other'=>'Other']
                      ,@$postMetaArray['type_of_property'], ['class' => 'form-control select-box required','placeholder'=>'What type of home do you live in?']) }}
                {{ Form::text('type_of_property_other', null, ['id'=>'type_of_property_other','class' => 'form-control other_box','placeholder'=>'Enter Other']) }}
                </div>
            </div>





            <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('what_needs_to_be_done', __('What needs to be done?').':') }}<span class="text-danger">*</span>
                      <p>Click on 1 or more service what you want to do</p>
                </div>

            </div>

            <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                  <p>
                  {{ Form::checkbox('what_needs_to_be_done[]', 'Plumbing masonry', (isset($postMetaArray['what_needs_to_be_done']) && in_array("Plumbing masonry", $postMetaArray['what_needs_to_be_done'])) ? true:false) ,['class' => 'form-control check-box'] }}
                  {{ Form::label('what_needs_to_be_done[]', __('Plumbing masonry')) }}
                  </p>
                   

                  <p>
                  {{ Form::checkbox('what_needs_to_be_done[]', 'Paint', (isset($postMetaArray['what_needs_to_be_done']) && in_array("Paint", $postMetaArray['what_needs_to_be_done'])) ? true:false) ,['class' => 'form-control check-box'] }}
                  {{ Form::label('what_needs_to_be_done[]', __('Paint')) }}
                  </p>
                  <p>
                  {{ Form::checkbox('what_needs_to_be_done[]', 'Stucoo', (isset($postMetaArray['what_needs_to_be_done']) && in_array("Stucoo", $postMetaArray['what_needs_to_be_done'])) ? true:false) ,['class' => 'form-control check-box'] }}
                  {{ Form::label('what_needs_to_be_done[]', __('Stucoo')) }}
                  </p>
                  <p>
                  {{ Form::checkbox('what_needs_to_be_done[]', 'Wallpaper', (isset($postMetaArray['what_needs_to_be_done']) && in_array("Wallpaper", $postMetaArray['what_needs_to_be_done'])) ? true:false) ,['class' => 'form-control check-box'] }}
                  {{ Form::label('what_needs_to_be_done[]', __('Wallpaper')) }}
                  </p>
                  <p>
                  {{ Form::checkbox('what_needs_to_be_done[]', 'Electricity', (isset($postMetaArray['what_needs_to_be_done']) && in_array("Electricity", $postMetaArray['what_needs_to_be_done'])) ? true:false) ,['class' => 'form-control check-box'] }}
                  {{ Form::label('what_needs_to_be_done[]', __('Electricity')) }}
                  </p>
                  <p>
                  {{ Form::checkbox('what_needs_to_be_done[]', 'Tiling', (isset($postMetaArray['what_needs_to_be_done']) && in_array("Tiling", $postMetaArray['what_needs_to_be_done'])) ? true:false) ,['class' => 'form-control check-box'] }}
                  {{ Form::label('what_needs_to_be_done[]', __('Tiling')) }}
                  </p>



                </div>

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                 <p>
                  {{ Form::checkbox('what_needs_to_be_done[]', 'Carpentry', (isset($postMetaArray['what_needs_to_be_done']) && in_array("Carpentry", $postMetaArray['what_needs_to_be_done'])) ? true:false) ,['class' => 'form-control check-box'] }}
                  {{ Form::label('what_needs_to_be_done[]', __('Carpentry')) }}
                  </p>
                  <p>
                  {{ Form::checkbox('what_needs_to_be_done[]', 'Lay floor', (isset($postMetaArray['what_needs_to_be_done']) && in_array("Lay floor", $postMetaArray['what_needs_to_be_done'])) ? true:false) ,['class' => 'form-control check-box'] }}
                  {{ Form::label('what_needs_to_be_done[]', __('Lay floor')) }}
                  </p>
                  <p>
                  {{ Form::checkbox('what_needs_to_be_done[]', 'Small Task', (isset($postMetaArray['what_needs_to_be_done']) && in_array("Small Task", $postMetaArray['what_needs_to_be_done'])) ? true:false) ,['class' => 'form-control check-box'] }}
                  {{ Form::label('what_needs_to_be_done[]', __('Small Task')) }}
                  </p>
                  <p>
                  {{ Form::checkbox('what_needs_to_be_done[]', 'In construction with helper', (isset($postMetaArray['what_needs_to_be_done']) && in_array("In construction with helper", $postMetaArray['what_needs_to_be_done'])) ? true:false) ,['class' => 'form-control check-box'] }}
                  {{ Form::label('what_needs_to_be_done[]', __('In construction with helper')) }}
                  </p>

                  <p>
                  <input name="what_needs_to_be_done[]" type="checkbox" value="other" class="what_needs_to_be_done_other_name">
                  {{ Form::label('what_needs_to_be_done[]', __('Other')) }}
                  </p>
                </div>
                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                 {{ Form::text('what_needs_to_be_done_other', @$postMetaArray['activities_other'], ['id'=>'what_needs_to_be_done_other','class' => 'form-control other_box','placeholder'=>'Enter Other']) }}
                </div>




            </div>


             <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('have_tool_supplies', __('web.helpers.do_you_have_all_the_tool_supplies_yourself').':') }}<span class="text-danger">*</span></br>
                    {{ Form::radio('have_tools_supplies', '1',isset($postMetaArray['have_tools_supplies']) && $postMetaArray['have_tools_supplies'] ==1 ?"checked":""),['class' => 'form-control check-box required']}} {{ __('web.helpers.yes') }}
                    &nbsp;&nbsp;&nbsp;
                    {{ Form::radio('have_tools_supplies', '0',isset($postMetaArray['have_tools_supplies']) && $postMetaArray['have_tools_supplies'] ==0 ?"checked":""),['class' => 'form-control check-box required'] }} {{ __('web.helpers.no') }}


                </div>
             </div>
             
             <div class="row" id="have_tool_supplies_yes" style="display:none">

                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('what_tools', __('web.helpers.what_tools').':') }}<span class="text-danger">*</span></br>
                    {{ Form::text('what_tools', @$postMetaArray['what_tools'], ['id'=>'what_tools','class' => 'form-control']) }}
                </div>
             </div>


             <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('other_wish', __('web.helpers.other_wish').':') }}<a href="#" class="tooltip_icon" data-toggle="tooltip" title="Do you have any other wishes that have not yet been mentioned?">?</a>
                      {{ Form::textarea('other_wish', @$postMetaArray['other_wish'], ['class' => 'form-control','row'=>'5']) }}
                </div>

            </div>

            <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('remark', __('Comments').':') }}<a href="#" class="tooltip_icon" data-toggle="tooltip" title="Do you have any comments that are important for the helper, for example:prefer not to smoke or rather someone who is afraid of animals">?</a><span class="text-danger">*</span>
                      {{ Form::textarea('remark', @$postMetaArray['remark'], ['class' => 'form-control required','row'=>'5','placeholder'=>"E.g.: we have a dog/prefer not a smoker"]) }}
                </div>

            </div>







       <div class="row">

       <div class="form-group col-sm-12">
       <div style="float:left">
            <a href="javascript:void(0)" onClick="openCity(event, 'tab2','tabb2')" class="btn btn-secondary text-dark">{{__('web.helpers.previous')}}</a>
        </div>
        <div style="float:right">
            <a  onClick="validateTab(3)"   class="btn btn-primary" style="float: right;">{{__('web.helpers.next')}}</a>
        </div>
       </div>

     </div>
    </div>


   <div class="row  tabcontent  disable pt-1 " id="tab4">
            <div class="custom-form">
                 <div id="message3">Write your Advertisement for {{$JobCategoryDetail->name}}, this will get you responses faster. </div>
            </div>

            <div class="row">
                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                    {{ Form::label('advertisement', __('web.helpers.title_of_your_ad')) }}<span class="text-danger">*</span>
                    {{ Form::text('advertisement', @$postMetaArray['advertisement'], ['placeholder'=>'Title of your ad','class' => 'form-control required','required']) }}
                </div>
            </div>



            <div class="row">


        <div class="form-group col-xl-6 col-md-6 col-sm-12">
            {{ Form::label('advertisement_text', __('web.helpers.write_your_ad')) }}<span class="text-danger">*</span>
            {{ Form::textarea('advertisement_text',@$postMetaArray['advertisement_text'], ['placeholder'=>'Tell us about yourself and your hobbies. This is the most important part of your ad! Take your time.','class' => 'form-control address-height required' , 'rows' => '5']) }}
        </div>
        </div>

        <div class="row">

        <div class="form-group col-sm-12">
        <div style="float:left">
            <a href="javascript:void(0)" onClick="openCity(event, 'tab4' ,'tabb3')" class="btn btn-secondary text-dark">{{__('web.helpers.previous')}}</a>
        </div>
        <div style="float:right">
            <a  onClick="validateTab(4)"  href="javascript:void(0)"  class="btn btn-primary" style="float: right;">{{__('web.helpers.next')}}</a>
        </div>
        </div>
     </div>
    </div>

    <div class="row  tabcontent pt-1 disable" id="tab5">
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
                <a href="javascript:void(0)" onClick="openCity(event, 'tab5','tabb4')" class="btn btn-secondary text-dark">{{__('web.helpers.previous')}}</a>
            </div>
             <div  style="float:right">
                <a  onClick="validateTab(5)" href="javascript:void(0)" class="btn btn-primary" style="float: right;">{{__('web.helpers.next')}}</a>
            </div>
            </div>

        </div>
    </div>

    <div class="row  tabcontent pt-1 disable" id="tab6">
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
                {{ Form::label('full_name', __('web.helpers.full_name').':') }}<span class="text-danger">*</span>
                {{ Form::text('full_name',@$postMetaArray['full_name'], ['class' => 'form-control required','placeholder' =>'Enter your full name']) }}
                 <p><b>{{ __('web.helpers.date')}}</b>: {{@$postMetaArray['user_signature_date']}}</p>
                 <p><b>{{ __('web.helpers.signature')}}</b></p>
                 <img style="max-width:100%;" src="{{@$postMetaArray['user_signature']}}" />

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




