<aside id="sidebar-wrapper">
    <div class="sidebar-brand admin-sidebar-brand">
        <a href="<?php echo e(url('/')); ?>">
            <img src="<?php echo e(getLogoUrl()); ?>" width="100px" class="navbar-brand-full"/>
        </a>
        <div class="input-group px-3">
            <input type="text" class="form-control searchTerm" id="searchText" placeholder="Search Menu"
                   autocomplete="off">
            <div class="input-group-append">
                <div class="input-group-text">
                    <i class="fas fa-search search-sign"></i>
                    <i class="fas fa-times close-sign"></i>
                </div>
            </div>
            <div class="no-results mt-3 ml-1">No matching records found</div>
        </div>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="<?php echo e(url('/')); ?>" class="small-sidebar-text">
            <img class="navbar-brand-full" src="<?php echo e(getLogoUrl()); ?>" alt="<?php echo e(config('app.name')); ?>"/>
        </a>
    </div>
    <ul class="sidebar-menu mt-3">
       <ul class="sidebar-menu ">
            <li class="side-menus <?php echo e(Request::is('admin/dashboard*') ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa fa-digital-tachograph"></i>
                    <span><?php echo e(__('messages.dashboard')); ?></span></a></li>
      </ul>


      <ul class="sidebar-menu mt-3">
       <ul class="sidebar-menu ">
            <li class="side-menus <?php echo e(Request::is('admin/help-requester*') ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(route('company.index')); ?>"><i class="fas fa-user-tie"></i>
                    <span><?php echo e(__('messages.help_requester')); ?></span></a></li>
      </ul>

      <ul class="sidebar-menu mt-3">
       <ul class="sidebar-menu ">
            <li class="side-menus <?php echo e(Request::is('admin/helper*') ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(route('candidates.index')); ?>"><i class="fas fa-users"></i>
                    <span><?php echo e(__('messages.helpers')); ?></span></a></li>
      </ul>

      <ul class="sidebar-menu mt-3">
       <ul class="sidebar-menu ">
            <li class="side-menus <?php echo e(Request::is('admin/services*') ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(route('job-categories.index')); ?>"><i class="fas fa-sitemap"></i>
                    <span><?php echo e(__('messages.services')); ?></span></a></li>
      </ul>

     <!--  <ul class="sidebar-menu mt-3">
       <ul class="sidebar-menu ">
            <li class="side-menus <?php echo e(Request::is('admin/services*') ? 'active' : ''); ?>">
                <a class="nav-link" href="#"><i class="fas fa-money-bill"></i>
                    <span><?php echo e(__('messages.financial')); ?></span></a></li>
      </ul> -->

   <!--    <ul class="sidebar-menu mt-3">
       <ul class="sidebar-menu ">
            <li class="side-menus <?php echo e(Request::is('admin/services*') ? 'active' : ''); ?>">
                <a class="nav-link" href="#"><i class="fas fa-list-alt"></i>
                    <span><?php echo e(__('messages.reports')); ?></span></a></li>
      </ul> -->
     <!--  <ul class="sidebar-menu mt-3">
       <ul class="sidebar-menu ">
            <li class="side-menus <?php echo e(Request::is('admin/services*') ? 'active' : ''); ?>">
                <a class="nav-link" href="#"><i class="fa fa-cog"></i>
                    <span><?php echo e(__('messages.management')); ?></span></a></li>
      </ul> -->



    
     



        <!-- <li class="nav-item dropdown side-menus">
            <a class="nav-link has-dropdown" href="#"><i class="fas fa-user-tie"></i>
                <span><?php echo e(__('Help Requester')); ?></span>
            </a>
            <ul class="dropdown-menu side-menus">
                <li class="side-menus <?php echo e(Request::is('admin/help-requester*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('company.index')); ?>">
                        <i class="fas fa-user-friends"></i>
                        <span><?php echo e(__('Help Requester')); ?></span>
                    </a>
                </li> -->
               <!--  <li class="side-menus <?php echo e(Request::is('admin/reported-company*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('reported.companies')); ?>">
                        <i class="fas fa-file-signature"></i>
                        <span> <?php echo e(__('ReportedHelp Requester')); ?></span>
                    </a>
                </li> -->
            <!-- </ul>
        </li>
        <li class="nav-item dropdown side-menus">
            <a class="nav-link has-dropdown" href="#"><i class="fas fa-users"></i>
                <span><?php echo e(__('Helper')); ?></span>
            </a>
            <ul class="dropdown-menu side-menus">
                <li class="side-menus <?php echo e(Request::is('admin/helper*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('candidates.index')); ?>">
                        <i class="fas fa-user-circle"></i>
                        <span><?php echo e(__('Helper')); ?></span>
                    </a>
                </li> -->
            <!--     <li class="side-menus <?php echo e(Request::is('admin/required-degree-level*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('requiredDegreeLevel.index')); ?>">
                        <i class="fas fa-user-graduate"></i>
                        <span><?php echo e(__('messages.required_degree_levels')); ?></span>
                    </a>
                </li> -->
               <!--  <li class="side-menus <?php echo e(Request::is('admin/reported-candidate*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('reported.candidates')); ?>">
                        <i class="fas fa-file-signature"></i>
                        <span><?php echo e(__('messages.candidate.reported_Helper')); ?></span>
                    </a>
                </li>
 -->              
   <!-- <li class="side-menus <?php echo e(Request::is('admin/resumes*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('resumes.index')); ?>">
                        <i class="fas fa-file-pdf"></i>
                        <span><?php echo e(__('messages.all_resumes')); ?></span>
                    </a>
                </li>
            </ul>
        </li> -->
        <!-- <li class="nav-item side-menus dropdown">
            <a class="nav-link has-dropdown" href="#"><i class="fas fa-briefcase"></i>
                <span><?php echo e(__('Services & Jobs')); ?></span>
            </a>
            <ul class="dropdown-menu side-menus">
                <li class="side-menus <?php echo e(Request::is('admin/jobs*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('admin.jobs.index')); ?>">
                        <i class="fas fa-briefcase"></i>
                        <span><?php echo e(__('Jobs')); ?></span>
                    </a>
                </li>
                <li class="side-menus <?php echo e(Request::is('admin/services*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('job-categories.index')); ?>">
                        <i class="fas fa-sitemap"></i> -->
                        <!-- 
                        <span><?php echo e(__('messages.job_categories')); ?></span> -->
                        <!-- <span><?php echo e(__('Services')); ?></span>
                    </a>
                </li> -->
             <!--    <li class="side-menus <?php echo e(Request::is('admin/job-types*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('jobType.index')); ?>">
                        <i class="fas fa-list-alt"></i>
                        <span><?php echo e(__('messages.job_types')); ?></span>
                    </a>
                </li> -->
        <!--         <li class="side-menus <?php echo e(Request::is('admin/job-tags*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('jobTag.index')); ?>">
                        <i class="fas fa-tags"></i>
                        <span><?php echo e(__('messages.job_tags')); ?></span>
                    </a>
                </li>
                <li class="side-menus <?php echo e(Request::is('admin/job-shifts*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('jobShift.index')); ?>">
                        <i class="fas fa-clock"></i>
                        <span><?php echo e(__('messages.job_shifts')); ?></span>
                    </a>
                </li>
                <li class="side-menus <?php echo e(Request::is('admin/reported-jobs*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('reported.jobs')); ?>">
                        <i class="fab fa-r-project"></i>
                        <span><?php echo e(__('messages.reported_jobs')); ?></span>
                    </a>
                </li> -->
              <!--   <li class="side-menus <?php echo e(Request::is('admin/job-notification*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('job-notification.index')); ?>">
                        <i class="fas fa-envelope-open-text"></i>
                        <span><?php echo e(__('messages.job_notification.job_notifications')); ?></span>
                    </a>
                </li> -->
            </ul>
        </li>
  <!--       <li class="nav-item side-menus dropdown">
            <a class="nav-link has-dropdown" href="#"><i class="fab fa-usps"></i>
                <span><?php echo e(__('messages.post.blog')); ?></span>
            </a>
            <ul class="dropdown-menu side-menus">
                <li class="side-menus <?php echo e(Request::is('admin/post-categories*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('post-categories.index')); ?>">
                        <i class="far fa-list-alt"></i>
                        <span> <?php echo e(__('messages.post_category.post_categories')); ?></span>
                    </a>
                </li>
                <li class="side-menus <?php echo e(Request::is('admin/posts*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('posts.index')); ?>">
                        <i class="fas fa-blog"></i>
                        <span> <?php echo e(__('messages.post.posts')); ?></span>
                    </a>
                </li>
            </ul>
        </li> -->
        <li class="nav-item side-menus dropdown">
            <a class="nav-link has-dropdown" href="#"><i class="fas fa-solar-panel"></i>
                <span><?php echo e(__('messages.plan.subscriptions')); ?></span>
            </a>
            <ul class="dropdown-menu side-menus">
                <li class="side-menus <?php echo e(Request::is('admin/plans*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('plans.index')); ?>">
                        <i class="fab fa-bandcamp"></i>
                        <span><?php echo e(__('messages.subscriptions_plans')); ?></span>
                    </a>
                </li>
                <li class="side-menus <?php echo e(Request::is('admin/transactions*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('transactions.index')); ?>">
                        <i class="fas fa-money-bill-wave"></i>
                        <span><?php echo e(__('messages.transactions')); ?></span>
                    </a>
                </li>
            </ul>
        </li>

        <ul class="sidebar-menu mt-3">
       <ul class="sidebar-menu ">
            <li class="side-menus <?php echo e(Request::is('admin/moments*') ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(route('moments.index')); ?>"><i class="fas fa-bell"></i>
                    <span><?php echo e(__('web.helpers.contact_moments')); ?></span></a></li>
      </ul>
      <ul class="sidebar-menu ">
            <li class="side-menus <?php echo e(Request::is('admin/job-applications*') ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(route('jobs.applications')); ?>"><i class="fa fa-briefcase"></i>
                    <span><?php echo e(__('web.helpers.job_applications')); ?></span></a></li>
      </ul>
       <!--
        <li class="side-menus <?php echo e(Request::is('admin/subscribers*') ? 'active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(route('subscribers.index')); ?>">
                <i class="fas fa-bell"></i>
                <span><?php echo e(__('messages.subscribers')); ?></span>
            </a>
        </li>
            <li class="nav-item side-menus dropdown">
                <a class="nav-link has-dropdown" href="#"><i class="fas fa-globe-americas"></i>
                    <span><?php echo e(__('messages.country.countries')); ?></span>
                </a>
                <ul class="dropdown-menu side-menus">
                    <li class="side-menus <?php echo e(Request::is('admin/countries*') ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(route('countries.index')); ?>">
                            <i class="fas fa-globe-americas"></i>
                            <span><?php echo e(__('messages.country.countries')); ?></span>
                        </a>
                    </li>
                    <li class="side-menus <?php echo e(Request::is('admin/states*') ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(route('states.index')); ?>">
                            <i class="fas fa-flag"></i>
                            <span><?php echo e(__('messages.state.states')); ?></span>
                        </a>
                    </li>
                    <li class="side-menus <?php echo e(Request::is('admin/cities*') ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(route('cities.index')); ?>">
                            <i class="fas fa-city"></i>
                            <span><?php echo e(__('messages.city.cities')); ?></span>
                        </a>
                    </li>
                    
                </ul>
            </li>-->
            <li class="side-menus <?php echo e(Request::is('admin/inquires*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('inquires.index')); ?>">
                        <i class="fab fa-linkedin"></i>
                        <span> <?php echo e(__('messages.inquires')); ?></span>
                    </a>
                </li>
            <li class="side-menus <?php echo e(Request::is('admin/complaints*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('complaints.index')); ?>">
                        <i class="fab fa-linkedin"></i>
                        <span> <?php echo e(__('messages.complaints')); ?></span>
                    </a>
                </li>
                
            <!--<li class="side-menus <?php echo e(Request::is('admin/email-templates*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('email.template.index')); ?>">
                        <i class="fas fa-envelope"></i>
                        <span><?php echo e(__(__('messages.email_templates'))); ?></span>
                    </a>
                </li>-->
      <!--   <li class="nav-item dropdown side-menus">
            <a class="nav-link has-dropdown" href="#"><i class="fas fa-cogs"></i>
                <span><?php echo e(__('messages.general')); ?></span>
            </a>
            <ul class="dropdown-menu side-menus">
                <li class="side-menus <?php echo e(Request::is('admin/marital-status*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('maritalStatus.index')); ?>">
                        <i class="fas fa-life-ring"></i>
                        <span><?php echo e(__('messages.marital_statuses')); ?></span>
                    </a>
                </li>
                <li class="side-menus <?php echo e(Request::is('admin/skills*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('skills.index')); ?>">
                        <i class="fas fa-clipboard-list"></i>
                        <span><?php echo e(__('messages.skills')); ?></span>
                    </a>
                </li>
                <li class="side-menus <?php echo e(Request::is('admin/salary-periods*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('salaryPeriod.index')); ?>">
                        <i class="fas fa-calendar-alt"></i>
                        <span><?php echo e(__('messages.salary_periods')); ?></span>
                    </a>
                </li>
                <li class="side-menus <?php echo e(Request::is('admin/industries*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('industry.index')); ?>">
                        <i class="fas fa-landmark"></i>
                        <span><?php echo e(__('messages.industries')); ?></span>
                    </a>
                </li>
                <li class="side-menus <?php echo e(Request::is('admin/company-sizes*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('companySize.index')); ?>">
                        <i class="fas fa-list-ol"></i>
                        <span><?php echo e(__('messages.company_sizes')); ?></span>
                    </a>
                </li>
                <li class="side-menus <?php echo e(Request::is('admin/functional-area*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('functionalArea.index')); ?>">
                        <i class="fas fa-chart-pie"></i>
                        <span><?php echo e(__('messages.functional_areas')); ?></span>
                    </a>
                </li>
                <li class="side-menus <?php echo e(Request::is('admin/career-levels*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('careerLevel.index')); ?>">
                        <i class="fas fa-level-up-alt"></i>
                        <span><?php echo e(__('messages.career_levels')); ?></span>
                    </a>
                </li>
                <li class="side-menus <?php echo e(Request::is('admin/salary-currencies*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('salaryCurrency.index')); ?>">
                        <i class="fas fa-money-bill"></i>
                        <span><?php echo e(__('messages.salary_currencies')); ?></span>
                    </a>
                </li>
                <li class="side-menus <?php echo e(Request::is('admin/ownership-types*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('ownerShipType.index')); ?>">
                        <i class="fas fa-universal-access"></i>
                        <span><?php echo e(__('messages.ownership_types')); ?></span>
                    </a>
                </li>
                <li class="side-menus <?php echo e(Request::is('admin/languages*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('languages.index')); ?>">
                        <i class="fas fa-language"></i>
                        <span><?php echo e(__('messages.languages')); ?></span>
                    </a>
                </li>
            </ul>
        </li> -->
       <!--  <li class="nav-item dropdown side-menus">
            <a class="nav-link has-dropdown" href="#"><i class="fas fa-users-cog"></i>
                <span><?php echo e(__('messages.cms')); ?></span>
            </a>
            <ul class="dropdown-menu side-menus">
                <li class="side-menus <?php echo e(Request::is('admin/testimonials*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('testimonials.index')); ?>">
                        <i class="fas fa-sticky-note"></i>
                        <span><?php echo e(__('messages.testimonials')); ?></span>
                    </a>
                </li>
                <li class="side-menus <?php echo e(Request::is('admin/branding-sliders*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('branding.sliders.index')); ?>">
                        <i class="far fa-clone"></i>
                        <span><?php echo e(__('messages.branding_sliders')); ?></span>
                    </a>
                </li>
                <li class="side-menus <?php echo e(Request::is('admin/header-sliders*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('header.sliders.index')); ?>">
                        <i class="far fa-image"></i>
                        <span><?php echo e(__('messages.header_sliders')); ?></span>
                    </a>
                </li>
                <li class="side-menus <?php echo e(Request::is('admin/image-sliders*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('image-sliders.index')); ?>">
                        <i class="far fa-images"></i>
                        <span><?php echo e(__('messages.image_sliders')); ?></span>
                    </a>
                </li>
                <li class="side-menus <?php echo e(Request::is('admin/noticeboards*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('noticeboards.index')); ?>">
                        <i class="fas fa-clipboard"></i>
                        <span><?php echo e(__('messages.noticeboards')); ?></span>
                    </a>
                </li>
                <li class="side-menus <?php echo e(Request::is('admin/faqs*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('faqs.index')); ?>">
                        <i class="fas fa-question-circle"></i>
                        <span> <?php echo e(__('messages.faq.faq')); ?></span>
                    </a>
                </li>
                <li class="side-menus <?php echo e(Request::is('admin/inquires*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('inquires.index')); ?>">
                        <i class="fab fa-linkedin"></i>
                        <span> <?php echo e(__('messages.inquires')); ?></span>
                    </a>
                </li>
                <li class="side-menus <?php echo e(Request::is('admin/notification-settings*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('notification.settings.index')); ?>">
                        <i class="fas fa-compass"></i>
                        <span><?php echo e(__('messages.setting.notification_settings')); ?></span>
                    </a>
                </li>
                <li class="side-menus <?php echo e(Request::is('admin/privacy-policy*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('privacy.policy.index')); ?>">
                        <i class="fas fa-user-secret"></i>
                        <span><?php echo e(__('messages.setting.privacy_policy')); ?></span>
                    </a>
                </li>
                <li class="side-menus <?php echo e(Request::is('admin/front-settings*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('front.settings.index')); ?>">
                        <i class="fas fa-cog"></i>
                        <span><?php echo e(__('messages.setting.front_settings')); ?></span>
                    </a>
                </li>
                <li class="side-menus <?php echo e(Request::is('admin/translation-manager*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('translation-manager.index')); ?>">
                        <i class="fas fa-language"></i>
                        <span><?php echo e(__(__('messages.translation_manager'))); ?></span>
                    </a>
                </li>
                <li class="side-menus <?php echo e(Request::is('admin/email-templates*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('email.template.index')); ?>">
                        <i class="fas fa-envelope"></i>
                        <span><?php echo e(__(__('messages.email_templates'))); ?></span>
                    </a>
                </li>
                <li class="side-menus <?php echo e(Request::is('admin/settings*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('settings.index')); ?>">
                        <i class="fas fa-sliders-h"></i>
                        <span><?php echo e(__('messages.settings')); ?></span>
                    </a>
                </li>
            </ul>
        </li> -->
    </ul>
</aside>
<script id="1" src="<?php echo e(secure_asset('assets/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(mix('assets/js/sidebar_menu_search/sidebar_menu_search.js')); ?>"></script>
<?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>