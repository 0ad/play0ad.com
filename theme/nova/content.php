<?php
/**
 * The default template for displaying content
 *
 * @package WildfireGames
 * @subpackage Nova
 * @since Nova 0.2
 */
?>



	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<div class="entry-tri"></div>
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'nova' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<div class="entry-meta">
				<?php nova_posted_on(); ?> in <?php the_category(', ') ?>
			</div><!-- .entry-meta -->
		</header>
		

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-content">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'nova' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'nova' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>
		
	</article><!-- #post-<?php the_ID(); ?> -->
