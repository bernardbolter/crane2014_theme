<?php
/*
Template Name: about
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="about_wrap">
	<section class="layout">
		<div class="about_left">
			<p class="about_head">ABOUT</p>
			<div class="about_desc"><?php the_content(); ?></div>
		</div>
		<div class="about_right">
			<img src="<?php bloginfo( 'template_url' ); ?>/gfx/about.jpg" />
		</div>
	</section>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>