<?php
/**
 * The Template for displaying portfolio single posts.
 *
 * @package Horizon_Theme
 */

get_header(); ?>

	<div id="primary" class="container">

		<?php horizon_header_with_image('Portfolio <span>Horizon</span>', 'Our Work is your satisfaction', get_template_directory_uri() . '/assets/images/blog/banner-blog.jpg'); ?>

		<main id="main-content" class="site-main col-md-8 col-md-push-4" role="main">
			<?php get_template_part('loop'); ?>
		</main><!-- #main -->


		<?php
		/**
		 * @todo verify if the horizon-plugin is active and load the portfolio-sidebar
		 */
			get_sidebar();
		?>

	</div><!-- #primary -->

<?php
get_footer();
