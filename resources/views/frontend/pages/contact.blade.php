@extends('frontend.layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/compress-css/pages/contactPage-style.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
@endpush
@section('content')
    <!-- banner section -->
    <header class="hero--inner--banner">
        <img src="{{ asset('assets/frontend/images/banner-img/contact-page-banner.webp') }}" alt=""
            class="banner--img" />
        <div class="container-fluid banner--content--overlay">
            <div class="col-md-6">
                <h1 class="title">
                    Let’s grow your <br class="d-none d-md-block" />
                    business together.
                </h1>
                <p class="fs-6">Complete the form and see how we can assist you.</p>
            </div>
        </div>
    </header>
    <main>
        <!-- contact form section -->
        <section class="contact-form-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <span class="d-block fs-5 fw-bold color-primary">Contact us</span>
                        <h2 class="heading-2">
                            We’re just a
                            <span>
                                <img src="{{ asset('assets/frontend/svg/plane-img.svg') }}" alt="plane vector image"
                                    loading="lazy" width="38" height="38" />
                            </span>
                            click away
                        </h2>
                        <p>Email, call or complete the form to learn how iSearchSolution can solve your messaging problem.
                        </p>
                        <ul class="list-style mt-5 pt-5">
                            <li>
                                <a href="tel:+919540310091" class="icon-link text-decoration-none text-dark">
                                    <i class="cc--icon Call02Icon" style="--cc-icon-size: 18px; --cc-icon-color: #333"></i>
                                    +91 954-031-0091
                                </a>
                            </li>
                            <li>
                                <a href="tel:+919871312382" class="icon-link text-decoration-none text-dark">
                                    <i class="cc--icon Call02Icon" style="--cc-icon-size: 18px; --cc-icon-color: #333"></i>
                                    +91 987-131-2382
                                </a>
                            </li>
                        </ul>
                        <div class="py-5">
                            <h3 class="text-decoration-underline fs-5 fw-bold mb-4">Customer Support</h3>
                            <div class="row g-2">
                                <div class="col-md-6 col-12">
                                    <div class="shadow-sm h-100 bg-white p-3">
                                        <span class="d-block fs-6 fw-semibold">United Kingdom:</span>
                                        <p class="fs-6 mb-0">
                                            <a href="tel:+4402039962018" class="icon-link text-decoration-none text-dark">
                                                <i class="cc--icon Call02Icon"
                                                    style="--cc-icon-size: 18px; --cc-icon-color: #333"></i>
                                                +44 020 3996 2018
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="rounded-3 h-100 bg-white p-3 shadow-sm">
                                        <span class="d-block fs-6 fw-semibold">E-mail</span>
                                        <p class="fs-6 mb-0">
                                            <a href="mailto:bdm@isearchsolution.com"
                                                class="icon-link text-decoration-none text-dark">
                                                <i class="cc--icon Mail01Icon"
                                                    style="--cc-icon-size: 18px; --cc-icon-color: #333"></i>
                                                bdm@isearchsolution.com
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5 col-12">
                        <div class="form-wrapper">
                            <div class="top-part p-4 pb-0">
                                <span class="d-block fw-medium mb-1"> Feel Free to <span class="color-primary">contact
                                        us</span> </span>
                                <p class="text-muted small mb-0">*Marked Information is Mandatory</p>
                            </div>
                            <form id="enquiryForm" action="https://www.isearchsolution.com/isearchenquiry.aspx"
                                method="post" name="issContactForm" novalidate autocomplete="off" class="p-4">
                                <input type="hidden" name="form_time" id="form_time" />
                                <meta name="csrf-token" content="{{ csrf_token() }}">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <input type="text" id="name" class="form-control" placeholder="Full name*"
                                            name="name" required />
                                        <span class="field-error" id="err-name"></span>
                                        <input type="hidden" id="dial_code" name="dial_code">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input type="tel" id="mobile" class="form-control"
                                                placeholder="Phone number*" name="mobile" required pattern="[0-9]{10}" />
                                        </div>
                                        <span class="field-error" id="err-mobile"></span>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" id="email" class="form-control" placeholder="Your email*"
                                            name="email" required />
                                        <span class="field-error" id="err-email"></span>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="url" id="url" class="form-control" placeholder="Website Url"
                                            name="url" />
                                        <span class="field-error" id="err-url"></span>
                                    </div>
                                    <div class="col-12">
                                        <select class="form-select" aria-label="Default select example" id="service" name="service" required>
                                            <option value="" disabled selected hidden>Choose Services*</option>
                                            <option value="seo">Search Engine Optimization (SEO)</option>
                                            <option value="social-media">Social Media</option>
                                            <option value="performance-marketing">Paid Ads / Performance Marketing</option>
                                            <option value="orm">Online Reputation Management (ORM)</option>
                                            <option value="web-design">Web Design</option>
                                            <option value="web-application">Web Application</option>
                                            <option value="mobile-app-development">Mobile App Development</option>
                                            <option value="web-analytics">Web Analytics</option>
                                            <option value="devops-services">DevOps Services</option>
                                            <option value="software-solutions">Software Solutions</option>
                                        </select>
                                        <span class="field-error" id="err-service"></span>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" rows="5" id="requirement" placeholder="How can we help?" name="requirement"
                                            required></textarea>
                                        <span class="field-error" id="err-requirement"></span>
                                    </div>
                                    <div class="g-recaptcha" data-sitekey="6LcrOQssAAAAANk-ATPTST8Lj0nmbx0vCHylfzC9">
                                    </div>
                                    <span class="field-error" id="err-captcha"></span>
                                    <div class="col-12">
                                        <button class="primary-btn w-100" id="submitBtn" type="submit"
                                            name="submit">Send Request</button>
                                    </div>
                                    <!-- reCAPTCHA -->
                                    <div class="col-12">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <p class="mt-0 mb-0 text-muted text-center">
                                                In case you hate forms <br />
                                                <strong>bdm@isearchsolution.com</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- location section -->
        <section class="contact-location-section">
            <div class="container-fluid">
                <div class="row g-lg-5 g-3">
                    <div class="col-md-8 col-12">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3502.692511720297!2d77.292!3d28.609!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce4a0e73d52e5%3A0xf59dcb9fe7b452ea!2siSearch%20Solution!5e0!3m2!1sen!2sin!4v1769856715660!5m2!1sen!2sin"
                            class="location-map rounded-4" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-4 col-12">
                        <div>
                            <span class="fs-6 fw-bold color-primary">Our Location</span>
                            <h2 class="heading-3 my-2">Find us here.</h2>
                            <div class="mt-4">
                                <span class="fs-6 fw-bold">Headquarter</span>
                                <address class="mb-4">Acharya Niketan, Mayur Vihar Phase 1, Mayur Vihar, New Delhi, Delhi
                                    110091</address>
                                <a href="https://maps.app.goo.gl/gqJwUnnEG3Uucw6aA" target="_blank"
                                    class="primary-btn text-decoration-none nav-link">
                                    Open in Google Maps
                                    <span class="btn-icon">
                                        <i class="ri-arrow-right-s-line ri-xl"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="overflow-hidden rounded-4 mt-4">
                                <img src="{{ asset('assets/frontend/images/location-map-image.webp') }}" alt=""
                                    class="w-100 h-100 object-fit-cover" loading="lazy" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('scripts')
    <script src="{{ asset('assets/frontend/lib/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/new-main.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/enquiry.js') }}" defer></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        const phoneInputField = document.querySelector("#mobile");
        const phoneInput = window.intlTelInput(phoneInputField, {
            separateDialCode: true,
            initialCountry: "in",
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
    </script>
@endpush
