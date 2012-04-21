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
		<div id="supplementary" class="five">
			<?php dynamic_sidebar( 'sidebar-3' ); ?>
		</div>
		<div id="site-generator">
			<?php do_action( 'nova_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wildfiregames.com', 'nova' ) ); ?>" rel="generator"><?php printf( __( '&copy; 2012 Wildfire Games | CC-BY-SA ', 'nova' ) ); ?></a>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>

