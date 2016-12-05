<section class="billboard">

	<?php
  if( get_sub_field( 'video' ) ) {
    the_sub_field( 'video' );
  }
  ?>

  <?php
  $image = get_sub_field( 'logo' );
  if ( ! empty( $image ) ) {
    $image_id = $image['id'];
    echo wp_get_attachment_image( $image_id, 'full' );
  }
  ?>

</section>
