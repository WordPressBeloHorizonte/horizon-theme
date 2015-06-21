<div class="content">
	<nav class="menu">
		<?php
		$portfolio_terms = get_terms('jetpack-portfolio-type', array(
			'orderby' => 'name',
			'hide_empty' => 1
		) );

		if ( ! empty( $portfolio_terms ) && ! is_wp_error( $portfolio_terms ) ) :
			?>

			<ul>
				<?php foreach( $portfolio_terms as $portfolio_term ) : ?>
					<li class="menu-item">
						<a href="<?php echo esc_url( get_term_link( $portfolio_term ) ); ?>" class="menu-item-link"><?php echo esc_html( $portfolio_term->name ); ?></a>
					</li>
				<?php endforeach; ?>
			</ul>

		<?php else: ?>
			<p><?php _e("You don't have any portfolio items. Please, create some portfolio items or deactivate this section with Homepage Control Plugin."); ?></p>
		<?php endif; ?>
	</nav>
</div> <!-- .content -->
<?php
	$portfolio_items = new WP_Query( array('post_type' => 'jetpack-portfolio') );
	if ( $portfolio_items->have_posts() ) :
?>
	<div class="portfolio-list clearfix">
		<?php while( $portfolio_items->have_posts() ) : $portfolio_items->the_post(); ?>
			<figure class="portfolio-item col-lg-3 col-md-4 col-sm-6">
				<a href="<?php the_permalink(); ?>">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail('horizon-portfolio-thumbnail'); ?>
					<?php else: ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portifolio/foto.jpg" alt="">
					<?php endif; ?>
				</a>
				<figcaption class="portfolio-item-caption">
					<h4 class="portfolio-item-title"><?php the_title(); ?></h4>
					<span class="portfolio-item-description"><?php the_terms( get_the_ID(), 'jetpack-portfolio-tag'); ?></span>
				</figcaption><!-- .portfolio-item-caption -->
			</figure><!-- .portfolio-item -->
		<?php endwhile; ?>
	</div><!-- .portifolio-list -->

	<?php if ( ! is_archive('jetpack-portfolio') ) : ?>
		<div class="content load-more">
			<a href="<?php echo get_post_type_archive_link( 'jetpack-portfolio' ); ?>" class="horizon-btn secondary"><?php _e( 'View All', 'horizon-theme' ); ?></a>
		</div><!-- .load-more -->
	<?php endif; ?>
<?php endif; ?>
