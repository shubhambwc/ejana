    <div class="row  tabcontent active pt-1" id="tab1">
    <div class="custom-form">
         <div id="message3"><?php echo e(__('web.helpers.helprequestor_details')); ?>.</div>
    </div>

    <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    <?php echo e(Form::label('dob', __('web.helpers.birth_date').':')); ?><a href="#" class="tooltip_icon" data-toggle="tooltip" title="We ask for your date of birth to verify that you are old enough. Only your age will be visible on your profile.">?</a><span class="text-danger">*</span>
                    <?php echo e(Form::text('dob', @$postMetaArray['dob'], ['class' => 'form-control required','id' => 'userbirthDate','autocomplete' => 'off'])); ?>

                </div>
    </div>
   <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    <?php echo e(Form::label('gender', __('web.helpers.gender').':')); ?></br>
                    <?php echo e(Form::radio('gender', 'male',isset($postMetaArray['gender']) && $postMetaArray['gender'] =='male' ?"checked":"")); ?> <?php echo e(__('web.helpers.male')); ?> &nbsp;&nbsp;&nbsp;
                    <?php echo e(Form::radio('gender', 'female',isset($postMetaArray['gender']) && $postMetaArray['gender'] =='female' ?"checked":"" )); ?> <?php echo e(__('web.helpers.female')); ?>

                </div>
    </div>
    <div class="row">
                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                    <?php echo e(Form::label('mother_lang_id',__('web.helpers.native_language').':')); ?><span class="text-danger">*</span>
                    <?php echo e(Form::select('mother_lang_id', $data['language'],@$postMetaArray['mother_lang_id'], ['id'=>'mother_lang_id','class' => 'form-control select-box required'])); ?>

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
                        <?php echo e(Form::label('Other_lang',__('web.helpers.other_language_name').':')); ?>

                        <?php echo e(Form::select('Other_lang['.$i.'][name]', $data['language'],@$OtherLang['name'], ['id'=>'Other_lang_name_'.$i,'class' => 'form-control select-box'])); ?>

                    </div>

                       <div class="form-group col-xl-4 col-md-4 col-sm-12">
                        <?php echo e(Form::label('Langauge level',__('web.helpers.language_level').':')); ?>

                        <?php echo e(Form::select('Other_lang['.$i.'][level]', $data['lang_level'],@$OtherLang['level'], ['id'=>'Other_lang_level_'.$i,'class' => 'form-control select-box'])); ?>

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
                                <a  id="AddNew"  href="javascript:void(0)" class="btn btn-primary" ><i class="fa fa-plus" aria-hidden="true"></i>  <?php echo e(__('Langauge')); ?></a>
                            </div>
    </div>


    <div class="row">
                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                    <?php echo e(Form::label('phone', __('web.helpers.phone_no'))); ?><span class="text-danger">*</span><br>
                    <?php echo e(Form::text('phone',@$postMetaArray['phone'],
                     ['class' => 'form-control required','required','id'=>'phoneRefNumber'])); ?>

                </div>
        </div>

       <div class="row">
                  <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    <?php echo e(Form::label('address', __('web.helpers.address').':')); ?><span class="text-danger">*</span>
                    <?php echo e(Form::text('address', @$postMetaArray['address'], ['class' => 'form-control required','required'])); ?>

                </div>
    </div>

   <div class="row">
                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    <?php echo e(Form::label('zip_code', __('web.helpers.postal_code').':')); ?><span class="text-danger">*</span>
                    <?php echo e(Form::text('zip_code', @$postMetaArray['zip_code'], ['class' => 'form-control required','required','maxlength' => 6])); ?>

                </div>
    </div>

    <div class="row">
                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    <?php echo e(Form::label('place', __('web.helpers.place').':')); ?><span class="text-danger">*</span>
                    <?php echo e(Form::text('place', @$postMetaArray['place'], ['class' => 'form-control required','required'])); ?>

                </div>
    </div>

    <div class="row">
                <!-- Submit Field -->
               <div class="form-group col-sm-12">
                 <div style="float:left">
                        <a href="<?php echo e(route('company.index')); ?>" class="btn btn-secondary text-dark"><?php echo e(__('web.helpers.cancel')); ?></a>

                </div>
                 <div  style="float:right">
                    <a  onClick="validateTab(1)"  class="btn btn-primary" style="float: right;"><?php echo e(__('web.helpers.next')); ?></a>
                </div>
               </div>

