/* ── Swipers ── */
new Swiper(".content-swiper", {
  slidesPerView: 1.15,
  spaceBetween: 20,
  navigation: { nextEl: ".content-next", prevEl: ".content-prev" },
  breakpoints: {
    600: { slidesPerView: 2.1, spaceBetween: 20 },
    900: { slidesPerView: 3, spaceBetween: 22 },
    1200: { slidesPerView: 4, spaceBetween: 24 },
  },
});

new Swiper(".testi-swiper", {
  slidesPerView: 1,
  spaceBetween: 22,
  loop: true,
  autoplay: { delay: 4000, disableOnInteraction: false },
  pagination: { el: ".tpag", clickable: true, dynamicBullets: true },
  breakpoints: { 640: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } },
});

new Swiper(".cases-swiper", {
  slidesPerView: 1.1,
  spaceBetween: 20,
  loop: true,
  autoplay: { delay: 3500, disableOnInteraction: false },
  breakpoints: { 640: { slidesPerView: 2.1 }, 1024: { slidesPerView: 3 } },
});

/* ── Scroll Reveal ── */
// const srEls = document.querySelectorAll(".sr,.sr-l,.sr-r");
// const io = new IntersectionObserver(
//   (entries) => {
//     entries.forEach((e) => {
//       if (e.isIntersecting) {
//         e.target.classList.add("vis");
//         io.unobserve(e.target);
//       }
//     });
//   },
//   { threshold: 0.1 },
// );
// srEls.forEach((el) => io.observe(el));

/* ── Scroll Reveal ── */
const srEls = document.querySelectorAll(".sr, .sr-l, .sr-r");

const io = new IntersectionObserver(
  (entries) => {
    entries.forEach((e) => {
      if (e.isIntersecting) {
        e.target.classList.add("vis");
        io.unobserve(e.target);
      }
    });
  },
  { threshold: 0.1, rootMargin: "0px 0px -30px 0px" }
);

srEls.forEach((el) => {
  // If already visible on page load (e.g. hero elements), show immediately
  const rect = el.getBoundingClientRect();
  if (rect.top < window.innerHeight && rect.bottom > 0) {
    el.classList.add("vis");
  } else {
    io.observe(el);
  }
});

/* ── Bar chart animation ── */
const chartIO = new IntersectionObserver(
  (entries) => {
    entries.forEach((e) => {
      if (e.isIntersecting) {
        e.target.classList.add("vis");
        chartIO.unobserve(e.target);
      }
    });
  },
  { threshold: 0.3 },
);
document.querySelectorAll("#smoChart").forEach((el) => chartIO.observe(el));

/* ── FAQ accordion ── */
document.querySelectorAll(".faq-q").forEach((q) => {
  q.addEventListener("click", () => {
    const item = q.parentElement;
    const wasOpen = item.classList.contains("open");
    document
      .querySelectorAll(".faq-item.open")
      .forEach((i) => i.classList.remove("open"));
    if (!wasOpen) item.classList.add("open");
  });
});

/* ── Pricing toggle ── */
document.querySelectorAll(".ptog").forEach((btn) => {
  btn.addEventListener("click", () => {
    document.querySelectorAll(".ptog").forEach((b) => b.classList.remove("on"));
    btn.classList.add("on");
  });
});

/* ── Wheel item placement ── */
const wheelItems = document.querySelectorAll(".wheel-item");
const cx = 190,
  cy = 190,
  r = 160;
wheelItems.forEach((el, i) => {
  const angle = (i / wheelItems.length) * 2 * Math.PI - Math.PI / 2;
  const x = cx + r * Math.cos(angle) - 31;
  const y = cy + r * Math.sin(angle) - 31;
  el.style.left = x + "px";
  el.style.top = y + "px";
});
