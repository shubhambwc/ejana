<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('assets/css/jquery.dataTables.min.css')); ?>" rel="stylesheet" type="text/css"/>
<?php $__env->stopPush(); ?>
<table class="table table-responsive-sm table-striped table-bordered" id="remindTable">
    <thead>
    <tr>
        <th><?php echo e(__('web.helpers.date')); ?></th>
         <th><?php echo e(__('web.helpers.time')); ?></th>
         <th><?php echo e(__('web.helpers.type')); ?></th>
          <th><?php echo e(__('web.helpers.explanation')); ?></th>
          <th><?php echo e(__('web.helpers.file')); ?></th>
      
        <th><?php echo e(__('messages.skill.action')); ?></th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $reminders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $moment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
    <tr>
            <td><?php echo e($moment->date); ?></td>
            <td><?php echo e($moment->time); ?></td>
            <td><?php echo e($moment->type); ?></td>
            <td><?php echo e($moment->reminder); ?></td>
            <td class=" text-center">
            <?php if(empty($moment->file)): ?> 
                <span>-</span>
                <?php else: ?>
            <a title="<?php echo e(__('web.helpers.file')); ?>"
                             class="" data-id="<?php echo e($moment['id']); ?>"
                           href="<?php echo e(asset('public/reminder')); ?>/<?php echo e($moment->file); ?>" target="_blank">
                            <i class="fa fa-download"></i>
                        </a>
                <?php endif; ?>  


            </td>
            <td class="text-center">
               <!-- <span onclick="editmodal_remind(this.id)"  title="Edit" class="btn btn-warning action-btn" data-id="<?php echo e($moment['id']); ?>" id="<?php echo e($moment['id']); ?>"> -->
               <a href="<?php echo e(URL('admin/moment/'.$moment->id.'/edit' )); ?>" title="Edit" class="btn btn-warning action-btn" data-id="<?php echo e($moment['id']); ?>" id="<?php echo e($moment['id']); ?>">
                        <i class="fa fa-edit"></i>
               </a>
               
               <a title="<?php echo e(__('messages.common.delete')); ?>"
                           class="btn btn-danger action-btn delete-action-btn delete-btn" data-id="<?php echo e($moment['id']); ?>"
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


<?php $__env->startPush('scripts'); ?>
<script>
let tableId = '#remindTable';
$(document).ready( function () {
    $('#remindTable').DataTable();
} );
</script>
 <script>
function editmodal_remind (id) {
 // alert('.editdatepicker' + id);

  // alert(id);      
  var element = document.getElementById(id);
  element.classList.add("show");

   document.getElementById(id).style.display = "block";
   document.getElementById(id).style.opacity = "1";
   

 $(id).modal('show');
}
function closemodal_remind (id) {
  // alert(id);      
   document.getElementById(id).style.display = "none";
   document.getElementById(id).style.opacity = "0";

 $(id).modal('hide');
}
let tableId = '#remindTable';
       // let planUrl = "<?php echo e(route('candidates.index')); ?>";
    </script>
<script src="<?php echo e(asset('assets/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(mix('assets/js/custom/custom-datatable.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/reminder/reminderedit.js')); ?>"></script>
    <?php $__env->stopPush(); ?><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/candidates/reminder/table.blade.php ENDPATH**/ ?>