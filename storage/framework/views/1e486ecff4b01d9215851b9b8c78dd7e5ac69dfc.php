<div class="row mt-3">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body px-0 py-0">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a href="<?php echo e(route('candidate.profile',['section' => 'general'])); ?>"
                           class="nav-link <?php echo e((isset($data['sectionName']) && $data['sectionName'] == 'general') ? 'active' : ''); ?>">
                            <?php echo e(__('messages.profile')); ?>

                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('candidate.profile',['section' => 'resumes'])); ?>"
                           class="nav-link <?php echo e((isset($data['sectionName']) && $data['sectionName'] == 'resumes') ? 'active' : ''); ?>">
                            <?php echo e(__('messages.documents')); ?>

                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('candidate.profile',['section' => 'career_informations'])); ?>"
                           class="nav-link <?php echo e((isset($data['sectionName']) && $data['sectionName'] == 'career_informations') ? 'active' : ''); ?>">
                            <?php echo e(__('messages.financial')); ?>

                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('candidate.profile',['section' => 'cv_builder'])); ?>"
                           class="nav-link <?php echo e((isset($data['sectionName']) && $data['sectionName'] == 'cv_builder') ? 'active' : ''); ?>">
                            <?php echo e(__('messages.notifications')); ?>

                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <?php echo $__env->yieldContent('section'); ?>
    </div>
</div>

<?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/candidate/profile/profile_menu.blade.php ENDPATH**/ ?>