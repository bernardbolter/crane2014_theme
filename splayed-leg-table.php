<?php
/*
Template Name: splayed star table
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
		<a href="http://evanzcrane.tictail.com/product/splayed-star-table" rel="link to purchase Splayed Star Table online">
			<p class="purchase_title">Purchase Now</p>
		</a> 
	</div><!-- gallery_purchase -->
</div> <!-- gallery_info_wrap -->

<div class="gallery_wrap">
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/splayed-star-table/splayed-star-table_01_lg.jpg" title="Splayed Star Table"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/splayed-star-table/splayed-star-table_01.jpg" alt="Splayed Star Table"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/splayed-star-table/splayed-star-table_02_lg.jpg" title="Splayed Star Table"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/splayed-star-table/splayed-star-table_02.jpg" alt="Splayed Star Table"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/splayed-star-table/splayed-star-table_03_lg.jpg" title="Splayed Star Table"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/splayed-star-table/splayed-star-table_03.jpg" alt="Splayed Star Table"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/splayed-star-table/splayed-star-table_04_lg.jpg" title="Splayed Star Table"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/splayed-star-table/splayed-star-table_04.jpg" alt="Splayed Star Table"></a>
</div>

<div class="gallery_text">
	<p>All furniture available in White Oak, Reclaimed Oak, Sapele, Walnut, Ash, and most other domestic hardwoods.</p>
	<p>Multiple wood finishes, lacquer colors, and upholstery options.</p>
	<p>Exterior versions available.</p>
	<p>Please <a title="contact link" href="http://evanzcrane.com/contact">contact</a> or pricing.</p>
</div>

<?php endwhile; ?>
<?php get_footer(); ?>