@extends('layouts.app')
@section('title')
    {{ __('messages.dashboard') }}
@endsection
@push('css')
    <link href="{{ mix('assets/css/dashboard-widgets.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/daterangepicker.css') }}">
@endpush
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('messages.dashboard') }}</h1>
        </div>
        <!-- statistics count starts -->
        
        <style>
        .card.card-statistic-1, .card.card-statistic-2 {
    		min-height: 160px;
    		padding:15px;
		}
		a.align_bottom{
		margin-top: 30px;
		float: left;	
		text-decoration:underline;
		}
		a.simple_link{
		margin:5px 0px 0px 0px;
		text-decoration:underline;
		color:#6c757d;
		}
		
		.custom_row .card.card-statistic-1 .card-icon {
    line-height: 90px;
    float: left;
    width: 24%;
    margin: 0px;
}

.custom_row  .card-wrap {
    float: right;
    width: 72%;
}
        </style>
        <div class="row custom_row">
            
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card card-statistic-1">
              		 <div class="card-icon total-users-bg">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="row">
             		  <div class="col-lg-8 col-md-9 col-sm-12 col-12"><b>{{ __('messages.customers') }}</b></div>
             		  <div class="col-lg-4 col-md-3 col-sm-12 col-12"><b>{{ __('messages.total') }}</b></div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12">{{ __('messages.helpers') }}</div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12">{{ $data['dashboardData']['totalCandidates'] }}</div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12">{{ __('messages.help_requester') }}</div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12">{{ $data['dashboardData']['totalEmployers'] }}</div>
               		</div>
               		</div>
               		
               </div> 
            </div>
            
            
            
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card card-statistic-1" >
              		 <div class="card-icon feature-employers-bg">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><b>{{ __('messages.registrations') }}</b></div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12"><b>{{ __('messages.total') }}</b></div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><a class="simple_link" href="">{{ __('messages.new_registrations') }}</a></div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12">{{ $data['totalRegistration'] }}</div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><a class="simple_link" href="">{{ __('messages.in_treatment') }}</a></div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12">{{ $data['inTreatment'] }}</div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><a class="simple_link" href="">{{ __('messages.approved') }}</a></div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12">{{ $data['approvedRegCount'] }}</div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><a class="simple_link" href="">{{ __('messages.rejected') }}</a></div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12">{{ $data['rejectedRegCount'] }}</div>
               		</div>
               	</div>
               		
               </div> 
            </div>
            
            
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card card-statistic-1" >
              		 <div class="card-icon subscription-incomes-bg">
                        <i class="fas fa-money-bill"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><b>{{ __('messages.active_membership') }}</b></div>
             		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12">{{ __('messages.helpers') }}</div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12">{{ $data['activeMemberShipHelpers'] }}</div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12">{{ __('messages.help_requester') }}</div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12">{{ $data['activeMemberShipHelpRequestor'] }}</div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><b>{{ __('messages.non_active_membership') }}</b></div>
             		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12">{{ __('messages.helpers') }}</div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12">{{ $data['nonactiveMemberShipHelpers'] }}</div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12">{{ __('messages.help_requester') }}</div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12">{{ $data['nonactiveMemberShipHelpRequestor'] }}</div>
               		</div>
               		</div>
               		
               		
               </div> 
            </div>
            
            
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card card-statistic-1" >
              		 <div class="card-icon feature-jobs-incomes-bg">
                         <i class="fas fa-money-check-alt"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><b>{{ __('messages.finiancial_membership') }}</b></div>
             		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12">{{ __('messages.open') }}</div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12">{{ $data['finMemOpen'] }}</div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12">{{ __('messages.running') }}</div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12">{{ $data['finMemRunning'] }}</div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-12 col-md-12 col-sm-12 col-12"><a class="align_bottom" href="">{{ __('messages.view_detail_overview') }}</a></div>
             		</div>
               		
               		</div>
               		
               </div> 
            </div>
            
            
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card card-statistic-1" >
              		 <div class="card-icon feature-employers-incomes-bg">
                         <i class="fas fa-money-check-alt"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><b>{{ __('messages.finiancial_booking') }}</b></div>
             		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12">{{ __('messages.open') }}</div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12">{{ $data['finBookOpen'] }}</div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12">{{ __('messages.running') }}</div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12">{{ $data['finBookRunning'] }}</div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-12 col-md-12 col-sm-12 col-12"><a class="align_bottom" href="">{{ __('messages.view_detail_overview') }}</a></div>
             		</div>
             		</div>
               		
               </div> 
            </div>
            
            
             <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card card-statistic-1" >
              		 <div class="card-icon today-jobs-bg">
                        <i class="fas fa-list-alt"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12"><b>{{ __('messages.reporting') }}</b></div>
             		</div>
               		
               		<div class="row">
             		  <div class="col-lg-7 col-md-9 col-sm-12 col-12"><a class="simple_link" href=""> {{ __('messages.turnover') }} {{ __('messages.day') }}</a></div>
             		  <div class="col-lg-5 col-md-3 col-sm-12 col-12"><a class="simple_link" href="">{{ __('messages.loss') }} {{ __('messages.day') }}</a></div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-7 col-md-9 col-sm-12 col-12"><a class="simple_link" href="">{{ __('messages.turnover') }} {{ __('messages.week') }}</a></div>
             		  <div class="col-lg-5 col-md-3 col-sm-12 col-12"><a class="simple_link" href="">{{ __('messages.loss') }} {{ __('messages.week') }}</a></div>
               		</div>
               		<div class="row">
             		  <div class="col-lg-7 col-md-9 col-sm-12 col-12"><a class="simple_link" href="">{{ __('messages.turnover') }} {{ __('messages.month') }}</a></div>
             		  <div class="col-lg-5 col-md-3 col-sm-12 col-12"><a class="simple_link" href="">{{ __('messages.loss') }} {{ __('messages.month') }}</a></div>
               		</div>
               		<div class="row">
             		  <div class="col-lg-7 col-md-9 col-sm-12 col-12"><a class="simple_link" href="">{{ __('messages.turnover') }} {{ __('messages.year') }}</a></div>
             		  <div class="col-lg-5 col-md-3 col-sm-12 col-12"><a class="simple_link" href="">{{ __('messages.loss') }} {{ __('messages.year') }}</a></div>
               		</div>
               		</div>
               		
               </div> 
            </div>
            
            
            
            
            
        </div>
        
        
        <div class="row">
        
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card card-statistic-1">
              		 <div class="card-icon total-users-bg">
                        <i class="fas fa-list-alt"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="row">
             		  <div class="col-lg-8 col-md-9 col-sm-12 col-12"><b>{{ __('messages.ads') }}:</b></div>
             		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12">{{ __('messages.helpers') }}</div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12">{{ $data['adsHelpers'] }}</div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12">{{ __('messages.help_requester') }}</div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12">{{ $data['adsHelpRequestor'] }}</div>
               		</div>
               		</div>
               		
               </div> 
            </div>
         
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card card-statistic-1">
              		 <div class="card-icon total-users-bg">
                        <i class="fas fa-list-alt"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="row">
             		  <div class="col-lg-8 col-md-9 col-sm-12 col-12"><b>{{ __('messages.agreements') }}:</b></div>
             		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12">{{ __('messages.helpers') }}</div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12">{{ $data['agreeHelpers'] }}</div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12">{{ __('messages.help_requester') }}</div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12">{{ $data['agreeHelpRequestor'] }}</div>
               		</div>
               		</div>
               		
               </div> 
            </div>
            
             <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card card-statistic-1">
              		 <div class="card-icon total-users-bg">
                        <i class="fas fa-list-alt"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="row">
             		  <div class="col-lg-8 col-md-9 col-sm-12 col-12"><b>{{ __('messages.chats') }}:</b></div>
             		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12">{{ __('messages.helpers') }}</div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12">{{ $data['chatHelpers'] }}</div>
               		</div>
               		
               		<div class="row">
             		  <div class="col-lg-9 col-md-9 col-sm-12 col-12">{{ __('messages.help_requester') }}</div>
             		  <div class="col-lg-3 col-md-3 col-sm-12 col-12">{{ $data['chatHelpRequestor'] }}</div>
               		</div>
               		</div>
               		
               </div> 
            </div>
                
        </div>
        
    </section>
@endsection
@push('scripts')
   
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/admin-dashboard.js') }}"></script>
@endpush

<!-- http://ejana.com/assets/js/dashboard/admin-dashboard.js -->