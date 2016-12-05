<?php
/**
 * Template: Page Custom
 * The template used for displaying custom page content in page-custom.php
 *
 * @package zenshin
 */

// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> <?php generate_article_schema( 'CreativeWork' ); ?>>
	acf fields to go here
</article>
