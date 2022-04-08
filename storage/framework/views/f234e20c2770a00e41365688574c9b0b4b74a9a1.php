
<?php if(session()->has('message')): ?>
    <div class="alert alert-success">
        <?php echo e(session()->get('message')); ?>

    </div>
<?php endif; ?>
<table class="table table-responsive-sm table-striped table-bordered" id="momentTable">
    <thead>
    <tr>
         <th><?php echo e(__('web.helpers.s_no')); ?></th>
        <th><?php echo e(__('web.helpers.name')); ?></th>
        <th><?php echo e(__('web.helpers.date')); ?></th>
         <th><?php echo e(__('web.helpers.job_name')); ?></th>
          <!-- <th><?php echo e(__('web.helpers.file')); ?></th> -->
         <th><?php echo e(__('web.helpers.status')); ?></th>
      
        <th><?php echo e(__('messages.skill.action')); ?></th>
    </tr>
    </thead>
    <tbody>
         <?php $i = 0; ?>
                <?php $__currentLoopData = $job_applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job_application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <?php $i++; ?>
                
    <tr>
         <td><?php echo e($i); ?></td>
            <td><a href="/candidate-details/<?php echo e($job_application->candidate_id); ?>/" target="_blank"> <?php echo e($job_application->first_name); ?> <?php echo e($job_application->last_name); ?></a></td>
            <td><?php echo e($job_application->created_at); ?></td>
            <td><a href="/job-detail/<?php echo e($job_application->owner_id); ?>/" target="_blank"><?php echo e($job_application->name); ?></a></td>
           <td>
                <?php if($job_application->status == 1): ?>

                <button type="button" class="btn btn-info">Applied</button>
                <?php elseif($job_application->status == 2): ?>
                  <button type="button" class="btn btn-danger">Rejected</button>
                    <?php elseif($job_application->status == 3): ?>
                  <button type="button" class="btn btn-success">Selected</button>
                   <?php else: ?>
                  <button type="button" class="btn btn-warning">Shortlisted</button>
                  <?php endif; ?>
              </td>
              <td class="text-center">
                <button type="button" class="btn btn-sm btn-primary editingTRbutton fas fa-pencil-alt noUnderlineCustom text-white" data-toggle="modal" id="<?php echo e($job_application->job_applications_id); ?>" onClick="editmodal_remind(this.id)"></button>
                   <!-- <a href="#" title="Edit" class="btn btn-warning action-btn" data-target="#<?php echo e($job_application->id); ?>" >
                     <i class="fa fa-edit"></i>
                   </a> -->
                   <a title="<?php echo e(__('messages.common.delete')); ?>"
                               class="btn btn-danger action-btn delete-action-btn delete-btn" data-id="<?php echo e($job_application->job_applications_id); ?>"
                               href="#">
                                <i class="fa fa-trash"></i>
                    </a>
            </td>
           
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    <tfoot>
    </tfoot>
</table>

<!-- Modal -->
<?php $__currentLoopData = $job_applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job_application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="modal fade" tabindex="-1" role="dialog" id="editmoment<?php echo e($job_application->job_applications_id); ?>">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo e(__('messages.plan.change_status')); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" id="<?php echo e($job_application->job_applications_id); ?>" onClick="closemodal_remind(this.id)">&times;</span>
                </button>
            </div>
            <?php echo Form::open(['route' => 'employee.updatejob_status','id' => 'editForm']); ?>

            <div class="modal-body">
                <div class="alert alert-danger d-none" id="editValidationErrorsBox"></div>
                <?php echo Form::hidden('job_applications_id',$job_application->job_applications_id,['id'=>'job_applications_id']); ?>

                <div class="row">
                    <div class="form-group col-sm-12">
                        <?php echo Form::label('name', __('web.helpers.status').':'); ?><span class="text-danger">*</span>
                        
                         <?php echo e(Form::select('status',
                      ['1' =>'Applied' , '2' =>'Rejected' ,'3'=>'Selected','4'=>'Shortlisted']
                      ,$job_application->status, ['id'=>'status','class' => 'form-control select-box required'])); ?>

                    </div>
                    
                </div>
                <div class="text-right">
                    <?php echo e(Form::button(__('messages.common.save'), ['type'=>'submit','class' => 'btn btn-primary','id'=>'btnEditSave','data-loading-text'=>"<span class='spinner-border spinner-border-sm'></span> Processing..."])); ?>

                    <button id="<?php echo e($job_application->job_applications_id); ?>" onClick="closemodal_remind(this.id)" type="button"  class="btn btn-light ml-1"
                            data-dismiss="modal"><?php echo e(__('messages.common.cancel')); ?>

                    </button>
                </div>
            </div>
            <?php echo Form::close(); ?>

        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
//let tableId = '#momentTable';
$(document).ready( function () {
    $('#momentTable').DataTable();
} );
</script>
 <script>
function editmodal_remind (id) {
  //alert(id);      
  var id = "editmoment"+id;
  var element = document.getElementById(id);
  element.classList.add("show");
  //alert(id);

   document.getElementById(id).style.display = "block";
   document.getElementById(id).style.opacity = "1";
   document.getElementById(id).style.background = "#02020252";
   document.getElementById(id).style.top = "135px";

   
   

 $(id).modal('show');
}
function closemodal_remind (id) {
  // alert(id);   
  var id = "editmoment"+id;   
   document.getElementById(id).style.display = "none";
   document.getElementById(id).style.opacity = "0";

 $(id).modal('hide');
}
let tableId = '#momentTable';
       // let planUrl = "<?php echo e(route('candidates.index')); ?>";
    </script>

     <script src="<?php echo e(asset('assets/js/reminder/jobsedit.js')); ?>"></script>
    <?php $__env->stopPush(); ?><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/employer/jobs/table.blade.php ENDPATH**/ ?>