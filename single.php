<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Horizon_Theme
 */

get_header(); ?>

	<div id="primary" class="container">

		<?php get_template_part('inc/partials/blog', 'header'); ?>

		<main id="main-content" class="site-main col-md-8 col-md-push-4" role="main">
			<?php get_template_part('loop'); ?>
		</main><!-- #main -->

		<?php get_sidebar(); ?>
	</div><!-- #primary -->

<?php
get_footer();
