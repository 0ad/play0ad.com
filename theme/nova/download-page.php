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
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->
					<div class="entry-content">
					
						<div id="dl-banner">
							<div id="dl-page-button">
								<h1 id="dl-title">Download</h1>
								<div id="dl-description">
									<?php bloginfo('description'); ?> <div id="dl-tag"></div><a href="http://trac.wildfiregames.com/wiki/LatestRelease">Other versions...</a>
								</div>
							</div><!-- Download Button -->
						</div><!-- Download Banner -->
						 	
						<?php the_post(); the_content();  ?>
						
					</div><!-- #entry-content -->
				</article><!-- .hentry -->
			</div><!-- #content -->
		</div><!-- #full -->
		
<?php get_footer(); ?>