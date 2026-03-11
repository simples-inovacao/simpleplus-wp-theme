=== Simple Plus Theme ===
Contributors:          simpleplus
Tags:                  one-page, business, dark, custom-colors, custom-logo, custom-menu, featured-images, full-width-template, translation-ready
Requires at least:     6.4
Tested up to:          6.7
Requires PHP:          8.1
Stable tag:            1.0.0
License:               Proprietary
License URI:           https://simpleplus.com.br

A custom, high-performance WordPress theme built for Simple Plus — a growth-focused digital commerce agency.

== Description ==

Simple Plus Theme is a bespoke WordPress theme converted from a React + Tailwind CSS application.
It is designed as a single-page marketing site for a digital commerce agency, featuring:

* Dark-mode branding with brand purple (#481BB1) and brand aqua (#9FF9F2) accent palette
* Scroll-triggered entrance animations via IntersectionObserver
* Trust bar with infinite-scroll logo marquee
* Fully responsive — mobile nav included
* Contact form section
* Sections: Hero, Value Proposition, Services, Methodology, Case Studies, Insights, Leadership, CTA

== Tech Stack ==

* PHP 8.1+
* Tailwind CSS (compiled, minified build in assets/)
* Vanilla JavaScript (assets/theme.js)
* Google Fonts: Sora (display) + Inter (body)

== File Structure ==

  simpleplus-wp-theme/
  ├── style.css          — Theme metadata (required by WordPress)
  ├── functions.php      — Enqueue scripts/styles, theme supports, nav menus
  ├── header.php         — <head>, top nav, mobile nav
  ├── footer.php         — Footer columns, social links, bottom bar
  ├── front-page.php     — All page sections (single-page layout)
  ├── index.php          — Fallback template
  ├── theme.json         — Global color palette and typography for WP editor
  ├── screenshot.png     — Theme preview thumbnail (880×660)
  ├── readme.txt         — This file
  ├── tasks.md           — Development task tracker
  └── assets/
      ├── index-CM3joi9z.css   — Compiled Tailwind CSS
      ├── animations.css       — Scroll animation keyframes and utilities
      ├── theme.js             — Navigation, scroll animations, mobile menu
      ├── logo-DxVX319K.png    — Brand logo (350×100)
      └── hero-dashboard-iG_XJb-V.png — Hero section image

== Asset Notes ==

The CSS and image assets currently use hash-suffixed filenames (Vite build output).
These are enqueued in functions.php with their exact names.
When rebuilding assets, update the filename references in functions.php accordingly.
See tasks.md for the planned rename to stable filenames.

== Setup & Installation ==

1. Upload the theme folder to /wp-content/themes/
2. Activate from Appearance > Themes
3. Go to Appearance > Menus to create a Primary Navigation menu
4. Assign the menu to the "Primary Navigation" location
5. The homepage is driven by front-page.php — set a static front page under
   Settings > Reading > "A static page" to ensure it loads correctly

== Changelog ==

= 1.0.0 =
* Initial release — converted from React/Tailwind application
* Added scroll-triggered entrance animations (IntersectionObserver)
* Added CSS keyframe animations (animations.css)
* Fixed SVG path rendering bug
* Resolved placeholder href="#" links to proper on-page anchors
