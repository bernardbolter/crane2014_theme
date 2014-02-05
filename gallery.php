<?php
/*
Template Name: gallery
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="gallery_wrap clearfix">
	<div class="gallery_main_inner"><a href="<?php bloginfo( 'url' ); ?>/bench" title="BENCH"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/bench/bench_square.jpg" alt="BENCH" /></a>
	</div>
	<div class="gallery_main_inner"><a href="<?php bloginfo( 'url' ); ?>/curved-back-chair" title="CURVED BACK CHAIR"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/curved-back-chair/curved_back_chair_square.jpg" alt="CURVED BACK CHAIR"></a>
	</div>
	<div class="gallery_main_inner"><a href="<?php bloginfo( 'url' ); ?>/splayed-leg-table" title="SPLAYED LEG TABLE"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/splayed-leg-table/splayed_leg_table_square.jpg" alt="SPLAYED LEG TABLE"></a>
	</div>
	<div class="gallery_main_inner"><a href="<?php bloginfo( 'url' ); ?>/colum-footed-bench" title="COLUM FOOTED BENCH"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/colum-footed-bench/colum_footed_bench_square.jpg" alt="COLUM FOOTED BENCH"></a>
	</div>
	<div class="gallery_main_inner"><a href="<?php bloginfo( 'url' ); ?>/table" title="TABLE"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/table/table_square.jpg" alt="TABLE"></a>
	</div>
	<div class="gallery_main_inner"><a href="<?php bloginfo( 'url' ); ?>/chair" title="CHAIR"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/chair/chair_square.jpg" alt="CHAIR"></a>
</div>

<?php endwhile; ?>


<?php get_footer(); ?>