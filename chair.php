<?php
/*
Template Name: chair
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="gallery_title_wrap clearfix">
	<div class="g_title_desc"><?php the_content(); ?></div>
</div>
<div class="gallery_wrap clearfix">
	<div class="gallery_list"><a href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/chair/chair_01_lg.jpg" title="chair 1"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/chair/chair_01.jpg" alt="bench one"></a>
	</div>
	<div class="gallery_list"><a href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/chair/chair_02_lg.jpg" title="chair 2"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/chair/chair_02.jpg" alt="bench one"></a>
	</div>
	<div class="gallery_list"><a href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/chair/chair_03_lg.jpg" title="CHAIR 3 "><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/chair/chair_03.jpg" alt="bench one"></a>
	</div>
</div>

<?php endwhile; ?>
<?php get_footer(); ?>