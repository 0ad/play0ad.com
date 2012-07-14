<?php
/*
 * Template Name: PR
 * The template for displaying the press releases in Nova
 * 
 * @package WildfireGames
 * @subpackage Nova
 * @since Nova 0.4
*/

get_header(); ?>
<div id="primary">
	<div id="content" role="main">
		<div id="updates">
			<?php
			$args = array( 'numberposts' => 3, 'offset'=> 0, 'category' => 11,);
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