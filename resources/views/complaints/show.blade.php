@extends('layouts.app')
@section('title')
    {{ __('messages.complaint.complaint_details') }}
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('messages.complaint.complaint_details') }}</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('complaints.index') }}"
                   class="btn btn-primary form-btn float-right">{{ __('messages.common.back') }}</a>
            </div>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    @include('complaints.show_fields')
                </div>
            </div>
        </div>
    </section>
@endsection
