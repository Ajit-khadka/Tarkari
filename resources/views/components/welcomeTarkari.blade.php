<main class="welcome-wrapper all-padding d-flex mt-5  position-relative index">
    <div class="welcomeimage-container ">
        <img class="welcomeimage" src="{{ asset('images/shopping.png') }}" alt="shopping">
    </div>
    <article class="welcome-maindesc mt-4">
        <div class="">
            <p class="welcome-title">Welcome to <span class="welcome-name">Tarkari</span></p>
            <p class="welcome-desc">As our name suggests, we supply every one of our customers with the ozone washed,
                freshest and highest quality fruit and vegetables.</p>
            <p class="welcome-desc">We achieve our quality through a rigorous selection of farms and farmers and
                suppliers who share our vision of best quality, as well as our insistence on operationg a short supply
                chain. A brand new automatic ozone wash equipments and storage facility validate us for safest, fastest
                and freshest delivery.</p>
            <p class="welcome-desc welcome-readmoredesc">Like other commodities, fruits and vegeatbles have different qualities. We work with
                farmers in Bhaktapur to grow local fresh products that meet your quality expectation.</p>
            {{-- <button class="readmore mt-2 button">Read more...</button> --}}
            <button class="ad-btn py-2 mt-2 d-flex justify-content-center align-items-center button">Read
                more...</button>
        </div>
        <figure class="mt-5 welcome-collection remove-scroll d-flex justify-content-between ">

            <div id="owl-welcome" class="owl-carousel owl-theme">
                <div class="item welcomeimg-container">
                    <img class="welcomeimg-collection" style="width: 210px" src="{{ asset('images/vegontable.png') }}"
                        alt="welcome image" />
                </div>
                <div class="item welcomeimg-container">
                    <img class="welcomeimg-collection" style="width: 210px" src="{{ asset('images/laptop.png') }}"
                        alt="welcome image" />
                </div>
                <div class="item welcomeimg-container">
                    <img class="welcomeimg-collection" style="width: 210px" src="{{ asset('images/parcel.png') }}"
                        alt="welcome image" />

                </div>
                <div class="item welcomeimg-container">
                    <img class="welcomeimg-collection" style="width: 210px" src="{{ asset('images/vegontable.png') }}"
                        alt="welcome image" />
                </div>
                <div class="item welcomeimg-container">
                    <img class="welcomeimg-collection" style="width: 210px" src="{{ asset('images/laptop.png') }}"
                        alt="welcome image" />

                </div>
                <div class="item welcomeimg-container">
                    <img class="welcomeimg-collection" style="width: 210px" src="{{ asset('images/parcel.png') }}"
                        alt="welcome image" />
                </div>
            </div>
        </figure>

    </article>

</main>

{{-- <style>
    
.owl-dots{
    display: none;
}

</style> --}}
