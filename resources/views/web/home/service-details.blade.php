@extends('web.webLayout.app')

@section('title')
@endsection

@section('content')
<style>
.ben-list p{
margin:0px;
}
.ben-list li::before,
.ben-list p::before {
    content: "\F134";
    font: normal normal normal 18px/1 "Material Design Icons";
    margin-right: 10px;
}
</style>
   
  <section class="service-inner-banner">
    
      <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class=" text-white inner-title">
                        <h5 class="text-uppercase title text ">{{count($detail->jobs)}} {{$detail->name}} available </h5>
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="  inner-title">
                       <img src="{{ $detail->banner }}" alt="" class="img-fluid mx-auto d-block right">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section">
        <div class="container">
      
             <div class="row  mt-4 mb-3">

             
                <div class="col-md-12 ">
                    <h4 class="heading font-weight-bold ">{{$detail->name}}</h4>
                    <p class="text-muted ">{!! $detail->description !!} </p>
                 </div>
                  <div class="col-md-1 "></div>
                   <div class="col-md-11 mt-4">
                   	<h5 class="heading font-weight-bold ">Benefits of {{$detail->name}}</h5>
						<div class="ben-list">
							{!! $detail->benifits !!}
					   </div>
                </div>
           
       </div>
               
       </div>
        </div>
    </section>
<!--  -->
<?php if($requestor) { ?>
 <section class="section">
        <div class="container">
            <h4 class="heading font-weight-bold text-center">Job Locations</h4>
<div class="row">
   <!--  <h4 class="heading font-weight-bold ">Job Locations</h4> -->

        <div class="content" style="flex-wrap: inherit;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d28451.843761079563!2d75.77272319999999!3d26.95168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1646043270714!5m2!1sen!2sin" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        

  </div>





</div>
</div>
    </section>
<?php } ?>
    <!--  -->


<!--  -->
 <section class="section">
        <div class="container">
<div class="row">

        <div class="content" style="flex-wrap: inherit;">
        <?php if($requestor) { foreach($requestor as $requestors){
            ?>
             <div class="card">

            <div class="icon"> <img src="https://www.ejana.nl/assets/img/employer-image.png" alt="" class="img-fluid mx-auto d-block"></div>
            <p class="title"> <h5 class="f-18 text-center"><a href="#" class="text-dark">{{ $requestors['user']['first_name'] }} {{ $requestors['user']['last_name'] }} </a></h5></p>
            <p class="text"><span class="txt"></span><br>{{ $requestors['user']['email'] }}<br><a href="{{ route('front.company.details',$requestors['id']) }}">View Profile</a> </p>
            <p></p>


            </div>
      <?php  } }?>

  </div>





</div>
</div>
    </section>
    <!--  -->

  <section class="section section-works">
        <div class="container">
            <div class="row align-items-center"">
                <div class="col-lg-3 col-md-12 mt-4 pt-2">
					<h5 class="text-white"> <strong>Choices from helpers<br>
                     <span style="color:#1bd3c0;">21056</span> helpers across<br>the Country</strong></h5>
			   </div>
			   
				<div class="col-lg-3 col-md-6 mt-4 pt-2 line">
					<h5 class="text-white"> <strong>Experienced and <br>Screened Candidates</strong></h5>
               </div>
               
               <div class="col-lg-3 col-md-6 mt-4 pt-2 line">
					<h5 class="text-white"> <strong>A variety of  <br>different services</strong></h5>
			   </div>
			   
                <div class="col-lg-3 col-md-6 mt-4 pt-2 line">
					<h5 class="text-white"> <strong>Personal Customer <br>Service </strong></h5>
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
                        <h2 class="heading font-weight-bold">HOW DOES IT WORKS</h2>
                    </div>
                </div>
            </div>
                 <div class="row mb-4 pb-5">
           			 <div class="col-lg-4 col-md-4 mt-4 pt-2">
				<div class="row align-items-center">
                    <div class="col-md-12 col-sm-8 col-xs-12 align-items-center">
                         <div align="center" class="pt-2">
                            <img src="{{ secure_asset('assets/images/search-icon.png') }}" alt="" class="img-fluid mx-auto d-block mb-4">
							<h4 class="f-18"><a href="#" class="text-dark">Find <br>your candidate</a></h4>
                            <p class="text-muted mb-0">Read detailed profiles and reviews And find the best helper  near you for babysitter, childminder, homework supervisor, pet sitter or cleaning and garden help.</p> 
                         </div>
                   </div>
               </div>
           </div>
           			 <div class="col-lg-4 col-md-4 mt-4 pt-2">
				<div class="row align-items-center">  
					<div class="col-md-12 col-sm-8 col-xs-12 align-items-center">
                         <div align="center" class="pt-2">
                             <img src="{{ secure_asset('assets/images/candidate.png') }}" alt="" class="img-fluid mx-auto d-block mb-4">
							 <h4 class="f-18"><a href="#" class="text-dark">Get acquainted with your<br> candidate</a></h4>
                             <p class="text-muted mb-0">Did you find a nice helper?  Contact that  helperwitho you get to know each other evenbetter. Got excited? Book that helper!  Helpers don't pay us until they contacthimand a  helper.</p> 
                         </div>
                    </div>
                </div>
           </div>
            		 <div class="col-lg-4 col-md-4 mt-4 pt-2">
				<div class="row align-items-center">  
					<div class="col-md-12 col-sm-8 col-xs-12 align-items-center">
                         <div align="center" class="pt-2">
                             <img src="{{ secure_asset('assets/images/booking.png') }}" alt="" class="img-fluid mx-auto d-block mb-4">
							 <h4 class="f-18"><a href="#" class="text-dark">Book and pay that<br> candidate </a></h4>
                             <p class="text-muted mb-0">Book your favorite  helper, once, flexibly or for fixed.   Pay that  helper easily after  a service via our secure online payment system.</p> 
                         </div>
                    </div>
                </div>
           </div>
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
                                <p class="text-muted mb-0">Did you find a nice helper?  Contact that helper with you <br>get to know each other evenbetter.</p> 
    							<a href="{{ route('pricing-employer') }}" class="btn btn-1 mt-4"></i> SIGN UP AS EMPLOYER</a>
    							</p>
    				</div>
                </div>
            </div>
        </div>
    </section>
                
                
    
@endsection
