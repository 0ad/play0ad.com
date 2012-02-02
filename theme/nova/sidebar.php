<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WildfireGames
 * @subpackage Nova
 * @since Nova 0.2
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<aside id="download" class="widget">
					<p>Download Button</p>
				</aside>
				
				<aside id="share" class="widget">
					<p>Share Button</p>
				</aside>
				
				<aside id="donate" class="widget">
					<p>Donate Section</p>
				</aside>

			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>