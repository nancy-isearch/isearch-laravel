/* ── Swiper: Featured Services ── */
new Swiper(".feat-swiper", {
  slidesPerView: 1.15,
  spaceBetween: 20,
  navigation: { nextEl: ".feat-next", prevEl: ".feat-prev" },
  breakpoints: {
    600: { slidesPerView: 2.1, spaceBetween: 20 },
    900: { slidesPerView: 3, spaceBetween: 22 },
    1200: { slidesPerView: 4, spaceBetween: 24 },
  },
});

/* ── Swiper: Results ── */
new Swiper(".results-swiper", {
  slidesPerView: 1.1,
  spaceBetween: 20,
  loop: true,
  autoplay: { delay: 3500, disableOnInteraction: false },
  breakpoints: {
    640: { slidesPerView: 2.1, spaceBetween: 20 },
    1024: { slidesPerView: 3, spaceBetween: 24 },
  },
});

/* ── Swiper: Testimonials ── */
new Swiper(".testi-swiper", {
  slidesPerView: 1,
  spaceBetween: 22,
  loop: true,
  autoplay: { delay: 4000, disableOnInteraction: false },
  pagination: { el: ".testi-pag", clickable: true, dynamicBullets: true },
  breakpoints: {
    640: { slidesPerView: 2 },
    1024: { slidesPerView: 3 },
  },
});

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
  { threshold: 0.1 },
);
srEls.forEach((el) => io.observe(el));

/* ── Bento chart animation on scroll ── */
const benchIO = new IntersectionObserver(
  (entries) => {
    entries.forEach((e) => {
      if (e.isIntersecting) {
        e.target.classList.add("vis");
        benchIO.unobserve(e.target);
      }
    });
  },
  { threshold: 0.3 },
);
document.querySelectorAll("#benchBento").forEach((el) => benchIO.observe(el));

/* ── Filter tabs ── */
document.querySelectorAll(".ftab").forEach((btn) => {
  btn.addEventListener("click", () => {
    document
      .querySelectorAll(".ftab")
      .forEach((b) => b.classList.remove("active"));
    btn.classList.add("active");
    const f = btn.dataset.filter;
    document.querySelectorAll("#srvGrid .sc").forEach((card) => {
      const cat = card.dataset.cat || "";
      card.style.display = f === "all" || cat.includes(f) ? "" : "none";
    });
  });
});

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
  const x = cx + r * Math.cos(angle) - 32;
  const y = cy + r * Math.sin(angle) - 32;
  el.style.left = x + "px";
  el.style.top = y + "px";
});
