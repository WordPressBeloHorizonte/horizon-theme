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

	<?php get_template_part('inc/partials/homepage', 'banner'); ?>

	<main id="main-content" class="site-main" role="main">


		<?php if ( function_exists('Homepage_Control') ) : ?>

			<?php do_action('homepage'); ?>

		<?php else: ?>

			<?php get_template_part('inc/partials/homepage'); ?>

		<?php endif; ?>

	</main><!-- #main-content -->

<?php
get_footer();
