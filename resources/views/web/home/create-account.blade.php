@php
    $settings  = settings();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Mobile viewport optimized -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">

    <!-- Meta Tags - Description for Search Engine purposes -->
    <meta name="description" content="{{config('app.name')}}">
    <meta name="keywords"
          content="{{config('app.name')}}">
    <link rel="shortcut icon" href="{{ asset($settings['favicon'])}}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Website Title -->
    <title> Ejana-Job Portal</title>

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
             function showPassword(candidateConfirmPassword) {
                  var x = document.getElementById(candidateConfirmPassword);
                  if (x.type === "password") {
                    x.type = "text";
                  } else {
                    x.type = "password";
                  }
                }
            </script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="{{ asset('web/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('web/js/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body>


<!-- Main Content Start -->
<div class="main-content">
<div class="back-to-home rounded d-none d-sm-block">
    <a href="/" class="text-white rounded d-inline-block text-center"><i class="mdi mdi-close"></i></a>
</div>
<section class="vh-100" style="background-image: url({{ asset('assets/img/popup-bg.jpg') }}) ; background-position:center;background-size:cover; ">
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-left">
                    <div class="col-md-6 pt-2">
                        <div class="login_page bg-white shadow rounded p-4">
                            <div class="text-center">
                                @if($type ==1) 
                                <h2 class="heading font-weight-bold pb-5">SIGN UP AS HELPER</h2>
                                @else
                                <h2 class="heading font-weight-bold pb-5">SIGN UP AS HELP-REQUESTER</h2>
                                @endif
                            </div>
                                {{ Form::open(array('route' => 'update-services','id' =>'new_user_form')) }}
                           		 <input type="hidden"  name="service_id" value="{{$service_id}}">
                           		 <input type="hidden"  name="owner_id" id="owner_id" value="">
                           		 <input type="hidden" name="type" value="{{$type}}">
                           		 <input type="hidden"  name="multiple_services" id="multiple_services" value="{{$multiple_services}}">
                           		{{ Form::close() }} 
                            
                            
                                
                                <div id="candidate">
                                     {{ Form::open(['id'=>'addCandidateNewForm']) }}
                                     <input type="hidden" name="service_id" value="{{$service_id}}">
                                     <input type="hidden" name="type" value="{{$type}}">
                                      
                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <label>{{ __('web.common.first_name').":" }}<span
                                                class="required asterisk-size">*</span> </label>
                                            
                                            <input type="text" name="first_name" id="candidateFirstName"
                                           class="form-control" placeholder="First Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <label>{{ __('web.common.last_name').":" }}</label>
                                            <input type="text" name="last_name" id="candidateLastName" class="form-control" placeholder="Last Name" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                           <label>{{ __('web.common.email').":" }} <span
                                                class="required asterisk-size">*</span></label>
                                           <input type="email" name="email" id="candidateEmail" class="form-control"
                                            placeholder="Email" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                             <label>{{ __('web.common.password').":" }} <span
                                                class="required asterisk-size">*</span></label>
                                              <input type="password" name="password" id="candidatePassword"
                                           class="form-control" placeholder="Password"  required>
                                           <span class="p-viewer2">
                                                <i class="mdi mdi-eye" aria-hidden="true" onClick="showPassword('candidatePassword')"> </i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                                <label>{{ __('web.common.confirm_password').":" }}
                                                <span class="required asterisk-size">*</span></label>
                                                <input type="password" name="password_confirmation"
                                                id="candidateConfirmPassword" class="form-control" placeholder="Confirm Password" required>
                                                <span class="p-viewer2">
                                                    <i class="mdi mdi-eye" aria-hidden="true" onClick="showPassword('candidateConfirmPassword')"> </i>
                                               </span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="custom-control m-0 custom-checkbox">                                        
                                                <input type="checkbox" class="form-check-input" name="privacyPolicy"
                                           id="exampleCheck1" checked>
                                    <label class="form-check-label"
                                           for="exampleCheck1">{{ __('messages.i_agree') }}                               
                                    </label>
                                            </div>
                                            @if($isGoogleReCaptchaEnabled)
                                                <div class="form-group mt10">
                                                    <div class="g-recaptcha d-flex justify-content-center"
                                                         data-sitekey="{{ config('app.google_recaptcha_site_key') }}"></div>
                                                    <div id="g-recaptcha-error"></div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button  type="submit" class="btn btn-primary w-100 " data-loading-text="<span class='spinner-border spinner-border-sm'></span> Processing..."  id="btnCandidateSave">{{ __('web.register_menu.register') }}</button>
                                    </div>

                                    <div class="mx-auto">
                                        <p class="mb-0 mt-3"><small class="text-dark mr-2">Already have an account ?</small> <a href="{{ route('front.candidate.login') }}" class="text-dark font-weight-bold">Sign in</a></p>
                                        <p></p>
                                        <p align="center"><a href="{{ route('front.home') }}"><i class="mdi mdi-arrow-left "></i>&nbsp;Back to home page</a></p>
                                    </div>
                                </div>
                           {{ Form::close() }}
                           </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </div>
    </div>
</section>
@if($isGoogleReCaptchaEnabled)
@section('page_scripts')
    <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection
@endif
@section('scripts')
    <script>
        let registerSaveUrl = "{{ route('front.save.register') }}";
        let afterSignup = "{{ route('update-services') }}";
        let candidateLogInUrl = "{{ route('front.candidate.login') }}";
        let isGoogleReCaptchaEnabled = "{{ (boolean)$isGoogleReCaptchaEnabled }}";
    </script>
    <script src="{{mix('assets/js/front_register/front_register.js')}}"></script>
    @if($isGoogleReCaptchaEnabled)
        <script src="{{mix('assets/js/front_register/google-recaptcha.js')}}"></script>
    @endif
@endsection
</div>




<!-- ===== All Javascript at the bottom of the page for faster page loading ===== -->
<script src="{{asset('assets/js/jquery.min.js' )}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js' )}}"></script>
    <script src="{{asset('assets/js/jquery.easing.min.js' )}}"></script>
    <script src="{{asset('assets/js/plugins.js' )}}"></script>

    <!-- selectize js -->
    <script src="{{asset('assets/js/selectize.min.js' )}}"></script>
    <script src="{{asset('assets/js/jquery.nice-select.min.js' )}}"></script>

   
<script src="{{ asset('assets/js/iziToast.min.js') }}"></script>
<script src="{{ mix('assets/js/custom/custom.js') }}"></script>
<script src="{{asset('assets/js/app.js' )}}"></script>
 
    <script src="{{asset('assets/js/home.js' )}}"></script>
<script>
    (function ($) {
        $.fn.button = function (action) {
            if (action === 'loading' && this.data('loading-text')) {
                this.data('original-text', this.html()).html(this.data('loading-text')).prop('disabled', true);
            }
            if (action === 'reset' && this.data('original-text')) {
                this.html(this.data('original-text')).prop('disabled', false);
            }
        };
    }(jQuery));
    $(document).ready(function () {
        $('.alert').delay(5000).slideUp(300);
    });
    $('[data-dismiss=modal]').on('click', function (e) {
        var $t = $(this),
            target = $t[0].href || $t.data('target') || $t.parents('.modal') || [];

        $(target).modal('hide');
    });
    
</script>

@livewireScripts


@yield('page_scripts')
@yield('scripts')

</body>
</html>
