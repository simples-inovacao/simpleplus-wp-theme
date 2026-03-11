<?php

/**
 * Theme setup: supports, menus
 */
function simpleplus_setup()
{
    // Let WordPress manage the <title> tag
    add_theme_support('title-tag');

    // Featured images on posts/pages
    add_theme_support('post-thumbnails');

    // Custom logo via Customizer
    add_theme_support('custom-logo', [
        'height'      => 80,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    // HTML5 markup for core elements
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);

    // Register nav menus (manageable via Appearance → Menus)
    register_nav_menus([
        'primary' => __('Primary Navigation', 'simpleplus'),
        'footer'  => __('Footer Navigation', 'simpleplus'),
    ]);
}
add_action('after_setup_theme', 'simpleplus_setup');

/**
 * Enqueue styles and scripts
 */
function simpleplus_enqueue_assets()
{
    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();

    // Auto-detect and enqueue all built CSS files from assets/
    $css_files = glob($theme_dir . '/assets/*.css');
    if (!empty($css_files)) {
        foreach ($css_files as $file) {
            $filename = basename($file);
            wp_enqueue_style('simpleplus-' . $filename, $theme_uri . '/assets/' . $filename, [], null);
        }
    }

    // Theme JS (nav scroll, mobile menu, scroll animations)
    wp_enqueue_script(
        'simpleplus-theme',
        $theme_uri . '/assets/theme.js',
        [],
        null,
        true // load in footer
    );
}
add_action('wp_enqueue_scripts', 'simpleplus_enqueue_assets');

/**
 * SEO: canonical, meta description, Open Graph, Twitter Card
 * Runs on wp_head for all front-end pages.
 */
function simpleplus_seo_meta()
{
    if (is_admin() || is_front_page()) {
        return; // front-page has its own static meta
    }

    // Canonical URL
    if (is_singular()) {
        $canonical = get_permalink();
    } elseif (is_archive()) {
        $canonical = get_term_link(get_queried_object());
        if (is_wp_error($canonical)) {
            $canonical = home_url(add_query_arg([]));
        }
    } else {
        $canonical = home_url(add_query_arg([]));
    }
    echo '<link rel="canonical" href="' . esc_url($canonical) . '" />' . "\n";

    // Meta description
    $description = '';
    if (is_singular()) {
        $description = wp_strip_all_tags(get_the_excerpt());
    } elseif (is_archive()) {
        $description = wp_strip_all_tags(get_the_archive_description());
    }
    if (empty($description)) {
        $description = wp_strip_all_tags(get_bloginfo('description'));
    }
    echo '<meta name="description" content="' . esc_attr($description) . '" />' . "\n";

    // Open Graph
    $og_title = is_archive() ? strip_tags(get_the_archive_title()) : get_the_title();
    $logo_url = get_template_directory_uri() . '/assets/logo-DxVX319K.png';
    $og_image = (is_singular() && has_post_thumbnail())
        ? get_the_post_thumbnail_url(null, 'large')
        : $logo_url;
    $og_type  = is_single() ? 'article' : 'website';

    echo '<meta property="og:type"        content="' . esc_attr($og_type) . '" />' . "\n";
    echo '<meta property="og:title"       content="' . esc_attr($og_title) . '" />' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($description) . '" />' . "\n";
    echo '<meta property="og:url"         content="' . esc_url($canonical) . '" />' . "\n";
    echo '<meta property="og:image"       content="' . esc_url($og_image) . '" />' . "\n";
    echo '<meta property="og:site_name"   content="' . esc_attr(get_bloginfo('name')) . '" />' . "\n";

    // Twitter Card
    echo '<meta name="twitter:card"        content="summary_large_image" />' . "\n";
    echo '<meta name="twitter:title"       content="' . esc_attr($og_title) . '" />' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr($description) . '" />' . "\n";
    echo '<meta name="twitter:image"       content="' . esc_url($og_image) . '" />' . "\n";
}
add_action('wp_head', 'simpleplus_seo_meta', 1);
