<div>
    <div class="section gray padding-bottom-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <?php if(session()->has('message')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('message')); ?>

                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-lg-12 col-md-12">
                    <?php if(count($favouriteJobs) > 0 || $searchByJob != '' || $filterFavouriteJobs != ''): ?>
                        <div class="row mb-2 justify-content-end">
                            <div class="col-md-3">
                                <?php echo e(Form::select('favourite-jobs', $jobStatus, null, ['class' => 'form-control ','id'=>'favouriteJobsId','placeholder' => 'All', 'wire:model' => "filterFavouriteJobs"])); ?>

                            </div>
                            <div class="col-md-3">
                                <input wire:model.debounce.100ms="searchByJob" type="search" id="searchByJob"
                                       placeholder="<?php echo e(__('web.job_menu.search_job')); ?>" class="form-control">
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if(count($favouriteJobs) > 0): ?>
                        <div class="dashboard-box-favoutite-job margin-top-0">
                            <div class="content1 with-padding">
                                <?php $__currentLoopData = $favouriteJobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $favouriteJob): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="row hover-effect position-relative">
                                        <div class="ribbon float-right favorite-job-ribbon ribbon-<?php echo e(\App\Models\Job::STATUS_COLOR[$favouriteJob->job->status]); ?>">
                                            <?php echo e(\App\Models\Job::STATUS[$favouriteJob->job->status]); ?>

                                        </div>
                                        <div class="col-12 d-flex favorite-job-details my-4">
                                            <div class="job-listing">
                                                <div class="job-listing-details">
                                                    <div class="job-listing-description">
                                                        <h4 class="job-listing-company d-inline-flex">
                                                            <?php echo e(html_entity_decode($favouriteJob->job->company->user->first_name)); ?>

                                                        </h4>
                                                        <h3 class="job-listing-title margin-bottom-5">
                                                            <a href="<?php echo e(route('front.job.details',$favouriteJob->job->job_id)); ?>"
                                                               target="_blank"><?php echo e($favouriteJob->job->job_title); ?></a>
                                                        </h3>
                                                        <div class="job-listing-footer">
                                                            <ul>
                                                                <?php if(!empty($favouriteJob->job->full_location)): ?>
                                                                    <li>
                                                                        <i class="fas fa-map-marker-alt"></i><?php echo e($favouriteJob->job->full_location); ?>

                                                                    </li>
                                                                <?php endif; ?>
                                                                <li>
                                                                    <i class="far fa-clock"></i> <?php echo e(__('web.job_details.date_posted')); ?>

                                                                    : <?php echo e(($favouriteJob->job->created_at)->diffForhumans()); ?>

                                                                </li>
                                                                <?php if($favouriteJob->job->job_expiry_date < Carbon\Carbon::now()): ?>
                                                                    <li>
                                                                        <i class="far fa-calendar-times text-danger"></i>
                                                                        <?php echo e(__('messages.job.expires_on')); ?>

                                                                        : <?php echo e(($favouriteJob->job->job_expiry_date)->format('d M, Y')); ?>

                                                                    </li>
                                                                <?php else: ?>
                                                                    <li><i class="far fa-calendar-times"></i>
                                                                        <?php echo e(__('messages.job.expires_on')); ?>

                                                                        : <?php echo e(($favouriteJob->job->job_expiry_date)->format('d M, Y')); ?>

                                                                    </li>
                                                                <?php endif; ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="heart-size removeJob" data-id="<?php echo e($favouriteJob->id); ?>"><i
                                                        class="fas fa-heart" data-toggle="tooltip"
                                                        title="<?php echo e(__('messages.job.remove_favourite_jobs')); ?>"></i></span>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <div class="float-right my-5">
                                    <?php if($favouriteJobs->count() > 0): ?>
                                        <?php echo e($favouriteJobs->links()); ?>

                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php else: ?>
                            <?php if($searchByJob == null || empty($searchByJob)): ?>
                                <div class="col-lg-12 col-md-12 d-flex justify-content-center mt-4">
                                    <h5><?php echo e(__('messages.job.no_favourite_job_found')); ?> </h5>
                                </div>
                            <?php else: ?>
                                <div class="col-lg-12 col-md-12 d-flex justify-content-center mt-4">
                                    <h5><?php echo e(__('messages.job.favourite_job_not_found')); ?> </h5>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/livewire/favorite-jobs.blade.php ENDPATH**/ ?>