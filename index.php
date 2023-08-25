<?php get_header(); ?>

<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div><?php the_excerpt(); ?></div>
    <?php endwhile; ?>
    
    <div class="pagination">
        <?php previous_posts_link('&laquo; Newer Posts') ?>
        <?php next_posts_link('Older Posts &raquo;') ?>
    </div>
    
<?php endif; ?>

<?php get_footer(); ?>
