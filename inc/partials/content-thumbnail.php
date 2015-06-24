<figure class="blog-item-image">
	<?php
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'horizon-thumbnail' );
	?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		<img class="horizon-thumbnail" src="<?php echo $thumbnail['0']; ?>" />
	</a>
</figure><!-- .blog-item-image -->
