


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


    <div class="row tabcontent pt-1 disable" id="tab3">
            <div class="custom-form">
                 <div id="message3">{{__("web.helpers.helpers_experience_as_a")}} {{$JobCategoryDetail->name}}? </div>
            </div>
                <div class="row">
                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('Experience', __('web.helpers.experience').':') }}<span class="text-danger">*</span>
                      {{ Form::select('exprience',
                      ['less_1year' =>'<1 year of experience' , '1year' =>'1 year of experience' ,'2year'=>'2 year of experience','3year'=>'3 year of experience','4year'=>'4 year of experience','5'=>'5 year of experience','6'=>'6 year of experience','7'=>'7 year of experience','8'=>'8 year of experience','9'=>'9 year of experience','10+'=>'10+ year of experience']
                      ,@$postMetaArray['exprience'], ['id'=>'helpers_exprience','class' => 'form-control select-box required','required','placeholder' => 'How many years of experience do you have in transport or passenger transport?']) }}
                </div>
                </div>



                <div class="row">

               <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('type_of_transport', __('web.helpers.type_of_transport').':') }}<span class="text-danger">*</span>
                      {{ Form::select('type_of_transport',
                      [
                      'freight_transport'=>'Freight Transport',
                      'passenger_transport' =>'Passenger Transport',
                      'child_transport'=>'Child Transport',
                      'other'=>'Other']
                      ,@$postMetaArray['type_of_transport'], ['id'=>'type_of_transport','class' => 'form-control select-box required','placeholder'=>'Select type of transport']) }}
                     {{ Form::text('type_of_transport_other', null, ['id'=>'type_of_transport_other','class' => (isset($postMetaArray['type_of_transport']) && @$postMetaArray['type_of_transport']=='other')? 'form-control other_box_visible' : 'form-control other_box','placeholder'=>'Enter other']) }}

                </div>

                </div>

                 <div class="row">

               <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('mean_of_transport', __('web.helpers.mean_of_transport').':') }}<span class="text-danger">*</span>
                      {{ Form::select('mean_of_transport[]',
                      [
                      'passenger_car' =>'Passenger car',
                      'passenger_vac' =>'Passenger van',
                      'delivery_van' =>'Delivery van',
                      'truck'=>'Truck',
                      'trailer'=>'Trailer',
                      'other'=>'Other']
                      ,@$postMetaArray['mean_of_transport'], ['id'=>'mean_of_transport','class' => 'form-control select-box required','multiple']) }}
                    {{ Form::text('mean_of_transport_other', @$postMetaArray['mean_of_transport_other'], ['id'=>'mean_of_transport_other','class' => (isset($postMetaArray['mean_of_transport']) && in_array("other", @$postMetaArray['mean_of_transport'])) ? 'form-control other_box_visible' : 'form-control other_box','placeholder'=>'Enter other']) }}

                </div>

                </div>




                <div class="row" id="child_transport_box" style="display:none">

                   <div class="form-group col-xl-6 col-md-6 col-sm-12">
                        {{ Form::label('child_pickup', __('web.helpers.pick_up_child').':') }}<br>
                        {{ Form::radio('child_pickup', '1',isset($postMetaArray['child_pickup']) && $postMetaArray['child_pickup'] ==1 ? true: false) ,['class' => 'form-control check-box']}} {{ __('web.helpers.yes') }}
                        &nbsp;&nbsp;&nbsp;

                        {{ Form::radio('child_pickup', '0',isset($postMetaArray['child_pickup']) && $postMetaArray['child_pickup'] ==0 ? true: false),['class' => 'form-control check-box'] }} {{ __('web.helpers.no') }}<br>
                        <div id="child_bring_to_box" style="display:<?php if(isset($postMetaArray['child_pickup']) && $postMetaArray['child_pickup'] ==0){ echo 'block';}else{ echo 'none'; }?>">
                        {{ Form::label('child_bring_to', __('web.helpers.to').':') }}</br>
                        {{ Form::select('child_bring_to[]',
                      [
                      'school' =>'School',
                      'sportsclubs' =>'Sportsclubs',
                      'other' =>'Other']
                      ,@$postMetaArray['child_bring_to'], ['id'=>'child_bring_to','class' => 'form-control select-box','multiple']) }}

                        {{ Form::text('child_bring_to_other', @$postMetaArray['child_bring_to_other'], ['id'=>'child_bring_to_other','class' => (isset($postMetaArray['child_bring_to']) && in_array("other", $postMetaArray['child_bring_to'])) ? 'form-control other_box_visible' : 'form-control other_box','placeholder'=>'Enter other']) }}

                      </div>

                    </div>

                  <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('child_bring', __('web.helpers.bring_a_child').':') }}<br>
                      {{ Form::radio('child_bring', '1',isset($postMetaArray['child_bring']) && $postMetaArray['child_bring'] ==1 ? true: false) ,['class' => 'form-control check-box']}} {{ __('web.helpers.es') }}
                        &nbsp;&nbsp;&nbsp;
                      {{ Form::radio('child_bring', '0',isset($postMetaArray['child_bring']) && $postMetaArray['child_bring'] ==0 ? true: false),['class' => 'form-control check-box'] }} {{ __('web.helpers.no') }}<br>

                    <div id="child_bring_from_box" style="display:<?php if(isset($postMetaArray['child_pickup']) && $postMetaArray['child_pickup'] ==0){ echo 'block';}else{ echo 'none'; }?>">
                        {{ Form::label('child_bring_from', __('web.helpers.from').':') }}</br>
                        {{ Form::select('child_bring_from[]',
                      [
                      'school' =>'School',
                      'sportsclubs' =>'Sportsclubs',
                      'other' =>'Other']
                      ,@$postMetaArray['child_bring_from'], ['id'=>'child_bring_from','class' => 'form-control select-box','multiple']) }}

                      {{ Form::text('child_bring_from_other', @$postMetaArray['child_bring_from_other'], ['id'=>'child_bring_from_other','class' => (isset($postMetaArray['child_bring_from']) && in_array("other", $postMetaArray['child_bring_from'])) ? 'form-control other_box_visible' : 'form-control other_box','placeholder'=>'Enter other']) }}

                      </div>
                  </div>


                </div>


                <div class="row" id="how_many_passengers_box" style="display:<?php if(isset($postMetaArray['type_of_transport']) && (in_array("passenger_transport", @$postMetaArray['type_of_transport']) || in_array("other", @$postMetaArray['type_of_transport']) )){ echo 'block';}else{ echo 'none'; }?>">

               <div class="form-group col-xl-6 col-md-6 col-sm-12">
                      {{ Form::label('how_many_passengers', __('web.helpers.how_many_passengers').':') }}<span class="text-danger">*</span>
                      {{ Form::select('how_many_passengers',
                      [
                      '1' =>'1, person',
                      '2' =>'2, person',
                      '3' =>'3, person',
                      '4' =>'4, person',
                      '5' =>'5, person',
                      '6' =>'6, person',
                      '7' =>'7, person',
                      '8' =>'8, person',
                      '9' =>'9, person',
                      '10' =>'10, person',
                      '11' =>'11, person',
                      '12' =>'12, person']
                      ,@$postMetaArray['how_many_passengers'], ['id'=>'how_many_passengers','class' => 'form-control select-box required','placeholder'=>'How many people can come with you']) }}
                </div>
                </div>


                 <div class="row">

                 <div class="form-group col-xl-6 col-md-6 col-sm-12">
                        {{ Form::label('cargo_space', __('web.helpers.cargo_space').':') }}</br>
                        {{ Form::text('cargo_space', @$postMetaArray['cargo_space'], ['class' => 'form-control']) }}
                  </div>


                  <div class="form-group col-xl-6 col-md-6 col-sm-12">
                        {{ Form::label('other_option', __('web.helpers.other_options').':') }}</br>
                        {{ Form::select('other_option',
                      [
                      'wheelchair_lift' =>'Wheelchair lift',
                      'trailer_hitch' =>'Trailer hitch',
                      'other' =>'Other']
                      ,@$postMetaArray['other_option'], ['id'=>'other_option','class' => 'form-control select-box required','placeholder'=>'Select option']) }}

                      {{ Form::text('other_option_other', @$postMetaArray['other_option_other'], ['id'=>'other_option_other','class' => (isset($postMetaArray['other_option']) && $postMetaArray['other_option']=="other") ? 'form-control other_box_visible' : 'form-control other_box','placeholder'=>'Enter other']) }}
                  </div>



                </div>

                <div class="row">

               <div class="form-group col-xl-12 col-md-12 col-sm-12">
                  <div class="col-xl-6 col-sm-12" style="padding-left:0px;">
                       {{ Form::label('extra_offer', __('web.helpers.offers_you_something_extra').':') }}
                       {{ Form::text('extra_offer', @$postMetaArray['extra_offer'], ['class' => 'form-control required','required']) }}
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



    <div class="row tabcontent pt-1 disable" id="tab4">

        <div class="custom-form">
         <div id="message3">{{__('web.helpers.extra_information')}}</div>
    </div>


        <div class="row">

           <div class="form-group col-xl-6 col-md-6 col-sm-12">
                         {{ Form::label('passport', __('web.helpers.copy_passport_front').':') }}<span class="text-danger">*</span>
                         <div class="custom-file">
                            <input type="file" name="passport_front" id="image2" class="custom-file-input {{ isset($postMetaArray['passport_front_url'])?'':'required'}}">
                            <label class="custom-file-label rounded" name="image2"><i class="mdi mdi-cloud-upload mr-1"></i>{{__('web.helpers.upload_copy_passport_front')}}</label>
                         </div>

                           <div class="custom-file-preview" id="custom-file-image2" style="display:{{ isset($postMetaArray['passport_front_url'])?'block':'none'}}">
                                     <?php echo App\Http\Controllers\CandidateController:: isDocImageType(@$postMetaArray['passport_front_url'],'image2_preview');?>
                           </div>
        <div class="form-group col-xl-6 col-md-6 col-sm-6">
         {{ Form::checkbox('passport_front_later', 'yes', isset($postMetaArray['passport_front_later']) && $postMetaArray['passport_front_later'] =='yes' ? true:false) ,['class' => 'form-control check-box'] }}
         {{ Form::label('passport_front_later', __("web.helpers.copy_passport_later")) }}
        </div>
           </div>

           <div class="form-group col-xl-6 col-md-6 col-sm-12">
                         {{ Form::label('passport', __('web.helpers.copy_passport_back').':') }}<span class="text-danger">*</span>
                         <div class="custom-file">
                            <input type="file" name="passport_back" id="image22" class="custom-file-input {{ isset($postMetaArray['passport_back_url'])?'':'required'}}">
                            <label class="custom-file-label rounded" name="image22"><i class="mdi mdi-cloud-upload mr-1"></i>{{__('web.helpers.upload_copy_passport_back')}}</label>
                         </div>

                         <div class="custom-file-preview" id="custom-file-image22" style="display:{{ isset($postMetaArray['passport_back_url'])?'block':'none'}}">
                            <?php echo App\Http\Controllers\CandidateController:: isDocImageType(@$postMetaArray['passport_back_url'],'image22_preview');?>
                         </div>

                <div class="form-group col-xl-6 col-md-6 col-sm-6">
         {{ Form::checkbox('passport_back_later', 'yes',isset($postMetaArray['passport_back_later']) && $postMetaArray['passport_back_later'] =='yes' ? true:false) ,['class' => 'form-control check-box'] }}
         {{ Form::label('passport_back_later', __("web.helpers.copy_passport_later")) }}
        </div>


           </div>

           </div>


        <div class="row">

          <div class="form-group col-xl-6 col-md-6 col-sm-12">
                  {{ Form::label('highest_education', __('web.helpers.educational_attainment').':') }}<span class="text-danger">*</span>
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
                  , @$postMetaArray['highest_education'],
                  ['id'=>'highest_education','class' => 'form-control select-box required','required','placeholder' => 'Select Highest Education']) }}

                   {{ Form::text('highest_education_other', @$postMetaArray['highest_education_other'], ['id'=>'highest_education_other_box','class' => (isset($postMetaArray['highest_education']) &&  @$postMetaArray['highest_education']=='other') ? 'form-control other_box_visible' : 'form-control other_box','placeholder' => 'Enter other']) }}




          </div>

          </div>

       <div class="row">



          <div class="form-group col-xl-6 col-md-6 col-sm-12">


            {{ Form::label('have_liability', __('web.helpers.do_you_have_liability_insurance')) }} <a data-toggle="tooltip" title="Add a copy of your liability insurance to your account. This way we know you're covered and that everything is okay if something happens.">?</a><span class="text-danger">*</span><br>
            {{ Form::radio('have_liability', '1',isset($postMetaArray['have_liability']) && $postMetaArray['have_liability'] ==1 ? true:false) ,['class' => 'form-control check-box required']}} {{ __('web.helpers.yes') }}
            &nbsp;&nbsp;&nbsp;
            {{ Form::radio('have_liability', '0',isset($postMetaArray['have_liability']) && $postMetaArray['have_liability'] ==0 ? true:false),['class' => 'form-control check-box required'] }} {{ __('web.helpers.no') }}


              <div id="have_liability_box" class="radio_yes_box" style="display:<?php if(isset($postMetaArray['have_liability']) && $postMetaArray['have_liability'] ==1){ echo 'blick';}else{ echo 'none';}?>">
                    {{ Form::label('have_liability_width', __('If so, with whom?')) }}
                    {{ Form::text('have_liability_width', @$postMetaArray['have_liability_width'], ['class' => 'form-control']) }}
              {{ Form::label('is_libility', __('web.helpers.add_copy_of_liability_insurance').':') }}
                <div class="custom-file">
                        <input type="file" name="liability_copy" id="image3" class="custom-file-input">
                        <label class="custom-file-label rounded" name="image3"><i class="mdi mdi-cloud-upload mr-1"></i>{{ __("web.helpers.upload_certificate_photo")}}</label>
                </div>

                <div class="custom-file-preview" id="custom-file-image3" style="display:{{ isset($postMetaArray['liability_copy_url'])?'block':'none'}}">

                            <?php echo App\Http\Controllers\CandidateController:: isDocImageType(@$postMetaArray['liability_copy_url'],'image3_preview');?>
                </div>




               {{ Form::checkbox('liability_copy_later', 'yes', isset($postMetaArray['liability_copy_later']) && $postMetaArray['liability_copy_later'] =='yes' ? true:false) ,['class' => 'form-control check-box'] }}
               {{ Form::label('liability_copy_later', __('web.helpers.liability_insurance_later')) }}


             </div>
             <div>
               {{ Form::checkbox('is_under18', 'yes', isset($postMetaArray['is_under18']) && $postMetaArray['is_under18'] =='yes' ? true:false) ,['class' => 'form-control check-box'] }}
               {{ Form::label('is_under18', __('web.helpers.helper_is_under_18')) }}
             </div>
            </div>

            </div>

       <div class="row">
            <div class="form-group col-xl-6 col-md-6 col-sm-12">


            {{ Form::label('have_first_aid_certificate', __('web.helpers.do_you_have_first_aid_certificate')) }}<br>
            {{ Form::radio('have_first_aid_certificate', '1',isset($postMetaArray['have_first_aid_certificate']) && $postMetaArray['have_first_aid_certificate'] ==1 ? true:false) ,['class' => 'form-control check-box required ','required']}} {{ __('web.helpers.yes') }}
            &nbsp;&nbsp;&nbsp;
            {{ Form::radio('have_first_aid_certificate', '0',isset($postMetaArray['have_first_aid_certificate']) && $postMetaArray['have_first_aid_certificate'] ==0 ? true:false),['class' => 'form-control check-box required','required'] }} {{ __('web.helpers.no') }}


              <div id="have_first_aid_certificate_box" class="radio_yes_box"  style="display:<?php if(isset($postMetaArray['have_first_aid_certificate']) && $postMetaArray['have_first_aid_certificate'] ==1){echo 'block';}else{ echo 'none';}?>">
                    {{ Form::label('have_first_aid_certificate_with', __('web.helpers.with_whoom')) }}
                    {{ Form::text('have_first_aid_certificate_with', @$postMetaArray['have_first_aid_certificate_with'], ['class' => 'form-control']) }}

               {{ Form::label('first_aid_certificate', __('web.helpers.add_copy_of_first_aid_certificate').':') }}
                <div class="custom-file">
                        <input type="file" name="first_aid_certificate" id="image4" class="custom-file-input">
                         <label class="custom-file-label rounded" name="image3"><i class="mdi mdi-cloud-upload mr-1"></i>{{ __("web.helpers.upload_certificate_photo")}}</label>
                 </div>

                 <div class="custom-file-preview" id="custom-file-image4" style="display:{{ isset($postMetaArray['first_aid_certificate_url'])?'block':'none'}}">
                            <?php echo App\Http\Controllers\CandidateController:: isDocImageType(@$postMetaArray['first_aid_certificate_url'],'image4_preview');?>
                </div>



               {{ Form::checkbox('first_aid_certificate_later', 'yes',isset($postMetaArray['first_aid_certificate_later']) && $postMetaArray['first_aid_certificate_later'] =='yes' ? true:false) ,['class' => 'form-control check-box'] }}
               {{ Form::label('first_aid_certificate_later', __('web.helpers.first_aid_certificate_later')) }}


             </div>



             <div >

             </div>
            </div>

        </div>


