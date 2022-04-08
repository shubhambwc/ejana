<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Forgot Password</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />

         <!-- Google Fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:300,400,400i,700,800|Varela+Round" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/iziToast.min.css') }}">

    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/materialdesignicons.min.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome.css')}}" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />

    <!-- selectize css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/selectize.css')}}" />

    <!--Slider-->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/owl.transitions.css')}}" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style1.css')}}" />
    @livewireStyles

@yield('page_css')
@yield('css')

<script>
             function myFunction() {
                  var x = document.getElementById("password");
                  if (x.type === "password") {
                    x.type = "text";
                  } else {
                    x.type = "password";
                  }
                }
            </script>

    </head>

    <body>
        <!-- Loader -->
     
        
        <div class="back-to-home rounded d-none d-sm-block">
                 <a href="{{ route('front.home') }}" class="text-white rounded d-inline-block text-center"><i class="mdi mdi-close"></i></a>
        </div>


<section class="vh-100" style="background-image: url({{ asset('assets/img/popup-bg.jpg') }}) ; background-position:center;background-size:cover; ">
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container">
                        <div class="row justify-content-left">
                            <div class="col-md-6">
                                <div class="login_page bg-white shadow rounded p-4">
                                    <div class="text-center">
                                           <h2 class="heading font-weight-bold pb-5">Forgot Password </h2> 
                                    </div>
                                  @include('flash::message')
                                       <form class="login-form" method="POST" action="{{ route('front.forgotPasswordStep1') }}" id="forgotPasswordStep1">
                                                 @csrf
                                        <div id="candidateValidationErrBox">
                                            @include('layouts.errors')
                                        </div>
                                        <input type="hidden" name="type" value="1"/>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group position-relative">
                                                     <label>{{ __('web.common.email') }}<span class="text-danger">*</span></label>
                                                        <input type="email" name="email" class="form-control" id="email"
                                                               placeholder="Email"
                                                               value="{{ (Cookie::get('email') !== null) ? Cookie::get('email') : old('email') }}"
                                                               autofocus required>
                                                </div>
                                            </div>
    
                                            

                                            <div class="col-lg-12">
                                                <p class="float-right forgot-pass"><a href="{{ route('front.candidate.login') }}" class="text-dark font-weight-bold">Cancel</a></p>
                                                
                                            </div>
                                            <div class="col-lg-12 mb-0">
                                                <button class="btn btn-primary w-100">Submit</button>
                                            </div>
                                            
                                            
                                        </div>
                                    </form>
                                </div><!---->
                            </div> <!--end col-->
                        </div><!--end row-->
                    </div> <!--end container-->
                </div>
            </div>
        </section>


                    <!-- ===== All Javascript at the bottom of the page for faster page loading ===== -->
            <script src="{{asset('assets/js/jquery.min.js' )}}"></script>
                <script src="{{asset('assets/js/bootstrap.bundle.min.js' )}}"></script>
                <script src="{{asset('assets/js/jquery.easing.min.js' )}}"></script>
                <script src="{{asset('assets/js/plugins.js' )}}"></script>

                <!-- selectize js -->
                <script src="{{asset('assets/js/selectize.min.js' )}}"></script>
                <script src="{{asset('assets/js/jquery.nice-select.min.js' )}}"></script>

                <script src="{{asset('assets/js/owl.carousel.min.js' )}}"></script>
                <script src="{{asset('assets/js/counter.int.js' )}}"></script>

            <script src="{{ asset('assets/js/iziToast.min.js') }}"></script>
            <script src="{{ mix('assets/js/custom/custom.js') }}"></script>
            <script src="{{asset('assets/js/app.js' )}}"></script>

             <script>
                let registerSaveUrl = "{{ route('front.save.register') }}";
            </script>
            <script src="{{mix('assets/js/front_register/front_register.js')}}"></script>
    </body>
</html>