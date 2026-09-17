<style>
.site-footer {
  background: #f5f8f3;
  font-size: 15px;
  color: #333333;
  padding-top: 4rem;
  padding-bottom: 0;
  width: 100%;
}

.site-footer .container-fluid {
  width: 100%;
  max-width: 1600px;
  margin-right: auto;
  margin-left: auto;
  padding-right: 24px;
  padding-left: 24px;
}

.site-footer .footer-grid {
  display: grid;
  grid-template-columns: 1.2fr 1fr 1.8fr 1fr;
  gap: 26px;
}

.site-footer .footer-logo {
  max-width: 220px;
  height: auto;
  margin-bottom: 20px;
  display: block;
}

.site-footer .footer-col strong {
  display: block;
  font-size: 1.25rem;
  font-weight: 600;
  color: #111827;
  margin-bottom: 30px;
  position: relative;
}

.site-footer .footer-col strong::after {
  content: "";
  width: 40px;
  height: 2px;
  background: #074fae;
  position: absolute;
  left: 0;
  bottom: -8px;
}

.site-footer .footer-col ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.site-footer .footer-col ul li {
  margin-bottom: 10px;
  font-size: 15px;
}

.site-footer .footer-col ul li a {
  color: #333333;
  text-decoration: none;
  transition: all 0.25s ease;
}

.site-footer .footer-col ul li a:hover {
  color: #074fae;
  padding-left: 5px;
}

.site-footer .footer-col .two-ul-list {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 0 10px;
}

.site-footer .contact-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.site-footer .contact-list li {
  margin-bottom: 12px;
  color: #333333;
  font-size: 15px;
  display: flex;
  align-items: center;
  gap: 8px;
}

.site-footer .contact-list .nav-link {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  color: #333333;
  text-decoration: none;
  padding: 0;
  transition: color 0.2s ease;
}

.site-footer .contact-list .nav-link:hover {
  color: #074fae;
}

.site-footer .contact-list address {
  display: flex;
  align-items: flex-start;
  gap: 8px;
  font-style: normal;
  line-height: 1.5;
  margin-bottom: 0;
  color: #333333;
}

.site-footer .contact-list svg.icon--cc {
  --cc-icon-size: 18px;
  color: #074fae;
  stroke: #074fae;
}

.site-footer .social-icons {
  display: flex;
  gap: 12px;
  margin-top: 15px;
  align-items: center;
  flex-wrap: wrap;
}

.site-footer .social-icons a {
  width: 42px;
  height: 42px;
  background: #0b2447;
  color: #ffffff;
  border-radius: 50%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  text-decoration: none;
  transition: all 0.3s ease;
}

.site-footer .social-icons a svg.icon--cc {
  --cc-icon-size: 20px;
  color: #ffffff;
  stroke: #ffffff;
  fill: none;
}

.site-footer .social-icons a:hover {
  transform: translateY(-5px) scale(1.08);
}

.site-footer .in:hover {
  background: #0a66c2;
}

.site-footer .ig:hover {
  background: #e1306c;
}

.site-footer .fb:hover {
  background: #1877f2;
}

.site-footer .yt:hover {
  background: #ff0000;
}

.site-footer .tw:hover {
  background: #000000;
}

.site-footer .footer-bottom {
  background: #cfd4d6;
  padding: 16px 24px;
  margin-top: 3rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  font-size: 14px;
}

.site-footer .footer-bottom p {
  margin: 0;
  color: #333333;
}

@media (max-width: 992px) {
  .site-footer .footer-grid {
    grid-template-columns: 1fr 1fr;
  }

}

@media (max-width: 768px) {
  .site-footer {
    padding-top: 3rem;
  }

  .site-footer .footer-bottom {
    flex-direction: column;
    text-align: center;
    gap: 10px;
  }

}

