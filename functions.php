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
