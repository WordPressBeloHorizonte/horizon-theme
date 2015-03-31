<?php
/**
 * The template for displaying Search Form.
 *
 * @package Horizon_Theme
 */
?>

<form method="get" id="searchform" class="form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<div class="form-group">
		<label for="s" class="sr-only"><?php _e( 'Search', 'horizon-theme' ); ?></label>
		<input type="search" class="form-control" name="s" id="s" />
	</div>
	<input type="submit" class="btn btn-default" value="<?php esc_attr_e( 'Search', 'horizon-theme' ); ?>" />
</form>
