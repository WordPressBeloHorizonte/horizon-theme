<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Horizon_Theme
 */
?>



	<footer id="footer" role="contentinfo">
		<div class="general-info clearfix">
			<div class="col-md-6">
				<p>	Tel: +55 (31) 9999-9999 | +55 (31) 3333-3333 | contact@horizon.com.br</p>
			</div><!-- .col-md-6 -->
			<div class="col-md-6">
				<p>Rua do cliente, nº000, Bairro do Cliente, BH / MG</p>
			</div><!-- .col-md-6 -->
		</div><!-- .general-info .row -->
		<div class="social-icons">
			<a href="#">
				<?php echo file_get_contents(get_stylesheet_directory_uri().'/assets/images/social/google.svg'); ?>
			</a>
			<a href="#">
				<?php echo file_get_contents(get_stylesheet_directory_uri().'/assets/images/social/facebook.svg'); ?>
			</a>
			<a href="#">
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
