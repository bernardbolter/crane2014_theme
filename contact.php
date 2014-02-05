<?php
/*
Template Name: contact
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="gallery_header">
	
</div>
<div class="contact_title_wrap clearfix">
	<p class="contact_head">CONTACT</p>
	<div class="contact_desc"><?php the_content(); ?></div>
</div>
<div class="contact_map">
<a href="http://goo.gl/maps/wgqdh" class="google_map" target="_blank">
	<img src="http://maps.google.com/maps/api/staticmap?size=640x640&zoom=14&maptype=roadmap&markers=color:red|63+Flushing+Ave+Brooklyn+N.Y.+11205&sensor=false" alt="Brooklyn Navy Yard Map" />
</a>
</div>

<?php endwhile; ?>


<?php get_footer(); ?>