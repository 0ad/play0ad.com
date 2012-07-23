<?php
/**
 * Template Name: Archives
 * The template for displaying Archive pages.
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
						
						<h2>Monthly Archives</h2>   
						<ul>
						<?php wp_get_archives( 'type=monthly&format=html&show_post_count=1' ); ?>
						</ul>
						<br> 
					
						<h2>Most Used Categories</h2>
						<ul>  
						<?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '' ) ); ?>   
						</ul>
						<br>
						 
					</div><!-- #entry-content -->
				</article><!-- .hentry -->
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>