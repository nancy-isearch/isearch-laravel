<style>
  /* ==========================================================================
     Tab System Section (Healthcare / Industries Details Tabs)
     ========================================================================== */
  .tab-system-wrapper {
    border-block: 1px solid var(--border-light);
    overflow: visible;
  }

  .tab-system {
    display: grid;
    grid-template-columns: 32% 1fr;
    gap: 40px;
    align-items: start;
  }

  .tab-aside {
    position: -webkit-sticky;
    position: sticky;
    top: 110px;
    z-index: 10;
    display: flex;
    flex-direction: column;
    background: var(--bg-secondary);
    border-radius: var(--radius-lg);
    border: 1px solid var(--border-light);
  }

  .tab-wrapper {
    display: flex;
    flex-direction: column;
    gap: 12px;
    padding: 16px 16px 8px;
  }

  .tab-system__label {
    display: block;
    width: 100%;
    padding: 14px 18px;
    background: var(--color-white);
    border-radius: var(--radius-md);
    color: var(--text-body);
    cursor: pointer;
    font-size: 15px;
    font-weight: 500;
    text-align: left;
    border: 1px solid var(--border-light);
    line-height: 1.4;
    transition: var(--transition-smooth);
    user-select: none;
    margin: 0;
  }

  .tab-system__label:hover,
  .tab-system__input:hover + .tab-system__label {
    background: var(--color-primary);
    color: var(--color-white);
    border-color: var(--color-primary);
  }

  .tab-system__input:checked + .tab-system__label {
    background: var(--color-primary);
    color: var(--color-white);
    border-color: transparent;
    font-weight: 600;
  }

  .tab-aside-footer {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 10px 20px 24px;
  }

  .tab-aside-footer img {
    max-width: 120px;
    height: auto;
    display: block;
    margin-bottom: 14px;
  }

  .tab-aside-footer .btn {
    margin-top: 4px;
  }

  .tab-aside-footer p {
    font-size: 13px;
    line-height: 1.5;
    margin-bottom: 0;
  }

  .tab-system__content-wrapper {
    position: relative;
    width: 100%;
    min-height: 480px;
  }

  .tab-system__panel {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    opacity: 0;
    visibility: hidden;
    transform: translateY(15px);
    pointer-events: none;
    z-index: 1;
    transition: opacity 0.3s ease, transform 0.3s ease, visibility 0.3s ease;
  }

  /* CSS Radio Tab Switching Support */
  .tab-system__panel.active {
    position: relative;
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
    pointer-events: auto;
    z-index: 2;
  }

  .tab-content-article h2 {
    font-size: clamp(1.6rem, 2.4vw, 2.15rem);
    line-height: 1.3;
    color: var(--text-dark);
    margin-bottom: 20px;
  }

  .tab-content-article h3.tab-ss-title {
    font-size: 1.15rem;
    color: var(--text-dark);
    margin-bottom: 12px;
  }

  .tab-content-article p {
    font-size: 1rem;
    line-height: 1.75;
    color: var(--text-body);
    margin-bottom: 16px;
  }

  .tab-content-article ul {
    padding-left: 1.25rem;
    margin-block: 10px 20px;
  }

  .tab-content-article ul li {
    font-size: 0.95rem;
    line-height: 1.7;
  }

  @media (max-width: 991px) {
    .tab-system {
      grid-template-columns: 1fr;
      gap: 24px;
    }

    .tab-aside {
      position: static;
      top: auto;
      margin-bottom: 24px;
    }

    .tab-aside-footer img {
      display: none;
    }

    .tab-system__content-wrapper {
      min-height: auto;
    }
  }
</style>

