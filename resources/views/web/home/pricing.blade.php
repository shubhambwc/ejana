@extends('web.webLayout.app')

@section('title')
@endsection

@section('content')

   <section class="inner-banner">
    
      <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white inner-title">
                        <h3 class="text-uppercase title mb-4">MEMBERSHIP</h3>
                       <a href="/" class="text-uppercase font-weight-bold">Home</a> > <span class="text-uppercase text-white font-weight-bold">Membership</span>
                      
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h2 class="heading font-weight-bold pb-5 text-center">CHOOSE YOUR MEMBERSHIP PROFILE</h2>
                        

            <p class="text-muted text-center ">Each helper determines their own hourly rate. They are given advice so that they know what is real to ask. As a helper, you can see the hourly rate per helper, so that you will never be faced with surprises. This way you can choose the helper that best suits your needs!
Choose your membership below
helpers can create an account and search for helpers for free. To get in touch with a helper, helpers need to upgrade their account to a premium account. The monthly subscription allows requesters to send messages and requests.
</p>
</div>
            </div>

            <div class="row mt-5">
                <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0 ">
                    <div class="pricing-box border rounded pt-4  ">
                        <div align="center" class="pt-2">
                             <img src="assets/images/signup-icon1.png" alt="" class="img-fluid mx-auto d-block mb-4">
 							 <h4 class="f-18"><a href="{{ route('pricing-employer') }}" class="text-dark">I AM AN EMPLOYER</a></h4>
                             <p class="text-muted mb-0">Did you find a nice helper?  Contact that helper with you <br>get to know each other evenbetter.</p> 
    						 {{ Form::open(array('route' => 'choose-service')) }}
                            <input type="hidden"  name="user_type" value="requestor">
                            <button class="btn btn-1 mt-4 mb-4" type="submit">SIGN UP AS EMPLOYER</button>
                            {{ Form::close() }}  
    						 
                         </div>
                    </div>
                </div>

                <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="pricing-box border rounded pt-4">
                       <div align="center" class="pt-2">
                          <img src="assets/images/signup-icon2.png" alt="" class="img-fluid mx-auto d-block mb-4">
 						  <h4 class="f-18"><a href="{{ route('pricing-candidate') }}" class="text-dark">I AM AN CANDIDATE</a></h4>
                          <p class="text-muted mb-0">Did you find a nice helper?  Contact that helper with you <br>get to know each other evenbetter.</p> 
   						   {{ Form::open(array('route' => 'choose-service')) }}
                            <input type="hidden"  name="user_type" value="helper">
                            <button class="btn btn-1 mt-4 mb-4" type="submit">SIGN UP AS CANDIDATE</button>
                            {{ Form::close() }}  
   						 </div>
                   </div>
				</div>
               
            </div>
        </div>
    </section> 
@endsection
