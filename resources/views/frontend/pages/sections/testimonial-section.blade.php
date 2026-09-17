<!-- PRODUCTION-READY PREVENT-CLASH TESTIMONIAL COMPONENT -->
@php
    $testimonials = $content['testimonials'] ?? [
        [
            'quote' => 'We partnered with the team to boost our online search footprints so that enterprise brands and organizations could find us. Their specialized blueprint overhauled our complete content framework. Within a few months, we experienced high-intent keywords scaling to page one and a profound increase in inbound inquiries.',
            'author_name' => 'Pankaj Aggarwal',
            'author_role' => 'Founder & CEO',
            'brand_logo' => 'assets/frontend/images/sections/testimonial/icons.svg#flapone-logo'
        ],
        [
            'quote' => 'Our long-term collaboration with this digital team has yielded exceptional bottom-line transformation. They completely streamlined our site architecture and aligned layout nodes to address exact user intent patterns. We value their proactive analytics strategy, transparency, and data monitoring consistency.',
            'author_name' => 'Santosh Jaiswal',
            'author_role' => 'Managing Director',
            'brand_logo' => 'assets/frontend/images/sections/testimonial/icons.svg#apml-logo'
        ],
        [
            'quote' => 'Competing within international conversion markets requires profound authority. This agency delivered distinct, top-tier content and advanced entity configuration schemas. The target landing modules they executed have captured higher ranking positions, translating directly into customer trust signals.',
            'author_name' => 'Oliver Harris',
            'author_role' => 'Operations Director',
            'brand_logo' => 'assets/frontend/images/sections/testimonial/icons.svg#tailored-tours-logo'
        ],
        [
            'quote' => 'After deploying their predictive optimization updates, organic metrics and audience interactions immediately shifted upwards. Their technical link architecture model provided the scale our business unit required to lead our regional market niche. Truly a premium team for scaling performance value.',
            'author_name' => 'Animesh Sharma',
            'author_role' => 'Marketing Lead',
            'brand_logo' => 'assets/frontend/images/sections/testimonial/icons.svg#saya-logo'
        ]
    ];
    $tCount = count($testimonials);
@endphp

<style>
.testimonial-section {
  --ucc-visible-slides: 2.2;
  --ucc-gap: 24px;
  --ucc-total-slides: {{ $tCount }};
  --ucc-transition-speed: 0.5s;
  background: #cfe6f7;
  overflow: hidden;
  width: 100%;
}

.testimonial-section .container-fluid {
  max-width: 1600px;
  margin-inline: auto;
  padding-inline: clamp(1rem, 4vw, 3.125rem);
}

.testimonial-section .testimonial-illustration img {
  max-width: 260px;
  height: auto;
  display: block;
}

.testimonial-section .testimonial-card {
  background: #ffffff;
  border-radius: 18px;
  padding: 24px 30px;
  height: 100%;
  min-height: 280px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  box-shadow: 0 4px 20px rgba(11, 36, 71, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.8);
}

.testimonial-section .quote-icon-wrap {
  margin-bottom: 16px;
}

.testimonial-section .quote-icon-wrap svg {
  width: 42px;
  height: 30px;
  color: #989898;
  stroke: #989898;
  stroke-width: 2;
  fill: none;
}

.testimonial-section .testimonial-card p {
  font-size: 14px;
  line-height: 1.6;
  color: #444444;
  display: -webkit-box;
  -webkit-line-clamp: 4;
  line-clamp: 4;
  -webkit-box-orient: vertical;
  overflow: hidden;
  margin-bottom: 0;
  font-weight: 400;
}

.testimonial-section .testimonial-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 25px;
  gap: 16px;
}

.testimonial-section .testimonial-footer strong {
  display: block;
  font-size: 15px;
  font-weight: 600;
  color: #0f172a;
}

.testimonial-section .testimonial-footer span {
  display: block;
  font-size: 13px;
  color: #666666;
  font-weight: 400;
}

.testimonial-section .testimonial-brand-img {
  max-width: 120px;
  max-height: 40px;
  width: auto;
  height: auto;
  object-fit: contain;
  display: block;
}

