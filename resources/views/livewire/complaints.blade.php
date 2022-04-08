<div class="employee-card">
    <div class="row">
        @if(count($complaints) > 0 || $searchComplaint != '')
            <div class="col-md-12">
                <div class="row mb-3 justify-content-end flex-wrap">
                    <div>
                        <div class="selectgroup mr-4">
                            <input wire:model.debounce.100ms="searchComplaint" id="searchComplaint"
                                   type="search"
                                   autocomplete="off"
                                   placeholder="Search" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @forelse($complaints as $complaint)
            @include('complaints.complaint_card')
        @empty
            <div class="col-md-12">
                <h5 class="text-black text-center">
                    @if ($searchComplaint)
                        {{ __('messages.complaint.no_complaint_found') }}
                    @else
                        {{ __('messages.complaint.no_complaint_available') }}
                    @endif
                </h5>
            </div>
        @endforelse
        <div class="col-md-12">
            <div class="row mb-3 justify-content-end flex-wrap">
                @if($complaints->count() > 0)
                    {{$complaints->links()}}
                @endif
            </div>
        </div>
        
    </div>
</div>

