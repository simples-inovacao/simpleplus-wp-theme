# Simple Plus — WordPress Theme

Custom WordPress theme converted from the [simpleplus-growth-hub](../simpleplus-growth-hub) React application.

## Tech Stack

- **PHP** — WordPress template hierarchy (header, footer, front-page, index)
- **Tailwind CSS** — Minified build served from `/assets/` (no build step needed in production)
- **Vanilla JS** — Inline in header.php for nav scroll/mobile toggle; scroll animations via IntersectionObserver
- **CSS Animations** — Custom keyframes in `/assets/animations.css`

## File Structure

```
simpleplus-wp-theme/
├── style.css              # Theme registration (minimal, no styles here)
├── functions.php          # Asset enqueuing
├── header.php             # <head>, nav, mobile menu
├── footer.php             # Footer markup + wp_footer()
├── front-page.php         # Full homepage template (~600 lines)
├── index.php              # Fallback template
└── assets/
    ├── logo-DxVX319K.png          # Site logo
    ├── hero-dashboard-iG_XJb-V.png # Hero section image
    ├── index-CM3joi9z.css          # Tailwind CSS build (minified)
    ├── animations.css              # Scroll + keyframe animations
    └── index-C8uCjz9X.js          # React bundle (UNUSED — do not load)
```

## Requirements

- WordPress 6.0+
- PHP 8.0+
- No Node.js / build step required (CSS is pre-built)

## Updating Assets

> **Warning:** Asset filenames contain content hashes (e.g. `logo-DxVX319K.png`). If you replace an asset, the filename will change and references in `header.php`, `footer.php`, and `front-page.php` must be updated manually.

**Planned fix:** Rename all assets to stable names (see `tasks.md`).

## Development Notes

- The Tailwind CSS file (`index-CM3joi9z.css`) is generated from the React app build — it includes all utility classes used across the site.
- All scroll-triggered animations (fade-in-up, slide-in-right, staggered cards) are handled by `animations.css` + a small `IntersectionObserver` script.
- Navigation is currently hardcoded HTML. WordPress menu support is planned (see `tasks.md`).

## Known Limitations

See [tasks.md](./tasks.md) for the full audit and TODO list.
