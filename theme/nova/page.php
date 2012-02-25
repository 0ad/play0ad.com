<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
<<<<<<< HEAD
 * 
 * @package WildfireGames
 * @subpackage Nova
 * @since Nova 0.2
=======
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
>>>>>>> parent of 4cea4e2... More work
 */

get_header(); ?>
		
		<div id="primary">
			<div id="content" role="main">
<<<<<<< HEAD
			
=======

>>>>>>> parent of 4cea4e2... More work
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

<<<<<<< HEAD
				<?php endwhile; // end of the loop. ?>
			</div><!-- #content -->
		</div><!-- #primary -->
		<div id="secondary" class="widget-area" role="complementary">
			<?php get_sidebar(universal); ?> 
		</div>
=======
					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->
>>>>>>> parent of 4cea4e2... More work

<?php get_footer(); ?>