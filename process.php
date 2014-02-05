<?php
/*
Template Name: process
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="instaFollow"><a href="http://instagram.com/evanzcrane#" target="_blank">follow on</a></div>

<div id="gallery">
</div>
	
<?php the_content(); ?>

<?php endwhile; ?>


<?php get_footer(); ?>