@push('sidebar-styles')

@endpush

{{-- ══════════════════════════════════════════════════════
     ORIGINAL SIDEBAR HTML — zero structural changes
     All classes, hrefs, SVGs, Blade comments 100% preserved
══════════════════════════════════════════════════════ --}}

<aside class="sidebar-nav-wrapper">
    <div class="navbar-logo">
        <a href="/admin/dashboard">
          <img src="{{ asset('assets/svg/brand-logo.png') }}" alt="logo" />
        </a>
    </div>
    <nav class="sidebar-nav">
        <ul>
            <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                <a href="/admin/dashboard" data-label="Dashboard">
                    <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.74999 18.3333C12.2376 18.3333 15.1364 15.8128 15.7244 12.4941C15.8448 11.8143 15.2737 11.25 14.5833 11.25H9.99999C9.30966 11.25 8.74999 10.6903 8.74999 10V5.41666C8.74999 4.7263 8.18563 4.15512 7.50586 4.27556C4.18711 4.86357 1.66666 7.76243 1.66666 11.25C1.66666 15.162 4.83797 18.3333 8.74999 18.3333Z" />
                            <path
                                d="M17.0833 10C17.7737 10 18.3432 9.43708 18.2408 8.75433C17.7005 5.14918 14.8508 2.29947 11.2457 1.75912C10.5629 1.6568 10 2.2263 10 2.91665V9.16666C10 9.62691 10.3731 10 10.8333 10H17.0833Z" />
                        </svg>
                    </span>
                    <span class="text">Dashboard</span>
                </a>
            </li>


            <li class="nav-item {{ request()->is('admin/pages*') ? 'active' : '' }}">
              <a href="/admin/pages" data-label="Pages">
                <span class="icon">
                  <i class="lni lni-empty-file"></i>
                </span>
                <span class="text">Pages</span>
              </a>
            </li>
            <li class="nav-item {{ request()->is('admin/templates*') ? 'active' : '' }}">
              <a href="/admin/templates" data-label="Templates">
                <span class="icon">
                  <i class="lni lni-layout"></i>
                </span>
                <span class="text">Templates</span>
              </a>
            </li>

            <li class="nav-item {{ request()->is('admin/section-templates*') ? 'active' : '' }}">
              <a href="{{ route('section-templates.index') }}" data-label="Sections">
                <span class="icon">
                  <i class="lni lni-layers"></i>
                </span>
                <span class="text">Sections</span>
              </a>
            </li>

            <li class="nav-item {{ request()->is('admin/testimonials*') ? 'active' : '' }}">
              <a href="{{ route('testimonials.index') }}" data-label="Testimonials">
                <span class="icon">
                  <i class="lni lni-users"></i>
                </span>
                <span class="text">Testimonials</span>
              </a>
            </li>
            <li class="nav-item {{ request()->is('admin/clients*') ? 'active' : '' }}">
              <a href="{{ route('clients.index') }}" data-label="Clients">
                <span class="icon">
                  <i class="lni lni-briefcase"></i>
                </span>
                <span class="text">Clients</span>
              </a>
            </li>

            {{-- <li class="nav-item">
              <a href="invoice.html">
                <span class="icon">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.8097 1.66667C11.8315 1.66667 11.8533 1.6671 11.875 1.66796V4.16667C11.875 5.43232 12.901 6.45834 14.1667 6.45834H16.6654C16.6663 6.48007 16.6667 6.50186 16.6667 6.5237V16.6667C16.6667 17.5872 15.9205 18.3333 15 18.3333H5.00001C4.07954 18.3333 3.33334 17.5872 3.33334 16.6667V3.33334C3.33334 2.41286 4.07954 1.66667 5.00001 1.66667H11.8097Z" />
                  </svg>
                </span>
                <span class="text">Invoice</span>
              </a>
            </li>
            <li class="nav-item nav-item-has-children">
              <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_4" aria-controls="ddmenu_4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.16666 3.33335C4.16666 2.41288 4.91285 1.66669 5.83332 1.66669H14.1667C15.0872 1.66669 15.8333 2.41288 15.8333 3.33335V16.6667C15.8333 17.5872 15.0872 18.3334 14.1667 18.3334H5.83332C4.91285 18.3334 4.16666 17.5872 4.16666 16.6667V3.33335Z" />
                  </svg>
                </span>
                <span class="text">UI Elements</span>
              </a>
              <ul id="ddmenu_4" class="collapse dropdown-nav">
                <li><a href="buttons.html"> Buttons </a></li>
                <li><a href="cards.html"> Cards </a></li>
                <li><a href="typography.html"> Typography </a></li>
              </ul>
            </li>
            <li class="nav-item nav-item-has-children">
              <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_55" aria-controls="ddmenu_55" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.48663 1.1466C5.77383 0.955131 6.16188 1.03274 6.35335 1.31994L6.87852 2.10769C7.20508 2.59755 7.20508 3.23571 6.87852 3.72556L6.35335 4.51331C6.16188 4.80052 5.77383 4.87813 5.48663 4.68666C5.19943 4.49519 5.12182 4.10715 5.31328 3.81994L5.83845 3.03219C5.88511 2.96221 5.88511 2.87105 5.83845 2.80106L5.31328 2.01331C5.12182 1.72611 5.19943 1.33806 5.48663 1.1466Z" />
                    <path d="M2.49999 16.6667C2.03976 16.6667 1.66666 17.0398 1.66666 17.5C1.66666 17.9602 2.03976 18.3334 2.49999 18.3334H14.1667C14.6269 18.3334 15 17.9602 15 17.5C15 17.0398 14.6269 16.6667 14.1667 16.6667H2.49999Z" />
                  </svg>
                </span>
                <span class="text">Icons</span>
              </a>
              <ul id="ddmenu_55" class="collapse dropdown-nav">
                <li><a href="icons.html"> LineIcons </a></li>
                <li><a href="mdi-icons.html"> MDI Icons </a></li>
              </ul>
            </li>
            <li class="nav-item nav-item-has-children">
              <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_5" aria-controls="ddmenu_5" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.16666 3.33335C4.16666 2.41288 4.91285 1.66669 5.83332 1.66669H14.1667C15.0872 1.66669 15.8333 2.41288 15.8333 3.33335V16.6667C15.8333 17.5872 15.0872 18.3334 14.1667 18.3334H5.83332C4.91285 18.3334 4.16666 17.5872 4.16666 16.6667V3.33335Z" />
                  </svg>
                </span>
                <span class="text"> Forms </span>
              </a>
              <ul id="ddmenu_5" class="collapse dropdown-nav">
                <li><a href="form-elements.html"> From Elements </a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="tables.html">
                <span class="icon">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.66666 4.16667C1.66666 3.24619 2.41285 2.5 3.33332 2.5H16.6667C17.5872 2.5 18.3333 3.24619 18.3333 4.16667V9.16667C18.3333 10.0872 17.5872 10.8333 16.6667 10.8333H3.33332C2.41285 10.8333 1.66666 10.0872 1.66666 9.16667V4.16667Z" />
                    <path d="M1.875 13.75C1.875 13.4048 2.15483 13.125 2.5 13.125H17.5C17.8452 13.125 18.125 13.4048 18.125 13.75C18.125 14.0952 17.8452 14.375 17.5 14.375H2.5C2.15483 14.375 1.875 14.0952 1.875 13.75Z" />
                    <path d="M2.5 16.875C2.15483 16.875 1.875 17.1548 1.875 17.5C1.875 17.8452 2.15483 18.125 2.5 18.125H17.5C17.8452 18.125 18.125 17.8452 18.125 17.5C18.125 17.1548 17.8452 16.875 17.5 16.875H2.5Z" />
                  </svg>
                </span>
                <span class="text">Tables</span>
              </a>
            </li>
            <span class="divider"><hr /></span>
            <li class="nav-item">
              <a href="notification.html">
                <span class="icon">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.8333 2.50008C10.8333 2.03984 10.4602 1.66675 9.99999 1.66675C9.53975 1.66675 9.16666 2.03984 9.16666 2.50008C9.16666 2.96032 9.53975 3.33341 9.99999 3.33341C10.4602 3.33341 10.8333 2.96032 10.8333 2.50008Z" />
                    <path d="M7.48901 17.1925C8.10004 17.8918 8.99841 18.3335 10 18.3335C11.0016 18.3335 11.9 17.8918 12.511 17.1925C10.8482 17.4634 9.15183 17.4634 7.48901 17.1925Z" />
                  </svg>
                </span>
                <span class="text">Notifications</span>
              </a>
            </li> --}}
        </ul>
    </nav>
