# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Identity

- **Theme:** RD Hydrojet East San Diego Website
- **Client:** RD Hydrojet Plumbing & Drain Inc.
- **Type:** Local plumbing service lead generation site (WordPress)
- **Base:** Understrap child theme (Bootstrap 5 + SCSS)
- **Parent Theme:** Understrap
- **Build Tool:** Rollup (JS) + Sass CLI + PostCSS + CleanCSS (SCSS)
- **Dev Tool:** Claude Code (CLI in VS Code terminal)
- **Local Dev:** Local by Flywheel — `rd-hydrojet-east.local`
- **Runtime:** PHP 8.1, MySQL 8.0, Nginx 1.26
- **Node:** >= 18, npm >= 8.6.0
- **CI/CD:** GitHub Actions (SSH + rsync deploy to Hostinger)
- **Default Branch:** `dev`
- **Text Domain:** `bmg-theme` (do not rename)
- **Repo:** TBD

---

## What This Project Is

RD Hydrojet Plumbing's East San Diego County website — a conversion-optimized lead generation site where homeowners and businesses can:
1. Find fast, licensed plumbing services (hydro jetting, drain cleaning, water heaters, gas lines, emergency service)
2. See proof of quality work (job photos, testimonials, stats)
3. Learn about the company (20+ years experience, licensed/bonded/insured)
4. Book service via phone call or contact form

The sister site at rdhydrojet.com serves the Inland Empire (Murrieta/Temecula). This site targets East San Diego County: El Cajon, La Mesa, Santee, Lakeside, Spring Valley, Lemon Grove, Rancho San Diego, Alpine, San Carlos, Del Cerro, College Area, East San Diego, Ramona, Poway, Pine Valley.

