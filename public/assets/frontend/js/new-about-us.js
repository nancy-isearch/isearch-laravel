//   ------------------------------
// outerteam swiper
new Swiper(".ourteam-swiper", {
  slidesPerView: 1.15,
  spaceBetween: 20,
  pagination: {
    el: '#ourteam-swiper-pagination',
    clickable: true,
  },
  breakpoints: {
    600: { slidesPerView: 2.1, spaceBetween: 20 },
    900: { slidesPerView: 3, spaceBetween: 22 },
    1200: { slidesPerView: 4, spaceBetween: 24 },
  },
});
/* ── Team Swiper ── */
new Swiper(".tm-swiper", {
  slidesPerView: 1,
  spaceBetween: 24,
  loop: true,
  pagination: { el: ".tm-pag", clickable: true, dynamicBullets: true },
  navigation: { nextEl: ".tm-next", prevEl: ".tm-prev" },
  breakpoints: { 560: { slidesPerView: 2 }, 900: { slidesPerView: 3 } },
  autoplay: { delay: 4500, disableOnInteraction: false },
});
/* ── Testimonials Swiper ── */
new Swiper(".ts-swiper", {
  slidesPerView: 1,
  spaceBetween: 24,
  loop: true,
  pagination: { el: ".ts-pag", clickable: true, dynamicBullets: true },
  breakpoints: { 640: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } },
  autoplay: { delay: 5000, disableOnInteraction: false },
});
/* ── Scroll Reveal ── */
(function () {
  var items = document.querySelectorAll(".sr");
  var obs = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) {
          var d =
            parseFloat(e.target.style.getPropertyValue("--d") || 0) * 1000;
          setTimeout(function () {
            e.target.classList.add("in");
          }, d);
        }
      });
    },
    { threshold: 0.1 },
  );
  items.forEach(function (el) {
    obs.observe(el);
  });
})();
/* ── Counter Animate ── */
(function () {
  var obs = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) {
          var el = e.target;
          var target = parseInt(el.dataset.target);
          var step = Math.max(1, Math.ceil(target / 60));
          var cur = 0;
          var timer = setInterval(function () {
            cur += step;
            if (cur >= target) {
              el.textContent = target;
              clearInterval(timer);
              return;
            }
            el.textContent = cur;
          }, 28);
          obs.unobserve(el);
        }
      });
    },
    { threshold: 0.5 },
  );
  document.querySelectorAll(".stat-num[data-target]").forEach(function (el) {
    obs.observe(el);
  });
})();
