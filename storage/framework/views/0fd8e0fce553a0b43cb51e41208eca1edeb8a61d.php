<?php $__env->startSection('title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   
   <section class="inner-banner">
    
      <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white inner-title">
                        <h3 class="text-uppercase title mb-4">Job Details</h3>
                       <a href="/" class="text-uppercase font-weight-bold">Home</a> > <span class="text-uppercase text-white font-weight-bold">Job Details</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="job-detail  text-center job-single border rounded p-4">
                        <div class="job-single-img mb-2">
                            <img src="images/featured-job/img-1.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                        <h3 class="heading"><?php echo e($title); ?></h3>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mr-3">
                                <p class="text-muted mb-2"><i class="mdi mdi-bank mr-1"></i><?php echo e((!empty(@$postMetaArray['full_name'])) ? @$postMetaArray['full_name'].', ' : ''); ?></p>
                            </li>

                            <li class="list-inline-item">
                                <p class="text-muted mb-2"><i class="mdi mdi-map-marker mr-1"></i> <?php echo e((!empty(@$postMetaArray['address'])) ? @$postMetaArray['address'].', ' : ''); ?> 
                                        <?php echo e((!empty(@$postMetaArray['zip_code'])) ? @$postMetaArray['zip_code'].', ' : ''); ?></p>
                            </li>

                            <li class="list-inline-item">
                                <p class="text-muted mb-2"><i class="mdi mdi-currency-usd mr-1"></i>$850 - $1000/month</p>
                            </li>
                        </ul>
                        <p class="text-muted mb-0"> <?php echo e((!empty(@$postMetaArray['advertisement_text'])) ? @$postMetaArray['advertisement_text'].', ' : ''); ?></p>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-4">Job Description :</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4">
                                <div class="job-detail-desc">
                                    <p class="text-muted mb-3">Aenean vulputate eleifend tellus aenean leo ligula porttitor consequat vitae eleifend ac enim liquam lorem ante, dapibus in, viverra quis feugiat a tellu hasellus viverra nulla ut metus varius laoreet uisque rutrum enean imperdiet tiam ultricies nisi vel augue urabitur ullamcorper ultricies nisi am eget dui tiam rhoncus aecenas tempus tellus eget condimentum rhoncus sem quam semper libero amet adipiscing sem neque sed ipsum am quam nunc blandit luctus pulvinar hendrerit idlorem Maecenas nec odio et ante tincidunt tempus. Nullam quis ante. </p>

                                    <p class="text-muted mb-0">Nam quam nunc blandit vel luctus pulvinar hendrerit id lorem Maecenas nec odio et ante tincidunt tempus donec vitae sapien ut libero venenatis faucibus ullam quis ante tiam sit amet orci eget eros faucibus tincidunt ed fringilla mauris sit amet nibh Donec sodales sagittis magna ed consequat leo eget bibendum sodales augue velit cursus nunc quis gravida magna mi libero usce vulputate eleifend sapien estibulum purus qua scelerisque ut mollis sed nonummy id metus ullam accumsan lorem Vivamus elementum semper enean vulputate eleifend tellus enean leo ligula porttitor eu consequat vitae eleifend ac enim liquam lorem ante dapibus viverra quis feugiat tellus hasellus viverra nulla ut metus varius laoreet uisque rutrum Aenean imperdiet in dui</p>
                                </div>

                              
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="text-dark mt-4">Education & Experience :</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4">
                                <div class="job-detail-desc">
                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-checkbox-marked-circle-outline text-muted"></i>
                                        </div>
                                        <p class="text-muted mb-2">Morbi mattis ullamcorper velit hasellus gravida semper nisi nullam vel sem.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-checkbox-marked-circle-outline text-muted"></i>
                                        </div>
                                        <p class="text-muted mb-2">Phasellus viverra nulla ut metus varius laoreet uisque rutrum enean imperdiet.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-checkbox-marked-circle-outline text-muted"></i>
                                        </div>
                                        <p class="text-muted mb-2">Etiam ultricies nisi vel augue Curabitur ullamcorper ultricies nisi am eget dui tiam rhoncus.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-checkbox-marked-circle-outline text-muted"></i>
                                        </div>
                                        <p class="text-muted mb-2">Donec mollis hendrerit risus hasellus nec sem in justo pellentesque facilisis.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-checkbox-marked-circle-outline text-muted"></i>
                                        </div>
                                        <p class="text-muted mb-2">Praesent congue erat at massa Sed cursus turpis vitae tortor onec posuere vulputate arcu.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-checkbox-marked-circle-outline text-muted"></i>
                                        </div>
                                        <p class="text-muted mb-2">Donec elit libero, sodales nec volutpat a suscipit non turpis ullam sagittis.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-checkbox-marked-circle-outline text-muted"></i>
                                        </div>
                                        <p class="text-muted mb-2">Pellentesque auctor neque nec urna Proin sapien ipsum porta a auctor quis euismod ut mi.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-checkbox-marked-circle-outline text-muted"></i>
                                        </div>
                                        <p class="text-muted mb-2">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-checkbox-marked-circle-outline text-muted"></i>
                                        </div>
                                        <p class="text-muted mb-0">Ptristique senectus et netus et malesuada fames porta a auctor quis euismod ut mi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-4">Responsibilities :</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4">
                                <div class="job-detail-desc">
                                    <p class="text-muted mb-3">Aenean vulputate eleifend tellus aenean leo ligula porttitor consequat at vitae eleifend ac enim liquam lorem ante, dapibus in, viverra quis feugiat a tellu hasellus viverra nulla ut metus varius laoreet uisque rutrum enean imperdiet tiam ultricies nisi vel augue urabitur ullamcorper ultricies nisi am eget dui tiam rhoncus aecenas tempus tellus eget condimentum rhoncus sem quam semper libero amet Nullam quis ante. </p>
                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-checkbox-marked-circle-outline text-muted"></i>
                                        </div>
                                        <p class="text-muted mb-2">Morbi mattis ullamcorper velit hasellus gravida semper nisi nullam vel sem.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-checkbox-marked-circle-outline text-muted"></i>
                                        </div>
                                        <p class="text-muted mb-2">Phasellus viverra nulla ut metus varius laoreet uisque rutrum enean imperdiet.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-checkbox-marked-circle-outline text-muted"></i>
                                        </div>
                                        <p class="text-muted mb-2">Etiam ultricies nisi vel augue Curabitur ullamcorper ultricies nisi am eget dui tiam rhoncus.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-checkbox-marked-circle-outline text-muted"></i>
                                        </div>
                                        <p class="text-muted mb-2">Donec mollis hendrerit risus hasellus nec sem in justo pellentesque facilisis.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-checkbox-marked-circle-outline text-muted"></i>
                                        </div>
                                        <p class="text-muted mb-2">Praesent congue erat at massa Sed cursus turpis vitae tortor onec posuere vulputate arcu.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-checkbox-marked-circle-outline text-muted"></i>
                                        </div>
                                        <p class="text-muted mb-0">Donec elit libero, sodales nec volutpat a suscipit non turpis ullam sagittis.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-4">How To Apply :</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4">
                                <div class="job-detail-desc">
                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <p class="text-muted mb-0">1 )</p>
                                        </div>
                                        <p class="text-muted mb-3 overflow-hidden d-block">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae In ac dui quis mi consectetuer lacinia ed aliquam ultrices mauris nteger ante arcu accumsan consectetuer thet a eget posuere ut mauris raesent adipiscing Sed lectus Donec mollis hendrerit risus hasellue.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <p class="text-muted mb-0">2 )</p>
                                        </div>
                                        <p class="text-muted mb-3 overflow-hidden d-block">In enim justo rhoncus ut imperdiet a venenatis vitae justo ullam dictum felis eu pede mollis pretium nteger tincidunt enean imperdiet tiam ultricies nisi vel augue urabitur ullamcorper ultricies nisi am eget Etiam rhoncus ras dapibus ivamus elementum semper nisi.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <p class="text-muted mb-0">3 )</p>
                                        </div>
                                        <p class="text-muted mb-0 overflow-hidden d-block">Maecenas nec odio et ante tincidunt tempus onec vitae sapien ut libero venenatis faucibus ullam quis ante tiam sit Vestibulum purus quam scelerisque ut mollis sed nonummy id metus ullam accumsan lorem in dui ras ultricies mi eu turpis hendrerit fringilla amet orci eget eros.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5 mt-4 mt-sm-0 pt-2 pt-sm-0">
                 
                    <div class="job-detail rounded border job-overview  mb-4">
                        <?php if(!empty(@$postMetaArray['minimum_exp'])): ?>
                        <div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-security text-muted mdi-24px"></i>
                            </div>
                             
                            <div class="overview-details">
                                <h6 class="text-muted mb-0">Experience</h6>
                                <h6 class="text-black-50 pt-2 mb-0"><?php echo e((!empty(@$postMetaArray['minimum_exp'])) ? @$postMetaArray['minimum_exp'].' ,': ''); ?> - <?php echo e((!empty(@$postMetaArray['maximum_exp'])) ? @$postMetaArray['maximum_exp'].' , ' : ''); ?> Years Exp.</h6>
                            </div>
                            
                        </div>
                        <?php endif; ?>

                        <div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-currency-usd text-muted mdi-24px"></i>
                            </div>
                            <div class="overview-details">
                                <h6 class="text-muted mb-0">Salary</h6>
                                <h6 class="text-black-50 pt-2 mb-0">$700 - $1200/month</h6>
                            </div>
                        </div>

                        <div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-apps text-muted mdi-24px"></i>
                            </div>
                            <div class="overview-details">
                                <h6 class="text-muted mb-0">Category</h6>
                                <h6 class="text-black-50 pt-2 mb-0"><?php echo e($title); ?> </h6>
                            </div>
                        </div>

                        <div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-human-male-female text-muted mdi-24px"></i>
                            </div>
                            <div class="overview-details">
                                <h6 class="text-muted mb-0">Gender</h6>
                                <h6 class="text-black-50 pt-2 mb-0">Male & Female</h6>
                            </div>
                        </div>
                        <?php if(!empty(@$postMetaArray['user_signature_date'])): ?>

                        <div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-calendar-today text-muted mdi-24px"></i>
                            </div>
                            <div class="overview-details">
                                <h6 class="text-muted mb-0">Date Posted</h6>
                                <h6 class="text-black-50 pt-2 mb-0"><?php echo e(@$postMetaArray['user_signature_date']); ?></h6>
                            </div>
                        </div>
                         <?php endif; ?>
                         <?php if(!empty($companyDetail->user->email)): ?>

                        <div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-email text-muted mdi-24px"></i>
                            </div>
                            <div class="overview-details">
                                <h6 class="text-muted mb-0">Email</h6>
                                <h6 class="text-black-50 pt-2 mb-0"><?php echo e($companyDetail->user->email); ?></h6>
                            </div>
                        </div>
                        <?php endif; ?>
                         <?php if(!empty(@$postMetaArray['phone'])): ?>

                        <div class="single-post-item">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-phone-classic text-muted mdi-24px"></i>
                            </div>
                            <div class="overview-details">
                                <h6 class="text-muted mb-0">Contact No</h6>
                                <h6 class="text-black-50 pt-2 mb-0"><?php echo e(@$postMetaArray['phone']); ?></h6>
                            </div>
                        </div>
                          <?php endif; ?>
                    </div>

                    <h5 class="text-dark">Job Location</h5>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6030.418742494061!2d-111.34563870463673!3d26.01036670629853!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1471908546569" class="rounded" style="border: 0" allowfullscreen=""></iframe>
                    </div>

                    <div class="job-details-desc-item mt-2">
                        <div class="float-left mr-2">
                            <i class="mdi mdi-map-marker text-muted"></i>
                        </div>
                        <p class="text-muted mb-2"><?php echo e((!empty(@$postMetaArray['address'])) ? @$postMetaArray['address'].', ' : ''); ?> 
                                        <?php echo e((!empty(@$postMetaArray['zip_code'])) ? @$postMetaArray['zip_code'].', ' : ''); ?></p>
                    </div>

                    <ul class="social-icon list-inline mb-0 mt-4">
                        
                        <li class="list-inline-item"><a href="#" class=" rounded"><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" class=" rounded"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class=" rounded"><i class="mdi mdi-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="#" class=" rounded"><i class="mdi mdi-whatsapp"></i></a></li>
                        <li class="list-inline-item"><a href="#" class=" rounded"><i class="mdi mdi-linkedin"></i></a></li>
                    </ul>

                    <div class="mt-4">
                        <?php if(auth()->guard()->check()): ?>
                        <?php if($job_status == "0"): ?>
                        <!--  <a href="<?php echo e(route('apply-to-job',$ownerId)); ?>" class="btn btn-primary btn-block ">APPLY THIS JOB</a> -->
                         <?php echo e(Form::open(['route' => 'apply-to-job', 'files' => 'true', 'id' => 'applyjob'])); ?>

                                                        <input type="hidden" name="jobId" value="<?php echo $ownerId; ?>">
                                                         <input type="hidden" name="service_id" value="<?php echo $service_id; ?>">
                                                        
                                                        <button type="submit" id="" class="btn btn-primary btn-block"
                            >APPLY THIS JOB</button><?php echo e(Form::close()); ?>

                         <?php else: ?> 
                          <a href="#" class="btn btn-primary btn-block ">APPLIED</a>
                          <?php endif; ?>
                                
                            <?php endif; ?>
                             
                            <?php if(auth()->guard()->guest()): ?>
                             <a href="<?php echo e(route('front.candidate.login')); ?>" class="btn btn-primary btn-block ">APPLY THIS JOB</a>
                               
                            <?php endif; ?>
                       
                    </div>

                  
                </div>
            </div>
        </div>
    </section>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.webLayout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/web/home/job-details.blade.php ENDPATH**/ ?>