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
		<div class="site-info">
			<span>&copy; <?php echo date( 'Y' ); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a> - <?php _e( 'All rights reserved', 'horizon-theme' ); ?> | <?php echo sprintf( __( 'Powered by the <a href="%s" rel="nofollow" target="_blank">Horizon Theme</a> forces and <a href="%s" rel="nofollow" target="_blank">WordPress</a>.', 'horizon-theme' ), 'http://wpod.in/', 'http://wordpress.org/' ); ?></span>
		</div><!-- .site-info -->
	</footer><!-- #footer -->


	<?php wp_footer(); ?>
</body>
</html>
