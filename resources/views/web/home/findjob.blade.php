@extends('web.webLayout.app')

@section('title')
@endsection

@section('content')

  <section class="inner-banner">

      <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white inner-title">
                        <h3 class="text-uppercase title mb-4">Find your job</h3>
                       <a href="/" class="text-uppercase font-weight-bold">Home</a> > <span class="text-uppercase text-white font-weight-bold">Find your job</span>

                    </div>
                </div>
            </div>
        </div>
    </section>

   <div class="clearfix"></div>

   <section class="section">
	 <div class="row ">
		<div class="col-md-4 hide" style="background-color:#fbfbfb;">

  <div class="sticky">
      <div id="navbar " class="top mt-5">
<h3 class="text-uppercase title mb-4"> &nbsp;Find your job</h3>

            <a href="#our_service" class="nav-link">
               <strong> <i class="fa fa-link" aria-hidden="true"></i>
OUR SERVICES</strong>
            </a>
            <a href="#howitworks" class="nav-link">
                <strong><i class="fa fa-link" aria-hidden="true"></i>
HOW IT WORKS</strong>
            </a>
            <a href="#choose_m" class="nav-link">
                <strong><i class="fa fa-link" aria-hidden="true"></i>
CHOOSE YOUR MEMBERSHIP</strong>
            </a>
            <a href="#screening" class="nav-link">
               <strong> <i class="fa fa-link" aria-hidden="true"></i>
HOW DOES SCREENING WORKS</strong>
            </a>
            <a href="#find_ideal_job" class="nav-link">
               <strong> <i class="fa fa-link" aria-hidden="true"></i>
HOW DO YOU FIND YOUR IDEAL JOB?</strong>
            </a>
       </div>
  </div>

