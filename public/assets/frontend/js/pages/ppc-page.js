// ===== REVEAL ON SCROLL =====
const revealElements = document.querySelectorAll(".reveal");
const revealOnScroll = () => {
  revealElements.forEach((el, i) => {
    const rect = el.getBoundingClientRect();
    if (rect.top < window.innerHeight - 80) {
      setTimeout(() => el.classList.add("active"));
    }
  });
};
window.addEventListener("scroll", revealOnScroll);
revealOnScroll();

// ===== FAQ ACCORDION =====
document.querySelectorAll(".faq-question").forEach((q) => {
  q.addEventListener("click", () => {
    const item = q.parentElement;
    const isActive = item.classList.contains("active");
    document.querySelectorAll(".faq-item").forEach((i) => i.classList.remove("active"));
    if (!isActive) item.classList.add("active");
  });
});

// ===== SWIPER SLIDERS =====
new Swiper(".industries-swiper", {
  slidesPerView: 1,
  spaceBetween: 24,
  loop: true,
  autoplay: { delay: 3000, disableOnInteraction: false },
  pagination: { el: ".industries-swiper .swiper-pagination", clickable: true },
  breakpoints: {
    640: { slidesPerView: 2 },
    1024: { slidesPerView: 3 },
    1280: { slidesPerView: 4 },
  },
});

new Swiper(".results-swiper", {
  slidesPerView: 1,
  spaceBetween: 24,
  loop: true,
  autoplay: { delay: 4000, disableOnInteraction: false },
  pagination: { el: ".results-swiper .swiper-pagination", clickable: true },
  breakpoints: {
    640: { slidesPerView: 2 },
    1024: { slidesPerView: 3 },
  },
});

new Swiper(".testimonials-swiper", {
  slidesPerView: 1,
  spaceBetween: 24,
  loop: true,
  autoplay: { delay: 5000, disableOnInteraction: false },
  pagination: { el: ".testimonials-swiper .swiper-pagination", clickable: true },
  breakpoints: {
    768: { slidesPerView: 2 },
    1024: { slidesPerView: 3 },
  },
});
