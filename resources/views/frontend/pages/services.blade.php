@extends('frontend.layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/compress-css/pages/ourServicesPage-style.min.css') }}" />
@endpush
@section('content')
    <!-- banner section -->
    <header class="hero--inner--banner">
      <img src="{{ asset('assets/frontend/images/banner-img/contact-page-banner.webp') }}" alt="" class="banner--img" />
      <div class="container-fluid banner--content--overlay">
        <div class="col-md-7">
          <h1 class="title">Complete Solutions to Elevate Your Digital Presence</h1>
          <p class="fs-6">Grow, engage, and expand your business in today’s digital landscape with our tailored digital marketing strategies.</p>
        </div>
      </div>
    </header>
    <main>
      <section id="srv-grid">
        <div class="wrap container-fluid">
          <div class="grid-head">
            <span class="pill sr">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3" />
              </svg>
              All Services
            </span>
            <h2 class="heading-1 sr d1" style="margin: 12px 0">Digital Solutions for <span class="accent">Every Business Need</span></h2>
            <p class="lead sr d2" style="margin-inline: auto">Whether you’re a startup or an enterprise, our digital marketing services are designed to drive more traffic and generate more leads.</p>
          </div>
          <div class="filter-tabs sr d3">
            <button class="ftab active" data-filter="all">All Services</button>
            <button class="ftab" data-filter="marketing">Marketing</button>
            <button class="ftab" data-filter="design">Design</button>
            <button class="ftab" data-filter="dev">Development</button>
            <button class="ftab" data-filter="content">Content</button>
            <button class="ftab" data-filter="analytics">Analytics</button>
          </div>
          <div class="services-masonry" id="srvGrid">
            <!-- FEATURED - SEO -->
            <div class="sc featured sr" data-cat="marketing">
              <div class="sc-ico ic-blue" style="width: 80px; height: 80px; border-radius: 22px; flex-shrink: 0">
                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="11" cy="11" r="8" />
                  <path d="m21 21-4.35-4.35" />
                </svg>
              </div>
              <div class="sc-body">
                <div class="sc-cat">Marketing · Growth</div>
                <h3>Search Engine Optimisation</h3>
                <p>
                  While optimising your business for SEO, we focus on technical audits, on-page optimisation, content strategy, and authoritative link building. We work to strengthen your brand
                  presence and drive organic traffic.
                </p>
                <div class="sc-tags">
                  <span class="sc-tag">Technical SEO</span>
                  <span class="sc-tag">On-Page SEO</span>
                  <span class="sc-tag">Link Building</span>
                  <span class="sc-tag">Local SEO</span>
                  <span class="sc-tag">E-Commerce SEO</span>
                </div>
                <a href="/search-engine-optimization/seo-services.html" class="sc-link">
                  Learn More
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M7 17 17 7M17 7H7M17 7v10" />
                  </svg>
                </a>
              </div>
            </div>

            <!-- PPC -->
            <div class="sc sr d1" data-cat="marketing">
              <div class="sc-num">02</div>
              <div class="sc-ico ic-coral">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M3 3v18h18" />
                  <path d="m3 15 4-4 4 4 4-5 4 4" />
                </svg>
              </div>
              <div class="sc-cat">Marketing</div>
              <h3>Google Ads (PPC)</h3>
              <p>By building targeted Google Ads Campaigns and focusing on keyword research, we drive high-quality traffic to your website.</p>
              <div class="sc-tags"><span class="sc-tag">Bidding</span><span class="sc-tag">Google Analytics</span><span class="sc-tag">Budgeting</span></div>
              <a href="/search-engine-marketing/pay_per_click_management.html" class="sc-link">
                Learn More
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M7 17 17 7M17 7H7M17 7v10" />
                </svg>
              </a>
            </div>

            <!-- Social Media -->
            <div class="sc sr d2" data-cat="marketing">
              <div class="sc-num">03</div>
              <div class="sc-ico ic-amber">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="2" y="2" width="20" height="20" rx="5" />
                  <circle cx="12" cy="12" r="4" />
                  <circle cx="17.5" cy="6.5" r="1.2" fill="currentColor" stroke="none" />
                </svg>
              </div>
              <div class="sc-cat">Marketing · Social</div>
              <h3>Social Media Marketing</h3>
              <p>We use analytics, social listening, and performance metrics to boost engagement, brand visibility, and ROI in social media.</p>
              <div class="sc-tags"><span class="sc-tag">Instagram</span><span class="sc-tag">Facebook</span><span class="sc-tag">LinkedIn</span><span class="sc-tag">YouTube</span></div>
              <a href="/social-media/social-media-optimization.html" class="sc-link"
                >Learn More
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M7 17 17 7M17 7H7M17 7v10" />
                </svg>
              </a>
            </div>

            <!-- UI/UX Design -->
            <div class="sc sr d1" data-cat="design">
              <div class="sc-num">04</div>
              <div class="sc-ico ic-violet">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 20h9" />
                  <path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z" />
                </svg>
              </div>
              <div class="sc-cat">Design</div>
              <h3>UI/UX Design & Prototyping</h3>
              <p>By designing user-friendly interfaces, we transform ideas into wireframes, prototypes and pixel-perfect UI systems that perform.</p>
              <div class="sc-tags"><span class="sc-tag">Figma</span><span class="sc-tag">Wireframes</span><span class="sc-tag">Prototypes</span> ><span class="sc-tag">DevOps</span></div>
              <a href="/web-design/website-design.html" class="sc-link"
                >Learn More
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M7 17 17 7M17 7H7M17 7v10" />
                </svg>
              </a>
            </div>

            <!-- Web Dev -->
            <div class="sc sr d2" data-cat="dev">
              <div class="sc-num">05</div>
              <div class="sc-ico ic-teal">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="16 18 22 12 16 6" />
                  <polyline points="8 6 2 12 8 18" />
                </svg>
              </div>
              <div class="sc-cat">Development</div>
              <h3>Website Development</h3>
              <p>We build modern, responsive websites optimised for speed and performance, delivering a seamless user experience across all devices.</p>
              <div class="sc-tags"><span class="sc-tag">WordPress</span><span class="sc-tag">React</span><span class="sc-tag">Shopify</span></div>
              <a href="/website-design-development-company.html" class="sc-link"
                >Learn More
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M7 17 17 7M17 7H7M17 7v10" />
                </svg>
              </a>
            </div>

            <!-- Content Marketing -->
            <div class="sc sr d3" data-cat="content">
              <div class="sc-num">06</div>
              <div class="sc-ico ic-green">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                  <polyline points="14 2 14 8 20 8" />
                  <line x1="16" y1="13" x2="8" y2="13" />
                  <line x1="16" y1="17" x2="8" y2="17" />
                  <polyline points="10 9 9 9 8 9" />
                </svg>
              </div>
              <div class="sc-cat">Content</div>
              <h3>Content Marketing & Strategy</h3>
              <p>By developing compelling and engaging content, we empower brands to ensure their messages reach the right audience.</p>
              <div class="sc-tags"><span class="sc-tag">Blog Writing</span><span class="sc-tag">Video Scripts</span><span class="sc-tag">Whitepapers</span></div>
              <a href="/website-development/cms-solutions.html" class="sc-link"
                >Learn More
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M7 17 17 7M17 7H7M17 7v10" />
                </svg>
              </a>
            </div>

            <!-- Email Marketing -->
            <div class="sc sr d1" data-cat="marketing">
              <div class="sc-num">07</div>
              <div class="sc-ico ic-blue">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                  <polyline points="22,6 12,13 2,6" />
                </svg>
              </div>
              <div class="sc-cat">Marketing</div>
              <h3>Email Marketing & Automation</h3>
              <p>With strong messaging and effective campaigns, we turn emails into a powerful growth channel for your business.</p>
              <div class="sc-tags"><span class="sc-tag">Mailchimp</span><span class="sc-tag">Klaviyo</span><span class="sc-tag">HubSpot</span></div>
              <a href="/search-engine-marketing/email-marketing.html" class="sc-link"
                >Learn More
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M7 17 17 7M17 7H7M17 7v10" />
                </svg>
              </a>
            </div>

            <!-- Analytics -->
            <div class="sc sr d2" data-cat="analytics">
              <div class="sc-num">08</div>
              <div class="sc-ico ic-coral">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10" />
                  <path d="M12 8v4l3 3" />
                </svg>
              </div>
              <div class="sc-cat">Analytics</div>
              <h3>Analytics & Data Reporting</h3>
              <p>By analysing key metrics, we identify what works and what needs improvement. Our digital marketing services drive measurable results.</p>
              <div class="sc-tags"><span class="sc-tag">GA4</span><span class="sc-tag">Looker Studio</span><span class="sc-tag">SEMrush</span></div>
              <a href="/analytics/web-analytics.html" class="sc-link"
                >Learn More
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M7 17 17 7M17 7H7M17 7v10" />
                </svg>
              </a>
            </div>

            <!-- Branding - FEATURED -->
            <div class="sc featured sr d3" data-cat="design">
              <div class="sc-ico ic-violet" style="width: 80px; height: 80px; border-radius: 22px; flex-shrink: 0">
                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="13.5" cy="6.5" r=".5" fill="currentColor" />
                  <circle cx="17.5" cy="10.5" r=".5" fill="currentColor" />
                  <circle cx="8.5" cy="7.5" r=".5" fill="currentColor" />
                  <circle cx="6.5" cy="12.5" r=".5" fill="currentColor" />
                  <path
                    d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z"
                  />
                </svg>
              </div>
              <div class="sc-body">
                <div class="sc-cat">Design · Branding</div>
                <h3>Brand Identity & Visual Design</h3>
                <p>Logos, colour systems, typography, brand guidelines, and full visual identities - we craft brands that command attention and build lasting trust across every touchpoint.</p>
                <div class="sc-tags">
                  <span class="sc-tag">Logo Design</span>
                  <span class="sc-tag">Brand Guidelines</span>
                  <span class="sc-tag">Typography</span>
                  <span class="sc-tag">Colour System</span>
                  <span class="sc-tag">Print Design</span>
                </div>
                <a href="/online-reputation-management/online-branding.html" class="sc-link"
                  >Learn More
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M7 17 17 7M17 7H7M17 7v10" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- PROCESS TIMELINE -->
      <section id="srv-process">
        <div class="wrap container-fluid">
          <div class="proc-head">
            <span class="pill sr">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
              </svg>
              How We Work
            </span>
            <h2 class="heading-1 sr d1" style="margin: 12px 0">Our <span class="accent">6-Step</span> Digital Marketing Process</h2>
            <p class="lead sr d2" style="margin: 0 auto">We follow a structured step-by-step process to deliver effective digital marketing services that drive results.</p>
          </div>

          <div class="proc-track">
            <div class="proc-step sr d1">
              <div class="ps-orb">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="11" cy="11" r="8" />
                  <path d="m21 21-4.35-4.35" />
                </svg>
                <span class="ps-badge">01</span>
              </div>
              <span class="fw-semibold d-block mb-2">Research</span>
              <p>Understand business goals, target audience, and current market trends.</p>
            </div>
            <div class="proc-step sr d2">
              <div class="ps-orb">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2V9M9 21H5a2 2 0 0 1-2-2V9m0 0h18" />
                </svg>
                <span class="ps-badge">02</span>
              </div>
              <span class="fw-semibold mb-2 d-block">Strategy</span>
              <p>Build a data-driven strategy with defined KPIs, channels, and budget.</p>
            </div>
            <div class="proc-step sr d3">
              <div class="ps-orb">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 20h9" />
                  <path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z" />
                </svg>
                <span class="ps-badge">03</span>
              </div>
              <span class="fw-semibold d-block mb-2">Planning</span>
              <p>Develop a robust roadmap for campaigns, SEO, content, and social media.</p>
            </div>
            <div class="proc-step sr d4">
              <div class="ps-orb">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="16 18 22 12 16 6" />
                  <polyline points="8 6 2 12 8 18" />
                </svg>
                <span class="ps-badge">04</span>
              </div>
              <span class="fw-semibold d-block mb-2">Execution</span>
              <p>Implement digital marketing activities to achieve the defined objectives.</p>
            </div>
            <div class="proc-step sr d5">
              <div class="ps-orb">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                  <polyline points="22 4 12 14.01 9 11.01" />
                </svg>
                <span class="ps-badge">05</span>
              </div>
              <span class="fw-semibold d-block mb-2">Tracking</span>
              <p>Monitor campaign performance to track engagement and measure results.</p>
            </div>
            <div class="proc-step sr d6">
              <div class="ps-orb">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M3 3v18h18" />
                  <path d="m3 15 4-4 4 4 4-5 4 4" />
                </svg>
                <span class="ps-badge">06</span>
              </div>
              <span class="fw-semibold d-block mb-2">Optimise</span>
              <p>Analyse data, update strategies, and continuously improve campaigns.</p>
            </div>
          </div>
        </div>
      </section>
      <!-- FEATURED SERVICES SWIPER -->
      <section id="srv-featured">
        <div class="wrap container-fluid">
          <div class="feat-head">
            <div>
              <span class="pill sr">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                </svg>
                Most Popular Services
              </span>
              <h2 class="heading-1 sr d1" style="margin-top: 10px">Our Popular <span class="accent">Digital Marketing</span> Services</h2>
            </div>
            <div class="swiper-nav sr d2">
              <button class="snav-btn feat-prev" aria-label="Prev">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M19 12H5M12 5l-7 7 7 7" />
                </svg>
              </button>
              <button class="snav-btn feat-next" aria-label="Next">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
              </button>
            </div>
          </div>

          <div class="swiper feat-swiper py-2">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="feat-card">
                  <div class="feat-img">
                    <img src="https://images.unsplash.com/photo-1562577309-4932fdd64cd1?w=700&q=80" alt="SEO" />
                    <span class="feat-badge">🔍 SEO</span>
                  </div>
                  <div class="feat-body">
                    <div class="feat-ico ic-blue">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8" />
                        <path d="m21 21-4.35-4.35" />
                      </svg>
                    </div>
                    <h3>SEO & Organic Growth</h3>
                    <p class="line-clamp-3">Scalable SEO strategies for global businesses for sustainable rankings, traffic growth, and revenue impact.</p>
                    <div class="feat-meta">
                      <div class="feat-rating">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                        </svg>
                        <span>4.9</span>
                      </div>
                      <div class="feat-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M7 17 17 7M17 7H7M17 7v10" />
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="feat-card">
                  <div class="feat-img">
                    <img src="https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?w=700&q=80" alt="PPC" />
                    <span class="feat-badge">📈 PPC</span>
                  </div>
                  <div class="feat-body">
                    <div class="feat-ico ic-coral">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 3v18h18" />
                        <path d="m3 15 4-4 4 4 4-5 4 4" />
                      </svg>
                    </div>
                    <h3>Performance Marketing</h3>
                    <p class="line-clamp-3">We run performance-driven campaigns and optimise ad spend to maximise conversions and ROI.</p>
                    <div class="feat-meta">
                      <div class="feat-rating">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                        </svg>
                        <span>4.8</span>
                      </div>
                      <div class="feat-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M7 17 17 7M17 7H7M17 7v10" />
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="feat-card">
                  <div class="feat-img">
                    <img src="https://images.unsplash.com/photo-1581291518857-4e27b48ff24e?w=700&q=80" alt="Design" />
                    <span class="feat-badge">🎨 Design</span>
                  </div>
                  <div class="feat-body">
                    <div class="feat-ico ic-violet">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 20h9" />
                        <path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z" />
                      </svg>
                    </div>
                    <h3>UI/UX Design</h3>
                    <p class="line-clamp-3">From wireframes to final designs, we design seamless user interfaces to improve conversions and enhance usability.</p>
                    <div class="feat-meta">
                      <div class="feat-rating">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                        </svg>
                        <span>5.0</span>
                      </div>
                      <div class="feat-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M7 17 17 7M17 7H7M17 7v10" />
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="feat-card">
                  <div class="feat-img">
                    <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=700&q=80" alt="Dev" />
                    <span class="feat-badge">💻 Dev</span>
                  </div>
                  <div class="feat-body">
                    <div class="feat-ico ic-teal">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="16 18 22 12 16 6" />
                        <polyline points="8 6 2 12 8 18" />
                      </svg>
                    </div>
                    <h3>Web Development</h3>
                    <p class="line-clamp-3">We develop responsive, high-performing websites that align with business needs and support long-term growth.</p>
                    <div class="feat-meta">
                      <div class="feat-rating">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                        </svg>
                        <span>4.9</span>
                      </div>
                      <div class="feat-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M7 17 17 7M17 7H7M17 7v10" />
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="feat-card">
                  <div class="feat-img">
                    <img src="https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?w=700&q=80" alt="Content" />
                    <span class="feat-badge">✍️ Content</span>
                  </div>
                  <div class="feat-body">
                    <div class="feat-ico ic-green">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                        <polyline points="14 2 14 8 20 8" />
                        <line x1="16" y1="13" x2="8" y2="13" />
                        <line x1="16" y1="17" x2="8" y2="17" />
                      </svg>
                    </div>
                    <h3>Content marketing</h3>
                    <p class="line-clamp-3">With SEO-driven content and a result-oriented marketing strategy, we improve visibility and audience engagement.</p>
                    <div class="feat-meta">
                      <div class="feat-rating">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                        </svg>
                        <span>4.7</span>
                      </div>
                      <div class="feat-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M7 17 17 7M17 7H7M17 7v10" />
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- DOMAIN EXPERTISE - WHEEL + LIST -->
      <section id="srv-domains">
        <div class="wrap container-fluid">
          <div class="dom-grid">
            <!-- Animated Wheel -->
            <div class="dom-wheel sr-l">
              <div class="wheel-ring"></div>
              <div class="wheel-ring-2"></div>
              <div class="wheel-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                </svg>
                <span>Our Core</span>
              </div>
              <!-- wheel items positioned via JS -->
              <div class="wheel-item" id="wi0">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="11" cy="11" r="8" />
                  <path d="m21 21-4.35-4.35" />
                </svg>
              </div>
              <div class="wheel-item" id="wi1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M3 3v18h18" />
                  <path d="m3 15 4-4 4 4 4-5 4 4" />
                </svg>
              </div>
              <div class="wheel-item" id="wi2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 20h9" />
                  <path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z" />
                </svg>
              </div>
              <div class="wheel-item" id="wi3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="16 18 22 12 16 6" />
                  <polyline points="8 6 2 12 8 18" />
                </svg>
              </div>
              <div class="wheel-item" id="wi4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="2" y="2" width="20" height="20" rx="5" />
                  <circle cx="12" cy="12" r="4" />
                </svg>
              </div>
              <div class="wheel-item" id="wi5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                  <polyline points="22,6 12,13 2,6" />
                </svg>
              </div>
              <div class="wheel-item" id="wi6">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                  <polyline points="14 2 14 8 20 8" />
                </svg>
              </div>
              <div class="wheel-item" id="wi7">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10" />
                  <path d="M12 8v4l3 3" />
                </svg>
              </div>
            </div>

            <!-- Domain list -->
            <div class="dom-list sr-r">
              <div style="margin-bottom: 32px">
                <span class="pill">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
                  </svg>
                  Domain Expertise
                </span>
                <h2 class="heading-1 sr d1" style="margin: 14px 0">Industries We <span class="accent">serve</span></h2>
                <p class="lead sr d2">By providing customised digital marketing services across diverse industries, we enable businesses to create impact and achieve long-term growth.</p>
              </div>
              <div class="dom-item sr d1">
                <div class="dom-ico">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
                    <line x1="3" y1="6" x2="21" y2="6" />
                    <path d="M16 10a4 4 0 0 1-8 0" />
                  </svg>
                </div>
                <div>
                  <span>E-Commerce & Retail</span>
                  <p>Focused on increasing visibility, driving sales, and improving customer experience to boost online sales.</p>
                </div>
              </div>
              <div class="dom-item sr d2">
                <div class="dom-ico">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="3" width="20" height="14" rx="2" />
                    <path d="M8 21h8M12 17v4" />
                  </svg>
                </div>
                <div>
                  <span>SaaS & Technology</span>
                  <p>Technical expertise and data-driven growth enable us to work smartly for B2B and B2C tech companies.</p>
                </div>
              </div>
              <div class="dom-item sr d3">
                <div class="dom-ico">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                    <polyline points="9 22 9 12 15 12 15 22" />
                  </svg>
                </div>
                <div>
                  <span>Real Estate</span>
                  <p>Through local SEO, targeted campaigns, and optimised landing pages, we generate qualified leads.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--  WHY CHOOSE US - BENTO GRID -->
      <section id="srv-why">
        <div class="wrap container-fluid">
          <div class="why-head">
            <span class="pill sr">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
              </svg>
              Why iSearch?
            </span>
            <h2 class="heading-1 sr d1" style="margin: 12px 0">A Digital <span class="accent text-normal">Marketing Agency</span></h2>
            <p class="lead sr d2" style="margin-inline: auto">Not just business, we build brands that grow because existence is not enough.</p>
          </div>

          <div class="bento">
            <!-- big stat: projects -->
            <div class="bcard b-c4 b-r1 sr d1">
              <div class="bcard-ico">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                </svg>
              </div>
              <span class="bn">870<sup>+</sup></span>
              <span>Projects Delivered</span>
              <p>Across 12+ countries for startups, SMBs, and enterprise clients.</p>
            </div>

            <!-- client satisfaction -->
            <div class="bcard b-c4 b-r1 sr d2">
              <div class="bcard-ico">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                </svg>
              </div>
              <span class="bn">60<sup>+</sup></span>
              <span>Professionals</span>
              <p>Trusted by clients worldwide, delivering visible results and lasting partnerships.</p>
            </div>

            <!-- accent: our promise -->
            <div class="bcard b-c4 b-r2 accent-card sr d3">
              <div class="bcard-ico">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" />
                </svg>
              </div>
              <span class="bn">80<sup>%</sup></span>
              <span style="font-size: 1.3rem"> Revenue Growth </span>
              <p style="margin-top: 10px; font-size: 0.92rem">Achieved average client revenue growth within a duration of 3 to 6 months.</p>
              <button type="button" class="btn openPopupBtn" style="background: rgba(255, 255, 255, 0.2); color: #fff; margin-top: 22px; border-radius: 100px; font-size: 0.82rem">
                Start Your Project →
              </button>
            </div>

            <!-- bar chart growth -->
            <div class="bcard b-c8 b-r2 sr d1" id="benchBento">
              <span>Average Client Growth After 6 Months</span>
              <p style="margin-top: 4px; font-size: 0.82rem">Organic traffic, leads, conversion rate, revenue, and brand searches.</p>
              <div style="display: flex; gap: 8px; flex-wrap: wrap; margin-top: 10px">
                <span class="sc-tag">+320% Traffic</span>
                <span class="sc-tag">+180% Leads</span>
                <span class="sc-tag">+95% Conversions</span>
                <span class="sc-tag">+240% Revenue</span>
              </div>
            </div>

            <!-- testimonial bento -->
            <div class="bcard b-c6 b-r1 sr d2">
              <div class="bcard-ico">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  width="24"
                  height="24"
                  color="currentColor"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path
                    d="M7 18V16M12 18V15M17 18V13M2.5 12C2.5 7.52166 2.5 5.28249 3.89124 3.89124C5.28249 2.5 7.52166 2.5 12 2.5C16.4783 2.5 18.7175 2.5 20.1088 3.89124C21.5 5.28249 21.5 7.52166 21.5 12C21.5 16.4783 21.5 18.7175 20.1088 20.1088C18.7175 21.5 16.4783 21.5 12 21.5C7.52166 21.5 5.28249 21.5 3.89124 20.1088C2.5 18.7175 2.5 16.4783 2.5 12Z"
                  />
                  <path d="M5.99219 11.4863C8.14729 11.5581 13.0341 11.2328 15.8137 6.82132M13.9923 6.28835L15.8678 5.98649C16.0964 5.95738 16.432 6.13785 16.5145 6.35298L17.0104 7.99142" />
                </svg>
              </div>
              <span>Scaling your business for 2x growth</span>
              <p style="margin-top: 4px; font-size: 0.82rem">By aligning data-driven strategies with advanced technology, we enable your business to scale faster and achieve 2x growth.</p>
            </div>

            <!-- 24/7 support -->
            <div class="bcard b-c3 b-r1 sr d3" style="background: var(--ss-teal-l); border-color: var(--ss-teal)">
              <div class="bcard-ico" style="background: var(--ss-teal)">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <path
                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.63 3.4 2 2 0 0 1 3.6 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.86a16 16 0 0 0 6 6l.95-.95a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.75 16.92z"
                  />
                </svg>
              </div>
              <span>Dedicated support </span>
              <p style="color: var(--ss-teal)">We are committed to offering advanced digital solutions and ensuring success at every step.</p>
            </div>

            <!-- team count -->
            <div class="bcard b-c3 b-r1 sr d4">
              <span class="bn" style="color: var(--ss-violet)">50<sup>+</sup></span>
              <span>In-House Experts</span>
              <p>Work with SEO, design, and development experts, all together for your success.</p>
            </div>
          </div>
        </div>
      </section>
      <!-- TOOLS & TECH MARQUEE -->
      <section id="srv-tools">
        <div class="wrap container-fluid">
          <div class="tools-head">
            <span class="pill sr">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" />
              </svg>
              Tools & Tech
            </span>
            <h2 class="heading-1 sr d1" style="margin: 12px 0">Backed by <span class="accent">Cutting-Edge AI Tools</span></h2>
          </div>
        </div>
        <div class="marquee-row">
          <div class="marquee-inner">
            <div class="tool-chip">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8" />
                <path d="m21 21-4.35-4.35" />
              </svg>
              <span>Google Analytics 4</span>
            </div>
            <div class="tool-chip">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 3v18h18" />
                <path d="m3 15 4-4 4 4 4-5 4 4" />
              </svg>
              <span>SEMrush</span>
            </div>
            <div class="tool-chip">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <line x1="2" y1="12" x2="22" y2="12" />
                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
              </svg>
              <span>Ahrefs</span>
            </div>
            <div class="tool-chip">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="3" width="18" height="18" rx="2" />
                <path d="M3 9h18M9 21V9" />
              </svg>
              <span>WordPress</span>
            </div>
            <div class="tool-chip">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
                <line x1="3" y1="6" x2="21" y2="6" />
                <path d="M16 10a4 4 0 0 1-8 0" />
              </svg>
              <span>Shopify</span>
            </div>
            <div class="tool-chip">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="16 18 22 12 16 6" />
                <polyline points="8 6 2 12 8 18" />
              </svg>
              <span>React.js</span>
            </div>
            <div class="tool-chip">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                <polyline points="22,6 12,13 2,6" />
              </svg>
              <span>Mailchimp</span>
            </div>
            <div class="tool-chip">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
              </svg>
              <span>HubSpot</span>
            </div>
            <!-- duplicate for seamless loop -->
            <div class="tool-chip">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8" />
                <path d="m21 21-4.35-4.35" />
              </svg>
              <span>Google Analytics 4</span>
            </div>
            <div class="tool-chip">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 3v18h18" />
                <path d="m3 15 4-4 4 4 4-5 4 4" />
              </svg>
              <span>SEMrush</span>
            </div>
            <div class="tool-chip">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <line x1="2" y1="12" x2="22" y2="12" />
                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
              </svg>
              <span>Ahrefs</span>
            </div>
            <div class="tool-chip">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="3" width="18" height="18" rx="2" />
                <path d="M3 9h18M9 21V9" />
              </svg>
              <span>WordPress</span>
            </div>
            <div class="tool-chip">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
                <line x1="3" y1="6" x2="21" y2="6" />
                <path d="M16 10a4 4 0 0 1-8 0" />
              </svg>
              <span>Shopify</span>
            </div>
            <div class="tool-chip">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="16 18 22 12 16 6" />
                <polyline points="8 6 2 12 8 18" />
              </svg>
              <span>React.js</span>
            </div>
            <div class="tool-chip">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                <polyline points="22,6 12,13 2,6" />
              </svg>
              <span>Mailchimp</span>
            </div>
          </div>
        </div>
        <div class="marquee-row mq-row2">
          <div class="marquee-inner rev">
            <div class="tool-chip">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <rect x="2" y="2" width="20" height="20" rx="5" />
                <circle cx="12" cy="12" r="4" />
              </svg>
              <span>Instagram Ads</span>
            </div>
            <div class="tool-chip">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
              </svg>
              <span>Facebook Ads</span>
            </div>
            <div class="tool-chip">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <path
                  d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 0 0-1.95 1.96A29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58A2.78 2.78 0 0 0 3.41 19.6C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.95A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"
                />
                <polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" />
              </svg>
              <span>YouTube Ads</span>
            </div>
            <div class="tool-chip">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                <rect x="2" y="9" width="4" height="12" />
                <circle cx="4" cy="4" r="2" />
              </svg>
              <span>LinkedIn Ads</span>
            </div>
            <div class="tool-chip">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
              </svg>
              <span>Klaviyo</span>
            </div>
            <div class="tool-chip">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <rect x="2" y="3" width="20" height="14" rx="2" />
              </svg>
              <span>Webflow</span>
            </div>
            <div class="tool-chip">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 20h9" />
                <path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z" />
              </svg>
              <span>Figma</span>
            </div>
            <div class="tool-chip">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 20V10" />
                <path d="M12 20V4" />
                <path d="M6 20v-6" />
              </svg>
              <span>Looker Studio</span>
            </div>
            <!-- duplicate -->
            <div class="tool-chip">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <rect x="2" y="2" width="20" height="20" rx="5" />
                <circle cx="12" cy="12" r="4" />
              </svg>
              <span>Instagram Ads</span>
            </div>
            <div class="tool-chip">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
              </svg>
              <span>Facebook Ads</span>
            </div>
            <div class="tool-chip">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <path
                  d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 0 0-1.95 1.96A29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58A2.78 2.78 0 0 0 3.41 19.6C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.95A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"
                />
                <polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" />
              </svg>
              <span>YouTube Ads</span>
            </div>
            <div class="tool-chip">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                <rect x="2" y="9" width="4" height="12" />
                <circle cx="4" cy="4" r="2" />
              </svg>
              <span>LinkedIn Ads</span>
            </div>
            <div class="tool-chip">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
              </svg>
              <span>Klaviyo</span>
            </div>
          </div>
        </div>
      </section>
      <!--  CASE STUDY RESULTS SWIPER -->
      <!-- <section id="srv-results">
        <div class="wrap container-fluid">
          <div class="res-head">
            <span class="pill sr">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 3v18h18" />
                <path d="m3 15 4-4 4 4 4-5 4 4" />
              </svg>
              Case Studies
            </span>
            <h2 class="heading-1 sr d1" style="margin: 12px 0">Real Results for <span class="accent">Real Businesses</span></h2>
            <p class="lead sr d2" style="margin-inline: auto">From early-stage startups to established enterprises - here's what we've achieved.</p>
          </div>

          <div class="swiper results-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="rcard">
                  <div class="rcard-img"><img src="https://images.unsplash.com/photo-1611162617474-5b21e879e113?w=700&q=80" alt="Case Study" /><span class="rcard-cat">SEO</span></div>
                  <div class="rcard-body">
                    <h4>E-Commerce Fashion Brand</h4>
                    <p>Full SEO overhaul - technical fixes, content strategy, and authority building over 9 months.</p>
                    <div class="rcard-metrics">
                      <div class="metric">
                        <span class="metric-val">+340%</span>
                        <div class="metric-lbl">Organic Traffic</div>
                      </div>
                      <div class="metric">
                        <span class="metric-val">+210%</span>
                        <div class="metric-lbl">Revenue</div>
                      </div>
                      <div class="metric">
                        <span class="metric-val">#1</span>
                        <div class="metric-lbl">Rankings</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="rcard">
                  <div class="rcard-img"><img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=700&q=80" alt="Case Study" /><span class="rcard-cat">PPC</span></div>
                  <div class="rcard-body">
                    <h4>B2B SaaS Platform</h4>
                    <p>Google Ads restructure and LinkedIn lead gen campaign for a HR tech SaaS company.</p>
                    <div class="rcard-metrics">
                      <div class="metric">
                        <span class="metric-val">6.4x</span>
                        <div class="metric-lbl">ROAS</div>
                      </div>
                      <div class="metric">
                        <span class="metric-val">-68%</span>
                        <div class="metric-lbl">Cost Per Lead</div>
                      </div>
                      <div class="metric">
                        <span class="metric-val">+180%</span>
                        <div class="metric-lbl">Leads</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="rcard">
                  <div class="rcard-img"><img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=700&q=80" alt="Case Study" /><span class="rcard-cat">Web Dev</span></div>
                  <div class="rcard-body">
                    <h4>Real Estate Portal</h4>
                    <p>Custom-built property search platform with SEO architecture and conversion-optimised design.</p>
                    <div class="rcard-metrics">
                      <div class="metric">
                        <span class="metric-val">4.8%</span>
                        <div class="metric-lbl">Conversion Rate</div>
                      </div>
                      <div class="metric">
                        <span class="metric-val">-42%</span>
                        <div class="metric-lbl">Bounce Rate</div>
                      </div>
                      <div class="metric">
                        <span class="metric-val">0.8s</span>
                        <div class="metric-lbl">Load Time</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="rcard">
                  <div class="rcard-img"><img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=700&q=80" alt="Case Study" /><span class="rcard-cat">Social Media</span></div>
                  <div class="rcard-body">
                    <h4>D2C Health & Wellness Brand</h4>
                    <p>Instagram and Facebook organic + paid strategy for a supplement brand entering a competitive niche.</p>
                    <div class="rcard-metrics">
                      <div class="metric">
                        <span class="metric-val">+520%</span>
                        <div class="metric-lbl">Followers</div>
                      </div>
                      <div class="metric">
                        <span class="metric-val">4.2%</span>
                        <div class="metric-lbl">Engagement Rate</div>
                      </div>
                      <div class="metric">
                        <span class="metric-val">+290%</span>
                        <div class="metric-lbl">Sales</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- BREADCRUMB -->
      <div class="breadcrumb">
        <div class="container-fluid">
          <div class="bc-in">
            <a href="/">Home</a>
            <i class="cc--icon ArrowRight01Icon"></i>
            <span>Our Services</span>
          </div>
        </div>
      </div>
      <!-- cta-banner -->
      <section class="cta-banner" style="background-image: url('{{ asset('assets/frontend/images/contact-bg.webp') }}')">
        <div class="cta-overlay"></div>
        <div class="container">
          <div class="cta-content">
            <h2>Do you want to rank your business on top?</h2>
            <p>We are happy to help you to grow your business</p>
            <button type="button" class="primary-btn openPopupBtn">Schedule a meeting</button>
          </div>
        </div>
      </section>
    </main>
@endsection

@push('scripts')
    <script src="{{ asset('assets/frontend/js/new-main.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/new-all-services.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/new-form-modal.js') }}" defer></script>
    <script src="{{ asset('assets/frontend/js/enquiry.js') }}" defer></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endpush
