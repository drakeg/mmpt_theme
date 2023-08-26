<?php
/**
 * Functions for your custom WordPress theme.
 */

// Set up theme defaults and register various WordPress features.
function your_theme_setup() {
    
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');

    // Add theme support for custom logo.
    add_theme_support('custom-logo', array(
        'height'      => 100,   // set the max height in pixels
        'width'       => 400,   // set the max width in pixels
        'flex-height' => true,  // enable flexible height
        'flex-width'  => true,  // enable flexible width
        'header-text' => array('site-title', 'site-description'),
    ));

    // Register primary menu (you can add more if required).
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'your-theme-text-domain'),
    ));

}
add_action('after_setup_theme', 'your_theme_setup');

/**
 * Enqueue scripts and styles for the front end.
 */
function theme_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
?>
