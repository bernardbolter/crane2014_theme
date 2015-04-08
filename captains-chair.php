<?php
/*
Template Name: captains chair
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="gallery_info_wrap">
	<div class="gallery_title_wrap">
		<p class="galleries_title"><?php wp_title("",true); ?></p>
		<div class="galleries_desc"><p>The Captain’s Chair is a lounger made of wood, lacquered steel, and upholstered cushions. It is a piece that is meant to be first and foremost comfortable, but also engaging and playful. It is manufactured with diligence and care, with the intention of being an heirloom piece. I believe that longevity is the best way to practice sustainability. The overall design of the Captain’s Chair is fixed, everything else can be tailored to the client’s desires. The wood species, finish, lacquer color, and upholstery are all customizable. Outdoor versions are also available.</p></div>
		<br>
		<div class="galleries_desc"><p class="desc_small">seat height: 18″ | back height: 36″ | front arm width: 34″</div></p>
		<br>
		<div class="galleries_desc"><p class="desc_small">Shown in natural oak, white lacquered steel, monster print and Reclaimed Chestnut, Black leather, and Shearling</p></div>
	</div> <!-- gallery_title_wrap -->
	<div class="gallery_purchase">
		<a href="http://evanzcrane.tictail.com/product/captains-chair" rel="link to purchase Captains Chair online">
			<p class="purchase_title">Purchase Now</p>
		</a> 
	</div><!-- gallery_purchase -->
</div> <!-- gallery_info_wrap -->

<div class="gallery_wrap">
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/captains-chair/captains-chair_05_lg.jpg" title="Captain's Chair"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/captains-chair/captains-chair_05.jpg" alt="Captain's Chair"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/captains-chair/captains-chair_06_lg.jpg" title="Captain's Chair"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/captains-chair/captains-chair_06.jpg" alt="Captain's Chair"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/captains-chair/captains-chair_07_lg.jpg" title="Captain's Chair"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/captains-chair/captains-chair_07.jpg" alt="Captain's Chair"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/captains-chair/captains-chair_08_lg.jpg" title="Captain's Chair"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/captains-chair/captains-chair_08.jpg" alt="Captain's Chair"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/captains-chair/captains-chair_01_lg.jpg" title="Captain's Chair"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/captains-chair/captains-chair_01.jpg" alt="Captain's Chair"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/captains-chair/captains-chair_02_lg.jpg" title="Captain's Chair"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/captains-chair/captains-chair_02.jpg" alt="Captain's Chair"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/captains-chair/captains-chair_03_lg.jpg" title="Captain's Chair"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/captains-chair/captains-chair_03.jpg" alt="Captain's Chair"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/captains-chair/captains-chair_04_lg.jpg" title="Captain's Chair"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/captains-chair/captains-chair_04.jpg" alt="Captain's Chair"></a>
</div>

<div class="gallery_text">
	<p>All furniture available in White Oak, Reclaimed Oak, Sapele, Walnut, Ash, and most other domestic hardwoods.</p>
	<p>Multiple wood finishes, lacquer colors, and upholstery options.</p>
	<p>Exterior versions available.</p>
	<p>Please <a title="contact link" href="http://evanzcrane.com/contact">contact</a> or pricing.</p>
</div>

<?php endwhile; ?>
<?php get_footer(); ?>