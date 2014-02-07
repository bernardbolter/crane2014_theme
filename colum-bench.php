<?php
/*
Template Name: column bench
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="gallery_title_wrap">
	<p class="galleries_title"><?php wp_title("",true); ?></p>
	<div class="galleries_desc"><?php the_content(); ?></div>
</div>

<div class="gallery_wrap">
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/column-bench/column-bench_01_lg.jpg" title="Column Bench"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/column-bench/column-bench_01.jpg" alt="Column Bench"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/column-bench/column-bench_02_lg.jpg" title="Column Bench"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/column-bench/column-bench_02.jpg" alt="Column Bench"></a>
	<a class="swipebox" href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/column-bench/column-bench_03_lg.jpg" title="Column Bench"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/column-bench/column-bench_03.jpg" alt="Column Bench"></a>
</div>

<div class="gallery_text">
	<p>All furniture available in White Oak, Reclaimed Oak, Sapele, Walnut, Ash, and most other domestic hardwoods.</p>
	<p>Multiple wood finishes, lacquer colors, and upholstery options.</p>
	<p>Exterior versions available.</p>
	<p>Please <a title="contact link" href="http://evanzcrane.com/contact">contact</a> or pricing.</p>
</div>

<?php endwhile; ?>
<?php get_footer(); ?>