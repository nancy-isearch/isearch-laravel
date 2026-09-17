<style>
.visually-hidden-toggle {
  position: absolute;
  opacity: 0;
  pointer-events: none;
  width: 0;
  height: 0;
}

.site-topbar {
  background: var(--color-primary);
  color: #94a3b8;
  font-size: 0.8125rem;
  padding: 6px 0;
  border-bottom: 1px solid rgba(255, 255, 255, 0.08);
  position: relative;
  z-index: 1000;
}

.site-topbar .site-topbar__container {
  max-width: var(--container-max-width);
  margin-inline: auto;
  padding-inline: clamp(16px, 2vw, 32px);
}

.site-topbar a {
  color: #cbd5e1;
  display: inline-flex;
  align-items: center;
  gap: 6px;
  text-decoration: none;
  transition: color 0.2s ease;
}

.site-topbar a:hover {
  color: #38bdf8;
}

.site-topbar .topbar-divider {
  width: 1px;
  height: 12px;
  background: rgba(255, 255, 255, 0.2);
  margin: 0 14px;
}

.site-topbar .topbar-social-link {
  color: #ffffff;
}

.site-topbar .topbar-social-link svg {
  color: #ffffff;
  stroke: #ffffff;
  transition: transform 0.2s ease, stroke 0.2s ease, color 0.2s ease;
}

.site-topbar .topbar-social-link:hover {
  color: #38bdf8;
}

.site-topbar .topbar-social-link:hover svg {
  transform: translateY(-1px);
  stroke: #38bdf8;
  color: #38bdf8;
}

.site-header {
  position: sticky;
  top: 0;
  z-index: 9999;
  background: var(--color-white);
  border-bottom: 1px solid rgba(0, 0, 0, 0.06);
  width: 100%;
}

.site-header nav.navbar {
  padding-block: 1rem;
}

.site-header .container-fluid {
  max-width: var(--container-max-width);
  margin-inline: auto;
  padding-inline: clamp(16px, 2vw, 32px);
}

.site-header .navbar-brand-logo {
  font-weight: 600;
  font-size: 20px;
  letter-spacing: -0.3px;
  display: inline-block;
}

.site-header .navbar-brand-logo > img, .site-header .navbar-brand > img {
  width: 220px;
  height: auto;
  display: block;
}

.site-header .navbar-nav-menu .nav-link {
  font-weight: 400;
  padding-inline: 10px;
  color: #000000;
}

.site-header .navbar-nav-menu .nav-link:hover {
  color: var(--color-primary);
}

.site-header .dropdown-caret-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  margin-left: 5px;
  transition: transform 0.25s ease;
  vertical-align: middle;
}

.site-header .dropdown-caret-icon svg {
  display: block;
  stroke: currentColor;
  transition: stroke 0.2s ease, transform 0.25s ease;
}

.site-header .navbar-menu-toggler {
  border: 1px solid rgba(0, 0, 0, 0.15);
  background: #ffffff;
  border-radius: 8px;
  padding: 5px 8px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.2s ease;
}

.site-header .navbar-menu-toggler:hover {
  border-color: var(--color-primary);
  background: var(--gray-50);
}

.site-header .navbar-toggler-icon {
  --icon-size: 24px;
  display: inline-block;
  width: var(--icon-size);
  height: var(--icon-size);
  color: #000;
  fill: currentColor;
}

.site-header .mega-dropdown {
  position: static;
}

