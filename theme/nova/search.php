<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WildfireGames
 * @subpackage Nova
 * @since Nova 0.2
 */

get_header(); ?>

		<section id="full">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'nova' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header>

				<?php nova_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content' ); ?>

				<?php endwhile; ?>

				<?php nova_content_nav( 'nav-below' ); ?>

			<?php else : ?>

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

			<?php endif; ?>

			</div><!-- #content -->
		</section><!-- #full -->

<?php get_footer(); ?>