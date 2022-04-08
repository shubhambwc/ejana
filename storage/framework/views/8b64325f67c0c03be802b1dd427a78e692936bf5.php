<?php $__env->startPush('page-css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap-datetimepicker.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/inttel/css/intlTelInput.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('section'); ?>
    <?php echo e(Form::open(['route' => 'candidate-profile.update', 'files' => true,'id'=>'candidateProfileUpdate'])); ?>

    <div class="alert alert-danger d-none" id="validationErrors"></div>
    <div class="row">
        <div class="form-group col-sm-12">
            <div class="row">
                <div class="col-sm-6 col-xs-6 col-md-6 col-xl-3 col-6">
                    <?php echo e(Form::label('profile', __('messages.candidate.profile').':', ['class' => 'font-weight-bolder'])); ?>

                    <label class="image__file-upload text-white"> <?php echo e(__('messages.common.choose')); ?>

                        <?php echo e(Form::file('image',['id'=>'profile','class' => 'd-none'])); ?>

                    </label>
                </div>
                <div class="col-sm-6 col-xs-6 col-6 col-md-6 col-xl-6 pl-2 mt-1">
                    <img id='profilePreview' class="img-thumbnail thumbnail-preview"
                         src="<?php echo e((!empty($user->media[0])) ? $user->media[0]->getFullUrl() : asset('assets/img/infyom-logo.png')); ?>">
                </div>
            </div>
        </div>
        <div class="form-group col-sm-6">
            <?php echo e(Form::label('first_name',__('messages.candidate.first_name').':', ['class' => 'font-weight-bolder'])); ?><span class="text-danger">*</span>
            <?php echo e(Form::text('first_name', $user->first_name, ['class' => 'form-control','required'])); ?>

        </div>
        <div class="form-group col-sm-6">
            <?php echo e(Form::label('last_name',__('messages.candidate.last_name').':', ['class' => 'font-weight-bolder'])); ?><span class="text-danger">*</span>
            <?php echo e(Form::text('last_name', $user->last_name, ['class' => 'form-control','required'])); ?>

        </div>
        <div class="form-group col-sm-6">
            <?php echo e(Form::label('email',__('messages.candidate.email').':', ['class' => 'font-weight-bolder'])); ?><span class="text-danger">*</span>
            <?php echo e(Form::text('email', $user->email, ['class' => 'form-control','required'])); ?>

        </div>

        <div class="form-group col-sm-6 custom-candidate-datepicker">
            <?php echo e(Form::label('dob', __('messages.candidate.birth_date').':', ['class' => 'font-weight-bolder'])); ?>

            <?php echo e(Form::text('dob', $user->dob, ['class' => 'form-control','id' => 'birthDate','autocomplete' => 'off'])); ?>

        </div>
        <div class="form-group col-sm-6">
            <?php echo e(Form::label('gender', __('messages.candidate.gender').':', ['class' => 'font-weight-bolder'])); ?><span class="text-danger">*</span>
            <div class="form-group mb-1">
                <div class="custom-control custom-radio">
                    <input type="radio" id="male" name="gender" class="custom-control-input" value="0"
                            <?php echo e(isset($user->gender) ? ($user->gender == 0 ? 'checked' : '') : ''); ?> required>
                    <label class="custom-control-label" for="male"><?php echo e(__('messages.common.male')); ?></label>
                </div>
            </div>
            <div class="form-group mb-1">
                <div class="custom-control custom-radio">
                    <input type="radio" id="female" name="gender" class="custom-control-input" value="1"
                            <?php echo e(isset($user->gender) ? ($user->gender == 1 ? 'checked' : '') : ''); ?>>
                    <label class="custom-control-label" for="female"><?php echo e(__('messages.common.female')); ?></label>
                </div>
            </div>
        </div>
       
        <div class="form-group col-sm-6">
            <?php echo e(Form::label('language_id', __('messages.candidate.candidate_language').':', ['class' => 'font-weight-bolder'])); ?>

            <span
                    class="text-danger">*</span>
            <?php echo e(Form::select('candidateLanguage[]',$data['language'], (count($candidateLanguage) > 0) ? $candidateLanguage : null, ['class' => 'form-control','id'=>'languageId','multiple'=>true])); ?>

        </div>
        
          
     
       
        <div class="form-group col-sm-6">
            <?php echo e(Form::label('phone', __('messages.candidate.phone').':', ['class' => 'font-weight-bolder'])); ?></br>
            <?php echo e(Form::tel('phone', isset($user->phone) ? $user->phone : null, ['class' => 'form-control', 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")','id'=>'phoneNumber'])); ?>

            <?php echo e(Form::hidden('region_code',null,['id'=>'prefix_code'])); ?>

            <br>
            <span id="valid-msg" class="hide">✓ &nbsp; Valid</span>
            <span id="error-msg" class="hide"></span>
        </div>
 


         <div class="form-group col-sm-6">
        <?php echo e(Form::label('have_drive_license',  __('messages.candidate.drive_license').':', ['class' => 'font-weight-bolder'])); ?><span class="text-danger">*</span><br>
        <?php echo e(Form::radio('have_drive_license', '0',isset($user->candidate->have_drive_license) && $user->candidate->have_drive_license  ==0 ?true :false) ,['class' => 'form-control check-box','required']); ?> <?php echo e(__('Yes')); ?>

        &nbsp;&nbsp;&nbsp;
        <?php echo e(Form::radio('have_drive_license', '1',isset($user->candidate->have_drive_license) && $user->candidate->have_drive_license ==1 ?true :false),['class' => 'form-control check-box','required']); ?> <?php echo e(__('No')); ?>


       </div>

         <div class="form-group  col-sm-6">
        <?php echo e(Form::label('disposal_car', __('messages.candidate.disposal_car').':', ['class' => 'font-weight-bolder'])); ?><span class="text-danger">*</span><br>
        <?php echo e(Form::radio('disposal_car', '0',isset($user->candidate->disposal_car) && $user->candidate->disposal_car  ==0 ?true :false) ,['class' => 'form-control check-box']); ?> <?php echo e(__('Yes')); ?>

        &nbsp;&nbsp;&nbsp;
        <?php echo e(Form::radio('disposal_car', '1',isset($user->candidate->disposal_car ) && $user->candidate->disposal_car ==1 ?true :false) ,['class' => 'form-control check-box']); ?> <?php echo e(__('No')); ?>

   
        </div>


         <div class="form-group col-xl-6 col-md-6 col-sm-6">
              <?php echo e(Form::label('afraid_of', __('messages.candidate.afraid_of').':', ['class' => 'font-weight-bolder'])); ?><span class="text-danger">*</span>
              <?php echo e(Form::select('afraid_of', 
              ['no' =>'No' , 'dogs' =>'Dogs' ,'cats'=>'Cats','different'=>'Different']

              , isset($user->candidate->afraid_of)?$user->candidate->afraid_of :null, ['id'=>'afraid_of','class' => 'form-control select-box','placeholder' => 'Are you allergic or afraid of certain animal?'])); ?>

         </div>

        <div class="form-group col-xl-6 col-md-6 col-sm-6">
        <?php echo e(Form::label('zip_code', __('Zip').':')); ?><span class="text-danger">*</span>
        <?php echo e(Form::text('zip_code', isset($user->candidate->zip_code)?$user->candidate->zip_code :null, ['class' => 'form-control','required'])); ?>

       </div>
        <div class="form-group col-sm-6">
            <?php echo e(Form::label('address', __('messages.candidate.address').':', ['class' => 'font-weight-bolder'])); ?>

            <?php echo e(Form::textarea('address', isset($user->candidate->address) ? $user->candidate->address : null, ['class' => 'form-control address-height','rows'=>'5'])); ?>

        </div>


          <div class="form-group  col-sm-6">
        <?php echo e(Form::label('motivation_text', __('messages.candidate.motivation_text').':', ['class' => 'font-weight-bolder'])); ?><span class="text-danger">*</span>
        <?php echo e(Form::textarea('motivation_text', isset($user->candidate->motivation_text) ?$user->candidate->motivation_text :null, ['class' => 'form-control address-height' , 'rows' => '5'])); ?>  
       </div>

        <div class="form-group col-sm-6">
            <?php echo e(Form::label('other_note', __('messages.candidate.other_note').':', ['class' => 'font-weight-bolder'])); ?>

            <?php echo e(Form::textarea('other_note', isset($user->candidate->other_note) ? $user->candidate->other_note : null, ['class' => 'form-control address-height','rows'=>'5'])); ?>

        </div>

             <?php echo e(Form::hidden('marital_status_id', '1', ['class' => 'form-control select-box','id' => 'maritalStatusId','placeholder'=>'Select marital status'])); ?>

         
               <?php echo e(Form::hidden('candidateSkills','1', ['class' => 'form-control  ','id'=>'skillId'])); ?>

               
                <?php echo e(Form::hidden('facebook_url',$user->facebook_url, ['class' => 'form-control','id'=>'facebookUrl','placeholder'=>'https://www.facebook.com'])); ?>

            
       
                <?php echo e(Form::hidden('twitter_url', $user->twitter_url , ['class' => 'form-control','id'=>'twitterUrl','placeholder'=>'https://www.twitter.com'])); ?>

            
              
                <?php echo e(Form::hidden('linkedin_url', $user->linkedin_url, ['class' => 'form-control','id'=>'linkedInUrl','placeholder'=>'https://www.linkedin.com'])); ?>

           
               
                <?php echo e(Form::hidden('google_plus_url', $user->google_plus_url, ['class' => 'form-control','id'=>'googlePlusUrl','placeholder'=>'https://www.plus.google.com'])); ?>

        
               
                <?php echo e(Form::hidden('pinterest_url', $user->pinterest_url, ['class' => 'form-control','id'=>'pinterestUrl','placeholder'=>'https://www.pinterest.com'])); ?>

        
        
    </div>

    <div class="row mt-4">
        <!-- Submit Field -->
        <div class="form-group col-sm-12">
            <?php echo e(Form::submit(__('messages.common.save'), ['class' => 'btn btn-primary btnSave'])); ?>

            <a href="" class="btn btn-secondary hover-text-dark text-dark">Cancel</a>
        </div>
    </div>
    <?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>
<script>
    let countryId = '<?php echo e($user->country_id); ?>';
    let stateId = '<?php echo e($user->state_id); ?>';
    let cityId = '<?php echo e($user->city_id); ?>';
    let isEdit = true;
    let phoneNo = "<?php echo e(old('region_code').old('phone')); ?>";
    let utilsScript = "<?php echo e(asset('assets/js/inttel/js/utils.min.js')); ?>";
</script>
<?php $__env->startPush('page-scripts'); ?>
    <script src="<?php echo e(asset('js/bootstrap-datetimepicker.min.js')); ?>"></script>
    <script src="<?php echo e(mix('assets/js/custom/input_price_format.js')); ?>"></script>
    <script src="<?php echo e(mix('assets/js/candidate-profile/candidate-general.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/inttel/js/intlTelInput.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/inttel/js/utils.min.js')); ?>"></script>
    <script src="<?php echo e(mix('assets/js/custom/phone-number-country-code.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('candidate.profile.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/candidate/profile/general.blade.php ENDPATH**/ ?>