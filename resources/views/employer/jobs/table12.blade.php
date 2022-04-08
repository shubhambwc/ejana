@push('css')
    <link href="{{ asset('assets/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/> 
    
@endpush
<table class="table table-striped table-bordered table-responsive-lg" id="jobsTbl2">
    <thead>
    <tr>
        <th scope="col">{{ __('messages.job.job_title') }}</th>
        <th scope="col">{{ __('messages.employer_menu.expires_on') }}</th>
        <th scope="col">{{ __('messages.job_applications') }}</th>
        <th scope="col">{{ __('messages.front_settings.featured_job') }}</th>
        <th scope="col">{{ __('messages.common.status') }}</th>
        <th scope="col">{{ __('messages.common.action') }}</th>
    </tr>

    </thead>
    <tbody>
         <?php $i = 0; ?>
    @foreach ($job_applications as $job_application)
     <?php $i++; ?>
    
    <tr>
         <td>{{ $i }}</td>
            <td><a href="/admin/helper/{{$job_application->owner_id}}/edit"> {{ $job_application->first_name }} {{ $job_application->last_name }}</a></td>
            <td>{{ $job_application->created_at }}</td>
            <td>{{ $job_application->name }}</td>
          
           <!--  <td class=" text-center">
           <i class="fa fa-download"></i>
            </td> -->

           
              <td>
                @if($job_application->status == 1)

                <button type="button" class="btn btn-info">Applied</button>
                @elseif($job_application->status == 2)
                  <button type="button" class="btn btn-danger">Rejected</button>
                    @elseif($job_application->status == 3)
                  <button type="button" class="btn btn-success">Selected</button>
                   @else
                  <button type="button" class="btn btn-warning">Shortlisted</button>
                  @endif





              </td>
            <!-- <td class="text-center">
               
               
               <a title="{{ __('messages.common.delete') }}"
                           class="btn btn-danger action-btn delete-action-btn delete-btn" data-id="#"
                           href="#">
                            <i class="fa fa-trash"></i>
                        </a>
    </td> -->
    </tr>
    @endforeach
    </tbody>
</table>

@push('scripts')
    
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