<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WildfireGames
 * @subpackage Nova
 * @since Nova 0.2
 */
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<div class="entry-tri"></div>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<div class="entry-meta">
				<?php nova_posted_on(); ?> in <?php the_category(', ') ?>
			</div><!-- .entry-meta -->
		</header>
		<div class="entry-content">
			<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'nova' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'nova' ), '<span class="edit-link">', '</span>' ); ?>
			<div id="addthis">
				<div class="addthis_toolbox addthis_default_style ">
					<a class="addthis_button_preferred_1"></a>
					<a class="addthis_button_preferred_2"></a>
					<a class="addthis_button_preferred_3"></a>
					<a class="addthis_button_preferred_4"></a>
					<a class="addthis_button_compact"></a>
					<a class="addthis_counter addthis_bubble_style"></a>
				</div>
			</div>
			<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-501ddb880c45d1eb"></script>
		</footer><!-- .entry-meta -->
	</article><!-- #post-<?php the_ID(); ?> -->
