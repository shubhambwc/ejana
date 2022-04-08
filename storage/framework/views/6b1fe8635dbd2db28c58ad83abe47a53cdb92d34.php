<?php foreach($reminders as $moment){ ?>
<div class="modal fade" tabindex="-1" role="dialog" id="editmoment<?php echo e($moment->id); ?>">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit <?php echo e(__('web.helpers.contact_moments')); ?> </h5>
                <button onclick="closemodal_remind(this.id)" data-id="<?php echo e($moment->id); ?>" id="<?php echo e($moment->id); ?>" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
           <?php echo e(Form::open(['route' => 'candidates.editreminder', 'files' => 'true', 'id' => 'editremind'])); ?>

            <div class="modal-body">
                <div class="alert alert-danger d-none" id="editValidationErrorsBox"></div>
                <?php echo Form::hidden('planId',null,['id'=>'planId']); ?>

                <div class="row">
                   
                    <input type="hidden" name="id" value="<?php echo e($moment->id); ?>">
                  
                    <div class="form-group col-sm-12">
                        <?php echo e(Form::label('description',__('web.helpers.explanation').':')); ?>

                        <?php echo e(Form::textarea('description', $moment->reminder, ['class' => 'form-control','id' => 'description', 'name' => 'reminder', 'rows' => '5'])); ?>

                    </div>
                     <div class="form-group col-sm-12">
                    <?php echo e(Form::label('type', __('web.es.type').':')); ?>

                    
                      <?php echo e(Form::select('type',
                      ['email' =>'E-mail' , 'reminder' =>'Reminder' ,'interview'=>'Interview','telephone'=>'Telephone Conversation','whatsapp'=>'Whatsapp']
                      ,$moment->type, ['id'=>'helpers_exprience','class' => 'form-control select-box required'])); ?>

                </div>

                    <div class="form-group col-sm-6">
                    <?php echo e(Form::label('date', __('web.helpers.date').':')); ?><a href="#" class="tooltip_icon" data-toggle="tooltip" title="">?</a><span class="text-danger">*</span>
                    <?php echo e(Form::text('date', $moment->date, ['class' => 'form-control datepicker','id' => 'datepicker', "data-provide" => "datepicker" ,'name' => 'date','autocomplete' => 'off'])); ?>

                </div>
                <div class="form-group col-sm-6">
                    <?php echo e(Form::label('time', __('web.helpers.time').':')); ?><a href="#" class="tooltip_icon" data-toggle="tooltip" title="">?</a><span class="text-danger">*</span>
                    <?php echo e(Form::text('time', $moment->time, ['class' => 'form-control','id' => 'time', 'name' => 'time','autocomplete' => 'off'])); ?>

                </div>
                 <div class="form-group col-sm-8">
                   
                    <?php echo e(Form::label('image1', __("web.helpers.upload_file"))); ?>

                <div class="custom-file">
                    <input type="file" name="upload_file" class="custom-file-input" id="" >
                    <label class="custom-file-label rounded" name="image1"><i class="mdi mdi-cloud-upload mr-1"></i><?php echo e(__('web.helpers.upload_file')); ?></label>
                </div>
                </div>
                 <?php if($moment->file): ?>  
                <div class="form-group col-sm-4">
                    <div class="custom-file-preview" id="custom-file-image4" style="display:<?php echo e(isset($moment->file)?'block':'none'); ?>">
                        <img src="<?php echo e(asset('public/reminder')); ?>/<?php echo e($moment->file); ?>" alt="profile Pic" height="80" width="80">
     
                </div>

                </div><?php endif; ?>
                <div class="text-center">
                    <?php echo e(Form::button(__('messages.common.save'), ['type'=>'submit','class' => 'btn btn-primary','id'=>'btnEditSave','data-loading-text'=>"<span class='spinner-border spinner-border-sm'></span> Processing..."])); ?>

                    <button onclick="closemodal_remind(this.id)" type="button" data-id="<?php echo e($moment->id); ?>" id="<?php echo e($moment->id); ?>" class="btn btn-light ml-1"
                            data-dismiss="modal"><?php echo e(__('messages.common.cancel')); ?>

                    </button>
                </div>
            </div></div>
            <?php echo Form::close(); ?>

        </div>
    </div>
</div>
 <?php }?><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/moments/editmodal.blade.php ENDPATH**/ ?>