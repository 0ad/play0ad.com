<?php
/*
Front page template file
*/

get_header(); ?>
		<div id="primary">
			<div id="content" role="main">
				<div id="slider">
					<?php echo do_shortcode( '[jj-ngg-jquery-carousel html_id="about-jcarousel" gallery="1" gap="10" width="150" height="100" visible="4" scroll="1" auto="03"]' ); ?>
				</div><!-- #carousel -->
				<div id="latest-update">
					<?php
					$args = array( 'numberposts' => 1, 'offset'=> 0, );
					$postslist = get_posts( $args );
					foreach ($postslist as $post) :  setup_postdata($post); ?> 
						<div>
							<h1 class="front-blog-title"> 
								<?php the_title(); ?>
							</h1>
							<div id="front-excerpt">
								<?php the_content( $more_link_text ); ?>
							</div><!-- #front-excerpt -->	
						</div>
				<?php endforeach; ?>	
				</div><!-- #latest -->
				<div id="next-update">
				<?php
					$args = array( 'numberposts' => 1, 'offset'=> 1,);
					$postslist = get_posts( $args );
					foreach ($postslist as $post) :  setup_postdata($post); ?> 
						<div>
							<h1 class="front-blog-title"> 
								<?php the_title(); ?>
							</h1>
							<div id="front-excerpt">
								<?php the_content( $more_link_text ); ?>
							</div><!-- #front-excerpt -->	
						</div>
				<?php endforeach; ?>
				</div><!-- #next-update -->					
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>