**Design aesthetic:** "Underground Professional" — the visual confidence of infrastructure work meets clean modern service branding. Unified red (#D7262C) as the single action color for CTAs, links, icons, and accents; near-black (#111111) for dark sections, header, and footer; clean white (#FFFFFF) backgrounds. High-contrast red/black/white palette. Plus Jakarta Sans for headlines and body, DM Serif Display for decorative accents, JetBrains Mono for stats and metadata.

**Target audience:** East San Diego County homeowners dealing with aging plumbing infrastructure (1960s-80s homes with cast iron and clay pipes), plus commercial property managers and landlords. High-intent searchers looking for hydro jetting, emergency plumbing, and drain cleaning services.

---

## Commands

| Command | Purpose |
|---------|---------|
| `npm run build` | Full compile (CSS + JS) |
| `npm run css` | Compile + prefix + minify SCSS |
| `npm run js` | Bundle + minify JS |
| `npm run watch` | Watch SCSS + JS for changes |
| `npm run watch-bs` | Watch + BrowserSync on local dev domain |

---

## AI (Claude Code) Rules

### Before Any Work
1. Read this CLAUDE.md
2. State what you understand the task to be
3. Audit existing code before modifying

### During Work
- Use tokens from `_theme_variables.scss` — never hardcode values
- Prefer Bootstrap utilities over custom CSS
- Keep section-based template pattern
- Run `npm run build` after SCSS or JS changes
- Reference `CONTENT.md` for production copy

### Must Not
- Modify parent theme (Understrap) files
- Modify build configs (`src/build/*`) without explicit approval
- Add plugins without discussion
- Use hardcoded hex colors, spacing values, or font stacks
- Add animation libraries (no GSAP, AOS, Animate.css)
- Use inline styles
- Recreate Bootstrap features

---

## Design Tokens

All values defined in `src/sass/theme/_theme_variables.scss` — single source of truth.

### Colors
| Token | Value | Usage |
|-------|-------|-------|
| `$brand-warm-white` | `#FFFFFF` | Page background |
| `$brand-white` | `#FFFFFF` | Card backgrounds |
| `$brand-dark` | `#111111` | Dark sections, header, footer (near-black) |
| `$brand-dark-lighter` | `#1A1A1A` | Subtle contrast on dark surfaces |
| `$brand-primary` | `#D7262C` | CTAs, links, icons, accents (red) |
| `$brand-accent` | `#D7262C` | Unified red — same as primary |

### Typography
| Token | Value | Usage |
|-------|-------|-------|
| `$font-family-base` | Plus Jakarta Sans | Headlines + body |
| `$font-family-display` | DM Serif Display | Decorative accents only |
| `$font-family-mono` | JetBrains Mono | Labels, stats, metadata |

---

## Customizer Dynamic Variables

| Field | Key | Value |
|-------|-----|-------|
| Phone | `bmg_phone` | 619-571-1777 |
| Email | `bmg_email` | info@rdhydrojeteast.com |
| Street | `bmg_address_street` | Service Area — East San Diego County |
| City | `bmg_address_city` | East San Diego County, CA |

---

## Current Build Status

### Pages Built

| Page | Template | Notes |
|------|----------|-------|
| Homepage | `front-page.php` | 10 sections: Hero, Values, Process, Features, Testimonials, Emergency, Service Areas, Blog, FAQ, CTA |
| About | `page-templates/page-about.php` | Company story, credentials, stat bar, service areas |
| Services Hub | `page-templates/page-services.php` | 10 service cards (3-column), process, FAQ, area strip |
| Service Detail (×10) | `page-templates/page-service-detail.php` | Shared slug-based template |
| Service Area (×15) | `page-templates/page-service-area.php` | Shared slug-based template, Google Maps embeds |
| Contact | `page-templates/page-contact.php` | Gravity Forms, sidebar info cards, trust bar |
| Privacy Policy | `page-templates/page-privacy.php` | noindex |
| Terms of Use | `page-templates/page-terms.php` | noindex |
| Blog Archive | `home.php` | 3-column card grid, pagination |
| Single Post | `single.php` | Hero, featured image, content, CTA box, related posts |
| 404 | `404.php` | noindex |

### Service Detail Pages (10 slugs)
`hydro-jetting`, `drain-cleaning`, `water-heater-services`, `leak-detection`, `gas-line-repair`, `toilet-repair`, `emergency-plumbing`, `repiping`, `septic-sanitation`, `new-construction-plumbing`

### Service Area Pages (15 slugs)
`plumber-in-el-cajon`, `plumber-in-la-mesa`, `plumber-in-santee`, `plumber-in-lakeside`, `plumber-in-spring-valley`, `plumber-in-lemon-grove`, `plumber-in-rancho-san-diego`, `plumber-in-alpine`, `plumber-in-san-carlos`, `plumber-in-del-cerro`, `plumber-in-college-area`, `plumber-in-east-san-diego`, `plumber-in-ramona`, `plumber-in-poway`, `plumber-in-pine-valley`

### Infrastructure

| File | Purpose |
|------|---------|
| `header.php` | Utility bar + sticky navbar with scroll hide/show |
| `footer.php` | 4-column layout (logo, services, areas, contact) + sticky mobile CTA |
| `inc/services-data.php` | Centralized service data: `bmg_get_services()`, `bmg_get_homepage_services()` |
| `inc/gravity-forms-setup.php` | Programmatic form creation (Quick Quote + Full Contact) + SMTP notice |
| `inc/seo-metadata.php` | Title/meta for all pages, defers to Rank Math when active |
| `inc/starter-posts.php` | One-time blog post + category creation (3 posts) |
| `src/sass/theme/_sections.scss` | All section, card, form, blog, and Gravity Forms styles |
| `src/sass/theme/_theme_variables.scss` | Design tokens (colors, spacing, typography, motion) |
| `src/js/theme.js` | Scroll reveal, sticky header, parallax, smooth scroll, FAQ accordion |

### Plugins (Active)

| Plugin | Purpose |
|--------|---------|
| Rank Math SEO | Schema, sitemaps, OG tags, canonical URLs |
| Gravity Forms | Quick Quote (hero) + Full Contact (CTA, contact page) |
| Gravity SMTP | Email delivery via SMTP |

---

## Remaining Work

- Deployment to Hostinger (staging + production)
- Real photography (hero bg, service images, team photos)
- Google Business Profile link (replace placeholder URL in testimonials)
- Social media URLs (verify Facebook/Instagram profiles)
- Gravity SMTP production SMTP credentials
- Final responsive QA across devices
- Domain setup and DNS
