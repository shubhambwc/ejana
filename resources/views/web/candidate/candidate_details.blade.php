@extends('web.layouts.app')
@section('title')
    {{ __('messages.candidate.candidate_details') }}
@endsection
@section('content')
<style type="text/css">
    
/********************
  CANDIDATES PROFILE
*********************/
.candidates-profile-education {
  padding: 24px 24px 24px;
}
.candidates-profile-education1 {
  padding: 24px 16px 24px;
}
.candidates-profile-education .profile-education-icon {
  position: absolute;
  width: 90px;
  height: 90px;
  line-height: 90px;
  top: 0;
  left: 0;
  right: 0;
  margin: 0 auto;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}

/********************
  CANDIDATES RESUME
*********************/
.resume-user {
  width: 90px;
  height: 90px;
  line-height: 110px;
  top: 0;
  left: 0;
  right: 0;
  margin: 0 auto;
}

@media (max-width: 425px) {
  .fav-icon {
    position: absolute;
    left: 0;
    right: 200px;
  }
}

.employers-list {
  -webkit-transition: all 0.2s ease;
  transition: all 0.2s ease;
}

.employers-list .name:hover {
  color: #1d4361 !important;
}

.employers-list .fav-collection {
  position: absolute;
  top: 15px;
  right: 15px;
  opacity: 0;
}

.employers-list:hover {
  -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.15);
          box-shadow: 0 0 3px rgba(0, 0, 0, 0.15);
  -webkit-transform: scale(1.02);
          transform: scale(1.02);
}

.employers-list:hover .fav-collection {
  opacity: 1;
}

