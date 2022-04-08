@extends('layouts.app')
@section('title')
    {{ __('Help Requester') }}
@endsection
@push('css')
    @livewireStyles
    <link href="{{ asset('assets/css/summernote.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>

@endpush
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('Help requester') }}</h1>
            <div class="section-header-breadcrumb flex-basis-unset">
                <div class="row justify-content-end custom-row-pl-3 align-items-center">
                    @if(count($data) > 0)
                        <div class="pl-3 pr-md-3 pr-0 py-1 grid-width-100">
                            <div class="card-header-action">
                                {{  Form::select('is_featured', $featured, null, ['id' => 'filter_featured', 'class' => 'form-control status-filter w-100', 'placeholder' => 'Select Featured']) }}
                            </div>
                        </div>
                        <div class="pl-3 pr-md-3 pr-0 py-1 grid-width-100">
                            <div class="card-header-action w-100">
                                {{  Form::select('is_stauts', $statusArr, null, ['id' => 'filter_status', 'class' => 'form-control status-filter w-100', 'placeholder' => 'Select Status']) }}
                            </div>
                        </div>
                    @endif
                    <div class="pl-3 py-1 grid-width-100 grid-add-end">
                        <a href="{{ route('company.create') }}"
                           class="btn btn-primary form-btn">{{ __('messages.common.add') }}
                            <i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body">
            @include('flash::message')
            <div class="card-body p-0 mt-0">
            <div class="table-responsive table-bordered">
            <table class="table table-responsive-sm table-striped table-bordered" id="jobApplicationsTbl">

                <tbody>
                    <tr class="">
                                    <th><input type="checkbox"></th>
                                    <th colspan="3">{{ __('messages.common.name') }}</th>
                                    <th>{{ __('messages.common.email') }}</th>
                                    <th>{{ __('messages.common.booking') }}</th>
                                    <th>{{ __('messages.common.status') }}</th>
                                    <th>{{ __('messages.common.status') }}</th>
                                    <th>{{ __('messages.common.profile') }}</th>
                    </tr>
            
                      @forelse($data as $company)
                       <tr class="">
                                    <td><input type="checkbox"></td>
                                    <td>{{ $company['user']['full_name'] }}</td>
                                    <td>{{ $company['user']['is_active'] }}</td>
                                    <td>{{ $company['id'] }}</td>
                                    <td>{{ $company['user']['email'] }}</td>
                                    <td>{{ $company['id'] }}</td>
                                    <td>{{ $company['user']['full_name'] }}</td>
                                    <td>{{ $company['user']['full_name'] }}</td>
                                    <td>{{ $company['user']['full_name'] }}</td>
                    </tr>
                    @empty
                                    <tr>
                                        <td colspan="6"
                                            class="text-center">{{ __('messages.employer_menu.no_data_available') }}.
                                        </td>
                                    </tr>
                                @endforelse
                                
                      
                                </tbody>
                            </table>
                            
                            
            </div>
            
            
            </div>
            
        </div>
    </section>
    
    
@endsection
@push('scripts')
    @livewireScripts
    <script>
        let companiesUrl = "{{ route('company.index') }}";
    </script>
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
     <script src="{{ mix('assets/js/custom/custom-datatable.js') }}"></script>
   <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/summernote.min.js') }}"></script>
    <script src="{{mix('assets/js/companies/companies.js')}}"></script>
@endpush


<script>
let tableName = '#jobApplicationsTbl';
$(tableName).DataTable({
    processing: true,
    serverSide: true,
    'order': [[0, 'asc']],
    ajax: {
        url: jobApplicationsUrl,
    },
    columnDefs: [
        {
            'targets': [0],
            'className': 'text-center',
            'width': '15%',
        },
        {
            'targets': [2],
            'className': 'text-right',
            'width': '15%',
        },
        {
            'targets': [3],
            'className': 'text-center',
            'width': '13%',
            'orderable': false,
        },
        {
            'targets': [4],
            'className': 'text-center',
            'width': '15%',
            'orderable': false,
        },
        {
            'targets': [5],
            'className': 'text-center',
            'width': '12%',
            'orderable': false,
        },
    ],
    columns: [
        {
            data: function (row) {
                let showLink = candidateDetailsUrl + '/' +
                    row.candidate.unique_id;
                return '<a href="' + showLink + '">' +
                    row.candidate.user.full_name + '</a>';
            },
            name: 'candidate.user.first_name',
        },
        {
            data: function (row) {
                return row.job.currency.currency_icon + '&nbsp;' +
                    currency(row.expected_salary).format();
            },
            name: 'expected_salary',
        },
        {
            data: function (row) {
                return moment(row.created_at, 'YYYY-MM-DD').
                    format('Do MMM, YYYY');
            },
            name: 'created_at',
        },
        {
            data: function (row) {
                if (!row.hasResumeAvailable) {
                    let downloadLink = downloadDocumentUrl + '/' + row.id;
                    return '<a href="' + downloadLink + '">' + 'Download' +
                        '</a>';
                }

                return 'N/A';
            },
            name: 'candidate.user.last_name',
        },
        {
            data: function (row) {
                const statusColor = {
                    '0': 'warning',
                    '1': 'primary',
                    '2': 'danger',
                    '3': 'info',
                    '4': 'success',
                };
                return '<span class="badge badge-' + statusColor[row.status] +
                    '">' + statusArray[row.status] + '</span>';
            },
            name: 'status',
        },
        {
            data: function (row) {
                let isCompleted = false;
                let isShortlisted = false;
                if (row.status == 3) {
                    isCompleted = true;
                }
                if (row.status == 4) {
                    isShortlisted = true;
                }
                let data = [
                    {
                        'statusId': row.status,
                        'id': row.id,
                        'isCompleted': isCompleted,
                        'isShortlisted': isShortlisted,
                    },
                ];
                return prepareTemplateRender('#jobApplicationActionTemplate',
                    data);
            },
            name: 'id',
        },

    ],
});
</script>