.testimonial-section .ucc-slider-container {
  width: 100%;
  position: relative;
}

.testimonial-section .ucc-slider-viewport {
  width: 100%;
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  scroll-behavior: smooth;
  -webkit-overflow-scrolling: touch;
}

.testimonial-section .ucc-slider-viewport::-webkit-scrollbar {
  display: none;
}

.testimonial-section .ucc-slider-track {
  display: flex;
  gap: var(--ucc-gap);
  transition: var(--ucc-transition-speed) ease-in-out;
}

.testimonial-section .ucc-slide-item {
  flex: 0 0 calc((100% - (var(--ucc-gap) * (var(--ucc-visible-slides) - 1))) / var(--ucc-visible-slides));
  scroll-snap-align: start;
}

.testimonial-section .ucc-slider-controls {
  position: relative;
  height: 48px;
  display: flex;
  align-items: center;
  margin-top: 15px;
}

.testimonial-section .ucc-control-group {
  position: absolute;
  inset: 0;
  display: none;
  align-items: center;
  justify-content: flex-end;
  padding-right: 20px;
  gap: 12px;
}

.testimonial-section .ucc-nav-btn {
  width: 44px;
  height: 44px;
  border-radius: 50%;
  border: 1px solid #e0e0e0;
  background: #ffffff;
  color: #000000;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  user-select: none;
  transition: all 0.25s ease;
}

.testimonial-section .ucc-nav-btn:hover {
  background: #0f172a;
  color: #ffffff;
  border-color: #0f172a;
}

.testimonial-section .ucc-nav-btn .icon--cc {
  width: 20px;
  height: 20px;
}

.testimonial-section .ucc-nav-btn.ucc-is-disabled {
  opacity: 0.4;
  pointer-events: none;
  background: #ffffff;
  color: #000000;
}

/* Dynamic Rules based on Testimonial Count */
@for($i = 1; $i <= $tCount; $i++)
@if($i == 1)
.testimonial-section #ucc-t-slide-{{ $i }}:checked ~ .ucc-slider-viewport .ucc-slider-track {
  transform: translateX(0);
}
@else
.testimonial-section #ucc-t-slide-{{ $i }}:checked ~ .ucc-slider-viewport .ucc-slider-track {
  transform: translateX(calc(-{{ $i - 1 }} * ((100% / var(--ucc-visible-slides)) + (var(--ucc-gap) / var(--ucc-visible-slides)))));
}
@endif
.testimonial-section #ucc-t-slide-{{ $i }}:checked ~ .ucc-slider-controls .ucc-group-{{ $i }} {
  display: flex;
}
@endfor

@media (max-width: 991px) {
  .testimonial-section {
    --ucc-visible-slides: 1.6;
  }

  .testimonial-section .testimonial-left {
    margin-bottom: 30px;
    text-align: center;
  }

  .testimonial-section .testimonial-illustration img {
    margin: 0 auto;
  }
}

@media (max-width: 768px) {
  .testimonial-section {
    --ucc-visible-slides: 1.2;
    --ucc-gap: 16px;
  }

  .testimonial-section .testimonial-left {
    text-align: start;
  }

  .testimonial-section .testimonial-illustration img {
    margin: 0;
  }

  @for($i = 1; $i <= $tCount; $i++)
  .testimonial-section #ucc-t-slide-{{ $i }}:checked ~ .ucc-slider-viewport .ucc-slider-track{{ $i < $tCount ? ',' : '' }}
  @endfor {
    transform: none;
  }

  .testimonial-section .ucc-slider-controls {
    display: none;
  }
}

@media (max-width: 576px) {
  .testimonial-section {
    --ucc-visible-slides: 1.05;
  }
}
</style>

