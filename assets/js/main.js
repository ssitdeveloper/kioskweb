/**
 * KioskPro Hyderabad — main.js
 * Vanilla JS: Scroll Reveal, Hero Slider, Counters,
 * Sticky Nav, Tabs, Back-to-Top, Parallax
 */

(function () {
  'use strict';

  /* ── HELPERS ── */
  const $  = (sel, ctx = document) => ctx.querySelector(sel);
  const $$ = (sel, ctx = document) => [...ctx.querySelectorAll(sel)];

  /* ════════════════════════════════════════
     1. STICKY NAVBAR + TOPBAR HIDE
  ════════════════════════════════════════ */
  const nav    = $('#mainNav');
  const topbar = $('#topbar');

  window.addEventListener('scroll', () => {
    const y = window.scrollY;
    if (nav) nav.classList.toggle('scrolled', y > 60);
    if (topbar) topbar.style.transform = y > 80 ? 'translateY(-100%)' : '';
  }, { passive: true });


  /* ════════════════════════════════════════
     2. HERO SLIDER
  ════════════════════════════════════════ */
  const slides  = $$('.hero-slide');
  const dots    = $$('.hero-dot');
  let current   = 0;
  let sliderInt = null;

  function goToSlide(n) {
    slides[current]?.classList.remove('active');
    dots[current]?.classList.remove('active');
    current = (n + slides.length) % slides.length;
    slides[current]?.classList.add('active');
    dots[current]?.classList.add('active');
    triggerReveal(slides[current]);
  }

  function startSlider() {
    sliderInt = setInterval(() => goToSlide(current + 1), 6000);
  }
  function resetSlider() { clearInterval(sliderInt); startSlider(); }

  $('#heroNext')?.addEventListener('click', () => { goToSlide(current + 1); resetSlider(); });
  $('#heroPrev')?.addEventListener('click', () => { goToSlide(current - 1); resetSlider(); });
  dots.forEach((d, i) => d.addEventListener('click', () => { goToSlide(i); resetSlider(); }));

  // Swipe support
  let touchX = 0;
  $('#heroSlider')?.addEventListener('touchstart', e => { touchX = e.touches[0].clientX; }, { passive: true });
  $('#heroSlider')?.addEventListener('touchend', e => {
    const diff = touchX - e.changedTouches[0].clientX;
    if (Math.abs(diff) > 40) { goToSlide(current + (diff > 0 ? 1 : -1)); resetSlider(); }
  });

  startSlider();


  /* ════════════════════════════════════════
     3. SCROLL REVEAL (IntersectionObserver)
  ════════════════════════════════════════ */
  function triggerReveal(ctx = document) {
    $$('.reveal-up, .reveal-left, .reveal-right', ctx).forEach((el, i) => {
      const d = el.dataset.delay ? parseInt(el.dataset.delay) : (i * 80);
      setTimeout(() => el.classList.add('visible'), d);
    });
  }

  const revObs = new IntersectionObserver((entries) => {
    entries.forEach(en => {
      if (en.isIntersecting) {
        const el = en.target;
        const d  = el.dataset.delay ? parseInt(el.dataset.delay) : 0;
        setTimeout(() => el.classList.add('visible'), d);
        revObs.unobserve(el);
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

  $$('.reveal-up, .reveal-left, .reveal-right').forEach(el => revObs.observe(el));

  // Trigger first hero slide immediately
  triggerReveal(slides[0]);


  /* ════════════════════════════════════════
     4. ANIMATED COUNTERS
  ════════════════════════════════════════ */
  function animateCounter(el) {
    const target   = parseFloat(el.dataset.target);
    const isFloat  = target % 1 !== 0;
    const duration = 2000;
    const start    = performance.now();

    function step(ts) {
      const progress = Math.min((ts - start) / duration, 1);
      const ease = 1 - Math.pow(1 - progress, 3);
      const val  = target * ease;
      el.textContent = isFloat ? val.toFixed(1) : Math.round(val).toString();
      if (progress < 1) requestAnimationFrame(step);
    }
    requestAnimationFrame(step);
  }

  const cntObs = new IntersectionObserver(entries => {
    entries.forEach(en => {
      if (en.isIntersecting) {
        $$('.counter, .stat-num', en.target).forEach(animateCounter);
        cntObs.unobserve(en.target);
      }
    });
  }, { threshold: 0.3 });

  $$('.stats-section, .hero-stats').forEach(el => cntObs.observe(el));


  /* ════════════════════════════════════════
     5. SOFTWARE FEATURE TABS
  ════════════════════════════════════════ */
  const tabBtns  = $$('.tab-btn');
  const tabPanes = $$('.tab-pane');

  tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const target = btn.dataset.tab;
      tabBtns.forEach(b  => b.classList.remove('active'));
      tabPanes.forEach(p => p.classList.remove('active'));
      btn.classList.add('active');
      const pane = $(`[data-pane="${target}"]`);
      if (pane) {
        pane.classList.add('active');
        // Re-trigger reveals inside the newly visible pane
        $$('.reveal-up, .reveal-left, .reveal-right', pane).forEach(el => {
          el.classList.remove('visible');
          setTimeout(() => el.classList.add('visible'), 50);
        });
      }
    });
  });


  /* ════════════════════════════════════════
     6. BACK TO TOP
  ════════════════════════════════════════ */
  const btt = $('#backToTop');
  window.addEventListener('scroll', () => {
    btt?.classList.toggle('visible', window.scrollY > 400);
  }, { passive: true });
  btt?.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));


  /* ════════════════════════════════════════
     7. SIMPLE PARALLAX
  ════════════════════════════════════════ */
  const parallaxEl = $('.parallax-section');
  if (parallaxEl && window.innerWidth > 768) {
    window.addEventListener('scroll', () => {
      const rect  = parallaxEl.getBoundingClientRect();
      const speed = 0.3;
      const offset = rect.top * speed;
      parallaxEl.style.backgroundPositionY = `calc(50% + ${offset}px)`;
    }, { passive: true });
  }


  /* ════════════════════════════════════════
     8. SMOOTH SCROLL FOR ANCHOR LINKS
  ════════════════════════════════════════ */
  $$('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const id = a.getAttribute('href').slice(1);
      const target = document.getElementById(id);
      if (target) {
        e.preventDefault();
        const offset = 90;
        const top    = target.getBoundingClientRect().top + window.scrollY - offset;
        window.scrollTo({ top, behavior: 'smooth' });
        // Close mobile nav if open
        const navCollapse = $('#navMenu');
        if (navCollapse?.classList.contains('show')) {
          bootstrap.Collapse.getInstance(navCollapse)?.hide();
        }
      }
    });
  });


  /* ════════════════════════════════════════
     9. CONTACT FORM CLIENT VALIDATION
  ════════════════════════════════════════ */
  const form = $('.contact-form');
  if (form) {
    form.addEventListener('submit', function (e) {
      const name  = $('#name')?.value.trim();
      const email = $('#email')?.value.trim();
      const phone = $('#phone')?.value.trim();
      const emailRe = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      const phoneRe = /^[\+\d\s\-]{7,15}$/;

      if (!name || !email || !phone) {
        e.preventDefault();
        showFormAlert('Please fill in all required fields.', 'danger'); return;
      }
      if (!emailRe.test(email)) {
        e.preventDefault();
        showFormAlert('Please enter a valid email address.', 'danger'); return;
      }
      if (!phoneRe.test(phone)) {
        e.preventDefault();
        showFormAlert('Please enter a valid phone number.', 'danger'); return;
      }

      // Show loading state
      const btn = form.querySelector('.btn-submit');
      if (btn) { btn.disabled = true; btn.innerHTML = '<i class="bi bi-hourglass-split"></i> Sending...'; }
    });
  }

  function showFormAlert(msg, type) {
    let el = $('.form-alert');
    if (!el) {
      el = document.createElement('div');
      el.className = 'form-alert';
      form.prepend(el);
    }
    el.className = `alert alert-${type} form-alert`;
    el.innerHTML = `<i class="bi bi-exclamation-circle"></i> ${msg}`;
    el.scrollIntoView({ behavior: 'smooth', block: 'center' });
  }


  /* ════════════════════════════════════════
     10. NAVBAR MOBILE: Close on link click
  ════════════════════════════════════════ */
  $$('.navbar-nav .nav-link').forEach(link => {
    link.addEventListener('click', () => {
      const navCollapse = $('#navMenu');
      if (navCollapse?.classList.contains('show')) {
        bootstrap.Collapse.getInstance(navCollapse)?.hide();
      }
    });
  });

})();