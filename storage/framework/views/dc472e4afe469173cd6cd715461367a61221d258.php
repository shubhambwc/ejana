<?php $__env->startSection('title'); ?>
    <?php echo e(__('New Help requester')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('assets/css/summernote.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('assets/css/select2.min.css')); ?>" rel="stylesheet" type="text/css"/>
     <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap-datetimepicker.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/inttel/css/intlTelInput.css')); ?>">
    <link href="<?php echo e(asset('assets/css/jquery.dataTables.min.css')); ?>" rel="stylesheet" type="text/css"/>
     <style type="text/css">
        img#image1_preview {
            height: 100px;
            width: 100px;
            border-radius: 10px;
            margin: 10px;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
<script>
  $( function() {
      
      $('.OpenFileInModal').click(function(){
           var fileName = $(this).data('url-to-open');
           //var fileName = 'OpenFileInModal';
           var type = $(this).data('type');
           if(type!='image'){
           //$('#docpreview').attr('data', fileName);
           //$('#previewDocModal').modal('show');
           var strWindowFeatures = "location=yes,height=570,width=520,scrollbars=yes,status=yes";

           window.open(fileName, strWindowFeatures)
           }else{
              $('#imagepreview').attr('src', fileName); // here asign the image to the modal when the user click the enlarge link
              $('#previewImageModal').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function

           }

           })

   $('#image1').change(function(){
    var input = this;
    var url = $(this).val();
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg"))
     {
        var reader = new FileReader();

        reader.onload = function (e) {
           $('#image1_preview').attr('src', e.target.result);
        }
       reader.readAsDataURL(input.files[0]);
    }else if (input.files && input.files[0]&& (ext == "pdf")){
    $('#image1_preview').attr('src', '/assets/img/pdf_file_icon.png');
    }else
    {
      $('#image1_preview').attr('src', '/assets/img/doc_file_icon.png');
    }
    $('#custom-file-image1').show();
  });
    });
             </script>
             <?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-header">
            <h1><?php echo e(__('Edit Contact Moment')); ?></h1>
            <div class="section-header-breadcrumb">
                <a href="<?php echo e(route('company.index')); ?>"
                   class="btn btn-primary form-btn float-right"><?php echo e(__('messages.common.back')); ?></a>
            </div>
        </div>
        <div class="section-body">
            <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="card">
                <div class="card-body">
                    <?php echo e(Form::open(['route' => 'candidates.editreminder', 'files' => 'true', 'id' => 'editremind'])); ?>

                    <?php foreach($reminders as $moment){ ?>
            <div class="modal-body">
                <div class="alert alert-danger d-none" id="editValidationErrorsBox"></div>
                <?php echo Form::hidden('planId',null,['id'=>'planId']); ?>

                <div class="row">
                   
                    <input type="hidden" name="id" value="<?php echo  $moment['id'];?>">
                    
                  
                    <div class="form-group col-sm-12">
                        <?php echo e(Form::label('description',__('web.helpers.explanation').':')); ?>

                        <?php echo e(Form::textarea('description', $moment['reminder'], ['class' => 'form-control','id' => 'description', 'name' => 'reminder', 'rows' => '5'])); ?>

                    </div>
                     <div class="form-group col-sm-12">
                    <?php echo e(Form::label('type', __('web.helpers.type').':')); ?>

                    
                      <?php echo e(Form::select('type',
                      ['email' =>'E-mail' , 'reminder' =>'Reminder' ,'interview'=>'Interview','telephone'=>'Telephone Conversation','whatsapp'=>'Whatsapp']
                      ,$moment['type'], ['id'=>'helpers_exprience','class' => 'form-control select-box required'])); ?>

                </div>

                    <div class="form-group col-sm-6">
                    <?php echo e(Form::label('date', __('web.helpers.date').':')); ?><a href="#" class="tooltip_icon" data-toggle="tooltip" title="">?</a><span class="text-danger">*</span>
                    <?php echo e(Form::text('date', $moment['date'], ['class' => 'form-control editdatepicker','id' => 'editdatepicker', "data-provide" => "datepicker" ,'name' => 'date','autocomplete' => 'off'])); ?>

                </div>
                <div class="form-group col-sm-6">
                    <?php echo e(Form::label('time', __('web.helpers.time').':')); ?><a href="#" class="tooltip_icon" data-toggle="tooltip" title="">?</a><span class="text-danger">*</span>
                    <?php echo e(Form::text('time', $moment['time'], ['class' => 'form-control','id' => 'edittimepicker', 'name' => 'time','autocomplete' => 'off'])); ?>

                </div>
                 <div class="form-group col-sm-8">
                   
                    <?php echo e(Form::label('image1', __("web.helpers.upload_file"))); ?>

                <div class="custom-file">
                    <input type="file" name="upload_file" class="custom-file-input" id="image1" class="custom-file-input <?php echo e(isset($moment['file'])?'':'required'); ?>">
                    <label class="custom-file-label rounded" name="image1"><i class="mdi mdi-cloud-upload mr-1"></i><?php echo e(__('web.helpers.upload_file')); ?></label>
                </div></div>
                <div class="form-group col-sm-4">
                <div class="custom-file-preview" id="custom-file-image1" style="display:<?php echo e(isset($moment['file'])?'block':'none'); ?>">
                     <?php echo App\Http\Controllers\CandidateController:: isDocImageType(asset('public/reminder/'.$moment['file']),'image1_preview');?>
                </div>
                </div>
                
                <div class="text-center">
                    <?php echo e(Form::button(__('messages.common.save'), ['type'=>'submit','class' => 'btn btn-primary','id'=>'btnEditSave','data-loading-text'=>"<span class='spinner-border spinner-border-sm'></span> Processing..."])); ?>

                   <!--  <button onclick="closemodal_remind(this.id)" type="button" data-id="<?php echo e($moment['id']); ?>" id="<?php echo e($moment['id']); ?>" class="btn btn-light ml-1"
                            data-dismiss="modal"><?php echo e(__('messages.common.cancel')); ?>

                    </button> -->
                </div>
            </div></div>
             <?php }?>
            <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </section>
    <div class="modal" id="previewImageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" data-dismiss="modal">
    <div class="modal-content">

      <div class="modal-body">
        <img src="" id="imagepreview" style="width: 100%;" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script>
  $( function() {
 $( ".editdatepicker" ).datepicker({
            dateFormat: 'dd-mm-yy',
            });
            
             $('#timepicker').datetimepicker({
               icons:
            {
                up: 'fa fa-angle-up',
                down: 'fa fa-angle-down'
            },
                 format: 'LT'
             });
             $('#edittimepicker').datetimepicker({
               icons:
            {
                up: 'fa fa-angle-up',
                down: 'fa fa-angle-down'
            },
                 format: 'LT'
             });
              });
             </script>
    <script>
        let companyStateUrl = "<?php echo e(route('states-list')); ?>";
        let companyCityUrl = "<?php echo e(route('cities-list')); ?>";
        let utilsScript = "<?php echo e(asset('assets/js/inttel/js/utils.min.js')); ?>";
        let isEdit = false;
        let phoneNo = "<?php echo e(old('region_code').old('phone')); ?>";
    </script>
     <script src="<?php echo e(asset('assets/js/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap-datetimepicker.min.js')); ?>"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="<?php echo e(asset('assets/js/summernote.min.js')); ?>"></script>
    <script src="<?php echo e(mix('assets/js/companies/create-edit.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/inttel/js/intlTelInput.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/inttel/js/utils.min.js')); ?>"></script>
    <script src="<?php echo e(mix('assets/js/custom/phone-number-country-code.js')); ?>"></script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/moments/editmoment.blade.php ENDPATH**/ ?>