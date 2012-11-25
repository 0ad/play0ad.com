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
						<div class="entry-meta">
							<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.', 'nova' ); ?></p>
						</div><!-- .entry-meta -->
					</header><!-- .entry-header -->
				
					<div class="entry-content">
						<?php get_search_form(); ?>
				
						<?php the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 10 ), array( 'widget_id' => '404' ) ); ?>
				
						<div class="widget">
							<h2 class="widgettitle"><?php _e( 'Most Used Categories', 'nova' ); ?></h2>
							<ul>
								<?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 ) ); ?>
							</ul>
						</div>
				
						<?php
						/* translators: %1$s: smilie */
							$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives.', 'nova' ), convert_smilies( ':)' ) ) . '</p>';
							the_widget( 'WP_Widget_Archives', array('count' => 0 , 'dropdown' => 1 ), array( 'after_title' => '</h2>'.$archive_content ) );
							?>
				
							<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
				
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</section><!-- #full -->

<?php get_footer(); ?>