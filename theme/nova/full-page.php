<?php
/**
 * Template Name: Full Page
 * The template for displaying pages without sidebars.
 *
 * @package WildfireGames
 * @subpackage Nova
 * @since Nova 0.4
 */

get_header(); ?>

		<div id="full">
			<div id="content" role="main">				
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
				<?php endwhile; // end of the loop. ?>
			</div><!-- #content -->
		</div><!-- #full -->
		
<?php get_footer(); ?>