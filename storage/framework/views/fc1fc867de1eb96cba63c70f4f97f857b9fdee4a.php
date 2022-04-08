
<?php $__env->startSection('title'); ?>
    <?php echo e(html_entity_decode($data->user->first_name)); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- ===== Start of Candidate Profile Header Section ===== -->
    <section class="profile-header">
    </section>
    <!-- ===== End of Candidate Header Section ===== -->


    <section class="pb80 bg-gray" id="company-profile">
        <div class="container">
            <div class="row company-profile">
                <div class="col-md-3 col-xs-12">
                    <div class="profile-photo company-detail-logo ticket-sender-picture">
                        <img src="<?php echo e((!empty($companyDetail->company_url)) ? $companyDetail->company_url : asset('assets/img/logo-dark.png')); ?>"
                             class="img-responsive" alt="">
                    </div>
                    
                    <ul class="social-btns list-inline text-center mt20">
                        <?php if(isset($companyDetail->user->facebook_url)): ?>
                            <li>
                                <a href="<?php echo e((isset($companyDetail->user->facebook_url)) ? $companyDetail->user->facebook_url : 'javascript:void(0)'); ?>"
                                   class="social-btn-roll facebook transparent" target="_blank">
                                    <div class="social-btn-roll-icons">
                                        <i class="social-btn-roll-icon fa fa-facebook"></i>
                                        <i class="social-btn-roll-icon fa fa-facebook"></i>
                                    </div>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if(isset($companyDetail->user->twitter_url)): ?>
                            <li>
                                <a href="<?php echo e((isset($companyDetail->user->twitter_url)) ? $companyDetail->user->twitter_url : 'javascript:void(0)'); ?>"
                                   class="social-btn-roll twitter transparent" target="_blank">
                                    <div class="social-btn-roll-icons">
                                        <i class="social-btn-roll-icon fa fa-twitter"></i>
                                        <i class="social-btn-roll-icon fa fa-twitter"></i>
                                    </div>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if(isset($companyDetail->user->google_plus_url)): ?>
                            <li>
                                <a href="<?php echo e((isset($companyDetail->user->google_plus_url)) ? $companyDetail->user->google_plus_url : 'javascript:void(0)'); ?>"
                                   class="social-btn-roll google-plus transparent" target="_blank">
                                    <div class="social-btn-roll-icons">
                                        <i class="social-btn-roll-icon fa fa-google-plus"></i>
                                        <i class="social-btn-roll-icon fa fa-google-plus"></i>
                                    </div>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if(isset($companyDetail->user->pinterest_url)): ?>
                            <li>
                                <a href="<?php echo e((isset($companyDetail->user->pinterest_url)) ? $companyDetail->user->pinterest_url : 'javascript:void(0)'); ?>"
                                   class="social-btn-roll pinterest transparent" target="_blank">
                                    <div class="social-btn-roll-icons">
                                        <i class="social-btn-roll-icon fa fa-pinterest"></i>
                                        <i class="social-btn-roll-icon fa fa-pinterest"></i>
                                    </div>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if(isset($companyDetail->user->linkedin_url)): ?>
                            <li>
                                <a href="<?php echo e((isset($companyDetail->user->linkedin_url)) ? $companyDetail->user->linkedin_url : 'javascript:void(0)'); ?>"
                                   class="social-btn-roll linkedin transparent" target="_blank">
                                    <div class="social-btn-roll-icons">
                                        <i class="social-btn-roll-icon fa fa-linkedin"></i>
                                        <i class="social-btn-roll-icon fa fa-linkedin"></i>
                                    </div>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>

                <div class="col-md-9 col-xs-12">
                    <div class="profile-descr">
                        <div class="profile-title" style="width: 70%; float: left;">
                            <h2 class="capitalize"><?php echo e(html_entity_decode($companyDetail->user->full_name)); ?></h2>
                            <h5 class="pt10"><?php echo e($companyDetail->user->email); ?></h5>
                        </div>
                        <div class="profile-title" style="width: 30%; float: left; text-align: center;"><a href="#" class="btn btn-primary mb-5" style="background: #1cd3c1;
    border: 1px solid #1cd3c1;">Apply</a></div>
                        <div class="profile-details mt20">
                            <p><?php echo nl2br($companyDetail->details); ?></p>
                        </div>
                        <ul class="profile-info mt20 nopadding">

                            <?php if(!empty(@$postMetaArray['address'])): ?>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <span>
                                            <?php echo e((!empty(@$postMetaArray['address'])) ? @$postMetaArray['address'].', ' : ''); ?>

                                        <?php echo e((!empty(@$postMetaArray['zip_code'])) ? @$postMetaArray['zip_code'].', ' : ''); ?>

                                       
                                        </span>
                                </li>
                            <?php endif; ?>
                            <?php if(isset($companyDetail->website)): ?>
                                <li>
                                    <i class="fa fa-globe"></i>
                                    <a href="<?php echo e((isset($companyDetail->website)) ?  
                                                    (!str_contains($companyDetail->website,'https://') 
                                                    ? 'https://'.$companyDetail->website
                                                    : $companyDetail->website) 
                                                : 'javascript:void(0)'); ?>">
                                        <?php echo e((isset($companyDetail->website)) ? preg_replace("(^https?://www.)", "", $companyDetail->website) : 'N/A'); ?>

                                    </a>
                                </li>
                            <?php endif; ?>
                             
                        </ul>
                        <ul class="profile-info mt20 nopadding">
                            <?php if(!empty(@$postMetaArray['date_childcare_need'])): ?>
                                <li style="width: 290px;">
                                    <i class="fa fa-calendar"></i>
                                    <span><strong>Need Child Care on :</strong> <?php echo e(@$postMetaArray['date_childcare_need']); ?></span>
                                </li>
                             <?php endif; ?>
                              <?php if(!empty(@$postMetaArray['type_of_care'])): ?>
                                <li style="width: 290px;">
                                    <i class="fa fa-address-card-o  
