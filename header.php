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
				<ul class="nav">
					<li class="mobile_left"><a <?php global $post; if ( is_page( 31 )) { echo 'class="nav_focused"'; } ?> href="<?php bloginfo( 'url' ); ?>/about" alt="about">about</a></li>
					<li class="mobile_right"><a <?php global $post; if ( is_page( 29 ) || is_singular( 'galleries' )) { echo 'class="nav_focused"'; } ?> href="<?php bloginfo( 'url' ); ?>/gallery" alt="gallery">gallery</a></li>
					<li class="mobile_left"><a <?php global $post; if ( is_page( 122 )) { echo 'class="nav_focused"'; } ?> href="<?php bloginfo( 'url' ); ?>/instagram" alt="instagram">instagram</a></li>
					<li class="mobile_right"><a <?php global $post; if ( is_page( 109 )) { echo 'class="nav_focused"'; } ?> href="<?php bloginfo( 'url' ); ?>/press" alt="press">press</a></li>
					<li class="mobile_left"><a <?php global $post; if ( is_page( 12 )) { echo 'class="nav_focused"'; } ?> href="<?php bloginfo( 'url' ); ?>/contact" alt="contact">contact</a></li>
					<li class="mobile_right"><a href="http://evanzcrane.tictail.com/" alt="store">store</a></li>
				</ul>
			</nav>