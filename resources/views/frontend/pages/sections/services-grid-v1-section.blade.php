<style>
#services {
  position: relative;
  overflow: hidden;
  background: radial-gradient(ellipse at 15% 20%, rgba(2, 132, 199, 0.12) 0%, transparent 50%),
    radial-gradient(ellipse at 85% 80%, rgba(7, 79, 174, 0.08) 0%, transparent 50%),
    linear-gradient(180deg, #f0f7ff 0%, #e5f1fd 50%, #edf6fe 100%);
  border-top: 1px solid rgba(2, 132, 199, 0.12);
  border-bottom: 1px solid rgba(2, 132, 199, 0.12);
}


#services::before {
  content: "";
  position: absolute;
  inset: 0;
  background-image: radial-gradient(circle, rgba(2, 132, 199, 0.15) 1.2px, transparent 1.2px);
  background-size: 24px 24px;
  pointer-events: none;
  z-index: 0;
}

#services .clean-services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 28px;
}

#services .clean-service-card {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 4px 20px rgba(11, 36, 71, 0.04);
  display: flex;
  flex-direction: column;
  position: relative;
  transform: translateY(0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  will-change: transform, box-shadow, border-color;
  transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1),
              box-shadow 0.4s cubic-bezier(0.16, 1, 0.3, 1),
              border-color 0.35s ease;
}

#services .clean-service-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 20px 40px -10px rgba(11, 36, 71, 0.12), 0 0 0 1px rgba(7, 79, 174, 0.12);
  border-color: #93c5fd;
}

#services .clean-service-card__top {
  height: 220px;
  background: #f8fafc;
  position: relative;
  overflow: hidden;
  border-bottom: 1px solid #f1f5f9;
  transform: translateZ(0);
}

#services .clean-service-card__img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
  display: block;
  transform: scale(1);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  will-change: transform;
  transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
}

#services .clean-service-card:hover .clean-service-card__img {
  transform: scale(1.06);
}

#services .clean-service-card__icon-badge {
  position: absolute;
  top: 194px;
  left: 24px;
  width: 52px;
  height: 52px;
  border-radius: 50%;
  background: #ffffff;
  border: 3px solid #ffffff;
  box-shadow: 0 6px 18px rgba(11, 36, 71, 0.14);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #074fae;
  z-index: 20;
  transform: scale(1);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  will-change: transform, background-color, box-shadow, color;
  transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1),
              background-color 0.35s ease,
              color 0.35s ease,
              box-shadow 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

#services .clean-service-card:hover .clean-service-card__icon-badge {
  background: #074fae;
  color: #ffffff;
  transform: scale(1.08) translateY(-2px);
  box-shadow: 0 10px 24px rgba(7, 79, 174, 0.32);
}

#services .clean-service-card__body {
  padding: 32px 24px 24px;
  display: flex;
  flex-direction: column;
  flex: 1;
  position: relative;
  z-index: 5;
}

#services .clean-service-card:hover .card-title {
  color: #074fae;
}

#services .clean-service-card__body .card-desc {
  flex: 1;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
}

#services .clean-service-card .clean-link-arrow {
  font-size: 0.88rem;
  font-weight: 600;
  color: #074fae;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  margin-top: auto;
  text-decoration: none;
  transition: color 0.3s ease, gap 0.3s cubic-bezier(0.16, 1, 0.3, 1), transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

#services .clean-service-card:hover .clean-link-arrow {
  color: #0284c7;
  transform: translateX(4px);
  gap: 11px;
}

#services .clean-cities-strip {
  margin-top: 36px;
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 12px;
  padding: 14px 24px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 16px;
  flex-wrap: wrap;
  font-size: 0.88rem;
  color: #64748b;
  box-shadow: 0 2px 8px rgba(11, 36, 71, 0.03);
}

#services .clean-cities-strip strong {
  color: #0b2447;
  display: inline-flex;
  align-items: center;
  gap: 6px;
}

#services .clean-cities-strip .city-badge {
  background: #f1f5f9;
  padding: 3px 10px;
  border-radius: 6px;
  font-size: 0.82rem;
  font-weight: 400;
  color: #334155;
}

@media (max-width: 1200px) {
  #services .clean-services-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 576px) {
  #services .clean-services-grid {
    grid-template-columns: 1fr;
  }
}
</style>

