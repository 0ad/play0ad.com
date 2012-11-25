<?php
/**
* The footer added on every page.
*
* @package WildfireGames
* @subpackage Nova
* @since Nova 0.2
*/
?>
	</div><!-- #main -->
	<footer id="colophon" role="contentinfo">
		<div id="footer">
			<div id="footer25">
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			</div>
			<div id="footer50">
				<?php dynamic_sidebar( 'sidebar-4' ); ?>
			</div>
			<div id="footer25">
				<?php dynamic_sidebar( 'sidebar-5' ); ?>
			</div>
		</div>
		<div id="footerbar">
			<nav id="footernav">
				<?php wp_nav_menu( array('theme_location' => 'footer')); ?>
			</nav>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>