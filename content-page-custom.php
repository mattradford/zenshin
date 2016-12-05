<?php
/**
 * The template used for displaying custom page content in page-custom.php
 *
 * @package zenshin
 */

// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> <?php generate_article_schema( 'CreativeWork' ); ?>>
  <?php
  include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

  if ( is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {

    if(have_rows('page_sections')) {

      while ( have_rows('page_sections') ) {

        the_row();
        get_template_part( 'page-sections/content', get_row_layout() );

      }

    } // end of if content_row
  } // end "is ACF enabled?"
  ?>
</article>
