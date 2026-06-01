/* ── Swipers ── */
new Swiper(".pf-swiper", {
  slidesPerView: 1,
  spaceBetween: 24,
  loop: true,
  pagination: { el: ".pf-pag", clickable: true, dynamicBullets: true },
  navigation: { nextEl: ".pf-next", prevEl: ".pf-prev" },
  breakpoints: { 640: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } },
  autoplay: { delay: 4800, disableOnInteraction: false },
});
new Swiper(".tm-swiper", {
  slidesPerView: 1,
  spaceBetween: 24,
  loop: true,
  pagination: { el: ".tm-pag", clickable: true, dynamicBullets: true },
  breakpoints: { 640: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } },
  autoplay: { delay: 5200, disableOnInteraction: false },
});

/* ── Scroll Reveal ── */
(function () {
  var o = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) {
          e.target.classList.add("in");
          o.unobserve(e.target);
        }
      });
    },
    { threshold: 0.1 },
  );
  document.querySelectorAll(".rv").forEach(function (el) {
    o.observe(el);
  });
})();

/* ── Counter Animate ── */
(function () {
  var o = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) {
          var el = e.target,
            raw = el.dataset.target,
            isDecimal = el.dataset.decimal,
            target = parseInt(raw),
            step = Math.max(1, Math.ceil(target / 60)),
            cur = 0;
          var t = setInterval(function () {
            cur += step;
            if (cur >= target) {
              el.textContent = isDecimal ? (target / 10).toFixed(1) : target;
              clearInterval(t);
              return;
            }
            el.textContent = isDecimal ? (cur / 10).toFixed(1) : cur;
          }, 28);
          o.unobserve(el);
        }
      });
    },
    { threshold: 0.5 },
  );
  document.querySelectorAll(".sb-num[data-target]").forEach(function (el) {
    o.observe(el);
  });
})();

/* ── FAQ Accordion ── */
document.querySelectorAll(".faq-item").forEach(function (item) {
  item.querySelector(".faq-q").addEventListener("click", function () {
    var open = item.getAttribute("data-open") === "true";
    document.querySelectorAll(".faq-item").forEach(function (i) {
      i.removeAttribute("data-open");
    });
    if (!open) item.setAttribute("data-open", "true");
  });
});

/* ── Bar Fill on scroll ── */
(function () {
  var o = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) {
          e.target.querySelectorAll(".wvc-fill").forEach(function (b) {
            b.style.width = b.style.getPropertyValue("--w") || "50%";
          });
          o.unobserve(e.target);
        }
      });
    },
    { threshold: 0.3 },
  );
  var wv = document.querySelector(".wv-card");
  if (wv) o.observe(wv);
})();
