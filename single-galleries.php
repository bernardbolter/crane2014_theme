<?php
/*
Template Name: galleries
*/
?>

<?php get_header(); ?>



<div class="galleries_container">

	<div class="gallery_info_wrap">
		<div class="gallery_title_wrap">
			<p class="galleries_title"><?php echo get_the_title(); ?></p>
			<div class="galleries_desc"><p><?php echo get_post_meta($post->ID, 'main_text', true) ?><p></div>
			<div class="galleries_desc"><p class="desc_small"><?php echo get_post_meta($post->ID, 'small_text_1', true) ?></p></div>
			<div class="galleries_desc"><p class="desc_small"><?php echo get_post_meta($post->ID, 'small_text_2', true) ?></p></div>
			<div class="galleries_desc"><p class="desc_small"><?php echo get_post_meta($post->ID, 'small_text_3', true) ?></p></div>
		</div> <!-- gallery_title_wrap -->
		<div class="gallery_purchase">
			<a href="http://evanzcrane.tictail.com/product/<?php global $post; echo $post->post_name; ?>" rel="link to purchase<?php wp_title("",true); ?> online">
				<p class="purchase_title">Purchase <?php echo get_the_title(); ?></p>
			</a>
		</div><!-- gallery_purchase -->
		<div class="galleries_next_item">
			<?php $rand_args=array( // grab random gallery post and puts link under purchase button
					    'post_type'=>'galleries', 
					    'orderby'=>'rand', 
					    'posts_per_page'=>'1',
					    'post__not_in' => array($post->ID)
					);
					$random_posts = new WP_Query($rand_args);
					while ($random_posts->have_posts()) : $random_posts->the_post();
				?>
				<a href="<?php the_permalink() ?>" rel="link to another gallery">
			
				<p>check out the <?php echo get_the_title(); ?> <img src="<?php bloginfo( 'template_url' ); ?>/gfx/right_arrow.jpg" alt="right arrow" /></p>
			</a>
			<?php endwhile; wp_reset_query(); ?>
		</div><!-- galleries next item -->
	</div> <!-- gallery_info_wrap -->

<div class="gallery_wrap">

		<?php 
		for( $i=0; $i<9; $i++ ) {
			  $picture = 'picture_';
			  $attachment_id = get_field($picture.$i);
			  $gallery_large = get_field($picture.$i);
			  $small = 'gallery-image-small';
			  $gallery_image = $attachment_id['sizes'][ $small ];
		?>
		<?php if($attachment_id): //dont output an empty image tag ?>
			<a class="swipebox" href="<?php echo $gallery_large['sizes']['large']; ?>" title="<?php echo get_the_title(); ?>">
			<img src="<?php echo $gallery_image; ?>" alt="<?php echo get_the_title(); ?>" />
			</a>
		<?php endif; }?>
		


</div>

<div class="gallery_text">
	<p><?php echo get_post_meta($post->ID, 'below_pictures_text_1', true) ?></p>
	<p><?php echo get_post_meta($post->ID, 'below_pictures_text_2', true) ?></p>
	<p><?php echo get_post_meta($post->ID, 'below_pictures_text_3', true) ?></p>
	<p>Please <a title="contact link" href="<?php bloginfo( 'url' ); ?>/contact">contact</a> for pricing.</p>
</div>


<?php get_footer(); ?>