</div>

		<div class="col-md-8">

    <section class="section section-service" id="our_service">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 ">
                        <h2 class="heading font-weight-bold">OUR SERVICES</h2>
                    </div>
                </div>
            </div>
            <div class="row">

             <div class="content" style="flex-wrap: inherit;padding: 0px">
        <?php if($jobCategories) { foreach($jobCategories as $jobCategory){
             if($jobCategory->is_featured){?>
             <div class="card" style="max-width:275px;">

            <div class="icon"> <img src="{{ $jobCategory->thumbnail }}" alt="" class="img-fluid mx-auto d-block"></div>
            <p class="title"> <h5 class="f-18 text-center"><a href="{{ route('service-details',$jobCategory->id) }}" class="text-dark">{{ $jobCategory->name }} </a></h5></p>
            <p class="text"><span class="txt">(8 Jobs)</span><br>{{ Str::limit($jobCategory->description,20) }}<br><a href="{{ route('service-details',$jobCategory->id) }}">Read More</a> </p>
            <p></p>


            </div>
      <?php } } }?>

  </div>


           </div>
       </div>
    </section>

    <section class="section mb-2" id="howitworks">

     <div class="container">
      <div class="row">
         <div class="col-md-5 mt-4 pt-2">
            <div class="mb-4">
               <h3>I am looking for work </h3>
               <h5 class="text-muted ">Babysitter, pet sitter domestic help, garden help, handyman, IT, transport, music, homework supervisor or home care</h5>
            </div>
            <div>
               <div class="job-details-desc-item">
                  <div class="float-left mr-3">
                     <img src="assets/images/register.png" alt="" class="mx-auto d-block" height="120">
                  </div>
                  <div class="mb-5">
                     <h5>Register an account</h5>
                     <p class="text-muted mb-5">Sign up for free and complete your profile</p>
                  </div>
               </div>
            </div>
               <div class=" shift mt-top">
                  <div class="job-details-desc-item">
                     <div class="float-left mr-3 ">
                        <img src="assets/images/seachmplace.png" alt="" class="mx-auto d-block" height="120">
                     </div></div>
                     <div>
                        <h5>Search and place</h5>
                        <p class="text-muted mb-5">check out free profiles near you for the first two weeks or accept membership and record or respond to ads.</p>
                     </div>
                  </div>
                  <div class="mt-5">
                     <div class="job-details-desc-item">
                        <div class="float-left mr-3">
                            <img src="assets/images/introduction.png" alt="" class="mx-auto d-block" height="120">
                        </div></div>
                        <div>
                           <h5>Introduction</h5>
                           <p class="text-muted mb-5">Ejana will contact you for an introductory meeting. After a positive introductory meeting and reference check, your profile will be put online.</p>
                        </div>
                     </div>
                     <div class="mt-4 shift">
                        <div class="job-details-desc-item">
                           <div class="float-left mr-3">
                               <img src="assets/images/calender.png" alt="" class="mx-auto d-block" height="120">
                           </div></div>
                           <div>
                              <h5>Get Started</h5>
                              <p class="text-muted mb-5">you have found a nice request for help that suits your availability and skills= book each other, after your shift you will be paid safely.</p>
                           </div>
                        </div>
                     </div>
         <div class="col-md-2 mt-4 pt-2 "> <div class="boder1"></div></div>
         <div class="col-md-5 mt-4 pt-2">
                       <div class="mb-4">
                  		<h3>I am looking for family(s) or want to become a childminder </h3>
               			<h5 class="text-muted ">Professional childminder or nanny</h5>
                      </div>
                     <div>
               <div class="job-details-desc-item">
                  <div class="float-left mr-3">
                     <img src="assets/images/register.png" alt="" class="mx-auto d-block" height="120">
                  </div>
                  <div>
                     <h5>Register an account</h5>
                     <p class="text-muted mb-5">Sign up for free and complete your profile.</p>
                  </div>
               </div>
            </div>

               <div class="shift mt-top">
                  <div class="job-details-desc-item">
                     <div class="float-left mr-3">
                       <img src="assets/images/seachmplace.png" alt="" class="mx-auto d-block" height="120">
                     </div></div>
                     <div>
                        <h5>Search and place</h5>
                        <p class="text-muted mb-5">check out the profiles ofpeople near you or place an advertisement so that  families can<br> find you faster.</p>
                     </div>
                  </div>
                  <div class="mt-5">
                     <div class="job-details-desc-item">
                        <div class="float-left mr-3">
                    <img src="assets/images/introduction.png" alt="" class="mx-auto d-block" height="120">
                        </div></div>
                        <div>
                           <h5>Introduction</h5>
                           <p class="text-muted"> you are affiliated with childminder agency Kids2bie. have you found a family that suits your availability and skills= respond to that advert and Kids2bie will contact you and the family and arrange an introductory meeting between you and the family.</p>
