<?php
/*
The comments page for fitspiration
*/

// don't load it if you can't comment
if ( post_password_required() ) {
  return;
}

?>

<?php // You can start editing here. ?>

  <?php if ( have_comments() ) : ?>

    <section class="commentlist">
      <h3 id="comments-title" class="h2"><?php comments_number( __( '<span>No</span> Comments', 'fitspiration' ), __( '<span>1</span> Comment', 'fitspiration' ), _n( '<span>%</span> Comments', '<span>%</span> Comments', get_comments_number(), 'fitspiration' ) );?></h3>
      <?php
        wp_list_comments( array(
          'style'             => 'div',
          'short_ping'        => true,
          'avatar_size'       => 60,
          'callback'          => 'fitspiration_comments',
          'type'              => 'all',
          'reply_text'        => 'Reply',
          'page'              => '',
          'per_page'          => '',
          'reverse_top_level' => null,
          'reverse_children'  => '',
          'max_depth'         => 3,
        ) );
      ?>
    </section>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
    	<nav class="navigation comment-navigation" role="navigation">
      	<div class="comment-nav-prev"><?php previous_comments_link( __( '&larr; Previous Comments', 'fitspiration' ) ); ?></div>
      	<div class="comment-nav-next"><?php next_comments_link( __( 'More Comments &rarr;', 'fitspiration' ) ); ?></div>
    	</nav>
    <?php endif; ?>

    <?php if ( ! comments_open() ) : ?>
    	<p class="no-comments"><?php esc_html_e( 'Comments are closed.' , 'fitspiration' ); ?></p>
    <?php endif; ?>

  <?php endif; ?>

  <?php comment_form(); ?>