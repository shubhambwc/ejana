@push('css')
    <link href="{{ asset('assets/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
@endpush
<table class="table table-responsive-sm table-striped table-bordered" id="remindTable">
    <thead>
    <tr>
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
            <td>{{ $moment->date }}</td>
            <td>{{ $moment->time }}</td>
            <td>{{ $moment->type }}</td>
            <td>{{ $moment->reminder }}</td>
            <td class=" text-center">
            @if(empty($moment->file)) 
                <span>-</span>
                @else
            <a title="{{ __('web.helpers.file') }}"
                             class="" data-id="{{ $moment['id'] }}"
                           href="{{ asset('public/reminder') }}/{{ $moment->file }}" target="_blank">
                            <i class="fa fa-download"></i>
                        </a>
                @endif  


            </td>
            <td class="text-center">
               <!-- <span onclick="editmodal_remind(this.id)"  title="Edit" class="btn btn-warning action-btn" data-id="{{ $moment['id'] }}" id="{{ $moment['id'] }}"> -->
               <a href="{{ URL('admin/moments/'.$moment->id.'/edit' )}}" title="Edit" class="btn btn-warning action-btn" data-id="{{ $moment['id'] }}" id="{{ $moment['id'] }}">
                        <i class="fa fa-edit"></i>
               </a>
               
               <a title="{{ __('messages.common.delete') }}"
                           class="btn btn-danger action-btn delete-action-btn delete-btn" data-id="{{ $moment['id'] }}"
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
let tableId = '#remindTable';
$(document).ready( function () {
    $('#remindTable').DataTable();
} );
</script>
 <script>
function editmodal_remind (id) {
 // alert('.editdatepicker' + id);

  // alert(id);      
  var element = document.getElementById(id);
  element.classList.add("show");

   document.getElementById(id).style.display = "block";
   document.getElementById(id).style.opacity = "1";
   

 $(id).modal('show');
}
function closemodal_remind (id) {
  // alert(id);      
   document.getElementById(id).style.display = "none";
   document.getElementById(id).style.opacity = "0";

 $(id).modal('hide');
}
let tableId = '#remindTable';
       // let planUrl = "{{ route('candidates.index') }}";
    </script>
<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ mix('assets/js/custom/custom-datatable.js') }}"></script>
    <script src="{{ asset('assets/js/reminder/reminderedit.js')}}"></script>
    @endpush