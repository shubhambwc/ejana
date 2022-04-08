<?php $__env->startSection('title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <section class="inner-banner">

      <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white inner-title">
                        <h3 class="text-uppercase title mb-4">EMPLOYER Pricing</h3>
                       <a href="index.html" class="text-uppercase font-weight-bold">Home</a> > <span class="text-uppercase text-white font-weight-bold">EMPLOYER Pricing</span>



                    </div>
                </div>
            </div>
        </div>
    </section>


  <section class="section">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12">
                <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                     <h2 class="heading font-weight-bold pb-5 text-center">CHOOSE YOUR MEMBERSHIP</h2>


            <p class="text-muted text-center ">Each helper determines their own hourly rate. They are given advice so that they know what is real to ask. As a helper, you can see the hourly rate per helper, so that you will never be faced with surprises. This way you can choose the helper that best suits your needs!
Choose your membership below
helpers can create an account and search for helpers for free. To get in touch with a helper, helpers need to upgrade their account to a premium account. The monthly subscription allows requesters to send messages and requests.
</p></div></div>

<div class="row mt-5">


                <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0 ">
                    <div class="pricing-box border rounded pt-4">
                        <div class="pl-2 pr-2">
                            <h4 class="text-center text-uppercase font-weight-bold">Free</h4>
                            <p class="text-muted text-center mb-0 price mt-3 p-1"><span class="text-primary font-weight-normal h1"><sup class="h5">€</sup>0/</span>Month</p>
                            <p class="text-muted text-center mb-0 price mt-3 p-1">With a free account on Ejana you can use the basic functions of Ejana without obligation</p><br>
                            <div class="pricing-plan-item text-center">
                                <ul class="list-unstyled mb-4">
                                    <li class="text-muted">Eigenprofiel</li>

                                    <li class="text-muted">Find profiles</li>

                                    <li class="text-muted">Receive free messages</li>

                                </ul>
                            </div>
                        </div>

                        <div class="text-center border-top p-4">
                         <?php echo e(Form::open(array('route' => 'front.pay.subscription'))); ?>

                            <input type="hidden"  name="plan_id"  value="2">
                            <input type="hidden"  name="user_type" value="requestor">

                            <button class="btn btn-block btn-primary-outline" type="submit">REGISTER FOR FREE</button>
 <?php echo e(Form::close()); ?>


                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="pricing-box border rounded pt-4">
                        <div class="pl-2 pr-2">
                            <h4 class="text-center text-uppercase font-weight-bold">Premium</h4>
                            <p class="text-muted text-center mb-0 price mt-3 p-1"><span class="text-primary font-weight-normal h1"><sup class="h5">€</sup>10,95/</span>Month</p>
                             <p class="text-muted text-center mb-0 price mt-3 p-1">With an Ejana premium account you can use the features of Ejana. This way you can find a candidate even faster.</p><br>
                            <div class="pricing-plan-item text-center">
                                <ul class="list-unstyled mb-4">

                                    <li class="text-muted"><i class="mdi mdi-minus mr-2"></i>Find profiles</li>
                                    <li class="text-muted"><i class="mdi mdi-minus mr-2"></i>Send messages</li>
                                    <li class="text-muted"><i class="mdi mdi-minus mr-2"></i>Place ads And much more</li>

                                </ul>
                            </div>
                        </div>
                        <div class="text-center border-top p-4">
                        <?php echo e(Form::open(array('route' => 'front.pay.subscription'))); ?>

                            <input type="hidden"  name="plan_id"  value="3">
                            <input type="hidden"  name="user_type" value="requestor">

                            <button class="btn btn-block btn-primary" type="submit">ACTIVATE</button>
 <?php echo e(Form::close()); ?>


                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


    <section class="section"  style="background-color:#efefef;">
        <div class="container">
            <div class="row align-items-center">





                <div class="col-lg-12 col-md-12 mb-4">
                    <div class="about-desc ml-lg-4">

<h5 class="text-muted mb-1">Rates for helpers</h5>


                        <p class="text-muted f-14 mb-3">At Cjana, your money is also 100% yours. We do not deduct a percentage of your income. We only ask for a small
monthly platform fee of €8.95, so all the money you earn is really yours. Register for free and create
using the 14-day trial version, you can view profiles of others, see which help seekers are in your area.
Have you found a match and do you want to send messages to others yourself? Then you can take out a membership. After 14 days
your trial version is automatically converted to monthly subscription.  <a href="pricing-candidate.html">Membership helpers</a></p>
<h5 class="text-muted mb-1">Hourly rates for helpers</h5>


                        <p class="text-muted f-14 mb-1">Helpers pass on their expected hourly rates via their profile, but this is not a fixed rate
you can always negotiate.</p>
 <p class="text-muted f-14 mb-3">parent(s) looking for guest parent or nanny can register and advertise for free
places. Parent(s) who register via Ejana will be forwarded to the guest parent agency
Kids2bie and will enter into a contract with a kids2bie childminder. because of this it is
possible to come into anmerlijk for childcare allowance.</p>

<h5 class="text-muted mb-1">Rates for childminders</h5>

                        <p class="text-muted f-14 mb-3">At Ejana is in collaboration with Gastouderbureau Kids2bie. because of this you don't have to
guest parent or nanny do not have to pay platform costs and you can create a profile for free
Create and search for families near you.</p>

    </div>




                    </div>


                </div>
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



     <section class="section ">
        <div class="container">

            <div class="row align-items-center"">
<div class="col-lg-12 col-md-12 mt-4 pt-2 ">
<div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="heading font-weight-bold  ">HOW DOES IT WORKS</h2>

                    </div>
                </div>
            </div>
        <div class="row mb-4 pb-5">
                <div class="col-lg-4 col-md-4 mt-4 pt-2">
<div class="row align-items-center">

                                                <div class="col-md-12 col-sm-8 col-xs-12 align-items-center">
                                                    <div align="center" class="pt-2">
                                                     <img src="assets/images/search-icon.png" alt="" class="img-fluid mx-auto d-block mb-4">

                                                        <h4 class="f-18"><a href="#" class="text-dark">Find <br>your candidate</a></h4>
                                                        <p class="text-muted mb-0">

Read detailed profiles and reviews And find the best helper  near you for babysitter, childminder, homework supervisor, pet sitter or cleaning and garden help.
</p>

                                                    </div>
                                                </div></div>



                </div>


                <div class="col-lg-4 col-md-4 mt-4 pt-2">
<div class="row align-items-center">  <div class="col-md-12 col-sm-8 col-xs-12 align-items-center">
                                                    <div align="center" class="pt-2">
                                                     <img src="assets/images/candidate.png" alt="" class="img-fluid mx-auto d-block mb-4">

                                                        <h4 class="f-18"><a href="#" class="text-dark">Get acquainted with your<br> candidate</a></h4>
                                                        <p class="text-muted mb-0">



Did you find a nice helper?  Contact that  helperwitho you get to know each other evenbetter. Got excited? Book that helper!  Helpers don't pay us until they contacthimand a  helper.

</p>
                                                    </div>
                                                </div></div>


                </div>
                <div class="col-lg-4 col-md-4 mt-4 pt-2">
<div class="row align-items-center">
                                                  <div class="col-md-12 col-sm-8 col-xs-12 align-items-center">
                                                    <div align="center" class="pt-2">
                                                     <img src="assets/images/booking.png" alt="" class="img-fluid mx-auto d-block mb-4">

                                                        <h4 class="f-18"><a href="#" class="text-dark">Book and pay that<br> candidate </a></h4>
                                                        <p class="text-muted mb-0">



Book your favorite  helper, once, flexibly or for fixed.   Pay that  helper easily after  a service via our secure online payment system.
.

</p>
                                                    </div>
                                                </div></div>

                </div>




                    </div>
                    </div>
                </div>

                </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.webLayout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/psd2htmlx.com/ejana/resources/views/web/home/pricing-employer.blade.php ENDPATH**/ ?>