<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Horizon_Theme
 */

get_header(); ?>

	<div id="primary" class="container">

		<?php horizon_header_with_image('<span>Horizon</span> Blog', 'Our Work is your satisfaction', get_template_directory_uri() . '/assets/images/blog/banner-blog.jpg'); ?>

		<main id="main-content" class="site-main col-md-8 col-md-push-4" role="main">
			<?php get_template_part('loop'); ?>
		</main><!-- #main -->

		<?php get_sidebar(); ?>
	</div><!-- #primary -->

<?php
get_footer();
