<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'container'      => false,
                        'menu_class'     => 'header-menu-list',
                        'fallback_cb'    => false
                    ));
                    ?>
                    <!-- Search Form -->
                    <div class="search-container">
                        <?php get_search_form(); ?>
                    </div>
                </nav>
            </div>
        </div>
    </header>