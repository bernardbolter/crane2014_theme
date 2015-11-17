<?php
/*
Template Name: contact
*/
?>

<?php get_header(); ?>

<div class="gallery_header">
	
</div>
<div class="contact_title_wrap">
	<div class="contact_desc">
		<p><?php echo get_post_meta($post->ID, 'contact_info_line_1', true) ?></p>
		<p><?php echo get_post_meta($post->ID, 'contact_info_line_2', true) ?></p>
		<p><?php echo get_post_meta($post->ID, 'contact_info_line_3', true) ?></p>
		<p><?php echo get_post_meta($post->ID, 'contact_info_line_4', true) ?></p>
	</div>
	<div class="contact_purchase">
		<a href="http://evanzcrane.tictail.com/" rel="link to Online Store">
			<p class="purchase_title">Visit Our Online Store</p>
		</a> 
	</div><!-- contact_purchase -->
</div>



<div class="contact_map">
<a href="http://goo.gl/maps/fyMR4" class="google_map" target="_blank">
	<img src="http://maps.google.com/maps/api/staticmap?size=640x640&zoom=14&maptype=roadmap&markers=color:red|The+Brooklyn+Navy+Yard+,+63+Flushing+Ave.+,+Brooklyn+N.Y.+11205&sensor=false" alt="Brooklyn Navy Yard Map" />
</a>
</div>

<?php get_footer(); ?>