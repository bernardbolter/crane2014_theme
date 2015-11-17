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
			<?php $home_args=array( // grab random gallery post and puts link under purchase button
					    'post_type'=>'galleries', 
					    'orderby'=>'rand', 
					    'posts_per_page'=>'1'
					);
					$home_posts = new WP_Query($home_args);
					while ($home_posts->have_posts()) : $home_posts->the_post();

					$home_image_id = get_field('square_image');
					$square_image = 'gallery-image-featured';
					$home_image = $home_image_id['sizes'][$square_image];
				?>

				<a href="<?php the_permalink() ?>">
					<p class="home_image_text"><?php echo get_the_title(); ?></p>
					<div class="home_image_hr"></div>
					<img src="<?php echo $home_image; ?>" alt="<?php echo get_the_title(); ?>" />
				</a>

			<?php endwhile; wp_reset_query(); ?>

		</div> <!-- homepage right -->
	</section> <!-- layout -->
</div> <! --homepage wrap -->

<?php endwhile; ?>

<?php get_footer(); ?>