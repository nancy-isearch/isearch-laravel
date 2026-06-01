// Swipers
new Swiper(".port-swiper", {
  slidesPerView: 1.15,
  spaceBetween: 20,
  navigation: { nextEl: ".port-next", prevEl: ".port-prev" },
  breakpoints: { 600: { slidesPerView: 2.1, spaceBetween: 20 }, 900: { slidesPerView: 3, spaceBetween: 22 }, 1200: { slidesPerView: 4, spaceBetween: 24 } },
});
new Swiper(".testi-swiper", {
  slidesPerView: 1,
  spaceBetween: 22,
  loop: true,
  autoplay: { delay: 4000, disableOnInteraction: false },
  pagination: { el: ".tpag", clickable: true, dynamicBullets: true },
  breakpoints: { 640: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } },
});

// Scroll Reveal
const io = new IntersectionObserver(
  (e) => {
    e.forEach((x) => {
      if (x.isIntersecting) {
        x.target.classList.add("v");
        io.unobserve(x.target);
      }
    });
  },
  { threshold: 0.1 },
);
document.querySelectorAll(".sr,.srl,.srr").forEach((el) => io.observe(el));

// Bar chart
const cio = new IntersectionObserver(
  (e) => {
    e.forEach((x) => {
      if (x.isIntersecting) {
        x.target.classList.add("vis");
        cio.unobserve(x.target);
      }
    });
  },
  { threshold: 0.3 },
);
document.querySelectorAll("#wdChart").forEach((el) => cio.observe(el));

// FAQ
document.querySelectorAll(".faqq").forEach((q) => {
  q.addEventListener("click", () => {
    const item = q.parentElement;
    const was = item.classList.contains("open");
    document.querySelectorAll(".faqitem.open").forEach((i) => i.classList.remove("open"));
    if (!was) item.classList.add("open");
  });
});

// Wheel items polar positioning
const wis = document.querySelectorAll(".witem");
const cx = 190,
  cy = 190,
  r = 160;
wis.forEach((el, i) => {
  const a = (i / wis.length) * 2 * Math.PI - Math.PI / 2;
  el.style.left = cx + r * Math.cos(a) - 31 + "px";
  el.style.top = cy + r * Math.sin(a) - 31 + "px";
});
