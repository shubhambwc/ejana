@extends('web.webLayout.app')

@section('title')
@endsection

@section('content')
<style>
.right-txt {
    text-align: right;
}
</style>
    <section class="inner-banner">
    
      <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white inner-title">
                        <h3 class="text-uppercase title mb-4">How it works</h3>
                       <a href="{{ route('front.home') }}" class="text-uppercase font-weight-bold">Home</a> > <span class="text-uppercase text-white font-weight-bold">How it works</span>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
       
  
 <!-- ABOUT US START -->
    <section class="section mb-2">
   <div class="container">
      <div class="row">
         <div class="col-md-5 mt-4 pt-2">
            <div class="mb-4">
               <h4 class="text-muted ">Babysitter, pet sitter domestic help, garden help, handyman, IT, transport, music, homework supervisor or home care</h4>
            </div>
            <div>
               <div class="job-details-desc-item">
                  <div class="float-left mr-3">
                     <img src="assets/images/register.png" alt="" class="mx-auto d-block" height="120">
                  </div>
                  <div class="mb-5">
                     <h5>Register an account</h5>
                     <p class="text-muted mb-5">Sign up for free</p>
                  </div>
               </div>
            </div>
               <div class=" shift mt-top">
                  <div class="job-details-desc-item">
                     <div class="float-left mr-3">
                        <img src="assets/images/seachmplace.png" alt="" class="mx-auto d-block" height="120">
                     </div></div>
                     <div>
                        <h5>Search and place</h5>
                        <p class="text-muted mb-5">View the profiles near you or place an ad so helpers can find you faster.</p>
                     </div>
                  </div>
                  <div class="mt-top">
                     <div class="job-details-desc-item">
                        <div class="float-left mr-3">
                            <img src="assets/images/introduction.png" alt="" class="mx-auto d-block" height="120">
                        </div></div>
                        <div>
                           <h5>Introduction</h5>
                           <p class="text-muted mb-5">Did you find a nice helper? Activate the membership and contact that helper and schedule an introductory meeting, so you get to know each other even better.</p>
                        </div>
                     </div>
                     <div class="mt-4 shift">
                        <div class="job-details-desc-item">
                           <div class="float-left mr-3">
                               <img src="assets/images/calender.png" alt="" class="mx-auto d-block" height="120">
                           </div></div>
                           <div>
                              <h5>Book and betaal</h5>
                              <p class="text-muted mb-5">Book that nice helper and pay that helper after a diest easily via our online secure payment system. You want to book that helper again? You can! Save that helper to your favorites so you can easily find that helper.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-2 mt-4 pt-2 "> <div class="boder"></div></div>
                     <div class="col-md-5 mt-4 pt-2">
                       <div class="mb-4">
               <h4 class="text-muted mb-5">Professional childminder or nanny</h4>
            </div>
            <div>
               <div class="job-details-desc-item">
                  <div class="float-left mr-3">
                     <img src="assets/images/register.png" alt="" class="mx-auto d-block" height="120">
                  </div>
                  <div>
                     <h5>Register an account</h5>
                     <p class="text-muted mb-5">Sign up for free</p>
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
                        <p class="text-muted mb-5">view the profiles of childminders near you or place an advertisement in such a way that childminders can find you faster.</p>
                     </div>
                  </div>
                  <div class="mt-5">
                     <div class="job-details-desc-item">
                        <div class="float-left mr-3">
                    <img src="assets/images/introduction.png" alt="" class="mx-auto d-block" height="120">
                        </div></div>
                        <div>
                           <h5>Introduction</h5>
                           <p class="text-muted mb-5">have you found a nice childminder that meets your wishes? Send a message to that childminder. Childminder agency Kids2bie will contact you and the childminder and arrange an introductory meeting for you. </p>
                        </div>
                     </div>
                     <div class="mt-5 shift">
                        <div class="job-details-desc-item">
                           <div class="float-left mr-3">
                                <img src="assets/images/childminder.png" alt="" class="mx-auto d-block" height="120">
                           </div></div>
                           <div>
                              <h5>Start childcare</h5>
                              <p class="text-muted mb-5">- Did you get a good impression after the conversation and do you want to continue the care provided by that childminder? Thent  Kids2bie will provide a second call to record all  documentation and the shelter can startsafely.  </p>
                           </div>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
      </div>
   </div>
