<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package Horizon_Theme
 */
?>
<div id="comments" class="content-wrap" itemscope itemtype="http://schema.org/Comment">
	<?php if ( post_password_required() ) : ?>
		<span class="nopassword"><?php _e( 'This post is password protected. Enter the password to view all comments.', 'horizon-theme' ); ?></span>
</div><!-- #comments -->
		<?php
		return;
	endif;

	if ( have_comments() ) : ?>
		<h2 id="comments-title">
			<?php
			comments_number( __( '0 Comments', 'horizon-theme' ), __( '1 Comment', 'horizon-theme' ), __( '% Comments', 'horizon-theme' ) );
			echo ' ' . __( 'to', 'horizon-theme' ) . ' <span>&quot;' . get_the_title() . '&quot;</span>';
			?>
		</h2>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav id="comment-nav-above">
				<div class="nav-previous"><?php previous_comments_link( __( '&larr; Old Comments', 'horizon-theme' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'New Comments &rarr;', 'horizon-theme' ) ); ?></div>
			</nav>
		<?php endif; ?>
		<ol class="commentlist">
			<?php wp_list_comments( array( 'callback' => 'horizon_theme_comments_loop' ) ); ?>
		</ol>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav id="comment-nav-above">
				<div class="nav-previous"><?php previous_comments_link( __( '&larr; Old Comments', 'horizon-theme' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'New Comments &rarr;', 'horizon-theme' ) ); ?></div>
			</nav>
		<?php endif; ?>
	<?php endif; ?>
	<?php if ( ! comments_open() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<span class="nocomments"><?php _e( 'Comments closed.', 'horizon-theme' ); ?></span>
	<?php endif; ?>

	<?php
		$commenter = wp_get_current_commenter();
		$req = get_option( 'require_name_email' );
		$aria_req = ( $req ? " aria-required='true'" : '' );

		comment_form(
		array(
			'class_submit' => 'horizon-btn btn-sm',
			'comment_notes_after' => '',
			'comment_field' => '<div class="comment-form-comment form-group"><div class="controls"><textarea id="comment" name="comment" placeholder="'.__( 'Comment', 'horizon-theme' ).'"  cols="45" rows="8" class="" aria-required="true"></textarea></div></div>',
			'fields' => apply_filters( 'comment_form_default_fields', array(
				'author' => '<div class="comment-form-author form-group"><input class="" id="author" name="author" type="text" placeholder="'.__( 'Name', 'horizon-theme' ).'" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
				'email' => '<div class="comment-form-email form-group"><input class="" id="email" name="email" type="text" placeholder="'.__( 'E-mail', 'horizon-theme' ).'" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>' ) )
		)
	); ?>
</div><!-- #comments -->
