<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('assets/css/jquery.dataTables.min.css')); ?>" rel="stylesheet" type="text/css"/>
<?php $__env->stopPush(); ?>
<table class="table table-responsive-sm table-striped table-bordered" id="helper_transaction_Table">
    <thead>
    <tr>
        <th><?php echo e(__('messages.transaction.transaction_date')); ?></th>
        <th><?php echo e(__('messages.transaction.transaction_id')); ?></th>
       
        <th><?php echo e(__('messages.plan.amount')); ?></th>
         <th><?php echo e(__('messages.transaction.invoice')); ?></th>
         <!--  <th><?php echo e(__('web.helpers.explanation')); ?></th> -->
      
        
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $moment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
    <tr>
            <td><?php echo e($moment->created_at); ?></td>
            <td></td>
            <td><?php echo e($moment->amount); ?></td>
            <td><?php echo e($moment->invoice_id); ?> <h1 align="center" id="<?php echo e($moment->id); ?>" class="download fas fa-file-invoice-dollar" 
style="cursor:pointer; font-size: 18px !important;" title="Generate invoice" ></h1></td>
           <!--  <td><?php echo e($moment->reminder); ?></td> -->
            <!-- <td class=" text-center">
               <span onclick="editmodal_remind(this.id)"  title="Edit" class="btn btn-warning action-btn" data-id="<?php echo e($moment['id']); ?>" id="<?php echo e($moment['id']); ?>">
                        <i class="fa fa-edit"></i>
               </span>
               
               <a title="<?php echo e(__('messages.common.delete')); ?>"
                           class="btn btn-danger action-btn delete-action-btn delete-btn" data-id="<?php echo e($moment['id']); ?>"
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
<?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $moment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" tabindex="-1" role="dialog" id="<?php echo e($moment->id); ?>">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
 <div id="posts-landing<?php echo e($moment->id); ?>" >

    <div style="text-align: center; margin-bottom: 10px;"id="logo">
        <img style="width: 90px;" src="https://www.ejana.nl/assets/img/Logo_jn.png">
      </div>
    <h3 id="invoicenew" style="border-top: 1px solid  #5D6975; border-bottom: 1px solid  #5D6975; color: #5D6975; font-size: 2.4em;line-height: 1.4em;font-weight: normal;text-align: center;margin: 0 0 20px 0;">Invoice</h3>
    <div id="company" class="clearfix" style="float: right;text-align: right;">
        <div>EJANA</div>
        <div>455 Foggy Heights,<br /> AZ 85004, US</div>
        <div>0638342946</div>
        <div><a href="mailto:info@ejana.nl">info@ejana.nl</a></div>
      </div>
      <div id="project" style="float: left;">
        <div><span style="color: #5D6975;text-align: right;width: auto;margin-right: 10px;display: inline-block; font-size: 0.8em;">Invoice ID </span> <?php echo e($moment->invoice_id); ?></div>
        <div><span style="color: #5D6975;text-align: right;width: auto;margin-right: 10px;display: inline-block; font-size: 0.8em;">Name</span> <?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?></div>
        <div><span style="color: #5D6975;text-align: right;width: auto;margin-right: 10px;display: inline-block; font-size: 0.8em;">Email</span> <a href="#"><?php echo e($user->email); ?></a></div>
        <div><span style="color: #5D6975;text-align: right;width: auto;margin-right: 10px;display: inline-block; font-size: 0.8em;">Date</span> <?php echo e($moment->created_at); ?></div>
         <div><span style="color: #5D6975;text-align: right;width: auto;margin-right: 10px;display: inline-block; font-size: 0.8em;">Amount</span> <?php echo e($moment->amount); ?></div>
       
      </div>
       <div id="" style="margin-top: 20%; margin-bottom: 10%"><br><br><br><br>
        <div style="width:100%; border-collapse: collapse;
  margin: 0 0 20px 0; line-height: 1.4em;">
         <div style="width: 40%; float:left;"> <b>Service</b></div> 
         <div style="width: 30%;  float:left; text-align: center;"> <b>Price</b></div>  
         <div style="width: 30%;  float:left; text-align: center;"><b>Total</b></div>

        </div>
         <div style="width: 100%">
         <div style="width: 40%; float:left;"> Subscription Plan</div> 
         <div style="width: 30%; float:left; text-align: center;"> <?php echo e($moment->amount); ?></div>  
         <div style="width: 30%; float:left;text-align: center;"><?php echo e($moment->amount); ?></div>

        </div>





       </div>

     



       <div style="color: #5D6975;width: 100%;bottom: 0;border-top: 1px solid #C1CED9;padding: 8px 0;text-align: center; margin-top: 30%; margin-bottom: 10%">
      Invoice was created on a computer and is valid without the signature and seal.
    </div>
       
    
   
</div>
</div></div>


</div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->startPush('scripts'); ?>


<script>
$(document).ready( function () {
    $('#helper_transaction_Table').DataTable();
} );
</script>
 
<script src="<?php echo e(asset('assets/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(mix('assets/js/custom/custom-datatable.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/reminder/reminderedit.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.4/jspdf.plugin.autotable.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

    <script>
       /* $('.download').click(function () {
            var id = this.id;*/
/*document.getElementsByClassName('download')
        .addEventListener("click", () => {
            const invoice = this.document.getElementById('posts-landing'+id);
            console.log(invoice);
            console.log(window);
            var opt = {
                margin: 1,
                filename: 'myfile.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
            html2pdf().from(invoice).set(opt).save();
        //});
         });*/


$(document).ready(function() {

$('.download').click(function () {
    var id = this.id;
const invoice = document.getElementById('posts-landing'+id);
            console.log(invoice);
            console.log(window);
            var opt = {
                margin: 1,
                filename: 'myfile.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
            html2pdf().from(invoice).set(opt).save();

});

    });
</script>
    <?php $__env->stopPush(); ?><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/companies/transaction/table.blade.php ENDPATH**/ ?>