<!-- seo-tab-section -->
<section class="section-clean section-clean--white tab-system-wrapper">
  <div class="container-fluid">
    <div class="tab-system">
      <div class="tab-aside">
        <div class="tab-wrapper">
          @php
              $faq_tabs = $content['tabs_list'] ?? [
                  [
                      'tab_title' => 'How does Technical SEO improve Google rankings?',
                      'tab_heading' => 'How does Technical SEO improve Google rankings?',
                      'tab_content' => '<p>With technical expertise in SEO, we build a foundation for your website. We know the importance of content for attracting traffic, but we also need technical expertise to help Google crawlers find, interpret, and index your pages effectively. By working as one of the Best SEO service providers in Delhi for a decade, we know how to remove the friction between your site’s code and the search algorithm.</p>'
                  ]
              ];
              $tabCount = 1;
          @endphp
          @foreach($faq_tabs as $index => $tab)
          @php 
              $tTitle = $tab['tab_title'] ?? $tab['undefined'] ?? $tab['name'] ?? '';
              if(empty($tTitle) && !empty($tab['undefined'])) { $tTitle = $tab['undefined']; }
          @endphp
          @if(!empty(trim($tTitle)))
          <input id="tab-{{ $tabCount }}" type="radio" name="tab-group" class="tab-system__input" {{ $tabCount === 1 ? 'checked="checked"' : '' }} hidden />
          <label for="tab-{{ $tabCount }}" class="tab-system__label">{{ $tTitle }}</label>
          @php $tabCount++; @endphp
          @endif
          @endforeach
        </div>
        <div class="tab-aside-footer">
          <img src="{{ asset('assets/frontend/images/pages/city-details-for-seo/seo-dual-section-right.webp') }}" alt="SEO Expert" width="120" height="140" loading="lazy" role="presentation" />
          <button type="button" class="btn btn-primary openPopupBtn">Request a quote</button>
          <p class="small mt-3">Stay connected with us for updates, insights, and personalized support.</p>
        </div>
      </div>
      <!-- tab content -->
      <div class="tab-system__content-wrapper">
        @php $tabCount = 1; @endphp
        @foreach($faq_tabs as $index => $tab)
        @php 
            $tTitle = $tab['tab_title'] ?? $tab['undefined'] ?? $tab['name'] ?? '';
            $tHeading = $tab['tab_heading'] ?? $tTitle;
            $tContent = $tab['tab_content'] ?? '';
            if(empty($tTitle) && !empty($tab['undefined'])) { $tTitle = $tab['undefined']; }
        @endphp
        @if(!empty(trim($tTitle)))
        <div id="content-{{ $tabCount }}" class="tab-system__panel {{ $tabCount === 1 ? 'active' : '' }}">
          <article class="tab-content-article">
            <h2 class="fs-3 fw-semibold">{{ $tHeading }}</h2>
            {!! $tContent !!}
          </article>
        </div>
        @php $tabCount++; @endphp
        @endif
        @endforeach
      </div>
    </div>
  </div>
</section>

<!-- Component Interactive Logic -->
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const tabSystems = document.querySelectorAll(".tab-system");
    
    tabSystems.forEach(system => {
      const inputs = system.querySelectorAll(".tab-system__input");
      const panels = system.querySelectorAll(".tab-system__panel");
      const labels = system.querySelectorAll(".tab-system__label");
      const contentWrapper = system.querySelector(".tab-system__content-wrapper");

      function syncActivePanel() {
        const checkedInput = system.querySelector(".tab-system__input:checked");
        if (!checkedInput) return;
        const contentId = "content-" + checkedInput.id.split('-').pop();
        panels.forEach((panel) => {
          if (panel.id === contentId) {
            panel.classList.add("active");
          } else {
            panel.classList.remove("active");
          }
        });
      }

      inputs.forEach((input) => {
        input.addEventListener("change", syncActivePanel);
      });

      labels.forEach((label) => {
        label.addEventListener("click", () => {
          if (window.innerWidth <= 767) {
            setTimeout(() => {
              if (contentWrapper) {
                const offset = contentWrapper.getBoundingClientRect().top + window.scrollY - 100;
                window.scrollTo({ top: offset, behavior: "smooth" });
              }
            }, 80);
          }
        });
      });

      // Initialize state
      syncActivePanel();
    });
  });
</script>
