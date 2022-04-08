<div class="row details-page">
    <div class="form-group col-sm-3">
        {{ Form::label('name', __('messages.complaint.name').':') }}
        <p>{{ html_entity_decode($complaint->name) }}</p>
    </div>
    <div class="form-group col-sm-3">
        {{ Form::label('email', __('messages.complaint.email').':') }}
        <p>{{ $complaint->email }}</p>
    </div>
    <div class="form-group col-sm-3">
        {{ Form::label('phone_no', __('messages.complaint.phone_no').':') }}
        <p>{{ (isset($complaint->phone_no)) ? $complaint->phone_no : __('messages.common.n/a') }}</p>
    </div>
    <div class="form-group col-sm-3">
        {{ Form::label('subject', __('messages.complaint.complaint_against').':') }}
        <p>{{ $complaint->candidate_customer }}</p>
    </div>
    
    
    
    <div class="form-group col-sm-3">
        {{ Form::label('subject', __('messages.complaint.complaint_reason').':') }}
        <p>{{ $complaint->complaint_reason }}</p>
    </div>
    
    <div class="form-group col-sm-3">
        {{ Form::label('subject', __('messages.complaint.complaint_arose').':') }}
        <p>{{ $complaint->complaint_arose }}</p>
    </div>
    
    <div class="form-group col-sm-3">
        {{ Form::label('subject', __('messages.complaint.circumstances').':') }}
        <p>{{ $complaint->circumstances }}</p>
    </div>
    
    <div class="form-group col-sm-3">
        {{ Form::label('subject', __('messages.complaint.address').':') }}
        <p>{{ $complaint->address }}</p>
    </div>
    
    <div class="form-group col-sm-3">
        {{ Form::label('created_at', __('messages.common.created_on').':') }}
        <p>{{ $complaint->created_at->diffForHumans() }}</p>
    </div>
    <div class="form-group col-sm-3">
        {{ Form::label('updated_at', __('messages.common.last_updated').':') }}
        <p>{{ $complaint->updated_at->diffForHumans() }}</p>
    </div>
    <div class="form-group col-sm-12">
        {{ Form::label('message', __('messages.complaint.message').':') }}
        <p>{!! nl2br($complaint->complaint) !!} </p>
    </div>
</div>
