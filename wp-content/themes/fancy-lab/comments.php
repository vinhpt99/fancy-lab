<?php
if (post_password_required()) {
  return;
}
?>

<div id="comments" class="comments-area">
  <?php if (have_comments()): ?>
    <h2 class="comments-title">
      <?php
      $comment_number = get_comments_number();
      if ('1' === $comment_number) {
        printf(
          _x('One thought on &ldquo;%s&rdquo;', 'comments title', 'fancy-lab'),
          get_the_title()
        );
      } else {
        printf(
          _nx(
            '%1$s thought on &ldquo;%2$s&rdquo;',
            '%1$s thoughts on &ldquo;%2$s&rdquo;',
            $comment_number,
            'comments title',
            'fancy-lab'
          ),
          number_format_i18n($comment_number),
          get_the_title()
        );
      }
      ?>
    </h2>
    <?php the_comments_navigation(); ?>
    <ol class="comment-list">
      <?php
      wp_list_comments(array(
        'style' => 'ol',
        'short_ping' => true,
        'avatar_size' => 42,
      ));
      ?>
    </ol>
    <?php the_comments_navigation(); ?>
  <?php endif; ?>
  <?php if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')): ?>
    <p class="no-comments"><?php _e('Comments are closed.', 'fancy-lab'); ?></p>
  <?php endif; ?>
  <?php comment_form(
    array(
      'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
      'title_reply_after' => '</h2>'
    )
  );
  ?>
</div>