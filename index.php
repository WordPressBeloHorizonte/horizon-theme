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

				<blockquote class="horizon-blockquote">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget nulla ex. Curabitur mauris felis, vestibulum eget eros ac,
					congue suscipit felis. Etiam accumsan, libero ac tristique maximus, diam risus interdum odio, sed ultricies arcu quam vel mauris.</p>
				</blockquote>

				<a href="#" class="horizon-btn">Contact us</a>

			</div> <!-- .container -->

		</section> <!-- #about -->

		<section class="joker-sep">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-4 no-padding left hidden-xs">
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

				<blockquote class="horizon-blockquote">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget nulla ex. Curabitur mauris felis, vestibulum eget eros ac,
					congue suscipit felis. Etiam accumsan, libero ac tristique maximus, diam risus interdum odio, sed ultricies arcu quam vel mauris.</p>
				</blockquote>

				<div class="row">
					<div class="service col-md-4 col-sm-6 col-xs-12">
						<div class="service-wrapper">
							<span class="service-icon fa fa-mobile"></span>
							<h4>Fábrica de Aplicativos</h4>
							<span class="sep"></span>
							<p>Lorem ipsum dolor sit amet, consectetur.</p>
						</div>
					</div>
					<div class="service col-md-4 col-sm-6 col-xs-12">
						<div class="service-wrapper">
							<span class="service-icon fa fa-desktop"></span>
							<h4>Web Design</h4>
							<span class="sep"></span>
							<p>Lorem ipsum dolor sit amet, consectetur.</p>
						</div>
					</div>
					<div class="service col-md-4 col-sm-6 col-xs-12">
						<div class="service-wrapper">
							<span class="service-icon fa fa-paint-brush"></span>
							<h4>Design Gráfico</h4>
							<span class="sep"></span>
							<p>Lorem ipsum dolor sit amet, consectetur.</p>
						</div>
					</div>
					<div class="service col-md-4 col-sm-6 col-xs-12">
						<div class="service-wrapper">
							<span class="service-icon dashicons dashicons-groups"></span>
							<h4>Redes Sociais</h4>
							<span class="sep"></span>
							<p>Lorem ipsum dolor sit amet, consectetur.</p>
						</div>
					</div>
					<div class="service col-md-4 col-sm-6 col-xs-12">
						<div class="service-wrapper">
							<span class="service-icon fa fa-bar-chart"></span>
							<h4>Gestão de Projetos</h4>
							<span class="sep"></span>
							<p>Lorem ipsum dolor sit amet, consectetur.</p>
						</div>
					</div>
					<div class="service col-md-4 col-sm-6 col-xs-12">
						<div class="service-wrapper">
							<span class="service-icon dashicons dashicons-lightbulb"></span>
							<h4>Branding</h4>
							<span class="sep"></span>
							<p>Lorem ipsum dolor sit amet, consectetur.</p>
						</div>
					</div>
					<div class="service col-md-4 col-sm-6 col-xs-12">
						<div class="service-wrapper">
							<span class="service-icon fa fa-mobile"></span>
							<h4>Fábrica de Aplicativos</h4>
							<span class="sep"></span>
							<p>Lorem ipsum dolor sit amet, consectetur.</p>
						</div>
					</div>
					<div class="service col-md-4 col-sm-6 col-xs-12">
						<div class="service-wrapper">
							<span class="service-icon fa fa-desktop"></span>
							<h4>Web Design</h4>
							<span class="sep"></span>
							<p>Lorem ipsum dolor sit amet, consectetur.</p>
						</div>
					</div>
					<div class="service col-md-4 col-sm-6 col-xs-12">
						<div class="service-wrapper">
							<span class="service-icon fa fa-paint-brush"></span>
							<h4>Design Gráfico</h4>
							<span class="sep"></span>
							<p>Lorem ipsum dolor sit amet, consectetur.</p>
						</div>
					</div>
				</div>

			</div>
		</section> <!-- #services -->

		<section class="skills">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-12 left">
						<div class="col-md-6 col-sm-6 col-xs-6">
							<ul class="skills-list">
								<li>
									<span class="dashicons dashicons-leftright"></span>
									<span>
										<h5>Código de Qualidade</h5>
										<p>Lorem ipsum dolor sit amet. Consectetur adpiscing elit.</p>
									</span>
								</li>
								<li>
									<span class="dashicons dashicons-welcome-view-site"></span>
									<span>
										<h5>Design Moderno</h5>
										<p>Lorem ipsum dolor sit amet. Consectetur adpiscing elit.</p>
									</span>
								</li>
								<li>
									<span class="dashicons dashicons-admin-tools"></span>
									<span>
										<h5>Suporte dedicado</h5>
										<p>Lorem ipsum dolor sit amet. Consectetur adpiscing elit.</p>
									</span>
								</li>
							</ul>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
							<ul class="skills-list">
								<li>
									<span class="dashicons dashicons-admin-users"></span>
									<span>
										<h5>Ideias Inovadores</h5>
										<p>Lorem ipsum dolor sit amet. Consectetur adpiscing elit.</p>
									</span>
								</li>
								<li>
									<span class="dashicons dashicons-awards"></span>
									<span>
										<h5>Design Moderno</h5>
										<p>Lorem ipsum dolor sit amet. Consectetur adpiscing elit.</p>
									</span>
								</li>
								<li>
									<span class="dashicons dashicons-admin-site"></span>
									<span>
										<h5>Design Moderno</h5>
										<p>Lorem ipsum dolor sit amet. Consectetur adpiscing elit.</p>
									</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 hidden-sm hidden-xs no-padding right">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/skills.jpg" alt="">
					</div>
				</div>
			</div> <!-- .container-fluid -->
		</section> <!-- #joker-sep -->

		<section class="portfolio">
			<div class="container">

				<header class="horizon-header">
					<h2 class="title"><span>Horizon</span> Portfolio</h2>
					<span class="sep"></span>
					<p class="desc">Our work is your satisfaction</p>
				</header>

				<blockquote class="horizon-blockquote">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget nulla ex. Curabitur mauris felis, vestibulum eget eros ac,
					congue suscipit felis. Etiam accumsan, libero ac tristique maximus, diam risus interdum odio, sed ultricies arcu quam vel mauris.</p>
				</blockquote>

			</div><!-- .container -->
			<div class="content">
				<nav class="menu">
					<ul>
						<li class="menu-item">
							<a href="#" class="menu-item-link">caterogia 01</a>
						</li>
						<li class="menu-item">
							<a href="#" class="menu-item-link">caterogia 02</a>
						</li>
						<li class="menu-item">
							<a href="#" class="menu-item-link">caterogia 03</a>
						</li>
						<li class="menu-item">
							<a href="#" class="menu-item-link">caterogia 04</a>
						</li>
						<li class="menu-item">
							<a href="#" class="menu-item-link">caterogia 05</a>
						</li>
					</ul>
				</nav>
			</div> <!-- .content -->
			<div class="portfolio-list clearfix">
				<div class="portfolio-item col-lg-3 col-md-4 col-sm-6">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portifolio/foto.jpg" alt="">
					<div class="portfolio-item-caption">
						<h4 class="portfolio-item-title">Lorem Ipsum</h4>
						<span class="portfolio-item-description">Lorem Ipsum</span>    
					</div><!-- .portfolio-item-caption -->
				</div><!-- .portfolio-item -->
				<div class="portfolio-item col-lg-3 col-md-4 col-sm-6">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portifolio/foto3.jpg" alt="">
					<div class="portfolio-item-caption">
						<h4 class="portfolio-item-title">Lorem Ipsum</h4>
						<span class="portfolio-item-description">Lorem Ipsum</span>    
					</div><!-- .portfolio-item-caption -->
				</div><!-- .portfolio-item -->
				<div class="portfolio-item col-lg-3 col-md-4 col-sm-6">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portifolio/foto4.jpg" alt="">
					<div class="portfolio-item-caption">
						<h4 class="portfolio-item-title">Lorem Ipsum</h4>
						<span class="portfolio-item-description">Lorem Ipsum</span>    
					</div><!-- .portfolio-item-caption -->
				</div><!-- .portfolio-item -->
				<div class="portfolio-item col-lg-3 col-md-4 col-sm-6">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portifolio/foto5.jpg" alt="">
					<div class="portfolio-item-caption">
						<h4 class="portfolio-item-title">Lorem Ipsum</h4>
						<span class="portfolio-item-description">Lorem Ipsum</span>    
					</div><!-- .portfolio-item-caption -->
				</div><!-- .portfolio-item -->
				<div class="portfolio-item col-lg-3 col-md-4 col-sm-6">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portifolio/foto6.jpg" alt="">
					<div class="portfolio-item-caption">
						<h4 class="portfolio-item-title">Lorem Ipsum</h4>
						<span class="portfolio-item-description">Lorem Ipsum</span>    
					</div><!-- .portfolio-item-caption -->
				</div><!-- .portfolio-item -->
				<div class="portfolio-item col-lg-3 col-md-4 col-sm-6">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portifolio/foto7.jpg" alt="">
					<div class="portfolio-item-caption">
						<h4 class="portfolio-item-title">Lorem Ipsum</h4>
						<span class="portfolio-item-description">Lorem Ipsum</span>    
					</div><!-- .portfolio-item-caption -->
				</div><!-- .portfolio-item -->
				<div class="portfolio-item col-lg-3 col-md-4 col-sm-6">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portifolio/foto8.jpg" alt="">
					<div class="portfolio-item-caption">
						<h4 class="portfolio-item-title">Lorem Ipsum</h4>
						<span class="portfolio-item-description">Lorem Ipsum</span>    
					</div><!-- .portfolio-item-caption -->
				</div><!-- .portfolio-item -->
				<div class="portfolio-item col-lg-3 col-md-4 col-sm-6">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portifolio/foto.jpg" alt="">
					<div class="portfolio-item-caption">
						<h4 class="portfolio-item-title">Lorem Ipsum</h4>
						<span class="portfolio-item-description">Lorem Ipsum</span>    
					</div><!-- .portfolio-item-caption -->
				</div><!-- .portfolio-item -->
				<div class="portfolio-item col-lg-3 col-md-4 col-sm-6">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portifolio/foto.jpg" alt="">
					<div class="portfolio-item-caption">
						<h4 class="portfolio-item-title">Lorem Ipsum</h4>
						<span class="portfolio-item-description">Lorem Ipsum</span>    
					</div><!-- .portfolio-item-caption -->
				</div><!-- .portfolio-item -->
				<div class="portfolio-item col-lg-3 col-md-4 col-sm-6">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portifolio/foto3.jpg" alt="">
					<div class="portfolio-item-caption">
						<h4 class="portfolio-item-title">Lorem Ipsum</h4>
						<span class="portfolio-item-description">Lorem Ipsum</span>    
					</div><!-- .portfolio-item-caption -->
				</div><!-- .portfolio-item -->
				<div class="portfolio-item col-lg-3 col-md-4 col-sm-6">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portifolio/foto4.jpg" alt="">
					<div class="portfolio-item-caption">
						<h4 class="portfolio-item-title">Lorem Ipsum</h4>
						<span class="portfolio-item-description">Lorem Ipsum</span>    
					</div><!-- .portfolio-item-caption -->
				</div><!-- .portfolio-item -->
				<div class="portfolio-item col-lg-3 col-md-4 col-sm-6">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portifolio/foto5.jpg" alt="">
					<div class="portfolio-item-caption">
						<h4 class="portfolio-item-title">Lorem Ipsum</h4>
						<span class="portfolio-item-description">Lorem Ipsum</span>    
					</div><!-- .portfolio-item-caption -->
				</div><!-- .portfolio-item -->
			</div><!-- .portifolio-list -->
			<div class="content load-more">
				<button href="#" class="horizon-btn secondary"><?php _e( 'Load More', 'horizon-theme' ); ?></button>
			</div><!-- .load-more -->
		</section><!-- .portfolio -->


		<section id="blog">
			<div class="container">
				<header class="horizon-header">
					<h2 class="title">Blog da Horizon</h2>
					<span class="sep"></span>
					<p class="desc">Nosso trabalho é sua satisfação</p>
				</header><!-- .horizon-header -->
				<div class="row">
					<div class="col-md-6 col-xs-12">
						<article class="blog-item">
							<figure class="blog-item-image">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/post-01.jpg" alt="Post 01">
							</figure><!-- .blog-item-image -->
							<div class="blog-item-content">
								<header class="blog-item-header">
									<h3 class="blog-item-title">Somos a Horizon, saiba como funciona</h3>
									<div class="sep"></div>
									<span class="blog-item-publish-date">13 de Abril de 2015</span>
								</header><!-- .blog-item-header -->
								
								<div class="blog-item-excerpt">
									<p>Ex itaque a facilis, recusandae laudantium est voluptatem porro fuga cupiditate atque eligendi natus voluptatum doloribus voluptate, modi reiciendis corporis magni iusto!</p>
								</div><!-- .blog-item-excerpt -->
								
								<button class="horizon-btn btn-blog-item"><?php _e( 'Continue reading', 'horizon-theme' ); ?></button>
								
								<footer class="blog-item-footer">
									<span class="blog-item-author"><?php _e( 'Published by', 'horizon-theme' ); ?> <a href="#">Administrador</a></span>
									<?php $comments = 23; ?>
									<a href="#" class="blog-item-comments"><span class="fa fa-comments"></span>	<?php printf( _n( 'One comment', '%s comments', $comments, 'horizon-theme' ), $comments ); ?></a>
									<div class="blog-item-share">
										<span class="blog-item-share-links"><?php _e( 'Share:', 'horizon-theme' ); ?></span>
										<a href="#" class="fa fa-google"></a>
										<a href="#" class="fa fa-facebook"></a>
										<a href="#" class="fa fa-twitter"></a>
									</div>
								</footer><!-- .blog-item-footer -->
							</div><!-- .blog-item-content -->
						</article><!-- .blog-item -->
					</div>
					<div class="col-md-6 col-xs-12">
						<article class="blog-item">
							<figure class="blog-item-image">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/post-02.jpg" alt="Post 01">
							</figure><!-- .blog-item-image -->
							<div class="blog-item-content">
								<header class="blog-item-header">
									<h3 class="blog-item-title">Somos a Horizon, saiba como funciona</h3>
									<div class="sep"></div>
									<span class="blog-item-publish-date">13 de Junho de 2015</span>
								</header><!-- .blog-item-header -->
								
								<div class="blog-item-excerpt">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex itaque a facilis, recusandae laudantium est voluptatem porro fuga cupiditate atque eligendi natus voluptatum doloribus voluptate, modi reiciendis corporis magni iusto!</p>
								</div><!-- .blog-item-excerpt -->
								
								<button class="horizon-btn btn-blog-item"><?php _e( 'Continue reading', 'horizon-theme' ); ?></button>
								
								<footer class="blog-item-footer">
									<span class="blog-item-author"><?php _e( 'Published by', 'horizon-theme' ); ?> <a href="#">Administrador</a></span>
									<?php $comments = 1; ?>
									<a href="#" class="blog-item-comments"><span class="fa fa-comments"></span>	<?php printf( _n( 'One comment', '%s comments', $comments, 'horizon-theme' ), $comments ); ?></a>
									<div class="blog-item-share">
										<span class="blog-item-share-links"><?php _e( 'Share:', 'horizon-theme' ); ?></span>
										<a href="#" class="fa fa-google"></a>
										<a href="#" class="fa fa-facebook"></a>
										<a href="#" class="fa fa-twitter"></a>
									</div>
								</footer><!-- .blog-item-footer -->
							</div><!-- .blog-item-content -->
						</article><!-- .blog-item -->
					</div>
				</div><!-- .row -->

				<div class="content load-more">
					<button href="#" class="horizon-btn secondary"><?php _e( 'Load More', 'horizon-theme' ); ?></button>
				</div><!-- .load-more -->
			</div><!-- .container -->
		</section>

		<section id="clients">
			<div class="container">
				<header class="horizon-header">
					<h2 class="title"><span>Horizon</span> Clients</h2>
					<span class="sep"></span>
					<p class="desc">Our work is your satisfaction</p>
				</header>

				<div class="carousel">
					<div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/horizon-clients.png" alt=""></div>
					<div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/horizon-clients.png" alt=""></div>
					<div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/horizon-clients.png" alt=""></div>
					<div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/horizon-clients.png" alt=""></div>
					<div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/horizon-clients.png" alt=""></div>
					<div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/horizon-clients.png" alt=""></div>
					<div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/horizon-clients.png" alt=""></div>
					<div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/horizon-clients.png" alt=""></div>
					<div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/horizon-clients.png" alt=""></div>
					<div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/horizon-clients.png" alt=""></div>
					<div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/horizon-clients.png" alt=""></div>
				</div>
			</div>
		</section> <!-- #clients -->

		<section class="joker-sep">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-4 no-padding left hidden-xs">
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

		<section id="contact">
			<div class="content">
				<div class="col-md-6 contact-form">
					<header class="horizon-header">
						<h2 class="title">Contact the <span>Horizon</span></h2>
						<span class="sep"></span>
						<p class="desc">Our work is your satisfaction</p>
					</header>
					<form class="horizon-form">
						<!-- Input Name-->
						<div class="form-group">
								<input id="horizon-form-name" name="name" type="text" placeholder="<?php _e( 'Name', 'horizon-theme' ); ?>">
						</div>
						<!-- Input Mail-->
						<div class="form-group">
								<input id="horizon-form-email" name="mail" type="text" placeholder="<?php _e( 'E-mail', 'horizon-theme' ); ?>">
						</div>
						<!-- Input Message -->
						<div class="form-group">
								<textarea id="horizon-form-message" name="message" placeholder="<?php _e( 'Message', 'horizon-theme' ); ?>"></textarea>
						</div>
						<button href="#" class="horizon-btn btn-md"><?php _e( 'Send Message', 'horizon-theme' ); ?></button>
					</form>
				</div><!-- .contact-form -->
				<div id="map" class="col-md-6">
				</div><!-- #map -->
			</div><!-- .content -->
		</section><!-- #contact -->
	</main><!-- #main-content -->

<?php
get_footer();
