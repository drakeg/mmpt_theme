<?php
// If the current post is protected by a password and the visitor has not yet entered the password, return early.
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if (have_comments()): ?>
        <h3 class="comments-title">
            <?php
            $comment_count = get_comments_number();
            if ('1' === $comment_count) {
                printf(
                    esc_html__('One thought on &ldquo;%1$s&rdquo;', 'text-domain'),
                    '<span>' . get_the_title() . '</span>'
                );
            } else {
                printf(
                    esc_html__('%1$s thoughts on &ldquo;%2$s&rdquo;', 'text-domain'),
                    number_format_i18n($comment_count),
                    '<span>' . get_the_title() . '</span>'
                );
            }
            ?>
        </h3>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style'      => 'ol',
                'short_ping' => true,
            ));
            ?>
        </ol>

        <?php
        // Check for comment navigation.
        if (get_comment_pages_count() > 1 && get_option('page_comments')): ?>
        <nav class="comment-navigation" role="navigation">
            <div class="nav-previous"><?php previous_comments_link(esc_html__('Older Comments', 'text-domain')); ?></div>
            <div class="nav-next"><?php next_comments_link(esc_html__('Newer Comments', 'text-domain')); ?></div>
        </nav>
        <?php endif; ?>

    <?php endif; ?>

    <?php
    // Check if comments are closed, and add a note.
    if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')): ?>
        <p class="no-comments"><?php esc_html_e('Comments are closed.', 'text-domain'); ?></p>
    <?php endif; ?>

    <?php comment_form(); ?>

</div>