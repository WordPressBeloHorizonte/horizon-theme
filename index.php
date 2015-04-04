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
		</div> <!-- #banner -->
	</div> <!-- .wrapper-banner -->

	<main id="main-content" class="site-main" role="main">

		<section id="about">

			<div class="container">

				<header class="horizon-header">
					<h2 class="title">I'm the <span>Horizon</span></h2>
					<span class="sep"></span>
					<p class="desc">Our work is your satisfaction</p>
				</header>

				<blockquote>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget nulla ex. Curabitur mauris felis, vestibulum eget eros ac,
					congue suscipit felis. Etiam accumsan, libero ac tristique maximus, diam risus interdum odio, sed ultricies arcu quam vel mauris.</p>
				</blockquote>

				<a href="#" class="horizon-btn">Contact us</a>

			</div> <!-- .container -->

		</section> <!-- #about -->

		<section id="joker-sep">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-xs-4 no-padding left hidden-xs">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img-joker.jpg" alt="">
					</div>
					<div class="col-md-6 col-sm-8 col-xs-12 no-padding right">
						<div class="wrapper-blockquote">
							<blockquote class="cite">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								Phasellus eget nulla ex.</p>
								<footer>
									<cite>Chuck Norris</cite>
								</footer>
							</blockquote>
						</div> <!-- .wrapper-blockquote -->
					</div>
				</div>
			</div> <!-- .container-fluid -->
		</section> <!-- #joker-sep -->

		<section id="services">
			<div class="container">

				<header class="horizon-header">
					<h2 class="title"><span>Horizon</span> Services</h2>
					<span class="sep"></span>
					<p class="desc">Our work is your satisfaction</p>
				</header>

				<blockquote>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget nulla ex. Curabitur mauris felis, vestibulum eget eros ac,
					congue suscipit felis. Etiam accumsan, libero ac tristique maximus, diam risus interdum odio, sed ultricies arcu quam vel mauris.</p>
				</blockquote>

			</div>
		</section> <!-- #services -->

	</main><!-- #main-content -->

<?php
get_footer();
