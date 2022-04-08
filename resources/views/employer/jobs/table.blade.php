
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<table class="table table-responsive-sm table-striped table-bordered" id="momentTable">
    <thead>
    <tr>
         <th>{{ __('web.helpers.s_no') }}</th>
        <th>{{ __('web.helpers.name') }}</th>
        <th>{{ __('web.helpers.date') }}</th>
         <th>{{ __('web.helpers.job_name') }}</th>
          <!-- <th>{{ __('web.helpers.file') }}</th> -->
         <th>{{ __('web.helpers.status') }}</th>
      
        <th>{{ __('messages.skill.action') }}</th>
    </tr>
    </thead>
    <tbody>
         <?php $i = 0; ?>
                @foreach ($job_applications as $job_application)
                 <?php $i++; ?>
                
    <tr>
         <td>{{ $i }}</td>
            <td><a href="/candidate-details/{{$job_application->candidate_id}}/" target="_blank"> {{ $job_application->first_name }} {{ $job_application->last_name }}</a></td>
            <td>{{ $job_application->created_at }}</td>
            <td><a href="/job-detail/{{$job_application->owner_id}}/" target="_blank">{{ $job_application->name }}</a></td>
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
              <td class="text-center">
                <button type="button" class="btn btn-sm btn-primary editingTRbutton fas fa-pencil-alt noUnderlineCustom text-white" data-toggle="modal" id="{{$job_application->job_applications_id}}" onClick="editmodal_remind(this.id)"></button>
                   <!-- <a href="#" title="Edit" class="btn btn-warning action-btn" data-target="#{{$job_application->id}}" >
                     <i class="fa fa-edit"></i>
                   </a> -->
                   <a title="{{ __('messages.common.delete') }}"
                               class="btn btn-danger action-btn delete-action-btn delete-btn" data-id="{{$job_application->job_applications_id}}"
                               href="#">
                                <i class="fa fa-trash"></i>
                    </a>
            </td>
           
    </tr>
    @endforeach
    </tbody>
    <tfoot>
    </tfoot>
</table>

<!-- Modal -->
@foreach ($job_applications as $job_application)

<div class="modal fade" tabindex="-1" role="dialog" id="editmoment{{$job_application->job_applications_id}}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('messages.plan.change_status') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" id="{{$job_application->job_applications_id}}" onClick="closemodal_remind(this.id)">&times;</span>
                </button>
            </div>
            {!! Form::open(['route' => 'employee.updatejob_status','id' => 'editForm']) !!}
            <div class="modal-body">
                <div class="alert alert-danger d-none" id="editValidationErrorsBox"></div>
                {!! Form::hidden('job_applications_id',$job_application->job_applications_id,['id'=>'job_applications_id']) !!}
                <div class="row">
                    <div class="form-group col-sm-12">
                        {!! Form::label('name', __('web.helpers.status').':') !!}<span class="text-danger">*</span>
                        
                         {{ Form::select('status',
                      ['1' =>'Applied' , '2' =>'Rejected' ,'3'=>'Selected','4'=>'Shortlisted']
                      ,$job_application->status, ['id'=>'status','class' => 'form-control select-box required']) }}
                    </div>
                    
                </div>
                <div class="text-right">
                    {{ Form::button(__('messages.common.save'), ['type'=>'submit','class' => 'btn btn-primary','id'=>'btnEditSave','data-loading-text'=>"<span class='spinner-border spinner-border-sm'></span> Processing..."]) }}
                    <button id="{{$job_application->job_applications_id}}" onClick="closemodal_remind(this.id)" type="button"  class="btn btn-light ml-1"
                            data-dismiss="modal">{{ __('messages.common.cancel') }}
                    </button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endforeach

@push('scripts')
<script>
//let tableId = '#momentTable';
$(document).ready( function () {
    $('#momentTable').DataTable();
} );
</script>
 <script>
function editmodal_remind (id) {
  //alert(id);      
  var id = "editmoment"+id;
  var element = document.getElementById(id);
  element.classList.add("show");
  //alert(id);

   document.getElementById(id).style.display = "block";
   document.getElementById(id).style.opacity = "1";
   document.getElementById(id).style.background = "#02020252";
   document.getElementById(id).style.top = "135px";

   
   

 $(id).modal('show');
}
function closemodal_remind (id) {
  // alert(id);   
  var id = "editmoment"+id;   
   document.getElementById(id).style.display = "none";
   document.getElementById(id).style.opacity = "0";

 $(id).modal('hide');
}
let tableId = '#momentTable';
       // let planUrl = "{{ route('candidates.index') }}";
    </script>

     <script src="{{ asset('assets/js/reminder/jobsedit.js')}}"></script>
    @endpush