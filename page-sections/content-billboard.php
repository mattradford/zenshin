<section class="billboard">

  <?php
  $image = get_sub_field( 'logo' );
  if ( !empty( $image ) ) {
    print_r($image);
  ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
  <?php } ?>

</section>
