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
				<p class="purchase_title">Purchase Now</p>
			</a>
			<?php $rand_args=array(
				    'post_type'=>'galleries', 
				    'orderby'=>'rand', 
				    'posts_per_page'=>'1',
				    'post__not_in' => array($post->ID)
				);
				$random_posts = new WP_Query($rand_args);
				while ($random_posts->have_posts()) : $random_posts->the_post();
			?>
			<a href="<?php the_permalink() ?>" rel="link to another gallery">
			
				<p class="purchase_title"><?php echo get_the_title(); ?></p>
			</a>
			<?php endwhile; ?>
		</div><!-- gallery_purchase -->
	</div> <!-- gallery_info_wrap -->

<div class="gallery_wrap">
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/high-back-chair/high-back-chair_01_lg.jpg" title="High Back Chair"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/high-back-chair/high-back-chair_01.jpg" alt="High Back Chair"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/high-back-chair/high-back-chair_02_lg.jpg" title="High Back Chair"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/high-back-chair/high-back-chair_02.jpg" alt="High Back Chair"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/high-back-chair/high-back-chair_03_lg.jpg" title="High Back Chair"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/high-back-chair/high-back-chair_03.jpg" alt="High Back Chair"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/high-back-chair/high-back-chair_04_lg.jpg" title="High Back Chair"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/high-back-chair/high-back-chair_04.jpg" alt="High Back Chair"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/high-back-chair/high-back-chair_05_lg.jpg" title="High Back Chair"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/high-back-chair/high-back-chair_05.jpg" alt="High Back Chair"></a>
</div>

<div class="gallery_text">
	<p>All furniture available in White Oak, Reclaimed Oak, Sapele, Walnut, Ash, and most other domestic hardwoods.</p>
	<p>Multiple wood finishes, lacquer colors, and upholstery options.</p>
	<p>Exterior versions available.</p>
	<p>Please <a title="contact link" href="http://evanzcrane.com/contact">contact</a> for pricing.</p>
</div>


<?php get_footer(); ?>