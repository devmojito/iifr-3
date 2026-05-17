// IIFR — interactive enhancements
(function () {
  'use strict';

  // -------- Mobile nav sidebar --------
  const toggle = document.querySelector('.nav-toggle');
  const mobileNav = document.getElementById('mobile-nav');
  if (toggle && mobileNav) {
    mobileNav.removeAttribute('hidden');
    mobileNav.dataset.open = 'false';

    // Inject backdrop if not present
    let backdrop = document.querySelector('.mobile-nav-backdrop');
    if (!backdrop) {
      backdrop = document.createElement('div');
      backdrop.className = 'mobile-nav-backdrop';
      backdrop.dataset.open = 'false';
      document.body.appendChild(backdrop);
    }

    const setOpen = (open) => {
      mobileNav.dataset.open = open ? 'true' : 'false';
      backdrop.dataset.open = open ? 'true' : 'false';
      toggle.setAttribute('aria-expanded', String(!!open));
      document.body.classList.toggle('menu-open', !!open);
    };

    toggle.addEventListener('click', () => {
      setOpen(mobileNav.dataset.open !== 'true');
    });
    backdrop.addEventListener('click', () => setOpen(false));

    // Close button (inside the sidebar)
    const closeBtn = mobileNav.querySelector('.mobile-nav-close');
    if (closeBtn) closeBtn.addEventListener('click', () => setOpen(false));

    // Close on link tap
    mobileNav.querySelectorAll('a').forEach((link) => {
      link.addEventListener('click', () => setOpen(false));
    });

    // Close on Escape
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && mobileNav.dataset.open === 'true') setOpen(false);
    });
  }

  // -------- Programmes dropdown — keyboard support --------
  // Hover/focus handled by CSS. We add Escape-to-close + Enter/Space toggle.
  document.querySelectorAll('.nav .has-down').forEach((wrap) => {
    const trigger = wrap.querySelector('a');
    if (!trigger) return;
    trigger.setAttribute('aria-haspopup', 'true');
    trigger.setAttribute('aria-expanded', 'false');
    wrap.addEventListener('focusin', () => trigger.setAttribute('aria-expanded', 'true'));
    wrap.addEventListener('focusout', () => trigger.setAttribute('aria-expanded', 'false'));
    wrap.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        trigger.focus();
        trigger.setAttribute('aria-expanded', 'false');
        // blur to close
        if (document.activeElement && document.activeElement.blur) document.activeElement.blur();
      }
    });
  });

  // -------- Quiz options (single-select) --------
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
    opt.addEventListener('keydown', (e) => {
      if (e.key === ' ' || e.key === 'Enter') {
        e.preventDefault();
        opt.click();
      }
    });
  });

  // -------- Council modal (About page) --------
  const backdrop = document.getElementById('council-modal');
  if (backdrop) {
    const closeBtn = backdrop.querySelector('.modal-close');
    const photoEl = backdrop.querySelector('.modal-photo img');
    const nameEl = backdrop.querySelector('h3');
    const roleEl = backdrop.querySelector('.modal-role');
    const bioEl = backdrop.querySelector('.modal-bio');
    const linkEl = backdrop.querySelector('.modal-cta');

    function open(card) {
      const name = card.dataset.name || '';
      const role = card.dataset.role || 'Member, Academic Council';
      const photo = card.dataset.photo || '';
      const bio = card.dataset.bio || '';
      const linkedin = card.dataset.linkedin || '';
      if (photo) {
        photoEl.src = photo;
        photoEl.alt = name;
      }
      nameEl.textContent = name;
      roleEl.textContent = role;
      bioEl.textContent = bio || 'Short bio coming soon.';
      if (linkedin) {
        linkEl.href = linkedin;
        linkEl.style.display = 'inline-flex';
      } else {
        linkEl.style.display = 'none';
      }
      backdrop.dataset.open = 'true';
      document.body.style.overflow = 'hidden';
    }
    function close() {
      backdrop.dataset.open = 'false';
      document.body.style.overflow = '';
    }
    closeBtn.addEventListener('click', close);
    backdrop.addEventListener('click', (e) => {
      if (e.target === backdrop) close();
    });
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && backdrop.dataset.open === 'true') close();
    });
    document.querySelectorAll('.ccard').forEach((card) => {
      card.addEventListener('click', () => open(card));
      card.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          open(card);
        }
      });
    });
  }

  // -------- Scroll-triggered animations --------
  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (!reduceMotion && 'IntersectionObserver' in window) {
    const animSelectors = [
      '.sec-head',
      '.threecard', '.progcard', '.pcard', '.icard', '.partner',
      '.fcard', '.ccard', '.bcard', '.vbull',
      '.rcard', '.acard', '.tcard', '.tepair', '.ccpair',
      '.whycard', '.misscard', '.module',
      '.cred-block',
      '.about-grid > div',
      '.why-grid > div',
      '.quiz-grid > div',
      '.faculty-band > div',
      '.contact-grid > *',
      '.apply-grid > *',
      '.pdetail-grid > *',
      '.article-head', '.article-cover', '.article-body > *',
      '.final-inner',
    ].join(', ');

    const els = document.querySelectorAll(animSelectors);
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('in');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    els.forEach((el) => {
      el.classList.add('anim');
      // Cascade siblings of the same parent for a subtle stagger
      const parent = el.parentElement;
      if (parent) {
        const siblings = Array.from(parent.children).filter(c => c.matches && c.matches(animSelectors));
        const idx = siblings.indexOf(el);
        if (idx === 1) el.classList.add('anim-d1');
        else if (idx === 2) el.classList.add('anim-d2');
        else if (idx === 3) el.classList.add('anim-d3');
        else if (idx >= 4) el.classList.add('anim-d4');
      }
      observer.observe(el);
    });
  }
})();
