<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$location = array(
  'data-lat' => ($atts) ? $atts['lat'] : '',
  'data-lng' => ($atts) ? $atts['lng'] : '',
);

?>
<div id="google-container" <?php echo fw_attr_to_html($location); ?>></div>
<div id="cd-zoom-in"></div>
<div id="cd-zoom-out"></div>
<div class="address">
  <div class="container">
    <div class="row">
      <?php if ($atts['phone']): ?>
      <div class="col-md-4">
        <div class="address-item">
          <i class="ion-ios-telephone-outline"></i>
          <h6><?php echo esc_html($atts['phone']); ?></h6>
        </div>
      </div>
      <?php endif ?>
      <div class="col-md-4">
        <div class="address-item">
          <i class="ion-ios-location-outline"></i>
          <h6><?php if($atts && $atts['address']) echo esc_html($atts['address']); ?></h6>
        </div>
      </div>
      <?php if ($atts['mail']): ?>
      <div class="col-md-4">
        <div class="address-item">
          <i class="ion-ios-email-outline"></i>
          <h6><?php echo esc_html($atts['mail']); ?></h6>
        </div>
      </div>
      <?php endif ?>
    </div>
  </div>
</div>
