<?php
/*
 Front page template file
*/

get_header(); ?>
<div id="primary">
	<div id="content" role="main">
		<div id="carousel">
			<?php echo do_shortcode( '[jj-ngg-jquery-carousel html_id="about-jcarousel" gallery="1" gap="5" width="175" height="98" visible="4" scroll="1" auto="0" skin_class="jcarousel-skin-tango" wrap="both"]' ); ?>
		</div>
		<!-- #carousel -->
		<div id="updates">
			<?php
			$args = array( 'numberposts' => 3, 'offset'=> 0, 'category' => 1,3,4 );
			$postslist = get_posts( $args );
					foreach ($postslist as $post) :  setup_postdata($post); ?>
			<?php
			global $more;
			$more = 0;
			?>
			<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endforeach; ?>
		</div>
		<!-- #updates -->
		
	</div>
	<!-- #content -->
</div>
<!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>