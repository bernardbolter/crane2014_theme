<?php
/*
Template Name: instagram
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="instaFollow">
	<a href="http://instagram.com/evanzcrane#" target="_blank">follow on</a>
</div>
<div class="layout">
	<div id="instafeed">
	</div>
</div>
	
<?php the_content(); ?>

<?php endwhile; ?>


<?php get_footer(); ?>