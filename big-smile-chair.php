<?php
/*
Template Name: big smile chair
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="gallery_info_wrap">
	<div class="gallery_title_wrap">
		<p class="galleries_title"><?php wp_title("",true); ?></p>
		<div class="galleries_desc"><p>This piece had its start originally as one of my first chair designs, made  in my twenties. I always felt like I had unfinished business with the piece. It was a design that almost hit its mark. Above all I strive for personality in my creations, a piece that can survive on its own power. All I do is merely activate it. Named after the seat profile as well as the uncontrolled laughter that I experienced when I first observed the finished upholstery, it was at that moment I knew I had gotten it right enough.</p></div>
		<br>
		<div class="galleries_desc"><p class="desc_small">Shown in: Bleached white oak, lacquered steel, rabbit hide</div></p>
		<br>
		<div class="galleries_desc"><p class="desc_small">Availible in:  White oak, reclaimed oak, walnut, ash, most domestic hardwoods. (Other species may be available upon request) - Custom lacquer colors, animal hides or fabric available</div></p>
		<br>
	</div> <!-- gallery_title_wrap -->
	<div class="gallery_purchase">
		<a href="http://evanzcrane.tictail.com/product/big-smile-chair" rel="link to purchase Big Smile Chair online">
			<p class="purchase_title">Purchase Now</p>
		</a> 
	</div><!-- gallery_purchase -->
</div> <!-- gallery_info_wrap -->

<div class="gallery_wrap">
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/big-smile-chair/big-smile-chair_01_lg.jpg" title="Big Smile Chair"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/big-smile-chair/big-smile-chair_01.jpg" alt="Big Smile Chair"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/big-smile-chair/big-smile-chair_02_lg.jpg" title="Big Smile Chair"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/big-smile-chair/big-smile-chair_02.jpg" alt="Big Smile Chair"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/big-smile-chair/big-smile-chair_03_lg.jpg" title="Big Smile Chair"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/big-smile-chair/big-smile-chair_03.jpg" alt="Big Smile Chair"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/big-smile-chair/big-smile-chair_04_lg.jpg" title="Big Smile Chair"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/big-smile-chair/big-smile-chair_04.jpg" alt="Big Smile Chair"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/big-smile-chair/big-smile-chair_05_lg.jpg" title="Big Smile Chair"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/big-smile-chair/big-smile-chair_05.jpg" alt="Big Smile Chair"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/big-smile-chair/big-smile-chair_06_lg.jpg" title="Big Smile Chair"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/big-smile-chair/big-smile-chair_06.jpg" alt="Big Smile Chair"></a>
</div>

<div class="gallery_text">
	<p>All furniture available in White Oak, Reclaimed Oak, Sapele, Walnut, Ash, and most other domestic hardwoods.</p>
	<p>Multiple wood finishes, lacquer colors, and upholstery options.</p>
	<p>Exterior versions available.</p>
	<p>Please <a title="contact link" href="http://evanzcrane.com/contact">contact</a> or pricing.</p>
</div>

<?php endwhile; ?>
<?php get_footer(); ?>