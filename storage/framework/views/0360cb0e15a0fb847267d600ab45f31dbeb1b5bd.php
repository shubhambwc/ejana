
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.employer_menu.manage_subscriptions')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-body">
            <div class="card-body">
                <div class="row justify-content-around d-flex mt-xl-0 mt-5">
                    <div class="col-md-12">
                        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="pricing <?php echo e(isset($subscription) && $subscription->plan_id == $plan->id && $subscription->stripe_status == 'trialing' ? 'pricing-highlight pricing-margin-bottom' : ''); ?> <?php echo e(isset($subscription) && $subscription->plan_id == $plan->id ? 'pricing-highlight' : ''); ?>">
                                <div class="pricing-title">
                                    <?php echo e(html_entity_decode($plan->name)); ?>

                                </div>
                                <div class="pricing-padding h-317">
                                    <div class="pricing-price">
                                        <div><?php echo e(empty($plan->salaryCurrency->currency_icon)?'$':$plan->salaryCurrency->currency_icon); ?><?php echo e($plan->amount); ?></div>
                                        <div><?php echo e(__('messages.plan.per_month')); ?></div>
                                    </div>
                                    <div class="pricing-details">
                                        <div class="pricing-item">
                                            <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                            <div class="pricing-item-label"><?php echo e($plan->allowed_jobs.' '.($plan->allowed_jobs > 1 ? __('messages.plan.jobs_allowed') : __('messages.plan.job_allowed'))); ?></div>
                                        </div>
                                        <div class="pricing-item">
                                            <?php if($plan->is_trial_plan): ?>
                                                <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                            <?php else: ?>
                                                <div class="pricing-item-icon bg-danger text-white"><i
                                                            class="fas fa-times"></i></div>
                                            <?php endif; ?>
                                            <div class="pricing-item-label"><?php echo e(__('messages.plan.is_trial_plan')); ?></div>
                                        </div>
                                        <?php if(isset($subscription) && $subscription->plan_id == $plan->id): ?>
                                            <div class="pricing-item">
                                                <div class="pricing-item-icon"><i class="fas fa-briefcase"></i></div>
                                                <div class="pricing-item-label"><?php echo e($jobsCount.' '.($jobsCount > 1 ? __('messages.plan.jobs_used') : __('messages.plan.job_used'))); ?></div>
                                            </div>
                                            <?php if($subscription->stripe_status != 'trialing'): ?>
                                                <?php if(isset($subscription->ends_at)): ?>
                                                    <div class="pricing-item">
                                                        <div class="pricing-item-icon"><i class="fas fa-clock"></i>
                                                        </div>
                                                        <div class="pricing-item-label"><?php echo e(__('messages.plan.ends_at').': '.\Carbon\Carbon::parse($subscription->ends_at)->format('jS M,Y')); ?></div>
                                                    </div>
                                                <?php else: ?>
                                                    <div class="pricing-item">
                                                        <div class="pricing-item-icon"><i class="fas fa-clock"></i>
                                                        </div>
                                                        <div class="pricing-item-label"><?php echo e(__('messages.plan.renews_on').': '.\Carbon\Carbon::parse($subscription->current_period_end)->format('jS M,Y')); ?></div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="pricing-cta">
                                    <?php if(isset($subscription) && $subscription->plan_id == $plan->id): ?>
                                        <a href="javascript:void(0)"><?php echo e(__('messages.plan.current_plan')); ?> </a>
                                        <?php if($subscription->stripe_status != 'trialing'): ?>
                                            <?php if(isset($subscription->ends_at)): ?>
                                                <a href="javascript:void(0)"
                                                   class="subscription"><?php echo e(__('messages.plan.subscription_cancelled')); ?></a>
                                            <?php else: ?>
                                                <a href="javascript:void(0)"
                                                   class="cancel-subscription"><?php echo e(__('messages.plan.cancel_subscription')); ?></a>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <?php if($plan->is_trial_plan): ?>
                                            <a href="javascript:void(0)" data-id="<?php echo e($plan->id); ?>"
                                               class="subscribe-trial"><?php echo e(__('messages.plan.purchase')); ?> </a>
                                        <?php else: ?>
                                            <a href="<?php echo e(route('payment-method-screen', $plan->id)); ?>"
                                               data-id="<?php echo e($plan->id); ?>"
                                               class="">
                                                <?php if($activePlanId != $plan->id): ?>
                                                    <?php echo e(__('messages.plan.purchase')); ?>

                                                <?php else: ?>
                                                    <?php echo e(__('messages.plan.upgrade')); ?>

                                                <?php endif; ?>
                                            </a>
                                        <?php endif; ?>


                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php echo $__env->make('pricing.cancel_subscription_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        let stripe = Stripe('<?php echo e(config('services.stripe.key')); ?>');
        let subscribeText = "<?php echo e(__('messages.plan.purchase')); ?>";
        let cancelSubscriptionUrl = "<?php echo e(route('cancel-subscription')); ?>";
        let purchaseTriaalSubscriptionUrl = "<?php echo e(route('purchase-trial-subscription')); ?>";
    </script>
    <script src="<?php echo e(mix('assets/js/subscription/subscription.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('employer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/pricing/index.blade.php ENDPATH**/ ?>