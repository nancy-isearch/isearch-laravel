<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Footer</title>
    <link rel="stylesheet" href="/src/css/lib/bootstrap.min.css" />
    <link rel="stylesheet" href="/src/css/compress-css/main-style-V2.min.css" />
    <style>
      .site-footer {
        background: #f5f8f3;
        font-size: 15px;
        color: #333333;
        padding-bottom: 0;
      }
      .site-footer .footer-grid {
        display: grid;
        grid-template-columns: 1.2fr 1fr 1.8fr 1.2fr;
        gap: 40px;
      }
      .site-footer .footer-logo {
        max-width: 220px;
        height: auto;
        display: block;
      }
      .site-footer .footer-title {
        display: block;
        font-size: 1.25rem;
        font-weight: 600;
        margin-top: 0;
        margin-bottom: 30px;
        position: relative;
        color: #111827;
      }
      .site-footer .footer-title::after {
        content: "";
        width: 40px;
        height: 2px;
        background: #111827;
        position: absolute;
        left: 0;
        bottom: -8px;
      }
      .site-footer .footer-brand ul,
      .site-footer .footer-nav-list {
        list-style: none;
        padding: 0;
        margin: 0;
      }
      .site-footer .grid-two-col {
        columns: 2;
      }
      .site-footer .footer-brand ul li,
      .site-footer .footer-nav-list li {
        margin-bottom: 12px;
      }
      .site-footer .footer-brand ul li:first-child {
        margin-bottom: 4px;
      }
      .site-footer .footer-nav-list li a {
        color: #333333;
        text-decoration: none;
        transition: all 0.25s ease;
        display: inline-block;
      }
      .site-footer .footer-nav-list li a:hover {
        color: #0a58ca;
        transform: translateX(4px);
      }

      .site-footer .footer-contact-list {
        list-style: none;
        padding-left: 0;
      }
      .site-footer .footer-contact-link {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        color: #333333;
        text-decoration: none;
        transition: color 0.2s ease;
      }
      .site-footer .footer-contact-link:hover {
        color: #0a58ca;
      }
      .site-footer .footer-text-node {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #333333;
      }
      .site-footer .footer-address {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        margin-bottom: 0;
        font-style: normal;
      }
      .site-footer .footer-social-icons {
        display: flex;
        gap: 12px;
        margin-top: 15px;
        flex-wrap: wrap;
      }
      .site-footer .footer-social-icons a {
        width: 42px;
        height: 42px;
        background: #111827;
        color: #ffffff;
        border-radius: 50%;
        display: grid;
        place-items: center;
        text-decoration: none;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      }
      .site-footer .footer-social-icons a svg.icon--cc {
        --cc-icon-size: 20px;
        --cc-icon-color: #ffffff;
      }
      .site-footer .footer-social-icons a:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
      }
      .site-footer .icon-ln:hover {
        background: #0a66c2;
      }
      .site-footer .icon-ig:hover {
        background: #e1306c;
      }
      .site-footer .icon-fb:hover {
        background: #1877f2;
      }
      .site-footer .icon-yt:hover {
        background: #ff0000;
      }
      .site-footer .icon-tw:hover {
        background: #000000;
      }
      .site-footer svg.icon--cc {
        --cc-icon-size: 18px;
        --cc-icon-color: #333333;
        flex-shrink: 0;
      }
      .site-footer .footer-bottom {
        background: #cfd4d6;
        padding: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 14px;
      }
      @media (max-width: 992px) {
        .site-footer .footer-grid {
          grid-template-columns: repeat(2, 1fr);
          gap: 30px;
        }
        .site-footer .footer-brand {
          grid-column: span 2;
        }
        .site-footer .sm-grid-two-col,
        .site-footer .footer-brand .footer-contact-list {
          columns: 2;
        }
      }
      @media (max-width: 576px) {
        .site-footer .footer-grid {
          grid-template-columns: 1fr;
        }
        .site-footer .footer-brand {
          grid-column: span 1;
        }
        .site-footer .footer-brand .footer-contact-list {
          columns: 1;
        }
        .site-footer {
          padding-top: 2.5rem !important;
        }
        .site-footer .footer-grid {
          grid-template-columns: 1fr;
          gap: 35px;
        }
        .site-footer .footer-title {
          margin-bottom: 20px;
        }
      }
    </style>
  </head>
  <body>
    <!-- FOOTER SECTION -->
    <footer class="site-footer pt-5">
      <div class="container-fluid">
        <div class="footer-grid">
          <!-- Column 1: Company Profile Info -->
          <div class="footer-col footer-brand">
            <div class="mb-4">
              <a href="/" aria-label="Go to Homepage">
                <img src="/src/assets/svg/isearch-solution-logo.svg" alt="iSearch Solution Logo" class="footer-logo" width="220" height="40" loading="lazy" aria-hidden="true" />
              </a>
            </div>
            <ul class="footer-contact-list">
              <li>
                <a href="tel:+919540310091" class="footer-contact-link">
                  <svg class="icon--cc" aria-hidden="true"><use href="/src/assets/icons.svg#call-02-stroke-rounded"></use></svg>
                  <span>+91 954-031-0091</span>
                </a>
              </li>
              <li>
                <a href="tel:+919871312382" class="footer-contact-link">
                  <svg class="icon--cc" aria-hidden="true"><use href="/src/assets/icons.svg#call-02-stroke-rounded"></use></svg>
                  <span>+91 987-131-2382</span>
                </a>
              </li>
              <li>
                <a href="mailto:info@isearchsolution.com" class="footer-contact-link">
                  <svg class="icon--cc" aria-hidden="true"><use href="/src/assets/icons.svg#mail-01-stroke-rounded"></use></svg>
                  <span>info@isearchsolution.com</span>
                </a>
              </li>
              <li class="footer-text-node">
                <svg class="icon--cc" aria-hidden="true"><use href="/src/assets/icons.svg#office-stroke-rounded"></use></svg>
                <span>iSearch Solution Pvt. Ltd</span>
              </li>
              <li>
                <address class="footer-address">
                  <svg class="icon--cc" aria-hidden="true"><use href="/src/assets/icons.svg#location-01-stroke-rounded"></use></svg>
                  <span>P11, Mayur Vihar Phase 1,<br />New Delhi - 110091, INDIA</span>
                </address>
              </li>
            </ul>
          </div>
          <!-- Column 2: Quick Links Navigation -->
          <div class="footer-col">
            <h3 class="footer-title">Quick Links</h3>
            <ul class="footer-nav-list sm-grid-two-col">
              <li><a href="/">Home</a></li>
              <li><a href="/corporate/who-we-are.html">About Us</a></li>
              <li><a href="/resources/seo-case-studies.html">Case Studies</a></li>
              <li><a href="/blog">Blogs</a></li>
              <li><a href="/corporate/careers.html">Careers</a></li>
              <li><a href="/corporate/contact.html">Contact Us</a></li>
            </ul>
          </div>
          <!-- Column 3: Multi-column Solutions Map -->
          <div class="footer-col">
            <h3 class="footer-title">Our Solutions</h3>
            <ul class="footer-nav-list grid-two-col">
              <li><a href="/search-engine-optimization/seo-services.html">SEO Services</a></li>
              <li><a href="/social-media/social-media-optimization.html">SMO</a></li>
              <li><a href="/online-reputation-management/">ORM</a></li>
              <li><a href="/website-development/cms-solutions.html">CMS Solutions</a></li>
              <li><a href="/analytics/web-analytics.html">Web Analytics</a></li>
              <li><a href="/ai-solutions/ai-seo-services.html">AI SEO Services</a></li>
              <li><a href="/search-engine-marketing/">SEM</a></li>
              <li><a href="/software-solutions/">Software Solutions</a></li>
              <li><a href="/website-development/payment-gateway-integration-services.html">Payment Gateway</a></li>
              <li><a href="/web-hosting/web-hosting.html">Web Hosting</a></li>
              <li><a href="/site-map.html">Site Map</a></li>
            </ul>
          </div>
          <!-- Column 4: Channels & Engagement -->
          <div class="footer-col">
            <h3 class="footer-title">Social Media</h3>
            <div class="footer-social-icons">
              <a href="https://in.linkedin.com/company/isearch-solution" target="_blank" rel="noopener" class="icon-ln" aria-label="Follow iSearch Solution on LinkedIn">
                <svg class="icon--cc" aria-hidden="true"><use href="/src/assets/icons.svg#linkedin-02-stroke-rounded"></use></svg>
              </a>
              <a href="https://www.instagram.com/isearchsolution/" target="_blank" rel="noopener" class="icon-ig" aria-label="Follow iSearch Solution on Instagram">
                <svg class="icon--cc" aria-hidden="true"><use href="/src/assets/icons.svg#instagram-stroke-rounded"></use></svg>
              </a>
              <a href="https://www.facebook.com/isearchsolution" target="_blank" rel="noopener" class="icon-fb" aria-label="Follow iSearch Solution on Facebook">
                <svg class="icon--cc" aria-hidden="true"><use href="/src/assets/icons.svg#facebook-02-stroke-rounded"></use></svg>
              </a>
              <a href="https://www.youtube.com/@isearchsolution" target="_blank" rel="noopener" class="icon-yt" aria-label="Follow iSearch Solution on YouTube">
                <svg class="icon--cc" aria-hidden="true"><use href="/src/assets/icons.svg#youtube-stroke-rounded"></use></svg>
              </a>
              <a href="https://x.com/isearchsolution" target="_blank" rel="noopener" class="icon-tw" aria-label="Follow iSearch Solution on Twitter">
                <svg class="icon--cc" aria-hidden="true"><use href="/src/assets/icons.svg#new-twitter-stroke-rounded"></use></svg>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom mt-4">
        <p class="mb-0">&copy; 2010 - 2026 iSearch Solution Pvt. Ltd. All rights reserved.</p>
      </div>
    </footer>
  </body>
</html>