@media (max-width: 576px) {
  .site-footer .footer-grid {
    grid-template-columns: 1fr;
  }

  .site-footer .footer-col .two-ul-list {
    grid-template-columns: 1fr;
  }

}
    </style>


    <!-- Footer -->
    <footer id="ss-footer" class="site-footer">
      <div class="container-fluid">
        <div class="footer-grid">
          <!-- Column 1: Company & Contact -->
          <div class="footer-col company">
            <div class="mb-3">
              <a href="/" aria-label="Go to Homepage">
                <img src="{{ asset('assets/frontend/svg/isearch-solution-logo.svg') }}" alt="iSearch Solution logo" class="footer-logo" width="220" height="40" loading="lazy" decoding="async" />
              </a>
            </div>
            <ul class="contact-list">
              <li>
                <a href="tel:+442039962018" class="nav-link">
                  <svg class="icon--cc"><use href="{{ asset('assets/icons.svg') }}#call-02-stroke-rounded"></use></svg>
                  <span>+44 20 3996 2018</span>
                </a>
              </li>
              <li>
                <a href="mailto:sales@isearchsolution.com" class="nav-link">
                  <svg class="icon--cc"><use href="{{ asset('assets/icons.svg') }}#mail-01-stroke-rounded"></use></svg>
                  <span>sales@isearchsolution.com</span>
                </a>
              </li>
              <li>
                <span class="nav-link">
                  <svg class="icon--cc"><use href="{{ asset('assets/icons.svg') }}#office-stroke-rounded"></use></svg>
                  <span>iSearch Solution Pvt. Ltd</span>
                </span>
              </li>
              <li>
                <address>
                  <svg class="icon--cc"><use href="{{ asset('assets/icons.svg') }}#location-01-stroke-rounded"></use></svg>
                  <span>P11, Mayur Vihar Phase 1,<br />New Delhi - 110091, INDIA</span>
                </address>
              </li>
            </ul>
          </div>

          <!-- Column 2: Quick Links -->
          <div class="footer-col">
            <strong>Quick links</strong>
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="/corporate/who-we-are.html">About us</a></li>
              <li><a href="/resources/seo-case-studies.html">Case Studies</a></li>
              <li><a href="/blog">Blogs</a></li>
              <li><a href="/corporate/careers.html">Careers</a></li>
              <li><a href="/corporate/contact.html">Contact Us</a></li>
            </ul>
          </div>

          <!-- Column 3: Solutions -->
          <div class="footer-col">
            <strong>Our Solutions</strong>
            <ul class="two-ul-list">
              <li><a href="/search-engine-optimization/seo-services.html">SEO Services</a></li>
              <li><a href="/online-reputation-management/">ORM</a></li>
              <li><a href="/ai-solutions/ai-seo-services.html">AI SEO Services</a></li>
              <li><a href="/social-media/social-media-optimization.html">SMO</a></li>
              <li><a href="/ai-solutions/aeo-services.html">AEO Services</a></li>
              <li><a href="/search-engine-marketing/">SEM</a></li>
              <li><a href="/ai-solutions/geo-services.html">GEO Services</a></li>
              <li><a href="/software-solutions/">Software Solutions</a></li>
              <li><a href="/website-development/cms-solutions.html">CMS Solutions</a></li>
              <li><a href="/website-development/payment-gateway-integration-services.html">Payment Gateway</a></li>
              <li><a href="/analytics/web-analytics.html">Web Analytics</a></li>
              <li><a href="/web-hosting/web-hosting.html">Web Hosting</a></li>
              <li><a href="/site-map.html">Site Map</a></li>
            </ul>
          </div>

          <!-- Column 4: Social Media -->
          <div class="footer-col social">
            <strong>Social Media</strong>
            <div class="social-icons">
              <a href="https://in.linkedin.com/company/isearch-solution" target="_blank" class="in" aria-label="Follow iSearch Solution on LinkedIn">
                <svg class="icon--cc"><use href="{{ asset('assets/icons.svg') }}#linkedin-02-stroke-rounded"></use></svg>
              </a>
              <a href="https://www.instagram.com/isearchsolution/" target="_blank" class="ig" aria-label="Follow iSearch Solution on Instagram">
                <svg class="icon--cc"><use href="{{ asset('assets/icons.svg') }}#instagram-stroke-rounded"></use></svg>
              </a>
              <a href="https://www.facebook.com/isearchsolution" target="_blank" class="fb" aria-label="Follow iSearch Solution on Facebook">
                <svg class="icon--cc"><use href="{{ asset('assets/icons.svg') }}#facebook-02-stroke-rounded"></use></svg>
              </a>
              <a href="https://www.youtube.com/@isearchsolution" target="_blank" class="yt" aria-label="Follow iSearch Solution on Youtube">
                <svg class="icon--cc"><use href="{{ asset('assets/icons.svg') }}#youtube-stroke-rounded"></use></svg>
              </a>
              <a href="https://x.com/isearchsolution" target="_blank" class="tw" aria-label="Follow iSearch Solution on Twitter">
                <svg class="icon--cc"><use href="{{ asset('assets/icons.svg') }}#new-twitter-stroke-rounded"></use></svg>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer Bottom Copyright -->
      <div class="footer-bottom">
        <p>&copy; 2010 - 2026 iSearch Solution Pvt. Ltd. All rights reserved</p>
      </div>
    </footer>
  

