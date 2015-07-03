<?php get_template_part('inc/partials/homepage', 'about'); ?>

<?php get_template_part('inc/partials/homepage', 'separator'); ?>

<?php get_template_part('inc/partials/homepage', 'services'); ?>

<?php get_template_part('inc/partials/homepage', 'skills'); ?>

<?php if ( class_exists( 'Jetpack' ) && post_type_exists('jetpack-portfolio') )  : ?>
	<?php get_template_part('inc/partials/homepage', 'portfolio'); ?>
<?php endif; ?>

<?php get_template_part('inc/partials/homepage', 'blog'); ?>

<?php get_template_part('inc/partials/homepage', 'clients'); ?>

<?php get_template_part('inc/partials/homepage', 'separator'); ?>

<?php get_template_part('inc/partials/homepage', 'contact'); ?>
