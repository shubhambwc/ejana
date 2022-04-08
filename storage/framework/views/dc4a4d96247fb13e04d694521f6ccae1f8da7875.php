
<table class="table table-responsive-sm table-striped table-bordered" id="momentTable">
    <thead>
    <tr>
         <th><?php echo e(__('web.helpers.s_no')); ?></th>
        <th><?php echo e(__('web.helpers.name')); ?></th>
        <th><?php echo e(__('web.helpers.date')); ?></th>
         <th><?php echo e(__('web.helpers.job_name')); ?></th>
          <!-- <th><?php echo e(__('web.helpers.file')); ?></th> -->
         <th><?php echo e(__('web.helpers.status')); ?></th>
      
       <!--  <th><?php echo e(__('messages.skill.action')); ?></th> -->
    </tr>
    </thead>
    <tbody>
         <?php $i = 0; ?>
    <?php $__currentLoopData = $job_applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job_application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <?php $i++; ?>
    
    <tr>
         <td><?php echo e($i); ?></td>
            <td><a href="helper/<?php echo e($job_application->owner_id); ?>/edit"> <?php echo e($job_application->first_name); ?> <?php echo e($job_application->last_name); ?></a></td>
            <td><?php echo e($job_application->created_at); ?></td>
            <td><a href="help-requester/<?php echo e($job_application->job_id); ?>/edit"> <?php echo e($job_application->name); ?></a></td>
          <!-- 
            <td class=" text-center">
           <i class="fa fa-download"></i>
            </td> -->

           
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
            <!-- <td class="text-center">
               
               
               <a title="<?php echo e(__('messages.common.delete')); ?>"
                           class="btn btn-danger action-btn delete-action-btn delete-btn" data-id="#"
                           href="#">
                            <i class="fa fa-trash"></i>
                        </a>
    </td> -->
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    <tfoot>
    </tfoot>
</table>


<?php $__env->startPush('scripts'); ?>
<script>
//let tableId = '#momentTable';
$(document).ready( function () {
    $('#momentTable').DataTable();
} );
</script>
 <script>
function editmodal_remind (id) {
  // alert(id);      
  var id = "editmoment"+id;
  var element = document.getElementById(id);
  element.classList.add("show");
  //alert(id);

   document.getElementById(id).style.display = "block";
   document.getElementById(id).style.opacity = "1";
   

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

   
    <?php $__env->stopPush(); ?><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/job_application/table.blade.php ENDPATH**/ ?>