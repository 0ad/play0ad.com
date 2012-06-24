<?php
/**
 * Template Name: News
 * The template for displaying the news pages in Nova
 * See design specs for details
 *
 * @package WildfireGames
 * @subpackage Nova
 * @since Nova 0.4
 */
?>
<?php get_header(); ?>
		<div id="primary">
			<div id="content" role="main">
				<p>This page is undergoing construction; its a mess right now.</p>
				<div class="news-row">
					<section class="news-one">
						<?php
						$args = array( 'numberposts' => 1, 'offset'=> 0, );
						$postslist = get_posts( $args );
								foreach ($postslist as $post) :  setup_postdata($post); ?>
						<?php
						global $more;
						$more = 0;
						?>
						<?php get_template_part( 'content', get_post_format() ); ?>
						<?php endforeach; ?>				
					</section>
				</div>
				<div class="news-row">
					<section class="news-two">
						<?php
						$args = array( 'numberposts' => 1, 'offset'=> 1, );
						$postslist = get_posts( $args );
								foreach ($postslist as $post) :  setup_postdata($post); ?>
						<?php
						global $more;
						$more = 0;
						?>
						<?php get_template_part( 'content', get_post_format() ); ?>
						<?php endforeach; ?>
					</section>
					<section class="news-two">
						<?php
						$args = array( 'numberposts' => 1, 'offset'=> 2, );
						$postslist = get_posts( $args );
								foreach ($postslist as $post) :  setup_postdata($post); ?>
						<?php
						global $more;
						$more = 0;
						?>
						<?php get_template_part( 'content', get_post_format() ); ?>
						<?php endforeach; ?>
					</section>
				</div>
				<div class="news-row">
					<section class="news-three">
						<?php
						$args = array( 'numberposts' => 1, 'offset'=> 3, );
						$postslist = get_posts( $args );
								foreach ($postslist as $post) :  setup_postdata($post); ?>
						<?php
						global $more;
						$more = 0;
						?>
						<?php get_template_part( 'content', get_post_format() ); ?>
						<?php endforeach; ?>
					</section>
					<section class="news-three">
						<?php
						$args = array( 'numberposts' => 1, 'offset'=> 4, );
						$postslist = get_posts( $args );
								foreach ($postslist as $post) :  setup_postdata($post); ?>
						<?php
						global $more;
						$more = 0;
						?>
						<?php get_template_part( 'content', get_post_format() ); ?>
						<?php endforeach; ?>
					</section>
					<section class="news-three">
						<?php
						$args = array( 'numberposts' => 1, 'offset'=> 5, );
						$postslist = get_posts( $args );
								foreach ($postslist as $post) :  setup_postdata($post); ?>
						<?php
						global $more;
						$more = 0;
						?>
						<?php get_template_part( 'content', get_post_format() ); ?>
						<?php endforeach; ?>
					</section>
				</div>
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>