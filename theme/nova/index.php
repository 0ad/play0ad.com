<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WildfireGames
 * @subpackage Nova
 * @since Nova 0.2
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'post' ); ?>
				<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar( universal); ?>
<?php get_footer(); ?>