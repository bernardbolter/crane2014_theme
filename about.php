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
			<div class="about_desc"><?php the_content(); ?></div>
		</div>
		<div class="about_right">
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
			<img src="<?php echo $image[0]; ?> " alt="Evan Z Crane" />
		</div>
	</section>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>