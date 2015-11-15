<?php
/*
Template Name: press
*/
?>

<?php get_header(); ?>

<div id="press_loop_wrap">
	<div id="press_loop_container">

		<?php 
			$featured = array(
			 'post_type'      => 'press',
			 'posts_per_page' => -1,
			 'meta_key'       => 'featured',
			 'meta_value'     => 'is_featured'
			 );
			$featured_query = new WP_Query($featured);
			$other = array(
			 'post_type'      => 'press',
			 'posts_per_page' => -1,
			 'meta_key'       => 'featured',
			 'meta_value'     => 'not_featured'
			 );
			$other_query = new WP_Query($other);
			// merge queries to get featured press at beggining of loop

			$press_loop = new WP_Query();
			$press_loop->posts = array_merge( $featured_query->posts, $other_query->posts );
			$press_loop->post_count = count ( $press_loop->posts );

		if ( $press_loop->have_posts() ) : 
			while ( $press_loop->have_posts() ) : $press_loop->the_post(); 

				$image_id = get_field('press_link_image');
				$image_size = 'press-link-image';
				$image_array = wp_get_attachment_image_src($image_id, $image_size);
				$image_url = $image_array[0];
		?>

			<div class="press_box">

				<?php // decide if link is to URL or PDF
				 if( get_field('press_link') ) {
				 	echo '<a href="' . get_field( 'press_link' ) . '">';
				 } elseif( get_field('press_pdf') ) {
				 	echo '<a href="' . get_field('press_pdf') . '" target="_blank">';
				 } else {
				 	echo 'a href="#';
				 }
				 ?>

				<div class="press_link_image"><img src="<?php echo $image_url; ?>" /></div>
				<p><?php the_title() ?></p>

				</a>
	 		</div> <!-- press_box -->

	 		<?php endwhile; ?>
		<?php endif; ?>
 
		<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>

	</div> <!-- press_loop_container -->
</div> <!-- press_loop_wrap -->


<?php get_footer(); ?>