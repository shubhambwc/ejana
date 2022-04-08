
<table class="table table-responsive-sm table-striped table-bordered" id="momentTable">
    <thead>
    <tr>
         <th>{{ __('web.helpers.s_no') }}</th>
        <th>{{ __('web.helpers.name') }}</th>
        <th>{{ __('web.helpers.date') }}</th>
         <th>{{ __('web.helpers.job_name') }}</th>
          <!-- <th>{{ __('web.helpers.file') }}</th> -->
         <th>{{ __('web.helpers.status') }}</th>
      
       <!--  <th>{{ __('messages.skill.action') }}</th> -->
    </tr>
    </thead>
    <tbody>
         <?php $i = 0; ?>
    @foreach ($job_applications as $job_application)
     <?php $i++; ?>
    
    <tr>
         <td>{{ $i }}</td>
            <td><a href="helper/{{$job_application->owner_id}}/edit"> {{ $job_application->first_name }} {{ $job_application->last_name }}</a></td>
            <td>{{ $job_application->created_at }}</td>
            <td><a href="help-requester/{{ $job_application->job_id }}/edit"> {{ $job_application->name }}</a></td>
          <!-- 
            <td class=" text-center">
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
    <tfoot>
    </tfoot>
</table>


@push('scripts')
<script>
//let tableId = '#momentTable';
$(document).ready( function () {
    $('#momentTable').DataTable();
} );
</script>
 <script>
function editmodal_remind (id) {
  // alert(id);      
  var id = "editmoment"+id;
  var element = document.getElementById(id);
  element.classList.add("show");
  //alert(id);

   document.getElementById(id).style.display = "block";
   document.getElementById(id).style.opacity = "1";
   

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

   
    @endpush