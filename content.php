<?php
/**
 * The default template for displaying content.
 *
 * Used for both single and index/archive/author/catagory/search/tag.
 *
 * @package Horizon_Theme
 */
?>

<div class="col-lg-12 no-padding">
<?php if ( is_single() ) : ?>
	<article id="post-<?php the_ID(); ?>" class="blog-item blog-single">
<?php else: ?>
	<article id="post-<?php the_ID(); ?>" class="blog-item">
<?php  endif; ?>	
		<figure class="blog-item-image">
			<!-- This image must be cropped/resized to 555x285 by WordPress-->
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/post-02.jpg" alt="Post 01">
		</figure><!-- .blog-item-image -->
		<div class="blog-item-content">
			<header class="blog-item-header">
				<?php
					if ( is_single() ) :
						the_title( '<h3>', '</h3>' );
					else :
						the_title( '<h3><a href="' . esc_url( get_permalink() ) . '">', '</a></h3>' );
					endif;
				?>
				<div class="sep"></div>
				<span class="blog-item-publish-date"><?php the_time('F j, Y'); ?></span>
			</header><!-- .blog-item-header -->
			<?php if ( is_single() ) : ?>
				<div class="blog-content">
					<?php the_content(); ?>
				</div><!-- .blog-content -->
			<?php else: ?>
				<div class="blog-item-excerpt">
					<?php the_excerpt(); ?>
					<button type="button" href="<?php echo esc_url( get_permalink() ); ?>" class="horizon-btn btn-blog-item"><?php _e( 'Continue reading', 'horizon-theme' ); ?></button>
				</div><!-- .blog-item-excerpt -->
			<?php endif; ?>
			
			<footer class="blog-item-footer">
				<span class="blog-item-author"><?php _e( 'Published by ', 'horizon-theme' );  the_author_link(); ?></span>
				<a href="<?php comments_link(); ?>" class="blog-item-comments">
					<span class="fa fa-comments"></span> <?php comments_number( ' No comments', ' One comment', ' % comments' ); ?>
				</a>
				<div class="blog-item-share">
					<span class="blog-item-share-links"><?php _e( 'Share:', 'horizon-theme' ); ?></span>
					<a href="#" class="fa fa-google"></a>
					<a href="#" class="fa fa-facebook"></a>
					<a href="#" class="fa fa-twitter"></a>
				</div>				
				<?php if ( is_single() ) : ?>
				<div class="blog-list-categories">
					<span><?php _e( 'Categories:', 'horizon-theme' ); ?></span></li>
					<?php the_category( ', '); ?>
				</div>
				<?php  endif; ?>
			</footer><!-- .blog-item-footer -->
		</div><!-- .blog-item-content -->
	</article><!-- .blog-item -->
</div>