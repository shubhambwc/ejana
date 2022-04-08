<div class="row">
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        <?php echo e(Form::label('job_title', __('messages.job.job_title').':')); ?><span class="text-danger">*</span>
        <?php echo e(Form::text('job_title', null, ['class' => 'form-control','required'])); ?>

    </div>
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        <?php echo e(Form::label('job_type_id', __('messages.job.job_type').':')); ?><span class="text-danger">*</span>
        <?php echo e(Form::select('job_type_id', $data['jobType'],null, ['id'=>'jobTypeId','class' => 'form-control','placeholder' => 'Select Job Type','required'])); ?>

    </div>
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        <?php echo e(Form::label('job_category_id', __('messages.job_category.job_category').':')); ?><span
                class="text-danger">*</span>
        <?php echo e(Form::select('job_category_id', $data['jobCategory'],null, ['id'=>'jobCategoryId','class' => 'form-control','placeholder' => 'Select Job Category','required'])); ?>

    </div>
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        <?php echo e(Form::label('skill_id', __('messages.job.job_skill').':')); ?> <span class="text-danger">*</span>
        <?php echo e(Form::select('jobsSkill[]',$data['jobSkill'], null, ['class' => 'form-control','id'=>'SkillId','multiple'=>true,'required'])); ?>

    </div>
    <div class="form-group col-xl-12 col-md-12 col-sm-12">
        <?php echo e(Form::label('description', __('messages.job.description').':')); ?><span class="text-danger">*</span>
        <?php echo e(Form::textarea('description', null, ['class' => 'form-control' , 'id' => 'details', 'rows' => '5'])); ?>

    </div>
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        <?php echo e(Form::label('no_preference', __('messages.candidate.gender').':')); ?>

        <?php echo e(Form::select('no_preference', $data['preference'], null, ['id'=>'preferenceId','class' => 'form-control','placeholder' => 'Select Gender'])); ?>

    </div>
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        <?php echo e(Form::label('job_expiry_date', __('messages.job.job_expiry_date').':')); ?> <span class="text-danger">*</span>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-calendar-alt"></i>
                </div>
            </div>
            <?php echo e(Form::text('job_expiry_date', isset($job->job_expiry_date) ? $job->job_expiry_date : null, ['class' => 'form-control expiryDatepicker', 'required', 'autocomplete' => 'off'])); ?>

        </div>
    </div>
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        <?php echo e(Form::label('salary_from', __('messages.job.salary_from').':')); ?><span class="text-danger">*</span>
        <?php echo e(Form::text('salary_from', null, ['class' => 'form-control salary', 'id' => 'fromSalary', 'required'])); ?>

    </div>
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        <?php echo e(Form::label('salary_to', __('messages.job.salary_to').':')); ?><span class="text-danger">*</span>
        <?php echo e(Form::text('salary_to', null, ['class' => 'form-control salary', 'id' => 'toSalary', 'required'])); ?>

        <span id="salaryToErrorMsg" class="text-danger"></span>
    </div>
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        <?php echo e(Form::label('currency_id', __('messages.job.currency').':')); ?><span class="text-danger">*</span>
        <?php echo e(Form::select('currency_id', $data['currencies'], null, ['id'=>'currencyId','class' => 'form-control','placeholder' => 'Select Currency','required'])); ?>

    </div>
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        <?php echo e(Form::label('salary_period_id', __('messages.job.salary_period').':')); ?><span class="text-danger">*</span>
        <?php echo e(Form::select('salary_period_id', $data['salaryPeriods'], null, ['id'=>'salaryPeriodsId','class' => 'form-control','placeholder' => 'Select Salary Period','required'])); ?>

    </div>
    <div class="form-group col-xl-4 col-md-4 col-sm-12">
        <?php echo e(Form::label('country', __('messages.company.country').':')); ?><span class="text-danger">*</span>
        <?php echo e(Form::select('country_id', $data['countries'], null, ['id'=>'countryId','class' => 'form-control','placeholder' => 'Select Country','required'])); ?>

    </div>
    <div class="form-group col-xl-4 col-md-4 col-sm-12">
        <?php echo e(Form::label('state', __('messages.company.state').':')); ?><span class="text-danger">*</span>
        <?php echo e(Form::select('state_id', [], null, ['id'=>'stateId','class' => 'form-control','placeholder' => 'Select State','required'])); ?>

    </div>
    <div class="form-group col-xl-4 col-md-4 col-sm-12">
        <?php echo e(Form::label('city', __('messages.company.city').':')); ?><span class="text-danger">*</span>
        <?php echo e(Form::select('city_id', [], null, ['id'=>'cityId','class' => 'form-control','placeholder' => 'Select City','required'])); ?>

    </div>
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        <?php echo e(Form::label('career_level_id', __('messages.job.career_level').':')); ?>

        <?php echo e(Form::select('career_level_id', $data['careerLevels'],null, ['id'=>'careerLevelsId','class' => 'form-control','placeholder' => 'Select Career Level'])); ?>

    </div>
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        <?php echo e(Form::label('job_shift_id', __('messages.job.job_shift').':')); ?>

        <?php echo e(Form::select('job_shift_id', $data['jobShift'], null, ['id'=>'jobShiftId','class' => 'form-control','placeholder' => 'Select Job Shift'])); ?>

    </div>
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        <?php echo e(Form::label('tagId', __('messages.job_tag.show_job_tag').':')); ?>

        <?php echo e(Form::select('jobTag[]',$data['jobTag'], null, ['class' => 'form-control','id'=>'tagId','multiple'=>true])); ?>

    </div>
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        <?php echo e(Form::label('degree_level_id', __('messages.job.degree_level').':')); ?>

        <?php echo e(Form::select('degree_level_id', $data['requiredDegreeLevel'], null, ['id'=>'requiredDegreeLevelId','class' => 'form-control','placeholder' => 'Select Degree Level'])); ?>

    </div>
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        <?php echo e(Form::label('functional_area_id', __('messages.job.functional_area').':')); ?><span
                class="text-danger">*</span>
        <?php echo e(Form::select('functional_area_id', $data['functionalArea'], null, ['id'=>'functionalAreaId','class' => 'form-control','placeholder' => 'Select Functional Area','required'])); ?>

    </div>
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        <?php echo e(Form::label('position', __('messages.job.position').':')); ?><span class="text-danger">*</span>
        <?php echo e(Form::number('position',  null, ['id'=>'positionId','class' => 'form-control','placeholder' => 'Select Position','required', 'min' => 0, 'max' => 255])); ?>

    </div>
    <div class="form-group col-xl-6 col-md-6 col-sm-12">
        <?php echo e(Form::label('experience', __('messages.job_experience.job_experience').':')); ?><span
                class="text-danger">*</span>
        <?php echo e(Form::number('experience',  null, ['id'=>'experienceId','class' => 'form-control','placeholder' => 'Enter experience In Year','required', 'min' => 0, 'max' => 255])); ?>

    </div>
    <div class="form-group col-xl-3 col-md-3 col-sm-12">
        <label><?php echo e(__('messages.job.hide_salary').':'); ?></label>
        <label class="custom-switch pl-0 col-12">
            <input type="checkbox" name="hide_salary" class="custom-switch-input"
                   id="salary">
            <span class="custom-switch-indicator"></span>
        </label>
    </div>
    <div class="form-group col-xl-3 col-md-3 col-sm-12">
        <label><?php echo e(__('messages.job.is_freelance').':'); ?></label>
        <label class="custom-switch pl-0 col-12">
            <input type="checkbox" name="is_freelance" class="custom-switch-input"
                   id="freelance">
            <span class="custom-switch-indicator"></span>
        </label>
    </div>

    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        <button type="submit" value="saveDraft" class="btn btn-primary mr-1 mb-1 saveDraft"
                name="saveDraft"><?php echo e(__('messages.common.save_as_draft')); ?>

        </button>
        <?php echo e(Form::submit(__('messages.common.save'), ['class' => 'btn btn-primary mb-1','name' => 'save', 'id' => 'saveJob'])); ?>

        <a href="<?php echo e(route('job.index')); ?>" class="btn btn-secondary text-dark mb-1"><?php echo e(__('messages.common.cancel')); ?></a>
    </div>

</div>
<?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/employer/jobs/fields.blade.php ENDPATH**/ ?>