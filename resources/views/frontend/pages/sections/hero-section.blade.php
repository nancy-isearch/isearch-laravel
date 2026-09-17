<!-- SEO-main-banner Component -->
@push('styles')
<style>
.seo-hero-section {
  background: #074fae;
  padding: 60px 0 0;
  overflow: hidden;
  position: relative;
  min-height: 520px;
}
.seo-hero-section::before {
  content: "";
  position: absolute;
  top: -80px;
  right: -80px;
  width: 420px;
  height: 420px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.05);
  pointer-events: none;
}
.seo-hero-section::after {
  content: "";
  position: absolute;
  top: 60px;
  right: 60px;
  width: 200px;
  height: 200px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.04);
  pointer-events: none;
}
.seo-hero-section .hero-inner {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 40px;
  align-items: center;
  padding: 0 40px;
}
.seo-hero-section .eye {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-size: 0.75rem;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  padding: 6px 16px;
  border-radius: 50px;
  margin-bottom: 16px;
}
.seo-hero-section .eye-alt {
  background: rgba(255, 255, 255, 0.15);
  color: #fff;
  border: 1px solid rgba(255, 255, 255, 0.25);
}
.seo-hero-section .eye-alt::before {
  content: "";
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: #fff;
  flex-shrink: 0;
  animation: blink 2s ease-in-out infinite;
}
@keyframes blink {
  0%, 100% { opacity: 1; transform: scale(1); }
  50% { opacity: 0.3; transform: scale(1.7); }
}
.seo-hero-section .hero-title {
  font-size: calc(1.425rem + 2.1vw);
  font-weight: 600;
  color: #fff;
  line-height: 1.18;
  margin-bottom: 16px;
}
.seo-hero-section .ac {
  display: inline !important;
  color: var(--primary-color, #074fae);
}
.seo-hero-section .hero-desc {
  font-size: 16px;
  color: rgba(255, 255, 255, 0.75);
  line-height: 1.6;
  margin-bottom: 26px;
  max-width: 620px;
}
.seo-hero-section .hero-btns {
  display: flex;
  gap: 12px;
  flex-wrap: wrap;
  margin-bottom: 40px;
}
.seo-hero-section .btn-primary {
  background: #ffffff;
  color: #074fae !important;
  font-size: 14px;
  font-weight: 600;
  padding: 10px 28px;
  border-radius: 100px;
  border: none;
  cursor: pointer;
  transition: all 0.25s ease;
  text-decoration: none;
  display: inline-block;
}
.seo-hero-section .btn-primary:hover {
  background: #f0f6ff;
  color: #053b82 !important;
  transform: translateY(-2px);
}
.seo-hero-section .btn-secondary {
  background: transparent;
  color: #fff;
  font-size: 14px;
  font-weight: 500;
  padding: 10px 28px;
  border-radius: 100px;
  border: 1.5px solid rgba(255, 255, 255, 0.45);
  cursor: pointer;
  transition: all 0.25s ease;
  text-decoration: none;
  display: inline-block;
}
.seo-hero-section .btn-secondary:hover {
  background-color: #fff;
  color: var(--primary, #074fae);
  border-color: #fff;
}
.seo-hero-section .hero-stats {
  display: flex;
  gap: 28px;
  align-items: center;
}
.seo-hero-section .stat-item {
  display: flex;
  flex-direction: column;
}
.seo-hero-section .stat-num {
  font-size: 24px;
  font-weight: 700;
  color: #fff;
  line-height: 1.2;
}
.seo-hero-section .stat-label {
  font-size: 12px;
  color: rgba(255, 255, 255, 0.7);
  margin-top: 2px;
  letter-spacing: 0.2px;
}
.seo-hero-section .stat-divider {
  width: 1px;
  background: rgba(255, 255, 255, 0.25);
  height: 36px;
}
.seo-hero-section .hero-form-container {
  width: 100%;
  max-width: 440px;
  justify-self: end;
  z-index: 3;
}
.seo-hero-section .hero-form-card {
  background: rgba(255, 255, 255, 0.95);
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
  border: 1px solid rgba(255, 255, 255, 0.9);
  border-radius: 24px;
  padding: 28px 24px;
  box-shadow: 0 20px 45px -10px rgba(15, 23, 42, 0.16), 0 0 0 1px rgba(15, 23, 42, 0.05);
  transition: all 0.25s ease;
}
.seo-hero-section .hero-form-card:hover {
  box-shadow: 0 25px 55px -10px rgba(15, 23, 42, 0.22), 0 0 0 1px rgba(7, 79, 174, 0.18);
}
.seo-hero-section .hero-form-title {
  font-size: 1.45rem;
  font-weight: 600;
  margin-bottom: 4px;
  color: #0f172a;
  letter-spacing: -0.02em;
  font-style: italic;
}
.seo-hero-section .hero-form-subtitle {
  font-size: 0.85rem;
  color: #64748b;
  margin-bottom: 18px;
  line-height: 1.4;
}
.seo-hero-section .hero-lead-form .form-group {
  margin-bottom: 10px;
}
.seo-hero-section .form-row-2col {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 10px;
  margin-bottom: 10px;
}
.seo-hero-section .form-row-2col .form-group {
  margin-bottom: 0;
}
.seo-hero-section .hero-lead-form .form-input {
  width: 100%;
  border: 1px solid #cbd5e1;
  border-radius: 10px;
  padding: 10px 14px;
  font-size: 0.88rem;
  background: #ffffff;
  color: #0f172a;
  outline: none;
  transition: border-color 0.2s ease, box-shadow 0.2s ease;
  box-sizing: border-box;
}
.seo-hero-section .hero-lead-form .form-input:focus {
  border-color: #074fae;
  box-shadow: 0 0 0 3px rgba(7, 79, 174, 0.14);
}
.seo-hero-section .hero-lead-form .form-textarea {
  resize: vertical;
  min-height: 72px;
}
.seo-hero-section .btn-hero-enquire {
  width: 100%;
  padding: 13px 20px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  background: linear-gradient(135deg, #074fae 0%, #0284c7 100%);
  color: #ffffff !important;
  font-weight: 600;
  font-size: 0.95rem;
  border: none;
  border-radius: 999px;
  cursor: pointer;
  box-shadow: 0 6px 18px rgba(7, 79, 174, 0.28);
  transition: all 0.25s ease;
  margin-top: 4px;
  text-decoration: none;
}
.seo-hero-section .btn-hero-enquire:hover {
  transform: translateY(-2px);
  background: linear-gradient(135deg, #0284c7 0%, #074fae 100%);
  box-shadow: 0 10px 24px rgba(7, 79, 174, 0.38);
  color: #ffffff !important;
}
.seo-hero-section .form-privacy-note {
  font-size: 0.74rem;
  color: #64748b;
  line-height: 1.35;
  white-space: nowrap;
}
.seo-hero-section .hero-pills-container {
  width: 100%;
  margin-top: 40px;
  padding: 8px 0 16px;
  background: transparent;
  display: flex;
  justify-content: flex-start;
}
.seo-hero-section .hero-pills-group {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  gap: 12px;
}
.seo-hero-section .hero-pills-container .pill {
  background: rgba(255, 255, 255, 0.12);
  color: rgba(255, 255, 255, 0.9);
  font-size: 12px;
  font-weight: 500;
  letter-spacing: 0.2px;
  padding: 7px 16px;
  border-radius: 999px;
  border: 1px solid rgba(255, 255, 255, 0.2);
  white-space: nowrap;
  display: inline-flex;
  align-items: center;
  user-select: none;
  transition: background 0.2s ease, border-color 0.2s ease, color 0.2s ease;
}
.seo-hero-section .hero-pills-container .pill:hover {
  background: rgba(255, 255, 255, 0.22);
  border-color: rgba(255, 255, 255, 0.4);
  color: #ffffff;
}
@media (max-width: 992px) {
  .seo-hero-section .hero-inner {
    grid-template-columns: 1fr;
    gap: 36px;
    padding: 0 26px;
  }
  .seo-hero-section .hero-form-container {
    max-width: 480px;
    margin: 0 auto;
    justify-self: center;
  }
}
@media (max-width: 576px) {
  .seo-hero-section .hero-inner {
    padding: 0 16px;
  }
  .seo-hero-section .form-row-2col {
    grid-template-columns: 1fr;
    gap: 10px;
  }
  .seo-hero-section .hero-form-card {
    padding: 22px 16px;
  }
  .seo-hero-section .form-privacy-note {
    white-space: normal;
  }
}
</style>
@endpush

<section class="seo-hero-section hero">
  <div class="container-fluid px-0">
    <div class="hero-inner">
      <div class="hero-left">
        <span class="eye eye-alt">{{ $content['badge_text'] ?? 'Delhi’s Top SEO Agency' }}</span>
        <h1 class="hero-title">{!! $content['heading'] ?? 'Drive More Traffic With an <span class="ac text-white text-opacity-75">SEO Company in Delhi</span>' !!}</h1>
        <p class="hero-desc">{!! $content['description'] ?? 'Stop getting on page two. Partner with a top SEO firm in Delhi to dominate search rankings and boost traffic.' !!}</p>
        <div class="hero-btns">
          <button type="button" class="btn-primary openPopupBtn">{{ $content['primary_btn_text'] ?? 'Get Free SEO Audit' }}</button>
          <a href="{{ $content['secondary_btn_link'] ?? '#services' }}" class="btn-secondary">{{ $content['secondary_btn_text'] ?? 'Explore Services' }}</a>
        </div>
        <div class="hero-stats">
          @php
            $stats = $content['stats'] ?? [
              ['value' => '200+', 'label' => 'Happy Clients'],
              ['value' => '500+', 'label' => 'Projects Delivered'],
              ['value' => '80%', 'label' => 'Revenue Growth'],
            ];
          @endphp
          @foreach($stats as $index => $stat)
            @if($index > 0)
              <div class="stat-divider"></div>
            @endif
            <div class="stat-item">
              <div class="stat-num">{{ $stat['value'] ?? '' }}</div>
              <div class="stat-label">{{ $stat['label'] ?? '' }}</div>
            </div>
          @endforeach
        </div>
      </div>

      <!-- Right Column: Lead Form Card -->
      <div class="hero-form-container">
        <div class="hero-form-card">
          <h3 class="hero-form-title">Get in touch with us!</h3>
          <p class="hero-form-subtitle">Find growth opportunities for your industry in 2 hours.</p>

          <form
            action="#"
            method="POST"
            class="hero-lead-form"
            onsubmit="
              event.preventDefault();
              alert('Thank you! An SEO growth consultant will contact you within 2 hours with your strategy audit.');
            "
          >
            <div class="form-row-2col">
              <div class="form-group">
                <input type="text" id="hero-full-name" class="form-input" placeholder="Full name*" required />
              </div>
              <div class="form-group">
                <input type="tel" id="hero-phone" class="form-input" placeholder="Phone number*" required />
              </div>
            </div>

            <div class="form-row-2col">
              <div class="form-group">
                <input type="email" id="hero-email" class="form-input" placeholder="Your email*" required />
              </div>
              <div class="form-group">
                <input type="text" id="hero-company" class="form-input" placeholder="Company / Organization*" required />
              </div>
            </div>

            <div class="form-group">
              <textarea id="hero-message" class="form-input form-textarea" placeholder="Type your message / growth goals*" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn-hero-enquire">
              <span>Enquire Now</span>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </button>

            <p class="form-privacy-note text-center mt-2 mb-0">
              We respect your privacy. No spam, ever.
            </p>
          </form>
        </div>
      </div>
    </div>

    <!-- Highlight Pills -->
    <div class="hero-pills-container">
        @php
          $pills = $content['pills_list'] ?? [
            ['pill_text' => '100% White Hat SEO'],
            ['pill_text' => 'Google Algorithm Safe'],
            ['pill_text' => 'Measurable Results'],
            ['pill_text' => 'Keyword Ranking Growth'],
            ['pill_text' => 'Quality Backlink Building'],
            ['pill_text' => 'Technical SEO Optimization'],
            ['pill_text' => 'High Conversion ROI'],
            ['pill_text' => 'Local Map Pack Ranking'],
            ['pill_text' => 'Competitor Gap Analysis'],
            ['pill_text' => 'Transparent Monthly Reports'],
            ['pill_text' => 'Dedicated Account Manager'],
            ['pill_text' => 'Zero Penalty Assurance'],
          ];
        @endphp
        <div class="hero-pills-group">
          @foreach($pills as $pill)
            @php $text = $pill['pill_text'] ?? $pill['name'] ?? ''; @endphp
            @if(!empty(trim($text)))
              <span class="pill">{{ $text }}</span>
            @endif
          @endforeach
        </div>
    </div>
  </div>
</section>
