<?php
/**
 * Template Name: Archives
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WildfireGames
 * @subpackage Nova
 * @since Nova 0.4
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">				
				<article class="hentry">
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header>
					<div class="entry-content"> 
						
						<?php the_post(); the_content();  ?>
						
						<h2>Monthly Archive</h2>  
						<ul>
						<?php wp_get_archives('show_post_count=1'); ?>  
						</ul>
						<br> 
					
						<h2>Categories Archive</h2>
						<ul>  
						<?php wp_list_categories('show_post_count=1'); ?>   
						</ul>
						<br>
						 
					</div><!-- #entry-content -->
				</article><!-- .hentry -->
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>