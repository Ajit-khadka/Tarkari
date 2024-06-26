@extends('layouts.layout')

@section('content')
    @include('components.headerShortLink')

    @include('components.header')

    @include('components.sort')

    @include('components.sortByProducts')

    @include('components.banner')

    @include('components.testimonials')

    @include('components.newLettter')

    @include('components.footer')
@endsection
