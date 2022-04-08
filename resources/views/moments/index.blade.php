@extends('layouts.app')
@section('title')
    {{ __('web.helpers.contact_moments') }}
@endsection
@push('css')
    <link href="{{ asset('assets/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/> 
    
@endpush
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('web.helpers.contact_moments') }}</h1>
        </div>
        @if (\Session::has('success'))
    <div class="alert alert-success">
        {!! \Session::get('success') !!}
        
    </div>
@endif 
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    @include('moments.table')
                     @include('moments.editmodal')
                </div>
            </div>
        </div>
       
    </section>
@endsection
@push('scripts')
    <script>
     $( function() {
    $( ".datepicker" ).datepicker({
            dateFormat: 'dd-mm-yy',
            });

             $('#time').datetimepicker({
               icons:
            {
                up: 'fa fa-angle-up',
                down: 'fa fa-angle-down'
            },
                 format: 'LT'
             });
            });
       // let transactionUrl = "{{ route('candidates.index') }}";
       // let invoiceUrl = "{{ url('admin/invoices') }}/";
      
    </script>
    <!-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" /> -->
     <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
     <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
   <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ mix('assets/js/custom/custom-datatable.js') }}"></script>
    <script src="{{ asset('js/currency.js') }}"></script>
   
    <script src="{{ asset('assets/js/autonumeric/autoNumeric.min.js') }}"></script>
     <script src="{{ asset('assets/js/reminder/reminderedit.js')}}"></script>
   
@endpush