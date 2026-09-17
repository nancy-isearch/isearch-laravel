(function () {
  "use strict";

  /* ─── 2. INJECT INTO DOM ─────────────────────────────────── */
  function injectPopup() { /* Modal is now hardcoded in Blade */ }

  /* ─── 3. OPEN / CLOSE ────────────────────────────────────── */
  function openPopup() {
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

      e.preventDefault();

      // ===== AJAX SUBMIT =====
      const formData = new FormData(form);
      
      // Get country code from intl-tel-input if available
      if (window.intlTelInputGlobals) {
        const iti = window.intlTelInputGlobals.getInstance(mobileEl);
        if (iti) {
            formData.set('dial_code', '+' + iti.getSelectedCountryData().dialCode);
        }
      }

      fetch(form.action, {
        method: "POST",
        headers: {
          "X-Requested-With": "XMLHttpRequest",
          "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]')?.getAttribute("content")
        },
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        if (data.status === "success" || data.success || response.ok) {
          showToast("Enquiry submitted successfully!", "success");
          form.reset();
          setTimeout(() => closePopup(), 1500);
        } else {
          showToast(data.message || "Failed to submit enquiry.", "error");
        }
      })
      .catch(error => {
        console.error(error);
        showToast("An error occurred. Please try again later.", "error");
      })
      .finally(() => {
        if (btn) btn.innerHTML = `
                  <div class="btn-spinner"></div>
                  <span class="submit-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                      <line x1="22" y1="2" x2="11" y2="13" />
                      <polygon points="22 2 15 22 11 13 2 9 22 2" />
                    </svg>
                  </span>
                  Send Message`;
      });
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
    attachEvents(); // attach form handlers to hardcoded modal
    
    const triggerBtns = document.querySelectorAll(".openPopupBtn");
    triggerBtns.forEach((triggerBtn) => {
      if (triggerBtn) {
        triggerBtn.addEventListener("click", function(e) {
            e.preventDefault();
            openPopup();
        });
      }
    });
    // Also expose globally so any button/link can call ISS.openPopup()
    window.ISS = { openPopup, closePopup };
  });
})();

