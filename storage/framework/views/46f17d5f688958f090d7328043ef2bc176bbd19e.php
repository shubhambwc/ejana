<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.dashboard')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(mix('assets/css/dashboard-widgets.css')); ?>" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/daterangepicker.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-header">
            <h1><?php echo e(__('messages.dashboard')); ?></h1>
        </div>
        <!-- statistics count starts -->
        
        <style>
        .card.card-statistic-1, .card.card-statistic-2 {
    		min-height: 160px;
    		padding:15px;
		}
		a.align_bottom{
		margin-top: 30px;
		float: left;	
		text-decoration:underline;
		}
		a.simple_link{
		margin:5px 0px 0px 0px;
		text-decoration:underline;
		color:#6c757d;
		}
		
		.custom_row .card.card-statistic-1 .card-icon {
    line-height: 90px;
    float: left;
    width: 24%;
    margin: 0px;
}

.custom_row  .card-wrap {
    float: right;
    width: 72%;
}
        </style>
        <div class="row custom_row">
            
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card card-statistic-1">
              		 <div class="card-icon total-users-bg">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="row">
             		  <div class="col-lg-8 col-md-9 col-sm-12 col-12"><b><?php echo e(__('messages.customers')); ?></b></div>
             		  <div class="col-lg-4 col-md-3 col-sm-12 col-12"><b><?php echo e(__('messages.total')); ?></b></div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><?php echo e(__('messages.helpers')); ?></div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12"><?php echo e($data['dashboardData']['totalCandidates']); ?></div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><?php echo e(__('messages.help_requester')); ?></div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12"><?php echo e($data['dashboardData']['totalEmployers']); ?></div>
               		</div>
               		</div>
               		
               </div> 
            </div>
            
            
            
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card card-statistic-1" >
              		 <div class="card-icon feature-employers-bg">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><b><?php echo e(__('messages.registrations')); ?></b></div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12"><b><?php echo e(__('messages.total')); ?></b></div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><a class="simple_link" href=""><?php echo e(__('messages.new_registrations')); ?></a></div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12"><?php echo e($data['totalRegistration']); ?></div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><a class="simple_link" href=""><?php echo e(__('messages.in_treatment')); ?></a></div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12"><?php echo e($data['inTreatment']); ?></div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><a class="simple_link" href=""><?php echo e(__('messages.approved')); ?></a></div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12"><?php echo e($data['approvedRegCount']); ?></div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><a class="simple_link" href=""><?php echo e(__('messages.rejected')); ?></a></div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12"><?php echo e($data['rejectedRegCount']); ?></div>
               		</div>
               	</div>
               		
               </div> 
            </div>
            
            
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card card-statistic-1" >
              		 <div class="card-icon subscription-incomes-bg">
                        <i class="fas fa-money-bill"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><b><?php echo e(__('messages.active_membership')); ?></b></div>
             		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><?php echo e(__('messages.helpers')); ?></div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12"><?php echo e($data['activeMemberShipHelpers']); ?></div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><?php echo e(__('messages.help_requester')); ?></div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12"><?php echo e($data['activeMemberShipHelpRequestor']); ?></div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><b><?php echo e(__('messages.non_active_membership')); ?></b></div>
             		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><?php echo e(__('messages.helpers')); ?></div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12"><?php echo e($data['nonactiveMemberShipHelpers']); ?></div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><?php echo e(__('messages.help_requester')); ?></div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12"><?php echo e($data['nonactiveMemberShipHelpRequestor']); ?></div>
               		</div>
               		</div>
               		
               		
               </div> 
            </div>
            
            
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card card-statistic-1" >
              		 <div class="card-icon feature-jobs-incomes-bg">
                         <i class="fas fa-money-check-alt"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><b><?php echo e(__('messages.finiancial_membership')); ?></b></div>
             		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><?php echo e(__('messages.open')); ?></div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12"><?php echo e($data['finMemOpen']); ?></div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><?php echo e(__('messages.running')); ?></div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12"><?php echo e($data['finMemRunning']); ?></div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-12 col-md-12 col-sm-12 col-12"><a class="align_bottom" href=""><?php echo e(__('messages.view_detail_overview')); ?></a></div>
             		</div>
               		
               		</div>
               		
               </div> 
            </div>
            
            
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card card-statistic-1" >
              		 <div class="card-icon feature-employers-incomes-bg">
                         <i class="fas fa-money-check-alt"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><b><?php echo e(__('messages.finiancial_booking')); ?></b></div>
             		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><?php echo e(__('messages.open')); ?></div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12"><?php echo e($data['finBookOpen']); ?></div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><?php echo e(__('messages.running')); ?></div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12"><?php echo e($data['finBookRunning']); ?></div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-12 col-md-12 col-sm-12 col-12"><a class="align_bottom" href=""><?php echo e(__('messages.view_detail_overview')); ?></a></div>
             		</div>
             		</div>
               		
               </div> 
            </div>
            
            
             <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card card-statistic-1" >
              		 <div class="card-icon today-jobs-bg">
                        <i class="fas fa-list-alt"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><b><?php echo e(__('messages.reporting')); ?></b></div>
             		</div>
               		
               		<div class="row">
             		  <div class="col-lg-7 col-md-9 col-sm-12 col-12"><a class="simple_link" href=""> <?php echo e(__('messages.turnover')); ?> <?php echo e(__('messages.day')); ?></a></div>
             		  <div class="col-lg-5 col-md-3 col-sm-12 col-12"><a class="simple_link" href=""><?php echo e(__('messages.loss')); ?> <?php echo e(__('messages.day')); ?></a></div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-7 col-md-9 col-sm-12 col-12"><a class="simple_link" href=""><?php echo e(__('messages.turnover')); ?> <?php echo e(__('messages.week')); ?></a></div>
             		  <div class="col-lg-5 col-md-3 col-sm-12 col-12"><a class="simple_link" href=""><?php echo e(__('messages.loss')); ?> <?php echo e(__('messages.week')); ?></a></div>
               		</div>
               		<div class="row">
             		  <div class="col-lg-7 col-md-9 col-sm-12 col-12"><a class="simple_link" href=""><?php echo e(__('messages.turnover')); ?> <?php echo e(__('messages.month')); ?></a></div>
             		  <div class="col-lg-5 col-md-3 col-sm-12 col-12"><a class="simple_link" href=""><?php echo e(__('messages.loss')); ?> <?php echo e(__('messages.month')); ?></a></div>
               		</div>
               		<div class="row">
             		  <div class="col-lg-7 col-md-9 col-sm-12 col-12"><a class="simple_link" href=""><?php echo e(__('messages.turnover')); ?> <?php echo e(__('messages.year')); ?></a></div>
             		  <div class="col-lg-5 col-md-3 col-sm-12 col-12"><a class="simple_link" href=""><?php echo e(__('messages.loss')); ?> <?php echo e(__('messages.year')); ?></a></div>
               		</div>
               		</div>
               		
               </div> 
            </div>
            
            
            
            
            
        </div>
        
        
        <div class="row">
        
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card card-statistic-1">
              		 <div class="card-icon total-users-bg">
                        <i class="fas fa-list-alt"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="row">
             		  <div class="col-lg-8 col-md-9 col-sm-12 col-12"><b><?php echo e(__('messages.ads')); ?>:</b></div>
             		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><?php echo e(__('messages.helpers')); ?></div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12"><?php echo e($data['adsHelpers']); ?></div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><?php echo e(__('messages.help_requester')); ?></div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12"><?php echo e($data['adsHelpRequestor']); ?></div>
               		</div>
               		</div>
               		
               </div> 
            </div>
         
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card card-statistic-1">
              		 <div class="card-icon total-users-bg">
                        <i class="fas fa-list-alt"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="row">
             		  <div class="col-lg-8 col-md-9 col-sm-12 col-12"><b><?php echo e(__('messages.agreements')); ?>:</b></div>
             		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><?php echo e(__('messages.helpers')); ?></div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12"><?php echo e($data['agreeHelpers']); ?></div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><?php echo e(__('messages.help_requester')); ?></div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12"><?php echo e($data['agreeHelpRequestor']); ?></div>
               		</div>
               		</div>
               		
               </div> 
            </div>
            
             <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card card-statistic-1">
              		 <div class="card-icon total-users-bg">
                        <i class="fas fa-list-alt"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="row">
             		  <div class="col-lg-8 col-md-9 col-sm-12 col-12"><b><?php echo e(__('messages.chats')); ?>:</b></div>
             		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><?php echo e(__('messages.helpers')); ?></div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12"><?php echo e($data['chatHelpers']); ?></div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><?php echo e(__('messages.help_requester')); ?></div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12"><?php echo e($data['chatHelpRequestor']); ?></div>
               		</div>
               		</div>
               		
               </div> 
            </div>
                
        </div>
        
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
   
    <script src="<?php echo e(asset('assets/js/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/daterangepicker.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/dashboard/admin-dashboard.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<!-- http://ejana.com/assets/js/dashboard/admin-dashboard.js -->
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/dashboard/index.blade.php ENDPATH**/ ?>