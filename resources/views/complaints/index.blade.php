@extends('layouts.app')
@section('title')
    {{ __('messages.complaints') }}
@endsection
@push('css')
    @livewireStyles
@endpush
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('messages.complaints') }}</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    @livewire('complaints')
                </div>
            </div>
        </div>
    </section>
    @include('complaints.templates.templates')
@endsection
@push('scripts')
    @livewireScripts
    <script>
        let complaintsUrl = "{{ route('complaints.index') }}/";
    </script>
    <script src="{{ '/assets/js/complaints/complaints.js' }}"></script>
@endpush
