<section class="billboard">

  <?php
  $image = get_sub_field( 'logo' );
  if ( !empty( $image ) ) {
    print_r($image);
    $image_id = $image['id'];
    echo wp_get_attachment_image( $image_id, 'full' );
  ?>
  <?php } ?>

</section>
