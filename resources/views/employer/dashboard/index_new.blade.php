<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Ejana-Job Portal</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    @push('css')

    <link rel="shortcut icon" href="{{ asset('assets/assets/images/favicon.ico') }}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('assets/assets/css/bootstrap.min.css')}}" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/assets/css/materialdesignicons.min.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{'asset(assets/assets/css/fontawesome.css')}}" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />

    <!-- selectize css -->
    <link rel="stylesheet" type="text/css" href="{{'asset(assets/assets/css/selectize.css')}}" />

    <!--Slider-->
    <link rel="stylesheet" href="{{asset('assets/assets/css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/assets/css/owl.theme.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/assets/css/style.css')}}" />
    @endpush
</head>
@section('content')

<body>
    <!-- Loader -->


    <!-- Navigation Bar-->
    <header id="topnav" class="defaultscroll scroll-active">


        <!-- Menu Start -->
        <div class="container">
            <!-- Logo container-->
            <div>
                <a href="index.html" class="logo">
                    <img src="{{asset(assets/assets/images/logo-dark.png)}}" alt="" class="logo-light" height="50" />
                    <img src="{{asset(assets/assets/images/logo-dark.png)}}" alt="" class="logo-dark" height="50" />
                </a>
            </div>
            <div class="buy-button">
                <a href="signup.html" class="btn btn-primary"><i class="fa fa-user" aria-hidden="true"></i>
                    SIGN UP</a>
                <a href="login.html" class="btn  btn-1"><i class="fa fa-lock"></i> LOG IN</a>
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
        </div>
        <!--end login button-->
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
                    <a href="#">How does it works</a>

                </li>
                <li>
                    <a href="about.html">About Ejana</a>
                </li>
                <li>
                    <a href="#">Contact Us</a>
                </li>
            </ul>
            <!--end navigation menu-->
        </div>
        <!--end navigation-->
        </div>
        <!--end container-->
        <!--end end-->
    </header>
    <!--end header-->
    <!-- Navbar End -->

    <!-- Start Home -->
    <section class="bg-hero">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="title-heading hero-heading ">

                                <h1 class="heading font-weight-bold mb-4">The online platform to find your ideal help quickly and easily!</h1>
                                <h6 class="small-title  mb-3">
                                    At Ejana you have access to dozens of candidates, so you will always find a candidate near you! View the profiles that suit you best and contact one of those candidates directly for an introduction. Book that candidate and easily pay for that candidate with our secure online payment system.
                                </h6><br>
                                <a href="#" class="btn btn-primary mb-5">SIGN UP FOR FREE</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <img class="img-responsive" src="images/hero-image.png">
                        </div>

                    </div>




                </div>
    </section>
    <section class="search">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="title-heading text-center text-white">

                        <h1 class="heading-white font-weight-bold text-white">Discover 10,000+ Help or work on Ejana</h1>
                    </div>
                </div>
            </div>


            <div class="home-form-position">
                <div class="row">
                    <div class="col-lg-12">
                        <div class=" p-4 ">
                            <form class="registration-form">
                                <div class="row">

                                    <div class="col-lg-4 col-md-4">
                                        <div class="registration-form-box">

                                            <select id="select-category" class="demo-default">
                                                <option class="default-selection" value="">Functional Area</option>
                                                <option value="4">Home Cleaning</option>
                                                <option value="1">Computer Help</option>
                                                <option value="3">Petsitter</option>
                                                <option value="5">Babysitter</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="registration-form-box">
                                            <i class="fas fa-crosshairs"></i>

                                            <select id="select-country" class="demo-default">
                                                <option value="">City, State Or ZIP</option>
                                                <option value="AF">Afghanistan</option>
                                                <option value="AX">&Aring;land Islands</option>
                                                <option value="AL">Albania</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div class="registration-form-box">
                                            <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary btn-block" value="SEARCH">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="section section-service">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 ">
                        <h2 class="heading font-weight-bold pb-5">OUR SERVICES</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="row align-items-center">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="mo-mb-2">
                                <img src="assets/assets/images/child.png" alt="" class="img-fluid mx-auto d-block">
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12"">
                                                    <div class=" txt-center">
                            <h5 class="f-18"><a href="#" class="text-dark">Babysitter <span class="txt"> (8 Jobs)</span></a></h5>
                            <p class="text-muted mb-0">Do you want to spontaneously go away for a night..</p>
                            <p> <a href="#">Read More</a></p>
                        </div>
                    </div>
                </div>



            </div>


            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="row align-items-center">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="mo-mb-2">
                            <img src="assets/assets/images/book.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12"">
                                                    <div class=" txt-center">
                        <h5 class="f-18"><a href="#" class="text-dark">Huiswerkbegeleider<span class="txt"> (8 Jobs)</span></a></h5>
                        <p class="text-muted mb-0">Do you want to spontaneously go away for a night..</p>
                        <p> <a href="#">Read More</a></p>
                    </div>
                </div>
            </div>



        </div>
        <div class="col-lg-4 col-md-6 mt-4 pt-2">
            <div class="row align-items-center">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="mo-mb-2">
                        <img src="assets/assets/images/pet.png" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12"">
                                                    <div class=" txt-center">
                    <h5 class="f-18"><a href="#" class="text-dark">Dierenoppas <span class="txt">(8 Jobs)</span></a></h5>
                    <p class="text-muted mb-0">Do you want to spontaneously go away for a night..</p>
                    <p> <a href="#">Read More</a></p>
                </div>
            </div>
        </div>





        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="row align-items-center">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="mo-mb-2">
                            <img src="assets/assets/images/cleaning.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12"">
                                                    <div class=" txt-center">
                        <h5 class="f-18"><a href="#" class="text-dark">Schoonmaakhulp <span class="txt">(8 Jobs)</span></a></h5>
                        <p class="text-muted mb-0">Do you want to spontaneously go away for a night..</p>
                        <p> <a href="#">Read More</a></p>
                    </div>
                </div>
            </div>



        </div>


        <div class="col-lg-4 col-md-6 mt-4 pt-2">
            <div class="row align-items-center">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="mo-mb-2">
                        <img src="assets/assets/images/gardner.png" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12"">
                                                    <div class=" txt-center">
                    <h5 class="f-18"><a href="#" class="text-dark">Tuinhulp <span class="txt">(8 Jobs)</span></a></h5>
                    <p class="text-muted mb-0">Do you want to spontaneously go away for a night..</p>
                    <p> <a href="#">Read More</a></p>
                </div>
            </div>
        </div>



        </div>
        <div class="col-lg-4 col-md-6 mt-4 pt-2">
            <div class="row align-items-center">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="mo-mb-2">
                        <img src="assets/assets/images/helper.png" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12"">
                                                    <div class=" txt-center">
                    <h5 class="f-18"><a href="#" class="text-dark">Klushulp <span class="txt">(8 Jobs)</span></a></h5>
                    <p class="text-muted mb-0">Do you want to spontaneously go away for a night..</p>
                    <p> <a href="#">Read More</a></p>
                </div>
            </div>
        </div>



        </div>

        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="row align-items-center">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="mo-mb-2">
                            <img src="assets/assets/images/computer.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12"">
                                                    <div class=" txt-center">
                        <h5 class="f-18"><a href="#" class="text-dark">Computer Help <span class="txt">(8 Jobs)</span></a></h5>
                        <p class="text-muted mb-0">Do you want to spontaneously go away for a night..</p>
                        <p> <a href="#">Read More</a></p>
                    </div>
                </div>
            </div>



        </div>


        <div class="col-lg-4 col-md-6 mt-4 pt-2">
            <div class="row align-items-center">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="mo-mb-2">
                        <img src="assets/assets/images/family.png" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12"">
                                                    <div class=" txt-center">
                    <h5 class="f-18"><a href="#" class="text-dark">Gostiffener <span class="txt">(8 Jobs)</span></a></h5>
                    <p class="text-muted mb-0">Do you want to spontaneously go away for a night..</p>
                    <p> <a href="#">Read More</a></p>
                </div>
            </div>
        </div>



        </div>
        <div class="col-lg-4 col-md-6 mt-4 pt-2">
            <div class="row align-items-center">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="mo-mb-2">
                        <img src="assets/assets/images/helper.png" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12"">
                                                    <div class=" txt-center">
                    <h5 class="f-18"><a href="#" class="text-dark">Klushulp <span class="txt"> (8 Jobs)</span></a></h5>
                    <p class="text-muted mb-0">Do you want to spontaneously go away for a night..</p>
                    <p> <a href="#">Read More</a></p>
                </div>
            </div>
        </div>





        </div>
        </div>


        </div>
    </section>



    <section class="section section-works">
        <div class="container">

            <div class="row align-items-center"">
                <div class=" col-lg-3 col-md-12 mt-4 pt-2">

                <h5 class="text-white"> <strong>Choices from<br>
                        <span style="color:#1bd3c0;">21056</span> helpers across<br>the Country</strong></h5>





            </div>
            <div class="col-lg-3 col-md-6 mt-4 pt-2 line">

                <h5 class="text-white"> <strong>Experienced and <br>escreened candidates</strong></h5>





            </div>
            <div class="col-lg-3 col-md-6 mt-4 pt-2 line">

                <h5 class="text-white"> <strong>Secure messaging <br>and payment system </strong></h5>





            </div>
            <div class="col-lg-3 col-md-6 mt-4 pt-2 line">

                <h5 class="text-white"> <strong>Personal customer <br>service </strong></h5>





            </div>


            <div class="col-lg-12 col-md-12 mt-4 pt-2 how_works">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2 class="heading font-weight-bold mt-5 ">HOW DOES IT WORKS</h2>

                        </div>
                    </div>
                </div>
                <div class="row mb-4 pb-5">
                    <div class="col-lg-4 col-md-4 mt-4 pt-2">
                        <div class="row align-items-center">

                            <div class="col-md-12 col-sm-8 col-xs-12 align-items-center">
                                <div align="center" class="pt-2">
                                    <img src="assets/assets/images/search-icon.png" alt="" class="img-fluid mx-auto d-block mb-4">

                                    <h4 class="f-18"><a href="#" class="text-dark">Find <br>your candidate</a></h4>
                                    <p class="text-muted mb-0">

                                        Read detailed profiles and reviews And find the best helper near you for babysitter, childminder, homework supervisor, pet sitter or cleaning and garden help.
                                    </p>

                                </div>
                            </div>
                        </div>



                    </div>


                    <div class="col-lg-4 col-md-4 mt-4 pt-2">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-sm-8 col-xs-12 align-items-center">
                                <div align="center" class="pt-2">
                                    <img src="assets/assets/images/candidate.png" alt="" class="img-fluid mx-auto d-block mb-4">

                                    <h4 class="f-18"><a href="#" class="text-dark">Get acquainted with your<br> candidate</a></h4>
                                    <p class="text-muted mb-0">



                                        Did you find a nice helper? Contact that helperwitho you get to know each other evenbetter. Got excited? Book that helper! Helpers don't pay us until they contacthimand a helper.

                                    </p>
                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="col-lg-4 col-md-4 mt-4 pt-2">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-sm-8 col-xs-12 align-items-center">
                                <div align="center" class="pt-2">
                                    <img src="assets/assets/images/booking.png" alt="" class="img-fluid mx-auto d-block mb-4">

                                    <h4 class="f-18"><a href="#" class="text-dark">Book and pay that<br> candidate </a></h4>
                                    <p class="text-muted mb-0">



                                        Book your favorite helper, once, flexibly or for fixed. Pay that helper easily after a service via our secure online payment system.
                                        .

                                    </p>
                                </div>
                            </div>
                        </div>





                    </div>





                </div>

            </div>


        </div>
    </section>





    <section class="section section-service1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h2 class="heading font-weight-bold pb-5">FIND HELPER QUICKLY</h2>

                    </div>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-lg-10">
                    <div id="owl-testi" class="owl-carousel owl-theme">
                        <div class="item testi-box rounded p-4 mr-3 ml-2 mb-4 bg-light position-relative">

                            <div class="clearfix">
                                <div class="testi-img float-left mr-3">
                                    <img src="images/user.png" height="80" alt="" class="rounded-circle shadow">
                                </div>
                                <h6 class="f-18 pt-1 align-items-center">Nick B

                                </h6>
                                <p class="text-muted small mb-0 align-items-center">47 years old, Amsterdam</p>
                                <p class="text-muted  small mb-0 align-items-center">Gardener</p>
                                <p> <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>

                                <div class="col-12">
                                    <div class="testi-icon1">
                                        <div class="bg-light11 ">
                                            <h6 align="center" class="f-18 pt-1"> $20.00/hr

                                            </h6>
                                            <p align="center" class="text-muted small mb-0">(42 times worked)</p>
                                            <p align="center" class="text-muted  small mb-0"><a href="#">VIEW PROFILE</a></p>
                                            <div align="center"><a href="#" class="btn btn-primary btn-sm ">SELECT</a></div>
                                        </div>


                                    </div>
                                </div>
                                <div class="testi-icon">
                                    <div class="bg-light1 ">
                                        <h6 align="center" class="f-18 pt-1"> $20.00/hr

                                        </h6>
                                        <p align="center" class="text-muted small mb-0">(42 times worked)</p>
                                        <p align="center" class="text-muted  small mb-0"><a href="#">VIEW PROFILE</a></p>
                                        <div align="center"><a href="#" class="btn btn-primary btn-sm ">SELECT</a></div>
                                    </div>


                                </div>

                            </div>

                        </div>

                        <div class="item testi-box rounded p-4 mr-3 ml-2 mb-4 bg-light position-relative">

                            <div class="clearfix">
                                <div class="testi-img float-left mr-3">
                                    <img src="images/user.png" height="80" alt="" class="rounded-circle shadow">
                                </div>
                                <h6 class="f-18 pt-1 align-items-center">Nick B

                                </h6>
                                <p class="text-muted small mb-0 align-items-center">47 years old, Amsterdam</p>
                                <p class="text-muted  small mb-0 align-items-center">Gardener</p>
                                <p> <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                <div class="col-12">
                                    <div class="testi-icon1">
                                        <div class="bg-light11 ">
                                            <h6 align="center" class="f-18 pt-1"> $20.00/hr

                                            </h6>
                                            <p align="center" class="text-muted small mb-0">(42 times worked)</p>
                                            <p align="center" class="text-muted  small mb-0"><a href="#">VIEW PROFILE</a></p>
                                            <div align="center"><a href="#" class="btn btn-primary btn-sm ">SELECT</a></div>
                                        </div>


                                    </div>
                                </div>

                                <div class="testi-icon">
                                    <div class="bg-light1 ">
                                        <h6 align="center" class="f-18 pt-1"> $20.00/hr

                                        </h6>
                                        <p align="center" class="text-muted small mb-0">(42 times worked)</p>
                                        <p align="center" class="text-muted  small mb-0"><a href="#">VIEW PROFILE</a></p>
                                        <div align="center"><a href="#" class="btn btn-primary btn-sm ">SELECT</a></div>
                                    </div>


                                </div>

                            </div>

                        </div>

                        <div class="item testi-box rounded p-4 mr-3 ml-2 mb-4 bg-light position-relative">

                            <div class="clearfix">
                                <div class="testi-img float-left mr-3">
                                    <img src="images/user.png" height="80" alt="" class="rounded-circle shadow">
                                </div>
                                <h6 class="f-18 pt-1 align-items-center">Nick B

                                </h6>
                                <p class="text-muted small mb-0 align-items-center">47 years old, Amsterdam</p>
                                <p class="text-muted  small mb-0 align-items-center">Gardener</p>
                                <p> <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                <div class="col-12">
                                    <div class="testi-icon1">
                                        <div class="bg-light11 ">
                                            <h6 align="center" class="f-18 pt-1"> $20.00/hr

                                            </h6>
                                            <p align="center" class="text-muted small mb-0">(42 times worked)</p>
                                            <p align="center" class="text-muted  small mb-0"><a href="#">VIEW PROFILE</a></p>
                                            <div align="center"><a href="#" class="btn btn-primary btn-sm ">SELECT</a></div>
                                        </div>


                                    </div>
                                </div>

                                <div class="testi-icon">
                                    <div class="bg-light1 ">
                                        <h6 align="center" class="f-18 pt-1"> $20.00/hr

                                        </h6>
                                        <p align="center" class="text-muted small mb-0">(42 times worked)</p>
                                        <p align="center" class="text-muted  small mb-0"><a href="#">VIEW PROFILE</a></p>
                                        <div align="center"><a href="#" class="btn btn-primary btn-sm ">SELECT</a></div>
                                    </div>


                                </div>

                            </div>

                        </div>


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
                            <h2 class="heading font-weight-bold pb-3">OFFERING THE BEST DEALS</h2>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mt-4 pt-2 border-custom ">
                        <div class="row ">
                            <div class="col-md-12 col-sm-12 col-xs-12 border-custom-bottom ">
                                <div class="pt-2 mb-4">
                                    <img src="images/verified.png" alt="" class="img-icon">
                                    <h5 class="f-18"><a href="#" class="text-dark">Verified profiles</a></h5>
                                    <p class="text-muted mb-0">All candidates are verified by proof of identity, confirming their e-mail address and telephone number and the profiles are checked daily</p>

                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 mt-3">
                                <div class="pt-2 mb-4">
                                    <img src="images/deal-4.png" alt="" class="img-icon">
                                    <h5 class="f-18"><a href="#" class="text-dark">Wide range</a></h5>
                                    <p class="text-muted mb-0">All candidates are verified by proof of identity, confirming their e-mail address and telephone number and the profiles are checked daily</p>

                                </div>
                            </div>
                        </div>



                    </div>


                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="row ">
                            <div class="col-md-12 col-sm-12 col-xs-12 border-custom-bottom">
                                <div class="pt-2 mb-4">
                                    <img src="images/deal-2.png" alt="" class="img-icon">
                                    <h5 class="f-18"><a href="#" class="text-dark">Customer service</a></h5>
                                    <p class="text-muted mb-0">All candidates are verified by proof of identity, confirming their e-mail address and telephone number and the profiles are checked daily</p>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 mt-3 ">
                                <div class="pt-2 mb-4">
                                    <img src="images/deal-5.png" alt="" class="img-icon">

                                    <h5 class="f-18"><a href="#" class="text-dark">Active throughout the Netherlands</a></h5>
                                    <p class="text-muted mb-0">All candidates are verified by proof of identity, confirming their e-mail address and telephone number and the profiles are checked daily</p>
                                </div>
                            </div>
                        </div>




                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-sm-12 col-xs-12 border-custom-left border-custom-bottom">
                                <div class="pt-2 mb-4">
                                    <img src="images/deal-3.png" alt="" class="img-icon">
                                    <h5 class="f-18"><a href="#" class="text-dark">Affordable</a></h5>
                                    <p class="text-muted mb-0">All candidates are verified by proof of identity, confirming their e-mail address and telephone number and the profiles are checked daily</p>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 border-custom-left ">
                                <div class="pt-2 mb-4 mt-3">
                                    <img src="images/deal-6.png" alt="" class="img-icon">
                                    <h5 class="f-18"><a href="#" class="text-dark">Direct contact</a></h5>
                                    <p class="text-muted mb-0">All candidates are verified by proof of identity, confirming their e-mail address and telephone number and the profiles are checked daily</p>
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
                <div class="col-lg-6 col-md-5 signup-section">
                    <div align="center" class="pt-2">

                        <img src="images/signup-icon1.png" alt="" class="img-fluid mx-auto d-block mb-4">

                        <h4 class="f-18"><a href="#" class="text-dark">I AM AN EMPLOYER</a></h4>
                        <p class="text-muted mb-0">



                            Did you find a nice helper? Contact that helper with you <br>get to know each other evenbetter.

                        </p>
                        <a href="#" class="btn btn-1 mt-4"></i>
                            SIGN UP AS EMPLOYER</a>

                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mt-4 mt-sm-0 section-service11 signup-section">
                    <div align="center" class="pt-2">
                        <img src="images/signup-icon2.png" alt="" class="img-fluid mx-auto d-block mb-4">
                        <h4 class="f-18"><a href="#" class="text-dark">I AM AN CANDIDATE</a></h4>
                        <p class="text-muted mb-0">




                            Did you find a nice helper? Contact that helper with you <br>get to know each other evenbetter.

                        </p>
                        <a href="#" class="btn btn-1 mt-4"></i>
                            SIGN UP AS EMPLOYER</a>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mt-2 mb-5 border-blue">
                    <h4 align="center" class="heading font-weight-bold "> CURRENT CORONA POLICY</h4>
                    <div align="center">Read our current covid-19 policy and the adjusted guidelines, based on the measures of the government and relevant health authorities.</div>

                </div>


                <div class="col-lg-3 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                    <a href="javascript:void(0)"><img src="images/footer_logo.png" height="50" alt=""></a>
                    <p class="mt-4">All helpers are personally screened by us and a helper is only added to our platform after the extensive screening,so we ensure that only reliable profiles are shown.</p>

                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white1 mb-4 footer-list-title">Information</p>
                    <ul class="list-unstyled footer-list">
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Services



                            </a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> How does the</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Rates</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Legislation</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Enrolment Find your job</a></li>

                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white1 mb-4 footer-list-title">Over Ejana</p>
                    <ul class="list-unstyled footer-list">
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i>

                                About our


                            </a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Quality and Safety</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Corona
                                policy
                            </a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Blog
                            </a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Vacancies</a></li>

                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white1 mb-4 footer-list-title f-17">Customer Service</p>
                    <ul class="list-unstyled text-foot mt-4 mb-0">
                        <li>

                            123 Street 12, A -12/3 New York

                        </li>
                        <li class="mt-2">support@jobsportal.com</li>
                        <li class="mt-2">+92 12 1234567</li>
                        <li class="mt-4">
                            <ul class="social-icon social list-inline mb-0">
                                <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-google"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <hr>
    <footer class="footer footer-bar">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-12">

                    <div class="">
                        <p class="mb-0">© 2021.All rights reserved by <a href="#">Ejana</a>. Privacy Statement | Terms and Conditions | Cookies

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" class="back-to-top rounded text-center" id="back-to-top">
        <i class="mdi mdi-chevron-up d-block"> </i>
    </a>
    <!-- Back to top -->

    @endsection

</body>

</html>

@push('scripts')
<!-- javascript -->
<script src="{{ asset('assets/assets/js/jquery.min.js' )"></script>
    <script src="{{ asset('assets/assets/js/bootstrap.bundle.min.js' )"></script>
    <script src="{{ asset('assets/assets/js/jquery.easing.min.js' )"></script>
    <script src="{{ asset('assets/assets/js/plugins.js' )"></script>

    <!-- selectize js -->
    <script src="{{ asset('assets/assets/js/selectize.min.js' )"></script>
    <script src="{{ asset('assets/assets/js/jquery.nice-select.min.js' )"></script>

    <script src="{{ asset('assets/assets/js/owl.carousel.min.js' )"></script>
    <script src="{{ asset('assets/assets/js/counter.int.js' )"></script>

    <script src="{{ asset('assets/assets/js/app.js' )"></script>
    <script src="{{ asset('assets/assets/js/home.js' )"></script>
@endpush