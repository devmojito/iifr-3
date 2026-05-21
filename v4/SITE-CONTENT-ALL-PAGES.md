# IIFR website — full page copy, links, and colors

Generated from the PHP templates and styles in this repository (`app/*.php`, `partials/`, `assets/css/iifr-redesign.css`, `assets/scss/default/_variables.scss`). Contact email is rendered from `IIFR_INFO_EMAIL` (default in `iifr-config.php`: **info@iifr.global**).

**Note on copy consistency (as in repo):** EFM cohort start dates differ between pages (**July 2026** on `apply.php` vs **October 2026** on `efm.php` sidebar). Minimum work-experience language differs (**15 years** in `efm.php` “Consider the EFM” list vs **10+ years** in `efm.php` sidebar and comparison table, and **10 years** on `programmes.php` / `apply.php`). All versions are transcribed in the sections for those routes.

**HTML document titles** (via `partials/style.php`: `IIFR - {page_title}`):

| Route / file | `$page_title` |
|--------------|----------------|
| `/` · `home.php` | IIFR — International Institute for Faculty & Research |
| `about.php` | About IIFR — IIFR |
| `faculty.php` | Faculty — IIFR |
| `programmes.php` | Our Programmes — IIFR |
| `ecp.php` | Educators' Certificate Programme (ECP) — IIFR |
| `efm.php` | Executive Fellow in Management (EFM) — IIFR |
| `apply.php` | Apply — IIFR |
| `contact.php` | Contact Us — IIFR |
| `insights.php` | Insights — IIFR |
| `404.php` | Page Not Found — IIFR |

**Redirect-only routes (no HTML body in repo):** `programs.php` → 301 `programmes.php`; `people.php` → 301 `faculty.php`; `pracademic-identity.php` → 301 `about.php`; `befm.php` → 301 `efm.php`; `becp.php` → 301 `ecp.php`.

---

## Brand and design colors

### IIFR redesign scope (`assets/css/iifr-redesign.css` — `:root`)

| Token | Value | Role |
|-------|--------|------|
| `--iifr-navy` | `#0d1b3e` | Primary navy / headings / dark UI |
| `--iifr-gold` | `#c9900c` | Primary gold / accents / CTAs |
| `--iifr-gold-light` | `#e8a81a` | Lighter gold |
| `--iifr-white` | `#ffffff` | White |
| `--iifr-light-bg` | `#f7f7f5` | Light page background |
| `--iifr-text-dark` | `#1a1a2e` | Body text (dark) |
| `--iifr-text-mid` | `#444444` | Mid text |
| `--iifr-text-light` | `#777777` | Muted text |
| `--iifr-border` | `#e0ddd6` | Borders |

**Additional hex / rgba used in the same stylesheet (selected):**

- Section surfaces: `.iifr-cream` `#f6f2e9`; `.iifr-paper` `#fafaf6`; `.iifr-ink` `#0a1c3d` (text `#ffffff`)
- Deep bands / gradients: `#06122a`, `#050d20`, `#0a1c3d`, `#112651`
- CTA / card gold text: `#e3b85a`
- Button hover gold: `#b07d0a`
- Navy hover: `#1a2a55`
- Assorted translucent gold overlays: `rgba(200, 160, 60, …)`, white overlays `rgba(255, 255, 255, …)`
- Footer / overlays: `rgba(0, 0, 0, 0.22)`; quote/CTA overlay example: `rgba(26, 0, 6, 0.85)` (404 CTA section inline style)

### Global theme variables (`assets/scss/default/_variables.scss` — `:root`)

These apply where loaded (broader template / legacy); document for completeness:

| Token | Value |
|-------|--------|
| `--rt-theme` | `#09A24F` |
| `--rt-primary`, `--rt-primary-1`, `--rt-primary-2`, `--rt-hover` | `#02132D` |
| `--rt-secondary` | `#110C2D` |
| `--rt-footer`, `--footer-bg` | `#181818` |
| `--rt-body` | `#737477` |
| `--rt-heading` | `#262626` |
| `--rt-white` | `#fff` |
| `--rt-border` | `#D9D9D9` |
| `--rt-line` | `#eee` |
| `--copyright-border` | `#242424` |
| `--light-white` | `#f6f6f6` |
| `--color-success` | `#3EB75E` |
| `--color-danger` | `#FF0003` |
| `--color-warning` | `#FF8F3C` |
| `--color-info` | `#1BA2DB` |
| Social: `--color-facebook` `#3B5997`; `--color-twitter` `#1BA1F2`; `--color-youtube` `#ED4141`; `--color-linkedin` `#0077B5`; `--color-pinterest` `#E60022`; `--color-instagram` `#C231A1`; `--color-vimeo` `#00ADEF`; `--color-twitch` `#6441A3`; `--color-discord` `#7289da` |

### Inline / per-component colors in PHP (not full CSS inventory)

- Preloader wrapper: `background:#fff`
- Home / About media tag caption: `color:rgba(255,255,255,0.7)` (inline)
- Final CTA eyebrow on several pages: `color:#e3b85a`
- Apply programme cards: `<strong style="color:#fff;">`
- 404 hero number: `color:#02132D`

### External styles / fonts (head)

- `https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,600&family=Source+Sans+3:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap`

---

## Site-wide chrome (every main page)

These blocks appear with the main layout (header + footer + off-canvas + modal). **All navigation and footer links below are repeated on each delivered page.**

### Primary header (`partials/header/transparent-header.php`)

