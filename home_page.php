<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="clearfix">
<div class="homepage_left">
	<?php the_content(); ?>
</div>

<div class="homepage_right">

<a href="<?php bloginfo( 'url' ); ?>/bench">
<p class="home_image_text">BENCH . 2013</p>
<div class="home_image_hr"></div>
<img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/bench/bench_square_lg.jpg" />
</a>

</div>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>