@keyframes megaMenuDropdown {
  from {
    opacity: 0;
    transform: translateY(12px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes megaMenuTabFade {
  from {
    opacity: 0;
    transform: translateX(5px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

.site-header .mega-menu-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 14px 24px;
  border-bottom: 1px solid var(--gray-100);
  background: #fff;
  border-radius: 12px 12px 0 0;
}

.site-header .mega-menu-search {
  display: flex;
  align-items: center;
  gap: 8px;
  background: #fff;
  border: 1px solid var(--gray-200);
  border-radius: 8px;
  padding: 6px 12px;
  min-width: 220px;
}

.site-header .mega-menu-search svg, .site-header .mega-menu-search__icon {
  width: 13px;
  height: 13px;
  color: #999;
  stroke: #999;
  fill: none;
  stroke-width: 2;
  stroke-linecap: round;
  stroke-linejoin: round;
  flex-shrink: 0;
}

.site-header .mega-menu-search__input {
  border: none;
  background: transparent;
  font-size: 12px;
  color: #222;
  outline: none;
  width: 100%;
}

.site-header .mega-menu-search__input::placeholder {
  color: #bbb;
}

.site-header .mega-menu-explore-btn {
  font-size: 12px;
  font-weight: 400;
  color: var(--color-primary);
  border: 1px solid var(--color-primary);
  border-radius: 7px;
  padding: 7px 16px;
  text-decoration: none;
  background: transparent;
  transition: background 0.15s, color 0.15s;
  white-space: nowrap;
}

.site-header .mega-menu-explore-btn:hover {
  background: var(--color-primary);
  color: #fff;
}

.site-header .mega-menu-body {
  display: flex;
  min-height: 360px;
}

.site-header .category-tab-radio {
  display: none;
}

.site-header .category-nav-sidebar {
  width: 270px;
  flex-shrink: 0;
  border-right: 1px solid var(--gray-100);
  padding: 12px 8px;
  background: var(--gray-50);
  display: flex;
  flex-direction: column;
  gap: 8px;
}

.site-header .category-nav-btn {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 9px 12px;
  border-radius: 8px;
  cursor: pointer;
  border: 1px solid transparent;
  background: transparent;
  width: 100%;
  text-align: left;
  transition: background 0.12s, border-color 0.12s;
}

.site-header .category-nav-btn:hover {
  background: #fff;
}

.site-header .category-nav-btn.is-active, .site-header #cat-seo:checked ~ .category-nav-sidebar label[for="cat-seo"], .site-header #cat-social:checked ~ .category-nav-sidebar label[for="cat-social"], .site-header #cat-ppc:checked ~ .category-nav-sidebar label[for="cat-ppc"], .site-header #cat-webdev:checked ~ .category-nav-sidebar label[for="cat-webdev"], .site-header #cat-design:checked ~ .category-nav-sidebar label[for="cat-design"] {
  background: #fff;
  border-color: #e5e9f4;
}

.site-header .category-nav-btn.is-active .category-nav-label, .site-header #cat-seo:checked ~ .category-nav-sidebar label[for="cat-seo"] .category-nav-label, .site-header #cat-social:checked ~ .category-nav-sidebar label[for="cat-social"] .category-nav-label, .site-header #cat-ppc:checked ~ .category-nav-sidebar label[for="cat-ppc"] .category-nav-label, .site-header #cat-webdev:checked ~ .category-nav-sidebar label[for="cat-webdev"] .category-nav-label, .site-header #cat-design:checked ~ .category-nav-sidebar label[for="cat-design"] .category-nav-label {
  color: var(--color-primary);
}

.site-header .category-nav-btn.is-active .category-nav-count, .site-header #cat-seo:checked ~ .category-nav-sidebar label[for="cat-seo"] .category-nav-count, .site-header #cat-social:checked ~ .category-nav-sidebar label[for="cat-social"] .category-nav-count, .site-header #cat-ppc:checked ~ .category-nav-sidebar label[for="cat-ppc"] .category-nav-count, .site-header #cat-webdev:checked ~ .category-nav-sidebar label[for="cat-webdev"] .category-nav-count, .site-header #cat-design:checked ~ .category-nav-sidebar label[for="cat-design"] .category-nav-count {
  background: var(--color-primary-light);
  color: var(--color-primary);
}

.site-header .category-nav-icon {
  width: 32px;
  height: 32px;
  border-radius: 7px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}

.site-header .category-nav-icon svg {
  width: 14px;
  height: 14px;
  stroke-width: 2;
  stroke-linecap: round;
  stroke-linejoin: round;
  fill: none;
}

.site-header .category-nav-btn[data-cat="seo"] .category-nav-icon {
  background: var(--cat-seo-bg);
}

.site-header .category-nav-btn[data-cat="seo"] .category-nav-icon svg {
  color: var(--color-primary);
  stroke: var(--color-primary);
}

.site-header .category-nav-btn[data-cat="social"] .category-nav-icon {
  background: var(--cat-social-bg);
}

.site-header .category-nav-btn[data-cat="social"] .category-nav-icon svg {
  color: var(--cat-social);
  stroke: var(--cat-social);
}

.site-header .category-nav-btn[data-cat="ppc"] .category-nav-icon {
  background: var(--cat-ppc-bg);
}

.site-header .category-nav-btn[data-cat="ppc"] .category-nav-icon svg {
  color: var(--cat-ppc);
  stroke: var(--cat-ppc);
}

.site-header .category-nav-btn[data-cat="webdev"] .category-nav-icon {
  background: var(--cat-webdev-bg);
}

.site-header .category-nav-btn[data-cat="webdev"] .category-nav-icon svg {
  color: var(--cat-webdev);
  stroke: var(--cat-webdev);
}

.site-header .category-nav-btn[data-cat="design"] .category-nav-icon {
  background: var(--cat-design-bg);
}

.site-header .category-nav-btn[data-cat="design"] .category-nav-icon svg {
  color: var(--cat-design);
  stroke: var(--cat-design);
}

.site-header .category-nav-label {
  font-size: 14px;
  font-weight: 400;
  color: #1e1e1e;
  white-space: nowrap;
}

.site-header .category-nav-count {
  margin-left: auto;
  font-size: 10px;
  color: #000;
  background: #efefef;
  border-radius: 10px;
  padding: 1px 6px;
}

.site-header .mega-menu-panels {
  flex: 1;
  overflow: hidden;
}

.site-header .mega-menu-panel {
  display: none;
  max-height: 360px;
  overflow-y: scroll;
  padding: 20px 24px;
  animation: megaMenuTabFade 0.15s ease;
}

.site-header .mega-menu-panel::-webkit-scrollbar, .site-header .mega-menu-search-results::-webkit-scrollbar {
  width: 6px;
}

.site-header .mega-menu-panel::-webkit-scrollbar-thumb, .site-header .mega-menu-search-results::-webkit-scrollbar-thumb {
  background: var(--color-primary);
  border-radius: 10px;
}

.site-header .mega-menu-panel.is-active, .site-header #cat-seo:checked ~ .mega-menu-panels #panel-seo, .site-header #cat-social:checked ~ .mega-menu-panels #panel-social, .site-header #cat-ppc:checked ~ .mega-menu-panels #panel-ppc, .site-header #cat-webdev:checked ~ .mega-menu-panels #panel-webdev, .site-header #cat-design:checked ~ .mega-menu-panels #panel-design {
  display: block;
}

.site-header .mega-menu-body.is-searching .mega-menu-panel {
  display: none !important;
}

.site-header .mega-menu-body.is-searching .mega-menu-search-results {
  display: grid !important;
}

.site-header .mega-panel-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding-bottom: 14px;
  margin-bottom: 16px;
  border-bottom: 1px solid var(--gray-100);
}

.site-header .mega-panel-title {
  font-size: 16px;
  font-weight: 600;
  color: var(--text-dark);
}

.site-header .mega-panel-desc {
  font-size: 14px;
  color: var(--text-muted);
  margin-top: 3px;
  line-height: 1.5;
  max-width: 600px;
}

.site-header .service-subgroup {
  margin-bottom: 16px;
}

.site-header .service-subgroup-title {
  font-size: 11px;
  font-weight: 600;
  color: var(--color-primary);
  text-transform: uppercase;
  letter-spacing: 0.08em;
  margin-bottom: 8px;
}

.site-header .service-link-grid {
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 5px;
}

.site-header .service-card-link {
  display: flex;
  align-items: center;
  gap: 8px;
  padding: 8px 10px;
  border-radius: 7px;
  border: 1px solid transparent;
  text-decoration: none !important;
  transition: background 0.12s, border-color 0.12s;
}

.site-header .service-card-link:hover {
  background: var(--color-primary-light);
  border-color: rgba(7, 79, 174, 0.12);
}

.site-header .service-card-dot {
  width: 6px;
  height: 6px;
  border-radius: 50%;
  flex-shrink: 0;
}

.site-header #panel-seo .service-card-dot {
  background: var(--color-primary);
}

.site-header #panel-social .service-card-dot {
  background: var(--cat-social);
}

.site-header #panel-ppc .service-card-dot {
  background: var(--cat-ppc);
}

.site-header #panel-webdev .service-card-dot {
  background: var(--cat-webdev);
}

.site-header #panel-design .service-card-dot {
  background: var(--cat-design);
}

.site-header .service-card-text {
  font-size: 14px;
  color: var(--text-body);
  line-height: 1.3;
}

.site-header .service-card-link:hover .service-card-text {
  color: var(--color-primary);
}

.site-header .service-card-badge {
  font-size: 9px;
  font-weight: 600;
  background: var(--color-primary-light);
  color: var(--color-primary);
  border-radius: 4px;
  padding: 1px 5px;
  margin-left: auto;
  flex-shrink: 0;
}

.site-header .mega-menu-search-results {
  display: none;
  grid-template-columns: repeat(2, 1fr);
  gap: 0 40px;
  padding: 20px 24px;
  max-height: 360px;
  overflow-y: scroll;
}

.site-header .search-result-item {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 8px 10px;
  border-radius: 7px;
  text-decoration: none !important;
  transition: background 0.1s;
}

.site-header .search-result-item:hover {
  background: #f5f7fc;
}

.site-header .search-result-item__dot {
  width: 7px;
  height: 7px;
  border-radius: 50%;
  flex-shrink: 0;
}

.site-header .search-result-label {
  font-size: 13px;
  color: #222;
}

