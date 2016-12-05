<section class="billboard">

  <?php
  $image = get_sub_field( 'logo' );
  if ( !empty( $image ) ) {
    print_r($image);
    $image_id = $image['ID'];
    echo wp_get_attachment( $image_id, 'full' );
  ?>
  <?php } ?>

</section>
