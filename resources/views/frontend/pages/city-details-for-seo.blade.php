@extends('frontend.layouts.app')

@section('use_v2_style', true)

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
              <span class="eye eye-alt">{{ $sections['city-details-for-seo-hero']['badge_text'] ?? 'Delhi’s Top SEO Agency' }}</span>
              <h1 class="hero-title">{!! $sections['city-details-for-seo-hero']['heading'] ?? 'Drive More Traffic With an <span class="ac text-white text-opacity-75">SEO Company in Delhi</span>' !!}</h1>
              <p class="hero-desc">{!! $sections['city-details-for-seo-hero']['description'] ?? 'Stop getting on page two. Partner with a top SEO firm in Delhi to dominate search rankings and boost traffic.' !!}</p>
              <div class="hero-btns">
                <button class="btn-primary openPopupBtn">{{ $sections['city-details-for-seo-hero']['button_text'] ?? 'Get Free SEO Audit' }}</button>
                <a href="{{ $sections['city-details-for-seo-hero']['secondary_button_link'] ?? '/our-services.html' }}" class="btn-secondary">{{ $sections['city-details-for-seo-hero']['secondary_button_text'] ?? 'Explore Services' }}</a>
              </div>
              <div class="hero-stats">
                <div class="stat-item">
                  <div class="stat-num">{{ $sections['city-details-for-seo-hero']['stat_1_number'] ?? '200+' }}</div>
                  <div class="stat-label">{{ $sections['city-details-for-seo-hero']['stat_1_label'] ?? 'Happy Clients' }}</div>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                  <div class="stat-num">{{ $sections['city-details-for-seo-hero']['stat_2_number'] ?? '500+' }}</div>
                  <div class="stat-label">{{ $sections['city-details-for-seo-hero']['stat_2_label'] ?? 'Projects Delivered' }}</div>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                  <div class="stat-num">{{ $sections['city-details-for-seo-hero']['stat_3_number'] ?? '80%' }}</div>
                  <div class="stat-label">{{ $sections['city-details-for-seo-hero']['stat_3_label'] ?? 'Revenue Growth' }}</div>
                </div>
              </div>
              <div class="pills-row" style="margin-top: 22px">
                @php
                    $features = $sections['city-details-for-seo-hero']['features_list'] ?? [
                        ['feature_text' => '100% White Hat SEO'],
                        ['feature_text' => 'Google Algorithm Safe'],
                        ['feature_text' => 'Measurable Results']
                    ];
                @endphp
                @foreach($features as $feature)
                @php $text = $feature['feature_text'] ?? $feature['undefined'] ?? $feature['name'] ?? ''; @endphp
                @if($text)
                <span class="pill"><span class="pill-check">✓</span> {{ $text }}</span>
                @endif
                @endforeach
              </div>
            </div>
            <div class="hero-right p-4">
              <div class="float-card float-card-1">
                <div class="float-icon" style="background: #eff6ff">
                  <svg class="icon--cc" style="--cc-icon-color: var(--primary-color); --cc-icon-size: 18px"><use href="{{ asset('assets/frontend/icons.svg') }}#chart-line-data-01-stroke-rounded"></use></svg>
                </div>
                <div>
                  <div class="float-text-val">{{ $sections['city-details-for-seo-hero']['float_card_1_value'] ?? '+748% ROI' }}</div>
                  <div class="float-text-lbl">{{ $sections['city-details-for-seo-hero']['float_card_1_label'] ?? 'Avg. B2B SEO Return' }}</div>
                </div>
              </div>
              <div class="float-card float-card-2">
                <div class="float-icon" style="background: #f0fdf4">
                  <svg class="icon--cc" style="--cc-icon-color: #16a34a; --cc-icon-size: 18px"><use href="{{ asset('assets/frontend/icons.svg') }}#clock-01-stroke-rounded"></use></svg>
                </div>
                <div>
                  <div class="float-text-val">{{ $sections['city-details-for-seo-hero']['float_card_2_value'] ?? '3–6 Months' }}</div>
                  <div class="float-text-lbl">{{ $sections['city-details-for-seo-hero']['float_card_2_label'] ?? 'Visible Growth' }}</div>
                </div>
              </div>
              <div class="hero-img-wrap">
                <div class="mock-browser">
                  <div class="mock-bar">
                    <div class="mock-dot" style="background: #f87171"></div>
                    <div class="mock-dot" style="background: #fbbf24"></div>
                    <div class="mock-dot" style="background: #4ade80"></div>
                    <div class="mock-url">isearchsolution.com - SEO Dashboard</div>
                  </div>
                  <div class="mock-content">
                    <div class="mock-chart-header">
                      <span class="mock-title">Organic Traffic Growth</span>
                      <span class="mock-badge">▲ +82% this month</span>
                    </div>
                    <div class="bars">
                      <div class="bar" style="height: 35%; background: #bfdbfe"></div>
                      <div class="bar" style="height: 45%; background: #93c5fd"></div>
                      <div class="bar" style="height: 40%; background: #bfdbfe"></div>
                      <div class="bar" style="height: 55%; background: #60a5fa"></div>
                      <div class="bar" style="height: 50%; background: #bfdbfe"></div>
                      <div class="bar" style="height: 65%; background: #3b82f6"></div>
                      <div class="bar" style="height: 60%; background: #bfdbfe"></div>
                      <div class="bar" style="height: 80%; background: #2563eb"></div>
                      <div class="bar" style="height: 75%; background: #bfdbfe"></div>
                      <div class="bar" style="height: 95%; background: #074fae"></div>
                    </div>
                    <div class="bar-label-row">
                      <span class="bar-lbl">Jul</span><span class="bar-lbl">Aug</span><span class="bar-lbl">Sep</span><span class="bar-lbl">Oct</span><span class="bar-lbl">Nov</span
                      ><span class="bar-lbl">Dec</span><span class="bar-lbl">Jan</span><span class="bar-lbl">Feb</span><span class="bar-lbl">Mar</span><span class="bar-lbl">Apr</span>
                    </div>
                    <div class="mock-kpis">
                      <div class="kpi">
                        <div class="kpi-val">#1</div>
                        <div class="kpi-lbl">Google Ranking</div>
                      </div>
                      <div class="kpi">
                        <div class="kpi-val">12.4k</div>
                        <div class="kpi-lbl">Monthly Visits</div>
                      </div>
                      <div class="kpi">
                        <div class="kpi-val">94%</div>
                        <div class="kpi-lbl">Keyword Coverage</div>
                      </div>
                      <div class="kpi">
                        <div class="kpi-val">3.2%</div>
                        <div class="kpi-lbl">Conversion Rate</div>
                      </div>
                    </div>
                  </div>
                </div>
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
              @php
                  $side_img = $sections['city-details-for-seo-digital-space']['side_image'] ?? 'assets/frontend/images/ai-driven-seo-img-1378.webp';
                  if (str_starts_with($side_img, 'www.')) {
                      $side_img = 'https://' . $side_img;
                  } elseif (!str_starts_with($side_img, 'http') && !str_starts_with($side_img, '/')) {
                      $side_img = asset($side_img);
                  }
              @endphp
              <img src="{{ $side_img }}" alt="SEO Services in Delhi" width="640" height="420" fetchpriority="high" decoding="async" />
            </div>
            <div class="monitoring-content reveal">
              <h2 class="heading-1">{!! $sections['city-details-for-seo-digital-space']['heading'] ?? 'Dominate Digital Space with <span class="ac">SEO Services in Delhi</span>' !!}</h2>
              <p class="lead">{!! $sections['city-details-for-seo-digital-space']['description'] ?? 'In a city that never stops scrolling, getting strong online visibility is challenging until you meet with the best SEO company in Delhi NCR.' !!}</p>
              <div class="monitoring-steps">
                @php
                    $digital_steps = $sections['city-details-for-seo-digital-space']['steps_list'] ?? [
                        ['step_title' => '78% of local mobile searches lead to purchase', 'step_description' => 'Effective local presence boosts business growth and increases sales'],
                        ['step_title' => 'India has 958 million Active Internet Users', 'step_description' => 'A strong digital presence gives you a wide exposure for business'],
                        ['step_title' => '62% of Delhi NCR consumers check Google Maps before visiting a shop.', 'step_description' => 'Visibility on Google Maps is a must to attract real, ready-to-visit customers.'],
                        ['step_title' => 'Delhi is highly competitive', 'step_description' => 'Millions of businesses are competing online in India’s capital city.']
                    ];
                @endphp
                @php $stepCounter = 1; @endphp
                @foreach($digital_steps as $index => $step)
                @php 
                    $title = $step['step_title'] ?? $step['undefined'] ?? $step['name'] ?? '';
                    $desc = $step['step_description'] ?? '';
                    // fallback if js bug caused them to put desc in undefined (though the bug only affected the first key easily)
                    if(empty($title) && !empty($step['undefined'])) { $title = $step['undefined']; }
                @endphp
                @if(!empty(trim($title)))
                <div class="m-step">
                  <div class="m-step-num">{{ $stepCounter++ }}</div>
                  <div>
                    <h3>{{ $title }}</h3>
                    <p>{{ $desc }}</p>
                  </div>
                </div>
                @endif
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- seo-process-section -->
      <section class="seo-process-section sec">
        <div class="container-fluid">
          <div class="sec-head">
            <h2 class="heading-1 mx-auto">{!! $sections['city-details-for-seo-seo-services']['heading'] ?? 'Our SEO Services for <span class="ac">Higher Google Rankings</span>' !!}</h2>
            <p class="lead mx-auto line-clamp-2">
              {!! $sections['city-details-for-seo-seo-services']['description'] ?? 'Widen your online presence and reach more customers with iSearchSolution - a top SEO Services Company in Delhi - dedicated to driving consistent business growth through result-focused strategies.' !!}
            </p>
          </div>
          <div class="seo-process-grid">
            @php
                $seo_services = $sections['city-details-for-seo-seo-services']['services_list'] ?? [
                    ['service_title' => 'SEO', 'service_description' => 'With our expertise in artificial intelligence and SEO, we develop effective strategies that increase rankings and strengthen online visibility.', 'service_icon' => 'search-01-stroke-rounded'],
                    ['service_title' => 'LLM SEO', 'service_description' => 'By optimizing content structure, we ensure your company earns citations in LLMs and boosts visibility even in the zero-click era.', 'service_icon' => 'robotic-stroke-rounded'],
                    ['service_title' => 'Technical SEO', 'service_description' => 'As an experienced SEO Agency in Delhi, our professionals improve crawlability, fix technical issues, and optimise website speed to boost performance.', 'service_icon' => 'settings-02-stroke-rounded'],
                    ['service_title' => 'Enterprise SEO', 'service_description' => 'With our enterprise SEO services, we amplify brand presence, traffic, and rankings to provide long-term growth for large-scale businesses.', 'service_icon' => 'chart-analysis-stroke-rounded'],
                    ['service_title' => 'On-Page Optimisation', 'service_description' => 'To improve rankings in search engines, we optimise meta tags, URLs, headings, and content structure, and enhance the user experience.', 'service_icon' => 'pencil-edit-02-stroke-rounded'],
                    ['service_title' => 'Content Optimisation', 'service_description' => 'We constantly optimise content to align with search intent so we can drive enhanced user engagement and conversions using our marketing services.', 'service_icon' => 'file-01-stroke-rounded']
                ];
                $stepCount = 1;
            @endphp
            @foreach($seo_services as $service)
            @php 
                $sTitle = $service['service_title'] ?? $service['undefined'] ?? $service['name'] ?? '';
                $sDesc = $service['service_description'] ?? '';
                $sIcon = $service['service_icon'] ?? 'search-01-stroke-rounded';
                if(empty($sTitle) && !empty($service['undefined'])) { $sTitle = $service['undefined']; }
                
                // if they pasted the full path instead of just the icon name
                if (str_contains($sIcon, '#')) {
                    $sIcon = explode('#', $sIcon)[1];
                }
            @endphp
            @if(!empty(trim($sTitle)))
            <div class="process-card step-{{ $stepCount++ }}">
              <div class="process-icon">
                <svg class="icon--cc"><use href="{{ asset('assets/frontend/icons.svg') }}#{{ $sIcon }}"></use></svg>
              </div>
              <span>{{ $sTitle }}</span>
              <p>{{ $sDesc }}</p>
            </div>
            @endif
            @endforeach
          </div>
        </div>
      </section>
      <!-- why-choose-section -->
      <section class="why-choose-section">
        <div class="container-fluid">
          <div class="d-flex flex-column flex-md-row align-items-start justify-content-between">
            <div class="sec-head text-start">
              <h2 class="heading-1">{!! $sections['city-details-for-seo-why-choose']['heading'] ?? 'Why Choose <span class="text-normal">iSearchSolution?</span>' !!}</h2>
              <p class="text-white text-opacity-75">{!! $sections['city-details-for-seo-why-choose']['description'] ?? 'We specialize in services like Site Quality Assessments, Link Auditing.' !!}</p>
            </div>
            @if(!empty($sections['city-details-for-seo-why-choose']['button_link']))
              <a href="{{ $sections['city-details-for-seo-why-choose']['button_link'] }}" class="outline-btn">{{ $sections['city-details-for-seo-why-choose']['button_text'] ?? 'Talk to SEO Expert' }}</a>
            @else
              <button type="button" class="outline-btn openPopupBtn">{{ $sections['city-details-for-seo-why-choose']['button_text'] ?? 'Talk to SEO Expert' }}</button>
            @endif
          </div>
          <div class="why-points mt-5 mt-md-2">
            @php
                $why_points = $sections['city-details-for-seo-why-choose']['points_list'] ?? [
                    ['point_text' => 'Market-driven strategies'],
                    ['point_text' => 'Result-oriented SEO approach'],
                    ['point_text' => 'Transparent reporting'],
                    ['point_text' => 'No fake promises, only real growth'],
                    ['point_text' => 'Dedicated SEO managers'],
                    ['point_text' => 'Experience across multiple industries']
                ];
                $pointCount = 1;
            @endphp
            @foreach($why_points as $point)
            @php 
                $pText = $point['point_text'] ?? $point['undefined'] ?? $point['name'] ?? '';
                if(empty($pText) && !empty($point['undefined'])) { $pText = $point['undefined']; }
            @endphp
            @if(!empty(trim($pText)))
            <div class="why-point">
              <span>{{ str_pad($pointCount++, 2, '0', STR_PAD_LEFT) }}</span>
              <p>{{ $pText }}</p>
            </div>
            @endif
            @endforeach
          </div>
          <div class="graph-wrapper d-none d-md-block">
            <img src="{{ asset('assets/frontend/images/seo-graph.webp') }}" alt="SEO performance statistics graph" class="img-fluid" width="1600" height="360" loading="lazy" />
          </div>
        </div>
      </section>
      <!-- seo-services -->
      <section class="seo-services sec">
        <div class="container-fluid">
          <div class="sec-head mb-2">
            <h2 class="heading-1">{!! $sections['city-details-for-seo-prominent-techniques']['heading'] ?? 'Our Prominent <span class="ac">SEO techniques</span>' !!}</h2>
            <p class="lead mx-auto" style="max-width: 720px">{!! $sections['city-details-for-seo-prominent-techniques']['description'] ?? 'We aim to increase visibility, attract high-intent traffic, and deliver measurable growth.' !!}</p>
          </div>
          <div class="ucc-slider-container">
            <div class="ucc-slider-viewport">
              <div class="ucc-slider-track py-4">
                @php
                    $seo_techniques = $sections['city-details-for-seo-prominent-techniques']['techniques_list'] ?? [
                        ['icon_image' => 'workflow-circle-01-stroke-rounded', 'title' => 'SEO Process', 'link_text' => 'Learn more →', 'link_url' => '/search-engine-optimization/seo-process.html'],
                        ['icon_image' => 'seo-stroke-rounded', 'title' => 'SEO Consultancy', 'link_text' => 'Learn more →', 'link_url' => '/search-engine-optimization/seo-consultancy.html'],
                        ['icon_image' => 'language-square-stroke-rounded', 'title' => 'Multilingual SEO', 'link_text' => 'Learn more →', 'link_url' => '/search-engine-optimization/multilingual-seo.html'],
                        ['icon_image' => 'shopping-bag-03-stroke-rounded', 'title' => 'eCommerce Website', 'link_text' => 'Learn more →', 'link_url' => '/search-engine-optimization/ecommerce-site-optimization.html'],
                        ['icon_image' => 'ranking-stroke-rounded', 'title' => 'Top 10 Ranking Solution', 'link_text' => 'Learn more →', 'link_url' => '/search-engine-optimization/top-10-ranking-solution.html'],
                        ['icon_image' => 'share-knowledge-stroke-rounded', 'title' => 'Social Search', 'link_text' => 'Learn more →', 'link_url' => '/search-engine-optimization/social-search.html'],
                        ['icon_image' => 'link-01-stroke-rounded', 'title' => 'Link Building', 'link_text' => 'Learn more →', 'link_url' => '/search-engine-optimization/link-building.html'],
                        ['icon_image' => 'license-draft-stroke-rounded', 'title' => 'Content Optimization', 'link_text' => 'Learn more →', 'link_url' => '/search-engine-optimization/content-optimization.html'],
                        ['icon_image' => 'user-add-01-stroke-rounded', 'title' => 'Hire Dedicated SEO', 'link_text' => 'Learn more →', 'link_url' => '/search-engine-optimization/hire-dedicated-seo.html'],
                        ['icon_image' => 'shield-energy-stroke-rounded', 'title' => 'SEO Penalty Recovery', 'link_text' => 'Learn more →', 'link_url' => '/search-engine-optimization/seo-penalty-recovery.html'],
                        ['icon_image' => 'package-01-stroke-rounded', 'title' => 'SEO Packages', 'link_text' => 'Learn more →', 'link_url' => '/search-engine-optimization/seo-package.html']
                    ];
                @endphp
                
                @foreach($seo_techniques as $tech)
                @php 
                    $tTitle = $tech['title'] ?? '';
                    $tLinkText = $tech['link_text'] ?? 'Learn more →';
                    $tLinkUrl = $tech['link_url'] ?? '#';
                    $tIcon = $tech['icon_image'] ?? 'workflow-circle-01-stroke-rounded';
                @endphp
                @if(!empty(trim($tTitle)))
                <div class="ucc-slide-item">
                  <a href="{{ $tLinkUrl }}" class="service-card">
                    @if (str_contains($tIcon, 'assets/frontend/icons.svg') || !str_contains($tIcon, '.'))
                      @php
                        if (str_contains($tIcon, '#')) { $tIcon = explode('#', $tIcon)[1]; }
                      @endphp
                      <svg class="icon--cc"><use href="{{ asset('assets/frontend/icons.svg') }}#{{ $tIcon }}"></use></svg>
                    @else
                      <img src="{{ asset($tIcon) }}" alt="{{ $tTitle }}" style="width:32px; height:32px; margin-bottom: 24px;">
                    @endif
                    <div class="d-flex flex-column">
                      <span class="title">{{ $tTitle }}</span>
                      <span>{{ $tLinkText }}</span>
                    </div>
                  </a>
                </div>
                @endif
                @endforeach
                
                <!-- clone items -->
                @foreach($seo_techniques as $tech)
                @php 
                    $tTitle = $tech['title'] ?? '';
                    $tLinkText = $tech['link_text'] ?? 'Learn more →';
                    $tLinkUrl = $tech['link_url'] ?? '#';
                    $tIcon = $tech['icon_image'] ?? 'workflow-circle-01-stroke-rounded';
                @endphp
                @if(!empty(trim($tTitle)))
                <div class="ucc-slide-item ucc-clone" aria-hidden="true">
                  <a href="{{ $tLinkUrl }}" class="service-card" tabindex="-1">
                    @if (str_contains($tIcon, 'assets/frontend/icons.svg') || !str_contains($tIcon, '.'))
                      @php
                        if (str_contains($tIcon, '#')) { $tIcon = explode('#', $tIcon)[1]; }
                      @endphp
                      <svg class="icon--cc"><use href="{{ asset('assets/frontend/icons.svg') }}#{{ $tIcon }}"></use></svg>
                    @else
                      <img src="{{ asset($tIcon) }}" alt="{{ $tTitle }}" style="width:32px; height:32px; margin-bottom: 24px;">
                    @endif
                    <div class="d-flex flex-column">
                      <span class="title">{{ $tTitle }}</span>
                      <span>{{ $tLinkText }}</span>
                    </div>
                  </a>
                </div>
                @endif
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- seo-dual-section | content needed -->
      <section class="seo-dual-section">
        <div class="container-fluid">
          <div class="container seo-inner">
            <div class="row align-items-center">
              <div class="col-lg-6 position-relative seo-content-one">
                <div class="side-illustration left-ill">
                  <img src="{{ asset('assets/frontend/images/pages/city-details-for-seo/seo-dual-section-right.webp') }}" alt="SEO Services in Delhi for Every Industry Niche" width="160" height="186" loading="lazy" role="presentation" />
                </div>
                <h2 class="fs-2">{!! $sections['city-details-for-seo-dual-content']['left_heading'] ?? 'Tailored <span class="ac">SEO Services in Delhi</span> for Every Industry Niche' !!}</h2>
                <div class="mb-4">
                  {!! $sections['city-details-for-seo-dual-content']['left_description'] ?? '<p>At iSearchSolution, we believe that the same strategy doesn\'t work for all industries. As a Professional SEO Company in Delhi, we build data-driven strategies to match specific market dynamics. Our experts focus on transactional intent and site speed when they work on an e-commerce project.</p><p class="mb-4">For the Healthcare website, we prioritise E-E-A-T and <a href="https://www.isearchsolution.com/search-engine-optimization/local-seo-services.html" target="_blank">Local SEO</a> to build patient trust. Likewise, our industry-based roadmap, when offering Internet Marketing Services in Delhi, boosts business growth for every niche.</p>' !!}
                </div>
                <div class="mb-4">
                  @if(!empty($sections['city-details-for-seo-dual-content']['left_button_link']))
                    <a href="{{ $sections['city-details-for-seo-dual-content']['left_button_link'] }}" class="primary-btn">{{ $sections['city-details-for-seo-dual-content']['left_button_text'] ?? 'Request a quote' }}</a>
                  @else
                    <button type="button" class="primary-btn openPopupBtn">{{ $sections['city-details-for-seo-dual-content']['left_button_text'] ?? 'Request a quote' }}</button>
                  @endif
                </div>
              </div>
              <div class="col-lg-6 position-relative seo-content-two">
                <div class="side-illustration right-ill">
                  <img src="{{ asset('assets/frontend/images/pages/city-details-for-seo/seo-dual-section-left.webp') }}" alt="Our Client-Focused SEO Growth Strategy" width="160" height="166" loading="lazy" role="presentation" />
                </div>
                <h2 class="fs-2">{!! $sections['city-details-for-seo-dual-content']['right_heading'] ?? 'Our Client-Focused <span class="ac">SEO Growth Strategy</span>' !!}</h2>
                <div>
                  {!! $sections['city-details-for-seo-dual-content']['right_description'] ?? '<p>How can we win the competition if we work on traditional SEO methods and a stubborn growth strategy? We build a client-focused SEO growth strategy after understanding business goals, audience behaviour, and market competition.</p><p>Beyond generic SEO methods, we study your industry, search trends, and user intent to create strategies that support long-term visibility and consistent traffic growth. Every campaign is monitored using real-time data and market performance metrics.</p>' !!}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- seo-tab-section -->
      <section class="sec tab-system-wrapper">
        <div class="container-fluid">
          <div class="tab-system">
            <div class="tab-aside">
              <div class="tab-wrapper">
                @php
                    $faq_tabs = $sections['city-details-for-seo-faq-tabs']['tabs_list'] ?? [
                        [
                            'tab_title' => 'How does Technical SEO improve Google rankings?',
                            'tab_heading' => 'How does Technical SEO improve Google rankings?',
                            'tab_content' => '<p>With technical expertise in SEO, we build a foundation for your website. We know the importance of content for attracting traffic, but we also need technical expertise to help Google crawlers find, interpret, and index your pages effectively. By working as one of the Best SEO service providers in Delhi for a decade, we know how to remove the friction between your site’s code and the search algorithm.</p>'
                        ]
                    ];
                    $tabCount = 1;
                @endphp
                @foreach($faq_tabs as $index => $tab)
                @php 
                    $tTitle = $tab['tab_title'] ?? $tab['undefined'] ?? $tab['name'] ?? '';
                    if(empty($tTitle) && !empty($tab['undefined'])) { $tTitle = $tab['undefined']; }
                @endphp
                @if(!empty(trim($tTitle)))
                <input id="tab-{{ $tabCount }}" type="radio" name="tab-group" class="tab-system__input" {{ $tabCount === 1 ? 'checked="checked"' : '' }} hidden />
                <label for="tab-{{ $tabCount }}" class="tab-system__label">{{ $tTitle }}</label>
                @php $tabCount++; @endphp
                @endif
                @endforeach
              </div>
              <div class="tab-aside-footer">
                <img src="{{ asset('assets/frontend/images/pages/city-details-for-seo/seo-dual-section-right.webp') }}" alt="SEO Expert" width="120" height="140" loading="lazy" role="presentation" />
                <button type="button" class="primary-btn openPopupBtn">Request a quote</button>
                <p class="small mt-3">Stay connected with us for updates, insights, and personalized support.</p>
              </div>
            </div>
            <!-- tab content -->
            <div class="tab-system__content-wrapper">
              @php $tabCount = 1; @endphp
              @foreach($faq_tabs as $index => $tab)
              @php 
                  $tTitle = $tab['tab_title'] ?? $tab['undefined'] ?? $tab['name'] ?? '';
                  $tHeading = $tab['tab_heading'] ?? $tTitle;
                  $tContent = $tab['tab_content'] ?? '';
                  if(empty($tTitle) && !empty($tab['undefined'])) { $tTitle = $tab['undefined']; }
              @endphp
              @if(!empty(trim($tTitle)))
              <div id="content-{{ $tabCount }}" class="tab-system__panel">
                <article class="tab-content-article">
                  <h2 class="fs-3 fw-semibold">{{ $tHeading }}</h2>
                  {!! $tContent !!}
                </article>
              </div>
              @php $tabCount++; @endphp
              @endif
              @endforeach
            </div>
          </div>
        </div>
      </section>
      <!-- Our-testimonial -->
      <section class="sec testimonial-section">
        <div class="container-fluid pe-md-0">
          <div class="row align-items-center">
            <div class="col-lg-4 testimonial-left">
              <h2 class="heading-1">{!! $sections['city-details-for-seo-testimonials']['heading'] ?? 'Our <span class="ac">Testimonial</span>' !!}</h2>
              <p class="subtitle mb-5">{{ $sections['city-details-for-seo-testimonials']['subtitle'] ?? 'Voices of Our Clients' }}</p>
              <div class="testimonial-illustration">
                <img src="{{ asset('assets/frontend/images/pages/city-details-for-seo/Client-Feedback-img.webp') }}" alt="Client Feedback" width="260" height="210" loading="lazy" role="presentation" />
              </div>
            </div>
            <div class="col-lg-8 ps-4 ps-lg-0">
              <div class="ucc-slider-container">
                @php
                    $testimonialsData = \App\Models\Testimonial::latest()->get();
                @endphp
                
                @if($testimonialsData->count() > 0)
                  <!-- Active State Radio Controllers -->
                  @foreach($testimonialsData as $index => $t)
                  <input type="radio" name="ucc-testimonial-state" id="ucc-t-slide-{{ $loop->iteration }}" {{ $loop->first ? 'checked' : '' }} hidden />
                  @endforeach
                  
                  <!-- Slider Viewport Window -->
                  <div class="ucc-slider-viewport">
                    <div class="ucc-slider-track py-4">
                      @foreach($testimonialsData as $index => $t)
                      <!-- Slide {{ $loop->iteration }} -->
                      <div class="ucc-slide-item">
                        <div class="testimonial-card shadow-sm">
                          <div class="mb-3">
                            <svg class="icon--cc" aria-hidden="true" style="--cc-icon-size: 32px; --cc-icon-color: #989898"><use href="{{ asset('assets/frontend/icons.svg') }}#blog-qoutes"></use></svg>
                          </div>
                          <p>
                            {!! $t->testimonial !!}
                          </p>
                          <div class="testimonial-footer">
                            <div>
                              <strong>{{ $t->name }}</strong>
                              <span>{{ $t->designation }}</span>
                            </div>
                            @if($t->logo)
                            <img src="{{ asset('storage/' . $t->logo) }}" alt="Logo" style="max-width: 110px; max-height: 40px; object-fit: contain;">
                            @endif
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                  
                  <!-- Navigation Architecture -->
                  <div class="ucc-slider-controls d-none d-md-block">
                    @foreach($testimonialsData as $index => $t)
                    @php
                        $prev = $loop->iteration - 1;
                        $next = $loop->iteration + 1;
                    @endphp
                    <!-- Set {{ $loop->iteration }} -->
                    <div class="ucc-control-group ucc-group-{{ $loop->iteration }}">
                      @if($loop->first)
                      <span class="ucc-nav-btn ucc-is-disabled">
                        <svg class="icon--cc"><use href="{{ asset('assets/frontend/icons.svg') }}#arrow-left-01-stroke-rounded"></use></svg>
                      </span>
                      @else
                      <label for="ucc-t-slide-{{ $prev }}" class="ucc-nav-btn">
                        <svg class="icon--cc"><use href="{{ asset('assets/frontend/icons.svg') }}#arrow-left-01-stroke-rounded"></use></svg>
                      </label>
                      @endif
                      
                      @if($loop->last)
                      <span class="ucc-nav-btn ucc-is-disabled">
                        <svg class="icon--cc"><use href="{{ asset('assets/frontend/icons.svg') }}#arrow-right-01-stroke-rounded"></use></svg>
                      </span>
                      @else
                      <label for="ucc-t-slide-{{ $next }}" class="ucc-nav-btn">
                        <svg class="icon--cc"><use href="{{ asset('assets/frontend/icons.svg') }}#arrow-right-01-stroke-rounded"></use></svg>
                      </label>
                      @endif
                    </div>
                    @endforeach
                  </div>
                @else
                  <p>No testimonials found.</p>
                @endif
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
                  {!! $sections['city-details-for-seo-blogs']['heading'] ?? '<span>OUR </span>CREATIVE <br class="d-lg-block d-none" /> BLOGS <span>& NEWS</span>' !!}
                </h2>
                <div class="blogs-list d-flex flex-column justify-content-center">
                  @php
                      $blogs = $sections['city-details-for-seo-blogs']['blogs_list'] ?? [
                          [
                              'blog_image' => '',
                              'blog_title' => 'Upcoming Trends in Website Development and Digital Marketing Solutions You Should Know',
                              'blog_description' => 'The digital world is evolving constantly nowadays, and online presence becomes an essential part, not an option, for every business, service provider and brand. Social media is no longer enough to grow a business. Website or ads alone aren’t enough.',
                              'author_image' => '',
                              'author_name' => 'Mukesh Kumar',
                              'blog_meta' => 'February 26, 2026 • 4 min',
                              'blog_link' => 'https://www.isearchsolution.com/blog/upcoming-trends-in-website-development-and-digital-marketing-solutions-you-should-know/'
                          ],
                          [
                              'blog_image' => '',
                              'blog_title' => 'Importance of Social Media Marketing: The One Growth Strategy Most Businesses Ignore',
                              'blog_description' => 'From finding new products and services to connecting with friends and family, social media has completely changed the way we connect with each other-how companies engage with their audience and how we stay in touch with our family even when we are miles apart. This clearly highlights the Importance of Social Media Marketing in today’s digital world. Many people still wonder, amongst all the different types of marketing, why social media marketing is so important. Businesses should leverage social media marketing to remain competitive and expand their audience.',
                              'author_image' => '',
                              'author_name' => 'Mukesh Kumar',
                              'blog_meta' => 'February 20, 2026 • 4 min',
                              'blog_link' => 'https://www.isearchsolution.com/blog/importance-of-social-media-marketing-the-one-growth-strategy-most-businesses-ignore/'
                          ]
                      ];
                  @endphp
                  @foreach($blogs as $blog)
                  @if(!empty(trim($blog['blog_title'] ?? '')))
                  @php
                      $blogImg = '';
                      if (!empty($blog['blog_image'])) {
                          $blogImg = \Illuminate\Support\Str::startsWith($blog['blog_image'], ['http', 'assets/']) ? asset($blog['blog_image']) : asset('storage/' . $blog['blog_image']);
                      } else {
                          $blogImg = asset('assets/frontend/images/blog-img/blog-post-img' . ($loop->iteration % 2 == 0 ? '2' : '1') . '.webp');
                      }
                      
                      $authorImg = '';
                      if (!empty($blog['author_image'])) {
                          $authorImg = \Illuminate\Support\Str::startsWith($blog['author_image'], ['http', 'assets/']) ? asset($blog['author_image']) : asset('storage/' . $blog['author_image']);
                      } else {
                          $authorImg = asset('assets/frontend/images/avatar.webp');
                      }
                  @endphp
                  <a href="{{ $blog['blog_link'] ?? '#' }}" target="_blank" class="text-decoration-none text-black">
                    <article class="blog-item">
                      <div class="blog-img">
                        <img src="{{ $blogImg }}" alt="Blog image" class="img-hover" width="300" height="200" loading="lazy" style="object-fit: cover;" />
                      </div>
                      <div class="blog-content">
                        <h3 class="line-clamp-1">{{ $blog['blog_title'] }}</h3>
                        <p class="line-clamp-2">{{ $blog['blog_description'] ?? '' }}</p>
                        <div class="blog-meta mt-4">
                          <div class="blog-profile">
                            <img src="{{ $authorImg }}" alt="Author" class="img-fluid" width="50" height="50" loading="lazy" style="border-radius: 50%; object-fit: cover;" />
                          </div>
                          <div>
                            <span>{{ $blog['author_name'] ?? '' }}</span>
                            <p class="mb-0">{{ $blog['blog_meta'] ?? '' }}</p>
                          </div>
                        </div>
                      </div>
                    </article>
                  </a>
                  @endif
                  @endforeach
                </div>
              </div>
            </div>
          </div>
          <div class="blogs-btn text-center">
            @if(!empty($sections['city-details-for-seo-blogs']['button_link']))
              <a href="{{ $sections['city-details-for-seo-blogs']['button_link'] }}" class="btn primary-btn">{{ $sections['city-details-for-seo-blogs']['button_text'] ?? 'See All Blogs & News' }}</a>
            @else
              <a href="/blog" class="btn primary-btn">{{ $sections['city-details-for-seo-blogs']['button_text'] ?? 'See All Blogs & News' }}</a>
            @endif
          </div>
        </div>
      </section>
      <!-- FAQ -->
      <section class="home-faq-section">
        <div class="container-fluid">
          <div class="row g-4">
            <div class="col-lg-4 faq-left">
              <div class="sticky-top" style="top: 90px">
                <h2 class="heading-2">Frequently Asked Questions</h2>
                <p>Clear answers to common questions about our SEO, AI-driven optimisation, and digital growth strategies.</p>
                <button type="button" class="primary-btn openPopupBtn mb-4">Book Free Consultation</button>
                <div class="faq-img-wrapper">
                  <!-- Updated dynamic asset path -->
                  <img src="{{ asset('assets/frontend/images/pages/city-details-for-seo/faq-image-43564.webp') }}" alt="SEO Company Delhi Frequently Asked Questions" width="260" height="260" loading="lazy" class="d-block" role="presentation" />
                </div>
              </div>
            </div>
            <div class="col-lg-1 d-none d-lg-flex justify-content-center">
              <div class="faq-divider"></div>
            </div>
            <div class="col-lg-7 d-flex align-items-center">
              <div class="faq-container">
                
                @php
                    // Fetch dynamic FAQs from the database, or use an empty array fallback
                    $faqs = $sections['city-details-for-seo-faq']['faq_list'] ?? [];
                @endphp
                
                @foreach($faqs as $index => $faq)
                <details name="faq">
                  <summary><span class="faq-number">{{ sprintf('%02d', $loop->iteration) }}</span> {{ $faq['question'] }} <span class="icon">+</span></summary>
                  <div class="content">
                    <p>{!! nl2br(e($faq['answer'])) !!}</p>
                  </div>
                </details>
                @endforeach
                
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- BREADCRUMB -->
      <div class="breadcrumb">
        <div class="container-fluid">
          <div class="bc-in">
            <a href="/">Home</a>
            <svg class="icon--cc" style="--cc-icon-size: 14px; --cc-icon-color: currentColor"><use href="{{ asset('assets/frontend/icons.svg') }}#arrow-right-01-stroke-rounded"></use></svg>
            <a href="/search-engine-optimization/seo-services.html">SEO Services</a>
            <svg class="icon--cc" style="--cc-icon-size: 14px; --cc-icon-color: currentColor"><use href="{{ asset('assets/frontend/icons.svg') }}#arrow-right-01-stroke-rounded"></use></svg>
            <span>SEO Company in Delhi</span>
          </div>
        </div>
      </div>
      <!-- cta-banner -->
      <section class="cta-banner">
        <div class="cta-overlay">
          <img src="{{ asset('assets/frontend/images/pages/city-details-for-seo/contact-bg.webp') }}" alt="We are happy to help you to grow your business" width="1600" height="420" loading="lazy" class="d-block" aria-hidden="true" role="presentation" />
        </div>
        <div class="container-fluid">
          <div class="cta-content">
            <h2 class="heading-1 mx-auto mb-3" style="max-width: 20ch">Do you want to <span class="ac text-white text-opacity-75">rank your business</span> on top?</h2>
            <p class="mb-4">We are happy to help you to grow your business</p>
            <button type="button" class="primary-btn openPopupBtn">Schedule a meeting</button>
          </div>
        </div>
      </section>
    
</main>

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", () => {
    const labels = document.querySelectorAll(".tab-system__label");
    const contentWrapper = document.querySelector(".tab-system__content-wrapper");
    labels.forEach(label => {
        label.addEventListener("click", () => {
            if (window.innerWidth <= 767) {
                setTimeout(() => {
                    if (contentWrapper) {
                        const topPos = contentWrapper.getBoundingClientRect().top + window.scrollY - 100;
                        window.scrollTo({ top: topPos, behavior: "smooth" });
                    }
                }, 80);
            }
        });
    });
});
</script>
@endpush
@endsection
