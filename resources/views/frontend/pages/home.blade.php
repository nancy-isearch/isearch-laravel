@extends('frontend.layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/compress-css/pages/homePage-style-v2.min.css') }}" />
@endpush
@section('content')
    <main>
        <!-- hero banner section -->
        <section class="home-banner py-0">
            <div class="h-100 position-relative text-white">
                <div class="swiper h-100 banner-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <picture class="banner-img-wrapper">
                                <source media="(max-width: 520px)"
                                    srcset="{{ asset('assets/frontend/images/banner-img/mobile/ai-seo-page-mb-banner.webp') }}" width="520"
                                    height="460" />
                                <source media="(max-width: 768px)"
                                    srcset="{{ asset('assets/frontend/images/banner-img/tab/ai-seo-page-tb-banner.webp') }}" width="768"
                                    height="520" />
                                <source media="(max-width: 1600px)"
                                    srcset="{{ asset('assets/frontend/images/banner-img/laptop/ai-seo-page-lb-banner.webp') }}" width="1600"
                                    height="520" />
                                <source media="(min-width: 769px)"
                                    srcset="{{ asset('assets/frontend/images/banner-img/ai-seo-page-banner.webp') }}" width="1920"
                                    height="520" />
                                <img src="{{ asset('assets/frontend/images/banner-img/ai-seo-page-banner.webp') }}"
                                    alt="A white humanoid robot with glowing orange eyes typing on a laptop in an office."
                                    width="1920" height="520" loading="eager" fetchpriority="high" />
                            </picture>
                            <div class="container-fluid p-0 h-100">
                                <div class="row mx-0 align-items-center h-100">
                                    <div class="col-12 col-md-8 offset-md-1">
                                        <span class="eye">AI Powered Solutions</span>
                                        <h1 class="display-3 fw-bold fade-up">
                                            Turn Data Into <br />
                                            <span class="d-block fw-normal">Smart Decisions</span>
                                        </h1>
                                        <div class="row g-2 g-md-4 align-items-center mt-sm-2">
                                            <div class="col-auto order-1 order-sm-0">
                                                <a href="/ai-solutions/ai-seo-services.html"
                                                    aria-label="Go To Ai SEO Services Page"
                                                    class="svg-wrapper fade-in animation-delay-1">
                                                    <svg class="rotating-badge" viewBox="0 0 200 200" role="presentation">
                                                        <defs>
                                                            <path id="circlePath"
                                                                d="M 100,100 m -75,0 a 75,75 0 1,1 150,0 a 75,75 0 1,1 -150,0" />
                                                        </defs>
                                                        <g class="rotating-text">
                                                            <text font-size="20" font-weight="600" letter-spacing="6"
                                                                fill="#fff">
                                                                <textPath href="#circlePath">Explore more • Explore more •
                                                                </textPath>
                                                            </text>
                                                        </g>
                                                    </svg>
                                                    <div class="svg-icon-wrapper">
                                                        <svg class="icon--cc"
                                                            style="--cc-icon-size: 22px; --cc-icon-color: #fff">
                                                            <use
                                                                href="{{ asset('assets/frontend/icons.svg') }}#arrow-right-02-stroke-rounded" />
                                                        </svg>
                                                    </div>
                                                </a>
                                            </div>
                                            <p
                                                class="col-12 col-sm-8 col-lg-6 mb-0 fade-up animation-delay-1 order-0 order-sm-1 line-clamp-3">
                                                Through advanced AI technology, we transform raw data into meaningful
                                                insights and automated solutions. At iSearchSolution, our AI-driven systems
                                                help businesses improve
                                                efficiency, personalize customer experiences, and make smarter decisions for
                                                sustainable growth.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <picture class="banner-img-wrapper">
                                <source media="(max-width: 520px)"
                                    srcset="{{ asset('assets/frontend/images/banner-img/mobile/seo-experts-mb-banner.webp') }}" width="520"
                                    height="460" />
                                <source media="(max-width: 768px)"
                                    srcset="{{ asset('assets/frontend/images/banner-img/tab/seo-experts-tb-banner.webp') }}" width="768"
                                    height="520" />
                                <source media="(max-width: 1600px)"
                                    srcset="{{ asset('assets/frontend/images/banner-img/laptop/seo-experts-lb-banner.webp') }}" width="1600"
                                    height="520" />
                                <source media="(min-width: 769px)"
                                    srcset="{{ asset('assets/frontend/images/banner-img/seo-experts-banner.webp') }}" width="1920"
                                    height="520" />
                                <img src="{{ asset('assets/frontend/images/banner-img/seo-experts-banner.webp') }}" alt=""
                                    width="1920" height="520" loading="lazy" />
                            </picture>
                            <div class="container-fluid p-0 h-100">
                                <div class="row mx-0 align-items-center h-100">
                                    <div class="col-12 col-md-8 offset-md-1">
                                        <span class="eye">SEO Experts</span>
                                        <h2 class="display-3 fw-bold fade-up">
                                            Where Strategy <br />
                                            <span class="d-block fw-normal">Meets Actions.</span>
                                        </h2>
                                        <div class="row g-2 g-md-4 align-items-center mt-sm-2">
                                            <div class="col-auto order-1 order-sm-0">
                                                <a href="/search-engine-optimization/seo-services.html"
                                                    aria-label="Go To SEO Services Page"
                                                    class="svg-wrapper fade-in animation-delay-1">
                                                    <svg class="rotating-badge" viewBox="0 0 200 200" role="presentation">
                                                        <defs>
                                                            <path id="circlePath"
                                                                d="M 100,100 m -75,0 a 75,75 0 1,1 150,0 a 75,75 0 1,1 -150,0" />
                                                        </defs>
                                                        <g class="rotating-text">
                                                            <text font-size="20" font-weight="600" letter-spacing="6"
                                                                fill="#fff">
                                                                <textPath href="#circlePath">Explore more • Explore more •
                                                                </textPath>
                                                            </text>
                                                        </g>
                                                    </svg>
                                                    <div class="svg-icon-wrapper">
                                                        <svg class="icon--cc"
                                                            style="--cc-icon-size: 22px; --cc-icon-color: #fff">
                                                            <use
                                                                href="{{ asset('assets/frontend/icons.svg') }}#arrow-right-02-stroke-rounded" />
                                                        </svg>
                                                    </div>
                                                </a>
                                            </div>
                                            <p
                                                class="col-12 col-sm-8 col-lg-6 mb-0 fade-up animation-delay-1 order-0 order-sm-1 line-clamp-3">
                                                At iSearchSolution, we don't just create strategies; we make sincere efforts
                                                to turn them into measurable results. With content excellence and technical
                                                precision, we
                                                increase traffic and improve the user experience.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <picture class="banner-img-wrapper">
                                <source media="(max-width: 520px)"
                                    srcset="{{ asset('assets/frontend/images/banner-img/mobile/ui-ux-experts-mb-banner.webp') }}"
                                    width="520" height="460" />
                                <source media="(max-width: 768px)"
                                    srcset="{{ asset('assets/frontend/images/banner-img/tab/ui-ux-experts-tb-banner.webp') }}" width="768"
                                    height="520" />
                                <source media="(max-width: 1600px)"
                                    srcset="{{ asset('assets/frontend/images/banner-img/laptop/ui-ux-experts-lb-banner.webp') }}"
                                    width="1600" height="520" />
                                <source media="(min-width: 769px)"
                                    srcset="{{ asset('assets/frontend/images/banner-img/ui-ux-experts-banner.webp') }}" width="1920"
                                    height="520" />
                                <img src="{{ asset('assets/frontend/images/banner-img/ui-ux-experts-banner.webp') }}" alt=""
                                    width="1920" height="520" loading="lazy" />
                            </picture>
                            <div class="container-fluid p-0 h-100">
                                <div class="row mx-0 align-items-center h-100">
                                    <div class="col-12 col-md-8 offset-md-1">
                                        <span class="eye">UI/UX Experts</span>
                                        <h2 class="display-3 fw-bold mt-2 fade-up">
                                            Minimal Design. <br />
                                            <span class="d-block fw-normal">Maximum Impact</span>
                                        </h2>
                                        <div class="row g-2 g-md-4 align-items-center mt-sm-2">
                                            <div class="col-auto order-1 order-sm-0">
                                                <a href="/web-design/website-design.html"
                                                    aria-label="Go To Website Design Page"
                                                    class="svg-wrapper fade-in animation-delay-1">
                                                    <svg class="rotating-badge" viewBox="0 0 200 200"
                                                        role="presentation">
                                                        <defs>
                                                            <path id="circlePath"
                                                                d="M 100,100 m -75,0 a 75,75 0 1,1 150,0 a 75,75 0 1,1 -150,0" />
                                                        </defs>
                                                        <g class="rotating-text">
                                                            <text font-size="20" font-weight="600" letter-spacing="6"
                                                                fill="#fff">
                                                                <textPath href="#circlePath">Explore more • Explore more •
                                                                </textPath>
                                                            </text>
                                                        </g>
                                                    </svg>
                                                    <div class="svg-icon-wrapper">
                                                        <svg class="icon--cc"
                                                            style="--cc-icon-size: 22px; --cc-icon-color: #fff">
                                                            <use
                                                                href="{{ asset('assets/frontend/icons.svg') }}#arrow-right-02-stroke-rounded" />
                                                        </svg>
                                                    </div>
                                                </a>
                                            </div>
                                            <p
                                                class="col-12 col-sm-8 col-lg-6 mb-0 fade-up animation-delay-1 order-0 order-sm-1 line-clamp-3">
                                                We shape your ideas for impactful digital experiences that drive higher
                                                conversions and build lasting brand credibility. By balancing simplicity,
                                                usability, and visual
                                                clarity, we create a lasting impression.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <picture class="banner-img-wrapper">
                                <source media="(max-width: 520px)"
                                    srcset="{{ asset('assets/frontend/images/banner-img/mobile/social-experts-mb-banner.webp') }}"
                                    width="520" height="460" />
                                <source media="(max-width: 768px)"
                                    srcset="{{ asset('assets/frontend/images/banner-img/tab/social-experts-tb-banner.webp') }}"
                                    width="768" height="520" />
                                <source media="(max-width: 1600px)"
                                    srcset="{{ asset('assets/frontend/images/banner-img/laptop/social-experts-lb-banner.webp') }}"
                                    width="1600" height="520" />
                                <source media="(min-width: 769px)"
                                    srcset="{{ asset('assets/frontend/images/banner-img/social-experts-banner.webp') }}" width="1920"
                                    height="520" />
                                <img src="{{ asset('assets/frontend/images/banner-img/social-experts-banner.webp') }}" alt=""
                                    width="1920" height="520" loading="lazy" />
                            </picture>
                            <div class="container-fluid p-0 h-100">
                                <div class="row mx-0 align-items-center h-100">
                                    <div class="col-12 col-md-8 offset-md-1">
                                        <span class="eye">Social Experts</span>
                                        <h2 class="display-3 fw-bold mt-2 fade-up">
                                            Turn Likes <br />
                                            <span class="d-block fw-normal">into Leads</span>
                                        </h2>
                                        <div class="row g-2 g-md-4 align-items-center mt-sm-2">
                                            <div class="col-auto order-1 order-sm-0">
                                                <a href="/social-media/social-media-optimization.html"
                                                    aria-label="Go To SMO Services Page"
                                                    class="svg-wrapper fade-in animation-delay-1">
                                                    <svg class="rotating-badge" viewBox="0 0 200 200"
                                                        role="presentation">
                                                        <defs>
                                                            <path id="circlePath"
                                                                d="M 100,100 m -75,0 a 75,75 0 1,1 150,0 a 75,75 0 1,1 -150,0" />
                                                        </defs>
                                                        <g class="rotating-text">
                                                            <text font-size="20" font-weight="600" letter-spacing="6"
                                                                fill="#fff">
                                                                <textPath href="#circlePath">Explore more • Explore more •
                                                                </textPath>
                                                            </text>
                                                        </g>
                                                    </svg>
                                                    <div class="svg-icon-wrapper">
                                                        <svg class="icon--cc"
                                                            style="--cc-icon-size: 22px; --cc-icon-color: #fff">
                                                            <use
                                                                href="{{ asset('assets/frontend/icons.svg') }}#arrow-right-02-stroke-rounded" />
                                                        </svg>
                                                    </div>
                                                </a>
                                            </div>
                                            <p
                                                class="col-12 col-sm-8 col-lg-6 mb-0 fade-up animation-delay-1 order-0 order-sm-1 line-clamp-3">
                                                Through social media strategies, we turn passive scrolling into engagement,
                                                trust, and action. At iSearchSolution, we build loyal customers, boost
                                                engagement, and drive real
                                                business growth.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="banner-btn banner-btn-left d-none d-md-flex" id="banner-btn-left">
                    <div class="banner-btn-icon">
                        <svg class="icon--cc">
                            <use href="{{ asset('assets/frontend/icons.svg') }}#arrow-left-01-stroke-rounded" />
                        </svg>
                    </div>
                </button>
                <button type="button" class="banner-btn banner-btn-right d-none d-md-flex" id="banner-btn-right">
                    <div class="banner-btn-icon">
                        <svg class="icon--cc">
                            <use href="{{ asset('assets/frontend/icons.svg') }}#arrow-right-01-stroke-rounded" />
                        </svg>
                    </div>
                </button>
            </div>
        </section>
        <!-- partners section -->
        <section class="home-partners-section">
            <div class="pill-wrapper">
                <span class="floating-badge">Trusted by the world's leading brands</span>
            </div>
            <div class="marquee-row">
                <div class="marquee-inner">
                    <div class="tool-chip">
                        <img src="{{ asset('assets/frontend/images/partners-logos/dr-reddys-logo.webp') }}" alt="Dr Reddys Logo"
                            class="partnersBrand-logo" loading="lazy" width="260" height="80" />
                    </div>
                    <div class="tool-chip">
                        <img src="{{ asset('assets/frontend/images/partners-logos/tui-Logo.webp') }}" alt="Tui logo"
                            class="partnersBrand-logo" loading="lazy" width="260" height="80" />
                    </div>
                    <div class="tool-chip">
                        <img src="{{ asset('assets/frontend/images/partners-logos/agarwal-packers-logo.webp') }}" alt="Agarwal Packers Logo"
                            class="partnersBrand-logo" loading="lazy" width="260" height="80" />
                    </div>
                    <div class="tool-chip">
                        <img src="{{ asset('assets/frontend/images/partners-logos/autogorilla.webp') }}" alt="Autogorilla"
                            class="partnersBrand-logo" loading="lazy" width="260" height="80" />
                    </div>
                    <div class="tool-chip">
                        <img src="{{ asset('assets/frontend/images/partners-logos/buzztribe-news.webp') }}" alt="Buzztribe News"
                            class="partnersBrand-logo" loading="lazy" width="260" height="80" />
                    </div>
                    <div class="tool-chip">
                        <img src="{{ asset('assets/frontend/images/partners-logos/cholantour.webp') }}" alt="Cholantour"
                            class="partnersBrand-logo" loading="lazy" width="260" height="80" />
                    </div>
                    <div class="tool-chip">
                        <img src="{{ asset('assets/frontend/images/partners-logos/darjuv9export.webp') }}" alt="Darjuv9export"
                            class="partnersBrand-logo" loading="lazy" width="260" height="80" />
                    </div>
                    <div class="tool-chip">
                        <img src="{{ asset('assets/frontend/images/partners-logos/floweruae.webp') }}" alt="Floweruae"
                            class="partnersBrand-logo" loading="lazy" width="260" height="80" />
                    </div>
                    <div class="tool-chip">
                        <img src="{{ asset('assets/frontend/images/partners-logos/giftalove.webp') }}" alt="Giftalove"
                            class="partnersBrand-logo" loading="lazy" width="260" height="80" />
                    </div>
                    <div class="tool-chip">
                        <img src="{{ asset('assets/frontend/images/partners-logos/groweon.webp') }}" alt="Groweon"
                            class="partnersBrand-logo" loading="lazy" width="260" height="80" />
                    </div>
                    <div class="tool-chip">
                        <img src="{{ asset('assets/frontend/images/partners-logos/hawks-key-resorts.webp') }}" alt="Hawks Key Resorts"
                            class="partnersBrand-logo" loading="lazy" width="260" height="80" />
                    </div>
                    <div class="tool-chip">
                        <img src="{{ asset('assets/frontend/images/partners-logos/hellotravel.webp') }}" alt="Hellotravel"
                            class="partnersBrand-logo" loading="lazy" width="260" height="80" />
                    </div>
                    <div class="tool-chip">
                        <img src="{{ asset('assets/frontend/images/partners-logos/Herbs_and_Hills_Logo.webp') }}" alt="Herbs and Hills Logo"
                            class="partnersBrand-logo" loading="lazy" width="260" height="80" />
                    </div>
                    <div class="tool-chip">
                        <img src="{{ asset('assets/frontend/images/partners-logos/hyppernation.webp') }}" alt="Hyppernation"
                            class="partnersBrand-logo" loading="lazy" width="260" height="80" />
                    </div>
                    <div class="tool-chip">
                        <img src="{{ asset('assets/frontend/images/partners-logos/igp.webp') }}" alt="Igp" class="partnersBrand-logo"
                            loading="lazy" width="260" height="80" />
                    </div>
                    <div class="tool-chip">
                        <img src="{{ asset('assets/frontend/images/partners-logos/indianpanorama.webp') }}" alt="Indianpanorama"
                            class="partnersBrand-logo" loading="lazy" width="260" height="80" />
                    </div>
                    <div class="tool-chip">
                        <img src="{{ asset('assets/frontend/images/partners-logos/lenskart.webp') }}" alt="Lenskart"
                            class="partnersBrand-logo" loading="lazy" width="260" height="80" />
                    </div>
                    <div class="tool-chip">
                        <img src="{{ asset('assets/frontend/images/partners-logos/neoessentialoil.webp') }}" alt="Neoessentialoil"
                            class="partnersBrand-logo" loading="lazy" width="260" height="80" />
                    </div>
                    <div class="tool-chip">
                        <img src="{{ asset('assets/frontend/images/partners-logos/nuberghfd.webp') }}" alt="Nuberghfd"
                            class="partnersBrand-logo" loading="lazy" width="260" height="80" />
                    </div>
                    <div class="tool-chip">
                        <img src="{{ asset('assets/frontend/images/partners-logos/rakhi.webp') }}" alt="Rakhi" class="partnersBrand-logo"
                            loading="lazy" width="260" height="80" />
                    </div>
                    <div class="tool-chip">
                        <img src="{{ asset('assets/frontend/images/partners-logos/rakhibazaar.webp') }}" alt="Rakhibazaar"
                            class="partnersBrand-logo" loading="lazy" width="260" height="80" />
                    </div>
                    <div class="tool-chip">
                        <img src="{{ asset('assets/frontend/images/partners-logos/southtourism.webp') }}" alt="Southtourism"
                            class="partnersBrand-logo" loading="lazy" width="260" height="80" />
                    </div>
                    <div class="tool-chip">
                        <img src="{{ asset('assets/frontend/images/partners-logos/surfindia.webp') }}" alt="Surfindia"
                            class="partnersBrand-logo" loading="lazy" width="260" height="80" />
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Services -->
        <section class="sec sec-alt home-services-section">
            <div class="container-fluid">
                <div class="sec-head mb-3">
                    <h2 class="heading-1">Our <span class="color-primary">Services</span></h2>
                </div>
                <div class="tab-system">
                    <div class="tab-wrapper">
                        <!-- tab 1 -->
                        <input id="tab-1" type="radio" name="tab-group" class="tab-system__input"
                            checked="checked" hidden />
                        <label for="tab-1" class="tab-system__label">SEO Services</label>
                        <!-- tab 2 -->
                        <input id="tab-2" type="radio" name="tab-group" class="tab-system__input" hidden />
                        <label for="tab-2" class="tab-system__label">UI/UX Design</label>
                        <!-- tab 3 -->
                        <input id="tab-3" type="radio" name="tab-group" class="tab-system__input" hidden />
                        <label for="tab-3" class="tab-system__label">DevOps Services</label>
                        <!-- tab 4 -->
                        <input id="tab-4" type="radio" name="tab-group" class="tab-system__input" hidden />
                        <label for="tab-4" class="tab-system__label">Social media marketing</label>
                        <!-- tab 5 -->
                        <input id="tab-5" type="radio" name="tab-group" class="tab-system__input" hidden />
                        <label for="tab-5" class="tab-system__label">Web App Development</label>
                        <!-- tab 6 -->
                        <input id="tab-6" type="radio" name="tab-group" class="tab-system__input" hidden />
                        <label for="tab-6" class="tab-system__label">Mobile App Development</label>
                        <!-- tab 7 -->
                        <input id="tab-7" type="radio" name="tab-group" class="tab-system__input" hidden />
                        <label for="tab-7" class="tab-system__label">ORM</label>
                    </div>
                    <!-- tab content -->
                    <div class="tab-system__content-wrapper">
                        <!-- content 1 -->
                        <div id="content-1" class="tab-system__panel">
                            <div class="service-card rounded-4 service-card1">
                                <div class="row">
                                    <div class="col-lg-6 service-image">
                                        <img src="{{ asset('assets/frontend/images/sliders/our-services/seo-service-slider-card-img.webp') }}"
                                            alt="Seo services" width="460" height="320" loading="lazy" />
                                    </div>
                                    <div class="col-lg-6 card-content">
                                        <h3 class="service-title">We optimise today to rank tomorrow.</h3>
                                        <p class="mt-3">
                                            At iSearchSolution, we deliver holistic SEO solutions to boost your rankings,
                                            enhance user experience, and position your brand for success in the competitive
                                            digital landscape.
                                            Through content excellence, we drive sustainable growth and measurable outcomes.
                                        </p>
                                        <a href="/search-engine-optimization/seo-services.html"
                                            class="learn-more mt-3 d-inline-block">Learn More →</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- content 2 -->
                        <div id="content-2" class="tab-system__panel">
                            <div class="service-card rounded-4 service-card2">
                                <div class="row">
                                    <div class="col-lg-6 service-image">
                                        <img src="{{ asset('assets/frontend/images/sliders/our-services/ui-ux-design-slider-card-img.webp') }}"
                                            alt="ui/ux designer" width="460" height="320" loading="lazy" />
                                    </div>
                                    <div class="col-lg-6 card-content">
                                        <span class="service-title">Crafting design to engage and inspire.</span>
                                        <p class="mt-3">
                                            We are creating user-centric UI/UX designs that enhance usability, boost
                                            engagement, and deliver seamless digital experiences. By blending research with
                                            creativity, we craft
                                            visually appealing interfaces to achieve 100% customer satisfaction and
                                            remarkable business growth.
                                        </p>
                                        <a href="/web-design/website-design.html"
                                            class="learn-more mt-3 d-inline-block">Learn More →</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- content 3 -->
                        <div id="content-3" class="tab-system__panel">
                            <div class="service-card rounded-4 service-card3">
                                <div class="row">
                                    <div class="col-lg-6 service-image">
                                        <img src="{{ asset('assets/frontend/images/sliders/our-services/devops-slider-card-img.webp') }}"
                                            alt="devops slider" width="460" height="320" loading="lazy" />
                                    </div>
                                    <div class="col-lg-6 card-content">
                                        <span class="service-title">Get speed to scale your business.</span>
                                        <p class="mt-3">
                                            Through CI/CD integration and cloud-native practices, we optimise development
                                            pipelines, automate infrastructure, and streamline deployments. By improving
                                            release velocity,
                                            system reliability, and operational efficiency, we enable organisations to
                                            deliver scalable, high-performance applications with greater stability and
                                            security.
                                        </p>
                                        <a href="/devops-services/" class="learn-more mt-3 d-inline-block">Learn More
                                            →</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- content 4 -->
                        <div id="content-4" class="tab-system__panel">
                            <div class="service-card rounded-4 service-card4">
                                <div class="row">
                                    <div class="col-lg-6 service-image">
                                        <img src="{{ asset('assets/frontend/images/sliders/our-services/social-media-marketing-slider-card-img.webp') }}"
                                            alt="social media marketing" width="460" height="320" loading="lazy" />
                                    </div>
                                    <div class="col-lg-6 card-content">
                                        <span class="service-title">We boost your social media presence.</span>
                                        <p class="mt-3">
                                            With result-oriented social media strategies, we build meaningful connections
                                            and grow your brand visibility. From content creation to community engagement,
                                            we help you reach
                                            the right audience at the right time. Every post, story, and campaign is
                                            designed to make a lasting brand impact.
                                        </p>
                                        <a href="/social-media/social-media-optimization.html"
                                            class="learn-more mt-3 d-inline-block">Learn More →</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- content 5 -->
                        <div id="content-5" class="tab-system__panel">
                            <div class="service-card rounded-4 service-card5">
                                <div class="row">
                                    <div class="col-lg-6 service-image">
                                        <img src="{{ asset('assets/frontend/images/sliders/our-services/web-app-development-slider-card-img.webp') }}"
                                            alt="Web app development" width="460" height="320" loading="lazy" />
                                    </div>
                                    <div class="col-lg-6 card-content">
                                        <span class="service-title">We build apps that scale your business.</span>
                                        <p class="mt-3">
                                            From design through development, our solutions are built for performance,
                                            scalability, and security. Our developers combine modern technologies with
                                            seamless user experiences
                                            to deliver apps that meet your business requirements. With streamlined
                                            operations and support, we ensure seamless execution at every stage.
                                        </p>
                                        <a href="/website-development/web-application.html"
                                            class="learn-more mt-3 d-inline-block">Learn More →</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- content 6 -->
                        <div id="content-6" class="tab-system__panel">
                            <div class="service-card rounded-4 service-card6">
                                <div class="row">
                                    <div class="col-lg-6 service-image">
                                        <img src="{{ asset('assets/frontend/images/sliders/our-services/mobile-app-development-slider-card-img.webp') }}"
                                            alt="Mobile App development" width="460" height="320" loading="lazy" />
                                    </div>
                                    <div class="col-lg-6 card-content">
                                        <span class="service-title">Designed for users, Built for results.</span>
                                        <p class="mt-3">
                                            At iSearchSolution, we design and develop high-performance mobile applications
                                            tailored to your business objectives. When building mobile applications, we aim
                                            to deliver
                                            seamless user experiences across iOS and Android. With robust functionality and
                                            scalable architecture, we build apps users love.
                                        </p>
                                        <a href="/software-solutions/application-software-development.html"
                                            class="learn-more mt-3 d-inline-block">Learn More →</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- content 7 -->
                        <div id="content-7" class="tab-system__panel">
                            <div class="service-card rounded-4 service-card7">
                                <div class="row">
                                    <div class="col-lg-6 service-image">
                                        <img src="{{ asset('assets/frontend/images/sliders/our-services/orm-slider-card-img.webp') }}"
                                            alt="ORM service" width="460" height="320" loading="lazy" />
                                    </div>
                                    <div class="col-lg-6 card-content">
                                        <span class="service-title">We build trust that drives growth.</span>
                                        <p class="mt-3">
                                            With our systematic approach, we take proactive steps to protect, repair and
                                            restore your reputation. By addressing negative feedback and promoting credible
                                            content, we empower
                                            your reputation and offer long-term growth.
                                        </p>
                                        <a href="/online-reputation-management/"
                                            class="learn-more mt-3 d-inline-block">Learn More →</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SEO Consulting section -->
        <section class="home-seo-section">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4 d-none d-lg-flex flex-column justify-content-center">
                        <div class="seo-image">
                            <img src="{{ asset('assets/frontend/images/strategic-seo-consulting.webp') }}" width="500" height="600"
                                alt="SEO Consulting" loading="lazy" />
                        </div>
                        <button type="button" class="primary-btn mx-auto mt-4 openPopupBtn">Improve Your Website</button>
                    </div>
                    <div class="col-lg-7 offset-lg-1">
                        <div class="">
                            <h2 class="heading-1" style="max-width: 26ch; text-wrap: balance">
                                Our Strategic
                                <span class="ac">Digital Marketing Solutions</span>
                                That Work
                            </h2>
                            <p class="seo-desc text-muted">
                                With our professional SEO services, we help brands worldwide increase visibility, traffic,
                                and revenue. We aim to build last, grow fast, and scale smart in today's digital world.
                            </p>
                        </div>
                        <div class="row seo-points gx-lg-5">
                            <div class="col-md-6">
                                <div class="seo-point">
                                    <span class="point-no">01</span>
                                    <div>
                                        <strong class="seo-title">Search Engine Optimisation</strong>
                                        <p class="line-clamp-2">With SEO, we boost your rankings, enhance user experience,
                                            and position your brand for success in the competitive digital landscape.</p>
                                    </div>
                                </div>
                                <div class="seo-point">
                                    <span class="point-no">02</span>
                                    <div>
                                        <strong class="seo-title">Social Media Optimisation</strong>
                                        <p class="line-clamp-2">We strategically improve your social media presence so your
                                            content gets seen, engaged with, shared, and converted.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="seo-point mt-md-5">
                                    <span class="point-no">03</span>
                                    <div>
                                        <strong class="seo-title">Search Engine Marketing</strong>
                                        <p class="line-clamp-2">Our professional search engine marketing services aim to
                                            generate leads by driving traffic and enhancing visibility.</p>
                                    </div>
                                </div>
                                <div class="seo-point">
                                    <span class="point-no">04</span>
                                    <div>
                                        <strong class="seo-title">Software Solution</strong>
                                        <p class="line-clamp-2">Our team works with focused attention on each project to
                                            deliver fully managed software development services.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- industries section -->
        <section class="sec pt-2 home-industries-section">
            <div class="container-fluid p-0">
                <div class="sec-head">
                    <h2 class="heading-1">Our <span class="ac">Industry</span> Expertise</h2>
                </div>
                <div class="ucc-slider-container">
                    <div class="ucc-slider-viewport">
                        <div class="ucc-slider-track">
                            <div class="ucc-slide-item">
                                <div class="industry-item">
                                    <img src="{{ asset('assets/frontend/images/our-industries/the-digital-lifestyle.webp') }}"
                                        alt="the digital lifestyle image" loading="lazy" width="360"
                                        height="475" />
                                    <div class="overlay">
                                        <h3 class="title">Ecommerce</h3>
                                        <p class="fw-light">Build Smart Ecommerce Solutions</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ucc-slide-item">
                                <div class="industry-item">
                                    <img src="{{ asset('assets/frontend/images/our-industries/life-in-notifications.webp') }}"
                                        alt="life in notifications image" loading="lazy" width="360"
                                        height="475" />
                                    <div class="overlay">
                                        <h3 class="title">Social Media</h3>
                                        <p class="small fw-light">Build Smart Social Media Solutions</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ucc-slide-item">
                                <div class="industry-item">
                                    <img src="{{ asset('assets/frontend/images/our-industries/the-art-of-gentle-care.webp') }}"
                                        alt="the art of gentle care image" loading="lazy" width="360"
                                        height="475" />
                                    <div class="overlay">
                                        <h3 class="title">Healthcare & Beauty</h3>
                                        <p class="small fw-light">Build Smart Health & Beauty Solutions</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ucc-slide-item">
                                <div class="industry-item">
                                    <img src="{{ asset('assets/frontend/images/our-industries/together-through-every-mile.webp') }}"
                                        alt="together through every mile image" loading="lazy" width="360"
                                        height="475" />
                                    <div class="overlay">
                                        <h3 class="title">Travel & hospitality</h3>
                                        <p class="small fw-light">Build Smart Travel & Hospitality Solutions</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Brands Trust -->
        <section class="sec sec-alt">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 mb-4 mb-md-5">
                        <div class="w-100">
                            <h2 class="heading-1">
                                Why Brands Trust
                                <span class="ac text-normal">iSearchSolution?</span>
                            </h2>
                            <p>Our journey is built on experience, innovation, and measurable success across global markets.
                            </p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-5 d-none d-md-block">
                                <div class="d-none d-md-flex justify-content-center pe-5">
                                    <div class="position-relative">
                                        <img src="{{ asset('assets/frontend/svg/floating-down-arrow.svg') }}" alt="down floating arrow"
                                            width="212" height="212" style="transform: rotate(110deg) scaleY(-1)"
                                            role="presentation" />
                                    </div>
                                    <div class="d-flex align-items-end gap-2">
                                        <span class="d-block display-2">15</span>
                                        <span class="d-block small fw-semibold lh-sm mb-2 mb-lg-3">
                                            <span class="d-block fs-3 mb-0">+</span>
                                            Years <br />
                                            Of Expirence
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-7">
                                <div class="cc-image-sec">
                                    <div class="img-wrapper-left">
                                        <img src="{{ asset('assets/frontend/images/partners-logos/cc/google-partner-cc.webp') }}"
                                            alt="google partner" loading="lazy" width="250" height="160" />
                                    </div>
                                    <div class="img-wrapper-right">
                                        <img src="{{ asset('assets/frontend/images/partners-logos/cc/cc-isearchsolution.webp') }}"
                                            alt="siliconindia" loading="lazy" width="370" height="280" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Founded in 2010 -->
        <section class="home-about-section">
            <div class="container-fluid">
                <div class="row align-items-center g-4">
                    <div class="col-lg-4 h-100">
                        <div class="about-image">
                            <img src="{{ asset('assets/frontend/images/team-discussion.webp') }}" alt="Team Discussion image" loading="lazy"
                                width="430" height="260" />
                        </div>
                    </div>
                    <div class="col-lg-8 ps-md-4">
                        <div class="about-content">
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <span>
                                    <i class="hgi hgi-stroke hgi-flag-02 color-primary fs-4"></i>
                                </span>
                                <span class="fs-5 mb-0 fw-semibold text-black"> Founded in 2010 </span>
                            </div>
                            <p>
                                With over a decade of experience, we turn brands into digital standouts through powerful
                                SEO, high-performing websites, and strategic social media optimisation. By combining
                                strategy, creativity, and execution, we make every click count.
                            </p>
                            <div class="row stats text-center text-md-start">
                                <div class="col-6 col-md-3 stat-item d-flex flex-column align-items-center">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <span class="counter">12+</span>
                                    </div>
                                    <span>Countries Served</span>
                                </div>
                                <div class="col-6 col-md-3 stat-item d-flex flex-column align-items-center stat-divider">
                                    <div class="d-flex align-items-center">
                                        <span class="counter">870+</span>
                                    </div>
                                    <span>Happy Clients</span>
                                </div>
                                <div class="col-6 col-md-3 stat-item d-flex flex-column align-items-center stat-divider">
                                    <div class="d-flex align-items-center">
                                        <span class="counter">60+</span>
                                    </div>
                                    <span>Professionals</span>
                                </div>
                                <div class="col-6 col-md-3 stat-item d-flex flex-column align-items-center stat-divider">
                                    <div class="d-flex align-items-center">
                                        <span class="counter">15+</span>
                                    </div>
                                    <span>Successful Years</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our-testimonial -->
        <section class="testimonial-section">
            <div class="container-fluid pe-md-0">
                <div class="row align-items-center">
                    <div class="col-lg-4 testimonial-left">
                        <h2>Our <span class="color-primary">Testimonial</span></h2>
                        <p class="subtitle mb-5">Voices of Our Clients</p>
                        <div class="testimonial-illustration">
                            <img src="{{ asset('assets/frontend/images/Client-Feedback-img.webp') }}" alt="Client Feedback" width="260"
                                height="210" loading="lazy" role="presentation" />
                        </div>
                    </div>
                    <div class="col-lg-8 ps-4 ps-lg-0">
                        <div class="ucc-slider-container">
                            <!-- Active State Radio Controllers -->
                            <input type="radio" name="ucc-testimonial-state" id="ucc-t-slide-1" checked hidden />
                            <input type="radio" name="ucc-testimonial-state" id="ucc-t-slide-2" hidden />
                            <input type="radio" name="ucc-testimonial-state" id="ucc-t-slide-3" hidden />
                            <input type="radio" name="ucc-testimonial-state" id="ucc-t-slide-4" hidden />
                            <!-- Slider Viewport Window -->
                            <div class="ucc-slider-viewport">
                                <div class="ucc-slider-track py-4">
                                    <!-- Slide 1 -->
                                    <div class="ucc-slide-item">
                                        <div class="testimonial-card shadow-sm">
                                            <div class="mb-3">
                                                <svg class="icon--cc" aria-hidden="true"
                                                    style="--cc-icon-size: 32px; --cc-icon-color: #989898">
                                                    <use href="{{ asset('assets/frontend/icons.svg') }}#blog-qoutes"></use>
                                                </svg>
                                            </div>
                                            <p>
                                                We worked with iSearchSolution to improve the online visibility so that more
                                                students and organizations could find our services. iSearchSolution team
                                                helped optimize our
                                                website by implementing a strong SEO strategy. Within a few months, we
                                                noticed better Google rankings and increased organic traffic. We are happy
                                                to recommend iSearchSolution
                                                for SEO and online growth for your business.
                                            </p>
                                            <div class="testimonial-footer">
                                                <div>
                                                    <strong>Pankaj Aggarwal</strong>
                                                    <span>Founder & CEO</span>
                                                </div>
                                                <svg class="icon--cc" style="width: 110px; height: 40px"
                                                    aria-label="flapone logo">
                                                    <use href="{{ asset('assets/frontend/icons.svg') }}#flapone-logo"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slide 2 -->
                                    <div class="ucc-slide-item">
                                        <div class="testimonial-card shadow-sm">
                                            <div class="mb-3">
                                                <svg class="icon--cc" aria-hidden="true"
                                                    style="--cc-icon-size: 32px; --cc-icon-color: #989898">
                                                    <use href="{{ asset('assets/frontend/icons.svg') }}#blog-qoutes"></use>
                                                </svg>
                                            </div>
                                            <p>
                                                Being associated with iSearchSolution has been a very positive experience.
                                                They improved our website structure and aligned our content to target the
                                                right audience. We
                                                appreciate their streamlined approach, clear communication, and reliable
                                                support throughout the process. Their team delivered projects on time and
                                                understood our requirements
                                                very well.
                                            </p>
                                            <div class="testimonial-footer">
                                                <div>
                                                    <strong>Santosh Jaiswal</strong>
                                                    <span>Founder & CEO</span>
                                                </div>
                                                <svg class="icon--cc" style="width: 40px; height: 40px"
                                                    aria-label="APML logo">
                                                    <use href="{{ asset('assets/frontend/icons.svg') }}#apml-logo"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slide 3 -->
                                    <div class="ucc-slide-item">
                                        <div class="testimonial-card shadow-sm">
                                            <div class="mb-3">
                                                <svg class="icon--cc" aria-hidden="true"
                                                    style="--cc-icon-size: 32px; --cc-icon-color: #989898">
                                                    <use href="{{ asset('assets/frontend/icons.svg') }}#blog-qoutes"></use>
                                                </svg>
                                            </div>
                                            <p>
                                                The UK travel market is quite competitive, and it's important to stand out
                                                in the crowd. We were looking for a company that could add value by
                                                providing unique and
                                                high-quality content for our website. The blogs and landing page they
                                                delivered helped us rank higher on search engines. Each piece was easy to
                                                read and full of valuable
                                                insights that added real credibility to our website.
                                            </p>
                                            <div class="testimonial-footer">
                                                <div>
                                                    <strong>Oliver</strong>
                                                    <span>Founder & CEO</span>
                                                </div>
                                                <svg class="icon--cc" style="width: 110px; height: 40px"
                                                    aria-label="Tailored Tours Logo">
                                                    <use href="{{ asset('assets/frontend/icons.svg') }}#tailored-tours-logo"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slide 4 -->
                                    <div class="ucc-slide-item">
                                        <div class="testimonial-card shadow-sm">
                                            <div class="mb-3">
                                                <svg class="icon--cc" aria-hidden="true"
                                                    style="--cc-icon-size: 32px; --cc-icon-color: #989898">
                                                    <use href="{{ asset('assets/frontend/icons.svg') }}#blog-qoutes"></use>
                                                </svg>
                                            </div>
                                            <p>
                                                After working with iSearchSolution, website inquiries, social media
                                                followers, and overall customer engagement have increased. Their
                                                comprehensive content and SEO solution
                                                have improved our online exposure and attracted more genuine clients. Highly
                                                recommended for real estate companies that aim to expand their online
                                                presence.
                                            </p>
                                            <div class="testimonial-footer">
                                                <div>
                                                    <strong>Animesh</strong>
                                                    <span>Founder & CEO</span>
                                                </div>
                                                <svg class="icon--cc" style="width: 110px; height: 40px"
                                                    aria-label="Saya Logo">
                                                    <use href="{{ asset('assets/frontend/icons.svg') }}#saya-logo"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Navigation Architecture -->
                            <div class="ucc-slider-controls d-none d-md-block">
                                <!-- Set 1 (Active when Slide 1 checked) -->
                                <div class="ucc-control-group ucc-group-1">
                                    <span class="ucc-nav-btn ucc-is-disabled">
                                        <svg class="icon--cc">
                                            <use href="{{ asset('assets/frontend/icons.svg') }}#arrow-left-01-stroke-rounded"></use>
                                        </svg>
                                    </span>
                                    <label for="ucc-t-slide-2" class="ucc-nav-btn">
                                        <svg class="icon--cc">
                                            <use href="{{ asset('assets/frontend/icons.svg') }}#arrow-right-01-stroke-rounded"></use>
                                        </svg>
                                    </label>
                                </div>
                                <!-- Set 2 (Active when Slide 2 checked) -->
                                <div class="ucc-control-group ucc-group-2">
                                    <label for="ucc-t-slide-1" class="ucc-nav-btn">
                                        <svg class="icon--cc">
                                            <use href="{{ asset('assets/frontend/icons.svg') }}#arrow-left-01-stroke-rounded"></use>
                                        </svg>
                                    </label>
                                    <label for="ucc-t-slide-3" class="ucc-nav-btn">
                                        <svg class="icon--cc">
                                            <use href="{{ asset('assets/frontend/icons.svg') }}#arrow-right-01-stroke-rounded"></use>
                                        </svg>
                                    </label>
                                </div>
                                <!-- Set 3 (Active when Slide 3 checked) -->
                                <div class="ucc-control-group ucc-group-3">
                                    <label for="ucc-t-slide-2" class="ucc-nav-btn">
                                        <svg class="icon--cc">
                                            <use href="{{ asset('assets/frontend/icons.svg') }}#arrow-left-01-stroke-rounded"></use>
                                        </svg>
                                    </label>
                                    <label for="ucc-t-slide-4" class="ucc-nav-btn">
                                        <svg class="icon--cc">
                                            <use href="{{ asset('assets/frontend/icons.svg') }}#arrow-right-01-stroke-rounded"></use>
                                        </svg>
                                    </label>
                                </div>
                                <!-- Set 4 (Active when Slide 4 checked) -->
                                <div class="ucc-control-group ucc-group-4">
                                    <label for="ucc-t-slide-3" class="ucc-nav-btn">
                                        <svg class="icon--cc">
                                            <use href="{{ asset('assets/frontend/icons.svg') }}#arrow-left-01-stroke-rounded"></use>
                                        </svg>
                                    </label>
                                    <span class="ucc-nav-btn ucc-is-disabled">
                                        <svg class="icon--cc">
                                            <use href="{{ asset('assets/frontend/icons.svg') }}#arrow-right-01-stroke-rounded"></use>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Blog Section -->
        <section class="blogs-news-section">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-11">
                        <div class="blogs-wrapper">
                            <h2 class="blogs-heading text-center">
                                <span>OUR </span>CREATIVE <br class="d-lg-block d-none" />
                                BLOGS <span>& NEWS</span>
                            </h2>
                            <div class="blogs-list d-flex flex-column justify-content-center">
                                <a href="https://www.isearchsolution.com/blog/upcoming-trends-in-website-development-and-digital-marketing-solutions-you-should-know/"
                                    target="_blank" class="text-decoration-none text-black">
                                    <article class="blog-item">
                                        <div class="blog-img">
                                            <img src="{{ asset('assets/frontend/images/blog-img/blog-post-img1.webp') }}" alt="blog image"
                                                class="img-hover" width="300" height="200" loading="lazy" />
                                        </div>
                                        <div class="blog-content">
                                            <h3 class="line-clamp-1">Upcoming Trends in Website Development and Digital
                                                Marketing Solutions You Should Know</h3>
                                            <p class="line-clamp-2">
                                                The digital world is evolving constantly nowadays, and online presence
                                                becomes an essential part, not an option, for every business, service
                                                provider and brand. Social media
                                                is no longer enough to grow a business. Website or ads alone aren't enough.
                                            </p>
                                            <div class="blog-meta mt-4">
                                                <div class="blog-profile">
                                                    <img src="{{ asset('assets/frontend/images/avatar.webp') }}" alt="avatar image"
                                                        class="img-fluid" width="50" height="50"
                                                        loading="lazy" />
                                                </div>
                                                <div>
                                                    <span>Mukesh Kumar</span>
                                                    <p class="mb-0">February 26, 2026 • 4 min</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </a>
                                <a href="https://www.isearchsolution.com/blog/importance-of-social-media-marketing-the-one-growth-strategy-most-businesses-ignore/"
                                    target="_blank" class="text-decoration-none text-black">
                                    <article class="blog-item">
                                        <div class="blog-img">
                                            <img src="{{ asset('assets/frontend/images/blog-img/blog-post-img2.webp') }}" alt="blog image"
                                                class="img-hover" width="300" height="200" loading="lazy" />
                                        </div>
                                        <div class="blog-content">
                                            <h3 class="line-clamp-1">Importance of Social Media Marketing: The One Growth
                                                Strategy Most Businesses Ignore</h3>
                                            <p class="line-clamp-2">
                                                From finding new products and services to connecting with friends and
                                                family, social media has completely changed the way we connect with each
                                                other-how companies engage with
                                                their audience and how we stay in touch with our family even when we are
                                                miles apart. This clearly highlights the Importance of Social Media
                                                Marketing in today's digital
                                                world. Many people still wonder, amongst all the different types of
                                                marketing, why social media marketing is so important. Businesses should
                                                leverage social media marketing
                                                to remain competitive and expand their audience.
                                            </p>
                                            <div class="blog-meta mt-4">
                                                <div class="blog-profile">
                                                    <img src="{{ asset('assets/frontend/images/avatar.webp') }}" alt="avatar image"
                                                        class="img-fluid" width="50" height="50"
                                                        loading="lazy" />
                                                </div>
                                                <div>
                                                    <span>Mukesh Kumar</span>
                                                    <p class="mb-0">February 20, 2026 • 4 min</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blogs-btn text-center">
                    <a href="/blog" class="btn primary-btn">See All Blogs & News</a>
                </div>
            </div>
        </section>
        <!-- Component: About iSearchSolution -->
        <section class="home-about-iSearch">
            <div class="container-fluid">
                <h2 class="heading-1 text-normal mb-4">About <span class="color-primary">iSearchSolution</span></h2>
                <div class="row p-0 m-0">
                    <div class="col-md-3 pe-4 d-flex justify-content-md-end justify-content-center">
                        <div class="founder-image mb-3">
                            <img src="{{ asset('assets/frontend/images/professionals/deelip-sir-img.webp') }}"
                                alt="Deelip Kumar Founder of iSearchSolution" loading="lazy"
                                class="w-100 d-block object-fit-cover" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pb-3">
                            <p class="about-description">
                                <em>
                                    &ldquo; Chasing the competition in today's AI-driven world presents new challenges every
                                    day. With over 15 years of experience, we map these changes to frame strategies that
                                    turn
                                    challenges into measurable success. We are building stronger digital ecosystems that
                                    empower businesses to grow and thrive. &rdquo;
                                </em>
                            </p>
                            <div class="d-flex gap-4 my-3">
                                <div>
                                    <div class="founder-name">Deelip Kumar</div>
                                    <div class="founder-role">Founder and CEO, iSearchSolution</div>
                                </div>
                            </div>
                            <a href="/corporate/who-we-are.html" class="primary-btn">About Us</a>
                        </div>
                    </div>
                </div>

                <div class="row p-0 m-0">
                    <div class="col-12 mx-auto p-4 mt-4 rounded-3 ss-bg-gradient text-black text-opacity-75">
                        <p>
                            iSearchSolution is a leading global SEO and AI optimisation company with over 15 years of proven
                            expertise helping enterprises, startups, and high-growth brands dominate search
                            results.
                        </p>
                        <p>
                            We specialise in advanced SEO strategies, AI-driven search optimisation, and digital authority
                            building designed to increase organic traffic, search visibility, and conversion-ready
                            audiences across Google, AI search engines, and emerging platforms.
                        </p>
                        <p class="mb-0">
                            Our data-driven solutions support businesses in highly competitive markets like the USA and
                            Canada, delivering scalable, measurable, and ROI-focused SEO outcomes. By combining
                            technical SEO, content intelligence, <a
                                href="https://www.isearchsolution.com/ai-solutions/ai-seo-services.html">AI SEO</a>, and
                            search trust engineering, we ensure brands are not only
                            ranked, but chosen, cited, and recommended by modern search engines and AI platforms.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ -->
        <section class="home-faq-section">
            <div class="container-fluid">
                <div class="row g-4">
                    <!-- LEFT CONTENT -->
                    <div class="col-lg-4 faq-left">
                        <div class="sticky-top" style="top: 90px">
                            <h2 class="heading-2">Frequently Asked Questions</h2>
                            <p>Clear answers to common questions about our SEO, AI-driven optimisation, and digital growth
                                strategies.</p>
                            <button type="button" class="primary-btn openPopupBtn mb-4">Book Free Consultation</button>
                            <div>
                                <img src="{{ asset('assets/frontend/images/faq-image-43564.webp') }}" alt="faq image" width="260"
                                    height="260" loading="lazy" class="d-block" role="presentation" />
                            </div>
                        </div>
                    </div>
                    <!-- DIVIDER -->
                    <div class="col-lg-1 d-none d-lg-flex justify-content-center">
                        <div class="faq-divider"></div>
                    </div>
                    <!-- ACCORDION -->
                    <div class="col-lg-7 d-flex align-items-center">
                        <div class="faq-container">
                            <details name="faq">
                                <summary><span class="faq-number">01</span> How can iSearchSolution help my business grow?
                                    <span class="icon">+</span></summary>
                                <div class="content">
                                    <p>
                                        iSearchSolution helps businesses grow by improving their online visibility, search
                                        authority, and lead generation through strategic SEO and AI-driven optimisation.
                                        With over 15
                                        years of experience, we focus on increasing qualified traffic, improving
                                        conversions, and driving measurable business outcomes rather than just rankings.
                                    </p>
                                </div>
                            </details>
                            <details name="faq">
                                <summary><span class="faq-number">02</span> What makes iSearchSolution different from other
                                    SEO agencies? <span class="icon">+</span></summary>
                                <div class="content">
                                    <p>
                                        Unlike traditional SEO agencies, we focus on AI-first SEO and search authority
                                        building. Our strategies are designed not only for Google's organic results but also
                                        for AI systems
                                        like Google AI Overviews, ChatGPT, Gemini, and Bing Copilot. We combine North
                                        American market expertise with high-quality global execution.
                                    </p>
                                </div>
                            </details>
                            <details name="faq">
                                <summary><span class="faq-number">03</span> How does SEO help a business succeed online?
                                    <span class="icon">+</span></summary>
                                <div class="content">
                                    <p>
                                        SEO helps businesses establish a strong online presence by making their website more
                                        visible to users actively searching for their products or services. It increases
                                        organic
                                        traffic, improves brand credibility, generates high-intent leads, and delivers
                                        long-term ROI compared to paid advertising.
                                    </p>
                                </div>
                            </details>
                            <details name="faq">
                                <summary><span class="faq-number">04</span> Do old or already popular websites still need
                                    SEO experts? <span class="icon">+</span></summary>
                                <div class="content">
                                    <p>
                                        Yes. Even established or popular websites need continuous SEO management. Search
                                        algorithms, competitors, and user behaviour change constantly. A newer website with
                                        better SEO
                                        can outrank an older one if optimisation is neglected. Ongoing SEO ensures your site
                                        stays competitive, relevant, and visible.
                                    </p>
                                </div>
                            </details>
                            <details name="faq">
                                <summary><span class="faq-number">05</span> How long does it take to see results from SEO?
                                    <span class="icon">+</span></summary>
                                <div class="content">
                                    <p>
                                        SEO is a long-term growth strategy. While some technical improvements can yield
                                        results within weeks, meaningful growth in traffic and leads typically takes 3–6
                                        months, depending
                                        on the competition, industry, and the current website's health. Sustainable SEO
                                        focuses on steady, compounding results.
                                    </p>
                                </div>
                            </details>
                            <!-- More FAQs -->
                            <input type="checkbox" name="more-item" id="moreItem" hidden />
                            <div class="more-item">
                                <!-- 06 -->
                                <details name="faq">
                                    <summary><span class="faq-number">06</span> What SEO services does iSearchSolution
                                        provide? <span class="icon">+</span></summary>
                                    <div class="content">
                                        <p>We offer a comprehensive range of SEO services, including:</p>
                                        <ul>
                                            <li>AI SEO & AIO (AI Optimisation)</li>
                                            <li>Technical SEO</li>
                                            <li>Keyword & competitor research</li>
                                            <li>Content & topical authority building</li>
                                            <li>Link building & digital PR</li>
                                            <li>Local & international SEO</li>
                                            <li>SEO audits and consulting</li>
                                        </ul>
                                    </div>
                                </details>

                                <!-- 07 -->
                                <details name="faq">
                                    <summary><span class="faq-number">07</span> How do you measure SEO success? <span
                                            class="icon">+</span></summary>
                                    <div class="content">
                                        <p>We do not rely solely on vanity metrics like rankings. We measure success
                                            through:</p>
                                        <ul>
                                            <li>Organic traffic growth</li>
                                            <li>Keyword visibility and authority</li>
                                            <li>Lead and conversion growth</li>
                                            <li>Revenue and ROI (where tracking is available)</li>
                                        </ul>
                                    </div>
                                </details>

                                <!-- 08 -->
                                <details name="faq">
                                    <summary><span class="faq-number">08</span> Do you provide services beyond SEO? <span
                                            class="icon">+</span></summary>
                                    <div class="content">
                                        <p>These services support and enhance overall digital growth:</p>
                                        <ul>
                                            <li>UX/UI design</li>
                                            <li>Web & mobile app development</li>
                                            <li>Web analytics</li>
                                            <li>DevOps services</li>
                                            <li>PPC management</li>
                                            <li>ORM (Online Reputation Management)</li>
                                        </ul>
                                    </div>
                                </details>

                                <!-- 09 -->
                                <details name="faq">
                                    <summary><span class="faq-number">09</span> Is SEO suitable for small businesses and
                                        startups? <span class="icon">+</span></summary>
                                    <div class="content">
                                        <p>
                                            Absolutely. SEO is especially valuable for startups and small businesses because
                                            it builds long-term visibility without relying entirely on paid ads. We
                                            customise SEO
                                            strategies based on business size, goals, and budget to maximise impact.
                                        </p>
                                    </div>
                                </details>

                                <!-- 10 -->
                                <details name="faq">
                                    <summary><span class="faq-number">10</span> How does SEO improve ROI compared to paid
                                        advertising? <span class="icon">+</span></summary>
                                    <div class="content">
                                        <p>
                                            SEO delivers sustained traffic and leads without paying for every click. While
                                            paid ads stop delivering results once the budget ends, SEO continues to generate
                                            visibility and
                                            conversions over time, making it one of the most cost-effective digital
                                            marketing channels.
                                        </p>
                                    </div>
                                </details>

                                <!-- 11 -->
                                <details name="faq">
                                    <summary><span class="faq-number">11</span> Will SEO help my website convert more
                                        visitors into customers? <span class="icon">+</span></summary>
                                    <div class="content">
                                        <p>
                                            Yes. Effective SEO goes beyond traffic. We optimise site structure, content
                                            relevance, user experience, and intent targeting to increase the likelihood that
                                            visitors convert
                                            into leads, inquiries, or customers.
                                        </p>
                                    </div>
                                </details>

                                <!-- 12 -->
                                <details name="faq">
                                    <summary><span class="faq-number">12</span> How do I get started with iSearchSolution?
                                        <span class="icon">+</span></summary>
                                    <div class="content">
                                        <p>
                                            Getting started is simple. You can book a <strong>free consultation on SEO or AI
                                                SEO</strong> with our experts. We'll evaluate your website, understand your
                                            goals, and
                                            recommend a customised growth plan with no obligation.
                                        </p>
                                    </div>
                                </details>
                            </div>
                            <label for="moreItem" class="mt-3 faq-btn"></label>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-banner -->
        <section class="cta-banner" style="background-image: url('{{ asset('assets/frontend/images/contact-bg.webp') }}')">
            <div class="cta-overlay"></div>
            <div class="container-fluid">
                <div class="cta-content">
                    <h2 class="fw-semibold mx-auto" style="max-width: 20ch">Do you want to <span
                            class="ac text-white text-opacity-75">rank your business</span> on top?</h2>
                    <p>We are happy to help you to grow your business</p>
                    <button type="button" class="primary-btn openPopupBtn">Schedule a meeting</button>
                </div>
            </div>
        </section>
    </main>
@endsection