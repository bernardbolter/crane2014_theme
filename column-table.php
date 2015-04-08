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
		<div class="galleries_desc"><p>The “Column” series is inspired by the structural columns of New York City’s industrial factory spaces. The same simplicity of shape that lends structure to those architectural elements, makes the column series unique and robust in construction with only a few components. The dimensions are customizable to fit any space, even a child’s room. The only part of the Column Bench that is fixed is the overall design of the leg structure. The proportions are infinitely adjustable to fit any space.</p></div>
		<br>
		<div class="galleries_desc"><p class="desc_small">Shown in:  Natural oak, Hard Maple, and lacquered steel</div></p>
		<br>
		<div class="galleries_desc"><p class="desc_small">Column table and bench are modular pieces, available in any length and width</div></p>
		<br>
	</div> <!-- gallery_title_wrap -->
	<div class="gallery_purchase">
		<a href="http://evanzcrane.tictail.com/product/column-table" rel="link to purchase Column Table online">
			<p class="purchase_title">Purchase Now</p>
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