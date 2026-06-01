@extends('frontend.layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/pages/new-aboutUsPage-style.css') }}">
@endpush
@section('content')
    <!-- banner section -->
    <header class="hero--inner--banner">
      <img src="{{ asset('assets/frontend/images/banner-img/contact-page-banner.webp') }}" alt="" class="banner--img" fetchpriority="high" />
      <div class="container-fluid banner--content--overlay">
        <div class="col-md-6">
          <h1 class="title">About Us</h1>
          <p class="para">We turn people’s dreams into reality, enabling them to craft transformative digital experiences for a lasting impact.</p>
        </div>
      </div>
    </header>
    <!-- --------------------------------------------------------------- -->
    <main class="about-page">
      <section class="about-story-section">
        <div class="container-fluid">
          <div class="row g-4">
            <div class="col-md-6">
              <div class="py-3">
                <h2 class="heading-2">Our Transformative <span class="color-primary">Journey</span></h2>
                <div class="d-flex align-items-center gap-2 mb-3">
                  <span>
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
                      <path d="M4 7L4 21" />
                      <path
                        d="M11.7576 3.90865C8.45236 2.22497 5.85125 3.21144 4.55426 4.2192C4.32048 4.40085 4.20358 4.49167 4.10179 4.69967C4 4.90767 4 5.10138 4 5.4888V14.7319C4.9697 13.6342 7.87879 11.9328 11.7576 13.9086C15.224 15.6744 18.1741 14.9424 19.5697 14.1795C19.7633 14.0737 19.8601 14.0207 19.9301 13.9028C20 13.7849 20 13.6569 20 13.4009V5.87389C20 5.04538 20 4.63113 19.8027 4.48106C19.6053 4.33099 19.1436 4.459 18.2202 4.71504C16.64 5.15319 14.3423 5.22532 11.7576 3.90865Z"
                      />
                    </svg>
                  </span>
                  <div class="fs-6 mb-0 fw-semibold text-black">Founded in 2010</div>
                </div>
                <div class="mt-4">
                  <p class="text-muted">
                    With over 15 years of experience, our journey has been full of learning and growth. By delivering exceptional digital services to our clients, we continuously empower ourselves to
                    set new standards of excellence.
                  </p>
                  <p class="text-muted">
                    By building strong expertise in search engine optimisation (SEO), website design & development, and social media optimisation (SMO), we stay ahead of the competition. We turn
                    strategy into results, empowering brands to grow, lead, and succeed.
                  </p>
                  <p class="text-muted">
                    With advanced technology, evidence-based strategies, and AI integration, we unlock new opportunities in a rapidly evolving digital landscape. We create lasting value for our
                    clients across the world.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-5 offset-md-1">
              <div class="py-3">
                <div>
                  <h2 class="heading-2">What's <span class="color-primary">Next?</span></h2>
                  <p class="text-muted mt-4">
                    What are the future goals we bring to the table? By combining innovation, advanced technology, and data-driven strategies, we aim to create exciting digital experiences that drive
                    growth, engagement, and quantified results. Our future is all about continuous learning, adopting and empowering for an AI-driven world.
                  </p>
                </div>
                <div>
                  <div class="rotating-text-wrapper mt-4">
                    <div class="icon-wrapper">
                      <img src="{{ asset('assets/frontend/svg/favIcon.svg') }}" alt="iSearch Solution Logo" style="width: 60px; height: 60px" loading="lazy" />
                    </div>
                    <div class="text-wrapper rotate-ani">
                      <img src="{{ asset('assets/frontend/svg/iss-seo-aio-sa-text.svg') }}" alt="" loading="lazy" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- founder section -->
      <section class="sec sec-white founder-sec" id="who">
        <!-- SVG graphic background shapes -->
        <svg class="founder-sec-bg" viewBox="0 0 700 800" preserveAspectRatio="xMaxYMid slice" fill="none" xmlns="http://www.w3.org/2000/svg">
          <ellipse cx="560" cy="300" rx="340" ry="340" fill="url(#g1)" opacity=".12" />
          <circle cx="680" cy="120" r="90" fill="url(#g2)" opacity=".18" />
          <circle cx="400" cy="600" r="140" fill="url(#g3)" opacity=".08" />
          <!-- grid dots -->
          <pattern id="pdots" x="0" y="0" width="28" height="28" patternUnits="userSpaceOnUse">
            <circle cx="2" cy="2" r="1.5" fill="#2455e8" opacity=".12" />
          </pattern>
          <rect width="700" height="800" fill="url(#pdots)" />
          <defs>
            <radialGradient id="g1" cx="50%" cy="50%" r="50%">
              <stop offset="0%" stop-color="#2455e8" />
              <stop offset="100%" stop-color="#0ea5e9" stop-opacity="0" />
            </radialGradient>
            <radialGradient id="g2" cx="50%" cy="50%" r="50%">
              <stop offset="0%" stop-color="#7c3aed" />
              <stop offset="100%" stop-color="#7c3aed" stop-opacity="0" />
            </radialGradient>
            <radialGradient id="g3" cx="50%" cy="50%" r="50%">
              <stop offset="0%" stop-color="#0ea5e9" />
              <stop offset="100%" stop-color="#0ea5e9" stop-opacity="0" />
            </radialGradient>
          </defs>
        </svg>

        <div class="container-fluid" style="position: relative; z-index: 1">
          <div class="wwa-grid">
            <div class="wwa-text sr sl">
              <span class="eye">Founder</span>
              <h2 class="heading-1">
                Meet the Mind Behind <br />
                <span class="color-primary text-normal">iSearch Solution</span>
              </h2>
              <div class="tbar"></div>
              <p class="ssub">
                Under the visionary leadership of Deelip Kumar, we are redefining our digital progress: driving innovation, setting new standards of excellence, and enabling scalable growth through
                intelligent design and advanced technology.
              </p>
              <div class="founder-sec-btn-wrapper">
                <a href="/contact-us" role="button" class="primary-btn">Contact us</a>
                <a href="/our-services.html" role="button" class="secondary-btn"> Explore Our Services </a>
              </div>
            </div>

            <!-- Right visual -->
            <div class="wwa-visual sr">
              <!-- blob -->
              <div class="wwa-blob"></div>
              <!-- spin rings -->
              <div class="wring wr1"></div>
              <div class="wring wr2"></div>
              <!-- orbit dots -->
              <span class="wod" style="background: #2455e8; box-shadow: 0 0 14px rgba(36, 85, 232, 0.4); --oa: 0deg; --or: 220px; animation: orbit 7s linear infinite"></span>
              <span
                class="wod"
                style="
                  background: var(--ab-amber);
                  box-shadow: 0 0 14px rgba(245, 158, 11, 0.45);
                  width: 10px;
                  height: 10px;
                  margin: -5px;
                  --oa: 130deg;
                  --or: 170px;
                  animation: orbit 5s linear infinite;
                "
              ></span>
              <span
                class="wod"
                style="
                  background: var(--ab-violet);
                  box-shadow: 0 0 14px rgba(124, 58, 237, 0.4);
                  width: 8px;
                  height: 8px;
                  margin: -4px;
                  --oa: 250deg;
                  --or: 200px;
                  animation: orbit 9s linear infinite reverse;
                "
              ></span>
              <!-- image frame -->
              <div class="wwa-frame">
                <img src="{{ asset('assets/frontend/images/professionals/CEO-sir.webp') }}" alt="CEO of iSearchSolution" loading="lazy" />
                <!-- decorative corner accent -->
                <div class="frame-accent fa-tl"></div>
                <div class="frame-accent fa-br"></div>
              </div>
              <!-- floating info cards -->
              <div class="wfc wfc1 d-none d-md-flex">
                <div class="wfc-icon" style="background: linear-gradient(135deg, #2455e8, #0ea5e9)">
                  <i class="hgi-stroke hgi-award-01"></i>
                </div>
                <div><strong>Award Winning</strong><span>Agency 2024</span></div>
              </div>
              <div class="wfc wfc2 d-none d-md-flex">
                <div class="wfc-icon" style="background: linear-gradient(135deg, #7c3aed, #06b6d4)">
                  <i class="hgi-stroke hgi-user-group"></i>
                </div>
                <div><strong>350+ Clients</strong><span>Worldwide</span></div>
              </div>
              <!-- graphic circle badge -->
              <div class="wwa-badge-circle">
                <svg viewBox="0 0 100 100" class="badge-ring-svg">
                  <circle cx="50" cy="50" r="45" fill="none" stroke="#2455e8" stroke-width="1.5" stroke-dasharray="4 4" opacity=".4" />
                </svg>
                <span>15+</span>
                <small>Years</small>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- our core values -->
      <section class="sec sec-white" id="values">
        <!-- large decorative circle bg -->
        <div
          style="
            position: absolute;
            top: 50%;
            right: -200px;
            transform: translateY(-50%);
            width: 600px;
            height: 600px;
            border-radius: 50%;
            border: 60px solid rgba(36, 85, 232, 0.04);
            pointer-events: none;
          "
        ></div>
        <div
          style="
            position: absolute;
            top: 50%;
            right: -200px;
            transform: translateY(-50%);
            width: 800px;
            height: 800px;
            border-radius: 50%;
            border: 40px solid rgba(14, 165, 233, 0.03);
            pointer-events: none;
          "
        ></div>
        <div class="cn" style="position: relative; z-index: 1">
          <div style="text-align: center" class="sr">
            <span class="eye">Our Core Values</span>
            <h2 class="heading-1">What Drives <span class="color-primary">Everything We Do</span></h2>
            <p class="ssub" style="margin: 16px auto 0; text-align: center">A commitment to excellence, innovation, and client success drives every step we take.</p>
          </div>
          <div class="val-grid">
            <div class="val-card vc-blue sr" style="--d: 0s">
              <div class="vc-graphic">
                <div class="vc-hexagon" style="--hc: rgba(36, 85, 232, 0.1)">
                  <i class="hgi hgi-stroke hgi-idea-01" style="color: #2455e8"></i>
                </div>
                <div class="vc-spin-ring" style="border-color: rgba(36, 85, 232, 0.18)"></div>
                <div class="vc-spin-ring vc-spin2" style="border-color: rgba(36, 85, 232, 0.1)"></div>
              </div>
              <h3>Innovation First</h3>
              <p>We stay ahead by adapting new technologies and design trends to deliver smarter solutions.</p>
              <div class="vc-num">01</div>
              <div class="vc-bar" style="background: #2455e8"></div>
            </div>
            <div class="val-card vc-amber sr" style="--d: 0.08s">
              <div class="vc-graphic">
                <div class="vc-hexagon" style="--hc: rgba(245, 158, 11, 0.1)">
                  <i class="hgi hgi-stroke hgi-chart-line-data-01" style="color: #f59e0b"></i>
                </div>
                <div class="vc-spin-ring" style="border-color: rgba(245, 158, 11, 0.18)"></div>
                <div class="vc-spin-ring vc-spin2" style="border-color: rgba(245, 158, 11, 0.1)"></div>
              </div>
              <h3>Growth Through Learning</h3>
              <p>Continuous improvement helps us refine our skills and expand our creative mindset.</p>
              <div class="vc-num">02</div>
              <div class="vc-bar" style="background: #f59e0b"></div>
            </div>
            <div class="val-card vc-teal sr" style="--d: 0.16s">
              <div class="vc-graphic">
                <div class="vc-hexagon" style="--hc: rgba(6, 182, 212, 0.1)">
                  <i class="hgi hgi-stroke hgi-target-02" style="color: #06b6d4"></i>
                </div>
                <div class="vc-spin-ring" style="border-color: rgba(6, 182, 212, 0.18)"></div>
                <div class="vc-spin-ring vc-spin2" style="border-color: rgba(6, 182, 212, 0.1)"></div>
              </div>
              <h3>Client-Centric Approach</h3>
              <p>Your goals shape our process; we adapt and deliver solutions aligned with clients’ requirements.</p>
              <div class="vc-num">03</div>
              <div class="vc-bar" style="background: #06b6d4"></div>
            </div>
            <div class="val-card vc-violet sr" style="--d: 0.24s">
              <div class="vc-graphic">
                <div class="vc-hexagon" style="--hc: rgba(124, 58, 237, 0.1)">
                  <i class="hgi hgi-stroke hgi-checkmark-badge-02" style="color: #7c3aed"></i>
                </div>
                <div class="vc-spin-ring" style="border-color: rgba(124, 58, 237, 0.18)"></div>
                <div class="vc-spin-ring vc-spin2" style="border-color: rgba(124, 58, 237, 0.1)"></div>
              </div>
              <h3>Integrity & Trust</h3>
              <p>Honesty and reliability are the foundation for every long-term partnership we build.</p>
              <div class="vc-num">04</div>
              <div class="vc-bar" style="background: #7c3aed"></div>
            </div>
            <div class="val-card vc-rose sr" style="--d: 0.32s">
              <div class="vc-graphic">
                <div class="vc-hexagon" style="--hc: rgba(244, 63, 94, 0.1)">
                  <i class="hgi hgi-stroke hgi-sparkles" style="color: #f43f5e"></i>
                </div>
                <div class="vc-spin-ring" style="border-color: rgba(244, 63, 94, 0.18)"></div>
                <div class="vc-spin-ring vc-spin2" style="border-color: rgba(244, 63, 94, 0.1)"></div>
              </div>
              <h3>Transparency & Collaboration</h3>
              <p>Open communication and transparency ensure you're part of every stage, from idea to execution.</p>
              <div class="vc-num">05</div>
              <div class="vc-bar" style="background: #f43f5e"></div>
            </div>
            <div class="val-card vc-green sr" style="--d: 0.4s">
              <div class="vc-graphic">
                <div class="vc-hexagon" style="--hc: rgba(5, 150, 105, 0.1)">
                  <i class="hgi hgi-stroke hgi-star" style="color: #059669"></i>
                </div>
                <div class="vc-spin-ring" style="border-color: rgba(5, 150, 105, 0.18)"></div>
                <div class="vc-spin-ring vc-spin2" style="border-color: rgba(5, 150, 105, 0.1)"></div>
              </div>
              <h3>Excellence in Execution</h3>
              <p>Perfection is a habit: We craft every project with precision, creativity, and care to deliver outstanding results.</p>
              <div class="vc-num">06</div>
              <div class="vc-bar" style="background: #059669"></div>
            </div>
          </div>
        </div>
      </section>
      <!-- mission section -->
      <section class="sec sec-alt" id="mission">
        <!-- decorative blobs -->
        <div
          style="
            position: absolute;
            top: -80px;
            left: -100px;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(36, 85, 232, 0.07), transparent 70%);
            pointer-events: none;
          "
        ></div>
        <div class="cn container-fluid">
          <div class="mv-grid">
            <!-- Orbit visual (left) -->
            <div class="mv-orbit-wrap sr sl">
              <!-- centre logo -->
              <div class="mv-center">
                <div class="rotating-text-wrapper">
                  <div class="icon-wrapper">
                    <img src="{{ asset('assets/frontend/svg/favIcon.svg') }}" alt="iSearch Solution Logo" style="width: 60px; height: 60px" loading="lazy" />
                  </div>
                  <div class="text-wrapper rotate-ani">
                    <img src="{{ asset('assets/frontend/svg/iss-seo-aio-sa-text.svg') }}" alt="" loading="lazy" />
                  </div>
                </div>
              </div>
              <!-- rings -->
              <div class="mv-ring" style="--ms: 220px; --sp: 14s; border-color: rgba(36, 85, 232, 0.15)"></div>
              <div class="mv-ring" style="--ms: 340px; --sp: 22s; animation-direction: reverse; border-color: rgba(14, 165, 233, 0.12)"></div>
              <div class="mv-ring" style="--ms: 460px; --sp: 34s; border-color: rgba(124, 58, 237, 0.1)"></div>
              <!-- orbit items ring 1 -->
              <div class="mv-od" style="--oa: 0deg; --or: 110px; animation: orbit 7s linear infinite">
                <div class="mv-od-chip" style="background: linear-gradient(135deg, #2455e8, #0ea5e9)">
                  <i class="hgi-stroke hgi-search-02"></i>
                </div>
              </div>
              <!-- orbit items ring 2 -->
              <div class="mv-od" style="--oa: 50deg; --or: 170px; animation: orbit 14s linear infinite">
                <div class="mv-od-chip" style="background: linear-gradient(135deg, #f59e0b, #ea580c)">
                  <i class="hgi-stroke hgi-chart-increase"></i>
                </div>
              </div>
              <div class="mv-od" style="--oa: 230deg; --or: 170px; animation: orbit 14s linear infinite">
                <div class="mv-od-chip" style="background: linear-gradient(135deg, #f43f5e, #7c3aed)">
                  <i class="hgi-stroke hgi-paint-board"></i>
                </div>
              </div>
              <!-- orbit items ring 3 -->
              <div class="mv-od" style="--oa: 20deg; --or: 230px; animation: orbit 22s linear infinite">
                <div class="mv-od-chip" style="background: linear-gradient(135deg, #059669, #65a30d)">
                  <i class="hgi-stroke hgi-code"></i>
                </div>
              </div>
              <div class="mv-od" style="--oa: 140deg; --or: 230px; animation: orbit 22s linear infinite">
                <div class="mv-od-chip" style="background: linear-gradient(135deg, #0ea5e9, #06b6d4)">
                  <i class="hgi-stroke hgi-analytics-01"></i>
                </div>
              </div>
              <div class="mv-od" style="--oa: 260deg; --or: 230px; animation: orbit 22s linear infinite">
                <div class="mv-od-chip" style="background: linear-gradient(135deg, #7c3aed, #a855f7)">
                  <i class="hgi-stroke hgi-megaphone-01"></i>
                </div>
              </div>
            </div>
            <!-- Right text -->
            <div class="sr">
              <span class="eye">Our Purpose</span>
              <h2 class="heading-1">What <span class="color-primary">Drives Us</span></h2>
              <p class="ssub" style="margin-top: 10px">Our mission and vision inspire us to empower businesses to grow, innovate, and succeed.</p>
              <div class="mv-cards">
                <div class="mv-card sr" style="--d: 0.1s; border-left-color: #2455e8">
                  <div class="mv-card-ico" style="background: rgba(36, 85, 232, 0.1); color: #2455e8">
                    <i class="hgi-stroke hgi-target-01"></i>
                  </div>
                  <div>
                    <span>Our Mission</span>
                    <p>To adopt and use innovative technologies that drive growth and empower businesses to achieve lasting success.</p>
                  </div>
                </div>
                <div class="mv-card sr" style="--d: 0.2s; border-left-color: #7c3aed">
                  <div class="mv-card-ico" style="background: rgba(124, 58, 237, 0.1); color: #7c3aed">
                    <i class="hgi-stroke hgi-telescope-01"></i>
                  </div>
                  <div>
                    <span>Our Vision</span>
                    <p>To consistently deliver measurable results that position us as a leading company in technology and digital transformation.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- CULTURE & LIFE -->
      <section class="sec" id="culture">
        <div class="cn container-fluid">
          <div class="cul-layout">
            <div class="sr sl">
              <span class="eye">Life at iSearchSolution</span>
              <h2 class="heading-1">
                Building a Culture of
                <span class="color-primary">Innovation</span>
              </h2>
              <p class="ssub" style="margin-top: 10px">
                At iSearchSolution, we encourage fresh ideas and continuous learning. Together, we learn, grow, and innovate to shape tomorrow’s digital world.
              </p>
              <div class="cul-list">
                <div class="cul-item sr" style="--d: 0.1s">
                  <div class="cul-ico" style="background: linear-gradient(135deg, #2455e8, #0ea5e9)">
                    <i class="hgi hgi-stroke hgi-user-multiple-02"></i>
                  </div>
                  <div>
                    <span>Team collaboration</span>
                    <p>Together, we share ideas and build smart solutions to achieve common goals and inspire innovation.</p>
                  </div>
                </div>
                <div class="cul-item sr" style="--d: 0.16s">
                  <div class="cul-ico" style="background: linear-gradient(135deg, #7c3aed, #a855f7)">
                    <i class="hgi-stroke hgi-book-open-01"></i>
                  </div>
                  <div>
                    <span>Learning culture</span>
                    <p>Through continuous learning and knowledge sharing, we stay up to date with the latest industry trends.</p>
                  </div>
                </div>
                <div class="cul-item sr" style="--d: 0.28s">
                  <div class="cul-ico" style="background: linear-gradient(135deg, #f59e0b, #ea580c)">
                    <i class="hgi hgi-stroke hgi-teaching"></i>
                  </div>
                  <div>
                    <span>Career growth</span>
                    <p>We create opportunities for long-term success and personal growth through continuous skill development.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="cul-mosaic sr">
              <div class="mos-main">
                <img src="{{ asset('assets/frontend/images/isearch-about/thumb-img-01.webp') }}" alt="Office Life" loading="lazy" />
              </div>
              <div class="mos-col">
                <div class="mos-sm" style="background: #f5f0ff">
                  <img src="{{ asset('assets/frontend/images/isearch-about/thumb-img-03.webp') }}" alt="Team Day" loading="lazy" />
                </div>
                <div class="mos-sm" style="background: #fffbeb">
                  <img src="{{ asset('assets/frontend/images/isearch-about/thumb-img-05.webp') }}" alt="Workshop" loading="lazy" />
                </div>
              </div>
              <div class="mos-float">
                <div
                  style="
                    width: 44px;
                    height: 44px;
                    border-radius: 12px;
                    background: linear-gradient(135deg, #2455e8, #0ea5e9);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    flex-shrink: 0;
                  "
                >
                  <i class="hgi hgi-stroke hgi-user-group" style="font-size: 1.5rem; color: #fff"></i>
                </div>
                <div>
                  <strong style="font-family: var(--fh); font-size: 1.4rem; color: var(--ink); display: block; line-height: 1">97%</strong>
                  <span style="font-size: 0.72rem; color: var(--muted); font-weight: 600">Team Satisfaction</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- About Our Team -->
      <section class="our-team-section sec sec-alt">
        <div class="container-fluid">
          <div class="d-flex justify-content-between align-items-center mb-5 flex-wrap gap-3">
            <div>
              <h2 class="heading-1">Meet Our <span class="color-primary">Professionals</span></h2>
            </div>
            <a href="javascript:void();" class="primary-btn"> Our Team <i class="fa-solid fa-arrow-right ms-2"></i> </a>
          </div>
          <div class="swiper ourteam-swiper">
            <div class="swiper-wrapper pb-5">
              <div class="swiper-slide">
                <div class="team-card">
                  <div class="img-wrapper">
                    <img src="{{ asset('assets/frontend/images/professionals/annu-mam.webp') }}" class="card-img-top" alt="Business Growth Specialist" width="360" height="480" loading="lazy" />
                  </div>
                  <div class="card-body text-center">
                    <span class="fw-bold mb-1">Annu Gupta</span>
                    <p>Business Growth Specialist</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="team-card">
                  <div class="img-wrapper">
                    <img src="{{ asset('assets/frontend/images/professionals/nisha-mam.webp') }}" class="card-img-top" alt="Delivery Manager" width="360" height="480" loading="lazy" />
                  </div>
                  <div class="card-body text-center">
                    <span class="fw-bold mb-1">Nisha Garg</span>
                    <p>Delivery Manager</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="team-card">
                  <div class="img-wrapper">
                    <img src="{{ asset('assets/frontend/images/professionals/anil-sir.png') }}" class="card-img-top" alt="UI/UX Designer" width="360" height="480" loading="lazy" />
                  </div>
                  <div class="card-body text-center">
                    <span class="fw-bold mb-1">Anil Kumar</span>
                    <p>UI/UX Designer</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="team-card">
                  <div class="img-wrapper">
                    <img src="{{ asset('assets/frontend/images/professionals/kishan.webp') }}" class="card-img-top" alt="Sr. Developer" width="360" height="480" loading="lazy" />
                  </div>
                  <div class="card-body text-center">
                    <span class="fw-bold mb-1">Kishan Mandal</span>
                    <p>Sr. Developer</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="team-card">
                  <div class="img-wrapper">
                    <img src="{{ asset('assets/frontend/images/professionals/garima-mam.webp') }}" class="card-img-top" alt="Social Media Manager" width="360" height="480" loading="lazy" />
                  </div>
                  <div class="card-body text-center">
                    <span class="fw-bold mb-1">Garima Sharma</span>
                    <p>Social Media Manager</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="team-card">
                  <div class="img-wrapper">
                    <img src="{{ asset('assets/frontend/images/professionals/gaurav.webp') }}" class="card-img-top" alt="SEO Manager" width="360" height="480" loading="lazy" />
                  </div>
                  <div class="card-body text-center">
                    <span class="fw-bold mb-1">Gaurav Gupta</span>
                    <p>SEO Manager</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="team-card">
                  <div class="img-wrapper">
                    <img src="{{ asset('assets/frontend/images/professionals/tushar.webp') }}" class="card-img-top" alt="Performance Marketing Manager" width="360" height="480" loading="lazy" />
                  </div>
                  <div class="card-body text-center">
                    <span class="fw-bold mb-1">Tushar Gupta</span>
                    <p>Performance Marketing Manager</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="team-card">
                  <div class="img-wrapper">
                    <img src="{{ asset('assets/frontend/images/professionals/Soniya-mam.webp') }}" class="card-img-top" alt="Sales Manager" width="360" height="480" loading="lazy" />
                  </div>
                  <div class="card-body text-center">
                    <span class="fw-bold mb-1">Soniya Kulshrestha</span>
                    <p>Sales Manager</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="team-card">
                  <div class="img-wrapper">
                    <img src="{{ asset('assets/frontend/images/professionals/amit-sir.webp') }}" class="card-img-top" alt="Senior Content Writer" width="360" height="480" loading="lazy" />
                  </div>
                  <div class="card-body text-center">
                    <span class="fw-bold mb-1">Amit Kumar</span>
                    <p>Senior Content Writer</p>
                  </div>
                </div>
              </div>
            </div>
            <div id="ourteam-swiper-pagination" class="swiper-pagination"></div>
          </div>
        </div>
      </section>
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
    <script src="{{ asset('assets/frontend/lib/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/new-main.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/compress-js/aboutUsPage.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/new-form-modal.js') }}" defer></script>
    <script src="{{ asset('assets/frontend/js/enquiry.js') }}" defer></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endpush