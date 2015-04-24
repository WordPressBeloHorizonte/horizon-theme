<?php
/**
 * The template for displaying Search Form.
 *
 * @package Horizon_Theme
 */
?>

<form method="get" id="searchform" class="horizon-search" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<div class="search">
		<input type="search" name="s" id="s" placeholder="<?php _e( 'Search', 'horizon-theme' ); ?>" />
	</div>
	<button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
</form>
