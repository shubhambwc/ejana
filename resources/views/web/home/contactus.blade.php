@extends('web.webLayout.app')

@section('title')
@endsection

@section('content')

<style>
.contact-icon {
    height: 70px;
    width: 70px;
    text-align: center;
    font-size: 34px;
    line-height: 71px;
    border-color: #1cd3c1 !important;
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
}
.text-primary {
    color: #1cd3c1 !important;
}
</style>
    <section class="map-inner-banner mt-6">


  <div class="mapouter "><div class="gmap_canvas "><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2420.4121257687266!2d4.804961315355919!3d52.65253323415182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTLCsDM5JzA5LjEiTiA0wrA0OCcyNS43IkU!5e0!3m2!1sen!2sin!4v1627388983469!5m2!1sen!2sin" width="1600" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div><style>.mapouter{position:relative;text-align:right;width:100%;height:350px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:350px;}.gmap_iframe {height:350px!important;}</style></div>
 <!-- ABOUT US START -->   
    </section>
       
   <section class="section">
    
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  @include('flash::message')
                  <h4 class="heading font-weight-bold ">Get In Touch</h4>
              

                </div>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-5 mt-4 pt-2">

                    <div class="border rounded  p-3">
                        <h3 class="text-dark pb-3">Ejana Contact Info</h3>
                        <p>At Ejana you have access to dozens of candidates, so you will always find a candidate near you! View the profiles that suit you best and contact one of those candidates directly for an introduction. Book that candidate and easily pay for that candidate with our secure online payment system. </p>
   <div class="row align-items-center">
 <div class="col-lg-12">
                    <div class="contact-item mt-40 align-items-center mx-auto d-block">
                        <div class="float-left">
                            <div class="contact-icon d-inline-block border rounded-pill shadow text-primary mt-1 mr-4">
                                <i class="mdi mdi-earth"></i>
                            </div>
                        </div>
                        <div class="contact-details pt-3">
                            <h4 class="text-dark mb-1">Monday to Friday</h4>
                            <p class="mb-0 text-muted"> 09:00 - 12:00</p>
                           
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="contact-item mt-40">
                        <div class="float-left">
                            <div class="contact-icon d-inline-block border rounded-pill shadow text-primary mt-1 mr-4">
                                <i class="mdi mdi-cellphone-iphone"></i>
                            </div>
                        </div>
                        <div class="contact-details pt-3">
                            <h4 class="text-dark mb-1">Call/Whatsapp</h4>
                            <p class="mb-0 text-muted">0638342946 </p>
                         
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="contact-item mt-40">
                        <div class="float-left">
                            <div class="contact-icon d-inline-block border rounded-pill shadow text-primary mt-1 mr-4">
                                <i class="mdi mdi-email"></i>
                            </div>
                        </div>
                        <div class="contact-details pt-3">
                            <h4 class="text-dark mb-1">Email</h4>
                            <p class="mb-0 text-muted">info@ejana.nl</p>
                           
                        </div>
                    </div></div>
                </div>


                      
                        <h6 class="text-muted mt-4 mb-0">Share</h6>
                        <ul class="list-unstyled social-icon mt-3 mb-0">
                            <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-whatsapp"></i></a></li>
                            <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 mt-4 pt-2">

                    <div class="custom-form rounded border p-3">
                     <p class=" text-muted mt-3 mb-3">  Would you rather type out the story? Fill in the contact form below:
Response within 2 working days</p>
                        <div id="message"></div>
                            {{ Form::open(array('route' => 'send-contact-us')) }}
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Name</label>
                                        <input name="name" id="name2" type="text" class="form-control resume" placeholder="Enter Name.." required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Email address</label>
                                        <input name="email" id="email1" type="email" class="form-control resume" placeholder="Enter Email.." required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Phone Number</label>
                                        <input name="phone_no" id="phone_no1" type="number" class="form-control resume" placeholder="Enter number.." required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Subject</label>
                                        <input type="text" class="form-control resume" name="subject" id="subject" placeholder="Subject..">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Message</label>
                                        <textarea name="message" id="comments" rows="5" class="form-control resume" placeholder="Message.."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Send Message">
                                    <div id="simple-msg"></div>
                                </div>
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- CONTACT FORM END -->



     <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  <h4 class="heading font-weight-bold ">Do you have a complaint?</h4>
                  <p class=" text-muted">  Would you rather type out the story? Fill in the complaint form below:
Response within 2 working days</p>
<p class=" text-muted">At Ejana you have access to dozens of candidates, so you will always find a candidate near you! View the profiles that suit you best and contact one of those candidates directly for an introduction. Book that candidate and easily pay for that candidate with our secure online payment system.</p>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-7 mt-4 pt-2">
                    <div class="custom-form rounded border p-4">
                        <div id="message"></div>
                        {{ Form::open(array('route' => 'send-complaint-us')) }}
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Name</label>
                                        <input name="name" id="name2" type="text" class="form-control resume" placeholder="Enter Name..">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Email address</label>
                                        <input name="email" id="email1" type="email" class="form-control resume" placeholder="Enter Email..">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Phone Number</label>
                                        <input name="phone_no" id="email1" type="number" class="form-control resume" placeholder="Enter number..">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Address</label>
                                        <input type="text" class="form-control resume" name="address" id="address" placeholder="Address..">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Clear description of the complaint</label>
                                        <textarea name="complaint" id="complaint" rows="5" class="form-control resume" placeholder="Complaint.."></textarea>
                                    </div>
                                </div>
                                     <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label class="text-muted">The name of the candidate or the customer or and/or holder of Ejana against whom the complaint is directed </label>
                                        <input name="candidate_customer" id="candidate_customer" type="text" class="form-control resume" placeholder="Name of the candidate or the customer..">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label class="text-muted">The reason why are you submitted complaint</label>
                                        <textarea name="complaint_reason" id="complaint_reason" rows="5" class="form-control resume" placeholder="Complaint Reason.."></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label class="text-muted">When the complaint arose</label>
                                        <input type="text" class="form-control resume" name="complaint_arose" id="complaint_arose" placeholder="Complaint arose..">
                                    </div>
                                </div>
                                 <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label class="text-muted">The circumstances and or/ reason for the complaint</label>
                                        <textarea name="circumstances" id="circumstances" rows="5" class="form-control resume" placeholder="Circumstances.."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Submit Complaint">
                                    <div id="simple-msg"></div>
                                </div>
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>

                
            </div>
        </div>
    </section>
  
    
  @endsection