</section>


       <section class="section"  style="background-color:#efefef;">
        <div class="container">
            <div class="row ">
             
                <div class="col-lg-12 col-md-12 mt-4 mt-sm-0 text-center">
                       <h2 class="heading font-weight-bold pb-3 mt-4">How it works</h2>
                       <p class="text-muted mb-4">Are you looking for work or are you a professional childminder or do you want to become a childminder. 
                       <a href="{{ route('pricing-candidate') }}">Click here</a></p>

                                             </div>
                </div>
            </div>
        </div>
    </section>

   
<section class="section section-deals">
<div class="row over-bg">
        <div class="container">
            <div class="row  justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-2 mt-2 ">
                        <h2 class="heading font-weight-bold pb-3 mt-4">Why choose Ejana</h2>
                      
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mt-4 pt-2 border-custom ">
<div class="row ">
                                                <div class="col-md-12 col-sm-12 col-xs-12 border-custom-bottom ">
                                                    <div class="pt-2 mb-4">
                                                      <img src="assets/images/verified.png" alt="" class="img-icon">
                                                        <h5 class="f-18"><a href="#" class="text-dark">Verified profiles</a></h5>
                                                        <p class="text-muted mb-0">Helpers are verified by means of; confirming email, telephone number and identity certificate. Profiles are checked daily</p> 
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12 mt-3">
                                                   <div class="pt-2 mb-4">
                                                      <img src="assets/images/deal-4.png" alt="" class="img-icon">
                                                        <h5 class="f-18"><a href="#" class="text-dark">Wide range</a></h5>
                                                        <p class="text-muted mb-0">We  offer various services:    babysitter, homework supervisor, animal sitter,  cleaning help, garden help, handyman and computer help  transport, music, home care and we also offer professional childminders and nanny so you will always find  a helper that you need.</p> 
                                                       
                                                    </div>
                                                </div></div>
          
                       
                    
                </div>


                <div class="col-lg-4 col-md-6 mt-4 pt-2">
<div class="row ">
                                                <div class="col-md-12 col-sm-12 col-xs-12 border-custom-bottom mb-4">
                                                     <div class="pt-2 mb-4">
                                                      <img src="assets/images/deal-2.png" alt="" class="img-icon">
                                                      <h5 class="f-18"><a href="#" class="text-dark">Customer service</a></h5>
                                                        <p class="text-muted ">Zowel helpers <br>as helpers can count on the support of<br> Ejana!</p> 
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12 mt-3 ">
                                                     <div class="pt-2 mb-4">
                                                      <img src="assets/images/deal-5.png" alt="" class="img-icon">
                                                        
                                                        <h5 class="f-18"><a href="#" class="text-dark">Active throughout the Netherlands</a></h5>
                                                        <p class="text-muted mb-0">With  20456 active helpers, you can quickly find that helper near you</p> 
                                                    </div>
                                                </div></div>

          
                       
                    
                </div>
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
<div class="row align-items-center">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 border-custom-left border-custom-bottom">
                                                   <div class="pt-2 mb-4">
                                                      <img src="assets/images/deal-3.png" alt="" class="img-icon">
                                                       <h5 class="f-18"><a href="#" class="text-dark">Affordable</a></h5>
                                                        <p class="text-muted mb-0">We only charge helpers  and helpers a small premium fee to use the online platform. Hulpvragers will only pay us if they contact a helper.3</p> 
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12 border-custom-left ">
                                                     <div class="pt-2 mb-4 mt-3">
                                                      <img src="assets/images/deal-6.png" alt="" class="img-icon">
                                                        <h5 class="f-18"><a href="#" class="text-dark">Direct contact</a></h5>
                                                        <p class="text-muted mb-0">all our helpers work with Ejana qualification requirements. This way we can guarantee the quality and safety of the helpers, but you can also book a helper with peace of mind.  </p> 
                                                    </div>
                                                </div></div>



                       
                    
                </div>






                  
         


            </div>
</div>

        </div>
    </section>       



       <section class="section1">
        <div class="">
            <div class="row ">
             
                <div class="col-lg-12 col-md-12 mt-4 mt-sm-0 section-service111 signup-section">
                     <div align="center" class="pt-2">
                                                     <img src="assets/images/signup-icon2.png" alt="" class="img-fluid mx-auto d-block mb-4">
 <h4 class="f-18"><a href="#" class="text-dark">I AM AN EMPLOYER</a></h4>
                                                        <p class="text-muted mb-0">




Did you find a nice helper?  Contact that helper with you <br>get to know each other evenbetter. 

</p> 
    <a href="{{ route('pricing-employer') }}" class="btn btn-1 mt-4"></i>
 SIGN UP AS EMPLOYER</a>

</p> 
                                                    </div>
                </div>
            </div>
        </div>
    </section>
   
  @endsection
