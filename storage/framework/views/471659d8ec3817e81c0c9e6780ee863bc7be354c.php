<?php $__env->startSection('title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<style>
.card-body {
    padding: 20px 0;
    cursor: grab;

}
.card-columns .card{opacity:0.6;}
.card-columns .card:hover{
opacity:1;
}
.card-columns .card,
.card-columns .card:hover{
height:auto;min-height:165px;
}

</style>
<script>
function selectService(serviceID){
 if ($('#isMultipleServices').is(":checked"))
{
  $('#is_multiple_services').val(1)
}else{
  $('#is_multiple_services').val(0)
}

var form = document.getElementById(serviceID);
form.submit();
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<section class="inner-banner">

      <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white inner-title">
                        <h3 class="text-uppercase title mb-4"><?php echo e($heading); ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
    <div class="container">


        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


       <div style="padding:10px 0px">
       <label class="form-check-label" style="padding:10px 0px"><?php echo e($subheading); ?></label>
       <input  type="checkbox" id="isMultipleServices">
       </div>




     <div class="card-columns">
             <?php foreach($jobCategories as $jobCategory){
             if($jobCategory->is_featured){
             ?>
             <?php echo e(Form::open(array('route' => 'update-services','id' =>$jobCategory->id))); ?>

             <input type="hidden"  name="service_id" value="<?php echo e($jobCategory->id); ?>">
             <input type="hidden"  name="multiple_services" id="is_multiple_services" value="">
            <div class="col-lg-12 card" onClick="selectService(<?php echo e($jobCategory->id); ?>)">
                <div class="row card-body">

                    <div class="col-md-3 col-sm-3 col-xs-12 mx-auto">
                            <img src="<?php echo e($jobCategory->thumbnail); ?>" alt="" class="img-fluid mx-auto d-block">

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class=" txt-center">
                            <h5 class="f-18"><?php echo e($jobCategory->name); ?></h5>
                            <p class="text-muted mb-0"> <?php echo e(Str::limit($jobCategory->description,40)); ?></p>
                        </div>
                    </div>

                        </div>
            </div>
            <?php echo e(Form::close()); ?>


        <?php } }?>
        </div>




        </div>
    </section>
 </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.webLayout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/web/home/select_another_services.blade.php ENDPATH**/ ?>