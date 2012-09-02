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
			<div id="sitemap">
				<h2 class="footer-title">Site Map</h2>
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			</div>
			<div id="about-box">
				<h2 class="footer-title">Get Connected</h2>
				<?php dynamic_sidebar( 'sidebar-4' ); ?>
			</div>
		</div>
		<div id="credits-bar">
			<nav id="credits">
				<?php wp_nav_menu( array('theme_location' => 'footer')); ?>
			</nav>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
<script>
	var _gaq=[['_setAccount','UA-33895773-1'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>