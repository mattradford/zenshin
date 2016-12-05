<?php
/**
 * Custom template for displaying ACF fields.
 *
 *
 * @package zenshin
 */

// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;

get_header(); ?>

	<div id="primary">
		<main id="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page-custom' ); ?>

			<?php endwhile; ?>

		</main>
	</div>

<?php
get_footer();
