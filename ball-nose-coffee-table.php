<?php
/*
Template Name: ball nose coffee table
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="gallery_info_wrap">
	<div class="gallery_title_wrap">
		<p class="galleries_title"><?php wp_title("",true); ?></p>
		<div class="galleries_desc"><p>This piece was totally inspired by geometry in my surroundings, namely a children's playground. I suppose watching after a kid on the playground forces you to be hyper aware of your surroundings. Without a doubt, being engaged in play with a child makes you see things differently than normal. The simple geometric shapes of the municipal play equipment have an influence on me because of the focus on functionality rather than conceptual design. Unexpected beauty inspires me above all else.</p></div>
		<br>
		<div class="galleries_desc"><p class="desc_small">Shown in: Oxidized Maple , lacquered steel, polished gold plated steel</div></p>
		<br>
		<div class="galleries_desc"><p class="desc_small">Availible in:  White oak, reclaimed oak, walnut, ash, most domestic hardwoods. (Other species may be available upon request) - Custom lacquer colors and metal plating available</div></p>
		<br>
	</div> <!-- gallery_title_wrap -->
	<div class="gallery_purchase">
		<a href="http://evanzcrane.tictail.com/product/ball-nose-coffee-table" rel="link to purchase Ball Nose Coffee Table Table online">
			<p class="purchase_title">Purchase Now</p>
		</a> 
	</div><!-- gallery_purchase -->
</div> <!-- gallery_info_wrap -->

<div class="gallery_wrap">
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/ball-nose-coffee-table/ball-nose-coffee-table_01_lg.jpg" title="Ball Nose Coffee Table"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/ball-nose-coffee-table/ball-nose-coffee-table_01.jpg" alt="Ball Nose Coffee Table"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/ball-nose-coffee-table/ball-nose-coffee-table_02_lg.jpg" title="Ball Nose Coffee Table"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/ball-nose-coffee-table/ball-nose-coffee-table_02.jpg" alt="Ball Nose Coffee Table"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/ball-nose-coffee-table/ball-nose-coffee-table_03_lg.jpg" title="Ball Nose Coffee Table"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/ball-nose-coffee-table/ball-nose-coffee-table_03.jpg" alt="Ball Nose Coffee Table"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/ball-nose-coffee-table/ball-nose-coffee-table_04_lg.jpg" title="Ball Nose Coffee Table"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/ball-nose-coffee-table/ball-nose-coffee-table_04.jpg" alt="Ball Nose Coffee Table"></a>
</div>

<div class="gallery_text">
	<p>All furniture available in White Oak, Reclaimed Oak, Sapele, Walnut, Ash, and most other domestic hardwoods.</p>
	<p>Multiple wood finishes, lacquer colors, and upholstery options.</p>
	<p>Exterior versions available.</p>
	<p>Please <a title="contact link" href="http://evanzcrane.com/contact">contact</a> or pricing.</p>
</div>

<?php endwhile; ?>
<?php get_footer(); ?>