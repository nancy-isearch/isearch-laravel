@push('styles')
<style>
.seo-dual-section {
  background: radial-gradient(circle at center, #f4f9ff 0%, #eaf2ff 45%, #ffffff 100%);
  overflow: hidden;
  padding-block: clamp(55px, 6vw, 90px);
  position: relative;
}
.seo-dual-section .ac {
  display: inline !important;
  color: var(--primary-color, #074fae);
}
.seo-dual-section .seo-inner {
  max-width: 1200px;
}
.seo-dual-section .seo-content-one {
  padding-left: 40px;
  padding-right: 24px;
}
.seo-dual-section .seo-content-two {
  padding-left: 24px;
  padding-right: 40px;
}
.seo-dual-section h2 {
  font-size: clamp(24px, 2.2vw + 10px, 36px);
  font-weight: 600;
  margin-bottom: 20px;
  line-height: 1.25;
  color: #1a1a2e;
}
.seo-dual-section p {
  font-size: 15px;
  line-height: 1.7;
  color: #4a5568;
  margin-bottom: 16px;
}
.seo-dual-section a {
  color: var(--primary-color, #074fae);
  text-decoration: underline;
}
.seo-dual-section .side-illustration {
  position: absolute;
  max-width: 160px;
  pointer-events: none;
  z-index: 1;
}
.seo-dual-section .left-ill {
  left: -120px;
  bottom: -30px;
}
.seo-dual-section .right-ill {
  right: -120px;
  top: -30px;
}
.seo-dual-section .side-illustration img {
  width: 100%;
  height: auto;
  display: block;
}
.seo-dual-section .primary-btn {
  display: inline-block;
  font-size: 0.95rem;
  font-weight: 600;
  padding: 12px 28px;
  border-radius: 100px;
  background-color: var(--primary-color, #074fae);
  color: #ffffff !important;
  border: 1px solid transparent;
  transition: all 0.25s ease;
  cursor: pointer;
  text-decoration: none;
}
.seo-dual-section .primary-btn:hover {
  background-color: #053b82;
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(7, 79, 174, 0.25);
}
@media (max-width: 992px) {
  .seo-dual-section .seo-content-one {
    padding-left: 0;
    padding-right: 0;
    margin-bottom: 40px;
  }
  .seo-dual-section .seo-content-two {
    padding-left: 0;
    padding-right: 0;
  }
  .seo-dual-section .side-illustration {
    display: none;
  }
}
</style>
@endpush

<!-- SEO Dual Section Component -->
<section class="seo-dual-section">
  <div class="container-fluid">
    <div class="container seo-inner">
      <div class="row align-items-center">
        <div class="col-lg-6 position-relative seo-content-one">
          <div class="side-illustration left-ill">
            <img
              src="{{ asset('assets/frontend/images/pages/city-details-for-seo/seo-dual-section-right.webp') }}"
              alt="SEO Services in Delhi for Every Industry Niche"
              width="160"
              height="186"
              loading="lazy"
              role="presentation"
            />
          </div>
          <h2>{!! $content['left_heading'] ?? 'Tailored <span class="ac">SEO Services in Delhi</span> for Every Industry Niche' !!}</h2>
          <div>
            {!! $content['left_description'] ?? '<p>At iSearchSolution, we believe that the same strategy doesn\'t work for all industries. As a Professional SEO Company in Delhi, we build data-driven strategies to match specific market dynamics. Our experts focus on transactional intent and site speed when they work on an e-commerce project.</p><p class="mb-4">For the Healthcare website, we prioritise E-E-A-T and <a href="#local-seo">Local SEO</a> to build patient trust. Likewise, our industry-based roadmap, when offering Internet Marketing Services in Delhi, boosts business growth for every niche.</p>' !!}
          </div>
          <div class="my-4">
            <button type="button" class="primary-btn openPopupBtn">Request a quote</button>
          </div>
        </div>
        <div class="col-lg-6 position-relative seo-content-two">
          <div class="side-illustration right-ill">
            <img
              src="{{ asset('assets/frontend/images/pages/city-details-for-seo/seo-dual-section-left.webp') }}"
              alt="Our Client-Focused SEO Growth Strategy"
              width="160"
              height="166"
              loading="lazy"
              role="presentation"
            />
          </div>
          <h2>{!! $content['right_heading'] ?? 'Our Client-Focused <span class="ac">SEO Growth Strategy</span>' !!}</h2>
          <div>
            {!! $content['right_description'] ?? '<p>How can we win the competition if we work on traditional SEO methods and a stubborn growth strategy? We build a client-focused SEO growth strategy after understanding business goals, audience behaviour, and market competition.</p><p>Beyond generic SEO methods, we study your industry, search trends, and user intent to create strategies that support long-term visibility and consistent traffic growth. Every campaign is monitored using real-time data and market performance metrics.</p>' !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
