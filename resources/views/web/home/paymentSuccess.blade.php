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

            
        </div>
    </section>
    <!-- CONTACT FORM END -->



     
  
    
  @endsection