<section class="section-clean testimonial-section" id="testimonials" aria-labelledby="testimonials-title">
  <div class="container-fluid pe-md-0">
    <div class="row align-items-center">
      <!-- LEFT COLUMN -->
      <div class="col-lg-4 testimonial-left">
        <h2 class="section-title" id="testimonials-title">{!! $content['heading'] ?? 'What UK Brands <span class="ac">Say</span>' !!}</h2>
        <p class="section-desc mb-5">{{ $content['description'] ?? 'Voices of Our UK Growth Partners' }}</p>
        <div class="testimonial-illustration">
            <img src="{{ asset('assets/frontend/images/sections/testimonial/Client-Feedback-img.webp') }}"
                alt="Client Feedback Illustration" width="260" height="210"
                loading="lazy" decoding="async" role="presentation" />
        </div>
      </div>

      <!-- SLIDER COLUMN -->
      <div class="col-lg-8 ps-4 ps-lg-0">
        <div class="ucc-slider-container">
          <!-- Active State Radio Controllers -->
          @for($i = 1; $i <= $tCount; $i++)
            <input type="radio" name="ucc-testimonial-state" id="ucc-t-slide-{{ $i }}" {{ $i == 1 ? 'checked' : '' }} hidden aria-label="Slide {{ $i }}" />
          @endfor

          <!-- Slider Viewport Window -->
          <div class="ucc-slider-viewport">
            <div class="ucc-slider-track py-4">
              @foreach($testimonials as $index => $testi)
              <div class="ucc-slide-item">
                <div class="testimonial-card">
                  <div class="quote-icon-wrap">
                    <svg class="icon--cc" aria-hidden="true" focusable="false"><use href="{{ asset('assets/frontend/images/sections/testimonial/icons.svg#blog-qoutes') }}"></use></svg>
                  </div>
                  <p>
                    "{{ $testi['quote'] ?? '' }}"
                  </p>
                  <div class="testimonial-footer">
                    <div>
                      <strong>{{ $testi['author_name'] ?? '' }}</strong>
                      <span>{{ $testi['author_role'] ?? '' }}</span>
                    </div>
                    @php $logo = $testi['brand_logo'] ?? ''; @endphp
                    @if(str_contains($logo, '.svg#'))
                        <svg class="testimonial-brand-img" style="max-height: 40px; width: 110px">
                            <use href="{{ asset($logo) }}"></use>
                        </svg>
                    @elseif($logo)
                        <img src="{{ asset($logo) }}" alt="Brand Logo" class="testimonial-brand-img" loading="lazy" width="120" height="40" />
                    @endif
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>

          <!-- Navigation Controls -->
          <div class="ucc-slider-controls d-none d-md-block">
            @for($i = 1; $i <= $tCount; $i++)
            <div class="ucc-control-group ucc-group-{{ $i }}">
              @if($i == 1)
                <span class="ucc-nav-btn ucc-is-disabled" aria-hidden="true">
                  <svg class="icon--cc" focusable="false"><use href="{{ asset('assets/frontend/images/sections/testimonial/icons.svg#arrow-left-01-stroke-rounded') }}"></use></svg>
                </span>
              @else
                <label for="ucc-t-slide-{{ $i - 1 }}" class="ucc-nav-btn" aria-label="Previous slide">
                  <svg class="icon--cc" aria-hidden="true" focusable="false"><use href="{{ asset('assets/frontend/images/sections/testimonial/icons.svg#arrow-left-01-stroke-rounded') }}"></use></svg>
                </label>
              @endif

              @if($i == $tCount)
                <span class="ucc-nav-btn ucc-is-disabled" aria-hidden="true">
                  <svg class="icon--cc" focusable="false"><use href="{{ asset('assets/frontend/images/sections/testimonial/icons.svg#arrow-right-01-stroke-rounded') }}"></use></svg>
                </span>
              @else
                <label for="ucc-t-slide-{{ $i + 1 }}" class="ucc-nav-btn" aria-label="Next slide">
                  <svg class="icon--cc" aria-hidden="true" focusable="false"><use href="{{ asset('assets/frontend/images/sections/testimonial/icons.svg#arrow-right-01-stroke-rounded') }}"></use></svg>
                </label>
              @endif
            </div>
            @endfor
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