.site-header .search-result-category {
  font-size: 11px;
  color: #999;
  margin-left: auto;
  white-space: nowrap;
}

.site-header .search-result-empty {
  font-size: 14px;
  color: #aaa;
}

.site-header .mega-menu-footer {
  border-top: 1px solid var(--gray-100);
  padding: 10px 24px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: var(--gray-50);
  border-radius: 0 0 12px 12px;
}

.site-header .mega-menu-tag-list {
  display: flex;
  gap: 6px;
  flex-wrap: wrap;
}

.site-header .mega-menu-tag {
  font-size: 11px;
  color: #000;
  padding: 4px 11px;
  border: 1px solid var(--gray-200);
  border-radius: 20px;
  cursor: pointer;
  background: #fff;
  text-decoration: none;
  transition: all 0.12s;
}

.site-header .mega-menu-tag:hover {
  border-color: var(--color-primary);
  color: var(--color-primary);
  background: var(--color-primary-light);
}

.site-header .mega-menu-footer-note {
  font-size: 11px;
  color: #000;
}

.site-header .ai-solutions-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.site-header .mega-heading-title {
  font-size: 18px;
  font-weight: 600;
}

.site-header .mega-heading-subtitle {
  margin-top: 6px;
  font-size: 14px;
  opacity: 0.75;
  line-height: 1.5;
}

.site-header .ai-service-card {
  display: flex;
  gap: 12px;
  padding: 14px;
  border-radius: 18px;
  text-decoration: none;
  border: 1px solid rgba(0, 0, 0, 0.06);
  transition: 0.25s;
  background: #fff;
  color: #2a2a2a;
}

.site-header .ai-service-card:hover {
  transform: translateY(-3px);
  box-shadow: 0 16px 40px rgba(0, 0, 0, 0.08);
}

.site-header .ai-service-card__icon {
  width: 42px;
  height: 42px;
  border-radius: 14px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(0, 0, 0, 0.04);
  font-size: 18px;
  flex-shrink: 0;
  transition: background 0.2s ease, transform 0.2s ease;
}

.site-header .ai-service-card__icon svg {
  width: 22px;
  height: 22px;
  stroke: var(--color-primary);
  color: var(--color-primary);
  transition: transform 0.2s ease;
}

.site-header .ai-service-card:hover .ai-service-card__icon {
  background: var(--color-primary-light);
}

.site-header .ai-service-card:hover .ai-service-card__icon svg {
  transform: scale(1.08);
}

.site-header .ai-service-card__title {
  font-weight: 600;
  font-size: 14px;
  color: #111;
}

.site-header .ai-service-card__desc {
  font-size: 13px;
  opacity: 0.7;
}

.site-header .mega-promo-card {
  background: rgba(0, 0, 0, 0.03);
  border-radius: 22px;
  padding: 18px;
  border: 1px solid rgba(0, 0, 0, 0.06);
}

.site-header .mega-promo-card__title {
  font-weight: 600;
  font-size: 16px;
}

.site-header .mega-promo-card__desc {
  margin-top: 6px;
  font-size: 14px;
  opacity: 0.75;
  line-height: 1.5;
}

.site-header .mega-promo-card__note {
  font-size: 13px;
  opacity: 0.7;
}

.site-header .promo-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 12px 16px;
  border-radius: 14px;
  font-weight: 600;
  text-decoration: none;
  transition: 0.25s;
}

.site-header .promo-btn--primary {
  background: #111;
  color: #fff;
}

.site-header .promo-btn--primary:hover {
  transform: translateY(-2px);
  color: #fff;
}

.site-header .promo-btn--outline {
  border: 1px solid rgba(0, 0, 0, 0.12);
  color: #111;
  background: transparent;
}

.site-header .promo-btn--outline:hover {
  background: rgba(0, 0, 0, 0.04);
}

.site-header .site-navbar-drawer {
  display: none;
}

.nav-drawer-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 1040;
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
}

#menu-toggle:checked ~ .nav-drawer-backdrop {
  opacity: 1;
  visibility: visible;
}

body:has(#menu-toggle:checked) {
  overflow: hidden;
}

.site-header label.navbar-menu-toggler, .site-header label.mobile-drawer-close, .site-header label.mobile-accordion-toggle {
  cursor: pointer;
  user-select: none;
}

#menu-toggle:focus-visible ~ .site-header label.navbar-menu-toggler {
  outline: 2px solid var(--color-primary);
  outline-offset: 2px;
}

.site-header .mobile-drawer-socials {
  border-top: 1px solid #f1f5f9;
}

.site-header .mobile-social-link {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 36px;
  height: 36px;
  border-radius: 50%;
  background: var(--gray-50);
  color: #475569;
  border: 1px solid var(--gray-200);
  transition: all 0.2s ease;
}

