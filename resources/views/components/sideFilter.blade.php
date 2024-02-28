<section class="categoryblock-container">
    <span class="categoryblock-title">Category</span>
    <div class="line">
        <span class="line-full1"></span>
    </div>
    <button class="categoryblock-btn">Vegetables</button>
    <button class="categoryblock-btn">Fruits</button>
    <button class="categoryblock-btn">Bakery</button>
</section>
<section class="price-container">
    <span class="categoryblock-title">Fill by price</span>
    <div class="line mb-4">
        <span class="line-full"></span>
    </div>
    <div class="">
        <div class="position-relative zindex">
            <div class="range_container">
                <div class="sliders_control">
                    <input id="fromSlider" type="range" value="10" min="0" max="2000" />
                    <input id="toSlider" type="range" value="2000" min="0" max="2000" />
                </div>
                <div class="form_control">
                    <div class="form_control_container">
                        <div class="form_control_container__time" style="font-size:14px;">From <span
                                style="color:#08bc3f">Rs.</span>
                        </div>
                        <input class="form_control_container__time__input" type="number" id="fromInput" readonly
                            value="10" min="0" max="2000" />
                    </div>
                    <div class="form_control_container">
                        <div class="form_control_container__time" style="font-size:14px;">To <span
                                style="color:#08bc3f">Rs.</span>
                        </div>
                        <input class="form_control_container__time__input" type="number" id="toInput" readonly
                            value="2000" min="0" max="2000" />
                    </div>
                </div>
            </div>
        </div>

        <span class="price-title">Condition</span>
        <br>
        <input id="fresh" type="checkbox" name="fresh" value="Fresh">
        <label class="pricelabel" for="fresh">Fresh (89)</label>
        <br>
        <input id="forzen" type="checkbox" name="forzen" value="Forzen">
        <label class="pricelabel" for="forzen">Frozen (69)</label>
        <br>
        <input id="dried" type="checkbox" name="dried" value="Dried">
        <label class="pricelabel" for="dried">Dried (49)</label>

        <br>

        <span class="price-title">Types</span>
        <br>
        <input id="leafy" type="checkbox" name="leafy" value="Leafy">
        <label class="pricelabel" for="leafy">Leafy (1506)</label>
        <br>
        <input id="Cruiferous" type="checkbox" name="Cruiferous" value="Cruiferous">
        <label class="pricelabel" for="Cruiferous">Cruiferous (48)</label>
        <br>
        <input id="root" type="checkbox" name="root" value="Root">
        <label class="pricelabel" for="root">Root (45)</label>

        <br>

        <button class="filter-btn button">
            <span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                    style="fill: rgb(255, 255, 255);transform: ;msFilter:;">
                    <path
                        d="M21 3H5a1 1 0 0 0-1 1v2.59c0 .523.213 1.037.583 1.407L10 13.414V21a1.001 1.001 0 0 0 1.447.895l4-2c.339-.17.553-.516.553-.895v-5.586l5.417-5.417c.37-.37.583-.884.583-1.407V4a1 1 0 0 0-1-1zm-6.707 9.293A.996.996 0 0 0 14 13v5.382l-2 1V13a.996.996 0 0 0-.293-.707L6 6.59V5h14.001l.002 1.583-5.71 5.71z">
                    </path>
                </svg></span>
            <span class="ms-2">FILTER</span>
        </button>
    </div>
</section>

<section class="advertisesmall-container">
    <article class="">
        <p class="advertisesmall-title mt-3">The Best Organic Products Online</p>
        <button class="ad-btn py-2 text-uppercase d-flex justify-content-center align-items-center button">shop
            now<span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                    style="fill: rgb(255, 255, 255);transform: ;msFilter:;">
                    <path d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z">
                    </path>
                </svg></span></button>
    </article>
    <figure class="mt-2">
        <img class="advertisesmall-image" src="{{ asset('images/banana.png') }}" />
    </figure>
</section>

