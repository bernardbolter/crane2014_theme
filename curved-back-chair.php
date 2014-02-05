<?php
/*
Template Name: curved back chair
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="gallery_title_wrap clearfix">
	<div class="g_title_desc"><?php the_content(); ?></div>
</div>
<div class="gallery_wrap clearfix">
	<div class="gallery_list"><a href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/curved-back-chair/curved_back_chair_01_lg.jpg" title="Curved Back Chair"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/curved-back-chair/curved_back_chair_01.jpg" alt="Curved Back Chair"></a>
	</div>
	<div class="gallery_list"><a href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/curved-back-chair/curved_back_chair_02_lg.jpg" title="Curved Back Chair"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/curved-back-chair/curved_back_chair_02.jpg" alt="Curved Back Chair"></a>
	</div>
	<div class="gallery_list"><a href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/curved-back-chair/curved_back_chair_03_lg.jpg" title="Curved Back Chair"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/curved-back-chair/curved_back_chair_03.jpg" alt="Curved Back Chair"></a>
	</div>
	<div class="gallery_list"><a href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/curved-back-chair/curved_back_chair_04_lg.jpg" title="Curved Back Chair"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/curved-back-chair/curved_back_chair_04.jpg" alt="Curved Back Chair"></a>
	</div>
</div>

<?php endwhile; ?>


<?php get_footer(); ?>