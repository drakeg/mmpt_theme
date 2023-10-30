<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="wptime-plugin-preloader"></div>
    <header>
        <div class="header-inner container">
            <!-- Title & Description -->
            <div class="title-description-container mb-3">
                <h1 class="site-title"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                <p class="site-description"><?php bloginfo('description'); ?></p>
            </div>
            <!-- Navigation & Search -->
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <!-- Navbar content -->
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'depth'          => 2,
                        'container'      => false,
                        'menu_class'     => 'navbar-nav me-auto mb-2 mb-lg-0',
                        'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'         => new WP_Bootstrap_Navwalker()
                    ));
                    ?>
                    <!-- Search Form -->
                    <div class="search-container">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </nav>
        </div>
    </header>