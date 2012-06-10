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
				<section class="news-r1">
					<?php
						$args = array( 'numberposts' => 1, 'offset'=> 1,);
						$postslist = get_posts( $args );
						foreach ($postslist as $post) :  setup_postdata($post); ?> 
							<div class="news-container">
								<h1> 
									<?php the_title(); ?>
								</h1>
								<div>
									<?php the_excerpt(); ?>
								</div>
							</div>
					<?php endforeach; ?>
				</section>
				<section class="news-r2">
					<?php
						$args = array( 'numberposts' => 1, 'offset'=> 2,);
						$postslist = get_posts( $args );
						foreach ($postslist as $post) :  setup_postdata($post); ?> 
							<div class="news-container">
								<h1> 
									<?php the_title(); ?>
								</h1>
								<div>
									<?php the_excerpt(); ?>
								</div>
							</div>
					<?php endforeach; ?>
				</section>
				<section id="news-gap">
				</section>
				<section class="news-r2">
					<?php
						$args = array( 'numberposts' => 1, 'offset'=> 3,);
						$postslist = get_posts( $args );
						foreach ($postslist as $post) :  setup_postdata($post); ?> 
							<div class="news-container">
								<h1> 
									<?php the_title(); ?>
								</h1>
								<div>
									<?php the_excerpt(); ?>
								</div>
							</div>
					<?php endforeach; ?>
				</section>
				<section class="news-r3">
					<?php
						$args = array( 'numberposts' => 1, 'offset'=> 4,);
						$postslist = get_posts( $args );
						foreach ($postslist as $post) :  setup_postdata($post); ?> 
							<div class="news-container">
								<h1> 
									<?php the_title(); ?>
								</h1>
								<div>
									<?php the_excerpt(); ?>
								</div>
							</div>
					<?php endforeach; ?>
				</section>
				<section id="news-gap">
				</section>	
				<section class="news-r3">
					<?php
						$args = array( 'numberposts' => 1, 'offset'=> 5,);
						$postslist = get_posts( $args );
						foreach ($postslist as $post) :  setup_postdata($post); ?> 
							<div class="news-container">
								<h1> 
									<?php the_title(); ?>
								</h1>
								<div>
									<?php the_excerpt(); ?>
								</div>
							</div>
					<?php endforeach; ?>
				</section>
				<section id="news-gap">
				</section>
				<section class="news-r3">
				<p>Archives Button</p>
				</section>
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>