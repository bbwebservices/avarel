<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}

if ( empty( $atts['image'] ) ) {
  $image = fw_get_framework_directory_uri('/static/img/no-image.png');
} else {
  $image = wp_get_attachment_image_src(cp_get_image_id($atts['image']['url']), 'team-member');
}

$twitter = $atts['twitter'];
$facebook = $atts['facebook'];
$dribbble = $atts['dribbble'];
$linkedin = $atts['linkedin'];
$instagram = $atts['instagram'];
$google_plus = $atts['google_plus'];
?>
<div class="team-member">
  <div class="member">
    <img src="<?php echo esc_url($image[0]); ?>" alt="">
    <ul class="member-social">
      <?php if ($twitter): ?>
      <li>
        <a href="<?php echo esc_url($twitter); ?>">
          <i class="ion-social-twitter"></i>
        </a>
      </li>
      <?php endif ?>
      <?php if ($facebook): ?>
      <li>
        <a href="<?php echo esc_url($facebook); ?>">
          <i class="ion-social-facebook"></i>
        </a>
      </li>
      <?php endif ?>
      <?php if ($dribbble): ?>
      <li>
        <a href="<?php echo esc_url($dribbble); ?>">
          <i class="ion-social-dribbble"></i>
        </a>
      </li>
      <?php endif ?>
    </ul>
  </div>
  <div class="member-info">
    <h5><?php echo esc_html($atts['name']); ?></h5>
    <div class="divider-small"></div>
    <h6><?php echo esc_html($atts['job']); ?></h6>
  </div>
</div>
