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
			<div id="donate">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</div>
			<div id="sitemap">
				<?php dynamic_sidebar( 'footer-2' ); ?>
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