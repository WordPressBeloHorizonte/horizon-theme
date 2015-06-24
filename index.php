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

		<?php horizon_header_with_image('<span>Horizon</span> Blog', 'Our Work is your satisfaction', get_template_directory_uri() . '/assets/images/blog/banner-blog.jpg'); ?>

		<main id="main-content" class="site-main col-md-8 col-md-push-4" role="main">
			<?php get_template_part('loop'); ?>

			<?php horizon_theme_paging_nav(); ?>
		</main><!-- #main -->

		<?php get_sidebar(); ?>

	</div><!-- #primary -->

<?php
get_footer();
