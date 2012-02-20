<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WildfireGames
 * @subpackage Nova
 * @since Nova 0.2
    Twitter Feed
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
								
				<aside id="donate" class="widget">
					<p>Support WFG</p>
				</aside>
				
				<aside id="share">
				<p>Big Share button that opens dialog box upon click.</p>
				</aside>
				
				<aside id="devblog" class="widget">
					<h2>Development Blog Feed</h2>
				</aside>
								
				<aside id="tweet" class="widget">
					<p>Twitter Feed will go here.</p>
				</aside>


			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>