<?php
/*
Template Name: high back chair
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="gallery_info_wrap">
	<div class="gallery_title_wrap">
		<p class="galleries_title"><?php wp_title("",true); ?></p>
		<div class="galleries_desc"><?php the_content(); ?></div>
	</div> <!-- gallery_title_wrap -->
	<div class="gallery_purchase">
		<a href="http://evanzcrane.tictail.com/product/high-back-chair" rel="link to purchase High Back Chair online">
			<p class="purchase_title">Purchase Now</p>
		</a> 
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
	<p>Please <a title="contact link" href="http://evanzcrane.com/contact">contact</a> or pricing.</p>
</div>

<?php endwhile; ?>
<?php get_footer(); ?>