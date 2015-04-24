<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Horizon_Theme
 */

get_header(); ?>

	<div id="primary" class="container">
		<header class="horizon-header">
			<h2 class="title">Blog da <span>Horizon</span></h2>
			<span class="sep"></span>
			<p class="desc">Our work is your satisfaction</p>
			<figure class="banner-blog col-lg-12">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/banner-blog.jpg" alt="">
			</figure><!-- .banner-blog -->
		</header><!-- .horizon-header -->
		<?php get_sidebar(); ?>
		<main id="main-content" class="site-main col-md-8" role="main">			
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				endwhile;
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
