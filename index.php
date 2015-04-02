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

	<div class="wrapper-banner">
		<div id="banner" role="banner" class="hidden-xs">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner.jpg" />
			<div class="wrapper-description">
				<div class="description">
					<img class="horizon-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/horizon-icon.png" alt="<?php _e('Site Icon', 'horizon-theme'); ?>">
					<h1>WE ARE HORI<span>ZON</span></h1>
					<p>and our goal is to serve you!</p>
				</div>
			</div>
		</div>
	</div>

	<div id="primary">
			<main id="main-content" class="site-main" role="main">
				<?php
					if ( have_posts() ) :
						// Start the Loop.
						while ( have_posts() ) : the_post();

							/*
							 * Include the post format-specific template for the content. If you want to
							 * use this in a child theme, then include a file called called content-___.php
							 * (where ___ is the post format) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );

						endwhile;

						// Post navigation.
						horizon_theme_paging_nav();

					else :
						// If no content, include the "No posts found" template.
						get_template_part( 'content', 'none' );

					endif;
				?>

			</main><!-- #content -->
		</div><!-- #primary -->

<?php
get_footer();
