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

				<aside id="archives" class="widget">
					<h3 class="widget-title"><?php _e( 'Archives', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside class="widget widget_rss" id="rss-2">
					<h3 class="widget-title">
						<a title="Syndicate this content" href="http://svn.wildfiregames.com/log.atom" class="rsswidget">
							<img width="14" height="14" alt="RSS" src="http://www.wildfiregames.com/0adwebdev/theme-dev/wp-includes/images/rss.png" style="border:0">
						</a>
						<a title="" href="http://www.wildfiregames.com/0ad/" class="rsswidget">Revision Log</a>
					</h3>
				</aside>

			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>