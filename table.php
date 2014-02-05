<?php
/*
Template Name: table
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="gallery_title_wrap clearfix">
	<div class="g_title_desc"><?php the_content(); ?></div>
</div>
<div class="gallery_wrap clearfix">
	<div class="gallery_list"><a href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/table/table_01_lg.jpg" title="bench one"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/table/table_01.jpg" alt="bench one"></a>
	</div>
	<div class="gallery_list"><a href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/table/table_02_lg.jpg" title="bench one"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/table/table_02.jpg" alt="bench one"></a>
	</div>
	<div class="gallery_list"><a href="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/table/table_03_lg.jpg" title="bench one"><img src="<?php bloginfo( 'template_url' ); ?>/gfx/gallery/table/table_03.jpg" alt="bench one"></a>
	</div>
</div>

<?php endwhile; ?>


<?php get_footer(); ?>