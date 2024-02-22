@extends('layouts.layout')

@section('content')
    @include('components.headerShortLink')
    @include('components.header')
    @include('components.homeSlider')

    <main class="popularproducts-wrapper all-padding">
        <section class="popularproducts-header d-flex justify-content-between mt-4">
            <p class="popularproducts-title">Popular Products</p>
            <div class="d-flex align-items-center">
                <ul class="product-links list-inline d-flex">
                    <li><a class="popular-link" href="#">All</a></li>
                    <li><a href="#">Vegetables</a></li>
                    <li><a href="#">Fruits</a></li>
                    <li><a href="#">Bakery</a></li>
                </ul>
            </div>
        </section>
        @include('components.popularProduct')
    </main>

    @include('components.advertise')
    @include('components.welcomeTarkari')
    @include('components.banner')

    <main class="popularproducts-wrapper all-padding">
        <section class="popularproducts-header d-flex justify-content-between mt-4">
            <p class="popularproducts-title">Featured Products</p>
            <div class="d-flex align-items-center">
                <ul class="product-links list-inline d-flex">
                    <li><a class="popular-link" href="#">All</a></li>
                    <li><a href="#">Vegetables</a></li>
                    <li><a href="#">Fruits</a></li>
                    <li><a href="#">Bakery</a></li>
                </ul>
            </div>
        </section>
        @include('components.featureProduct')
    </main>

    @include('components.testimonials')
    @include('components.newLettter')

    @include('components.footer')
@endsection