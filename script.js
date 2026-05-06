// IIFR Homepage — light interactivity
(function () {
  'use strict';

  // Mobile nav toggle
  const toggle = document.querySelector('.nav-toggle');
  const mobileNav = document.getElementById('mobile-nav');
  if (toggle && mobileNav) {
    mobileNav.removeAttribute('hidden');
    mobileNav.dataset.open = 'false';
    toggle.addEventListener('click', () => {
      const open = mobileNav.dataset.open === 'true';
      mobileNav.dataset.open = open ? 'false' : 'true';
      toggle.setAttribute('aria-expanded', String(!open));
    });
    // close on link click
    mobileNav.querySelectorAll('a').forEach((link) => {
      link.addEventListener('click', () => {
        mobileNav.dataset.open = 'false';
        toggle.setAttribute('aria-expanded', 'false');
      });
    });
  }

  // Quiz options — single-select radio behavior
  const qopts = document.querySelectorAll('.quiz-opts .qopt');
  qopts.forEach((opt) => {
    opt.addEventListener('click', () => {
      qopts.forEach((o) => {
        o.classList.remove('active');
        o.setAttribute('aria-checked', 'false');
      });
      opt.classList.add('active');
      opt.setAttribute('aria-checked', 'true');
    });
    // keyboard support
    opt.addEventListener('keydown', (e) => {
      if (e.key === ' ' || e.key === 'Enter') {
        e.preventDefault();
        opt.click();
      }
    });
  });
})();
