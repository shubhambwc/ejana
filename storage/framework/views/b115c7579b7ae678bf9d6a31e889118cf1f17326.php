<?php $__env->startSection('title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<style>
.right-txt {
    text-align: right;
}
</style>
    <section class="inner-banner">
    
      <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white inner-title">
                        <h3 class="text-uppercase title mb-4">SERVICE</h3>
                       <a href="<?php echo e(route('front.home')); ?>" class="text-uppercase font-weight-bold">Home</a> > <span class="text-uppercase text-white font-weight-bold">service</span>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
       
  
 <!-- ABOUT US START -->
    <section class="section">
        <div class="container">
        
            <div class="row ">
              <div class="col-md-12  ">
                 <p class="text-muted text-center">Whether you are looking for the right babysitter, childminder, homework supervisor,animal sitter, cleaninghelp, gardenhelp, handyman and computer help. we make sure that you get in touch with each other easily and quickly. </p>
               </div>
            </div>
            
            <?php $i=0; if($jobCategories) { foreach($jobCategories as $jobCategory){ 
             if($jobCategory->is_featured){
             if (0 == $i % 2) {
             ?>
             
             <div class="row align-items-center mt-5 mobile-text">

                <div class="col-md-6 ">
                        <img src="<?php echo e($jobCategory->thumbnail); ?>" alt="" class="img-fluid mx-auto d-block">
                </div>

                <div class="col-md-6 ">
                  <h4 class="heading font-weight-bold "><?php echo e($jobCategory->name); ?> </h4>
				  <p class="text-muted "><?php echo $jobCategory->description; ?></p>
				  <p class="text-muted "><a href="<?php echo e(route('service-details',$jobCategory->id)); ?>">Read More</a></p>
                </div>
                
             </div>
             <?php }else{ ?>
             
             <div class="row align-items-center mt-5 mobile-text">
              <div class="col-md-6  right-txt order-2 order-md-1">
                  <h4 class="heading font-weight-bold "><?php echo e($jobCategory->name); ?></h4>
				  <p class="text-muted "><?php echo $jobCategory->description; ?></p>
				  <p class="text-muted "><a href="<?php echo e(route('service-details',$jobCategory->id)); ?>">Read More</a></p>
                         
             </div>
              <div class="col-md-6 order-1 order-md-2 ">
                        <img src="<?php echo e($jobCategory->thumbnail); ?>" alt="" class="img-fluid mx-auto d-block">
              </div>
              </div> 
              <?php } ?> 
             <?php $i++; } } } ?>
             
             
            
            
                
               

               
           
        </div>
    </section>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('web.webLayout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/web/home/ourservice.blade.php ENDPATH**/ ?>