</article>
<article>
    <section class="sortbtn-container w-100border border-danger">
        <div class=" d-flex" style="gap: 10px">
            <!-- filter button -->
            <button type="button" class="sortbtn-icons" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                    <path
                        d="M21 3H5a1 1 0 0 0-1 1v2.59c0 .523.213 1.037.583 1.407L10 13.414V21a1.001 1.001 0 0 0 1.447.895l4-2c.339-.17.553-.516.553-.895v-5.586l5.417-5.417c.37-.37.583-.884.583-1.407V4a1 1 0 0 0-1-1zm-6.707 9.293A.996.996 0 0 0 14 13v5.382l-2 1V13a.996.996 0 0 0-.293-.707L6 6.59V5h14.001l.002 1.583-5.71 5.71z">
                    </path>
                </svg>
            </button>
            <!--filter  Modal -->
            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <span class="categoryblock-title">Fill by price</span>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="">
                                <div class="position-relative zindex">
                                    <div class="range_container">
                                        <div class="sliders_control">
                                            <input id="fromSliderModal" type="range" value="10" min="0"
                                                max="2000" />
                                            <input id="toSliderModal" type="range" value="2000" min="0"
                                                max="2000" />
                                        </div>
                                        <div class="form_control">
                                            <div class="form_control_container">
                                                <div class="form_control_container__time">From <span
                                                        style="color:#08bc3f">Rs.</span>
                                                </div>
                                                <input class="form_control_container__time__input" type="number"
                                                    id="fromInputModal" readonly value="10" min="0"
                                                    max="2000" />
                                            </div>
                                            <div class="form_control_container">
                                                <div class="form_control_container__time">To <span
                                                        style="color:#08bc3f">Rs.</span>
                                                </div>
                                                <input class="form_control_container__time__input" type="number"
                                                    id="toInputModal" readonly value="2000" min="0"
                                                    max="2000" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <span class="price-title">Condition</span>
                                <br>
                                <input id="freshmodal" type="checkbox" name="fresh" value="Fresh">
                                <label class="pricelabel" for="freshmodal">Fresh (89)</label>
                                <br>
                                <input id="forzenModal" type="checkbox" name="forzen" value="Forzen">
                                <label class="pricelabel" for="forzenModal">Frozen (69)</label>
                                <br>
                                <input id="driedModal" type="checkbox" name="dried" value="Dried">
                                <label class="pricelabel" for="driedModal">Dried (49)</label>

                                <br>

                                <span class="price-title">Types</span>
                                <br>
                                <input id="leafyModal" type="checkbox" name="leafy" value="Leafy">
                                <label class="pricelabel" for="leafyModal">Leafy (1506)</label>
                                <br>
                                <input id="CruiferousModal" type="checkbox" name="Cruiferous" value="Cruiferous">
                                <label class="pricelabel" for="CruiferousModal">Cruiferous (48)</label>
                                <br>
                                <input id="rootModal" type="checkbox" name="root" value="Root">
                                <label class="pricelabel" for="rootModal">Root (45)</label>

                                <br>

                                <button class="filter-btn button">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24"
                                            style="fill: rgb(255, 255, 255);transform: ;msFilter:;">
                                            <path
                                                d="M21 3H5a1 1 0 0 0-1 1v2.59c0 .523.213 1.037.583 1.407L10 13.414V21a1.001 1.001 0 0 0 1.447.895l4-2c.339-.17.553-.516.553-.895v-5.586l5.417-5.417c.37-.37.583-.884.583-1.407V4a1 1 0 0 0-1-1zm-6.707 9.293A.996.996 0 0 0 14 13v5.382l-2 1V13a.996.996 0 0 0-.293-.707L6 6.59V5h14.001l.002 1.583-5.71 5.71z">
                                            </path>
                                        </svg></span>
                                    <span class="ms-2">FILTER</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category button -->
            <button type="button" class="sortbtn-icons" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                    <path
                        d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm11-6h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-1 6h-4V5h4v4zm-9 4H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1zm-1 6H5v-4h4v4zm8-6c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z">
                    </path>
                </svg>
            </button>

            <!--Category Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <span class="categoryblock-title">Category</span>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <button class="categoryblock-btn">Vegetables</button>
                            <button class="categoryblock-btn">Fruits</button>
                            <button class="categoryblock-btn">Bakery</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
