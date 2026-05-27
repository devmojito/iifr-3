# IIFR v5 — Change Log

A complete record of changes, organized by: (A) original feedback items already completed before this session, (B) original feedback items completed during this session, (C) additional design refinements requested during the session, and (D) items still pending/blocked.

---



These were already marked done on the feedback list and verified:

- **Home banner** image set with blue overlay removed
- **Eyebrow fonts** increased ~4 points site-wide
- **CTA above footer** removed from the home page
- **Floating "Apply Now"** buttons present site-wide (like V1)
- **Footer phone number** set to +91-79818-95005
- **About banner** height made consistent across pages + banner image set
- **Our Vision** — eyebrow removed
- **Our Mission** — icons used
- **Academic Council** — eyebrow text changed to appropriate label
- **CTA above footer** removed from the About page
- **Main menu** — "Research" renamed to "Research and Faculty"
- **ECP** — new content and page design in place

- **Home – ECP / EFM / Faculty Workshops card images:** replaced the generic placeholder images on the three home programme cards with the provided ECP, EFM, and Faculty Workshops images.
- **Home – Footer "Programmes" column removed:** this was marked done previously but the column was still in the code; removed it and rebalanced the footer grid from 4 columns to 3.
- **Home – "What is IIFR" verified against the Word document:** confirmed the copy is a word-for-word match.
- **About – "About IIFR" section:** swapped in the specified image (lamp-lighting ceremony) and confirmed the copy matches the document.
- **About – "WHY IIFR" → "OUR PURPOSE":** the section was relabeled (later redesigned again — see Section C, "Why IIFR Was Created").
- **About – Members row:** kept the three real members (Rohit Bansal, Siva Prasad, Aruna Reddy) per decision;
- **About – Academic Council redesign:** rebuilt from the v3.0 Academic Council document — 15 members in the document's priority order, each as a photo card with a click-to-open popup showing their full bio and a LinkedIn link.
- **Programmes – text check:** reviewed against the document; left as-is per decision.
- **Research – banner image:** confirmed already correct.

---

## C. Additional Design Refinements (this session)

### Page Heroes / Banners
- Redesigned **all page hero banners** to a consistent format: solid brand-blue panel on the left holding the text, softly blending into a clean (untinted) image on the right — no hard dividing line.
- Refined the hero gradient to a single smooth fade (full-bleed image, no visible seam).
- **Research hero:** repositioned the image so faces are no longer cropped at the top.

### Home Page
- Restructured the **"What is IIFR"** section into a two-column layout: heading + two paragraphs + two buttons on the left, **Strategic Partners** logo list on the right (merged the old standalone Strategic Partners section in).
- Fixed **partner logo sizing** so BVB, EFMD, and LatticEd appear balanced (EFMD enlarged to match the wider logos).

### Insights / Blog
- Copied the **three placeholder blog posts from V1** into v5 (Rethinking Faculty Development, Bridging Academia and Industry, The Future of Applied Research).
- Rebuilt the **Insights page** to list the three articles with images, dates, and excerpts.
- Created **three blog detail pages** with the full article content.
- Wired the **homepage Insights cards** to the detail pages (no more dead links).
- Moved the blog URLs to a nested structure: **`/insight/blog/<slug>.php`**, with router support and correct asset resolution on the deeper path.

### About Page
- **Leadership & Governance** rebuilt as a two-column layout in two separate bordered cards: Executive Board (Leadership + Members) on the left, Academic Council on the right — order preserved.
- Aligned both columns so the first photos start at the same height.
- Switched profile cards to **photo with name + designation centered below** (instead of text over the photo).
- **Our Mission / Our Vision reordered** so Mission is above Vision.
- **Our Mission:** centered cards with a large centered icon (removed the 1–4 number badges).
- **Our Vision:** restyled as a dark navy band with centered white text.
- **"Why IIFR Was Created"** section added (two columns: heading + intro on the left, four icon points on the right) on a light brand-blue tint background.
- **Typography pass:** unified all text on the page to the standard type scale — section titles 32px, sub-headings 21px, eyebrow labels 17px, body 16.5px, captions 14.5px.

### Footer
- Replaced text/glyph social icons with proper modern **SVG icons** (LinkedIn, X, YouTube, Email).
- Used the **same logo as the navbar** in the footer (and enlarged it).
- Added the **"Let's Build the Future of Education, Together"** CTA band at the top of the footer (with a pre-existing university/columns icon).
- Removed the **copyright** line.
- Tuned footer **padding** (top, bottom, and CTA band height).

### Site-wide
- Fixed the **scroll-to-top button** overlapping the floating "Apply Now" / "Email Us" buttons.

---

## D. Still Pending / Blocked

- **Social media links** — footer icons are in place but point to placeholders, pending the actual URLs from Anvesh.


---

*Generated as a summary of the v5 revision work. Hard-refresh pages (Ctrl/Cmd+Shift+R) to see CSS changes.*
