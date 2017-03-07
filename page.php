<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header("interior"); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php if(have_posts()): the_post();
				get_template_part( 'template-parts/content', 'page' );

				if(is_page('test-stream')) { ?>
				<style>.embed-container { position: relative; padding-bottom: 56.25%; padding-top: 30px; height: 0; overflow: hidden; max-width: 100%; height: auto; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
				<div class='embed-container'>
				    <iframe frameborder="0" scrolling="no" align="middle"
				        src="http://player.piksel.com/player.php?p=dek7nez2&wmode=transparent&r=true"
				        height="400" width="640"
				        allowtransparency="true" allowfullscreen>
				    </iframe>
				</div>
				<?php }
			endif;?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
