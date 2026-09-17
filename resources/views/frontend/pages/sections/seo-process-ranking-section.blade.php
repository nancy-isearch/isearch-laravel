@push('styles')
<style>
.seo-process-section {
  background: url('/assets/frontend/images/process-bg.webp'), url('/assets/frontend/images/pages/city-details-for-seo/process-bg.webp');
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  padding-block: 4rem;
  position: relative;
  overflow: hidden;
}
.seo-process-section .sec-head {
  text-align: center;
  margin-bottom: 40px;
}
.seo-process-section .heading-1 {
  font-size: calc(1.375rem + 1.5vw);
  font-weight: 600;
  line-height: 1.2;
  text-transform: capitalize;
  margin-bottom: 12px;
}
.seo-process-section .ac {
  display: inline !important;
  line-height: 1.2;
  color: var(--primary-color, #074fae);
}
.seo-process-section .lead {
  font-size: 1.05rem;
  color: var(--muted, #6b7280);
  line-height: 1.6;
  max-width: 620px;
}
.seo-process-section .line-clamp-2 {
  overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
}
.seo-process-section .icon--cc {
  --cc-icon-size: 24px;
  --cc-icon-color: var(--primary-color, #074fae);
  display: inline-block;
  width: var(--cc-icon-size);
  height: var(--cc-icon-size);
  color: var(--cc-icon-color);
  fill: currentColor;
}
.seo-process-section i {
  color: var(--primary-color, #074fae);
  font-size: 22px;
}
.seo-process-section .seo-process-grid {
  position: relative;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 40px;
}
.seo-process-section .process-card {
  padding: 30px;
  text-align: center;
  position: relative;
  z-index: 2;
}
.seo-process-section .process-icon {
  width: 60px;
  height: 60px;
  background: #fff;
  border-radius: 50%;
  margin: 0 auto 14px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 24px;
  box-shadow: 0 7px 10px rgba(0, 0, 0, 0.15);
}
.seo-process-section .process-icon > i {
  background-color: var(--primary-color, #074fae);
}
.seo-process-section .process-icon > svg.icon--cc {
  color: var(--primary-color, #074fae);
  --cc-icon-color: var(--primary-color, #074fae);
  --cc-icon-size: 24px;
}
.seo-process-section .process-card span {
  font-size: 16px;
  display: block;
  font-weight: 600;
  margin-bottom: 6px;
}
.seo-process-section .process-card p {
  font-size: 14px;
  color: #666;
  margin: 0;
  line-height: 1.6;
}
@media (max-width: 992px) {
  .seo-process-section .seo-process-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 768px) {
  .seo-process-section {
    padding-block: 3rem;
  }
  .seo-process-section .process-card {
    padding: 16px 16px;
  }
}
@media (max-width: 576px) {
  .seo-process-section {
    padding: 60px 0;
  }
  .seo-process-section .seo-process-grid {
    grid-template-columns: 1fr;
    gap: 20px;
  }
}
</style>
@endpush

<!-- Hidden Inline SVG Sprite -->
<svg style="display: none;" aria-hidden="true">
  <defs>
    <symbol id="search-01-stroke-rounded" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" fill="none">
      <path d="M17 17l4 4" />
      <path d="M19 11c0-4.4183-3.5817-8-8-8-4.4183 0-8 3.5817-8 8 0 4.4183 3.5817 8 8 8 4.4183 0 8-3.5817 8-8z" />
    </symbol>
    <symbol id="robotic-stroke-rounded" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" stroke-linejoin="round" fill="none">
      <path d="M19 16v-2c0-2.8284 0-4.2426-0.8787-5.1213C17.2426 8 15.8284 8 13 8h-2C8.1716 8 6.7574 8 5.8787 8.8787 5 9.7574 5 11.1716 5 14v2c0 2.8284 0 4.2426 0.8787 5.1213C6.7574 22 8.1716 22 11 22h2c2.8284 0 4.2426 0 5.1213-0.8787S19 18.8284 19 16z" />
      <path d="M19 18c1.4142 0 2.1213 0 2.5607-0.4393C22 17.1213 22 16.4142 22 15s0-2.1213-0.4393-2.5607C21.1213 12 20.4142 12 19 12" />
      <path d="M5 18c-1.4142 0-2.1213 0-2.5607-0.4393C2 17.1213 2 16.4142 2 15s0-2.1213 0.4393-2.5607C2.8787 12 3.5858 12 5 12" />
      <path d="M13.5 3.5C13.5 4.3284 12.8284 5 12 5s-1.5-0.6716-1.5-1.5S11.1716 2 12 2s1.5 0.6716 1.5 1.5z" />
      <path d="M12 5v3" />
      <path d="M9 13v1" />
      <path d="M15 13v1" />
      <path d="M10 17.5c0 0 0.6667 0.5 2 0.5s2-0.5 2-0.5" />
    </symbol>
    <symbol id="settings-02-stroke-rounded" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none">
      <path d="M15.5 12c0 1.933-1.567 3.5-3.5 3.5S8.5 13.933 8.5 12 10.067 8.5 12 8.5s3.5 1.567 3.5 3.5z" />
      <path d="M21.011 14.0965c0.5219-0.1407 0.7829-0.2111 0.8859-0.3457C22 13.6163 22 13.3998 22 12.9669v-1.9337c0-0.4329 0-0.6494-0.1031-0.7839-0.1031-0.1346-0.364-0.205-0.8859-0.3457-1.9504-0.526-3.1711-2.5651-2.6677-4.5027 0.1384-0.5329 0.2076-0.7993 0.1415-0.9556-0.0661-0.1563-0.2557-0.264-0.6351-0.4793L16.125 2.9867c-0.3722-0.2113-0.5583-0.317-0.7253-0.2945-0.1671 0.0225-0.3555 0.2105-0.7325 0.5865-1.4592 1.4558-3.8736 1.4557-5.3329-1e-4-0.3769-0.376-0.5653-0.564-0.7324-0.5865-0.167-0.0225-0.3531 0.0832-0.7254 0.2945L6.1518 3.9659c-0.3793 0.2153-0.5689 0.323-0.635 0.4792-0.0661 0.1563 31e-4 0.4228 0.1414 0.9557 0.5032 1.9377-0.7185 3.9768-2.6692 4.5028-0.5219 0.1407-0.7828 0.2111-0.8859 0.3456C2 10.3838 2 10.6003 2 11.0332v1.9337c0 0.4329 0 0.6494 0.1031 0.7839 0.1031 0.1346 0.364 0.205 0.8859 0.3457 1.9504 0.526 3.1711 2.5651 2.6677 4.5027-0.1384 0.5329-0.2076 0.7993-0.1415 0.9556 0.0661 0.1563 0.2557 0.264 0.635 0.4793l1.7248 0.9793c0.3722 0.2113 0.5583 0.317 0.7254 0.2945s0.3555-0.2106 0.7323-0.5866c1.46-1.4569 3.8761-1.457 5.3362-1e-4 0.3768 0.3761 0.5652 0.5641 0.7323 0.5866 0.167 0.0225 0.3532-0.0832 0.7254-0.2945l1.7247-0.9793c0.3794-0.2153 0.5691-0.323 0.6351-0.4793 0.0661-0.1563-31e-4-0.4227-0.1416-0.9556-0.5036-1.9375 0.7161-3.9765 2.6662-4.5026z" />
    </symbol>
    <symbol id="chart-analysis-stroke-rounded" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" fill="none">
      <path d="M3 11 5.5 8.5c1.0171-1.0171 1.5256-1.5256 2.1372-1.6384 0.2398-0.0442 0.4857-0.0442 0.7256 0C8.9744 6.9744 9.483 7.483 10.5 8.5c1.0171 1.017 1.5256 1.5256 2.1372 1.6384 0.2399 0.0442 0.4857 0.0442 0.7256 0C13.9744 10.0256 14.4829 9.5171 15.5 8.5L21 3" />
      <path d="M3 15v6M9 13v8M15 16v5M21 9v12" />
    </symbol>
    <symbol id="pencil-edit-02-stroke-rounded" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" stroke-linejoin="round" fill="none">
      <path d="M16.4249 4.6051l0.99-0.99c0.8202-0.8201 2.1499-0.8201 2.97 0 0.8201 0.8201 0.8201 2.1498 0 2.97l-0.99 0.99M16.4249 4.6051 9.7656 11.2644C9.2581 11.772 8.898 12.4078 8.724 13.1041L8 16l2.8959-0.724c0.6963-0.174 1.3321-0.5341 1.8397-1.0416l6.6593-6.6593M16.4249 4.6051l2.97 2.97" />
      <path d="M18.9999 13.5c0 3.2875 0 4.9312-0.9079 6.0376-0.1662 0.2025-0.3519 0.3882-0.5545 0.5544C16.4312 21 14.7874 21 11.4999 21H11c-3.7712 0-5.6568 0-6.8284-1.1716C3 18.6569 3 16.7712 3 13v-0.5c0-3.2875 0-4.9312 0.9079-6.0376 0.1663-0.2025 0.352-0.3882 0.5545-0.5545C5.5688 5 7.2125 5 10.5 5" />
    </symbol>
    <symbol id="file-01-stroke-rounded" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" fill="none">
      <path d="M8 7h8" />
      <path d="M8 11h4" />
      <path d="M13 21.5V21c0-2.8284 0-4.2426 0.8787-5.1213S16.1716 15 19 15h0.5M20 13.3431V10c0-3.7712 0-5.6569-1.1716-6.8284C17.6569 2 15.7712 2 12 2 8.2288 2 6.3431 2 5.1716 3.1716 4 4.3431 4 6.2288 4 10v4.5442c0 3.245 0 4.8675 0.8861 5.9665 0.179 0.222 0.3812 0.4242 0.6032 0.6032C6.5883 22 8.2108 22 11.4558 22c0.7056 0 1.0583 0 1.3814-0.114 0.0672-0.0237 0.133-0.051 0.1973-0.0817 0.3091-0.1479 0.5585-0.3973 1.0574-0.8962l4.7365-4.7365c0.5781-0.5781 0.8671-0.8671 1.0194-1.2347C20 14.5694 20 14.1606 20 13.3431z" />
    </symbol>
  </defs>
</svg>
<!-- SEO Process Section Component -->
<section class="seo-process-section sec">
  <div class="container-fluid">
    <div class="sec-head">
      <h2 class="heading-1 mx-auto">{!! $content['heading'] ?? 'Our SEO Services for <span class="ac">Higher Google Rankings</span>' !!}</h2>
      <p class="lead mx-auto line-clamp-2">
        {!! $content['description'] ?? 'Widen your online presence and reach more customers with iSearchSolution - a top SEO Services Company in Delhi - dedicated to driving consistent business growth through result-focused strategies.' !!}
      </p>
    </div>
    @php
      $cards = $content['process_cards'] ?? [
        ['card_title' => 'SEO', 'card_description' => 'With our expertise in artificial intelligence and SEO, we develop effective strategies that increase rankings and strengthen online visibility.', 'card_icon' => 'search-01-stroke-rounded'],
        ['card_title' => 'LLM SEO', 'card_description' => 'By optimizing content structure, we ensure your company earns citations in LLMs and boosts visibility even in the zero-click era.', 'card_icon' => 'robotic-stroke-rounded'],
        ['card_title' => 'Technical SEO', 'card_description' => 'As an experienced SEO Agency in Delhi, our professionals improve crawlability, fix technical issues, and optimise website speed to boost performance.', 'card_icon' => 'settings-02-stroke-rounded'],
        ['card_title' => 'Enterprise SEO', 'card_description' => 'With our enterprise SEO services, we amplify brand presence, traffic, and rankings to provide long-term growth for large-scale businesses.', 'card_icon' => 'chart-analysis-stroke-rounded'],
        ['card_title' => 'On-Page Optimisation', 'card_description' => 'To improve rankings in search engines, we optimise meta tags, URLs, headings, and content structure, and enhance the user experience.', 'card_icon' => 'pencil-edit-02-stroke-rounded'],
        ['card_title' => 'Content Optimisation', 'card_description' => 'We constantly optimise content to align with search intent so we can drive enhanced user engagement and conversions using our marketing services.', 'card_icon' => 'file-01-stroke-rounded']
      ];
      $stepNum = 1;
    @endphp
    <div class="seo-process-grid">
      @foreach($cards as $card)
        @php
          $cTitle = $card['card_title'] ?? $card['title'] ?? '';
          $cDesc = $card['card_description'] ?? $card['description'] ?? '';
          $cIcon = $card['card_icon'] ?? 'search-01-stroke-rounded';
          if (str_contains($cIcon, '#')) {
            $cIcon = explode('#', $cIcon)[1];
          }
        @endphp
        @if(!empty(trim($cTitle)))
          <div class="process-card step-{{ $stepNum++ }}">
            <div class="process-icon">
              <svg class="icon--cc"><use href="#{{ $cIcon }}"></use></svg>
            </div>
            <span>{{ $cTitle }}</span>
            <p>{{ $cDesc }}</p>
          </div>
        @endif
      @endforeach
    </div>
  </div>
</section>
