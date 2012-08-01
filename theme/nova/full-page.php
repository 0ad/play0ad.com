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
				<article class="hentry">
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header>
					<div class="entry-content"> 
						<?php the_post(); the_content();  ?>
					</div><!-- #entry-content -->
				</article><!-- .hentry -->
			</div><!-- #content -->
		</div><!-- #full -->
		
<?php get_footer(); ?>