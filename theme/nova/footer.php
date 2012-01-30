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
			<div id="first" class="widget-area" role="complementary">
				<h2>The Game</h2>
				<?php wp_nav_menu( array('menu' => 'Game', 'container' => '' , 'menu_class' => 'Game', 'menu_id' =>'' )); ?>
			</div>
			<div id="second" class="widget-area" role="complementary">
				<h2>News</h2>
				<?php wp_nav_menu( array('menu' => 'News', 'container' => '' , 'menu_class' => 'News', 'menu_id' =>'' )); ?>
			</div>
			<div id="third" class="widget-area" role="complementary">
				<h2>Media</h2>
				<?php wp_nav_menu( array('menu' => 'Media', 'container' => '' , 'menu_class' => 'Media', 'menu_id' =>'' )); ?>
			</div>
			<div id="fourth" class="widget-area" role="complementary">
				<h2>Community</h2>
				<?php wp_nav_menu( array('menu' => 'Community', 'container' => '' , 'menu_class' => 'Community', 'menu_id' =>'' )); ?>
			</div>
			<div id="fifth" class="widget-area" role="complementary">
			<h2>Connect With Us</h2>
			<a href="http://www.tigrs.org/rating.php?data=20003200000000"><img src="http://f.cl.ly/items/1V1q3H022K0T201Y0h19/rating.png"/></a>
			</div>
		</div>
		<div id="site-generator">
			<?php do_action( 'twentyeleven_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wildfiregames.com', 'twentyeleven' ) ); ?>" rel="generator"><?php printf( __( '&copy; 2012 Wildfire Games | CC-BY-SA ', 'twentyeleven' ) ); ?></a>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>

