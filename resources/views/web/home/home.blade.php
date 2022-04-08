@extends('web.webLayout.home')

@section('title')
@endsection

@section('content')
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
                        <img class="img-responsive" src="{{asset('assets/img/hero-image.png')}}">
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
                        <h2 class="heading font-weight-bold">OUR SERVICES</h2>
                    </div>
                </div>
            </div>
            <div class="row">

        <div class="content" style="flex-wrap: inherit;">
        <?php if($jobCategories) { foreach($jobCategories as $jobCategory){
             if($jobCategory->is_featured){?>
             <div class="card">

            <div class="icon"> <img src="{{ $jobCategory->thumbnail }}" alt="" class="img-fluid mx-auto d-block"></div>
            <p class="title"> <h5 class="f-18 text-center"><a href="{{ route('service-details',$jobCategory->id) }}" class="text-dark">{{ $jobCategory->name }} </a></h5></p>
            <p class="text"><span class="txt">( {{ DB::table('users')->where('service_id', $jobCategory->id)->where('owner_type', 'App\Models\Company')->count() }} Jobs)</span><br>{{ Str::limit($jobCategory->description,20) }}<br><a href="{{ route('service-details',$jobCategory->id) }}">Read More</a> </p>
            <p></p>


            </div>
      <?php } } }?>

  </div>





</div>

        </div>
</section>



<section class="section section-works">
    <div class="container">

        <div class="row align-items-center">
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
                                    <img src="{{asset('assets/img/search-icon.png')}}" alt="" class="img-fluid mx-auto d-block mb-4">

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
                                    <img src="{{asset('assets/img/candidate.png')}}" alt="" class="img-fluid mx-auto d-block mb-4">

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
                                    <img src="{{asset('assets/img/booking.png')}}" alt="" class="img-fluid mx-auto d-block mb-4">

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
                                <img src="{{asset('assets/img/user.png')}}" height="80" alt="" class="rounded-circle shadow">
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
                                <img src="{{asset('assets/img/user.png')}}" height="80" alt="" class="rounded-circle shadow">
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
                                <img src="{{asset('assets/img/user.png')}}" height="80" alt="" class="rounded-circle shadow">
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
                                <img src="{{asset('assets/img/verified.png')}}" alt="" class="img-icon">
                                <h5 class="f-18"><a href="#" class="text-dark">Verified profiles</a></h5>
                                <p class="text-muted mb-0">All candidates are verified by proof of identity, confirming their e-mail address and telephone number and the profiles are checked daily</p>

                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 mt-3">
                            <div class="pt-2 mb-4">
                                <img src="{{asset('assets/img/deal-4.png')}}" alt="" class="img-icon">
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
                                <img src="{{asset('assets/img/deal-2.png')}}" alt="" class="img-icon">
                                <h5 class="f-18"><a href="#" class="text-dark">Customer service</a></h5>
                                <p class="text-muted mb-0">All candidates are verified by proof of identity, confirming their e-mail address and telephone number and the profiles are checked daily</p>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 mt-3 ">
                            <div class="pt-2 mb-4">
                                <img src="{{asset('assets/img/deal-5.png')}}" alt="" class="img-icon">

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
                                <img src="{{asset('assets/img/deal-3.png')}}" alt="" class="img-icon">
                                <h5 class="f-18"><a href="#" class="text-dark">Affordable</a></h5>
                                <p class="text-muted mb-0">All candidates are verified by proof of identity, confirming their e-mail address and telephone number and the profiles are checked daily</p>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 border-custom-left ">
                            <div class="pt-2 mb-4 mt-3">
                                <img src="{{asset('assets/img/deal-6.png')}}" alt="" class="img-icon">
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

                    <img src="{{asset('assets/img/signup-icon1.png')}}" alt="" class="img-fluid mx-auto d-block mb-4">

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
                    <img src="{{asset('assets/img/signup-icon2.png')}}" alt="" class="img-fluid mx-auto d-block mb-4">
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

@endsection
