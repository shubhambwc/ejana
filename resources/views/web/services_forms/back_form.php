

@extends('web.webLayout.app')

@section('title')
@endsection

@section('content')
<!-- <script type="text/javascript">
                    
            function openCity(evt, cityName, id=false) {
              var i, tabcontent, tablinks;
              tabcontent = document.getElementsByClassName("tabcontent");

              for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
              }
              tablinks = document.getElementsByClassName("tablinks");

              for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
              }
              document.getElementById(cityName).style.display = "block";
              console.log(id);
              
              evt.currentTarget.className+= " active";
              document.getElementById(cityName).style.background-color = "#1d4361"

              if(id != false){
                document.getElementById(id).className+= " active";

              }
            }
    </script> -->






<body>
  <!-- Navigation Bar-->
    <header id="topnav" class="defaultscroll scroll-active">
        

        <!-- Menu Start -->
        <div class="container">
            <!-- Logo container-->
            <div>
                <a href="index.html" class="logo">
                    <img src="images/logo-dark.png" alt="" class="logo-light" height="50" />
                    <img src="images/logo-dark.png" alt="" class="logo-dark" height="50" />
                </a>
            </div>                 
           <div class="buy-button">
                <a href="signup.html" class="btn btn-primary btn-top"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp; 
 Sign Up</a>
                <a href="login.html" class="btn  btn-1 btn-top"><i class="fa fa-user" aria-hidden="true"></i>&nbsp; Log in</a>
                  <!--<div class="float-right">
                    <ul class="topbar-list list-unstyled d-flex" style="margin: 15px 5px;">
                        
                        <li class="list-inline-item">
                            <select id="select-lang" class="demo-default">
                                <option value="">EN</option>
                                <option value="4">English</option>
                                <option value="1">Spanish</option>
                                <option value="3">French</option>
                                <option value="5">Hindi</option>
                            </select>
                        </li>
                    </ul>-->
                </div>
            </div><!--end login button-->
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>
    
          <div id="navigation">
                <!-- Navigation Menu-->   
                <ul class="navigation-menu">
                   
                      <li>
                        <a href="service.html">Our Services</a>
                       
                    </li>
    
                    <li>
                        <a href="howitworks.html">How does it works</a>
                    
                    </li>
                    <li>
                        <a href="about.html">About Ejana</a>
                    </li>
                     <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
                </ul><!--end navigation menu-->
            </div><!--end navigation-->
        </div><!--end container-->



     


        <!--end end-->
    </header><!--end header-->
    <!-- Navbar End -->
   <div class="row button-bg">
            <div class="buy-button-mobile">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background-color:#1cd3c1;">
                <a href="signup.html" class="btn "><i class="fa fa-user" aria-hidden="true"></i>
 SIGN UP</a></div>
       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background-color:#1d4361;">
                <a href="login.html" class="btn  btn-1"><i class="fa fa-lock"></i> LOG IN</a></div>
                  <!--<div class="float-right">
                    <ul class="topbar-list list-unstyled d-flex" style="margin: 15px 5px;">
                        
                        <li class="list-inline-item">
                            <select id="select-lang" class="demo-default">
                                <option value="">EN</option>
                                <option value="4">English</option>
                                <option value="1">Spanish</option>
                                <option value="3">French</option>
                                <option value="5">Hindi</option>
                            </select>
                        </li>
                    </ul>-->
                </div></div>
  

    <section class="inner-banner">
    
      <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white inner-title">
                        <h3 class="text-uppercase title mb-4">Register as Helper</h3>
                       <a href="index.html" class="text-uppercase font-weight-bold">Home</a> > <span class="text-uppercase text-white font-weight-bold">Register as Helper</span>
                      
                        
                        
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
 
            <a onclick="openCity(event, 'tab1', 'tabb1')" id="tabb1" class="nav-link side_nav tablinks active">
               <strong> 
