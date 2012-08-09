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
		<div id="supplementary">
			<?php dynamic_sidebar( 'sidebar-3' ); ?>
		</div>
		<div id="site-generator">
			<?php do_action( 'nova_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wildfiregames.com', 'nova' ) ); ?>" rel="generator"><?php printf( __( '&copy; 2012 Wildfire Games | CC-BY-SA ', 'nova' ) ); ?></a>
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