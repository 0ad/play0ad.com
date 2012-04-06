<?php
/*
Front page template file
*/

get_header(); ?>
		<div id="primary">
			<div id="content" role="main">
				<div id="carousel">
					<?php echo do_shortcode('[jj-ngg-jquery-carousel html_id="carousel" gallery="1" width="600" height="338" scroll="1" auto="3" skin_class="jcarousel-skin-nova"]');?>
				</div><!-- #carousel -->
				<div id="latest-update">
				<?php $posts_array = get_posts( 'numberposts' => 5, 'offset'=> 1, 'category' => 1 ); ?>
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
								<?php the_excerpt(); ?>
							</div><!-- #front-excerpt -->	
						</div>
				<?php endforeach; ?>
				</div><!-- #next-update -->					
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>