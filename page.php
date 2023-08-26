<?php get_header(); ?>

<div class="main-content">

    <?php if (have_posts()): while (have_posts()): the_post(); ?>
    
        <h2><?php the_title(); ?></h2>
        <div><?php the_content(); ?></div>

        <?php
            // Page navigation for paginated pages (if you use <!--nextpage--> quicktag in your content)
            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'text-domain'),
                'after'  => '</div>',
            ));
        ?>

    <?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>