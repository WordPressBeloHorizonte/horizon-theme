<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package HHorizon_Theme
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
