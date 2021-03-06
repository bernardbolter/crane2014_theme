<?php
/*
Template Name: press
*/
?>

<?php get_header(); ?>

<div class="press_loop_container">

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
		 'meta_value'     => 'not_featured',
		 'order'          => 'DESC'
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
			 	echo '<a class="press_link" href="' . get_field( 'press_link' ) . '">';
			 } elseif( get_field('press_pdf') ) {
			 	echo '<a class="press_link" href="' . get_field('press_pdf') . '" target="_blank">';
			 } else {
			 	echo '<a class="press_link" href="#">';
			 }
			?>

			<img class="press_image" src="<?php echo $image_url; ?>" />

				<div class="press_link_label_wrap">
						<?php // make a bottom link for either website or PDF
						 if( get_field('press_link') ) {
						 	echo '<p class="press_link_label">visit website</p>';
						 } elseif( get_field('press_pdf') ) {
						 	echo '<p class="press_link_label">view PDF in a new window</p>';
						 } else {
						 	echo '<p class="no_press_link"></p>';
						 }
						 ?>
				</div> <!-- press link label wrap -->

				<div class="press_link_wrap">
					
					<h3 class="press_link_title"><?php echo get_field( 'press_title' ); ?></h3>

					<p class="press_link_about"><?php echo get_field( 'press_description' ); ?></p>

				</div> <!-- press_link_wrap -->

			</a> <!-- closing of a tag from initial php URL or PDF decision -->
 		</div> <!-- press_box -->

 		<?php endwhile; ?>
	<?php endif; ?>

	<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>

</div> <!-- press_loop_container -->


<?php get_footer(); ?>