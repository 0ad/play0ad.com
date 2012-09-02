<?php
/**
* The header placed on every page.
*
* @package WildfireGames
* @subpackage Nova
* @since Nova 0.2
*/
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html dir="ltr" lang="en-US" class="no-js ie ie6 lte7 lte8 lte9" <?php language_attributes(); ?>>><![endif]-->
<!--[if IE 7 ]><html dir="ltr" lang="en-US" class="no-js ie ie7 lte7 lte8 lte9" <?php language_attributes(); ?>>><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en-US" class="no-js ie ie8 lte8 lte9" <?php language_attributes(); ?>>><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en-US" class="no-js ie ie9 lte9" <?php language_attributes(); ?>>><![endif]-->
<!--[if (gt IE 9)|!(IE)]><html dir="ltr" lang="en-US" class="no-js"><![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true">
	<meta http-equiv="imagetoolbar" content="false">
	<meta name="viewport" content="width=device-width" />
	<title><?php bloginfo('name'); ?> | A free, open-source game of ancient warfare</title>
	<link rel="author" href="/humans.txt">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="dns-prefetch" href="s.ytimg.com">
	<link rel="dns-prefetch" href="ajax.googleapis.com">
	<script src="<?php bloginfo( 'template_url' ); ?>/js/modernizr.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!--[if lt IE 8]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
<noscript><div id="nojs">Please enable JavaScript to view this page properly.</div></noscript>
<div id="page" class="hfeed">
	<div id="global-bar">
		<nav id="global" role="navigation">
			<?php wp_nav_menu( array('theme_location' => 'global')); ?>
		</nav>
	</div>
	<header id="branding" role="banner">
		<hgroup>
			<div id="logo"></div>
			<div id="site-description">A free, open-source game of ancient warfare</div>
			<div id="wfg-logo"></div>
			<a href="<?php echo site_url('/download'); ?>">
				<div id="download-button">
					<div id="download-title">Download</div>
					<div id="download-description"><?php bloginfo('description'); ?></div>
				</div><!-- Download Button -->
			</a><!-- DOWNLOAD ANCHOR -->
		</hgroup>
       	<div id="navbar">
       		<nav id="home-btn" role="navigation">
       			<?php wp_nav_menu( array('theme_location' => 'home')); ?>
       		</nav>
       		<nav id="access" role="navigation">
       			<?php wp_nav_menu( array('theme_location' => 'primary')); ?>
       		</nav><!-- #access --> 
       	</div>				
	</header><!-- #branding -->
	<div id="main">