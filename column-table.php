<?php
/*
Template Name: column table
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
		<a href="http://evanzcrane.tictail.com/product/column-table" rel="link to purchase Column Table online">
			<p class="purchase_title">Purchase Now</p>
			<p class="purchase_price">Starting at 3,500 USD</p>
		</a> 
	</div><!-- gallery_purchase -->
</div> <!-- gallery_info_wrap -->

<div class="gallery_wrap">
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/column-table/column-table_01_lg.jpg" title="Column Table"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/column-table/column-table_01.jpg" alt="Column Table"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/column-table/column-table_02_lg.jpg" title="Column Table"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/column-table/column-table_02.jpg" alt="Column Table"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/column-table/column-table_03_lg.jpg" title="Column Table"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/column-table/column-table_03.jpg" alt="Column Table"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/column-table/column-table_04_lg.jpg" title="Column Table"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/column-table/column-table_04.jpg" alt="Column Table"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/column-table/column-table_05_lg.jpg" title="Column Table"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/column-table/column-table_05.jpg" alt="Column Table"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/column-table/column-table_06_lg.jpg" title="Column Table"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/column-table/column-table_06.jpg" alt="Column Table"></a>
</div>

<div class="gallery_text">
	<p>All furniture available in White Oak, Reclaimed Oak, Sapele, Walnut, Ash, and most other domestic hardwoods.</p>
	<p>Multiple wood finishes, lacquer colors, and upholstery options.</p>
	<p>Exterior versions available.</p>
	<p>Please <a title="contact link" href="http://evanzcrane.com/contact">contact</a> or pricing.</p>
</div>

<?php endwhile; ?>
<?php get_footer(); ?>