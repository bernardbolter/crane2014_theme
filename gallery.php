<?php
/*
Template Name: gallery
*/
?>

<?php get_header(); ?>
<div class="gallery_wrap">
	<?php // get array of all posts with featured at the begining
		$featured = array(
		 'post_type'      => 'galleries',
		 'posts_per_page' => -1,
		 'meta_key'       => 'featured',
		 'meta_value'     => 'is_featured'
		 );
		$featured_query = new WP_Query($featured);
		$other = array(
		 'post_type'      => 'galleries',
		 'posts_per_page' => -1,
		 'meta_key'       => 'featured',
		 'meta_value'     => 'not_featured',
		 'order'          => 'DESC'
		 );
		$other_query = new WP_Query($other);
		// merge queries to get featured press at beggining of loop

		$gallery_loop = new WP_Query();
		$gallery_loop->posts = array_merge( $featured_query->posts, $other_query->posts );
		$gallery_loop->post_count = count ( $gallery_loop->posts );

	if ( $gallery_loop->have_posts() ) : 
		while ( $gallery_loop->have_posts() ) : $gallery_loop->the_post(); 
	?>

	<?php 
	  $attach_id = get_field('square_image');
	  $square = 'gallery-image-featured';
	  $gallery_square = $attach_id['sizes'][ $square ];
	 ?>

	<div class="gallery_image">
		<a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
			<img src="<?php echo $gallery_square; ?>" />
			<p class="main_gallery_text"><?php echo get_the_title(); ?></p>
		</a>
	</div>


	<?php endwhile; ?>
<?php endif; ?>

<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>

</div> <!-- gallery wrap -->

<?php get_footer(); ?>