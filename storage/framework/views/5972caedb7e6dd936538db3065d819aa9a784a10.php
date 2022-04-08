<?php $__env->startSection('title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="inner-banner">
    
      <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white inner-title">
                        <h3 class="text-uppercase title mb-4">Apply job</h3>
                       <a href="/" class="text-uppercase font-weight-bold">Home</a> > <span class="text-uppercase text-white font-weight-bold">Apply job</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
  <section class="section">
        <div class="container">
            <div class="row">
            <div class="col-12">
                    <div class="section-title pb-5">
                        <h4 class="title  pb-2"></h4>
                       
                    </div>
                </div>
                <div class="col-lg-12">

                   <!--  <h5 class="text-dark">General Information :</h5> -->
                </div>
 
                <div class="col-12 mt-3">
                    <div class="custom-form p-4 border rounded">
                        <section class="section">
                            <div class="container">
                    <div class="row">

                            <div class="content" style="flex-wrap: inherit;">
                            <?php //if($requestor) { foreach($requestor as $requestors){
                                ?>
                                 <div class="card" style="max-width: 100% !important;">

                                <div class=""> <img src="https://ejana.psd2htmlx.com/assets/img/apply.png" alt="" class="img-fluid mx-auto d-block"></div>
                                <p class="title"> <h5 class="f-18 text-center"><a href="#" class="text-dark"> </a></h5>
                                    <h5 class="f-18 text-center">Hi <?php echo e(auth()->user()->first_name); ?> <?php echo e(auth()->user()->last_name); ?> your job application sucessfully submitted for <?php echo e($title); ?> </h5>
                                    <h5 class="f-18 text-center">We will contact you soon, Thankyou</h5>
                                    <p class=""><span class=""></span><br><a href="<?php echo e(route('jobdetails',$jobId )); ?>">View Job Detail</a> </p>
                                </p>
                              <!--   <p class="text"><span class="txt"></span><br>test<br><a href="<?php echo e(route('jobdetails',$jobId )); ?>">View Job Detail</a> </p> -->
                                <p></p>


                                </div>
                          <?php  //} }?>

                      </div>





</div>
</div>
    </section>
                       
                        
                    </div>
                </div>
            </div>

            

            

            
            

            
        </div>
    </section>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.webLayout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/web/home/job-application.blade.php ENDPATH**/ ?>