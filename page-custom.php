<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: Custom Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package GeneratePress
 */

// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;

get_header(); ?>

	<div id="primary">
		<main id="main">

			<?php
			while ( have_posts() ) :

				the_post();
				get_template_part( 'content', 'page-custom' );

			endwhile; // end of the loop.
			?>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
