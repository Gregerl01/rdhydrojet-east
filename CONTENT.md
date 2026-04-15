# RD Hydrojet East San Diego — Content Blueprint

**Document type:** Production content architecture, mapped to template files
**Brand voice:** Direct, experienced, no-nonsense. Like talking to a knowledgeable neighbor who happens to be a master plumber.
**Target audience:** East San Diego County homeowners and property managers with plumbing problems
**Conversion goal:** Phone call (619-571-1777) or form submission for service booking
**Owner:** RD Hydrojet Plumbing & Drain Inc. — 20+ years experience, CA CSLB #1076642

---

### Brand Voice Quick Reference

**Personality:** Direct, experienced, trustworthy, local, thorough
**Voice:** Short sentences. Active voice. First person plural ("we"). Professional but conversational.
**Messaging pillars:**
1. Diagnostic-first — we find the real problem before we start work
2. Commercial-grade equipment, residential care — your home gets hospital-grade tools
3. Transparent pricing — written estimate before work begins, no surprises

**Power words:** diagnose, root cause, camera inspection, hydro jetting, same-day, licensed, transparent, commercial-grade, East County, 24/7, no surprises, your neighborhood

**Avoid:** "cheap/cheapest" (use "fair" or "transparent"), "best plumber in San Diego" (unverifiable), generic stock-photo language, exclamation points in headlines, "we service all your plumbing needs" (too vague)

---

## PAGE 1: HOMEPAGE (`front-page.php`)

10 sections loaded via `get_template_part()`:

### Section 1 — Hero (`section-hero.php`)

**Overline:** `EAST SAN DIEGO'S PLUMBING SPECIALISTS`
**H1:** `Fast, Licensed Plumbing for East San Diego County`
**Subline:** `From hydro jetting to emergency repairs — 20+ years of trusted service across El Cajon, La Mesa, Santee, and all of East County.`
**Trust checks:** Licensed & Insured · 24/7 Emergency · CA Lic #1076642
**CTA Primary:** `Call (619) 571-1777`
**CTA Secondary:** `See Our Services`
**Form card:** Quick Quote (Gravity Forms) — name, phone, service dropdown
**Stats bar:** 1,200+ Jobs · 5.0★ Rating · 20+ Years · 24/7 Emergency

---

### Section 2 — Values Strip (`section-values.php`)

Dark bg, 4 icon tiles:
| Icon | Label | Sub |
|------|-------|-----|
| Shield | Licensed & Certified | C36 · C42 · C20 |
| Handshake | Honest Pricing | No surprises, ever |
| Wrench | Equipped for Any Job | Commercial-grade tools |
| Clock | Always On Time | 24/7 emergency ready |

---

### Section 3 — Process (`section-process.php`)

**Label:** `HOW IT WORKS`
**H2:** `Our 3-Step Process`

| Step | Title | Body |
|------|-------|------|
| 01 | Diagnose | Camera inspection or diagnostic test to identify the root cause. |
| 02 | Quote | Clear, written estimate before any work begins. |
| 03 | Fix | Licensed repair with proper equipment, cleanup, and testing. |

---

### Section 4 — Features (`section-features.php`)

**Label:** `OUR SERVICES`
**H2:** `Plumbing Solutions for Every Situation`
**Layout:** 6 cards (3×2), first card has left accent border

| Card | Title | Link |
|------|-------|------|
| 1 | Hydro Jetting | /services/hydro-jetting/ |
| 2 | Drain & Sewer Repair | /services/drain-cleaning/ |
| 3 | Water Heater Services | /services/water-heater-services/ |
| 4 | Leak Detection | /services/leak-detection/ |
| 5 | Gas Line Repair | /services/gas-line-repair/ |
| 6 | 24/7 Emergency Plumbing | /services/emergency-plumbing/ |

"View All Services" outlined button → /services/

---

### Section 5 — Testimonials (`section-testimonials.php`)

**H2:** `What East County Homeowners Say`
**Google badge:** 5.0 · 300+ reviews (with Google "G" logo)
**Layout:** 6 cards (3×2) with star ratings, initials avatar, service tag
**CTA:** "Read More on Google" + "Request Your Free Estimate"

---

### Section 6 — Emergency (`section-emergency.php`)

**H2:** `Need Emergency Plumbing in East San Diego?`
Dark bg, 3 image cards + dual CTA (Call + Book Online)

---

### Section 7 — Service Areas (`section-service-areas.php`)

**H2:** `Plumbing Service Across East San Diego County`
4 primary area cards (El Cajon, La Mesa, Santee, Lakeside) — linked to city pages
Additional area pills: Spring Valley, Lemon Grove, Rancho San Diego, Alpine, San Carlos, Del Cerro, College Area, Ramona, Poway, Pine Valley, Bostonia, Fletcher Hills, Casa de Oro, Jamul, Mount Helix

