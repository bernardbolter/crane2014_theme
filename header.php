<!DOCTYPE html>
<!--[if lt IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<title>EVAN Z. CRANE | modern heirloom furniture</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="icon" type="image/png" href="<?php bloginfo( 'url' ); ?>/favicon.png">

	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700'>
	<link href='http://fonts.googleapis.com/css?family=GFS+Didot'>
	
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
 
	<div class="main_container">
			<header id="header">
				<p class="name"><a href="<?php bloginfo( 'url' ); ?>" alt="Evan Z Crane">Evan Z. Crane</a></p>
				
				<div class="line"></div>
					<p class="title_tagline">modern heirloom furniture</p>
				<div class="tagline_line"></div>
			</header>

			<nav id="menu" role="navigation" class="nav_wrap">
				<div id="mobile_menu">menu<img src="<?php bloginfo( 'template_url' ); ?>/gfx/arrow.jpg" alt="arrow" /></div>
				<ul class="nav">
					<li class="mobile_about" <?php global $post; if ( is_page( 31 )) { echo "style='text-decoration: underline'"; } ?>><a href="<?php bloginfo( 'url' ); ?>/about" alt="about">about</a></li>
					<li class="mobile_gallery" <?php global $post; if ( is_page( array( 20, 24, 27, 29, 64, 62, 66, 88 ) )) { echo "style='text-decoration: underline'"; } ?>><a href="<?php bloginfo( 'url' ); ?>/gallery" alt="gallery">gallery</a></li>
					<li class="mobile_instagram" <?php global $post; if ( is_page( array( 46, 50 ) )) { echo "style='text-decoration: underline'"; } ?>><a href="<?php bloginfo( 'url' ); ?>/instagram" alt="instagram">instagram</a></li>
					<li class="mobile_press" <?php global $post; if ( is_page( array( 20 ) )) { echo "style='text-decoration: underline'"; } ?>><a href="<?php bloginfo( 'url' ); ?>/press" alt="gallery">press</a></li>
					<li class="mobile_contact" <?php global $post; if ( is_page( 12 )) { echo "style='text-decoration: underline'"; } ?>><a href="<?php bloginfo( 'url' ); ?>/contact" alt="contact">contact</a></li>
					<li class="mobile_contact"><a href="http://evanzcrane.tictail.com/" alt="contact">store</a></li>
				</ul>
			</nav>