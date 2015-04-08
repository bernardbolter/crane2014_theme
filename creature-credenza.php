<?php
/*
Template Name: creature credenza
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="gallery_info_wrap">
	<div class="gallery_title_wrap">
		<p class="galleries_title"><?php wp_title("",true); ?></p>
		<div class="galleries_desc"><p>This piece had lingered on the edge of my mind for quite some time. Honestly, I dared not speak of it or even draw a sketch for fear that I would loose its vague impression. I suppose the little things, simple sensory experiences can bring an idea together. I came across some amazing Icelandic sheep hide and it all clicked. The doors of the credenza are adorned with them. The challenge of this piece was getting many contrasting elements to work as one. The darkly stained solid walnut case and oxidized maple drawer fronts set up a gradation that finishes off with the stark white sheep hide. Finally, a custom textile from  De Islas, their  "duck pond" fabric is stretched over the interior of the doors like a canvas. It adds the quintessential playful element that makes this cabinet an exquisite creature.</p></div>
		<br>
		<div class="galleries_desc"><p class="desc_small">Shown in: Walnut, oxidized Maple and Icelandic sheep hide</div></p>
		<br>
		<div class="galleries_desc"><p class="desc_small">Available in: White oak, reclaimed oak, maple, ash, custom hides, (Other species may be available upon request) - Custom Door options: alternate hide color, leather fronts, Basic Lacquered (No Hide/fabric)</p></div>
	</div> <!-- gallery_title_wrap -->
	<div class="gallery_purchase">
		<a href="http://evanzcrane.tictail.com/product/creture-credenza" rel="link to purchase Creature Credenza online">
			<p class="purchase_title">Purchase Now</p>
		</a> 
	</div><!-- gallery_purchase -->
</div> <!-- gallery_info_wrap -->

<div class="gallery_wrap">
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/creature-credenza/creature-credenza_01_lg.jpg" title="Creature Credenza"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/creature-credenza/creature-credenza_01.jpg" alt="Creature Credenza"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/creature-credenza/creature-credenza_02_lg.jpg" title="Creature Credenza"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/creature-credenza/creature-credenza_02.jpg" alt="Creature Credenza"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/creature-credenza/creature-credenza_03_lg.jpg" title="Creature Credenza"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/creature-credenza/creature-credenza_03.jpg" alt="Creature Credenza"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/creature-credenza/creature-credenza_04_lg.jpg" title="Creature Credenza"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/creature-credenza/creature-credenza_04.jpg" alt="Creature Credenza"></a>
</div>

<div class="gallery_text">
	<p>All furniture available in White Oak, Reclaimed Oak, Sapele, Walnut, Ash, and most other domestic hardwoods.</p>
	<p>Multiple wood finishes, lacquer colors, and upholstery options.</p>
	<p>Exterior versions available.</p>
	<p>Please <a title="contact link" href="http://evanzcrane.com/contact">contact</a> or pricing.</p>
</div>

<?php endwhile; ?>


<?php get_footer(); ?>