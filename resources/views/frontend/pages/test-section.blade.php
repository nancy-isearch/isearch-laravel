@extends('frontend.layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/pages/new-aboutUsPage-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/pages/sections/testimonial.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/pages/sections/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/pages/sections/faq.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/pages/sections/seo-tab-section.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/pages/sections/seo-tab-section-V2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/pages/sections/cta.css') }}">
@endpush
@section('content')
    <!-- banner section -->
    <header class="hero--inner--banner">
        <img src="{{ asset('assets/frontend/images/banner-img/contact-page-banner.webp') }}" alt=""
            class="banner--img" fetchpriority="high" />
        <div class="container-fluid banner--content--overlay">
            <div class="col-md-6">
                <h1 class="title">About Us</h1>
                <p class="para">We turn people’s dreams into reality, enabling them to craft transformative digital
                    experiences for a lasting impact.</p>
            </div>
        </div>
    </header>
    <!-- --------------------------------------------------------------- -->
    <main class="about-page">
        <!-- PRODUCTION-READY PREVENT-CLASH SEO TABS COMPONENT -->
        <section class="cc-tmpl-tab-sec cc-tmpl-tab-system-wrapper" aria-label="SEO Insights Hub">
            <div class="container-fluid">
                <div class="cc-tmpl-tab-system">
                    <!-- Left Sidebar Container -->
                    <div class="cc-tmpl-tab-aside">
                        <div class="cc-tmpl-tab-nav-list" role="list">
                            <!-- Tab 1 Trigger -->
                            <div class="cc-tmpl-tab-trigger-node" role="listitem">
                                <input id="cc-tmpl-tab-1" type="radio" name="cc-tmpl-tab-group" class="cc-tmpl-tab-input"
                                    checked hidden />
                                <label for="cc-tmpl-tab-1" class="cc-tmpl-tab-label">How does Technical SEO improve Google
                                    rankings?</label>
                            </div>

                            <!-- Tab 2 Trigger -->
                            <div class="cc-tmpl-tab-trigger-node" role="listitem">
                                <input id="cc-tmpl-tab-2" type="radio" name="cc-tmpl-tab-group" class="cc-tmpl-tab-input"
                                    hidden />
                                <label for="cc-tmpl-tab-2" class="cc-tmpl-tab-label">Traditional SEO vs. AI-Driven SEO: The
                                    Competitive Shift</label>
                            </div>

                            <!-- Tab 3 Trigger -->
                            <div class="cc-tmpl-tab-trigger-node" role="listitem">
                                <input id="cc-tmpl-tab-3" type="radio" name="cc-tmpl-tab-group" class="cc-tmpl-tab-input"
                                    hidden />
                                <label for="cc-tmpl-tab-3" class="cc-tmpl-tab-label">How Do We Optimise Websites for
                                    Google’s AI Overviews?</label>
                            </div>

                            <!-- Tab 4 Trigger -->
                            <div class="cc-tmpl-tab-trigger-node" role="listitem">
                                <input id="cc-tmpl-tab-4" type="radio" name="cc-tmpl-tab-group" class="cc-tmpl-tab-input"
                                    hidden />
                                <label for="cc-tmpl-tab-4" class="cc-tmpl-tab-label">Will AI-Driven SEO Deliver Faster
                                    Results in the Delhi Market?</label>
                            </div>

                            <!-- Tab 5 Trigger -->
                            <div class="cc-tmpl-tab-trigger-node" role="listitem">
                                <input id="cc-tmpl-tab-5" type="radio" name="cc-tmpl-tab-group" class="cc-tmpl-tab-input"
                                    hidden />
                                <label for="cc-tmpl-tab-5" class="cc-tmpl-tab-label">Can AI SEO Help My Business Rank for
                                    "Near Me" Searches in Delhi?</label>
                            </div>

                            <!-- Tab 6 Trigger -->
                            <div class="cc-tmpl-tab-trigger-node" role="listitem">
                                <input id="cc-tmpl-tab-6" type="radio" name="cc-tmpl-tab-group" class="cc-tmpl-tab-input"
                                    hidden />
                                <label for="cc-tmpl-tab-6" class="cc-tmpl-tab-label">Is AI-Generated Content Safe for My
                                    Website’s Long-Term Ranking?</label>
                            </div>
                        </div>

                        <!-- Sidebar Widget Card Block -->
                        <div class="cc-tmpl-tab-aside-footer">
                            <img src="{{ asset('assets/frontend/images/seo-dual-section-right.webp') }}"
                                alt="SEO Expert Consultant Illustration" width="120" height="140" loading="lazy" />
                            <button type="button" class="primary-btn openPopupBtn">Request a Quote</button>
                            <p class="cc-tmpl-tab-footer-meta mt-3">Stay connected with us for updates, insights, and
                                personalized support.</p>
                        </div>
                    </div>

                    <!-- Right Pane Panel Container -->
                    <div class="cc-tmpl-tab-content-deck">
                        <!-- Panel 1 -->
                        <div id="cc-tmpl-content-1" class="cc-tmpl-tab-panel">
                            <article class="cc-tmpl-tab-article">
                                <h3 class="fs-3 fw-semibold text-dark">How does Technical SEO improve Google rankings?</h3>
                                <p>
                                    With technical expertise in SEO, we build a foundation for your website. We know the
                                    importance of content for attracting traffic, but we also need technical expertise to
                                    help Google
                                    crawlers find, interpret, and index your pages effectively. By working as one of the
                                    Best SEO service providers in Delhi for a decade, we know how to remove the friction
                                    between your
                                    site’s code and the search algorithm.
                                </p>
                                <div class="cc-tmpl-tab-feature-list mt-4">
                                    <div class="cc-tmpl-tab-list-heading mb-2"><strong>Key aspects of technical
                                            SEO:</strong></div>
                                    <ul>
                                        <li class="mb-2 text-muted">
                                            <strong class="text-dark">Crawlability &amp; Indexing:</strong> We optimize your
                                            XML sitemaps and robots.txt files so Google doesn't skip important information.
                                        </li>
                                        <li class="mb-2 text-muted">
                                            <strong class="text-dark">Mobile-First Optimisation:</strong> A responsive
                                            website must be technically optimised for mobile searches to achieve higher
                                            rankings.
                                        </li>
                                        <li class="mb-2 text-muted">
                                            <strong class="text-dark">Site Speed &amp; Core Web Vitals:</strong> To rank
                                            your website in Google, it must load faster and respond more quickly for an
                                            enhanced user experience.
                                        </li>
                                        <li class="mb-2 text-muted">
                                            <strong class="text-dark">Security (HTTPS):</strong> If your website is
                                            properly secured, it earns visitors' trust. With valid SSL certificates, we
                                            drive organic traffic.
                                        </li>
                                    </ul>
                                </div>
                                <p class="mt-3">Through our Technical SEO services, we fix broken links, eliminate
                                    duplicate content, and implement Schema Markup so that Google keeps you ahead of the
                                    competition.</p>
                            </article>
                        </div>

                        <!-- Panel 2 -->
                        <div id="cc-tmpl-content-2" class="cc-tmpl-tab-panel">
                            <article class="cc-tmpl-tab-article">
                                <h3 class="fs-3 fw-semibold text-dark">Traditional SEO vs. AI-Driven SEO: The Competitive
                                    Shift</h3>
                                <p>
                                    Is traditional SEO enough for boosting ranks on Google? Competing and establishing a
                                    presence in the digital space of a popular metropolitan city is a daunting task. And,
                                    relying
                                    only on keyword tracking and monthly reporting is not enough to win the game. As a
                                    reputable SEO firm in Delhi, we need to develop a strong SEO strategy to make a smooth
                                    transition
                                    from traditional SEO to AI-driven search engine optimisation.
                                </p>
                                <p>
                                    We pay utmost attention to keeping pace with Google’s rapid algorithm updates. With the
                                    expansion of AI in search engine optimization, traditional methods are no longer enough;
                                    they
                                    are used to build the framework and achieve rankings in Google search results. Now, we
                                    need to work on getting citations into LLMs (Large Language Models).
                                </p>
                                <p>At iSearchSolution, we proceed differently. With AI-powered tools, we moved beyond the
                                    manual limitations of the past to offer a high-speed, data-backed approach.</p>
                                <div class="cc-tmpl-tab-feature-list mt-4">
                                    <ul>
                                        <li class="mb-2 text-muted">
                                            <strong class="text-dark">Traditional SEO reacts to past rankings:</strong> We
                                            use AI to predict search shifts, allowing your Delhi business to capture
                                            emerging trends before
                                            competitors.
                                        </li>
                                        <li class="mb-2 text-muted">
                                            <strong class="text-dark">Beyond basic keywords, we map user intent:</strong>
                                            With AI, we align your content with exactly what your customers are searching
                                            for in real time.
                                        </li>
                                        <li class="mb-2 text-muted">
                                            Instead of performing manual checks, our team uses AI tools for 24/7 technical
                                            monitoring. We identify and fix speed or crawl issues to maintain your rank.
                                        </li>
                                        <li class="mb-2 text-muted">
                                            As a professional SEO company in Delhi, we know the significance of content in
                                            digital marketing. We don’t just write content; we optimise it to build topical
                                            authority.
                                        </li>
                                        <li class="mb-2 text-muted">
                                            With traditional SEO, we fight for blue links. With AI <strong
                                                class="text-dark">SEO services in Delhi</strong>, we optimise your site to
                                            appear in AI-generated search summaries
                                            and enhance your online presence.
                                        </li>
                                        <li class="mb-2 text-muted">Using AI, we analyse regional search patterns in Delhi
                                            to ensure your local SEO is optimised for the NCR market.</li>
                                    </ul>
                                </div>
                            </article>
                        </div>

                        <!-- Panel 3 -->
                        <div id="cc-tmpl-content-3" class="cc-tmpl-tab-panel">
                            <article class="cc-tmpl-tab-article">
                                <h3 class="fs-3 fw-semibold text-dark">How Do We Optimise Websites for Google’s AI
                                    Overviews?</h3>
                                <p>
                                    After the integration of AI in SEO, the search landscape has shifted from simple blue
                                    links to Google’s Search Generative Experience (SGE). We are no longer struggling to
                                    rank in
                                    SERPs; we need citations in AI summaries. Whether we work on <strong
                                        class="text-dark">Local SEO in Delhi</strong> or boost business across cities, we
                                    must know how to work with
                                    AI-driven search engines to offer the competitive edge.
                                </p>
                                <p>Today, we are not optimising for bots; we are optimising information to build authority
                                    and maintain your digital presence in today’s digital ecosystem.</p>
                                <div class="cc-tmpl-tab-feature-list mt-4">
                                    <div class="cc-tmpl-tab-list-heading mb-2"><strong>Our strategy for Generative Search
                                            encompasses:</strong></div>
                                    <ul>
                                        <li class="mb-2 text-muted"><strong class="text-dark">Semantic Entity
                                                Mapping:</strong> We structure your website content so that AI LLMs can
                                            easily understand your business.</li>
                                        <li class="mb-2 text-muted">
                                            <strong class="text-dark">Structured Data &amp; Schema:</strong> By
                                            implementing advanced schema, we give search engines clear context about your
                                            services.
                                        </li>
                                        <li class="mb-2 text-muted">
                                            <strong class="text-dark">Direct-Answer Optimisation:</strong> Our content
                                            experts know how to craft content that directly answers complex user queries,
                                            increasing the likelihood
                                            of being featured.
                                        </li>
                                        <li class="mb-2 text-muted">
                                            <strong class="text-dark">Topical Authority Building:</strong> We build topical
                                            authority through E-E-A-T and create trust signals for Google that you are an
                                            expert in your
                                            niche.
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>

                        <!-- Panel 4 -->
                        <div id="cc-tmpl-content-4" class="cc-tmpl-tab-panel">
                            <article class="cc-tmpl-tab-article">
                                <h3 class="fs-3 fw-semibold text-dark">Will AI-Driven SEO Deliver Faster Results in the
                                    Delhi Market?</h3>
                                <p>
                                    Survival in the hyper-competitive landscape like Delhi NCR is a big challenge. If you
                                    don’t maintain the speed, you will lose the game. By partnering with a top SEO Services
                                    Company
                                    in Delhi, you can optimise your website for higher rankings and drive traffic in the
                                    AI-driven search era.
                                </p>
                                <p>
                                    At iSearchSolution, we go beyond traditional SEO. Our SEO experts use predictive AI
                                    models to accelerate the growth cycle of your business. With our AI expertise and local
                                    SEO, we
                                    deliver measurable visibility within 3 to 4 months. Based on data analysis, we develop
                                    strategies focused on high-impact execution.
                                </p>
                                <div class="cc-tmpl-tab-feature-list my-4">
                                    <div class="cc-tmpl-tab-list-heading mb-2"><strong>How we accelerate your business
                                            growth:</strong></div>
                                    <ul>
                                        <li class="mb-2 text-muted">We use real-time trend prediction to identify shifting
                                            search patterns in Delhi before they become mainstream.</li>
                                        <li class="mb-2 text-muted">By automating technical fixes with AI-driven tools, we
                                            catch and resolve crawl errors instantly, helping us maintain the website's
                                            rank.</li>
                                        <li class="mb-2 text-muted">We process thousands of local keywords in seconds to
                                            build a dominant content map.</li>
                                    </ul>
                                </div>
                                <p>By performing a competitor gap analysis, our SEO experts in Delhi NCR pinpoint exactly
                                    where your rivals are weak and how to position your business to capitalise on them.</p>
                            </article>
                        </div>

                        <!-- Panel 5 -->
                        <div id="cc-tmpl-content-5" class="cc-tmpl-tab-panel">
                            <article class="cc-tmpl-tab-article">
                                <h3 class="fs-3 fw-semibold text-dark">Can AI SEO Help My Business Rank for "Near Me"
                                    Searches in Delhi?</h3>
                                <p>
                                    By providing Internet Marketing Services in Delhi for over a decade, we have gained
                                    experience and understand how local searches work in highly competitive areas.
                                    <strong class="text-dark">Local SEO in Delhi NCR</strong> is uniquely challenging due
                                    to high density and regional variations.
                                </p>
                                <p>
                                    For instance, a user searching in North Delhi has a different intent than one in Noida,
                                    Gurgaon, or even in South Delhi. For that, we use AI-powered geographic intelligence and
                                    ensure your business dominates Google Local search results.
                                </p>
                                <p>Modern SEO isn't just about citations; it's about being the most relevant answer for
                                    every neighbourhood-specific search.</p>
                                <div class="cc-tmpl-tab-feature-list my-4">
                                    <div class="cc-tmpl-tab-list-heading mb-2"><strong>How we win at Local SEO:</strong>
                                    </div>
                                    <ul>
                                        <li class="mb-2 text-muted">
                                            <strong class="text-dark">Hyper-Local Keyword Targeting:</strong> We are a
                                            trusted SEO Services Company in Delhi and use AI to understand
                                            neighbourhood-specific search behaviour
                                            across the NCR. It helps us target the right audience based on their search
                                            intent and connect them with you.
                                        </li>
                                        <li class="mb-2 text-muted">
                                            <strong class="text-dark">Google Business Profile (GBP) Optimisation:</strong>
                                            Our AI tools monitor and optimise your Google Business Profile so we can
                                            maximise local engagement.
                                            By refining your Google listing, we improve local search rankings and visibility
                                            in Google Maps.
                                        </li>
                                        <li class="mb-2 text-muted">
                                            <strong class="text-dark">Automated Citation Management:</strong> By adding
                                            accurate information, we ensure your NAP (Name, Address, Phone) is up to date
                                            across all local
                                            directories. With data consistency, we improve local search rankings, increase
                                            visibility, and reduce the pain of time-consuming manual updates.
                                        </li>
                                        <li class="mb-2 text-muted">
                                            <strong class="text-dark">Review Sentiment Analysis:</strong> We use AI and
                                            Natural Language Processing (NLP) to categorise customer feedback and understand
                                            brand perception. It
                                            allows us to improve user experience (UX), boost search rankings, and build
                                            trust signals.
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>

                        <!-- Panel 6 -->
                        <div id="cc-tmpl-content-6" class="cc-tmpl-tab-panel">
                            <article class="cc-tmpl-tab-article">
                                <h3 class="fs-3 fw-semibold text-dark">Is AI-Generated Content Safe for My Website’s
                                    Long-Term Ranking?</h3>
                                <p>
                                    After Google introduced the E-E-A-T framework (Experience, Expertise, Authoritativeness,
                                    and Trustworthiness), low-quality content no longer works. Like other SEO firms in
                                    Delhi, we
                                    don’t use tool-generated content to get visibility. Our content model is based on
                                    Human-Plus-AI, in which we use AI to create a blueprint.
                                </p>
                                <p>
                                    At iSearchSolution, we use a hybrid model. AI provides the data-backed blueprint, but
                                    our expert human editors add critical information and professional insight required to
                                    build
                                    real trust with your audience.
                                </p>
                                <div class="cc-tmpl-tab-feature-list my-4">
                                    <div class="cc-tmpl-tab-list-heading mb-2"><strong>Our commitment to quality:</strong>
                                    </div>
                                    <ul>
                                        <li class="mb-2 text-muted">
                                            <strong class="text-dark">AI-Assisted Research:</strong> We use AI to find the
                                            most relevant facts and data points for your industry. Based on precise
                                            information, we prepare our
                                            SEO strategies and align our activities with your business objectives.
                                        </li>
                                        <li class="mb-2 text-muted">
                                            <strong class="text-dark">Human-Centric Editing:</strong> Every piece of
                                            content is refined by experts to ensure it resonates with a human audience.
                                            While offering our internet
                                            marketing services in Delhi, we pay close attention to content optimisation to
                                            gain visibility on AI-powered search engines.
                                        </li>
                                        <li class="mb-2 text-muted">
                                            <strong class="text-dark">Plagiarism &amp; Fact Checking:</strong> We use
                                            rigorous tools to ensure your content is 100% original and accurate. We cannot
                                            lead the competition with
                                            poor-quality content.
                                        </li>
                                        <li class="mb-2 text-muted">
                                            <strong class="text-dark">Future-Proof Content:</strong> We write content that
                                            satisfies both the AI algorithms and the human users who eventually buy your
                                            services. Our content
                                            experts make sure the content follows the E-E-A-T framework.
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA BANNER COMPONENT -->
        <section class="cta-banner" aria-labelledby="cta-heading">
            <div class="cta-overlay">
                <img src="/src/assets/images/contact-bg.webp" alt="isearch team image" width="1600" height="420"
                    loading="lazy" class="d-block" aria-hidden="true" />
            </div>
            <div class="container-fluid">
                <div class="cta-content">
                    <h2 id="cta-heading" class="cta-title heading-1">Ready to Scale Your Digital Footprint &amp; <span
                            class="ac text-white text-opacity-75">Maximize ROI</span>?</h2>
                    <p class="cta-lead">Partner with our expert team to deploy data-driven strategies engineered to
                        accelerate your revenue and market visibility.</p>
                    <div class="cta-actions">
                        <button type="button" class="primary-btn openPopupBtn">Schedule a Discovery Call</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- PRODUCTION-READY PREVENT-CLASH SEO TABS COMPONENT (CRAWL-OPTIMIZED) -->
        <section class="tab-system-wrapper" aria-label="SEO Insights Hub">
            <div class="container-fluid">
                <div class="tab-system">
                    <!-- Left Sidebar Container -->
                    <div class="tab-aside">
                        <div class="tab-nav-list" role="list">
                            <!-- Tab 1 Trigger -->
                            <div class="tab-trigger-node" role="listitem">
                                <input id="tab-1" type="radio" name="tab-group" class="tab-input" checked
                                    hidden />
                                <label for="tab-1" class="tab-label">How does Technical SEO improve Google
                                    rankings?</label>
                            </div>
                            <!-- Tab 2 Trigger -->
                            <div class="tab-trigger-node" role="listitem">
                                <input id="tab-2" type="radio" name="tab-group" class="tab-input" hidden />
                                <label for="tab-2" class="tab-label">Traditional SEO vs. AI-Driven SEO: The Competitive
                                    Shift</label>
                            </div>
                            <!-- Tab 3 Trigger -->
                            <div class="tab-trigger-node" role="listitem">
                                <input id="tab-3" type="radio" name="tab-group" class="tab-input" hidden />
                                <label for="tab-3" class="tab-label">How Do We Optimise Websites for Google’s AI
                                    Overviews?</label>
                            </div>
                            <!-- Tab 4 Trigger -->
                            <div class="tab-trigger-node" role="listitem">
                                <input id="tab-4" type="radio" name="tab-group" class="tab-input" hidden />
                                <label for="tab-4" class="tab-label">Will AI-Driven SEO Deliver Faster Results in the
                                    Delhi Market?</label>
                            </div>
                        </div>
                        <!-- Sidebar Widget Card Block -->
                        <div class="tab-aside-footer">
                            <img src="{{ asset('assets/frontend/images/seo-dual-section-right.webp') }}"
                                alt="SEO Expert Consultant" width="120" height="140" loading="lazy" />
                            <button type="button" class="primary-btn openPopupBtn">Request a Quote</button>
                            <p class="tab-footer-meta mt-3">Stay connected with us for updates, insights, and personalized
                                support.</p>
                        </div>
                    </div>
                    <!-- Right Pane Panel Container -->
                    <div class="tab-content-deck">
                        <!-- Panel 1 -->
                        <div id="content-1" class="tab-panel">
                            <article class="tab-article">
                                <h3 class="fs-3 fw-semibold text-dark">How does Technical SEO improve Google rankings?</h3>
                                <p>
                                    With technical expertise in SEO, we build a foundation for your website. We know the
                                    importance of content for attracting traffic, but we also need technical expertise to
                                    help Google
                                    crawlers find, interpret, and index your pages effectively. By working as one of the
                                    Best SEO service providers in Delhi for a decade, we know how to remove the friction
                                    between your
                                    site’s code and the search algorithm.
                                </p>
                                <div class="tab-feature-list mt-4">
                                    <div class="tab-list-heading mb-2"><strong>Key aspects of technical SEO:</strong></div>
                                    <ul>
                                        <li><strong>Crawlability &amp; Indexing:</strong> We optimize your XML sitemaps and
                                            robots.txt files so Google doesn't skip important information.</li>
                                        <li><strong>Mobile-First Optimisation:</strong> A responsive website must be
                                            technically optimised for mobile searches to achieve higher rankings.</li>
                                        <li><strong>Site Speed &amp; Core Web Vitals:</strong> To rank your website in
                                            Google, it must load faster and respond more quickly for an enhanced user
                                            experience.</li>
                                        <li><strong>Security (HTTPS):</strong> If your website is properly secured, it earns
                                            visitors' trust. With valid SSL certificates, we drive organic traffic.</li>
                                    </ul>
                                </div>
                                <p class="mt-3">Through our Technical SEO services, we fix broken links, eliminate
                                    duplicate content, and implement Schema Markup so that Google keeps you ahead of the
                                    competition.</p>
                            </article>
                        </div>
                        <!-- Panel 2 -->
                        <div id="content-2" class="tab-panel">
                            <article class="tab-article">
                                <h3 class="fs-3 fw-semibold text-dark">Traditional SEO vs. AI-Driven SEO: The Competitive
                                    Shift</h3>
                                <p>
                                    Is traditional SEO enough for boosting ranks on Google? Competing and establishing a
                                    presence in the digital space of a popular metropolitan city is a daunting task. And,
                                    relying
                                    only on keyword tracking and monthly reporting is not enough to win the game. As a
                                    reputable SEO firm in Delhi, we need to develop a strong SEO strategy to make a smooth
                                    transition
                                    from traditional SEO to AI-driven search engine optimisation.
                                </p>
                                <p>
                                    We pay utmost attention to keeping pace with Google’s rapid algorithm updates. With the
                                    expansion of AI in search engine optimization, traditional methods are no longer enough;
                                    they
                                    are used to build the framework and achieve rankings in Google search results. Now, we
                                    need to work on getting citations into LLMs (Large Language Models).
                                </p>
                                <p>At iSearchSolution, we proceed differently. With AI-powered tools, we moved beyond the
                                    manual limitations of the past to offer a high-speed, data-backed approach.</p>
                                <div class="tab-feature-list mt-4">
                                    <ul>
                                        <li class="mb-2 text-muted">
                                            <strong class="text-dark">Traditional SEO reacts to past rankings:</strong> We
                                            use AI to predict search shifts, allowing your Delhi business to capture
                                            emerging trends before
                                            competitors.
                                        </li>
                                        <li class="mb-2 text-muted">
                                            <strong class="text-dark">Beyond basic keywords, we map user intent:</strong>
                                            With AI, we align your content with exactly what your customers are searching
                                            for in real time.
                                        </li>
                                        <li class="mb-2 text-muted">
                                            Instead of performing manual checks, our team uses AI tools for 24/7 technical
                                            monitoring. We identify and fix speed or crawl issues to maintain your rank.
                                        </li>
                                        <li class="mb-2 text-muted">
                                            As a professional SEO company in Delhi, we know the significance of content in
                                            digital marketing. We don’t just write content; we optimise it to build topical
                                            authority.
                                        </li>
                                        <li class="mb-2 text-muted">
                                            With traditional SEO, we fight for blue links. With AI <strong
                                                class="text-dark">SEO services in Delhi</strong>, we optimise your site to
                                            appear in AI-generated search summaries
                                            and enhance your online presence.
                                        </li>
                                        <li class="mb-2 text-muted">Using AI, we analyse regional search patterns in Delhi
                                            to ensure your local SEO is optimised for the NCR market.</li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <!-- Panel 3 -->
                        <div id="content-3" class="tab-panel">
                            <article class="tab-article">
                                <h3 class="fs-3 fw-semibold text-dark">How Do We Optimise Websites for Google’s AI
                                    Overviews?</h3>
                                <p>
                                    After the integration of AI in SEO, the search landscape has shifted from simple blue
                                    links to Google’s Search Generative Experience (SGE). We are no longer struggling to
                                    rank in
                                    SERPs; we need citations in AI summaries. Whether we work on <strong
                                        class="text-dark">Local SEO in Delhi</strong> or boost business across cities, we
                                    must know how to work with
                                    AI-driven search engines to offer the competitive edge.
                                </p>
                                <p>Today, we are not optimising for bots; we are optimising information to build authority
                                    and maintain your digital presence in today’s digital ecosystem.</p>
                                <div class="tab-feature-list mt-4">
                                    <div class="tab-list-heading mb-2"><strong>Our strategy for Generative Search
                                            encompasses:</strong></div>
                                    <ul>
                                        <li class="mb-2 text-muted"><strong class="text-dark">Semantic Entity
                                                Mapping:</strong> We structure your website content so that AI LLMs can
                                            easily understand your business.</li>
                                        <li class="mb-2 text-muted">
                                            <strong class="text-dark">Structured Data &amp; Schema:</strong> By
                                            implementing
                                            advanced schema, we give search engines clear context about your services.
                                        </li>
                                        <li class="mb-2 text-muted">
                                            <strong class="text-dark">Direct-Answer Optimisation:</strong> Our content
                                            experts know how to craft content that directly answers complex user queries,
                                            increasing the likelihood
                                            of being featured.
                                        </li>
                                        <li class="mb-2 text-muted">
                                            <strong class="text-dark">Topical Authority Building:</strong> We build topical
                                            authority through E-E-A-T and create trust signals for Google that you are an
                                            expert in your
                                            niche.
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <!-- Panel 4 -->
                        <div id="content-4" class="tab-panel">
                            <article class="tab-article">
                                <h3 class="fs-3 fw-semibold text-dark">Will AI-Driven SEO Deliver Faster Results in the
                                    Delhi Market?</h3>
                                <p>
                                    Survival in the hyper-competitive landscape like Delhi NCR is a big challenge. If you
                                    don’t maintain the speed, you will lose the game. By partnering with a top SEO Services
                                    Company
                                    in Delhi, you can optimise your website for higher rankings and drive traffic in the
                                    AI-driven search era.
                                </p>
                                <p>
                                    At iSearchSolution, we go beyond traditional SEO. Our SEO experts use predictive AI
                                    models to accelerate the growth cycle of your business. With our AI expertise and local
                                    SEO, we
                                    deliver measurable visibility within 3 to 4 months. Based on data analysis, we develop
                                    strategies focused on high-impact execution.
                                </p>
                                <div class="tab-feature-list my-4">
                                    <div class="tab-list-heading mb-2"><strong>How we accelerate your business
                                            growth:</strong></div>
                                    <ul>
                                        <li class="mb-2 text-muted">We use real-time trend prediction to identify shifting
                                            search patterns in Delhi before they become mainstream.</li>
                                        <li class="mb-2 text-muted">By automating technical fixes with AI-driven tools, we
                                            catch and resolve crawl errors instantly, helping us maintain the website's
                                            rank.</li>
                                        <li class="mb-2 text-muted">We process thousands of local keywords in seconds to
                                            build a dominant content map.</li>
                                    </ul>
                                </div>
                                <p>By performing a competitor gap analysis, our SEO experts in Delhi NCR pinpoint exactly
                                    where your rivals are weak and how to position your business to capitalise on them.</p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ SECTION WITH SEO SCHEMA -->
        <section class="faq-section" aria-labelledby="faq-main-title" itemscope itemtype="https://schema.org/FAQPage">
            <div class="container-fluid">
                <div class="row g-4">
                    <!-- Left Anchor Column -->
                    <div class="col-lg-4 faq-aside">
                        <div class="sticky-top" style="top: 90px">
                            <h2 id="faq-main-title" class="faq-display-title">Frequently Asked Questions</h2>
                            <p class="faq-lead">Clear answers to common questions about our SEO, AI-driven optimisation,
                                and
                                digital growth strategies.</p>
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
                            <!-- FAQ Item 01 -->
                            <details name="faq" itemscope itemprop="mainEntity"
                                itemtype="https://schema.org/Question">
                                <summary>
                                    <span class="faq-badge">01</span>
                                    <span itemprop="name">How can iSearchSolution help my business grow?</span>
                                    <span class="faq-toggle-icon" aria-hidden="true">+</span>
                                </summary>
                                <div class="faq-body-panel" itemscope itemprop="acceptedAnswer"
                                    itemtype="https://schema.org/Answer">
                                    <div itemprop="text">
                                        <p>
                                            iSearchSolution helps businesses grow by improving their online visibility,
                                            search authority, and lead generation through strategic SEO and AI-driven
                                            optimisation. With over 15
                                            years of experience, we focus on increasing qualified traffic, improving
                                            conversions, and driving measurable business outcomes rather than just rankings.
                                        </p>
                                    </div>
                                </div>
                            </details>
                            <!-- FAQ Item 02 -->
                            <details name="faq" itemscope itemprop="mainEntity"
                                itemtype="https://schema.org/Question">
                                <summary>
                                    <span class="faq-badge">02</span>
                                    <span itemprop="name">What makes iSearchSolution different from other SEO
                                        agencies?</span>
                                    <span class="faq-toggle-icon" aria-hidden="true">+</span>
                                </summary>
                                <div class="faq-body-panel" itemscope itemprop="acceptedAnswer"
                                    itemtype="https://schema.org/Answer">
                                    <div itemprop="text">
                                        <p>
                                            Unlike traditional SEO agencies, we focus on AI-first SEO and search authority
                                            building. Our strategies are designed not only for Google’s organic results but
                                            also for AI systems
                                            like Google AI Overviews, ChatGPT, Gemini, and Bing Copilot. We combine North
                                            American market expertise with high-quality global execution.
                                        </p>
                                    </div>
                                </div>
                            </details>
                            <!-- FAQ Item 03 -->
                            <details name="faq" itemscope itemprop="mainEntity"
                                itemtype="https://schema.org/Question">
                                <summary>
                                    <span class="faq-badge">03</span>
                                    <span itemprop="name">How does SEO help a business succeed online?</span>
                                    <span class="faq-toggle-icon" aria-hidden="true">+</span>
                                </summary>
                                <div class="faq-body-panel" itemscope itemprop="acceptedAnswer"
                                    itemtype="https://schema.org/Answer">
                                    <div itemprop="text">
                                        <p>
                                            SEO helps businesses establish a strong online presence by making their website
                                            more visible to users actively searching for their products or services. It
                                            increases organic
                                            traffic, improves brand credibility, generates high-intent leads, and delivers
                                            long-term ROI compared to paid advertising.
                                        </p>
                                    </div>
                                </div>
                            </details>
                            <!-- FAQ Item 04 -->
                            <details name="faq" itemscope itemprop="mainEntity"
                                itemtype="https://schema.org/Question">
                                <summary>
                                    <span class="faq-badge">04</span>
                                    <span itemprop="name">Do old or already popular websites still need SEO experts?</span>
                                    <span class="faq-toggle-icon" aria-hidden="true">+</span>
                                </summary>
                                <div class="faq-body-panel" itemscope itemprop="acceptedAnswer"
                                    itemtype="https://schema.org/Answer">
                                    <div itemprop="text">
                                        <p>
                                            Yes. Even established or popular websites need continuous SEO management. Search
                                            algorithms, competitors, and user behaviour change constantly. A newer website
                                            with better SEO
                                            can outrank an older one if optimisation is neglected. Ongoing SEO ensures your
                                            site stays competitive, relevant, and visible.
                                        </p>
                                    </div>
                                </div>
                            </details>
                            <!-- FAQ Item 05 -->
                            <details name="faq" itemscope itemprop="mainEntity"
                                itemtype="https://schema.org/Question">
                                <summary>
                                    <span class="faq-badge">05</span>
                                    <span itemprop="name">How long does it take to see results from SEO?</span>
                                    <span class="faq-toggle-icon" aria-hidden="true">+</span>
                                </summary>
                                <div class="faq-body-panel" itemscope itemprop="acceptedAnswer"
                                    itemtype="https://schema.org/Answer">
                                    <div itemprop="text">
                                        <p>
                                            SEO is a long-term growth strategy. While some technical improvements can yield
                                            results within weeks, meaningful growth in traffic and leads typically takes 3–6
                                            months, depending
                                            on the competition, industry, and the current website's health. Sustainable SEO
                                            focuses on steady, compounding results.
                                        </p>
                                    </div>
                                </div>
                            </details>
                            <!-- Hidden Drawer Trigger & Elements -->
                            <input type="checkbox" name="faq-toggle-gate" id="ccTmplFaqMoreToggle"
                                class="faq-gate-input" hidden />
                            <div class="faq-hidden-drawer">
                                <!-- FAQ Item 06 -->
                                <details name="faq" itemscope itemprop="mainEntity"
                                    itemtype="https://schema.org/Question">
                                    <summary>
                                        <span class="faq-badge">06</span>
                                        <span itemprop="name">What SEO services does iSearchSolution provide?</span>
                                        <span class="faq-toggle-icon" aria-hidden="true">+</span>
                                    </summary>
                                    <div class="faq-body-panel" itemscope itemprop="acceptedAnswer"
                                        itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <p>We offer a comprehensive range of SEO services, including:</p>
                                            <ul class="mt-2">
                                                <li>AI SEO &amp; AIO (AI Optimisation)</li>
                                                <li>Technical SEO</li>
                                                <li>Keyword &amp; competitor research</li>
                                                <li>Content &amp; topical authority building</li>
                                                <li>Link building &amp; digital PR</li>
                                                <li>Local &amp; international SEO</li>
                                                <li>SEO audits and consulting</li>
                                            </ul>
                                        </div>
                                    </div>
                                </details>
                                <!-- FAQ Item 07 -->
                                <details name="faq" itemscope itemprop="mainEntity"
                                    itemtype="https://schema.org/Question">
                                    <summary>
                                        <span class="faq-badge">07</span>
                                        <span itemprop="name">How do you measure SEO success?</span>
                                        <span class="faq-toggle-icon" aria-hidden="true">+</span>
                                    </summary>
                                    <div class="faq-body-panel" itemscope itemprop="acceptedAnswer"
                                        itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <p>We do not rely solely on vanity metrics like rankings. We measure success
                                                through:</p>
                                            <ul class="mt-2">
                                                <li>Organic traffic growth</li>
                                                <li>Keyword visibility and authority</li>
                                                <li>Lead and conversion growth</li>
                                                <li>Revenue and ROI (where tracking data integration is active)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </details>
                            </div>
                            <!-- Semantic CSS Toggle Control -->
                            <label for="ccTmplFaqMoreToggle" class="faq-action-label mt-4"></label>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- BLOG SECTION -->
        <section class="blog-section" aria-labelledby="blog-heading">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-11 col-12">
                        <div class="blog-wrapper">
                            <!-- Side Heading / Top Heading on Mobile -->
                            <h2 id="blog-heading" class="blog-main-title">
                                OUR
                                <span class="ac">CREATIVE <br class="d-lg-block d-none" />
                                    BLOGS</span>
                                &amp; NEWS
                            </h2>
                            <!-- Articles List Container -->
                            <div class="blog-feed">
                                <!-- Article 1 -->
                                <article class="blog-card">
                                    <div class="blog-thumb">
                                        <a href="https://www.isearchsolution.com/blog/upcoming-trends-in-website-development-and-digital-marketing-solutions-you-should-know/"
                                            target="_blank" rel="noopener" aria-hidden="true" tabindex="-1">
                                            <img src="{{ asset('assets/frontend/images/blog-img/blog-post-img1.webp') }}"
                                                alt="Abstract digital trends visualization" class="blog-zoom-img"
                                                width="300" height="200" loading="lazy" />
                                        </a>
                                    </div>
                                    <div class="blog-body">
                                        <h3 class="blog-post-title">
                                            <a href="https://www.isearchsolution.com/blog/upcoming-trends-in-website-development-and-digital-marketing-solutions-you-should-know/"
                                                target="_blank" rel="noopener" class="blog-anchor-link line-clamp-1">
                                                Upcoming Trends in Website Development and Digital Marketing Solutions You
                                                Should Know
                                            </a>
                                        </h3>
                                        <p class="blog-excerpt line-clamp-2">
                                            The digital world is evolving constantly nowadays, and online presence becomes
                                            an essential part, not an option, for every business, service provider and
                                            brand. Social media is
                                            no longer enough to grow a business. Website or ads alone aren’t enough.
                                        </p>
                                        <div class="blog-meta-row">
                                            <div class="blog-author-avatar">
                                                <img src="{{ asset('assets/frontend/images/avatar.webp') }}"
                                                    alt="Mukesh Kumar profile photo" class="img-fluid" width="50"
                                                    height="50" loading="lazy" />
                                            </div>
                                            <div class="blog-meta-details">
                                                <span class="blog-author-name">Mukesh Kumar</span>
                                                <time datetime="2026-02-26" class="blog-date">February 26, 2026 • 4 min
                                                    read</time>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- Article 2 -->
                                <article class="blog-card">
                                    <div class="blog-thumb">
                                        <a href="https://www.isearchsolution.com/blog/importance-of-social-media-marketing-the-one-growth-strategy-most-businesses-ignore/"
                                            target="_blank" rel="noopener" aria-hidden="true" tabindex="-1">
                                            <img src="{{ asset('assets/frontend/images/blog-img/blog-post-img2.webp') }}"
                                                alt="Team analyzing social media marketing growth metrics"
                                                class="blog-zoom-img" width="300" height="200" loading="lazy" />
                                        </a>
                                    </div>
                                    <div class="blog-body">
                                        <h3 class="blog-post-title">
                                            <a href="https://www.isearchsolution.com/blog/importance-of-social-media-marketing-the-one-growth-strategy-most-businesses-ignore/"
                                                target="_blank" rel="noopener" class="blog-anchor-link line-clamp-1">
                                                Importance of Social Media Marketing: The One Growth Strategy Most
                                                Businesses Ignore
                                            </a>
                                        </h3>
                                        <p class="blog-excerpt line-clamp-2">
                                            From finding new products and services to connecting with friends and family,
                                            social media has completely changed the way we connect with each other—how
                                            companies engage with
                                            their audience and how we stay in touch with our family even when we are miles
                                            apart. This clearly highlights the Importance of Social Media Marketing in
                                            today’s digital world.
                                        </p>
                                        <div class="blog-meta-row">
                                            <div class="blog-author-avatar">
                                                <img src="{{ asset('assets/frontend/images/avatar.webp') }}"
                                                    alt="Mukesh Kumar profile photo" class="img-fluid" width="50"
                                                    height="50" loading="lazy" />
                                            </div>
                                            <div class="blog-meta-details">
                                                <span class="blog-author-name">Mukesh Kumar</span>
                                                <time datetime="2026-02-20" class="blog-date">February 20, 2026 • 4 min
                                                    read</time>
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
        <!-- PRODUCTION-READY PREVENT-CLASH TESTIMONIAL COMPONENT -->
        <section class="sec testimonial-sec" aria-labelledby="testimonial-main-title">
            <div class="container-fluid pe-md-0">
                <div class="row align-items-center">
                    <!-- Left Display Brand Column -->
                    <div class="col-lg-4 testimonial-left-block">
                        <h2 id="testimonial-main-title" class="heading-1">Client <span class="ac">Success
                                Stories</span>
                        </h2>
                        <p class="subtitle">See how we help businesses accelerate growth, scale traffic, and capture real
                            revenue performance.</p>
                        <div class="testimonial-illustration">
                            <img src="{{ asset('assets/frontend/images/sections/testimonial/Client-Feedback-img.webp') }}"
                                alt="Happy client strategic growth presentation illustration" width="260"
                                height="210" loading="lazy" />
                        </div>
                    </div>
                    <!-- Right Sliding Board Deck -->
                    <div class="col-lg-8 ps-4 ps-lg-0">
                        <div class="ucc-slider-container">
                            <!-- Radio Engine Controller State Selectors -->
                            <input type="radio" name="testimonial-state" id="t-slide-1" checked hidden />
                            <input type="radio" name="testimonial-state" id="t-slide-2" hidden />
                            <input type="radio" name="testimonial-state" id="t-slide-3" hidden />
                            <input type="radio" name="testimonial-state" id="t-slide-4" hidden />
                            <!-- Slider Window Viewport -->
                            <div class="ucc-slider-viewport">
                                <div class="ucc-slider-track py-4">
                                    <!-- Card 1 -->
                                    <div class="ucc-slide-item">
                                        <figure class="testimonial-card shadow-sm">
                                            <div class="mb-3">
                                                <svg class="icon--cc" aria-hidden="true"
                                                    style="--cc-icon-size: 32px; --cc-icon-color: #074fae">
                                                    <use href="/src/assets/icons.svg#blog-qoutes"></use>
                                                </svg>
                                            </div>
                                            <blockquote class="testimonial-quote">
                                                <p>
                                                    We partnered with the team to boost our online search footprints so that
                                                    enterprise brands and organizations could find us. Their specialized
                                                    blueprint overhauled our
                                                    complete content framework. Within a few months, we experienced
                                                    high-intent keywords scaling to page one and a profound increase in
                                                    inbound inquiries.
                                                </p>
                                            </blockquote>
                                            <div class="testimonial-footer">
                                                <figcaption class="testimonial-meta">
                                                    <strong class="text-dark">Pankaj Aggarwal</strong>
                                                    <cite class="testimonial-role">Founder &amp; CEO</cite>
                                                </figcaption>
                                                <div class="testimonial-brand-wrap">
                                                    <svg class="icon--cc" style="width: 110px; height: 40px"
                                                        aria-label="Flapone business logo">
                                                        <use href="/src/assets/icons.svg#flapone-logo"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                    <!-- Card 2 -->
                                    <div class="ucc-slide-item">
                                        <figure class="testimonial-card shadow-sm">
                                            <div class="mb-3">
                                                <svg class="icon--cc" aria-hidden="true"
                                                    style="--cc-icon-size: 32px; --cc-icon-color: #074fae">
                                                    <use href="/src/assets/icons.svg#blog-qoutes"></use>
                                                </svg>
                                            </div>
                                            <blockquote class="testimonial-quote">
                                                <p>
                                                    Our long-term collaboration with this digital team has yielded
                                                    exceptional bottom-line transformation. They completely streamlined our
                                                    site architecture and aligned layout
                                                    nodes to address exact user intent patterns. We value their proactive
                                                    analytics strategy, transparency, and data monitoring consistency.
                                                </p>
                                            </blockquote>
                                            <div class="testimonial-footer">
                                                <figcaption class="testimonial-meta">
                                                    <strong class="text-dark">Santosh Jaiswal</strong>
                                                    <cite class="testimonial-role">Managing Director</cite>
                                                </figcaption>
                                                <div class="testimonial-brand-wrap">
                                                    <svg class="icon--cc" style="width: 40px; height: 40px"
                                                        aria-label="APML logistics group logo">
                                                        <use href="/src/assets/icons.svg#apml-logo"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                    <!-- Card 3 -->
                                    <div class="ucc-slide-item">
                                        <figure class="testimonial-card shadow-sm">
                                            <div class="mb-3">
                                                <svg class="icon--cc" aria-hidden="true"
                                                    style="--cc-icon-size: 32px; --cc-icon-color: #074fae">
                                                    <use href="/src/assets/icons.svg#blog-qoutes"></use>
                                                </svg>
                                            </div>
                                            <blockquote class="testimonial-quote">
                                                <p>
                                                    Competing within international conversion markets requires profound
                                                    authority. This agency delivered distinct, top-tier content and advanced
                                                    entity configuration schemas. The
                                                    target landing modules they executed have captured higher ranking
                                                    positions, translating directly into customer trust signals.
                                                </p>
                                            </blockquote>
                                            <div class="testimonial-footer">
                                                <figcaption class="testimonial-meta">
                                                    <strong class="text-dark">Oliver Harris</strong>
                                                    <cite class="testimonial-role">Operations Director</cite>
                                                </figcaption>
                                                <div class="testimonial-brand-wrap">
                                                    <svg class="icon--cc" style="width: 110px; height: 40px"
                                                        aria-label="Tailored Tours logo">
                                                        <use href="/src/assets/icons.svg#tailored-tours-logo"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                    <!-- Card 4 -->
                                    <div class="ucc-slide-item">
                                        <figure class="testimonial-card shadow-sm">
                                            <div class="mb-3">
                                                <svg class="icon--cc" aria-hidden="true"
                                                    style="--cc-icon-size: 32px; --cc-icon-color: #074fae">
                                                    <use href="/src/assets/icons.svg#blog-qoutes"></use>
                                                </svg>
                                            </div>
                                            <blockquote class="testimonial-quote">
                                                <p>
                                                    After deploying their predictive optimization updates, organic metrics
                                                    and audience interactions immediately shifted upwards. Their technical
                                                    link architecture model provided
                                                    the scale our business unit required to lead our regional market niche.
                                                    Truly a premium team for scaling performance value.
                                                </p>
                                            </blockquote>
                                            <div class="testimonial-footer">
                                                <figcaption class="testimonial-meta">
                                                    <strong class="text-dark">Animesh Sharma</strong>
                                                    <cite class="testimonial-role">Marketing Lead</cite>
                                                </figcaption>
                                                <div class="testimonial-brand-wrap">
                                                    <svg class="icon--cc" style="width: 110px; height: 40px"
                                                        aria-label="Saya construction logo">
                                                        <use href="/src/assets/icons.svg#saya-logo"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <!-- Sliding Control Interfaces -->
                            <div class="ucc-slider-controls">
                                <!-- Group 1 Controls -->
                                <div class="ucc-control-group ucc-group-1">
                                    <span class="ucc-nav-btn ucc-is-disabled">
                                        <svg class="icon--cc">
                                            <use href="/src/assets/icons.svg#arrow-left-01-stroke-rounded"></use>
                                        </svg>
                                    </span>
                                    <label for="t-slide-2" class="ucc-nav-btn" aria-label="Next Slide">
                                        <svg class="icon--cc">
                                            <use href="/src/assets/icons.svg#arrow-right-01-stroke-rounded"></use>
                                        </svg>
                                    </label>
                                </div>

                                <!-- Group 2 Controls -->
                                <div class="ucc-control-group ucc-group-2">
                                    <label for="t-slide-1" class="ucc-nav-btn" aria-label="Previous Slide">
                                        <svg class="icon--cc">
                                            <use href="/src/assets/icons.svg#arrow-left-01-stroke-rounded"></use>
                                        </svg>
                                    </label>
                                    <label for="t-slide-3" class="ucc-nav-btn" aria-label="Next Slide">
                                        <svg class="icon--cc">
                                            <use href="/src/assets/icons.svg#arrow-right-01-stroke-rounded"></use>
                                        </svg>
                                    </label>
                                </div>

                                <!-- Group 3 Controls -->
                                <div class="ucc-control-group ucc-group-3">
                                    <label for="t-slide-2" class="ucc-nav-btn" aria-label="Previous Slide">
                                        <svg class="icon--cc">
                                            <use href="/src/assets/icons.svg#arrow-left-01-stroke-rounded"></use>
                                        </svg>
                                    </label>
                                    <label for="t-slide-4" class="ucc-nav-btn" aria-label="Next Slide">
                                        <svg class="icon--cc">
                                            <use href="/src/assets/icons.svg#arrow-right-01-stroke-rounded"></use>
                                        </svg>
                                    </label>
                                </div>

                                <!-- Group 4 Controls -->
                                <div class="ucc-control-group ucc-group-4">
                                    <label for="t-slide-3" class="ucc-nav-btn" aria-label="Previous Slide">
                                        <svg class="icon--cc">
                                            <use href="/src/assets/icons.svg#arrow-left-01-stroke-rounded"></use>
                                        </svg>
                                    </label>
                                    <span class="ucc-nav-btn ucc-is-disabled">
                                        <svg class="icon--cc">
                                            <use href="/src/assets/icons.svg#arrow-right-01-stroke-rounded"></use>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('scripts')
    <script src="{{ asset('assets/frontend/lib/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/new-main.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/compress-js/aboutUsPage.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/new-form-modal.js') }}" defer></script>
    <script src="{{ asset('assets/frontend/js/enquiry.js') }}" defer></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endpush
