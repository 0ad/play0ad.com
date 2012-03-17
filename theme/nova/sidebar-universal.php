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
					<h3 class="widget-title">Support WFG</h3>
					<div class="textwidget">
						<p>Help pay for an additional month of full time work  by one of the developers on 0 A.D.</p>
						<a class="pledgieBadge" href='http://www.pledgie.com/campaigns/16218'><img alt='Click here to lend your support to: 0 A.D. "Sponsor a Developer" Donation Campaign - Round 2 and make a donation at www.pledgie.com !' src='http://www.pledgie.com/campaigns/16218.png?skin_name=chrome' border='0' /></a>
						<form class="payPalBadge" action="https://www.paypal.com/cgi-bin/webscr" method="post"><input type="hidden" name="cmd" value="_s-xclick"><input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but05.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!"><input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
						</form>
					</div>
				</aside>
				
				<aside id="community" class="widget">
					<h2>Community</h2>
				</aside>
				
				<aside id="video" class="widget">
					<p>Developers Area</p>
				</aside>
				
				<aside id="devarea" class="widget">
					<p>Developers Area</p>
				</aside>

			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>