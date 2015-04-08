<?php
/*
Template Name: the fuzzy captain
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="gallery_info_wrap">
	<div class="gallery_title_wrap">
		<p class="galleries_title"><?php wp_title("",true); ?></p>
		<div class="galleries_desc"><p>A new take on my old faithful captains chair. I wanted to combine bigger and beefier proportions with the original dynamic design to make for an intensely relaxing sit. When I first thought about making this piece I wanted the chair to feel like it was hugging you as you sat  in it, the concept was a "Mutual embrace from your favorite pet".  The Icelandic sheep hide for the back rest cushion just fit that concept, it offers not only a new look but a new level of comfort.  For this piece I also teamed up with two long time friends who recently started “De Islas”, a designer textile company, they describe their common passion for drawing as the silent third partner of the company. They hand draw or paint all their designs and then transform them into repeatable patterns for a totally unique look that really works with this chairs big personality.</p></div>
		<br>
		<div class="galleries_desc"><p class="desc_small">seat height: 18″ | back height: 36″ | front arm width: 34″</div></p>
		<br>
		<div class="galleries_desc"><p class="desc_small">Shown in: Reclaimed oak timber, lacquered steel. Icelandic sheep hide, custom upholstered fabric</div></p>
		<br>
		<div class="galleries_desc"><p class="desc_small">Available in: White Oak, Reclaimed Oak, Maple, Walnut, Ash, and Sapele (Other wood species available upon request) - Multiple wood finishes, lacquer colors, and upholstery options available.</p></div>
	</div> <!-- gallery_title_wrap -->
	<div class="gallery_purchase">
		<a href="http://evanzcrane.tictail.com/product/fuzzy-captain" rel="link to purchase The Fuzzy Captain online">
			<p class="purchase_title">Purchase Now</p>
		</a> 
	</div><!-- gallery_purchase -->
</div> <!-- gallery_info_wrap -->

<div class="gallery_wrap">
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/fuzzy-captain/fuzzy-captain_01_lg.jpg" title="The Fuzzy Captain"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/fuzzy-captain/fuzzy-captain_01.jpg" alt="The Fuzzy Captain"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/fuzzy-captain/fuzzy-captain_02_lg.jpg" title="The Fuzzy Captain"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/fuzzy-captain/fuzzy-captain_02.jpg" alt="The Fuzzy Captain"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/fuzzy-captain/fuzzy-captain_03_lg.jpg" title="The Fuzzy Captain"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/fuzzy-captain/fuzzy-captain_03.jpg" alt="The Fuzzy Captain"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/fuzzy-captain/fuzzy-captain_04_lg.jpg" title="The Fuzzy Captain"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/fuzzy-captain/fuzzy-captain_04.jpg" alt="The Fuzzy Captain"></a>
</div>

<div class="gallery_text">
	<p>All furniture available in White Oak, Reclaimed Oak, Sapele, Walnut, Ash, and most other domestic hardwoods.</p>
	<p>Multiple wood finishes, lacquer colors, and upholstery options.</p>
	<p>Exterior versions available.</p>
	<p>Please <a title="contact link" href="http://evanzcrane.com/contact">contact</a> or pricing.</p>
</div>

<?php endwhile; ?>


<?php get_footer(); ?>