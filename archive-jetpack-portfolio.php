<?php
/**
 * The template for displaying Portfolio Archive pages.
 *
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Horizon_Theme
 */

get_header(); ?>



	<section id="portfolio">
		<div class="container">

			<?php
				horizon_header_with_image(
					'<span>Horizon</span> Portfolio',
					'Our Work is your satisfaction',
					get_template_directory_uri() . '/assets/images/blog/banner-blog.jpg'
				);
			?>

		</div><!-- .container -->

		<?php get_template_part('loop','portfolio'); ?>

	</section><!-- .portfolio -->


<?php
get_footer();
