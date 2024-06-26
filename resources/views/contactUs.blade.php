@extends('layouts.layout')

@section('content')
    @include('components.headerShortLink')

    @include('components.header')

    <section class="show-route all-padding d-flex align-items-center">
        <div class="">
            <div class="d-flex align-items-center">
                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    style="fill: #08bc3f;transform: ;msFilter:;">
                    <path
                        d="M5 22h14a2 2 0 0 0 2-2v-9a1 1 0 0 0-.29-.71l-8-8a1 1 0 0 0-1.41 0l-8 8A1 1 0 0 0 3 11v9a2 2 0 0 0 2 2zm5-2v-5h4v5zm-5-8.59 7-7 7 7V20h-3v-5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v5H5z">
                    </path>
                </svg>
                <span class="me-2 page-subtitle ">Home</span>
                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    style="fill: grey;transform: ;msFilter:;">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg>
                <span class="me-2" style="color: grey ">Contact Us</span>


            </div>
        </div>
    </section>

    <section class="contactdetails-wrapper all-padding">
        <p class="contactdetails-title mt-4">Contact Details</p>
        <p class="contactdetails-subtitle">If you have any questions about what we offer for consumers or for business, you
            can always email us or call us
            via the below details. We’ll reply within 24 hours.</p>
        <article class="contactlocation-container">
            <div>
                <div class="contactdetails-card ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: #08bc3f;transform: ;msFilter:;">
                        <path
                            d="M12 22s8.029-5.56 8-12c0-4.411-3.589-8-8-8S4 5.589 4 9.995C3.971 16.44 11.696 21.784 12 22zM8 9h3V6h2v3h3v2h-3v3h-2v-3H8V9z">
                        </path>
                    </svg>
                    <div class="location-container ms-2">
                        <p class="contact-title">Visit our Office</p>
                        <p class="location-title">Suryabinayak-5, Bhaktapur</p>
                    </div>
                </div>
                <div class="contactdetails-card">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: #08bc3f;transform: ;msFilter:;">
                        <path
                            d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 4.7-8 5.334L4 8.7V6.297l8 5.333 8-5.333V8.7z">
                        </path>
                    </svg>
                    <div class="location-container ms-2">
                        <p class="contact-title">Mail us at</p>
                        <p class="location-title">contact@khadkatrade.com
                        </p>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="contactdetails-card">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: #08bc3f;transform: ;msFilter:;">
                        <path
                            d="m20.487 17.14-4.065-3.696a1.001 1.001 0 0 0-1.391.043l-2.393 2.461c-.576-.11-1.734-.471-2.926-1.66-1.192-1.193-1.553-2.354-1.66-2.926l2.459-2.394a1 1 0 0 0 .043-1.391L6.859 3.513a1 1 0 0 0-1.391-.087l-2.17 1.861a1 1 0 0 0-.29.649c-.015.25-.301 6.172 4.291 10.766C11.305 20.707 16.323 21 17.705 21c.202 0 .326-.006.359-.008a.992.992 0 0 0 .648-.291l1.86-2.171a.997.997 0 0 0-.085-1.39z">
                        </path>
                    </svg>
                    <div class="location-container ms-2">
                        <p class="contact-title">Call us on</p>
                        <p class="location-title">01-4444444, +977 9844444444, 9844444444</p>
                    </div>
                </div>
                <div class="contactdetails-card">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: #08bc3f;transform: ;msFilter:;">
                        <path
                            d="m20.487 17.14-4.065-3.696a1.001 1.001 0 0 0-1.391.043l-2.393 2.461c-.576-.11-1.734-.471-2.926-1.66-1.192-1.193-1.553-2.354-1.66-2.926l2.459-2.394a1 1 0 0 0 .043-1.391L6.859 3.513a1 1 0 0 0-1.391-.087l-2.17 1.861a1 1 0 0 0-.29.649c-.015.25-.301 6.172 4.291 10.766C11.305 20.707 16.323 21 17.705 21c.202 0 .326-.006.359-.008a.992.992 0 0 0 .648-.291l1.86-2.171a.997.997 0 0 0-.085-1.39z">
                        </path>
                    </svg>
                    <div class="location-container ms-2">
                        <p class="contact-title">We are social</p>
                        <div class="team-icon text-center">
                            <a class="ceo-icon-links me-2" href="#">
                                <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="fill: #675E5E;transform: ;msFilter:;">
                                    <path
                                        d="M12.001 2.002c-5.522 0-9.999 4.477-9.999 9.999 0 4.99 3.656 9.126 8.437 9.879v-6.988h-2.54v-2.891h2.54V9.798c0-2.508 1.493-3.891 3.776-3.891 1.094 0 2.24.195 2.24.195v2.459h-1.264c-1.24 0-1.628.772-1.628 1.563v1.875h2.771l-.443 2.891h-2.328v6.988C18.344 21.129 22 16.992 22 12.001c0-5.522-4.477-9.999-9.999-9.999z">
                                    </path>
                                </svg>
                            </a>
                            <a class="ceo-icon-links me-2" href="#">
                                <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="fill: #675E5E;transform: ;msFilter:;">
                                    <path
                                        d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z">
                                    </path>
                                    <circle cx="16.806" cy="7.207" r="1.078"></circle>
                                    <path
                                        d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z">
                                    </path>
                                </svg>
                            </a>
                            <a class="ceo-icon-links me-2" href="#">
                                <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="fill: #675E5E;transform: ;msFilter:;">
                                    <path
                                        d="M20 3H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM8.339 18.337H5.667v-8.59h2.672v8.59zM7.003 8.574a1.548 1.548 0 1 1 0-3.096 1.548 1.548 0 0 1 0 3.096zm11.335 9.763h-2.669V14.16c0-.996-.018-2.277-1.388-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248h-2.667v-8.59h2.56v1.174h.037c.355-.675 1.227-1.387 2.524-1.387 2.704 0 3.203 1.778 3.203 4.092v4.71z">
                                    </path>
                                </svg>
                            </a>
                            <a class="ceo-icon-links">
                                <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="fill: #675E5E;transform: ;msFilter:;">
                                    <path
                                        d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </article>
    </section>

    <section class="contactform-wrapper all-padding">
        <p class="contactform-subtitle">Contact Form</p>
        <p class="contactdetails-title">Drop us a Line</p>
        <p class="contactform-desc">Your email address will not be published. Required fields are marked*</p>
        <article class="forminput-container">
            <form class="" action="" method="">
                <div class="forminput-box d-flex ">
                    <input class="contactform-input" type="text" placeholder="First Name" id="formFirstName" />
                    <input class="contactform-input" type="text" placeholder="Last Name" id="formLastName" />
                </div>
                <div class="forminput-emailbox d-flex mt-4">
                    <input class="contactform-input" type="email" placeholder="Email" id="formEmail" />
                    <input class="contactform-input" type="text" placeholder="Subject" id="formSubject" />
                </div>
                <textarea class="contactform-msg mt-4" type="textfield" placeholder="Message" id="formMessage"></textarea>
                <br>
                <button class="button contactform-btn mt-4">Send Message</button>
            </form>
            <figure>
                <img class="contactform-img" src="{{ asset('images/contactform.png') }}" alt="using mobile phone">
            </figure>
        </article>

    </section>

    @include('components.footer')
@endsection
