<div>
    <div class="section gray padding-bottom-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <?php if(count($followers) > 0 || $searchByFollowers != ''): ?>
                        <div class="row mb-2 justify-content-end">
                            <div class="col-md-3 mx-width">
                                <input wire:model.debounce.100ms="searchByFollowers" type="search"
                                       id="searchByFollowers"
                                       placeholder="<?php echo e(__('web.job_menu.search_followers')); ?>" class="form-control">
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if(count($followers) > 0): ?>
                        <div class="favorite-company-dashboard-box">
                            <div class="row  position-relative">
                                <?php $__currentLoopData = $followers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $follower): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-12 col-sm-6 col-md-6 col-xl-4 favorite-job-details">
                                        <div class="hover-effect-favorite-company position-relative <?php echo e($loop->odd ? 'blue-color' : 'black-color'); ?> mb-5">
                                            <div class="ribbon float-right <?php echo e(($follower->user->candidate->immediate_available == 1) ? 'ribbon-primary' : 'ribbon-danger'); ?> favorite-companies-ribbon">
                                                <?php echo e(($follower->user->candidate->immediate_available == 1) ? __('messages.candidate.immediate_available') : __('messages.candidate.not_immediate_available')); ?>

                                            </div>
                                            <div class="job-listing-details nopadding">
                                                <div class="d-flex job-listing-description position-relative">
                                                    <div class="pl-0 mb-auto float-left follower-avatar">
                                                        <img src="<?php echo e($follower->user->avatar); ?>"
                                                             class="img-responsive favorite-company-image mr-2">
                                                    </div>
                                                    <div class="mb-auto w-100 favorite-company-data followers-data">
                                                        <h4 class="job-listing-favorite-company d-inline-flex mb-2">
                                                            <a href="<?php echo e(route('front.candidate.details', $follower->user->candidate->unique_id)); ?>"
                                                               class="text-decoration-none" target="_blank">
                                                                <?php echo e((!empty($follower->user->first_name)) ? html_entity_decode($follower->user->full_name) : __('messages.common.n/a')); ?>

                                                            </a>
                                                        </h4>
                                                        <h3 class="job-listing-title-favorite-company margin-bottom-5">
                                                            <i class="fas fa-phone-alt"></i>
                                                            <?php if(!empty($follower->user->phone)): ?>
                                                                <?php if(!empty( $follower->user->region_code.$follower->user->phone)): ?>
                                                                    <?php echo e('+'.$follower->user->region_code.' '.$follower->user->phone); ?>

                                                                <?php endif; ?>
                                                            <?php else: ?>
                                                                <?php echo e(__('messages.common.n/a')); ?>

                                                            <?php endif; ?>
                                                        </h3>
                                                        <h3 class="job-listing-title-favorite-company followers-margin job-listing-follower">
                                                            <i class="fas fa-envelope">&nbsp;&nbsp;</i>
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                  title="<?php echo e($follower->user->email); ?>">
                                            <?php echo e((!empty($follower->user->email)) ? Str::limit($follower->user->email,19,'...') : __('messages.common.n/a')); ?></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="float-right my-2">
                                <?php if($followers->count() > 0): ?>
                                    <?php echo e($followers->links()); ?>

                                <?php endif; ?>
                            </div>
                        </div>
                        <?php else: ?>
                            <div class="col-lg-12 col-md-12 d-flex justify-content-center">
                                <h5>
                                    <?php if($searchByFollowers): ?>
                                        <?php echo e(__('messages.job.no_followers_found')); ?>

                                    <?php else: ?>
                                        <?php echo e(__('messages.job.no_followers_available')); ?>

                                    <?php endif; ?>
                                </h5>
                            </div>
                        <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/livewire/followers.blade.php ENDPATH**/ ?>