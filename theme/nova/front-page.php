<?php
/*
 Front page template file
*/

get_header(); ?>
<div id="primary">
	<div id="content" role="main">
		<div id="carousel">
			<?php echo do_shortcode( '[jj-ngg-jquery-carousel html_id="about-jcarousel" gallery="1" gap="15" width="205" height="115" visible="3" scroll="1" auto="0" skin_class="jcarousel-skin-tango" wrap="both"]' ); ?>
		</div>
		<!-- #carousel -->
		<div id="latest-update">
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
		</div>
		<!-- #latest -->
		<div id="next-update">
			<?php
			$args = array( 'numberposts' => 2, 'offset'=> 1,);
			$postslist = get_posts( $args );
					foreach ($postslist as $post) :  setup_postdata($post); ?>
			<?php
			global $more;
			$more = 0;
			?>
			<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endforeach; ?>
		</div>
		<!-- #next-update -->
		
	</div>
	<!-- #content -->
</div>
<!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>