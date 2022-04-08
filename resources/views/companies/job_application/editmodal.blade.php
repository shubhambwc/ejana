<?php foreach($job_applications as $moment){ ?>
<div class="modal fade" tabindex="-1" role="dialog" id="editmoment{{$moment->id}}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit {{__('web.helpers.job_applications')}} </h5>
                <button onclick="closemodal_remind(this.id)" data-id="{{ $moment->id }}" id="{{ $moment->id }}" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
           
        </div>
    </div>
</div>
 <?php }?>