<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content
 *
 * @package Horizon_Theme
 */
?>



	<footer id="footer" role="contentinfo">
		<div class="general-info clearfix">
			<div class="col-md-6">
				<p class="customizer-contact_info">	<?php echo esc_html( horizon_get_theme_mod( 'contact_info' ) ); ?> </p>
			</div><!-- .col-md-6 -->
			<div class="col-md-6">
				<p class="customizer-address"><?php echo esc_html( horizon_get_theme_mod( 'address' ) ); ?></p>
			</div><!-- .col-md-6 -->
		</div><!-- .general-info .row -->
		<div class="social-icons">
			<a class="customizer-gplus" href="<?php echo esc_url( horizon_get_theme_mod( 'gplus' ) ); ?>">
				<?php echo file_get_contents(get_stylesheet_directory_uri().'/assets/images/social/google.svg'); ?>
			</a>
			<a class="customizer-facebook" href="<?php echo esc_url( horizon_get_theme_mod( 'facebook' ) ); ?>">
				<?php echo file_get_contents(get_stylesheet_directory_uri().'/assets/images/social/facebook.svg'); ?>
			</a>
			<a class="customizer-twitter" href="<?php echo esc_url( horizon_get_theme_mod( 'twitter' ) ); ?>">
				<?php echo file_get_contents(get_stylesheet_directory_uri().'/assets/images/social/twitter.svg'); ?>
			</a>
		</div><!-- .social-icons -->
		<div class="site-info">
			<span>Copyright &copy; <?php echo date( 'Y' ); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a> - <?php _e( 'All rights reserved', 'horizon-theme' ); ?> | <?php echo _e( 'Powered by', 'horizon-theme' ).' <a href="https://wordpress.org/" rel="nofollow" target="_blank">WordPress</a>.'; ?></span>
		</div><!-- .site-info -->
	</footer><!-- #footer -->


	<?php wp_footer(); ?>
</body>
</html>