<p class="text-muted "> If you are a childminder but are not yet affiliated with childminder agency Kids2bie or want to becomeachildminder:
Kids2bie will contact you for a telephone introductory meeting and to review the accompanying documentation. Have you found a family yet? Then Kids2bie first comes by in person and then Kids2bie arranges an introductory meeting between you and the family.
 </p>
                        </div>
                     </div>
                     <div class="mt-5 shift">
                        <div class="job-details-desc-item">
                           <div class="float-left mr-3">
                                <img src="assets/images/childminder.png" alt="" class="mx-auto d-block" height="120">
                           </div>
                           </div>
                           <div>
                              <h5>Start childcare</h5>
                              <p class="text-muted mb-5">Did you get a good impression after the conversation and do you want to offer the care for that family? Then kid2bie will provide a second call to record all the documentation, so that the shelter can start.   </p>
                           </div>
                        </div>
                     </div>
      </div>
     </div>

   </section>


    <section class="section" style="background-color:#fbfbfb;">
        <div class="container">

            <div class="row pt-4">
                <div class="col-lg-12">

                    <div id="owl-testi" class="owl-carousel owl-theme">
                        <div class="item testi-box rounded p-4 mr-3 ml-2 mb-4 bg-light position-relative">
                            <div class="clearfix">
                                <div class="testi-img float-left mr-3">
                                    <img src="assets/images/pay.png" height="150" alt="">
                                </div>
                                <h4 class="f-18 pt-1 align-items-center">Pay safely </h4>
                                <p class="text-muted "> After working you prefer to have your money as soon as possible. We work with a reliable payment provider and ensure that your money is in the account within 3 to 8 days. </p>
                            </div>
                        </div>

                        <div class="item testi-box rounded p-4 mr-3 ml-2 mb-4 bg-light position-relative">
                            <div class="clearfix ">
                                <div class="testi-img float-left mr-3">
                                    <img src="assets/images/near.png" height="150" alt="" class="">
                                </div>
                                <h4 class="f-18 pt-1 align-items-center">Je works in your own region </h4>
                                <p class="text-muted ">not hours of travel<br> to work but just <br>near you.</p>
                            </div>
                         </div>

                        <div class="item testi-box rounded p-4 mr-3 ml-2 mb-4 bg-light position-relative">
                            <div class="clearfix">
                                <div class="testi-img float-left mr-3">
                                    <img src="assets/images/time.png" height="150" alt="" class="">
                                </div>
                                <h4 class="f-18 pt-1 align-items-center">Your own agenda </h4>
                                <p class="text-muted "> Boss of your own agenda, you choose completely yourself when you want to work this can be done both flexibly, occasionally, or for fixed. </p>
                             </div>
                        </div>

                        <div class="item testi-box rounded p-4 mr-3 ml-2 mb-4 bg-light position-relative">
                            <div class="clearfix">
                                <div class="testi-img float-left mr-3">
                                    <img src="assets/images/money.png" height="150" alt="" class="">
                                </div>
                                <h4 class="f-18 pt-1 align-items-center">Get your own rate </h4>
                                <p class="text-muted "> Decide for yourself what you earn. Be realistiscg, otherwise helpers prefer to choose another helper, do you find this difficult? No problem we help you! </p>
                           </div>
                       </div>

                  </div>

                </div>

         </div>

       </div>
    </section>

    <section class="section" id="choose_m">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                     <h2 class="heading font-weight-bold pb-5 text-center">CHOOSE YOUR MEMBERSHIP</h2>
		             <p class="text-muted text-center ">Helpers  can create an account and view two weeks profiles near them. To get in touch with a  helper or place ads, helpers need to upgrade their account to a premium account.</p>
               </div>
            </div>

           <div class="row mt-5">

                <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0 ">
                    <div class="pricing-box border rounded pt-4">
                        <div class="pl-2 pr-2">
                            <h4 class="text-center text-uppercase font-weight-bold">Try 14 days gratis</h4>
                            <p class="text-muted text-center mb-0 price mt-3 p-1"><span class="text-primary font-weight-normal h1"><sup class="h5">€</sup>0 /</span>14 Days</p>
                            <p class="text-muted text-center mb-0 price mt-3 p-1">When your free trial expires, we will charge you the payment method you entered during registration and will automatically renew for 1 month at the standard monthly rate of €  8.95.   You can cancel your subscription monthly.*14-day trial    will only take place after full screening and you can access the entire platform</p><br>
                            <div class="pricing-plan-item text-center">
                                <ul class="list-unstyled mb-4">
                                    <li class="text-muted">Eigenprofiel</li>
                                    <li class="text-muted">Find profiles</li>
                                    <li class="text-muted">Receive free messages</li>
                                    <li class="text-muted">Place an ad And much more</li>
                                </ul>
                            </div>
                        </div>

                        <div class="text-center border-top p-4">
                         {{ Form::open(array('route' => 'choose-service')) }}
                            <input type="hidden"  name="user_type" value="helper">
                            <button class="btn btn-block btn-primary-outline" type="submit">TRY 14 DAYS TRIAL</button>
 						{{ Form::close() }}

                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="pricing-box border rounded pt-4">
                        <div class="pl-2 pr-2">
                           <h4 class="text-center text-uppercase font-weight-bold">Quickly find the right power at Ejana</h4>
                            <p class="text-muted text-center mb-0 price mt-3 p-1"><span class="text-primary font-weight-normal h1"><sup class="h5">€</sup>8.95 /</span>Month</p>
                            <p class="text-muted text-center mb-0 price mt-3 p-1">At Ejana, earning money is also 100% yours. We don't take a percentage of your income. We only charge a small monthly platform fee of €8.95, so all your money earned is really yours. If you register for free and use the 14-day  trial, you can view profiles of others, seewhich helpers are near you. Have you found a match and want to send messages to others yourself? Then you can take out a membership.   After 14 days, your trial version will be automatically converted  into monthly  membership.</p><br>
                            <div class="pricing-plan-item text-center">
                                <ul class="list-unstyled mb-4">
                                    <li class="text-muted">Eigenprofiel</li>
                                    <li class="text-muted">Find profiles</li>
                                    <li class="text-muted">Receive free messages</li>
                                    <li class="text-muted">Place an ad And much more</li>
                                </ul>
                            </div>
                        </div>

                        <div class="text-center border-top p-4">

                         {{ Form::open(array('route' => 'choose-service')) }}
                            <input type="hidden"  name="user_type" value="requestor">

                            <button class="btn btn-block btn-primary" type="submit">ACTIVATE</button>
                         {{ Form::close() }}

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


     <section class="section"  style="background-color:#fbfbfb;">
    <div class="container">
            <div class="row">

				<div class="col-lg-12 col-md-12 mb-4">
                    <div class="about-desc ml-lg-4">

						<h5 class="text-muted mb-1">Book and pay helpers</h5>
                        <p class="text-muted f-14 mb-3">Booking and paying via Ejana is easy, safe and highly recommended.</p>
                        <h5 class="text-muted mb-1">Simple and effective</h5>
                        <p class="text-muted f-14 mb-3">
