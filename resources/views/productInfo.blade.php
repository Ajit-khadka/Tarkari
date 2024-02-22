@extends('layouts.layout')

@section('content')
    @include('components.headerShortLink')

    @include('components.header')

    <section class="show-route all-padding border border-danger d-flex align-items-center">
        <div class="d-flex align-items-center">
            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                style="fill: #08bc3f;transform: ;msFilter:;">
                <path
                    d="M5 22h14a2 2 0 0 0 2-2v-9a1 1 0 0 0-.29-.71l-8-8a1 1 0 0 0-1.41 0l-8 8A1 1 0 0 0 3 11v9a2 2 0 0 0 2 2zm5-2v-5h4v5zm-5-8.59 7-7 7 7V20h-3v-5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v5H5z">
                </path>
            </svg>
            <span class="me-2 page-subtitle">Home</span>
            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                style="fill: grey;transform: ;msFilter:;">
                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
            </svg>
            <span class="me-2" style="color: grey">Vegetables</span>
            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                style="fill: grey;transform: ;msFilter:;">
                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
            </svg>
            <span style="color: grey">Spinach</span>
            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                style="fill: grey;transform: ;msFilter:;">
                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
            </svg>
            <span style="color: grey">Chamsur Saag</span>
            </svg>
        </div>
    </section>

    @include('components.banner')

    @include('components.testimonials')

    @include('components.newLettter')

    @include('components.footer')
@endsection
