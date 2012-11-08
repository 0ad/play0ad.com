<?php
/**
 * Template Name: Download Page
 * The template for displaying the download page.
 *
 * @package WildfireGames
 * @subpackage Nova
 * @since Nova 0.4
 */

get_header(); ?>

		<div id="full">
			<div id="content" role="main">
				
				<div id="dl-banner">
					<div id="dl-button">
						<div id="dl-title">Download</div>
						<div id="dl-description"><?php bloginfo('description'); ?></div>
					</div><!-- Download Button -->
				</div><!-- Download Banner -->
				
				<!-- Page content below banner -->
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
				<?php endwhile; ?>
			
			</div><!-- #content -->
		</div><!-- #full -->
		
<?php get_footer(); ?>