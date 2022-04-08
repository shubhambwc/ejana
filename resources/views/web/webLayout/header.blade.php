<!-- Menu Start -->
<div class="container">
    <!-- Logo container-->
    <div>
        <a href="/" class="logo">
            <img src="{{asset('assets/img/logo-dark.png')}}" alt="" class="logo-light" height="50" />
            <img src="{{asset('assets/img/logo-dark.png')}}" alt="" class="logo-dark" height="50" />
        </a>
    </div>
    <div class="buy-button">
        @auth
         @if(Auth::user()->owner_type  == 'App\Models\Candidate' || 'App\Models\Company')
          <!--  <a href="{{ url('logout') }}" class="btn  btn-1"
                   onclick="event.preventDefault(); localStorage.clear();  document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> {{ __('messages.user.logout') }}
                </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" class="d-none">
                    {{ csrf_field() }}
                </form> -->


        @endif
       @else
         <a href="{{ route('our-pricing') }}" class="btn btn-primary"><i class="fa fa-user" aria-hidden="true"></i>
            SIGN UP</a>
        <a href="{{ route('front.candidate.login') }}" class="btn  btn-1"><i class="fa fa-lock"></i> LOG IN</a>
        @endauth


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
            <a href="{{ route('our-service') }}"> Our Services</a>

        </li>

        <li>
            <a href="{{ route('how-it-works') }}">How does it works</a>

        </li>
        <li>
            <a href="{{ route('about-us') }}">About Ejana</a>
        </li>
        <li>
            <a href="{{ route('contact-us') }}">Contact Us</a>
        </li>
 @auth
         <li class="dropdown">
                <a href="#" data-toggle="dropdown"
                   class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                   <!--  <img alt="image" src="{{ getLoggedInUser()->avatar }}"
                         class="rounded-circle mr-1 user-thumbnail"> -->
                    <div class="d-sm-none d-lg-inline-block">
                      {{\Illuminate\Support\Facades\Auth::user()->first_name}}</div>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-drp">
                    <!-- <div class="dropdown-title">
                        {{ __('messages.common.welcome') }}
                        , {{\Illuminate\Support\Facades\Auth::user()->full_name}}</div> -->
                    <!-- <a class="dropdown-item has-icon editProfileModal" href="#" data-id="{{ getLoggedInUserId() }}">
                        <i class="fa fa-user"></i>{{ __('messages.user.edit_profile') }}</a> -->
                         @if(Auth::user()->owner_type  == 'App\Models\Company')
                    <a class="dropdown-item has-icon" href="{{ route('employer.dashboard') }}">
                        <i class="fa fa-home"></i>{{ __('messages.go_to_homepage') }}</a>
                        @endif
                    <!-- <a class="dropdown-item has-icon changePasswordModal" href="#"
                       data-id="{{ getLoggedInUserId() }}"><i
                                class="fa fa-lock"> </i>{{ (Str::limit(__('messages.user.change_password'),20,'...')) }}
                    </a> -->
                    <!-- <a class="dropdown-item has-icon changeLanguageModal" href="#"
                       data-id="{{ getLoggedInUserId() }}"><i
                                class="fa fa-language"> </i>{{ (Str::limit(__('messages.user_language.change_language'),20,'...')) }}
                    </a> -->
                    <a href="{{ url('logout') }}" class="dropdown-item has-icon text-danger"
                       onclick="event.preventDefault(); localStorage.clear();  document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> {{ __('messages.user.logout') }}
                    </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" class="d-none">
                        {{ csrf_field() }}
                    </form>
                </div>
            </li> @endauth

 <!--<li class="dropdown simple-menu language-menu no-hover">
                            <a href="#" class="dropdown-toggle language-text current-language" data-toggle="dropdown" role="button">
                                {{ getCurrentLanguageName() }}&nbsp;
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                @foreach(getLanguages() as $key => $value)
                                @if(checkLanguageSession() != $key)
                                <li><a href="javascript:void(0)" class="languageSelection language-text" data-prefix-value="{{ $key }}">{{ $value }}</a></li>
                                @endif
                                @endforeach
                            </ul>
                        </li>-->

    </ul>
    <!--end navigation menu-->
</div>
<!--end navigation-->
</div>
<!--end container-->
<!--end end-->
