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
								
				<aside id="donate" class="widget">
					<p>Support WFG</p>
				</aside>
				
				<aside id="community" class="widget">
				<p>Community Updates go here.</p>
				</aside>

				<aside id="video" class="widget">
					<p>Embed featured video here</p>
				</aside>				
				
				<aside id="revlog" class="widget">
					<h2><?php _e('Revision Log'); ?></h2>
					<?php // Get RSS Feed(s)
					include_once(ABSPATH . WPINC . '/feed.php');

					$rss = fetch_feed('http://svn.wildfiregames.com/log.atom');
					if (!is_wp_error( $rss ) ) : // Checks that the object is created correctly 
   					$maxitems = $rss->get_item_quantity(3); 
   					
    				$rss_items = $rss->get_items(0, $maxitems); 
					endif;
					?>

					<ul>
    					<?php if ($maxitems == 0) echo '<li>No items.</li>';
    					else
    					// Loop through each feed item and display each item as a hyperlink.
    					foreach ( $rss_items as $item ) : ?>
    					<li>
        					<a href='<?php echo esc_url( $item->get_permalink() ); ?>'
        					title='<?php echo 'Updated '.$item->get_date('j F Y | g:i a'); ?>'>
        					<?php echo esc_html( $item->get_title() ); ?></a>
    					</li>
    					<?php endforeach; ?>
					</ul>
				</aside>
				
				<aside id="devarea" class="widget">
					<p>Developers Area</p>
				</aside>

			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>