Fill Your Details</strong>
            </a>
            <a   onclick="openCity(event, 'tab2','tabb2')" id="tabb2" class="nav-link side_nav tablinks">
                <strong>
Add Your profile picture</strong>
            </a>
            <a  onclick="openCity(event, 'tab3','tabb3')" id="tabb3" class="nav-link side_nav tablinks">
                <strong>
Your experience</strong>
            </a>
            <a onclick="openCity(event, 'tab4' ,'tabb4')" id="tabb4" class="nav-link side_nav tablinks">
               <strong> 
{{ __('web.helpers.extra_information') }}</strong>
            </a>
            <a onclick="openCity(event, 'tab5','tabb5')"  id="tabb5" class="nav-link side_nav tablinks">
               <strong> 
Tell Us Who You Are?</strong>
            </a> 
         <a onclick="openCity(event, 'tab6','tabb6')"  id="tabb6" class="nav-link side_nav tablinks">
               <strong> 
Ad's Info</strong>
            </a>  
    <a  onclick="openCity(event, 'tab7','tabb7')" id="tabb7" class="nav-link side_nav tablinks">
               <strong> 
References</strong>
            </a>
       </div>
</div></div>

<div class="col-md-8"> 





               <!-- POST A JOB START -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="rounded shadow bg-white p-4">
                        <div class="custom-form">
                            <div id="message3"></div>
                            <form method="post" action="php/contact.php" name="contact-form" id="contact-form3">
                              <h4 class="title  pb-2">Fill in your details as much as possible.</h4>
                               
                    </div>
                             @include('web.services_forms.form_fields_2')

                            <div class="row"> 

                               <!--  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Job Title</label>
                                            <input id="company-name" type="text" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Job Type</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded">
                                                    <option data-display="Job Type">Job Type</option>
                                                    <option value="1">Full Time</option>
                                                    <option value="2">Part Time</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Job Category</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded">
                                                    <option data-display="Category">Category</option>
                                                    <option value="1">Theppassers </option>
                                                    <option value="2">childminder</option>
                                                    <option value="3">Dierenoppas </option>
                                                    <option value="4">
