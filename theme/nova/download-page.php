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
				<article class="hentry">
					<header class="entry-header">
						<div class="entry-tri"></div>
						<h1 class="entry-title"><?php the_title(); ?> <?php bloginfo('description'); ?></h1>
					</header><!-- .entry-header -->
					<div class="entry-content">
						 	
						<?php the_post(); the_content();  ?>
						
					</div><!-- #entry-content -->
				</article><!-- .hentry -->
			</div><!-- #content -->
		</div><!-- #full -->
		
<?php get_footer(); ?>