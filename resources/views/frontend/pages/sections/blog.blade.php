<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog section</title>
    <link rel="stylesheet" href="/src/css/lib/bootstrap.min.css" />
    <link rel="stylesheet" href="/src/css/compress-css/main-style-V2.min.css" />
    <style>
      :root {
        --bg-layer1: linear-gradient(145deg, rgba(255, 0, 208, 0.05) 0%, rgba(0, 200, 255, 0.05) 37%, rgba(0, 100, 88, 0.04) 69%, rgba(7, 79, 174, 0.05) 100%);
      }
      .blog-section {
        padding: 5rem 0;
        background: var(--bg-layer1);
      }
      .blog-section .blog-wrapper {
        display: flex;
        gap: 40px;
        align-items: center;
      }
      .blog-section .blog-main-title {
        writing-mode: vertical-rl;
        transform: rotate(180deg);
        font-size: 4.5rem;
        font-weight: 600;
        color: #111827;
        line-height: 1.2;
        margin: 0;
        flex-shrink: 0;
      }
      .blog-section .blog-main-title span {
        color: #425b76;
      }
      .blog-section .blog-feed {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
      }
      .blog-section .blog-card {
        display: flex;
        gap: 30px;
        margin-bottom: 2.5rem;
        align-items: center;
      }
      .blog-section .blog-card:last-child {
        margin-bottom: 0;
      }
      .blog-section .blog-thumb {
        width: 300px;
        height: 200px;
        border-radius: 18px;
        overflow: hidden;
        flex-shrink: 0;
        background-color: #f3f4f6;
      }
      .blog-section .blog-thumb .blog-zoom-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
      }
      .blog-section .blog-card:hover .blog-zoom-img {
        transform: scale(1.08);
      }
      .blog-section .blog-body .blog-post-title {
        font-size: 1.375rem;
        margin-top: 0;
        margin-bottom: 0.75rem;
        font-weight: 700;
        line-height: 1.4;
      }
      .blog-section .blog-anchor-link {
        color: #111827;
        text-decoration: none;
        transition: color 0.2s ease;
      }
      .blog-section .blog-anchor-link:hover,
      .blog-section .blog-anchor-link:focus {
        color: var(--primary-color, #074fae);
        text-decoration: underline;
        outline: none;
      }
      .blog-section .blog-excerpt {
        font-size: 0.9375rem;
        color: #4b5563;
        line-height: 1.6;
        margin-bottom: 1.25rem;
      }
      .blog-section .blog-meta-row {
        display: flex;
        gap: 12px;
        align-items: center;
      }
      .blog-section .blog-author-avatar {
        width: 44px;
        height: 44px;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        border-radius: 50%;
        background-color: #e5e7eb;
        flex-shrink: 0;
      }
      .blog-section .blog-meta-details {
        display: flex;
        flex-direction: column;
      }
      .blog-section .blog-author-name {
        font-weight: 600;
        color: #111827;
        font-size: 0.875rem;
      }
      .blog-section .blog-date {
        font-size: 0.8125rem;
        color: #6b7280;
      }
      @media (max-width: 1180px) {
        .blog-section .blog-wrapper {
          flex-direction: column;
          gap: 2rem;
        }
        .blog-section .blog-main-title {
          writing-mode: initial;
          transform: none;
          font-size: 2.625rem;
          width: 100%;
          text-align: center !important;
        }
      }
      @media (max-width: 768px) {
        .blog-section .blog-card {
          gap: 20px;
        }
        .blog-section .blog-thumb {
          width: 220px;
          height: 150px;
        }
      }
      @media (max-width: 576px) {
        .blog-section {
          padding: 3.5rem 0;
        }
        .blog-section .blog-main-title {
          font-size: 2.25rem;
        }
        .blog-section .blog-card {
          flex-direction: column;
          align-items: flex-start;
          gap: 15px;
          margin-bottom: 2rem;
        }
        .blog-section .blog-thumb {
          width: 100%;
          height: 200px;
        }
        .blog-section .blog-body .blog-post-title {
          font-size: 1.25rem;
        }
      }
    </style>
  </head>
  <body>
    <!-- BLOG SECTION -->
    <section class="blog-section" aria-labelledby="blog-heading">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-xl-11 col-12">
            <div class="blog-wrapper">
              <!-- Side Heading / Top Heading on Mobile -->
              <h2 id="blog-heading" class="blog-main-title">
                OUR
                <span class="ac"
                  >CREATIVE <br class="d-lg-block d-none" />
                  BLOGS</span
                >
                &amp; NEWS
              </h2>
              <!-- Articles List Container -->
              <div class="blog-feed">
                <!-- Article 1 -->
                <article class="blog-card">
                  <div class="blog-thumb">
                    <a
                      href="https://www.isearchsolution.com/blog/upcoming-trends-in-website-development-and-digital-marketing-solutions-you-should-know/"
                      target="_blank"
                      rel="noopener"
                      aria-hidden="true"
                      tabindex="-1"
                    >
                      <img src="/src/assets/images/blog-img/blog-post-img1.webp" alt="Abstract digital trends visualization" class="blog-zoom-img" width="300" height="200" loading="lazy" />
                    </a>
                  </div>
                  <div class="blog-body">
                    <h3 class="blog-post-title">
                      <a
                        href="https://www.isearchsolution.com/blog/upcoming-trends-in-website-development-and-digital-marketing-solutions-you-should-know/"
                        target="_blank"
                        rel="noopener"
                        class="blog-anchor-link line-clamp-1"
                      >
                        Upcoming Trends in Website Development and Digital Marketing Solutions You Should Know
                      </a>
                    </h3>
                    <p class="blog-excerpt line-clamp-2">
                      The digital world is evolving constantly nowadays, and online presence becomes an essential part, not an option, for every business, service provider and brand. Social media is
                      no longer enough to grow a business. Website or ads alone aren’t enough.
                    </p>
                    <div class="blog-meta-row">
                      <div class="blog-author-avatar">
                        <img src="/src/assets/images/avatar.webp" alt="Mukesh Kumar profile photo" class="img-fluid" width="50" height="50" loading="lazy" />
                      </div>
                      <div class="blog-meta-details">
                        <span class="blog-author-name">Mukesh Kumar</span>
                        <time datetime="2026-02-26" class="blog-date">February 26, 2026 • 4 min read</time>
                      </div>
                    </div>
                  </div>
                </article>
                <!-- Article 2 -->
                <article class="blog-card">
                  <div class="blog-thumb">
                    <a
                      href="https://www.isearchsolution.com/blog/importance-of-social-media-marketing-the-one-growth-strategy-most-businesses-ignore/"
                      target="_blank"
                      rel="noopener"
                      aria-hidden="true"
                      tabindex="-1"
                    >
                      <img
                        src="/src/assets/images/blog-img/blog-post-img2.webp"
                        alt="Team analyzing social media marketing growth metrics"
                        class="blog-zoom-img"
                        width="300"
                        height="200"
                        loading="lazy"
                      />
                    </a>
                  </div>
                  <div class="blog-body">
                    <h3 class="blog-post-title">
                      <a
                        href="https://www.isearchsolution.com/blog/importance-of-social-media-marketing-the-one-growth-strategy-most-businesses-ignore/"
                        target="_blank"
                        rel="noopener"
                        class="blog-anchor-link line-clamp-1"
                      >
                        Importance of Social Media Marketing: The One Growth Strategy Most Businesses Ignore
                      </a>
                    </h3>
                    <p class="blog-excerpt line-clamp-2">
                      From finding new products and services to connecting with friends and family, social media has completely changed the way we connect with each other—how companies engage with
                      their audience and how we stay in touch with our family even when we are miles apart. This clearly highlights the Importance of Social Media Marketing in today’s digital world.
                    </p>
                    <div class="blog-meta-row">
                      <div class="blog-author-avatar">
                        <img src="/src/assets/images/avatar.webp" alt="Mukesh Kumar profile photo" class="img-fluid" width="50" height="50" loading="lazy" />
                      </div>
                      <div class="blog-meta-details">
                        <span class="blog-author-name">Mukesh Kumar</span>
                        <time datetime="2026-02-20" class="blog-date">February 20, 2026 • 4 min read</time>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center mt-4">
            <a href="/blog/" class="btn primary-btn">See All Blogs &amp; News</a>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
