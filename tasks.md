# Simple Plus WP Theme — Task List

Audit-driven TODO list based on the full review of the theme against the original React app.

---

## 🔴 Critical

- [x] **Fix `<mpath>` SVG bug** in `front-page.php` — fixed to `<path d="...">`
- [x] **Remove deprecated `wp_title()`** from `header.php` — replaced with `add_theme_support('title-tag')` in `functions.php`
- [x] **Fix hero "Book a Strategy Call" CTA** — changed from `href="#"` to `href="#contact"`
- [x] **Replace actionable `href="#"` placeholder links** — "Explore service" → `#contact`, "Read more" → `#insights`, footer Services → `#services`, "About Us" → `#about`, "View All Cases"/"Explore Insights" converted from `<button>` to `<a>` tags
- [ ] **Replace social media and legal links** — LinkedIn, Instagram, YouTube, Twitter, Privacy Policy, Terms of Service still `href="#"` — need real URLs when available
- [ ] **Remove unused React bundle** — `assets/index-C8uCjz9X.js` (466 KB) is not loaded but still lives in the folder; delete it to avoid confusion

---

## 🟠 High Priority

- [x] **Register WordPress nav menus** — added `register_nav_menus()` in `functions.php` (`primary`, `footer`)
- [x] **Add missing theme supports** in `functions.php`:
  - `add_theme_support('post-thumbnails')`
  - `add_theme_support('custom-logo')`
  - `add_theme_support('html5', [...])`
- [x] **Move inline JS out of `header.php`** — extracted to `assets/theme.js`, enqueued via `wp_enqueue_script()`
- [x] **Escape image src attributes** — wrapped `get_template_directory_uri()` in `esc_url()` in `header.php`, `footer.php`, `front-page.php`
- [ ] **Rename assets to stable filenames** — current names contain content hashes that will break on any asset update:
  - `logo-DxVX319K.png` → `logo.png`
  - `hero-dashboard-iG_XJb-V.png` → `hero-dashboard.png`
  - `index-CM3joi9z.css` → `main.css`
  - Update all references in `header.php`, `footer.php`, `front-page.php`, `functions.php`

---

## 🟡 Medium Priority

- [ ] **Register Custom Post Types** so content is manageable from WP admin:
  - `simpleplus_service` — Services section
  - `simpleplus_case_study` — Case Studies section
  - `simpleplus_insight` — Insights/blog section
- [ ] **Create missing templates**:
  - `single.php` — individual post view
  - `404.php` — not found page
  - `archive.php` — post/CPT archives
  - `search.php` — search results
- [ ] **Add a contact form** — replace the static `#contact` CTA with a real form (Contact Form 7 or custom PHP with `wp_nonce_field()` + server-side sanitization)
- [ ] **Add `loading="lazy"` to images** in `front-page.php` (hero image, case study images, insight thumbnails)
- [ ] **Add explicit `width` and `height` attributes** to images to prevent layout shift (CLS)
- [ ] **Add `screenshot.png`** (1200×900px) so the theme preview shows in WP Admin → Appearance → Themes

---

## 🟢 Low Priority

- [ ] **Wrap all user-facing strings** with `__()` / `_e()` for translation support (Text Domain: `simpleplus` is declared in `style.css` but no strings use it)
- [ ] **Add skip-to-content link** at the top of `header.php` for keyboard/screen reader accessibility
- [ ] **Add Open Graph + Twitter Card meta tags** in `header.php` (or via a SEO plugin hook)
- [ ] **Complete `style.css` metadata** — fill in `Theme URI`, `Author URI`, and `License` fields
- [ ] **Add cookie consent banner** (LGPD / GDPR compliance)
- [ ] **Add `readme.txt`** with changelog for WordPress theme directory standards
- [ ] **Review social media links** in `footer.php` — currently all `href="#"`, should link to real profiles
- [ ] **Add `rel="noopener noreferrer"`** to all external `target="_blank"` links

---

## ✅ Completed

- [x] Create `README.md` with theme overview and file structure
- [x] Create `tasks.md` (this file)
- [x] Port CSS animations from React app to `assets/animations.css` (scroll-triggered IntersectionObserver + keyframes)
- [x] Apply animation classes to all sections in `front-page.php`