Klushulp </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">City</label>
                                            <input id="city" type="text" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Country</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded">
                                                    <option data-display="Country">Country</option>
                                                    <option value="1">Afghanistan</option>
                                                    <option value="2">Bangladesh</option>
                                                    <option value="3">Canada</option>
                                                    <option value="4">Dominica</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Minimum Salary</label>
                                            <input id="minimum-salary" type="text" class="form-control resume" placeholder="$8000">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Maximum Salary</label>
                                            <input id="maximum-salary" type="text" class="form-control resume" placeholder="$20000">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Education Level</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded">
                                                    <option data-display="Level">Level</option>
                                                    <option value="1">Level-1</option>
                                                    <option value="2">Level-2</option>
                                                    <option value="3">Level-3</option>
                                                    <option value="4">Level-4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Year of Experience</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded">
                                                    <option data-display="Experience">Experience</option>
                                                    <option value="1">1 Year</option>
                                                    <option value="2">2 Year</option>
                                                    <option value="3">3 Year</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Website</label>
                                            <input id="url" type="url" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Email Address</label>
                                            <input id="email-address" type="text" class="form-control resume" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Phone Number</label>
                                            <input id="number" type="text" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Gender</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded">
                                                    <option data-display="Gender">Gender</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Shift</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded">
                                                    <option data-display="Shift">Shift</option>
                                                    <option value="1">Morning</option>
                                                    <option value="2">Evening</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Job Description</label>
                                            <textarea id="description" rows="6" class="form-control resume" placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <div class="input-group mt-2 mb-2">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label rounded"><i class="mdi mdi-cloud-upload mr-1"></i> Upload Files</label>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-inline-item">
                                                <h6 class="text-muted mb-0">Upload Images Or Documents.</h6>
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->
                       

            <!--  new forms started here -->

            <!--  <div class="col-xl-6 col-md-6 col-sm-12">
                 <div class="form-group app-label mt-2">
                   {{ Form::label('dob', __('web.helpers.birth_date').':') }}
                    {{ Form::text('dob', null, ['class' => 'form-control birthDate','id' => 'birthDate','autocomplete' => 'off']) }}
                </div> 
            </div>
       


            
       
             <div class="col-xl-6 col-md-6 col-sm-12">
                 <div class="form-group app-label mt-2">
                {{ Form::label('gender', __('web.helpers.gender').':') }}<span class="text-danger">*</span><br>
                {{ Form::radio('gender', '0', true) }} {{ __('web.helpers.male') }} &nbsp;&nbsp;&nbsp;
                {{ Form::radio('gender', '1') }} {{ __('web.helpers.female') }}
                </div>
             </div> 
         
    



            
               <div class="col-xl-6 col-md-6 col-sm-12">
                 <div class="form-group app-label mt-2">
                    {{ Form::label('Mother Tongue') }}<span class="text-danger"></span>
                    {{ Form::select('mother_lang_id', $data['language'],isset($postMetaArray['mother_lang_id'])?$postMetaArray['mother_lang_id']:null, ['class' => 'form-control select-box','placeholder' => 'Select Langauge','required']) }}
                 </div>
              </div> 
        -->
           
              <!-- add lang section -->
                  <!--   <div  id="additional_lang" style="display: block ruby;">
                    
                           <div class="col-xl-6 col-md-6 col-sm-12">
                             <div class="form-group app-label mt-2">
                                {{ Form::label('Other_lang[0][name]', __('Other Langauge Name').':') }}
                                {{ Form::select('Other_lang[0][name]', $data['language'],isset($postMetaArray['Other_lang']['0']['name'])?$postMetaArray['Other_lang']:null, ['class' => 'form-control select-box','placeholder' => 'Select Langauge']) }}
                             </div>
                         </div> 
                     

                      
                           <div class="col-xl-6 col-md-6 col-sm-12">
                             <div class="form-group app-label mt-2">
                                {{ Form::label('Langauge_level',__('web.helpers.language_level').':') }}
                                {{ Form::select('Other_lang[0][level]', $data['lang_level'],isset($postMetaArray['Other_lang'])?$postMetaArray['Other_lang'][0]['level']:null, ['class' => 'form-control select-box','placeholder' => 'Select Langauge Level']) }}
                            </div>
                         </div> 
                     
                            

                          <?php 
                           if(isset($postMetaArray['Other_lang']) ) { 
                           
                           for($i=1; $i<count($postMetaArray['Other_lang']);$i++){

                           ?>
                           <div class="additional_lang_row" id="add_lang<?php echo $i;?>" style="display: inline-flex;">
                            
                            <div class="form-group col-xl-6 col-md-6 col-sm-12">
                                {{ Form::label('Other_lang['.$i.'][name]', __('Other Langauge Name').':') }}
                                {{ Form::select('Other_lang['.$i.'][name]', $data['language'],isset($postMetaArray['Other_lang'][$i])?$postMetaArray['Other_lang'][$i]['name']:null, ['class' => 'form-control select-box']) }}
                            </div> 

                               <div class="form-group col-xl-4 col-md-4 col-sm-12">
                                {{ Form::label('Langauge_level',__('web.helpers.language_level').':') }}
                                {{ Form::select('Other_lang['.$i.'][level]', $data['lang_level'],isset($postMetaArray['Other_lang'][$i])?$postMetaArray['Other_lang'][$i]['level']:null, ['class' => 'form-control select-box','placeholder' => 'Select Langauge Level']) }}
                            </div>

                            
                            
                            <div class="form-group col-xl-2 col-md-2 col-sm-12">
                             <a id="<?php echo $i;?>" href="javascript:void(0)" class="btn btn-primary remove-lang" style="margin-top: 30px;">Remove Langauge</a>
                            </div>
                            
                          </div>
                            <?php } } ?>
                         
                     </div>
                      <div class="form-group col-sm-12">
                            <a  id="AddNew"  href="javascript:void(0)" class="btn btn-primary" >{{__('Add Lang')}}</a>
                     </div>
                               -->
                        

             <!-- add lang section ended-->

            <!-- 
                <div class="col-xl-6 col-md-6 col-sm-12">
                     <div class="form-group app-label mt-2">
                        {{ Form::label('ref_phone', __('phone_no',__('web.helpers.phone_no').':')) }}<span class="text-danger">*</span><br>
                        {{ Form::tel('ref_phone', 

                         isset($postMetaArray['ref_phone'])?$postMetaArray['ref_phone']:null,

                         ['class' => 'form-control','required', 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")','id'=>'phoneNumber']) }}
                        {{ Form::hidden('region_code',isset($user)?$user->region_code:null,['id'=>'prefix_code']) }}
                        <br>
                     </div>   
                </div> 
           

        
                <div class="col-xl-6 col-md-6 col-sm-12">
                     <div class="form-group app-label mt-2">
                       {{ Form::label('country', __('messages.company.country').':') }}
                        {{ Form::select('country_id', $data['countries'], null, ['id'=>'countryId','class' => 'form-control select-box','placeholder' => 'Select Country']) }}
                    </div>   
                </div> 
       
            
         
                <div class="col-xl-6 col-md-6 col-sm-12">
                     <div class="form-group app-label mt-2">
                        {{ Form::label('state', __('messages.company.state').':') }}
                        {{ Form::select('state_id', [], null, ['id'=>'stateId','class' => 'form-control select-box','placeholder' => 'Select State']) }}
                    </div>   
                </div> 
        
      
                <div class="col-xl-6 col-md-6 col-sm-12">
                     <div class="form-group app-label mt-2">
                            {{ Form::label('city', __('messages.company.city').':') }}
                            {{ Form::select('city_id', [], null, ['id'=>'cityId','class' => 'form-control select-box','placeholder' => 'Select City']) }}
                     </div>
                </div>
       
            
      
                <div class="col-xl-6 col-md-6 col-sm-12">
                     <div class="form-group app-label mt-2">
                        {{ Form::label('location', __('messages.company.location').':') }}<span class="text-danger">*</span>
                        {{ Form::text('location', isset($postMetaArray['location'])?$postMetaArray['location']:null, ['class' => 'form-control','required']) }}
                    </div>
                </div>
     
            
      
                <div class="col-xl-6 col-md-6 col-sm-12">
                     <div class="form-group app-label mt-2">
                {{ Form::label('zip_code', __('Zip').':') }}<span class="text-danger">*</span>
                {{ Form::text('zip_code', null, ['class' => 'form-control','required']) }}
                  </div>
                </div>
      
          </div>  
 -->



       <!--  //here is new code -->

        
       <!--  here is new code -->






          
            <!-- Submit Field -->
           <!-- <div class="form-group col-sm-12">
             <div style="float:left">
                <a href="{{ route('web.services') }}" class="btn btn-secondary text-dark">{{__('web.helpers.cancel')}}</a>
            </div>
             <div  style="float:right">
                <a  id="validateTab1" href="#" onclick="openCity(event, 'tab2','tabb2')" class="btn btn-primary" style="float: right;">{{__('web.helpers.next')}}</a>
            </div>
            </div>


   </div> -->
                              
                                 <!--    <div class="col-lg-12 mt-5 col-md-6">
                                        <a href="#" class="btn btn-primary float-right">NEXT</a>
                                    </div>

                              
                             
                                    <div class="col-lg-12 mt-5 col-md-6">
                                        <a href="#" class="btn btn-primary">CANCEL</a>
                                    </div>
 -->
                             
                              

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


            
 </div></div></section>


  
<!-- End New Section to Append Html --> 



    

  
@endsection