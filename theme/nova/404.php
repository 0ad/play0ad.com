<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WildfireGames
 * @subpackage Nova
 * @since Nova 0.2
 */

get_header(); ?>

	<div id="main">
		<div id="404">
		<article>
			<header class="entry-header">
				<h1 class="entry-title">This is somewhat embarrassing, isn&rsquo;t it?</h1>
			</header>
			<p>It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.</p>
			<?php get_search_form(); ?>
			<article>
		</div>
	</div><!-- main -->
<?php get_footer(); ?>