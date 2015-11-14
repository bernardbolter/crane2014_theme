<?php
/*
Template Name: press
*/
?>

<?php get_header(); ?>

<div id="press_loop_wrap">
	<div id="press_loop_container">

		<?php $args = array( 'post_type' => 'press', 'posts_per_page' => -1, 'order' => 'ASC' ); ?>
		<?php $press_loop = new WP_Query( $args ); ?>

	 
			<?php if ( $press_loop->have_posts() ) : ?>
			<?php while ( $press_loop->have_posts() ) : $press_loop->the_post(); ?>

			<?php
				$image_id = get_field('press_link_image');
				$image_size = 'press-link-image';
				$image_array = wp_get_attachment_image_src($image_id, $image_size);
				$image_url = $image_array[0];
			?>

			<div class="press_box">
				<div class="press_link_image"><img src="<?php echo $image_url; ?>" /></div>
				<p><?php the_title() ?></p>
				<a href="<?php echo get_field( 'press_link' ); ?>">go to article</a>
	 		</div> <!-- press_box -->

	 		<?php endwhile; ?>
		<?php endif; ?>
 
		<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>

	</div> <!-- press_loop_container -->
</div> <!-- press_loop_wrap -->


<?php get_footer(); ?>