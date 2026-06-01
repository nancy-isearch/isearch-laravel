// ================================
// testimonial slider
// ================================
if (document.querySelector(".testimonial-mySwiper")) {
  const testimonialSwiper = new Swiper(".testimonial-mySwiper", {
    loop: true,
    slidesPerView: 1.2,
    spaceBetween: 20,

    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
      disableOnHover: true,
    },
    navigation: {
      nextEl: "#testimonial-btn-next",
      prevEl: "#testimonial-btn-prev",
    },
    breakpoints: {
      575: {
        slidesPerView: 2.2,
      },
    },
  });
}
// ================================
// seo-services-mySwiper
// ================================
if (document.querySelector(".seo-services-mySwiper")) {
  const seoServiceSwiper = new Swiper(".seo-services-mySwiper", {
    loop: true,
    slidesPerView: 2,
    spaceBetween: 16,

    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: "#seo-service-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: "#seo-services-next",
      prevEl: "#seo-services-prev",
    },
    breakpoints: {
      769: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      1025: {
        slidesPerView: 4,
      },
      1441: {
        slidesPerView: 5,
      },
    },
  });
}
// ================================
// faq
// ================================
if (document.getElementById("readMoreFaq")) {
  const readMore = document.getElementById("readMoreFaq");
  readMore.addEventListener("click", function () {
    let moreFaqs = document.getElementById("moreFaqs");
    if (moreFaqs.style.display === "none") {
      moreFaqs.style.display = "block";
      this.innerText = "Read Less";
    } else {
      moreFaqs.style.display = "none";
      this.innerText = "Read More";
    }
  });
}
// ================================
// App Init
// ================================
document.addEventListener("DOMContentLoaded", () => {
  // SEO Tabs (Event Delegation)
  function initSeoTabs() {
    const tabContainer = document.querySelector(".seo-tabs-wrapper");
    if (!tabContainer) return;
    tabContainer.addEventListener("click", (e) => {
      const tab = e.target.closest(".seo-tab");
      if (!tab) return;
      e.preventDefault();
      const tabs = tabContainer.querySelectorAll(".seo-tab");
      const panes = document.querySelectorAll(".tab-pane");
      tabs.forEach((t) => t.classList.remove("active"));
      panes.forEach((p) => p.classList.remove("active"));
      tab.classList.add("active");
      const target = document.querySelector(tab.getAttribute("href"));
      if (target) target.classList.add("active");
    });
  }
  initSeoTabs();
});
