<!-- FAQ SECTION WITH SEO SCHEMA -->
<section class="faq-section" aria-labelledby="faq-main-title" itemscope itemtype="https://schema.org/FAQPage">
    <div class="container-fluid">
        <div class="row g-4">
            <!-- Left Anchor Column -->
            <div class="col-lg-4 faq-aside">
                <div class="sticky-top" style="top: 90px">
                    <h2 id="faq-main-title" class="faq-display-title">{{ $content['faq_title'] ?? 'Frequently Asked Questions' }}</h2>
                    <p class="faq-lead">{{ $content['faq_subtitle'] ?? '' }}</p>
                    <button type="button" class="primary-btn openPopupBtn mb-4">Book Free Consultation</button>
                    <div class="faq-illustration-wrap">
                        <img src="{{ asset('assets/frontend/images/faq-image-43564.webp') }}"
                            alt="Frequently Asked Questions Illustration" aria-hidden="true" width="260"
                            height="260" loading="lazy" class="d-block" />
                    </div>
                </div>
            </div>
            <!-- Center Structural Divider -->
            <div class="col-lg-1 d-none d-lg-flex justify-content-center">
                <div class="faq-vertical-line"></div>
            </div>
            <!-- Right Accordion Board -->
            <div class="col-lg-7 d-flex align-items-center">
                <div class="faq-accordion-holder">
                    @php
                        $faqs = $content['faqs'] ?? [];
                        $firstFaqs = array_slice($faqs, 0, 5);
                        $restFaqs = array_slice($faqs, 5);
                        $counter = 1;
                    @endphp

                    @foreach($firstFaqs as $faq)
                        <details name="faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <summary>
                                <span class="faq-badge">{{ sprintf('%02d', $counter++) }}</span>
                                <span itemprop="name">{{ $faq['question'] ?? $faq['Question'] ?? '' }}</span>
                                <span class="faq-toggle-icon" aria-hidden="true">+</span>
                            </summary>
                            <div class="faq-body-panel" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
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
                                        <span class="faq-badge">{{ sprintf('%02d', $counter++) }}</span>
                                        <span itemprop="name">{{ $faq['question'] ?? $faq['Question'] ?? '' }}</span>
                                        <span class="faq-toggle-icon" aria-hidden="true">+</span>
                                    </summary>
                                    <div class="faq-body-panel" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
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
