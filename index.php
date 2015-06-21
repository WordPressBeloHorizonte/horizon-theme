<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
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
