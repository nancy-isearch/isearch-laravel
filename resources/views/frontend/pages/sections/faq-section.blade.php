<!-- FAQ SECTION WITH SEO SCHEMA (MODERN ACCORDION) -->
<style>
.home-faq-section .container-fluid {
  padding-inline: clamp(1rem, 4vw, 3.125rem);
  max-width: 1600px;
  margin-inline: auto;
}


.home-faq-section img {
  object-fit: contain;
  height: 260px;
  width: auto;
  max-width: 100%;
  display: block;
}

.home-faq-section .faq-sticky-wrap {
  position: sticky;
  top: 90px;
}

.home-faq-section .faq-divider {
  border-left: 1px dashed #cfd4da;
  height: 100%;
  min-height: 380px;
  margin-block: 1rem;
}

.home-faq-section .faq-container {
  width: 100%;
}

.home-faq-section .faq-container details {
  transition: all 0.3s ease;
  border-bottom: 1px solid #e5e7eb;
  background: #ffffff;
}

.home-faq-section .faq-container details:last-child {
  border-bottom: none;
}

.home-faq-section .faq-container summary {
  font-size: 18px;
  font-weight: 600;
  color: #343a40;
  padding: 18px 0;
  cursor: pointer;
  list-style: none;
  display: flex;
  gap: 20px;
  align-items: center;
  outline: none;
  user-select: none;
}

.home-faq-section .faq-container summary::-webkit-details-marker {
  display: none;
}

.home-faq-section .faq-container summary > .faq-number {
  width: 36px;
  height: 36px;
  min-width: 36px;
  border-radius: 50%;
  border: 1px solid #c7d2fe;
  color: #2563eb;
  font-weight: 600;
  font-size: 14px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  background-color: #f8faff;
}

.home-faq-section .faq-container summary > .icon {
  width: 28px;
  height: 28px;
  min-width: 28px;
  border-radius: 50%;
  position: relative;
  border: 1px solid #111111;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-left: auto;
  flex-shrink: 0;
  transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  padding: 0;
  color: #111111;
}

.home-faq-section .faq-container summary > .icon svg, .home-faq-section .faq-container summary > .icon .icon--cc {
  width: 14px;
  height: 14px;
  display: block;
  stroke: currentColor;
  stroke-width: 2;
  transition: transform 0.3s ease;
  pointer-events: none;
}

.home-faq-section .faq-container details[open] {
  background: #ffffff;
}

.home-faq-section .faq-container details[open] .icon {
  transform: rotate(45deg);
}

.home-faq-section .faq-container .content {
  padding: 0 20px 24px 56px;
}

.home-faq-section .faq-container .content p {
  margin: 0;
  font-size: 15px;
  color: #4b5563;
  line-height: 1.7;
  font-weight: 400;
}

@media (max-width: 991px) {
  .home-faq-section .faq-divider {
    display: none !important;
  }


  .home-faq-section .faq-left {
    margin-bottom: 40px;
  }

  .home-faq-section .faq-sticky-wrap {
    position: static;
  }

}

@media (max-width: 576px) {
    .home-faq-section .faq-container .content {
    padding-left: 20px;
  }

  .home-faq-section .faq-container summary {
    gap: 12px;
    padding: 15px 0;
    font-size: 16px;
  }

  .home-faq-section .faq-left{
    margin-bottom: 0;
  }
  .home-faq-section .faq-image-wrap {
    display: none;
  }

}
</style>

<section class="section-clean section-clean--white home-faq-section" id="faq" aria-labelledby="faq-title" itemscope itemtype="https://schema.org/FAQPage">
    <div class="container-fluid">
        <div class="row g-4">
            <!-- Left Anchor Column -->
            <div class="col-lg-4 faq-left">
                <div class="sticky-top faq-sticky-wrap">
                    <h2 class="section-title" id="faq-title">{{ $content['faq_title'] ?? 'Frequently Asked Questions' }}</h2>
                    <p class="section-desc">{{ $content['faq_subtitle'] ?? '' }}</p>
                    <button type="button" class="btn btn-primary mb-4 openPopupBtn" aria-label="Book Free SEO Consultation Call">Book Free Consultation</button>
                    <div class="faq-image-wrap">
                        <img src="{{ asset('assets/frontend/images/faq-image-43564.webp') }}"
                            alt="SEO FAQs" aria-hidden="true" width="260"
                            height="260" loading="lazy" decoding="async" class="d-block" role="presentation" />
                    </div>
                </div>
            </div>

            <!-- VERTICAL DASHED BORDER DIVIDER -->
            <div class="col-lg-1 d-none d-lg-flex justify-content-center" aria-hidden="true">
                <div class="faq-divider"></div>
            </div>

            <!-- ACCORDION -->
            <div class="col-lg-7 d-flex align-items-center">
                <div class="faq-container">
                    @php
                        $faqs = $content['faqs'] ?? [];
                        $firstFaqs = array_slice($faqs, 0, 5);
                        $restFaqs = array_slice($faqs, 5);
                        $counter = 1;
                    @endphp

                    @foreach($firstFaqs as $index => $faq)
                        <details name="faq" {!! $index === 0 ? 'open' : '' !!} itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <summary>
                                <span class="faq-number">{{ sprintf('%02d', $counter++) }}</span>
                                <span itemprop="name">{{ $faq['question'] ?? $faq['Question'] ?? '' }}</span>
                                <span class="icon" aria-hidden="true">
                                    <svg class="icon--cc" focusable="false" width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 5V19M5 12H19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                            </summary>
                            <div class="content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <div itemprop="text">
                                    {!! $faq['answer'] ?? $faq['Answer'] ?? '' !!}
                                </div>
                            </div>
                        </details>
                    @endforeach

                    @if(count($restFaqs) > 0)
                        <!-- Hidden Drawer Trigger & Elements -->
                        <input type="checkbox" name="faq-toggle-gate" id="ccTmplFaqMoreToggle" class="faq-gate-input" hidden />
                        <div class="faq-hidden-drawer">
                            @foreach($restFaqs as $faq)
                                <details name="faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <summary>
                                        <span class="faq-number">{{ sprintf('%02d', $counter++) }}</span>
                                        <span itemprop="name">{{ $faq['question'] ?? $faq['Question'] ?? '' }}</span>
                                        <span class="icon" aria-hidden="true">
                                            <svg class="icon--cc" focusable="false" width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 5V19M5 12H19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                    </summary>
                                    <div class="content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            {!! $faq['answer'] ?? $faq['Answer'] ?? '' !!}
                                        </div>
                                    </div>
                                </details>
                            @endforeach
                        </div>
                        <!-- Semantic CSS Toggle Control -->
                        <label for="ccTmplFaqMoreToggle" class="faq-action-label mt-4"></label>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
