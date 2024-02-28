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
                    <li><a class="popular-link popularproduct-category" href="#">All</a></li>
                    <li><a class="popularproduct-category" href="#">Vegetables</a></li>
                    <li><a class="popularproduct-category" href="#">Fruits</a></li>
                    <li><a class="popularproduct-category" href="#">Bakery</a></li>
                </ul>
            </div>
        </section>
        @include('components.popularProduct')
    </main>

    @include('components.advertise')
    @include('components.welcomeTarkari')

    <div class="homebanner-container">
        @include('components.banner')
    </div>

    <main class="popularproducts-wrapper all-padding mb-3">
        <section class="popularproducts-header d-flex justify-content-between mt-4">
            <p class="popularproducts-title">Featured Products</p>
            <div class="d-flex align-items-center">
                <ul class="product-links list-inline d-flex">
                    <li><a class="popular-link popularproduct-category" href="#">All</a></li>
                    <li><a class="popularproduct-category" href="#">Vegetables</a></li>
                    <li><a class="popularproduct-category" href="#">Fruits</a></li>
                    <li><a class="popularproduct-category" href="#">Bakery</a></li>
                </ul>
            </div>
        </section>
        @include('components.featureProduct')
    </main>

    @include('components.testimonials')
    @include('components.newLettter')

    @include('components.footer')
@endsection
