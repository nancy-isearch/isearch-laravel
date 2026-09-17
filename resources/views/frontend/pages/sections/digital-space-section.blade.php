
@push('styles')
<style>
.why-us-section {
  --wu-white: #fff;
  --wu-border: #e2e8f0;
  --wu-primary: #074fae;
  --wu-primary-light: #e8f0fe;
  --wu-radius-lg: 20px;
  --wu-radius-sm: 14px;
  --wu-transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
  --wu-text-muted: #666;
  --wu-dark: #1a1a2e;
  padding-block: clamp(40px, 6vw, 80px);
  position: relative;
  overflow: visible !important;
}
.why-us-section .ac {
  display: inline !important;
  color: var(--primary-color, #074fae);
}
.why-us-section .heading-1 {
  font-size: calc(1.375rem + 1.5vw);
  font-weight: 600;
  line-height: 1.2;
  text-transform: capitalize;
  margin-bottom: 12px;
}
.why-us-section .lead {
  font-size: 1.05rem;
  color: var(--muted, #6b7280);
  line-height: 1.6;
  max-width: 620px;
}
.why-us-section .eye {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: rgba(36, 85, 232, 0.08);
  border: 1.5px solid rgba(36, 85, 232, 0.18);
  color: var(--primary-color, #074fae);
  font-size: 0.75rem;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  padding: 5px 16px;
  border-radius: 50px;
  margin-bottom: 16px;
}
.why-us-section .eye::before {
  content: "";
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: var(--primary-color, #074fae);
  flex-shrink: 0;
  animation: blink 2s ease-in-out infinite;
}
.why-us-section .icon--cc {
  --cc-icon-size: 20px;
  --cc-icon-color: var(--primary-color, #074fae);
  display: inline-block;
  width: var(--cc-icon-size);
  height: var(--cc-icon-size);
  color: var(--cc-icon-color);
  fill: currentColor;
}
.why-us-section .wu-grid {
  display: grid;
  grid-template-columns: 1.1fr 1fr;
  gap: clamp(28px, 4.5vw, 54px);
  align-items: start;
}
.why-us-section .wu-media {
  position: -webkit-sticky;
  position: sticky;
  top: 100px;
  width: 100%;
  align-self: start;
  height: fit-content;
  z-index: 5;
  transform: none !important;
}
.why-us-section .wu-media img {
  width: 100%;
  height: 380px;
  object-fit: cover;
  border-radius: var(--wu-radius-lg);
  display: block;
  box-shadow: 0 16px 40px rgba(0, 0, 0, 0.1);
}
.why-us-section .wu-badge-float {
  position: absolute;
  bottom: clamp(14px, 3vw, 24px);
  left: clamp(14px, 3vw, 24px);
  background: var(--wu-primary);
  color: var(--wu-white);
  padding: clamp(12px, 2vw, 18px) clamp(16px, 3vw, 28px);
  border-radius: var(--wu-radius-sm);
  z-index: 2;
  animation: wu-float-anim 3.5s ease-in-out infinite;
  box-shadow: 0 10px 24px rgba(7, 79, 174, 0.35);
}
@keyframes wu-float-anim {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-8px); }
}
.why-us-section .wu-badge-float span {
  font-size: clamp(24px, 3vw, 32px);
  font-weight: 800;
  display: block;
  line-height: 1;
}
.why-us-section .wu-badge-float p {
  font-size: clamp(11px, 1.2vw, 13px);
  opacity: 0.95;
  margin-bottom: 0;
  font-weight: 500;
}
.why-us-section .wu-list {
  margin-top: 24px;
  list-style: none;
  padding: 0;
}
.why-us-section .wu-item {
  display: flex;
  gap: 16px;
  padding: 18px 0;
  border-bottom: 1px solid var(--wu-border);
  transition: var(--wu-transition);
  align-items: flex-start;
}
.why-us-section .wu-item:last-child {
  border-bottom: none;
}
.why-us-section .wu-item:hover {
  padding-left: 6px;
}
.why-us-section .wu-icon-box {
  width: 42px;
  height: 42px;
  min-width: 42px;
  border-radius: 50%;
  background: var(--wu-primary);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  color: var(--wu-white);
  font-weight: 700;
  font-size: 1.1rem;
}
.why-us-section .wu-item h3 {
  font-size: 16px;
  font-weight: 700;
  color: var(--dark, #1a1a2e);
  margin-bottom: 4px;
}
.why-us-section .wu-item p {
  font-size: 14px;
  color: var(--text-light, #666);
  margin-bottom: 0;
}
@media (max-width: 991px) {
  .why-us-section .wu-grid {
    grid-template-columns: 1fr;
  }
  .why-us-section .wu-media {
    position: static;
    top: auto;
    height: auto;
  }
  .why-us-section .wu-media img {
    height: auto;
    max-height: 340px;
  }
}
</style>
@endpush

<!-- Hidden Inline SVG Sprite for Offline/Direct Preview -->
<svg style="display: none;" aria-hidden="true">
  <defs>
    <symbol id="tick-01-stroke-rounded" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" fill="none">
      <path d="M5 14.5c0 0 1.5 0 3.5 3.5 0 0 5.5588-9.1667 10.5-11" />
    </symbol>
  </defs>
</svg>

<!-- WHY US Component -->
<section class="why-us-section wu-section" aria-labelledby="why-us-title">
  <div class="container-fluid">
    <div class="wu-grid">
      <div class="wu-media">
        <figure style="margin: 0; position: relative;">
          @php
            $side_img = $content['side_image'] ?? null;
            if ($side_img) {
              if (str_starts_with($side_img, 'http://') || str_starts_with($side_img, 'https://')) {
                $imgUrl = $side_img;
              } elseif (str_starts_with($side_img, 'page_sections/')) {
                $imgUrl = asset('storage/' . $side_img);
              } else {
                $imgUrl = asset($side_img);
              }
            } else {
              $imgUrl = asset('assets/frontend/images/ai-driven-seo-img-1378.webp');
            }
          @endphp
          <picture class="banner-img-wrapper">
            <img
              src="{{ $imgUrl }}"
              alt="{{ $content['heading'] ?? 'SEO Services in Delhi - Dominate Digital Space' }}"
              width="800"
              height="480"
              loading="lazy"
              decoding="async"
            />
          </picture>
        </figure>
      </div>
      <div class="reveal">
        <div>
          <h2 id="why-us-title" class="heading-1">{!! $content['heading'] ?? 'Dominate Digital Space with <span class="ac">SEO Services in Delhi</span>' !!}</h2>
          <p class="lead">{!! $content['description'] ?? 'In a city that never stops scrolling, getting strong online visibility is challenging until you meet with the best SEO company in Delhi NCR.' !!}</p>
        </div>
        @php
          $steps = $content['steps_list'] ?? [
            ['step_title' => '78% of local mobile searches lead to purchase', 'step_description' => 'Effective local presence boosts business growth and increases sales.'],
            ['step_title' => 'India has 958 million Active Internet Users', 'step_description' => 'A strong digital presence gives you a wide exposure for business.'],
            ['step_title' => '62% of Delhi NCR consumers check Google Maps before visiting a shop', 'step_description' => 'Visibility on Google Maps is a must to attract real, ready-to-visit customers.'],
            ['step_title' => 'Delhi is highly competitive', 'step_description' => 'Millions of businesses are competing online in India’s capital city.']
          ];
        @endphp
        <ul class="wu-list" role="list">
          @foreach($steps as $step)
            @php
              $sTitle = $step['step_title'] ?? $step['title'] ?? '';
              $sDesc = $step['step_description'] ?? $step['description'] ?? '';
            @endphp
            @if(!empty(trim($sTitle)))
              <li class="wu-item" role="listitem">
                <div class="wu-icon-box" aria-hidden="true">
                  {{ $loop->iteration }}
                </div>
                <div>
                  <h3>{{ $sTitle }}</h3>
                  <p>{{ $sDesc }}</p>
                </div>
              </li>
            @endif
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</section>