.site-header .mobile-social-link:hover {
  background: var(--color-primary-light);
  color: var(--color-primary);
  border-color: var(--color-primary);
}

  @media (min-width: 992px) {
    .site-header .navbar-menu-toggler {
      display: none !important;
    }

    .site-header .site-navbar-drawer {
      display: flex;
      align-items: center;
      justify-content: flex-end;
      flex-grow: 1;
      margin-right: 10px;
    }

    .site-header .mega-dropdown-menu {
      width: 100%;
      left: 0;
      right: 0;
      top: 100%;
      border: none;
      border-radius: 0;
      padding-top: 26px;
      margin-top: -8px;
      background: transparent;
    }

    .site-header .mega-dropdown-card {
      background: #fff;
      border: 1px solid rgba(0, 0, 0, 0.06);
      border-radius: 22px;
      padding: 22px;
      box-shadow: 0 24px 60px rgba(0, 0, 0, 0.12);
      margin-top: 12px;
    }

    .site-header .mega-dropdown:hover .dropdown-caret-icon {
      transform: rotate(180deg);
    }

    .site-header .mega-dropdown:hover .mega-dropdown-menu {
      display: block;
      animation: megaMenuDropdown 0.25s ease forwards;
    }

  }

  @media (max-width: 1024px) {
    .site-header .navbar-brand-logo > img, .site-header .navbar-brand > img{
      width: 200px;
      height: auto;
    }
    .site-header .navbar-nav-menu .nav-link{
      padding-inline: 6px;
    }
  }
  @media (max-width: 991.98px) {
    .site-header nav.navbar {
      padding-block: 0.5rem;
    }

    .site-header .navbar-brand-logo > img {
      width: 180px;
      height: auto;
    }

    .site-header .site-navbar-drawer {
      display: flex;
      position: fixed;
      top: 0;
      right: -100%;
      width: 100%;
      max-width: 460px;
      height: 100vh;
      background: #fff;
      z-index: 1050;
      transition: right 0.3s ease-in-out;
      flex-direction: column;
      padding: 18px;
      overflow-y: auto;
    }

    #menu-toggle:checked ~ .site-header .site-navbar-drawer {
      box-shadow: -4px 0 24px rgba(0, 0, 0, 0.15);
      right: 0;
    }

    .site-header .mobile-drawer-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding-bottom: 16px;
      border-bottom: 1px solid #eee;
      margin-bottom: 16px;
    }

    .site-header .mobile-drawer-title {
      font-weight: 600;
      font-size: 18px;
      color: #111;
    }

    .site-header .mobile-drawer-close {
      width: 36px;
      height: 36px;
      background: #ffffff;
      border: 1px solid rgba(0, 0, 0, 0.12);
      border-radius: 8px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      color: #1e293b;
      padding: 0;
      line-height: 1;
      transition: all 0.2s ease;
    }

    .site-header .mobile-drawer-close:hover {
      background: var(--gray-50);
      border-color: var(--color-primary);
      color: var(--color-primary);
    }

    .site-header .mobile-drawer-close svg {
      width: 20px;
      height: 20px;
      stroke: currentColor;
      display: block;
    }

    .site-header .navbar-nav-menu {
      display: flex;
      flex-direction: column;
      width: 100%;
      margin: 0;
      padding: 0;
      list-style: none;
    }

    .site-header .navbar-nav-menu .nav-item {
      width: 100%;
      position: relative;
    }

    .site-header .navbar-nav-menu .nav-link, .site-header .mobile-accordion-toggle {
      display: block;
      padding: 14px 0;
      font-weight: 600;
      text-decoration: none;
      color: rgba(0, 0, 0, 0.8);
      border-bottom: 1px solid rgba(0, 0, 0, 0.06);
      background: transparent;
      border-top: none;
      border-left: none;
      border-right: none;
      width: 100%;
      text-align: left;
      cursor: pointer;
      font-size: 15px;
      transition: color 0.2s;
    }

    .site-header .navbar-nav-menu .nav-link:hover, .site-header .mobile-accordion-toggle:hover {
      color: var(--color-primary);
    }

    .site-header .mobile-accordion-toggle {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .site-header .mobile-accordion-toggle .dropdown-caret-icon {
      font-size: 14px;
      transition: transform 0.3s ease;
      display: inline-block;
    }

    .site-header .mega-dropdown-menu {
      display: none;
      position: static;
      width: 100%;
      max-height: 0;
      overflow: hidden;
      padding: 0;
      margin: 0;
      box-shadow: none;
      background: transparent;
      border: none;
    }

    .site-header .mobile-accordion-checkbox:checked ~ .mega-dropdown-menu {
      display: block;
      max-height: none;
      overflow: visible;
    }

    .site-header .mobile-accordion-checkbox:checked + .mobile-accordion-toggle .dropdown-caret-icon {
      transform: rotate(180deg);
    }

    .site-header .mega-menu-header, .site-header .mega-menu-footer {
      display: none;
    }

    .site-header .mega-menu-body {
      flex-direction: column;
      min-height: auto;
      padding: 10px 0;
    }

    .site-header .category-nav-sidebar {
      width: 100%;
      border-right: none;
      background: transparent;
      padding: 4px 8px 12px 8px;
      display: flex;
      flex-direction: row;
      gap: 8px;
      overflow-x: auto;
      scroll-snap-type: x mandatory;
      scroll-padding: 8px;
      -webkit-overflow-scrolling: touch;
      scrollbar-width: none;
    }

    .site-header .category-nav-sidebar::-webkit-scrollbar {
      display: none;
    }

    .site-header .category-nav-btn {
      flex: 0 0 auto;
      scroll-snap-align: start;
      padding: 10px 14px;
      border-radius: 8px;
      border: 1px solid rgba(0, 0, 0, 0.05);
      background: var(--gray-50);
      transition: all 0.2s;
      width: auto;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .site-header .category-nav-btn:hover {
      background: #fff;
      border-color: var(--gray-200);
    }

    .site-header .mega-menu-panels {
      width: 100%;
      padding: 0;
    }

    .site-header .mega-menu-panel {
      padding: 12px 4px;
      max-height: none;
      overflow-y: visible;
    }

    .site-header .mega-panel-header {
      flex-direction: column;
      align-items: flex-start;
      gap: 6px;
      padding-bottom: 8px;
      margin-bottom: 12px;
      border-bottom: 1px solid #eee;
    }

    .site-header .mega-panel-title {
      font-size: 15px;
      font-weight: 600;
    }

    .site-header .mega-panel-desc {
      font-size: 12px;
      color: #666;
    }

    .site-header .service-subgroup-title {
      font-size: 10px;
      font-weight: 600;
      margin-bottom: 6px;
      color: var(--color-primary);
    }

    .site-header .service-link-grid {
      grid-template-columns: 1fr;
      gap: 2px;
      margin-bottom: 14px;
    }

    .site-header .service-card-link {
      padding: 6px 8px;
      border-radius: 6px;
    }

    .site-header .service-card-text {
      font-size: 13px;
      color: #444;
    }

    .site-header .service-card-badge {
      padding: 1px 4px;
      font-size: 8px;
      border-radius: 3px;
    }

    .site-header .mega-dropdown-card {
      background: transparent;
      border: none;
      border-radius: 0;
      padding: 0;
      box-shadow: none;
      margin-top: 0;
    }

    .site-header .mega-heading-title {
      font-size: 15px;
      font-weight: 600;
      color: #111;
    }

    .site-header .mega-heading-subtitle {
      font-size: 12px;
      margin-top: 4px;
      color: #666;
    }

    .site-header .ai-service-card {
      padding: 10px;
      border-radius: 12px;
      margin-bottom: 8px;
      border: 1px solid rgba(0, 0, 0, 0.05);
      background: #fff;
    }

    .site-header .ai-service-card__title {
      font-size: 13px;
      font-weight: 600;
    }

    .site-header .ai-service-card__desc {
      font-size: 12px;
      color: #666;
    }

    .site-header .mega-promo-card {
      display: none;
    }

    .site-header .ai-solutions-header {
      display: none;
    }

  }

  @media (max-width: 768px) {
    .site-topbar {
      font-size: 0.72rem;
    }

    .site-topbar .site-topbar__container {
      justify-content: center !important;
      padding-inline: 8px;
    }

    .site-topbar .site-topbar__left {
      width: 100%;
      justify-content: center;
      gap: 6px;
      flex-wrap: nowrap;
    }

    .site-topbar .topbar-item {
      font-size: 0.72rem;
      white-space: nowrap;
      gap: 4px;
    }

    .site-topbar .topbar-icon {
      width: 12px;
      height: 12px;
      flex-shrink: 0;
    }

    .site-topbar .topbar-divider {
      margin: 0 8px;
      height: 10px;
      flex-shrink: 0;
    }

    .site-topbar .site-topbar__right {
      display: none !important;
    }

  }

  @media (max-width: 575.98px) {
    .site-header nav.navbar {
      padding-block: 0.35rem;
    }

    .site-header .navbar-brand-logo > img {
      width: 180px;
      height: auto;
    }

  }

  @media (max-width: 380px) {
    .site-topbar {
      font-size: 0.65rem;
      padding: 5px 0;
    }

    .site-topbar .topbar-item {
      font-size: 0.65rem;
      gap: 3px;
    }

    .site-topbar .topbar-icon {
      width: 11px;
      height: 11px;
    }

    .site-topbar .topbar-divider {
      margin: 0 4px;
    }

  }
    </style>


    <!-- menu toggle checkbox and backdrop -->
    <input type="checkbox" id="menu-toggle" class="visually-hidden-toggle" />
    <label for="menu-toggle" class="nav-drawer-backdrop"></label>

    <!-- Topbar (Non-Sticky) -->
    <div id="ss-topbar" class="site-topbar">
      <div class="container-fluid site-topbar__container d-flex justify-content-between align-items-center">
        <div class="site-topbar__left d-flex align-items-center">
          <a href="tel:+442039962018" class="topbar-item">
            <svg class="topbar-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><use href="{{ asset('assets/icons.svg') }}#call-02-stroke-rounded"></use></svg>
            <span>+44 20 3996 2018</span>
          </a>
          <span class="topbar-divider"></span>
          <a href="mailto:sales@isearchsolution.com" class="topbar-item">
            <svg class="topbar-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><use href="{{ asset('assets/icons.svg') }}#mail-01-stroke-rounded"></use></svg>
            <span>sales@isearchsolution.com</span>
          </a>
        </div>
        <div class="site-topbar__right d-flex align-items-center gap-3">
          <a href="https://in.linkedin.com/company/isearch-solution" target="_blank" class="topbar-social-link" aria-label="LinkedIn">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><use href="{{ asset('assets/icons.svg') }}#linkedin-02-stroke-rounded"></use></svg>
          </a>
          <a href="https://www.instagram.com/isearchsolution/" target="_blank" class="topbar-social-link" aria-label="Instagram">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><use href="{{ asset('assets/icons.svg') }}#instagram-stroke-rounded"></use></svg>
          </a>
          <a href="https://x.com/isearchsolution" target="_blank" class="topbar-social-link" aria-label="Twitter">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><use href="{{ asset('assets/icons.svg') }}#new-twitter-stroke-rounded"></use></svg>
          </a>
          <a href="https://www.facebook.com/isearchsolution" target="_blank" class="topbar-social-link" aria-label="Facebook">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><use href="{{ asset('assets/icons.svg') }}#facebook-02-stroke-rounded"></use></svg>
          </a>
          <a href="https://www.youtube.com/@isearchsolution" target="_blank" class="topbar-social-link" aria-label="YouTube">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><use href="{{ asset('assets/icons.svg') }}#youtube-header-stroke-rounded"></use></svg>
          </a>
        </div>
      </div>
    </div>

    <!-- navbar -->
    <header id="ss-navbar" class="site-header">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand navbar-brand-logo" href="/" aria-label="Go to Homepage">
            <img src="{{ asset('assets/frontend/svg/isearch-solution-logo.svg') }}" alt="iSearch solution logo" width="220" height="40" />
          </a>
          <label for="menu-toggle" class="navbar-toggler navbar-menu-toggler" aria-label="Open navigation menu">
            <svg class="navbar-toggler-icon"><use href="{{ asset('assets/icons.svg') }}#menu-01-stroke-rounded"></use></svg>
          </label>
          <div class="site-navbar-drawer" id="ssNavbarMenu">
            <!-- Mobile Menu Header -->
            <div class="mobile-drawer-header d-lg-none">
              <span class="mobile-drawer-title">Menu</span>
              <label for="menu-toggle" class="mobile-drawer-close" aria-label="Close menu">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <use href="{{ asset('assets/icons.svg') }}#cancel-01-stroke-rounded"></use>
                </svg>
              </label>
            </div>

            <!-- Main Menu List -->
            <ul class="navbar-nav navbar-nav-menu">
              <!-- Home Link (Mobile Only) -->
              <li class="nav-item d-lg-none">
                <a class="nav-link" href="/" aria-label="Go to Homepage">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/corporate/who-we-are.html">About Us</a>
              </li>
              <li class="nav-item dropdown mega-dropdown">
                <!-- Checkbox for mobile accordion toggle -->
                <input type="checkbox" id="drop-services" class="mobile-accordion-checkbox visually-hidden-toggle d-lg-none" />
                <!-- Label for mobile click toggle -->
                <label for="drop-services" class="nav-link mobile-accordion-toggle d-lg-none">
                  Services <span class="dropdown-caret-icon"><svg width="10" height="5" viewBox="0 0 10 6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><use href="{{ asset('assets/icons.svg') }}#caret-down-stroke-rounded"></use></svg></span>
                </label>
                <!-- Anchor link for desktop hover -->
                <a class="nav-link d-none d-lg-inline-block" href="/our-services.html">
                  Services <span class="dropdown-caret-icon"><svg width="10" height="5" viewBox="0 0 10 6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><use href="{{ asset('assets/icons.svg') }}#caret-down-stroke-rounded"></use></svg></span>
                </a>
                <div class="dropdown-menu mega-dropdown-menu">
                  <div class="container mega-dropdown-card p-0">
                    <!-- Top bar -->
                    <div class="mega-menu-header">
                      <div class="mega-menu-search">
                        <svg class="mega-menu-search__icon" viewBox="0 0 24 24"><use href="{{ asset('assets/icons.svg') }}#search-zoom-stroke-rounded"></use></svg>
                        <input type="text" id="mm-search" class="mega-menu-search__input" placeholder="Search services..." autocomplete="off" />
                      </div>
                      <a class="mega-menu-explore-btn" href="/our-services.html">View all services &rarr;</a>
                    </div>

                    <!-- Body -->
                    <div class="mega-menu-body">
                      <!-- Tab Inputs -->
                      <input type="radio" id="cat-seo" name="mega-menu-tabs" class="category-tab-radio" checked />
                      <input type="radio" id="cat-social" name="mega-menu-tabs" class="category-tab-radio" />
                      <input type="radio" id="cat-ppc" name="mega-menu-tabs" class="category-tab-radio" />
                      <input type="radio" id="cat-webdev" name="mega-menu-tabs" class="category-tab-radio" />
                      <input type="radio" id="cat-design" name="mega-menu-tabs" class="category-tab-radio" />

                      <!-- Sidebar -->
                      <nav class="category-nav-sidebar" aria-label="Service categories">
                        <label for="cat-seo" class="category-nav-btn" data-cat="seo">
                          <div class="category-nav-icon">
                            <svg viewBox="0 0 24 24"><use href="{{ asset('assets/icons.svg') }}#trending-up-stroke-rounded"></use></svg>
                          </div>
                          <span class="category-nav-label">SEO</span><span class="category-nav-count">10</span>
                        </label>
                        <label for="cat-social" class="category-nav-btn" data-cat="social">
                          <div class="category-nav-icon">
                            <svg viewBox="0 0 24 24"><use href="{{ asset('assets/icons.svg') }}#coffee-cup-stroke-rounded"></use></svg>
                          </div>
                          <span class="category-nav-label">Social Media</span><span class="category-nav-count">10</span>
                        </label>
                        <label for="cat-ppc" class="category-nav-btn" data-cat="ppc">
                          <div class="category-nav-icon">
                            <svg viewBox="0 0 24 24"><use href="{{ asset('assets/icons.svg') }}#monitor-trend-stroke-rounded"></use></svg>
                          </div>
                          <span class="category-nav-label">PPC & Ads</span><span class="category-nav-count">9</span>
                        </label>
                        <label for="cat-webdev" class="category-nav-btn" data-cat="webdev">
                          <div class="category-nav-icon">
                            <svg viewBox="0 0 24 24"><use href="{{ asset('assets/icons.svg') }}#code-bracket-stroke-rounded"></use></svg>
                          </div>
                          <span class="category-nav-label">Web Development</span><span class="category-nav-count">12</span>
                        </label>
                        <label for="cat-design" class="category-nav-btn" data-cat="design">
                          <div class="category-nav-icon">
                            <svg viewBox="0 0 24 24"><use href="{{ asset('assets/icons.svg') }}#layout-dashboard-stroke-rounded"></use></svg>
                          </div>
                          <span class="category-nav-label">UI/UX Design</span><span class="category-nav-count">7</span>
                        </label>
                      </nav>

                      <!-- Panels -->
                      <div class="mega-menu-panels">
                        <div class="mega-menu-search-results" id="mm-search-results"></div>

                        <!-- SEO -->
                        <div class="mega-menu-panel" id="panel-seo">
                          <div class="mega-panel-header">
                            <div>
                              <div class="mega-panel-title">Search Engine Optimization</div>
                              <div class="mega-panel-desc">Improve rankings, drive organic traffic, and dominate search results.</div>
                            </div>
                          </div>
                          <div class="service-subgroup">
                            <div class="service-subgroup-title">Core Services</div>
                            <div class="service-link-grid">
                              <a class="service-card-link" href="/search-engine-optimization/seo-services.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">SEO Services</span></a
                              >
                              <a class="service-card-link" href="/search-engine-optimization/seo-consultancy.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">SEO Consultancy</span></a
                              >
                              <a class="service-card-link" href="/search-engine-optimization/technical-seo.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">Technical SEO</span></a
                              >
                              <a class="service-card-link" href="/search-engine-optimization/on-page-seo.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">On-Page SEO</span></a
                              >
                              <a class="service-card-link" href="/search-engine-optimization/off-page-seo.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">Off-Page SEO</span></a
                              >
                              <a class="service-card-link" href="/search-engine-optimization/local-seo.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">Local SEO</span><span class="service-card-badge">Popular</span></a
                              >
                            </div>
                          </div>
                          <div class="service-subgroup">
                            <div class="service-subgroup-title">Packages & Research</div>
                            <div class="service-link-grid">
                              <a class="service-card-link" href="/search-engine-optimization/seo-packages.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">SEO Packages</span></a
                              >
                              <a class="service-card-link" href="/search-engine-optimization/seo-audit.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">SEO Audit</span></a
                              >
                              <a class="service-card-link" href="/search-engine-optimization/keyword-research.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">Keyword Research</span></a
                              >
                              <a class="service-card-link" href="/search-engine-optimization/link-building.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">Link Building</span></a
                              >
                            </div>
                          </div>
                        </div>

                        <!-- Social Media -->
                        <div class="mega-menu-panel" id="panel-social">
                          <div class="mega-panel-header">
                            <div>
                              <div class="mega-panel-title">Social Media Marketing</div>
                              <div class="mega-panel-desc">Build brand authority and community across every platform.</div>
                            </div>
                          </div>
                          <div class="service-subgroup">
                            <div class="service-subgroup-title">Organic Growth</div>
                            <div class="service-link-grid">
                              <a class="service-card-link" href="/social-media/social-media-optimization.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">SMO</span></a
                              >
                              <a class="service-card-link" href="/social-media/smo-strategy.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">SMO Strategy</span></a
                              >
                              <a class="service-card-link" href="/social-media/instagram-marketing.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">Instagram Marketing</span></a
                              >
                              <a class="service-card-link" href="/social-media/smo-linkedIn.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">LinkedIn Marketing</span></a
                              >
                              <a class="service-card-link" href="/social-media/twitter-marketing.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">Twitter/X Marketing</span></a
                              >
                              <a class="service-card-link" href="/social-media/youtube-marketing.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">YouTube Marketing</span></a
                              >
                            </div>
                          </div>
                          <div class="service-subgroup">
                            <div class="service-subgroup-title">Paid Campaigns</div>
                            <div class="service-link-grid">
                              <a class="service-card-link" href="/search-engine-marketing/facebook-ad-campaign.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">Facebook Marketing</span><span class="service-card-badge">Hot</span></a
                              >
                              <a class="service-card-link" href="/social-media/facebook-ads.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">Facebook Ads</span></a
                              >
                              <a class="service-card-link" href="/social-media/influencer-marketing.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">Influencer Marketing</span></a
                              >
                              <a class="service-card-link" href="/social-media/community-management.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">Community Management</span></a
                              >
                            </div>
                          </div>
                        </div>

                        <!-- PPC -->
                        <div class="mega-menu-panel" id="panel-ppc">
                          <div class="mega-panel-header">
                            <div>
                              <div class="mega-panel-title">PPC & Paid Advertising</div>
                              <div class="mega-panel-desc">Performance campaigns with measurable ROI on every rupee spent.</div>
                            </div>
                          </div>
                          <div class="service-link-grid">
                            <a class="service-card-link" href="/search-engine-marketing/google-ads.html"
                              ><div class="service-card-dot"></div>
                              <span class="service-card-text">Google Ads</span><span class="service-card-badge">Popular</span></a
                            >
                            <a class="service-card-link" href="/search-engine-marketing/pay_per_click_management.html"
                              ><div class="service-card-dot"></div>
                              <span class="service-card-text">PPC Management</span></a
                            >
                            <a class="service-card-link" href="/search-engine-marketing/remarketing.html"
                              ><div class="service-card-dot"></div>
                              <span class="service-card-text">Remarketing</span></a
                            >
                            <a class="service-card-link" href="/search-engine-marketing/display-advertising.html"
                              ><div class="service-card-dot"></div>
                              <span class="service-card-text">Display Advertising</span></a
                            >
                            <a class="service-card-link" href="/search-engine-marketing/shopping-ads.html"
                              ><div class="service-card-dot"></div>
                              <span class="service-card-text">Shopping Ads</span></a
                            >
                            <a class="service-card-link" href="/search-engine-marketing/video-ads.html"
                              ><div class="service-card-dot"></div>
                              <span class="service-card-text">Video Ads</span></a
                            >
                            <a class="service-card-link" href="/search-engine-marketing/email-marketing.html"
                              ><div class="service-card-dot"></div>
                              <span class="service-card-text">Email Marketing</span></a
                            >
                            <a class="service-card-link" href="/search-engine-marketing/landing-page-design.html"
                              ><div class="service-card-dot"></div>
                              <span class="service-card-text">Landing Page Design</span></a
                            >
                            <a class="service-card-link" href="/search-engine-marketing/conversion-tracking.html"
                              ><div class="service-card-dot"></div>
                              <span class="service-card-text">Conversion Tracking</span></a
                            >
                          </div>
                        </div>

                        <!-- Web Dev -->
                        <div class="mega-menu-panel" id="panel-webdev">
                          <div class="mega-panel-header">
                            <div>
                              <div class="mega-panel-title">Web Development</div>
                              <div class="mega-panel-desc">Scalable, fast, and beautiful websites built to convert visitors.</div>
                            </div>
                          </div>
                          <div class="service-subgroup">
                            <div class="service-subgroup-title">Design & Frontend</div>
                            <div class="service-link-grid">
                              <a class="service-card-link" href="/web-design/website-design.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">Website Design</span></a
                              >
                              <a class="service-card-link" href="/web-design/psd-to-html.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">PSD to HTML</span></a
                              >
                              <a class="service-card-link" href="/web-design/responsive-design.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">Responsive Design</span></a
                              >
                              <a class="service-card-link" href="/web-design/landing-page.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">Landing Page Dev</span></a
                              >
                            </div>
                          </div>
                          <div class="service-subgroup">
                            <div class="service-subgroup-title">Backend & Platforms</div>
                            <div class="service-link-grid">
                              <a class="service-card-link" href="/website-development/cms-solutions.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">CMS Development</span></a
                              >
                              <a class="service-card-link" href="/website-development/wordpress-development.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">WordPress Dev</span><span class="service-card-badge">Popular</span></a
                              >
                              <a class="service-card-link" href="/website-development/ecommerce-website-development.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">eCommerce Dev</span></a
                              >
                              <a class="service-card-link" href="/website-development/payment-gateway-integration-services.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">Payment Integration</span></a
                              >
                              <a class="service-card-link" href="/website-development/web-maintenance.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">Web Maintenance</span></a
                              >
                              <a class="service-card-link" href="/website-development/speed-optimization.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">Speed Optimization</span></a
                              >
                              <a class="service-card-link" href="/website-development/api-integration.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">API Integration</span></a
                              >
                              <a class="service-card-link" href="/website-development/custom-web-apps.html"
                                ><div class="service-card-dot"></div>
                                <span class="service-card-text">Custom Web Apps</span></a
                              >
                            </div>
                          </div>
                        </div>

                        <!-- Design -->
                        <div class="mega-menu-panel" id="panel-design">
                          <div class="mega-panel-header">
                            <div>
                              <div class="mega-panel-title">UI/UX Design</div>
                              <div class="mega-panel-desc">Interfaces that feel effortless and keep users coming back.</div>
                            </div>
                          </div>
                          <div class="service-link-grid">
                            <a class="service-card-link" href="/web-design/ui-design.html"
                              ><div class="service-card-dot"></div>
                              <span class="service-card-text">UI Design</span></a
                            >
                            <a class="service-card-link" href="/web-design/ux-design.html"
                              ><div class="service-card-dot"></div>
                              <span class="service-card-text">UX Design</span></a
                            >
                            <a class="service-card-link" href="/web-design/wireframing.html"
                              ><div class="service-card-dot"></div>
                              <span class="service-card-text">Wireframing</span></a
                            >
                            <a class="service-card-link" href="/web-design/prototyping.html"
                              ><div class="service-card-dot"></div>
                              <span class="service-card-text">Prototyping</span></a
                            >
                            <a class="service-card-link" href="/web-design/user-research.html"
                              ><div class="service-card-dot"></div>
                              <span class="service-card-text">User Research</span></a
                            >
                            <a class="service-card-link" href="/web-design/logo-design.html"
                              ><div class="service-card-dot"></div>
                              <span class="service-card-text">Logo Design</span><span class="service-card-badge">New</span></a
                            >
                            <a class="service-card-link" href="/web-design/brand-identity.html"
                              ><div class="service-card-dot"></div>
                              <span class="service-card-text">Brand Identity</span></a
                            >
                          </div>
                        </div>
                      </div>
                      <!-- /mm-panels -->
                    </div>
                    <!-- /mm-body -->

                    <!-- Footer -->
                    <div class="mega-menu-footer">
                      <div class="mega-menu-tag-list">
                        <a class="mega-menu-tag" href="/search-engine-optimization/seo-packages.html">SEO Packages</a>
                        <a class="mega-menu-tag" href="/free-audit.html">Free Audit</a>
                        <a class="mega-menu-tag" href="/case-studies.html">Case Studies</a>
                        <a class="mega-menu-tag" href="/get-quote.html">Get a Quote</a>
                        <a class="mega-menu-tag" href="/pricing.html">Pricing</a>
                      </div>
                      <span class="mega-menu-footer-note">80+ services &bull; 10 categories</span>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown mega-dropdown">
                <!-- Checkbox for mobile accordion toggle -->
                <input type="checkbox" id="drop-ai" class="mobile-accordion-checkbox visually-hidden-toggle d-lg-none" />
                <!-- Label for mobile click toggle -->
                <label for="drop-ai" class="nav-link mobile-accordion-toggle d-lg-none">
                  AI Solutions <span class="dropdown-caret-icon"><svg width="10" height="5" viewBox="0 0 10 6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><use href="{{ asset('assets/icons.svg') }}#caret-down-stroke-rounded"></use></svg></span>
                </label>
                <!-- Anchor link for desktop hover -->
                <a class="nav-link d-none d-lg-inline-block" href="#">
                  AI Solutions <span class="dropdown-caret-icon"><svg width="10" height="5" viewBox="0 0 10 6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><use href="{{ asset('assets/icons.svg') }}#caret-down-stroke-rounded"></use></svg></span>
                </a>
                <div class="dropdown-menu mega-dropdown-menu">
                  <div class="container mega-dropdown-card">
                    <div class="row g-4">
                      <div class="col-12 ai-solutions-header">
                        <div>
                          <div class="mega-heading-title">Our AI Solutions</div>
                          <div class="mega-heading-subtitle">Full-stack digital growth solutions for brands that want results.</div>
                        </div>
                        <a href="/our-services.html" class="btn btn-secondary"> Explore all Solutions </a>
                      </div>
                      <div class="col-12">
                        <div class="row">
                          <div class="col-lg-8">
                            <div class="row g-1 g-lg-3 mt-1 mt-lg-0">
                              <div class="col-md-6">
                                <a class="ai-service-card" href="/ai-solutions/ai-seo-services.html">
                                  <div class="ai-service-card__icon">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><use href="{{ asset('assets/icons.svg') }}#chart-increase-stroke-rounded"></use></svg>
                                  </div>
                                  <div>
                                    <div class="ai-service-card__title">AI SEO Services</div>
                                    <div class="ai-service-card__desc">Scale rankings with smart organic growth.</div>
                                  </div>
                                </a>
                              </div>
                              <div class="col-md-6">
                                <a class="ai-service-card" href="/ai-solutions/aeo-services.html">
                                  <div class="ai-service-card__icon">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><use href="{{ asset('assets/icons.svg') }}#bubble-chat-spark-01-stroke-rounded"></use></svg>
                                  </div>
                                  <div>
                                    <div class="ai-service-card__title">AEO Services</div>
                                    <div class="ai-service-card__desc">Dominate voice search and conversational answers.</div>
                                  </div>
                                </a>
                              </div>
                              <div class="col-md-6">
                                <a class="ai-service-card" href="/ai-solutions/geo-services.html">
                                  <div class="ai-service-card__icon">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><use href="{{ asset('assets/icons.svg') }}#global-search-stroke-rounded"></use></svg>
                                  </div>
                                  <div>
                                    <div class="ai-service-card__title">GEO Services</div>
                                    <div class="ai-service-card__desc">Optimise visibility for generative AI results.</div>
                                  </div>
                                </a>
                              </div>
                              <div class="col-md-6">
                                <a class="ai-service-card" href="/ai-solutions/llm-seo-services.html">
                                  <div class="ai-service-card__icon">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><use href="{{ asset('assets/icons.svg') }}#ai-brain-01-stroke-rounded"></use></svg>
                                  </div>
                                  <div>
                                    <div class="ai-service-card__title">LLM SEO Services</div>
                                    <div class="ai-service-card__desc">Rank on ChatGPT, Gemini, and AI platforms.</div>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="mega-promo-card mt-3">
                              <div class="mega-promo-card__title">Need a quick plan?</div>
                              <div class="mega-promo-card__desc">Get a free website + SEO audit. Well send a clear action plan.</div>
                              <a href="/corporate/contact.html" class="promo-btn promo-btn--primary w-100 mt-3"> Get In Touch </a>
                              <a href="https://calendly.com/bdm-isearchsolution/30-minute-meeting-clone?month=2026-04" target="_blank" class="promo-btn promo-btn--outline w-100 mt-2"> Book a Call </a>
                              <div class="mega-promo-card__note mt-3"> Avg. response time: under 2 hours</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/packages.html">Packages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/case-study.html">Case Study</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/industries.html">Industries</a>
              </li>
            </ul>
            <!-- Mobile Contact Button & Socials -->
            <div class="d-lg-none mt-4 text-center">
              <a href="https://calendly.com/bdm-isearchsolution/30-minute-meeting-clone" class="btn btn-secondary d-block mx-auto w-100" target="_blank" rel="nofollow">Get Proposal</a>
              <div class="mobile-drawer-socials d-flex justify-content-center align-items-center gap-3 mt-3 pt-3">
                <a href="https://in.linkedin.com/company/isearch-solution" target="_blank" aria-label="LinkedIn" class="mobile-social-link">
                  <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><use href="{{ asset('assets/icons.svg') }}#linkedin-02-stroke-rounded"></use></svg>
                </a>
                <a href="https://www.instagram.com/isearchsolution/" target="_blank" aria-label="Instagram" class="mobile-social-link">
                  <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><use href="{{ asset('assets/icons.svg') }}#instagram-stroke-rounded"></use></svg>
                </a>
                <a href="https://x.com/isearchsolution" target="_blank" aria-label="Twitter" class="mobile-social-link">
                  <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><use href="{{ asset('assets/icons.svg') }}#new-twitter-stroke-rounded"></use></svg>
                </a>
                <a href="https://www.facebook.com/isearchsolution/" target="_blank" aria-label="Facebook" class="mobile-social-link">
                  <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><use href="{{ asset('assets/icons.svg') }}#facebook-02-stroke-rounded"></use></svg>
                </a>
                <a href="https://www.youtube.com/@isearchsolution" target="_blank" aria-label="YouTube" class="mobile-social-link">
                  <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><use href="{{ asset('assets/icons.svg') }}#youtube-stroke-rounded"></use></svg>
                </a>
              </div>
            </div>
          </div>
          <!-- Desktop Contact Button -->
          <div class="d-none d-lg-flex align-items-center">
            <a href="https://calendly.com/bdm-isearchsolution/30-minute-meeting-clone" class="btn btn-primary text-decoration-none" target="_blank" rel="nofollow">Book A Call</a>
          </div>
        </div>
      </nav>
    </header>

    @push('scripts')
<script>
      /* Live Services Search */
      const allServiceLinks = [];
      document.querySelectorAll(".mega-menu-panel .service-card-link").forEach((a) => {
        const panelEl = a.closest(".mega-menu-panel");
        const panelId = panelEl ? panelEl.id.replace("panel-", "") : "";
        const catEl = document.querySelector(`[data-cat="${panelId}"] .category-nav-label`);
        const dotEl = a.querySelector(".service-card-dot");
        const dotColor = dotEl ? (window.getComputedStyle(dotEl).backgroundColor || "rgb(7, 79, 174)") : "rgb(7, 79, 174)";
        
        allServiceLinks.push({
          text: a.querySelector(".service-card-text").textContent.trim(),
          href: a.getAttribute("href"),
          cat: catEl ? catEl.textContent.trim() : panelId,
          color: dotColor,
        });
      });

      const searchInput = document.getElementById("mm-search");
      const searchResults = document.getElementById("mm-search-results");
      const megaMenuBody = document.querySelector(".mega-menu-body");

      if (searchInput && searchResults && megaMenuBody) {
        searchInput.addEventListener("input", function () {
          const query = this.value.trim().toLowerCase();
          if (!query) {
            searchResults.style.display = "none";
            megaMenuBody.classList.remove("is-searching");
            return;
          }
          searchResults.style.display = "grid";
          megaMenuBody.classList.add("is-searching");
          const matches = allServiceLinks.filter((item) => item.text.toLowerCase().includes(query));
          searchResults.innerHTML = matches.length
            ? matches
                .map(
                  (m) =>
                    `<a class="search-result-item" href="${m.href}"><div class="search-result-item__dot" style="background:${m.color}"></div><span class="search-result-label">${m.text}</span><span class="search-result-category">${m.cat}</span></a>`
                )
                .join("")
            : `<div class="search-result-empty">No services found for "${this.value}"</div>`;
        });
      }

      /* Keep mega menu dropdown open on clicks inside */
      document.querySelectorAll(".mega-dropdown-menu").forEach((el) => {
        el.addEventListener("click", (e) => e.stopPropagation());
      });
    </script>
@endpush
  


