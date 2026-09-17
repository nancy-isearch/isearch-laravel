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