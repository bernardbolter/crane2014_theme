<footer id="footer" role="contentinfo" class="footer_wrap">
	<?php $footer_query = new WP_Query(array( 'page_id' => 172));
		while ($footer_query->have_posts()) : $footer_query->the_post(); ?>

	<?php the_content(); ?>

	<?php endwhile; ?>

</footer>
</div>
<?php wp_footer(); ?>

<!-- Load jQuery from Google CDN -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Load jQuery from a local copy if loading from Google fails -->
<script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="wp-content/themes/crane2014_theme/_/js/jquery/jquery.min.js"><\/script>')</script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/scripts.js"></script>
</body>
</html>