<div class="row">
            <div class="form-group col-xl-6 col-md-6 col-sm-12">


            {{ Form::label('have_passenger_insurance', __('web.helpers.do_you_have_passenger_insurance')) }}<a data-toggle="tooltip" title="If you are carrying a passenger or children it is important that you have passenger insurance in case something happens.">?</a><br>
            {{ Form::radio('have_passenger_insurance', '1',isset($postMetaArray['have_passenger_insurance']) && $postMetaArray['have_passenger_insurance'] ==1 ? true:false) ,['class' => 'form-control check-box required']}} {{ __('web.helpers.yes') }}
            &nbsp;&nbsp;&nbsp;
            {{ Form::radio('have_passenger_insurance', '0',isset($postMetaArray['have_passenger_insurance']) && $postMetaArray['have_passenger_insurance'] ==0 ? true:false),['class' => 'form-control check-box required'] }} {{ __('web.helpers.no') }}


              <div id="have_passenger_insurance_box"  class="radio_yes_box"  style="display:style="display:<?php if(isset($postMetaArray['have_passenger_insurance']) && $postMetaArray['have_passenger_insurance'] ==1){echo 'block';}else{echo 'none';}?>">
                    {{ Form::label('have_passenger_insurance_with', __('web.helpers.with_whoom')) }}
                    {{ Form::text('have_passenger_insurance_with', @$postMetaArray['have_passenger_insurance_with'], ['class' => 'form-control']) }}

               {{ Form::label('passenger_insurance', __('web.helpers.add_a_copy_of_your_passenger_insurance').':') }}
                <div class="custom-file">
                        <input type="file" name="passenger_insurance" id="image44" class="custom-file-input">
                         <label class="custom-file-label rounded" name="image44"><i class="mdi mdi-cloud-upload mr-1"></i>{{ __('web.helpers.upload_passenger_insurance_photo')  }}</label>
                 </div>

                 <div class="custom-file-preview" id="custom-file-image44" style="display:{{ isset($postMetaArray['passenger_insurance_url'])?'block':'none'}}">
                 <?php echo App\Http\Controllers\CandidateController:: isDocImageType(@$postMetaArray['passenger_insurance_url'],'image44_preview');?>
                </div>



               {{ Form::checkbox('passenger_insurance_later', 'yes',isset($postMetaArray['passenger_insurance_later']) && $postMetaArray['passenger_insurance_later'] =='yes' ? true:false) ,['class' => 'form-control check-box'] }}
               {{ Form::label('passenger_insurance_later', __('web.helpers.helper_will_add_copy_of_passenger_insurance_later')) }}


             </div>

             </div>




            </div>




        <div class="row">
            <div class="form-group col-xl-6 col-md-6 col-sm-12">


            {{ Form::label('vog_certificate', __('web.helpers.do_you_have_vog_certificate')) }}<a data-toggle="tooltip" title="The Certificate of Good Conduct may not be older than 3 months! You can apply for a valid VOG via Ejana">?</a><br>
            {{ Form::radio('vog_certificate', '1',isset($postMetaArray['vog_certificate']) && $postMetaArray['vog_certificate'] ==1 ? true:false) ,['class' => 'form-control check-box required ','required']}} {{ __('web.helpers.yes') }}
            &nbsp;&nbsp;&nbsp;
            {{ Form::radio('vog_certificate', '0',isset($postMetaArray['vog_certificate']) && $postMetaArray['vog_certificate'] ==0 ? true:false),['class' => 'form-control check-box required','required'] }} {{ __('web.helpers.no') }}


              <div id="vog_certificate_box" class="radio_yes_box"  style="display:<?php if(isset($postMetaArray['vog_certificate']) && $postMetaArray['vog_certificate'] ==1){echo 'block';}else{echo 'none';}?>">
                    {{ Form::label('vog_certificate_with', __('web.helpers.with_whoom')) }}
                    {{ Form::text('vog_certificate_with', @$postMetaArray['vog_certificate_with'], ['class' => 'form-control']) }}

               {{ Form::label('vog_certificate_file', __('web.helpers.add_copy_of_vog_certificate').':') }}
                <div class="custom-file">
                        <input type="file" name="vog_certificate_file" id="image5" class="custom-file-input">
                         <label class="custom-file-label rounded" name="image5"><i class="mdi mdi-cloud-upload mr-1"></i>{{ __("web.helpers.upload_certificate_photo")}}</label>
                 </div>

                 <div class="custom-file-preview" id="custom-file-image5" style="display:{{ isset($postMetaArray['vog_certificate_file_url'])?'block':'none'}}">
                            <?php echo App\Http\Controllers\CandidateController:: isDocImageType(@$postMetaArray['vog_certificate_file_url'],'image5_preview');?>
                </div>



               {{ Form::checkbox('vog_certificate_later', 'yes', isset($postMetaArray['vog_certificate_later']) && $postMetaArray['vog_certificate_later'] =='yes' ? true:false) ,['class' => 'form-control check-box'] }}
               {{ Form::label('vog_certificate_later', __('web.helpers.vog_certificate_later')) }}


             </div>
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


    <div class="row tabcontent pt-1 disable" id="tab5">
             <div class="custom-form">
         <div id="message3">{{ __("web.helpers.helpers_motivation")}}</div>
    </div>


       <div class="row">

        <div class="form-group col-xl-6 col-md-6 col-sm-12">
            {{ Form::label('motivation_text', __('web.helpers.motivation').':') }}<span class="text-danger">*</span>
            {{ Form::textarea('motivation_text', @$postMetaArray['motivation_text'], ['placeholder'=>'Write a motivation','class' => 'form-control address-height required' , 'rows' => '5']) }}
        </div>
        </div>
        <div class="row">

         <div class="form-group col-xl-6 col-md-6 col-sm-12">
                  {{ Form::label('character_traits', __('web.helpers.what_are_your_character').':') }}<span class="text-danger">*</span>
                  {{ Form::select('character_traits[]',
                  ['patient' =>'Patient' , 'creative' =>'Creative' ,'decently'=>'Decently','packer'=>'Packer','communicative'=>'Communicative','spontaneous'=>'Spontaneous', 'helpful'=>'Helpful','responsible'=>'Responsible','flexible'=>'Flexible','cozy' =>'Cozy','social'=>'Social','social'=>'Social','independent'=>'Independent','caring'=>'Caring','stress_resistant'=>'Stress resistant',
                  'other'=>'Other']
                  , @$postMetaArray['character_traits'], ['id'=>'character_traits','class' => 'form-control select-box select_box_other_multiple required','multiple']) }}
                {{ Form::text('character_traits_other', @$postMetaArray['character_traits_other'], ['id'=>'character_traits_other_box','class' => (isset($postMetaArray['character_traits']) && in_array("other", @$postMetaArray['character_traits'])) ? 'form-control other_box_visible' : 'form-control other_box','placeholder' => 'Enter other']) }}




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


    <div class="row tabcontent  disable pt-1 " id="tab6">
            <div class="custom-form">
         <div id="message3">{{ __('web.helpers.helper_advertisement_for')}} {{$JobCategoryDetail->name}}.</div>
    </div>

            <div class="row">
                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                    {{ Form::label('advertisement', __("web.helpers.whats_on_offer")) }}<span class="text-danger">*</span>
                    {{ Form::text('advertisement', @$postMetaArray['advertisement'], ['placeholder'=>'Title of your ad','class' => 'form-control required','required']) }}
                </div>
            </div>

            <div class="row">


        <div class="form-group col-xl-6 col-md-6 col-sm-12">
            {{ Form::label('advertisement_text', __('web.helpers.write_your_ad')) }}<span class="text-danger">*</span>
            {{ Form::textarea('advertisement_text', @$postMetaArray['advertisement_text'], ['placeholder'=>'Tell us about yourself and your hobbies. This is the most important part of your ad! Take your time.','class' => 'form-control address-height required' , 'rows' => '5']) }}
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
                  {{ Form::label('available_for', __('web.helpers.are_you_available_for')) }}<span class="text-danger">*</span>
                  {{ Form::select('available_for[]',
                    [
                               'vast'  => 'Vast',
                               'flexible'  => 'Flexible',
                               'sometimes'  => 'Sometimes',
                               'other'  => 'Other',
                              ]
                  ,@$postMetaArray['available_for'], ['id'=>'available_for','class' => 'form-control select-box select_box_other_multiple required','multiple']) }}

             {{ Form::text('available_for_other', @$postMetaArray['available_for_other'], ['id'=>'available_for_other','class' => (isset($postMetaArray['available_for']) && in_array("other", @$postMetaArray['available_for'])) ? 'form-control other_box_visible' : 'form-control other_box','placeholder'=>'Enter Other']) }}

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
            <a href="javascript:void(0)" onClick="openCity(event, 'tab5' ,'tabb5')" class="btn btn-secondary text-dark">{{__('web.helpers.previous')}}</a>
        </div>
        <div style="float:right">
            <a  onClick="validateTab(6)"  href="javascript:void(0)"  class="btn btn-primary" style="float: right;">{{__('web.helpers.next')}}</a>
        </div>
        </div>
     </div>
    </div>




  <div class="row tabcontent pt-1 disable" id="tab7">

    <div class="custom-form">
         <div id="message3">{{ __("web.helpers.contact_details_of_Helpers")}} </div>
    </div>





                 <div id="additional_reference">

                 <?php if(isset($postMetaArray['refrences']) ) {
                   $r=0;
                   foreach($postMetaArray['refrences'] as $refrences){
                   ?>
                   <div class="additional_reference_row" id="reference_<?php echo $r;?>">

                    <div class="row">

                 <div class="form-group col-xl-6 col-md-6 col-sm-12">

                         {{ Form::label('refrences['.$r.'][refrence_name]', __('web.helpers.name').':') }}<span class="text-danger">*</span>
                         {{ Form::text('refrences['.$r.'][refrence_name]',@$refrences['refrence_name'], ['class' => 'form-control required']) }}

                </div>

                </div>
                    <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                     {{ Form::label('refrences['.$r.'][refrence_email]', __('web.helpers.email').':') }}<span class="text-danger">*</span>
                    {{ Form::email('refrences['.$r.'][refrence_email]',@$refrences['refrence_email'], ['class' => 'form-control required'])}}

                </div>
                </div>
                    <div class="row">

                <div class="form-group col-xl-6 col-md-6 col-sm-12">
                    {{ Form::label('refrences['.$r.'][refrence_phone]', __('web.helpers.phone').':') }}<span class="text-danger">*</span>
                    {{ Form::tel('refrences['.$r.'][refrence_phone]', @$refrences['refrence_phone'], ['class' => 'form-control required', 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")','id'=>'refrencePhone'])}}
                </div> </div>
                    <div class="row">

                 <div class="form-group col-xl-6 col-md-6 col-sm-12">
                    {{ Form::label('refrences['.$r.'][refrence_experiences]', __('web.helpers.describe_your_experiences').':') }}<span class="text-danger">*</span>
                    {{ Form::textarea('refrences['.$r.'][refrence_experiences]',@$refrences['refrence_experiences'], ['class' => 'form-control address-height required','required','rows' => '5']) }}
                </div>
                </div>
                    <div class="row">
                    <div class="form-group col-xl-6 col-md-6 col-sm-12">
                        {{ Form::label('refrences['.$r.'][refrence_start_date]', __('web.helpers.start_date')) }}<span class="text-danger">*</span>
                        {{ Form::text('refrences['.$r.'][refrence_start_date]',@$refrences['refrence_start_date'], ['class' => 'form-control required pickdate','required']) }}
                    </div>

                    <div class="form-group col-xl-6 col-md-6 col-sm-12">
                        {{ Form::label('refrences['.$r.'][refrence_end_date]', __('web.helpers.end_date')) }}
                        {{ Form::text('refrences['.$r.'][refrence_end_date]',@$refrences['refrence_end_date'], ['class' => 'form-control pickdate']) }}
                    </div>
                </div>
                    <div class="row">
                    <div class="form-group col-xl-6 col-md-6 col-sm-12">
                        {{ Form::checkbox('refrences['.$r.'][refrence_current_position]', 'yes',isset($refrences['refrence_current_position']) && $refrences['refrence_current_position'] =='yes' ? true:false) ,['class' => 'form-control check-box'] }}
                        {{ Form::label('refrences['.$r.'][refrence_current_position]', __('web.helpers.this_is_current_position')) }}
                    </div>


                <?php if($r>0){ ?>
                    <div class="form-group col-xl-2 col-md-2 col-sm-12">
                     <a id="<?php echo $r;?>" href="javascript:void(0)" class="btn btn-primary remove-reference" style="margin-top: 30px;"><i class="fa fa-minus" aria-hidden="true"></i></a>
                    </div>
                    <?php } ?>
                </div>

                   </div>
                <?php
                $r++;}
                }?>

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
                    <a onClick="validateTab(7)" href="javascript:void(0)"  class="btn btn-primary" style="float: right;">{{__('web.helpers.next')}}</a>
                </div>

                </div>

       </div>

    </div>


    <div class="row tabcontent pt-1 disable" id="tab8">
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




