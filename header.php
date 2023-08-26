<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="wptime-plugin-preloader"></div>
    <header>
        <div class="header-inner">
            <div class="title-description-container">
                <h1 class="site-title"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                <p class="site-description"><?php bloginfo('description'); ?></p>
            </div>
            
            <!-- Search Form -->
            <div class="search-container">
                <?php get_search_form(); ?>
            </div>
        </div>
    </header>
