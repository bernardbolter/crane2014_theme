<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="homepage_wrap">
	<section class="layout">
		<div class="homepage_left">
			<?php the_content(); ?>
		</div> <!-- homepage left -->

		<div class="homepage_right">
			<a href="<?php bloginfo( 'url' ); ?>/six-legs-bench">
				<p class="home_image_text">SIX LEGS BENCH</p>
				<div class="home_image_hr"></div>
				<img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/six-legs-bench/bench_square_lg.jpg" />
			</a>
		</div> <!-- homepage right -->
	</section> <!-- layout -->
</div> <! --homepage wrap -->

<?php endwhile; ?>

<?php get_footer(); ?>