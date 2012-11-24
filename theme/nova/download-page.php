<?php
/**
 * Template Name: Download Page
 * The template for displaying the download page.
 *
 * @package WildfireGames
 * @subpackage Nova
 * @since Nova 0.4
 */

get_header(); ?>

		<div id="full">
			<div id="content" role="main">				
				<article class="hentry">
					<header class="entry-header">
						<div class="entry-tri"></div>
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->
					<div class="entry-content">
					
						<div id="dl-banner">
							<a id="dl-page-button" href="#"></a><!-- Used by embedded Javascript -->
							
							<script type="text/javascript">
								var OSName = "Unknown OS";
							
								if (navigator.platform.indexOf("Win") !== -1) { OSName = "Windows"; }
								if (navigator.platform.indexOf("Mac") !== -1) { OSName = "MacOS"; }
								if (navigator.platform.indexOf("Linux") !== -1) { OSName = "Linux"; }
							
								if (OSName.indexOf("Windows") !== -1)
								{
									document.getElementById("dl-page-button").innerHTML= 'Download for Windows <br><a href="http://trac.wildfiregames.com/wiki/LatestRelease">Other versions</a>';
									document.getElementById("dl-page-button").href = '#';
								}
							
								if (OSName.indexOf("MacOS") !== -1)
								{
									document.getElementById("dl-page-button").innerHTML = 'Download for Mac OS X <br><a href="http://trac.wildfiregames.com/wiki/LatestRelease">Other versions</a>';
									document.getElementById("dl-page-button").href ='#';
								}
							
								if (OSName.indexOf("Linux") !== -1)
								{
									document.getElementById("dl-page-button").innerHTML = 'Download for Linux <br><a href="http://trac.wildfiregames.com/wiki/LatestRelease">Other versions</a>';
									document.getElementById("dl-page-button").href = '#';
								}
							</script>
							
						</div><!-- Download Banner -->
						 	
						<?php the_post(); the_content();  ?>
						
					</div><!-- #entry-content -->
				</article><!-- .hentry -->
			</div><!-- #content -->
		</div><!-- #full -->
		
<?php get_footer(); ?>