When you book and communicate via Ejana, you use our
built-in security features. In addition, it is easy to use.
Request a booking, get to know each other and pay via Ejana.</p>
                        <h5 class="text-muted mb-1">Automatic Payouts</h5>
                        <p class="text-muted f-14 mb-3">
After successfully completing the helper appointment, you will receive the payment
within 3-8 days. you could also opt for monthly payments.
more information about this? contact us.</p>
                        <h5 class="text-muted mb-1">Secure payments</h5>
                        <p class="text-muted f-14 mb-3">Secure payments
We use a secure payment system that never leaves your credit card or
bank account information with other users. Paying via Ejana is
cashless, convenient and keeps your personal information safe.</p>

<h5 class="text-muted mb-1">Download statements</h5>
                        <p class="text-muted f-14 mb-3">
Do you want to declare your costs for VAT at your tax office? Simply download your
payment receipts via Ejana. people seeking help can also receive payment receipts
download for all their bookings.</p>
                    </div>


                </div>
                </div>
                </div>

    </section>

    <section class="section" id="screening" style="background-color:#fff;">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-12 col-md-12 mb-3 mt-3">
                    <div class="about-desc ml-lg-4">

<h3 class=" heading mb-1">How does screening work?</h3>
 <p class="text-muted"> During the online introductory meeting we test you on various criterria, including registration form, education, experience, background and motivation. After the interview, we will contact your previous references and ask for a review about you. 2. After a successful screening, you will have access to our platform and you can place your ads, respond to other advertisements and make appointments with help seeking help in your region. Complete your screening by obtaining the designated qualifications the more qualification you have the faster you can roll up your sleeves! Qualifications:</p>
                        <div class="job-details-desc-item">
                        <div class="float-left mr-3">
                            <i class="mdi mdi-checkbox-marked-circle-outline text-muted f-16"></i>
                        </div>
                        <p class="text-muted f-14 mb-1"> email – phone number - ID verified




