<?php
/*
Template Name: gallery
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="gallery_wrap">
	<div class="gallery_image">
		<a href="<?php bloginfo( 'url' ); ?>/creature-credenza" title="CREATURE CREDENZA"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/creature-credenza/creature-credenza_square.jpg" alt="CREATURE CREDENZA" /></a>
		<p class="gallery_text"><?php echo get_the_title(); ?>
	</div>
	<a href="<?php bloginfo( 'url' ); ?>/fuzzy-captain" title="THE FUZZY CAPTAIN"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/fuzzy-captain/fuzzy-captain_square.jpg" alt="THE FUZZY CAPTAIN" /></a>
	<a href="<?php bloginfo( 'url' ); ?>/ball-nose-coffee-table" title="BALL NOSE COFFEE TABLE"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/ball-nose-coffee-table/ball-nose-coffee-table_square.jpg" alt="BALL NOSE COFFEE TABLE" /></a>
	<a href="<?php bloginfo( 'url' ); ?>/big-smile-chair" title="BIG SMILE CHAIR"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/big-smile-chair/big-smile-chair_square.jpg" alt="BIG SMILE CHAIR" /></a>
	<a href="<?php bloginfo( 'url' ); ?>/six-legs-bench" title="SIX LEGS BENCH"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/six-legs-bench/six-legs-bench_square.jpg" alt="SIX LEGS BENCH" /></a>
	<a href="<?php bloginfo( 'url' ); ?>/captains-chair" title="CAPTAIN'S CHAIR"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/captains-chair/captains-chair_square.jpg" alt="CAPTAIN'S CHAIR"></a>
	<a href="<?php bloginfo( 'url' ); ?>/splayed-star-table" title="SPLAYED STAR TABLE"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/splayed-star-table/splayed-star-table_square.jpg" alt="SPLAYED STAR TABLE"></a>
	<a href="<?php bloginfo( 'url' ); ?>/column-bench" title="COLUMN BENCH"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/column-bench/column-bench_square.jpg" alt="COLUMN BENCH"></a>
	<a href="<?php bloginfo( 'url' ); ?>/column-table" title="COLUMN TABLE"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/column-table/column-table_square.jpg" alt="COLUMN TABLE"></a>
	<a href="<?php bloginfo( 'url' ); ?>/high-back-chair" title="HIGH BACK CHAIR"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/high-back-chair/high-back-chair_square.jpg" alt="HIGH BACK CHAIR"></a>
</div>

<?php endwhile; ?>
<?php get_footer(); ?>