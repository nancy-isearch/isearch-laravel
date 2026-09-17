<!doctype html>
<html lang="en">
    <!-- prettier-ignore -->
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{ isset($page) && !empty($page->meta_title) ? $page->meta_title : 'Digital Marketing Agency - AI Powered IT Solutions | iSearch Solution' }}</title>
        <meta name="description"
            content="{{ isset($page) && !empty($page->meta_description) ? $page->meta_description : 'iSearch Solution, a digital marketing agency delivering AI Powered SEO, PPC, content, social media & IT solutions to grow your business faster.' }}" />
        <link rel="canonical" href="{{ url()->current() }}" />
        <meta name="robots" content="index, follow" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:title" content="{{ isset($page) && !empty($page->meta_title) ? $page->meta_title : 'Leading SEO & AI Optimization Company | iSearch Solution' }}" />
        <meta property="og:description"
            content="{{ isset($page) && !empty($page->meta_description) ? $page->meta_description : 'Boost your online visibility with advanced SEO, AI-driven search optimization, and digital marketing strategies designed to increase traffic, authority, and conversions.' }}" />
        <meta property="og:image" content="{{ asset('assets/frontend/images/logo/footer-logo.svg') }}" />
        <meta property="og:site_name" content="iSearch Solution" />
        <meta property="og:locale" content="en_US" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:url" content="{{ url()->current() }}" />
        <meta name="twitter:title" content="{{ isset($page) && !empty($page->meta_title) ? $page->meta_title : 'Leading SEO & AI Optimization Company | iSearch Solution' }}" />
        <meta name="twitter:description"
            content="{{ isset($page) && !empty($page->meta_description) ? $page->meta_description : 'Advanced SEO, AI-driven search optimization, and digital marketing services to grow your visibility, traffic, and business online.' }}" />
        
        @if(isset($page) && !empty($page->schema))
            @if(Str::startsWith(trim($page->schema), '<script'))
                {!! $page->schema !!}
            @else
                <script type="application/ld+json">
                {!! $page->schema !!}
                </script>
            @endif
        @endif
        <meta name="twitter:image" content="{{ asset('assets/frontend/images/logo/footer-logo.svg') }}" />
        <meta name="twitter:site" content="@isearchsolution" />
        <meta name="twitter:creator" content="@isearchsolution" />

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('favIcon.ico') }}" type="image/x-icon" />

        <!-- Preload Fonts -->
        <link rel="preload" href="{{ asset('assets/frontend/font/static/Inter_18pt-Regular.woff2') }}" as="font"
            type="font/woff2" crossorigin>
        <link rel="preload" href="{{ asset('assets/frontend/font/static/Inter_18pt-SemiBold.woff2') }}" as="font"
            type="font/woff2" crossorigin>

        <!-- Preload Banner Image -->
        <link rel="preload" as="image" href="{{ asset('assets/frontend/images/banner-img/ai-seo-page-banner.webp') }}"
            type="image/webp" fetchpriority="high">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/compress-css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/global.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/compress-css/main-swiper.min.css') }}" />
        @hasSection('use_v2_style')
            <link rel="stylesheet" href="{{ asset('assets/frontend/css/compress-css/main-style-V2.min.css') }}" />
        @else
            <link rel="stylesheet" href="{{ asset('assets/frontend/css/compress-css/main-style.min.css') }}" />
        @endif

        <!-- Google Tag Manager -->
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-M7VMCGKZ');
        </script>
        @stack('styles')
    </head>

    <body>
        <!-- Google Tag Manager (noscript) -->
        <!-- prettier-ignore -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M7VMCGKZ" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>

        {{-- Header --}}
        @include('frontend.components.header')

        {{-- Page Content --}}
        @yield('content')

        {{-- Footer --}}
        @include('frontend.components.footer')

        {{-- Contact Modal --}}
        @include('frontend.components.contact-modal')

        <!-- All Scripts -->
        <script src="{{ asset('assets/frontend/js/lib/custom-bootstrap.min.js') }}" defer></script>
        <script src="{{ asset('assets/frontend/js/lib/custom-swiper.min.js') }}"></script>
        {{-- <script src="{{ asset('assets/frontend/js/compress-js/popup-form.min.js') }}" defer></script> --}}
        <script src="{{ asset('assets/frontend/js/new-form-modal.js') }}" defer></script>

        <!-- Banner Swiper Init -->
        <!-- prettier-ignore -->
        <script>document.addEventListener("DOMContentLoaded",()=>{document.querySelector(".banner-slider")&&new Swiper(".banner-slider",{loop:!0,slidesPerView:1,effect:"fade",fadeEffect:{crossFade:!0},speed:1400,autoplay:{delay:4e3,disableOnInteraction:!1,pauseOnMouseEnter:!0},navigation:{nextEl:"#banner-btn-right",prevEl:"#banner-btn-left"}})});</script>
        @stack('scripts')
    </body>

</html>
