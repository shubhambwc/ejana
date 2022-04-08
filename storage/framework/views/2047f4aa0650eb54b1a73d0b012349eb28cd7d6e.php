<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.candidate.dashboard')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/candidate-dashboard.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-header">
            <h1><?php echo e(__('messages.candidate.dashboard')); ?></h1>
        </div>
         <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="section-body">
            <div class="tickets dashboard">
                <div class="ticket-content w-100">
                    <div class="row mx-1">
                        <div class="ticket-sender-picture  user-profile col-md-2 col-xl-2 col-sm-12 p-0">
                            <img class="profile-image"
                                 src="<?php echo e(getCompanyLogo()); ?>"
                                 alt="company logo">
                        </div>
                        <div class="ticket-detail col-md-6 col-xl-7 col-sm-12 ">
                            <div class="ticket-title">
                                <h2 class="text-primary"></h2>
                            </div>
                            <div class="ticket-info">
                                <h6 class="location"><i
                                            class="fa fa-map-marker"></i>&nbsp;<?php echo e(!empty($candidate->city_name) ?  $candidate->city_name. ', '. $candidate->state_name . ', ' . $candidate->country_name : (!empty($candidate->country_id) ? $candidate->country_name : __('messages.candidate_dashboard.location_information'))); ?>

                                </h6>
                            </div>
                            <div class="font-weight-600 cell-phone">
                                <p class="mb-0 text-warning"><i
                                            class="fa fa-phone"></i>&nbsp;<?php echo e(!empty($user->phone) ?  $user->phone : __('messages.candidate_dashboard.no_not_available')); ?>

                                </p>
                                <p class="text-red"><i class="fa fa-envelope"></i>&nbsp;<?php echo e($user->email); ?></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3 col-sm-12 pr-md-0">
                            <a href="<?php echo e(route('candidate.profile')); ?>"
                               class="btn btn-outline-primary float-md-right">
                                <?php echo e(__('messages.user.edit_ac')); ?>

                            </a>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="pricing">
                        <div class="pricing-padding">
                            <h3><i class="fa fa-eye"></i></h3>
                            <div class="pricing-price">
                                <div><?php echo e($user->profile_views); ?></div>
                                <div><?php echo e(__('messages.candidate_dashboard.profile_views')); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="pricing pricing-highlight-candidate">
                        <div class="pricing-padding">
                            <h3><i class="fa fa-users"></i></h3>
                            <div class="pricing-price">
                                <div><?php echo e($followings); ?></div>
                                <div><?php echo e(__('messages.candidate_dashboard.followings')); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="pricing">
                        <div class="pricing-padding">
                            <h3><i class="fa fa-briefcase"></i></h3>
                            <div class="pricing-price">
                                <div><?php echo e($resumes); ?></div>
                                <div><?php echo e(__('messages.apply_job.resume')); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('candidate.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/candidate/dashboard/dashboard.blade.php ENDPATH**/ ?>