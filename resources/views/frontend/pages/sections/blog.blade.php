<!-- BLOG SECTION -->
<section class="blog-section" aria-labelledby="blog-heading">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-xl-11 col-12">
        <div class="blog-wrapper">
          <!-- Side Heading / Top Heading on Mobile -->
          <h2 id="blog-heading" class="blog-main-title">
            {!! $content['heading'] ?? 'OUR <span class="ac">CREATIVE <br class="d-lg-block d-none" /> BLOGS</span> &amp; NEWS' !!}
          </h2>
          <!-- Articles List Container -->
          <div class="blog-feed">
            @php
              $blogs = $content['blogs'] ?? [
                [
                  'title' => 'Upcoming Trends in Website Development and Digital Marketing Solutions You Should Know',
                  'link' => 'https://www.isearchsolution.com/blog/upcoming-trends-in-website-development-and-digital-marketing-solutions-you-should-know/',
                  'image' => '/src/assets/images/blog-img/blog-post-img1.webp',
                  'excerpt' => 'The digital world is evolving constantly nowadays, and online presence becomes an essential part, not an option, for every business, service provider and brand. Social media is no longer enough to grow a business. Website or ads alone aren’t enough.',
                  'author_name' => 'Mukesh Kumar',
                  'author_avatar' => '/src/assets/images/avatar.webp',
                  'date' => 'February 26, 2026 • 4 min read'
                ],
                [
                  'title' => 'Importance of Social Media Marketing: The One Growth Strategy Most Businesses Ignore',
                  'link' => 'https://www.isearchsolution.com/blog/importance-of-social-media-marketing-the-one-growth-strategy-most-businesses-ignore/',
                  'image' => '/src/assets/images/blog-img/blog-post-img2.webp',
                  'excerpt' => 'From finding new products and services to connecting with friends and family, social media has completely changed the way we connect with each other—how companies engage with their audience and how we stay in touch with our family even when we are miles apart. This clearly highlights the Importance of Social Media Marketing in today’s digital world.',
                  'author_name' => 'Mukesh Kumar',
                  'author_avatar' => '/src/assets/images/avatar.webp',
                  'date' => 'February 20, 2026 • 4 min read'
                ]
              ];
            @endphp
            @foreach($blogs as $blog)
            <article class="blog-card">
              <div class="blog-thumb">
                <a
                  href="{{ $blog['link'] ?? '#' }}"
                  target="_blank"
                  rel="noopener"
                  aria-hidden="true"
                  tabindex="-1"
                >
                  <img src="{{ isset($blog['image']) && $blog['image'] ? asset($blog['image']) : '' }}" alt="Blog Image" class="blog-zoom-img" width="300" height="200" loading="lazy" />
                </a>
              </div>
              <div class="blog-body">
                <h3 class="blog-post-title">
                  <a
                    href="{{ $blog['link'] ?? '#' }}"
                    target="_blank"
                    rel="noopener"
                    class="blog-anchor-link line-clamp-1"
                  >
                    {{ $blog['title'] ?? '' }}
                  </a>
                </h3>
                <p class="blog-excerpt line-clamp-2">
                  {{ $blog['excerpt'] ?? '' }}
                </p>
                <div class="blog-meta-row">
                  <div class="blog-author-avatar">
                    <img src="{{ isset($blog['author_avatar']) && $blog['author_avatar'] ? asset($blog['author_avatar']) : asset('/src/assets/images/avatar.webp') }}" alt="{{ $blog['author_name'] ?? 'Author' }} profile photo" class="img-fluid" width="50" height="50" loading="lazy" />
                  </div>
                  <div class="blog-meta-details">
                    <span class="blog-author-name">{{ $blog['author_name'] ?? '' }}</span>
                    <time class="blog-date">{{ $blog['date'] ?? '' }}</time>
                  </div>
                </div>
              </div>
            </article>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center mt-4">
        <a href="{{ $content['btn_link'] ?? '/blog/' }}" class="btn primary-btn">{{ $content['btn_text'] ?? 'See All Blogs &amp; News' }}</a>
      </div>
    </div>
  </div>
</section>
