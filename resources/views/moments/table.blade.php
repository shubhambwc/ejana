
<table class="table table-responsive-sm table-striped table-bordered" id="momentTable">
    <thead>
    <tr>
        <th>{{ __('web.helpers.name') }}</th>
        <th>{{ __('web.helpers.date') }}</th>
         <th>{{ __('web.helpers.time') }}</th>
         <th>{{ __('web.helpers.type') }}</th>
          <th>{{ __('web.helpers.explanation') }}</th>
          <th>{{ __('web.helpers.file') }}</th>
      
        <th>{{ __('messages.skill.action') }}</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($reminders as $moment)
    
    <tr>
            <td>{{ $moment->first_name }} {{ $moment->last_name }}</td>
            <td>{{ $moment->date }}</td>
            <td>{{ $moment->time }}</td>
            <td>{{ $moment->type }}</td>
            <td>{{ $moment->reminder }}</td>
            <td class=" text-center">
            @if(empty($moment->file)) 
                <span>-</span>
                @else
            <a title="{{ __('web.helpers.file') }}"
                             class="" data-id="{{ $moment->id }}"
                           href="{{ asset('public/reminder') }}/{{ $moment->file }}" target="_blank">
                            <i class="fa fa-download"></i>
                        </a>
                @endif  


            </td>
            <td class="text-center">
                <a href="{{ URL('admin/contact_moment/'.$moment->id.'/edit' )}}" title="Edit" class="btn btn-warning action-btn" data-id="{{ $moment->id }}" id="{{ $moment->id }}">
                        <i class="fa fa-edit"></i>
               </a>
               
               <a title="{{ __('messages.common.delete') }}"
                           class="btn btn-danger action-btn delete-action-btn delete-btn" data-id="{{ $moment->id }}"
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