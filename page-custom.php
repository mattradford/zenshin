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

<div id="primary" <?php generate_content_class();?>>
  <main id="main" <?php generate_main_class(); ?>>
      <?php do_action('generate_before_main_content'); ?>

  			<?php while ( have_posts() ) : the_post(); ?>

  				<?php get_template_part( 'content', 'page-custom' ); ?>

  			<?php endwhile; ?>
        
      <?php do_action('generate_after_main_content'); ?>
		</main>
	</div>

<?php
get_footer();