</div>


    </div>




    <div class="row tabcontent pt-1 disable" id="tab2">
            <div class="custom-form">
                 <div id="message3">Fill in your garden help information , this will make you screech faster reactions</div>
            </div>
                <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      <?php echo e(Form::label('date_need', __('web.helpers.when_do_you_need_garden_help').'?:')); ?><span class="text-danger">*</span>
                      <?php echo e(Form::text('date_need', @$postMetaArray['date_need'], ['class' => 'form-control required pickdate'])); ?>


                </div>
                </div>





                 <div class="row">

               <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      <?php echo e(Form::label('type_of_garden_help', __('web.helpers.type_of_garden_help').':')); ?><a href="#" class="tooltip_icon" data-toggle="tooltip" title="One-off, Fixed days, Flexible days">?</a><span class="text-danger">*</span>
                      <?php echo e(Form::select('type_of_garden_help',
                      ['Vast' =>'Vast' ,
                      'Flexible' =>'Flexible' ,
                      'Occasionally or once in a while'=>'Occasionally or once in a while',
                      'other'=>'Other'
                      ]
                      ,@$postMetaArray['type_of_garden_help'], ['id'=>'type_of_garden_help','class' => 'form-control select-box select_box_other','placeholder'=>'You can adjust your schedule at any time.'])); ?>

                <?php echo e(Form::text('type_of_garden_help_other', @$postMetaArray['type_of_garden_help_other'], ['id'=>'type_of_garden_help_other','class' => (isset($postMetaArray['type_of_garden_help']) && $postMetaArray['type_of_garden_help']== "other") ? 'form-control other_box_visible' : 'form-control other_box','placeholder'=>'Enter Other'])); ?>


                </div>
                </div>



                 <div class="row">

        <div class="form-group col-xl-6 col-md-6 col-sm-12" onClick="toggleTimeAvailableCalendar()">
            <?php echo e(Form::label('time_available', __('web.helpers.what_days_and_times').':')); ?><span class="text-danger">*</span>
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
                   <input type="hidden" id="time_available" name="time_available" value="<?php echo e(@$postMetaArray['time_available']); ?>">
                   <?php
                   if(isset($postMetaArray['date_time_available']) && is_array($postMetaArray['date_time_available'])){
                   $date_time_available = json_encode($postMetaArray['date_time_available']);
                   }else{
                   $date_time_available = '';
                   }
                   ?>
                   <input type="hidden" id="date_time_available" name="date_time_available" value="<?php echo e($date_time_available); ?>">

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
                        <a href="javascript:void(0)"  onClick="openCity(event, 'tab1' ,'tabb1')" class="btn btn-secondary text-dark"><?php echo e(__('web.helpers.previous')); ?></a>
                    </div>
                    <div style="float:right">
                        <a  onClick="validateTab(2)"  href="javascript:void(0)"  class="btn btn-primary" style="float: right;"><?php echo e(__('web.helpers.next')); ?></a>
                    </div>
               </div>

             </div>
    </div>


    <div class="row tabcontent pt-1 disable" id="tab3">

           <div class="custom-form">
                 <div id="message3">Additional information for garden help</div>
            </div>

             <div class="row">

               <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      <?php echo e(Form::label('experience', __('web.helpers.experience').':')); ?><span class="text-danger">*</span>
                      <?php echo e(Form::select('experience',
                     ['<1 year of experience' =>'<1 year of experience' ,
                     '1 year of experience' =>'1 year of experience' ,
                     '2 years of experience '=>'2 years of experience ',
                     '3 years of experience'=>'3 years of experience',
                     '4 years of experience'=>'4 years of experience',
                     '5 years of experience'=>'5 years of experience']
                      ,@$postMetaArray['experience'], ['class' => 'form-control select-box required','placeholder'=>'How many years do you want your helpers to have?'])); ?>

                </div>
            </div>

             <div class="row">

               <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      <?php echo e(Form::label('garden_area', __('web.helpers.garden_area').':')); ?><span class="text-danger">*</span>
                      <?php echo e(Form::select('garden_area',
                     ['< 30m2' =>'< 30m2' ,
                     '30 to 80m2' =>'30 to 80m2' ,
                     '80 to 120m2'=>'80 to 120m2',
                     '120 to 250m2'=>'120 to 250m2',
                     '250m2 and larger'=>'250m2 and larger']
                      ,@$postMetaArray['garden_area'], ['class' => 'form-control select-box required','placeholder'=>'How much is your garden area'])); ?>

                </div>
            </div>






            <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      <?php echo e(Form::label('preference', __('web.helpers.preference').':')); ?><a href="#" class="tooltip_icon" data-toggle="tooltip" title="Advice: You need to make sure that the helper can work safely, So: a stable cleaning ledder, do not leave on a ladder, work gloves etc. If you do not do this and something happens, you are liable for the personal injury of the helper.">?</a><span class="text-danger">*</span>
                      <p>Click on 1 or more service what you want to do</p>
                </div>

            </div>

            <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      <?php echo e(Form::label('activities', __('Activities').':')); ?><span class="text-danger">*</span>
                </div>

            </div>

            <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                  <p>
                  <?php echo e(Form::checkbox('activities[]', 'Watering plants and flour', (isset($postMetaArray['activities']) && in_array("Watering plants and flour", $postMetaArray['activities'])) ? true:false) ,['class' => 'form-control check-box']); ?>

                  <?php echo e(Form::label('activities[]', __('Watering plants and flour'))); ?>

                  </p>
                  <p>
                  <?php echo e(Form::checkbox('activities[]', 'Sowing plants', (isset($postMetaArray['activities']) && in_array("Sowing plants", $postMetaArray['activities'])) ? true:false) ,['class' => 'form-control check-box']); ?>

                  <?php echo e(Form::label('activities[]', __('Sowing plants'))); ?>

                  </p>
                  <p>
                  <?php echo e(Form::checkbox('activities[]', 'Removing weeds', (isset($postMetaArray['activities']) && in_array("Removing weeds", $postMetaArray['activities'])) ? true:false) ,['class' => 'form-control check-box']); ?>

                  <?php echo e(Form::label('activities[]', __('Removing weeds'))); ?>

                  </p>
                  <p>
                  <?php echo e(Form::checkbox('activities[]', 'Grasmaaien', (isset($postMetaArray['activities']) && in_array("Grasmaaien", $postMetaArray['activities'])) ? true:false) ,['class' => 'form-control check-box']); ?>

                  <?php echo e(Form::label('activities[]', __('Grasmaaien'))); ?>

                  </p>
                  <p>
                  <?php echo e(Form::checkbox('activities[]', 'Sweep', (isset($postMetaArray['activities']) && in_array("Sweep", $postMetaArray['activities'])) ? true:false) ,['class' => 'form-control check-box']); ?>

                  <?php echo e(Form::label('activities[]', __('Sweep'))); ?>

                  </p>
                  <p>
                  <?php echo e(Form::checkbox('activities[]', 'Pruning, trimming and/or felling', (isset($postMetaArray['activities']) && in_array("Pruning, trimming and/or felling", $postMetaArray['activities'])) ? true:false) ,['class' => 'form-control check-box']); ?>

                  <?php echo e(Form::label('activities[]', __('Pruning, trimming and/or felling'))); ?>

                  </p>
                  <p>
                  <?php echo e(Form::checkbox('activities[]', 'Pond cleaning', (isset($postMetaArray['activities']) && in_array("Pond cleaning", $postMetaArray['activities'])) ? true:false) ,['class' => 'form-control check-box']); ?>

                  <?php echo e(Form::label('activities[]', __('Pond cleaning'))); ?>

                  </p>
                  <p>
                  <?php echo e(Form::checkbox('activities[]', 'Cleaning terrace/tiles/garden furniture', (isset($postMetaArray['activities']) && in_array("Cleaning terrace/tiles/garden furniture", $postMetaArray['activities'])) ? true:false) ,['class' => 'form-control check-box']); ?>

                  <?php echo e(Form::label('activities[]', __('Cleaning terrace/tiles/garden furniture'))); ?>

                  </p>

                </div>

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                  <p>
                  <?php echo e(Form::checkbox('activities[]', 'Cleaning up the barn', (isset($postMetaArray['activities']) && in_array("Cleaning up the barn", $postMetaArray['activities'])) ? true:false) ,['class' => 'form-control check-box']); ?>

                  <?php echo e(Form::label('activities[]', __('Cleaning up the barn'))); ?>

                  </p>
                  <p>
                  <?php echo e(Form::checkbox('activities[]', 'Remainder', (isset($postMetaArray['activities']) && in_array("Remainder", $postMetaArray['activities'])) ? true:false) ,['class' => 'form-control check-box']); ?>

                  <?php echo e(Form::label('activities[]', __('Remainder'))); ?>

                  </p>
                  <p>
                  <?php echo e(Form::checkbox('activities[]', 'Placing fence, disassembling', (isset($postMetaArray['activities']) && in_array("Placing fence, disassembling", $postMetaArray['activities'])) ? true:false) ,['class' => 'form-control check-box']); ?>

                  <?php echo e(Form::label('activities[]', __('Placing fence, disassembling'))); ?>

                  </p>
                  <p>
                  <?php echo e(Form::checkbox('activities[]', 'Shoveling away sand/clay', (isset($postMetaArray['activities']) && in_array("Shoveling away sand/clay", $postMetaArray['activities'])) ? true:false) ,['class' => 'form-control check-box']); ?>

                  <?php echo e(Form::label('activities[]', __('Shoveling away sand/clay'))); ?>

                  </p>
                  <p>
                  <?php echo e(Form::checkbox('activities[]', 'Tilling/paving', (isset($postMetaArray['activities']) && in_array("Tilling/paving", $postMetaArray['activities'])) ? true:false) ,['class' => 'form-control check-box']); ?>

                  <?php echo e(Form::label('activities[]', __('Tilling/paving'))); ?>

                  </p>
                  <p>
                  <?php echo e(Form::checkbox('activities[]', 'Placing/removing the pond', (isset($postMetaArray['activities']) && in_array("Placing/removing the pond", $postMetaArray['activities'])) ? true:false) ,['class' => 'form-control check-box']); ?>

                  <?php echo e(Form::label('activities[]', __('Placing/removing the pond'))); ?>

                  </p>
                  <p>
                  <?php echo e(Form::checkbox('activities[]', 'In construction with the helper', (isset($postMetaArray['activities']) && in_array("In construction with the helper", $postMetaArray['activities'])) ? true:false) ,['class' => 'form-control check-box']); ?>

                  <?php echo e(Form::label('activities[]', __('In construction with the helper'))); ?>

                  </p>
                  <p>
                  <input name="activities[]" type="checkbox" value="other" class="activities_other_name">
                  <?php echo e(Form::label('activities[]', 'Other', (isset($postMetaArray['activities']) && in_array("Other", $postMetaArray['activities'])) ? true:false) ,['class' => 'form-control check-box']); ?>

                  </p>
                </div>
                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                 <?php echo e(Form::text('activities_other', @$postMetaArray['activities_other'], ['id'=>'activities_other','class' => 'form-control other_box','placeholder'=>'Enter Other'])); ?>

                </div>


            </div>





             <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    <?php echo e(Form::label('have_tool_supplies', __('web.helpers.do_you_have_all_the_tool_supplies_yourself').':')); ?><span class="text-danger">*</span></br>
                    <?php echo e(Form::radio('have_tool_supplies', '1',isset($postMetaArray['have_tool_supplies']) && $postMetaArray['have_tool_supplies'] ==1 ? true:false),['class' => 'form-control check-box required']); ?> <?php echo e(__('web.helpers.yes')); ?>

                    &nbsp;&nbsp;&nbsp;
                    <?php echo e(Form::radio('have_tool_supplies', '0',isset($postMetaArray['have_tool_supplies']) && $postMetaArray['have_tool_supplies'] ==0 ? true:false),['class' => 'form-control check-box required']); ?> <?php echo e(__('web.helpers.no')); ?>


                </div>
             </div>

             <div class="row" id="have_tool_supplies_yes" style="display:none">

                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    <?php echo e(Form::label('what_tools', __('web.helpers.what_tools').':')); ?><span class="text-danger">*</span></br>
                    <?php echo e(Form::text('what_tools', @$postMetaArray['what_tools'], ['id'=>'what_tools','class' => 'form-control'])); ?>

                </div>
             </div>



              <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      <?php echo e(Form::label('other_wish', __('web.helpers.other_wish').':')); ?><a href="#" class="tooltip_icon" data-toggle="tooltip" title="Do you have any other wishes that have not yet been mentioned?">?</a>
                      <?php echo e(Form::textarea('other_wish', @$postMetaArray['other_wish'], ['class' => 'form-control','row'=>'5'])); ?>

                </div>

            </div>
            <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      <?php echo e(Form::label('remark', __('web.helpers.comments').':')); ?><a href="#" class="tooltip_icon" data-toggle="tooltip" title="Do you have any comments that are important to the gardner, for example: prefer not to smoke or rather someone who is not afraid of animals.">?</a><span class="text-danger">*</span>
                      <?php echo e(Form::textarea('remark', @$postMetaArray['remark'], ['class' => 'form-control required','row'=>'5','placeholder'=>"E.g.: Beware! We have 2 big dogs it's just about the backyard."])); ?>

                </div>

            </div>







       <div class="row">

       <div class="form-group col-sm-12">
       <div style="float:left">
            <a href="javascript:void(0)" onClick="openCity(event, 'tab2','tabb2')" class="btn btn-secondary text-dark"><?php echo e(__('web.helpers.previous')); ?></a>
        </div>
        <div style="float:right">
            <a  onClick="validateTab(3)"   class="btn btn-primary" style="float: right;"><?php echo e(__('web.helpers.next')); ?></a>
        </div>
       </div>

     </div>
    </div>


    <div class="row  tabcontent  disable pt-1 " id="tab4">
            <div class="custom-form">
                 <div id="message3">Write your Advertisement for <?php echo e($JobCategoryDetail->name); ?>, this will get you responses faster. </div>
            </div>

            <div class="row">
                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                    <?php echo e(Form::label('advertisement', __('web.helpers.title_of_your_ad'))); ?><span class="text-danger">*</span>
                    <?php echo e(Form::text('advertisement', @$postMetaArray['advertisement'], ['placeholder'=>'Title of your ad','class' => 'form-control required','required'])); ?>

                </div>
            </div>



            <div class="row">


        <div class="form-group col-xl-6 col-md-6 col-sm-12">
            <?php echo e(Form::label('advertisement_text', __('web.helpers.write_your_ad'))); ?><span class="text-danger">*</span>
            <?php echo e(Form::textarea('advertisement_text',@$postMetaArray['advertisement_text'], ['placeholder'=>'Tell us about yourself and your hobbies. This is the most important part of your ad! Take your time.','class' => 'form-control address-height required' , 'rows' => '5'])); ?>

        </div>
        </div>

        <div class="row">

        <div class="form-group col-sm-12">
        <div style="float:left">
            <a href="javascript:void(0)" onClick="openCity(event, 'tab4' ,'tabb3')" class="btn btn-secondary text-dark"><?php echo e(__('web.helpers.previous')); ?></a>
        </div>
        <div style="float:right">
            <a  onClick="validateTab(4)"  href="javascript:void(0)"  class="btn btn-primary" style="float: right;"><?php echo e(__('web.helpers.next')); ?></a>
        </div>
        </div>
     </div>
    </div>

    <div class="row  tabcontent pt-1 disable" id="tab5">
    <div class="custom-form">
         <div id="message3"><?php echo e(__('web.helpers.helper_complete_profile')); ?></div>

    </div>


        <div class="row">
        <div class="form-group col-xl-6 col-md-6 col-sm-6">
                <?php echo e(Form::label('image1', __("web.helpers.profile_picture"))); ?>

                <div class="custom-file">
                    <input type="file" name="profile_pictures" class="custom-file-input required" id="image1">
                    <label class="custom-file-label rounded" name="image1"><i class="mdi mdi-cloud-upload mr-1"></i><?php echo e(__('web.helpers.upload_profile_image')); ?></label>
                </div>

                <div class="custom-file-preview" id="custom-file-image1" style="display:<?php echo e(isset($postMetaArray['profile_pictures_url'])?'block':'none'); ?>">
                     <?php echo App\Http\Controllers\CandidateController:: isDocImageType(@$postMetaArray['profile_pictures_url'],'image1_preview');?>
                </div>


        </div>
        </div>

         <div class="row">
        <div class="form-group col-xl-6 col-md-6 col-sm-6">
         <?php echo e(Form::checkbox('image1_later', 'yes', isset($postMetaArray['image1_later']) && $postMetaArray['image1_later'] =='yes' ? true:false) ,['class' => 'form-control check-box']); ?>

         <?php echo e(Form::label('image1_later', __("web.helpers.helper_will_add_photo_later"))); ?>

        </div>
        </div>




        <div class="row">
             <!-- Submit Field -->
           <div class="form-group col-sm-12">
             <div style="float:left">
                <a href="javascript:void(0)" onClick="openCity(event, 'tab5','tabb4')" class="btn btn-secondary text-dark"><?php echo e(__('web.helpers.previous')); ?></a>
            </div>
             <div  style="float:right">
                <a  onClick="validateTab(5)" href="javascript:void(0)" class="btn btn-primary" style="float: right;"><?php echo e(__('web.helpers.next')); ?></a>
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
                <?php echo e(Form::label('full_name', __('web.helpers.full_name').':')); ?><span class="text-danger">*</span>
                <?php echo e(Form::text('full_name',@$postMetaArray['full_name'], ['class' => 'form-control required','placeholder' =>'Enter your full name'])); ?>

                 <p><b><?php echo e(__('web.helpers.date')); ?></b>: <?php echo e(@$postMetaArray['user_signature_date']); ?></p>
                 <p><b><?php echo e(__('web.helpers.signature')); ?></b></p>
                 <img style="max-width:100%;" src="<?php echo e(@$postMetaArray['user_signature']); ?>" />

                </div>



                <div class="row">

                <div class="form-group col-xl-3 col-md-3 col-sm-12">
                </div>
                <div class="form-group col-xl-6 col-md-6 col-sm-12" style="text-align: center;">
                         <a onClick="SubmitServiceForm()" href="javascript:void(0)"  class="btn btn-primary"><?php echo e(__('Send')); ?></a>
              </div>
                <div class="form-group col-xl-3 col-md-3 col-sm-12">
                </div>




                </div>

       </div>
    </div>




<?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/companies/edit_fields_5.blade.php ENDPATH**/ ?>