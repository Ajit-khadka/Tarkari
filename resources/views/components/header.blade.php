<header style="z-index: 1">
    <section class="sticky-header ">
        <div class="main-header all-padding d-flex align-items-center ">
            <div class="main-container d-flex justify-content-between align-items-center">
                <div class="header-logo fw-bold fs-2 d-flex ">
                    <div class="sidenav-button d-flex align-items-center ">
                        <button class="sidenav-button me-3 " onclick="openNav()"><svg
                                class="sidenav-button xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path>
                            </svg></button>
                    </div>
                    <a href="{{ route('home') }}">TARKARI</a>
                </div>
                <nav class="navlink-container ">
                    <ul class="nav-link list-inline d-flex align-items-center mt-3">
                        <li><a href="{{ route('home') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                        <li><a href="{{ route('store') }}"
                                class="{{ request()->is('store') ? 'active' : '' }}">Store</a></li>
                        <li>
                            <div class="dropdown">
                                <a class="" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" href="#"
                                    class="{{ request()->is('Blog') ? 'active' : '' }}">
                                    Blog<span class="nav-downarrow"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="18" height="18" viewBox="0 0 24 24"
                                            style="fill: grey;transform: ;msFilter:;">
                                            <path
                                                d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z">
                                            </path>
                                        </svg></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Blog 1</a></li>
                                    <li><a class="dropdown-item" href="#">Blog 2</a></li>
                                    <li><a class="dropdown-item" href="#">Blog 3</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#" class="{{ request()->is('Aboutus') ? 'active' : '' }}">About Us</a></li>
                        <li><a href="#"class="{{ request()->is('Contactus') ? 'active' : '' }}">Contact Us</a>
                        </li>
                    </ul>
                </nav>
                <div class="header-icons d-flex  ">
                    <div class="header-icon d-flex align-items-center">
                        <div class="position-relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <path
                                    d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
                                </path>
                            </svg>
                            <div
                                class="notifiy-no position-absolute rounded-circle d-flex justify-content-center align-items-center">
                                10</div>

                        </div>
                        <p class="ms-1 mt-4">WishList</p>
                    </div>
                    <div class="header-icon d-flex align-items-center">
                        <div class="position-relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <path
                                    d="M21 4H2v2h2.3l3.28 9a3 3 0 0 0 2.82 2H19v-2h-8.6a1 1 0 0 1-.94-.66L9 13h9.28a2 2 0 0 0 1.92-1.45L22 5.27A1 1 0 0 0 21.27 4 .84.84 0 0 0 21 4zm-2.75 7h-10L6.43 6h13.24z">
                                </path>
                                <circle cx="10.5" cy="19.5" r="1.5"></circle>
                                <circle cx="16.5" cy="19.5" r="1.5"></circle>
                            </svg>
                            <div
                                class="notifiy-no position-absolute rounded-circle d-flex justify-content-center align-items-center">
                                6</div>

                        </div>
                        <p class="ms-1 mt-4">Cart</p>
                    </div>
                    <div class="header-icon d-flex align-items-center">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <path
                                    d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z">
                                </path>
                            </svg>
                            <div class=""></div>

                        </div>
                        <p class="ms-1 mt-4">Account</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="search">
            <div class="searchheader-wrapper d-flex justify-content-start align-items-center">
                <div class="search-header all-padding d-flex justify-content-start align-items-center">
                    <div class="category-container">
                        <div class="dropdown">
                            <button class="category-header px-3 py-2 d-flex align-items-center button" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Browse All Categories<span><svg
                                        xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);transform: ;msFilter:;">
                                        <path
                                            d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z">
                                        </path>
                                    </svg></span></button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" style="width: 208px" href="#">Vegetables</a></li>
                                <li><a class="dropdown-item" href="#">Fruits</a></li>
                                <li><a class="dropdown-item" href="#">Others</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="search-container position-relative">
                        <input class="search-bar py-2 px-4" name='search' placeholder="Search for products" />
                        <button class="search-btn position-absolute"><svg xmlns="http://www.w3.org/2000/svg"
                                width="20" height="20" viewBox="0 0 24 24"
                                style="fill: #1F1D1D ;transform: ;msFilter:;">
                                <path
                                    d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z">
                                </path>
                            </svg></button>
                    </div>
                    <div class="phoneno-wrapper">
                        <div class="phoneno-container d-flex align-items-center">
                            <span">Call Us: </span><span class="phone-no ms-1"> 01 4288989</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- sidenav --}}
    <section class="sidenav .sidenav-intro ">
        <div class="d-flex justify-content-between" style="width: 100%">
            <span class="fw-bold fs-2 ">TARKARI</span>
            <button class="sidenavcross-btn" onclick="closeNav()"><svg xmlns="http://www.w3.org/2000/svg"
                    width="30" height="30" viewBox="0 0 24 24"
                    style="fill: rgb(255, 255, 255);transform: ;msFilter:;">
                    <path
                        d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                    </path>
                </svg></button>
        </div>
        <nav class="sidenav-nav">
            <ul class="sidenav-link list-inline d-flex flex-column justify-content-start">
                <li><a class="sidenav-btn" href="/"class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
                </li>
                <li><a class="sidenav-btn" href="/store"
                        class="{{ request()->is('Store') ? 'active' : '' }}">Store</a>
                </li>
                <li>
                    <div class="accordion dropdownsidenav-wrapper" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item dropdownsidenav-container ">

                            <button class="dropdown-sidenav sidenav-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne">
                                Blog<span class="nav-downarrow"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="18" height="18" viewBox="0 0 24 24"
                                        style="fill: rgb(255, 255, 255);transform: ;msFilter:;">
                                        <path
                                            d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z">
                                        </path>
                                    </svg></span>
                            </button>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                                <div class="accordion-body sidenavdrop-body">
                                    <a>
                                        Blog 1
                                    </a>
                                </div>
                                <div class="accordion-body sidenavdrop-body">
                                    <a>
                                        Blog 2
                                    </a>
                                </div>
                                <div class="accordion-body sidenavdrop-body">
                                    <a>
                                        Blog 3
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a class="sidenav-btn" href="Aboutus"
                        class="{{ request()->is('Aboutus') ? 'active' : '' }}">About
                        Us</a></li>
                <li><a class="sidenav-btn"
                        href="Contactus"class="{{ request()->is('Contactus') ? 'active' : '' }}">Contact
                        Us</a></li>
                <li>
                    <div class="accordion dropdownsidenav-wrapper" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item dropdownsidenav-container ">

                            <button class="dropdown-sidenav sidenav-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapsetwo" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapsetwo">
                                Browse All Categories<span class="nav-downarrow"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);transform: ;msFilter:;">
                                        <path
                                            d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z">
                                        </path>
                                    </svg></span>
                            </button>
                            <div id="panelsStayOpen-collapsetwo" class="accordion-collapse collapse">
                                <div class="accordion-body sidenavdrop-body">
                                    <a>
                                        Vegetables
                                    </a>
                                </div>
                                <div class="accordion-body sidenavdrop-body">
                                    <a>
                                        Fruits
                                    </a>
                                </div>
                                <div class="accordion-body sidenavdrop-body">
                                    <a>
                                        Bakery
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
            <div class="sidenavsearch-container position-relative mt-4">
                <input class="sidenavsearch-bar py-2 px-4" name='search' placeholder="Search for products" />
                <button class="sidenavsearch-btn position-absolute"><svg class="sidenav-search"
                        xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                        style="fill: #ffffff ;transform: ;msFilter:;">
                        <path
                            d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z">
                        </path>
                    </svg></button>
            </div>
        </nav>
    </section>
</header>
