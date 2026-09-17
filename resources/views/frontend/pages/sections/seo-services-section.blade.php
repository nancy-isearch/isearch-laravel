@push('styles')
<style>
.seo-services-section {
  --ucc-visible-slides: 4;
  --ucc-gap: 20px;
  padding-block: clamp(50px, 6vw, 85px);
  position: relative;
  overflow: hidden;
}
.seo-services-section .sec-head {
  text-align: center;
  margin-bottom: 30px;
}
.seo-services-section .heading-1 {
  font-size: calc(1.375rem + 1.5vw);
  font-weight: 600;
  line-height: 1.2;
  text-transform: capitalize;
  margin-bottom: 12px;
}
.seo-services-section .ac {
  display: inline !important;
  color: var(--primary-color, #074fae);
}
.seo-services-section .lead {
  font-size: 1.05rem;
  color: var(--muted, #6b7280);
  line-height: 1.6;
  max-width: 720px;
}
.seo-services-section .icon--cc {
  --cc-icon-size: 32px;
  --cc-icon-color: var(--primary-color, #074fae);
  display: inline-block;
  width: var(--cc-icon-size);
  height: var(--cc-icon-size);
  color: var(--cc-icon-color);
  fill: currentColor;
}
.seo-services-section .ucc-slider-container {
  width: 100%;
  position: relative;
  overflow: hidden;
}
.seo-services-section .ucc-slider-viewport {
  width: 100%;
  overflow-x: hidden;
}
.seo-services-section .ucc-slider-track {
  display: flex;
  gap: var(--ucc-gap);
  width: max-content;
  animation: cssAutoScroll 35s linear infinite;
}
.seo-services-section .ucc-slide-item {
  width: calc((100vw - 40px - (var(--ucc-gap) * (var(--ucc-visible-slides) - 1))) / var(--ucc-visible-slides));
  max-width: 320px;
  min-width: 250px;
  flex-shrink: 0;
}
.seo-services-section .ucc-clone {
  user-select: none;
}
.seo-services-section .ucc-slider-container:hover .ucc-slider-track {
  animation-play-state: paused;
}
.seo-services-section .service-card {
  height: 160px;
  background: #f1f4f8;
  border-radius: 14px;
  padding: 20px;
  text-decoration: none;
  color: #000;
  transition: all 350ms ease-out;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-between;
  border: 1px solid #f1f1f1;
  text-align: center;
}
.seo-services-section .service-card > svg.icon--cc {
  --cc-icon-size: 32px;
  color: var(--primary-color, #074fae);
  margin-block: 0.5rem;
}
.seo-services-section .service-card .title {
  font-size: 15px;
  font-weight: 600;
  margin-bottom: 6px;
  color: #1a1a2e;
}
.seo-services-section .service-card span {
  font-size: 13px;
  color: #074fae;
  font-weight: 500;
}
.seo-services-section .service-card:hover {
  background: #fff;
  box-shadow: 0 8px 24px rgba(7, 79, 174, 0.12);
  transform: translateY(-4px);
  border-color: rgba(7, 79, 174, 0.2);
}
@media (max-width: 1200px) {
  .seo-services-section {
    --ucc-visible-slides: 3;
  }
}
@media (max-width: 991px) {
  .seo-services-section {
    --ucc-visible-slides: 2.2;
    --ucc-gap: 16px;
  }
}
@media (max-width: 767px) {
  .seo-services-section {
    --ucc-visible-slides: 2.2;
    --ucc-gap: 16px;
  }
  .seo-services-section .ucc-slider-viewport {
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    scroll-behavior: smooth;
    -webkit-overflow-scrolling: touch;
  }
  .seo-services-section .ucc-slider-viewport::-webkit-scrollbar {
    display: none;
  }
  .seo-services-section .ucc-slider-track {
    animation: none !important;
    width: max-content;
  }
  .seo-services-section .ucc-slide-item {
    width: calc((100vw - 32px - (var(--ucc-gap) * (var(--ucc-visible-slides) - 1))) / var(--ucc-visible-slides));
    scroll-snap-align: start;
  }
  .seo-services-section .ucc-clone {
    display: none;
  }
}
@media (max-width: 520px) {
  .seo-services-section {
    --ucc-visible-slides: 1.2;
  }
}
@keyframes cssAutoScroll {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(calc((-11 * 270px) - (11 * var(--ucc-gap))));
  }
}
</style>
@endpush

<!-- SEO Services Slider Section Component -->
<section class="seo-services-section seo-services sec">
  <div class="container-fluid">
    <div class="sec-head mb-2">
      <h2 class="heading-1">{!! $content['heading'] ?? 'Our Prominent <span class="ac">SEO techniques</span>' !!}</h2>
      <p class="lead mx-auto" style="max-width: 720px">{!! $content['description'] ?? 'We aim to increase visibility, attract high-intent traffic, and deliver measurable growth.' !!}</p>
    </div>
    @php
      $services = $content['service_cards'] ?? [
        ['service_title' => 'SEO Process', 'service_link' => '#seo-process', 'service_link_text' => 'Learn more →', 'service_icon' => 'workflow-circle-01-stroke-rounded'],
        ['service_title' => 'SEO Consultancy', 'service_link' => '#seo-consultancy', 'service_link_text' => 'Learn more →', 'service_icon' => 'seo-stroke-rounded'],
        ['service_title' => 'Multilingual SEO', 'service_link' => '#multilingual-seo', 'service_link_text' => 'Learn more →', 'service_icon' => 'language-square-stroke-rounded'],
        ['service_title' => 'eCommerce Website', 'service_link' => '#ecommerce-seo', 'service_link_text' => 'Learn more →', 'service_icon' => 'shopping-bag-03-stroke-rounded'],
        ['service_title' => 'Top 10 Ranking Solution', 'service_link' => '#ranking-solution', 'service_link_text' => 'Learn more →', 'service_icon' => 'ranking-stroke-rounded'],
        ['service_title' => 'Social Search', 'service_link' => '#social-search', 'service_link_text' => 'Learn more →', 'service_icon' => 'share-knowledge-stroke-rounded'],
        ['service_title' => 'Link Building', 'service_link' => '#link-building', 'service_link_text' => 'Learn more →', 'service_icon' => 'link-01-stroke-rounded'],
        ['service_title' => 'Content Optimization', 'service_link' => '#content-optimization', 'service_link_text' => 'Learn more →', 'service_icon' => 'license-draft-stroke-rounded'],
        ['service_title' => 'Hire Dedicated SEO', 'service_link' => '#hire-seo', 'service_link_text' => 'Learn more →', 'service_icon' => 'user-add-01-stroke-rounded'],
        ['service_title' => 'SEO Penalty Recovery', 'service_link' => '#penalty-recovery', 'service_link_text' => 'Learn more →', 'service_icon' => 'shield-energy-stroke-rounded'],
        ['service_title' => 'SEO Packages', 'service_link' => '#seo-packages', 'service_link_text' => 'Learn more →', 'service_icon' => 'package-01-stroke-rounded'],
      ];
    @endphp
    <div class="ucc-slider-container">
      <div class="ucc-slider-viewport">
        <div class="ucc-slider-track py-4">
          @foreach($services as $item)
            @php
              $sTitle = $item['service_title'] ?? $item['title'] ?? '';
              $sLink = $item['service_link'] ?? $item['link_url'] ?? '#';
              $sLinkText = $item['service_link_text'] ?? $item['link_text'] ?? 'Learn more →';
              $sIcon = $item['service_icon'] ?? $item['icon'] ?? 'workflow-circle-01-stroke-rounded';
              if (str_contains($sIcon, '#')) {
                $sIcon = explode('#', $sIcon)[1];
              }
            @endphp
            @if(!empty(trim($sTitle)))
              <div class="ucc-slide-item">
                <a href="{{ $sLink }}" class="service-card">
                  <svg class="icon--cc"><use href="{{ asset('assets/frontend/icons.svg') }}#{{ $sIcon }}"></use></svg>
                  <div class="d-flex flex-column">
                    <span class="title">{{ $sTitle }}</span>
                    <span>{{ $sLinkText }}</span>
                  </div>
                </a>
              </div>
            @endif
          @endforeach

          <!-- Duplicate items for seamless continuous auto-scroll -->
          @foreach($services as $item)
            @php
              $sTitle = $item['service_title'] ?? $item['title'] ?? '';
              $sLink = $item['service_link'] ?? $item['link_url'] ?? '#';
              $sLinkText = $item['service_link_text'] ?? $item['link_text'] ?? 'Learn more →';
              $sIcon = $item['service_icon'] ?? $item['icon'] ?? 'workflow-circle-01-stroke-rounded';
              if (str_contains($sIcon, '#')) {
                $sIcon = explode('#', $sIcon)[1];
              }
            @endphp
            @if(!empty(trim($sTitle)))
              <div class="ucc-slide-item ucc-clone" aria-hidden="true">
                <a href="{{ $sLink }}" class="service-card" tabindex="-1">
                  <svg class="icon--cc"><use href="{{ asset('assets/frontend/icons.svg') }}#{{ $sIcon }}"></use></svg>
                  <div class="d-flex flex-column">
                    <span class="title">{{ $sTitle }}</span>
                    <span>{{ $sLinkText }}</span>
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
