<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage WildfireGames
 * @since Nova 0.1
 */

get_header(); ?>

	<div id="full">
		<div id="content" role="main">

			<article id="post-0" class="post error404 not-found">
				<header class="entry-header">
					<div class="entry-tri"></div>
					<h1 class="entry-title"><?php _e( 'Nothing to see here folks.', 'nova' ); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<center>
						<p> It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help </p>
						<hr />
						<?php get_search_form(); ?>
						<hr />
					</center>
					
					<div class="archive-pg">
						<h3>Latest Posts</h3>   
						<ul>
						<?php wp_get_archives('type=postbypost&limit=5&format=html'); ?>
						</ul>
					</div>
					
					<div class="archive-pg">
						<h3>Monthly Archives</h3>  
						<ul>
						<?php wp_get_archives( 'type=monthly&format=html&show_post_count=1' ); ?>
						</ul>
					</div>
					
					<div class="archive-pg">
						<h3>Most Used Categories</h3>
						<ul>  
						<?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '' ) ); ?>   
						</ul>
					</div>

				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #full -->

<?php get_footer(); ?>