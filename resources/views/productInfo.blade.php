@extends('layouts.layout')

@section('content')
    @include('components.headerShortLink')

    @include('components.header')

    <section class="show-route all-padding d-flex align-items-center">
        <div class="route-container">
            <div class="d-flex align-items-center">
                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    style="fill: #08bc3f;transform: ;msFilter:;">
                    <path
                        d="M5 22h14a2 2 0 0 0 2-2v-9a1 1 0 0 0-.29-.71l-8-8a1 1 0 0 0-1.41 0l-8 8A1 1 0 0 0 3 11v9a2 2 0 0 0 2 2zm5-2v-5h4v5zm-5-8.59 7-7 7 7V20h-3v-5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v5H5z">
                    </path>
                </svg>
                <span class="me-2 page-subtitle page-route">Home</span>
                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    style="fill: grey;transform: ;msFilter:;">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg>
                <span class="me-2 page-route" style="color: grey">Vegetables</span>
                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    style="fill: grey;transform: ;msFilter:;">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg>
                <span class="page-route" style="color: grey">Spinach</span>

            </div>
            <div class="productroute-name">
                <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    style="fill: grey;transform: ;msFilter:;">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg>
                <span class="page-route " style="color: grey">Chamsur Saag</span>
            </div>
        </div>
    </section>


    <main class="productInfo-wrapper all-padding mt-5">

        <div>

            <section class="productInfo-container ">
                <div class="productInfoImage-wrapper ">
                    <div class="productInfoImage-container zindex">
                        <div id="owl-productImage" class="owl-carousel owl-theme ">
                            <div class="item productimage-item">
                                <img class="productInfo-bigImage" src="{{ asset('images/home-leaf.png') }}"
                                    alt="product Image" />
                                {{-- 1 --}}
                            </div>
                            <div class="item productimage-item ">
                                <img class="productInfo-bigImage" src="{{ asset('images/home-leaf.png') }}"
                                    alt="product Image" />
                                {{-- 2 --}}
                            </div>
                            <div class="item productimage-item ">
                                <img class="productInfo-bigImage" src="{{ asset('images/home-leaf.png') }}"
                                    alt="product Image" />
                                {{-- 3 --}}
                            </div>
                            <div class="item productimage-item ">
                                <img class="productInfo-bigImage" src="{{ asset('images/home-leaf.png') }}"
                                    alt="product Image" />
                                {{-- 4 --}}
                            </div>

                        </div>

                    </div>
                    <div id="owl-productInfo" class="owl-carousel owl-theme">
                        <div class="item productInfo-sliderContainer">
                            <img class="productInfo-sliderImage" src="{{ asset('images/home-leaf.png') }}" alt="products" />
                            {{-- 1 --}}
                        </div>
                        <div class="item productInfo-sliderContainer">
                            <img class="productInfo-sliderImage" src="{{ asset('images/home-leaf.png') }}" alt="products" />
                            {{-- 2 --}}
                        </div>
                        <div class="item productInfo-sliderContainer">
                            <img class="productInfo-sliderImage" src="{{ asset('images/home-leaf.png') }}" alt="products" />
                            {{-- 3 --}}
                        </div>
                        <div class="item productInfo-sliderContainer">
                            <img class="productInfo-sliderImage" src="{{ asset('images/home-leaf.png') }}" alt="products" />
                            {{-- 4 --}}
                        </div>
                    </div>
                </div>
                <article class="">
                    <p class="productInfo-name">Chamsuur Saag</p>
                    <div class="star-container mt-2 mb-2">
                        <div class="star-full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                style="fill: #FFD600 ;transform: ;msFilter:;">
                                <path
                                    d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z">
                                </path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                style="fill: #FFD600 ;transform: ;msFilter:;">
                                <path
                                    d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z">
                                </path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                style="fill: #FFD600 ;transform: ;msFilter:;">
                                <path
                                    d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z">
                                </path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                style="fill: #FFD600 ;transform: ;msFilter:;">
                                <path
                                    d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z">
                                </path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                style="fill: #E5E5E5 ;transform: ;msFilter:;">
                                <path
                                    d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z">
                                </path>
                            </svg>

                            <span class="productInfo-review">(42 reviews)</span>
                        </div>
                    </div>
                    <p class="productInfo-price">Rs. 65/kg</p>
                    <p class="productInfo-about mt-2">There are many variations of passages of Lorem Ipsum available, but
                        the
                        majority have suffered
                        alteration. There are many variations of passages alteration.</p>
                    <p class="productInfo-moreinfo mt-3">Size/Weight: 1kg</p>
                    <div class="productInfo-order">
                        <div class="form-type-number">
                            <input class="productInfo-quantity" value="1" id="quantity" max="100"
                                min="1" name="quantity" type="number" />
                            <div class="btn-minus button"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" style="fill: #08bc3f;transform: ;msFilter:;">
                                    <path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z">
                                    </path>
                                </svg></div>
                            <div class="btn-plus button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="fill: #08bc3f;transform: ;msFilter:;">
                                    <path d="m6.293 13.293 1.414 1.414L12 10.414l4.293 4.293 1.414-1.414L12 7.586z"></path>
                                </svg>
                            </div>
                        </div>

                        <button class="productInfo-addcart button">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);transform: ;msFilter:;">
                                    <path
                                        d="M21 4H2v2h2.3l3.28 9a3 3 0 0 0 2.82 2H19v-2h-8.6a1 1 0 0 1-.94-.66L9 13h9.28a2 2 0 0 0 1.92-1.45L22 5.27A1 1 0 0 0 21.27 4 .84.84 0 0 0 21 4zm-2.75 7h-10L6.43 6h13.24z">
                                    </path>
                                    <circle cx="10.5" cy="19.5" r="1.5"></circle>
                                    <circle cx="16.5" cy="19.5" r="1.5"></circle>
                                </svg></span>
                            <span class="ms-1 ">Add to cart</span>
                        </button>
                        <div>
                            <button class="productInfo-fav button me-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="fill: #817E7E ;transform: ;msFilter:;">
                                    <path
                                        d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
                                    </path>
                                </svg>
                            </button>
                            <button class="productInfo-share button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="fill: #817E7E ;transform: ;msFilter:;">
                                    <path
                                        d="M5.5 15a3.51 3.51 0 0 0 2.36-.93l6.26 3.58a3.06 3.06 0 0 0-.12.85 3.53 3.53 0 1 0 1.14-2.57l-6.26-3.58a2.74 2.74 0 0 0 .12-.76l6.15-3.52A3.49 3.49 0 1 0 14 5.5a3.35 3.35 0 0 0 .12.85L8.43 9.6A3.5 3.5 0 1 0 5.5 15zm12 2a1.5 1.5 0 1 1-1.5 1.5 1.5 1.5 0 0 1 1.5-1.5zm0-13A1.5 1.5 0 1 1 16 5.5 1.5 1.5 0 0 1 17.5 4zm-12 6A1.5 1.5 0 1 1 4 11.5 1.5 1.5 0 0 1 5.5 10z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </article>
            </section>

            <section class="productInfo-details ">
                <div>
                    <button class="productInfo-descbtn active-descbtn button">Description</button>
                    <button class="productInfo-descbtn button">Additional Info</button>
                    <button class="productInfo-descbtn button">Vendor</button>
                    <button class="productInfo-descbtn button">Reviews (4)</button>
                </div>

                <p class="productInfo-moreInfo mt-4">Uninhibited carnally hired played in whimpered dear gorilla koala
                    depending and
                    much yikes off far
                    quetzal goodness and from for grimaced goodness unaccountably and meadowlark near unblushingly crucial
                    scallop tightly neurotic hungrily some and dear furiously this apart.</p>

                <p class="productInfo-moreInfo">Spluttered narrowly yikes left moth in yikes bowed this that grizzly much
                    hello
                    on spoon-fed that alas
                    rethought much decently richly and wow against the frequent fluidly at formidable acceptably flapped
                    besides and much circa far over the bucolically hey precarious goldfinch mastodon goodness gnashed a
                    jellyfish and one however because.</p>

                <p class="productInfoDetails-title">Packaging & Delivery</p>

                <div class="underline"></div>

                <p class="productInfo-moreInfo mt-4">Less lion goodness that euphemistically robin expeditiously bluebird
                    smugly
                    scratched far while thus
                    cackled sheepishly rigid after due one assenting regarding censorious while occasional or this more
                    crane went more as this less much amid overhung anathematic because much held one exuberantly sheep
                    goodness so where rat wry well concomitantly.
                </p>

                <p class="productInfo-moreInfo">Scallop or far crud plain remarkably far by thus far iguana lewd
                    precociously
                    and and less rattlesnake
                    contrary caustic wow this near alas and next and pled the yikes articulate about as less cackled
                    dalmatian in much less well jeering for the thanks blindly sentimental whimpered less across objectively
                    fanciful grimaced wildly some wow and rose jeepers outgrew lugubrious luridly irrationally attractively
                    dachshund.</p>
            </section>
        </div>

        <div>
            @include('components.sideFilter')
        </div>

    </main>

    <main class="popularproducts-wrapper all-padding">
        <section class="popularproducts-header d-flex justify-content-between mt-4">
            <p class="popularproducts-title">Related Products</p>
        </section>
        @include('components.popularProduct')
    </main>

    @include('components.banner')

    @include('components.newLettter')

    @include('components.footer')
@endsection