</p>
 <div class="float-left mr-3">
                 <i class="mdi mdi-checkbox-marked-circle-outline text-muted f-16"></i>
                        </div><p class="text-muted f-14 mb-1">Information sessions
</p>
  <div class="float-left mr-3">
                              <i class="mdi mdi-checkbox-marked-circle-outline text-muted f-16"></i>
                        </div> <p class="text-muted f-14 mb-1">Additional screening



</p>
 <div class="float-left mr-3">
                 <i class="mdi mdi-checkbox-marked-circle-outline text-muted f-16"></i>
                        </div><p class="text-muted f-14 mb-1">First aid certificate
</p>
  <div class="float-left mr-3">
                              <i class="mdi mdi-checkbox-marked-circle-outline text-muted f-16"></i>
                        </div> <p class="text-muted f-14 mb-1">Certificate of derent behaviour (VOG)



</p>
  <div class="float-left mr-3">
                              <i class="mdi mdi-checkbox-marked-circle-outline text-muted f-16"></i>
                        </div> <p class="text-muted f-14 mb-1">Online course
⁻ Liability insuranceally


</p>
                    </div>


  <div class="float-left mr-3">
                              <i class="mdi mdi-checkbox-marked-circle-outline text-muted f-16"></i>
                        </div> <p class="text-muted f-14 mb-1">Liability insuranceally


</p>
                    </div>




                    </div>


                </div>





                    </div>


    </section>

    <section class="section" id="find_ideal_job" style="background-color:#fbfbfb;">
        <div class="container">
            <div class="row">
            <div class="col-lg-12 col-md-12 mb-5 mt-3">
                    <div class="about-desc ml-lg-4">

<h3 class="text-muted mb-1 text-center">How do you find your ideal job?</h3></div></div>
                <div class="col-lg6 col-md-6 mb-4 pb-2">
                    <div class="services-box border">
                        <div class="service-icon mb-3">
                            <i class="mdi mdi-account-multiple h1"></i>
                        </div>
                        <div class="services-desc">
                            <h5 class="text-muted mb-1">Sign up </h5>
                            <p class="text-muted mb-0">Sign up and find your ideal job as a babysitter, childminder, homework supervisor, animal sitter or, cleaning and garden help. You want all of them? You can!</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4 pb-2">
                   <div class="services-box border">
                        <div class="service-icon mb-3">
                            <i class="mdi  mdi-account-check h1"></i>
                        </div>
                        <div class="services-desc">
                           <h5 class="text-muted mb-1">Complete your profile</a></h5>
                            <p class="text-muted mb-0">
Helpers will see your profile when they are looking for a  helper!  A good motivation helps you to be chosen earlier. Choose your own hourly rate and availability.
we will contact you for an introductory meeting
</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4 pb-2">
                     <div class="services-box border">
                        <div class="service-icon mb-3">
                            <i class="mdi mdi-human-male-male h1"></i>
                        </div>
                        <div class="services-desc">
                           <h5 class="text-muted mb-1">Face-to-face conversation</a></h5>
                            <p class="text-muted mb-0">
During the online introductory meeting we test you on various criteria, including registration form, experience, background and motivation.  after the interview, we will contact your previous references and ask for a review about you.

</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4 pb-2">
                     <div class="services-box border">
                        <div class="service-icon mb-3">
                            <i class="mdi mdi-thumb-up-outline h1"></i>
                        </div>
                        <div class="services-desc">
                            <h5 class="text-muted mb-1">Access to our platform</a></h5>
                            <p class="text-muted mb-0">
After a successful screening, you will have access to our platform and you can place your ads, respond to other advertisements and make appointments with those seeking help in your area. At Ejana you have a good chance that you can quickly roll up your sleeves. And then you get paid safely!
</p>
                        </div>
                    </div>
                </div>


            </div>


        </div>
    </section>

 </div>

    </div>

   </section>

@endsection
