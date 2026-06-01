(function () {
  "use strict";

  /* ─── 1. BUILD HTML ──────────────────────────────────────── */
  function buildPopupHTML() {
    return `
        <div class="iss-overlay" id="issPopupOverlay" role="dialog" aria-modal="true" aria-labelledby="issPopupTitle">
          <div class="iss-popup" id="issPopupCard">
            <div class="iss-popup-header">
              <div class="header-icon-wrap">
                <div class="header-icon"><img src="/favIcon.ico" alt="logo" width="28" height="28" /></div>
                <div class="header-text">
                  <h2 id="issPopupTitle">Feel free to contact us</h2>
                  <p>We'll get back to you within 24 hours</p>
                </div>
              </div>
              <a href="#" class="iss-close-btn" id="issCloseBtn" aria-label="Close popup">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M18 6L6 18M6 6l12 12" />
                </svg>
              </a>
            </div>
            <div class="iss-popup-body">
              <div class="mandatory-note">* Marked fields are Mandatory</div>
              <form action="https://www.isearchsolution.com/isearchenquiry.aspx" method="post" name="form" onSubmit="return validateForm()">
                <div class="row g-0">
                  <div class="col-12 col-md-6 pe-md-2 mb-2">
                    <div class="field-wrap">
                      <span class="field-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2" />
                          <circle cx="12" cy="7" r="4" />
                        </svg>
                      </span>
                      <input name="name" id="name" class="cont-input" type="text" placeholder="Full Name *" />
                    </div>
                    <div class="field-error-msg" id="err_name">Please enter your name.</div>
                  </div>
                  <div class="col-12 col-md-6 ps-md-2 mb-2">
                    <div class="field-wrap">
                      <input name="mobile" id="mobile" class="cont-input" type="text" placeholder="Contact No. *" />
                    </div>
                    <div class="field-error-msg" id="err_mobile">Please enter a valid phone number.</div>
                  </div>
                </div>
                <div class="row g-0">
                  <div class="col-12 col-md-6 pe-md-2 mb-2">
                    <div class="field-wrap">
                      <span class="field-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                          <polyline points="22,6 12,13 2,6" />
                        </svg>
                      </span>
                      <input name="email" id="email" class="cont-input" type="text" placeholder="Email Address *" />
                    </div>
                    <div class="field-error-msg" id="err_email">Please enter a valid email address.</div>
                  </div>
                  <div class="col-12 col-md-6 ps-md-2 mb-2">
                    <div class="field-wrap">
                      <span class="field-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                          <circle cx="12" cy="12" r="10" />
                          <line x1="2" y1="12" x2="22" y2="12" />
                          <path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z" />
                        </svg>
                      </span>
                      <input name="url" id="url" class="cont-input" type="text" placeholder="Website URL" />
                    </div>
                  </div>
                  <div class="col-12 mb-2">
                    <div class="field-wrap">
                      <select class="form-select" aria-label="Default select example" required>
                        <option value="" disabled selected hidden>Choose Services*</option>
                        <option value="seo">Search Engine Optimization (SEO)</option>
                        <option value="social-media">Social Media</option>
                        <option value="performance-marketing">Paid Ads / Performance Marketing</option>
                        <option value="orm">Online Reputation Management (ORM)</option>
                        <option value="web-design">Web Design</option>
                        <option value="web-application">Web Application</option>
                        <option value="mobile-app-development">Mobile App Development</option>
                        <option value="web-analytics">Web Analytics</option>
                        <option value="devops-services">DevOps Services</option>
                        <option value="software-solutions">Software Solutions</option>
                      </select>
                    </div>
                    <span class="field-error" id="err-service"></span>
                  </div>
                </div>
                <div class="field-wrap textarea-wrap">
                  <span class="field-icon" style="top: 14px; transform: none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" />
                    </svg>
                  </span>
                  <textarea class="message-box" name="requirement" id="requirement" rows="4" placeholder="Describe Your Business Requirement *"></textarea>
                  <div class="field-error-msg" id="err_requirement">Please describe your requirement.</div>
                </div>
                <hr class="iss-divider" />
                <div class="recaptcha-row mb-3">
                  <div class="g-recaptcha" data-sitekey="6LcrOQssAAAAANk-ATPTST8Lj0nmbx0vCHylfzC9"></div>
                </div>
                <button class="iss-submitbtn" type="submit" name="submit" id="submit">
                  <div class="btn-spinner"></div>
                  <span class="submit-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                      <line x1="22" y1="2" x2="11" y2="13" />
                      <polygon points="22 2 15 22 11 13 2 9 22 2" />
                    </svg>
                  </span>
                  Send Message
                </button>
              </form>
            </div>
          </div>
        </div>`;
  }

  /* ─── 2. INJECT INTO DOM ─────────────────────────────────── */
  function injectPopup() {
    if (document.getElementById("issPopupOverlay")) return; // already injected
    const wrapper = document.createElement("div");
    wrapper.innerHTML = buildPopupHTML();
    document.body.appendChild(wrapper.firstElementChild);
    attachEvents();
  }

  /* ─── 3. OPEN / CLOSE ────────────────────────────────────── */
  function openPopup() {
    injectPopup();
    requestAnimationFrame(() => {
      document.getElementById("issPopupOverlay").classList.add("active");
      document.body.style.overflow = "hidden";
      // Initialize Phone Input after Injection
      const phoneInput = document.getElementById("mobile");
      if (phoneInput) {
        initPhoneInput(phoneInput);
      }
      // Re-render reCAPTCHA if needed
      if (window.grecaptcha && typeof window.grecaptcha.render === "function") {
        const rcDiv = document.querySelector("#issPopupOverlay .g-recaptcha");
        if (rcDiv && !rcDiv.querySelector("iframe")) {
          try {
            grecaptcha.render(rcDiv);
          } catch (e) {}
        }
      }
    });
  }

  function closePopup() {
    const overlay = document.getElementById("issPopupOverlay");
    if (!overlay) return;
    overlay.classList.remove("active");
    document.body.style.overflow = "";
    clearErrors();
  }

  /* ─── 3. PHONE LIBRARY LOADER ────────────────────────────── */
  function initPhoneInput(el) {
    if (window.intlTelInput) {
      window.intlTelInput(input, {
        initialCountry: "auto",
        geoIpLookup: function (callback) {
          fetch("https://ipapi.co/json")
            .then((res) => res.json())
            .then((data) => callback(data.country_code))
            .catch(() => callback("in"));
        },
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
      });
      return;
    }

    const link = document.createElement("link");
    link.rel = "stylesheet";
    link.href = "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css";
    document.head.appendChild(link);

    const script = document.createElement("script");
    script.src = "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js";
    script.onload = () => {
      window.intlTelInput(el, {
        separateDialCode: true,
        initialCountry: "in",
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
      });
    };
    document.body.appendChild(script);
  }

  /* ─── 4. VALIDATION ──────────────────────────────────────── */
  function showError(fieldId, errId) {
    const f = document.getElementById(fieldId);
    const e = document.getElementById(errId);
    if (f) f.classList.add("input-error");
    if (e) e.style.display = "block";
  }

  function clearError(fieldId, errId) {
    const f = document.getElementById(fieldId);
    const e = document.getElementById(errId);
    if (f) f.classList.remove("input-error");
    if (e) e.style.display = "none";
  }

  function clearErrors() {
    [
      ["name", "err_name"],
      ["mobile", "err_mobile"],
      ["email", "err_email"],
      ["requirement", "err_requirement"],
    ].forEach(([f, e]) => clearError(f, e));
  }

  function validateForm() {
    let valid = true;
    clearErrors();

    const name = document.getElementById("name").value.trim();
    const mobile = document.getElementById("mobile").value.trim();
    const email = document.getElementById("email").value.trim();
    const req = document.getElementById("requirement").value.trim();

    if (!name || name.length < 2) {
      showError("name", "err_name");
      valid = false;
    }
    if (!mobile || !/^[\d\s\+\-\(\)]{7,15}$/.test(mobile)) {
      showError("mobile", "err_mobile");
      valid = false;
    }
    if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
      showError("email", "err_email");
      valid = false;
    }
    if (!req || req.length < 10) {
      showError("requirement", "err_requirement");
      valid = false;
    }

    return valid;
  }

  /* ─── 5. TOAST ───────────────────────────────────────────── */
  function showToast(msg, type = "error") {
    let toast = document.getElementById("issToast");
    if (!toast) {
      toast = document.createElement("div");
      toast.id = "issToast";
      toast.className = "iss-toast";
      document.body.appendChild(toast);
    }
    toast.className = `iss-toast toast-${type}`;
    toast.innerHTML = `
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none"
          viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round">
          ${type === "success" ? '<path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/>' : '<circle cx="12" cy="12" r="10"/><path d="M12 8v4m0 4h.01"/>'}
        </svg>
        <span>${msg}</span>`;
    requestAnimationFrame(() => toast.classList.add("show"));
    setTimeout(() => toast.classList.remove("show"), 3500);
  }

  function attachEvents() {
    const form = document.querySelector("#issPopupOverlay form");
    if (!form) return;

    // ===== SAME VALIDATION (OLD FILE SE) =====
    form.addEventListener("submit", function (e) {
      let valid = true;

      const nameEl = form.querySelector("#name");
      const mobileEl = form.querySelector("#mobile");
      const emailEl = form.querySelector("#email");
      const urlEl = form.querySelector("#url");
      const reqEl = form.querySelector("#requirement");

      const name = nameEl.value.trim();
      const mobile = mobileEl.value.replace(/[\s\-\(\)\+]/g, "");
      const email = emailEl.value.trim().toLowerCase();
      const url = urlEl.value.trim();
      const req = reqEl.value.trim();

      const spamKeywords = ["porn", "casino", "sex", "xxx", "crypto", "loan", "bet", "free offer"];

      const blockedDomains = ["mailinator.com", "tempmail.com", "yopmail.com"];

      // ===== RESET =====
      clearError("name", "err_name");
      clearError("mobile", "err_mobile");
      clearError("email", "err_email");
      clearError("requirement", "err_requirement");

      // ===== NAME =====
      if (!name || name.length < 2) {
        showError("name", "err_name");
        valid = false;
      }

      // ===== MOBILE =====
      if (!mobile || !/^\d{7,15}$/.test(mobile)) {
        showError("mobile", "err_mobile");
        valid = false;
      }

      // ===== EMAIL =====
      if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        showError("email", "err_email");
        valid = false;
      } else {
        const domain = email.split("@")[1];
        if (blockedDomains.includes(domain)) {
          showError("email", "err_email");
          valid = false;
        }
      }

      // ===== URL =====
      if (url && !/^(https?:\/\/)?([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,}/.test(url)) {
        showError("url", "err_url");
        valid = false;
      }

      // ===== REQUIREMENT =====
      if (!req || req.length < 10) {
        showError("requirement", "err_requirement");
        valid = false;
      }

      // ===== SPAM =====
      const allText = (name + email + req + url).toLowerCase();
      for (let k of spamKeywords) {
        if (allText.includes(k)) {
          e.preventDefault();
          return false;
        }
      }

      // ===== CAPTCHA =====
      if (typeof grecaptcha !== "undefined" && !grecaptcha.getResponse()) {
        const cap = form.querySelector("#err-captcha");
        if (cap) cap.textContent = "Please verify that you are not a robot.";
        valid = false;
      }

      if (!valid) {
        e.preventDefault();
        return false;
      }

      // ===== BUTTON LOADING =====
      const btn = form.querySelector("#submit");
      if (btn) btn.innerText = "Submitting...";
    });

    // ===== REAL-TIME VALIDATION (OLD LIKE) =====
    ["name", "mobile", "email", "requirement"].forEach((id) => {
      const el = form.querySelector("#" + id);
      if (!el) return;

      el.addEventListener("blur", function () {
        if (this.value.trim() === "") {
          showError(id, "err_" + id);
        } else {
          clearError(id, "err_" + id);
        }
      });
    });

    // ===== CLOSE =====
    document.getElementById("issCloseBtn")?.addEventListener("click", function (e) {
      e.preventDefault();

      const overlay = document.getElementById("issPopupOverlay");
      if (overlay) overlay.classList.remove("active");

      document.body.style.overflow = ""; // ✅ SCROLL BACK
    });
  }

  /* ─── 7. WIRE TRIGGER BUTTON ─────────────────────────────── */
  document.addEventListener("DOMContentLoaded", function () {
    const triggerBtns = document.querySelectorAll(".openPopupBtn");
    triggerBtns.forEach((triggerBtn) => {
      if (triggerBtn) {
        triggerBtn.addEventListener("click", openPopup);
      }
      // Also expose globally so any button/link can call ISS.openPopup()
      window.ISS = { openPopup, closePopup };
    });
  });
})();
