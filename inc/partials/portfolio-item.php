<figure class="portfolio-item col-lg-3 col-md-4 col-sm-6">
	<a href="<?php the_permalink(); ?>">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'horizon-portfolio-thumbnail' ); ?>
		<?php else: ?>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portifolio/foto.jpg" alt="">
		<?php endif; ?>
	</a>
	<figcaption class="portfolio-item-caption">
		<h4 class="portfolio-item-title"><?php the_title(); ?></h4>
		<span class="portfolio-item-description"><?php the_terms( get_the_ID(), 'jetpack-portfolio-type' ); ?></span>
	</figcaption><!-- .portfolio-item-caption -->
</figure><!-- .portfolio-item -->
