<?php
/**
 * Template Name: Media
 * The template for displaying the media page in Nova
 * See design specs for details
 *
 * @package WildfireGames
 * @subpackage Nova
 * @since Nova 0.3
 */
?>
<?php get_header(); ?>
		<div id="primary">
			<div id="content" role="main">
				<div id="media-slider">
					<p>Slider goes here</p>
				</div><!-- #media-slider -->
				<div id="media-wall">
					<a href="#" class="media-block">
					</a>
					<a href="#" class="media-block">
					</a>
					<a href="#" class="media-block">
					</a>
					<a href="#" class="media-block">
					</a>
					<a href="#" class="media-block">
					</a>
					<a href="#" class="media-block">
					</a>
				</div><!-- #media-wall -->
			</div><!-- #content -->
		</div><!-- #primary -->
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div>
<?php get_footer(); ?>