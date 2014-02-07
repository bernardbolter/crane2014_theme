<?php
/*
Template Name: captains chair
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="gallery_title_wrap">
	<p class="galleries_title"><?php wp_title("",true); ?></p>
	<div class="galleries_desc"><?php the_content(); ?></div>
</div>

<div class="gallery_wrap">
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