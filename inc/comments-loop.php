<?php
if ( ! function_exists( 'horizon_theme_comment_loop' ) ) {

	/**
	 * Custom comments loop.
	 *
	 * @param  object $comment Comment object.
	 * @param  array  $args    Comment arguments.
	 * @param  int    $depth   Comment depth.
	 *
	 * @return void
	 */
	function horizon_theme_comments_loop( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;

		switch ( $comment->comment_type ) {
			case 'pingback' :
			case 'trackback' :
				?>
				<li class="post pingback">
					<p><?php _e( 'Pingback:', 'horizon-theme' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'horizon-theme' ), '<span class="edit-link">', '</span>' ); ?></p>
					<?php
					break;
				default :
					?>
				<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
					<article id="comment-<?php comment_ID(); ?>" class="comment">
						<footer class="comment-meta">
							<div class="comment-author vcard">
								<div class="reply">
									<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'horizon-theme' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
								</div><!-- .reply -->
								<?php echo sprintf( '%1$s<span class="fn">%2$s</span>', get_avatar( $comment, 70 ), get_comment_author_link() ); ?>
								<?php edit_comment_link( __( 'Edit', 'horizon-theme' ), '<span class="edit-link"> | ', '</span>' ); ?>
								<div class="comment-date">
									<span class="fa fa-clock-o"></span> <?php echo get_comment_time( 'j \d\e F \d\e Y' ); ?>
								</div>
							</div><!-- .comment-author .vcard -->
						</footer>
						<div class="comment-content">
							<?php if ( $comment->comment_approved == '0' ) : ?>
								<div class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'horizon-theme' ); ?></div>
							<?php endif; ?>
							<?php comment_text(); ?>
						</div>
					</article><!-- #comment-## -->

				<?php break;
		}
	}

}
