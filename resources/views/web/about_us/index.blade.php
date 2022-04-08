

@extends('web.webLayout.app')

@section('title')
@endsection

@section('content')
    <section class="inner-banner">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white inner-title">
                        <h3 class="text-uppercase title mb-4">About Ejana</h3>
                        <a href="{{ route('front.home') }}" class="text-uppercase font-weight-bold">Home</a> > <span class="text-uppercase text-white font-weight-bold">About Ejana</span>
                  </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ABOUT US START -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">


                <div class="col-lg-12 col-md-12">
                    <div class="about-desc ml-lg-4">


                        <p class="text-muted">The right help at the righttime,that's what Ejana takes care of!

                        </p>

                        <p class="text-muted">Ejana is an online platform, intended to help people seeking help and helpersfindeach other and make agreements together, so that it is well arranged for both parties. At Ejana you can search for helpersor helpers who meet your needs and then get in touch easily and quickly. As a helper and helper, you can create a free profile at Ejana in which you indicate that you are looking for help or job in babysitter, childminder, homework supervisor, animal sitter or domestic and garden help. You can indicate the desired location or radius and at what times you are looking or available.
                        </p>

                        <p class="text-muted">In this way, Ejana meets the need of both parties to easily and clearly find the right job or help. </p>


                    </div>


                </div>



                <div class="col-lg-12 col-md-12">
                    <div class="about-desc ml-lg-4">

                        <h5 class="text-muted mb-1">Benefits Ejana</h5>
                        <div class="job-details-desc-item">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-minus text-muted f-16"></i>
                            </div>
                            <p class="text-muted f-14 mb-1">Create an account on the website for FREE, and find a help that suits you!

                            </p>
                        </div>
                        <div class="job-details-desc-item">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-minus text-muted f-16"></i>
                            </div>
                            <p class="text-muted f-14 mb-1">Are you looking for work? Register with Ejana for FREE and get in touch with those looking for help! </p>
                        </div>
                        <div class="job-details-desc-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-minus text-muted f-16"></i>
                            </div>
                            <p class="text-muted f-14 mb-1">Easily and quickly finda babysitter,childminder, homework supervisor, pet sitter or domestic and garden help! For flexible, fixed or lastminute? You'll find them all at Ejana!</p>
                        </div>
                        <p class="text-muted"> Don't wait any longer and register now for FREE at Ejana!</p>


                        <p class="text-muted">Ejana works together with childminder agency Kids2bie. Kids2bie is a respected and well-known childminder agency.</p>

                        <p class="text-muted">Are you looking for an official childminder care at a childminder's home? With the childminder the groups of up to 6 children. This gives children more rest and less stimuli. As a result, they are more relaxed and come home rested. It is a small shelter in a homely atmosphere. Or are you looking for an official Nanny at your home in a familiar environment with a fixed face</p>


                    </div>


                </div>


            </div>
        </div>
        </div>
    </section>
    <!-- ABOUT US END -->


    <!-- DOWNLOAD APP START -->
    <section class="section pb-5" style="background-color:#efefef;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 order-md-1 order-2">
                    <div class="job-about-app-img mt-40">
                        <img src="images/user.png" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>

                <div class="col-md-8 order-md-2 order-1">
                    <div class="app-about-content">
                        <div class="app-about-desc ">

                            <h6 class="text-muted ">Together with team Ejana, we ensure that helpers find simple and reliable helpers throughout the country and the team strives for improvement and growth every day, so that Ejana stays up to date<br>
                                - Nicholl, founder Ejana
                            </h6>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- DOWNLOAD APP END -->


  @endsection
