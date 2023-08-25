<?php
function your_theme_setup() {
    // Add theme support for custom logo.
    add_theme_support('custom-logo', array(
        'height'      => 100,   // set the max height in pixels
        'width'       => 400,   // set the max width in pixels
        'flex-height' => true,  // enable flexible height
        'flex-width'  => true,  // enable flexible width
        'header-text' => array('site-title', 'site-description'),
    ));
}
add_action('after_setup_theme', 'your_theme_setup');

function theme_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
?>
