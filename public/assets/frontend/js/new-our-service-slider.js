document.addEventListener("DOMContentLoaded", function () {
  const scene = document.getElementById("scene");
  const cards = Array.from(document.querySelectorAll(".card"));
  const dotsEl = document.getElementById("dots");
  const btnPrev = document.getElementById("btnPrev");
  const btnNext = document.getElementById("btnNext");

  const btnsData = ["SEO Services", "UI/UX Design", "DevOps Services", "Social media marketing", "Web App Development", "Mobile App Development", "ORM"];

  const TOTAL = cards.length;
  const DURATION = 620; // ms
  const MOBILE_BREAKPOINT = 586;

  let widthPct = 84; // % of viewport width
  let current = 0;
  let animating = false;

  // ── Mobile check ──
  function isMobile() {
    return window.innerWidth <= MOBILE_BREAKPOINT;
  }

  // ── Derived measurements ──
  function cardW() {
    return (window.innerWidth * widthPct) / 100;
  }
  function cardH() {
    if (isMobile()) return null; // auto on mobile
    return 420;
  }
  function sceneH() {
    if (isMobile()) return null; // auto on mobile
    return cardH() + 40;
  }
  // X position for prev-peek: left edge partially visible, ~14% of card width showing
  function prevPeekX() {
    return -(cardW() * 0.04 + (window.innerWidth - cardW()) / 2);
  }
  // X position for next card waiting off-screen right
  function offRightX() {
    return window.innerWidth;
  }
  // X position for cards that are gone (off left)
  function offLeftX() {
    return -window.innerWidth;
  }

  const PREV_SCALE = 0.8;
  const PREV_OPACITY = 1;

  // ── Build dots ──
  cards.forEach((_, i) => {
    const d = document.createElement("span");
    d.className = "dot" + (i === 0 ? " active" : "");
    d.innerText = btnsData[i];
    d.addEventListener("click", () => goTo(i));
    dotsEl.appendChild(d);
  });
  const dots = Array.from(dotsEl.querySelectorAll(".dot"));

  // ── Apply size to all cards + scene height ──
  function applySize() {
    const w = cardW();
    const h = cardH();
    const sh = sceneH();

    scene.style.height = sh !== null ? sh + "px" : "400px";

    cards.forEach((c) => {
      c.style.width = w + "px";
      c.style.height = h !== null ? h + "px" : "360px";
    });
  }

  // ── Low-level transform helpers ──
  function setInstant(card, tx, scale, opacity, z) {
    card.style.transition = "none";
    apply(card, tx, scale, opacity, z);
  }

  function setAnimated(card, tx, scale, opacity, z) {
    card.style.transition = `transform ${DURATION}ms cubic-bezier(0.22,0.61,0.36,1),` + `opacity   ${DURATION}ms ease`;
    apply(card, tx, scale, opacity, z);
  }

  function apply(card, tx, scale, opacity, z) {
    card.style.transform = `translateX(${tx}px) scale(${scale})`;
    card.style.opacity = opacity;
    card.style.zIndex = z;
  }

  // ── Full static render (init + resize) ──
  function render() {
    applySize();
    cards.forEach((card, i) => {
      card.style.transition = "none";
      card.style.pointerEvents = "none";
      if (i === current) {
        apply(card, 0, 1, 1, 10);
        card.style.pointerEvents = "auto";
      } else if (i === current - 1) {
        apply(card, prevPeekX(), PREV_SCALE, PREV_OPACITY, 5);
      } else {
        apply(card, offRightX(), 0.9, 0, 1);
      }
    });
    dots.forEach((d, i) => d.classList.toggle("active", i === current));
    btnPrev.disabled = current === 0;
    btnNext.disabled = current === TOTAL - 1;
  }

  // ── Navigate ──
  function goTo(next) {
    if (animating || next === current || next < 0 || next >= TOTAL) return;
    animating = true;

    const prev = current;
    const forward = next > prev;
    const pX = prevPeekX();
    const orX = offRightX();
    const olX = offLeftX();

    applySize();

    if (forward) {
      // 1. Snap incoming card just off the right edge (invisible start)
      setInstant(cards[next], orX, 0.9, 0.15, 8);
      cards[next].getBoundingClientRect(); // force reflow

      // 2. Animate all three active cards simultaneously
      setAnimated(cards[next], 0, 1, 1, 10); // new current ← from right
      setAnimated(cards[prev], pX, PREV_SCALE, PREV_OPACITY, 5); // old current → becomes prev peek
      if (prev - 1 >= 0) {
        // old prev peek exits further left
        setAnimated(cards[prev - 1], olX, PREV_SCALE * 0.85, 0, 1);
      }

      // All older cards: snap off-left instantly
      cards.forEach((c, i) => {
        if (i < prev - 1) setInstant(c, olX, 0.8, 0, 1);
      });
      // All future cards: keep off-right instantly
      cards.forEach((c, i) => {
        if (i > next) setInstant(c, orX, 0.9, 0, 1);
      });
    } else {
      // BACKWARD
      const newPrev = next - 1;

      // Snap the "new prev" (one before next) to peek position if needed
      if (newPrev >= 0) {
        setInstant(cards[newPrev], pX, PREV_SCALE, PREV_OPACITY, 5);
        cards[newPrev].getBoundingClientRect();
      }

      // Animate:
      //   next (was prev peek on left) → slides right into center
      //   prev (was current)           → slides right off screen
      setAnimated(cards[next], 0, 1, 1, 10); // new current ← from left peek
      setAnimated(cards[prev], orX, 0.9, 0, 6); // old current → exits right

      if (newPrev >= 0) {
        setAnimated(cards[newPrev], pX, PREV_SCALE, PREV_OPACITY, 5);
      }

      // All cards to the right of prev: snap off-right
      cards.forEach((c, i) => {
        if (i > prev) setInstant(c, orX, 0.9, 0, 1);
      });
      // All cards further left than newPrev: snap off-left
      cards.forEach((c, i) => {
        if (i < newPrev) setInstant(c, olX, 0.8, 0, 1);
      });
    }

    current = next;
    dots.forEach((d, i) => d.classList.toggle("active", i === current));
    btnPrev.disabled = current === 0;
    btnNext.disabled = current === TOTAL - 1;

    setTimeout(() => {
      cards.forEach((c, i) => {
        c.style.pointerEvents = i === current ? "auto" : "none";
      });
      animating = false;
    }, DURATION + 30);
  }

  // ── Buttons ──
  btnPrev.addEventListener("click", () => goTo(current - 1));
  btnNext.addEventListener("click", () => goTo(current + 1));

  // ── Swipe / drag ──
  let dragX = null;
  scene.addEventListener("pointerdown", (e) => {
    dragX = e.clientX;
  });
  window.addEventListener("pointerup", (e) => {
    if (dragX === null) return;
    const dx = dragX - e.clientX;
    if (Math.abs(dx) > 60) dx > 0 ? goTo(current + 1) : goTo(current - 1);
    dragX = null;
  });

  // ── Keyboard ──
  document.addEventListener("keydown", (e) => {
    if (e.key === "ArrowRight") goTo(current + 1);
    if (e.key === "ArrowLeft") goTo(current - 1);
  });

  // ── Resize ──
  window.addEventListener("resize", render);

  // ── Init ──
  render();
});
