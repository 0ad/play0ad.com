<?php
/**
* The header placed on every page.
*
* @package WildfireGames
* @subpackage Nova
* @since Nova 0.2
*/
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php bloginfo('name'); ?> | A free, open-source game of ancient warfare</title>
	<link rel="author" href="/humans.txt">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link href='http://fonts.googleapis.com/css?family=Gentium+Basic:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<?php
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
	wp_head();
	?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">

	<header id="branding" role="banner">
			<div id="global-bar">
				<nav id="global" role="navigation">
					<?php wp_nav_menu( array('menu' => 'GLOBAL', 'container' => '' , 'menu_class' => 'GLOBAL', 'menu_id' =>'' )); ?>
				</nav>
			</div>
			
			<hgroup>
				<div id="logo"></div>
				<div id="site-description">A free, open-source game of ancient warfare</div>
				<div id="wfg-logo"></div>
				<a href="download"> 
					<div id="download-button">
						<div id="download-title">Download</div>
						<div id="download-description"><?php bloginfo('description'); ?></div>
					</div><!-- Download Button -->
				</a><!-- DOWNLOAD ANCHOR -->
			</hgroup>
                         
			<nav id="access" role="navigation">
				<h3 class="assistive-text"><?php _e( 'Main menu', 'nova' ); ?></h3>
				<?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
				<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'nova' ); ?>"><?php _e( 'Skip to primary content', 'nova' ); ?></a></div>
				<div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'nova' ); ?>"><?php _e( 'Skip to secondary content', 'nova' ); ?></a></div>
				<?php wp_nav_menu( array( 'menu' => 'MAIN' ) ); ?>
			</nav><!-- #access -->
	</header><!-- #branding -->


	<div id="main">