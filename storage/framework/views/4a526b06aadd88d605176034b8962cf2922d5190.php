<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.employer_dashboard.dashboard')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/daterangepicker.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<section class="section">
    <div class="section-header">
        <h1><?php echo e(__('messages.candidate.dashboard')); ?></h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <div class="section-body">
        <div class="row mb-1">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1 shadow-success">
                    <div class="card-icon bg-success">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4><?php echo e(__('messages.employer_menu.total_jobs')); ?></h4>
                        </div>
                        <div class="card-body employer-dashboard-card">
                            <?php echo e(isset($totalJobs)?$totalJobs:'0'); ?>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1 shadow-primary">
                    <div class="card-icon bg-primary">
                        <i class="far fa-clock"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4><?php echo e(__('messages.employer_dashboard.open_jobs')); ?></h4>
                        </div>
                        <div class="card-body employer-dashboard-card">
                            <?php echo e(isset($jobCount)?$jobCount:'0'); ?>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1 shadow-warning">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-pause-circle"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4><?php echo e(__('messages.employer_menu.paused_jobs')); ?></h4>
                        </div>
                        <div class="card-body employer-dashboard-card">
                            <?php echo e(isset($pausedJobCount)?$pausedJobCount:'0'); ?>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1 shadow-danger">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-window-close"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4><?php echo e(__('messages.employer_menu.closed_jobs')); ?></h4>
                        </div>
                        <div class="card-body employer-dashboard-card">
                            <?php echo e(isset($closedJobCount)?$closedJobCount:'0'); ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1 shadow-info">
                    <div class="card-icon bg-info">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4><?php echo e(__('messages.employer_dashboard.followers')); ?></h4>
                        </div>
                        <div class="card-body employer-dashboard-card">
                            <?php echo e(isset($followersCount)?$followersCount:'0'); ?>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1 shadow-dark">
                    <div class="card-icon bg-dark">
                        <i class="fas fa-file"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4><?php echo e(__('messages.employer_menu.total_job_applications')); ?></h4>
                        </div>
                        <div class="card-body employer-dashboard-card">
                            <?php echo e(isset($jobApplicationsCount)?$jobApplicationsCount:'0'); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <h5><?php echo e(__('messages.job_applications')); ?></h5>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class="row justify-content-end">
                                <div class="col-lg-4 col-md-4 col-xl-3 col-sm-4 mt-3 mt-md-0 ">
                                    <div class="card-header-action w-100">
                                        <?php echo e(Form::select('jobs', $jobStatus, null, ['id' => 'jobStatus', 'class' => 'form-control status-filter w-100', 'placeholder' => 'Select Job'])); ?>

                                    </div>
                                </div>
                                <div class="col-lg-4  col-md-4 col-xl-3 col-sm-4 mt-3 mt-md-0">
                                    <div class="card-header-action w-100">
                                        <?php echo e(Form::select('gender', $gender, null, ['id' => 'gender', 'class' => 'form-control status-filter w-100', 'placeholder' => 'Select Gender'])); ?>

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xl-4 col-sm-4 mt-0">
                                    <div id="timeRange" class="time_range time_range_width w-100">
                                        <i class="far fa-calendar-alt" aria-hidden="true"></i>&nbsp;&nbsp;<span></span> <b class="caret"></b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="jobContainer" class="pt-2">
                        <canvas id="employerDashboardChart" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header flex-wrap">
                    <h4><?php echo e(__('messages.employer_menu.recent_jobs')); ?></h4>
                    <div class="card-header-action w-auto custom-flex-12 mt-0 text-right">
                        <a href="<?php echo e(route('job.index')); ?>" class="btn btn-info"><?php echo e(__('messages.common.view_more')); ?> <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="card-body p-0 mt-0">
                    <div class="table-responsive table-invoice table-bordered">
                        <table class="table table-striped mb-0">
                            <tbody>
                                <tr class="">
                                    <th><?php echo e(__('messages.job.job_title')); ?></th>
                                    <th><?php echo e(__('messages.employer_menu.expires_on')); ?></th>
                                    <th><?php echo e(__('messages.common.status')); ?></th>
                                </tr>
                                <?php if(count($recentJobs) > 0): ?>
                                <?php $__currentLoopData = $recentJobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recentJob): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <a href="<?php echo e(route('front.job.details',$recentJob->job_id)); ?>"><?php echo e(html_entity_decode($recentJob->job_title)); ?></a>
                                    </td>
                                    <td>
                                        <?php echo e(Carbon\Carbon::parse($recentJob->job_expiry_date)->format('jS M, Y')); ?>

                                    </td>
                                    <td class="text-center">
                                        <div class="badge w-auto badge-<?php echo e(\App\Models\Job::STATUS_COLOR[$recentJob->status]); ?>">
                                            <span class="px-3"><?php echo e(\App\Models\Job::STATUS[$recentJob->status]); ?></span>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                <tr>
                                    <td colspan="3" class="text-center">
                                        <span><?php echo e(__('messages.employer_menu.no_data_available')); ?>.</span>
                                    </td>
                                </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header flex-wrap">
                    <h4><?php echo e(__('messages.employer_menu.recent_follower')); ?></h4>
                    <div class="card-header-action w-auto custom-flex-12 mt-0 text-right">
                        <a href="<?php echo e(route('followers.index')); ?>" class="btn btn-info"><?php echo e(__('messages.common.view_more')); ?> <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="card-body p-0 mt-0">
                    <div class="table-responsive table-invoice table-bordered">
                        <table class="table table-striped mb-0">
                            <tbody>
                                <tr class="">
                                    <th><?php echo e(__('messages.company.candidate_name')); ?></th>
                                    <th><?php echo e(__('messages.company.candidate_phone')); ?></th>
                                    <th><?php echo e(__('messages.company.candidate_email')); ?></th>
                                </tr>
                                <?php if(count($recentFollowers) > 0): ?>
                                <?php $__currentLoopData = $recentFollowers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recentFollower): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <?php echo e(html_entity_decode($recentFollower->user->full_name)); ?>

                                    </td>
                                    <td>
                                        <?php echo e(empty($recentFollower->user->phone) ? __('messages.common.n/a') : $recentFollower->user->phone); ?>

                                    </td>
                                    <td>
                                        <?php echo e($recentFollower->user->email); ?>

                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                <tr>
                                    <td colspan="3" class="text-center">
                                        <span><?php echo e(__('messages.employer_menu.no_data_available')); ?>.</span>
                                    </td>
                                </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script>
    let jobsApplicationUrl = "<?php echo e(route('employer.dashboard.chart')); ?>";
    let jobdata = "<?php echo e(route('employer.job.data')); ?>";
    let userId = "<?php echo e(getLoggedInUserId()); ?>";
</script>
<script src="<?php echo e(asset('assets/js/chart.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/daterangepicker.js')); ?>"></script>
<script src="<?php echo e(mix('assets/js/employer/dashboard.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('employer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/employer/dashboard/index.blade.php ENDPATH**/ ?>