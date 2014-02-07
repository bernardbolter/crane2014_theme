<?php
/*
Template Name: six legs bench
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="gallery_title_wrap">
	<p class="galleries_title"><?php wp_title("",true); ?></p>
	<div class="galleries_desc"><?php the_content(); ?></div>
</div>

<div class="gallery_wrap">
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/six-legs-bench/six-legs-bench_01_lg.jpg" title="Six Legs Bench"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/six-legs-bench/six-legs-bench_01.jpg" alt="Six Legs Bench"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/six-legs-bench/six-legs-bench_02_lg.jpg" title="Six Legs Bench"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/six-legs-bench/six-legs-bench_02.jpg" alt="Six Legs Bench"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/six-legs-bench/six-legs-bench_03_lg.jpg" title="Six Legs Bench"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/six-legs-bench/six-legs-bench_03.jpg" alt="Six Legs Bench"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/six-legs-bench/six-legs-bench_04_lg.jpg" title="Six Legs Bench"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/six-legs-bench/six-legs-bench_04.jpg" alt="Six Legs Bench"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/six-legs-bench/six-legs-bench_05_lg.jpg" title="Six Legs Bench"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/six-legs-bench/six-legs-bench_05.jpg" alt="Six Legs Bench"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/six-legs-bench/six-legs-bench_06_lg.jpg" title="Six Legs Bench"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/six-legs-bench/six-legs-bench_06.jpg" alt="Six Legs Bench"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/six-legs-bench/six-legs-bench_07_lg.jpg" title="Six Legs Bench"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/six-legs-bench/six-legs-bench_07.jpg" alt="Six Legs Bench"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/six-legs-bench/six-legs-bench_08_lg.jpg" title="Six Legs Bench"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/six-legs-bench/six-legs-bench_08.jpg" alt="Six Legs Bench"></a>
</div>

<div class="gallery_text">
	<p>All furniture available in White Oak, Reclaimed Oak, Sapele, Walnut, Ash, and most other domestic hardwoods.</p>
	<p>Multiple wood finishes, lacquer colors, and upholstery options.</p>
	<p>Exterior versions available.</p>
	<p>Please <a title="contact link" href="http://evanzcrane.com/contact">contact</a> or pricing.</p>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>