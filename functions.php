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
        'header-menu' => __('Header Menu', 'your-theme-text-domain'),
    ));

}
add_action('after_setup_theme', 'your_theme_setup');

function theme_enqueue_fonts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Lato:wght@400;700&display=swap', false);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_fonts');

/**
 * Limit the number of posts returned per page
 */
function custom_posts_per_page($query) {
    if ($query->is_home() && $query->is_main_query()) {
        $query->set('posts_per_page', 6); // Adjust the number to your preference
    }
}
add_action('pre_get_posts', 'custom_posts_per_page');

/**
 * Enqueue JQuery and custom JavaScript file
 */
function theme_enqueue_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

/**
 * Enqueue scripts and styles for the front end.
 */
function theme_enqueue_styles() {
    // Enqueue your main stylesheet
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_stype('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN');
    wp_enqueue_style('fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
    // Get logo URL
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id , 'full');
    $logo_url = $logo[0];

    // Create the CSS
    $inline_style = 'body { background-image: url(' . esc_url($logo_url) . '); }';

    // Add the inline style
    wp_add_inline_style('main-style', $inline_style);
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

?>