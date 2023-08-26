<?php get_header(); ?>

<main class="blog-container">
<?php if(have_posts()): ?>
    <div class="post-cards">
        <?php while(have_posts()): the_post(); ?>
            <div class="post-card">
                <?php if ( has_post_thumbnail() ): ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                <?php endif; ?>
                <div class="post-content">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div><?php the_excerpt(); ?></div>
                    <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    <?php wp_pagenavi(); ?>
<?php endif; ?>

</main>

<?php get_footer(); ?>
