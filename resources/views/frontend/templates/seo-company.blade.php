@extends('frontend.layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/compress-css/pages/seoCompany-V2.min.css') }}" />
@endpush

@section('content')
<main>
    <!-- SEO-main-banner -->
    <div class="hero">
    <div class="container-fluid px-0">
        <div class="hero-inner">
        <div class="hero-left">
            <span class="eye eye-alt">{{ $sections['hero']['eyebrow_text'] ?? 'Delhi’s Top SEO Agency' }}</span>
            <h1 class="hero-title">{!! $sections['hero']['main_title'] ?? 'Drive More Traffic With an <span class="ac text-white text-opacity-75">SEO Company in Delhi</span>' !!}</h1>
            <p class="hero-desc">{{ $sections['hero']['description'] ?? 'Stop getting on page two. Partner with a top SEO firm in Delhi to dominate search rankings and boost traffic.' }}</p>
            <div class="hero-btns">
            <button class="btn-primary openPopupBtn">{{ $sections['hero']['button_text'] ?? 'Get Free SEO Audit' }}</button>
            <a href="/our-services.html" class="btn-secondary">Explore Services</a>
            </div>
            <div class="hero-stats">
            <div class="stat-item">
                <div class="stat-num">{{ $sections['hero']['stat_1_num'] ?? '200+' }}</div>
                <div class="stat-label">{{ $sections['hero']['stat_1_label'] ?? 'Happy Clients' }}</div>
            </div>
            <div class="stat-divider"></div>
            <div class="stat-item">
                <div class="stat-num">{{ $sections['hero']['stat_2_num'] ?? '500+' }}</div>
                <div class="stat-label">{{ $sections['hero']['stat_2_label'] ?? 'Projects Delivered' }}</div>
            </div>
            <div class="stat-divider"></div>
            <div class="stat-item">
                <div class="stat-num">{{ $sections['hero']['stat_3_num'] ?? '80%' }}</div>
                <div class="stat-label">{{ $sections['hero']['stat_3_label'] ?? 'Revenue Growth' }}</div>
            </div>
            </div>
            <div class="pills-row" style="margin-top: 22px">
            <span class="pill"><span class="pill-check">✓</span> 100% White Hat SEO</span>
            <span class="pill"><span class="pill-check">✓</span> Google Algorithm Safe</span>
            <span class="pill"><span class="pill-check">✓</span> Measurable Results</span>
            </div>
        </div>
        <div class="hero-right p-4">
            <div class="float-card float-card-1">
            <div class="float-icon" style="background: #eff6ff">
                <svg class="icon--cc" style="--cc-icon-color: var(--primary-color); --cc-icon-size: 18px"><use href="{{ asset('assets/frontend/icons.svg#chart-line-data-01-stroke-rounded') }}"></use></svg>
            </div>
            <div>
                <div class="float-text-val">+748% ROI</div>
                <div class="float-text-lbl">Avg. B2B SEO Return</div>
            </div>
            </div>
            <div class="float-card float-card-2">
            <div class="float-icon" style="background: #f0fdf4">
                <svg class="icon--cc" style="--cc-icon-color: #16a34a; --cc-icon-size: 18px"><use href="{{ asset('assets/frontend/icons.svg#clock-01-stroke-rounded') }}"></use></svg>
            </div>
            <div>
                <div class="float-text-val">3–6 Months</div>
                <div class="float-text-lbl">Visible Growth</div>
            </div>
            </div>
            <div class="hero-img-wrap">
               <!-- Graphic omitted for brevity, but dynamic images can go here -->
               <img src="{{ isset($sections['hero']['hero_image']) ? asset('storage/'.$sections['hero']['hero_image']) : asset('assets/frontend/images/ai-driven-seo-img-1378.webp') }}" style="max-width: 100%; border-radius: 12px;" />
            </div>
        </div>
        </div>
    </div>
    </div>

    <!-- why-seo-section -->
    <section class="sec sec-alt monitoring">
    <div class="container-fluid">
        <div class="monitoring-grid">
        <div class="monitoring-visual reveal">
            <img src="{{ isset($sections['monitoring']['image']) ? asset('storage/'.$sections['monitoring']['image']) : asset('assets/frontend/images/ai-driven-seo-img-1378.webp') }}" alt="SEO Services in Delhi" width="640" height="420" />
        </div>
        <div class="monitoring-content reveal">
            <h2 class="heading-1">{!! $sections['monitoring']['heading'] ?? 'Dominate Digital Space with <span class="ac">SEO Services in Delhi</span>' !!}</h2>
            <p class="lead">{{ $sections['monitoring']['lead_text'] ?? 'In a city that never stops scrolling, getting strong online visibility is challenging until you meet with the best SEO company in Delhi NCR.' }}</p>
            <div class="monitoring-steps">
                @if(isset($sections['monitoring']['steps']) && is_array($sections['monitoring']['steps']))
                    @foreach($sections['monitoring']['steps'] as $index => $step)
                    <div class="m-step">
                        <div class="m-step-num">{{ $index + 1 }}</div>
                        <div>
                        <h3>{{ $step['title'] ?? '' }}</h3>
                        <p>{{ $step['description'] ?? '' }}</p>
                        </div>
                    </div>
                    @endforeach
                @else
                    <!-- Fallback static content if no data in admin yet -->
                    <div class="m-step">
                        <div class="m-step-num">1</div>
                        <div>
                        <h3>78% of local mobile searches lead to purchase</h3>
                        <p>Effective local presence boosts business growth and increases sales</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        </div>
    </div>
    </section>

</main>
@endsection
