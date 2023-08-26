<?php get_header(); ?>

<div class="main-content">

    <?php if (have_posts()): while (have_posts()): the_post(); ?>
    
        <h2><?php the_title(); ?></h2>
        <div><?php the_content(); ?></div>
        
        <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()):
                comments_template();
            endif;
        ?>
        
    <?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>