.blog {
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.blog .overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  opacity: 0;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.blog .content h4 {
  line-height: 1.2;
}

.blog .content .title {
  font-size: 20px;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.blog .content .title:hover {
  color: #1d4361 !important;
}

.blog .content .readmore:hover {
  color: #1d4361 !important;
}

.blog .author {
  position: absolute;
  top: 5%;
  left: 5%;
  z-index: 1;
  opacity: 0;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.blog .likes {
  position: absolute;
  bottom: 5%;
  right: 5%;
  z-index: 1;
  opacity: 0;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.blog:hover {
  -webkit-transform: translateY(-10px);
          transform: translateY(-10px);
}

.blog:hover .overlay {
  opacity: 0.6;
}

.blog:hover .author {
  opacity: 1;
}

.blog:hover .author .user:hover {
  color: #d8dff7 !important;
}

.blog:hover .likes {
  opacity: 1;
}

.blog:hover .likes .like:hover {
  color: #e43f52 !important;
}

.blog:hover .likes .comments:hover {
  color: #2eca8b !important;
}

.sidebar .widget .widget-search form {
  position: relative;
}

.sidebar .widget .widget-search input[type="text"], .sidebar .widget .searchform input[type="text"] {
  -webkit-box-shadow: none;
          box-shadow: none;
  padding: 12px 15px;
  height: 45px;
  font-size: 14px;
  display: block;
  width: 100%;
  outline: none !important;
  padding-right: 45px;
}

.sidebar .widget .widget-search input[type="submit"], .sidebar .widget .searchform input[type="submit"] {
  position: absolute;
  top: 5px;
  right: 10px;
  opacity: 0;
  width: 40px;
  height: 40px;
}

.sidebar .widget .widget-search .searchform:after {
  content: "\F349";
  position: absolute;
  font-family: "Material Design Icons";
  right: 16px;
  top: 15px;
  font-size: 20px;
  line-height: 20px;
  pointer-events: none;
}

.sidebar .widget .widget-title {
  font-size: 18px;
}

.sidebar .widget .catagories li {
  padding-bottom: 10px;
}

.sidebar .widget .catagories li:last-child {
  padding-bottom: 0;
}

.sidebar .widget .catagories li a, .sidebar .widget .catagories li span {
  font-size: 15px;
}

.sidebar .widget .catagories li a {
  color: #3c4858;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.sidebar .widget .catagories li a:hover {
  color: #1d4361;
}

.sidebar .widget .post-recent {
  padding-bottom: 15px;
}

.sidebar .widget .post-recent:last-child {
  padding-bottom: 0;
}

.sidebar .widget .post-recent .post-recent-thumb {
  width: 25%;
}

.sidebar .widget .post-recent .post-recent-content {
  width: 75%;
  padding-left: 10px;
}

.sidebar .widget .post-recent .post-recent-content a {
  display: block;
  color: #3c4858;
  font-size: 15px;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.sidebar .widget .post-recent .post-recent-content a:hover {
  color: #1d4361;
}

.sidebar .widget .post-recent .post-recent-content span {
  font-size: 13px;
}

.sidebar .widget .tagcloud > a {
  background: #e9ecef;
  color: #3c4858;
  display: inline-block;
  font-size: 9px;
  letter-spacing: 1px;
  margin: 5px 10px 5px 0;
  padding: 8px 12px;
  text-transform: uppercase;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.sidebar .widget .tagcloud > a:hover {
  background: #1d4361;
  color: #ffffff;
}
</style>
    <!-- ===== Start of Candidate Profile Header Section ===== -->
    <section class="profile-header">
    </section>

    <section class="inner-banner">
    
      <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white inner-title">
                        <h3 class="text-uppercase title mb-4">Candidate profile</h3>
                       <a href="index.html" class="text-uppercase font-weight-bold">Home</a> > <span class="text-uppercase text-white font-weight-bold">Candidate profile</span>
                      
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
       
  
  <!-- CANDIDATES PROFILE START -->
    <section class="section">
        <div class="container">
           
            <div class="row">
    <div class="col-lg-6 mt-3">
                  <div>
               <div class="job-details-desc-item">
                  <div class="float-left mr-3">
                     <img src="images/child.png" alt="" class="mx-auto d-block" height="160">
                  </div>
                  <div class="">
                     <h3>Lela B
    
</h3>
                      <div class="text-muted">ID 2546</div>
     <div class="text-muted"><span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span></div>
     <div class="text-muted">Tarif­f</div>
 <div class="text-muted">   Distance: Rotterdam 3.20 kilometre away from your address</div>
     <div class="text-muted">Post date:  20-09-2021</div>
                  </div>
               </div>
            </div>
                </div>
                  <div class="col-lg-3 mt-3">
                  <div>
               <div class="job-details-desc-item">
                 <div class="float-left mr-3">
                            <i class="mdi mdi-checkbox-marked-circle-outline text-muted f-16"></i>
                        </div>
                        <p class="text-muted f-14 mb-1"> ID Verified</p>
                   

<div class="float-left mr-3">
                            <i class="mdi mdi-checkbox-marked-circle-outline text-muted f-16"></i>
                        </div>
                        <p class="text-muted f-14 mb-1"> Telephone Number verified</p>
<div class="float-left mr-3">
                            <i class="mdi mdi-checkbox-marked-circle-outline text-muted f-16"></i>
                        </div>
                        <p class="text-muted f-14 mb-1">    Email verified</p>
                        <div class="float-left mr-3">
                            <i class="mdi mdi-checkbox-marked-circle-outline text-muted f-16"></i>
                        </div>
                        <p class="text-muted f-14 mb-1"> additional screening</p>
                        <div class="float-left mr-3">
                            <i class="mdi mdi-checkbox-marked-circle-outline text-muted f-16"></i>
                        </div>
                        <p class="text-muted f-14 mb-1"> EHBO Certificate</p>

<div class="float-left mr-3">
                            <i class="mdi mdi-checkbox-marked-circle-outline text-muted f-16"></i>
                        </div>
                        <p class="text-muted f-14 mb-1">    Statement of Conduct</p>
                        <div class="float-left mr-3">
                            <i class="mdi mdi-checkbox-marked-circle-outline text-muted f-16"></i>
                        </div>
                        <p class="text-muted f-14 mb-1">    Online course completed</p>
                        <div class="float-left mr-3">
                            <i class="mdi mdi-checkbox-marked-circle-outline text-muted f-16"></i>
                        </div>
                        <p class="text-muted f-14 mb-1"> ELiability Insurance</p>


        
       
        
        
        
    
        
                 
               </div>
            </div>
                </div>
     
       <div class="col-lg-3 border-blue text-center">
                  <div>
               <div class="job-details-desc-item">
            
                  <div class="">
                     <h5>Contact Lela
    
</h5> <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-2" style="background-color:#1cd3c1;">
                <a href="#" class="btn "><i class="fas fa-comment-alt" aria-hidden="true"></i></i>
&nbsp;Send a comment</a></div>
 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-4" style="background-color:#1cd3c1;">
                <a href="#" class="btn "><i class="fa fa-heart" aria-hidden="true"></i>
&nbsp;Save to favourites</a></div>
    
 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#efefef;">
                <a href="#" class="btn "><i class="fas fa-ban" aria-hidden="true"></i>
&nbsp;Report this profile</a></div>


    
    
                  </div>
               </div>
            </div>
                </div>
     </div>
     
</div>
               
       

            

            <div class="row mt-5" style="background-color:#efefef; padding: 30px;">
                <div class="container">
                <div class="col-lg-12 " >
               <h5 class="">About Helper</h5>
                        <p class="text-muted">Aliquam erat volutpat Etiam vitae tortor Morbi vestibulum volutpat enim Aliquam nunc Nunc sed turpis sed mollis eros et ultrices tempus mauris ipsum aliquam libero non adipiscing dolor urna a orci Nulla porta dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra inceptos hymenaeos pellentesque dapibus hendrerit tortor Praesent egestas tristique nibh sed a libero cras us varius donec vitae orci sed dolor rutrum auctor fusce egestas elit eget lorem.</p>
                </div>
            </div></div>
  <div class="row" style="background-color:#1bd3c0; padding: 30px;">
      <div class="container">
        <div class="row white">
                <div class="col-lg-4 mt-2 mb-2">
               <h5 class="">Details</h5>
                        <div class="white"><strong>Name:</strong> Lela B</div>
<div class="white"><strong>Age:</strong> 35 Years</div>
<div class= "white"><strong>Gender:</strong> Female</div>
<div class="white"><strong>Place of residence:</strong> Rotterdam</div>
<div class="white"><strong>Languages:</strong> English, Dutch</div>
                </div>
                <div class="col-lg-4 mt-2 mb-2">
               <h5 class="">Information</h5>
                        <div class="white"><strong>Number of
bookings:</strong> 407</div>
<div class="white"><strong>Post date:</strong> 21-02-2021</div>
<div class="white"><strong>Laste online:</strong> 1 minute ago</div>
<div class="white"><strong>Objection to pets:</strong>no</div>
<div class="white"><strong>Mode of transport:</strong> car, bicycle</div>
                </div>





 
 
                <div class="col-lg-4 mt-2 mb-2">
                  <h5 class="">Also works as</h5>
                        <div class="white"><strong>Babysitter, Cleaning help, Tutoring, <br>DIY help, Music, pet sitting, </br>seniors help, Computer, Transport  </strong></div>




</strong></div>

                </div>
                </div>
            </div></div>
            <div class="row">
              <div class="container">
                <div class="col-lg-12 col-md-12 pt-5">
                    <div class="border rounded candidates-profile-education  text-muted">
                        
<div class="container">
         <h4 class="mb-4">Specification for Babysitter</h4>  
  <table class="table table-hover">
 
    <tbody>
      <tr>
        <td><strong>Babysitter type :</strong></td>
        <td>Babysitter</td>
      
      </tr>
      <tr>
        <td><strong>Preferred babysitting location:</strong></td>
        <td>At home with family</td>
       
      </tr>
      <tr>
        <td><strong>Experience:</strong></td>
        <td>6 years</td>
       
      </tr>
        <tr>
        <td><strong>Can babysit for ages  :</strong></td>
        <td>Infant (0-1 years), Toddler (1-4 years), Toddler (4-6 years), Schoolchild (6-12 years), Adolescent (12+ years)</td>
      
      </tr>
      <tr>
        <td><strong>Smoke :</strong></td>
        <td>NO</td>
       
      </tr>
      <tr>
        <td><strong>Has children of her own :</strong></td>
        <td>NO</td>
       
      </tr>
       <tr>
        <td><strong>Are you competent and competent
for extra care :</strong></td>
        <td>Children with a disability, Children with a medical indication/care</td>
       
      </tr>
        <tr>
        <td><strong>Can babysit for ages  :</strong></td>
        <td>Infant (0-1 years), Toddler (1-4 years), Toddler (4-6 years), Schoolchild (6-12 years), Adolescent (12+ years)</td>
      
      </tr>
      <tr>
        <td><strong>I can too :</strong></td>
        <td>Planning activities, Crafts, Cooking, Housework, Helping with homework,
Reading, organizing parties, dressing up- Sinterklaas day-Easter day</td>
       
      </tr>
     
    </tbody>
  </table>
</div>







                     
                   </div>

                
  <div class="row">
              <div class="container">
                <div class="row">
                <div class="col-lg-8 col-md-8  pt-5">
                    <div class="border rounded candidates-profile-education1  text-muted">
                        

         <h4 class="mb-4">Check Availabilty</h4>  
         <div class="table-responsive">
  <table class="table table-hover">
 <thead>
      <tr>
      <th></th>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thursday</th>
        <th>Friday</th>
        <th>Saturday</th>
         <th>Sunday</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><strong>Morning</strong></td>
        <td><i class="fa fa-check" aria-hidden="true"></i>
</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
      
      </tr>
      <tr>
        <td><strong>Afternoon
</strong></td>
        <td><i class="fa fa-check" aria-hidden="true"></i></td>
       <td></td>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
<td></td>
<td></td>
<td></td>
<td></td>
       
      </tr>
      <tr>
        <td><strong>Evening
</strong></td>
        <td></td>
       <td></td>
<td></td>
<td></td>
<td></td>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
<td></td>
      </tr>
        <tr>
        <td><strong>Night</strong></td>
        <td></td>
      <td></td>
<td></td>
<td></td>
<td></td>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
<td></td>
      </tr>
       
     
    </tbody>
  

     
  </table></div><br>
        <h6><strong>Available for:</strong></h6>
        <p>night work, Emergencies, Speed, School holidays, Occasionally, After school, Full time, flexible, Holidays</p>



          <div class="mapouter "><div class="gmap_canvas "><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2420.4121257687266!2d4.804961315355919!3d52.65253323415182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTLCsDM5JzA5LjEiTiA0wrA0OCcyNS43IkU!5e0!3m2!1sen!2sin!4v1627388983469!5m2!1sen!2sin" width="1600" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div><style>.mapouter{position:relative;text-align:right;width:100%;height:350px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:auto;}.gmap_iframe {height:auto!important;}</style></div>


</div>







                     
                   </div>


     <div class="col-lg-4 col-md-4  pt-5">

                    <div class="border rounded candidates-profile-education1  text-muted">
                     <div>   <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>&nbsp; 5.0/5<br>
15/07/2021
<h5 class="mt-2">Stevan</h5>
<p>Aliquam erat volutpat Etiam vitae tortor Morbi vestibulum volutpat enim Aliquam nunc Nunc sed turpis sed mollis eros et ultrices tempus mauris ipsum aliquam </p>
<hr>
</div>
   <div class="mt-3">   <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>&nbsp; 5.0/5<br>
15/07/2021
<h5 class="mt-2">Stevan</h5>
<p>Aliquam erat volutpat Etiam vitae tortor Morbi vestibulum volutpat enim Aliquam nunc Nunc sed turpis sed mollis eros et ultrices tempus mauris ipsum aliquam </p>
<hr>
</div>
      <div class="mt-3">  <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>&nbsp; 5.0/5<br>
15/07/2021
<h5 class="mt-2">Stevan</h5>
<p>Aliquam erat volutpat Etiam vitae tortor Morbi vestibulum volutpat enim Aliquam nunc Nunc sed turpis sed mollis eros et ultrices tempus mauris ipsum aliquam </p>

</div>

</div>







                     
                   </div>



                   </div></div></div>






           
    </section>
    <!-- CANDIDATES PROFILE END -->
    <section class="pb80 work-education bg-gray" id="candidate-profile">
        <div class="container">
            <div class="row candidate-profile">

                <div class="col-md-3 col-xs-12">
                    <div class="profile-photo ticket-sender-picture">
                        <img src="{{ $candidateDetails->user->avatar }}" class="img-responsive" alt="">
                    </div>

                    <ul class="social-btns list-inline text-center mt20">

                        @if(! empty($candidateDetails->user->facebook_url))
                            <li>
                                <a href="{{ (isset($candidateDetails->user->facebook_url)) ? $candidateDetails->user->facebook_url : 'javascript:void(0)' }}"
                                   class="social-btn-roll facebook transparent" target="_blank">
                                    <div class="social-btn-roll-icons">
                                        <i class="social-btn-roll-icon fa fa-facebook"></i>
                                        <i class="social-btn-roll-icon fa fa-facebook"></i>
                                    </div>
                                </a>
                            </li>
                        @endif
                        @if(! empty($candidateDetails->user->twitter_url))
                            <li>
                                <a href="{{ (isset($candidateDetails->user->twitter_url)) ? $candidateDetails->user->twitter_url : 'javascript:void(0)' }}"
                                   class="social-btn-roll twitter transparent" target="_blank">
                                    <div class="social-btn-roll-icons">
                                        <i class="social-btn-roll-icon fa fa-twitter"></i>
                                        <i class="social-btn-roll-icon fa fa-twitter"></i>
                                    </div>
                                </a>
                            </li>
                        @endif
                        @if(! empty($candidateDetails->user->google_plus_url))
                            <li>
                                <a href="{{ (isset($candidateDetails->user->google_plus_url)) ? $candidateDetails->user->google_plus_url : 'javascript:void(0)' }}"
                                   class="social-btn-roll google-plus transparent" target="_blank">
                                    <div class="social-btn-roll-icons">
                                        <i class="social-btn-roll-icon fa fa-google-plus"></i>
                                        <i class="social-btn-roll-icon fa fa-google-plus"></i>
                                    </div>
                                </a>
                            </li>
                        @endif
                        @if(! empty($candidateDetails->user->pinterest_url))
                            <li>
                                <a href="{{ (isset($candidateDetails->user->pinterest_url)) ? $candidateDetails->user->pinterest_url : 'javascript:void(0)' }}"
                                   class="social-btn-roll pinterest transparent" target="_blank">
                                    <div class="social-btn-roll-icons">
                                        <i class="social-btn-roll-icon fa fa-pinterest"></i>
                                        <i class="social-btn-roll-icon fa fa-pinterest"></i>
                                    </div>
                                </a>
                            </li>
                        @endif
                        @if(! empty($candidateDetails->user->linkedin_url))
                            <li>
                                <a href="{{ (isset($candidateDetails->user->linkedin_url)) ? $candidateDetails->user->linkedin_url : 'javascript:void(0)' }}"
                                   class="social-btn-roll linkedin transparent" target="_blank">
                                    <div class="social-btn-roll-icons">
                                        <i class="social-btn-roll-icon fa fa-linkedin"></i>
                                        <i class="social-btn-roll-icon fa fa-linkedin"></i>
                                    </div>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>


                <div class="col-md-9 col-xs-12">
                    <div class="profile-descr">

                        <div class="profile-title">
                            <h2 class="capitalize">{{ html_entity_decode($candidateDetails->user->full_name) }}</h2>
                            <h5 class="pt10">{{ $candidateDetails->functionalArea->name ?? ''  }}</h5>
                        </div>
                        <div class="row">
                            @if(!empty($candidateDetails->user->country_name))
                                <div class="col-lg-4 mb10">
                                    <i class="fa fa-map-marker"></i>

                                    <span>{{ $candidateDetails->user->country_name }}
                                        @if(!empty($candidateDetails->user->state_name))
                                            , {{ $candidateDetails->user->state_name }}
                                        @endif
                                        @if(!empty($candidateDetails->user->city_name))
                                            , {{ $candidateDetails->user->city_name }}</span>
                                    @endif
                                </div>
                            @endif
                            <div class="col-lg-4 mb10">
                                <i class="fa fa-envelope"></i>
                                <span>{{ $candidateDetails->user->email }}</span>
                            </div>
                            @if(!empty($candidateDetails->user->dob))
                                <div class="col-lg-4 mb10">
                                    <i class="fa fa-birthday-cake"></i>
                                    <span>
                                        {{ date('jS M, Y', strtotime($candidateDetails->user->dob)) }}
                                </span>
                                </div>
                            @endif
                            @if(isset($candidateDetails->user->phone))
                                <div class="col-lg-4">
                                    <i class="fa fa-phone"></i>
                                    <span>{{ $candidateDetails->user->phone }}</span>
                                </div>
                            @endif
                        </div>
                        @auth
                            @role('Employer')
                            <div class="row">
                                <div class="col-md-offset-12 ml-0 col-md-6 reportJobBtn">
                                    <div class="company-report-web company-web clearfix">
                                        <button
                                                class="mt15 btn btn-small btn-red btn-effect reportToCompany reportToCandidate {{ ($isReportedToCandidate) ? 'disabled' : '' }}"
                                                data-toggle="modal"
                                                data-target="#reportToCandiateModal">
                                            {{ __('messages.candidate.reporte_to_candidate') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @endrole
                        @endauth
                    </div>
                </div>

            </div>

            <div class="job-header mt30 box-shadow">
                <div class="contentbox">
                    <h3>{{ __('messages.skills') }}</h3>
                    <div class="row skillbar">
                        @if($candidateDetails->user->candidateSkill->count())
                            @foreach($candidateDetails->user->candidateSkill as $candidateSkill)
                                <div class="col-md-6 col-xs-12 mt20">
                                    <div class="skillbar-title mr-xy-auto one-line-truncate">
                                        <span>{{ html_entity_decode($candidateSkill->name) }}</span>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h4 class="text-center">{{ __('messages.skill.no_skill_available') }}</h4>
                        @endif
                    </div>
                </div>
            </div>

            <div class="job-header mt30 box-shadow">
                <div class="contentbox">
                    <h3>{{ __('messages.candidate_profile.education') }}</h3>
                    <ul class="educationList">
                        @forelse($candidateEducations as $candidateEducation)
                            <li>
                                <div class="date educationCard">{{ $candidateEducation->year }}</div>
                                <div class="education-card">
                                    <h4>{{$candidateEducation->degreeLevel->name}}</h4>
                                    @if(!empty($candidateEducation->country_name))
                                        <label class="text-muted">
                                            <i class="fa fa-map-marker"></i> {{ $candidateEducation->country_name }}
                                        </label>
                                    @endif
                                    <div class="row">
                                        <div class="col-md-4">
                                    <span class="text-muted font-weight-bolder">
                                            {{ __('messages.candidate_profile.institute').' : '.$candidateEducation->institute}}
                                    </span>
                                        </div>
                                        <div class="col-md-4">
                                    <span class="text-muted font-weight-bolder">
                                        {{ __('messages.candidate_profile.result').' : '.$candidateEducation->result}}
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @empty
                            <h4 class="text-center">{{ __('messages.candidate.education_not_found') }}</h4>
                        @endforelse
                    </ul>
                </div>
            </div>

            <div class="job-header mt30 box-shadow">
                <div class="contentbox">
                    <h3>{{ __('messages.candidate.experience') }}</h3>
                    <ul class="experienceList">
                        @forelse($candidateExperiences as $candidateExperience)
                            <li>
                                <div class="date">
                                    {{ \Carbon\Carbon::parse($candidateExperience->start_date)->format('Y') }}
                                    <br>-<br>
                                    {{($candidateExperience->currently_working) ? 'present' : \Carbon\Carbon::parse($candidateExperience->end_date)->format('Y') }}
                                </div>
                                <div class="row">
                                    <div class="col-md-10">
                                        <h4>{{$candidateExperience->company}}</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                @if(!empty($candidateExperience->country_name))
                                                    <label class="text-muted">
                                                        <i class="fa fa-map-marker"></i>
                                                        {{ $candidateExperience->country_name }}
                                                    </label>
                                                @endif
                                            </div>
                                        </div>
                                        @if(!empty($candidateExperience->description))
                                            <p class="text-muted"
                                               data-toggle="tooltip">{!! nl2br($candidateExperience->description) !!}</p>
                                        @endif
                                    </div>
                                </div>
                            </li>
                        @empty
                            <h4 class="text-center">{{ __('messages.candidate.experience_not_found') }}</h4>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @role('Employer')
    @include('web.candidate.report_to_candidate_modal')
    @endrole

@endsection
@section('scripts')
    <script>
        let reportToCandidateUrl = "{{ route('report.to.candidate') }}";
    </script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ mix('assets/js/candidate/front/candidate-details.js') }}"></script>
@endsection

