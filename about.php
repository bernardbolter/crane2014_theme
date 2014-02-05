<?php
/*
Template Name: about
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="gallery_header">
	
</div>
<div class="about_title_wrap clearfix">
	<p class="about_head">ABOUT</p>
	<div class="about_desc"><?php the_content(); ?></div>
</div>

<?php endwhile; ?>


<?php get_footer(); ?>