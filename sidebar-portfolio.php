<?php
/**
 * The sidebar containing the secondary widget area, displays on single-jetpack-portfolio.php
 *
 * This sidebar requires the Horizon Plugin, if Horizon Plugin is not active then this sidebar will not be used
 *
 * @package Horizon_Theme
 */
?>

<div id="secondary" class="col-md-4 col-md-pull-8" role="complementary">
	<?php
		if ( ! dynamic_sidebar( 'portfolio-sidebar' ) ) {
			the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 10 ) );
			the_widget( 'WP_Widget_Archives', array( 'count' => 0, 'dropdown' => 1 ) );
			the_widget( 'WP_Widget_Tag_Cloud' );
		}
	?>
</div><!-- #secondary -->
