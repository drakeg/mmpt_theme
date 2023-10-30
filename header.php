<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="wptime-plugin-preloader"></div>
    <header>
        <div class="header-inner">
            <!-- Title & Description -->
            <div class="title-description-container">
                <h1 class="site-title"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                <p class="site-description"><?php bloginfo('description'); ?></p>
            </div>
            <!-- Navigation & Search -->
            <div class="nav-search-container">
                <nav class="main-navigation">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'container'      => false,
                        'menu_class'     => 'header-menu-list',
                        'fallback_cb'    => false
                    ));
                    ?>
                </nav>
                <!-- Search Form -->
                <div class="search-container">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </header>