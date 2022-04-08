
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

    <div class="row  tabcontent pt-1 disable" id="tab2">
                <div class="custom-form">
                    <div id="message3">{{__('web.helpers.add_your_children')}} </div>
                </div>


                

                <div id="additional_child">
                 <?php
                   if(isset($postMetaArray['child']) ) {
                   $i=0;
                   foreach($postMetaArray['child'] as $child){
                   ?>
                   <div class="additional_child_row" id="child_<?php echo $i;?>" style="display: inline-flex;">
                   
                <div class="row">
                <div class="form-group col-xl-3 col-md-3 col-sm-12">
                      {{ Form::label('child_name', __('web.helpers.child_name').':') }}<span class="text-danger">*</span>
                      {{ Form::text('child['.$i.'][name]', @$child['name'], ['class' => 'form-control required']) }}
                </div>
               

                <div class="form-group col-xl-3 col-md-3 col-sm-12">
                    {{ Form::label('child_gender', __('messages.candidate.gender').':') }}<span class="text-danger">*</span></br>
                    {{ Form::radio('child['.$i.'][gender]', 'male',isset($child['gender']) && $child['gender'] =='male' ?"checked":"") }} {{ __('web.helpers.male') }} &nbsp;&nbsp;&nbsp;
                    {{ Form::radio('child['.$i.'][gender]', 'female',isset($child['gender']) && $child['gender'] =='female' ?"checked":"" )}} {{ __('web.helpers.female') }}
                </div>
                

                <div class="form-group col-xl-3 col-md-3 col-sm-12">
                    {{ Form::label('child_dob', __('messages.candidate.birth_date').':') }}<span class="text-danger">*</span>
                    {{ Form::text('child['.$i.'][dob]', @$child['dob'], ['class' => 'form-control required userbirthDate','autocomplete' => 'off']) }}
                </div>
                
                </div>
                
                   
                   </div>
                   
                   <?php  $i++; 
                   } } ?>

                </div>


                <div class="row form-group col-sm-12">
                    <a  id="AddNewChild"  href="javascript:void(0)" class="btn btn-primary" ><i class="fa fa-plus" aria-hidden="true"></i> {{__('Child')}}</a>
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

    <div class="row  tabcontent pt-1 disable" id="tab3">
            <div class="custom-form">
                 <div id="message3">Fill in your reception information , this will make you screech faster reactions </div>
            </div>
                <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('date_childcare_need', __('web.helpers.when_do_you_need_child_care').':') }}<span class="text-danger">*</span>
                      {{ Form::text('date_childcare_need', @$postMetaArray['date_childcare_need'], ['class' => 'form-control required pickdate']) }}

                </div>
                </div>





                <div class="row">

               <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('type_of_care', __('web.helpers.type_of_care').':') }}<a href="#" class="tooltip_icon" data-toggle="tooltip" title="Fixed days, Flexible days, Occasionally, Emergency babysitter">?</a><span class="text-danger">*</span>
                      {{ Form::select('type_of_care',
                      ['Regular babysitter' =>'Regular babysitter' ,
                      'Flexible babysitter' =>'Flexible babysitter' ,
                      'Occasionally(or once)'=>'Occasionally(or once)',
                      'Spoedoppas'=>'Spoedoppas',
                      'other'=>'Other'
                      ]
                      ,@$postMetaArray['type_of_care'], ['id'=>'type_of_care','class' => 'form-control select-box select_box_other']) }}
                     {{ Form::text('type_of_care_other', @$postMetaArray['type_of_care_other'], ['id'=>'type_of_care_other','class' => (isset($postMetaArray['type_of_care']) && $postMetaArray['type_of_care'] =="other") ? 'form-control other_box_visible' : 'form-control other_box','placeholder'=>'Enter Other']) }}

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
                      ,@$postMetaArray['preferred_reception'], ['id'=>'preferred_reception','class' => 'form-control select-box select_box_other_multiple','multiple']) }}
                      {{ Form::text('preferred_reception_other',  @$postMetaArray['preferred_reception_other'], ['id'=>'preferred_reception_other','class' => (isset($postMetaArray['preferred_reception']) && in_array("other", $postMetaArray['preferred_reception'])) ? 'form-control other_box_visible' : 'form-control other_box','placeholder'=>'Enter Other']) }}

                </div>

                </div>

                 <div class="row">

        <div class="form-group col-xl-6 col-md-6 col-sm-12" onClick="toggleTimeAvailableCalendar()">
            {{ Form::label('time_available', __('web.helpers.what_days_and_times').':') }}<span class="text-danger">*</span>
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

    <div class="row  tabcontent pt-1 disable" id="tab4">

           <div class="custom-form">
                 <div id="message3">Fill in your extra information, this will give you requests that suit you better</div>
            </div>

           <div class="row">

               <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('have_pets', __('web.helpers.do_you_have_pets').':') }}<span class="text-danger">*</span>
                      {{ Form::select('have_pets[]',
                     ['dog' =>'Dog' ,
                     'cat' =>'Cat' ,
                     'other'=>'Other animal',
                     'no'=>'No']
                      ,@$postMetaArray['have_pets'], ['id'=>'have_pets', 'class' => 'form-control select-box select_box_other_multiple required','multiple']) }}
                    {{ Form::text('have_pets_other', @$postMetaArray['have_pets_other'], ['id'=>'have_pets_other','class' => (isset($postMetaArray['have_pets']) && in_array("other", $postMetaArray['have_pets'])) ? 'form-control other_box_visible' : 'form-control other_box']) }}


                </div>
            </div>

              <div class="row">
                    <div class="form-group col-xl-6 col-md-6 col-sm-12">
                          {{ Form::label('wish', __('web.helpers.wish').':') }}
                   </div>
                </div>



           <div class="row">
				<div class="col-md-2">
				    {{ Form::label('experience', __('web.helpers.experience').':') }} <span id="span_minimum_exp">{{ @$postMetaArray['minimum_exp'] }}</span>
				    {{ Form::hidden('minimum_exp', @$postMetaArray['minimum_exp'], ['id' => 'minimum_exp', 'class' => 'form-control']) }}
    			</div>
				<div class="col-md-4" style="padding-top:5px">
					<div id="exp_range"></div>
				</div>

				<div class="col-md-2">
				    <span id="span_maximum_exp">{{ @$postMetaArray['maximum_exp'] }}</span>
				    {{ Form::hidden('maximum_exp', @$postMetaArray['maximum_exp'], ['id' => 'maximum_exp', 'class' => 'form-control']) }}
    			</div>


			</div>



             <div class="row">
				<div class="col-md-2">
				    {{ Form::label('age', __('web.helpers.age').':') }} <span id="span_minimum_age">{{ @$postMetaArray['minimum_age'] }}</span>
				    {{ Form::hidden('minimum_age', @$postMetaArray['minimum_age'], ['id' => 'minimum_age', 'class' => 'form-control']) }}
    			</div>
				<div class="col-md-4" style="padding-top:5px">
					<div id="age_range"></div>
				</div>
				<div class="col-md-2">
				    <span id="span_maximum_age">{{ @$postMetaArray['maximum_age'] }}</span>
				    {{ Form::hidden('maximum_age', @$postMetaArray['maximum_age'], ['id' => 'maximum_exp', 'class' => 'form-control']) }}
    			</div>
             </div>

             <div class="row">
                    <div class="form-group col-xl-6 col-md-6 col-sm-12">

                   </div>
                </div>




                
                        <div  id="additionalWishLang">
                        
                        <?php
                   if(isset($postMetaArray['wish_lang']) ) {
                   $w=0;
                   foreach($postMetaArray['wish_lang'] as $wishlang){
                   ?>
                   <div class="additional_wlang_row row" id="add_wish_lang<?php echo $w;?>">
                   <div class="form-group col-xl-6 col-md-5 col-sm-6">
                                    {{ Form::label('wish_lang_name', __('web.helpers.language').':') }}
                                    {{ Form::select('wish_lang['.$w.'][name]', $data['language'],@$wishlang[name], ['class' => 'form-control select-box','placeholder' => 'Select Langauge']) }}
                               </div>
                        
                   </div>
                   
                   <?php 
                   $w++;
                   } } ?>


                         </div>

                          <div class="row form-group col-sm-12">
                                <a id="AddNewWishLanguage"  href="javascript:void(0)" class="btn btn-primary" ><i class="fa fa-plus" aria-hidden="true"></i> {{__('Langauge')}}</a>
                            </div>







              <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('need_extra_care', __('web.helpers.do_your_children_need_extra_care').':') }}<a href="#" class="tooltip_icon" data-toggle="tooltip" title="Such as: my child is diabetic or my child has medical indiction or orher">?</a><span class="text-danger">*</span></br>
                    {{ Form::radio('need_extra_care', '1',isset($postMetaArray['need_extra_care']) && $postMetaArray['need_extra_care'] ==1 ? true:false),['class' => 'form-control check-box required']}} {{ __('web.helpers.yes') }}
                    &nbsp;&nbsp;&nbsp;
                    {{ Form::radio('need_extra_care', '0',isset($postMetaArray['need_extra_care']) && $postMetaArray['need_extra_care'] ==0 ? true:false),['class' => 'form-control check-box required'] }} {{ __('web.helpers.no') }}
                </div>
             </div>

             <div style="display:<?php if(isset($postMetaArray['need_extra_care']) && $postMetaArray['need_extra_care'] ==1){ echo 'block';}else{ echo 'none';}?>" id="need_extra_care_box">
             

            <div  id="additional_need_extra_care_box">
            
             <?php
                   if(isset($postMetaArray['need_extra_care_child']) ) {
                   $ec=0;
                   foreach($postMetaArray['need_extra_care_child'] as $extracarechild){
                   ?>
                   
                   <div class="additional_need_extra_care_box" id="additional_need_extra_care_box<?php echo $ec;?>">
                   
                   <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('need_extra_care_child_like_what', __('web.helpers.like_what').':') }}
                    {{ Form::text('need_extra_care_child['.$ec.'][like_what]', $extracarechild['like_what'], ['class' => 'form-control']) }}
                </div>
            </div>

            <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('need_extra_care_child_name', __('web.helpers.the_name_of_the_child').':') }}
                    {{ Form::text('need_extra_care_child['.$ec.'][name]', $extracarechild['name'], ['class' => 'form-control']) }}
                </div>
            </div>
            
                   </div>
                   
            <?php 
            $ec++;
            }
            }
            ?>

            </div>

            <div class="row form-group col-sm-12">
                <a id="AddNewExtraCareChild"  href="javascript:void(0)" class="btn btn-primary" ><i class="fa fa-plus" aria-hidden="true"></i> {{__('ADD')}}</a>
            </div>



            </div>


             <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-6">
                    {{ Form::label('extra_chores', __('web.helpers.do_you_want_the_babysitter_to_do_extra_chores_around_the_house').':') }}<a href="#" class="tooltip_icon" data-toggle="tooltip" title="Such as: my child is diabetic or my child has medical indiction or orher">?</a><span class="text-danger">*</span></br>
                    {{ Form::radio('extra_chores', '1',isset($postMetaArray['extra_chores']) && $postMetaArray['extra_chores'] ==1 ? true:false),['class' => 'form-control check-box required']}} {{ __('web.helpers.yes') }}
                    &nbsp;&nbsp;&nbsp;
                    {{ Form::radio('extra_chores', '0',isset($postMetaArray['extra_chores']) && $postMetaArray['extra_chores'] ==0 ? true:false),['class' => 'form-control check-box required'] }} {{ __('web.helpers.no') }}

                </div>
             </div>

              <div class="row" id="extra_chores_yes_box" style="display:<?php if(isset($postMetaArray['extra_chores']) && $postMetaArray['extra_chores'] ==1){ echo 'block';}else{ echo 'none';}?>"">

               <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('extra_chores_yes', __('web.helpers.like_what').':') }}<span class="text-danger">*</span>
                      {{ Form::select('extra_chores_yes[]',
                     ['Craft' =>'Craft' ,
                     'Cook' =>'Cook' ,
                     'Light house cleaning'=>'Light house cleaning',
                     'Help with homework'=>'Help with homework',
                     'Read aloud'=>'Read aloud',
                     'Plan activities'=>'Plan activities',
                     'other'=>'Other']
                      ,@$postMetaArray['extra_chores_yes'], ['id'=>'extra_chores_yes', 'class' => 'form-control select-box select_box_other_multiple','multiple']) }}
                    {{ Form::text('extra_chores_yes_other', $postMetaArray['extra_chores_yes_other'], ['id'=>'extra_chores_yes_other','class' => (isset($postMetaArray['extra_chores_yes']) && in_array("other", $postMetaArray['extra_chores_yes'])) ? 'form-control other_box_visible' : 'form-control other_box','placeholder'=>'Enter Other']) }}


                </div>
            </div>


     <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('other_wish', __('web.helpers.other_wish').':') }}<a href="#" class="tooltip_icon" data-toggle="tooltip" title="Do you have any other wishes that have not yet been mentioned?">?</a>
                      {{ Form::textarea('other_wish', $postMetaArray['other_wish'], ['class' => 'form-control','row'=>'5']) }}
                </div>

            </div>

    <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('remarks', __('web.helpers.remarks').':') }}<a href="#" class="tooltip_icon" data-toggle="tooltip" title="Do you hvae any comments that are important for the babysister, for example: prefer not to smoke or rather someone who is not afraid of animals or someone who has experience with crying babies">?</a>
                      {{ Form::textarea('remarks', $postMetaArray['remarks'], ['class' => 'form-control','row'=>'5']) }}
                </div>

            </div>


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

    <div class="row  tabcontent  disable pt-1 " id="tab5">
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
            <a href="javascript:void(0)" onClick="openCity(event, 'tab4' ,'tabb4')" class="btn btn-secondary text-dark">{{__('web.helpers.previous')}}</a>
        </div>
        <div style="float:right">
            <a  onClick="validateTab(5)"  href="javascript:void(0)"  class="btn btn-primary" style="float: right;">{{__('web.helpers.next')}}</a>
        </div>
        </div>
     </div>
    </div>

    <div class="row  tabcontent pt-1 disable" id="tab6">
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
                <a href="javascript:void(0)" onClick="openCity(event, 'tab5','tabb5')" class="btn btn-secondary text-dark">{{__('web.helpers.previous')}}</a>
            </div>
             <div  style="float:right">
                <a  onClick="validateTab(6)" href="javascript:void(0)" class="btn btn-primary" style="float: right;">{{__('web.helpers.next')}}</a>
            </div>
            </div>

        </div>
    </div>

    <div class="row  tabcontent pt-1 disable" id="tab7">
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

    



