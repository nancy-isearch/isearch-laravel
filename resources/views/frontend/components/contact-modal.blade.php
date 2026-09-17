<style>
:root{--iss-navy:hsl(214, 92%, 45%);--iss-navy-deep:hsl(214, 92%, 30%);--iss-blue:#074eab;--iss-orange:hsl(214, 92%, 35%);--iss-orange-dk:hsl(214, 92%, 30%);--iss-white:#ffffff;--iss-off-white:#f4f7fc;--iss-muted:#7a8fa8;--iss-border:#cdd9e7;--iss-error:#e53935;--iss-success:#2e7d32;--radius-sm:6px;--radius-md:12px;--radius-lg:20px;--shadow-pop:0 32px 80px rgba(7, 21, 41, 0.55), 0 8px 24px rgba(7, 21, 41, 0.35);--trans:all 0.25s cubic-bezier(0.4, 0, 0.2, 1)}
.iss-overlay{position:fixed;inset:0;background:rgb(7 21 41 / .75);backdrop-filter:blur(6px);-webkit-backdrop-filter:blur(6px);display:flex;align-items:center;justify-content:center;padding:16px;z-index:9999;opacity:0;visibility:hidden;transition:opacity 0.3s ease,visibility 0.3s ease}
.iss-overlay.active{opacity:1;visibility:visible}
.iss-popup{background:var(--iss-white);border-radius:var(--radius-lg);width:100%;max-width:660px;max-height:92vh;overflow-y:auto;overflow-x:hidden;box-shadow:var(--shadow-pop);transform:translateY(28px) scale(.97);transition:transform 0.35s cubic-bezier(.34,1.56,.64,1),opacity 0.3s ease;opacity:0;scrollbar-width:thin;scrollbar-color:var(--iss-border) #fff0}
.iss-overlay.active .iss-popup{transform:translateY(0) scale(1);opacity:1}
.iss-popup::-webkit-scrollbar{width:5px}.iss-popup::-webkit-scrollbar-thumb{background:var(--iss-border);border-radius:99px}
.iss-popup-header{background:linear-gradient(135deg,var(--iss-navy) 0%,var(--iss-blue) 100%);padding:22px 28px;display:flex;align-items:center;justify-content:space-between;gap:16px;border-radius:var(--radius-lg) var(--radius-lg) 0 0;position:relative;overflow:hidden}
.iss-popup-header::before{content:"";position:absolute;width:220px;height:220px;border-radius:50%;border:40px solid rgb(255 255 255 / .04);right:-60px;top:-80px;pointer-events:none}
.iss-popup-header::after{content:"";position:absolute;width:120px;height:120px;border-radius:50%;border:24px solid rgb(242 101 34 / .12);left:60%;bottom:-50px;pointer-events:none}
.header-icon-wrap{display:flex;align-items:center;gap:14px;z-index:1}
.header-icon{width:52px;height:52px;background:#fff;border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.header-text h2{font-size:clamp(1.1rem, 3vw, 1.35rem);color:var(--iss-white);margin:0;line-height:1.2;letter-spacing:-.3px}
.header-text p{font-size:.82rem;color:rgb(255 255 255 / .6);margin:3px 0 0;font-weight:400}
.iss-close-btn{width:36px;height:36px;background:rgb(255 255 255 / .1);border:1px solid rgb(255 255 255 / .15);border-radius:50%;display:flex;align-items:center;justify-content:center;cursor:pointer;transition:var(--trans);flex-shrink:0;z-index:1;text-decoration:none}
.iss-close-btn:hover{background:rgb(255 255 255 / .2);transform:rotate(90deg)}
.iss-popup-body{padding:28px}
.mandatory-note{display:inline-flex;align-items:center;gap:6px;font-size:.78rem;color:var(--iss-muted);background:var(--iss-off-white);border:1px solid var(--iss-border);border-radius:50px;padding:5px 14px;margin-bottom:22px}
.mandatory-note svg{color:var(--iss-orange);flex-shrink:0}
.field-wrap{position:relative;margin-bottom:4px}
.field-icon{position:absolute;left:14px;top:50%;transform:translateY(-50%);display:flex;align-items:center;pointer-events:none;transition:color 0.2s;z-index:1}
.field-icon>svg.icon--cc{--size:20px;width:var(--size);height:var(--size);color:var(--iss-muted)}
.cont-input,.message-box{width:100%;padding:12px 16px 12px 42px;font-size:.92rem;color:var(--iss-navy-deep);border:1.5px solid var(--iss-border);border-radius:var(--radius-sm);outline:none;transition:var(--trans);background:#fff}
.cont-input::placeholder,.message-box::placeholder{color:hsl(0 0% 0% / .8);font-size:.88rem;font-weight:400!important}
.cont-input:focus,.message-box:focus{background:var(--iss-white);border-color:var(--iss-orange)}
.field-wrap:focus-within .field-icon{color:var(--iss-orange)}
.textarea-wrap .field-icon{top:16px;transform:none}
.message-box{resize:vertical;min-height:110px;padding-top:13px}
.cont-input.input-error,.message-box.input-error{border-color:var(--iss-error)}
.field-error-msg{font-size:.75rem;color:var(--iss-error);margin-top:4px;display:none}
.iss-divider{border:none;border-top:1px solid var(--iss-border);margin:10px 0}
.recaptcha-row{margin-bottom:20px}
.g-recaptcha{transform-origin:left top}
.iss-submitbtn{width:100%;display:flex;align-items:center;justify-content:center;gap:10px;background:linear-gradient(135deg,var(--iss-orange) 0%,var(--iss-orange-dk) 100%);color:var(--iss-white);font-weight:600;font-size:1rem;padding:14px 24px;border:none;border-radius:var(--radius-sm);cursor:pointer;transition:var(--trans);letter-spacing:.3px}
.iss-submitbtn:hover{background:linear-gradient(135deg,var(--iss-orange-dk) 0%,var(--iss-blue) 100%);transform:translateY(-1px)}
.iss-submitbtn:active{transform:translateY(0)}
.iss-submitbtn.loading{pointer-events:none;opacity:.8}
.btn-spinner{width:18px;height:18px;border:2.5px solid rgb(255 255 255 / .4);border-top-color:#fff;border-radius:50%;animation:spin 0.7s linear infinite;display:none}
.iss-submitbtn.loading .btn-spinner{display:block}
.iss-submitbtn.loading .submit-icon{display:none}
@keyframes spin{to{transform:rotate(360deg)}}
.iss-toast{position:fixed;bottom:28px;right:24px;background:var(--iss-navy);color:#fff;padding:14px 20px;border-radius:var(--radius-md);font-size:.9rem;display:flex;align-items:center;gap:10px;box-shadow:0 8px 32px rgb(0 0 0 / .3);z-index:99999;transform:translateY(20px);opacity:0;transition:all 0.3s ease;max-width:320px}
.iss-toast.show{transform:translateY(0);opacity:1}
.iss-toast.toast-error{border-left:4px solid var(--iss-error)}
.iss-toast.toast-success{border-left:4px solid #43a047}
@media (max-width:575px){.iss-popup-header{padding:18px 18px}.iss-popup-body{padding:20px 16px}.header-icon{width:44px;height:44px}.g-recaptcha{transform:scale(.82)}}
@media (max-width:380px){.g-recaptcha{transform:scale(.72)}}
</style>
<div class="iss-overlay" id="issPopupOverlay" role="dialog" aria-modal="true" aria-labelledby="issPopupTitle">
  <div class="iss-popup" id="issPopupCard">
    <div class="iss-popup-header">
      <div class="header-icon-wrap">
        <div class="header-icon"><img src="{{ asset('assets/frontend/svg/favIcon.ico') }}" alt="logo" width="28" height="28" /></div>
        <div class="header-text">
          <h2 id="issPopupTitle">Feel Free To Contact Us</h2>
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
      <form action="/enquiry" method="post" name="form" id="issEnquiryForm">
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
              <select class="form-select" name="service" id="service" aria-label="Default select example" required>
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
</div>