"></i>
                                    <span><strong>Type of Care :</strong> <?php echo e(@$postMetaArray['type_of_care']); ?></span>
                                </li>
                             <?php endif; ?>
                        </ul>
                         <ul class="profile-info mt20 nopadding">
                            <?php if(!empty(@$postMetaArray['minimum_exp'])): ?>
                                <li style="width: 290px;">
                                    <i class="fa fa-graduation-cap"></i>
                                    <span><strong>Experience Req. :</strong> <?php echo e(@$postMetaArray['minimum_exp']); ?> - <?php echo e(@$postMetaArray['maximum_exp']); ?> Years</span>
                                </li>
                             <?php endif; ?>
                              <?php if(!empty(@$postMetaArray['minimum_age'])): ?>
                                <li style="width: 290px;">
                                    <i class="fa fa-child"></i> 

                                    <span><strong>Age Req. :</strong> <?php echo e(@$postMetaArray['minimum_age']); ?> - <?php echo e(@$postMetaArray['maximum_age']); ?> Years</span>
                                </li>
                             <?php endif; ?>

                        </ul>
                        <ul class="profile-info mt20 nopadding">
                             <?php if(!empty(@$postMetaArray['other_wish'])): ?>
                                <li style="width: 290px;">
                                    <i class="fa fa-info"></i>   

                                    <span><strong>Other Wish :</strong> <?php echo e(@$postMetaArray['other_wish']); ?> </span>
                                </li>
                             <?php endif; ?>
                             <?php if(!empty(@$postMetaArray['remarks'])): ?>
                                <li style="width: 290px;">
                                    <i class="fa fa-info-circle"></i>   

                                    <span><strong>Remarks :</strong> <?php echo e(@$postMetaArray['remarks']); ?> </span>
                                </li>
                             <?php endif; ?>
                        </ul>
                          <ul class="profile-info mt20 nopadding">
                             <?php if(!empty(@$postMetaArray['advertisement'])): ?>
                                <li style="width: 290px;">
                                    <i class="fa fa-audio-description   
"></i>   

                                    <span><strong>Advertisement :</strong> <?php echo e(@$postMetaArray['advertisement']); ?> </span>
                                </li>
                             <?php endif; ?>
                             <?php if(!empty(@$postMetaArray['advertisement_text'])): ?>
                                <li style="width: 290px;">
                                    <i class="fa fa-audio-description   
"></i>   

                                    <span><strong>Advertisement Text :</strong> <?php echo e(@$postMetaArray['advertisement_text']); ?> </span>
                                </li>
                             <?php endif; ?>
                        </ul>
                        <?php if(auth()->guard()->check()): ?>
                            <?php if(auth()->check() && auth()->user()->hasRole('Candidate')): ?>
                            <div class="row mt20">
                                <div class="col-md-4">
                                    <div class="company-add-favourite company-web clearfix">
                                        <a href="javascript:void(0)"
                                           class="btn btn-small btn-orange btn-effect"
                                           data-favorite-user-id="<?php echo e((getLoggedInUserId() !== null) ? getLoggedInUserId() : null); ?>"
                                           data-favorite-company_id="<?php echo e($companyDetail->id); ?>" id="addToFavourite">
                                            <div class="company-follow-text">
                                                <i class="fa fa-star"></i>
                                                <span class="favouriteText"></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 reportJobBtn">
                                    <div class="company-report-web company-web clearfix">
                                        <button class="btn btn-small btn-red btn-effect reportToCompany <?php echo e(($isReportedToCompany) ? 'disabled' : ''); ?>"
                                                data-toggle="modal"
                                                data-target="#reportToCompanyModal"><?php echo e(__('messages.company.report_to_company')); ?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt10 pb80 bg-gray" id="job-post">
        <div class="container">
            <div class="row mb30">
                <div class="col-md-12 text-center">
                    <h3 class="pb5">
                        <?php echo e(($jobDetails->count() > 0 ) ? __('web.company_details.our_latest_jobs')  : __('web.home_menu.latest_job_not_available')); ?>

                    </h3>
                </div>
            </div>
            <!-- Start of Job Post Main -->
            <div class="row nomargin job-post-wrapper mt10">
                <?php $__currentLoopData = $jobDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make('web.common.job_card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!-- End of Job Post Main -->
            <?php if(($jobDetails->count() > 0 )): ?>
                <div class="row mt30">
                    <div class="col-md-12 text-center">
                        <a href="<?php echo e(route('front.search.jobs',array('company'=> $companyDetail->id))); ?>"
                           class="btn btn-purple btn-effect"><?php echo e(__('web.common.show_all')); ?></a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <?php if(auth()->guard()->check()): ?>
        <?php if(auth()->check() && auth()->user()->hasRole('Candidate')): ?>
        <?php echo $__env->make('web.company.report_to_company_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
        let addCompanyFavouriteUrl = "<?php echo e(route('save.favourite.company')); ?>";
        let isCompanyAddedToFavourite = "<?php echo e($isCompanyAddedToFavourite); ?>";
        let reportToCompanyUrl = "<?php echo e(route('report.to.company')); ?>";
        let followText = "<?php echo e(__('web.company_details.follow')); ?>";
        let unfollowText = "<?php echo e(__('web.company_details.unfollow')); ?>";

    </script>
    <script src="<?php echo e(mix('assets/js/custom/input_price_format.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/select2.min.js')); ?>"></script>
    <script src="<?php echo e(mix('assets/js/companies/front/company-details.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/web/company/company_details.blade.php ENDPATH**/ ?>