<?php
/*
Template Name: colum footed bench
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="gallery_title_wrap clearfix">
	<div class="g_title_desc"><?php the_content(); ?></div>
</div>
<div class="gallery_wrap clearfix">
	<div class="gallery_list"><a href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/colum-footed-bench/colum_footed_bench_01_lg.jpg" title="Colum Footed Bench"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/colum-footed-bench/colum_footed_bench_01.jpg" alt="Colum Footed Bench"></a>
	</div>
	<div class="gallery_list"><a href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/colum-footed-bench/colum_footed_bench_02_lg.jpg" title="Colum Footed Bench"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/colum-footed-bench/colum_footed_bench_02.jpg" alt="Colum Footed Bench"></a>
	</div>
	<div class="gallery_list"><a href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/colum-footed-bench/colum_footed_bench_03_lg.jpg" title="Colum Footed Bench"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/colum-footed-bench/colum_footed_bench_03.jpg" alt="Colum Footed Bench"></a>
	</div>
</div>

<?php endwhile; ?>


<?php get_footer(); ?>