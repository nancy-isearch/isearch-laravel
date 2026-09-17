
<!-- CTA BANNER COMPONENT -->
<section class="cta-banner" aria-labelledby="cta-heading">
  <div class="cta-overlay">
    <img src="/src/assets/images/contact-bg.webp" alt="isearch team image" width="1600" height="420" loading="lazy" class="d-block" aria-hidden="true" />
  </div>
  <div class="container-fluid">
    <div class="cta-content">
      <h2 id="cta-heading" class="cta-title heading-1">{!! $content['heading'] ?? 'Ready to Scale Your Digital Footprint &amp; <span class="ac text-white text-opacity-75">Maximize ROI</span>?' !!}</h2>
      <p class="cta-lead">{!! $content['description'] ?? 'Partner with our expert team to deploy data-driven strategies engineered to accelerate your revenue and market visibility.' !!}</p>
      <div class="cta-actions">
        <a href="{{ $content['btn_link'] ?? '#' }}" class="primary-btn openPopupBtn">{{ $content['btn_text'] ?? 'Schedule a Discovery Call' }}</a>
      </div>
    </div>
  </div>
</section>
  