</aside>
<div class="overlay"></div>

@push('sidebar-scripts')
<script>
(function () {
    'use strict';

    var sidebar = document.querySelector('aside.sidebar-nav-wrapper');
    var overlay = document.querySelector('.overlay');

    /* ── Inject mobile toggle button ── */
    var btn = document.createElement('button');
    btn.className = 'sidebar-toggle-btn';
    btn.setAttribute('aria-label', 'Toggle sidebar');
    btn.innerHTML = '<span></span><span></span><span></span>';
    document.body.appendChild(btn);

    function openSidebar() {
        sidebar.classList.add('sidebar-open');
        btn.classList.add('is-open');
        overlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeSidebar() {
        sidebar.classList.remove('sidebar-open');
        btn.classList.remove('is-open');
        overlay.classList.remove('active');
        document.body.style.overflow = '';
    }

    btn.addEventListener('click', function () {
        sidebar.classList.contains('sidebar-open') ? closeSidebar() : openSidebar();
    });

    overlay.addEventListener('click', closeSidebar);

    /* ── Active link highlight based on current URL ── */
    var currentPath = window.location.pathname;
    var links = document.querySelectorAll('aside.sidebar-nav-wrapper .nav-item > a');
    links.forEach(function (link) {
        var href = link.getAttribute('href') || '';
        if (href && href !== '#0' && href !== '#' && currentPath.startsWith(href)) {
            link.classList.add('active');
        }
    });

    /* ── Close on resize to desktop ── */
    window.addEventListener('resize', function () {
        if (window.innerWidth > 768) closeSidebar();
    });
})();
</script>
@endpush
