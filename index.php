<?php get_header(); ?>

<main class="blog-container">
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <article class="blog-snippet">
                <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="post-excerpt"><?php the_excerpt(); ?></div>
                <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
            </article>
        <?php endwhile; ?>

        <div class="pagination">
            <?php wp_pagenavi(); ?>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
