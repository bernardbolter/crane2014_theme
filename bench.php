<?php
/*
Template Name: bench
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="gallery_title_wrap clearfix">
	<div class="g_title_desc"><?php the_content(); ?></div>
</div>
<div class="gallery_wrap clearfix">
	<div class="gallery_list"><a href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/bench/bench_01_lg.jpg" title="bench 1"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/bench/bench_01.jpg" alt="bench 1"></a>
	</div>
	<div class="gallery_list"><a href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/bench/bench_02_lg.jpg" title="bench 2"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/bench/bench_02.jpg" alt="bench 2"></a>
	</div>
	<div class="gallery_list"><a href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/bench/bench_03_lg.jpg" title="bench 3"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/bench/bench_03.jpg" alt="bench 3"></a>
	</div>
	<div class="gallery_list"><a href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/bench/bench_04_lg.jpg" title="bench 4"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/bench/bench_04.jpg" alt="bench 4"></a>
	</div>
	<div class="gallery_list"><a href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/bench/bench_05_lg.jpg" title="bench 5"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/bench/bench_05.jpg" alt="bench 5"></a>
	</div>
	<div class="gallery_list"><a href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/bench/bench_06_lg.jpg" title="bench 6"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/bench/bench_06.jpg" alt="bench 6"></a>
	</div>
	<div class="gallery_list"><a href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/bench/bench_07_lg.jpg" title="bench 7"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/bench/bench_07.jpg" alt="bench 7"></a>
	</div>
	<div class="gallery_list"><a href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/bench/bench_08_lg.jpg" title="bench 8"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/bench/bench_08.jpg" alt="bench 8"></a>
	</div>
</div>

<?php endwhile; ?>


<?php get_footer(); ?>