---

### Section 8 — Blog (`section-blog.php`)

**Label:** `FROM THE BLOG`
**H2:** `Plumbing Tips for East County Homeowners`
3 latest posts in card grid, auto-updates via WP_Query
"View All Posts" outlined button → /blog/

---

### Section 9 — FAQ (`section-faq.php`)

**Label:** `FAQ`
**H2:** `Frequently Asked Questions`
8-question Bootstrap accordion (first item open)

---

### Section 10 — Final CTA (`section-cta.php`)

**H2:** `Stop Living with Bad Plumbing`
Dark bg, 60/40 split: Full Contact form (Gravity Forms) left, contact info cards right
Emergency callout card with lightning bolt icon

---

## PAGE 2: ABOUT (`page-about.php`)

- Dark hero with breadcrumb
- Company story (2-column with image)
- "Why Choose Us" — 4 differentiators
- License credentials strip (C-36, C-42, C-20)
- Stat bar: 1,200+ jobs, 5.0★, 20+ years, 24/7
- Service areas section
- LocalBusiness schema with aggregateRating

---

## PAGE 3: SERVICES HUB (`page-services.php`)

- Dark hero with breadcrumb
- Intro section with inline service links
- 10 service cards in 3-column grid (same card styling as homepage)
- Differentiator strip (dark bg, 4 values)
- 3-step process
- Service area strip with 15 city links
- 8-question FAQ accordion
- CTA section
- ItemList + FAQPage schema

---

## PAGE 4: SERVICE DETAIL (`page-service-detail.php`)

Shared template, 10 services keyed by slug. Each page has:
- Dark hero with breadcrumb (Home → Services → Service Name)
- Service description (3-4 paragraphs)
- "What You Get" — 4 include items
- "Why East County Homeowners Need This" — regional context
- 6-8 FAQs per service
- CTA section
- Service + FAQPage schema

Content is hardcoded in the template's `$services` array — see `page-service-detail.php`.

---

## PAGE 5: SERVICE AREA (`page-service-area.php`)

Shared template, 15 cities keyed by slug. Each page has:
- Dark hero with breadcrumb (Home → Service Areas → City)
- Two-column intro: unique city plumbing context + Google Maps embed
- 10-service grid (3-column)
- "Why [City] Homeowners Trust RD Hydrojet" values strip
- Featured testimonial card
- 4 city-specific FAQ questions
- Neighboring areas pill links
- CTA section
- LocalBusiness + FAQPage schema

Content is hardcoded in the template's `$cities` array — see `page-service-area.php`.

---

## PAGE 6: CONTACT (`page-contact.php`)

- Dark hero with breadcrumb
- 60/40 split: Full Contact form (Gravity Forms) left, sidebar right
- Sidebar: phone, email, service area, hours cards + emergency callout
- Service area strip with 15 city links
- Trust bar (dark bg): Licensed, 5.0★ Rated, 20+ Years, 24/7
- LocalBusiness + ContactPoint schema

---

## PAGE 7: BLOG ARCHIVE (`home.php`)

- Dark hero with breadcrumb (Home → Blog)
- 3-column card grid: featured image, category tag, title, excerpt, date, read time
- Pagination

---

## PAGE 8: SINGLE POST (`single.php`)

- Dark hero with breadcrumb (Home → Blog → Post Title)
- Meta: date, category, read time
- Featured image (900px max, rounded)
- Content area (col-lg-8 centered, 1.125rem body, blockquote with red border)
- Author/CTA dark box (phone + estimate buttons)
- Related posts (3 cards from same category)

---

## PAGES 9-10: LEGAL

- **Privacy Policy** (`page-privacy.php`) — noindex, 8 H2 sections
- **Terms of Use** (`page-terms.php`) — noindex, 9 H2 sections

---

## DYNAMIC VARIABLES (Customizer)

| Variable | Key | Value |
|----------|-----|-------|
| Business Name | (site title) | RD Hydrojet East |
| Phone | `bmg_phone` | (619) 571-1777 |
| Email | `bmg_email` | info@rdhydrojeteast.com |
| Street | `bmg_address_street` | Service Area — East San Diego County |
| City | `bmg_address_city` | East San Diego County, CA |

---

## SERVICE AREA CITIES (15)

El Cajon, La Mesa, Santee, Lakeside, Spring Valley, Lemon Grove, Rancho San Diego, Alpine, San Carlos, Del Cerro, College Area, East San Diego, Ramona, Poway, Pine Valley