@php
    $services = isset($content['services']) && count($content['services']) > 0 
                ? $content['services'] 
                : [
                    [
                        'title' => 'AI Search Engine Optimization',
                        'description' => 'At iSearchSolution, we optimise your website and content for your digital presence across ChatGPT, Gemini, Google AI Overviews, and more.',
                        'image' => 'assets/frontend/images/ai-search-engine-optimization-image.webp',
                        'icon' => 'artificial-intelligence-04-stroke-rounded',
                        'link_text' => 'Explore AI SEO',
                        'link_url' => '/ai-solutions/ai-seo-services.html'
                    ],
                    [
                        'title' => 'Generative Search Optimisation',
                        'description' => 'Our SEO experts optimise your content and build authority signals to register your presence in the AI-generated answers.',
                        'image' => 'assets/frontend/images/image-1142.webp',
                        'icon' => 'sparkles-stroke-rounded',
                        'link_text' => 'Explore GEO Services',
                        'link_url' => '/ai-solutions/geo-services.html'
                    ],
                    [
                        'title' => 'AEO Search Engine Optimisation',
                        'description' => 'Connect with your customers before they reach your website by bringing your brand into featured snippets, voice search, and question-based results.',
                        'image' => 'assets/frontend/images/img-2755.webp',
                        'icon' => 'bubble-chat-spark-01-stroke-rounded',
                        'link_text' => 'Explore AEO Services',
                        'link_url' => '/ai-solutions/aeo-services.html'
                    ],
                    [
                        'title' => 'Content Optimization',
                        'description' => 'Produce clear and useful answers so that search engines and AI can understand and improve your presence in digital ecosystems.',
                        'image' => 'assets/frontend/images/img-lg-475183.webp',
                        'icon' => 'content-writing-stroke-rounded',
                        'link_text' => 'Explore Content SEO',
                        'link_url' => '/search-engine-optimization/content-optimization.html'
                    ],
                    [
                        'title' => 'LLM SEO Services',
                        'description' => 'With LLM SEO Services in the UK, we enable large language models to understand what your brand offers and what you know best.',
                        'image' => 'assets/frontend/images/deep-learning-ai-solutions-developer.webp',
                        'icon' => 'ai-brain-01-stroke-rounded',
                        'link_text' => 'Explore LLM SEO',
                        'link_url' => '/ai-solutions/llm-seo-services.html'
                    ],
                    [
                        'title' => 'Link Building',
                        'description' => 'We build relevant links to strengthen your website’s authority and credibility in searches so you can turn searches into leads.',
                        'image' => 'assets/frontend/images/link-building-experts-team-strategy.webp',
                        'icon' => 'link-01-stroke-rounded',
                        'link_text' => 'Explore Link Building',
                        'link_url' => '/search-engine-optimization/link-building.html'
                    ],
                ];

    $hubs = isset($content['hubs']) && count($content['hubs']) > 0 
            ? $content['hubs'] 
            : [
                ['name' => 'London'],
                ['name' => 'Manchester'],
                ['name' => 'Birmingham'],
                ['name' => 'Leeds'],
                ['name' => 'Liverpool'],
                ['name' => 'Glasgow'],
                ['name' => 'Bristol'],
                ['name' => 'Sheffield'],
            ];
@endphp

<section class="section-clean" id="services" aria-labelledby="services-title">
    <div class="container-fluid">
        <div class="clean-section-head clean-section-head--center" style="text-align:center; margin-bottom: 40px;">
            <div class="badge badge-primary" style="display:inline-block; padding: 6px 14px; font-size: 0.85rem; font-weight: 600; background: rgba(7,79,174,0.1); color: #074fae; border-radius: 50px; margin-bottom: 16px;">
                {{ $content['badge'] ?? 'SEO Agency UK' }}
            </div>
            <h2 class="section-title" id="services-title" style="font-size:2.2rem; font-weight:700; color:#0b2447; margin-bottom:16px;">
                {!! $content['heading'] ?? 'Our SEO Solutions Built to Turn <span style="color:#074fae">Searches into Customers</span>' !!}
            </h2>
            <p class="section-desc" style="color:#475569; font-size:1.05rem; max-width:800px; margin: 0 auto;">
                {{ $content['description'] ?? 'Don’t just look for rankings on Google searches; understand what people are searching for on AI tools and share your presence using our Answer Engine Optimisation in the UK.' }}
            </p>
        </div>

        <!-- Clean 3-Column Service Grid -->
        <div class="clean-services-grid">
            @foreach($services as $service)
            <article class="clean-service-card">
                <div class="clean-service-card__top">
                    @php
                        $imageSrc = isset($service['image']) && !empty($service['image']) && !str_starts_with($service['image'], 'assets/') 
                                    ? asset('storage/' . $service['image']) 
                                    : asset($service['image'] ?? 'assets/frontend/images/ai-search-engine-optimization-image.webp');
                    @endphp
                    <img src="{{ $imageSrc }}" alt="{{ $service['title'] ?? '' }}" class="clean-service-card__img" loading="lazy" width="380" height="200" />
                </div>
                <div class="clean-service-card__icon-badge" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" focusable="false">
                        <use href="{{ asset('assets/frontend/media/icons/icons.svg#' . ($service['icon'] ?? 'artificial-intelligence-04-stroke-rounded')) }}"></use>
                    </svg>
                </div>
                <div class="clean-service-card__body">
                    <h3 class="card-title" style="font-size:1.25rem; font-weight:600; margin-bottom:12px; color:#0b2447; transition:color 0.3s;">{{ $service['title'] ?? '' }}</h3>
                    <p class="card-desc" style="color:#475569; font-size:0.95rem; line-height:1.5; margin-bottom:16px;">{{ $service['description'] ?? '' }}</p>
                    <a href="{{ $service['link_url'] ?? '#' }}" class="clean-link-arrow" aria-label="Explore {{ $service['title'] ?? '' }}">
                        {{ $service['link_text'] ?? 'Explore' }} 
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true" focusable="false">
                            <use href="{{ asset('assets/frontend/media/icons/icons.svg#arrow-right-sm-stroke-rounded') }}"></use>
                        </svg>
                    </a>
                </div>
            </article>
            @endforeach
        </div>

        <!-- Cities Footer Strip -->
        <div class="clean-cities-strip" aria-label="UK Service Coverage Locations">
            <strong>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#074fae" stroke-width="2" aria-hidden="true" focusable="false">
                    <use href="{{ asset('assets/frontend/media/icons/icons.svg#map-pin-stroke-rounded') }}"></use>
                </svg>
                {{ $content['hubs_label'] ?? 'Serving Regional & National UK Hubs:' }}
            </strong>
            @foreach($hubs as $hub)
            <span class="city-badge">{{ $hub['name'] ?? '' }}</span>
            @endforeach
        </div>
    </div>
</section>