- Logo: [/`](/) — `assets/logo.png`, alt **IIFR**, aria-label **IIFR — Home**
- Nav:
  - [about.php](about.php) — **About Us**
  - [faculty.php](faculty.php) — **Faculty**
  - [programmes.php](programmes.php) — **Programmes** (submenu: [ecp.php](ecp.php) **ECP**; [efm.php](efm.php) **EFM**)
- CTAs: [apply.php](apply.php) **Apply**; [contact.php](contact.php) **Contact Us**
- Burger: aria-label **Open menu**

### Off-canvas / mobile (`partials/components/offcanvase.php`)

- Logo: [/](/) — **IIFR**
- **International Institute for Faculty & Research — for India and the Global South.**
- [mailto:info@iifr.global](mailto:info@iifr.global) (uses `IIFR_INFO_EMAIL`)
- [Google Maps — Bharatiya Vidya Bhavan, KG Marg, Copernicus Marg, New Delhi, Delhi 110001](https://www.google.com/maps?q=Bharatiya+Vidya+Bhavan%2C+KG+Marg%2C+Copernicus+Marg%2C+New+Delhi%2C+Delhi+110001) — display **Bharatiya Vidya Bhavan, KG Marg, New Delhi**
- **Follow Us:** placeholder social `#` LinkedIn, YouTube, Instagram
- Mobile menu:
  - [/](/) **Home**
  - [about.php](about.php) **About Us**
  - [faculty.php](faculty.php) **Faculty**
  - **Programmes** → [programmes.php](programmes.php) **All programmes**; [ecp.php](ecp.php) **ECP — Educators' Certificate Programme**; [efm.php](efm.php) **EFM — Executive Fellow in Management**
  - [apply.php](apply.php) **Apply**
  - [contact.php](contact.php) **Contact**

### Footer (`partials/footer/footer__default.php`)

- Brand: [/](/) aria-label **IIFR — Home** — `assets/logo.png` alt **IIFR**
- **India's institute dedicated to faculty research, teaching excellence, and academic leadership — for India and the Global South.**
- Address link: [Google Maps query Bharatiya Vidya Bhavan, KG Marg, New Delhi](https://www.google.com/maps?q=Bharatiya+Vidya+Bhavan%2C+KG+Marg%2C+New+Delhi) — **Bharatiya Vidya Bhavan, KG Marg, New Delhi 110001**
- Email: mailto `IIFR_INFO_EMAIL` (display same)
- Phone: [tel:+911161200000](tel:+911161200000) **+91 11 6120 0000**
- **Connect with us** — social placeholder `#` (LinkedIn, X/Twitter, YouTube, Instagram) with aria-labels **LinkedIn**, **X / Twitter**, **YouTube**, **Instagram**
- **Explore:** [/](/) Home; [about.php](about.php) About Us; [faculty.php](faculty.php) Faculty; [programmes.php](programmes.php) Programmes; [insights.php](insights.php) Insights; [contact.php](contact.php) Contact
- **Programmes:** [ecp.php](ecp.php) **ECP** *Educators' Certificate Programme*; [efm.php](efm.php) **EFM** *Executive Fellow in Management*; [programmes.php](programmes.php) All Programmes; [apply.php](apply.php) Apply Now
- **Stay In The Loop** — **Insights on faculty development, research, and academic leadership — delivered occasionally.** Form: label **Email address**, placeholder **Your email address**, button aria-label **Subscribe**, note **No spam. Unsubscribe anytime.** (form `action="#"`)
- Legal: **© {current year} IIFR — International Institute for Faculty & Research. All rights reserved.**
- **Made with** ❤️ **by** [Marketing Mojito](https://marketingmojito.com/) (target `_blank`, `rel="noopener noreferrer"`)

### Apply modal (`partials/components/apply-modal.php`)

- Title: **Apply — ECP or EFM**
- Close: aria-label **Close**
- **Leave your details and we will respond with programme-specific application steps.**
- Form `action` [contact-form-submit.php](contact-form-submit.php); hidden **return_to** `apply.php`; **context** `Apply`; honeypot label **Website**
- **Name \*** — **Email \*** — **Phone** *(optional)* — Submit: **Submit application enquiry**

### Inquiry form defaults (`partials/components/inquiry-form.php`)

- Default heading **Send us a message**; intro **Share your question or enquiry and we will get back to you.**
- Fields: **Name \*** — **Email \*** — **Phone** *(optional)* — **Message \*** placeholder **How can we help?** — **Send message**
- Success: **Thank you — your message has been sent. We will reply soon.**

### Base layout (`app/base.php`)

- Preloader video `/assets/preloader.mp4`

---

## Page: Home (`/` · `app/home.php`)

### Hero

- **Welcome to IIFR**
- **Building the Future of Faculty, Research, and Academic Leadership**
- **IIFR strengthens faculty capability, research excellence, and academic leadership for India and the Global South.**
- [programmes.php](programmes.php) **Explore Programmes**; [contact.php](contact.php) **Partner With Us**

### Credential strip

- Image alt **Bharatiya Vidya Bhavan** — **85+ Years** **of institutional heritage**
- Image alt **EFMD** — **EFMD Recognised** **Global quality benchmarking**

### Three Pathways

- Eyebrow **Three Pathways** — **Three pathways to transform your impact**
- **Designed for leaders in academia, industry, and research who are ready to create lasting influence in higher education.**
- **Industry to Academia** — **Senior executives and CXOs leveraging decades of experience to become educators in management institutes — integrating practical wisdom with academic frameworks to nurture the next generation.**
- **Academic Faculty Excellence** — **For management faculty, researchers, and academics elevating pedagogical practice, research impact, and global credibility through internationally recognised certification.**
- **Applied Research** — **For CXOs, senior managers, and subject matter experts converting decades of expertise into lasting academic legacy through applied research and scholarship — without leaving practice.**

### About IIFR (home block)

- Media alt **IIFR campus** — tag **2026** area: **Established** / **Bharatiya Vidya Bhavan**
- **About IIFR** — **An autonomous academic institute for India's faculty future.**
- **The International Institute for Faculty & Research (IIFR) is housed within Bharatiya Vidya Bhavan's Delhi Campus, established to strengthen faculty capability, research excellence, and academic leadership across India and the Global South.**
- **Designed in response to the evolving needs of higher education and professional practice, IIFR helps build future-ready educators for lasting institutional transformation.**
- Stats: **2** Flagship programmes; **85+** Years of BVB heritage; **3yr** Doctoral fellowship
- [about.php](about.php) **Institute Overview**; [faculty.php](faculty.php) **Meet Our Faculty**

### Our Programmes (cards)

- **Our Programmes** — **Programmes designed for academic and professional excellence**
- **Practice-oriented learning experiences for educators, leaders, and researchers.**
- Card 1 → [ecp.php](ecp.php): tag **8-Day Intensive · Flagship** — **Educators' Certificate Programme (ECP)** — **An intensive programme designed to build a new category of educators who move seamlessly between industry and academia.** — **View ECP details**
- Card 2 → [efm.php](efm.php): tag **3-Year Doctoral · Fellowship** — **Executive Fellow in Management (EFM)** — **A doctoral-equivalent fellowship for senior practitioners ready to engage with the rigour of academic scholarship without abandoning practice.** — **View EFM details**
- [programmes.php](programmes.php) **Explore all programmes**

### Quote band (deep)

- **Where the boardroom meets the lectern**
- **You have the understanding. Now scale its impact.**
- **India's National Education Policy 2020 envisions Professors of Practice — experienced industry professionals who bring real-world insight into the classroom. IIFR is the institution purpose-built to make this transition seamless, credible, and globally recognised.**
- Blockquote: **We don't teach you to teach — we help you educate, research, share, and create knowledge.**
- [programmes.php](programmes.php) **Explore Programmes**

### Why IIFR · Why Now

- **Why IIFR · Why Now** — **A national intervention for a foundational gap.**
- **As India climbs the value ladder, the economy needs not just skilled labour but future-ready human capital that can solve complex problems. IIFR is the bridge between academia, industry, and policy — building the faculty ecosystem India's knowledge economy demands.**
- **Without faculty transformation, broader systemic reforms like NEP 2020 will not achieve their intended impact.**
- [about.php](about.php) **Read our perspective**
- Issues (each links [about.php](about.php)):
  - **31%** **Faculty shortage** — **Vacancies in prestigious Indian schools of management, exceeding 50% in Tier 2 institutions.**
  - **1/5** **Relevance deficit** — **Fewer than 1 in 5 management research papers translate into industry-relevant practice across finance, tech, and policy.**
  - **$70B** **Geographic deficit** — **Brain drain costs the country billions and removes 1.3M+ students from the local ecosystem due to inadequate options.**

### Mission band

- **Our Mission** — **Transforming India's faculty ecosystem.**
- **IIFR is designed as a focused national intervention — a place where faculty capability, applied research, and academic leadership compound into institutional change for India and the Global South.**
- **01** **Cultivating Academic Leaders** — **A new generation of faculty equipped to drive pedagogical innovation and institutional change.**
- **02** **Advancing Applied Discovery** — **Interdisciplinary research that solves complex real-world challenges and shapes global policy.**
- **03** **Developing Scholar-Practitioners** — **Leaders who navigate the fluid intersection of classroom, boardroom, and government.**
- **04** **Building a Global Network** — **A high-impact community linking the world's leading scholars and industry practitioners.**
- [about.php](about.php) **Read Our Mission**

### Governance & Leadership

- **Governance & Leadership** — **The faculty and leaders driving IIFR's mission**
- **Stewards of academic excellence, institutional integrity, and global engagement.**
- **Shri Banwarilal Purohit** — **Chairman** — **Former Governor of Punjab, Tamil Nadu, and Assam — a seasoned political administrator and a passionate academic. Chairman of Bharatiya Vidya Bhavan schools.**
- **Dr. Rajendra Srivastava** — **Vice Chairman** — **A global academic leader across the US, India, and Singapore — 40+ years as an educator, researcher, and brand strategist. Pioneer in launching Executive PhD programmes globally.**
- [faculty.php](faculty.php) **View all faculty**

### Final CTA

- **Begin Your Journey** — **Build the future of education with us.**
- **Whether you're an industry leader entering academia or a faculty member seeking deeper relevance, IIFR has a pathway for you.**
- [programmes.php](programmes.php) **Explore Programmes**; [contact.php](contact.php) **Talk to us**

---

## Page: About (`about.php`)

### Hero

- **About** — **About IIFR**
- **An autonomous academic institute strengthening faculty capability, research excellence, and academic leadership across India and the Global South.**
- [programmes.php](programmes.php) **Explore Programmes**; [contact.php](contact.php) **Talk to Our Team**

### About + stats

- Image alt **IIFR institute context** — **2026** **Established** / **Bharatiya Vidya Bhavan**
- **About IIFR** — **India's foundational intervention for faculty transformation.**
- **IIFR is an autonomous academic unit, housed within Bharatiya Vidya Bhavan's Delhi Campus, established to strengthen faculty capability, research excellence, and academic leadership across India and the Global South. India's higher education transformation under the National Education Policy (NEP) 2020 demands a parallel transformation in its faculty. Without future-ready educators, systemic reform cannot achieve its intended impact. IIFR is designed as that foundational intervention.**
- **India's higher education system is undergoing profound transformation under NEP 2020, which envisions multidisciplinary universities, a vibrant research culture, and global competitiveness. Yet a foundational gap persists: the chronic shortage of qualified, future-ready faculty.**
- Stats: **85+** Years of BVB heritage; **2** Flagship programmes; **3yr** Doctoral programme

### Vision & Mission

- **Foundation** — **Vision & Mission**
- **Our Vision** — **India's leading institute for faculty & academic leadership.** — **To be India's leading institute for faculty and academic leadership development, serving India and the Global South.**
- **Our Mission** — **Strengthening higher education through faculty capability.** — **To strengthen higher education by building faculty capability in teaching, research, innovation, institutional leadership, and academic-industry collaboration, aligned with NEP 2020 and global standards.**

### Why IIFR · Why Now

- **The faculty gap behind India's reform agenda.**
- **As India migrates higher up the value ladder, the economy needs not only skilled labour but future-ready human capital that can solve complex problems. India faces a shortage of qualified faculty, limited research productivity, weak industry-academia linkages, and outdated pedagogical approaches.**
- **IIFR serves as the bridge between academia, industry, and policy to build innovation-focused human capital.**
- Stat rows use `href="#"` onclick `return false`:
  - **31%** **Faculty vacancies** — **In prestigious Indian Schools of Management.**
  - **50%+** **Tier 2 vacancies** — **Faculty shortage in Tier 2 institutions exceeds half of all positions.**
  - **₹70B** **Annual brain drain** — **Estimated annual brain-drain cost from outbound students.**

### The IIFR Model

- **Centre of Excellence** — **India's benchmark institution for faculty development — setting the standard for rigorous, globally relevant faculty education.**
- **Research Catalyst** — **Driving research productivity, citation impact, and global visibility through structured programmes and research communities focused on problems worth solving.**
- **Bridge Builder** — **Connecting academia, industry, and policy to enable the seamless exchange of knowledge, expertise, and capabilities across the Global South.**
- **Global South Hub** — **Building India's role as the leading centre for faculty capability development across South Asia, Africa, and Southeast Asia.**

### Aims (6 cards)

- **Faculty Pipeline** — **Build a strong pipeline of qualified and research-ready faculty across India and the Global South.**
- **Research Excellence** — **Enhance research quality, productivity, and global visibility of Indian academic scholarship.**
- **AI in Pedagogy** — **Integrate digital and instructional technologies — including AI — into pedagogy at India's higher education institutions.**
- **Academic Leaders** — **Develop academic leaders with the capabilities to drive institutional transformation.**
- **Global Network** — **Create a global network of educators, scholars, and practitioners connected to EFMD's international ecosystem.**
- **Pracademic Pathways** — **Strengthen academia–industry–policy collaboration through structured pracademic pathways.**

### Our Approach (4 cards)

- **Balancing Relevance & Rigour** — **Ensuring that all programmes combine academic depth with practical applicability and real-world impact.**
- **Integrating Theory & Practice** — **Bridging the gap between what industry knows and what academia teaches through practice-based programmes.**
- **Multi-disciplinary Thinking** — **Moving beyond narrow functional disciplines to combine finance, technology, public policy, and leadership perspectives.**
- **Industry–Academia–Policy Collaboration** — **Creating structured pathways for knowledge exchange between practitioners, scholars, and policymakers.**

### Who we serve (4 cards)

- **Faculty & Researchers** — **New and existing faculty seeking global benchmarking through EFMD certification.**
- **Industry Leaders** — **C-level industry leaders who want to bring their knowledge to the classroom and leave a lasting legacy.**
- **L&D Professionals** — **L&D professionals seeking pathways to institutionalise corporate wisdom.**
- **Academic Institutions** — **Academic institutions looking to build faculty excellence and practice-orientation.**

### Quote band

- **A National Benchmark** — **India's first faculty-centric institute.**
- **IIFR is India's first faculty-centric institute — a national benchmark for teaching excellence, research capability, and academic leadership development.**
- **Programme design involves senior faculty from EIBC member schools, including MDI Gurgaon, ISB, and IIM Nagpur. Programmes are co-certified by the European Foundation for Management Development (EFMD).**

### Executive Board

- **Leadership** — **Executive Board** — **Strategic oversight, institutional stewardship, and long-term leadership for IIFR's mission.**
- **Shri Banwari Lal Purohit** — **Chairman, Delhi Kendra · Chairman**
- **Prof. Rajendra Kumar Srivastava** — **Vice Chairman**
- **Shri K. Siva Prasad** — **Director, Delhi Kendra · Member Secretary**
- **Shri P. R. Kaushik** — **Registrar, Delhi Kendra · Member**
- **Shri Rohit Bansal** — **Member**
- **Ms. Aruna Reddy** — **Member**

### Outlook

- Image alt **Bharatiya Vidya Bhavan Mehta Bhavan, New Delhi** — caption **Looking ahead**
- **Outlook** — **The future we're creating.**
- **In the long term, IIFR envisions its role as a significant catalyst for the seamless exchange of knowledge, expertise, and capabilities across industry, academia, and policy making — through interventions in practice-based research and higher education across the Global South.**
- **Knowledge Exchange** — **Seamless flow of expertise and capabilities across industry, academia, and policy making.**
- **Practice-Based Research** — **Interventions that translate scholarship into real-world impact for institutions and industry.**
- **Global South Leadership** — **Driving higher-education capability across South Asia, Africa, and Southeast Asia.**
- [contact.php](contact.php) **Contact Us**

### Final CTA

- **Ready to Engage** — **Shape the future of education with IIFR.**
- **Join IIFR's mission to build India's most impactful faculty development ecosystem. Explore our programmes or get in touch.**
- [programmes.php](programmes.php) **Our Programmes**; [contact.php](contact.php) **Get in Touch**

---

## Page: Faculty (`faculty.php`)

### Hero

- **Our People** — **Faculty**
- **Globally connected scholars, accomplished practice leaders, and scholar-practitioners shaping IIFR's mission.**
- Apply opens modal `#iifrApplyModal` **Apply Now**; [programmes.php](programmes.php) **Explore Programmes**

### Grid intro

- **A Diverse Faculty Ecosystem** — **Meet the IIFR faculty.**

### Faculty names + LinkedIn

Each name; LinkedIn `href` as in source:

- **Dr. Rajendra Srivastava** — [https://www.linkedin.com/in/rajendra-srivastava-816643118](https://www.linkedin.com/in/rajendra-srivastava-816643118)
- **Prof. Ramakrishna Velamuri** — [https://www.linkedin.com/in/ramavelamuri/](https://www.linkedin.com/in/ramavelamuri/)
- **Prof. Uday B. Desai** — [https://www.linkedin.com/in/ubdesai/](https://www.linkedin.com/in/ubdesai/)
- **Charles Dhanaraj** — [https://www.linkedin.com/in/charles-dhanaraj-949566](https://www.linkedin.com/in/charles-dhanaraj-949566)
- **Sundar Bharadwaj** — [https://www.linkedin.com/in/sundarbharadwajmarketingprof](https://www.linkedin.com/in/sundarbharadwajmarketingprof)
- **Vish Krishnan** — [https://www.linkedin.com/in/vish-krishnan-0ab0601](https://www.linkedin.com/in/vish-krishnan-0ab0601)
- **Ashish Sinha** — [https://www.linkedin.com/in/ashish-sinha-7a021522](https://www.linkedin.com/in/ashish-sinha-7a021522)
- **Prakash Bagri** — [https://www.linkedin.com/in/prakashbagri](https://www.linkedin.com/in/prakashbagri)
- **Shankar Prakash** — [https://www.linkedin.com/in/shankarprakash](https://www.linkedin.com/in/shankarprakash)
- **Muralikrishnan B** — [https://www.linkedin.com/in/muralikrishnan](https://www.linkedin.com/in/muralikrishnan)

### Final CTA

- **Join Our Network** — **Want to be part of the IIFR ecosystem?**
- **IIFR brings together academic leaders, industry experts, and institution builders. Explore how you can contribute.**
- [contact.php](contact.php) **Contact Us**; [programmes.php](programmes.php) **Explore Programmes**

---

## Page: Programmes (`programmes.php`)

### Hero

- **Programmes** — **Our Programmes**
- **Two flagship pathways: an intensive certificate for educators bridging industry and academia, and a doctoral-equivalent fellowship for senior practitioners who want scholarly rigour without leaving practice.**
- Modal **Apply Now**; [contact.php](contact.php) **Talk to Admissions**

### Two flagship cards

- [→ #ecp](#ecp): **8-Day Intensive · Flagship** — **Educators' Certificate Programme (ECP)** — **Build a new category of educators who move seamlessly between industry and academia. AI-powered course design, case writing, and academic leadership.** — **Read about ECP**
- [→ #efm](#efm): **3-Year Doctoral · Fellowship** — **Executive Fellow in Management (EFM)** — **India's most ambitious academic credential for senior executives. Earn a doctoral-equivalent degree certified by BVB, IIFR, and EFMD.** — **Read about EFM**

### ECP section `#ecp`

- **Programme · ECP** — **Educators' Certificate Programme.**
- **The ECP is designed to build a new category of educators — one that moves seamlessly between industry and academia. ECP bridges the gap between what industry knows and what academia teaches.**
- **Consider the ECP if you are:**
  - **A senior executive transitioning into academic roles as visiting faculty or Professor of Practice**
  - **An academic or faculty seeking to deepen practical relevance and climb the capability ladder**
  - **A corporate trainer or L&D professional seeking internal training and upskilling**
- Image alt **ECP — Educators' Certificate Programme**; tag **ECP** / **8-Day Intensive** / **Flagship Programme**
- [ecp.php](ecp.php) **Full ECP Details**; modal **Apply Now**

### Curriculum (ECP)

- **Curriculum** — **What you'll learn.** — **Four modules across eight intensive days, designed for working educators and practitioners.**
- **Curriculum Development** — **Architecting a course from scratch. Learning-objective setting. Module sequencing.**
- **Pedagogy & Case Writing** — **Writing cases using AI and web resources. Case-teaching technique. Facilitating case discussions.**
- **Advanced Tools in AI** — **Using LLMs and AI tools for case development and AI-powered course design.**
- **Academic Leadership** — **Four days covering major business frameworks. Integrating multiple disciplinary lenses.**

### AI focus (ECP)

- **Key Focus** — **AI in Learning & Teaching.**
- **AI is not one tool in the kit. It is a new mode of pedagogical delivery running through every module. At the ECP, you will learn how to reduce the 12-month traditional case-study development cycle to days through:**
  - **Assisted case writing** — **AI-assisted case development using LLMs and web resources.**
  - **Course design** — **AI-powered curriculum architecture and learning-objective setting.**
  - **Content creation** — **AI-integrated teaching materials and assessments.**
  - **Student engagement** — **AI-enabled personalised learning pathways and classroom analytics.**

### Stats bar

- **8** Day intensive ECP; **4** Learning modules; **3yr** EFM fellowship

### EFM section `#efm`

- **Programme · EFM** — **Executive Fellow in Management.**
- **The EFM is a doctoral-equivalent fellowship for senior practitioners ready to engage with the rigour of academic scholarship — without abandoning the world of practice. India's most ambitious academic credential for senior corporate executives.**
- **Consider the EFM if you are:**
  - **Ready to explore a comprehensive research fellowship equivalent to an Executive PhD**
  - **Looking to earn your Executive PhD in approximately 3 years vs. 5 years for a full-time PhD**
  - **Bringing minimum 10 years' work experience; Bachelor's degree required, MBA preferred**
  - **Passionate about personal branding by mentoring next-generation leaders**
- Image alt **EFM — Executive Fellow in Management**; tag **EFM** / **3-Year Doctoral** / **Executive Fellowship**
- [efm.php](efm.php) **Full EFM Details**; modal **Apply Now**

### EFM outcomes

- **Key Outcomes · After 3 Years** — **What you walk away with.**
  - **Earned your doctoral-equivalent degree certified by BVB, IIFR, and EFMD**
  - **Leveraged your industry experience and tacit knowledge, blending it with decision-making frameworks**
  - **Capable of analysing and presenting findings based on sound scientific evidence**
  - **Capable of designing and conducting research that can be applied directly to practice**
  - **Enhanced competence, credibility, and credentials to teach at a business school**
- **Co-certified by** (images): Bharatiya Vidya Bhavan; EFMD
- Modal **Register Now**

### Final CTA

- **Pracademic Pathway** — **ECP is the stepping stone. EFM is the pinnacle.**
- **Begin your journey towards the Pracademic identity. Whether you're an industry leader entering academia or a faculty member seeking deeper relevance, IIFR has a pathway for you.**
- [contact.php](contact.php) **Contact Us**; [ecp.php](ecp.php) **Explore ECP**

---

## Page: ECP (`ecp.php`)

### Hero

- **Programme · ECP** — **Educators' Certificate Programme (ECP)**
- **An 8-day intensive programme designed to build a new category of educators — one that moves seamlessly between industry and academia.**
- Modal **Apply for ECP**; [efm.php](efm.php) **Compare with EFM**

### Main column

- Image alt **ECP Programme**
- **About the Programme** — **The ECP is designed to build a new category of educators, one that moves seamlessly between industry and academia. ECP bridges the gap between what industry knows and what academia teaches.** — **Whether you are a senior executive transitioning into academic roles, a faculty member seeking to deepen practical relevance, or a corporate trainer seeking upskilling — the ECP equips you with the tools, frameworks, and AI-powered methods to transform your teaching and leadership.**

- **Consider the ECP if you are:**
  - **A senior executive transitioning into academic roles as visiting faculty or Professor of Practice**
  - **An academic or faculty seeking to deepen practical relevance and climb the capability ladder**
  - **A corporate trainer or L&D professional seeking internal training and upskilling at the organisational level**

- **Primary Audience:** **C-Suite Executives**; **Global Capability Center (GCC) Senior Managers**; **Corporate HR and L&D Leadership**; **"Second Career" Aspirants**

- **Additional Audience** — **Junior faculty at newer institutions (e.g., Junior IIMs) and government and national service organisations.**

- **Programme Modules — 8 Days** — **Four intensive modules covering the full spectrum of modern academic practice:**

  - **Module 01 — Curriculum Development:** Architecting a course from scratch; Learning-objective setting; Module sequencing

  - **Module 02 — Pedagogy & Case Writing:** Writing cases using AI and web resources; Case-teaching technique; Facilitating case discussions; Storytelling for the classroom

  - **Module 03 — Advanced Tools in AI:** Using LLMs for case development; AI-powered course design; AI-integrated teaching materials and assessments

  - **Module 04 — Academic Leadership:** Major business frameworks across strategy, marketing, operations, digital systems, organisational change, and finance; Managing academic enterprises; Integrating multiple disciplinary lenses; Four days of intensive leadership training

- **Key Focus: AI in Learning & Teaching** — **AI is not one tool in the kit. It is a new mode of pedagogical delivery running through every module. At the ECP, you will learn how to reduce the 12-month traditional case-study development cycle to days through:**
  - **Assisted case writing** — **AI-assisted case development using LLMs and web resources.**
  - **Course design** — **AI-powered curriculum architecture and learning-objective setting.**
  - **Content creation** — **AI-integrated teaching materials and assessments.**
  - **Student engagement** — **AI-enabled personalised learning pathways and classroom analytics.**

- Form anchor **#inquiry-form** (section id on page)

### Sidebar

- **ECP Details:** Format **8 days modular — 4 weekends (3 × 2 days + 1 × 2 days)**; Duration **2 months**; Mode **Hybrid / Weekend**; Cohort **25–30**; Fee **₹5 lakh**; Starts **June 2026**; Certification **IIFR + EFMD**
- **Contact** — mailto `IIFR_INFO_EMAIL` + note **Subsidised access (interest-free loans) available for junior faculty at newer institutions and government/national service organisations.**
- **Register Now** — **Ready to bridge the gap between industry and academia? Reserve your seat in the next ECP cohort.** — modal **Register for ECP**

### Inquiry form section

- Context **ECP**; heading **Enquire about ECP**; intro **Interested in the Educators' Certificate Programme? Leave your details and we will respond with cohort dates and next steps.**

### Final CTA

- **From Stepping Stone to Pinnacle** — **Ready for the next step?**
- **The Executive Fellow in Management (EFM) is a 3-year doctoral-equivalent fellowship for those ready to take the next step in academic leadership.**
- [efm.php](efm.php) **Explore EFM**; modal **Register Now**

---

## Page: EFM (`efm.php`)

### Hero

- **Programme · EFM** — **Executive Fellow in Management (EFM)**
- **A 3-year doctoral-equivalent fellowship for senior practitioners ready to engage with the rigour of academic scholarship — without abandoning practice.**
- Modal **Apply for EFM**; [ecp.php](ecp.php) **Compare with ECP**

### Main sections

- Image alt **EFM Programme**

- **About EFM** — **The EFM is a doctoral-equivalent fellowship for senior practitioners ready to engage with the rigour of academic scholarship, without abandoning the world of practice. This is India's most ambitious academic credential for senior corporate executives.** — **ECP provides an academic foundation while EFM is your pathway to academic leadership through practice tracks and applied research. Earn your doctoral-equivalent fellowship in approximately 3 years versus 5 years for a full-time PhD.**

- **Consider the EFM if you are:**
  - **Ready to explore a comprehensive research fellowship equivalent to an Executive PhD**
  - **Bringing minimum 15 years of work experience**
  - **Holding a Bachelor's degree (MBA preferred)**
  - **Passionate about personal branding by mentoring next-generation leaders**

- **EFM Structure — 3 Years** — **A structured journey from academic foundations to doctoral-level research:**

  - **Stage 01 — Preparatory Courses (Online):** Foundational finance; Accounting; Statistics; Economics; Harvard, Stanford, and MIT online courses (baseline)

  - **Stage 02 — Foundation Courses:** Philosophy of science and the scientific method; Theories of the firm; Curriculum design and course delivery; Case writing and teaching; Academic and business writing

  - **Stage 03 — Interdisciplinary Management Courses:** Business value creation and delivery; AI and digital transformation; Corporate governance; Digital technology strategies; Digital disruption and ecosystem management; Organisational behaviour and change management; Negotiations and game-theoretic frameworks

  - **Stage 04 — Geopolitics & Policy Courses:** Geopolitics and business; Patent and brand licensing; Role of business in diplomacy; Public management and public-private partnerships; Delhi Business & Policy Dialogue series

  - **Stage 05 — Qualitative & Quantitative Methods:** Basic qualitative analysis; Regression analysis and experimental design; Multivariate analysis; Qualitative research leveraging AI and LLMs; Digital twins and options thinking

  - **Stage 06 — Research Labs & Dissertation:** Research Lab 1 — Question, theory, and methods; Research Lab 2 — Data analysis and discussion; Dissertation Seminar 1 — Topic presentation; Dissertation Seminar 2 — Proposal defence; Dissertation Seminar 3 — Dissertation defence

- **Key Outcomes — After 3 Years** — **Upon completion of the EFM, you will have:**
  - **Earned your doctoral-equivalent degree certified by BVB, IIFR, and EFMD**
  - **Leveraged your industry experience and tacit knowledge, blending it with the ability to develop decision-making frameworks**
  - **Capable of analysing and presenting findings based on sound scientific evidence**
  - **Capable of designing and conducting research that can be applied directly to practice**
  - **Enhanced competence, credibility, and credentials to teach at a business school**

- **EFM vs. PhD — At a Glance**

| Criterion | EFM | PhD |
|-----------|-----|-----|
| Format | 3–4 years, modular | 5–6 years, full-time |
| Profile | Working professionals (10+ yrs experience) | Fresh graduates |
| Work experience | Required (10+ years; avg. 20+) | Not required |
| Funding | Self-funded or employer-sponsored | Stipend support available |
| Curriculum | Multi-disciplinary, research methods + management | Specialised academic area |
| Research focus | Applied, real-world complexity | Top-tier academic literature gaps |
| Post-graduation | Senior roles + teaching; executive education | Full-time faculty / academic research |

- Follow paragraph: **The EFM is designed as a pracademic credential — not intended to prepare graduates for tenure-track positions, but ideal for adjunct faculty, Professor of Practice appointments, executive-in-residence roles, and corporate boards.**
- **Faculty** — **This programme is led by Dr. Rajendra Srivastava (Vice Chairman, IIFR; Former Dean, ISB) and supported by a global faculty network.**

### Sidebar

- **EFM Details:** Format **3 years (Hybrid / Weekend)**; **9-day residential research camp**; **36 days + 9-day research camp**; Cohort **25**; Fee **₹25 lakh + GST (3 annual instalments)**; Starts **October 2026**; Certification **IIFR + EFMD**; Experience **Min. 10 years (avg. 20+)**; Education **Bachelor's required; MBA preferred**
- **Contact** — mailto
- **Register Now** — **Ready to earn India's most ambitious academic credential? Reserve your seat in the next EFM cohort.** — modal **Register for EFM**

### Final CTA

- **Pracademic Pathway** — **Start your journey with the ECP.**
- **The 8-day Educators' Certificate Programme is the gateway to the Pracademic identity. Build your teaching foundations before pursuing the EFM fellowship.**
- [ecp.php](ecp.php) **Explore ECP**; modal **Register Now**

---

## Page: Apply (`apply.php`)

### Hero

- **Apply** — **Apply to IIFR**
- **Programme-specific application information, eligibility checklists, upcoming cohort dates, and how to reach us. Choose your pathway below to get started.**
- Modal **Start Application**; [contact.php](contact.php) **Speak to Admissions**

### Upcoming cohorts

- **Upcoming Cohorts** — **Choose your pathway.**
- **Dates and cohort sizes align with the IIFR programme calendar. Confirm final dates with info@iifr.global when you submit your interest.** (rendered: `IIFR_INFO_EMAIL`)

### Programme cards

- Card → [ecp.php](ecp.php): **ECP · Next Cohort** — **Educators' Certificate Programme** — **Next cohort starts June 2026.** **Cohort size: 25–30 participants.** **Programme details**
- Card → [efm.php](efm.php): **EFM · Next Cohort** — **Executive Fellow in Management** — **Next cohort starts July 2026.** **Cohort size: 25 participants.** **Programme details**

### Eligibility

- **Eligibility at a Glance** — **Who should apply.** — **Use these checklists before you apply. Full criteria and documentation are shared once you begin a conversation with our team.**

- **ECP — who should apply** — **Consider the ECP if you are:**
  - **A senior executive moving into academic roles as visiting faculty or Professor of Practice**
  - **Faculty seeking deeper practical relevance and capability building**
  - **A corporate trainer or L&D professional focused on organisational upskilling**
  - **Also relevant:** **junior faculty at newer institutions, and professionals from government and national service organisations.**

- **EFM — who should apply** — **Consider the EFM if you are:**
  - **Exploring a doctoral-equivalent fellowship while staying in practice**
  - **Prepared for a multi-year journey (approximately 3 years) with structured research expectations**
  - **A senior practitioner with a minimum of 10 years' work experience**
  - **Holding a bachelor's degree (MBA preferred)**

### How to apply

- **How to Apply** — **Three steps to start your journey.**
- **Step 01** **Choose your programme** — **Review ECP or EFM in depth, then decide which pathway matches your goals and timeline.**
- **Step 02** **Request forms & details** — **Email info@iifr.global with your programme choice. You will receive application materials, deadlines, and fee information.** (email from config)
- **Step 03** **Submit & schedule** — **Complete the application pack and return it by the stated deadline. We may invite you for a conversation as part of the review process.**

### Final CTA `#apply-cta`

- Success / error messages (if present): **Thank you — your application enquiry has been sent to info@iifr.global. We will reply soon.** (dynamic)
- **Get Started** — **Download · Apply · Schedule a conversation.**
- **Request the latest programme brochure, start your application enquiry, or speak with our team about fit and cohort timing.**
- [mailto with subject IIFR — Programme Brochure Request](mailto:info@iifr.global?subject=IIFR%20%E2%80%94%20Programme%20Brochure%20Request) **Download brochure** (email encoded from `IIFR_INFO_EMAIL`)
- Modal **Apply now**; [contact.php](contact.php) **Schedule a conversation**
- Address line: **Bharatiya Vidya Bhavan, KG Marg, Copernicus Marg, New Delhi, Delhi 110001 ·** mailto link (gold styled)

---

## Page: Contact (`contact.php`)

### Hero

- **Contact Us** — **Get in Touch**
- **Questions about IIFR, programmes, or partnerships — we read every enquiry and reply personally.**
- `#inquiry-form` **Send a Message**; modal **Apply Now**

### Cards

- **Visit Us** — **Bharatiya Vidya Bhavan,** **KG Marg, Copernicus Marg,** **New Delhi, Delhi 110001, India**
- **Email Us** — mailto `IIFR_INFO_EMAIL`
- **Office Hours** — **Mon – Fri: 9 AM – 6 PM** / **Saturday: 9 AM – 4 PM**

### Inquiry form

- Heading **Send us a message**; intro **Questions about IIFR, programmes, or partnerships — we read every enquiry.**

### Visit section

- **Visit Us** — **IIFR — New Delhi.**
- **Address** — **Bharatiya Vidya Bhavan,** **KG Marg, Copernicus Marg,** **New Delhi, Delhi 110001, India**
- **Office Hours** — **Mon – Fri: 9 AM – 6 PM** / **Saturday: 9 AM – 4 PM**
- **Email** — mailto `IIFR_INFO_EMAIL`
- [Google Maps — Get Directions](https://www.google.com/maps?q=Bharatiya+Vidya+Bhavan%2C+KG+Marg%2C+Copernicus+Marg%2C+New+Delhi%2C+Delhi+110001) **Get Directions**
- Map iframe `src`: `https://www.google.com/maps?q=Bharatiya+Vidya+Bhavan%2C+KG+Marg%2C+Copernicus+Marg%2C+New+Delhi%2C+Delhi+110001&z=17&output=embed` title **Bharatiya Vidya Bhavan on Google Maps**

### Final CTA

- **Programmes** — **Explore what IIFR has to offer.**
- **From the 8-day ECP to the 3-year EFM fellowship — find the right pathway for your career.**
- [ecp.php](ecp.php) **Explore ECP**; [efm.php](efm.php) **Explore EFM**

---

## Page: Insights (`insights.php`)

### Hero

- **Insights** — **Insights**
- **IIFR is committed to generating and disseminating knowledge that influences education, industry, and policy.**
- [programmes.php](programmes.php) **Explore Programmes**; [contact.php](contact.php) **Contribute an Insight**

### Resources (cards all `href="#"`)

- Intro: **Resources** — **Insights Resources.** — **Articles, white papers, case studies, webinars, and research from IIFR faculty and the broader pracademic community.**
- **Blog / IIFR Journal** — **Perspectives on faculty development, pedagogy, research, and the changing landscape of higher education in India and the Global South.** — **→**
- **White Papers** — **Evidence-based analysis on the structural challenges in Indian higher education and the pracademic opportunity.** — **→**
- **Case Studies** — **Applied research and case writing emerging from IIFR programmes and faculty collaboration.** — **→**
- **Webinar Archive** — **Recordings from the Delhi Business & Policy Dialogue, Doc-Ed series, and faculty development workshops.** — **→**
- **Research** — **Publications and working papers from IIFR faculty and ECP/EFM participants.** — **→**

- *Content for the Insights hub is currently being developed. Check back soon for articles, white papers, and research from the IIFR community.*

### Final CTA

- **Contribute** — **Have a research idea or want to contribute?**
- **IIFR welcomes contributions from faculty, practitioners, and researchers. Get in touch to explore collaboration opportunities.**
- [contact.php](contact.php) **Contact Us**

---

## Page: 404 (`404.php`)

- **404** (large numeral)
- **Page Not Found**
- **The page you're looking for doesn't exist or has been moved. Let's get you back on track.**
- [/](/) **Back to Home**; [programmes.php](programmes.php) **Explore Programmes**
- CTA section: **Looking for Something Specific?** — **Get in touch with us — we're happy to help you find what you need.** — [contact.php](contact.php) **Contact Us**

---

## Supplemental: legacy nav partial (`partials/elements/nav__two.php`)

*(May not be active on redesign pages; included so no template string is omitted from the repo.)*

- [/](Home) [about.php](about.php) About Us · [faculty.php](faculty.php) Faculty · [programmes.php](programmes.php) Programmes submenu: [ecp.php](ecp.php) **ECP — Educators' Certificate Programme**; [efm.php](efm.php) **EFM — Executive Fellow in Management** · [apply.php](apply.php) Apply · [contact.php](contact.php) Contact

---

*End of consolidated export.*
